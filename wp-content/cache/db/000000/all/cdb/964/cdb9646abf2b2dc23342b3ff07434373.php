W+�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:49:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (238)";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"238";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-11 18:54:37";s:13:"post_date_gmt";s:19:"2015-07-11 18:54:37";s:12:"post_content";s:13037:"<p>Hey folks, you know how much we hate page reloading in every single clicks. We want a smooth browsing experience. Here ajax comes to play. It can load a div without refreshing the whole page asynchronously.</p>
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
";s:10:"post_title";s:32:"Delete post of your page by ajax";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:57:"delete-post-of-your-page-by-ajax-good-bye-page-refreshing";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-16 19:24:11";s:17:"post_modified_gmt";s:19:"2015-07-16 19:24:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=238";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13037;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:32;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:57;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}