<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
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

    </style>
    <title>Places search box</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
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
      document.getElementById("infoA").innerHTML = " <p> So, You are going from </p> <strong>"+loc[0]+"</strong>";
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
      var node = document.createTextNode("To -> "+locB);
      para.appendChild(node);
      document.getElementById("infoB").appendChild(para);
      document.getElementById('loadingOverlay').style.display='block';
      document.getElementById('loadingImg').style.display='block';
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
            var mytrip_path = [];
            var mytrip_arrows = [];
            for (var i = 0; i < route.legs.length; i++) 
            {
              var trip=[];
              var current_leg=route.legs[i];
              var lineSymbol = {
                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
              };

              var lineColor = colours(color);
              color++ ;
              for(var j=0;j<current_leg.steps.length;j++)
              {
                mytrip_path = mytrip_path.concat(current_leg.steps[j].path);
              }  
            }
            
            myroute = new google.maps.Polyline({
              path: mytrip_path,
              icons: [{
                icon: lineSymbol,
                offset: '50%',
                strokeWeight:4
              }],
              strokeColor: lineColor,
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
              document.getElementById('loadingOverlay').style.display='none';
              document.getElementById('loadingImg').style.display='none';
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

    </script>
    <style>
      #target {
        width: 345px;
      }
    </style>
  </head>
  <body>
  <div class="col-sm-2">
    <label>From : </label>
    <input id="pac-input1" class="control" type="text" placeholder="From ->">
    <br>
    <br>
    <label>To : ( Keep adding places here if you want to go from this point to some next point )</label>
		<input id="pac-input2" class="control" type="text" placeholder="To ->">
    <br>
    <br>
    <div id="infoA"></div>
    <br>
    <div id="infoB"></div>
		</div>
    <div id="loadingOverlay" class="overlay" style="display: none;"></div>
    <div id="loadingImg" class="loading-img" style="display: none;"></div>
  	<div  class="col-sm-10" id="map-canvas"></div>
	
  </body>
</html>
