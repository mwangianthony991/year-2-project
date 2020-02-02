<?php
 include('server.php');
 if (!isset($_SESSION['email'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
  readfile('retailquiz.html');

if(isset($_POST['retailsubmit'])){

  $staffcourtesy = mysqli_real_escape_string($db, $_POST['staffcourtesy']);
  $staffspeed = mysqli_real_escape_string($db, $_POST['staffspeed']);
  $staffknowledge = mysqli_real_escape_string($db, $_POST['staffknowledge']);
  $quality = mysqli_real_escape_string($db, $_POST['quality']);
  $value = mysqli_real_escape_string($db, $_POST['value']);
  $variety = mysqli_real_escape_string($db, $_POST['variety']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $organization = mysqli_real_escape_string($db, $_POST['organization']);
  $accessibility = mysqli_real_escape_string($db, $_POST['accessibility']);
  $retaildescription = mysqli_real_escape_string($db, $_POST['description']);

$variable = $_SESSION['email'];

//$idquery = "INSERT INTO feedback (userid) SELECT id FROM users WHERE email = '$variable'";

$selectquery = "SELECT id FROM users WHERE email = '$variable'";
$result = mysqli_query($db, $selectquery);
$row = mysqli_fetch_assoc($result);
$idvar = $row["id"];

$curr_date = date("Y-m-d");
//if(mysqli_query($db, $selectquery)){
//$idvar = @id;
$insertquery = "INSERT INTO retailfeedback (staffcourtesy, staffspeed, staffknowledge, quality, value, variety, location, organization, accessibility, retaildescription, userid, created_at)
VALUES ('$staffcourtesy', '$staffspeed', '$staffknowledge', '$quality', '$value', '$variety', '$location', '$organization', '$accessibility', '$retaildescription', '$idvar', '$curr_date')";

  //if((mysqli_query($db, $insertquery)) && (mysqli_query($db, $idquery)))
  if(mysqli_query($db, $insertquery)){
    echo "<script>
    window.location.href='retailsubmit.php';
    alert('Successful submission');
    </script>";
    //echo "Record added successfully.";
  }
//}
  //include ('email.php');
  else{
    echo "<script>
    window.location.href='retailsubmit.php';
    alert('Submission failed');
    </script>";
    echo "ERROR: Could not able to execute $insertquery. " . mysqli_error($db);
  }
  //include ('update.php');
  include ('coupon.php');
}
mysqli_close($db);
 ?>
