���U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (718,394,238,708)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"238";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 18:54:37";s:13:"post_date_gmt";s:19:"2015-07-11 18:54:37";s:12:"post_content";s:13037:"<p>Hey folks, you know how much we hate page reloading in every single clicks. We want a smooth browsing experience. Here ajax comes to play. It can load a div without refreshing the whole page asynchronously.</p>
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
";s:10:"post_title";s:32:"Delete post of your page by ajax";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:57:"delete-post-of-your-page-by-ajax-good-bye-page-refreshing";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:24:11";s:17:"post_modified_gmt";s:19:"2015-07-16 19:24:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=238";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"394";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-22 22:20:03";s:13:"post_date_gmt";s:19:"2015-07-22 16:50:03";s:12:"post_content";s:12764:"<p>Hey friends today we will learn how to upload an image in php and display all images in a nice way. </p>
<p>&nbsp;</p>
<p><span>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/image_galary/" target="_blank"]DEMO[/button]</span><span>  <span>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/image_galary.zip" target="_blank"]Download Code[/button]</span></span></p>
<p>&nbsp;</p>
<p>Here is the overview what we are going to do.</p>
<ol>
<li>At first we will create a form and using form we will upload the image in server.</li>
<li>Then we will save the image in a folder and store the image name in mysql.We will use mysqli as mysql is depreciated </li>
<li>Then we will display all the images.</li>
</ol>
<p>As usual we will start with a basic bootstrap template. Easy and simple. We have created a simple form with enctype="multipart/form-data" to upload the image file. </p>
<p>&nbsp;</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>

 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>


<div class="container">
<h2 style="text-align:center"  class="bg-success"> Welcome to my Image galary </h2>
<div class="container">
<form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto">

  <div class="form-group">
    <label for="exampleInputFile">Upload  image  in galary</label>
    <input type="file" name="file" id="exampleInputFile">
    <p class="help-block">Upload your image </p>
  </div>
 
  
  <button type="submit" name="upload" class="btn btn-info" >Upload</button>
</form>
</div>
<div class="container">
<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>


</div>
</div>

</body>
</html></pre>
[caption id="attachment_395" align="alignnone" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_1-1024x576.png" alt="image galary first image" width="1024" height="576" class="size-large wp-image-395" /></a> image galary first image[/caption]
<h2>Step 2: Upload the image and save it in images folder.</h2>
<hr />
<p>&nbsp;</p>
<p>Once upload button is clicked we need to save the image. We will check whether the image is in valid format(jpg,png or gif). If the image is valid, then we are going to store it in images folder.Here is the php code to save the image. I have made comment in appropriate places. </p>
<pre class="prettyprint lang-php"><?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] > 0) { // if error > 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "<br />";
			} else {
			    echo "File name: " . $_FILES['file']['name'] . "<br />";
			    echo "File type: " . $_FILES['file']['type'] . "<br />";
			    echo "Temp path: " . $_FILES['file']['tmp_name']. "<br />";;
			    $image_name =  $_FILES['file']['name']; // store image name 
			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "image is ok!!"."<br />";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        echo "The file ". $image_name. " has been uploaded.";
				        $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.<br />";
				    }
				}
			}
		} 
	?></pre>
<p>Step 3:- Save image name in mysql .</p>
<p>Create a table images in some database. I am using a database naming "webtuts". Here is sql of images table.</p>
<pre class="prettyprint lang-mysql">
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

</pre>
<p>Make database connection.</p>
<pre class="prettyprint lang-php"><?php 

	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?></pre>
<p>Store the new image name in database.</p>
<pre class="prettyprint lang-php"> $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
							}</pre>
<p>Here is the complete code till now</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>
	<?php 

	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?>

	<?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] > 0) { // if error > 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "<br />";
			} else {
			    echo "File name: " . $_FILES['file']['name'] . "<br />";
			    echo "File type: " . $_FILES['file']['type'] . "<br />";
			    echo "Temp path: " . $_FILES['file']['tmp_name']. "<br />";;
			    $image_name =  $_FILES['file']['name']; // store image name 
			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "image is ok!!"."<br />";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        echo "The file ". $image_name. " has been uploaded.";
				        $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.<br />";
				    }
				}
			}
		} 
	?>
	<div class="container">
		<h2 style="text-align:center"  class="bg-success"> Welcome to my Image galary </h2>
	<div class="container">
		<form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto">

		  <div class="form-group">
		    <label for="exampleInputFile">Upload  image  in galary</label>
		    <input type="file" name="file" id="exampleInputFile">
		    <p class="help-block">Upload your image </p>
		  </div>
		 
		  
		  <button type="submit" name="upload" class="btn btn-info" >Upload</button>
		</form>
	</div>
	<div class="container">
		<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>
	

	</div>
	</div>

