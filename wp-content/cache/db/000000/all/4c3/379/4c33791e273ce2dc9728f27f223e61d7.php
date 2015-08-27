=��U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:53:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (699,154)";s:11:"last_result";a:2:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"154";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-09 20:41:57";s:13:"post_date_gmt";s:19:"2015-07-09 20:41:57";s:12:"post_content";s:5061:"Hello Folks. Today we will do something interesting. We all have seen google maps. Today we will build a simple web application using google chart api, where we will mark  metro cities of India.

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
<a href="http://webtutplus.com/wp-content/uploads/2015/07/map_final.png"><img class="alignnone size-large wp-image-161" src="http://webtutplus.com/wp-content/uploads/2015/07/map_final-1024x518.png" alt="map_final" width="1024" height="518" /></a>";s:10:"post_title";s:47:"Displaying metro cities of India in google maps";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:47:"displaying-metro-cities-of-india-in-google-maps";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-02 09:05:17";s:17:"post_modified_gmt";s:19:"2015-08-02 03:35:17";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=154";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"699";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-11 10:02:41";s:13:"post_date_gmt";s:19:"2015-08-11 04:32:41";s:12:"post_content";s:20632:"Hi, You have been waiting a lot. We are back with Google Maps, but we have a good add-on this time. Get weather information at your current location by sharing location from browser or at any other place. This is pretty cool, you can get the weather at any location in the world and it too precise to 1 Hr. Check our the demo for quick preview.

[button colour="lightblue" type="roundedarrow" size="large" link="http://demo.webtutplus.com/weather" target="_blank"]Try it[/button]
[button colour="lightblue" type="squarearrow" size="large" link="http://demo.webtutplus.com/weather.zip" target="_blank"]Download Code[/button]

We are going to use google maps API and weather API from <a href="http://openweathermap.org/" target="_blank">http://openweathermap.org/</a> .

First we will build a interface to retrieve the current location from the browser and then pan to that location on google maps and alternatively make a search box which can search through location and pan to selected location on google map. Keep in mind our sole aim here is to get the latitude and longitude co-ordinates of the location selected.

<strong>1. Creating a Get location from Browser</strong>
<pre class="lang:default decode:true">&lt;script&gt;
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
	x.innerHTML = " &lt;br&gt;Location : (" + position.coords.latitude + " , " +  + position.coords.longitude + " )";		
	lat =  position.coords.latitude;
    lon = position.coords.longitude;

    //show location on map
    var loc = new google.maps.LatLng(position.coords.latitude,position.coords.longitude) ;
    var marker = new google.maps.Marker({
        map: map,
        position: loc
      });

    markers.push(marker);
	var bounds = new google.maps.LatLngBounds();
    bounds.extend(loc);
    map.fitBounds(bounds);
    map.setZoom(7);
    showweather();
} 
&lt;/script&gt;</pre>
It is really easy to understand the above part of code. The function <span class="lang:default decode:true crayon-inline">getLocation()</span> is the real player. It asks the browser to get the current location. And secondly function <span class="lang:default decode:true  crayon-inline ">showPosition(position)</span>  will display the received latitude and longitude on the google map and a marker for the position. It will also pan to that location.

<strong>2. Getting Location from a search box</strong>
<pre class="lang:default decode:true">&lt;script&gt;

var map;
var markers = [];
var lat,lon;
function initialize() {


  map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-33.8902, 151.1759),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = (document.getElementById('pac-input'));
  
  var searchBox = new google.maps.places.SearchBox((input));

  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

    markers.push(marker);
		var x = document.getElementById("demo");
       x.innerHTML = " &lt;br&gt;Location : " + place.geometry.location ;	
       lat = place.geometry.location.lat();
       lon = place.geometry.location.lng();


      bounds.extend(place.geometry.location);
       map.panTo(place.geometry.location);
    
    }

    map.fitBounds(bounds);
    map.setZoom(7);
    showweather();
   
  });

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
   &lt;/script&gt;</pre>
