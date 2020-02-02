<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Registration</title>
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
        <li class="active"><a href="#">SIGN UP</a></li>
        <li><a href="login.php">SIGN IN</a></li>
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
      <h2><label>SIGN UP</label></h2>
      </div>
      <div class="form">
      <form method="post" action="register.php">
        <?php include('errors.php'); ?>
      <fieldset>
        <legend>Personal Information</legend>
       <p>
          <label>EMAIL*</label><br>
          <input type = "text" name = "email" value="<?php echo $email; ?>" placeholder = "name@example.com"><br>
          <label>ENTER PASSWORD*</label><br>
          <input type = "password" name = "password_1" minlength = '8' placeholder = "The password should be a minimum of 8 characters in length"><br>
          <label>CONFIRM PASSWORD*</label><br>
          <input type = "password" name = "password_2" minlength = '8' placeholder = "The two passwords should match"><br><br>
          <input type = "submit" class = "btn btn-primary" name = "reg_user">
          <a href="login.php">Already have an account?</a>
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
