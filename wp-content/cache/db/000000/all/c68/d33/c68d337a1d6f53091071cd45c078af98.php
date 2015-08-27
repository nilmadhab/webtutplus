oj�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (672,238,648,588)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"238";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 18:54:37";s:13:"post_date_gmt";s:19:"2015-07-11 18:54:37";s:12:"post_content";s:13037:"<p>Hey folks, you know how much we hate page reloading in every single clicks. We want a smooth browsing experience. Here ajax comes to play. It can load a div without refreshing the whole page asynchronously.</p>
<p>[button colour="grey" type="squarearrow" size="large" link="http://demo.webtutplus.com/ajax_delete/" target="_blank"]Demo[/button]</p>
<p>[button colour="purple" type="squarearrow" size="large" link="http://demo.webtutplus.com/ajax_delete.zip" target="_blank"]Download code[/button]</p>
<p>Previously we have deleted the post from our blog by going to another page, deleting it and coming back to same page. There was page refresh. Today we will delete the content without reloading the page. Cool right?</p>
<p><a href="http://webtutplus.com/delete-post-from-your-blog/" target="_blank">Please refer to this link to previous delete post tutorial.</a></p>
<p>Please refer to <a href="http://www.w3schools.com/ajax/" target="_blank">ajax </a>tutorial if you are entirely unfailiar with ajax.</p>
<p>We will be using jquery ajax method, which makes our work very simple.</p>
<p>Jquery ajax is basically simple four lines of code. Lets see a sample code</p>
<pre class="prettyprint lang-javascript">$.ajax({

  url: "test.php", // the ajax request goes to the url

  type: "POST", // type can be post or get, default is get

    data: {id : "1"}, // we pass some data in the url

  success: function(html){

    $("#results").append(html); // whatever data is prinited  in 

    // requested url returned here  

  }

});</pre>
<p>I have commented each of four lines to describe what is going on. Lets see ajax into action.</p>
<p>Download the sample blog post from <a href="http://demo.webtutplus.com/blog.zip" target="_blank">here</a> .</p>
<p><span style="color: #eb2626;"><strong><span style="text-decoration: underline;">Make sure to change connection to database according to your local  computer.</span></strong></span></p>
<p>You can refer to <a href="http://webtutplus.com/php-create-your-own-blog/" target="_blank">blog</a> here. We will continue from here. Add delete button and remove post from database and reload content without refeshing the page.</p>
<p>Make sure  the blog is up and running in your localhost. Now we will add delete button and add ajax action.</p>
<h2><strong>Step 1:- Add delete button and pass post_id as parameter to javascript function.</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Lets break down the step into sub steps.</p>
<ol>
<li>We will add delete button beside each posts.</li>
<li>we will call an onclick js function which will take post_id as parameter. Lets call it delete_ajax().</li>
<li>Inside delete_ajax function, we will declear our jquery ajax function.</li>
<li>Make sure to add jquery file to make this work.</li>
</ol>
<p>Add the jquery online link in head.</p>
<pre class="prettyprint lang-javascript"><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script></pre>
<p>Here is the code and screenshot so far.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>



 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <?php 

ini_set('display_errors', true);



$result=mysql_connect( 'localhost','root','')or die("cannot connect");

if (!$result) {

return false;

}

if (!mysql_select_db('blog',$result)){

return false;

}

$conn= $result;

?>

</head>

<body>

<?php 

if(isset($_POST['submit'])){

$title = mysql_real_escape_string($_POST['title']);

$post = mysql_real_escape_string($_POST['post']);



$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";

$result = mysql_query($sql,$conn);



if($result){



}else{

echo "failed to insert data ".mysql_error($conn);

}





}

?>



<div class="container">

<h2 style="text-align:center"> Welcome to my blog </h2>

<div class="container">

<form action="" method="post" style="width:50%; margin: 0 auto;">

  <div class="form-group">

    <label for="exampleInputEmail1">Title</label>

    <input type="text" class="form-control" name="title"  placeholder="Enter title">

  </div>

  <div class="form-group">

    <label for="exampleInputPassword1">Post </label>

 

     <textarea class="form-control" rows="3" name="post"> write your post</textarea>

  </div>

  

  <button type="submit" name="submit" class="btn btn-info">New post</button>

