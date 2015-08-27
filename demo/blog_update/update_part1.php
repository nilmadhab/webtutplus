<!DOCTYPE html>
<html>
<head>
	<title>My blog update post</title>
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
</html>