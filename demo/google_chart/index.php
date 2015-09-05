<!DOCTYPE html>
<html>
<head>
	<title>Google Charts</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <!-- this js file is required to draw google chart -->
    <?php 
    ini_set('display_errors', true); 
    // make databse connection 
    include 'connect.php';


	?>

	<?php 

	if(isset($_POST['add'])){ // check whether the form is submitted or not
		$product_name = mysqli_real_escape_string($conn,$_POST['product_name']);
		// filter product name 
		$quantity = mysqli_real_escape_string($conn,$_POST['qunatity']);
		// filter product quantity
		 $sql = "INSERT INTO `chart`( `product_name`, `quantity`) 
		 VALUES ('$product_name','$quantity')";
		 // save product and quantity in databade
		if (mysqli_query($conn, $sql)) {
		    echo "New record created successfully<br />";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	?>
  
   <script type="text/javascript">
   		google.load('visualization', '1', {packages: ['corechart', 'bar']});
		google.setOnLoadCallback(draw); // on loading call draw function

function draw(y) {
	// draw google chart
     var data = google.visualization.arrayToDataTable([
		        ['Product', 'quantity', ], // first row is title
		        <?php
		$sql = "SELECT * FROM chart";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	
		    	$product = $row['product_name']; // get product name
		    	$quantity = $row['quantity']; // get product quantity
		    	$quantity = (int)$quantity;
		    	echo "['$product',$quantity],"; // display product and quantity 
		    }
		} 
		?>
		     
		      ]);

      var options = {
        chart: {
          title: 'Sell per day ', // set title
		        
        },
        hAxis: { // horizontal axis options are set here 
		          title: 'number of items sold for each product ',
		          minValue: 0
		        },
		         bars: 'vertical',
		        vAxis: {  // verticle axis options are set here 
		          title: 'product' // verticle axis is product 
		        },
        bars: 'vertical', // keep the chart verticle
        colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
        
      };
      var chart = new google.charts.Bar(document.getElementById('chart_div'));
      // draw the chart in chart_div 
      chart.draw(data, options); // set the options
    }
   </script>
</head>
<body>
	<div class="container">
		<h1 class="bg-info" style="text-align:center"> Google chart to show sell per product </h1>
		<div id="chart_div" style="width:1000px;height:450px;margin:0 auto;margin-top:20px"></div>
		<!-- this container contains the google chart -->
	</div>
	<div class="container" style="margin-top:100px">
		<form class="form-inline" style="" action="" method="post">
		  <div class="form-group">
		    <label >New product name </label>
		    <input type="text" class="form-control" name="product_name" placeholder="Enter product name" style="width:300px" required>
		  </div>
		  <div class="form-group">
		    <label >Quantity</label>
		    <input type="number" class="form-control" name="qunatity" max="500" style="width:300px" placeholder="quantity below 500" required>
		  </div>
		  <button type="submit" class="btn btn-success" name="add">Add item </button>
		</form>
	</div>


</body>
</html>