</form>

</div>

<table class="table table-striped">

      <thead>

        <tr>

          <th>#</th>

          <th>Title</th>

          <th>Post</th>

          

        </tr>

      </thead>

      <tbody>

      <?php 

      $sql = "SELECT * FROM Posts";

      if($result = mysql_query($sql,$conn)){

while($row = mysql_fetch_array($result)){

echo "<tr>";

echo "<td>{$row['post_id']}</td>";

echo "<td>{$row['title']}</td>";

echo "<td>{$row['post']}</td>";



echo "</tr>";

}

}

      ?>

        

        </tbody>

    </table>

</div>



</body>

</html></pre>
<p>&nbsp;</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/ajax_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/ajax_1-1024x518.png" alt="ajax_1" width="1024" height="518" class="alignnone size-large wp-image-239" /></a></p>
<p>After line 147 we will call  our js function.</p>
<pre class="prettyprint lang-php">$post_id  = $row['post_id'];

echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>

Delete</span></td>";</pre>
<p>Then below that inside a script tag we declare our javascript delete_ajax function.</p>
<p>We are printing the post_id in console. Refesh the page and press "CTRL+ALT+J" in chrome to see the console. Alternatively you can go to console in this way  right click-&gt;inspect elements-&gt;console. Click in the delete buttons after adding a few post. You will see something like this. <a href="http://webtutplus.com/wp-content/uploads/2015/07/ajax_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/ajax_2-1024x518.png" alt="ajax_2" width="1024" height="518" class="alignnone size-large wp-image-242" /></a></p>
<p>In case if you dont follow , I am posting the entire code. Comment below if you have any doubts till now. I have commented in critical portions of the code.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>



 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <?php 

ini_set('display_errors', true);



$result=mysql_connect( 'localhost','root','')or die("cannot connect");

if (!$result) {

return false;

}

if (!mysql_select_db('blog',$result)){

return false;

}

$conn= $result;

?>

</head>

<body>

<?php 

if(isset($_POST['submit'])){

$title = mysql_real_escape_string($_POST['title']);

$post = mysql_real_escape_string($_POST['post']);



$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";

$result = mysql_query($sql,$conn);



if($result){



}else{

echo "failed to insert data ".mysql_error($conn);

}





}

?>



<div class="container">

<h2 style="text-align:center"> Welcome to my blog </h2>

<div class="container">

<form action="" method="post" style="width:50%; margin: 0 auto;">

  <div class="form-group">

    <label for="exampleInputEmail1">Title</label>

    <input type="text" class="form-control" name="title"  placeholder="Enter title">

  </div>

  <div class="form-group">

    <label for="exampleInputPassword1">Post </label>

 

     <textarea class="form-control" rows="3" name="post"> write your post</textarea>

  </div>

  

  <button type="submit" name="submit" class="btn btn-info">New post</button>

</form>

</div>

<table class="table table-striped">

      <thead>

        <tr>

          <th>#</th>

          <th>Title</th>

          <th>Post</th>

          

        </tr>

      </thead>

      <tbody id="refresh">

      <?php 

      $sql = "SELECT * FROM Posts";

      if($result = mysql_query($sql,$conn)){

while($row = mysql_fetch_array($result)){

echo "<tr>";

echo "<td>{$row['post_id']}</td>";

echo "<td>{$row['title']}</td>";

echo "<td>{$row['post']}</td>";

$post_id  = $row['post_id'];

echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>

Delete</span></td>"; // pass post_id as parameter and add class to button

// to make the button look nice.

echo "</tr>";

}

}

      ?>

        

        </tbody>

        <script type="text/javascript">

        function delete_ajax(post_id){ // here is my js function which takes post id as parameter

        var post_id = post_id;

        console.log("delete post " + post_id); // print post id in console by console.log function

        $.ajax({

  url: "delete.php", // we will delete the post inside delete.php file

  type: "get", 

    data: { id : post_id}, // lets pass the post id to be deleted here.

  success: function(html){

    $("#refresh").load("reload.php"); // we will reload the tbody by reload.php  

  }

});

        }

        </script>

    </table>

