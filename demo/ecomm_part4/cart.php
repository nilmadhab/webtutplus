<!DOCTYPE html>
<html>
<head>
	<title>Make Ecommerce part 1</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <style>
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	}
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    .total{
    	font-weight: bold;
			font-size: 1.5em;
			    }
    </style>
    
</head>
<body>
	<?php include("connect.php") ?>
	<script type="text/javascript">
		function delete_cart(product_id){
			//$('#cart').html("added to cart");
			$.ajax({
				  url: "delete_cart.php", // we will delete the post inside delete.php file
				  type: "get", 
			  	  data: { id : product_id}, // lets pass the post id to be deleted here.
				  success: function(html){
				  // $("#cart").load("cart_reload.php"); // we will reload the tbody by reload.php  
				   console.log(html);
				  window.location.reload(1); 
				  }
				});
		}
	</script>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Webtutplus</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li ><a href="index.php">Home</a></li>
	        <li><a href="admin.php">Admin panel</a></li>
	       	<li><a href="admin.php">Add new product</a></li>
	       	<li class="active"><a href="cart.php">My cart</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container" style="margin-top:50px" >
		<h2 style="text-align:center"  class="bg-danger"> My Cart </h2>
		<div class="row">
			
			 <table class="table table-striped" style="width:80%;margin:0 auto" id="cart">
				<?php
					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '<tr>';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '<td>';
					        echo '<a href="details.php?product_id='.$product_id.'" >
					        	<img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /></a>';
					      	echo '</td>';
					      	echo '<td>';

					        echo "<h3>".$row['pname'].'</h3>';
					        echo '</td>';
					        echo '<td>';

					       echo '<p>'.'Rs '.$row['price']."</p>";
					       echo '</td>';
					       echo '<td>';

					       echo '<p class="btn btn-danger" onclick="delete_cart('.$product_id.')" > Delete from Cart </p>';
					       echo '</td>';

					        $total += (int)$row['price'];


			         
					    	echo "</tr>";
					    }
					} else {
					    echo "No Products";
					}
					?>
					<tr>
					<td>
					</td>
					<td>
					</td>
					<td>
					Amount Payable
					</td>
					<td>
					<p class='total' > Rs <?php echo $total ?> </p>
					</td>
					</tr>
					</table>
			</div>
		
		</div>

	</div>
	

</body>
</html>
