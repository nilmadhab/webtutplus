*s�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:123:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (672,648,644,642,637,631,606,588,567,499,467,394,356,281,272,249,238,226,84,15)";s:11:"last_result";a:20:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"15";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-02 16:57:39";s:13:"post_date_gmt";s:19:"2015-07-02 16:57:39";s:12:"post_content";s:5363:"Suppose you have a website which has many pictures. As you know Pin interest is one of the trending platform for pining and sharing pictures, lets learn how to pin pictures of your web site in pin interest. Also suppose you want to pin each image separately, i.e you want separate pin buttons for separate images. Lets do it.

&nbsp;
<p style="text-align: center;">[button colour="green" type="squarearrow" size="large" link="http://demo.webtutplus.com/pin/" target="_blank"]Demo[/button]
[button colour="green" type="squarearrow" size="large" link="http://demo.webtutplus.com/pin.zip" target="_blank"]Download[/button]</p>
&nbsp;
<p style="text-align: left;">1. Lets add some image, which we are going to pin. We will use bootstrap to rapidly create the structure.</p>

<pre class="prettyprint lang-html">    
    <!-- Latest compiled and minified CSS -->

<div class="container" style="margin-top: 50px;">
<div class="col-sm-4"><img src="P1.jpg" alt="" width="200" /></div>
<div class="col-sm-4"><img src="P2.jpg" alt="" width="200" /></div>
<div class="col-sm-4"><img src="P3.jpg" alt="" width="200" /></div>
</div>
</pre>
As you can see the code is pretty straight forward. We included a bootstrap css file, made a container, divided into 3 parts by using "col-sm-4" class. Those who are not familiar with bootstrap please check our bootstrap tutorial or visit to w3schools.

&nbsp;

<img class="aligncenter wp-image-41 size-medium" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/pin_webtut1-300x169.png" alt="pin_webtut1" width="300" height="169" />

&nbsp;

2. As you can see, we have added 3 images in our website, now it is time to add the pin interest button.

Add this javascript snippet to your code anywhere.
<pre class="prettyprint lang-javascript"><!-- Please call pinit.js only once per page --><script src="//assets.pinterest.com/js/pinit.js" async="" defer="defer" type="text/javascript"></script></pre>
3. Now it is time to add the buttons below each images and pass the image url in that button.

Add this code snippet below each image.

&nbsp;
<pre class="prettyprint lang-html"> 

 <a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP2.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">

<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></pre>
As you can guess the url is the absolute path to your code and media is path to your image and description is just description. These are in url encoded form. If we decode we will get
<pre class="prettyprint lang-html"></pre>

Just go to this <a href="http://www.url-encode-decode.com/" target="_blank">Website </a> Paste above code and url encode it and then add it to your website. Make sure to give path to media and path for your website correctly.

3. Now add the snippet below each image and change it for every image depending on image path. If you have many images you can make it dynamic using php.

So ultimately your code will be

<pre class="prettyprint lang-html"><!-- Latest compiled and minified CSS -->

<div class="container" style="margin-top: 50px;">
<div class="col-sm-4"><img src="P1.jpg" alt="" width="200" />
<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP1.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">
<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></div>
<div class="col-sm-4"><img src="P2.jpg" alt="" width="200" />
<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP2.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">
<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></div>
<div class="col-sm-4"><img src="P3.jpg" alt="" width="200" />
<a href="//www.pinterest.com/pin/create/button/?url=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2Fpin.php&amp;media=http%3A%2F%2Fliberent.byethost7.com%2Fliberent%2FP3.jpg&amp;description=Next%20stop%3A%20Pinterest" data-pin-color="red" data-pin-do="buttonPin" data-pin-height="28">
<img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" alt="" /></a></div>
<!-- Please call pinit.js only once per page --><script src="//assets.pinterest.com/js/pinit.js" async="" defer="defer" type="text/javascript"></script>

</div>
</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/07/with_buttons.png"><img class="alignnone size-medium wp-image-63" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/with_buttons.png" alt="with_buttons" width="600" /></a>

&nbsp;

<a href="http://webtutplus.com/wp-content/uploads/2015/07/pin2.png"><img class="alignnone size-medium wp-image-65" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/pin2.png" alt="pin2" width="600" /></a>";s:10:"post_title";s:49:"Share a picture from your website to pin interest";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"share-a-picture-from-your-website-to-pin-interest";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 22:21:18";s:17:"post_modified_gmt";s:19:"2015-08-07 16:51:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://webtutplus.in/?p=15";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:2:"84";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-03 19:54:12";s:13:"post_date_gmt";s:19:"2015-07-03 19:54:12";s:12:"post_content";s:7429:"<p>So you might have heard of web scraping. Technically we can define it as </p>
<p><b>Web scraping</b> (<b>web</b> harvesting or <b>web</b> data extraction) is a computer software technique of extracting information from websites.</p>
<p>So, the natural question is, why do we need web scrapping? Where is it used exactly?</p>
<p>The answer is there is tremendous use of web scrapping. For example any price comparison site use web scrapping to scrap the prices of different product form different websites and determine the best price and show it to you.Web scrapping is a very vast domain, which can be very complex at times.</p>
<p>Lets get to work. We will extract all links of a website and display it on browser.</p>
<p>We will use php curl method to crawl and get links.</p>
<p>&nbsp;</p>
<p style="text-align: center;">[button colour="purple" type="squarearrow" size="large" link="http://demo.webtutplus.com/scrapping_101/scrapping.php" target="_blank"]Demo[/button] [button colour="purple" type="squarearrow" size="large" link="http://demo.webtutplus.com/scrapping_101.zip" target="_blank"]Download Code[/button]</p>
<p>&nbsp;</p>
<p><strong>Step 1:- Lets create a basic page with a form to get the url.</strong></p>
<hr />
<p>&nbsp;</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
    
    <!-- Latest compiled and minified CSS -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
</head>

<body>
    <div class="container">
           <form action="" method="get" style="width:50%; margin:0 auto;margin-top:08%">
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Url </label>
            <input type="url" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
          </div>
     
          <button type="submit" name="post" class="btn btn-success">Scrap</button>
        </form>
    </div>
  
</body>
</html></pre>
<p>What I am doing here is creating a basic form using bootstrap and add url validation in it. I am using get method to submit the form and once the form is submitted we will scrap it and extract all data
</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/scrap101.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/scrap101-1024x576.png" alt="scrap101" width="1024" height="576" class="aligncenter wp-image-85 size-large" /></a>
</p>
<p><strong>Step 2:- We will use php curl method to get the webpage and Simple HTML DOM Parser to extract the url.</strong></p>
<hr />
<p>&nbsp;</p>
<p>You can refer to this <a href="http://simplehtmldom.sourceforge.net/"> Link </a> to read more about simple_html_dom purser.</p>
<p>I have downloaded simple_html_dom.php file and included it in my page by following php script. Add it anywhere, preferably in head tag.</p>
<pre class="prettyprint lang-php">  <?php   require_once('simple_html_dom.php');         ?></pre>
<p>Add the following script to see if get method is working properly or not.</p>
<pre class="prettyprint lang-html"><div class="container">
    <?php 
        if(isset($_GET['post'])){
            echo $_GET['url']."<br />";
            $url = $_GET['url'];
        }

    ?>

    </div></pre>
<p>I am just checking if get method is set or not by isset method. If it is set, then get the url.
</p>
<p>Now add the following lines after $url.</p>
<pre class="prettyprint lang-php"> <?php 
        if(isset($_GET['post'])){
            echo $_GET['url']."<br />";
            $url = $_GET['url'];
            $ch = curl_init($url);
            $page = curl_exec($ch);
            $page = str_get_html($page);
            echo($page);
        }

    ?></pre>
<p>I am using curl_init and curl_exec which are in build php functions to curl a page and return content in form of a string. Then I am using str_get_html function which is included in simple_html_dom purser, which purse the string into html. Lastly I am displaying. This is nothing but scrapping.</p>
<p>Here is the whole code.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
    
    <!-- Latest compiled and minified CSS -->
    <link href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <?php
        require_once('simple_html_dom.php');
        ?>
</head>

<body>
    <div class="container">
          <form action="" method="get" style="width:50%; margin:0 auto;margin-top:08%">
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Url </label>
            <input type="url" name="url" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
          </div>
     
          <button type="submit" name="post" class="btn btn-success">Scrap</button>
        </form>
    </div>
    <div class="container">
    <?php 
        if(isset($_GET['post'])){
            echo $_GET['url']."<br />";
            $url = $_GET['url'];
            $ch = curl_init($url);
            $page = curl_exec($ch);
            $page = str_get_html($page);
            echo($page);
        }

    ?>

    </div>
  
</body>
</html></pre>
<p>Just enter a valid url and submit it. You will see the entire webpage in your page. Lets give "http://www.jabong.com/men/" as url and click scrap button and see the result. You will see something like this.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/scrap_102.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/scrap_102-1024x576.png" alt="scrap_102" width="1024" class="aligncenter wp-image-91 size-large" height="576" /></a></p>
<p>&nbsp;</p>
<p><strong>Step 3: Now we will extract the urls and display them. Add the following snippet.</strong></p>
<hr />
<p>&nbsp;</p>
<pre class="prettyprint lang-javascript">$links = $page->find("a");
foreach ($links as $url) {
    $count +=1;
    echo $count." : ".$url->plaintext."-->".$url->getAttribute("href")."<br />";
   
}</pre>
<p>Here I am getting all links of the page by find("a") method. In links variable all links are stored in an array.</p>
<p>I am iterating though the array and printing the link and link text and increasing the counter variable.</p>
<p>The whole php code will look something like this. Make sure to comment out echo page line.</p>
<pre class="prettyprint lang-php"><?php 
        if(isset($_GET['post'])){
            echo $_GET['url']."<br />";
            $url = $_GET['url'];
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $page = curl_exec($ch);
            $page = str_get_html($page);
            //echo $page;
            curl_close($ch);
            $count =0;
            $links = $page->find("a");
            foreach ($links as $url) {
                $count +=1;
                echo $count." : ".$url->plaintext."-->".$url->getAttribute("href")."<br />";
               
            }
        }

    ?></pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/scrap_103.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/scrap_103-1024x576.png" alt="scrap_103" width="1024" height="576" class="aligncenter wp-image-92 size-large" /></a></p>
