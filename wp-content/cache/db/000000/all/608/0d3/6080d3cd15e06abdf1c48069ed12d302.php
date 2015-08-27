"�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:57:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (272,188,249)";s:11:"last_result";a:3:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"188";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-10 17:57:13";s:13:"post_date_gmt";s:19:"2015-07-10 12:27:13";s:12:"post_content";s:9933:"<p>Hey folks. We have created a simple blog using php and mysql earlier. Today we will create login and logout system for the blog. We will add facebook and google login also in a later tutorial.</p>
<p>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/login/login_part2.php" target="_blank"]Demo[/button]</p>
<p>[button colour="limegreen" type="squarearrow" size="large" link="http://demo.webtutplus.com/login.zip" target="_blank"]Download Source[/button]</p>
<h2>Step 1:- create basic html form.</h2>
<hr />
<p>We willl create three pages. The main page will have the registration and login form. If the user can login successfully, he will be redirected into success page otherwise an error page.</p>
<p>The main page will have two form one for registration and one for login. We will add simple html5 validation.</p>
<p>Here is the sample html code</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

  



</head>

<body>



	<div class="container">

			

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


</pre>
<p>I have given name to each input field to identify easily.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/login_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/login_1-1024x518.png" alt="login_1" width="1024" height="518" class="alignnone size-large wp-image-196" /></a></p>
<h2>step2:- Create user table to store user information</h2>
<hr />
<p>Open localhost/phpmyadmin, then create a blog databse and user table. Add email and password field.</p>
<pre class="prettyprint lang-mysql">CREATE TABLE `user` ( `user_id` INT(11) NOT NULL AUTO_INCREMENT , `email` VARCHAR(200) NOT NULL , `password` VARCHAR(200) NOT NULL  , PRIMARY KEY (`user_id`)  ) ENGINE = InnoDB;<span id="mce_marker" data-mce-type="bookmark">​</span></pre>
<h2>Step 3:- Registration</h2>
<hr />
<p>&nbsp;</p>
<p>Now we will add action to the registration form. When submitted the form and if the password field and confirm password field match, we will register the user , provided the email does not exists in database already.</p>
<p>We have to show error message in following cases.</p>
<p>a) Passwords does not match.</p>
<p>b) email already registered.</p>
<p>Lets submit the form and catch the submitted form in php. I have commented php code to explain whats going on. I think you will be able to follow easily.  I am checking above cases and printing suitable message.</p>
<pre class="prettyprint lang-php"><?php 

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

?></pre>
<p>Here is the sample html code to check if message is set or not. If message variable is set then display it accordingly.</p>
<pre class="prettyprint lang-html"><div class="row">

			<h2 class="bg-info">

				<?php if(isset($msg)){

					echo $msg;

					} ?>

			</h2>

		</div></pre>
<h2>Step 3 :- Login </h2>
<hr />
<p>&nbsp;</p>
<p>When the login form is submitted, we will check if email exist in database or not. If email exists we will check whether password is correct or not. If both password and email are correct, we will take user to a new protected page,else we will display the error. Simple right ?</p>
<pre class="prettyprint lang-php">if(isset($_POST['login'])){

		$email = mysql_escape_string($_POST['email']); 

		$pass = mysql_real_escape_string($_POST['password']);



		$msg = "";

		$sql = "SELECT * FROM user where email = '$email' and password = '$pass' "; 

		// check email and password are correct or not

		$result = mysql_query($sql,$conn);

		$rowcount=mysql_num_rows($result);

		if($rowcount == 0){

			// means either email does not exist or password is wrong  

			$msg = "Invalid credentials";

			 

		}else{

			// Start the session

			session_start();

			// Set session variables

			$_SESSION["email"] = $email;



			//echo $_SESSION["email"];

			// go to protected success page

			header('Location: success.php');

		}



	}</pre>
<h2>Step 4:- Create password protectecd success.php page.</h2>
<hr />
<p>&nbsp;</p>
<p>Now we will create the success page. We have to make sure this page is only availble for logged in user.</p>
<p>If user is not logged in , redirect him to home page.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

  <?php 

  		// Start the session

		session_start();

  		if(!isset($_SESSION["email"])){

  			// if session email variable is not set

  			// redirect user to login/register page



  			header('Location: login_part2.php');

  		}

  ?>



</head>

<body>

	<div class="container">

		<h2 class="bg-success"> Login Succesful </h2>

		<p class="bg-info">



			Welcome <?php

			// user is logged in 

			// lets show his/her email

			 echo  $_SESSION["email"]; 

			?>

		</p>



	</div>





</body>

