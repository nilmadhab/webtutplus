A��U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (467,249,747,567)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"249";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 04:25:26";s:13:"post_date_gmt";s:19:"2015-07-12 04:25:26";s:12:"post_content";s:16009:"<p>Hey folk. So we have added add new post and delete post option in our blog. But we also need to be able to edit our post. So today we will learn how to edit a post. We will add a edit button beside each post. When clicked in that button, we will go to another page. Lets call it edit_post.php. We will edit the post there. Then we will come back to main post page and we will see updated post there.</p>
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
";s:10:"post_title";s:50:"update posts  in your blog, make those editable!!!";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:28:"uodate-the-post-in-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-12 16:11:11";s:17:"post_modified_gmt";s:19:"2015-08-12 10:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=249";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"467";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-25 00:07:34";s:13:"post_date_gmt";s:19:"2015-07-24 18:37:34";s:12:"post_content";s:25246:"<p style="text-align: center;">Hi guys,We have all played A Picture Puzzle Game Online. In this tutorial we shall show you how to make one such game</p>
<p><span>[button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/puzzle" target="_blank"]Try it![/button] [button colour="orange" type="roundedarrow" size="large" link="<a href="http://demo.webtutplus.com/puzzle">http://demo.webtutplus.com/</a>puzzle.zip" target="_blank"]Download Code[/button]</span></p>
<p>Firstly you will need slices of the picture, you may visit <a href="http://picslice.com/" target="_blank">picslice.com</a> or use any tool you have and get it done.</p>
<center><img src="http://mytuto.byethost8.com/s1.png" height="400px" width="700px" /></center>
<p style="text-align: center;">The PicSlice site where you need to upload the picture</p>
<p><img src="http://mytuto.byethost8.com/s2.png" height="400px" width="700px" class="aligncenter" /></p>
<p>An uploaded image being sliced into different pieces</p>
<p>&nbsp;</p>
<p><b>Step 1:-</b> Divide the screen into two divisions. One for the section of putting up the image and the other for the navigation section</p>
<center><img src="http://mytuto.byethost8.com/s3.jpg" height="400px" width="700px" /></center>
<p>The basic layout of the game where one division is the image puzzle and the other is the navigation bar</p>
<p><b>Step 2:-</b>The picture division is made by using a table.Create a Table with as many cells as the number of slices in the picture</p>
<p><b>  Step 3:-</b>In each table cell put an image tag where the image pieces will be shown when the button is clicked</p>
<pre class="prettyprint lang-javascript"><table style="margin:0px 0px 0px 45px;height:450px;width:600px" cellspacing="0" cellpadding="0" border="1">
<tr>
<td style="height:150px;width:200px">
<img id="w" src=""></img>
</td>
<td style="height:150px;width:200px"  >
<img id="w1" src=""></img>
</td>
<td style="height:150px;width:200px" >
<img id="w2" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px" >
<img id="w3" src=""></img>
</td>
<td  style="height:150px;width:200px" >
<img id="w4" src="b5.jpg"></img>
</td>
<td style="height:150px;width:200px" >
<img id="w5" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px">
<img id="w6" src=""></img>
</td>
<td  style="height:150px;width:200px">
<img id="w7" src=""></img>
</td>
<td style="height:150px;width:200px">
<img id="w8" src=""></img>
</td>
</tr>
</table></pre>
<p>Source Code for the Table which holds the images</p>
<pre class="prettyprint lang-javascript"><div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p><br /></center>
<center><button id="bu" onclick="show()">Click Here</button>
<br /><br />
Guess The Name
<br />
<br />
<form onSubmit="return check()">
<center>
<input type="text"  width="50px" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
</form>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
</center>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</div></pre>
<p>Source Code for the Navigation Bar</p>
<p><span color="red" style="color: red;"><b>Understanding the JavaScript Section</b></span></p>
<p>The Javascript Section is the main logic behind the functioning of the game. We will have a detailed look into that</p>
<pre class="prettyprint lang-javascript"><script>
var c=-1;
var f=100;
document.getElementById('a').innerHTML="Initial Score:-100";
document.getElementById('b').innerHTML="Current Score:-100";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="b1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="b8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="b6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w1").src="b2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w3").src="b4.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w8").src="b9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==6)
{document.getElementById("w6").src="b7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==7)
{
alert("It's Big Ben");
document.getElementById("bu").hidden=true;
document.getElementById("w2").src="b3.jpg";
}
}
</script></pre>
<p>JavaScript code image display and score calculation</p>
<p><b><span color="red" style="color: red;">Image Display and Score Calculation</span></b></p>
<p><b>Step 1:-</b>Take a variable c=-1</p>
<p><b>Step 2:-</b>In function show() check if c=-1 if so then change the button text to 'Show Another' in order to start the game and increment c</p>
<p><b>Step 3:-</b>Since the function show() is called on button click so whenever the button is clicked put a check for the current value of c</p>
<p><b>Step 4:-</b>For every value of c use the document.getElementById('id').src="Image Piece URL" to display a image in the particular cell</p>
<p><b>Step 5:-</b><span>Recall the fact that every table cell has an image tag with an id. Pass that id into that 'id' field and the corresponding image URL. Example:-document.getElementById("w6").src="b7.jpg"</span>
</p>
<p><b>Step 6:-</b>Keep incrementing c each time and when you reach the last piece use the document.getElementById('button id').hide=true inorder to hide the 'Show Another' button</p>
<p><b>Step 7:-</b>Alert the answer to the user</p>
<p><b>Step 8:-</b>For calculating the score take a variable f with the initial score and for each image piece reveal decrement it by 10 and display using the getElementById('id').innerHTML=f ('id' is the paragraph id where score is to be displayed)</p>
<pre class="prettyprint lang-javascript"><script><br /><br />function check()<br />{<br />    var na=document.getElementById('name').value;<br />    na=na.toLowerCase();<br />    var nb="big ben";<br />    if(na.match(nb))<br />    {<br />    alert("You have guessed it correctly");<br />    return true;<br />    }<br />    else<br />    {<br />    alert("Wrong Answer Try Again");<br />    <br />    }<br /><br />}<br /></script><span id="mce_marker" data-mce-type="bookmark">​</span></pre>
<center></center>
<p style="text-align: left;">JavaScript code for checking the right answer</p>
<p>&nbsp;</p>
<p><span color="red" style="color: red;"><b>Checking The Answer</b></span></p>
<p><b>Step 1:-</b>In this function check() extract the answer from the text input field which the user types using the document.getElementById('id').value and store it in a variable na(id is again the input text field in the form of the navigation bar)</p>
<p><b>Step 2:-</b>Store the correct answer in another variable nb and compare both the variables.Alert if the user is right or wrong. Use toLowerCase() function to avoid case sensitive issues</p>
<center><img src="http://mytuto.byethost8.com/s4.jpg" height="400px" width="700px" class="aligncenter" /></center><p>
</p>
<p>&nbsp;</p>
<p><img src="http://mytuto.byethost8.com/s5.jpg" height="400px" width="700px" class=" aligncenter" /></p>
<center>Alerts for Right and Wrong Answers</center><p>
</p>
<p>&nbsp;</p>
<p><b><span color="red" style="color: red;">Creating the Main Screen</span></b></p>
<p>This is a rather simple task which just includes three buttons Easy,Medium,Difficult each navigate to different levels of the game</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('ew.jpg')">
<center>
<div style="margin:0px 0px 0px 0px;height:150px;width:800px;background-image:url('texture-02.jpg')"
<br />
<br />
<br />
<h1><b>PICTURE  PUZZLE  GAME</h1>
</div>
<br />
<br />
<br />
<br />
<br />
<a href="easy.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px"><b>Easy</button></a>

