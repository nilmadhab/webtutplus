<!DOCTYPE html>
<html>
<head>
	<title>My Image galary with pagination</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>
	<?php 

	$conn=mysqli_connect( 'localhost','webtutplus','webtutplus','webtut_blog')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?>

	<?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] > 0) { // if error > 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "<br />";
			} else {
			    echo "File name: " . $_FILES['file']['name'] . "<br />";
			    echo "File type: " . $_FILES['file']['type'] . "<br />";
			    echo "Temp path: " . $_FILES['file']['tmp_name']. "<br />";;
			    $image_name =  $_FILES['file']['name']; // store image name 
			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br />";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "image is ok!!"."<br />";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        echo "The file ". $image_name. " has been uploaded.";
				        $sql = "INSERT INTO pagination (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.<br />";
				    }
				}
			}
		} 
	?>


	
	<div class="container">
		<h2 style="text-align:center"  class="bg-danger"> Image Galary with pagination</h2>
		<div class="container">
		<form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto">

		  <div class="form-group">
		    <label for="exampleInputFile">Upload  image  in galary</label>
		    <input type="file" name="file" id="exampleInputFile">
		    <p class="help-block">Upload your image </p>
		  </div>
		 
		  
		  <button type="submit" name="upload" class="btn btn-info" >Upload</button>
		</form>
	</div>
		<div class="row">
		<?php
		if($_GET['page']){ // if the page variable is defined in GET request
			if(is_numeric($_GET['page']) ){ // and if the page number id number
				$current_page = $_GET['page']; // get the current page  
			}
			
		}else{
			$current_page = 1; // if current page is not set set it to 1 
		}
		$OFFSET = 9*($current_page - 1); // each page will contain 9 images 
										// so multiply it by 9 
		$sql = "SELECT * FROM pagination ORDER BY Id DESC  LIMIT 9 OFFSET $OFFSET";
		// apply LIMIT and OFFSET to SQl and sort it by descending order
		// so that we can see recently uploaded image first 
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-4"><img src='.$image.' style="width:230px;height:130px;margin-top:5px" /></div>';
		    }
		} else {
		    echo "0 results";
		}
		?>
		<ul class="pagination">
			<?php
				$sql = "SELECT * FROM pagination";
				$result = mysqli_query($conn, $sql); // get all images
				$no_page = mysqli_num_rows($result) / 9;  // no of page is
													// total no of images divided by 9
				$current = 1;
				while($current <= $no_page){
					if($_GET['page']){ // if the page variable is defined in GET request
						if(is_numeric($_GET['page']) ){ // and if the page number id number
							$current_page = $_GET['page']; // get the current page  
						}
						
					}else{
						$current_page = 1; // if current page is not set set it to 1 
					}
					if($current == $current_page)
					echo "<li class='active'><a href='?page=$current'>$current</a></li>";
				else
					echo "<li><a href='?page=$current'>$current</a></li>";
					// set pages and pass get parameter 
					$current +=1;
				}
			?>

  			
  
		</ul>
		</div>

	</div>
	</div>

</body>
</html>