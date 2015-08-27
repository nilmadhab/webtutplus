<?php
    include_once "google-plus-access.php"; //include API
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Login through Google+ API Demo</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='style.css' />
    </head>
<body>

		
		<div>
		<h1 style="text-align:center"  class="bg-success">Google+ Login Demo</h1></div>
		</div>
                                                               
		<?php if(isset($me) && isset($activities)) { ?>
				<a href="?logout" ><h3 class="btn btn-danger pull-right" >Logout</h3></a>  
		<?php } else { ?>
				<button class="btn btn-success"><a href="<?php echo($authUrl); ?>" ><h5><font color="white"><center><b>Login</center></h5></a></button>
		<?php }
		 //session if not set then main screen with login is displayed
		  ?>
		</div>
	</div>

<?php if(isset($me) && isset($activities)) { ?>
<div class="big-container" >
	<div class="profile" >
		<div class="profile-pic" ><a href="<?php echo(substr($me['image']['url'],0,stripos($me['image']['url'],'?sz='))); ?>" ><img src="<?php echo(substr($me['image']['url'],0,stripos($me['image']['url'],'?sz='))); ?>?sz=200" /></a> <!--profile picture display -->
		</div>
		<div class="profile-info" >
			<div class="name" ><a href="<?php echo($me['url']) ; ?>" ><?php if(isset($me['displayName'])) echo(strtoupper($me['displayName'])); else echo "Not set or private"; ?></a></div>  <!-- Name display -->
		
			</div>
		</div>
	</div>
	

<?php }else{ ?>
	<div class="login-box">
	<div id="connect-button"><a href="<?php echo($authUrl); ?>" ><img src="plus.jpg" alt="Connect to your Google+ Account"/></a><div> <!--the google+ button-->
	
</div>

	<?php } ?>
</body>
</html>