<?php
$conn = mysqli_connect("localhost", "username", "", "password");
if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
?>
