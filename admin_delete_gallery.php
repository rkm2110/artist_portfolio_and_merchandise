<?php

$image_id = $_GET['image_id'];
     
$connection = mysqli_connect("localhost", "root", "root","portfolio");

if (mysqli_connect_errno()) {
  echo "<h1>Failed to connect to MySQL: " . mysqli_connect_error() . "</h1>";
}

$query = "DELETE FROM gallery where id='".$image_id."'";
$result = mysqli_query($connection, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

header("Location: gallery.php");
?>
