<?php

  ob_start();
  include ('connect.php');
  ob_end_clean();
  ob_start();
  include ('forgotpassword.php');
  ob_end_clean();

if(isset($_POST['fsubmit5'])){
  $v_code = mysqli_real_escape_string($conn, $_POST['vcode']);
  $user_email = $_SESSION['useremail'];
  $codequery =  "SELECT verificationcode FROM passwordreset WHERE verificationcode = '$v_code'";
  $cquery = mysqli_query($conn, $codequery);
  $row_var = mysqli_fetch_assoc($cquery);
  $result = $row_var["verificationcode"];
  $varemail = mysqli_num_rows($cquery);

if($varemail == 0){
  echo "<script>
  window.location.href='codeverification.php';
  alert('Wrong verification code');
  </script>";
  //echo "Wrong verification code";
}
else{
  $query1 = "SELECT email FROM passwordreset WHERE verificationcode = '$v_code'";
  $query1res = mysqli_query($conn, $query1);
  $query1row = mysqli_fetch_assoc($query1res);
  $query1var = $query1row["email"];
  if($query1var == $user_email){
    echo "<script>
    window.location.href='password.php';
    alert('Code has been verified');
    </script>";
    //header('location: password.php');
  }
  else{
    echo "<script>
    window.location.href='codeverification.php';
    alert('Wrong verification code. Please try again');
    </script>";
    //echo "Wrong verification code. Please try again";
  }
}
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Code Verification</title>
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
         <li class="active"><a href="#">CODE VERIFICATION</a></li>
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
         <form method="post" action="codeverification.php">
         <fieldset>
           <legend>Personal Information</legend>
             <p>
               <label>Enter verification code*</label><br>
               <input type="text" name="vcode" placeholder="Enter verification code" required>
               <input type="submit" class = "button" name="fsubmit5">
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
