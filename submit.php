<?php
 include('server.php');
 if (!isset($_SESSION['email'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
  readfile('quiz.html');

if(isset($_POST['fsubmit3'])){

  $variety = mysqli_real_escape_string($db, $_POST['variety']);
  $quality = mysqli_real_escape_string($db, $_POST['quality']);
  $serving = mysqli_real_escape_string($db, $_POST['serving']);
  $presentation = mysqli_real_escape_string($db, $_POST['presentation']);
  $value = mysqli_real_escape_string($db, $_POST['value']);
  $speed = mysqli_real_escape_string($db, $_POST['speed']);
  $courtesy = mysqli_real_escape_string($db, $_POST['courtesy']);
  $knowledge = mysqli_real_escape_string($db, $_POST['knowledge']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $ambience = mysqli_real_escape_string($db, $_POST['ambience']);
  $cleanliness = mysqli_real_escape_string($db, $_POST['cleanliness']);
  $restaurantdescription = mysqli_real_escape_string($db, $_POST['restaurantdescription']);

$variable = $_SESSION['email'];

//$idquery = "INSERT INTO feedback (userid) SELECT id FROM users WHERE email = '$variable'";

$selectquery = "SELECT id FROM users WHERE email = '$variable'";
$result = mysqli_query($db, $selectquery);
$row = mysqli_fetch_assoc($result);
$idvar = $row["id"];

//if(mysqli_query($db, $selectquery)){
//$idvar = @id;
$insertquery = "INSERT INTO feedback (variety, quality, serving, presentation, value, speed, courtesy, knowledge, location, ambience, cleanliness, description, userid)
VALUES ('$variety', '$quality', '$serving', '$presentation', '$value', '$speed', '$courtesy', '$knowledge', '$location', '$ambience', '$cleanliness', '$restaurantdescription', '$idvar')";

  //if((mysqli_query($db, $insertquery)) && (mysqli_query($db, $idquery)))
  if(mysqli_query($db, $insertquery)){
    echo "<script>
    window.location.href='submit.php';
    alert('Successful submission');
    </script>";
  }
//}
  //include ('email.php');
  else{
    echo "<script>
    window.location.href='submit.php';
    alert('Submission failed');
    </script>";
    //echo "ERROR: Could not able to execute $insertquery. " . mysqli_error($db);
  }
  //include ('update.php');
  include ('email.php');
}
mysqli_close($db);
 ?>