</html></pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/login_2.png"></a></p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/login_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/login_2-1024x518.png" alt="login_2" width="1024" height="518" class="alignnone size-large wp-image-197" /></a></p>
<h2>Step 5:- Logout the user </h2>
<hr />
<p>We have to start_session, unset all session variable and then destroy session . That is all required for logout.</p>
<p>Add this code in success.php to logout.</p>
<pre class="prettyprint lang-html"><p> Click <a href="logout.php" > Here </a> to log out </p></pre>
<p>now make a logout.php file and add the following snippet.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

  <?php 

  		// Start the session

  		session_start();



  		// unset all seasson variable 

		session_unset(); 



		// destroy the session 

		session_destroy(); 

  ?>



</head>

<body>

	<div class="container">

		<h2 class="bg-danger"> Logout  Succesful </h2>

		



		<p> Click <a href="login_part2.php" > Here </a> to go to home page </p>



	</div>





</body>

</html></pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/login_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/login_3-1024x518.png" alt="login_3" width="1024" height="518" class="alignnone size-large wp-image-198" /></a></p>
<p>Thats all for logout. So now you can register , login go to a screat password protected page and log yourself out. Cool right?</p>
";s:10:"post_title";s:33:"Create login system for your blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:33:"create-login-system-for-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-25 19:33:48";s:17:"post_modified_gmt";s:19:"2015-07-25 14:03:48";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=188";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"249";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 04:25:26";s:13:"post_date_gmt";s:19:"2015-07-12 04:25:26";s:12:"post_content";s:16009:"<p>Hey folk. So we have added add new post and delete post option in our blog. But we also need to be able to edit our post. So today we will learn how to edit a post. We will add a edit button beside each post. When clicked in that button, we will go to another page. Lets call it edit_post.php. We will edit the post there. Then we will come back to main post page and we will see updated post there.</p>
<p>Download the sample blog post from <a href="http://demo.webtutplus.com/blog.zip" target="_blank">here</a> .</p>
<p><span style="color: #eb2626;"><strong><span style="text-decoration: underline;">Make sure to change connection to database according to your local  computer.</span></strong></span></p>
<p>You can refer to <a href="http://webtutplus.com/php-create-your-own-blog/" target="_blank">blog</a> here. We will continue from here. Add update button and update post from database.</p>
<p>Here is the sample code for blog. Refer to above post to create blog database and posts table.</p><p>[button colour="lightgrey" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_update/index.php" target="_blank"]Demo[/button]</p><p>[button colour="limegreen" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_update.zip" target="_blank"]Download Code[/button]</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		if(isset($_POST['submit'])){

			// if new post is submitted store it in database

			$title = mysql_real_escape_string($_POST['title']);

			$post = mysql_real_escape_string($_POST['post']);



			$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";

			$result = mysql_query($sql,$conn);

			// insert the post into database

			if($result){



			}else{

				echo "failed to insert data ".mysql_error($conn);// if insertion failed display error

			}





		}

	?>



	<div class="container">

		<h2 style="text-align:center"> Welcome to my blog </h2>

		<div class="container">

			<form action="" method="post" style="width:50%; margin: 0 auto;">

			  <div class="form-group">

			    <label for="exampleInputEmail1">Title</label>

			    <input type="text" class="form-control" name="title"  placeholder="Enter title">

			  </div>

			  <div class="form-group">

			    <label for="exampleInputPassword1">Post </label>

			 	

			     <textarea class="form-control" rows="3" name="post"> write your post</textarea>

			  </div>

			  

			  <button type="submit" name="submit" class="btn btn-info">New post</button>

			</form>

		</div>

		<table class="table table-striped">

	      <thead>

	        <tr>

	          <th>#</th>

	          <th>Title</th>

	          <th>Post</th>

	          

	        </tr>

	      </thead>

	      <tbody>

	      <?php 

	      $sql = "SELECT * FROM Posts"; // select all the post from databse and display it here

	      if($result = mysql_query($sql,$conn)){

			while($row = mysql_fetch_array($result)){

				// display rows one by one 

				echo "<tr>";

					echo "<td>{$row['post_id']}</td>";

					echo "<td>{$row['title']}</td>";

					echo "<td>{$row['post']}</td>";

					$post_id = $row['post_id']; // store Post id into a variable



				

				echo "</tr>";

			}

		}

	      ?>

	        

      	  </tbody>

    	</table>

	</div>



</body>

</html></pre>
<p>I hope everything is clear till now. If everything works correctly, you will be able to create new post and see those.</p>
<p>Lets start working on real stuff from here.</p>
<h2><strong>Step 1:- Lets add "UPDATE" button into each post. </strong></h2>
<hr />
<p>&nbsp;</p>
<p>Lets break down this step into small sub steps.</p>
<ol>
<li>We will create a button for each post in same "&lt;tr&gt;" tag. The button will be just another column i.e within a  "&lt;td&gt;" tag. Please refer to w3school if you are not familiar with basic html and boostrap css.</li>
<li>Each button will contain a link to update_post.php file. We will pass the post_id (primary key) of each post to that page.</li>
</ol>
<p>After line 151 add the follwing code to do the exact same thing.</p>
<pre class="prettyprint lang-php">echo "<td><a href='update.php?post_id=$post_id' class='btn btn-info' >

							 Update</a> </td>";

							 // make a link to update.php page and add btn-info bootstrap 

							 // class to make the button look nice. Send post_id as a get 

							 // parameter</pre>
