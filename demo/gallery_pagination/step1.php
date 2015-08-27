<!DOCTYPE html>
<html>
<head>
	<title>My Image galary</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>
	<?php 

	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?>

	
	<div class="container">
		<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>
		<div class="row">
		<?php
		if($_GET['page']){ // if the page variable is defined in GET request
			if(is_numeric($_GET['page']) ){ // and if the page number id number
				$current_page = $_GET['page'];
			}
			
		}else{
			$current_page = 1;
		}
		$OFFSET = 9*($current_page - 1);
		$sql = "SELECT * FROM images ORDER BY Id DESC  LIMIT 9 OFFSET $OFFSET";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-4"><img src='.$image.' style="width:300px;height:200px" /></div>';
		    }
		} else {
		    echo "0 results";
		}
		?>
		<ul class="pagination">
			<?php
				$sql = "SELECT * FROM images";
				$result = mysqli_query($conn, $sql);
				$no_page = mysqli_num_rows($result) / 9;
				$current = 1;
				while($current <= $no_page){
					echo "<li><a href='?page=$current'>$current</a></li>";
					$current +=1;
				}
			?>

  			
  
		</ul>
		</div>

	</div>
	</div>

</body>
</html>