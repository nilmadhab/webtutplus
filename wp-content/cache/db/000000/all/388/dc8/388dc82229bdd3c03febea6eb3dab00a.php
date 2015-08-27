|÷ÝU<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:157:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'google-plus-login' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"499";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-07-26 23:04:04";s:13:"post_date_gmt";s:19:"2015-07-26 17:34:04";s:12:"post_content";s:8742:"<p>Hello today we will give a simple demo on how to integrate google plus login into your website. We will have to make use of API for Google+ and need to use the OAuth technology.Â 
</p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_login/" target="_blank"]DEMO[/button]</p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_login.zip" target="_blank"]Download Code[/button]</p>
[caption id="attachment_550" align="aligncenter" width="580"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/web_login.png" alt="A basic example of a login which provides Google+ integration" width="580" height="226" class="size-full wp-image-550" /> A basic example of a login which provides Google+ integration[/caption]
<p>&nbsp;</p>
<p><strong>Step 1</strong>-<span>Login to </span><a href="https://code.google.com/apis/console" target="_blank">Google API Console</a><span>. Go to </span><strong>APIs andÂ </strong><span>you will have to turn on Google Plus API.</span></p>
[caption id="attachment_544" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1031-1024x382.png" alt="Enabling The Google+ API" width="1024" height="382" class="size-large wp-image-544" /> Enabling The Google+ API[/caption]
<p>&nbsp;</p>
<p><strong>Step 2</strong>-<span>Go to </span><strong>APIs and Auth</strong><span> and then under </span><strong>credentials</strong><span> tab. Click on </span><strong>create new client ID</strong><span> as shown below.</span></p>
[caption id="attachment_545" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1041-1024x365.png" alt="Create a new Client ID " width="1024" height="365" class="size-large wp-image-545" /> Create a new Client ID[/caption]
<p><strong>Step 3</strong>-<span>Now when you will have to enter your website path and the file path (redirect URI) to get your new client ID. You will need to enter these client ID and secret in your code later.</span></p>
[caption id="attachment_546" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1051-1024x393.png" alt="Enter the website path and the Redirect URI" width="1024" height="393" class="size-large wp-image-546" /> Enter the website path and the Redirect URI[/caption]
<p><strong>Step 4</strong>-Click on Create new Browser Key in order to set up the API Key</p>
[caption id="attachment_547" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1061-1024x398.png" alt="Get The API key from here" width="1024" height="398" class="size-large wp-image-547" /> Get The API key from here[/caption]
<p>&nbsp;</p>
<p><strong>Step 5</strong>-<span>Now you have to set </span><strong>Consent screen</strong><span>. This will be the screen that will be displayed before the user is redirected</span></p>
[caption id="attachment_548" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1072-1024x494.png" alt="The Consent Screen" width="1024" height="494" class="size-large wp-image-548" /> The Consent Screen[/caption]
<p>&nbsp;</p>
<p>Once this is done you are ready to code. Given below are the two php file codes you need to type in. You need to code using API</p><p><span style="text-decoration: underline; color: #ff0000;"><strong>google-plus-access.php</strong></span></p>
<pre class="prettyprint lang-php "><?php
require_once 'google-api-php-client/src/apiClient.php';
require_once 'google-api-php-client/src/contrib/apiPlusService.php';

session_start();

$client = new apiClient();
$client->setApplicationName("Google+ PHP Starter Application");

//*********** Replace with Your API Credentials **************
$client->setClientId('621798410973-jjpnovbshh910o0nba3rbsb3il7o2qrb.apps.googleusercontent.com');
$client->setClientSecret('Y-9CFVCpPvdSd7ut_UrtOz0f');
$client->setRedirectUri('http://localhost/webtuts/google_login/');
$client->setDeveloperKey('AIzaSyBB6QfvkHGd8S1gy16GtQa7u21EAQ9gQaE');
//************************************************************
 
$client->setScopes(array('https://www.googleapis.com/auth/plus.me'));
$plus = new apiPlusService($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['access_token']);
}

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $me = $plus->people->get('me');

  $optParams = array('maxResults' => 100);
  $activities = $plus->activities->listActivities('me', 'public', $optParams);


  $_SESSION['access_token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}
?></pre>
<p>&nbsp;</p>
<p>google-plus-access.php file (Put in your Id,Secret,Redirect URI and Authorization Key from the console)Â </p>

<p>You can run this application in localhost as well. Just give local host in the Web Path and Redirect URI Section</p><p><span style="text-decoration: underline; color: #ff0000;"><strong>index.php file</strong></span></p>
<pre class="prettyprint lang-html"><?php
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
                                                               
		<?php if(isset($me) && isset($activities)) {
				// if session is set then display logout button
			 ?>
				<a href="?logout" ><h3 class="btn btn-danger pull-right" >Logout</h3></a>  
		<?php } ?>
		</div>
	</div>

<?php if(isset($me) && isset($activities)) {
			// if session is set then display profile pics 
	 ?>
<div class="big-container" >
	<div class="profile" >
		<div class="profile-pic" >
				<a href="<?php echo(substr($me['image']['url'],0,stripos($me['image']['url'],'?sz='))); ?>" >
					<img src="<?php echo(substr($me['image']['url'],0,stripos($me['image']['url'],'?sz='))); ?>?sz=200" />
				</a> <!--profile picture display -->
		</div>
		<div class="profile-info" >
			<div class="name" >
				<?php if(isset($me['displayName'])) echo(strtolower($me['displayName'])); ?>
			</div>  
			<!-- Name display -->
			
			
		</div>
	</div>
	

<?php }else{ 
		// if user is not logged in display the login button 
	?>
	<div class="login-box">
	<div id="connect-button"><a href="<?php echo($authUrl); ?>" ><img src="plus.jpg" alt="Connect to your Google+ Account"/></a><div> <!--the google+ button-->
	
</div>

	<?php } ?>
</body>
</html></pre>
[caption id="attachment_549" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1081-1024x422.png" alt="Using Localhost" width="1024" height="422" class="size-large wp-image-549" /> Using Localhost[/caption]
<p>&nbsp;</p>
<p>Your main screen will look like this after running the code</p>
[caption id="attachment_552" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-1091-1024x473.png" alt="Main Login Screen" width="1024" height="473" class="size-large wp-image-552" /> Main Login Screen[/caption][caption id="attachment_553" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-110-1024x345.png" alt="The Consent Screen" width="1024" height="345" class="size-large wp-image-553" /> The Consent Screen[/caption][caption id="attachment_554" align="aligncenter" width="1024"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-111-1024x422.png" alt="Your Login is Successful" width="1024" height="422" class="size-large wp-image-554" /> Your Login is Successful[/caption]
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";s:10:"post_title";s:35:"Google plus login from your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"google-plus-login";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-27 00:18:29";s:17:"post_modified_gmt";s:19:"2015-07-26 18:48:29";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=499";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:8742;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:35;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:17;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}