</div>



</body>

</html></pre>
<p>Remember console.log is your friend in javascript. It comes very useful when we need to debug. Lets move to next step.</p>
<h2><strong>Step 2:- Jquery ajax to delete the post and refresh the div.</strong></h2>
<hr />
<p>Lets break down this step into small steps.</p>
<ol>
<li>Delete the post.</li>
<li>Refresh the table body.</li>
</ol>
<p>Lets give an id to table body. Lets give it id "refresh", as we are going to reload it after deleting the post.</p>
<pre class="prettyprint lang-javascript"><tbody id="refresh"></pre>
<p>Lets delete the post by ajax and reload the tbody.</p>
<pre class="prettyprint lang-javascript">function delete_ajax(post_id){ // here is my js function which takes post id as parameter

        var post_id = post_id;

        console.log("delete post " + post_id); // print post id in console by console.log function

        $.ajax({

  url: "delete.php", // we will delete the post inside delete.php file

  type: "get", 

    data: { id : post_id}, // lets pass the post id to be deleted here.

  success: function(html){

    $("#refresh").load("reload.php"); // we will reload the tbody by reload.php  

  }

});

        }</pre>
<p>We are calling  two php file to delete and reload the page. lets create those.</p>
<h3><span style="text-decoration: underline;"><span style="color: #ff0000; text-decoration: underline;">delete.php</span></span></h3>
<pre class="prettyprint lang-php"><?php 



// make database connection

$conn=mysql_connect( 'localhost','root','')or die("cannot connect");

if (!$conn) {

return false;

}

// select database

if (!mysql_select_db('blog',$conn)){

return false;

}



$post_id = $_GET['id']; // store post_id in a varible



$sql = "DELETE FROM `posts` WHERE post_id = '$post_id'"; // sql command to delete



$result = mysql_query($sql,$conn); // execute the sql command







?></pre>
<h3><span style="text-decoration: underline; color: #ff0000;">reload.php</span></h3>
<pre class="prettyprint lang-php"><?php 



// make database connection

$conn=mysql_connect( 'localhost','root','')or die("cannot connect");

if (!$conn) {

return false;

}

// select database

if (!mysql_select_db('blog',$conn)){

return false;

}



 $sql = "SELECT * FROM Posts";

      if($result = mysql_query($sql,$conn)){

while($row = mysql_fetch_array($result)){

echo "<tr>";

echo "<td>{$row['post_id']}</td>";

echo "<td>{$row['title']}</td>";

echo "<td>{$row['post']}</td>";

$post_id  = $row['post_id'];

echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>

Delete</span></td>"; // pass post_id as parameter and add class to button

// to make the button look nice.

echo "</tr>";

}

}



?></pre>
<p>&nbsp;</p>
<p>As you can see the php files are pretty straightforward. I am getting the post_id in delete.php and deleting it. Reload.php is even easier. I just made the database connection and  copy pasted original php code inside tbody there.</p>
<p>That it. Carefully make changes in databse connection. You can even write a separate connect.php file containing database connection and include it in every file.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";s:10:"post_title";s:32:"Delete post of your page by ajax";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:57:"delete-post-of-your-page-by-ajax-good-bye-page-refreshing";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:24:11";s:17:"post_modified_gmt";s:19:"2015-07-16 19:24:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=238";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"588";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-07-28 15:41:01";s:13:"post_date_gmt";s:19:"2015-07-28 10:11:01";s:12:"post_content";s:4241:"Hello everyone.

In this tutorial we shall see how to send an SMS to any mobile phone by means of PHP

[button colour="purple" type="squarearrow" size="large" link="http://demo.webtutplus.com/sms/sms.zip" target="_blank"]Download code[/button]

We will make use of ViaNett SMS Services so first you need to open an account in <a href="http://www.vianett.com/" target="_blank">Vianett.com</a>

&nbsp;

