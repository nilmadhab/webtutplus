<¹ÞU<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:180:"SELECT   wp_posts.* FROM wp_posts  WHERE 1=1  AND wp_posts.post_name = 'live-tracking-of-a-object-on-google-maps' AND wp_posts.post_type = 'post'  ORDER BY wp_posts.post_date DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"308";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-17 05:15:48";s:13:"post_date_gmt";s:19:"2015-07-16 23:45:48";s:12:"post_content";s:7363:"<p>As I had promised. Here's the live tracking thing on google maps. You can always track any object live on google only if you have the coordinates of the new positions.</p>
<p>It depends on your use. You can fetch the co-ordinates of the object using Â a ajax call after some fixed interval and then update the position of the object.</p>
<p><span>[button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/livetracking.php" target="_blank"]Try it![/button]Â [button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/livetracking.zip" target="_blank"]Download Code[/button]</span></p>
<p>&nbsp;</p>
<p>For the demo I have shown a custom overlay whose position changes in a rectangular fashion. The bike shown moves in a rectangular boundary. U will only have to change the updatebounds function to change the coordiantes from ajax call. So it's really simple in google maps using javascript api.</p>
<pre class="prettyprint lang-javascript">CustomOverlay.prototype.updateBounds = function(){
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
    };</pre>
<p><span style="color: #99cc00;">Understanding the code :</span></p>
<p>This is the only function you need to worry about. I have changed the coordinates in a fashion so that object moves in a rectangle. You have to use your ajax call to update the coordiantes thats it.</p>
<p><span style="color: #ff0000;">Complete code :</span></p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
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
</html></pre>
";s:10:"post_title";s:40:"Live Tracking of a Object on google Maps";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"private";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:40:"live-tracking-of-a-object-on-google-maps";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-08-12 13:24:03";s:17:"post_modified_gmt";s:19:"2015-08-12 07:54:03";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=308";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:3;s:8:"not_null";i:1;s:11:"primary_key";i:1;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7363;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:40;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:7;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:40;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:19;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:8:"datetime";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:1;s:8:"zerofill";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:28;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:4;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:1;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:3:"def";s:0:"";s:10:"max_length";i:1;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}