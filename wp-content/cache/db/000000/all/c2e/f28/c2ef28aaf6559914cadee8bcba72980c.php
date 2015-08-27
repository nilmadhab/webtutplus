QB�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:53:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (249,567)";s:11:"last_result";a:2:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"249";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 04:25:26";s:13:"post_date_gmt";s:19:"2015-07-12 04:25:26";s:12:"post_content";s:16009:"<p>Hey folk. So we have added add new post and delete post option in our blog. But we also need to be able to edit our post. So today we will learn how to edit a post. We will add a edit button beside each post. When clicked in that button, we will go to another page. Lets call it edit_post.php. We will edit the post there. Then we will come back to main post page and we will see updated post there.</p>
<p>Download the sample blog post from <a href="http://demo.webtutplus.com/blog.zip" target="_blank">here</a> .</p>
<p><span style="color: #eb2626;"><strong><span style="text-decoration: underline;">Make sure to change connection to database according to your local  computer.</span></strong></span></p>
<p>You can refer to <a href="http://webtutplus.com/php-create-your-own-blog/" target="_blank">blog</a> here. We will continue from here. Add update button and update post from database.</p>
<p>Here is the sample code for blog. Refer to above post to create blog database and posts table.</p><p>[button colour="lightgrey" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_update/index.php" target="_blank"]Demo[/button]</p><p>[button colour="limegreen" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_update.zip" target="_blank"]Download Code[/button]</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		if(isset($_POST['submit'])){

			// if new post is submitted store it in database

			$title = mysql_real_escape_string($_POST['title']);

			$post = mysql_real_escape_string($_POST['post']);



			$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";

			$result = mysql_query($sql,$conn);

			// insert the post into database

			if($result){



			}else{

				echo "failed to insert data ".mysql_error($conn);// if insertion failed display error

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

	      $sql = "SELECT * FROM Posts"; // select all the post from databse and display it here

	      if($result = mysql_query($sql,$conn)){

			while($row = mysql_fetch_array($result)){

				// display rows one by one 

				echo "<tr>";

					echo "<td>{$row['post_id']}</td>";

					echo "<td>{$row['title']}</td>";

					echo "<td>{$row['post']}</td>";

					$post_id = $row['post_id']; // store Post id into a variable



				

				echo "</tr>";

			}

		}

	      ?>

	        

      	  </tbody>

    	</table>

	</div>



</body>

</html></pre>
<p>I hope everything is clear till now. If everything works correctly, you will be able to create new post and see those.</p>
<p>Lets start working on real stuff from here.</p>
<h2><strong>Step 1:- Lets add "UPDATE" button into each post. </strong></h2>
<hr />
<p>&nbsp;</p>
<p>Lets break down this step into small sub steps.</p>
<ol>
<li>We will create a button for each post in same "&lt;tr&gt;" tag. The button will be just another column i.e within a  "&lt;td&gt;" tag. Please refer to w3school if you are not familiar with basic html and boostrap css.</li>
<li>Each button will contain a link to update_post.php file. We will pass the post_id (primary key) of each post to that page.</li>
</ol>
<p>After line 151 add the follwing code to do the exact same thing.</p>
<pre class="prettyprint lang-php">echo "<td><a href='update.php?post_id=$post_id' class='btn btn-info' >

							 Update</a> </td>";

							 // make a link to update.php page and add btn-info bootstrap 

							 // class to make the button look nice. Send post_id as a get 

							 // parameter</pre>
<p>Simple and intuitive right?</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_3-1024x518.png" alt="update_3" width="1024" height="518" class="alignnone size-large wp-image-259" /></a></p>
<h2><strong>Step 2: Fetch the post from database and display the information into a form</strong></h2>
<hr />
<p>&nbsp;</p>
<p>What we are going to do in this step is </p>
<ol>
<li>First create a file update.php</li>
<li>Add basic bootstrap css file there for styling</li>
<li>Make databse connection  there.</li>
<li>Get the post_id (primary key of the post ) from url</li>
<li>Get the associated post by making a mysql_select query</li>
<li>Make a simple form and display the info there.</li>
</ol>
<p>I have done all those step in below code. I have commented in appropriate places. Please comment below, if you do not understand anything.</p>
<h5><span style="text-decoration: underline; color: #ff0000;">update.php</span></h5>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		$post_id = $_GET['post_id']; // retrive post id from Url 

		$sql = "SELECT * FROM Posts WHERE post_id='$post_id' "; // Select the post by post_id

		$result = mysql_query($sql,$conn); // execute sql query

		$row = mysql_fetch_assoc($result); // get particular row

		

	?>



	<div class="container">

		<h2 style="text-align:center"> Welcome to my blog, update your post</h2>

		<div class="container">

			<form action="" method="post" style="width:50%; margin: 0 auto;">

			  <div class="form-group">

			    <label for="exampleInputEmail1">Title</label>

			    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" >

			  </div>

			  <!-- display post title by printing it in value attribute of input field -->

			  <div class="form-group">

			    <label for="exampleInputPassword1">Post </label>

			 	

			     <textarea class="form-control" rows="3" name="post"> <?php echo $row['post']; ?></textarea>

			  </div>

			  <!-- display post body  by printing it in text area -->

			  <button type="submit" name="update" class="btn btn-info">Update </button>

			</form>

		</div>



	</div>



</body>

</html></pre>
<p>Here is the screenshot of update.php page. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_1-1024x518.png" alt="update_1" width="1024" height="518" class="alignnone size-large wp-image-257" /></a></p>
<h2><strong>Step 3:- Update the post and go back to main page.</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Now we are at final stage. Once user go to update page after clicking the update button, he/she will update the post.</p>
<p>Then once he click the update button, the post should be updated and he should head back to original post.</p>
<p>Lets do that task.</p>
<pre class="prettyprint lang-php">if(isset($_POST['update'])){ // check whether update button is clicked or not

			$title = mysql_real_escape_string($_POST['title']); // clean the title

			$post = mysql_real_escape_string($_POST['post']); // clean the post

			$sql = "UPDATE `Posts` SET `title`='$title',`post`='$post' WHERE `post_id`= $post_id";

			// sql query to update the particular post with given post id 

			// update the post with new title and post provided by user 

			$result = mysql_query($sql,$conn); // execute mysql query to update



			if($result){

				echo "record updated succesfully";

				header("Location: index.php");



			}else{

				// this is for debugging purpose

				echo $sql."<br />"; // if insertion failed check sql

				echo "failed to insert data ".mysql_error($conn); // check the mysql error

			}



		}

		

	?></pre>
<p>Lets update the second post. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_4.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_4-1024x518.png" alt="update_4" width="1024" height="518" class="alignnone size-large wp-image-260" /></a></p>
<p>If we click the update button. The post will be updated and we will head back to main page, where we will the the post is really updated.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_5.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_5-1024x518.png" alt="update_5" width="1024" height="518" class="alignnone size-large wp-image-261" /></a></p>
<p>Cool right ? Here is the complete code of two pages.</p>
<p><span style="text-decoration: underline; color: #ff0000;"><strong>index.php</strong></span></p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		if(isset($_POST['submit'])){

			// if new post is submitted store it in database

			$title = mysql_real_escape_string($_POST['title']);

			$post = mysql_real_escape_string($_POST['post']);



			$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";

			$result = mysql_query($sql,$conn);

			// insert the post into database

			if($result){



			}else{

				echo "failed to insert data ".mysql_error($conn);// if insertion failed display error

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

	      $sql = "SELECT * FROM Posts"; // select all the post from databse and display it here

	      if($result = mysql_query($sql,$conn)){

			while($row = mysql_fetch_array($result)){

				// display rows one by one 

				echo "<tr>";

					echo "<td>{$row['post_id']}</td>";

					echo "<td>{$row['title']}</td>";

					echo "<td>{$row['post']}</td>";

					$post_id = $row['post_id']; // store Post id into a variable

					echo "<td><a href='update.php?post_id=$post_id' class='btn btn-info' >

							 Update</a> </td>";

							 // make a link to update.php page and add btn-info bootstrap 

							 // class to make the button look nice. Send post_id as a get 

							 // parameter

							 

				

				echo "</tr>";

			}

		}

	      ?>

	        

      	  </tbody>

    	</table>

	</div>



</body>

</html></pre>
<p><span style="color: #ff0000;"><strong><span style="text-decoration: underline;">update.php</span></strong></span></p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		$post_id = $_GET['post_id']; // retrive post id from Url 

		$sql = "SELECT * FROM Posts WHERE post_id='$post_id' "; // Select the post by post_id

		$result = mysql_query($sql,$conn); // execute sql query

		$row = mysql_fetch_assoc($result); // get particular row



		if(isset($_POST['update'])){ // check whether update button is clicked or not

			$title = mysql_real_escape_string($_POST['title']); // clean the title

			$post = mysql_real_escape_string($_POST['post']); // clean the post

			$sql = "UPDATE `Posts` SET `title`='$title',`post`='$post' WHERE `post_id`= $post_id";

			// sql query to update the particular post with given post id 

			// update the post with new title and post provided by user 

			$result = mysql_query($sql,$conn); // execute mysql query to update



			if($result){

				echo "record updated succesfully";

				header("Location: index.php");



			}else{

				// this is for debugging purpose

				echo $sql."<br />"; // if insertion failed check sql

				echo "failed to insert data ".mysql_error($conn); // check the mysql error

			}



		}

		

	?>



	<div class="container">

		<h2 style="text-align:center"> Welcome to my blog, update your post</h2>

		<div class="container">

			<form action="" method="post" style="width:50%; margin: 0 auto;">

			  <div class="form-group">

			    <label for="exampleInputEmail1">Title</label>

			    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" >

			  </div>

			  <!-- display post title by printing it in value attribute of input field -->

			  <div class="form-group">

			    <label for="exampleInputPassword1">Post </label>

			 	

			     <textarea class="form-control" rows="3" name="post"> <?php echo $row['post']; ?></textarea>

			  </div>

			  <!-- display post body  by printing it in text area -->

			  <button type="submit" name="update" class="btn btn-info">Update </button>

			</form>

		</div>



	</div>



</body>

</html></pre>
";s:10:"post_title";s:50:"update posts  in your blog, make those editable!!!";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:28:"uodate-the-post-in-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-12 16:11:11";s:17:"post_modified_gmt";s:19:"2015-08-12 10:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=249";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"567";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-27 21:01:23";s:13:"post_date_gmt";s:19:"2015-07-27 15:31:23";s:12:"post_content";s:5180:"Hi friends, we have created a image gallery web application earlier, where we are able to upload images and display those in nice format.

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
http://webtutplus.com/upload-image-make-image-gallery/";s:13:"post_modified";s:19:"2015-08-14 09:05:10";s:17:"post_modified_gmt";s:19:"2015-08-14 03:35:10";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=567";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:16009;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:31;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:55;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}