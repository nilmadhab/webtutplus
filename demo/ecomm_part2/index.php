<!DOCTYPE html>
<html>
<head>
	<title>Make Ecommerce part 1</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <style>
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 250px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow:hidden;
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    </style>
    
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
		    $count = 0;
		    while($row = mysqli_fetch_assoc($result)) {
		    	if($count %4 == 0){
		    		echo '<div class="row" >';
		    	}
		    	
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-3 image" >';
		        $product_id = $row['id'];
		        echo '<a href="details.php?product_id='.$product_id.'" >
		        	<img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
		      		  /></a>';
		        echo "<h3>".$row['pname'].'</h3>';
		       echo '<p>'.'Rs :- '.$row['price']."</p>";
		        echo '</div>';


		        if($count %4 == 3){
		    		echo '</div >';
		    	}
		    	$count +=1;
         

		    }
		} else {
		    echo "No Products";
		}
		?>
		</div>

	</div>
	

</body>
</html>