<p>
So now you got all the links and link text. Pretty cool right?</p>
";s:10:"post_title";s:13:"Web scrapping";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"web-scrapping";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-18 21:14:41";s:17:"post_modified_gmt";s:19:"2015-07-18 15:44:41";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://webtutplus.in/?p=84";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"226";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 15:07:40";s:13:"post_date_gmt";s:19:"2015-07-11 15:07:40";s:12:"post_content";s:5464:"<p>Hello folks. We have created a blog earlier, where we can add new posts and can see all the posts. Today we will add option to delete post from the blog.</p>
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
http://webtutplus.com/php-create-your-own-blog/";s:13:"post_modified";s:19:"2015-07-22 10:59:06";s:17:"post_modified_gmt";s:19:"2015-07-22 05:29:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=226";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"238";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 18:54:37";s:13:"post_date_gmt";s:19:"2015-07-11 18:54:37";s:12:"post_content";s:13037:"<p>Hey folks, you know how much we hate page reloading in every single clicks. We want a smooth browsing experience. Here ajax comes to play. It can load a div without refreshing the whole page asynchronously.</p>
<p>[button colour="grey" type="squarearrow" size="large" link="http://demo.webtutplus.com/ajax_delete/" target="_blank"]Demo[/button]</p>
<p>[button colour="purple" type="squarearrow" size="large" link="http://demo.webtutplus.com/ajax_delete.zip" target="_blank"]Download code[/button]</p>
<p>Previously we have deleted the post from our blog by going to another page, deleting it and coming back to same page. There was page refresh. Today we will delete the content without reloading the page. Cool right?</p>
<p><a href="http://webtutplus.com/delete-post-from-your-blog/" target="_blank">Please refer to this link to previous delete post tutorial.</a></p>
<p>Please refer to <a href="http://www.w3schools.com/ajax/" target="_blank">ajax </a>tutorial if you are entirely unfailiar with ajax.</p>
<p>We will be using jquery ajax method, which makes our work very simple.</p>
<p>Jquery ajax is basically simple four lines of code. Lets see a sample code</p>
<pre class="prettyprint lang-javascript">$.ajax({

  url: "test.php", // the ajax request goes to the url

  type: "POST", // type can be post or get, default is get

    data: {id : "1"}, // we pass some data in the url

  success: function(html){

    $("#results").append(html); // whatever data is prinited  in 

    // requested url returned here  

  }

});</pre>
<p>I have commented each of four lines to describe what is going on. Lets see ajax into action.</p>
<p>Download the sample blog post from <a href="http://demo.webtutplus.com/blog.zip" target="_blank">here</a> .</p>
<p><span style="color: #eb2626;"><strong><span style="text-decoration: underline;">Make sure to change connection to database according to your local  computer.</span></strong></span></p>
<p>You can refer to <a href="http://webtutplus.com/php-create-your-own-blog/" target="_blank">blog</a> here. We will continue from here. Add delete button and remove post from database and reload content without refeshing the page.</p>
<p>Make sure  the blog is up and running in your localhost. Now we will add delete button and add ajax action.</p>
<h2><strong>Step 1:- Add delete button and pass post_id as parameter to javascript function.</strong></h2>
<hr />
<p>&nbsp;</p>
<p>Lets break down the step into sub steps.</p>
<ol>
<li>We will add delete button beside each posts.</li>
<li>we will call an onclick js function which will take post_id as parameter. Lets call it delete_ajax().</li>
<li>Inside delete_ajax function, we will declear our jquery ajax function.</li>
<li>Make sure to add jquery file to make this work.</li>
</ol>
<p>Add the jquery online link in head.</p>
<pre class="prettyprint lang-javascript"><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script></pre>
<p>Here is the code and screenshot so far.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>



 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <?php 

ini_set('display_errors', true);



$result=mysql_connect( 'localhost','root','')or die("cannot connect");

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
<p>&nbsp;</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/ajax_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/ajax_1-1024x518.png" alt="ajax_1" width="1024" height="518" class="alignnone size-large wp-image-239" /></a></p>
<p>After line 147 we will call  our js function.</p>
<pre class="prettyprint lang-php">$post_id  = $row['post_id'];

echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>

Delete</span></td>";</pre>
<p>Then below that inside a script tag we declare our javascript delete_ajax function.</p>
<p>We are printing the post_id in console. Refesh the page and press "CTRL+ALT+J" in chrome to see the console. Alternatively you can go to console in this way  right click-&gt;inspect elements-&gt;console. Click in the delete buttons after adding a few post. You will see something like this. <a href="http://webtutplus.com/wp-content/uploads/2015/07/ajax_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/ajax_2-1024x518.png" alt="ajax_2" width="1024" height="518" class="alignnone size-large wp-image-242" /></a></p>
<p>In case if you dont follow , I am posting the entire code. Comment below if you have any doubts till now. I have commented in critical portions of the code.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>

<html>

<head>



 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"

    rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <?php 

ini_set('display_errors', true);



$result=mysql_connect( 'localhost','root','')or die("cannot connect");

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

      <tbody id="refresh">

      <?php 

      $sql = "SELECT * FROM Posts";

      if($result = mysql_query($sql,$conn)){

while($row = mysql_fetch_array($result)){

echo "<tr>";

echo "<td>{$row['post_id']}</td>";

echo "<td>{$row['title']}</td>";

echo "<td>{$row['post']}</td>";

$post_id  = $row['post_id'];

echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>

Delete</span></td>"; // pass post_id as parameter and add class to button

// to make the button look nice.

echo "</tr>";

}

}

      ?>

        

        </tbody>

        <script type="text/javascript">

        function delete_ajax(post_id){ // here is my js function which takes post id as parameter

        var post_id = post_id;

        console.log("delete post " + post_id); // print post id in console by console.log function

        $.ajax({

  url: "delete.php", // we will delete the post inside delete.php file

  type: "get", 

    data: { id : post_id}, // lets pass the post id to be deleted here.

  success: function(html){

    $("#refresh").load("reload.php"); // we will reload the tbody by reload.php  

  }

});

        }

        </script>

    </table>

</div>



</body>

</html></pre>
<p>Remember console.log is your friend in javascript. It comes very useful when we need to debug. Lets move to next step.</p>
<h2><strong>Step 2:- Jquery ajax to delete the post and refresh the div.</strong></h2>
<hr />
<p>Lets break down this step into small steps.</p>
<ol>
<li>Delete the post.</li>
<li>Refresh the table body.</li>
</ol>
<p>Lets give an id to table body. Lets give it id "refresh", as we are going to reload it after deleting the post.</p>
<pre class="prettyprint lang-javascript"><tbody id="refresh"></pre>
<p>Lets delete the post by ajax and reload the tbody.</p>
<pre class="prettyprint lang-javascript">function delete_ajax(post_id){ // here is my js function which takes post id as parameter

        var post_id = post_id;

        console.log("delete post " + post_id); // print post id in console by console.log function

        $.ajax({

  url: "delete.php", // we will delete the post inside delete.php file

  type: "get", 

    data: { id : post_id}, // lets pass the post id to be deleted here.

  success: function(html){

    $("#refresh").load("reload.php"); // we will reload the tbody by reload.php  

  }

});

        }</pre>
<p>We are calling  two php file to delete and reload the page. lets create those.</p>
<h3><span style="text-decoration: underline;"><span style="color: #ff0000; text-decoration: underline;">delete.php</span></span></h3>
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



$post_id = $_GET['id']; // store post_id in a varible



$sql = "DELETE FROM `posts` WHERE post_id = '$post_id'"; // sql command to delete



$result = mysql_query($sql,$conn); // execute the sql command







?></pre>
<h3><span style="text-decoration: underline; color: #ff0000;">reload.php</span></h3>
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



 $sql = "SELECT * FROM Posts";

      if($result = mysql_query($sql,$conn)){

while($row = mysql_fetch_array($result)){

echo "<tr>";

echo "<td>{$row['post_id']}</td>";

echo "<td>{$row['title']}</td>";

echo "<td>{$row['post']}</td>";

$post_id  = $row['post_id'];

echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>

Delete</span></td>"; // pass post_id as parameter and add class to button

// to make the button look nice.

echo "</tr>";

}

}



