<?php
$conn = mysqli_connect("localhost", "root", "", "tests");
if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
?>
