���U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"699";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-11 10:02:41";s:13:"post_date_gmt";s:19:"2015-08-11 04:32:41";s:12:"post_content";s:20632:"Hi, You have been waiting a lot. We are back with Google Maps, but we have a good add-on this time. Get weather information at your current location by sharing location from browser or at any other place. This is pretty cool, you can get the weather at any location in the world and it too precise to 1 Hr. Check our the demo for quick preview.

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
&nbsp;";s:10:"post_title";s:48:"Know  weather information by php and weather api";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:24:"know-weather-information";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-16 06:11:11";s:17:"post_modified_gmt";s:19:"2015-08-16 00:41:11";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=699";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}