?></pre>
<p>&nbsp;</p>
<p>As you can see the php files are pretty straightforward. I am getting the post_id in delete.php and deleting it. Reload.php is even easier. I just made the database connection and  copy pasted original php code inside tbody there.</p>
<p>That it. Carefully make changes in databse connection. You can even write a separate connect.php file containing database connection and include it in every file.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
";s:10:"post_title";s:32:"Delete post of your page by ajax";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:57:"delete-post-of-your-page-by-ajax-good-bye-page-refreshing";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:24:11";s:17:"post_modified_gmt";s:19:"2015-07-16 19:24:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=238";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:4;O:8:"stdClass":23:{s:2:"ID";s:3:"249";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 04:25:26";s:13:"post_date_gmt";s:19:"2015-07-12 04:25:26";s:12:"post_content";s:16009:"<p>Hey folk. So we have added add new post and delete post option in our blog. But we also need to be able to edit our post. So today we will learn how to edit a post. We will add a edit button beside each post. When clicked in that button, we will go to another page. Lets call it edit_post.php. We will edit the post there. Then we will come back to main post page and we will see updated post there.</p>
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
";s:10:"post_title";s:50:"update posts  in your blog, make those editable!!!";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:28:"uodate-the-post-in-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-12 16:11:11";s:17:"post_modified_gmt";s:19:"2015-08-12 10:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=249";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:5;O:8:"stdClass":23:{s:2:"ID";s:3:"272";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-12 19:31:01";s:13:"post_date_gmt";s:19:"2015-07-12 19:31:01";s:12:"post_content";s:17525:"<p><span> Hi guys, we are all familiar with paypal. In this post we will see how easily we can </span><span id="IL_AD3" class="IL_AD">integrate</span><span> PayPal payment gateway  in our website. We will use javascript to do so.</span></p>
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
";s:10:"post_title";s:51:"Paypal payment gateway integration using javascript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:51:"paypal-payment-gateway-integration-using-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-17 04:22:05";s:17:"post_modified_gmt";s:19:"2015-07-17 04:22:05";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=272";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:6;O:8:"stdClass":23:{s:2:"ID";s:3:"281";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-15 04:31:24";s:13:"post_date_gmt";s:19:"2015-07-15 04:31:24";s:12:"post_content";s:4872:"<p>Hi friends, we all have seen, there is option in websites to share some link in facebook.</p><p>[button colour="orange" type="squarearrow" size="large" link="http://demo.webtutplus.com/fb_share/" target="_blank"]Demo[/button]</p><p>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/fb_share.zip" target="_blank"]Download Code[/button]</p>
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
";s:10:"post_title";s:50:"Share link of your website by facebook and twitter";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:54:"share-a-link-from-your-website-by-facebook-and-twitter";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:21:21";s:17:"post_modified_gmt";s:19:"2015-07-16 19:21:21";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=281";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:7;O:8:"stdClass":23:{s:2:"ID";s:3:"356";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-19 15:32:32";s:13:"post_date_gmt";s:19:"2015-07-19 10:02:32";s:12:"post_content";s:18096:"<p>Hi friends, today we will build a simple game based on python and simplegui library. The game is hosted in <a href="http://www.codeskulptor.org/" target="_blank">codeskulaptor</a>  website. I learnt to build this kind of game as a part of few coursera courses. I will guide you step by step , how to build this kind of game. If you are interested you can join coursera. It is an amazing platform to learn programming.</p>
<p>Let play the game before starting coding.</p>
<p>Go to the demo website and click on run button. You can see the entire source code there. </p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_5.py" target="_blank"]DEMO[/button]</p>
<p>Lets see How we are going to make this game.</p><p>&nbsp;</p>
<p>We can see there are 16 small cards. Initially no cards are exposed. Then if we click any one card, it is exposed. We click another one card. It is exposed too. If these two cards are same, they remain exposed, even we click a third  card. But if these are not same, these gets hidden and the third card get exposed and this trend continues.The players aim to expose all card with minimum number of clicks by remembering which number is which in which card.</p>
<p>So our game logic is </p>
<ul>
<li>Create 16 cards. ( We are taking 16 here, you can take any even number of card)</li>
<li>They will have 0-7 numbers twice hidden inside. (</li>
</ul>
<h2>Step 1:- Lets create a blank frame</h2>
<hr />
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing

#lets create a Frame of width 800px and height 170 px and name it memory

frame = simplegui.create_frame("Memory", 800, 170)


frame.start() #start the frame </pre>
<p>[button colour="limegreen" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_nn1SBJu4otJsKWj.py" target="_blank"]Play with code[/button]</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_11.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_11-1024x576.png" alt="python_1" width="1024" height="576" class="alignnone size-large wp-image-363" /></a></p>
<p>&nbsp;</p>
<p><!--nextpage--></p>
<p>Step 2:- Now we create 16 cards and assign randomly 0-7 numbers. Each number is repeated twice. (8*2 = 16)</p>
<p>Lets create 3 lists in python. Refer to this <a href="http://www.tutorialspoint.com/python/python_lists.htm" target="_blank">link</a> to know more about python lists. Lists are nothing but arrays with some more functionalities.</p>
<pre class="prettyprint lang-python">LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7]
EXPOSED = [False,False,False,False,False,False,False,False,False,False,False,False,False,False,False,False]
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]</pre>
<p>Initially no cards are exposed. That s why all 16 entries in EXPOSED are initially set to false.</p>
<p>We assume cards are logically 50x100 pixels in size .</p>
<p>Position list defines the x axis distance of individual card from leftmost side of frame. We started from 25 and ended at 775 with interval of 50. For example first card is at co-ordinate (25,0) , 5th card is at co-ordinate (225,0)  like that.</p>
<p>LIST variable contains 0-7 twice which will be randomly shuffled and assigned to a particular card.</p>
<p>When  game is started we should be able to display 16 cards initially not exposed.  </p>
<p>Lets create a function draw() which takes parameter canvas. We register the function by calling set_draw_handler(draw) method of python frame object.</p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing

#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,False,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
      


frame = simplegui.create_frame("Memory", 800, 170)
frame.set_draw_handler(draw)
frame.start() #start the frame </pre>
<p>[button colour="purple" type="slightlyroundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0.py" target="_blank"]Play with code [/button]</p>
<p>draw_line <span>method </span>takes 4 parameter, co-ordiante of starting point, ending point, width of line and color of line.</p>
<p>draw_text method takes 4 parameter too, text to be drawn, position of text to be drawn , width of text and color of text.</p>
<p>The logic is simple , we are iterating through all cards and if we find the card is not exposed by checking corresponding card in  exposed  list we are displaying a green line of 49 pixel width ( we leave 1 pixel to differentiate between cards, notice the 1 pixel black line between each card) otherwise display corrospoding number from LIST variable , which is drawn corresponding right position by POSITION list.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_2-1024x576.png" alt="python_2" width="1024" height="576" class="alignnone size-large wp-image-370" /></a></p>
<p>Lets make sure code is working for exposed card also. In exposed list make a few elements as true.</p>
<p>If you click on run button , you will see numbers corresponding to true elements.</p>
<p>[button colour="purple" type="roundedarrow" size="large" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_0.py" target="_blank"]Play with code[/button]</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_3-1024x576.png" alt="python_3" width="1024" height="576" class="alignnone size-large wp-image-376" /></a></p>
<p><!--nextpage--></p>
<h2>Step 3:- Display cards on click</h2>
<hr />
<p>Now we will write two functions, one new_game function which will reset the whole game and all cards will be covered again and another mouseclick function which will expose the clicked unexposed card.</p>
<p>I have commented out what these two function are doing exactly.</p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing
import random
#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,True,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame

def new_game():
    global LIST
   
    for i in range(len(EXPOSED)): # make all cards covered 
        EXPOSED[i] = False #by setting all elements of exposed false

       
    #shuffle the list
    random.shuffle(LIST)
    
def mouseclick(pos):
    card_pos = list(pos) #get the coordinate of  clicking point
    print pos #print the position to understand 
    for x in range(len(POSITION)):
       <!-- tab -->#check for each card if x co-ordinate of mouse clicked point in
        #within the card, if yes then expost the card 
        if card_pos[0]+25 >= POSITION[x] and (card_pos[0]+25 <= POSITION[x]+50) :
            EXPOSED[x] = True
            

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
      


frame = simplegui.create_frame("Memory", 800, 170)
new_game()
frame.set_draw_handler(draw)
# register event handlers
frame.set_mouseclick_handler(mouseclick)

frame.start() #start the frame </pre>
<p>We have to use frame.set_mouseclick_handler method to register mouse click event. This method gets the co-ordinates of mouse clicked point and pass it to mouseclick function. In mouseclick function I am checking which card is clicked by iterating through all the cards. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_41.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_41-1024x576.png" alt="python_4" width="1024" height="576" class="alignnone size-large wp-image-378" /></a></p>
<p>[button colour="lightblue" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_2.py" target="_blank"]Play with code [/button]</p>
<p>You can see I have clicked some card,whose co-ordinates are shown in right side console and corresponding cards are open.</p>
<p><!--nextpage--></p>
<h2>Step 4:- Add main game logic</h2>
<hr />
<p>We will discuss the main game logic here.</p>
<p>Lets make clear some conditions </p>
<ol>
<li>The game can have 3 states.</li>
<li>First state no card is exposed i.e when the game starts we will name it as state 0</li>
<li>Now when first  card is clicked , it is exposed obliviously and game state changed to 1. </li>
<li>When second card is clicked it is also exposed and game state changes to 2.</li>
<li>When third card is clicked, it checks previously two exposed cards, if these are of same number then keep them exposed. Otherwise close them. Third card is kept exposed and game state changes to 1 again.</li>
<li>Then one more card is clicked game state changed to 2.</li>
<li>After that when one more card is clicked step 5 repeats. Step 5 and 6 repeats continuously that is the main game loop.</li>
<li>When new game button is clicked new game start and we jump back to step 2.</li>
</ol>
<h2>Implementation:</h2>
<ul>
<li>We declare state, PREVIOUS ,<span>NOW</span> three global variables, which are all set to 0 initially</li>
<li><span>PREVIOUS will contain index of first exposed card and NOW will contain index of second exposed card.</span></li>
</ul>
<p>[button colour="lightgrey" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_3.py" target="_blank"]Play with code[/button]</p>
<p>Here is complete code, open the link and start playing the game. </p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing
import random
#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,True,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame
state = 0
PREVIOUS = 0
NOW = 0

def new_game():
    global LIST, state
   
    for i in range(len(EXPOSED)): # make all cards covered 
        EXPOSED[i] = False #by setting all elements of exposed false

       
    #shuffle the list
    random.shuffle(LIST)
    state = 0
    
def mouseclick(pos):
    card_pos = list(pos) #get the coordinate of  clicking point
    global state,PREVIOUS,NOW
    for x in range(len(POSITION)):
        #check for each card if x co-ordinate of mouse clicked point in
        #within the card, if yes then expost the card 
        if card_pos[0]+25 >= POSITION[x] and (card_pos[0]+25 <= POSITION[x]+50) :
            EXPOSED[x] = True
            if state == 0: # new game state was 0, make it 1 
                PREVIOUS = x # store this card index in previous variable
                state = 1
            elif state == 1: # one card is clicked, make game state 2 from 1
                state = 2 
                NOW = x     # store this card index  in now variable 
                
            else:  # state is 2 i.e two cards were exposed, and third card is clicked
                state = 1 
                if LIST[PREVIOUS] == LIST[NOW]: # if previously two exposed card are
                                                #same number keep these exposed<!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab --><!-- tab -->
                    EXPOSED[NOW] = True
                    EXPOSED[PREVIOUS] = True 
                else:                             #otherwise cover those 
                    EXPOSED[NOW] = False
                    EXPOSED[PREVIOUS] = False
                                      
                PREVIOUS = x  # make third card as previous, game state is changed to  1 

            

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
      


frame = simplegui.create_frame("Memory", 800, 170)
new_game()
frame.set_draw_handler(draw)
# register event handlers
frame.set_mouseclick_handler(mouseclick)

frame.start() #start the frame </pre>
<p><!--nextpage--></p>
<p>We made the game almost 90 %. We will declare a simple global variable "counter" which will start from 0 and increase as we click each card. It keeps track how many times we clicked the cards. </p>
<p>We will display it in screen by setting a lebel. We will also add a button to reset the game. This is easy part.</p>
<p>I have added all of these in existing code. </p>
<p>[button colour="lightblue" type="roundedarrow" size="medium" link="http://www.codeskulptor.org/#user40_PmXO9j5R4qAoYi0_5.py" target="_blank"]Play with code[/button]</p>
<p>Here is the complete code.</p>
<pre class="prettyprint lang-python">import simplegui # we are importing the simple gui Library for drawing
import random
#lets create a Frame of width 800px and height 170 px and name it memory
LIST = [0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7] #this list will be shuffled randomly
EXPOSED = [False,False,False,False,False,False,False,False,False,True,False,False,False,False,False,False]
#initialy all cards are set to false.
POSITION = [25, 75, 125, 175, 225, 275, 325, 375, 425, 475, 525, 575, 625, 675, 725, 775]
#positions are x axis distance form left most part of frame
state = 0
PREVIOUS = 0
NOW = 0
counter = 0
def new_game():
    global LIST, state,counter
   
    for i in range(len(EXPOSED)): # make all cards covered 
        EXPOSED[i] = False #by setting all elements of exposed false

       
    #shuffle the list
    random.shuffle(LIST)
    state = 0
    
def mouseclick(pos):
    card_pos = list(pos) #get the coordinate of  clicking point
    global state,PREVIOUS,NOW,counter
    for x in range(len(POSITION)):
        #check for each card if x co-ordinate of mouse clicked point in
        #within the card, if yes then expost the card 
        if card_pos[0]+25 >= POSITION[x] and (card_pos[0]+25 <= POSITION[x]+50) :
            EXPOSED[x] = True
            counter +=1
            if state == 0: # new game state was 0, make it 1 
                PREVIOUS = x # store this card index in previous variable
                state = 1
            elif state == 1: # one card is clicked, make game state 2 from 1
                state = 2 
                NOW = x     # store this card index  in now variable 
                
            else:  # state is 2 i.e two cards were exposed, and third card is clicked
                state = 1 
                if LIST[PREVIOUS] == LIST[NOW]: # if previously two exposed card are
                                                #same number keep these exposed											
                    EXPOSED[NOW] = True
                    EXPOSED[PREVIOUS] = True 
                else:                             #otherwise cover those 
                    EXPOSED[NOW] = False
                    EXPOSED[PREVIOUS] = False
                                      
                PREVIOUS = x  # make third card as previous, game state is 1 as 1 card is exposed

            

def draw(canvas):
    """
    draw the canvas when this function is called
    """

    for x in range(len(LIST)):
        if not EXPOSED[x]:
            canvas.draw_line([POSITION[x],0],[POSITION[x],170],49,"green")
            
        else:
            canvas.draw_text(str(LIST[x]),[POSITION[x],50],40,"white")
     
    label.set_text("Turns = " + str(counter)) 
     
def click():
    pass

frame = simplegui.create_frame("Memory", 800, 170)
frame.add_button("Restart", new_game)
frame.add_button("Click to turn the card. Your aim is to expose all the cards.\
                If two same cards are exposed at same time they will remain open.\
                 ", click)
label = frame.add_label("Turns = 0")

new_game()
frame.set_draw_handler(draw)
# register event handlers
frame.set_mouseclick_handler(mouseclick)

frame.start() #start the frame </pre>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/python_5.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/python_5-1024x576.png" alt="python_5" width="1024" height="576" class="alignnone size-large wp-image-383" /></a></p>
";s:10:"post_title";s:18:"Python memory game";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:18:"python-memory-game";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-20 09:20:15";s:17:"post_modified_gmt";s:19:"2015-07-20 03:50:15";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=356";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:8;O:8:"stdClass":23:{s:2:"ID";s:3:"394";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-22 22:20:03";s:13:"post_date_gmt";s:19:"2015-07-22 16:50:03";s:12:"post_content";s:12764:"<p>Hey friends today we will learn how to upload an image in php and display all images in a nice way. </p>
<p>&nbsp;</p>
<p><span>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/image_galary/" target="_blank"]DEMO[/button]</span><span>  <span>[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/image_galary.zip" target="_blank"]Download Code[/button]</span></span></p>
<p>&nbsp;</p>
<p>Here is the overview what we are going to do.</p>
<ol>
<li>At first we will create a form and using form we will upload the image in server.</li>
<li>Then we will save the image in a folder and store the image name in mysql.We will use mysqli as mysql is depreciated </li>
<li>Then we will display all the images.</li>
</ol>
<p>As usual we will start with a basic bootstrap template. Easy and simple. We have created a simple form with enctype="multipart/form-data" to upload the image file. </p>
<p>&nbsp;</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>

 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>


<div class="container">
<h2 style="text-align:center"  class="bg-success"> Welcome to my Image galary </h2>
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
<div class="container">
<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>


</div>
</div>

</body>
</html></pre>
[caption id="attachment_395" align="alignnone" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_1.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_1-1024x576.png" alt="image galary first image" width="1024" height="576" class="size-large wp-image-395" /></a> image galary first image[/caption]
<h2>Step 2: Upload the image and save it in images folder.</h2>
<hr />
<p>&nbsp;</p>
<p>Once upload button is clicked we need to save the image. We will check whether the image is in valid format(jpg,png or gif). If the image is valid, then we are going to store it in images folder.Here is the php code to save the image. I have made comment in appropriate places. </p>
<pre class="prettyprint lang-php"><?php 
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
				        $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.<br />";
				    }
				}
			}
		} 
	?></pre>
