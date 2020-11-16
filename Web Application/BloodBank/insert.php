<?php
$con = mysqli_connect('localhost', 'root', '');

	if(!mysqli_select_db($con,'registration'));
	{
		
		echo 'data not selected' ;
		
	}
	$Message = $_POST['username'];
	$Email = $_POST['email'];
	$sql ="INSERT INTO person(Message,Email) VALUES (	'$Message','$Email')" ;
	if(!mysqli_query($con,$sql))
	{
		echo 'not inserted' ;
	}
	else{ 
	
	echo ' inserted' ;
	
	}
	header('location: Contact.html');
	?>