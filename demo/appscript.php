
<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Script</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link href="./date_dependencies/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="./date_dependencies/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script>
$(function () {
    setIFrameSize();
    $(window).resize(function () {
        setIFrameSize();
    });
});

function setIFrameSize() {
    var parentDivWidth = $("#myframe").parent().width();
    var parentDivHeight = $("#myframe").parent().height();
    $("#myframe")[0].setAttribute("width", parentDivWidth);
    $("#myframe")[0].setAttribute("height", parentDivHeight);
}
</script>

</head>


<body>
<div class="container"> 

<h1> Google App Script Demo </h1>
<h4>The Below Script will add the email,username and password you provide to <button><a target="_blank" href="https://docs.google.com/spreadsheets/d/1SF8mBwaF-TYc7BOODPTguDiK6P4KDRfi5HcRBIWLYP8/edit#gid=0    ">Spreadsheet</a></button></h4>
<form class="form" method="get" action="">
            <input type="text" name = "email" placeholder="Your email" required>
            <input type="text" name = "username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <p> We wont SPAM you. This is only for the live demo of the google app script. Open the above given spreadsheet to see the change and if you provided correct email ID, you will also get a email notifying change in spreadsheet. </p>
            <button type="submit" name = "login" id="login-button">Try It</button>
        </form>
<?php
if(isset($_GET['login']))
{
    //user post request container
    $email = $_GET['email'];
    $user = $_GET['username'];
    $pass = $_GET['password'];
    $post = "email=".$email."&username=".$user."&password=".$pass;
    //url to exec app script
    $url = "https://script.google.com/macros/s/AKfycbx2q1hcu43G1vc5074WQBJn0rhHBcm7_eoLQxiEQIXiYhAJhW4/exec";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($ch);
    curl_close($ch);
    echo "Successfully Added. If you gave correct mail ID, You may check your mail.";
}
?>
 

        </div>
</body>
</html>


