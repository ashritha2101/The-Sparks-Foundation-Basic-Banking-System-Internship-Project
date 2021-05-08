<?php
	$servername = 'localhost';
	$user = 'root';
	$pass = 'rootpassword';
	$dbname = 'mta';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);
	if(!$conn){
		die("Could not connect to the database --> ".mysqli_connect_error());
	}
?>