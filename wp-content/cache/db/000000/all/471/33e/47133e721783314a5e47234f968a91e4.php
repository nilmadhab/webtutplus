d�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:45:"SELECT * FROM wp_posts WHERE ID = 394 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"394";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-22 22:20:03";s:13:"post_date_gmt";s:19:"2015-07-22 16:50:03";s:12:"post_content";s:12764:"<p>Hey friends today we will learn how to upload an image in php and display all images in a nice way. </p>
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
";s:10:"post_title";s:41:"Upload an image and make an image gallery";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"upload-image-make-image-gallery";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-28 19:54:25";s:17:"post_modified_gmt";s:19:"2015-07-28 14:24:25";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=394";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:12764;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:41;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:31;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}