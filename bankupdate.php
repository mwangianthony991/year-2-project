<?php

ob_start();
include ('server.php');
ob_end_clean();

if(!$db){
  die("Connection failed: " . mysqli_connect_error());
}

else{
$squery1 = "SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy = '1'";
$sresult1 = mysqli_query($db, $squery1);
$vsresult1 = mysqli_num_rows($sresult1);

$squery2 = "SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy = '2'";
$sresult2 = mysqli_query($db, $squery2);
$vsresult2 = mysqli_num_rows($sresult2);

$squery3 = "SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy = '3'";
$sresult3 = mysqli_query($db, $squery3);
$vsresult3 = mysqli_num_rows($sresult3);

$squery4 = "SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy = '4'";
$sresult4 = mysqli_query($db, $squery4);
$vsresult4 = mysqli_num_rows($sresult4);

$squery5 = "SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy = '5'";
$sresult5 = mysqli_query($db, $squery5);
$vsresult5 = mysqli_num_rows($sresult5);


$squery6 = "SELECT staffspeed FROM bankfeedback WHERE staffspeed = '1'";
$sresult6 = mysqli_query($db, $squery6);
$vsresult6 = mysqli_num_rows($sresult6);

$squery7 = "SELECT staffspeed FROM bankfeedback WHERE staffspeed = '2'";
$sresult7 = mysqli_query($db, $squery7);
$vsresult7 = mysqli_num_rows($sresult7);

$squery8 = "SELECT staffspeed FROM bankfeedback WHERE staffspeed = '3'";
$sresult8 = mysqli_query($db, $squery8);
$vsresult8 = mysqli_num_rows($sresult8);

$squery9 = "SELECT staffspeed FROM bankfeedback WHERE staffspeed = '4'";
$sresult9 = mysqli_query($db, $squery9);
$vsresult9 = mysqli_num_rows($sresult9);

$squery10 = "SELECT staffspeed FROM bankfeedback WHERE staffspeed = '5'";
$sresult10 = mysqli_query($db, $squery10);
$vsresult10 = mysqli_num_rows($sresult10);


$squery11 = "SELECT staffknowledge FROM bankfeedback WHERE staffknowledge = '1'";
$sresult11= mysqli_query($db, $squery11);
$vsresult11 = mysqli_num_rows($sresult11);

$squery12 = "SELECT staffknowledge FROM bankfeedback WHERE staffknowledge = '2'";
$sresult12 = mysqli_query($db, $squery12);
$vsresult12 = mysqli_num_rows($sresult12);

$squery13 = "SELECT staffknowledge FROM bankfeedback WHERE staffknowledge = '3'";
$sresult13 = mysqli_query($db, $squery13);
$vsresult13 = mysqli_num_rows($sresult13);

$squery14 = "SELECT staffknowledge FROM bankfeedback WHERE staffknowledge = '4'";
$sresult14 = mysqli_query($db, $squery14);
$vsresult14 = mysqli_num_rows($sresult14);

$squery15 = "SELECT staffknowledge FROM bankfeedback WHERE staffknowledge = '5'";
$sresult15 = mysqli_query($db, $squery15);
$vsresult15 = mysqli_num_rows($sresult15);


$squery16 = "SELECT onlinebanking FROM bankfeedback WHERE onlinebanking = '1'";
$sresult16 = mysqli_query($db, $squery16);
$vsresult16 = mysqli_num_rows($sresult16);

$squery17 = "SELECT onlinebanking FROM bankfeedback WHERE onlinebanking = '2'";
$sresult17 = mysqli_query($db, $squery17);
$vsresult17 = mysqli_num_rows($sresult17);

$squery18 = "SELECT onlinebanking FROM bankfeedback WHERE onlinebanking = '3'";
$sresult18 = mysqli_query($db, $squery18);
$vsresult18 = mysqli_num_rows($sresult18);

$squery19 = "SELECT onlinebanking FROM bankfeedback WHERE onlinebanking = '4'";
$sresult19 = mysqli_query($db, $squery19);
$vsresult19 = mysqli_num_rows($sresult19);

$squery20 = "SELECT onlinebanking FROM bankfeedback WHERE onlinebanking = '5'";
$sresult20 = mysqli_query($db, $squery20);
$vsresult20 = mysqli_num_rows($sresult20);


$squery21 = "SELECT ATMbanking FROM bankfeedback WHERE ATMbanking = '1'";
$sresult21 = mysqli_query($db, $squery21);
$vsresult21 = mysqli_num_rows($sresult21);

$squery22 = "SELECT ATMbanking FROM bankfeedback WHERE ATMbanking = '2'";
$sresult22 = mysqli_query($db, $squery22);
$vsresult22 = mysqli_num_rows($sresult22);

$squery23 = "SELECT ATMbanking FROM bankfeedback WHERE ATMbanking = '3'";
$sresult23 = mysqli_query($db, $squery23);
$vsresult23 = mysqli_num_rows($sresult23);

$squery24 = "SELECT ATMbanking FROM bankfeedback WHERE ATMbanking = '4'";
$sresult24 = mysqli_query($db, $squery24);
$vsresult24 = mysqli_num_rows($sresult24);

$squery25 = "SELECT ATMbanking FROM bankfeedback WHERE ATMbanking = '5'";
$sresult25 = mysqli_query($db, $squery25);
$vsresult25 = mysqli_num_rows($sresult25);


$squery26 = "SELECT mobilebanking FROM bankfeedback WHERE mobilebanking = '1'";
$sresult26 = mysqli_query($db, $squery26);
$vsresult26 = mysqli_num_rows($sresult26);

$squery27 = "SELECT mobilebanking FROM bankfeedback WHERE mobilebanking = '2'";
$sresult27 = mysqli_query($db, $squery27);
$vsresult27 = mysqli_num_rows($sresult27);

$squery28 = "SELECT mobilebanking FROM bankfeedback WHERE mobilebanking = '3'";
$sresult28 = mysqli_query($db, $squery28);
$vsresult28 = mysqli_num_rows($sresult28);

$squery29 = "SELECT mobilebanking FROM bankfeedback WHERE mobilebanking = '4'";
$sresult29 = mysqli_query($db, $squery29);
$vsresult29 = mysqli_num_rows($sresult29);

$squery30 = "SELECT mobilebanking FROM bankfeedback WHERE mobilebanking = '5'";
$sresult30 = mysqli_query($db, $squery30);
$vsresult30 = mysqli_num_rows($sresult30);


$uquery1 = "UPDATE bankchart SET staffcourtesy='$vsresult1', staffspeed='$vsresult6', staffknowledge='$vsresult11', onlinebanking='$vsresult16', ATMbanking='$vsresult21', mobilebanking='$vsresult26' WHERE ratingid = 1";
$uquery2 = "UPDATE bankchart SET staffcourtesy='$vsresult2', staffspeed='$vsresult7', staffknowledge='$vsresult12', onlinebanking='$vsresult17', ATMbanking='$vsresult22', mobilebanking='$vsresult27' WHERE ratingid = 2";
$uquery3 = "UPDATE bankchart SET staffcourtesy='$vsresult3', staffspeed='$vsresult8', staffknowledge='$vsresult13', onlinebanking='$vsresult18', ATMbanking='$vsresult23', mobilebanking='$vsresult28' WHERE ratingid = 3";
$uquery4 = "UPDATE bankchart SET staffcourtesy='$vsresult4', staffspeed='$vsresult9', staffknowledge='$vsresult14', onlinebanking='$vsresult19', ATMbanking='$vsresult24', mobilebanking='$vsresult29' WHERE ratingid = 4";
$uquery5 = "UPDATE bankchart SET staffcourtesy='$vsresult5', staffspeed='$vsresult10', staffknowledge='$vsresult15', onlinebanking='$vsresult20', ATMbanking='$vsresult25', mobilebanking='$vsresult30' WHERE ratingid = 5";

mysqli_query($db, $uquery1);
mysqli_query($db, $uquery2);
mysqli_query($db, $uquery3);
mysqli_query($db, $uquery4);
mysqli_query($db, $uquery5);

echo "Records updated successfully";
}
 ?>
