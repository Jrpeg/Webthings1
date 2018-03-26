<?php

include 'dbh.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result))
{
  echo "Wrong Username or Password";}
else {
  echo "Your logged in!";}

//header("Location: index.php")
?>
