<!DOCTYPE html>
<html>
<head>
	<title>My Image galary</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>
	<?php include("connect.php") ?>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Webtutplus</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>
	        <li><a href="admin.php">Admin panel</a></li>
	       	<li><a href="admin.php">Add new product</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container" style="margin-top:50px" >
		<h2 style="text-align:center"  class="bg-danger"> Products </h2>
		<div class="row">
		<?php
		if(isset($_GET['product_id'])){
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM images WHERE id='$product_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	?>
		    	<div class="container">
		    	<div class="col-sm-6">
		    		<?php echo '<img src='.$image.' style="width:300px;" />';?>
		    	</div>
		    	<div class="col-sm-6">
		    	<?php 
		    		 echo "<h3>".$row['pname'].'</h3>';
			       echo '<p>'.'Rs :- '.$row['price']."</p>";
			        echo '<p>'.$row['pcat'].'</p> ';
		        ?>
		    	</div>
		    	</div>
         
		    	<?php
		    }
		} else {
		    echo "No Products";
		}
		?>
		</div>

	</div>
	

</body>
</html>
