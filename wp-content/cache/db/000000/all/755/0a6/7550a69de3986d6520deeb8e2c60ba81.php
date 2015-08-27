y|�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:56:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (15,606,238)";s:11:"last_result";a:3:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"15";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-02 16:57:39";s:13:"post_date_gmt";s:19:"2015-07-02 16:57:39";s:12:"post_content";s:5363:"Suppose you have a website which has many pictures. As you know Pin interest is one of the trending platform for pining and sharing pictures, lets learn how to pin pictures of your web site in pin interest. Also suppose you want to pin each image separately, i.e you want separate pin buttons for separate images. Lets do it.

&nbsp;
<p style="text-align: center;">[button colour="green" type="squarearrow" size="large" link="http://demo.webtutplus.com/pin/" target="_blank"]Demo[/button]
[button colour="green" type="squarearrow" size="large" link="http://demo.webtutplus.com/pin.zip" target="_blank"]Download[/button]</p>
&nbsp;
<p style="text-align: left;">1. Lets add some image, which we are going to pin. We will use bootstrap to rapidly create the structure.</p>

<pre class="prettyprint lang-html">    
    <!-- Latest compiled and minified CSS -->

<div class="container" style="margin-top: 50px;">
<div class="col-sm-4"><img src="P1.jpg" alt="" width="200" /></div>
<div class="col-sm-4"><img src="P2.jpg" alt="" width="200" /></div>
<div class="col-sm-4"><img src="P3.jpg" alt="" width="200" /></div>
</div>
</pre>
As you can see the code is pretty straight forward. We included a bootstrap css file, made a container, divided into 3 parts by using "col-sm-4" class. Those who are not familiar with bootstrap please check our bootstrap tutorial or visit to w3schools.

&nbsp;

<img class="aligncenter wp-image-41 size-medium" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/pin_webtut1-300x169.png" alt="pin_webtut1" width="300" height="169" />

&nbsp;

2. As you can see, we have added 3 images in our website, now it is time to add the pin interest button.

Add this javascript snippet to your code anywhere.
<pre class="prettyprint lang-javascript"><!-- Please call pinit.js only once per page --><script src="//assets.pinterest.com/js/pinit.js" async="" defer="defer" type="text/javascript"></script></pre>
3. Now it is time to add the buttons below each images and pass the image url in that button.

Add this code snippet below each image.

&nbsp;
<pre class="prettyprint lang-html"> 

 <a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP2.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">

<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></pre>
As you can guess the url is the absolute path to your code and media is path to your image and description is just description. These are in url encoded form. If we decode we will get
<pre class="prettyprint lang-html"></pre>

Just go to this <a href="http://www.url-encode-decode.com/" target="_blank">Website </a> Paste above code and url encode it and then add it to your website. Make sure to give path to media and path for your website correctly.

3. Now add the snippet below each image and change it for every image depending on image path. If you have many images you can make it dynamic using php.

So ultimately your code will be

<pre class="prettyprint lang-html"><!-- Latest compiled and minified CSS -->

<div class="container" style="margin-top: 50px;">
<div class="col-sm-4"><img src="P1.jpg" alt="" width="200" />
<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP1.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">
<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></div>
<div class="col-sm-4"><img src="P2.jpg" alt="" width="200" />
<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP2.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">
<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></div>
<div class="col-sm-4"><img src="P3.jpg" alt="" width="200" />
<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP3.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">
<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></div>
<!-- Please call pinit.js only once per page --><script src="//assets.pinterest.com/js/pinit.js" async="" defer="defer" type="text/javascript"></script>

</div>
</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/07/with_buttons.png"><img class="alignnone size-medium wp-image-63" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/with_buttons.png" alt="with_buttons" width="600" /></a>

&nbsp;