This is just the javascript code for what we aim to do. The html code for the same is given below. Just keep looking.

Understanding the code  :
<div id="crayon-55cfd00d2d755519178607" class="crayon-syntax crayon-theme-arduino-ide crayon-font-times crayon-os-pc print-yes notranslate" data-settings=" minimize scroll-mouseover">
<div class="crayon-plain-wrap"></div>
<div class="crayon-main">
<table class="crayon-table">
<tbody>
<tr class="crayon-row">
<td class="crayon-nums " data-settings="show">
<div class="crayon-nums-content">
<div class="crayon-num" data-line="crayon-55cfd00d2d755519178607-1">1</div>
</div></td>
<td class="crayon-code">
<div class="crayon-pre">
<div id="crayon-55cfd00d2d755519178607-1" class="crayon-line"><span class="crayon-t">var</span> <span class="crayon-v">input1</span> <span class="crayon-o">=</span> <span class="crayon-sy">(</span><span class="crayon-v">document</span><span class="crayon-sy">.</span><span class="crayon-e">getElementById</span><span class="crayon-sy">(</span><span class="crayon-s">'pac-input1'</span><span class="crayon-sy">)</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div>
</div></td>
</tr>
</tbody>
</table>
</div>
</div>
You need to create a input element in your body to place this input field.

<strong>&lt;input id=”pac-input1″ class=”control” type=”text” placeholder=”From -&gt;”&gt;</strong>
<div id="crayon-55cfd00d2d75c147359829" class="crayon-syntax crayon-theme-arduino-ide crayon-font-times crayon-os-pc print-yes notranslate" data-settings=" minimize scroll-mouseover">
<div class="crayon-plain-wrap"></div>
<div class="crayon-main">
<table class="crayon-table">
<tbody>
<tr class="crayon-row">
<td class="crayon-nums " data-settings="show">
<div class="crayon-nums-content">
<div class="crayon-num" data-line="crayon-55cfd00d2d75c147359829-1">1</div>
</div></td>
<td class="crayon-code">
<div class="crayon-pre">
<div id="crayon-55cfd00d2d75c147359829-1" class="crayon-line"><span class="crayon-t">var</span> <span class="crayon-v">searchBox1</span> <span class="crayon-o">=</span> <span class="crayon-r">new</span> <span class="crayon-v">google</span><span class="crayon-sy">.</span><span class="crayon-v">maps</span><span class="crayon-sy">.</span><span class="crayon-v">places</span><span class="crayon-sy">.</span><span class="crayon-e">SearchBox</span><span class="crayon-sy">(</span><span class="crayon-sy">(</span><span class="crayon-v">input1</span><span class="crayon-sy">)</span><span class="crayon-sy">)</span><span class="crayon-sy">;</span></div>
</div></td>
</tr>
</tbody>
</table>
</div>
</div>
This is place where we are creating a search box and below it we are creating a listener which will listen to inputs given by user to the search box. On starting to enter some text into the box, it will search for relevant places and get icon, name and location of the place and then On selecting it, it will create a marker for that place. We are also storing those markers.

<span style="color: #800080;">So, Now We have the co-ordinates for the location we want weather details for. Let move forward.</span>

We are going to use a weather api. The API is provided by  <a href="http://openweathermap.org/" target="_blank">http://openweathermap.org</a>. We are here using the free version and listen to me if are doing some personal and not commercial stuff, free plan is enough for you.

<a href="http://webtutplus.com/wp-content/uploads/2015/08/Untitled1.png"><img class="alignnone size-large wp-image-740" src="http://webtutplus.com/wp-content/uploads/2015/08/Untitled1-1024x576.png" alt="Untitled" width="1024" height="576" /></a>

&nbsp;

This service provides a restAPI.

<span style="color: #ff6600;"><strong>GET Request to URI : http://api.openweathermap.org/data/2.5/weather?lat=""&amp;lon=""</strong></span>

So we are going to use a ajax call to send a get request to above URI and pass variables lat and lon in get request.
<pre class="lang:default decode:true ">&lt;script type="text/javascript"&gt;
	function showweather()
	{	
		$.ajax({
					url: "http://api.openweathermap.org/data/2.5/weather",
					type: 'GET',
					data: {"lat":lat,
				           "lon":lon },
					success: function (result) {
						var data =  JSON.parse(JSON.stringify(result));
						var y = document.getElementById("weather");
						var str = "&lt;h3&gt;&lt;strong&gt;Weather at &lt;/strong&gt; "+data["name"]+"&lt;/h3&gt;&lt;br&gt;";
						str += "&lt;img src='http://openweathermap.org/img/w/"+data["weather"][0]["icon"]+".png'&gt;&lt;/img&gt;";
						str += "&lt;strong&gt;"+data["weather"][0]["main"]+"&lt;/strong&gt;  "+data["weather"][0]["description"]+"&lt;br&gt;";
						str += "&lt;table class='table table-striped'&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Temperature   &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+(parseInt(data["main"]["temp"])-273.15)+" Celcius&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Pressure    &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+data["main"]["pressure"]+" hPa&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Humidity   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["main"]["humidity"]+" %&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Temp_min   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+(parseInt(data["main"]["temp_min"])-273.15)+" Celcius&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Temp_max   &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+(parseInt(data["main"]["temp_max"])-273.15)+" Celcius&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Sea level   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["main"]["sea_level"]+" hPa&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Ground level   &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+data["main"]["grnd_level"]+" hPa&lt;br&gt;&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Wind Speed   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["wind"]["speed"]+" hPa&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Wind Degrees   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["wind"]["deg"]+" hPa&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";
			
						y.innerHTML = str;
					}
				});
	}
&lt;/script&gt;</pre>
On Success, we have the parse the json that we received and we are taking contents from that json to put on a display in already created weather element in html. Look below for the json format of the responce.
<pre class="lang:default decode:true ">{"coord":
{"lon":145.77,"lat":-16.92},
"weather":[{"id":803,"main":"Clouds","description":"broken clouds","icon":"04n"}],
"base":"cmc stations",
"main":{"temp":293.25,"pressure":1019,"humidity":83,"temp_min":289.82,"temp_max":295.37},
"wind":{"speed":5.1,"deg":150},
"clouds":{"all":75},
"rain":{"3h":3},
"dt":1435658272,
"sys":{"type":1,"id":8166,"message":0.0166,"country":"AU","sunrise":1435610796,"sunset":1435650870},
"id":2172797,
"name":"Cairns",
"cod":200}</pre>
Reference : <a href="http://openweathermap.org/current" target="_blank">http://openweathermap.org/current</a>

I think thats it for today. And yes the complete code is here.
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta name="viewport" content="initial-scale=1.0, user-scalable=no"&gt;
    &lt;meta charset="utf-8"&gt;
     &lt;link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.css" rel="stylesheet" media="screen"&gt;

    &lt;!-- Bootstrap CSS --&gt;
    &lt;link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" /&gt;
    &lt;title&gt;Weather| Webtut+&lt;/title&gt;
    &lt;script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places"&gt;&lt;/script&gt;
     &lt;script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;style&gt;
      html, body, #map-canvas {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        /*margin-left: 12px;*/
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

    &lt;/style&gt;
    &lt;script&gt;

var map;
var markers = [];
var lat,lon;
function initialize() {


  map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-33.8902, 151.1759),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = (document.getElementById('pac-input'));
  
  var searchBox = new google.maps.places.SearchBox((input));

  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

    markers.push(marker);
		var x = document.getElementById("demo");
       x.innerHTML = " &lt;br&gt;Location : " + place.geometry.location ;	
       lat = place.geometry.location.lat();
       lon = place.geometry.location.lng();


      bounds.extend(place.geometry.location);
       map.panTo(place.geometry.location);
    
    }

    map.fitBounds(bounds);
    map.setZoom(7);
    showweather();
   
  });

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
   &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1 class="text-center"&gt;Know weather at your location&lt;/h1&gt;
