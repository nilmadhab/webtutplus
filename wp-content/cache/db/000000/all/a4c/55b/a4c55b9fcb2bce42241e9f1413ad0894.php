���U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:57:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (759,747,708)";s:11:"last_result";a:3:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"708";s:11:"post_author";s:2:"95";s:9:"post_date";s:19:"2015-08-11 10:12:26";s:13:"post_date_gmt";s:19:"2015-08-11 04:42:26";s:12:"post_content";s:13420:"We have created an e commerce store earlier, where we were able to add new product, filter those according to the category. Today we will add a new and exiting feature, add to cart option.

&nbsp;

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part4/" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part4.zip" target="_blank"]Download Code[/button]

&nbsp;

<strong>Step 1-</strong>In the index.php add My Cart option to the navigation bar and this option will act as a personal database and this will help one to store products which can be bought later. One can even delete products from cart if required
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
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
	       	&lt;li&gt;&lt;a href="cart.php"&gt;My Cart&lt;/a&gt;&lt;/li&gt; //THE MY CART OPTION
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		
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
<strong>Step 2</strong>-Create cart.php file.
<pre class="lang:php decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	}
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    .total{
    	font-weight: bold;
			font-size: 1.5em;
			    }
    &lt;/style&gt;
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;
	&lt;script type="text/javascript"&gt;
		function delete_cart(product_id){
			//$('#cart').html("added to cart");
			$.ajax({
				  url: "delete_cart.php", // we will delete the post inside delete.php file
				  type: "get", 
			  	  data: { id : product_id}, // lets pass the post id to be deleted here.
				  success: function(html){
				  // $("#cart").load("cart_reload.php"); // we will reload the tbody by reload.php  
				   console.log(html);
				  window.location.reload(1); 
				  }
				});
		}
	&lt;/script&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="cart.php"&gt;My cart&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; My Cart &lt;/h2&gt;
		&lt;div class="row"&gt;
			
			 &lt;table class="table table-striped" style="width:80%;margin:0 auto" id="cart"&gt;
				&lt;?php
					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;
					&lt;/td&gt;
					&lt;/tr&gt;
					&lt;/table&gt;
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
<strong>Step 3</strong>-Create  two php files add_cart.php and delete_cart.php which will be used to update the cart. the first will add products to the cart while the latter will delete products.
<pre class="lang:php decode:true ">&lt;?php

session_start();
// remove all session variables
//session_unset(); 

// destroy the session 
//session_destroy(); 

