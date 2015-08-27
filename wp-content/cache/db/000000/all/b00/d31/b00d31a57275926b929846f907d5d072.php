�f�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (499,567,226,394)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"226";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 15:07:40";s:13:"post_date_gmt";s:19:"2015-07-11 15:07:40";s:12:"post_content";s:5464:"<p>Hello folks. We have created a blog earlier, where we can add new posts and can see all the posts. Today we will add option to delete post from the blog.</p>
<p>[button colour="grey" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_delete/index.php" target="_blank"]Demo[/button]</p>
<p>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_delete.zip" target="_blank"]Download Code [/button]</p>
<p>Please refer to this <a href="http://webtutplus.com/php-create-your-own-blog/">post</a> for creating the blog. Go through the code once. If any doubt feel free to comment.</p>
<p>Now we will add delete buttons in each post. Here how I will delete the post.</p>
<ol>
<li>I willl create delete buttons in each post.</li>
<li>When clicked delete button of a specific post, I will pass the post_id as get parameter and take user to delete.php page.</li>
<li>There I will delete the post and redirect user to the main page.</li>
</ol>
<h2><strong>Step 1:- Create delete button for each post</strong></h2>
<hr />
<p>Here is the code snippet for the blog.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <?php 
	ini_set('display_errors', true);
	//error_reporting(E_ALL ^ E_NOTICE);
	$result=mysql_connect( 'localhost','root','25011994')or die("cannot connect");
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
<p>In line 145, after 'echo "&lt;td&gt;{$row['post']}&lt;/td&gt;";' line, we will add our delete button.</p>
<pre class="prettyprint lang-php">$post_id = $row['post_id']; // store Post id into a variable



					echo "<td><a href='delete.php?post_id=$post_id'

						class='btn btn-danger'>Delete </a>"; // pass post id as a get url parameter

						// and link it to delete.php page

						// add a class btn-danger to make the button look nice</pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_1-1024x518.png" alt="blog_delete_1" width="1024" height="518" class="alignnone size-large wp-image-232" /></a></p>
<p>You can see the delete button right?</p>
<h2><strong>Step 2: - Go to delete.php page and delete the post using post_id</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Here are the things we are going to do step by step.</p>
<ol>
<li>Create a delete.php file.</li>
<li>Make a database connection there.</li>
<li>Get the post_id by  $_GET['post_id'] method.</li>
<li>Delete the post by " delete from " mysql command.</li>
<li>Go back to index.php page</li>
</ol>
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



$post_id = $_GET['post_id']; // store post_id in a varible



$sql = "DELETE FROM `posts` WHERE post_id = '$post_id'"; // sql command to delete



$result = mysql_query($sql,$conn); // execute the sql command



header("Location: index.php"); // go back to index page







?></pre>
<p>&nbsp;</p>
<p>Here is the screenshot after I delete 2nd post. Go ahead create some post and delete.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_2-1024x518.png" alt="blog_delete_2" width="1024" height="518" class="alignnone size-large wp-image-233" /></a></p>
<p>&nbsp;</p>
";s:10:"post_title";s:26:"Delete Post from your blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:26:"delete-post-from-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:48:"
http://webtutplus.com/php-create-your-own-blog/";s:13:"post_modified";s:19:"2015-07-22 10:59:06";s:17:"post_modified_gmt";s:19:"2015-07-22 05:29:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=226";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"394";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-22 22:20:03";s:13:"post_date_gmt";s:19:"2015-07-22 16:50:03";s:12:"post_content";s:12764:"<p>Hey friends today we will learn how to upload an image in php and display all images in a nice way. </p>
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
";s:10:"post_title";s:41:"Upload an image and make an image gallery";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"upload-image-make-image-gallery";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-28 19:54:25";s:17:"post_modified_gmt";s:19:"2015-07-28 14:24:25";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=394";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"499";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-07-26 23:04:04";s:13:"post_date_gmt";s:19:"2015-07-26 17:34:04";s:12:"post_content";s:8742:"<p>Hello today we will give a simple demo on how to integrate google plus login into your website. We will have to make use of API for Google+ and need to use the OAuth technology. 
</p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_login/" target="_blank"]DEMO[/button]</p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_login.zip" target="_blank"]Download Code[/button]</p>
[caption id="attachment_550" align="aligncenter" width="580"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/web_login.png" alt="A basic example of a login which provides Google+ integration" width="580" height="226" class="size-full wp-image-550" /> A basic example of a login which provides Google+ integration[/caption]
<p>&nbsp;</p>
<p><strong>Step 1</strong>-<span>Login to </span><a href="https://code.google.com/apis/console" target="_blank">Google API Console</a><span>. Go to </span><strong>APIs and </strong><span>you will have to turn on Google Plus API.</span></p>
[caption id="attachment_544" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1031-1024x382.png" alt="Enabling The Google+ API" width="1024" height="382" class="size-large wp-image-544" /> Enabling The Google+ API[/caption]
<p>&nbsp;</p>
<p><strong>Step 2</strong>-<span>Go to </span><strong>APIs and Auth</strong><span> and then under </span><strong>credentials</strong><span> tab. Click on </span><strong>create new client ID</strong><span> as shown below.</span></p>
[caption id="attachment_545" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1041-1024x365.png" alt="Create a new Client ID " width="1024" height="365" class="size-large wp-image-545" /> Create a new Client ID[/caption]
<p><strong>Step 3</strong>-<span>Now when you will have to enter your website path and the file path (redirect URI) to get your new client ID. You will need to enter these client ID and secret in your code later.</span></p>
[caption id="attachment_546" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1051-1024x393.png" alt="Enter the website path and the Redirect URI" width="1024" height="393" class="size-large wp-image-546" /> Enter the website path and the Redirect URI[/caption]
<p><strong>Step 4</strong>-Click on Create new Browser Key in order to set up the API Key</p>
[caption id="attachment_547" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1061-1024x398.png" alt="Get The API key from here" width="1024" height="398" class="size-large wp-image-547" /> Get The API key from here[/caption]
<p>&nbsp;</p>
<p><strong>Step 5</strong>-<span>Now you have to set </span><strong>Consent screen</strong><span>. This will be the screen that will be displayed before the user is redirected</span></p>
[caption id="attachment_548" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1072-1024x494.png" alt="The Consent Screen" width="1024" height="494" class="size-large wp-image-548" /> The Consent Screen[/caption]
<p>&nbsp;</p>
<p>Once this is done you are ready to code. Given below are the two php file codes you need to type in. You need to code using API</p><p><span style="text-decoration: underline; color: #ff0000;"><strong>google-plus-access.php</strong></span></p>
<pre class="prettyprint lang-php "><?php
require_once 'google-api-php-client/src/apiClient.php';
require_once 'google-api-php-client/src/contrib/apiPlusService.php';

session_start();

$client = new apiClient();
$client->setApplicationName("Google+ PHP Starter Application");

//*********** Replace with Your API Credentials **************
$client->setClientId('621798410973-jjpnovbshh910o0nba3rbsb3il7o2qrb.apps.googleusercontent.com');
$client->setClientSecret('Y-9CFVCpPvdSd7ut_UrtOz0f');
$client->setRedirectUri('http://localhost/webtuts/google_login/');
$client->setDeveloperKey('AIzaSyBB6QfvkHGd8S1gy16GtQa7u21EAQ9gQaE');
//************************************************************
 
$client->setScopes(array('https://www.googleapis.com/auth/plus.me'));
$plus = new apiPlusService($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $me = $plus->people->get('me');

  $optParams = array('maxResults' => 100);
  $activities = $plus->activities->listActivities('me', 'public', $optParams);


  $_SESSION['access_token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
?></pre>
<p>&nbsp;</p>
<p>google-plus-access.php file (Put in your Id,Secret,Redirect URI and Authorization Key from the console) </p>

<p>You can run this application in localhost as well. Just give local host in the Web Path and Redirect URI Section</p><p><span style="text-decoration: underline; color: #ff0000;"><strong>index.php file</strong></span></p>
<pre class="prettyprint lang-html"><?php
    include_once "google-plus-access.php"; //include API
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Login through Google+ API Demo</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='style.css' />
    </head>
<body>

		
		<div>
		<h1 style="text-align:center"  class="bg-success">Google+ Login Demo</h1></div>
		</div>
                                                               
		<?php if(isset($me) && isset($activities)) {
				// if session is set then display logout button
			 ?>
				<a href="?logout" ><h3 class="btn btn-danger pull-right" >Logout</h3></a>  
		<?php } ?>
		</div>
	</div>

<?php if(isset($me) && isset($activities)) {
			// if session is set then display profile pics 
	 ?>
<div class="big-container" >
	<div class="profile" >
		<div class="profile-pic" >
				<a href="<?php echo(substr($me['image']['url'],0,stripos($me['image']['url'],'?sz='))); ?>" >
					<img src="<?php echo(substr($me['image']['url'],0,stripos($me['image']['url'],'?sz='))); ?>?sz=200" />
				</a> <!--profile picture display -->
		</div>
		<div class="profile-info" >
			<div class="name" >
				<?php if(isset($me['displayName'])) echo(strtolower($me['displayName'])); ?>
			</div>  
			<!-- Name display -->
			
			
		</div>
	</div>
	

<?php }else{ 
		// if user is not logged in display the login button 
	?>
	<div class="login-box">
	<div id="connect-button"><a href="<?php echo($authUrl); ?>" ><img src="plus.jpg" alt="Connect to your Google+ Account"/></a><div> <!--the google+ button-->
	
</div>

	<?php } ?>
</body>
</html></pre>
[caption id="attachment_549" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1081-1024x422.png" alt="Using Localhost" width="1024" height="422" class="size-large wp-image-549" /> Using Localhost[/caption]
<p>&nbsp;</p>
<p>Your main screen will look like this after running the code</p>
[caption id="attachment_552" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1091-1024x473.png" alt="Main Login Screen" width="1024" height="473" class="size-large wp-image-552" /> Main Login Screen[/caption][caption id="attachment_553" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-110-1024x345.png" alt="The Consent Screen" width="1024" height="345" class="size-large wp-image-553" /> The Consent Screen[/caption][caption id="attachment_554" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-111-1024x422.png" alt="Your Login is Successful" width="1024" height="422" class="size-large wp-image-554" /> Your Login is Successful[/caption]
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";s:10:"post_title";s:35:"Google plus login from your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"google-plus-login";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-27 00:18:29";s:17:"post_modified_gmt";s:19:"2015-07-26 18:48:29";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=499";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"567";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-27 21:01:23";s:13:"post_date_gmt";s:19:"2015-07-27 15:31:23";s:12:"post_content";s:5180:"Hi friends, we have created a image gallery web application earlier, where we are able to upload images and display those in nice format.

<a href="http://webtutplus.com/upload-image-make-image-gallery/" target="_blank">Please refer to this tutorial for image gallery </a>

<a href="http://demo.webtutplus.com/image_galary/" target="_blank">Here is the demo of the earlier image gallery</a>

But there were too many images, and as a result of that page was taking lot of time to load. So We will add pagination today in the gallery. There are more than 50 images in the gallery. We will keep 9 images in one page.

&nbsp;

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/gallery_pagination/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/gallery_pagination.zip" target="_blank"]Download Code[/button]

So question is how can we distribute images in various pages. Simple we have to use mysql LIMIT and OFFSET for that.

For example
<pre class="prettyprint lang-mysql">SELECT * 
FROM images_table
LIMIT 10 OFFSET 10</pre>
This query will select 10 images from image number 10 to 20.

So we will use offset 0 for first page, offset 10 for second page, 30 for 3rd page so on.

Lets look at the image gallery code once again. I removed image upload feature here to simplify the code.
<pre class="prettyprint lang-html">
 
    

<?php  $conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); if (!$conn) { echo "cannot connect"; } ?>
<div class="container">
<h2 class="bg-danger" style="text-align: center;">Image Galary</h2>
<div class="row"></div>
';
}
} else {
echo "0 results";
}
?&gt;

</div>
</pre>
We will look in sql query in more details.
<pre class="prettyprint lang-php"><!--?php  $sql = "SELECT * FROM images"; $result = mysqli_query($conn, $sql); if (mysqli_num_rows($result) &gt; 0) {     // output data of each row     while($row = mysqli_fetch_assoc($result)) {     $image = "images/".$row['image_name'];         echo '<div class="col-sm-4">;<img src='.$image.' style="width:300px;height:200px" ?>';
    }
} else {
    echo "0 results";
}
?>;</pre>
Now the question is how do we know which page we are at. We will define it in url using a GET parameter.

So suppose the url is http://demo.webtutplus.com/image_galary/. This is first page. For second page we will change the url to http://demo.webtutplus.com/image_galary?page=2, similarly third page is http://demo.webtutplus.com/image_galary?page=3

We will change the $sql query according to the get page parameter. We will keep 9 images per page 3 in each row
<pre class="prettyprint lang-php"><!--?php  		if($_GET['page']){ // if the page variable is defined in GET request 			if(is_numeric($_GET['page']) ){ // and if the page number id number 				$current_page = $_GET['page']; // get the current page   			} 			 		}else{ 			$current_page = 1; // if current page is not set set it to 1  		} 		$OFFSET = 9*($current_page - 1); // each page will contain 9 images  										// so multiply it by 9  		$sql = "SELECT * FROM images ORDER BY Id DESC  LIMIT 9 OFFSET $OFFSET"; 		// apply LIMIT and OFFSET to SQl and sort it by descending order 		// so that we can see recently uploaded image first  		$result = mysqli_query($conn, $sql); 		if (mysqli_num_rows($result) &gt; 0) { 		    // output data of each row 		    while($row = mysqli_fetch_assoc($result)) { 		    	$image = "images/".$row['image_name']; 		        echo '&lt;div class="col-sm-4"&gt;&lt;img src='.$image.' style="width:300px;height:200px" ?-->';
		    }
		} else {
		    echo "0 results";
		}
		?&gt;</pre>
Now we have to add the pagination links at bottom of page.
<pre class="prettyprint lang-php"><!--?php  				$sql = "SELECT * FROM images"; 				$result = mysqli_query($conn, $sql); // get all images 				$no_page = mysqli_num_rows($result) / 9;  // no of page is 													// total no of images divided by 9 				$current = 1; 				while($current &lt;= $no_page){ 					echo "&lt;li&gt;&lt;a href='?page=$current'&gt;$current&lt;/a&gt;&lt;/li&gt;"; 					// set pages and pass get parameter  					$current +=1; 				} 			?>
Here is the screenshot with pagination

[caption id="" align="aligncenter" width="1366"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/pagination.png"><img class="" src="http://webtutplus.com/wp-content/uploads/2015/07/pagination.png" alt="" width="1366" height="768" /></a> pagination[/caption]

You can see I am in page number 2 here.

&nbsp;

Here is the complete code.
<pre class="prettyprint lang-html">	
	 
    

	<!--?php  	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); 	if (!$conn) { 		echo "cannot connect"; 	} 	?>
<div class="container">
<h2 class="bg-danger" style="text-align: center;">Image Galary</h2>
<div class="row"></div>
';
}
} else {
echo "0 results";
}
?&gt;

</div>
</pre>
We will add the image upload feature with it. We can also highlight the current page in pagination.

&nbsp;

&nbsp;

&nbsp;
";s:10:"post_title";s:34:"Adding pagination in image gallery";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"adding-pagination-image-gallery";s:7:"to_ping";s:0:"";s:6:"pinged";s:55:"
http://webtutplus.com/upload-image-make-image-gallery/";s:13:"post_modified";s:19:"2015-08-14 09:05:10";s:17:"post_modified_gmt";s:19:"2015-08-14 03:35:10";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=567";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:12764;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:41;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:31;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:55;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}