<strong>Step 1</strong>-For this tutorial we have made use of a demonstration account on ViaNett where you will be provided with 5 free  sms. We will test our code with that. Click on Free trial for a free account

[caption id="attachment_589" align="aligncenter" width="1024"]<img class="size-large wp-image-589" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-112-1024x455.png" alt="ViaNett Website" width="1024" height="455" /> ViaNett Website[/caption]

&nbsp;

<strong>Step 2</strong>-After completing the registration your demo account will be ready and you will be using the username and password in the code.

[caption id="attachment_590" align="aligncenter" width="1024"]<img class="size-large wp-image-590" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-113-1024x488.png" alt="Register for a free demo account" width="1024" height="488" /> Register for a free demo account[/caption]

<strong>Step 3-</strong>Google for <strong>ViaNettSMS.php</strong> file. It consists of the source code you will be requiring for the sms integration, We will be making use of HTTP API for SMS sending. Google the php file and download it.

<strong>Step 4</strong>-Code the HTML form. Basically it will consist of a simple form with a field for number and message body.
<div class="jumbotron">
<h1>Sending SMS by PHP</h1>
</div>
<form class="form-horizontal" action="testm.php" method="post">//Message Body Input
<table>
<tbody>
<tr>
<td>
<h3>Number</h3>
</td>
<td>//Phone Number Input</td>
</tr>
<tr>
<td style="width: 300px;">
<h3>Message body</h3>
</td>
<td><textarea class="form-control" style="height: 300px; width: 300px;" name="b"></textarea></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td colspan="2"><button class="btn btn-success" type="submit">Submit</button> <button class="btn btn-danger" type="reset">Reset</button></td>
</tr>
</tbody>
</table>
</form><strong>THE HTML FORM </strong>

&nbsp;

<strong>Step 5</strong>-Set the form action to the php file which will send the sms. Lets name it testm.php

&nbsp;

<strong>Step 6</strong>-In testm.php put the following code
<pre class="prettyprint lang-php">SendSMS($MsgSender, $DestinationAddress, $Message); 

    // Check result object returned and give response to end user according to success or not. 

    if ($Result-&gt;Success == true) 

        $Message = "Message successfully sent!"; 

    else 

        $Message = "Error occured while sending SMS
Errorcode: " . $Result-&gt;ErrorCode . "
Errormessage: " . $Result-&gt;ErrorMessage; 

} 

catch (Exception $e) 

{ 

    //Error occured while connecting to server. 

    $Message = $e-&gt;getMessage(); 

} 

 

?&gt; 

 

 

     

     

     

<!--?php 

echo "          &lt;p&gt;&lt;strong&gt;SMS Result&lt;/strong&gt;&lt;br ?-->Status: $Message"; 

?&gt; 

     

</pre>
<strong>THE PHP SCRIPT TO SEND THE SMS</strong>

&nbsp;

After this when you execute the sms will be sent to the number you had given in the form. It will look somewhat like this

[caption id="attachment_591" align="aligncenter" width="1024"]<img class="size-large wp-image-591" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-114-1024x519.png" alt="The HTML Form to Send SMS" width="1024" height="519" /> The HTML Form to Send SMS[/caption]

&nbsp;

&nbsp;

[caption id="attachment_592" align="aligncenter" width="540"]<img class="size-full wp-image-592" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot_2015-07-28-15-34-15.png" alt="Message Successfully Sent" width="540" height="960" /> Message Successfully Sent[/caption]

&nbsp;

