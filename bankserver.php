<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['bankreg'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) {
    echo "<script>
    window.location.href='bankregister.php';
    alert('Username is required');
    </script>";
     array_push($errors, "Username is required");
   }
  if (empty($email)) {
    echo "<script>
    window.location.href='bankregister.php';
    alert('Email is required');
    </script>";
    array_push($errors, "Email is required");
   }
  if (empty($password_1)) {
    echo "<script>
    window.location.href='bankregister.php';
    alert('Password is required');
    </script>";
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    echo "<script>
    window.location.href='bankregister.php';
    alert('The two passwords do not match');
    </script>";
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM bankadmin WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      echo "<script>
      window.location.href='bankregister.php';
      alert('Username already exists');
      </script>";
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      echo "<script>
      window.location.href='bankregister.php';
      alert('Email already exists');
      </script>";
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO bankadmin (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);

  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    echo "<script>
    window.location.href='bankindex.php';
    alert('You are now logged in');
    </script>";
  	//header('location: bankindex.php');
  }
}

if (isset($_POST['banklogin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    echo "<script>
    window.location.href='banklogin.php';
    alert('Username is required');
    </script>";
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
    echo "<script>
    window.location.href='banklogin.php';
    alert('Password is required');
    </script>";
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM bankadmin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      echo "<script>
      window.location.href='bankindex.php';
      alert('You are now logged in as an admin');
      </script>";
  	  $_SESSION['success'] = "You are now logged in";
  	  //header('location: bankindex.php');
  	}else {
      echo "<script>
      window.location.href='banklogin.php';
      alert('Wrong username/password combination');
      </script>";
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
