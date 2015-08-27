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
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	  
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
			<div class="col-sm-3">
				<h2 class="bg-info">Category </h2> 
				<form action="" method="get">
					<?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//<?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) > 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?>
					    	<div class="checkbox">
						      <label>
						      	<!-- check whether checkbox is selected or not -->

						      	<?php 
						      		if(in_array($row['id'], $cat)){
						      			?>
						      			 <input type="checkbox" name="cat[]" value="<?php echo $row['id']; ?>" onChange="this.form.submit()" checked> 
						        	<?php echo $row['name']; ?>
						      			<?php
						      		}else{?>
						      		<input type="checkbox" name="cat[]" value="<?php echo $row['id']; ?>" onChange="this.form.submit()" > 
						        	<?php echo $row['name']; ?>
						      		<?php
						      	}	
						      	?>
						       
						      </label>
						    </div>
					    	<?php
					    	
					    }
					} 
					?>
					
				</form>
			</div>
			<div class="col-sm-9">
				<?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
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


					        if($count %3 == 2){
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

	</div>
	

</body>
</html>