$product_id = $_GET['id'];
if(!isset($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}
if(!in_array($product_id, $_SESSION['cart']))
$_SESSION['cart'][] = $product_id;

print_r($_SESSION['cart']);



?&gt;</pre>
<pre class="lang:php decode:true ">&lt;?php

session_start();

$product_id = $_GET['id'];
if(!isset($_SESSION['cart'])){

	$_SESSION['cart'] = array();

}
/*if(in_array($product_id, $_SESSION['cart'])){
	//array_push($_SESSION['cart'],$product_id);
	//unset($anArray[0]);
	for ($i=0;$i &lt; sizeof($_SESSION['cart']) ; $i++) {
		if($_SESSION['cart'][$i] == $product_id){
			unset($_SESSION['cart'][$i]);
		}
	}
}*/

if(($key = array_search($product_id , $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
}


print_r($_SESSION['cart']);



?&gt;</pre>
<strong>Step 4-</strong>Create the cart_reload.php file which will reload the page once a product has been deleted to show the updated cart
<pre class="lang:default decode:true ">&lt;?php

					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;
					&lt;/td&gt;
					&lt;/tr&gt;</pre>
<img class="aligncenter size-large wp-image-789" src="http://webtutplus.com/wp-content/uploads/2015/08/Screenshot-139-1024x451.png" alt="The My Cart option on the main page" width="1024" height="451" />
<h6 class=""></h6>";s:10:"post_title";s:53:"Lets build an e commerce, part-4 , add to cart option";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:31:"lets-build-an-e-commerce-part-4";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-23 16:23:06";s:17:"post_modified_gmt";s:19:"2015-08-23 10:53:06";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=708";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"747";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-16 19:00:54";s:13:"post_date_gmt";s:19:"2015-08-16 13:30:54";s:12:"post_content";s:6907:"So. Made a new website and want a easy login from facebook. Facebook have a Javascript SDK and we are going to utilise that for creating fb login for our website.

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
If you are having understanding some piece of code. Please comment here, We are here to help you out.";s:10:"post_title";s:38:"Create Facebook login for your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:38:"create-facebook-login-for-your-website";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-16 19:15:49";s:17:"post_modified_gmt";s:19:"2015-08-16 13:45:49";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=747";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"759";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-16 23:06:44";s:13:"post_date_gmt";s:19:"2015-08-16 17:36:44";s:12:"post_content";s:11136:"Hey folks, this is 6th installment of our e commerce building series using php. Today we will do the most interesting thing, adding payment gateway to our e commerce website. We will use <a href="https://stripe.com/">stripe payment gateway</a> for this purpose.

Here is the demo and zip file and link to github repository.

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/ecomm_part6" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/ecomm_part6.zip" target="_blank"]Download Code[/button]
[button colour="lightblue" type="squarearrow" size="large" link="https://github.com/nilmadhab/ecomm_part6" target="_blank"]Github repo[/button]

&nbsp;

Lets open a test account in stripe.com and obtain test publishable api keys

<a href="http://webtutplus.com/wp-content/uploads/2015/08/test_api_keys1.png"><img class="alignnone size-large wp-image-772" src="http://webtutplus.com/wp-content/uploads/2015/08/test_api_keys1.png" alt="test_api_keys" width="1" height="1" /></a><a href="http://webtutplus.com/wp-content/uploads/2015/08/test_api_keys.png"><img class="alignnone size-large wp-image-770" src="http://webtutplus.com/wp-content/uploads/2015/08/test_api_keys-1024x576.png" alt="test_api_keys" width="1024" height="576" /></a>

Step1: Lets add a button in our cart.php file.
<pre class="lang:default decode:true " title="place order button">&lt;button id="customButton" style="font-size:2em;" class="btn btn-success"&gt;Place order&lt;/button&gt;</pre>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecom_part_6_1.png"><img class="alignnone size-large wp-image-761" src="http://webtutplus.com/wp-content/uploads/2015/08/ecom_part_6_1-1024x576.png" alt="ecom_part_6_1" width="1024" height="576" /></a>

Step2:- Call checkout.js file of stripe payment gateway.

read <a href="https://stripe.com/docs/checkout" target="_blank">https://stripe.com/docs/checkout</a> for more info.
<pre class="lang:default decode:true" title="checkout">&lt;script src="https://checkout.stripe.com/checkout.js"&gt;&lt;/script&gt;

							

							&lt;script&gt;
							  var handler = StripeCheckout.configure({
							    key: 'pk_test_jjNP1Ox593EAhwm2wc505Ruq',
							    image: 'http://webtutplus.com/wp-content/themes/flexform/images/logo.png',
							    token: function(token) {
							      // Use the token to create the charge with a server-side script.
							      // You can access the token ID with `token.id`
							      
							      
							    }
							  });

							  $('#customButton').on('click', function(e) {
							    // Open Checkout with further options
							    handler.open({
							      name: 'webtutplus e commerce tutorial',
							      description: '2 widgets',
							      currency: 'INR',
							      amount:  &lt;?php echo $total*100; ?&gt;
							      // price is in paisa,so we multiply amount by 100
							    });
							    e.preventDefault();
							  });

							  // Close Checkout on page navigation
							  $(window).on('popstate', function() {
							    handler.close();
							  });
							&lt;/script&gt;</pre>
We can observer following things.
<ul>
	<li>we are passing our test key in handler variable.</li>
	<li>use card no 4242 4242 4242 4242 for testing</li>
	<li>We multiply the price by 100 to make the whole amount in paisa</li>
	<li>we make currency as Indian</li>
</ul>
<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part6_22.png"><img class="alignnone size-large wp-image-774" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part6_22-1024x576.png" alt="ecomm_part6_2" width="1024" height="576" /></a>

Step3:- We will now display order summery if order is successfully placed.
<pre class="lang:default decode:true " title="order_details"> $("#order_summery").append("token_id : "+token.id +"&lt;br /&gt;");
							      $("#order_summery").append("email : "+token.email +"&lt;br /&gt;");
							      $("#order_summery").append("client_ip : "+token.client_ip +"&lt;br /&gt;");
							      $("#order_summery").append("total price : Rs ."+ &lt;?php echo $total; ?&gt; +"&lt;br /&gt;");</pre>
So the whole cart.php becomes
<pre class="lang:default decode:true " title="cart.php">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;title&gt;Make Ecommerce part 1&lt;/title&gt;
	 &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet"&gt;
    &lt;script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'&gt;&lt;/script&gt;
      &lt;!-- The required Stripe lib --&gt;
  &lt;script type="text/javascript" src="https://js.stripe.com/v2/"&gt;&lt;/script&gt;

    &lt;style&gt;
    .image{
    	    border: 1px solid #b2b2b2;
    	   margin: 16px auto 24px;
    	   max-width: 260px;
    	   height: 400px;
    	   margin-left:10px;
    	   overflow: hidden;
    	}
    	  
    .tile{
    	max-width: 230px;
    	margin: 0 auto;
    }
    .total{
    	font-weight: bold;
			font-size: 1.5em;
			    }
    &lt;/style&gt;
    
    
&lt;/head&gt;
&lt;body&gt;
	&lt;?php include("connect.php") ?&gt;
	&lt;script type="text/javascript"&gt;
		function delete_cart(product_id){
			//$('#cart').html("added to cart");
			$.ajax({
				  url: "delete_cart.php", // we will delete the post inside delete.php file
				  type: "get", 
			  	  data: { id : product_id}, // lets pass the post id to be deleted here.
				  success: function(html){
				  // $("#cart").load("cart_reload.php"); // we will reload the tbody by reload.php  
				   console.log(html);
				  window.location.reload(1); 
				  }
				});
		}
	&lt;/script&gt;
	&lt;nav class="navbar navbar-inverse navbar-fixed-top"&gt;
	  &lt;div class="container-fluid"&gt;
	    &lt;div class="navbar-header"&gt;
	      &lt;a class="navbar-brand" href="#"&gt;Webtutplus&lt;/a&gt;
	    &lt;/div&gt;
	    &lt;div&gt;
	      &lt;ul class="nav navbar-nav"&gt;
	        &lt;li &gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;
	        &lt;li&gt;&lt;a href="admin.php"&gt;Admin panel&lt;/a&gt;&lt;/li&gt;
	       	&lt;li&gt;&lt;a href="admin.php"&gt;Add new product&lt;/a&gt;&lt;/li&gt;
	       	&lt;li class="active"&gt;&lt;a href="cart.php"&gt;My cart&lt;/a&gt;&lt;/li&gt;
	      &lt;/ul&gt;
	    &lt;/div&gt;
	  &lt;/div&gt;
	&lt;/nav&gt;

	&lt;div class="container" style="margin-top:50px" &gt;
		&lt;h2 style="text-align:center"  class="bg-danger"&gt; My Cart &lt;/h2&gt;
		&lt;div class="row"&gt;
			
			 &lt;table class="table table-striped" style="width:80%;margin:0 auto" id="cart"&gt;
				&lt;?php
					
				if(isset($_SESSION['cart'])){
					$products =$_SESSION['cart'];
					$str = "";
					foreach ($products as $key) {
						$str .= $key.",";
					}
					$str  = rtrim($str,','); // remove the last comma 
					// get all product_id  corrosponding to the checked categories
					$sql = "SELECT * FROM products WHERE id IN ($str)";
				}else{
					$sql = "SELECT * FROM products WHERE id IN (0)"; // no products
				}


					//$sql = "SELECT * FROM products";
					//echo $sql;
					//$sql = "SELECT * FROM images";
					$result = mysqli_query($conn, $sql);
					$total = 0;
					if (mysqli_num_rows($result) &gt; 0) {
					    // output data of each row
					    $count = 0;
					    while($row = mysqli_fetch_assoc($result)) {
					    	echo '&lt;tr&gt;';
					    	
					    	$image = "images/".$row['image_name'];
					       
					        $product_id = $row['id'];
					        echo '&lt;td&gt;';
					        echo '&lt;a href="details.php?product_id='.$product_id.'" &gt;
					        	&lt;img src="'.$image.'" class="tile" style="max-width:100px;max-height:150px"
					      		  /&gt;&lt;/a&gt;';
					      	echo '&lt;/td&gt;';
					      	echo '&lt;td&gt;';

					        echo "&lt;h3&gt;".$row['pname'].'&lt;/h3&gt;';
					        echo '&lt;/td&gt;';
					        echo '&lt;td&gt;';

					       echo '&lt;p&gt;'.'Rs '.$row['price']."&lt;/p&gt;";
					       echo '&lt;/td&gt;';
					       echo '&lt;td&gt;';

					       echo '&lt;p class="btn btn-danger" onclick="delete_cart('.$product_id.')" &gt; Delete from Cart &lt;/p&gt;';
					       echo '&lt;/td&gt;';

					        $total += (int)$row['price'];


			         
					    	echo "&lt;/tr&gt;";
					    }
					} else {
					    echo "No Products";
					}
					?&gt;
					&lt;tr&gt;
					&lt;td&gt;
					&lt;/td&gt;
					&lt;td&gt;
					
					Amount Payable
					&lt;/td&gt;
					&lt;td&gt;
					&lt;p class='total' &gt; Rs &lt;?php echo $total ?&gt; &lt;/p&gt;

					&lt;/td&gt;
					&lt;td&gt;
						&lt;button id="customButton" style="font-size:2em;" class="btn btn-success"&gt;Place order&lt;/button&gt;
					&lt;/td&gt;
					&lt;/tr&gt;
					&lt;tr&gt;
						&lt;td&gt; Order summery &lt;/td&gt;
						&lt;td id="order_summery"&gt; &lt;/td&gt;
					&lt;/tr&gt;
					&lt;/table&gt;
					
					&lt;script src="https://checkout.stripe.com/checkout.js"&gt;&lt;/script&gt;

							

							&lt;script&gt;
							  var handler = StripeCheckout.configure({
							    key: 'pk_test_jjNP1Ox593EAhwm2wc505Ruq',
							    image: 'http://webtutplus.com/wp-content/themes/flexform/images/logo.png',
							    token: function(token) {
							      // Use the token to create the charge with a server-side script.
							      // You can access the token ID with `token.id`
							      console.log(token);
							      $("#order_summery").append("token_id : "+token.id +"&lt;br /&gt;");
							      $("#order_summery").append("email : "+token.email +"&lt;br /&gt;");
							      $("#order_summery").append("client_ip : "+token.client_ip +"&lt;br /&gt;");
							      $("#order_summery").append("total price : Rs ."+ &lt;?php echo $total; ?&gt; +"&lt;br /&gt;");
							      
							    }
							  });

							  $('#customButton').on('click', function(e) {
							    // Open Checkout with further options
							    handler.open({
							      name: 'webtutplus e commerce tutorial',
							      description: '4242 4242 4242 4242',
							      currency: 'INR',
							      amount:  &lt;?php echo $total*100; ?&gt;
							      // price is in paisa,so we multiply amount by 100
							    });
							    e.preventDefault();
							  });

							  // Close Checkout on page navigation
							  $(window).on('popstate', function() {
							    handler.close();
							  });
							&lt;/script&gt;
					 
			&lt;/div&gt;
		
		&lt;/div&gt;

	&lt;/div&gt;
	

&lt;/body&gt;
&lt;/html&gt;
</pre>
We will add the payment option is details.php too, so that user can buy individual item also.

&nbsp;

<a href="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part_6_32.png"><img class="alignnone size-large wp-image-778" src="http://webtutplus.com/wp-content/uploads/2015/08/ecomm_part_6_32.png" alt="ecomm_part_6_32" width="1024" height="576" /></a>

&nbsp;

&nbsp;";s:10:"post_title";s:51:"E commerce part 6, integrate stripe payment gateway";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:38:"e-com-integrate-stripe-payment-gateway";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-17 18:16:31";s:17:"post_modified_gmt";s:19:"2015-08-17 12:46:31";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=759";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:2;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:13420;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:53;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:38;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:3;s:10:"return_val";i:3;}