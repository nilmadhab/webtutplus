<!DOCTYPE html>
<html>
<head>
	<title>My blog update post</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <?php 
	ini_set('display_errors', true);
	//error_reporting(E_ALL ^ E_NOTICE);
	// make database connection
	$conn=mysql_connect( 'localhost','webtutplus','webtutplus')or die("cannot connect");
	if (!$conn) {
		echo "error in connecting db";
	}
	// select database
	if (!mysql_select_db('webtut_blog',$conn)){
			echo "error in selecting db";
			
	}	
	?>
</head>
<body>
	<?php 
	
	function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

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
				//echo "record updated succesfully";
				//header("Location: index.php");
				redirect("index.php");

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
</html>