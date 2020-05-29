<?php 
	$con=mysqli_connect("localhost","root","","Denio") or die(mysqli_connect_error());
	if($con)
		echo "Connected";
	echo "";
?>