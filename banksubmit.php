<?php
 include('server.php');
 if (!isset($_SESSION['email'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
  readfile('bankquiz.html');

if(isset($_POST['banksubmit'])){

  $staffcourtesy = mysqli_real_escape_string($db, $_POST['staffcourtesy']);
  $staffspeed = mysqli_real_escape_string($db, $_POST['staffspeed']);
  $staffknowledge = mysqli_real_escape_string($db, $_POST['staffknowledge']);
  $onlinebanking = mysqli_real_escape_string($db, $_POST['onlinebanking']);
  $ATMbanking = mysqli_real_escape_string($db, $_POST['ATMbanking']);
  $mobilebanking = mysqli_real_escape_string($db, $_POST['mobilebanking']);
  $bankdescription = mysqli_real_escape_string($db, $_POST['bankdescription']);

$variable = $_SESSION['email'];

//$idquery = "INSERT INTO feedback (userid) SELECT id FROM users WHERE email = '$variable'";

$selectquery = "SELECT id FROM users WHERE email = '$variable'";
$result = mysqli_query($db, $selectquery);
$row = mysqli_fetch_assoc($result);
$idvar = $row["id"];

$curr_date = date("Y-m-d");
$insertquery = "INSERT INTO bankfeedback (staffcourtesy, staffspeed, staffknowledge, onlinebanking, ATMbanking, mobilebanking, description, userid, created_at)
VALUES ('$staffcourtesy', '$staffspeed', '$staffknowledge', '$onlinebanking', '$ATMbanking', '$mobilebanking', '$bankdescription', '$idvar', '$curr_date')";

// $currentdate = date("Y-m-d");
$datequery = "SELECT userid FROM bankfeedback WHERE created_at = '$curr_date' AND userid = '$idvar'";
// $datequery2 = "SELECT created_at FROM bankfeedback WHERE userid = '$idvar'";
// $dateresult2 = mysqli_query($db, $datequery2);
// $datevar = mysqli_fetch_assoc($dateresult2);
// $datestore = $datevar["created_at"];
$dateresult = mysqli_query($db, $datequery);
$datevar = mysqli_num_rows($dateresult);
if ($datevar == 0){
  if(mysqli_query($db, $insertquery)){
    echo "<script>
    window.location.href='banksubmit.php';
    alert('Successful submission');
    </script>";
    //echo "Record added successfully.";
    $checkquery = "SELECT userid FROM bankpoints WHERE userid = '$idvar'";
    $checkresult = mysqli_query($db, $checkquery);
    $checknum = mysqli_num_rows($checkresult);
    $pointsvar = 50;
    if ($checknum == 0){
    $pointsquery = "INSERT INTO bankpoints (customerpoints, userid) VALUES ('$pointsvar', '$idvar')";
    mysqli_query($db, $pointsquery);
    }
    else{
    // $currentdate = date("Y-m-d")
    // $datequery = "SELECT userid FROM bankpoints WHERE created = '$currentdate' AND userid = '$idvar'";
    $selectuserquery = "SELECT customerpoints FROM bankpoints WHERE userid = '$idvar'";
    $selectuserresult = mysqli_query($db, $selectuserquery);
    $selectuservar = mysqli_fetch_assoc($selectuserresult);
    $currentpoints = $selectuservar["customerpoints"];
    $currentpoints += 50;
    $updatepointsquery = "UPDATE bankpoints SET customerpoints = '$currentpoints' WHERE userid = '$idvar'";
    mysqli_query($db, $updatepointsquery);
    }
    //include ('bankupdate.php');
  }
  else{
    echo "<script>
    window.location.href='banksubmit.php';
    alert('Submission Failed');
    </script>";
    //echo "ERROR: Could not able to execute $insertquery. " . mysqli_error($db);
  }
  include ('bankupdate.php');
}
else {
  echo "<script>
  window.location.href='banksubmit.php';
  alert('Submission failed. You are limited to one submission per day');
  </script>";
    //echo "You are limited to one submission per day";
}

}
mysqli_close($db);
 ?>
