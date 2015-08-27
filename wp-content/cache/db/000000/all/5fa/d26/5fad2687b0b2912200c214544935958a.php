Ҡ�U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:57:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (747,732,699)";s:11:"last_result";a:3:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"699";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-11 10:02:41";s:13:"post_date_gmt";s:19:"2015-08-11 04:32:41";s:12:"post_content";s:20632:"Hi, You have been waiting a lot. We are back with Google Maps, but we have a good add-on this time. Get weather information at your current location by sharing location from browser or at any other place. This is pretty cool, you can get the weather at any location in the world and it too precise to 1 Hr. Check our the demo for quick preview.

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
&nbsp;";s:10:"post_title";s:48:"Know  weather information by php and weather api";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"know-weather-information";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-16 06:11:11";s:17:"post_modified_gmt";s:19:"2015-08-16 00:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=699";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:3:"732";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-14 16:15:22";s:13:"post_date_gmt";s:19:"2015-08-14 10:45:22";s:12:"post_content";s:6218:"SUPPORT VECTOR MACHINES

In machine learning, support vector machines are supervised learning models with associated learning algorithms that analyze data and recognize patterns, used for classification and regression analysis.

Support vector machine (SVM) learns a hyperplane to classify data into 2 classes.

SVM doesn’t use decision trees at all.

Properties of SVM :
<ul>
	<li>Duality</li>
	<li>Kernels</li>
	<li>Margin</li>
	<li>Convexity</li>
	<li>Sparseness</li>
</ul>
Basic concept of SVM

In a two-class learning task, the aim of SVM is to find the best classification function to distinguish between members of the two classes in the training data. The metric for the concept of the “best” classification function can be realized geometrically. For a linearly separable dataset, a linear classification function corresponds to a separating hyperplane f (x) that passes through the middle of the two classes, separating the two. Once this function is determined, new data instance xn can be classified by simply testing the sign of the function f (xn); xn belongs to the positive class if f (xn) &gt; 0. Because there are many such linear hyperplanes, what SVM additionally guarantee is that the best such function is found by maximizing the margin between the two classes.

Find a linear decision surface (“hyperplane”) that can separate classes and has the largest distance (i.e., largest “gap” or “margin”) between borderline patients (i.e., “support vectors”).

<a href="https://kgpdag.files.wordpress.com/2015/08/11845984_1042104829148150_1968623963_n.jpg"><img class="size-medium wp-image-36 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11845984_1042104829148150_1968623963_n.jpg?w=300&amp;h=204" alt="11845984_1042104829148150_1968623963_n" width="300" height="204" /></a>

Hyperplane as a Decision boundary
<ul>
	<li>A hyperplane is a linear decision surface that splits the space into two parts</li>
	<li>a hyperplane is a binary classifier</li>
</ul>
<a href="https://kgpdag.files.wordpress.com/2015/08/11846223_1042104855814814_1146300225_n.jpg"><img class="alignnone size-medium wp-image-35" src="https://kgpdag.files.wordpress.com/2015/08/11846223_1042104855814814_1146300225_n.jpg?w=300&amp;h=141" alt="11846223_1042104855814814_1146300225_n" width="300" height="141" /></a>

Equation of a Hyperplane

<a href="https://kgpdag.files.wordpress.com/2015/08/11846318_1042104835814816_876576002_n.jpg"><img class="alignnone size-medium wp-image-34" src="https://kgpdag.files.wordpress.com/2015/08/11846318_1042104835814816_876576002_n.jpg?w=300&amp;h=180" alt="11846318_1042104835814816_876576002_n" width="300" height="180" /></a>

Geometrically, the margin corresponds to the shortest distance between the closest data points to a point on the hyperplane. Having this geometric definition allows us to explore how to maximize the margin, so that even though there are an infinite number of hyperplanes, only a few qualify as the solution to SVM. The reason why SVM insists on finding the maximum margin hyperplanes is that it offers the best generalization ability. It allows not only the best classification performance (e.g., accuracy) on the training data, but also leaves much room for the correct classification of the future data.

