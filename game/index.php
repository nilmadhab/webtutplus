<html>
<head>
<title> Lets some games </title>
<link href="boot.min.css " rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{
width: 90%;
margin: 0 auto;
//background: #dddddd url(//tMULBY8BsT) repeat-x fixed bottom center;
background:#dddddd url("image.jpg") repeat-x fixed bottom center;
//background-image: url("images/back.jpg");
font-family:"Tahoma";
 background-color: #137713;
font-size:2em;
}
#nil{
border-radius:15px;
background-color: rgba(0, 0, 0, 0.5);
  color: white;
text-align:justify;
margin-top:70px;
padding:10px
}
.well{
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  margin-bottom: 0px;
}
#social ul li {
  list-style-type: none;
  padding: 8px 16px 8px 16px;
  display: inline;
  font-size:0.6em;

}
h2{
	text-align: center;
}
</style>
  <script type="text/javascript" src="phaser.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</head>
<body>




<div id="games" class="row well" style="margin-top:100px">
<h2> Lets play some games</h2>
    
	<div class="row">
		<div class="col-sm-4">
		<h2> 2048 Clone</h2>
		<img src="images/2048.png" width="200">
				<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" style="margin-top:20px" 

		data-toggle="modal" data-target="#myModal">
		  Play 2048 
		</button>


		</div>
		<div class="col-sm-4">

			<h2> Tic Tac Toe</h2>
		<img src="images/tic_tac.png" width="200">
		
				<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" style="margin-top:20px" 

		data-toggle="modal" data-target="#myModal_tic">
		  Play Tic Tac Toe
		</button>
		</div>
		
		<div class="col-sm-4">

			<h2>  RiceRocks</h2>
		<img src="images/ricerock.png" width="200">
		
				<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" style="margin-top:20px" 

		data-toggle="modal" data-target="#RiceRocks">
		  Play  RiceRocks
		  
		</button>
		</div>
	
	</div>
	<div class="row">
        <div class="col-sm-4">

      <h2>  card game - Memory</h2>
    <img src="images/memory.png" width="200">
    
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" style="margin-top:20px" 

    data-toggle="modal" data-target="#myModal_card">
      Play  card game - Memory 
      
    </button>
    </div>
		<div class="col-sm-4">
		<h2> Flappy Bird</h2>
		<img src="images/flappy.png" width="200">
				<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" style="margin-top:20px" 

		data-toggle="modal" data-target="#myModal_flappy">
		  Play Flappy Bird
		</button>


		</div>
		<div class="col-sm-4">

			<h2> Pong Game</h2>
		<img src="images/pong.png" width="200">
		
				<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" style="margin-top:20px" 

		data-toggle="modal" data-target="#pong">
		  Play Pong
		</button>
		</div>

	</div>
</div>





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content" style="height:700px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Play 2048 Online</h4>
      </div>
      <div class="modal-body">
      <p>Click on run button to start game</p>
        		<iframe src="http://www.codeskulptor.org/#user39_Kmf8Jqm4np_0.py" style="  width: 100%;height: 500px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal_tic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content" style="height:700px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Play Tic Tac Toe Online</h4>
      </div>
      <div class="modal-body">
      <p>Click on run button to start game</p>
        		<iframe src="http://www.codeskulptor.org/#user39_mWuE6b7W8X_23.py" style="  width: 100%;height: 500px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="RiceRocks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content" style="height:700px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Play RiceRocks Online</h4>
      </div>
      <div class="modal-body">
      <p>Click on run button to start game</p>
        		<iframe src="http://www.codeskulptor.org/#user26_BWmCZjeNwM0TATm.py" style="  width: 100%;height: 500px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal_card" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content" style="height:700px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Play Memory Game Online</h4>

      </div>
      <div class="modal-body">
          <p>Click on run button to start game</p>
        		<iframe src="http://www.codeskulptor.org/#user39_xVOah0u10ejTW6j_0.py" style="  width: 100%;height: 500px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal_flappy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content" style="height:700px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Play Flappy Bird Online</h4>
         <p> Press the spacebar to jump </p>
    <div id="gameDiv"> </div>
      </div>
      <div class="modal-body">
        		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:800px">
    <div class="modal-content" style="height:700px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Play Pong game Online</h4>
      </div>
      <div class="modal-body">
      <p>Click on run button to start game</p>
        		<iframe src="http://www.codeskulptor.org/#user39_BiUZSOyCTqKwppl_1.py" style="  width: 100%;height: 500px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52021603-18', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>						