<p>Simple and intuitive right?</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_3-1024x518.png" alt="update_3" width="1024" height="518" class="alignnone size-large wp-image-259" /></a></p>
<h2><strong>Step 2: Fetch the post from database and display the information into a form</strong></h2>
<hr />
<p>&nbsp;</p>
<p>What we are going to do in this step is </p>
<ol>
<li>First create a file update.php</li>
<li>Add basic bootstrap css file there for styling</li>
<li>Make databse connection  there.</li>
<li>Get the post_id (primary key of the post ) from url</li>
<li>Get the associated post by making a mysql_select query</li>
<li>Make a simple form and display the info there.</li>
</ol>
<p>I have done all those step in below code. I have commented in appropriate places. Please comment below, if you do not understand anything.</p>
<h5><span style="text-decoration: underline; color: #ff0000;">update.php</span></h5>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		$post_id = $_GET['post_id']; // retrive post id from Url 

		$sql = "SELECT * FROM Posts WHERE post_id='$post_id' "; // Select the post by post_id

		$result = mysql_query($sql,$conn); // execute sql query

		$row = mysql_fetch_assoc($result); // get particular row

		

	?>



	<div class="container">

		<h2 style="text-align:center"> Welcome to my blog, update your post</h2>

		<div class="container">

			<form action="" method="post" style="width:50%; margin: 0 auto;">

			  <div class="form-group">

			    <label for="exampleInputEmail1">Title</label>

			    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" >

			  </div>

			  <!-- display post title by printing it in value attribute of input field -->

			  <div class="form-group">

			    <label for="exampleInputPassword1">Post </label>

			 	

			     <textarea class="form-control" rows="3" name="post"> <?php echo $row['post']; ?></textarea>

			  </div>

			  <!-- display post body  by printing it in text area -->

			  <button type="submit" name="update" class="btn btn-info">Update </button>

			</form>

		</div>



	</div>



</body>

</html></pre>
<p>Here is the screenshot of update.php page. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_1-1024x518.png" alt="update_1" width="1024" height="518" class="alignnone size-large wp-image-257" /></a></p>
<h2><strong>Step 3:- Update the post and go back to main page.</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Now we are at final stage. Once user go to update page after clicking the update button, he/she will update the post.</p>
<p>Then once he click the update button, the post should be updated and he should head back to original post.</p>
<p>Lets do that task.</p>
<pre class="prettyprint lang-php">if(isset($_POST['update'])){ // check whether update button is clicked or not

			$title = mysql_real_escape_string($_POST['title']); // clean the title

			$post = mysql_real_escape_string($_POST['post']); // clean the post

			$sql = "UPDATE `Posts` SET `title`='$title',`post`='$post' WHERE `post_id`= $post_id";

			// sql query to update the particular post with given post id 

			// update the post with new title and post provided by user 

			$result = mysql_query($sql,$conn); // execute mysql query to update



			if($result){

				echo "record updated succesfully";

				header("Location: index.php");



			}else{

				// this is for debugging purpose

				echo $sql."<br />"; // if insertion failed check sql

				echo "failed to insert data ".mysql_error($conn); // check the mysql error

			}



		}

		

	?></pre>
<p>Lets update the second post. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_4.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_4-1024x518.png" alt="update_4" width="1024" height="518" class="alignnone size-large wp-image-260" /></a></p>
<p>If we click the update button. The post will be updated and we will head back to main page, where we will the the post is really updated.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/update_5.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/update_5-1024x518.png" alt="update_5" width="1024" height="518" class="alignnone size-large wp-image-261" /></a></p>
<p>Cool right ? Here is the complete code of two pages.</p>
<p><span style="text-decoration: underline; color: #ff0000;"><strong>index.php</strong></span></p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		if(isset($_POST['submit'])){

			// if new post is submitted store it in database

			$title = mysql_real_escape_string($_POST['title']);

			$post = mysql_real_escape_string($_POST['post']);



			$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";

			$result = mysql_query($sql,$conn);

			// insert the post into database

			if($result){



			}else{

				echo "failed to insert data ".mysql_error($conn);// if insertion failed display error

			}





		}

	?>



	<div class="container">

		<h2 style="text-align:center"> Welcome to my blog </h2>

		<div class="container">

			<form action="" method="post" style="width:50%; margin: 0 auto;">

			  <div class="form-group">

			    <label for="exampleInputEmail1">Title</label>

			    <input type="text" class="form-control" name="title"  placeholder="Enter title">

			  </div>

			  <div class="form-group">

			    <label for="exampleInputPassword1">Post </label>

			 	

			     <textarea class="form-control" rows="3" name="post"> write your post</textarea>

			  </div>

			  

			  <button type="submit" name="submit" class="btn btn-info">New post</button>

			</form>

		</div>

		<table class="table table-striped">

	      <thead>

	        <tr>

	          <th>#</th>

	          <th>Title</th>

	          <th>Post</th>

	          

	        </tr>

	      </thead>

	      <tbody>

	      <?php 

	      $sql = "SELECT * FROM Posts"; // select all the post from databse and display it here

	      if($result = mysql_query($sql,$conn)){

			while($row = mysql_fetch_array($result)){

				// display rows one by one 

				echo "<tr>";

					echo "<td>{$row['post_id']}</td>";

					echo "<td>{$row['title']}</td>";

					echo "<td>{$row['post']}</td>";

					$post_id = $row['post_id']; // store Post id into a variable

					echo "<td><a href='update.php?post_id=$post_id' class='btn btn-info' >

							 Update</a> </td>";

							 // make a link to update.php page and add btn-info bootstrap 

							 // class to make the button look nice. Send post_id as a get 

							 // parameter

							 

				

				echo "</tr>";

			}

		}

	      ?>

	        

      	  </tbody>

    	</table>

	</div>