For Free Trials you get 5 sms free. You have to purchase for sending more than 5 sms from the ViaNett website.";s:10:"post_title";s:18:"Sending SMS by PHP";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:15:"sending-sms-php";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 11:16:58";s:17:"post_modified_gmt";s:19:"2015-08-08 05:46:58";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=588";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"648";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-07 09:39:31";s:13:"post_date_gmt";s:19:"2015-08-07 04:09:31";s:12:"post_content";s:16955:"Hi friends today we will add a new and exiting feature in our existing e-commerce. We will filter the products based on what category they belong. Please refer to below tutorial if you missed the first part of the e commerce.
<h5><a href="http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/">Lets build an E Commerce Website : part-1</a></h5>
[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part3/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part3.zip" target="_blank"]Download Code[/button]

Lets understand how we are going to do that from database point of view. We will create two tables to store categories and which product goes to which category.
<pre class="lang:default decode:true ">CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;</pre>
<pre class="lang:default decode:true ">CREATE TABLE IF NOT EXISTS `product_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;</pre>
<h2><span style="color: #ff0000;">Step 2:-  Add option of adding category in admin panel.</span></h2>

<hr />

&nbsp;

Add the following code in admin.php form
<pre class="lang:default decode:true ">&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;br /&gt;&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;"  &gt; 
					    		&lt;?php echo $row['name']; ?&gt;

			&lt;?php
			}
		}
			?&gt;</pre>
And save when the form is submitted.
<pre class="lang:default decode:true ">$product_id =  mysqli_insert_id($conn);
							$categories = $_POST['cat'];
							foreach ($categories as $key ) {
								$sql = "INSERT INTO `product_cat`( `product_id`, `categories_id`) 
								VALUES ('$product_id','$key')";
								echo $sql;
								if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							}
</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_1.png"><img class="alignnone size-large wp-image-653" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_1-1024x576.png" alt="ecomm_part3_1" width="1024" height="576" /></a>

So the code of admin panel becomes
<h3><span style="color: #ff0000;">Admin.php</span></h3>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Develop An E commerce Store&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
&lt;div class="container" style="margin-top:100px"&gt;
&lt;?php include("connect.php")  ?&gt;

	&lt;?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] &gt; 0) { // if error &gt; 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "&lt;br /&gt;";
			} else {
			   
			    $image_name = $_FILES['file']['name'];
			     // store image name 
                $pn=mysqli_real_escape_string($conn,$_POST['naam']);
                // clean name 
                $pc=mysqli_real_escape_string($conn,$_POST['cate']);
				$p=mysqli_real_escape_string($conn,$_POST['pr']);

			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" &amp;&amp; $imageFileType != "png" &amp;&amp; $imageFileType != "jpeg"
				&amp;&amp; $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.&lt;br /&gt;";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "Product Image is ok"."&lt;br /&gt;";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        $sql = "INSERT INTO products (image_name,pname,pdesc,price)
							VALUES ('$new_name','$pn','$pc','$p')";

							if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							$product_id =  mysqli_insert_id($conn);
							$categories = $_POST['cat'];
							foreach ($categories as $key ) {
								$sql = "INSERT INTO `product_cat`( `product_id`, `categories_id`) 
								VALUES ('$product_id','$key')";
								echo $sql;
								if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							}



				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.&lt;br /&gt;";
				    }
				}
			}
		} 
	?&gt;
	&lt;/div&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li &gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;
	&lt;div class="container" style="margin-top:0px"&gt;
		&lt;h2 style="text-align:center"  class="bg-success"&gt; Upload a new product&lt;/h2&gt;
	&lt;div class="container"&gt;
		&lt;form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto"&gt;

		  &lt;div class="form-group"&gt;
                  &lt;label for="exampleInputFile"&gt; Product Name &lt;/label&gt;  
               &lt;input type="text" class="form-control" name="naam" required&gt;
          &lt;label for="exampleInputFile"&gt;Product Description &lt;/label&gt;  
           &lt;textarea class="form-control"  name="cate" rows="5" id="comment"&gt;&lt;/textarea&gt;
		
		  &lt;label for="exampleInputFile"&gt;Product Price &lt;/label&gt; 
		 &lt;input type="number" min="10" class="form-control" name="pr" required&gt;
		    &lt;label for="exampleInputFile"&gt;Upload Product Image&lt;/label&gt;
		    &lt;input type="file" class="form-control" name="file" id="exampleInputFile" required&gt;
		   
		  &lt;/div&gt;
		  &lt;div class="form-group"&gt;
		  &lt;label for="exampleInputFile"&gt;Add relevent categories&lt;/label&gt;
		  	&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;br /&gt;&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;"  &gt; 
					    		&lt;?php echo $row['name']; ?&gt;

			&lt;?php
			}
		}
			?&gt;

		  &lt;/div&gt;
		 
		  
		  &lt;button type="submit" name="upload" class="btn btn-info" &gt;Add new product&lt;/button&gt;
		&lt;/form&gt;
	&lt;/div&gt;

	&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
Step 3:- We will implement check box type filter based on product category.

We have to write a form which will be submitted by get method when anyone clicks the check box
<pre class="lang:default decode:true ">&lt;form action="" method="get"&gt;
					&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//&lt;?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      	&lt;!-- check whether checkbox is selected or not --&gt;

						      	&lt;?php 
						      		if(in_array($row['id'], $cat)){
						      			?&gt;
						      			 &lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" checked&gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      			&lt;?php
						      		}else{?&gt;
						      		&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" &gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      		&lt;?php
						      	}	
						      	?&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;
					    	&lt;?php
					    	
					    }
					} 
					?&gt;
					
				&lt;/form&gt;</pre>
And based on what categories are checked we have to filter the products.
<pre class="lang:default decode:true ">&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) &gt; 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
					    		echo '&lt;div class="row" &gt;';
					    	}
					    	
					    	$image = "images/".$row['image_name'];
					        echo '&lt;div class="col-sm-3 image" &gt;';
					        $product_id = $row['id'];
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
					      		  /&gt;&lt;/a&gt;';
					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
					        echo '&lt;/div&gt;';


					        if($count %3 == 2){
					    		echo '&lt;/div &gt;';
					    	}
					    	$count +=1;
			         

					    }
					} else {
					    echo "No Products";
					}
					?&gt;</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_2.png"><img class="alignnone size-large wp-image-656" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_2-1024x576.png" alt="ecomm_part3_2" width="1024" height="576" /></a>

Thats it. Here is complete code of index.php
<h3><span style="color: #ff0000;">index.php</span></h3>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    &lt;/style&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-sm-3"&gt;
				&lt;h2 class="bg-info"&gt;Category &lt;/h2&gt; 
				&lt;form action="" method="get"&gt;
					&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//&lt;?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      	&lt;!-- check whether checkbox is selected or not --&gt;

						      	&lt;?php 
						      		if(in_array($row['id'], $cat)){
						      			?&gt;
						      			 &lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" checked&gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      			&lt;?php
						      		}else{?&gt;
						      		&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" &gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      		&lt;?php
						      	}	
						      	?&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;
					    	&lt;?php
					    	
					    }
					} 
					?&gt;
					
				&lt;/form&gt;
			&lt;/div&gt;
			&lt;div class="col-sm-9"&gt;
				&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) &gt; 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
					    		echo '&lt;div class="row" &gt;';
					    	}
					    	
					    	$image = "images/".$row['image_name'];
					        echo '&lt;div class="col-sm-3 image" &gt;';
					        $product_id = $row['id'];
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
					      		  /&gt;&lt;/a&gt;';
					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
					        echo '&lt;/div&gt;';


					        if($count %3 == 2){
					    		echo '&lt;/div &gt;';
					    	}
					    	$count +=1;
			         

					    }
					} else {
					    echo "No Products";
					}
					?&gt;
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;";s:10:"post_title";s:50:"E commerce, part 3. Lets add filtering of products";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:36:"add-filter-based-category-e-commerce";s:7:"to_ping";s:0:"";s:6:"pinged";s:71:"
http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/";s:13:"post_modified";s:19:"2015-08-09 10:18:07";s:17:"post_modified_gmt";s:19:"2015-08-09 04:48:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=648";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"672";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-08 10:00:11";s:13:"post_date_gmt";s:19:"2015-08-08 04:30:11";s:12:"post_content";s:11009:"Hello everyone, continuing with our e-commerce website building tutorial this is one more tutorial which will teach you how to how to hover zoom your product image from the details page

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part2/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part2.zip" target="_blank"]Download Code[/button]

&nbsp;

Recall the fact that we had a details.php section in our previous tutorials of e-commerce websites where each product details were displayed individually when the image of the product was clicked. Now we will use a jQuery zoom plugin in that file in order to hover zoom images from the details.php page

<strong>Step 1-</strong>Upgrade the details.php page accordingly
<h2><span style="color: #ff0000;">details.php</span></h2>
<pre class="lang:php decode:true" title="Details.php updated with the jquery code">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Details &lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;style&gt;
		/* styles unrelated to zoom */
		

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		
	&lt;/style&gt;
	&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
	&lt;script src='jquery.zoom.js'&gt;&lt;/script&gt;
	&lt;script&gt;
		$(document).ready(function(){
			$('#image').zoom(); //zoom plugin applied on the image
			
		});
	&lt;/script&gt;

&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
		&lt;?php
		if(isset($_GET['product_id'])){
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM images WHERE id='$product_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	?&gt;
		    	&lt;div class="container"&gt;
		    	&lt;div class="col-sm-6"&gt;
		    		&lt;span class='zoom' id='image'&gt;
		    		&lt;?php echo '&lt;img src="'.$image.'"style="width:400px;" /&gt;';?&gt;
		    		&lt;/span&gt;
		    	&lt;/div&gt;
		    	&lt;div class="col-sm-6"&gt;
		    	&lt;?php 
		    		 echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
			       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
			        echo '&lt;p&gt;'.$row['pdesc'].'&lt;/p&gt; ';
		        ?&gt;
		    	&lt;/div&gt;
		    	&lt;/div&gt;
         
		    	&lt;?php
		    }
		} else {
		    echo "No Products";
		}
		?&gt;
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 2-</strong>Include the following jquery code to add the hover zoom plugin
<h2><span style="color: #ff0000;">jQuery.zoom.js</span></h2>
<pre class="lang:default decode:true ">/*!
	Zoom 1.7.14
	license: MIT
	http://www.jacklmoore.com/zoom
*/
(function ($) {
	var defaults = {
		url: false,
		callback: false,
		target: false,
		duration: 120,
		on: 'mouseover', // other options: grab, click, toggle
		touch: true, // enables a touch fallback
		onZoomIn: false,
		onZoomOut: false,
		magnify: 2
	};

	// Core Zoom Logic, independent of event listeners.
	$.zoom = function(target, source, img, magnify) {
		var targetHeight,
			targetWidth,
			sourceHeight,
			sourceWidth,
			xRatio,
			yRatio,
			offset,
			$target = $(target),
			position = $target.css('position'),
			$source = $(source);

		// The parent element needs positioning so that the zoomed element can be correctly positioned within.
		$target.css('position', /(absolute|fixed)/.test(position) ? position : 'relative');
		$target.css('overflow', 'hidden');

		img.style.width = img.style.height = '';

		$(img)
			.addClass('zoomImg')
			.css({
				position: 'absolute',
				top: 0,
				left: 0,
				opacity: 0,
				width: img.width * magnify,
				height: img.height * magnify,
				border: 'none',
				maxWidth: 'none',
				maxHeight: 'none'
			})
			.appendTo(target);

		return {
			init: function() {
				targetWidth = $target.outerWidth();
				targetHeight = $target.outerHeight();

				if (source === $target[0]) {
					sourceWidth = targetWidth;
					sourceHeight = targetHeight;
				} else {
					sourceWidth = $source.outerWidth();
					sourceHeight = $source.outerHeight();
				}

				xRatio = (img.width - targetWidth) / sourceWidth;
				yRatio = (img.height - targetHeight) / sourceHeight;

				offset = $source.offset();
			},
			move: function (e) {
				var left = (e.pageX - offset.left),
					top = (e.pageY - offset.top);

				top = Math.max(Math.min(top, sourceHeight), 0);
				left = Math.max(Math.min(left, sourceWidth), 0);

				img.style.left = (left * -xRatio) + 'px';
				img.style.top = (top * -yRatio) + 'px';
			}
		};
	};

	$.fn.zoom = function (options) {
		return this.each(function () {
			var
			settings = $.extend({}, defaults, options || {}),
			//target will display the zoomed image
			target = settings.target || this,
			//source will provide zoom location info (thumbnail)
			source = this,
			$source = $(source),
			$target = $(target),
			img = document.createElement('img'),
			$img = $(img),
			mousemove = 'mousemove.zoom',
			clicked = false,
			touched = false,
			$urlElement;

			// If a url wasn't specified, look for an image element.
			if (!settings.url) {
				$urlElement = $source.find('img');
				if ($urlElement[0]) {
					settings.url = $urlElement.data('src') || $urlElement.attr('src');
				}
				if (!settings.url) {
					return;
				}
			}

			(function(){
				var position = $target.css('position');
				var overflow = $target.css('overflow');

				$source.one('zoom.destroy', function(){
					$source.off(".zoom");
					$target.css('position', position);
					$target.css('overflow', overflow);
					$img.remove();
				});
				
			}());

			img.onload = function () {
				var zoom = $.zoom(target, source, img, settings.magnify);

				function start(e) {
					zoom.init();
					zoom.move(e);

					// Skip the fade-in for IE8 and lower since it chokes on fading-in
					// and changing position based on mousemovement at the same time.
					$img.stop()
					.fadeTo($.support.opacity ? settings.duration : 0, 1, $.isFunction(settings.onZoomIn) ? settings.onZoomIn.call(img) : false);
				}

				function stop() {
					$img.stop()
					.fadeTo(settings.duration, 0, $.isFunction(settings.onZoomOut) ? settings.onZoomOut.call(img) : false);
				}

				// Mouse events
				if (settings.on === 'grab') {
					$source
						.on('mousedown.zoom',
							function (e) {
								if (e.which === 1) {
									$(document).one('mouseup.zoom',
										function () {
											stop();

											$(document).off(mousemove, zoom.move);
										}
									);

									start(e);

									$(document).on(mousemove, zoom.move);

									e.preventDefault();
								}
							}
						);
				} else if (settings.on === 'click') {
					$source.on('click.zoom',
						function (e) {
							if (clicked) {
								// bubble the event up to the document to trigger the unbind.
								return;
							} else {
								clicked = true;
								start(e);
								$(document).on(mousemove, zoom.move);
								$(document).one('click.zoom',
									function () {
										stop();
										clicked = false;
										$(document).off(mousemove, zoom.move);
									}
								);
								return false;
							}
						}
					);
				} else if (settings.on === 'toggle') {
					$source.on('click.zoom',
						function (e) {
							if (clicked) {
								stop();
							} else {
								start(e);
							}
							clicked = !clicked;
						}
					);
				} else if (settings.on === 'mouseover') {
					zoom.init(); // Preemptively call init because IE7 will fire the mousemove handler before the hover handler.

					$source
						.on('mouseenter.zoom', start)
						.on('mouseleave.zoom', stop)
						.on(mousemove, zoom.move);
				}

				// Touch fallback
				if (settings.touch) {
					$source
						.on('touchstart.zoom', function (e) {
							e.preventDefault();
							if (touched) {
								touched = false;
								stop();
							} else {
								touched = true;
								start( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
							}
						})
						.on('touchmove.zoom', function (e) {
							e.preventDefault();
							zoom.move( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
						});
				}
				
				if ($.isFunction(settings.callback)) {
					settings.callback.call(img);
				}
			};

			img.src = settings.url;
		});
	};

	$.fn.zoom.defaults = defaults;
}(window.jQuery));
</pre>
Once your done run the website and go to the details page of any product

[caption id="attachment_673" align="aligncenter" width="1024"]<img class="size-large wp-image-673" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-121-1024x424.png" alt="The Main Page" width="1024" height="424" /> The Main Page[/caption]

&nbsp;

[caption id="attachment_674" align="aligncenter" width="1024"]<img class="size-large wp-image-674" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-122-1024x424.png" alt="Details page of a particular product. On hovering the mos over the product It will zoom the image" width="1024" height="424" /> Details page of a particular product. On hovering the mouse over the product It will zoom the image[/caption]";s:10:"post_title";s:35:"ecommerce part -2 , add zoom effect";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"ecommerce-part-2-add-zoom-effect";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 10:54:34";s:17:"post_modified_gmt";s:19:"2015-08-08 05:24:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=672";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:16955;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:57;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:71;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}