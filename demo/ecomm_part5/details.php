<!DOCTYPE html>
<html>
<head>
	<title>Details </title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <style>
		/* styles unrelated to zoom */
		

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }
		.cart{
			font-size: 2em;
			margin-top: 10%;
		}
		.price{
			font-weight: bold;
			font-size: 1.5em;
			color: Red;
		}
		
	</style>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#image').zoom();
			
		});
	</script>
	<script type="text/javascript">
		function add_to_cart(product_id){
			$('#cart').html("added to cart");
			$.ajax({
				  url: "add_cart.php", // we will delete the post inside delete.php file
				  type: "get", 
			  	  data: { id : product_id}, // lets pass the post id to be deleted here.
				  success: function(html){
				   // $("#refresh").load("reload.php"); // we will reload the tbody by reload.php  
				   console.log(html);
				   $("#alert").fadeIn();
				   $("#cart").removeClass("btn-info");
				   $("#cart").addClass("btn-success");
				   
				  }
				});
		}
	</script>

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
	       	<li><a href="cart.php">My Cart </a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container" style="margin-top:50px" >
		<div class="alert alert-warning alert-dismissible fade in" role="alert" id="alert" style="display:none">
     	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
     	 <strong>Added to Cart</strong> Check it now
   		 </div>
		<div class="row">
		<?php
		if(isset($_GET['product_id'])){
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM products WHERE id='$product_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	$product_id = $row['id'];
		    	?>
		    	<div class="container">
		    	<div class="col-sm-6">
		    		<span class='zoom' id='image'>
		    		<?php echo '<img src="'.$image.'"style="width:400px;" />';?>
		    		</span>
		    	</div>
		    	<div class="col-sm-6">
		    	<?php 
		    		 echo "<h3>".$row['pname'].'</h3>';
			       echo '<p class="price">'.'Rs :- '.$row['price']."</p>";
			        echo '<p>'.$row['pdesc'].'</p> ';
		        ?>
		        <?php if(isset($_SESSION['cart']) && in_array($product_id, $_SESSION['cart'] )  ) {?>
		        <button class="btn btn-success cart" id="cart"> Added to Cart </button>
		        <?php }else{?>
		        	<button class="btn btn-info cart" onclick="add_to_cart(<?php  echo $product_id ;?>)" id="cart"> Add to Cart </button>
		        <?php } ?>
		    	</div>
		    	</div>
         
		    	<?php
		    }
		} else {
		    echo "No Products";
		}
		?>
		</div>
		<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'nilmadhab';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>

	</div>
	

</body>
</html>