<?php

  ob_start();
  include ('connect.php');
  ob_end_clean();
  ob_start();
  include ('codeverification.php');
  ob_end_clean();
  ob_start();
  include ('forgotpassword.php');
  ob_end_clean();

  if(isset($_POST['new_pass'])){
  $emailvar = $_SESSION['useremail'];
  $newpass_query = "SELECT email FROM users WHERE email = '$emailvar'";
  $var_result = mysqli_query($conn, $newpass_query);
  $var_row = mysqli_fetch_assoc($var_result);
  $email_var = $var_row["email"];

  if($email_var == $emailvar){
  $pass1 = mysqli_real_escape_string($conn, $_POST['newpassword']);
  $pass2 = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
  if($pass1 != $pass2){
    echo "<script>
    window.location.href='password.php';
    alert('Error. Passwords do not match');
    </script>";
    //echo "Error. Passwords do not match";
  }
  else{
    $passwordvar = md5($pass1);
    $update_query = "UPDATE users SET password = '$passwordvar' WHERE email = '$emailvar'";
    if(mysqli_query($conn, $update_query)){
      echo "<script>
      window.location.href='login.php';
      alert('Password changed successfully');
      </script>";
    //echo "Password changed successfully";
    //header ('location: login.php');
  }
}
}
}
mysqli_close($conn);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>New Password</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
         <li class="active"><a href="#">NEW PASSWORD</a></li>
         <!-- <li><a href="welcome.html">WELCOME</a></li> -->
         <!-- <li><a href="login.php">SIGN IN</a></li>
         <li><a href="register.php">SIGN UP</a></li> -->
         <!-- <li><a href="submit.php">RESTAURANT QUIZ</a></li> -->
         <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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
       <h2><label></label></h2>
       </div>
       <div class="form">
         <form method="post" action="password.php">
         <fieldset>
           <legend>Personal Information</legend>
           <p><label>Enter new password*</label><br>
             <input type = "password" name = "newpassword" minlength = '8' placeholder = "The password should have a minimum of 8 characters" required><br>
             <label>Confirm new password*</label><br>
             <input type = "password" name = "confirmpassword" minlength = '8' placeholder = "Confirm new password" required><br></p>
             <input type = "submit" class = "button" name="new_pass">
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
