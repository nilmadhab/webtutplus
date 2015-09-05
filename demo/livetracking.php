<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Showing/Hiding overlays</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <script>
    var overlay;
    var newposx = 19.117167 ;
    var newposy = 72.902258 ;
    var steps = 0 ;

    CustomOverlay.prototype = new google.maps.OverlayView();

    function initialize() {
      var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(19.117167, 72.902258)
      };

      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      var posx = 19.117167 ;
      var posy = 72.902258 ;
      var swBound = new google.maps.LatLng(posx,posy);
      var neBound = new google.maps.LatLng(posx + 0.002, posy + 0.002);
      var bounds = new google.maps.LatLngBounds(swBound, neBound);

      var srcImage = 'img/bike.png';
      var info = 'BIKE';
        
      overlay = new CustomOverlay(bounds, srcImage,info, map);

      //overlay.updateBounds();
      setInterval(function(){ overlay.updateBounds() }, 300);
    }

    function CustomOverlay(bounds, image,info, map) {

      this.bounds_ = bounds;
      this.image_ = image;
      this.map_ = map;
      this.txt_ = info;
      this.div_ = null;
      this.setMap(map);
    }

    CustomOverlay.prototype.onAdd = function() {

      var div = document.createElement('div');
      div.style.borderStyle = 'none';
      div.style.borderWidth = '0px';
      div.style.position = 'absolute';

      var row = document.createElement('div');
      row.className = 'row';

      var tp = document.createElement('div');
      tp.className = 'col-sm-1';
      row.appendChild(tp);

      var img = document.createElement('img');
      img.className = 'col-sm-8';
      img.src = this.image_;
      img.style.width = '83%';
      img.style.height = '83%';
      img.style.opacity = '1';
      img.style.position = 'relative';
      img.style.align = 'center';
      row.appendChild(img);

      var tp1 = document.createElement('div');
      tp1.className = 'col-sm-1';
      row.appendChild(tp1);
      div.appendChild(row);

      var row1 = document.createElement('div');
      row1.className = 'row';
      row1.align = 'center';

      var name1 = document.createElement('font');
      name1.color = 'red';
      name1.size = '0.5';
      name1.innerHTML = this.txt_ ;
      name1.style.position = 'relative';
      
      
      row1.appendChild(name1);
      div.appendChild(row1);

      this.div_ = div;
      var panes = this.getPanes();
      panes.mapPane.appendChild(div);
    };

    CustomOverlay.prototype.draw = function() {
      var overlayProjection = this.getProjection();
      var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
      var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());
      var div = this.div_;
      div.style.left = sw.x + 'px';
      div.style.top = ne.y + 'px';
      div.style.width = (ne.x - sw.x) + 'px';
      div.style.height = (sw.y - ne.y) + 'px';
    };


    CustomOverlay.prototype.updateBounds = function(){
      if(steps < 10)
      {
        newposx = newposx  ;
        newposy = newposy  + 0.0005;
      }
      else if( steps < 16 )
      {
        newposx = newposx  + 0.0005;
        newposy = newposy   ;
      }
      else if( steps < 26)
      {
        newposx = newposx  ;
        newposy = newposy - 0.0005 ;
      }
      else if (steps < 32)
      {
        newposx = newposx - 0.0005 ;
        newposy = newposy  ;
      }
      else
      {
        newposx = 19.117167 ;
        newposy = 72.902258  ;
        steps = -1 ;
      }
      steps++;
      var newswBound = new google.maps.LatLng(newposx,newposy);
      var newneBound = new google.maps.LatLng(newposx + 0.002, newposy + 0.002);
      var newbounds = new google.maps.LatLngBounds(newswBound, newneBound);
      this.bounds_ = newbounds;
      this.draw();
    };

    CustomOverlay.prototype.onRemove = function() {
      this.div_.parentNode.removeChild(this.div_);
      this.div_ = null;
    };
      

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>