<a href="http://webtutplus.com/wp-content/uploads/2015/07/pin2.png"><img class="alignnone size-medium wp-image-65" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/pin2.png" alt="pin2" width="600" /></a>";s:10:"post_title";s:49:"Share a picture from your website to pin interest";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"share-a-picture-from-your-website-to-pin-interest";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 22:21:18";s:17:"post_modified_gmt";s:19:"2015-08-07 16:51:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://webtutplus.in/?p=15";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"238";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 18:54:37";s:13:"post_date_gmt";s:19:"2015-07-11 18:54:37";s:12:"post_content";s:13037:"<p>Hey folks, you know how much we hate page reloading in every single clicks. We want a smooth browsing experience. Here ajax comes to play. It can load a div without refreshing the whole page asynchronously.</p>
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
";s:10:"post_title";s:32:"Delete post of your page by ajax";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:57:"delete-post-of-your-page-by-ajax-good-bye-page-refreshing";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:24:11";s:17:"post_modified_gmt";s:19:"2015-07-16 19:24:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=238";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"606";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-02 08:34:41";s:13:"post_date_gmt";s:19:"2015-08-02 03:04:41";s:12:"post_content";s:12877:"Hello everyone, today we shall show how to build a e commerce website step by step. This tutorial will cover the techniques you can use to upload your product details and display them.

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm/" target="_blank"]DEMO[/button] [button colour="lightblue" type="squarearrow" size="large" link="https://github.com/nilmadhab/ecomm_part1" target="_blank"]Github Link[/button]
 [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm.zip" target="_blank"]Download Code[/button]

<strong>Step 1</strong>-Create a table in MySQL database named 'images'. It should contain the following fields.

Product ID,Product Name,Product Category,Product Image Name. Set the id field as auto increment=1 which will generate a unique id for every product
<pre class="lang:mysql decode:true">CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(300) NOT NULL,pname varchar(40),pcat varchar(40),price int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

</pre>
Now we will create the main screen of the website which will look something like this

&nbsp;

[caption id="attachment_610" align="aligncenter" width="1024"]<img class="size-large wp-image-610" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-115-1024x465.png" alt="A snapshot of the demo website " width="1024" height="465" /> A snapshot of the demo website[/caption]

&nbsp;

<strong>Step 2</strong>-Create a php file named connect which will help you to link your code with the database containing the images table
<h3><span style="text-decoration: underline;"><span style="color: #ff0000; text-decoration: underline;">connect.php</span></span></h3>
<pre class="lang:php decode:true ">	&lt;?php 

	$conn=mysqli_connect( 'localhost','root','mysql password','database name')or die("cannot connect");  //connect to the database using the required details
	if (!$conn) {
		echo "cannot connect";
	}


	?&gt;</pre>
<strong>Step 3- </strong>Create a php file named index.php which will store product details of all uploaded products (name,category,price and image)
<h3><span style="text-decoration: underline;">index.php</span></h3>
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;My Image galary&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;   //includes the connect.php in this file

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;   //Link to index.php for product information
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;           
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;         //Link to admin.php for product upload
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
		&lt;?php
		$sql = "SELECT * FROM images";      //extracting image details from the table
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) //run the loop to display the contents of the table
 {
		    	$image = "images/".$row['image_name']; //images folder contain the images you upload this helps to extract the required image by using the name of the image
		        echo '&lt;div class="col-sm-4"&gt;';
		        $product_id = $row['id'];  //stores the product id of a particular product
		        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;&lt;img src='.$image.'  //this makes the image a hyperlink for a zoomed display tracking the product by product id
		         style="width:300px;max-height:300px" /&gt;&lt;/a&gt;';
		        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
		       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
		        echo '&lt;p&gt;'.$row['pcat'].'&lt;/p&gt; &lt;/div&gt;';
         

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
&nbsp;

<strong>Step 4</strong>-Create admin.php a file that will be used as an uploader to upload  new product details to the e-commerce website
<h3><span style="text-decoration: underline;">admin.php</span></h3>
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Develop An E commerce Store&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
&lt;?php include("connect.php")  ?&gt; //include the connect.php file into this file

	&lt;?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] &gt; 0) { // if error &gt; 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "&lt;br /&gt;";
			} else {
			   
			    $image_name =  $_FILES['file']['name']; // store image name 
                            $pn=$_POST['naam'];
                             $pc=$_POST['cate'];
$p=$_POST['pr'];

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
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) //to check whether files have been shifted from temporary storage location to the target file
 {
					 	// move the file from temo location to image folder
				        $sql = "INSERT INTO images (image_name,pname,pcat,price) // moving the values into a table
							VALUES ('$new_name','$pn','$pc','$p')";

							if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;"; //Successful creation of record
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.&lt;br /&gt;";
				    }
				}
			}
		} 
	?&gt;
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
	&lt;div class="container"&gt;
		&lt;h2 style="text-align:center"  class="bg-success"&gt; Upload a new product&lt;/h2&gt;
	&lt;div class="container"&gt;
		&lt;form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto"&gt; //Form for uploading a new product details

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
		 
		  
		  &lt;button type="submit" name="upload" class="btn btn-info" &gt;Upload&lt;/button&gt;
		&lt;/form&gt;
	&lt;/div&gt;

	&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 5</strong>-For individual product detail display create a separate file called details.php. In index.php each image is inserted in a &lt;a&gt; tag which has a link redirecting to details.php along with the product id of that particular product for a separate display of each individual product
<h3><span style="text-decoration: underline;">details.php</span></h3>
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;My Image galary&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
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
		if(isset($_GET['product_id'])) //obtaining the product_id from the details page in order to identify the image
{
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM images WHERE id='$product_id' ";  //displaying the particular image required by searching with the help of product id
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	?&gt;
		    	&lt;div class="container"&gt;                                              
		    	&lt;div class="col-sm-6"&gt;
		    		&lt;?php echo '&lt;img src='.$image.' style="width:300px;" /&gt;';?&gt;    //display required product image
		    	&lt;/div&gt;
		    	&lt;div class="col-sm-6"&gt;     //product details to be displayed here                                         
		    	&lt;?php    
		    		 echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;'; 
			       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
			        echo '&lt;p&gt;'.$row['pcat'].'&lt;/p&gt; ';
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
This will complete the product uploading portion of the e-commerce website

[caption id="attachment_612" align="aligncenter" width="1024"]<img class="size-large wp-image-612" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-117-1024x366.png" alt="Uploading A Product" width="1024" height="366" /> Uploading A Product[/caption]

[caption id="attachment_613" align="aligncenter" width="1024"]<img class="size-large wp-image-613" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-119-1024x428.png" alt="Product Uploaded" width="1024" height="428" /> Product Uploaded[/caption]

<strong>NOTE : </strong>Wherever you store the php files make sure you create a folder called images because the uploaded files will be transferred to a folder called images.";s:10:"post_title";s:41:"Lets build an E Commerce Website : part-1";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"e-commerce-website-building-tutorial-set-part-1";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-22 22:50:49";s:17:"post_modified_gmt";s:19:"2015-08-22 17:20:49";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=606";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13037;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:49;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:57;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:3;s:10:"return_val";i:3;}