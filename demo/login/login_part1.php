<!DOCTYPE html>
<html>
<head>
	<title>PHP simple login</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
  

</head>
<body>
<?php 
	$result=mysql_connect( 'localhost','root','')or die("cannot connect");
	if (!$result) {
		return false;
	}
	if (!mysql_select_db('blog',$result)){
		return false;
	}
	$conn= $result;


	if(isset($_POST['register'])){
		// clean strings and escape unwanted charecter by mysql_escape_string 
		$email = mysql_escape_string($_POST['email']); 
		$password1 = mysql_real_escape_string($_POST['pass1']);
		$password2 = mysql_real_escape_string($_POST['pass2']);
		$msg = '';
		$flag = 0;
		if(strcmp($password1, $password2)){
			$msg = "Passwords does not match";
			$flag = 1; // set flag = 1; if password does not match 
		}

		$sql = "SELECT * FROM user where email = '$email' "; // check email exists or not
		$result = mysql_query($sql,$conn);
		$rowcount=mysql_num_rows($result);
		if($rowcount >= 1){
			// means there is an entry in database with same email.
			$msg = "email alredy exists";
			$flag = 1; // set flag = 1 , if user already exits 
		}
		if($flag == 0){
			// means password matches and email doesnot exist in database 
			// make a new entry in database 

			$sql = "INSERT INTO `user`(`email`, `password`) VALUES ('$email','$password1')";
			if($result = mysql_query($sql,$conn)){
				$msg = "USER registered succesfully";
			}

		}
	}
?>
	<div class="container">
		<div class="row">
			<h2 class="bg-info">
				<?php if(isset($msg)){
					echo $msg;
					} ?>
			</h2>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<h1> Login  Here </h1>
				<form action="" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1" name="pass">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
				  </div>
			
				  <button type="submit" class="btn btn-success" name="login">Login</button>
				</form>
			</div>
			<div class="col-sm-6">
				<h1> Register  Here </h1>
				<form action="" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
				  </div>
				   <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
				  </div>
			
				  <button type="submit" class="btn btn-info" name="register">Register</button>
				</form>
			</div>
		</div>


	</div>


</body>
</html>

