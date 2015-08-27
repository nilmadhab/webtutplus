O��U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:188:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'create-your-own-web-application-using-app-script' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"416";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-25 16:48:25";s:13:"post_date_gmt";s:19:"2015-07-25 11:18:25";s:12:"post_content";s:8921:"<p>Last time we saw some application of app-script. This is a good one and you can make many unique web applications using google app-script. Here I am going to discuss about a Transactions recorder.</p>
<p><span>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/expences" target="_blank"]DEMO[/button]</span><span>  <span>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/<span>expences</span>.zip" target="_blank"]Download Code[/button]</span></span></p>
<p>The good thing here is you can add data to the google spreadsheet from a web application and later you can also open the sheet to process more on the data. Think creative and you can make exiting application using google app-script.</p>
<p><strong>1. Creating a web application.</strong></p><p>Login Screen Design Credits : <a href="http://codepen.io/Lewitje/" target="_blank">http://codepen.io/Lewitje</a></p>
<pre class="prettyprint lang-javascript">
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    
    	<link rel="stylesheet" href="style.css">
	</head>

  <body>

    <div class="wrapper">
	<div class="container">
		
		<h2> Hey!! Man </h2>
		<form class="form" method="post" action="https://script.google.com/macros/s/AKfycbzjUyjQoG4EKuHfD7u7hXmfpqn0sL9bs5v4SsYWccMJ1PkzXsY/exec">
		
			<input type="radio" name="type" value="Account A" size="30"> Online
			
			<input type="radio" name="type" value="Account B" size="30" checked> Wallet 
			<input type="text" name = "for" placeholder="For what cause" required>
			<input type="text" name = "cost" placeholder="Amount of Transaction" required>
			<button type="submit" name = "login" id="login-button">Submit</button>
			<button type="submit"><a href="https://docs.google.com/spreadsheets/d/1CGZRwapyOJ7ovkAn2TcFpf7rZrZDkkHW_wI_iBugKgQ/edit#gid=0">Records</a></button>
		</form>
		
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	</div>
		<script src="index.js"></script>
</body>
</html>


</pre>
<p>Reference to the original Login Screen work : <a href="http://codepen.io/Lewitje/full/BNNJjo" target="_blank">http://codepen.io/Lewitje/full/BNNJjo</a></p><p><strong>2. App Script </strong></p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/Untitled1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/Untitled1-1024x600.png" alt="Untitled" width="1024" height="600" class="alignnone size-large wp-image-491" /></a></p>
<p>This is a google app script which will take GET or POST requests and use those values to insert into the google sheet and for custom formatting.</p>
<p>Create a Google Spreadsheet. Then Follow Tools -&gt; Script Editor.</p>
<p>This is place where you are to add code for the google sheet. </p>
<pre class="prettyprint lang-javascript">function doPost(e) {

  var params = JSON.stringify(e);

  

  var url = 'https://docs.google.com/spreadsheets/d/1CGZRwapyOJ7ovkAn2TcFpf7rZrZDkkHW_wI_iBugKgQ/edit#gid=0';

  var ss = SpreadsheetApp.openByUrl(url);



  var sheet = ss.getSheets()[0];

  

  //parametes being passed by POST request.

  var usedfor = e['parameter']['for'];

  var type = e['parameter']['type'];

  var cost = e['parameter']['cost'];

  var date = new Date();

  

  sheet.appendRow([date,usedfor , type ,cost]);

  var ActiveRow = sheet.getLastRow() - 1;

  var prevval = sheet.getRange("E"+ActiveRow).getValue();

  var cell = sheet.getRange("E"+(ActiveRow+1));

  

  

  if(type=="Wallet")

  {

    sheet.getRange("C"+(ActiveRow+1)).setBackground('blue');

    cell.setValue(parseInt(cost)+parseInt(prevval));

  }

  else

  {

    sheet.getRange("C"+(ActiveRow+1)).setBackground('yellow');

    cell.setValue(parseInt(prevval));

  }

  

  if(parseInt(cost) > 0)

    sheet.getRange("D"+(ActiveRow+1)).setBackground('green');

  else

    sheet.getRange("D"+(ActiveRow+1)).setBackground('red');

  

  // Get the email address of the active user - that's you.

  //var email = Session.getActiveUser().getEmail();



  // Get the name of the document to use as an email subject line.

  //var subject = ss.getName();



  // Append a new string to the "url" variable to use as an email body.

  //var body = 'Link to your sheet that has been edited : ' + url;



  // Send yourself an email with a link to the document.

  //GmailApp.sendEmail(email, subject, body);

  

  return HtmlService.createHtmlOutput('Added Successfully <button><a href="http://demo.webtutplus.com/expences">Add More</a></button> <button type="submit"><a href="https://docs.google.com/spreadsheets/d/1CGZRwapyOJ7ovkAn2TcFpf7rZrZDkkHW_wI_iBugKgQ/edit#gid=0">Records</a></button>');

}

