d�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:61:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (648,226,467,281)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"226";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 15:07:40";s:13:"post_date_gmt";s:19:"2015-07-11 15:07:40";s:12:"post_content";s:5464:"<p>Hello folks. We have created a blog earlier, where we can add new posts and can see all the posts. Today we will add option to delete post from the blog.</p>
<p>[button colour="grey" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_delete/index.php" target="_blank"]Demo[/button]</p>
<p>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog_delete.zip" target="_blank"]Download Code [/button]</p>
<p>Please refer to this <a href="http://webtutplus.com/php-create-your-own-blog/">post</a> for creating the blog. Go through the code once. If any doubt feel free to comment.</p>
<p>Now we will add delete buttons in each post. Here how I will delete the post.</p>
<ol>
<li>I willl create delete buttons in each post.</li>
<li>When clicked delete button of a specific post, I will pass the post_id as get parameter and take user to delete.php page.</li>
<li>There I will delete the post and redirect user to the main page.</li>
</ol>
<h2><strong>Step 1:- Create delete button for each post</strong></h2>
<hr />
<p>Here is the code snippet for the blog.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <?php 
	ini_set('display_errors', true);
	//error_reporting(E_ALL ^ E_NOTICE);
	$result=mysql_connect( 'localhost','root','25011994')or die("cannot connect");
	if (!$result) {
		return false;
	}
	if (!mysql_select_db('blog',$result)){
		return false;
	}
	$conn= $result;
	?>
</head>
<body>
	<?php 
		if(isset($_POST['submit'])){
			$title = mysql_real_escape_string($_POST['title']);
			$post = mysql_real_escape_string($_POST['post']);

			$sql = "INSERT INTO `Posts`(`title`, `post`) VALUES ('$title','$post')";
			$result = mysql_query($sql,$conn);

			if($result){

			}else{
				echo "failed to insert data ".mysql_error($conn);
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
	      $sql = "SELECT * FROM Posts";
	      if($result = mysql_query($sql,$conn)){
			while($row = mysql_fetch_array($result)){
				echo "<tr>";
					echo "<td>{$row['post_id']}</td>";
					echo "<td>{$row['title']}</td>";
					echo "<td>{$row['post']}</td>";

				echo "</tr>";
			}
		}
	      ?>
	        
      	  </tbody>
    	</table>
	</div>

</body>
</html></pre>
<p>In line 145, after 'echo "&lt;td&gt;{$row['post']}&lt;/td&gt;";' line, we will add our delete button.</p>
<pre class="prettyprint lang-php">$post_id = $row['post_id']; // store Post id into a variable



					echo "<td><a href='delete.php?post_id=$post_id'

						class='btn btn-danger'>Delete </a>"; // pass post id as a get url parameter

						// and link it to delete.php page

						// add a class btn-danger to make the button look nice</pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_1-1024x518.png" alt="blog_delete_1" width="1024" height="518" class="alignnone size-large wp-image-232" /></a></p>
<p>You can see the delete button right?</p>
<h2><strong>Step 2: - Go to delete.php page and delete the post using post_id</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Here are the things we are going to do step by step.</p>
<ol>
<li>Create a delete.php file.</li>
<li>Make a database connection there.</li>
<li>Get the post_id by  $_GET['post_id'] method.</li>
<li>Delete the post by " delete from " mysql command.</li>
<li>Go back to index.php page</li>
</ol>
<pre class="prettyprint lang-php"><?php 



// make database connection

$conn=mysql_connect( 'localhost','root','')or die("cannot connect");

if (!$conn) {

	return false;

}

// select database

if (!mysql_select_db('blog',$conn)){

	return false;

}



$post_id = $_GET['post_id']; // store post_id in a varible



$sql = "DELETE FROM `posts` WHERE post_id = '$post_id'"; // sql command to delete



$result = mysql_query($sql,$conn); // execute the sql command



header("Location: index.php"); // go back to index page







?></pre>
<p>&nbsp;</p>
<p>Here is the screenshot after I delete 2nd post. Go ahead create some post and delete.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_delete_2-1024x518.png" alt="blog_delete_2" width="1024" height="518" class="alignnone size-large wp-image-233" /></a></p>
<p>&nbsp;</p>
";s:10:"post_title";s:26:"Delete Post from your blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:26:"delete-post-from-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:48:"
http://webtutplus.com/php-create-your-own-blog/";s:13:"post_modified";s:19:"2015-07-22 10:59:06";s:17:"post_modified_gmt";s:19:"2015-07-22 05:29:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=226";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"281";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-15 04:31:24";s:13:"post_date_gmt";s:19:"2015-07-15 04:31:24";s:12:"post_content";s:4872:"<p>Hi friends, we all have seen, there is option in websites to share some link in facebook.</p><p>[button colour="orange" type="squarearrow" size="large" link="http://demo.webtutplus.com/fb_share/" target="_blank"]Demo[/button]</p><p>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/fb_share.zip" target="_blank"]Download Code[/button]</p>
<p>Today we will learn how to create that.</p>
<p>Lets start with a basic bootstrap file.</p>

<h2><strong>Step 1 :- Include the java-script code  on your page once, ideally right after the opening body tag.</strong></h2>
<hr />
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	<title>Facebook Share</title>

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

   

</head>

<body>





	<div class="container">

		<h2 style="text-align:center">Facebook Like and share  </h2>

		<div class="container">

			

		</div>

			

	</div>



</body>

</html></pre>
<pre class="prettyprint lang-javascript"><div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=271577596358928";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script></pre>
<h2><strong>Step 2:- Add facebook and twitter buttons</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Facebook :- </p>
<pre class="prettyprint lang-html"><div class="fb-share-button" style="transform: scale(2.0);" data-href="http://webtutplus.com/" data-layout="button_count"></div></pre>
<p>Change data-href link as per your requirement.</p>
<p>Twitter</p>
<pre class="prettyprint lang-html"><a href="https://twitter.com/home?status=http://webtutplus.com/"  class="twitter-share-button" > </a>

				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></pre>
<p>Again chage the status of link, to the url you want to share. It is currently webtutplus.com.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/share_11.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/share_11-1024x497.png" alt="share_1" width="1024" height="497" class="alignnone size-large wp-image-283" /></a></p>
<p>&nbsp;</p>
<p>Screenshot for facebook share </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/share_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/share_2-1024x497.png" alt="share_2" width="1024" height="497" class="alignnone size-large wp-image-286" /></a></p>
<p><span>Screenshot for twitter share </span></p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/share_31.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/share_31-1024x497.png" alt="share_3" width="1024" height="497" class="alignnone size-large wp-image-287" /></a></p>
<p>Here is the complete code</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>

	

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

   

</head>

<body>

<div id="fb-root"></div>

<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=271577596358928";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>





	<div class="container">

		<h2 style="text-align:center">Facebook and Twitter Share  </h2>

		<div class="container" style="margin-top:200px">



			<div class="col-sm-6">

				<div class="fb-share-button" style="transform: scale(2.0);" data-href="http://webtutplus.com/" data-layout="button_count"></div>

			</div>

			<div class="col-sm-6">

				<a href="https://twitter.com/home?status=http://webtutplus.com/"  class="twitter-share-button" > </a>

				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			</div>





			

			

		</div>

		



			

	</div>





</body>

</html>


</pre>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";s:10:"post_title";s:50:"Share link of your website by facebook and twitter";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:54:"share-a-link-from-your-website-by-facebook-and-twitter";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:21:21";s:17:"post_modified_gmt";s:19:"2015-07-16 19:21:21";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=281";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"467";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-25 00:07:34";s:13:"post_date_gmt";s:19:"2015-07-24 18:37:34";s:12:"post_content";s:25246:"<p style="text-align: center;">Hi guys,We have all played A Picture Puzzle Game Online. In this tutorial we shall show you how to make one such game</p>
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
";s:10:"post_title";s:49:"Picture Puzzle Game using HTML CSS and JavaScript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"picture-puzzle-game-using-html-css-and-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-26 10:18:20";s:17:"post_modified_gmt";s:19:"2015-07-26 04:48:20";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=467";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"648";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-07 09:39:31";s:13:"post_date_gmt";s:19:"2015-08-07 04:09:31";s:12:"post_content";s:16955:"Hi friends today we will add a new and exiting feature in our existing e-commerce. We will filter the products based on what category they belong. Please refer to below tutorial if you missed the first part of the e commerce.
<h5><a href="http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/">Lets build an E Commerce Website : part-1</a></h5>
[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part3/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part3.zip" target="_blank"]Download Code[/button]

Lets understand how we are going to do that from database point of view. We will create two tables to store categories and which product goes to which category.
<pre class="lang:default decode:true ">CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;</pre>
<pre class="lang:default decode:true ">CREATE TABLE IF NOT EXISTS `product_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;</pre>
<h2><span style="color: #ff0000;">Step 2:-  Add option of adding category in admin panel.</span></h2>

<hr />

&nbsp;

Add the following code in admin.php form
<pre class="lang:default decode:true ">&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;br /&gt;&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;"  &gt; 
					    		&lt;?php echo $row['name']; ?&gt;

			&lt;?php
			}
		}
			?&gt;</pre>
And save when the form is submitted.
<pre class="lang:default decode:true ">$product_id =  mysqli_insert_id($conn);
							$categories = $_POST['cat'];
							foreach ($categories as $key ) {
								$sql = "INSERT INTO `product_cat`( `product_id`, `categories_id`) 
								VALUES ('$product_id','$key')";
								echo $sql;
								if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							}
</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_1.png"><img class="alignnone size-large wp-image-653" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_1-1024x576.png" alt="ecomm_part3_1" width="1024" height="576" /></a>

So the code of admin panel becomes
<h3><span style="color: #ff0000;">Admin.php</span></h3>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Develop An E commerce Store&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
&lt;div class="container" style="margin-top:100px"&gt;
&lt;?php include("connect.php")  ?&gt;

	&lt;?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] &gt; 0) { // if error &gt; 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "&lt;br /&gt;";
			} else {
			   
			    $image_name = $_FILES['file']['name'];
			     // store image name 
                $pn=mysqli_real_escape_string($conn,$_POST['naam']);
                // clean name 
                $pc=mysqli_real_escape_string($conn,$_POST['cate']);
				$p=mysqli_real_escape_string($conn,$_POST['pr']);

			    $imageFileType = pathinfo($image_name, PATHINFO_EXTENSION); // get image file type 
			    if($imageFileType != "jpg" &amp;&amp; $imageFileType != "png" &amp;&amp; $imageFileType != "jpeg"
				&amp;&amp; $imageFileType != "gif" ) {
					// image is not in requiered format 
				    echo "Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.&lt;br /&gt;";
				   
				}else{
					// image is in correct format 
					// save the image
					echo "Product Image is ok"."&lt;br /&gt;";
					// save image 
					$new_name = basename(uniqid().$image_name);
					$target_file = "images/".$new_name; // unique id function make sure all images are unique
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					 	// move the file from temo location to image folder
				        $sql = "INSERT INTO products (image_name,pname,pdesc,price)
							VALUES ('$new_name','$pn','$pc','$p')";

							if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							$product_id =  mysqli_insert_id($conn);
							$categories = $_POST['cat'];
							foreach ($categories as $key ) {
								$sql = "INSERT INTO `product_cat`( `product_id`, `categories_id`) 
								VALUES ('$product_id','$key')";
								echo $sql;
								if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;";
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}
							}



				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.&lt;br /&gt;";
				    }
				}
			}
		} 
	?&gt;
	&lt;/div&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li &gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;
	&lt;div class="container" style="margin-top:0px"&gt;
		&lt;h2 style="text-align:center"  class="bg-success"&gt; Upload a new product&lt;/h2&gt;
	&lt;div class="container"&gt;
		&lt;form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto"&gt;

		  &lt;div class="form-group"&gt;
                  &lt;label for="exampleInputFile"&gt; Product Name &lt;/label&gt;  
               &lt;input type="text" class="form-control" name="naam" required&gt;
          &lt;label for="exampleInputFile"&gt;Product Description &lt;/label&gt;  
           &lt;textarea class="form-control"  name="cate" rows="5" id="comment"&gt;&lt;/textarea&gt;
		
		  &lt;label for="exampleInputFile"&gt;Product Price &lt;/label&gt; 
		 &lt;input type="number" min="10" class="form-control" name="pr" required&gt;
		    &lt;label for="exampleInputFile"&gt;Upload Product Image&lt;/label&gt;
		    &lt;input type="file" class="form-control" name="file" id="exampleInputFile" required&gt;
		   
		  &lt;/div&gt;
		  &lt;div class="form-group"&gt;
		  &lt;label for="exampleInputFile"&gt;Add relevent categories&lt;/label&gt;
		  	&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;br /&gt;&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;"  &gt; 
					    		&lt;?php echo $row['name']; ?&gt;

			&lt;?php
			}
		}
			?&gt;

		  &lt;/div&gt;
		 
		  
		  &lt;button type="submit" name="upload" class="btn btn-info" &gt;Add new product&lt;/button&gt;
		&lt;/form&gt;
	&lt;/div&gt;

	&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>
Step 3:- We will implement check box type filter based on product category.

We have to write a form which will be submitted by get method when anyone clicks the check box
<pre class="lang:default decode:true ">&lt;form action="" method="get"&gt;
					&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//&lt;?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      	&lt;!-- check whether checkbox is selected or not --&gt;

						      	&lt;?php 
						      		if(in_array($row['id'], $cat)){
						      			?&gt;
						      			 &lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" checked&gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      			&lt;?php
						      		}else{?&gt;
						      		&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" &gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      		&lt;?php
						      	}	
						      	?&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;
					    	&lt;?php
					    	
					    }
					} 
					?&gt;
					
				&lt;/form&gt;</pre>
And based on what categories are checked we have to filter the products.
<pre class="lang:default decode:true ">&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) &gt; 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
					    		echo '&lt;div class="row" &gt;';
					    	}
					    	
					    	$image = "images/".$row['image_name'];
					        echo '&lt;div class="col-sm-3 image" &gt;';
					        $product_id = $row['id'];
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
					      		  /&gt;&lt;/a&gt;';
					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
					        echo '&lt;/div&gt;';


					        if($count %3 == 2){
					    		echo '&lt;/div &gt;';
					    	}
					    	$count +=1;
			         

					    }
					} else {
					    echo "No Products";
					}
					?&gt;</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_2.png"><img class="alignnone size-large wp-image-656" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part3_2-1024x576.png" alt="ecomm_part3_2" width="1024" height="576" /></a>

Thats it. Here is complete code of index.php
<h3><span style="color: #ff0000;">index.php</span></h3>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    &lt;/style&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
			&lt;div class="col-sm-3"&gt;
				&lt;h2 class="bg-info"&gt;Category &lt;/h2&gt; 
				&lt;form action="" method="get"&gt;
					&lt;?php
						
					$sql = "SELECT * FROM categories";
					$result = mysqli_query($conn, $sql);
						//&lt;?php
						$cat = array();
						      	if(isset($_GET['cat'])){
						      		print_r($_GET['cat']) ;
						      		$cat = $_GET['cat'];
						      	 
						      	}
						    
					if (mysqli_num_rows($result) &gt; 0) {
					    
					    while($row = mysqli_fetch_assoc($result)) {
					    	?&gt;
					    	&lt;div class="checkbox"&gt;
						      &lt;label&gt;
						      	&lt;!-- check whether checkbox is selected or not --&gt;

						      	&lt;?php 
						      		if(in_array($row['id'], $cat)){
						      			?&gt;
						      			 &lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" checked&gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      			&lt;?php
						      		}else{?&gt;
						      		&lt;input type="checkbox" name="cat[]" value="&lt;?php echo $row['id']; ?&gt;" onChange="this.form.submit()" &gt; 
						        	&lt;?php echo $row['name']; ?&gt;
						      		&lt;?php
						      	}	
						      	?&gt;
						       
						      &lt;/label&gt;
						    &lt;/div&gt;
					    	&lt;?php
					    	
					    }
					} 
					?&gt;
					
				&lt;/form&gt;
			&lt;/div&gt;
			&lt;div class="col-sm-9"&gt;
				&lt;?php
					$cat = array();
					$str = "";
					if(isset($_GET['cat'])){
						$cat = $_GET['cat'];
					}
					foreach ($cat as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM product_cat WHERE categories_id IN ($str)";
					$result = mysqli_query($conn, $sql);
					$products = '';
					if (mysqli_num_rows($result) &gt; 0) {
						while($row = mysqli_fetch_assoc($result)) {
							// get all relevent product ids
							$products .= $row['product_id'].",";

						}
						$products  = rtrim($products,',');
						$sql = "SELECT * FROM products WHERE id IN ($products) ";


					}else{
						$sql = "SELECT * FROM products";
					}
					echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	if($count %3 == 0){
					    		echo '&lt;div class="row" &gt;';
					    	}
					    	
					    	$image = "images/".$row['image_name'];
					        echo '&lt;div class="col-sm-3 image" &gt;';
					        $product_id = $row['id'];
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:230px;max-height:250px"
					      		  /&gt;&lt;/a&gt;';
					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
					        echo '&lt;/div&gt;';


					        if($count %3 == 2){
					    		echo '&lt;/div &gt;';
					    	}
					    	$count +=1;
			         

					    }
					} else {
					    echo "No Products";
					}
					?&gt;
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
&nbsp;

&nbsp;

&nbsp;

&nbsp;

&nbsp;";s:10:"post_title";s:50:"E commerce, part 3. Lets add filtering of products";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:36:"add-filter-based-category-e-commerce";s:7:"to_ping";s:0:"";s:6:"pinged";s:71:"
http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/";s:13:"post_modified";s:19:"2015-08-09 10:18:07";s:17:"post_modified_gmt";s:19:"2015-08-09 04:48:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=648";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:25246;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:50;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:54;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:71;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}