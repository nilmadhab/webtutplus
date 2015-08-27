pèÝU<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:153:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'google-charts' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"479";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-25 14:46:51";s:13:"post_date_gmt";s:19:"2015-07-25 09:16:51";s:12:"post_content";s:11941:"Hey Friends, today we will create charts using google chart api. Suppose there is a shop, which sells many products. Today we will show how to represent the number of product sold, in each category by google charts. Cool right? For example, lets say flipkart sold 100 computers, 1000 mobile phone, 50 earphones, 90 key board yesterday. We will represent it in chart.

&nbsp;

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_chart/" target="_blank"]DEMO[/button]

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_chart.zip" target="_blank"]Download Code[/button]
<h2>Step 1:- Create database and table</h2>

<hr />

Lets create a database and table to store the name of product and how many products sold.
<pre class="prettyprint lang-mysql">CREATE TABLE IF NOT EXISTS `chart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;



INSERT INTO `chart` ( `product_name`, `quantity`) VALUES
( 'mobile phone', 1000),
('computers', 100),
( 'earphones', 50),
( 'key board', 90);

</pre>
<h2>2. Draw a simple google chart</h2>

<hr />

[caption id="attachment_531" align="alignnone" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/google_chart.png"><img class="size-large wp-image-531" src="http://webtutplus.com/wp-content/uploads/2015/07/google_chart-1024x576.png" alt="google chart" width="1024" height="576" /></a> google chart[/caption]

&nbsp;

Lets start with a simple google bar chart. I have commented in important places in the code.
<pre class="prettyprint lang-html "><script src="https://www.google.com/jsapi" type="text/javascript"></script><!-- this js file is required to draw google chart --><script type="text/javascript">// <![CDATA[
google.load('visualization', '1', {packages: ['corechart', 'bar']}); 		google.setOnLoadCallback(draw); // on loading call draw function function draw(y) { 	// draw google chart      var data = google.visualization.arrayToDataTable([ 		        ['Product', 'quantity', ], // first row is title 		        ['Phone', 50], // add product and number of item sold  		        ['computer', 100], 		        ['footwares', 100], 		        ['speaker', 160], 		        ['dress', 100] 		      		      ]);       var options = {         chart: {           title: 'Sell per day ', // set title 		                 },         hAxis: { // horizontal axis options are set here  		          title: 'number of items sold for each product ', 		          minValue: 0 		        }, 		         bars: 'vertical', 		        vAxis: {  // verticle axis options are set here  		          title: 'product' // verticle axis is product  		        },         bars: 'vertical', // keep the chart verticle                };       var chart = new google.charts.Bar(document.getElementById('chart_div'));       // draw the chart in chart_div        chart.draw(data, options); // set the options     }
// ]]></script>
<div class="container">
<h1 class="bg-info" style="text-align: center;">Google chart to show sell per product</h1>
<div id="chart_div" style="width: 700px; height: 350px; margin: 0 auto; margin-top: 20px;"></div>
<!-- this container contains the google chart -->

</div>
</pre>
<h2>Step 3:- Hook up data of the google chart with mysql database</h2>

<hr />

&nbsp;

A simple google chart is ok, but often data displayed in google chart is dynamic, fetched from database which changes regularly and graph also gets updated.

So we will connect our chart with mysql. We will use mysqli functions.

We will make database connection at first.
<pre class="prettyprint lang-php"><!--?php      // make databse connection  	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); 	if (!$conn) { 		echo "cannot connect"; 	} 	?--></pre>
Now we will fetch the data dynamically from chart table, which we created earlier.
<pre class="prettyprint lang-php"><!--?php  		$sql = "SELECT * FROM chart"; 		$result = mysqli_query($conn, $sql); 		if (mysqli_num_rows($result) &gt; 0) { 		    // output data of each row 		    while($row = mysqli_fetch_assoc($result)) { 		    	 		    	$product = $row['product_name']; // get product name 		    	$quantity = $row['quantity']; // get product quantity 		    	echo "['$product','$quantity'],"; // display product and quantity  		    } 		}  		?--></pre>
Here is the complete code till now
<pre class="prettyprint lang-html"><script src="https://www.google.com/jsapi" type="text/javascript"></script><!-- this js file is required to draw google chart --> <!--?php      // make databse connection  	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); 	if (!$conn) { 		echo "cannot connect"; 	} 	?--><script type="text/javascript">// <![CDATA[
google.load('visualization', '1', {packages: ['corechart', 'bar']});
		google.setOnLoadCallback(draw); // on loading call draw function

function draw(y) {
	// draw google chart
     var data = google.visualization.arrayToDataTable([
		        ['Product', 'quantity', ], // first row is title
		        <?php 		$sql = "SELECT * FROM chart"; 		$result = mysqli_query($conn, $sql); 		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	
		    	$product = $row['product_name']; // get product name
		    	$quantity = $row['quantity']; // get product quantity
		    	echo "['$product','$quantity'],"; // display product and quantity 
		    }
		} 
		?>
		     
		      ]);

      var options = {
        chart: {
          title: 'Sell per day ', // set title
		        
        },
        hAxis: { // horizontal axis options are set here 
		          title: 'number of items sold for each product ',
		          minValue: 0
		        },
		         bars: 'vertical',
		        vAxis: {  // verticle axis options are set here 
		          title: 'product' // verticle axis is product 
		        },
        bars: 'vertical', // keep the chart verticle
        
      };
      var chart = new google.charts.Bar(document.getElementById('chart_div'));
      // draw the chart in chart_div 
      chart.draw(data, options); // set the options
    }
// ]]></script></pre>
<div class="container">
<h1 class="bg-info" style="text-align: center;">Google chart to show sell per product</h1>
<div id="chart_div" style="width: 700px; height: 350px; margin: 0 auto; margin-top: 20px;"></div>
<!-- this container contains the google chart -->

</div>
<h2>Step 4 :- Create a form so that user can add new item</h2>

<hr />

&nbsp;

So far so good. Now we will create a form so that we can add new items in the chart and we will display it in the chart.

Create a form to create new items.
<pre class="prettyprint lang-php">
<form class="form-inline" action="" method="post">
<div class="form-group"><label>New product name </label> <input class="form-control" style="width: 300px;" name="product_name" required="" type="text" placeholder="Enter product name" /></div>
<div class="form-group"><label>Quantity</label> <input class="form-control" style="width: 300px;" max="500" name="qunatity" required="" type="number" placeholder="quantity below 500" /></div>
<button class="btn btn-success" name="add" type="submit">Add item </button>

</form>When the form is submitted save the product name and quantityÂ Â in database. Thats it, it will be automatically displayed.
	<!--?php  	if(isset($_POST['add'])){ // check whether the form is submitted or not 		$product_name = mysqli_real_escape_string($conn,$_POST['product_name']); 		// filter product name  		$quantity = mysqli_real_escape_string($conn,$_POST['qunatity']); 		// filter product quantity 		 $sql = "INSERT INTO `chart`( `product_name`, `quantity`)  		 VALUES ('$product_name','$quantity')"; 		 // save product and quantity in databade 		if (mysqli_query($conn, $sql)) { 		    echo "New record created successfully&lt;br ?-->";
		} else {
		    echo "Error: " . $sql . "
" . mysqli_error($conn);
		}
	}
	?&gt;</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/07/google_chart_2.png"><img class="alignnone size-large wp-image-534" src="http://webtutplus.com/wp-content/uploads/2015/07/google_chart_2-1024x576.png" alt="google_chart_2" width="1024" height="576" /></a>

Here is the complete code
<pre class="prettyprint lang-html"><script src="https://www.google.com/jsapi" type="text/javascript"></script><!-- this js file is required to draw google chart --> <!--?php      ini_set('display_errors', true);      // make databse connection  	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); 	if (!$conn) { 		echo "cannot connect"; 	} 	?--> <!--?php  	if(isset($_POST['add'])){ // check whether the form is submitted or not 		$product_name = mysqli_real_escape_string($conn,$_POST['product_name']); 		// filter product name  		$quantity = mysqli_real_escape_string($conn,$_POST['qunatity']); 		// filter product quantity 		 $sql = "INSERT INTO `chart`( `product_name`, `quantity`)  		 VALUES ('$product_name','$quantity')"; 		 // save product and quantity in databade 		if (mysqli_query($conn, $sql)) { 		    echo "New record created successfully&lt;br ?-->"; } else { echo "Error: " . $sql . " " . mysqli_error($conn); } } ?&gt;<script type="text/javascript">// <![CDATA[
google.load('visualization', '1', {packages: ['corechart', 'bar']});
		google.setOnLoadCallback(draw); // on loading call draw function

function draw(y) {
	// draw google chart
     var data = google.visualization.arrayToDataTable([
		        ['Product', 'quantity', ], // first row is title
		        <?php 		$sql = "SELECT * FROM chart"; 		$result = mysqli_query($conn, $sql); 		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	
		    	$product = $row['product_name']; // get product name
		    	$quantity = $row['quantity']; // get product quantity
		    	echo "['$product','$quantity'],"; // display product and quantity 
		    }
		} 
		?>
		     
		      ]);

      var options = {
        chart: {
          title: 'Sell per day ', // set title
		        
        },
        hAxis: { // horizontal axis options are set here 
		          title: 'number of items sold for each product ',
		          minValue: 0
		        },
		         bars: 'vertical',
		        vAxis: {  // verticle axis options are set here 
		          title: 'product' // verticle axis is product 
		        },
        bars: 'vertical', // keep the chart verticle
        
      };
      var chart = new google.charts.Bar(document.getElementById('chart_div'));
      // draw the chart in chart_div 
      chart.draw(data, options); // set the options
    }
// ]]></script></pre>
<div class="container">
<h1 class="bg-info" style="text-align: center;">Google chart to show sell per product</h1>
<div id="chart_div" style="width: 700px; height: 350px; margin: 0 auto; margin-top: 20px;"></div>
<!-- this container contains the google chart -->

</div>
<div class="container" style="margin-top: 100px;"><form class="form-inline" action="" method="post">
<div class="form-group"><label>New product name </label> <input class="form-control" style="width: 300px;" name="product_name" required="" type="text" placeholder="Enter product name" /></div>
<div class="form-group"><label>Quantity</label> <input class="form-control" style="width: 300px;" max="500" name="qunatity" required="" type="number" placeholder="quantity below 500" /></div>
<button class="btn btn-success" name="add" type="submit">Add item </button>

</form></div>
&nbsp;

&nbsp;";s:10:"post_title";s:13:"Google charts";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"google-charts";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-12 16:09:39";s:17:"post_modified_gmt";s:19:"2015-08-12 10:39:39";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=479";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:11941;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}