function doGet(e) {

  var params = JSON.stringify(e);

  

  var url = 'https://docs.google.com/spreadsheets/d/1CGZRwapyOJ7ovkAn2TcFpf7rZrZDkkHW_wI_iBugKgQ/edit#gid=0';

  var ss = SpreadsheetApp.openByUrl(url);



  var sheet = ss.getSheets()[0];

  

  //parametes being passed by POST request.

  var usedfor = e['parameter']['for'];

  var type = e['parameter']['type'];

  var cost = e['parameter']['cost'];

  var date = new Date();

  

  sheet.appendRow([date,usedfor , type ,cost]);

  var ActiveRow = sheet.getLastRow() - 1;

  var prevval = sheet.getRange("E"+ActiveRow).getValue();

  var cell = sheet.getRange("E"+(ActiveRow+1));

  cell.setValue(parseInt(cost)+parseInt(prevval));

  

  if(type=="Wallet")

    sheet.getRange("C"+(ActiveRow+1)).setBackground('blue');

  else

    sheet.getRange("C"+(ActiveRow+1)).setBackground('yellow');

  

  if(parseInt(cost) > 0)

    sheet.getRange("D"+(ActiveRow+1)).setBackground('green');

  else

    sheet.getRange("D"+(ActiveRow+1)).setBackground('red');

  

  // Get the email address of the active user - that's you.

  //var email = Session.getActiveUser().getEmail();



  // Get the name of the document to use as an email subject line.

  //var subject = ss.getName();



  // Append a new string to the "url" variable to use as an email body.

  //var body = 'Link to your sheet that has been edited : ' + url;



  // Send yourself an email with a link to the document.

  //GmailApp.sendEmail(email, subject, body);

  

  return HtmlService.createHtmlOutput('Added Successfully <button><a href="http://demo.webtutplus.com/expences">Add More</a></button><button type="submit"><a href="https://docs.google.com/spreadsheets/d/1CGZRwapyOJ7ovkAn2TcFpf7rZrZDkkHW_wI_iBugKgQ/edit#gid=0">Records</a></button>');

}

</pre>
<p><span style="color: #ff0000;">Understanding the code :</span></p>
<p><strong>doPost(e)</strong></p>
<p>This is a function for taking POST requests. The variable e contains all the variables sent through POST request.</p>
<p><strong>doGet(e) </strong></p>
<p><span>This is a function for taking GET requests. The variable e contains all the variables sent through GET request.</span></p>
<p><strong>var usedfor = e['parameter']['for'];</strong></p>
<p><strong> var type = e['parameter']['type'];</strong></p>
<p><strong> var cost = e['parameter']['cost'];</strong></p>
<p>This is how you get to access the variables passed through get or post request. Use parameter and then the variable name you used to pass the variable.</p>
<p><strong>if(parseInt(cost) &gt; 0)</strong></p>
<p><strong> sheet.getRange("D"+(ActiveRow+1)).setBackground('green');</strong></p>
<p><strong> else</strong></p>
<p><strong> sheet.getRange("D"+(ActiveRow+1)).setBackground('red');</strong></p>
<p>This is the area you may want to edit. Depending on your input you can set the background color or if you need to do some different calculation. Add all that part here. </p>
<p><strong>return HtmlService.createHtmlOutput('Added Successfully &lt;button&gt;&lt;a href="http://demo.webtutplus.com/expences"&gt;Add More&lt;/a&gt;&lt;/button&gt; &lt;button type="submit"&gt;&lt;a href="https://docs.google.com/spreadsheets/d/1CGZRwapyOJ7ovkAn2TcFpf7rZrZDkkHW_wI_iBugKgQ/edit#gid=0"&gt;Records&lt;/a&gt;&lt;/button&gt;');</strong></p>
<p>This is output of the function, which is html. So you are free to add any html code you wish to add here. You can create your own's webpage and return it from here. As for the application I am showing a success message and Link to add more records as well as link to the spreadsheet.</p>
<p><span style="color: #993366;">If you looking out to create any such application using google app script. Remember me I am here to help through it. You can make many crazy application using app-script and in addition can use direct features provided in spreadsheets. </span></p>
<p>&nbsp;</p>
";s:10:"post_title";s:48:"Create your own web application using app script";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:48:"create-your-own-web-application-using-app-script";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-06 18:40:57";s:17:"post_modified_gmt";s:19:"2015-08-06 13:10:57";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=416";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:8921;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:48;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:48;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}