<p>Step 3:- Save image name in mysql .</p>
<p>Create a table images in some database. I am using a database naming "webtuts". Here is sql of images table.</p>
<pre class="prettyprint lang-mysql">
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

</pre>
<p>Make database connection.</p>
<pre class="prettyprint lang-php"><?php 

	$conn=mysqli_connect( 'localhost','root','25011994','webtuts')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}


	?></pre>
<p>Store the new image name in database.</p>
<pre class="prettyprint lang-php"> $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
							}</pre>
<p>Here is the complete code till now</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
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
				        $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
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
		<h2 style="text-align:center"  class="bg-success"> Welcome to my Image galary </h2>
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
	<div class="container">
		<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>
	

	</div>
	</div>

</body>
</html></pre>
<h2>Step 3:- Display all images stored in database and make image gallery </h2>
<hr />
<p>&nbsp;</p>
<p>It is easy part. Just write a simple mysqli query to get all the image name from database and display it.</p>
<pre class="prettyprint lang-php"><?php
		$sql = "SELECT * FROM images";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		        echo '<div class="col-sm-4"><img src='.$image.' style="width:300px;height:200px" /></div>';
		    }
		} else {
		    echo "0 results";
		}</pre>
<p>&nbsp;</p>
[caption id="attachment_401" align="alignnone" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/image_galary_2-1024x576.png" alt="displaying uploaded images" width="1024" height="576" class="size-large wp-image-401" /></a> displaying uploaded images[/caption]
<p>&nbsp;</p>
<p>Here is the complete code</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
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
				        $sql = "INSERT INTO images (image_name)
							VALUES ('$new_name')";

							if (mysqli_query($conn, $sql)) {
							    echo "New record created successfully<br />";
							} else {
							    echo "Error: " . $sql . "<br />" . mysqli_error($conn);
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
		<h2 style="text-align:center"  class="bg-success"> Welcome to my Image galary </h2>
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
	<div class="container">
		<h2 style="text-align:center"  class="bg-danger"> Image Galary </h2>
		<div class="row">
		<?php
		$sql = "SELECT * FROM images";
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
		</div>

	</div>
	</div>

</body>
</html></pre>
";s:10:"post_title";s:41:"Upload an image and make an image gallery";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"upload-image-make-image-gallery";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-28 19:54:25";s:17:"post_modified_gmt";s:19:"2015-07-28 14:24:25";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=394";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:9;O:8:"stdClass":23:{s:2:"ID";s:3:"467";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-25 00:07:34";s:13:"post_date_gmt";s:19:"2015-07-24 18:37:34";s:12:"post_content";s:25246:"<p style="text-align: center;">Hi guys,We have all played A Picture Puzzle Game Online. In this tutorial we shall show you how to make one such game</p>
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
";s:10:"post_title";s:49:"Picture Puzzle Game using HTML CSS and JavaScript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"picture-puzzle-game-using-html-css-and-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-26 10:18:20";s:17:"post_modified_gmt";s:19:"2015-07-26 04:48:20";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=467";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:10;O:8:"stdClass":23:{s:2:"ID";s:3:"499";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-07-26 23:04:04";s:13:"post_date_gmt";s:19:"2015-07-26 17:34:04";s:12:"post_content";s:8742:"<p>Hello today we will give a simple demo on how to integrate google plus login into your website. We will have to make use of API for Google+ and need to use the OAuth technology. 
</p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_login/" target="_blank"]DEMO[/button]</p>
<p>[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/google_login.zip" target="_blank"]Download Code[/button]</p>
[caption id="attachment_550" align="aligncenter" width="580"]<img src="http://webtutplus.com/wp-content/uploads/2015/07/web_login.png" alt="A basic example of a login which provides Google+ integration" width="580" height="226" class="size-full wp-image-550" /> A basic example of a login which provides Google+ integration[/caption]
<p>&nbsp;</p>
<p><strong>Step 1</strong>-<span>Login to </span><a href="https://code.google.com/apis/console" target="_blank">Google API Console</a><span>. Go to </span><strong>APIs and </strong><span>you will have to turn on Google Plus API.</span></p>
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
<p>google-plus-access.php file (Put in your Id,Secret,Redirect URI and Authorization Key from the console) </p>

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
";s:10:"post_title";s:35:"Google plus login from your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:17:"google-plus-login";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-27 00:18:29";s:17:"post_modified_gmt";s:19:"2015-07-26 18:48:29";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=499";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:11;O:8:"stdClass":23:{s:2:"ID";s:3:"567";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-27 21:01:23";s:13:"post_date_gmt";s:19:"2015-07-27 15:31:23";s:12:"post_content";s:5180:"Hi friends, we have created a image gallery web application earlier, where we are able to upload images and display those in nice format.

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
http://webtutplus.com/upload-image-make-image-gallery/";s:13:"post_modified";s:19:"2015-08-14 09:05:10";s:17:"post_modified_gmt";s:19:"2015-08-14 03:35:10";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=567";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:12;O:8:"stdClass":23:{s:2:"ID";s:3:"588";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-07-28 15:41:01";s:13:"post_date_gmt";s:19:"2015-07-28 10:11:01";s:12:"post_content";s:4241:"Hello everyone.

In this tutorial we shall see how to send an SMS to any mobile phone by means of PHP

[button colour="purple" type="squarearrow" size="large" link="http://demo.webtutplus.com/sms/sms.zip" target="_blank"]Download code[/button]

We will make use of ViaNett SMS Services so first you need to open an account in <a href="http://www.vianett.com/" target="_blank">Vianett.com</a>

&nbsp;

<strong>Step 1</strong>-For this tutorial we have made use of a demonstration account on ViaNett where you will be provided with 5 free  sms. We will test our code with that. Click on Free trial for a free account

[caption id="attachment_589" align="aligncenter" width="1024"]<img class="size-large wp-image-589" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-112-1024x455.png" alt="ViaNett Website" width="1024" height="455" /> ViaNett Website[/caption]

&nbsp;

<strong>Step 2</strong>-After completing the registration your demo account will be ready and you will be using the username and password in the code.

[caption id="attachment_590" align="aligncenter" width="1024"]<img class="size-large wp-image-590" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-113-1024x488.png" alt="Register for a free demo account" width="1024" height="488" /> Register for a free demo account[/caption]

<strong>Step 3-</strong>Google for <strong>ViaNettSMS.php</strong> file. It consists of the source code you will be requiring for the sms integration, We will be making use of HTTP API for SMS sending. Google the php file and download it.

<strong>Step 4</strong>-Code the HTML form. Basically it will consist of a simple form with a field for number and message body.
<div class="jumbotron">
<h1>Sending SMS by PHP</h1>
</div>
<form class="form-horizontal" action="testm.php" method="post">//Message Body Input
<table>
<tbody>
<tr>
<td>
<h3>Number</h3>
</td>
<td>//Phone Number Input</td>
</tr>
<tr>
<td style="width: 300px;">
<h3>Message body</h3>
</td>
<td><textarea class="form-control" style="height: 300px; width: 300px;" name="b"></textarea></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td colspan="2"><button class="btn btn-success" type="submit">Submit</button> <button class="btn btn-danger" type="reset">Reset</button></td>
</tr>
</tbody>
</table>
</form><strong>THE HTML FORM </strong>

&nbsp;

<strong>Step 5</strong>-Set the form action to the php file which will send the sms. Lets name it testm.php

&nbsp;

<strong>Step 6</strong>-In testm.php put the following code
<pre class="prettyprint lang-php">SendSMS($MsgSender, $DestinationAddress, $Message); 

    // Check result object returned and give response to end user according to success or not. 

    if ($Result-&gt;Success == true) 

        $Message = "Message successfully sent!"; 

    else 

        $Message = "Error occured while sending SMS
Errorcode: " . $Result-&gt;ErrorCode . "
Errormessage: " . $Result-&gt;ErrorMessage; 

} 

catch (Exception $e) 

{ 

    //Error occured while connecting to server. 

    $Message = $e-&gt;getMessage(); 

} 

 

?&gt; 

 

 

     

     

     

<!--?php 

echo "          &lt;p&gt;&lt;strong&gt;SMS Result&lt;/strong&gt;&lt;br ?-->Status: $Message"; 

?&gt; 

     

</pre>
<strong>THE PHP SCRIPT TO SEND THE SMS</strong>

&nbsp;

After this when you execute the sms will be sent to the number you had given in the form. It will look somewhat like this

[caption id="attachment_591" align="aligncenter" width="1024"]<img class="size-large wp-image-591" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot-114-1024x519.png" alt="The HTML Form to Send SMS" width="1024" height="519" /> The HTML Form to Send SMS[/caption]

&nbsp;

&nbsp;

[caption id="attachment_592" align="aligncenter" width="540"]<img class="size-full wp-image-592" src="http://webtutplus.com/wp-content/uploads/2015/07/Screenshot_2015-07-28-15-34-15.png" alt="Message Successfully Sent" width="540" height="960" /> Message Successfully Sent[/caption]

&nbsp;

For Free Trials you get 5 sms free. You have to purchase for sending more than 5 sms from the ViaNett website.";s:10:"post_title";s:18:"Sending SMS by PHP";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:15:"sending-sms-php";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 11:16:58";s:17:"post_modified_gmt";s:19:"2015-08-08 05:46:58";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=588";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:13;O:8:"stdClass":23:{s:2:"ID";s:3:"606";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-02 08:34:41";s:13:"post_date_gmt";s:19:"2015-08-02 03:04:41";s:12:"post_content";s:12877:"Hello everyone, today we shall show how to build a e commerce website step by step. This tutorial will cover the techniques you can use to upload your product details and display them.

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm/" target="_blank"]DEMO[/button] [button colour="lightblue" type="squarearrow" size="large" link="https://github.com/nilmadhab/ecomm_part1" target="_blank"]Github Link[/button]
 [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm.zip" target="_blank"]Download Code[/button]

<strong>Step 1</strong>-Create a table in MySQL database named 'images'. It should contain the following fields.

Product ID,Product Name,Product Category,Product Image Name. Set the id field as auto increment=1 which will generate a unique id for every product
<pre class="lang:mysql decode:true">CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(300) NOT NULL,pname varchar(40),pcat varchar(40),price int(11),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

</pre>
Now we will create the main screen of the website which will look something like this

&nbsp;

[caption id="attachment_610" align="aligncenter" width="1024"]<img class="size-large wp-image-610" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-115-1024x465.png" alt="A snapshot of the demo website " width="1024" height="465" /> A snapshot of the demo website[/caption]

&nbsp;

<strong>Step 2</strong>-Create a php file named connect which will help you to link your code with the database containing the images table
<h3><span style="text-decoration: underline;"><span style="color: #ff0000; text-decoration: underline;">connect.php</span></span></h3>
<pre class="lang:php decode:true ">	&lt;?php 

	$conn=mysqli_connect( 'localhost','root','mysql password','database name')or die("cannot connect");  //connect to the database using the required details
	if (!$conn) {
		echo "cannot connect";
	}


	?&gt;</pre>
<strong>Step 3- </strong>Create a php file named index.php which will store product details of all uploaded products (name,category,price and image)
<h3><span style="text-decoration: underline;">index.php</span></h3>
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;My Image galary&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;   //includes the connect.php in this file

	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li class="active"&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;   //Link to index.php for product information
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;           
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;         //Link to admin.php for product upload
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; Products &lt;/h2&gt;
		&lt;div class="row"&gt;
		&lt;?php
		$sql = "SELECT * FROM images";      //extracting image details from the table
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) //run the loop to display the contents of the table
 {
		    	$image = "images/".$row['image_name']; //images folder contain the images you upload this helps to extract the required image by using the name of the image
		        echo '&lt;div class="col-sm-4"&gt;';
		        $product_id = $row['id'];  //stores the product id of a particular product
		        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;&lt;img src='.$image.'  //this makes the image a hyperlink for a zoomed display tracking the product by product id
		         style="width:300px;max-height:300px" /&gt;&lt;/a&gt;';
		        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
		       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
		        echo '&lt;p&gt;'.$row['pcat'].'&lt;/p&gt; &lt;/div&gt;';
         

		    }
		} else {
		    echo "No Products";
		}
		?&gt;
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
&nbsp;

<strong>Step 4</strong>-Create admin.php a file that will be used as an uploader to upload  new product details to the e-commerce website
<h3><span style="text-decoration: underline;">admin.php</span></h3>
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Develop An E commerce Store&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
&lt;/head&gt;
&lt;body&gt;
&lt;?php include("connect.php")  ?&gt; //include the connect.php file into this file

	&lt;?php 
		if(isset($_POST['upload'])){ // if upload button is clicked then proceed
			if ($_FILES['file']['error'] &gt; 0) { // if error &gt; 0 then do display error
			    echo "Error: " . $_FILES['file']['error'] . "&lt;br /&gt;";
			} else {
			   
			    $image_name =  $_FILES['file']['name']; // store image name 
                            $pn=$_POST['naam'];
                             $pc=$_POST['cate'];
$p=$_POST['pr'];

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
					 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) //to check whether files have been shifted from temporary storage location to the target file
 {
					 	// move the file from temo location to image folder
				        $sql = "INSERT INTO images (image_name,pname,pcat,price) // moving the values into a table
							VALUES ('$new_name','$pn','$pc','$p')";

							if (mysqli_query($conn, $sql)) {
							    echo "New product record created successfully&lt;br /&gt;"; //Successful creation of record
							} else {
							    echo "Error: " . $sql . "&lt;br&gt;" . mysqli_error($conn);
							}


				    } else {
				    	// if move failed then show error.
				        echo "Sorry, there was an error uploading your file.&lt;br /&gt;";
				    }
				}
			}
		} 
	?&gt;
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
	&lt;div class="container"&gt;
		&lt;h2 style="text-align:center"  class="bg-success"&gt; Upload a new product&lt;/h2&gt;
	&lt;div class="container"&gt;
		&lt;form action="" method="post"  enctype="multipart/form-data" style="width:50%;margin:0 auto"&gt; //Form for uploading a new product details

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
		 
		  
		  &lt;button type="submit" name="upload" class="btn btn-info" &gt;Upload&lt;/button&gt;
		&lt;/form&gt;
	&lt;/div&gt;

	&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 5</strong>-For individual product detail display create a separate file called details.php. In index.php each image is inserted in a &lt;a&gt; tag which has a link redirecting to details.php along with the product id of that particular product for a separate display of each individual product
