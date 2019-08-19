<?php
$conn=mysqli_connect('localhost','root','','demo3');
	if($conn){
		echo "connected successfully";
	}
	else{
		echo $conn->error;
	}
	?>