</body>

</html></pre>
<p><span style="color: #ff0000;"><strong><span style="text-decoration: underline;">update.php</span></strong></span></p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <?php 

	ini_set('display_errors', true);

	//error_reporting(E_ALL ^ E_NOTICE);

	$conn=mysql_connect( 'localhost','root','')or die("cannot connect"); // make database connection

	if (!$conn) {

		return false;

	}

	if (!mysql_select_db('blog',$conn)){ // select blog database

		return false;

	}

	

	?>

</head>

<body>

	<?php 

		$post_id = $_GET['post_id']; // retrive post id from Url 

		$sql = "SELECT * FROM Posts WHERE post_id='$post_id' "; // Select the post by post_id

		$result = mysql_query($sql,$conn); // execute sql query

		$row = mysql_fetch_assoc($result); // get particular row



		if(isset($_POST['update'])){ // check whether update button is clicked or not

			$title = mysql_real_escape_string($_POST['title']); // clean the title

			$post = mysql_real_escape_string($_POST['post']); // clean the post

			$sql = "UPDATE `Posts` SET `title`='$title',`post`='$post' WHERE `post_id`= $post_id";

			// sql query to update the particular post with given post id 

			// update the post with new title and post provided by user 

			$result = mysql_query($sql,$conn); // execute mysql query to update



			if($result){

				echo "record updated succesfully";

				header("Location: index.php");



			}else{

				// this is for debugging purpose

				echo $sql."<br />"; // if insertion failed check sql

				echo "failed to insert data ".mysql_error($conn); // check the mysql error

			}



		}

		

	?>



	<div class="container">

		<h2 style="text-align:center"> Welcome to my blog, update your post</h2>

		<div class="container">

			<form action="" method="post" style="width:50%; margin: 0 auto;">

			  <div class="form-group">

			    <label for="exampleInputEmail1">Title</label>

			    <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>" >

			  </div>

			  <!-- display post title by printing it in value attribute of input field -->

			  <div class="form-group">

			    <label for="exampleInputPassword1">Post </label>

			 	

			     <textarea class="form-control" rows="3" name="post"> <?php echo $row['post']; ?></textarea>

			  </div>

			  <!-- display post body  by printing it in text area -->

			  <button type="submit" name="update" class="btn btn-info">Update </button>

			</form>

		</div>



	</div>



</body>

</html></pre>
";s:10:"post_title";s:50:"update posts  in your blog, make those editable!!!";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:28:"uodate-the-post-in-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-12 16:11:11";s:17:"post_modified_gmt";s:19:"2015-08-12 10:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=249";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"272";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 19:31:01";s:13:"post_date_gmt";s:19:"2015-07-12 19:31:01";s:12:"post_content";s:17525:"<p><span> Hi guys, we are all familiar with paypal. In this post we will see how easily we can </span><span id="IL_AD3" class="IL_AD">integrate</span><span> PayPal payment gateway  in our website. We will use javascript to do so.</span></p>
<p>[button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/payment_gateway/" target="_blank"]Demo[/button] [button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/payment_gateway.zip" target="_blank"]Download Code[/button]</p>
<p>&nbsp;</p>
<p>Step 1:- Go to <a href="https://www.paypal.com/" target="_blank">paypal site</a> . Create a account. It is free. You dont need to verify anything. You can use our email contact.webtutplus.com also for this tutorial.</p>
<p>Step 2:- Download this js file. Name it paypal.min.js</p>
<pre class="prettyprint lang-javascript">/*!
 * paypaljsbuttons
 * JavaScript integration for PayPal's payment buttons
 * @version 1.0.3 - 2014-05-20
 * 
 */
