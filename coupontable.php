<?php

// if (!isset($_SESSION['username'])) {
//  $_SESSION['msg'] = "You must log in first";
//  header('location: adminlogin.php');
// }
include('retailserver.php');
if (!isset($_SESSION['username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: retaillogin.php');
}
$db = mysqli_connect('localhost', 'root', '', 'registration');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Retail Store Coupons</title>
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
          <li class="active"><a href="#">TABLE</a></li>
          <li><a href="retailindex.php">HOME</a></li>
          <li><a href="retailindex.php?logout='1'">LOGOUT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <!-- <p><a href="#"></a></p>
        <p><a href="#"></a></p>
        <p><a href="#"></a></p> -->
      </div>
      <div class="col-sm-8 text-left">
        <div class="heading">
        <h2><label>COUPON TABLE</label></h2>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
        		<tr>
              <th>Coupon ID</th>
        			<th>Coupon Code</th>
              <th>Created</th>
        			<th colspan="3"></th>
        		</tr>
        	</thead>


      </div>
      <div class="col-sm-2 sidenav">
          <p></p>

          <p></p>
      </div>

<?php
$selectquery = "SELECT couponid, couponcode, created FROM coupons ORDER by couponid ASC";
$result = mysqli_query($db, $selectquery);
while ($row = mysqli_fetch_array($result)) {?>
  <tr>
    <td><?php echo $row['couponid']; ?></td>
    <td><?php echo $row['couponcode']; ?></td>
    <td><?php echo $row['created']; ?></td>

  </tr>
  <?php } ?>
</table>
</div>
</div>
</div>
</body>
</html>
