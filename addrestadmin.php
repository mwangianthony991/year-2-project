<?php

include('server.php');
if (!isset($_SESSION['username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: adminlogin.php');
}
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'registration');

if(isset($_POST['adminadd'])){

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) {
    echo "<script>
    window.location.href='addrestadmin.php';
    alert('Username is required');
    </script>";
     array_push($errors, "Username is required");
   }
  if (empty($email)) {
    echo "<script>
    window.location.href='addrestadmin.php';
    alert('Email is required');
    </script>";
    array_push($errors, "Email is required");
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     echo "<script>
     window.location.href='addrestadmin.php';
     alert('Invalid email format');
     </script>";
     array_push($errors, "Invalid email format");
   }
  if (empty($password_1)) {
    echo "<script>
    window.location.href='addrestadmin.php';
    alert('Password is required');
    </script>";
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    echo "<script>
    window.location.href='addrestadmin.php';
    alert('The two passwords do not match');
    </script>";
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM admin WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      echo "<script>
      window.location.href='addrestadmin.php';
      alert('Username already exists');
      </script>";
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      echo "<script>
      window.location.href='addrestadmin.php';
      alert('Email already exists');
      </script>";
      array_push($errors, "Email already exists");
    }
  }
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO admin (username, email, password)
          VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    echo "<script>
    window.location.href='addrestadmin.php';
    alert('Admin added successfully');
    </script>";
    //echo "Admin added successfully";
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    // header('location: bankindex.php');
  }
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Add Admin</title>
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
         <li class="active"><a href="#">ADD ADMIN</a></li>
         <!-- <li><a href="welcome.html">WELCOME</a></li> -->
         <li><a href="adminindex.php">HOME</a></li>
         <li><a href="adminindex.php?logout='1'">LOGOUT</a></li>
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
       <h2><label>ADD ADMIN</label></h2>
       </div>
       <div class="form">
       <form method="post" action="addrestadmin.php">
         <?php include('errors.php'); ?>
       <fieldset>
         <legend>Personal Information</legend>
        <p>
           <label>USERNAME*</label><br>
           <input type = "text" name = "username" placeholder = "Enter a username" required><br>
           <label>EMAIL*</label><br>
           <input type = "text" name = "email" placeholder = "Enter a valid email" required><br>
           <label>ENTER PASSWORD*</label><br>
           <input type = "password" name = "password_1" minlength = '8' placeholder = "Enter password" required><br>
           <label>CONFIRM PASSWORD*</label><br>
           <input type = "password" name = "password_2" minlength = '8' placeholder = "The two passwords should match" required><br><br>
           <input type = "submit" class = "button" name = "adminadd">
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
