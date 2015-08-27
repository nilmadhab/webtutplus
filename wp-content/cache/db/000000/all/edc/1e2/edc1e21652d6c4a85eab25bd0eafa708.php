��U<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:206:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'getting-optimal-path-from-source-to-multiple-points-in-google-maps' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"497";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-08-02 23:56:12";s:13:"post_date_gmt";s:19:"2015-08-02 18:26:12";s:12:"post_content";s:16337:"Hello again. We have previously seen live tracking of a object on google maps. It's time we get out and roam somewhere. We will be using google direction service today and google place search box.

[button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/direction" target="_blank"]Try it![/button] [button colour="orange" type="roundedarrow" size="large" link="<a href="http://demo.webtutplus.com/puzzle">http://demo.webtutplus.com/direction</a>/direction.zip" target="_blank"]Download Code[/button]

<span style="color: #800000;"><strong>1 .</strong> </span>So At first we are going to create a search box for searching the places. Use bootstrap css and javascript. And user onsign-in for google maps loading.
<pre class="lang:default decode:true">  var input1 = (document.getElementById('pac-input1'));
  var searchBox1 = new google.maps.places.SearchBox((input1));
  google.maps.event.addListener(searchBox1, 'places_changed', function() {
    var places = searchBox1.getPlaces();

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

      loc.push(place.geometry.location) ;
      document.getElementById("infoA").innerHTML = " &lt;p&gt; So, You are going from &lt;/p&gt; &lt;strong&gt;"+loc[0]+"&lt;/strong&gt;";
      markers.push(marker);
      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });</pre>
<span style="color: #008000;">Understanding the code  :</span>
<pre class="lang:default decode:true">var input1 = (document.getElementById('pac-input1'));</pre>
You need to create a input element in your body to place this input field.

<strong>&lt;input id="pac-input1" class="control" type="text" placeholder="From -&gt;"&gt;</strong>
<pre class="lang:default decode:true">var searchBox1 = new google.maps.places.SearchBox((input1));
</pre>
This is place where we are creating a search box and below it we are creating a listener which will listen to inputs given by user to the search box. On starting to enter some text into the box, it will search for relevant places and get icon, name and location of the place and then On selecting it, it will create a marker for that place. We are also storing those markers.

<span style="color: #800000;"><strong>2 . </strong><span style="color: #000000;">Now  since we are done with creating a search box. And I need to mention we are two search boxes, one for start position and other for end position. Let use the google direction service to get the optimal path from one location to other.</span></span>
<pre class="lang:default decode:true">function drawpath(start,end)
{
        var request = {
          origin:start,
          destination:end,
          travelMode: google.maps.TravelMode.DRIVING
        };
        
        var directionsService = new google.maps.DirectionsService();
        directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK)
          {
          
            var route = response.routes[0];
            var total_path = [];
            for (var i = 0; i &lt; route.legs.length; i++) 
            {
              var current_leg = route.legs[i];
              var Symbol = {
                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
              };

              var Color = colours(color);
              color++ ;
              for(var j=0;j&lt;current_leg.steps.length;j++)
              {
                total_path = total_path.concat(current_leg.steps[j].path);
              }  
            }
            
            myroute = new google.maps.Polyline({
              path: total_path,
              icons: [{
                icon: Symbol,
                offset: '50%',
                strokeWeight:4
              }],
              strokeColor: Color,
              strokeOpacity: 1.0,
              strokeWeight: 2
            });
            myroute.setMap(map);
          }
          else
          {
            if(status=="OVER_QUERY_LIMIT")
            {
              setTimeout(function(){
                drawpath(start,end)
              },500);
            }
            else
            {
              alert("OOOOOpppsss !! Looks like you are trying to jump from one continent to other. Sorry No roadway available");
            }
          } 
        });
}</pre>
<span style="color: #339966;">Understanding the code : </span>
<pre class="lang:default decode:true">var request = {
          origin:start,
          destination:end,
          travelMode: google.maps.TravelMode.DRIVING
        };</pre>
This is the request we are to worry about. Just provide the start and end latlng and the travel mode. Now after we make a call to this service it returns with response. Only if it is OK , then only we have the result. Here to trace that path on google maps, I am to create a polyline. So Out of <strong>response.routes[0] , </strong>here 0 corresponds to the first travel mode we have set. So here we only use 0 as we have set only 1 travel mode.

<strong>Response Format : </strong>

Route Travel Mode - &gt; Direction Legs -&gt; Leg Steps.

A  DirectionsLeg defines a single leg of a journey from the origin to the destination in the calculated route. For routes that contain no waypoints, the route will consist of a single "leg," but for routes that define one or more waypoints, the route will consist of one or more legs, corresponding to the specific legs of the journey.

A DirectionsStep is the most atomic unit of a direction's route, containing a single step describing a specific, single instruction on the journey

For digging out more visit <a href="https://developers.google.com/maps/documentation/javascript/directions" target="_blank">https://developers.google.com/maps/documentation/javascript/directions</a>
<pre class="lang:default decode:true"> if(status=="OVER_QUERY_LIMIT")
            {
              setTimeout(function(){
                drawpath(start,end)
              },500);
            }</pre>
The call to the direction service API is a Asynchronous call. It return as soon as it is fired. So if on firing the call if we have already reached the over query limit then we need to again call the same function on and on till we have the result. Do keep in mind the Asynchronous nature of this call while implementing your function on direction service.