<a href="medium.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px"><b>Medium</button></a>

<a href="hard.html" target="_self" style="text-decoration:none"><button  class="btn btn-primary" style="width:100px;height:50px"><b>Difficult</button></a>

</center>
</body>
</head>
</html></pre>
<p>
Source Code for the Main Screen</p>
<p><img src="http://mytuto.byethost8.com/s6.jpg" height="400px" width="700px" class=" aligncenter" /></p>
<p>Main Screen Window</p>
<p><b><span color="red" style="color: red;">NOTE:</span></b>The tutorial has been made demonstrating the easy mode.For medium and hard levels follow the same technique and just change the scoring pattern and number of image slices</p>
<p><span style="color: #008000;">Complete Code :</span></p>
<p><!--nextpage--></p>
<p>1. Easy</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>
</title>
<body style="background-image:url('ew.jpg')">
<div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p>
<br /> 
</center>
<center><button id="bu" onclick="show()">Click Here</button>
<br />
<br />
Guess The Name
<br />
<br />
<form onSubmit="return check()">
<center>
<input type="text"  width="50px" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
</form>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
</center>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</div>
<div style="margin:-1200px 0px 0px 80px;height:538px;width:700px;background-image:url('texture-02.jpg')">
<br />
<br />
<table style="margin:0px 0px 0px 45px;height:450px;width:600px" cellspacing="0" cellpadding="0" border="1">
<tr>
<td style="height:150px;width:200px">
<img id="w" src=""></img>
</td>
<td style="height:150px;width:200px"  >
<img id="w1" src=""></img>
</td>
<td style="height:150px;width:200px" >
<img id="w2" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px" >
<img id="w3" src=""></img>
</td>
<td  style="height:150px;width:200px" >
<img id="w4" src="b5.jpg"></img>
</td>
<td style="height:150px;width:200px" >
<img id="w5" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px">
<img id="w6" src=""></img>
</td>
<td  style="height:150px;width:200px">
<img id="w7" src=""></img>
</td>
<td style="height:150px;width:200px">
<img id="w8" src=""></img>
</td>
</tr>
</table>
</div>
</body>
<script>
var c=-1;
var f=100;
document.getElementById('a').innerHTML="Initial Score:-100";
document.getElementById('b').innerHTML="Current Score:-100";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="b1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="b8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="b6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w1").src="b2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w3").src="b4.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w8").src="b9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==6)
{document.getElementById("w6").src="b7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==7)
{
alert("It's Big Ben");
document.getElementById("bu").hidden=true;
document.getElementById("w2").src="b3.jpg";
}
}
</script>
<script>
function check()
{
var na=document.getElementById('name').value;
na=na.toLowerCase();
var nb="big ben";
if(na.match(nb))
{
alert("You have guessed it correctly");
return true;
}
else
{
alert("Wrong Answer Try Again");
}
}
</script>
</html></pre>
<p>2. Medium</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>
</title>
<body style="background-image:url('ew.jpg')">
<div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p>
<br />
</center>
<center><button id="bu" onclick="show()">Click Here</button>
<br />
<br />
Guess The Name
<br />
<br />
<center>
<form onSubmit="return check()">
<input type="text" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</center>
</div>
<div style="margin:-1200px 0px 0px 30px;height:580px;width:820px;background-image:url('texture-02.jpg')">
<br />
<br />
<table style="margin:0px 0px 0px 30px" cellspacing="0" cellpadding="0" border="1" width="750px" height="500">
<tr>
<td style="height:166px;width:187px">
<img id="w" src=""></img>
</td>
<td style="height:166px;width:187px"  >
<img id="w1" src=""></img>
</td>
<td style="height:166px;width:187px" >
<img id="w2" src="slice3.jpg"></img>
</td>
<td style="height:166px;width:187px" >
<img id="w3" src=""></img>
</td>
</tr>
<tr>
<td  style="height:166px;width:187px" >
<img id="w4" src=""></img>
</td>
<td  style="height:166px;width:187px" >
<img id="w5" src=""></img>
</td>
<td style="height:166px;width:187px" >
<img id="w6" src=""></img>
</td>
<td style="height:166px;width:187px">
<img id="w7" src=""></img>
</td>
</tr>
<tr>
<td  style="height:166px;width:187px">
<img id="w8" src=""></img>
</td>
<td  style="height:166px;width:187px">
<img id="w9" src=""></img>
</td>
<td style="height:166px;width:187px">
<img id="w10" src=""></img>
</td>
<td style="height:166px;width:187px" >
<img id="w11" src=""></img>
</td>
</tr>
</table>
</div>
</body>
<script>
var c=-1;
var f=160;
document.getElementById('a').innerHTML="Initial Score:-150";
document.getElementById('b').innerHTML="Current Score:-150";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="slice1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="slice8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="slice6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w4").src="slice5.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w1").src="slice2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w11").src="slice12.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c+=2;
}
else if(c==7)
{
document.getElementById("w3").src="slice.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==8)
{
document.getElementById("w10").src="slice11.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==9)
{
document.getElementById("w8").src="slice9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==10)
{document.getElementById("w6").src="slice7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==11)
{
alert("It's Adam Gilchrist");
document.getElementById('bu').hidden=true;
document.getElementById("w9").src="slice10.jpg";
}
}
</script>
<script>
function check()
{
var na=document.getElementById('name').value;
na=na.toLowerCase();
var nb="adam gilchrist";
if(na.match(nb))
{
alert("You have guessed it correctly");
return true;
}
else
{
alert("Wrong Answer Try Again");
}
}
</script>
</html></pre>
<p>3. Hard</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>
</title>
<body style="background-image:url('ew.jpg')">
<div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p>
<br />
</center>
<center><button id="bu" onclick="show()">Click Here</button>
<br />
<br />
Guess The Name
<br />
<br />
<center>
<form onSubmit="return check()">
<input type="text" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</center>
</div>
<div style="margin:-1200px 0px 0px 60px;height:480px;width:720px;background-image:url('texture-02.jpg')">
<br />
<br />
<br />
<table style="margin:0px 0px 0px 45px" cellspacing="0" cellpadding="0" border="1" width="624px" height="352">
<tr>
<td style="height:88px;width:124px">
<img id="w" src=""></img>
</td>
<td style="height:88px;width:124px"  >
<img id="w1" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w2" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w3" src="n4.jpg"></img>
</td>
<td style="height:88px;width:124px" >
<img id="w4" src=""></img>
</td>
</tr>
<tr>
<td  style="height:88px;width:124px" >
<img id="w5" src=""></img>
</td>
<td  style="height:88px;width:124px" >
<img id="w6" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w7" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w8" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w9" src=""></img>
</td>
</tr>
<tr>
<td  style="height:88px;width:124px">
<img id="w10" src=""></img>
</td>
<td  style="height:88px;width:124px">
<img id="w11" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w12" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w13" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w14" src=""></img>
</td>
</tr>
<tr>
<td  style="height:88px;width:124px">
<img id="w15" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w16" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w17" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w18" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w19" src=""></img>
</td>
</tr>
</table>
</div>
</body>
<script>
var c=-1;
var f=160;
document.getElementById('a').innerHTML="Initial Score:-160";
document.getElementById('b').innerHTML="Current Score:-160";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="n1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="n8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="n6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w4").src="n5.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w1").src="n2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w11").src="n12.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c+=2;
}
else if(c==7)
{
document.getElementById("w2").src="n3.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==8)
{
document.getElementById("w10").src="n11.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==9)
{
document.getElementById("w8").src="n9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==10)
{document.getElementById("w6").src="n7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==11)
{document.getElementById("w13").src="n14.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==12)
{document.getElementById("w16").src="n17.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==13)
{document.getElementById("w14").src="n15.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==14)
{document.getElementById("w19").src="n20.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==15)
{document.getElementById("w15").src="n16.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==16)
{document.getElementById("w12").src="n13.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==17)
{document.getElementById("w17").src="n18.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==18)
{document.getElementById("w18").src="n19.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==19)
{
alert("It's Nelson Mandela");
document.getElementById('bu').hidden=true;
document.getElementById("w9").src="n10.jpg";
}
}
</script>
<script>
function check()
{
var na=document.getElementById('name').value;
na=na.toLowerCase();
var nb="nelson mandela";
if(na.match(nb))
{
alert("You have guessed it correctly");
return true;
}
else
{
alert("Wrong Answer Try Again");
}
}
</script>
</html></pre>
";s:10:"post_title";s:49:"Picture Puzzle Game using HTML CSS and JavaScript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"picture-puzzle-game-using-html-css-and-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-26 10:18:20";s:17:"post_modified_gmt";s:19:"2015-07-26 04:48:20";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=467";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"567";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-27 21:01:23";s:13:"post_date_gmt";s:19:"2015-07-27 15:31:23";s:12:"post_content";s:5180:"Hi friends, we have created a image gallery web application earlier, where we are able to upload images and display those in nice format.

<a href="http://webtutplus.com/upload-image-make-image-gallery/" target="_blank">Please refer to this tutorial for image gallery </a>

<a href="http://demo.webtutplus.com/image_galary/" target="_blank">Here is the demo of the earlier image gallery</a>

But there were too many images, and as a result of that page was taking lot of time to load. So We will add pagination today in the gallery. There are more than 50 images in the gallery. We will keep 9 images in one page.

&nbsp;

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/gallery_pagination/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/gallery_pagination.zip" target="_blank"]Download Code[/button]

So question is how can we distribute images in various pages. Simple we have to use mysql LIMIT and OFFSET for that.

For example
<pre class="prettyprint lang-mysql">SELECT * 
FROM images_table
LIMIT 10 OFFSET 10</pre>
This query will select 10 images from image number 10 to 20.

So we will use offset 0 for first page, offset 10 for second page, 30 for 3rd page so on.

Lets look at the image gallery code once again. I removed image upload feature here to simplify the code.
<pre class="prettyprint lang-html">
 
    

<?php  $conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); if (!$conn) { echo "cannot connect"; } ?>
<div class="container">
<h2 class="bg-danger" style="text-align: center;">Image Galary</h2>
<div class="row"></div>
';
}
} else {
echo "0 results";
}
?&gt;

</div>
</pre>
We will look in sql query in more details.
<pre class="prettyprint lang-php"><!--?php  $sql = "SELECT * FROM images"; $result = mysqli_query($conn, $sql); if (mysqli_num_rows($result) &gt; 0) {     // output data of each row     while($row = mysqli_fetch_assoc($result)) {     $image = "images/".$row['image_name'];         echo '<div class="col-sm-4">;<img src='.$image.' style="width:300px;height:200px" ?>';
    }
} else {
    echo "0 results";
}
?>;</pre>
Now the question is how do we know which page we are at. We will define it in url using a GET parameter.

So suppose the url is http://demo.webtutplus.com/image_galary/. This is first page. For second page we will change the url to http://demo.webtutplus.com/image_galary?page=2, similarly third page is http://demo.webtutplus.com/image_galary?page=3

We will change the $sql query according to the get page parameter. We will keep 9 images per page 3 in each row
<pre class="prettyprint lang-php"><!--?php  		if($_GET['page']){ // if the page variable is defined in GET request 			if(is_numeric($_GET['page']) ){ // and if the page number id number 				$current_page = $_GET['page']; // get the current page   			} 			 		}else{ 			$current_page = 1; // if current page is not set set it to 1  		} 		$OFFSET = 9*($current_page - 1); // each page will contain 9 images  										// so multiply it by 9  		$sql = "SELECT * FROM images ORDER BY Id DESC  LIMIT 9 OFFSET $OFFSET"; 		// apply LIMIT and OFFSET to SQl and sort it by descending order 		// so that we can see recently uploaded image first  		$result = mysqli_query($conn, $sql); 		if (mysqli_num_rows($result) &gt; 0) { 		    // output data of each row 		    while($row = mysqli_fetch_assoc($result)) { 		    	$image = "images/".$row['image_name']; 		        echo '&lt;div class="col-sm-4"&gt;&lt;img src='.$image.' style="width:300px;height:200px" ?-->';
		    }
		} else {
		    echo "0 results";
		}
		?&gt;</pre>
Now we have to add the pagination links at bottom of page.
<pre class="prettyprint lang-php"><!--?php  				$sql = "SELECT * FROM images"; 				$result = mysqli_query($conn, $sql); // get all images 				$no_page = mysqli_num_rows($result) / 9;  // no of page is 													// total no of images divided by 9 				$current = 1; 				while($current &lt;= $no_page){ 					echo "&lt;li&gt;&lt;a href='?page=$current'&gt;$current&lt;/a&gt;&lt;/li&gt;"; 					// set pages and pass get parameter  					$current +=1; 				} 			?>
Here is the screenshot with pagination

[caption id="" align="aligncenter" width="1366"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/pagination.png"><img class="" src="http://webtutplus.com/wp-content/uploads/2015/07/pagination.png" alt="" width="1366" height="768" /></a> pagination[/caption]

You can see I am in page number 2 here.

&nbsp;

Here is the complete code.
<pre class="prettyprint lang-html">	
	 
    

	<!--?php  	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect"); 	if (!$conn) { 		echo "cannot connect"; 	} 	?>
<div class="container">
<h2 class="bg-danger" style="text-align: center;">Image Galary</h2>
<div class="row"></div>
';
}
} else {
echo "0 results";
}
?&gt;

</div>
</pre>
We will add the image upload feature with it. We can also highlight the current page in pagination.

&nbsp;

&nbsp;

&nbsp;
";s:10:"post_title";s:34:"Adding pagination in image gallery";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"adding-pagination-image-gallery";s:7:"to_ping";s:0:"";s:6:"pinged";s:55:"
http://webtutplus.com/upload-image-make-image-gallery/";s:13:"post_modified";s:19:"2015-08-14 09:05:10";s:17:"post_modified_gmt";s:19:"2015-08-14 03:35:10";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=567";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"747";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-16 19:00:54";s:13:"post_date_gmt";s:19:"2015-08-16 13:30:54";s:12:"post_content";s:6907:"So. Made a new website and want a easy login from facebook. Facebook have a Javascript SDK and we are going to utilise that for creating fb login for our website.

All References from  : <a href="https://developers.facebook.com" target="_blank">https://developers.facebook.com</a>

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/fblogin" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/fblogin.zip" target="_blank"]Download Code[/button]

<strong>1. Create a facebook App</strong>

You need to create a facebook app for your website and get app ID and access to facebook javascript api.

Go to : <a href="https://developers.facebook.com/apps/" target="_blank">https://developers.facebook.com/apps/</a>

Click on Add new app and choose website.

<a href="http://webtutplus.com/wp-content/uploads/2015/08/Untitled6.png"><img class="alignnone size-large wp-image-757" src="http://webtutplus.com/wp-content/uploads/2015/08/Untitled6-1024x558.png" alt="Untitled" width="1024" height="558" /></a>

After Creating a APP, you will get a APP ID and APP Secret. We need that keep those with you.

<a href="http://webtutplus.com/wp-content/uploads/2015/08/11.png"><img class="alignnone size-large wp-image-756" src="http://webtutplus.com/wp-content/uploads/2015/08/11-1024x560.png" alt="1" width="1024" height="560" /></a>

<strong>2. Use Javascript SDK to create login</strong>
<pre class="lang:default decode:true ">window.fbAsyncInit = function() {
    FB.init({
      appId      : '879422455440957',
      xfbml      : true,
      version    : 'v2.4'
    });</pre>
Here Put your APP ID and the version you are using. The code given has been created using reference from facebook developers website. So Now coming to the point. I will show the part of code that you need to edit.
<pre class="lang:default decode:true">function loginCALL() {
  
    FB.api('/me?fields=name,email,first_name,last_name,gender,locale', function(response) {
      console.log(JSON.stringify(response));
      var gen = 'male';
      if(response.gender=='male')
        gen = 'female';
      var string = 'Thanks for logging in, &lt;h2&gt;&lt;strong&gt;' + response.name + '!&lt;/strong&gt;&lt;/h2&gt;' ;
      string += '&lt;p&gt; Your Email : '+ response.email + '&lt;/p&gt; ';
      string += '&lt;p&gt; You are interested in : '+ gen + ' . Is that right !!! &lt;/p&gt; ';
      document.getElementById('status').innerHTML = string;
    });
  }</pre>
Here, we make a login call and get a response .

Specify the things you want to receive in response. Here <span class="lang:default decode:true  crayon-inline ">'/me?fields=name,email,first_name,last_name,gender,locale'</span>

Now, you can access to all those using response._property_.

<span style="color: #ff0000;">Complete Code :</span>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Facebook Login JavaScript | Webtut+ &lt;/title&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="initial-scale=1.0, user-scalable=no"&gt;
    &lt;meta charset="utf-8"&gt;
     &lt;link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.css" rel="stylesheet" media="screen"&gt;

    &lt;!-- Bootstrap CSS --&gt;
    &lt;link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" /&gt;
    &lt;title&gt;Weather| Webtut+&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {

    //if you are alredy logged in into facebook and the app. 
    if (response.status === 'connected') {
      loginCALL();
    } 
    // The person is logged into Facebook, but not your app.
    else if (response.status === 'not_authorized') {
     
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } 
    // The person is not logged into Facebook, so we're not sure if
    // they are logged into this app or not.
    else 
    {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  //This is your app information, see the tutorial on how to generate this app ID.
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '879422455440957',
      xfbml      : true,
      version    : 'v2.4'
    });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously.
  //You will get this piece of code directly from facebook website.
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  //This is where you work out.
  function loginCALL() {
  
    FB.api('/me?fields=name,email,first_name,last_name,gender,locale', function(response) {
      console.log(JSON.stringify(response));
      var gen = 'male';
      if(response.gender=='male')
        gen = 'female';
      var string = 'Thanks for logging in, &lt;h2&gt;&lt;strong&gt;' + response.name + '!&lt;/strong&gt;&lt;/h2&gt;' ;
      string += '&lt;p&gt; Your Email : '+ response.email + '&lt;/p&gt; ';
      string += '&lt;p&gt; You are interested in : '+ gen + ' . Is that right !!! &lt;/p&gt; ';
      document.getElementById('status').innerHTML = string;
    });
  }
&lt;/script&gt;

&lt;h1 class="text-center"&gt;Create Facebook Login for your website&lt;/h1&gt;

&lt;br&gt;
&lt;div class="text-center"&gt;&lt;fb:login-button scope="public_profile,email" onlogin="checkLoginState();" size="xlarge"&gt;&lt;/fb:login-button&gt;&lt;/div&gt;&lt;br&gt;
&lt;br&gt;

&lt;div class="text-center"&gt;&lt;div id="status"&gt;&lt;/div&gt;&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
If you are having understanding some piece of code. Please comment here, We are here to help you out.";s:10:"post_title";s:38:"Create Facebook login for your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:38:"create-facebook-login-for-your-website";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-16 19:15:49";s:17:"post_modified_gmt";s:19:"2015-08-16 13:45:49";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=747";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:25246;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:49;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:55;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}