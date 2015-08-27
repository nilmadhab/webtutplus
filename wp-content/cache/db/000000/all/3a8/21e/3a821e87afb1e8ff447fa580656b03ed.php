� �U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:187:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'displaying-metro-cities-of-india-in-google-maps' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"154";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-09 20:41:57";s:13:"post_date_gmt";s:19:"2015-07-09 20:41:57";s:12:"post_content";s:5061:"Hello Folks. Today we will do something interesting. We all have seen google maps. Today we will build a simple web application using google chart api, where we will mark  metro cities of India.

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
<a href="http://webtutplus.com/wp-content/uploads/2015/07/map_final.png"><img class="alignnone size-large wp-image-161" src="http://webtutplus.com/wp-content/uploads/2015/07/map_final-1024x518.png" alt="map_final" width="1024" height="518" /></a>";s:10:"post_title";s:47:"Displaying metro cities of India in google maps";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"displaying-metro-cities-of-india-in-google-maps";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-02 09:05:17";s:17:"post_modified_gmt";s:19:"2015-08-02 03:35:17";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=154";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:5061;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:47;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:47;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}