if("undefined"==typeof PAYPAL||!PAYPAL)var PAYPAL={};PAYPAL.apps=PAYPAL.apps||{},function(a){"use strict";function b(){var b,c,d,e;a.getElementById("paypal-button")||(b="",c=a.createElement("style"),d=".paypal-button",e=d+" button",b+=d+" { white-space: nowrap; }",b+=d+" .field-error {  border: 1px solid #FF0000; }",b+=d+" .hide { display: none; }",b+=d+" .error-box { background: #FFFFFF; border: 1px solid #DADADA; border-radius: 5px; padding: 8px; display: inline-block; }",b+=e+' { white-space: nowrap; overflow: hidden; border-radius: 13px; font-family: "Arial", bold, italic; font-weight: bold; font-style: italic; border: 1px solid #ffa823; color: #0E3168; background: #ffa823; position: relative; text-shadow: 0 1px 0 rgba(255,255,255,.5); cursor: pointer; z-index: 0; }',b+=e+':before { content: " "; position: absolute; width: 100%; height: 100%; border-radius: 11px; top: 0; left: 0; background: #ffa823; background: -webkit-linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); background: -moz-linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); background: -ms-linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); background: linear-gradient(top, #FFAA00 0%,#FFAA00 80%,#FFF8FC 100%); z-index: -2; }',b+=e+':after { content: " "; position: absolute; width: 98%; height: 60%; border-radius: 40px 40px 38px 38px; top: 0; left: 0; background: -webkit-linear-gradient(top, #fefefe 0%, #fed994 100%); background: -moz-linear-gradient(top, #fefefe 0%, #fed994 100%); background: -ms-linear-gradient(top, #fefefe 0%, #fed994 100%); background: linear-gradient(top, #fefefe 0%, #fed994 100%); z-index: -1; -webkit-transform: translateX(1%);-moz-transform: translateX(1%); -ms-transform: translateX(1%); transform: translateX(1%); }',b+=e+".small { padding: 3px 15px; font-size: 12px; }",b+=e+".large { padding: 4px 19px; font-size: 14px; }",c.type="text/css",c.id="paypal-button",c.styleSheet?c.styleSheet.cssText=b:c.appendChild(a.createTextNode(b)),a.getElementsByTagName("head")[0].appendChild(c))}function c(b,c){var e,f,g,h,k,l,m,o,p,q,r,s,t,u,v,w=a.createElement("form"),x=a.createElement("button"),y=a.createElement("input"),z=a.createElement("p"),A=a.createElement("label"),B=a.createElement("input"),C=a.createElement("select"),D=a.createElement("option"),E=b.items,F=[],G={};w.method="post",w.action=j.replace("{env}",b.items.env.value),w.className="paypal-button",w.target="_top";var H=a.createElement("div");H.className="hide",H.id="errorBox",w.appendChild(H),B.type="text",B.className="paypal-input",z.className="paypal-group",A.className="paypal-label",C.className="paypal-select",y.type="hidden",l=E.size&&E.size.value||"large",m=E.lc&&E.lc.value||"en_US",o=n[m]||n.en_US,p=o[c],b.items.text&&(p=b.items.text.value,b.remove("text"));for(k in E)e=E[k],e.hasOptions?F.push(e):e.isEditable?(h=B.cloneNode(!0),h.name=e.key,h.value=e.value,g=A.cloneNode(!0),v=i.config.labels[e.key]||o[e.key]||e.key,g.htmlFor=e.key,g.appendChild(a.createTextNode(v)),g.appendChild(h),f=z.cloneNode(!0),f.appendChild(g),w.appendChild(f)):(h=f=y.cloneNode(!0),h.name=e.key,h.value=e.value,w.appendChild(f));F=d(F);for(k in F)if(e=F[k],F[k].hasOptions){if(G=e.value,G.options.length>1){h=y.cloneNode(!0),h.name="on"+e.displayOrder,h.value=G.label,q=C.cloneNode(!0),q.name="os"+e.displayOrder;for(s in G.options)if(t=G.options[s],"string"==typeof t)r=D.cloneNode(!0),r.value=t,r.appendChild(a.createTextNode(t)),q.appendChild(r);else for(u in t)r=D.cloneNode(!0),r.value=u,r.appendChild(a.createTextNode(t[u])),q.appendChild(r);g=A.cloneNode(!0),v=G.label||e.key,g.htmlFor=e.key,g.appendChild(a.createTextNode(v)),g.appendChild(q),g.appendChild(h)}else g=A.cloneNode(!0),v=G.label||e.key,g.htmlFor=e.key,g.appendChild(a.createTextNode(v)),h=y.cloneNode(!0),h.name="on"+e.displayOrder,h.value=G.label,g.appendChild(h),h=B.cloneNode(!0),h.name="os"+e.displayOrder,h.value=G.options[0]||"",h.setAttribute("data-label",G.label),g.appendChild(h);f=z.cloneNode(!0),f.appendChild(g),w.appendChild(f)}try{x.type="submit"}catch(I){x.setAttribute("type","submit")}return x.className="paypal-button "+l,x.appendChild(a.createTextNode(p)),w.appendChild(x),w}function d(a){return a.sort(function(a,b){return a.displayOrder-b.displayOrder}),a}function e(b,c){var d,e,f=j.replace("{env}",b.items.env.value),g=a.createElement("img"),h=f+"?",i=13,l=b.items;c=c&&c.value||250;for(e in l)d=l[e],h+=d.key+"="+encodeURIComponent(d.value)+"&";return h=encodeURIComponent(h),g.src=k.replace("{env}",b.items.env.value).replace("{url}",h).replace("{pattern}",i).replace("{size}",c),g}function f(a){var b,c,d,e,f,h={},i=[];if(b=a.attributes)for(f=0,e=b.length;e>f;f++)c=b[f],(d=c.name.match(/^data-option([0-9])([a-z]+)([0-9])?/i))?i.push({name:"option."+d[1]+"."+d[2]+(d[3]?"."+d[3]:""),value:c.value}):(d=c.name.match(/^data-([a-z0-9_]+)(-editable)?/i))&&(h[d[1]]={value:c.value,isEditable:!!d[2]});return g(i,h),h}function g(a,b){var c,d,e,f,g,h={};for(j=0;j<a.length;j++)for(c=a[j],d=c.name,e=d.split("."),f=e.shift(),g=h;f;)g[f]||(g[f]={}),e.length||(g[f]=c.value),g=g[f],f=e.shift();var i,j,k,l,m={},n={},o=[],p={},q=Object.prototype.hasOwnProperty;for(i in h)if(q.call(h,i)){l=h[i];for(j in l){b["option_"+j]={value:{options:"",label:l[j].name},hasOptions:!0,displayOrder:parseInt(j,10)},m=l[j].select,n=l[j].price,o=[];for(k in m)p={},n?(p[m[k]]=m[k]+" "+n[k],o.push(p)):o.push(m[k]);b["option_"+j].value.options=o}}}function h(){this.items={},this.add=function(a,b,c,d,e){this.items[a]={key:a,value:b,isEditable:c,hasOptions:d,displayOrder:e}},this.remove=function(a){delete this.items[a]}}var i={},j="https://{env}.paypal.com/cgi-bin/webscr",k="https://{env}.paypal.com/webapps/ppint/qrcode?data={url}&pattern={pattern}&height={size}",l="JavaScriptButton_{type}",m={name:"item_name",number:"item_number",locale:"lc",currency:"currency_code",recurrence:"p3",period:"t3",callback:"notify_url",button_id:"hosted_button_id"},n={da_DK:{buynow:"Køb nu",cart:"Læg i indkøbsvogn",donate:"Doner",subscribe:"Abonner",paynow:"Betal nu",item_name:"Vare",number:"Nummer",amount:"Pris",quantity:"Antal"},de_DE:{buynow:"Jetzt kaufen",cart:"In den Warenkorb",donate:"Spenden",subscribe:"Abonnieren",paynow:"Jetzt bezahlen",item_name:"Artikel",number:"Nummer",amount:"Betrag",quantity:"Menge"},en_AU:{buynow:"Buy Now",cart:"Add to Cart",donate:"Donate",subscribe:"Subscribe",paynow:"Pay Now",item_name:"Item",number:"Number",amount:"Amount",quantity:"Quantity"},en_GB:{buynow:"Buy Now",cart:"Add to Cart",donate:"Donate",subscribe:"Subscribe",paynow:"Pay Now",item_name:"Item",number:"Number",amount:"Amount",quantity:"Quantity"},en_US:{buynow:"Buy Now",cart:"Add to Cart",donate:"Donate",subscribe:"Subscribe",paynow:"Pay Now",item_name:"Item",number:"Number",amount:"Amount",quantity:"Quantity"},es_ES:{buynow:"Comprar ahora",cart:"Añadir al carro",donate:"Donar",subscribe:"Suscribirse",paynow:"Pague ahora",item_name:"Artículo",number:"Número",amount:"Importe",quantity:"Cantidad"},es_XC:{buynow:"Comprar ahora",cart:"Añadir al carrito",donate:"Donar",subscribe:"Suscribirse",paynow:"Pague ahora",item_name:"Artículo",number:"Número",amount:"Importe",quantity:"Cantidad"},fr_CA:{buynow:"Acheter",cart:"Ajouter au panier",donate:"Faire un don",subscribe:"Souscrire",paynow:"Payer maintenant",item_name:"Objet",number:"Numéro",amount:"Montant",quantity:"Quantité"},fr_FR:{buynow:"Acheter",cart:"Ajouter au panier",donate:"Faire un don",subscribe:"Souscrire",paynow:"Payer maintenant",item_name:"Objet",number:"Numéro",amount:"Montant",quantity:"Quantité"},fr_XC:{buynow:"Acheter",cart:"Ajouter au panier",donate:"Faire un don",subscribe:"Souscrire",paynow:"Payer maintenant",item_name:"Objet",number:"Numéro",amount:"Montant",quantity:"Quantité"},he_IL:{buynow:"וישכע הנק",cart:"תוינקה לסל ףסוה",donate:"םורת",subscribe:"יונמכ ףרטצה",paynow:"כשיו שלם ע",item_name:"טירפ",number:"רפסמ",amount:"םוכס",quantity:"מותכ"},id_ID:{buynow:"Beli Sekarang",cart:"Tambah ke Keranjang",donate:"Donasikan",subscribe:"Berlangganan",paynow:"Bayar Sekarang",item_name:"Barang",number:"Nomor",amount:"Harga",quantity:"Kuantitas"},it_IT:{buynow:"Paga adesso",cart:"Aggiungi al carrello",donate:"Donazione",subscribe:"Iscriviti",paynow:"Paga Ora",item_name:"Oggetto",number:"Numero",amount:"Importo",quantity:"Quantità"},ja_JP:{buynow:"今すぐ購入",cart:"カートに追加",donate:"寄付",subscribe:"購読",paynow:"今すぐ支払う",item_name:"商品",number:"番号",amount:"価格",quantity:"数量"},nl_NL:{buynow:"Nu kopen",cart:"Aan winkelwagentje toevoegen",donate:"Doneren",subscribe:"Abonneren",paynow:"Nu betalen",item_name:"Item",number:"Nummer",amount:"Bedrag",quantity:"Hoeveelheid"},no_NO:{buynow:"Kjøp nå",cart:"Legg til i kurv",donate:"Doner",subscribe:"Abonner",paynow:"Betal nå",item_name:"Vare",number:"Nummer",amount:"Beløp",quantity:"Antall"},pl_PL:{buynow:"Kup teraz",cart:"Dodaj do koszyka",donate:"Przekaż darowiznę",subscribe:"Subskrybuj",paynow:"Zapłać teraz",item_name:"Przedmiot",number:"Numer",amount:"Kwota",quantity:"Ilość"},pt_BR:{buynow:"Comprar agora",cart:"Adicionar ao carrinho",donate:"Doar",subscribe:"Assinar",paynow:"Pagar agora",item_name:"Produto",number:"Número",amount:"Valor",quantity:"Quantidade"},ru_RU:{buynow:"Купить сейчас",cart:"Добавить в корзину",donate:"Пожертвовать",subscribe:"Подписаться",paynow:"Оплатить сейчас",item_name:"Товар",number:"Номер",amount:"Сумма",quantity:"Количество"},sv_SE:{buynow:"Köp nu",cart:"Lägg till i kundvagn",donate:"Donera",subscribe:"Abonnera",paynow:"Betal nu",item_name:"Objekt",number:"Nummer",amount:"Belopp",quantity:"Antal"},th_TH:{buynow:"ซื้อทันที",cart:"เพิ่มลงตะกร้า",donate:"บริจาค",subscribe:"บอกรับสมาชิก",paynow:"จ่ายตอนนี้",item_name:"ชื่อสินค้า",number:"รหัสสินค้า",amount:"ราคา",quantity:"จำนวน"},tr_TR:{buynow:"Hemen Alın",cart:"Sepete Ekleyin",donate:"Bağış Yapın",subscribe:"Abone Olun",paynow:"Şimdi öde",item_name:"Ürün",number:"Numara",amount:"Tutar",quantity:"Miktar"},zh_CN:{buynow:"立即购买",cart:"添加到购物车",donate:"捐赠",subscribe:"租用",paynow:"现在支付",item_name:"物品",number:"编号",amount:"金额",quantity:"数量"},zh_HK:{buynow:"立即買",cart:"加入購物車",donate:"捐款",subscribe:"訂用",paynow:"现在支付",item_name:"項目",number:"號碼",amount:"金額",quantity:"數量"},zh_TW:{buynow:"立即購",cart:"加到購物車",donate:"捐款",subscribe:"訂閱",paynow:"现在支付",item_name:"商品",number:"商品編號",amount:"單價",quantity:"數量"},zh_XC:{buynow:"立即购买",cart:"添加到购物车",donate:"捐赠",subscribe:"租用",paynow:"现在支付",item_name:"物品",number:"编号",amount:"金额",quantity:"数量"}};if(PAYPAL.apps.ButtonFactory||(i.config={labels:{}},i.buttons={buynow:0,cart:0,donate:0,qr:0,subscribe:0},i.create=function(a,d,f,g){var i,j,k,n,o=new h;if(!a)return!1;for(j in d)n=d[j],o.add(m[j]||j,n.value,n.isEditable,n.hasOptions,n.displayOrder);return f=f||"buynow",k="www",o.items.env&&o.items.env.value&&(k+="."+o.items.env.value),o.items.hosted_button_id?o.add("cmd","_s-xclick"):"cart"===f?(o.add("cmd","_cart"),o.add("add",!0)):"donate"===f?o.add("cmd","_donations"):"subscribe"===f?(o.add("cmd","_xclick-subscriptions"),o.items.amount&&!o.items.a3&&o.add("a3",o.items.amount.value)):o.add("cmd","_xclick"),o.add("business",a),o.add("bn",l.replace(/\{type\}/,f)),o.add("env",k),"qr"===f?(i=e(o,o.items.size),o.remove("size")):i=c(o,f),b(),this.buttons[f]+=1,g&&g.appendChild(i),i},PAYPAL.apps.ButtonFactory=i),"undefined"!=typeof a){var o,p,q,r,s,t,u=PAYPAL.apps.ButtonFactory,v=a.getElementsByTagName("script");for(s=0,t=v.length;t>s;s++)o=v[s],o&&o.src&&(p=o&&f(o),q=p&&p.button&&p.button.value,r=o.src.split("?merchant=")[1],r&&(u.create(r,p,q,o.parentNode),o.parentNode.removeChild(o)))}}(document),"object"==typeof module&&"object"==typeof module.exports&&(module.exports=PAYPAL);</pre>
<p>Step 3:- We will a simple webpage, which will have  three dresses, with different prices. </p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="bg-info" style="text-align:center"> Paypal Payment Gateway Intergation </h1>
</div>
<div class="container" style="margin-top:50px">

        <div class="col-sm-4">
            <img src="P1.jpg" width="200"><br />
           <p> $100 </p>
         
           
        </div>

        <div class="col-sm-4">
            <img src="P2.jpg" width="200"><br />
           
            <br />
            <p> $200 </p>
           
        </div>

        <div class="col-sm-4">
            <img src="P3.jpg" width="200"><br />
            <p> $300 </p>
          
          
    </div>



