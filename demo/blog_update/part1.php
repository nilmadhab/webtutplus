<!DOCTYPE html>
<html>
<head>
	<title>My blog</title>
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
</html>