<strong style="color: #800000;">3. </strong><span style="color: #000000;">Are we not done yet. Chill we are!! Look at the final code below, I have added some beautiful colours to display multiple paths in different colours.</span>

<span style="color: #000000;"><span style="color: #ff0000;"><strong>Complete Code :</strong></span> </span>
<pre class="lang:default decode:true ">&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta name="viewport" content="initial-scale=1.0, user-scalable=no"&gt;
    &lt;meta charset="utf-8"&gt;
     &lt;link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.css" rel="stylesheet" media="screen"&gt;

    &lt;!-- Bootstrap CSS --&gt;
    &lt;link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" /&gt;
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

      #pac-input1 {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        /*margin-left: 12px;*/
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #pac-input1:focus {
        border-color: #4d90fe;
      }


      #pac-input2 {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        /*margin-left: 12px;*/
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #pac-input2:focus {
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
    &lt;title&gt;Places search box&lt;/title&gt;
    &lt;script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true&amp;libraries=places"&gt;&lt;/script&gt;
    &lt;script&gt;
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

var loc = Array();
var map;
var color = 1 ; 
function initialize() {

  var markers = [];
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-33.8902, 151.1759),
      new google.maps.LatLng(-33.8474, 151.2631));
  map.fitBounds(defaultBounds);

  
  var input1 = (document.getElementById('pac-input1'));
  var searchBox1 = new google.maps.places.SearchBox((input1));
  google.maps.event.addListener(searchBox1, 'places_changed', function() {
    var places = searchBox1.getPlaces();

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

      loc.push(place.geometry.location) ;
      document.getElementById("infoA").innerHTML = " &lt;p&gt; So, You are going from &lt;/p&gt; &lt;strong&gt;"+loc[0]+"&lt;/strong&gt;";
      markers.push(marker);
      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  
  var input2 =( document.getElementById('pac-input2'));
  var searchBox2 = new google.maps.places.SearchBox((input2));
  google.maps.event.addListener(searchBox2, 'places_changed', function() {
    var places = searchBox2.getPlaces();

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

      locB = place.geometry.location ;
      var para = document.createElement("p");
      var node = document.createTextNode("To -&gt; "+locB);
      para.appendChild(node);
      document.getElementById("infoB").appendChild(para);
      drawpath(loc[loc.length - 1],locB);

      markers.push(marker);

      bounds.extend(place.geometry.location);
      bounds.extend(loc[loc.length - 1]);
      loc.push(place.geometry.location) ;
    }

    map.fitBounds(bounds);
  });
  
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox1.setBounds(bounds);
    searchBox2.setBounds(bounds);
  });
}

function drawpath(start,end)
{
        var request = {
          origin:start,
          destination:end,
          travelMode: google.maps.TravelMode.DRIVING
        };
        
        var directionsService = new google.maps.DirectionsService();
        directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK)
          {
          
            var route = response.routes[0];
            var total_path = [];
            for (var i = 0; i &lt; route.legs.length; i++) 
            {
              var trip=[];
              var current_leg=route.legs[i];
              var Symbol = {
                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
              };

              var Color = colours(color);
              color++ ;
              for(var j=0;j&lt;current_leg.steps.length;j++)
              {
                total_path = total_path.concat(current_leg.steps[j].path);
              }  
            }
            
            myroute = new google.maps.Polyline({
              path: total_path,
              icons: [{
                icon: Symbol,
                offset: '50%',
                strokeWeight:4
              }],
              strokeColor: Color,
              strokeOpacity: 1.0,
              strokeWeight: 2
            });
            myroute.setMap(map);
          }
          else
          {
            if(status=="OVER_QUERY_LIMIT")
            {
              setTimeout(function(){
                drawpath(start,end)
              },500);
            }
            else
            {
              alert("OOOOOpppsss !! Looks like you are trying to jump from one continent to other. Sorry No roadway available");
            }
          } 
        });
}

function colours(a)
{
  if(a==1)
    return "blue";
  else if(a==2)
    return "red";
  else if(a==3)
    return "green";
  else 
    return "black";
}
google.maps.event.addDomListener(window, 'load', initialize);

    &lt;/script&gt;
    &lt;style&gt;
      #target {
        width: 345px;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="col-sm-2"&gt;
    &lt;label&gt;From : &lt;/label&gt;
    &lt;input id="pac-input1" class="control" type="text" placeholder="From -&gt;"&gt;
    &lt;br&gt;
    &lt;br&gt;
    &lt;label&gt;To : ( Keep adding places here if you want to go from this point to some next point )&lt;/label&gt;
    &lt;input id="pac-input2" class="control" type="text" placeholder="To -&gt;"&gt;
    &lt;br&gt;
    &lt;br&gt;
    &lt;div id="infoA"&gt;&lt;/div&gt;
    &lt;br&gt;
    &lt;div id="infoB"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="loadingOverlay" class="overlay" style="display: none;"&gt;&lt;/div&gt;
    &lt;div id="loadingImg" class="loading-img" style="display: none;"&gt;&lt;/div&gt;
    &lt;div  class="col-sm-10" id="map-canvas"&gt;&lt;/div&gt;
  
  &lt;/body&gt;
&lt;/html&gt;</pre>
I know you may be having some doubts. Comment below, we will be right back.";s:10:"post_title";s:66:"Getting optimal path from source to multiple points in Google Maps";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:66:"getting-optimal-path-from-source-to-multiple-points-in-google-maps";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-07 22:16:03";s:17:"post_modified_gmt";s:19:"2015-08-07 16:46:03";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=497";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:16337;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:66;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:66;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}