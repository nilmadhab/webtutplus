<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce part 1</title>
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
		$sql = "SELECT * FROM images";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-4">';
		        $product_id = $row['id'];
		        echo '<a href="details.php?product_id='.$product_id.'" ><img src='.$image.'
		         style="width:300px;max-height:300px" /></a>';
		        echo "<h3>".$row['pname'].'</h3>';
		       echo '<p>'.'Rs :- '.$row['price']."</p>";
		       // echo '<p>'.$row['pcat'].'</p> </div>';
         

		    }
		} else {
		    echo "No Products";
		}
		?>
		</div>

	</div>
	

</body>
</html>