<h3><span style="text-decoration: underline;">details.php</span></h3>
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;My Image galary&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    
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
		&lt;?php
		if(isset($_GET['product_id'])) //obtaining the product_id from the details page in order to identify the image
{
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM images WHERE id='$product_id' ";  //displaying the particular image required by searching with the help of product id
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	?&gt;
		    	&lt;div class="container"&gt;                                              
		    	&lt;div class="col-sm-6"&gt;
		    		&lt;?php echo '&lt;img src='.$image.' style="width:300px;" /&gt;';?&gt;    //display required product image
		    	&lt;/div&gt;
		    	&lt;div class="col-sm-6"&gt;     //product details to be displayed here                                         
		    	&lt;?php    
		    		 echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;'; 
			       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
			        echo '&lt;p&gt;'.$row['pcat'].'&lt;/p&gt; ';
		        ?&gt;
		    	&lt;/div&gt;
		    	&lt;/div&gt;
         
		    	&lt;?php
		    }
		} else {
		    echo "No Products";
		}
		?&gt;
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
This will complete the product uploading portion of the e-commerce website

[caption id="attachment_612" align="aligncenter" width="1024"]<img class="size-large wp-image-612" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-117-1024x366.png" alt="Uploading A Product" width="1024" height="366" /> Uploading A Product[/caption]

[caption id="attachment_613" align="aligncenter" width="1024"]<img class="size-large wp-image-613" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-119-1024x428.png" alt="Product Uploaded" width="1024" height="428" /> Product Uploaded[/caption]

<strong>NOTE : </strong>Wherever you store the php files make sure you create a folder called images because the uploaded files will be transferred to a folder called images.";s:10:"post_title";s:41:"Lets build an E Commerce Website : part-1";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"e-commerce-website-building-tutorial-set-part-1";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-22 22:50:49";s:17:"post_modified_gmt";s:19:"2015-08-22 17:20:49";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=606";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:14;O:8:"stdClass":23:{s:2:"ID";s:3:"631";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:23:59";s:13:"post_date_gmt";s:19:"2015-08-07 01:53:59";s:12:"post_content";s:4688:"<strong>Data Analytics</strong> is all about looking patterns in the data. And there is nothing new in it. People have been doing this since the beginning of the life. Hunters sought patterns in animal migration, farmers sought patterns in the crop growth, politicians sought the voting patterns of voters and many more.<strong>Modern Data Analytics</strong> has just taken all this to a whole new level. Very efficient. Very accurate. Data scientists device methods and tools to extract patterns in the data, which is more valuable than you and me can ever imagine. Intelligently analyzed data is a very valuable resource. It can lead to new insights and, in commercial settings, to competitive advantages.

Data scientists device methods and tools to extract patterns in the data, which is more valuable than you and me can ever imagine. Intelligently analyzed data is a very valuable resource. It can lead to new insights and, in commercial settings, to competitive advantages.

In this blog, we will see how data analytics is being used in several different fields.

<strong>1. Decision Involvement Judgement</strong>

Let us start with a very basic example. When you go to a bank for a loan, they usually ask you to fill a questionnaire. That questionnaire will take your personal and professional details which might affect your ability to repay the amount borrowed. All these act as an input parameter to an ML program and then the program gives you a judgment. The result of this exercise gives a black and white picture to the bank, whether to lend you money or not. This is how data analytics helps you in the decision-making process. One quick fact, banks were among the first organizations to use data analysis on a wide commercial scale.

2. <strong>Screening Images</strong>

In early days of satellite imaging, data analysis was not very prominent in the field. Yet semi-automatic decision-making programs were there. That is primitive data analytics, I know. Those programs used to locate potential oil slicks by reading satellite images, again by using our very own machine learning tactics.

3.<strong>Load Forecasting</strong>

The need of the hour is to save electricity. Well said. No no, we can’t save energy with data analytics, if that’s what you were thinking, but, we can predict its usage and can plan accordingly. A linear regression analysis has done it. Temperature, Humidity, Day, wind speed etc are being used as the features of the training sets and the regression is being used to forecast electricity usage. This regression analysis has also solved the problem of the daily weather <span class="skimlinks-unlinked">forecast.Now</span>, there is no need to appoint weather forecasters for the <span class="skimlinks-unlinked">prediction.The</span> results of the analysis were pretty much similar, but the process was faster.

4.<strong>Diagnosis</strong>

In big industries, machine failure has always been a nightmare. To ensure safety and smoothness in the industries, experts having 20 years of experience, inspect machines manually. Typical errors like a misalignment of a shaft, mechanical loosening or faulty bearings are all taken care of, manually! But nowadays, analyzing data of diagnostic tests by a program can reduce a lot of work. In fact, some industries are using such programs to assist experts and I believe that similar programs will eliminate manual checks completely, in the coming future.

5. <strong>Marketing and Sales</strong>

