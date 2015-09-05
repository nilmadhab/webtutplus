=��U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"467";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-07-25 00:07:34";s:13:"post_date_gmt";s:19:"2015-07-24 18:37:34";s:12:"post_content";s:25246:"<p style="text-align: center;">Hi guys,We have all played A Picture Puzzle Game Online. In this tutorial we shall show you how to make one such game</p>
<p><span>[button colour="orange" type="roundedarrow" size="large" link="http://demo.webtutplus.com/puzzle" target="_blank"]Try it![/button] [button colour="orange" type="roundedarrow" size="large" link="<a href="http://demo.webtutplus.com/puzzle">http://demo.webtutplus.com/</a>puzzle.zip" target="_blank"]Download Code[/button]</span></p>
<p>Firstly you will need slices of the picture, you may visit <a href="http://picslice.com/" target="_blank">picslice.com</a> or use any tool you have and get it done.</p>
<center><img src="http://mytuto.byethost8.com/s1.png" height="400px" width="700px" /></center>
<p style="text-align: center;">The PicSlice site where you need to upload the picture</p>
<p><img src="http://mytuto.byethost8.com/s2.png" height="400px" width="700px" class="aligncenter" /></p>
<p>An uploaded image being sliced into different pieces</p>
<p>&nbsp;</p>
<p><b>Step 1:-</b> Divide the screen into two divisions. One for the section of putting up the image and the other for the navigation section</p>
<center><img src="http://mytuto.byethost8.com/s3.jpg" height="400px" width="700px" /></center>
<p>The basic layout of the game where one division is the image puzzle and the other is the navigation bar</p>
<p><b>Step 2:-</b>The picture division is made by using a table.Create a Table with as many cells as the number of slices in the picture</p>
<p><b>  Step 3:-</b>In each table cell put an image tag where the image pieces will be shown when the button is clicked</p>
<pre class="prettyprint lang-javascript"><table style="margin:0px 0px 0px 45px;height:450px;width:600px" cellspacing="0" cellpadding="0" border="1">
<tr>
<td style="height:150px;width:200px">
<img id="w" src=""></img>
</td>
<td style="height:150px;width:200px"  >
<img id="w1" src=""></img>
</td>
<td style="height:150px;width:200px" >
<img id="w2" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px" >
<img id="w3" src=""></img>
</td>
<td  style="height:150px;width:200px" >
<img id="w4" src="b5.jpg"></img>
</td>
<td style="height:150px;width:200px" >
<img id="w5" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px">
<img id="w6" src=""></img>
</td>
<td  style="height:150px;width:200px">
<img id="w7" src=""></img>
</td>
<td style="height:150px;width:200px">
<img id="w8" src=""></img>
</td>
</tr>
</table></pre>
<p>Source Code for the Table which holds the images</p>
<pre class="prettyprint lang-javascript"><div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p><br /></center>
<center><button id="bu" onclick="show()">Click Here</button>
<br /><br />
Guess The Name
<br />
<br />
<form onSubmit="return check()">
<center>
<input type="text"  width="50px" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
</form>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
</center>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</div></pre>
<p>Source Code for the Navigation Bar</p>
<p><span color="red" style="color: red;"><b>Understanding the JavaScript Section</b></span></p>
<p>The Javascript Section is the main logic behind the functioning of the game. We will have a detailed look into that</p>
<pre class="prettyprint lang-javascript"><script>
var c=-1;
var f=100;
document.getElementById('a').innerHTML="Initial Score:-100";
document.getElementById('b').innerHTML="Current Score:-100";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="b1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="b8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="b6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w1").src="b2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w3").src="b4.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w8").src="b9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==6)
{document.getElementById("w6").src="b7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==7)
{
alert("It's Big Ben");
document.getElementById("bu").hidden=true;
document.getElementById("w2").src="b3.jpg";
}
}
</script></pre>
<p>JavaScript code image display and score calculation</p>
<p><b><span color="red" style="color: red;">Image Display and Score Calculation</span></b></p>
<p><b>Step 1:-</b>Take a variable c=-1</p>
<p><b>Step 2:-</b>In function show() check if c=-1 if so then change the button text to 'Show Another' in order to start the game and increment c</p>
<p><b>Step 3:-</b>Since the function show() is called on button click so whenever the button is clicked put a check for the current value of c</p>
<p><b>Step 4:-</b>For every value of c use the document.getElementById('id').src="Image Piece URL" to display a image in the particular cell</p>
<p><b>Step 5:-</b><span>Recall the fact that every table cell has an image tag with an id. Pass that id into that 'id' field and the corresponding image URL. Example:-document.getElementById("w6").src="b7.jpg"</span>
</p>
<p><b>Step 6:-</b>Keep incrementing c each time and when you reach the last piece use the document.getElementById('button id').hide=true inorder to hide the 'Show Another' button</p>
<p><b>Step 7:-</b>Alert the answer to the user</p>
<p><b>Step 8:-</b>For calculating the score take a variable f with the initial score and for each image piece reveal decrement it by 10 and display using the getElementById('id').innerHTML=f ('id' is the paragraph id where score is to be displayed)</p>
<pre class="prettyprint lang-javascript"><script><br /><br />function check()<br />{<br />    var na=document.getElementById('name').value;<br />    na=na.toLowerCase();<br />    var nb="big ben";<br />    if(na.match(nb))<br />    {<br />    alert("You have guessed it correctly");<br />    return true;<br />    }<br />    else<br />    {<br />    alert("Wrong Answer Try Again");<br />    <br />    }<br /><br />}<br /></script><span id="mce_marker" data-mce-type="bookmark">​</span></pre>
<center></center>
<p style="text-align: left;">JavaScript code for checking the right answer</p>
<p>&nbsp;</p>
<p><span color="red" style="color: red;"><b>Checking The Answer</b></span></p>
<p><b>Step 1:-</b>In this function check() extract the answer from the text input field which the user types using the document.getElementById('id').value and store it in a variable na(id is again the input text field in the form of the navigation bar)</p>
<p><b>Step 2:-</b>Store the correct answer in another variable nb and compare both the variables.Alert if the user is right or wrong. Use toLowerCase() function to avoid case sensitive issues</p>
<center><img src="http://mytuto.byethost8.com/s4.jpg" height="400px" width="700px" class="aligncenter" /></center><p>
</p>
<p>&nbsp;</p>
<p><img src="http://mytuto.byethost8.com/s5.jpg" height="400px" width="700px" class=" aligncenter" /></p>
<center>Alerts for Right and Wrong Answers</center><p>
</p>
<p>&nbsp;</p>
<p><b><span color="red" style="color: red;">Creating the Main Screen</span></b></p>
<p>This is a rather simple task which just includes three buttons Easy,Medium,Difficult each navigate to different levels of the game</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('ew.jpg')">
<center>
<div style="margin:0px 0px 0px 0px;height:150px;width:800px;background-image:url('texture-02.jpg')"
<br />
<br />
<br />
<h1><b>PICTURE  PUZZLE  GAME</h1>
</div>
<br />
<br />
<br />
<br />
<br />
<a href="easy.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px"><b>Easy</button></a>

