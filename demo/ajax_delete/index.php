<!DOCTYPE html>
<html>
<head>
	<title>My blog , ajax delete</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php 
	ini_set('display_errors', true);
	
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
</html>