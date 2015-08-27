Û?ÞU<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:134:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.ID = 759 AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"759";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-16 23:06:44";s:13:"post_date_gmt";s:19:"2015-08-16 17:36:44";s:12:"post_content";s:11136:"Hey folks, this is 6th installment of our e commerce building series using php. Today we will do the most interesting thing, adding payment gateway to our e commerce website. We will use <a href="https://stripe.com/">stripe payment gateway</a> for this purpose.

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

readÂ <a href="https://stripe.com/docs/checkout" target="_blank">https://stripe.com/docs/checkout</a>Â for more info.
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

&nbsp;";s:10:"post_title";s:51:"E commerce part 6, integrate stripe payment gateway";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:38:"e-com-integrate-stripe-payment-gateway";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-17 18:16:31";s:17:"post_modified_gmt";s:19:"2015-08-17 12:46:31";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=759";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:11136;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:51;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:38;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}