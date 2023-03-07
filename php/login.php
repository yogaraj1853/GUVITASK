<?php

session_start(); 

if(isset($_POST['submit'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "name" && $password == "password"){
		$_SESSION['username'] = $username;
		header("Location: welcome.php");
	} else {
		echo "Incorrect username or password";
	}
	
}

?>