&lt;div  class="col-sm-5" id="map-canvas"&gt;&lt;/div&gt;

&lt;div  class="col-sm-7" &gt;
&lt;button onclick="getLocation()" class="btn btn-info"&gt;Get your Location &lt;/button&gt;  &lt;strong&gt; OR&lt;/strong&gt;
&lt;span&gt;Enter it manually here&lt;/span&gt;
&lt;input id="pac-input" class="control" type="text" placeholder="Enter Location"&gt;
&lt;button class="btn btn-warning" onclick="showweather()"&gt;Get Weather&lt;/button&gt;
&lt;p id="demo"&gt;&lt;/p&gt;
&lt;p id="weather"&gt;&lt;/p&gt;
&lt;/div&gt;

&lt;script type="text/javascript"&gt;
	function showweather()
	{	
		$.ajax({
					url: "http://api.openweathermap.org/data/2.5/weather",
					type: 'GET',
					data: {"lat":lat,
				           "lon":lon },
					success: function (result) {
						var data =  JSON.parse(JSON.stringify(result));
						var y = document.getElementById("weather");
						var str = "&lt;h3&gt;&lt;strong&gt;Weather at &lt;/strong&gt; "+data["name"]+"&lt;/h3&gt;&lt;br&gt;";
						str += "&lt;img src='http://openweathermap.org/img/w/"+data["weather"][0]["icon"]+".png'&gt;&lt;/img&gt;";
						str += "&lt;strong&gt;"+data["weather"][0]["main"]+"&lt;/strong&gt;  "+data["weather"][0]["description"]+"&lt;br&gt;";
						str += "&lt;table class='table table-striped'&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Temperature   &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+(parseInt(data["main"]["temp"])-273.15)+" Celcius&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Pressure    &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+data["main"]["pressure"]+" hPa&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Humidity   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["main"]["humidity"]+" %&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Temp_min   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+(parseInt(data["main"]["temp_min"])-273.15)+" Celcius&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Temp_max   &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+(parseInt(data["main"]["temp_max"])-273.15)+" Celcius&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Sea level   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["main"]["sea_level"]+" hPa&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Ground level   &lt;/strong&gt;  &lt;/td&gt;&lt;td&gt;"+data["main"]["grnd_level"]+" hPa&lt;br&gt;&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Wind Speed   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["wind"]["speed"]+" hPa&lt;/td&gt;&lt;/tr&gt;";
						str += "&lt;tr&gt;&lt;td&gt;&lt;strong&gt;Wind Degrees   &lt;/strong&gt; &lt;/td&gt;&lt;td&gt; "+data["wind"]["deg"]+" hPa&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";
			
						y.innerHTML = str;
					}
				});
	}
&lt;/script&gt;

&lt;script&gt;
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
	x.innerHTML = " &lt;br&gt;Location : (" + position.coords.latitude + " , " +  + position.coords.longitude + " )";		
	lat =  position.coords.latitude;
    lon = position.coords.longitude;

    //show location on map
    var loc = new google.maps.LatLng(position.coords.latitude,position.coords.longitude) ;
    var marker = new google.maps.Marker({
        map: map,
        position: loc
      });

    markers.push(marker);
	var bounds = new google.maps.LatLngBounds();
    bounds.extend(loc);
    map.fitBounds(bounds);
    map.setZoom(7);
    showweather();
} 
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>
&nbsp;";s:10:"post_title";s:48:"Know  weather information by php and weather api";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"know-weather-information";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-16 06:11:11";s:17:"post_modified_gmt";s:19:"2015-08-16 00:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=699";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:20632;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:48;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:47;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}