<a href="medium.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px"><b>Medium</button></a>

<a href="hard.html" target="_self" style="text-decoration:none"><button  class="btn btn-primary" style="width:100px;height:50px"><b>Difficult</button></a>

</center>
</body>
</head>
</html></pre>
<p>
Source Code for the Main Screen</p>
<p><img src="http://mytuto.byethost8.com/s6.jpg" height="400px" width="700px" class=" aligncenter" /></p>
<p>Main Screen Window</p>
<p><b><span color="red" style="color: red;">NOTE:</span></b>The tutorial has been made demonstrating the easy mode.For medium and hard levels follow the same technique and just change the scoring pattern and number of image slices</p>
<p><span style="color: #008000;">Complete Code :</span></p>
<p><!--nextpage--></p>
<p>1. Easy</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>
</title>
<body style="background-image:url('ew.jpg')">
<div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p>
<br /> 
</center>
<center><button id="bu" onclick="show()">Click Here</button>
<br />
<br />
Guess The Name
<br />
<br />
<form onSubmit="return check()">
<center>
<input type="text"  width="50px" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
</form>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
</center>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</div>
<div style="margin:-1200px 0px 0px 80px;height:538px;width:700px;background-image:url('texture-02.jpg')">
<br />
<br />
<table style="margin:0px 0px 0px 45px;height:450px;width:600px" cellspacing="0" cellpadding="0" border="1">
<tr>
<td style="height:150px;width:200px">
<img id="w" src=""></img>
</td>
<td style="height:150px;width:200px"  >
<img id="w1" src=""></img>
</td>
<td style="height:150px;width:200px" >
<img id="w2" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px" >
<img id="w3" src=""></img>
</td>
<td  style="height:150px;width:200px" >
<img id="w4" src="b5.jpg"></img>
</td>
<td style="height:150px;width:200px" >
<img id="w5" src=""></img>
</td>
</tr>
<tr>
<td  style="height:150px;width:200px">
<img id="w6" src=""></img>
</td>
<td  style="height:150px;width:200px">
<img id="w7" src=""></img>
</td>
<td style="height:150px;width:200px">
<img id="w8" src=""></img>
</td>
</tr>
</table>
</div>
</body>
<script>
var c=-1;
var f=100;
document.getElementById('a').innerHTML="Initial Score:-100";
document.getElementById('b').innerHTML="Current Score:-100";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="b1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="b8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="b6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w1").src="b2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w3").src="b4.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w8").src="b9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==6)
{document.getElementById("w6").src="b7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==7)
{
alert("It's Big Ben");
document.getElementById("bu").hidden=true;
document.getElementById("w2").src="b3.jpg";
}
}
</script>
<script>
function check()
{
var na=document.getElementById('name').value;
na=na.toLowerCase();
var nb="big ben";
if(na.match(nb))
{
alert("You have guessed it correctly");
return true;
}
else
{
alert("Wrong Answer Try Again");
}
}
</script>
</html></pre>
<p>2. Medium</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>
</title>
<body style="background-image:url('ew.jpg')">
<div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p>
<br />
</center>
<center><button id="bu" onclick="show()">Click Here</button>
<br />
<br />
Guess The Name
<br />
<br />
<center>
<form onSubmit="return check()">
<input type="text" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</center>
</div>
<div style="margin:-1200px 0px 0px 30px;height:580px;width:820px;background-image:url('texture-02.jpg')">
<br />
<br />
<table style="margin:0px 0px 0px 30px" cellspacing="0" cellpadding="0" border="1" width="750px" height="500">
<tr>
<td style="height:166px;width:187px">
<img id="w" src=""></img>
</td>
<td style="height:166px;width:187px"  >
<img id="w1" src=""></img>
</td>
<td style="height:166px;width:187px" >
<img id="w2" src="slice3.jpg"></img>
</td>
<td style="height:166px;width:187px" >
<img id="w3" src=""></img>
</td>
</tr>
<tr>
<td  style="height:166px;width:187px" >
<img id="w4" src=""></img>
</td>
<td  style="height:166px;width:187px" >
<img id="w5" src=""></img>
</td>
<td style="height:166px;width:187px" >
<img id="w6" src=""></img>
</td>
<td style="height:166px;width:187px">
<img id="w7" src=""></img>
</td>
</tr>
<tr>
<td  style="height:166px;width:187px">
<img id="w8" src=""></img>
</td>
<td  style="height:166px;width:187px">
<img id="w9" src=""></img>
</td>
<td style="height:166px;width:187px">
<img id="w10" src=""></img>
</td>
<td style="height:166px;width:187px" >
<img id="w11" src=""></img>
</td>
</tr>
</table>
</div>
</body>
<script>
var c=-1;
var f=160;
document.getElementById('a').innerHTML="Initial Score:-150";
document.getElementById('b').innerHTML="Current Score:-150";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="slice1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="slice8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="slice6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w4").src="slice5.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w1").src="slice2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w11").src="slice12.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c+=2;
}
else if(c==7)
{
document.getElementById("w3").src="slice.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==8)
{
document.getElementById("w10").src="slice11.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==9)
{
document.getElementById("w8").src="slice9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==10)
{document.getElementById("w6").src="slice7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==11)
{
alert("It's Adam Gilchrist");
document.getElementById('bu').hidden=true;
document.getElementById("w9").src="slice10.jpg";
}
}
</script>
<script>
function check()
{
var na=document.getElementById('name').value;
na=na.toLowerCase();
var nb="adam gilchrist";
if(na.match(nb))
{
alert("You have guessed it correctly");
return true;
}
else
{
alert("Wrong Answer Try Again");
}
}
</script>
</html></pre>
<p>3. Hard</p>
<pre class="prettyprint lang-javascript"><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<title>
</title>
<body style="background-image:url('ew.jpg')">
<div style="margin:40px 800px 600px 900px;height:600px;width:350px;background-image:url('texture-02.jpg')">
<br />
<center><h2>Navigation Bar</h2>
<br />
<br />
<p>Let's play the game and guess the picture
Click the show buttons to unfold parts of the images</p>
<br />
</center>
<center><button id="bu" onclick="show()">Click Here</button>
<br />
<br />
Guess The Name
<br />
<br />
<center>
<form onSubmit="return check()">
<input type="text" id="name">
<br />
<br />
<button class="btn btn-success" type="submit">Submit</button>
<br />
<br />
</form>
</center>
<h3>Score card</h3>
<center>
<p id="a"></p>
<p id="b"></p>
<a href="main.html" target="_self" style="text-decoration:none"><button class="btn btn-primary" style="width:100px;height:50px">HOME</button></a>
</center>
</div>
<div style="margin:-1200px 0px 0px 60px;height:480px;width:720px;background-image:url('texture-02.jpg')">
<br />
<br />
<br />
<table style="margin:0px 0px 0px 45px" cellspacing="0" cellpadding="0" border="1" width="624px" height="352">
<tr>
<td style="height:88px;width:124px">
<img id="w" src=""></img>
</td>
<td style="height:88px;width:124px"  >
<img id="w1" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w2" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w3" src="n4.jpg"></img>
</td>
<td style="height:88px;width:124px" >
<img id="w4" src=""></img>
</td>
</tr>
<tr>
<td  style="height:88px;width:124px" >
<img id="w5" src=""></img>
</td>
<td  style="height:88px;width:124px" >
<img id="w6" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w7" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w8" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w9" src=""></img>
</td>
</tr>
<tr>
<td  style="height:88px;width:124px">
<img id="w10" src=""></img>
</td>
<td  style="height:88px;width:124px">
<img id="w11" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w12" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w13" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w14" src=""></img>
</td>
</tr>
<tr>
<td  style="height:88px;width:124px">
<img id="w15" src=""></img>
</td>
<td style="height:88px;width:124px">
<img id="w16" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w17" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w18" src=""></img>
</td>
<td style="height:88px;width:124px" >
<img id="w19" src=""></img>
</td>
</tr>
</table>
</div>
</body>
<script>
var c=-1;
var f=160;
document.getElementById('a').innerHTML="Initial Score:-160";
document.getElementById('b').innerHTML="Current Score:-160";
function show()
{
if(c==-1)
{
document.getElementById('bu').innerHTML="Show Another";
c++;
}
else if(c==0)
{
document.getElementById("w").src="n1.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==1)
{
document.getElementById("w7").src="n8.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==2)
{
document.getElementById("w5").src="n6.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==3)
{
document.getElementById("w4").src="n5.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==4)
{
document.getElementById("w1").src="n2.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==5)
{
document.getElementById("w11").src="n12.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c+=2;
}
else if(c==7)
{
document.getElementById("w2").src="n3.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==8)
{
document.getElementById("w10").src="n11.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==9)
{
document.getElementById("w8").src="n9.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==10)
{document.getElementById("w6").src="n7.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==11)
{document.getElementById("w13").src="n14.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==12)
{document.getElementById("w16").src="n17.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==13)
{document.getElementById("w14").src="n15.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==14)
{document.getElementById("w19").src="n20.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==15)
{document.getElementById("w15").src="n16.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==16)
{document.getElementById("w12").src="n13.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==17)
{document.getElementById("w17").src="n18.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==18)
{document.getElementById("w18").src="n19.jpg";
f=f-10;
document.getElementById('b').innerHTML="Current Score:-"+f;
c++;
}
else if(c==19)
{
alert("It's Nelson Mandela");
document.getElementById('bu').hidden=true;
document.getElementById("w9").src="n10.jpg";
}
}
</script>
<script>
function check()
{
var na=document.getElementById('name').value;
na=na.toLowerCase();
var nb="nelson mandela";
if(na.match(nb))
{
alert("You have guessed it correctly");
return true;
}
else
{
alert("Wrong Answer Try Again");
}
}
</script>
</html></pre>
";s:10:"post_title";s:49:"Picture Puzzle Game using HTML CSS and JavaScript";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:49:"picture-puzzle-game-using-html-css-and-javascript";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-07-26 10:18:20";s:17:"post_modified_gmt";s:19:"2015-07-26 04:48:20";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://webtutplus.com/?p=467";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}