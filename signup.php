<?php

include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (first, last, username, password) VALUES ('$first', '$last', '$username', '$password')";
$result = mysqli_query($conn, $sql);

//header("Location: index.php")

?>
