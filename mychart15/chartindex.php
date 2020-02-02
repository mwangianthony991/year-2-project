<?php

header('Content-Type: application/json');
ob_start();
include ('input.php');
ob_end_clean();
$conn = mysqli_connect('localhost', 'root', '', 'registration');

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$query = sprintf("SELECT ratingid, staffcourtesy, staffspeed, staffknowledge, quality, value, variety, location, organization, accessibility FROM retailchart ORDER BY ratingid");

$result = mysqli_query($conn, $query);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

mysqli_close($conn);

print json_encode($data);
?>
