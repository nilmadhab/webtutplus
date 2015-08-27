<?php 

// make database connection
$conn=mysql_connect( 'localhost','webtutplus','webtutplus')or die("cannot connect");
if (!$conn) {
	echo "error in connecting db";
}
// select database
if (!mysql_select_db('webtut_blog',$conn)){
		echo "error in selecting db";
		
}


$post_id = $_GET['post_id']; // store post_id in a varible

$sql = "DELETE FROM `Posts` WHERE post_id = '$post_id'"; // sql command to delete

$result = mysql_query($sql,$conn); // execute the sql command


header("Location: index.php"); // go back to index page



?>