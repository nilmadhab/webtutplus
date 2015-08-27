�J�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:63:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (188,154,113,84,15)";s:11:"last_result";a:5:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"15";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-02 16:57:39";s:13:"post_date_gmt";s:19:"2015-07-02 16:57:39";s:12:"post_content";s:5363:"Suppose you have a website which has many pictures. As you know Pin interest is one of the trending platform for pining and sharing pictures, lets learn how to pin pictures of your web site in pin interest. Also suppose you want to pin each image separately, i.e you want separate pin buttons for separate images. Lets do it.

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
";s:10:"post_title";s:13:"Web scrapping";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:13:"web-scrapping";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-18 21:14:41";s:17:"post_modified_gmt";s:19:"2015-07-18 15:44:41";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:26:"http://webtutplus.in/?p=84";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"113";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-07 05:29:25";s:13:"post_date_gmt";s:19:"2015-07-06 23:59:25";s:12:"post_content";s:13477:"<p>We are all familiar with blogs. We share  our valuable experiences in blog. Today we will know, how to create our own blog.</p>
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
";s:10:"post_title";s:24:"PHP create your own blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"php-create-your-own-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-25 19:33:54";s:17:"post_modified_gmt";s:19:"2015-07-25 14:03:54";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:27:"http://webtutplus.in/?p=113";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"1";}i:3;O:8:"stdClass":23:{s:2:"ID";s:3:"154";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-09 20:41:57";s:13:"post_date_gmt";s:19:"2015-07-09 20:41:57";s:12:"post_content";s:5061:"Hello Folks. Today we will do something interesting. We all have seen google maps. Today we will build a simple web application using google chart api, where we will mark  metro cities of India.

[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/google_maps/map_final.html" target="_blank"]Demo[/button]

[button colour="limegreen" type="squarearrow" size="large" link="http://demo.webtutplus.com/google_maps.zip" target="_blank"]Download code[/button]
<h2>Step 1:- Create basic Map</h2>

<hr />

&nbsp;

As usual we will use our basic bootstrap template. I will add script for google map api. I will also set a div in body tag which will contain the map.
<pre class="prettyprint lang-html"><script src="http://maps.googleapis.com/maps/api/js"></script><script>// <![CDATA[
function initialize() {

	  var mapProp = {

	    center:new google.maps.LatLng(28.6139,77.2090),

	    zoom:4,

	    mapTypeId:google.maps.MapTypeId.ROADMAP

	  };

	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	}

	google.maps.event.addDomListener(window, 'load', initialize);
// ]]></script></pre>
<div class="container"></div>
As you can see, the code is pretty straight forward. The latitude and longitude of delhi are 28.6139,77.2090 respectively. I have made it center in intialize javascript  function. I have made zoom 4 and mapetype road, so that I can the entire <i>India.</i>

I also added a DOM listener that will execute the initialize() function when the page is loaded.

<a href="http://webtutplus.com/wp-content/uploads/2015/07/map_1.png"><img class="alignnone size-large wp-image-155" src="http://webtutplus.com/wp-content/uploads/2015/07/map_1-1024x518.png" alt="map_1" width="1024" height="518" /></a>
<h2>Step2:- Get latitude and longitude of main cities of India</h2>

<hr />

&nbsp;

a) Kolkata : 22.5667° N, 88.3667° E

b) Mumbai  :- 18.9750° N, 72.8258° E

c) hyderabad :- 17.3700° N, 78.4800° E

d) Bangalore :- 12.9667° N, 77.5667° E

e) Delhi :- 28.6139° N, 77.2090° E

Let display these five cities in marker.

&nbsp;
<h2>Step3:-Display one city in marker</h2>
Lets display mumbai in marker.

Add the code snippet inside initialize function.
<pre class="prettyprint lang-javascript"> var center = new google.maps.LatLng(18.9750, 72.8258);

		var marker=new google.maps.Marker({

	 	position:center,

	 	 });



		marker.setMap(map);</pre>
I declared a center variable and added latitude and longitude of mumbai there. It is basically a google map object, which take latitude and logitude as parameter.

Then I declared a variable marker, which is again a google  map object. I passed the variable center there. Finally I set the market in map by marker.setMap method.

<a href="http://webtutplus.com/wp-content/uploads/2015/07/map_22.png"><img class="alignnone size-large wp-image-159" src="http://webtutplus.com/wp-content/uploads/2015/07/map_22-1024x518.png" alt="map_2" width="1024" height="518" /></a>
<h2>Step 4:- Now I will make an array, push all the latitudes and longitudes of the cities and display in map.</h2>

<hr />

&nbsp;

a) Declare a js variable pos_array and  enter all the latitude and longitude one by one.
<pre class="prettyprint lang-javascript">var pos_array = [

			[22.5667, 88.3667],

			[ 18.9750, 72.8258],

			[17.37, 74.48],

			[12.96, 77.57],

			[28.614, 77.209]

		];</pre>
b) Now iterate through the array by a for loop and display the markers one by one.
<pre class="prettyprint lang-javascript">for (i = 0; i &lt; pos_array.length; i++) { 

		   var center = new google.maps.LatLng(pos_array[i][0], pos_array[i][1]);

			var marker=new google.maps.Marker({

		 	position:center,

		 	 });

			marker.setMap(map);



		}</pre>
The entire code will be
<pre class="prettyprint lang-html"><script src="http://maps.googleapis.com/maps/api/js"></script><script>// <![CDATA[
function initialize() {

	  var mapProp = {

	    center:new google.maps.LatLng(28.6139,77.2090),

	    zoom:4,

	    mapTypeId:google.maps.MapTypeId.ROADMAP

	  };

	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);



	

		var pos_array = [

			[22.5667, 88.3667],

			[ 18.9750, 72.8258],

			[17.37, 74.48],

			[12.96, 77.57],

			[28.614, 77.209]

		];

		

		for (i = 0; i < pos_array.length; i++) { 

		   var center = new google.maps.LatLng(pos_array[i][0], pos_array[i][1]);

			var marker=new google.maps.Marker({

		 	position:center,

		 	 });

			marker.setMap(map);



		}

	}



	google.maps.event.addDomListener(window, 'load', initialize);
// ]]></script></pre>
<div class="container"></div>
<a href="http://webtutplus.com/wp-content/uploads/2015/07/map_final.png"><img class="alignnone size-large wp-image-161" src="http://webtutplus.com/wp-content/uploads/2015/07/map_final-1024x518.png" alt="map_final" width="1024" height="518" /></a>";s:10:"post_title";s:47:"Displaying metro cities of India in google maps";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"displaying-metro-cities-of-india-in-google-maps";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-02 09:05:17";s:17:"post_modified_gmt";s:19:"2015-08-02 03:35:17";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=154";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:4;O:8:"stdClass":23:{s:2:"ID";s:3:"188";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-10 17:57:13";s:13:"post_date_gmt";s:19:"2015-07-10 12:27:13";s:12:"post_content";s:9933:"<p>Hey folks. We have created a simple blog using php and mysql earlier. Today we will create login and logout system for the blog. We will add facebook and google login also in a later tutorial.</p>
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
";s:10:"post_title";s:33:"Create login system for your blog";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:33:"create-login-system-for-your-blog";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-25 19:33:48";s:17:"post_modified_gmt";s:19:"2015-07-25 14:03:48";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=188";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13477;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:49;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:49;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:5;s:10:"return_val";i:5;}