<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Index Page</title>
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
        <li class="active"><a href="#">HOME</a></li>
        <li><a href="submit.php">RESTAURANT FORM</a></li>
        <li><a href="banksubmit.php">BANK FORM</a></li>
        <li><a href="retailsubmit.php">RETAIL STORE FORM</a></li>
        <li><a href="index.php?logout='1'">LOGOUT</a></li>
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
      <h2><label>HOME PAGE</label></h2>
      </div>
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>
      <?php  if (isset($_SESSION['email'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
      <?php endif ?>
      <p>This is a website that allows you to give feedback to the businesses that you have received services from.
      Please adhere to the following terms and conditions:<br><br>

      1.Only one submission is allowed per day per user for the bank.<br><br>
      2.Mutliple submissions are allowed per day per user for the restaurant. However, a voucher will only be awarded if:
      <ul>
        <li>A user does not have an existing voucher yet.</li>
        <li>A user has already used any awarded vouchers.</li>
      </ul>
      3.Mutliple submissions are allowed per day per user for the retail store. However, a coupon will only be awarded if:
      <ul>
        <li>A user does not have an existing coupon yet.</li>
        <li>A user has already used any awarded coupons.</li>
      </ul>
      4.Successful submissions will result in a reward in the form of:
      <ul>
        <li>Voucher - Restaurant</li>
        <li>Loyalty Points - Bank</li>
        <li>Coupon - Retail Store</li>
      </ul>
      5.A user must answer all the mandatory fields in the feedback form in order to be allowed to submit the form.<br><br></p>
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
