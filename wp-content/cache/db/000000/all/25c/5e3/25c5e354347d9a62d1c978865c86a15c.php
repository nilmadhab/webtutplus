†ÞU<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:49:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (226)";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"226";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 15:07:40";s:13:"post_date_gmt";s:19:"2015-07-11 15:07:40";s:12:"post_content";s:5464:"<p>Hello folks. We have created a blog earlier, where we can add new posts and can see all the posts. Today we will add option to delete post from the blog.</p>
<p>[button colour="grey" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_delete/index.php" target="_blank"]Demo[/button]</p>
<p>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_delete.zip" target="_blank"]Download Code [/button]</p>
<p>Please refer to this <a href="http://webtutplus.com/php-create-your-own-blog/">post</a>Â for creating the blog. Go through the code once. If any doubt feel free to comment.</p>
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
<li>Get the post_id byÂ Â $_GET['post_id'] method.</li>
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
http://webtutplus.com/php-create-your-own-blog/";s:13:"post_modified";s:19:"2015-07-22 10:59:06";s:17:"post_modified_gmt";s:19:"2015-07-22 05:29:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=226";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:5464;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:26;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:26;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:48;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}