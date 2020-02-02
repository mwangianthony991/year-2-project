<?php

include('bankserver.php');
if (!isset($_SESSION['username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: banklogin.php');
}
$db = mysqli_connect('localhost', 'root', '', 'registration');

// if (isset($_GET['select_profile'])) {
//      $db = mysqli_connect('localhost', 'root', '', 'registration');
//      $us= $_SESSION['username'];
//      $user_check_query = "SELECT id FROM bankpoints WHERE customerpoints='400' LIMIT 1";
//      $result = mysqli_query($db, $user_check_query);
//      $std= mysqli_fetch_assoc($result);
//      $stdid =$std['id'];
//      // $ids =$_GET['select_profile'];
//      // echo $stdid;
// }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bank Points</title>
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
          <!-- <li><a href="welcome.html">WELCOME</a></li> -->
          <li><a href="bankindex.php">HOME</a></li>
          <!-- <li><a href="login.php"></a></li> -->
          <!-- <li><a href="submit.php">RESTAURANT QUIZ</a></li> -->
          <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
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
        <h2><label>CUSTOMER POINTS TABLE</label></h2>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
        		<tr>
        			<th>Customer Points</th>
        			<th>User ID</th>
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
$selectquery = "SELECT customerpoints, userid, created FROM bankpoints ORDER by customerpoints DESC";
$result = mysqli_query($db, $selectquery);
while ($row = mysqli_fetch_array($result)) {?>
  <tr>
    <td><?php echo $row['customerpoints']; ?></td>
    <td><?php echo $row['userid']; ?></td>
    <td><?php echo $row['created']; ?></td>
    <!-- <td><a class="btn btn-primary btn-xs" href="bankpoints.php?select_profile=<?php echo $row['id']; ?>">More about profile</a></td> -->

  </tr>
  <?php } ?>
</table>
</div>
</div>
</div>
</body>
</html>