</body>
</html>

</pre>
<p>&nbsp;</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/paypal1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/paypal1-1024x576.png" alt="paypal1" width="1024" height="576" class="alignnone size-large wp-image-273" /></a></p>
<p>&nbsp;</p>
<p>Step 4:- Now we will add js button below each dress to purchase that dress by paypal.</p>
<pre class="prettyprint lang-javascript"><script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
    data-button="buynow"
    data-name="My product"
    data-amount="100.00"
    async
></script></pre>
<p>You can give merchant_id, if yur account is verified in first line. you can just write your email if your account is not verified. It will work for now. Give data-name and data-price. Obviously in a real website these information will have to be filled dynamically , may be from a mysql database. But this will work for now.</p>
<p>Once you add three buttons you will something like these.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/paypal2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/paypal2-1024x576.png" alt="paypal2" width="1024" height="576" class="alignnone size-large wp-image-274" /></a></p>
<p>The entire code snippet will be </p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>


 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="bg-info" style="text-align:center"> Paypal Payment Gateway Intergation </h1>
</div>
<div class="container" style="margin-top:50px">

        <div class="col-sm-4">
            <img src="P1.jpg" width="200"><br />
           <p> $100 </p>
           <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com" 

    data-button="buynow"
    data-name="My first product"
    data-amount="100.00"
    async
