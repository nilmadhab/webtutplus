<!DOCTYPE html>
<html>
<head>
	<title>Google Charts</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <!-- this js file is required to draw google chart -->
    <?php 
    // make databse connection 
	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?>
  
   <script type="text/javascript">
   		google.load('visualization', '1', {packages: ['corechart', 'bar']});
		google.setOnLoadCallback(draw); // on loading call draw function

function draw(y) {
	// draw google chart
     var data = google.visualization.arrayToDataTable([
		        ['Product', 'quantity', ], // first row is title
		        ['Phone', 50], // add product and number of item sold 
		        ['computer', 100],
		        ['footwares', 100],
		        ['speaker', 160],
		        ['dress', 100]
		     
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
		<div id="chart_div" style="width:700px;height:350px;margin:0 auto;margin-top:20px"></div>
		<!-- this container contains the google chart -->
	</div>


</body>
</html>