</body>
</html></pre>
<h2>Step 3:- Display all images stored in database and make image gallery </h2>
<hr />
<p>&nbsp;</p>
<p>It is easy part. Just write a simple mysqli query to get all the image name from database and display it.</p>
<pre class="prettyprint lang-php"><?php
		$sql = "SELECT * FROM images";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-4"><img src='.$image.' style="width:300px;height:200px" /></div>';
		    }
		} else {
		    echo "0 results";
		}</pre>
<p>&nbsp;</p>
[caption id="attachment_401" align="alignnone" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_2-1024x576.png" alt="displaying uploaded images" width="1024" height="576" class="size-large wp-image-401" /></a> displaying uploaded images[/caption]
<p>&nbsp;</p>
<p>Here is the complete code</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>
	<?php 

	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?>

	<?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] > 0) { // if error > 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "<br />";
			} else {
			    echo "File name: " . $_FILES['file']['name'] . "<br />";
			    echo "File type: " . $_FILES['file']['type'] . "<br />";
			    echo "Temp path: " . $_FILES['file']['tmp_name']. "<br />";;
			    $image_name =  $_FILES['file']['name']; // store image name 
			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "image is ok!!"."<br />";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        echo "The file ". $image_name. " has been uploaded.";
				        $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.<br />";
				    }
				}
			}
		} 
	?>
	<div class="container">
		<h2 style="text-align:center"  class="bg-success"> Welcome to my Image galary </h2>
	<div class="container">
		<form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto">

		  <div class="form-group">
		    <label for="exampleInputFile">Upload  image  in galary</label>
		    <input type="file" name="file" id="exampleInputFile">
		    <p class="help-block">Upload your image </p>
		  </div>
		 
		  
		  <button type="submit" name="upload" class="btn btn-info" >Upload</button>
		</form>
	</div>
	<div class="container">
		<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>
		<div class="row">
		<?php
		$sql = "SELECT * FROM images";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-4"><img src='.$image.' style="width:300px;height:200px" /></div>';
		    }
		} else {
		    echo "0 results";
		}
		?>
		</div>

	</div>
	</div>

</body>
</html></pre>
";s:10:"post_title";s:41:"Upload an image and make an image gallery";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"upload-image-make-image-gallery";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-28 19:54:25";s:17:"post_modified_gmt";s:19:"2015-07-28 14:24:25";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=394";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"708";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-11 10:12:26";s:13:"post_date_gmt";s:19:"2015-08-11 04:42:26";s:12:"post_content";s:13420:"We have created an e commerce store earlier, where we were able to add new product, filter those according to the category. Today we will add a new and exiting feature, add to cart option.

&nbsp;

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part4/" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part4.zip" target="_blank"]Download Code[/button]

&nbsp;

<strong>Step 1-</strong>In the index.php add My Cart option to the navigation bar and this option will act as a personal database and this will help one to store products which can be bought later. One can even delete products from cart if required
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
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
	       	&lt;li&gt;&lt;a href="cart.php"&gt;My Cart&lt;/a&gt;&lt;/li&gt; //THE MY CART OPTION
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		
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
<strong>Step 2</strong>-Create cart.php file.
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	}
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    .total{
    	font-weight: bold;
			font-size: 1.5em;
			    }
    &lt;/style&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;
	&lt;script type="text/javascript"&gt;
		function delete_cart(product_id){
			//$('#cart').html("added to cart");
			$.ajax({
				  url: "delete_cart.php", // we will delete the post inside delete.php file
				  type: "get", 
			  	  data: { id : product_id}, // lets pass the post id to be deleted here.
				  success: function(html){
				  // $("#cart").load("cart_reload.php"); // we will reload the tbody by reload.php  
				   console.log(html);
				  window.location.reload(1); 
				  }
				});
		}
	&lt;/script&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="cart.php"&gt;My cart&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; My Cart &lt;/h2&gt;
		&lt;div class="row"&gt;
			
			 &lt;table class="table table-striped" style="width:80%;margin:0 auto" id="cart"&gt;
				&lt;?php
					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;
					&lt;/td&gt;
					&lt;/tr&gt;
					&lt;/table&gt;
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 3</strong>-Create  two php files add_cart.php and delete_cart.php which will be used to update the cart. the first will add products to the cart while the latter will delete products.
<pre class="lang:php decode:true ">&lt;?php

session_start();
// remove all session variables
//session_unset(); 

// destroy the session 
//session_destroy(); 

