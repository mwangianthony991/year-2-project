<?php include('bankserver.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bank Admin Login</title>
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
        <li class="active"><a href="#">BANK ADMIN</a></li>
        <!-- <li><a href="welcome.html">WELCOME</a></li> -->
        <li><a href="adminlogin.php">RESTAURANT ADMIN</a></li>
        <li><a href="retaillogin.php">RETAIL ADMIN</a></li>
        <li><a href="login.php">USER</a></li>
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
      <h2><label>SIGN-IN</label></h2>
      </div>
      <div class="form">
        <form method="post" action="banklogin.php">
        <?php include('errors.php'); ?>
        <fieldset>
          <legend>Personal Information</legend>
            <p>
              <label>Username</label><br>
              <input type="text" name="username" placeholder = "Enter your username" required>
              <label>Password</label>
          		<input type="password" name="password" placeholder = "Enter your password" required><br>
              <input type = "submit" class = "button" name = "banklogin">
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
