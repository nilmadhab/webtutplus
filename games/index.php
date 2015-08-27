<html>
<head>
<title> Nilmadhab's Home page </title>
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
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#">My portfolio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#">Home</a></li>
            <li><a href="#games" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#about">Games</a></li>
            <li><a href="coding.php" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#contact">Coding Interests</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#">Useful links <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="resume.pdf" target="_blank" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#">Download Resume</a></li>
                <li><a href="coding.php#courses" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/#">Relevent Courses</a></li>

              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="active"><a href="http://nilmadhab1994.blogspot.in" target="_blank" data-privlyhref="http://getbootstrap.com/examples/navbar-fixed-top/">My Blog <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="row">
<div class="col-sm-8" id="nil">
<h1> Welcome to My homepage</h1>
Hi everyone, <br/>

This is nilmadhab , 3rd year undergraduate student of IIT kharagpur.<br/>

I am a programmer. Rather than saying that, I am expert in coding, I would like to say that it is my passion. When I find suitable programming assignment,
 I keep losing track of time !!!!!<br/>

I have worked in Kshitij, tech fest of IIT kharagpur as web team member and subsequently web team head and handled the main web site and
 several games like treasure hunting and online simulation of stock market and foreign exchange and many other games.<br/>

I also developed and contributed to an E commerce website mydreamstore.in , during my 2nd  year summer and winter vacation. 
You can check the website, if you want to know about my work.<br/>

Other than web development, my other areas of interest in coding is game development and algorithm. I have taken several courses of programming in coursera
 and successfully completed a few of these.<br/>

</div>
<div class="col-sm-4" style="margin-top:70px;">
<div class="row" style="margin-left:20%">
   <img src="DSC_0098.JPG" width="200px" class="img-circle">
</div>
   <div class="well" id="social">
      Nilmadhab Mondal <br />
      Phone No:- 9547383680<br/>
      Email : nilmadhab1994@gmail.com<br/>
      
     <div class="row text-center" style="display:inline; font-size:1.2em">
               <ul id="footer-social-links">
                <li><a href="https://www.facebook.com/nilmadhab.mondal.1" data-privlyhref="https://facebook.com/nevin.valsaraj"><i class="fa fa-facebook fa-2x"></i></a>
                </li>
                <li><a href="https://twitter.com/Nilmadhabmondal" data-privlyhref="https://twitter.com/routeaccess"><i class="fa fa-twitter fa-2x"></i></a>
                </li>
                <li><a href="https://plus.google.com/u/0/115723494854387396918/posts" data-privlyhref="https://plus.google.com/+NevinValsaraj32/"><i class="fa fa-google-plus fa-2x"></i></a>
                </li>
                <li><a href="https://github.com/nilmadhab" data-privlyhref="https://github.com/routeaccess"><i class="fa fa-github fa-2x"></i></a>
                </li>
                <li><a href="https://www.linkedin.com/profile/view?id=243367174&trk=nav_responsive_tab_profile_pic" data-privlyhref="http://in.linkedin.com/pub/nevin-valsaraj/60/537/616/"><i class="fa fa-linkedin fa-2x"></i></a>
                </li>
              
            </ul>
        </div>

   </div>
</div>
</div>

<div id="games" class="row well" style="margin-top:100px">
<h2> Game Developed By Me</h2>
    
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