></script>
           
        </div>

        <div class="col-sm-4">
            <img src="P2.jpg" width="200"><br />
           
            <br />
            <p> $200 </p>
            <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
    data-button="buynow"
    data-name="My second product"
    data-amount="200.00"
    async
></script>
        </div>

        <div class="col-sm-4">
            <img src="P3.jpg" width="200"><br />
            <p> $300 </p>
            <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
    data-button="buynow"
    data-name="My third product"
    data-amount="300.00"
    async
></script>
          
    </div>



</body>
</html>

</pre>
<p>&nbsp;</p>
<p>Once you click the button, you will be redirected to paypal website like this.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/paypal3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/paypal3-1024x576.png" alt="paypal3" width="1024" height="576" class="alignnone size-large wp-image-275" /></a></p>
<p>&nbsp;</p>
<p>Of course there are many more things to be added. Like adding credit and debit card for transaction. Confirm by email. Showing a success message if transaction is successful or a failure message otherwise. This tutorial is meant to get you started.</p>
<p>&nbsp;</p>
";s:10:"post_title";s:51:"Paypal payment gateway integration using javascript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:51:"paypal-payment-gateway-integration-using-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-17 04:22:05";s:17:"post_modified_gmt";s:19:"2015-07-17 04:22:05";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=272";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:17525;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:51;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:51;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:3;s:10:"return_val";i:3;}