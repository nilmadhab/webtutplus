<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>TnP IIT KGP</title>
  
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <?php
    	function db_connect(){

		$con = mysqli_connect("localhost","webtutplus","webtutplus","webtut_tnp");
		
		// Check connection
		if (mysqli_connect_errno())
	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  	//else
			//echo "Connection Successful<br>";
		
		return $con;
	}
	$conn = db_connect();
    ?>
<body>

	<div class="container" style="text-align:center">
		<h1 class="bg-info" > Search T &amp; P IIT kgp </h1>
		<form action="" method="get" style="width:50%;margin:0 auto">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Search</label>
		    <input type="text" class="form-control" name="company"
		    id="exampleInputEmail1" placeholder="Enter a company name" required>
		  </div>
		
		  
	
		  <button type="submit" name="search" class="btn btn-info">Submit</button>
		</form>


	</div>
	<div class="container" >
		<h1 class="bg-success" style="text-align:center" > Search Results </h1>
		<div id="result">
			<table class="table table-striped">
			<?php 
				if(isset($_GET['search'])){
					$company  = mysqli_real_escape_string($conn,$_GET['company'] );
					//echo $company;
					$query = "SELECT * FROM data WHERE description LIKE '%$company%'";
					//echo $query;
					$result = mysqli_query($conn, $query);

						if (mysqli_num_rows($result) > 0) {
						    // output data of each row
						    while($row = mysqli_fetch_assoc($result)) {
						    	?>
						    		<tr>
						    			<td>
						    			<?php $link =  $row['link']; ?>
						    			<a href="<?php echo $link; ?>" target="_blank"> 
						    			<?php echo $row['description']; ?>
						    			</a>
						    			</td>
						    			<td>
						    				
						    				<a href="<?php echo $link; ?>" target="_blank"> 
						    					Open Link
						    				</a>
						    			</td>
						    		</tr>



						    	<?php
				         

						    }
						} else {
						    echo "No result matching";
						}



				}

			?>

				</table>
		</div>
	</div>


</body>
</html>