As I already said, data analysis can give you and your firm a competitive advantage over others. Let me give you an example for the same. <strong>Wallmart, topping the list of Fortune 500 companies</strong> (<a href="http://fortune.com/fortune500">http://fortune.com/fortune500</a>), and similar other shopping chain companies, read our shopping patterns. Then, the data speaks. For example, the data collected may reveal that we buy chips and cleaners together more on Thursday rather than the other day. There could be some logical reason for that, but the important thing is <strong>they know what we want and they know what we will buy and even when!</strong> So, they plan their store’s layout, discount offers, coupons and several other schemes accordingly. It also helps them to categorize customers for the future direction of their strategies. And this is how they make it big, real big!

So, we see that as the technology improves, data storage capacity increases. More data meaning more insights into the future. Predicting future, that’s something that we all ever wanted!!

Please visit https://kgpdag.wordpress.com for more tutorials.

&nbsp;";s:10:"post_title";s:29:"Data- Past,Present and Future";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:27:"data-pastpresent-and-future";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:30:13";s:17:"post_modified_gmt";s:19:"2015-08-07 02:00:13";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=631";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:15;O:8:"stdClass":23:{s:2:"ID";s:3:"637";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:36:20";s:13:"post_date_gmt";s:19:"2015-08-07 02:06:20";s:12:"post_content";s:5039:"<strong>K-MEANS ALGORITHM</strong>

<strong>K-Means algorithm</strong> is one of the most widely used clustering technique because of its simplicity and speed. Just to recall, Clustering is the process of organizing objects into self-similar groups algorithmically  by using different statistical algorithms and methods that we shall see in the later part of the blog.

K-Means lies in the category of <strong>unsupervised clustering</strong>. The basic objective of unsupervised clustering is to maximize the intracluster similarity and minimize intercluster. It just makes sure that the clusters formed have their own individuality. K-Means basically uses a data set which has no target variable, similar to all other unsupervised clustering techniques.

Let us dive deeper and try to see the steps followed by the Algorithm.

In layman terms, here are the steps
<ol>
	<li><strong>Choose the number of clusters, k.</strong></li>
	<li><strong>Selects k-centroids corresponding to k clusters.(What is a centroid of data points? Hang on.)</strong></li>
	<li><strong>Assign each object to the nearest cluster.(How to decide which is nearest? Wait!)</strong></li>
	<li><strong>Recompute centroid.</strong></li>
	<li><strong>Repeat steps 3 and 4 until the convergence criteria is met.(Convergence criteria?)</strong></li>
</ol>
Right, so this was the basic layout of the whole algorithm. In step 2, selecting any k objects (data points) from the data set would suffice and those random k points will be our initial centroids. It is crucial to select right initial data points if we expect flawless results (because the algorithm might converge at some local minimum).This Algorithm is said to be converged when the assignment of objects to the clusters no longer change with multiple iterations. A consistency comes and the Algo is said to be converged.

Now the big question comes, how does the Algo decide which point is nearest and which is not? There are several ways to do it, but here I will be mentioning the most common ones.
<ul>
	<li><strong><strong>Euclidean distance</strong></strong>

[caption id="" align="aligncenter" width="732"]<img class="" src="https://kgpdag.files.wordpress.com/2015/06/euclidean.jpg" alt="Euclidean distance" width="732" height="112" /> Euclidean distance[/caption]</li>
</ul>
&nbsp;

&nbsp;

This is the most common way for calculating the distances in a hyperspace. The above-stated formula explains all of it, so I believe I can skip the explanation part.
<ul>
	<li><strong>City Block (Manhattan) distance</strong></li>
</ul>
<a href="https://kgpdag.files.wordpress.com/2015/06/manhattan_distance_bgiu.png"><img class=" size-medium wp-image-20 aligncenter" src="https://kgpdag.files.wordpress.com/2015/06/manhattan_distance_bgiu.png?w=300&amp;h=276" alt="Manhattan_distance_bgiu" width="300" height="276" /></a>

Suppose there are two points X(1,2) and Y(3,1), then the M.D. between X and Y would be equal to [(3-1)+(2-1)] = 3. It is basically the absolute sum of the differences of coordinates.

To understand the significance of this distance, let us consider an example. Suppose that there is a taxi at a block whose coordinates are A (1,2) and it intends to go to a block of coordinates B (3,1). To go from A to B, the taxi will have to travel a distance of [(3-1)+(2-1)] =3 units. This is what we call as the Manhattan Distance.

In several different algorithms, pointers move in the same fashion (block to block) and hence a lot of importance is given to this distance. Due to this analogy we just discussed, M.D. is also called as taxi-cab distance.
<ul>
	<li><strong>Cosine Similarity</strong></li>
</ul>
<a href="https://kgpdag.files.wordpress.com/2015/06/cosine-similarity-34eaf5ab.png"><img class=" size-medium wp-image-21 aligncenter" src="https://kgpdag.files.wordpress.com/2015/06/cosine-similarity-34eaf5ab.png?w=300&amp;h=105" alt="cosine-similarity-34eaf5ab" width="300" height="105" /></a>

This is a pretty straight-forward method to evaluate similarities. The Cosine of the angle formed in the hyperspace, fair enough.

The thing about this algorithm which is worth mentioning here is that this technique could be very useful when it is applied to fill the missing data of initial datasets. I remember that in one of the problem statements solved by KDAG, this small formula of cosine similarity bumped the efficiency to 92.7% when it was applied to fill the missing values.

There are some other distance measuring techniques as well like <strong>Correlation similarity, Jaccard similarity, Chebyshev’s distance</strong> etc. Maybe we will discuss them in some other blog but the above three are the most important and most commonly used methods and <strong>K-Means is all about those distances and their meaningful interpretation for clustering.</strong>

&nbsp;

<span id="IL_AD10" class="IL_AD">This tutorial was originally published in </span> <a href="https://kgpdag.wordpress.com">https://kgpdag.wordpress.com.</a>";s:10:"post_title";s:37:"Most widely used Clustering Technique";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:37:"most-widely-used-clustering-technique";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:40:04";s:17:"post_modified_gmt";s:19:"2015-08-07 02:10:04";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=637";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:16;O:8:"stdClass":23:{s:2:"ID";s:3:"642";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:42:19";s:13:"post_date_gmt";s:19:"2015-08-07 02:12:19";s:12:"post_content";s:14757:"<figure id="attachment_31" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png"><img class="wp-image-31 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/kdag.png?w=648" alt="kdag" /></a><figcaption class="wp-caption-text">Random Forest : A collection of Trees</figcaption></figure>Random Forest is an algorithm used for both Regression and Classification problems.
<ul>
	<li><strong>Regression</strong> :- When response variables (output variables) are <strong>continuous, </strong>given data on input variables e.g, predict a person’s systolic blood pressure based on their age, height, weight</li>
</ul>
<figure id="attachment_32" class="wp-caption alignnone" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/regression.png"><img class="wp-image-32 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/regression.png?w=648" alt="regression" /></a><figcaption class="wp-caption-text">An example of Regression Problem</figcaption></figure>Here is an example of regression problem in which the input variables are PSA and Cancer Volume. You can see that output variable is continuous. Here we are applying linear model to solve out this problem
<ul>
	<li><strong>Classification :- </strong>When response variables (output variables) are <strong>categorical</strong><strong> </strong>, given data on input variables. e.g, predict a person’s 5-year-survival (yes/no) based on their age, height, weight</li>
</ul>
Following is an example of Classification problem where we have applied linear model . The point worth noting is that output variable <strong>color </strong>can take only two values that is either <strong>0 </strong>or <strong>1</strong>

<figure id="attachment_33" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/classification.png"><img class="wp-image-33 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/classification.png?w=648" alt="classification" /></a><figcaption class="wp-caption-text">An example of Classification Problem</figcaption></figure>In regression and classification problem, our aim is to :-
<ul>
	<li>Build a model to predict the value of response variables from given predictor variables</li>
	<li>To understand the relationship between predictor and response variable</li>
</ul>
<strong>Decision Trees :- </strong> A decision tree is a structure that includes a root node, branches, and leaf nodes. Each internal node denotes a test on an attribute, each branch denotes the outcome of a test, and each leaf node holds a class label. The topmost node in the tree is the root node. A decision tree can be categorized in two classes on the basis of response variables. If the response variable is continuous, it said to be <strong>Regression Tree </strong>while on the other hand if the response variable is discrete, it is said to be <strong>Classification Tree</strong>.

<figure id="attachment_61" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/kdag.jpg"><img class="wp-image-61 size-large" src="https://sirinsanchay.files.wordpress.com/2015/05/kdag.jpg?w=648&amp;h=445" alt="kdag" /></a><figcaption class="wp-caption-text">An outlook of a decision tree</figcaption></figure><strong>How to develop a Tree</strong> :-
<ul>
	<li>To grow a binary tree, at each node, “split” the data into two “daughter” nodes.</li>
	<li>Splits are chosen using a splitting criterion.</li>
	<li>Bottom nodes are “terminal” nodes.</li>
	<li>For regression the predicted value at a node is the average response variable for all observations in the node.</li>
	<li>For classification the predicted class is the most common class in the node (majority vote).</li>
	<li>For classification trees, we can also get estimated probability of membership in each of the classes</li>
</ul>
Here is an example of decision tree :-

<figure id="attachment_15" class="wp-caption aligncenter" data-shortcode="caption"><img class="  wp-image-15 size-full" src="https://sirinsanchay.files.wordpress.com/2015/04/tvtree.jpg?w=648" alt="tvTree" /><figcaption class="wp-caption-text">A decision tree</figcaption></figure>
<h5>Splitting Criteria :</h5>
<strong>Regression</strong> : residual sum of squares

RSS = ∑ left (y<sub>i </sub>– y<sub>L</sub>*)<sup>2</sup> + ∑ right (y<sub>i</sub> – y<sub>R</sub>*) <sup>2</sup>

where y<sub>L</sub>* = mean y-value for left node, y<sub>R</sub>* = mean y-value for right node

<strong>Classification : </strong>Gini criterion

Gini = N<sub>L</sub> ∑ <sub>k=1,…,K</sub> kL (1- kL ) + N<sub>R</sub> ∑ <sub>k=1,…,K</sub> kR (1- kR )

where kL = proportion of class k in left node, kR = proportion of class k in right node

Here is an illustration how to determine the split using above splitting criteria :-

<figure id="attachment_40" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/horizontal-split2.png"><img class="wp-image-40 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/horizontal-split2.png?w=648" alt="horizontal split2" /></a><figcaption class="wp-caption-text">Checking out the min RSS in case of Horizontal Split</figcaption></figure>So, here we find out that minimum RSS for horizontal split is<strong> 68.09</strong> where the log of prostate weight is <strong>3.67 </strong>

<figure id="attachment_39" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/vertical-split1.png"><img class="wp-image-39 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/vertical-split1.png?w=648" alt="vertical split1" /></a><figcaption class="wp-caption-text">Checking out min RSS for vertical split</figcaption></figure>In case of Vertical Split, the minimum RSS is <b>61.76 </b>where log of cancer volume is <strong>1.05 </strong>. <a href="https://sirinsanchay.files.wordpress.com/2015/05/done1.png"><img class=" wp-image-43  alignnone" src="https://sirinsanchay.files.wordpress.com/2015/05/done1.png?w=429&amp;h=190" alt="done1" width="429" height="190" /></a> <a href="https://sirinsanchay.files.wordpress.com/2015/05/done2.png"><img class="  alignnone wp-image-42" src="https://sirinsanchay.files.wordpress.com/2015/05/done2.png?w=260&amp;h=205" alt="done2" width="260" height="205" /></a>

So , we will go for vertical split as the <strong>min </strong>RSS is less in case of Vertical split as compared to Horizontal Split . Now for second split (left) , again we will repeat the same procedure :

<figure id="attachment_49" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/2h1.png"><img class="wp-image-49 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/2h1.png?w=648" alt="2h1" /></a><figcaption class="wp-caption-text">Finding min RSS in case of Horizontal Split</figcaption></figure>Best horizontal split is at <strong>3.66</strong> with RSS = <strong>16.11</strong>

<figure id="attachment_47" class="wp-caption aligncenter" data-shortcode="caption"><a href="https://sirinsanchay.files.wordpress.com/2015/05/2v1.png"><img class="wp-image-47 size-full" src="https://sirinsanchay.files.wordpress.com/2015/05/2v1.png?w=648" alt="2v1" /></a><figcaption class="wp-caption-text">Finding min RSS in case of Vertical Split</figcaption></figure>Best vertical split is at –<strong>.48</strong> with RSS = <strong>13.61</strong>. So once again we will go for vertical split as RSS is less in  case of vertical split.

.<a href="https://sirinsanchay.files.wordpress.com/2015/05/2d1.png"><img class="  wp-image-51 alignright" src="https://sirinsanchay.files.wordpress.com/2015/05/2d1.png?w=696&amp;h=308" alt="2d1" width="696" height="308" /></a><a href="https://sirinsanchay.files.wordpress.com/2015/05/2d2.png"><img class="  wp-image-50 aligncenter" src="https://sirinsanchay.files.wordpress.com/2015/05/2d2.png?w=211&amp;h=340" alt="2d2" width="211" height="340" /></a>

So , the second split in the left node is at -.48.  In a similar way, we can classify all the data using splitting criteria. And ultimately we will end up similar to this..<a href="https://sirinsanchay.files.wordpress.com/2015/05/final.png"><img class="  wp-image-53 alignright" src="https://sirinsanchay.files.wordpress.com/2015/05/final.png?w=708&amp;h=314" alt="final" width="708" height="314" /></a><a href="https://sirinsanchay.files.wordpress.com/2015/05/final2.png"><img class="  wp-image-52 alignright" src="https://sirinsanchay.files.wordpress.com/2015/05/final2.png?w=237&amp;h=277" alt="final2" width="237" height="277" /></a>

On a summarizing note, we can say that for each variable, first we determine which split (Horizontal or Vertical) has minimum RSS (in case of Regression). And then we choose the variable having minimum RSS as the split. Similarly, we select the splitting variable at each node and classify the given data set in a tree. Then we repeat the same procedure at each node to classify the data set and we end up in developing a decision tree.
<h5>Pruning of tree :-</h5>
<ul>
	<li>Pruning reduces the size of decision tree by removing sections of the tree that provide little power to classify instances.</li>
	<li>Classification trees can have hundreds or thousands of nodes and these need to be reduced by pruning to simplify the tree</li>
	<li>Pruning is done to avoid the potential over-fitting problem that might happen in a single tree</li>
</ul>
<b>Perks of using CART ( Classification and Regression Trees) :-</b>
<ul>
	<li>It is applicable to both classification and regression problems and as well as handles categorical predictor naturally</li>
	<li>Computationally simple and quick to fit even for larger problems</li>
	<li>Can handle highly non-linear interaction and classification boundaries</li>
	<li>Very easy to interpret if the tree is small</li>
	<li>The picture of the tree can give valuable insights into which variables are important and where.</li>
	<li>The terminal nodes suggest a natural clustering of data into homogeneous groups</li>
</ul>
<h5>Then why do we need Random Forest ??</h5>
<ul>
	<li><strong>Accuracy :- </strong>Decision trees tend to overfit training data which can give poor results when applied to the full data set<strong> .</strong>The accuracy of CART is very low as compared to other modern methods.</li>
	<li><strong>Instability :- </strong>If we change the data a little, the tree picture can change a lot. So, the interpretation is not as straightforward as it appears.</li>
</ul>
<em>Before we go to the Random forest, </em>first we need to understand the concept of <strong>Bagging </strong>.
<h5><strong>Bagging :-  </strong></h5>
Bagging is word made from <strong>B</strong>ootstrap <strong>Agg</strong>regat<strong>ing </strong>. A bootstrap sample is chosen at random with replacement from the data. Some observations end up in the bootstrap sample more than once, while others are not included also known as <b>out of bag .</b> Classification or Regression model is fit to bootstrap samples from data and combine by voting (classification) or averaging (regression) all the bootstrap samples. It reduces the variance of base learner but has limited effect on bias
<h4>Random Forest</h4>
It is an ensemble classifier using many decision tree models which can be used for both classification and regression problem. It corrects the decision trees habit of over-fitting the training data. <strong>How Random Forest works ?</strong>
<ul>
	<li>Grow a forest of many trees. We take default R as 500 where R is number of trees</li>
	<li>Grow each tree on an independent bootstrap sample from the training data where N samples are selected at random with replacement from given data</li>
	<li>At each node: Select <strong>m</strong> variables at random out of all M possible variables (independently for each node).Find the best split on selected <strong>m</strong> variables</li>
	<li>Grow the trees to maximum depth</li>
	<li>Vote/average the trees to get predictions for the new data</li>
</ul>
<h5>Advantages of Random Forest :-</h5>
It inherits the various advantages of CART like computationally simple and quick to fit even for larger problems , can handle highly non-linear interactions and classification boundaries but two main advantages over CART are as follows :-

<strong>Accuracy :- </strong>Random Forests is competitive with the best known machine learning methods.

<strong>Stability :-  </strong>if we change the data a little, the individual trees may change but the forest is relatively stable because it is a combination of many trees.

Though <strong>Random Forest </strong>has various advantages, but in this case the picture does not give an insight of which variables are important and where nor the terminal nodes suggest a natural clustering of data into homogeneous groups
<h4>Proximity Meausres :-</h4>
Proximity of two cases is the proportion of the time that they end up in the same node. The proximities don’t just measure similarity of the variables – they also take into account the importance of the variables. Two cases that have quite <strong>different</strong> predictor variables might have <strong>large</strong> proximity if they differ only on variables that are<strong> not important .</strong> Two cases that have quite<strong>similar</strong> values of the predictor variables might have <strong>small</strong> proximity if they differ on inputs that are <strong>important.</strong>

<strong> </strong> <b>Applications of Proximity Measures :- </b>
<ul>
	<li>Proximity measures how frequent unique pairs of training samples (in and out of bag) end up in the same terminal node</li>
	<li>It is used to fill in missing data and calculating outliers</li>
	<li>At a glance, we get the information about which classes are overlapping and which classes differ.</li>
</ul>
An application of proximity measure is illustrated here :- Here we can visualize that there are <strong>600 </strong>cases, in which there are <strong>2 </strong>meaningful variables, <strong>48 </strong>noise variables and <strong>3 </strong>classes.
<a href="https://sirinsanchay.files.wordpress.com/2015/05/proximity.png"><img class="  wp-image-28 aligncenter" src="https://sirinsanchay.files.wordpress.com/2015/05/proximity.png?w=451&amp;h=398" alt="proximity" width="451" height="398" /></a>

&nbsp;";s:10:"post_title";s:44:"Random Forest :- An Ensemble Learning Method";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:41:"random-forest-an-ensemble-learning-method";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:47:16";s:17:"post_modified_gmt";s:19:"2015-08-07 02:17:16";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=642";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:17;O:8:"stdClass":23:{s:2:"ID";s:3:"644";s:11:"post_author";s:2:"97";s:9:"post_date";s:19:"2015-08-07 07:44:41";s:13:"post_date_gmt";s:19:"2015-08-07 02:14:41";s:12:"post_content";s:4529:"<header class="entry-header">
<h2 class="entry-title"></h2>
</header>
<div class="entry-content">

A Decision tree is basically a tree structure used for classification. The tree has a root, that quite counter-intuitively is located at the top. Further, it branches out to nodes, and the nodes with no further branches are known as leaves.

Consider this data-set:

<img class="alignnone" src="https://cochincodeclub.files.wordpress.com/2015/04/fe150-tennis-table.jpg?w=1054&amp;h=577" alt="" width="1054" height="577" />
In a decision tree, the process of classification starts at the root. Now, just like any other data set we’ve encountered, in the above data each row contains a set of features/variables and a class to which the particular row is classified. At the root node, we make a classification of the data set based on just one feature – the one feature that can best classify the data set.

<img class="alignnone" src="https://i2.wp.com/jmvidal.cse.sc.edu/talks/decisiontrees/dt.png" alt="" width="1292" height="788" />
Now before moving on – how do we decide which feature can best classify the data set at each node. Why did we start with ‘Outlook’ and not ‘Humidity’ or ‘Wind’. It can be mathematically understood as follows:

Entropy = -p1 * log(p1) – p2 * log(p2) and so on, where p1 and p2 denote the probability of a row in the data set at the particular node being from class 1 or class 2 respectively

This is, as name would suggest, a measure of the randomness of the data set. In the data-set, if there are more number of classes with each class occurring almost equal number of times, it’s highly random. But if it’s mostly of one class, then it’s not very random and the entropy would be less.

So we measure the entropy gain in classifying at a node using change in entropy – the more, the better. For example, if we have three features at a node, and we need to check the change in entropy for division with each feature we have, and choose to divide with the one that creates maximum reduction in entropy. Now that the data-set is divided into two or more nodes based on one feature, we continue to do this at each until one node has satisfactorily low entropy. That is, the node mostly only one class of data.

<a href="https://cochincodeclub.files.wordpress.com/2015/04/decision-tree-learning-17-638.jpg"><img class="alignnone size-medium wp-image-14" src="https://cochincodeclub.files.wordpress.com/2015/04/decision-tree-learning-17-638.jpg?w=300&amp;h=141" alt="decision-tree-learning-17-638" width="300" height="141" /></a>

In the above case, notice how we came to choose ‘Humidity’ as the splitting variable using the concept of entropy. So this is the basics of a simple decision tree – just enough to understand RF.

Random Forest.

Now Random Forest in basically an extension of the decision trees. It uses the crucial technique of bagging. Bagging involves training a lot of weak learning algorithms and collectively using them to produce a powerful learner. In case of RF, all weak learners are decision trees, but they are weak, because they use only part of the data to train themselves. Now all these weak decision trees work together to give a result much accurate than if we’d just used a single decision tree accessing complete data.

This is how it works. Consider a data-set, with say 100 rows and 5 features. Each of the entry belongs to either of 3 classes.

Now we take, say, two-thirds of the total rows (60 in this case) and feed it to a decision tree. At each node, choose a small subset of the features and then find out the most suitable feature from only among that subset. In this case, say at one node, we make a subset of 2 out of five features. From the two features we find out which one reduces entropy most and proceed. This continues at each node.
This is done for many more decision trees. So essentially data is randomly chosen for each decision tree while the subset of features to be used is selected at each node.

<img class="alignnone" src="https://i1.wp.com/cdn-ak.f.st-hatena.com/images/fotolife/k/kazoo04/20131204/20131204173330.png" alt="" width="567" height="328" />

Finally, after learning, we run the test data on each decision tree and find out the classification – then decide the final classification based on voting from each tree. For a row in test data, if 80 among 100 decision trees voted a particular class, that would be chosen as the class of the row.

</div>";s:10:"post_title";s:14:"Decision Trees";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"decision-trees";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 07:46:34";s:17:"post_modified_gmt";s:19:"2015-08-07 02:16:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=644";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:18;O:8:"stdClass":23:{s:2:"ID";s:3:"648";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-07 09:39:31";s:13:"post_date_gmt";s:19:"2015-08-07 04:09:31";s:12:"post_content";s:16955:"Hi friends today we will add a new and exiting feature in our existing e-commerce. We will filter the products based on what category they belong. Please refer to below tutorial if you missed the first part of the e commerce.
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
http://webtutplus.com/e-commerce-website-building-tutorial-set-part-1/";s:13:"post_modified";s:19:"2015-08-09 10:18:07";s:17:"post_modified_gmt";s:19:"2015-08-09 04:48:07";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=648";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:19;O:8:"stdClass":23:{s:2:"ID";s:3:"672";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-08 10:00:11";s:13:"post_date_gmt";s:19:"2015-08-08 04:30:11";s:12:"post_content";s:11009:"Hello everyone, continuing with our e-commerce website building tutorial this is one more tutorial which will teach you how to how to hover zoom your product image from the details page

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part2/" target="_blank"]DEMO[/button]  [button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part2.zip" target="_blank"]Download Code[/button]

&nbsp;

Recall the fact that we had a details.php section in our previous tutorials of e-commerce websites where each product details were displayed individually when the image of the product was clicked. Now we will use a jQuery zoom plugin in that file in order to hover zoom images from the details.php page

<strong>Step 1-</strong>Upgrade the details.php page accordingly
<h2><span style="color: #ff0000;">details.php</span></h2>
<pre class="lang:php decode:true" title="Details.php updated with the jquery code">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Details &lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;style&gt;
		/* styles unrelated to zoom */
		

		/* these styles are for the demo, but are not required for the plugin */
		.zoom {
			display:inline-block;
			position: relative;
		}
		
		/* magnifying glass icon */
		.zoom:after {
			content:'';
			display:block; 
			width:33px; 
			height:33px; 
			position:absolute; 
			top:0;
			right:0;
			background:url(icon.png);
		}

		.zoom img {
			display: block;
		}

		.zoom img::selection { background-color: transparent; }

		
	&lt;/style&gt;
	&lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
	&lt;script src='jquery.zoom.js'&gt;&lt;/script&gt;
	&lt;script&gt;
		$(document).ready(function(){
			$('#image').zoom(); //zoom plugin applied on the image
			
		});
	&lt;/script&gt;

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
		&lt;?php
		if(isset($_GET['product_id'])){
			if(is_numeric($_GET['product_id']) ){ 
				$product_id = $_GET['product_id'];
			}
		}else{
			$product_id = 1;
		}
		

		$sql = "SELECT * FROM images WHERE id='$product_id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) &gt; 0) {
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
		    	$image = "images/".$row['image_name'];
		    	?&gt;
		    	&lt;div class="container"&gt;
		    	&lt;div class="col-sm-6"&gt;
		    		&lt;span class='zoom' id='image'&gt;
		    		&lt;?php echo '&lt;img src="'.$image.'"style="width:400px;" /&gt;';?&gt;
		    		&lt;/span&gt;
		    	&lt;/div&gt;
		    	&lt;div class="col-sm-6"&gt;
		    	&lt;?php 
		    		 echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
			       echo '&lt;p&gt;'.'Rs :- '.$row['price']."&lt;/p&gt;";
			        echo '&lt;p&gt;'.$row['pdesc'].'&lt;/p&gt; ';
		        ?&gt;
		    	&lt;/div&gt;
		    	&lt;/div&gt;
         
		    	&lt;?php
		    }
		} else {
		    echo "No Products";
		}
		?&gt;
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 2-</strong>Include the following jquery code to add the hover zoom plugin
<h2><span style="color: #ff0000;">jQuery.zoom.js</span></h2>
<pre class="lang:default decode:true ">/*!
	Zoom 1.7.14
	license: MIT
	http://www.jacklmoore.com/zoom
*/
(function ($) {
	var defaults = {
		url: false,
		callback: false,
		target: false,
		duration: 120,
		on: 'mouseover', // other options: grab, click, toggle
		touch: true, // enables a touch fallback
		onZoomIn: false,
		onZoomOut: false,
		magnify: 2
	};

	// Core Zoom Logic, independent of event listeners.
	$.zoom = function(target, source, img, magnify) {
		var targetHeight,
			targetWidth,
			sourceHeight,
			sourceWidth,
			xRatio,
			yRatio,
			offset,
			$target = $(target),
			position = $target.css('position'),
			$source = $(source);

		// The parent element needs positioning so that the zoomed element can be correctly positioned within.
		$target.css('position', /(absolute|fixed)/.test(position) ? position : 'relative');
		$target.css('overflow', 'hidden');

		img.style.width = img.style.height = '';

		$(img)
			.addClass('zoomImg')
			.css({
				position: 'absolute',
				top: 0,
				left: 0,
				opacity: 0,
				width: img.width * magnify,
				height: img.height * magnify,
				border: 'none',
				maxWidth: 'none',
				maxHeight: 'none'
			})
			.appendTo(target);

		return {
			init: function() {
				targetWidth = $target.outerWidth();
				targetHeight = $target.outerHeight();

				if (source === $target[0]) {
					sourceWidth = targetWidth;
					sourceHeight = targetHeight;
				} else {
					sourceWidth = $source.outerWidth();
					sourceHeight = $source.outerHeight();
				}

				xRatio = (img.width - targetWidth) / sourceWidth;
				yRatio = (img.height - targetHeight) / sourceHeight;

				offset = $source.offset();
			},
			move: function (e) {
				var left = (e.pageX - offset.left),
					top = (e.pageY - offset.top);

				top = Math.max(Math.min(top, sourceHeight), 0);
				left = Math.max(Math.min(left, sourceWidth), 0);

				img.style.left = (left * -xRatio) + 'px';
				img.style.top = (top * -yRatio) + 'px';
			}
		};
	};

	$.fn.zoom = function (options) {
		return this.each(function () {
			var
			settings = $.extend({}, defaults, options || {}),
			//target will display the zoomed image
			target = settings.target || this,
			//source will provide zoom location info (thumbnail)
			source = this,
			$source = $(source),
			$target = $(target),
			img = document.createElement('img'),
			$img = $(img),
			mousemove = 'mousemove.zoom',
			clicked = false,
			touched = false,
			$urlElement;

			// If a url wasn't specified, look for an image element.
			if (!settings.url) {
				$urlElement = $source.find('img');
				if ($urlElement[0]) {
					settings.url = $urlElement.data('src') || $urlElement.attr('src');
				}
				if (!settings.url) {
					return;
				}
			}

			(function(){
				var position = $target.css('position');
				var overflow = $target.css('overflow');

				$source.one('zoom.destroy', function(){
					$source.off(".zoom");
					$target.css('position', position);
					$target.css('overflow', overflow);
					$img.remove();
				});
				
			}());

			img.onload = function () {
				var zoom = $.zoom(target, source, img, settings.magnify);

				function start(e) {
					zoom.init();
					zoom.move(e);

					// Skip the fade-in for IE8 and lower since it chokes on fading-in
					// and changing position based on mousemovement at the same time.
					$img.stop()
					.fadeTo($.support.opacity ? settings.duration : 0, 1, $.isFunction(settings.onZoomIn) ? settings.onZoomIn.call(img) : false);
				}

				function stop() {
					$img.stop()
					.fadeTo(settings.duration, 0, $.isFunction(settings.onZoomOut) ? settings.onZoomOut.call(img) : false);
				}

				// Mouse events
				if (settings.on === 'grab') {
					$source
						.on('mousedown.zoom',
							function (e) {
								if (e.which === 1) {
									$(document).one('mouseup.zoom',
										function () {
											stop();

											$(document).off(mousemove, zoom.move);
										}
									);

									start(e);

									$(document).on(mousemove, zoom.move);

									e.preventDefault();
								}
							}
						);
				} else if (settings.on === 'click') {
					$source.on('click.zoom',
						function (e) {
							if (clicked) {
								// bubble the event up to the document to trigger the unbind.
								return;
							} else {
								clicked = true;
								start(e);
								$(document).on(mousemove, zoom.move);
								$(document).one('click.zoom',
									function () {
										stop();
										clicked = false;
										$(document).off(mousemove, zoom.move);
									}
								);
								return false;
							}
						}
					);
				} else if (settings.on === 'toggle') {
					$source.on('click.zoom',
						function (e) {
							if (clicked) {
								stop();
							} else {
								start(e);
							}
							clicked = !clicked;
						}
					);
				} else if (settings.on === 'mouseover') {
					zoom.init(); // Preemptively call init because IE7 will fire the mousemove handler before the hover handler.

					$source
						.on('mouseenter.zoom', start)
						.on('mouseleave.zoom', stop)
						.on(mousemove, zoom.move);
				}

				// Touch fallback
				if (settings.touch) {
					$source
						.on('touchstart.zoom', function (e) {
							e.preventDefault();
							if (touched) {
								touched = false;
								stop();
							} else {
								touched = true;
								start( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
							}
						})
						.on('touchmove.zoom', function (e) {
							e.preventDefault();
							zoom.move( e.originalEvent.touches[0] || e.originalEvent.changedTouches[0] );
						});
				}
				
				if ($.isFunction(settings.callback)) {
					settings.callback.call(img);
				}
			};

			img.src = settings.url;
		});
	};

	$.fn.zoom.defaults = defaults;
}(window.jQuery));
</pre>
Once your done run the website and go to the details page of any product

[caption id="attachment_673" align="aligncenter" width="1024"]<img class="size-large wp-image-673" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-121-1024x424.png" alt="The Main Page" width="1024" height="424" /> The Main Page[/caption]

&nbsp;

[caption id="attachment_674" align="aligncenter" width="1024"]<img class="size-large wp-image-674" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-122-1024x424.png" alt="Details page of a particular product. On hovering the mos over the product It will zoom the image" width="1024" height="424" /> Details page of a particular product. On hovering the mouse over the product It will zoom the image[/caption]";s:10:"post_title";s:35:"ecommerce part -2 , add zoom effect";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"ecommerce-part-2-add-zoom-effect";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 10:54:34";s:17:"post_modified_gmt";s:19:"2015-08-08 05:24:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=672";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:25246;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:51;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:57;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:71;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:20;s:10:"return_val";i:20;}