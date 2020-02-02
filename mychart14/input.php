<?php

// header('Content-Type: application/json');

$conn = mysqli_connect('localhost', 'root', '', 'registration');

if(!$conn){
  die("Connection error: " .mysqli_connect_error());
}

if(isset($_POST['submit1'])){

$submitvar = $_POST['duration'];

if ($submitvar == "day"){
  $varietyquery1000 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult1000 = mysqli_query($conn, $varietyquery1000);
  $res1100 = mysqli_num_rows($varietyresult1000);
  $qualityquery1000 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult1000 = mysqli_query($conn, $qualityquery1000);
  $res2100 = mysqli_num_rows($qualityresult1000);
  $servingquery1000 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult1000 = mysqli_query($conn, $servingquery1000);
  $res3100 = mysqli_num_rows($servingresult1000);
  $presentationquery1000 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult1000 = mysqli_query($conn, $presentationquery1000);
  $res4100 = mysqli_num_rows($presentationresult1000);
  $valuequery1000 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult1000 = mysqli_query($conn, $valuequery1000);
  $res5100 = mysqli_num_rows($valueresult1000);
  $speedquery1000 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult1000 = mysqli_query($conn, $speedquery1000);
  $res6100 = mysqli_num_rows($speedresult1000);


  $varietyquery2000 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult2000 = mysqli_query($conn, $varietyquery2000);
  $res1200 = mysqli_num_rows($varietyresult2000);
  $qualityquery2000 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult2000 = mysqli_query($conn, $qualityquery2000);
  $res2200 = mysqli_num_rows($qualityresult2000);
  $servingquery2000 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult2000 = mysqli_query($conn, $servingquery2000);
  $res3200 = mysqli_num_rows($servingresult2000);
  $presentationquery2000 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult2000 = mysqli_query($conn, $presentationquery2000);
  $res4200 = mysqli_num_rows($presentationresult2000);
  $valuequery2000 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult2000 = mysqli_query($conn, $valuequery2000);
  $res5200 = mysqli_num_rows($valueresult2000);
  $speedquery2000 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult2000 = mysqli_query($conn, $speedquery2000);
  $res6200 = mysqli_num_rows($speedresult2000);


  $varietyquery3000 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult3000 = mysqli_query($conn, $varietyquery3000);
  $res1300 = mysqli_num_rows($varietyresult3000);
  $qualityquery3000 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult3000 = mysqli_query($conn, $qualityquery3000);
  $res2300 = mysqli_num_rows($qualityresult3000);
  $servingquery3000 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult3000 = mysqli_query($conn, $servingquery3000);
  $res3300 = mysqli_num_rows($servingresult3000);
  $presentationquery3000 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult3000 = mysqli_query($conn, $presentationquery3000);
  $res4300 = mysqli_num_rows($presentationresult3000);
  $valuequery3000 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult3000 = mysqli_query($conn, $valuequery3000);
  $res5300 = mysqli_num_rows($valueresult3000);
  $speedquery3000 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult3000 = mysqli_query($conn, $speedquery3000);
  $res6300 = mysqli_num_rows($speedresult3000);


  $varietyquery4000 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult4000 = mysqli_query($conn, $varietyquery4000);
  $res1400 = mysqli_num_rows($varietyresult4000);
  $qualityquery4000 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult4000 = mysqli_query($conn, $qualityquery4000);
  $res2400 = mysqli_num_rows($qualityresult4000);
  $servingquery4000 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult4000 = mysqli_query($conn, $servingquery4000);
  $res3400 = mysqli_num_rows($servingresult4000);
  $presentationquery4000 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult4000 = mysqli_query($conn, $presentationquery4000);
  $res4400 = mysqli_num_rows($presentationresult4000);
  $valuequery4000 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult4000 = mysqli_query($conn, $valuequery4000);
  $res5400 = mysqli_num_rows($valueresult4000);
  $speedquery4000 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult4000 = mysqli_query($conn, $speedquery4000);
  $res6400 = mysqli_num_rows($speedresult4000);


  $varietyquery5000 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult5000 = mysqli_query($conn, $varietyquery5000);
  $res1500 = mysqli_num_rows($varietyresult5000);
  $qualityquery5000 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult5000 = mysqli_query($conn, $qualityquery5000);
  $res2500 = mysqli_num_rows($qualityresult5000);
  $servingquery5000 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult5000 = mysqli_query($conn, $servingquery5000);
  $res3500 = mysqli_num_rows($servingresult5000);
  $presentationquery5000 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult5000 = mysqli_query($conn, $presentationquery5000);
  $res4500 = mysqli_num_rows($presentationresult5000);
  $valuequery5000 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult5000 = mysqli_query($conn, $valuequery5000);
  $res5500 = mysqli_num_rows($valueresult5000);
  $speedquery5000 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult5000 = mysqli_query($conn, $speedquery5000);
  $res6500 = mysqli_num_rows($speedresult5000);


  $updatequery111 = "UPDATE bankchart SET staffcourtesy = '$res1100', staffspeed = '$res2100', staffknowledge = '$res3100', onlinebanking = '$res4100', ATMbanking = '$res5100', mobilebanking = '$res6100' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery111);
  $updatequery211 = "UPDATE bankchart SET staffcourtesy = '$res1200', staffspeed = '$res2200', staffknowledge = '$res3200', onlinebanking = '$res4200', ATMbanking = '$res5200', mobilebanking = '$res6200' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery211);
  $updatequery311 = "UPDATE bankchart SET staffcourtesy = '$res1300', staffspeed = '$res2300', staffknowledge = '$res3300', onlinebanking = '$res4300', ATMbanking = '$res5300', mobilebanking = '$res6300' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery311);
  $updatequery411 = "UPDATE bankchart SET staffcourtesy = '$res1400', staffspeed = '$res2400', staffknowledge = '$res3400', onlinebanking = '$res4400', ATMbanking = '$res5400', mobilebanking = '$res6400' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery411);
  $updatequery511 = "UPDATE bankchart SET staffcourtesy = '$res1500', staffspeed = '$res2500', staffknowledge = '$res3500', onlinebanking = '$res4500', ATMbanking = '$res5500', mobilebanking = '$res6500' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery511);
  //echo "Day has been selected";
  header ('location: bargraph.html');
}

else if ($submitvar == "week"){

  $varietyquery001 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult001 = mysqli_query($conn, $varietyquery001);
  $res0011 = mysqli_num_rows($varietyresult001);
  $qualityquery001 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult001 = mysqli_query($conn, $qualityquery001);
  $res0021 = mysqli_num_rows($qualityresult001);
  $servingquery001 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult001 = mysqli_query($conn, $servingquery001);
  $res0031 = mysqli_num_rows($servingresult001);
  $presentationquery001 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult001 = mysqli_query($conn, $presentationquery001);
  $res0041 = mysqli_num_rows($presentationresult001);
  $valuequery001 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult001 = mysqli_query($conn, $valuequery001);
  $res0051 = mysqli_num_rows($valueresult001);
  $speedquery001 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult001 = mysqli_query($conn, $speedquery001);
  $res0061 = mysqli_num_rows($speedresult001);

  $varietyquery002 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult002 = mysqli_query($conn, $varietyquery002);
  $res0012 = mysqli_num_rows($varietyresult002);
  $qualityquery002 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult002 = mysqli_query($conn, $qualityquery002);
  $res0022 = mysqli_num_rows($qualityresult002);
  $servingquery002 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult002 = mysqli_query($conn, $servingquery002);
  $res0032 = mysqli_num_rows($servingresult002);
  $presentationquery002 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult002 = mysqli_query($conn, $presentationquery002);
  $res0042 = mysqli_num_rows($presentationresult002);
  $valuequery002 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult002 = mysqli_query($conn, $valuequery002);
  $res0052 = mysqli_num_rows($valueresult002);
  $speedquery002 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult002 = mysqli_query($conn, $speedquery002);
  $res0062 = mysqli_num_rows($speedresult002);


  $varietyquery003 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult003 = mysqli_query($conn, $varietyquery003);
  $res0013 = mysqli_num_rows($varietyresult003);
  $qualityquery003 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult003 = mysqli_query($conn, $qualityquery003);
  $res0023 = mysqli_num_rows($qualityresult003);
  $servingquery003 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult003 = mysqli_query($conn, $servingquery003);
  $res0033 = mysqli_num_rows($servingresult003);
  $presentationquery003 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult003 = mysqli_query($conn, $presentationquery003);
  $res0043 = mysqli_num_rows($presentationresult003);
  $valuequery003 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult003 = mysqli_query($conn, $valuequery003);
  $res0053 = mysqli_num_rows($valueresult003);
  $speedquery003 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult003 = mysqli_query($conn, $speedquery003);
  $res0063 = mysqli_num_rows($speedresult003);


  $varietyquery004 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult004 = mysqli_query($conn, $varietyquery004);
  $res0014 = mysqli_num_rows($varietyresult004);
  $qualityquery004 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult004 = mysqli_query($conn, $qualityquery004);
  $res0024 = mysqli_num_rows($qualityresult004);
  $servingquery004 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult004 = mysqli_query($conn, $servingquery004);
  $res0034 = mysqli_num_rows($servingresult004);
  $presentationquery004 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult004 = mysqli_query($conn, $presentationquery004);
  $res0044 = mysqli_num_rows($presentationresult004);
  $valuequery004 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult004 = mysqli_query($conn, $valuequery004);
  $res0054 = mysqli_num_rows($valueresult004);
  $speedquery004 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult004 = mysqli_query($conn, $speedquery004);
  $res0064 = mysqli_num_rows($speedresult004);


  $varietyquery005 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult005 = mysqli_query($conn, $varietyquery005);
  $res0015 = mysqli_num_rows($varietyresult005);
  $qualityquery005 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult005 = mysqli_query($conn, $qualityquery005);
  $res0025 = mysqli_num_rows($qualityresult005);
  $servingquery005 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult005 = mysqli_query($conn, $servingquery005);
  $res0035 = mysqli_num_rows($servingresult005);
  $presentationquery005 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult005 = mysqli_query($conn, $presentationquery005);
  $res0045 = mysqli_num_rows($presentationresult005);
  $valuequery005 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult005 = mysqli_query($conn, $valuequery005);
  $res0055 = mysqli_num_rows($valueresult005);
  $speedquery005 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult005 = mysqli_query($conn, $speedquery005);
  $res0065 = mysqli_num_rows($speedresult005);


  $updatequery11 = "UPDATE bankchart SET staffcourtesy = '$res0011', staffspeed = '$res0021', staffknowledge = '$res0031', onlinebanking = '$res0041', ATMbanking = '$res0051', mobilebanking = '$res0061' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery11);
  $updatequery21 = "UPDATE bankchart SET staffcourtesy = '$res0012', staffspeed = '$res0022', staffknowledge = '$res0032', onlinebanking = '$res0042', ATMbanking = '$res0052', mobilebanking = '$res0062' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery21);
  $updatequery31 = "UPDATE bankchart SET staffcourtesy = '$res0013', staffspeed = '$res0023', staffknowledge = '$res0033', onlinebanking = '$res0043', ATMbanking = '$res0053', mobilebanking = '$res0063' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery31);
  $updatequery41 = "UPDATE bankchart SET staffcourtesy = '$res0014', staffspeed = '$res0024', staffknowledge = '$res0034', onlinebanking = '$res0044', ATMbanking = '$res0054', mobilebanking = '$res0064' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery41);
  $updatequery51 = "UPDATE bankchart SET staffcourtesy = '$res0015', staffspeed = '$res0025', staffknowledge = '$res0035', onlinebanking = '$res0045', ATMbanking = '$res0055', mobilebanking = '$res0065' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery51);
  // echo "Week has been selected";
  header ('location: bargraph.html');
}

else if ($submitvar == "month"){

  $varietyquery1 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult1 = mysqli_query($conn, $varietyquery1);
  $res11 = mysqli_num_rows($varietyresult1);
  $qualityquery1 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult1 = mysqli_query($conn, $qualityquery1);
  $res21 = mysqli_num_rows($qualityresult1);
  $servingquery1 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult1 = mysqli_query($conn, $servingquery1);
  $res31 = mysqli_num_rows($servingresult1);
  $presentationquery1 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult1 = mysqli_query($conn, $presentationquery1);
  $res41 = mysqli_num_rows($presentationresult1);
  $valuequery1 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult1 = mysqli_query($conn, $valuequery1);
  $res51 = mysqli_num_rows($valueresult1);
  $speedquery1 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult1 = mysqli_query($conn, $speedquery1);
  $res61 = mysqli_num_rows($speedresult1);


  $varietyquery2 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult2 = mysqli_query($conn, $varietyquery2);
  $res12 = mysqli_num_rows($varietyresult2);
  $qualityquery2 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult2 = mysqli_query($conn, $qualityquery2);
  $res22 = mysqli_num_rows($qualityresult2);
  $servingquery2 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult2 = mysqli_query($conn, $servingquery2);
  $res32 = mysqli_num_rows($servingresult2);
  $presentationquery2 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult2 = mysqli_query($conn, $presentationquery2);
  $res42 = mysqli_num_rows($presentationresult2);
  $valuequery2 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult2 = mysqli_query($conn, $valuequery2);
  $res52 = mysqli_num_rows($valueresult2);
  $speedquery2 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult2 = mysqli_query($conn, $speedquery2);
  $res62 = mysqli_num_rows($speedresult2);


  $varietyquery3 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult3 = mysqli_query($conn, $varietyquery3);
  $res13 = mysqli_num_rows($varietyresult3);
  $qualityquery3 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult3 = mysqli_query($conn, $qualityquery3);
  $res23 = mysqli_num_rows($qualityresult3);
  $servingquery3 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult3 = mysqli_query($conn, $servingquery3);
  $res33 = mysqli_num_rows($servingresult3);
  $presentationquery3 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult3 = mysqli_query($conn, $presentationquery3);
  $res43 = mysqli_num_rows($presentationresult3);
  $valuequery3 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult3 = mysqli_query($conn, $valuequery3);
  $res53 = mysqli_num_rows($valueresult3);
  $speedquery3 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult3 = mysqli_query($conn, $speedquery3);
  $res63 = mysqli_num_rows($speedresult3);



  $varietyquery4 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult4 = mysqli_query($conn, $varietyquery4);
  $res14 = mysqli_num_rows($varietyresult4);
  $qualityquery4 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult4 = mysqli_query($conn, $qualityquery4);
  $res24 = mysqli_num_rows($qualityresult4);
  $servingquery4 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult4 = mysqli_query($conn, $servingquery4);
  $res34 = mysqli_num_rows($servingresult4);
  $presentationquery4 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult4 = mysqli_query($conn, $presentationquery4);
  $res44 = mysqli_num_rows($presentationresult4);
  $valuequery4 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult4 = mysqli_query($conn, $valuequery4);
  $res54 = mysqli_num_rows($valueresult4);
  $speedquery4 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult4 = mysqli_query($conn, $speedquery4);
  $res64 = mysqli_num_rows($speedresult4);


  $varietyquery5 = sprintf("SELECT staffcourtesy FROM bankfeedback WHERE staffcourtesy ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult5 = mysqli_query($conn, $varietyquery5);
  $res15 = mysqli_num_rows($varietyresult5);
  $qualityquery5 = sprintf("SELECT staffspeed FROM bankfeedback WHERE staffspeed ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult5 = mysqli_query($conn, $qualityquery5);
  $res25 = mysqli_num_rows($qualityresult5);
  $servingquery5 = sprintf("SELECT staffknowledge FROM bankfeedback WHERE staffknowledge ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult5 = mysqli_query($conn, $servingquery5);
  $res35 = mysqli_num_rows($servingresult5);
  $presentationquery5 = sprintf("SELECT onlinebanking FROM bankfeedback WHERE onlinebanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult5 = mysqli_query($conn, $presentationquery5);
  $res45 = mysqli_num_rows($presentationresult5);
  $valuequery5 = sprintf("SELECT ATMbanking FROM bankfeedback WHERE ATMbanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult5 = mysqli_query($conn, $valuequery5);
  $res55 = mysqli_num_rows($valueresult5);
  $speedquery5 = sprintf("SELECT mobilebanking FROM bankfeedback WHERE mobilebanking ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult5 = mysqli_query($conn, $speedquery5);
  $res65 = mysqli_num_rows($speedresult5);


  $updatequery1 = "UPDATE bankchart SET staffcourtesy = '$res11', staffspeed = '$res21', staffknowledge = '$res31', onlinebanking = '$res41', ATMbanking = '$res51', mobilebanking = '$res61' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery1);
  $updatequery2 = "UPDATE bankchart SET staffcourtesy = '$res12', staffspeed = '$res22', staffknowledge = '$res32', onlinebanking = '$res42', ATMbanking = '$res52', mobilebanking = '$res62' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery2);
  $updatequery3 = "UPDATE bankchart SET staffcourtesy = '$res13', staffspeed = '$res23', staffknowledge = '$res33', onlinebanking = '$res43', ATMbanking = '$res53', mobilebanking = '$res63' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery3);
  $updatequery4 = "UPDATE bankchart SET staffcourtesy = '$res14', staffspeed = '$res24', staffknowledge = '$res34', onlinebanking = '$res44', ATMbanking = '$res54', mobilebanking = '$res64' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery4);
  $updatequery5 = "UPDATE bankchart SET staffcourtesy = '$res15', staffspeed = '$res25', staffknowledge = '$res35', onlinebanking = '$res45', ATMbanking = '$res55', mobilebanking = '$res65' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery5);
  // echo "Month has been selected";
  header ('location: bargraph.html');
}
//
// $tablequery = sprintf("SELECT ratingid, variety, quality, serving, presentation, value, speed, courtesy, knowledge, location, ambience, cleanliness FROM data ORDER BY ratingid");
// $tableresult = mysqli_query($conn, $tablequery);
//
// $data = array();
// foreach ($tableresult as $row) {
//   $data[] = $row;
// }

mysqli_close($conn);
// print json_encode($data);
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Chart Duration</title>
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
       <a class="navbar-brand" href="#">Logo</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav">
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="../bankindex.php">HOME</a></li>
         <!-- <li class="active"><a href="#">RESTAURANT FORM</a></li> -->
         <!-- <li><a href="index.php">HOME</a></li> -->
         <!-- <li><a href="welcome.html">WELCOME</a></li> -->
         <!-- <li><a href="banksubmit.php">BANK FORM</a></li> -->
         <li><a href="../bankindex.php?logout='1'">LOGOUT</a></li>
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
       <h2><label>CHOOSE CHART DURATION</label></h2>
       </div>
       <form method = "post" action = "input.php">
         <p>Choose chart duration:<br>
           <input type = "radio" name = "duration" value = "day">Day<br>
           <input type = "radio" name = "duration" value = "week">Week<br>
           <input type = "radio" name = "duration" value = "month">Month<br>
           <input type = "submit" name = "submit1"><br>
         </p>
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
