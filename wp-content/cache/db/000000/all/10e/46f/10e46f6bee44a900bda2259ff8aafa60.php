�v�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (394,499,113,588)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"113";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-07 05:29:25";s:13:"post_date_gmt";s:19:"2015-07-06 23:59:25";s:12:"post_content";s:13477:"<p>We are all familiar with blogs. We share  our valuable experiences in blog. Today we will know, how to create our own blog.</p>
<p>We will use php and mysql to create the blog. I am assuming you have php and mysql installed in your local computer. If it is not the case, please refer to installation tutorial. </p>
<p>[button colour="green" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog/" target="_blank"]Blog Demo[/button]</p>
<p>[button colour="turquoise" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog.zip" target="_blank"]Download Code[/button]</p>
<h2>Step 1:- We will create a database and table  to store the posts.</h2>
<hr />
<p>&nbsp;</p>
<p><strong> </strong></p>
<p>Lets  open localhost/phpmyadmin. Create a new database. Name it blog.</p>
[caption id="attachment_114" align="aligncenter" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_101.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_101-1024x576.png" alt="blog_101" width="1024" height="576" class="wp-image-114 size-large" /></a> Phpmyadmin- create blog database[/caption]
<p>Now we will create a table. It will have three field.</p>
<p>a) Id :- to uniquely identify a post. It will be integer, primary key, auto incremented.</p>
<p>b) Title:- title of the post. It will be var char, with 200 character length.</p>
<p>c) Post :- content of the post will go here. It will be a text field with any number of character. </p>
<p>Add this code snippet in sql table inside blog database.</p>
<pre class="prettyprint lang-mysql">CREATE TABLE IF NOT EXISTS `Posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;</pre>
[caption id="attachment_115" align="aligncenter" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_2-1024x576.png" alt="blog_2" width="1024" height="576" class="wp-image-115 size-large" /></a> Create table[/caption]
<p>Now we will add some sample post.</p>
<p>Go to insert tab and add some posts. Alternatively you can also execute the following sql.</p>
<pre class="prettyprint lang-mysql">INSERT INTO `blog`.`Posts` (`post_id`, `title`, `post`) VALUES (NULL, 'Why is Nature So Beautiful? Why Does It Fill Us With Joy and Peace?', 'Why is nature so beautiful? Why does a short walk amidst nature have such a calming influence on our mind? Why does the sight of flowers, butterflies and rainbows fill our hearts with joy unspeakable?

Mankind’s love for nature is perhaps one of the greatest mysteries of life, one that even evolutionary biologists are hard-pressed to explain. After all, what is the utility in admiring a sunset, or delighting at the sight of snow-capped mountains, when it serves no evolutionary purpose?

While evolution and science can explain many facts of our daily existence, the answer to this profound puzzle lies a little beyond the reaches of present day science, and in the realms of the super-conscious.'), (NULL, 'Beauty in Nature', '“I declare this world is so beautiful that I can hardly believe it exists.”  The beauty of nature can have a profound effect upon our senses, those gateways from the outer world to the inner, whether it results in disbelief in its very existence as Emerson notes, or feelings such as awe, wonder, or amazement.  But what is it about nature and the entities that make it up that cause us, oftentimes unwillingly, to feel or declare that they are beautiful?

One answer that Emerson offers is that “the simple perception of natural forms is a delight.”  When we think of beauty in nature, we might most immediately think of things that dazzle the senses – the prominence of a mountain, the expanse of the sea, the unfolding of the life of a flower.  Often it is merely the perception of these things itself which gives us pleasure, and this emotional or affective response on our part seems to be crucial to our experience of beauty.  So in a way there is a correlate here to the intrinsic value of nature; Emerson says:

- See more at: http://green.harvard.edu/news/beauty-nature#sthash.LARllW44.dpuf');</pre>
<h2>Step 2:- Display the post in php</h2>
<hr />
<p>Lets start with following code.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>


	<div class="container">
		<h2 style="text-align:center"> Welcome to my blog </h2>
	

	</div>

</body>
</html></pre>
<p>&nbsp;</p>
<p>As you can see. I am using bootstrap css to style the page. Now we will make connection with database.</p>
<p>Add following php code inside head tag or any other place of your choice.</p>
<pre class="prettyprint lang-php"><?php 
	ini_set('display_errors', true);
	//error_reporting(E_ALL ^ E_NOTICE);
	$result=mysql_connect( 'sql307.byethost16.com','b16_16292463','shubham123')or die("cannot connect");
	if (!$result) {
		return false;
	}
	if (!mysql_select_db('b16_16292463_blog',$result)){
		return false;
	}
	$conn= $result;
	?></pre>
<p>As you can see, I have set error reporting true in php. Then I have connected to database by mysql_connect() function. I have passed host, username, password as argument to that function. Change it according to your settings.</p>
<p>Then I have selected blog database in mysql_select_db function.</p>
<h2>Step 3:- Fetch data from databse and display it in bootstrap table.</h2>
<hr />
<p>&nbsp;</p>
<p>Now add following html code to create bootstrap table.</p>
<pre class="prettyprint lang-php"><table class="table table-striped">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Title</th>
	          <th>Post</th>
	          
	        </tr>
	      </thead>
	      <tbody>
	        
      	  </tbody>
    	</table></pre>
<p>After inserting the code, the web page will  look something like this.</p>
[caption id="attachment_121" align="aligncenter" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_3-1024x576.png" alt="blog_3" width="1024" height="576" class="wp-image-121 size-large" /></a> Web page[/caption]
<p>The entire code will look something like this</p>
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
	$connect = $result;
	?>
</head>
<body>

	<div class="container">
		<h2 style="text-align:center"> Welcome to my blog </h2>
		<table class="table table-striped">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Title</th>
	          <th>Post</th>
	          
	        </tr>
	      </thead>
	      <tbody>
	        
      	  </tbody>
    	</table>
	</div>

</body>
</html></pre>
<p>Now we will fetch posts from database and display it dynamically in table.</p>
<pre class="prettyprint lang-php"><?php 
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
	      ?></pre>
<p>I am selecting the post table here by "select * from Posts" line.</p>
<p>I am fetching all the rows by mysql_query function and displaying rows one by one by mysql_fetch_array command till all rows are finished. Then I am displaying the row post_id, title and post in a bootstrap row. Remember these fields we created in database.</p>
<p>Once you execute the code in browser you will see something like this.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_4.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_4-1024x576.png" alt="blog_4" width="1024" height="576" class="alignnone size-large wp-image-126" /></a></p>
<p>&nbsp;</p>
<h2>Step 4:- creating a form and posting it</h2>
<hr />
<pre class="prettyprint lang-php"><div class="container">
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
		</div></pre>
<p>We will now create a simple html form using bootstrap, and once the form is submitted, the post will get stored in database and we will subsequently display it. Paste the following code just before post table. It is a simple form, with two field title and post. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_5.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_5-1024x576.png" alt="blog_5" width="1024" height="576" class="alignnone size-large wp-image-129" /></a></p>
<p>Now we will submit the form and store it in database. The new post will be automatically shown below </p>
<p>older posts.</p>
<h2>Step 5:- saving the form data in database</h2>
<hr />
<p>&nbsp;</p>
<p>Now we will save the posted data from the form into database by following php script.</p>
<pre class="prettyprint lang-php"><?php 
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
	?></pre>
<p>As you can see the code is pretty straight forward. I am checking if the form is submitted or not, if submitted get the title and post from POST variable and escape it by mysql_real_escape_string function. We need this function to clean html, remove any special character and most importantly to prevent XSS scripting. You can read more about it online.</p>
<p>If you post a the form you will see a new post appeared below older post. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_6.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_6-1024x576.png" alt="blog_6" width="1024" height="576" class="alignnone size-large wp-image-130" /></a></p>
<p>Here is the complete code. I hope you enjoyed the post. We will add option of deleting and editing post in a  later tutorial. Please feel free to post some comment or doubt.</p>
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
";s:10:"post_title";s:24:"PHP create your own blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"php-create-your-own-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-25 19:33:54";s:17:"post_modified_gmt";s:19:"2015-07-25 14:03:54";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://webtutplus.in/?p=113";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"394";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-22 22:20:03";s:13:"post_date_gmt";s:19:"2015-07-22 16:50:03";s:12:"post_content";s:12764:"<p>Hey friends today we will learn how to upload an image in php and display all images in a nice way. </p>
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
";s:10:"post_title";s:35:"Google plus login from your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"google-plus-login";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-27 00:18:29";s:17:"post_modified_gmt";s:19:"2015-07-26 18:48:29";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=499";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"588";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-07-28 15:41:01";s:13:"post_date_gmt";s:19:"2015-07-28 10:11:01";s:12:"post_content";s:4241:"Hello everyone.

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

For Free Trials you get 5 sms free. You have to purchase for sending more than 5 sms from the ViaNett website.";s:10:"post_title";s:18:"Sending SMS by PHP";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:15:"sending-sms-php";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 11:16:58";s:17:"post_modified_gmt";s:19:"2015-08-08 05:46:58";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=588";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13477;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:41;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:31;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}