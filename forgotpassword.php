<?php

$useremail ="";

ob_start();
include ('connect.php');
ob_end_clean();

$errors = array();

if(isset($_POST['fsubmit4'])){

$useremail = $_POST['email2'];

if(!filter_var($useremail, FILTER_VALIDATE_EMAIL)){
    echo "<script>
    window.location.href='forgotpassword.php';
    alert('Invalid email format');
    </script>";
    array_push($errors, "Invalid email format");
}
else{
$passwordquery = "SELECT email FROM users WHERE email = '$useremail'";
$result2 = mysqli_query($conn, $passwordquery);
$var2 = mysqli_num_rows($result2);

$_SESSION['useremail'] = $useremail;

if($var2==0){
  echo "<script>
  window.location.href='forgotpassword.php';
  alert('Email does not exist');
  </script>";
  //echo "Email does not exist";
}
else if($var2==1){
  echo "<script>
  window.location.href='codeverification.php';
  alert('A verification code has been sent to your email');
  </script>";
  include ('verification.php');
  //header('location: codeverification.php');
}
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WebFeedback</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">ENTER EMAIL</a></li>
        <li><a href="login.php">SIGN IN</a></li>
        <li><a href="register.php">SIGN UP</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left">
      <div class="heading">
      <h2><label>ENTER EMAIL</label></h2>
      </div>
      <div class="form">
        <form method="post" action="forgotpassword.php">
        <?php include('errors.php'); ?>
        <fieldset>
          <legend>Personal Information</legend>
            <p>
              <label>Enter Email*</label><br>
              <input type = "text" name= "email2" placeholder="Enter your email" required><br>
              <input type = "submit" class = "btn btn-primary" name = "fsubmit4">
            </p>
        </fieldset>
        </form>
    </div>
    </div>
    <div class="col-sm-2 sidenav">
        <p></p>

        <p></p>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright &copy; 2019, Anthony Mwangi.</p>
</footer>

</body>
</html>
