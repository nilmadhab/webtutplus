�g�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:60:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (15,113,672,606)";s:11:"last_result";a:4:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"15";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-02 16:57:39";s:13:"post_date_gmt";s:19:"2015-07-02 16:57:39";s:12:"post_content";s:5363:"Suppose you have a website which has many pictures. As you know Pin interest is one of the trending platform for pining and sharing pictures, lets learn how to pin pictures of your web site in pin interest. Also suppose you want to pin each image separately, i.e you want separate pin buttons for separate images. Lets do it.

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

<a href="http://webtutplus.com/wp-content/uploads/2015/07/pin2.png"><img class="alignnone size-medium wp-image-65" style="margin-left: 10%;" src="http://webtutplus.com/wp-content/uploads/2015/07/pin2.png" alt="pin2" width="600" /></a>";s:10:"post_title";s:49:"Share a picture from your website to pin interest";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"share-a-picture-from-your-website-to-pin-interest";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 22:21:18";s:17:"post_modified_gmt";s:19:"2015-08-07 16:51:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://webtutplus.in/?p=15";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"113";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-07 05:29:25";s:13:"post_date_gmt";s:19:"2015-07-06 23:59:25";s:12:"post_content";s:13477:"<p>We are all familiar with blogs. We share  our valuable experiences in blog. Today we will know, how to create our own blog.</p>
<p>We will use php and mysql to create the blog. I am assuming you have php and mysql installed in your local computer. If it is not the case, please refer to installation tutorial. </p>
<p>[button colour="green" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog/" target="_blank"]Blog Demo[/button]</p>
<p>[button colour="turquoise" type="squarearrow" size="large" link="http://demo.webtutplus.com/blog.zip" target="_blank"]Download Code[/button]</p>
<h2>Step 1:- We will create a database and table  to store the posts.</h2>
<hr />
<p>&nbsp;</p>
<p><strong> </strong></p>
<p>Lets  open localhost/phpmyadmin. Create a new database. Name it blog.</p>
[caption id="attachment_114" align="aligncenter" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_101.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_101-1024x576.png" alt="blog_101" width="1024" height="576" class="wp-image-114 size-large" /></a> Phpmyadmin- create blog database[/caption]
<p>Now we will create a table. It will have three field.</p>
<p>a) Id :- to uniquely identify a post. It will be integer, primary key, auto incremented.</p>
<p>b) Title:- title of the post. It will be var char, with 200 character length.</p>
<p>c) Post :- content of the post will go here. It will be a text field with any number of character. </p>
<p>Add this code snippet in sql table inside blog database.</p>
<pre class="prettyprint lang-mysql">CREATE TABLE IF NOT EXISTS `Posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `post` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;</pre>
[caption id="attachment_115" align="aligncenter" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_2.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_2-1024x576.png" alt="blog_2" width="1024" height="576" class="wp-image-115 size-large" /></a> Create table[/caption]
<p>Now we will add some sample post.</p>
<p>Go to insert tab and add some posts. Alternatively you can also execute the following sql.</p>
<pre class="prettyprint lang-mysql">INSERT INTO `blog`.`Posts` (`post_id`, `title`, `post`) VALUES (NULL, 'Why is Nature So Beautiful? Why Does It Fill Us With Joy and Peace?', 'Why is nature so beautiful? Why does a short walk amidst nature have such a calming influence on our mind? Why does the sight of flowers, butterflies and rainbows fill our hearts with joy unspeakable?

Mankind’s love for nature is perhaps one of the greatest mysteries of life, one that even evolutionary biologists are hard-pressed to explain. After all, what is the utility in admiring a sunset, or delighting at the sight of snow-capped mountains, when it serves no evolutionary purpose?

While evolution and science can explain many facts of our daily existence, the answer to this profound puzzle lies a little beyond the reaches of present day science, and in the realms of the super-conscious.'), (NULL, 'Beauty in Nature', '“I declare this world is so beautiful that I can hardly believe it exists.”  The beauty of nature can have a profound effect upon our senses, those gateways from the outer world to the inner, whether it results in disbelief in its very existence as Emerson notes, or feelings such as awe, wonder, or amazement.  But what is it about nature and the entities that make it up that cause us, oftentimes unwillingly, to feel or declare that they are beautiful?

One answer that Emerson offers is that “the simple perception of natural forms is a delight.”  When we think of beauty in nature, we might most immediately think of things that dazzle the senses – the prominence of a mountain, the expanse of the sea, the unfolding of the life of a flower.  Often it is merely the perception of these things itself which gives us pleasure, and this emotional or affective response on our part seems to be crucial to our experience of beauty.  So in a way there is a correlate here to the intrinsic value of nature; Emerson says:

- See more at: http://green.harvard.edu/news/beauty-nature#sthash.LARllW44.dpuf');</pre>
<h2>Step 2:- Display the post in php</h2>
<hr />
<p>Lets start with following code.</p>
<pre class="prettyprint lang-html"><!DOCTYPE html>
<html>
<head>
	
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    
</head>
<body>


	<div class="container">
		<h2 style="text-align:center"> Welcome to my blog </h2>
	

	</div>

</body>
</html></pre>
<p>&nbsp;</p>
<p>As you can see. I am using bootstrap css to style the page. Now we will make connection with database.</p>
<p>Add following php code inside head tag or any other place of your choice.</p>
<pre class="prettyprint lang-php"><?php 
	ini_set('display_errors', true);
	//error_reporting(E_ALL ^ E_NOTICE);
	$result=mysql_connect( 'sql307.byethost16.com','b16_16292463','shubham123')or die("cannot connect");
	if (!$result) {
		return false;
	}
	if (!mysql_select_db('b16_16292463_blog',$result)){
		return false;
	}
	$conn= $result;
	?></pre>
<p>As you can see, I have set error reporting true in php. Then I have connected to database by mysql_connect() function. I have passed host, username, password as argument to that function. Change it according to your settings.</p>
<p>Then I have selected blog database in mysql_select_db function.</p>
<h2>Step 3:- Fetch data from databse and display it in bootstrap table.</h2>
<hr />
<p>&nbsp;</p>
<p>Now add following html code to create bootstrap table.</p>
<pre class="prettyprint lang-php"><table class="table table-striped">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Title</th>
	          <th>Post</th>
	          
	        </tr>
	      </thead>
	      <tbody>
	        
      	  </tbody>
    	</table></pre>
<p>After inserting the code, the web page will  look something like this.</p>
[caption id="attachment_121" align="aligncenter" width="1024"]<a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_3.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_3-1024x576.png" alt="blog_3" width="1024" height="576" class="wp-image-121 size-large" /></a> Web page[/caption]
<p>The entire code will look something like this</p>
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
	$connect = $result;
	?>
</head>
<body>

	<div class="container">
		<h2 style="text-align:center"> Welcome to my blog </h2>
		<table class="table table-striped">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Title</th>
	          <th>Post</th>
	          
	        </tr>
	      </thead>
	      <tbody>
	        
      	  </tbody>
    	</table>
	</div>

</body>
</html></pre>
<p>Now we will fetch posts from database and display it dynamically in table.</p>
<pre class="prettyprint lang-php"><?php 
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
	      ?></pre>
<p>I am selecting the post table here by "select * from Posts" line.</p>
<p>I am fetching all the rows by mysql_query function and displaying rows one by one by mysql_fetch_array command till all rows are finished. Then I am displaying the row post_id, title and post in a bootstrap row. Remember these fields we created in database.</p>
<p>Once you execute the code in browser you will see something like this.</p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_4.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_4-1024x576.png" alt="blog_4" width="1024" height="576" class="alignnone size-large wp-image-126" /></a></p>
<p>&nbsp;</p>
<h2>Step 4:- creating a form and posting it</h2>
<hr />
<pre class="prettyprint lang-php"><div class="container">
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
		</div></pre>
<p>We will now create a simple html form using bootstrap, and once the form is submitted, the post will get stored in database and we will subsequently display it. Paste the following code just before post table. It is a simple form, with two field title and post. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_5.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_5-1024x576.png" alt="blog_5" width="1024" height="576" class="alignnone size-large wp-image-129" /></a></p>
<p>Now we will submit the form and store it in database. The new post will be automatically shown below </p>
<p>older posts.</p>
<h2>Step 5:- saving the form data in database</h2>
<hr />
<p>&nbsp;</p>
<p>Now we will save the posted data from the form into database by following php script.</p>
<pre class="prettyprint lang-php"><?php 
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
	?></pre>
<p>As you can see the code is pretty straight forward. I am checking if the form is submitted or not, if submitted get the title and post from POST variable and escape it by mysql_real_escape_string function. We need this function to clean html, remove any special character and most importantly to prevent XSS scripting. You can read more about it online.</p>
<p>If you post a the form you will see a new post appeared below older post. </p>
<p><a href="http://webtutplus.com/wp-content/uploads/2015/07/blog_6.png"><img src="http://webtutplus.com/wp-content/uploads/2015/07/blog_6-1024x576.png" alt="blog_6" width="1024" height="576" class="alignnone size-large wp-image-130" /></a></p>
<p>Here is the complete code. I hope you enjoyed the post. We will add option of deleting and editing post in a  later tutorial. Please feel free to post some comment or doubt.</p>
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
";s:10:"post_title";s:24:"PHP create your own blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"php-create-your-own-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-25 19:33:54";s:17:"post_modified_gmt";s:19:"2015-07-25 14:03:54";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://webtutplus.in/?p=113";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"606";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-02 08:34:41";s:13:"post_date_gmt";s:19:"2015-08-02 03:04:41";s:12:"post_content";s:12877:"Hello everyone, today we shall show how to build a e commerce website step by step. This tutorial will cover the techniques you can use to upload your product details and display them.

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

<strong>NOTE : </strong>Wherever you store the php files make sure you create a folder called images because the uploaded files will be transferred to a folder called images.";s:10:"post_title";s:41:"Lets build an E Commerce Website : part-1";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"e-commerce-website-building-tutorial-set-part-1";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-22 22:50:49";s:17:"post_modified_gmt";s:19:"2015-08-22 17:20:49";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=606";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"672";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-08 10:00:11";s:13:"post_date_gmt";s:19:"2015-08-08 04:30:11";s:12:"post_content";s:11009:"Hello everyone, continuing with our e-commerce website building tutorial this is one more tutorial which will teach you how to how to hover zoom your product image from the details page

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

[caption id="attachment_674" align="aligncenter" width="1024"]<img class="size-large wp-image-674" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-122-1024x424.png" alt="Details page of a particular product. On hovering the mos over the product It will zoom the image" width="1024" height="424" /> Details page of a particular product. On hovering the mouse over the product It will zoom the image[/caption]";s:10:"post_title";s:35:"ecommerce part -2 , add zoom effect";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"ecommerce-part-2-add-zoom-effect";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-08 10:54:34";s:17:"post_modified_gmt";s:19:"2015-08-08 05:24:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=672";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13477;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:49;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:49;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:4;s:10:"return_val";i:4;}