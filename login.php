<?php

include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (first, last, username, password)
VALUES ('$first', '$last', '$username', '$password')";

$result = mysqli_query($conn, $sql);

echo $first."<br>";
echo $last."<br>";
echo $username."<br>";
echo $password."<br>";

header("Location: index.html");
?>
