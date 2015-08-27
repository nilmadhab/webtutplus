<?php 

// make database connection
// make database connection
$conn=mysql_connect( 'localhost','webtutplus','webtutplus')or die("cannot connect");
if (!$conn) {
	echo "error in connecting db";
}
// select database
if (!mysql_select_db('webtut_blog',$conn)){
		echo "error in selecting db";
		
}


 $sql = "SELECT * FROM Posts";
	      if($result = mysql_query($sql,$conn)){
			while($row = mysql_fetch_array($result)){
				echo "<tr>";
					echo "<td>{$row['post_id']}</td>";
					echo "<td>{$row['title']}</td>";
					echo "<td>{$row['post']}</td>";
					$post_id  = $row['post_id'];
					echo "<td onclick='delete_ajax($post_id)'><span class='btn btn-danger'>
								Delete</span></td>"; // pass post_id as parameter and add class to button
								// to make the button look nice.
				echo "</tr>";
			}
		}

?>