$product_id = $_GET['id'];
if(!isset($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}
if(!in_array($product_id, $_SESSION['cart']))
$_SESSION['cart'][] = $product_id;

print_r($_SESSION['cart']);



?&gt;</pre>
<pre class="lang:php decode:true ">&lt;?php

session_start();

$product_id = $_GET['id'];
if(!isset($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}
/*if(in_array($product_id, $_SESSION['cart'])){
	//array_push($_SESSION['cart'],$product_id);
	//unset($anArray[0]);
	for ($i=0;$i &lt; sizeof($_SESSION['cart']) ; $i++) {
		if($_SESSION['cart'][$i] == $product_id){
			unset($_SESSION['cart'][$i]);
		}
	}
}*/

if(($key = array_search($product_id , $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
}


print_r($_SESSION['cart']);



?&gt;</pre>
<strong>Step 4-</strong>Create the cart_reload.php file which will reload the page once a product has been deleted to show the updated cart
<pre class="lang:default decode:true ">&lt;?php

					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;
					&lt;/td&gt;
					&lt;/tr&gt;</pre>
<img class="aligncenter size-large wp-image-789" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-139-1024x451.png" alt="The My Cart option on the main page" width="1024" height="451" />
<h6 class=""></h6>";s:10:"post_title";s:53:"Lets build an e commerce, part-4 , add to cart option";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"lets-build-an-e-commerce-part-4";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-23 16:23:06";s:17:"post_modified_gmt";s:19:"2015-08-23 10:53:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=708";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"718";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-14 15:13:59";s:13:"post_date_gmt";s:19:"2015-08-14 09:43:59";s:12:"post_content";s:12428:"Hey friend this tutorial is 5th part of making an e commerce step by step. Today we will add filtering based on price feature.

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part5/" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="https://github.com/nilmadhab/webtut_ecom_5" target="_blank"]Github repo [/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part5.zip" target="_blank"]Download Code[/button]


<span style="text-decoration: underline;"><strong>step 1: Add html form to filter price.</strong></span>
This will go in index.html file just after filtering based on category.
<pre class="lang:default decode:true" title="form in index.html ">&lt;div class="checkbox"&gt;
						      &lt;label&gt;

						      	  	&lt;input type="radio" name="price[]" value="0" 
						      	onChange="this.form.submit()" checked&gt; Below Rs 0-100 
						       
						      &lt;/label&gt; &lt;br /&gt;
						      &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="100" 
						      	onChange="this.form.submit()" &gt; Rs. 100- Rs.500 &lt;br /&gt;
						       
						      &lt;/label&gt; &lt;br /&gt;
						      &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="500" 
						      	onChange="this.form.submit()" &gt; Rs. 500- Rs.1000 &lt;br /&gt;
						       
						      &lt;/label&gt; &lt;br /&gt;
						      &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="1000" 
						      	onChange="this.form.submit()" &gt; Above Rs. 1000 &lt;br /&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;</pre>
<h2><a href="http://webtutplus.com/wp-content/uploads/2015/08/price_1.png"><img class="alignnone size-large wp-image-722" src="http://webtutplus.com/wp-content/uploads/2015/08/price_1-1024x576.png" alt="price_1" width="1024" height="576" /></a></h2>
<h2><strong>step 2:- Lets get the price from url get parameter</strong></h2>
We will get the selected price from url get parameter.
<pre class="lang:default decode:true " title="get price from url">$low = 0;
					$high = 100000;
					if(isset($_GET['price'])){
						$price = $_GET['price'][0];

						if(preg_match("/0/", $price)){
							$low = 0;
							$high = 99;
						}
						if(preg_match("/100/", $price)){
							$low = 100;
							$high = 499;
						}
						if(preg_match("/500/", $price)){
							$low = 500;
							$high = 999;
						}
						if(preg_match("/1000/", $price)){
							$low = 1000;
							$high = 100000;
						}
					}</pre>
Default range is 0 to 100000. If some price range is selected we will change the low and high range accordingly.

Now we just need to change the sql query accordingly.
<pre class="lang:default decode:true " title="sql query">$sql = "SELECT * FROM products WHERE id IN ($products) AND price &gt;= $low 
						AND price &lt;= $high ";</pre>
Thats it. We can filter products now.

We just need to add one more step. If some range is selected we need to show it in the form.
<pre class="lang:default decode:true ">&lt;?php if(isset($_GET['price'])){
						      	$price = $_GET['price'][0];

						      	}else{
						      		$price = -1;
						      		} ?&gt;

						      		&lt;?php if(preg_match("/0/", $price)){ ?&gt;
						      			&lt;input type="radio" name="price[]" value="0" 
						      	onChange="this.form.submit()" checked&gt; Below Rs 0-100 
						       
						      &lt;/label&gt; &lt;br /&gt;
						      		&lt;?php }else{ ?&gt;
						      		&lt;input type="radio" name="price[]" value="0" 
						      	onChange="this.form.submit()" &gt; Below Rs 0-100 
						       
						      &lt;/label&gt; &lt;br /&gt;
						      			&lt;?php } ?&gt;</pre>
Thats it. Now we can filter prices.

<a href="http://webtutplus.com/wp-content/uploads/2015/08/price_2.png"><img class="alignnone size-large wp-image-725" src="http://webtutplus.com/wp-content/uploads/2015/08/price_2-1024x576.png" alt="price_2" width="1024" height="576" /></a>

&nbsp;

I have added discus plugin in demo. Comment there if you have any doubts.

Here is the complete index.php file.
<pre class="lang:default decode:true " title="index.html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 5&lt;/title&gt;
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
	       	&lt;li&gt;&lt;a href="cart.php"&gt;My Cart&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		
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
					&lt;h2 class="bg-info"&gt;Price &lt;/h2&gt; 
					&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      &lt;?php if(isset($_GET['price'])){
						      	$price = $_GET['price'][0];

						      	}else{
						      		$price = -1;
						      		} ?&gt;

						      		&lt;?php if(preg_match("/0/", $price)){ ?&gt;
						      			&lt;input type="radio" name="price[]" value="0" 
						      	onChange="this.form.submit()" checked&gt; Below Rs 0-100 
						       
						      &lt;/label&gt; &lt;br /&gt;
						      		&lt;?php }else{ ?&gt;
						      		&lt;input type="radio" name="price[]" value="0" 
						      	onChange="this.form.submit()" &gt; Below Rs 0-100 
						       
						      &lt;/label&gt; &lt;br /&gt;
						      			&lt;?php } ?&gt;
						      	  	&lt;?php if(preg_match("/100/", $price)){ ?&gt;
						      			&lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="100" 
						      	onChange="this.form.submit()" checked&gt; Rs. 100- Rs.500 &lt;br /&gt;
						       
						      &lt;/label&gt; &lt;br /&gt;
						      		&lt;?php }else{ ?&gt;
						      		&lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="100" 
						      	onChange="this.form.submit()" &gt; Rs. 100- Rs.500 &lt;br /&gt;
						       
						      &lt;/label&gt; &lt;br /&gt;
						      			&lt;?php } ?&gt;
						      			&lt;?php if(preg_match("/500/", $price)){ ?&gt;
						      			 &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="500" 
						      	onChange="this.form.submit()" checked&gt; Rs. 500- Rs.1000 &lt;br /&gt;
						       
						      &lt;/label&gt; &lt;br /&gt;
						      		&lt;?php }else{ ?&gt;
						      		 &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="500" 
						      	onChange="this.form.submit()" &gt; Rs. 500- Rs.1000 &lt;br /&gt;
						       
						      &lt;/label&gt; &lt;br /&gt;
						      			&lt;?php } ?&gt;
						      			&lt;?php if(preg_match("/1000/", $price)){ ?&gt;
						      			 &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="1000" 
						      	onChange="this.form.submit()" checked&gt; Above Rs. 1000 &lt;br /&gt;
						       
						      &lt;/label&gt;
						      		&lt;?php }else{ ?&gt;
						      		 &lt;label&gt;
						      	  	&lt;input type="radio" name="price[]" value="1000" 
						      	onChange="this.form.submit()" &gt; Above Rs. 1000 &lt;br /&gt;
						       
						      &lt;/label&gt;
						      			&lt;?php } ?&gt;
						      
						     
						     
						    &lt;/div&gt;
				&lt;/form&gt;
			&lt;/div&gt;
			&lt;div class="col-sm-9"&gt;
				&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					$low = 0;
					$high = 100000;
					if(isset($_GET['price'])){
						$price = $_GET['price'][0];

						if(preg_match("/0/", $price)){
							$low = 0;
							$high = 99;
						}
						if(preg_match("/100/", $price)){
							$low = 100;
							$high = 499;
						}
						if(preg_match("/500/", $price)){
							$low = 500;
							$high = 999;
						}
						if(preg_match("/1000/", $price)){
							$low = 1000;
							$high = 100000;
						}
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
						$sql = "SELECT * FROM products WHERE id IN ($products) AND price &gt;= $low 
						AND price &lt;= $high ";


					}else{
						$sql = "SELECT * FROM products WHERE  price &gt;= $low 
						AND price &lt;= $high";
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

&nbsp;";s:10:"post_title";s:44:"E-commerce, part 5, filtering based on price";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:42:"e-commerce-part-5-filtering-based-on-price";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-22 22:37:37";s:17:"post_modified_gmt";s:19:"2015-08-22 17:07:37";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=718";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13420;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:53;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:57;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}