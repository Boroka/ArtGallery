<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$date = date("Y-m-d");
	// insert to the table
	//connect to db
	include("db.php");
	//sql
	$sql = "INSERT INTO entries (name, email, message, date) VALUES ('$name', '$email', '$message', '$date')";
	$stmt = $db -> query($sql);		
?>