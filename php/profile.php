<?php

//check if user is logged in
if(!isset($_SESSION['user_id'])){
  header('Location: login.php');
  exit;
}

//if user is logged in, retrieve details from db
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id = '".$user_id."'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

//get details from database
$name = $row['name'];
$email = $row['age'];
$age = $row['dob'];
$city = $row['gender'];

//display profile info
echo '<h1>My Profile</h1>';
echo '<p><strong>Name:</strong> '.$name.'</p>';
echo '<p><strong>Email:</strong> '..$age'</p>';
echo '<p><strong>Age:</strong> '.$dob.'</p>';
echo '<p><strong>City:</strong> '.$gender.'</p>';

//display edit button
echo '<a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>';

?>