<a href="https://kgpdag.files.wordpress.com/2015/08/11868732_1042104832481483_935003505_n.jpg"><img class="size-medium wp-image-31 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11868732_1042104832481483_935003505_n.jpg?w=300&amp;h=284" alt="11868732_1042104832481483_935003505_n" width="300" height="284" /></a>

<a href="https://kgpdag.files.wordpress.com/2015/08/11855452_1042104825814817_1558817076_n.jpg"><img class="size-medium wp-image-33 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11855452_1042104825814817_1558817076_n.jpg?w=279&amp;h=300" alt="11855452_1042104825814817_1558817076_n" width="279" height="300" /></a>

now the Problem is to

max 2/||w||

such that

y(w’x + b) &gt;1 for all

also ||w||= √(w’.w)

so now minimize (w’ w)/2 subject to y(w’x + b) &gt;1

this equation is solved by using Lagrange multiplier and Quadratic programming techniques and equation of hyperplane is achieved.

For nonlinear separable data ,SVM  maps them into a higher dimension using Kernel method and then finds the hyperplane to separate the classes.

<a href="https://www.youtube.com/watch?v=3liCbRZPrZA">https://www.youtube.com/watch?v=3liCbRZPrZA</a>

<a href="https://kgpdag.files.wordpress.com/2015/08/11850866_1042104839148149_308987681_n.jpg"><img class="size-medium wp-image-32 aligncenter" src="https://kgpdag.files.wordpress.com/2015/08/11850866_1042104839148149_308987681_n.jpg?w=300&amp;h=195" alt="11850866_1042104839148149_308987681_n" width="300" height="195" /></a>

Kernel method
<ul>
	<li>Kernel methods involve</li>
	<li>Non-linear transformation of data to a higher dimensional feature space</li>
	<li>Detection of optimal linear solutions in the kernel feature space</li>
</ul>
Let ⱷ→X:F be nonlinear mapping from input space X (original space) to feature space (higher dimensional) F

Then our inner (dot) product &lt;Xi,Xj&gt;  in higher dimensional space is &lt;  ⱷ(Xi), ⱷ(Xj) &gt;

There exist a way to compute inner product in feature space as function of original input points – Its kernel function!

Kernel function:

K(x,z) = &lt; ⱷ(Xi), ⱷ(Xj) &gt;

We need not know ⱷ to compute K(x,z)

Commonly used Kernel functions
<ul>
	<li>Linear</li>
	<li>Polynomial of degree d</li>
	<li>Gaussian Radial Basis Function (RBF)</li>
</ul>
Issues:
<ul>
	<li>Selecting suitable kernel: Its most of the time trial and error</li>
	<li>Multi-class classification: One decision function for each class and then finding one with maximum value</li>
</ul>
Use SVM
<ul>
	<li>High dimensional, linearly separable data (strength), for nonlinearly depends on the choice of the kernel.</li>
</ul>
This post was originally published in <a href="https://kgpdag.wordpress.com/2015/08/12/svm-simplified/">https://kgpdag.wordpress.com/2015/08/12/svm-simplified/</a>";s:10:"post_title";s:14:"SVM Simplified";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"svm-simplified";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-14 16:15:22";s:17:"post_modified_gmt";s:19:"2015-08-14 10:45:22";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=732";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:2;O:8:"stdClass":23:{s:2:"ID";s:3:"747";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-16 19:00:54";s:13:"post_date_gmt";s:19:"2015-08-16 13:30:54";s:12:"post_content";s:6907:"So. Made a new website and want a easy login from facebook. Facebook have a Javascript SDK and we are going to utilise that for creating fb login for our website.

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
If you are having understanding some piece of code. Please comment here, We are here to help you out.";s:10:"post_title";s:38:"Create Facebook login for your website";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:38:"create-facebook-login-for-your-website";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-16 19:15:49";s:17:"post_modified_gmt";s:19:"2015-08-16 13:45:49";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=747";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:20632;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:48;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:38;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:3;s:10:"return_val";i:3;}