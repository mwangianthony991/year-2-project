<?php
session_start();

// initializing variables
$email    = "";
$errors = array();
$emailErr ="";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)){
    echo "<script>
    window.location.href='register.php';
    alert('Email is required');
    </script>";
    array_push($errors, "Email is required");
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<script>
    window.location.href='register.php';
    alert('Invalid email format');
    </script>";
    array_push($errors, "Invalid email format");
  }
  if (empty($password_1)) {
    echo "<script>
    window.location.href='register.php';
    alert('Password is required');
    </script>";
    array_push($errors, "Password is required");
   }
  if ($password_1 != $password_2) {
    echo "<script>
    window.location.href='register.php';
    alert('The two passwords do not match');
    </script>";
	  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      echo "<script>
      window.location.href='register.php';
      alert('User already exists');
      </script>";
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (email, password)
  			  VALUES('$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
    echo "<script>
    window.location.href='index.php';
    alert('Account successfully created');
    </script>";
  	$_SESSION['success'] = "You are now logged in";
  	//header('location: index.php');
  }
}

if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    echo "<script>
    window.location.href='login.php';
    alert('Email is required');
    </script>";
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
    echo "<script>
    window.location.href='login.php';
    alert('Password is required');
    </script>";
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  //header('location: index.php');
      echo "<script>
      window.location.href='index.php';
      alert('You are now logged in as a user');
      </script>";
  	}else {
      echo "<script>
      window.location.href='login.php';
      alert('Wrong username/password combination');
      </script>";
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
if (isset($_POST['adminlogin_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    echo "<script>
    window.location.href='adminlogin.php';
    alert('Admin login failed');
    </script>";
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
    echo "<script>
    window.location.href='adminlogin.php';
    alert('Admin login failed');
    </script>";
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      echo "<script>
      window.location.href='adminindex.php';
      alert('You are now logged in as an admin');
      </script>";
  	  $_SESSION['success'] = "You are now logged in";
  	  //header('location: adminindex.php');
  	}else {
      echo "<script>
      window.location.href='adminlogin.php';
      alert('Admin login failed');
      </script>";
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
