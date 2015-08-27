<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <title>MarkerWithLabel Example</title>
 <style type="text/css">
   .labels {
     color: red;
     background-color: white;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 10px;
     font-weight: bold;
     text-align: center;
     width: 100px;
     border: 1px solid black;
     white-space: nowrap;
   }
 </style>
 <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
 <script type="text/javascript" src="./markerwithlabelashish.js"></script>
 <script type="text/javascript">
   function initMap() {
     var latLng = new google.maps.LatLng(49.47805, -123.84716);
     var homeLatLng = new google.maps.LatLng(49.47805, -123.84716);

     var map = new google.maps.Map(document.getElementById('map_canvas'), {
       zoom: 12,
       center: latLng,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     var marker1 = new MarkerWithLabel({
       position: homeLatLng,
       title : 'Some Title',
       Icon : 'img/bike.png',
       draggable: true,
       raiseOnDrag: true,
       map: map,
       labelContent: "Some Bike",
       labelAnchor: new google.maps.Point(22, 0),
       labelClass: "labels", // the CSS class for the label
       labelStyle: {opacity: 0.5},
     });
   }
 </script>
</head>
<body onload="initMap()">

 <div id="map_canvas" style="height: 400px; width: 100%;"></div>
 
</body>
</html>