<?php

// header('Content-Type: application/json');

$conn = mysqli_connect('localhost', 'root', '', 'registration');

if(!$conn){
  die("Connection error: " .mysqli_connect_error());
}

if(isset($_POST['submit1'])){

$submitvar = $_POST['duration'];

if ($submitvar == "day"){
  $varietyquery1000 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult1000 = mysqli_query($conn, $varietyquery1000);
  $res1100 = mysqli_num_rows($varietyresult1000);
  $qualityquery1000 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult1000 = mysqli_query($conn, $qualityquery1000);
  $res2100 = mysqli_num_rows($qualityresult1000);
  $servingquery1000 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult1000 = mysqli_query($conn, $servingquery1000);
  $res3100 = mysqli_num_rows($servingresult1000);
  $presentationquery1000 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult1000 = mysqli_query($conn, $presentationquery1000);
  $res4100 = mysqli_num_rows($presentationresult1000);
  $valuequery1000 = sprintf("SELECT value FROM retailfeedback WHERE value ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult1000 = mysqli_query($conn, $valuequery1000);
  $res5100 = mysqli_num_rows($valueresult1000);
  $speedquery1000 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult1000 = mysqli_query($conn, $speedquery1000);
  $res6100 = mysqli_num_rows($speedresult1000);
  $locationquery1000 = sprintf("SELECT location FROM retailfeedback WHERE location ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult1000 = mysqli_query($conn, $locationquery1000);
  $res7100 = mysqli_num_rows($locationresult1000);
  $organizationquery1000 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $organizationresult1000 = mysqli_query($conn, $organizationquery1000);
  $res8100 = mysqli_num_rows($organizationresult1000);
  $accessibilityquery1000 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $accessibilityresult1000 = mysqli_query($conn, $accessibilityquery1000);
  $res9100 = mysqli_num_rows($accessibilityresult1000);


  $varietyquery2000 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult2000 = mysqli_query($conn, $varietyquery2000);
  $res1200 = mysqli_num_rows($varietyresult2000);
  $qualityquery2000 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult2000 = mysqli_query($conn, $qualityquery2000);
  $res2200 = mysqli_num_rows($qualityresult2000);
  $servingquery2000 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult2000 = mysqli_query($conn, $servingquery2000);
  $res3200 = mysqli_num_rows($servingresult2000);
  $presentationquery2000 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult2000 = mysqli_query($conn, $presentationquery2000);
  $res4200 = mysqli_num_rows($presentationresult2000);
  $valuequery2000 = sprintf("SELECT value FROM retailfeedback WHERE value ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult2000 = mysqli_query($conn, $valuequery2000);
  $res5200 = mysqli_num_rows($valueresult2000);
  $speedquery2000 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult2000 = mysqli_query($conn, $speedquery2000);
  $res6200 = mysqli_num_rows($speedresult2000);
  $locationquery2000 = sprintf("SELECT location FROM retailfeedback WHERE location ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult2000 = mysqli_query($conn, $locationquery2000);
  $res7200 = mysqli_num_rows($locationresult2000);
  $organizationquery2000 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $organizationresult2000 = mysqli_query($conn, $organizationquery2000);
  $res8200 = mysqli_num_rows($organizationresult2000);
  $accessibilityquery2000 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $accessibilityresult2000 = mysqli_query($conn, $accessibilityquery2000);
  $res9200 = mysqli_num_rows($accessibilityresult2000);


  $varietyquery3000 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult3000 = mysqli_query($conn, $varietyquery3000);
  $res1300 = mysqli_num_rows($varietyresult3000);
  $qualityquery3000 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult3000 = mysqli_query($conn, $qualityquery3000);
  $res2300 = mysqli_num_rows($qualityresult3000);
  $servingquery3000 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult3000 = mysqli_query($conn, $servingquery3000);
  $res3300 = mysqli_num_rows($servingresult3000);
  $presentationquery3000 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult3000 = mysqli_query($conn, $presentationquery3000);
  $res4300 = mysqli_num_rows($presentationresult3000);
  $valuequery3000 = sprintf("SELECT value FROM retailfeedback WHERE value ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult3000 = mysqli_query($conn, $valuequery3000);
  $res5300 = mysqli_num_rows($valueresult3000);
  $speedquery3000 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult3000 = mysqli_query($conn, $speedquery3000);
  $res6300 = mysqli_num_rows($speedresult3000);
  $locationquery3000 = sprintf("SELECT location FROM retailfeedback WHERE location ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult3000 = mysqli_query($conn, $locationquery3000);
  $res7300 = mysqli_num_rows($locationresult3000);
  $organizationquery3000 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $organizationresult3000 = mysqli_query($conn, $organizationquery3000);
  $res8300 = mysqli_num_rows($organizationresult3000);
  $accessibilityquery3000 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $accessibilityresult3000 = mysqli_query($conn, $accessibilityquery3000);
  $res9300 = mysqli_num_rows($accessibilityresult3000);


  $varietyquery4000 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult4000 = mysqli_query($conn, $varietyquery4000);
  $res1400 = mysqli_num_rows($varietyresult4000);
  $qualityquery4000 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult4000 = mysqli_query($conn, $qualityquery4000);
  $res2400 = mysqli_num_rows($qualityresult4000);
  $servingquery4000 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult4000 = mysqli_query($conn, $servingquery4000);
  $res3400 = mysqli_num_rows($servingresult4000);
  $presentationquery4000 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult4000 = mysqli_query($conn, $presentationquery4000);
  $res4400 = mysqli_num_rows($presentationresult4000);
  $valuequery4000 = sprintf("SELECT value FROM retailfeedback WHERE value ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult4000 = mysqli_query($conn, $valuequery4000);
  $res5400 = mysqli_num_rows($valueresult4000);
  $speedquery4000 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult4000 = mysqli_query($conn, $speedquery4000);
  $res6400 = mysqli_num_rows($speedresult4000);
  $locationquery4000 = sprintf("SELECT location FROM retailfeedback WHERE location ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult4000 = mysqli_query($conn, $locationquery4000);
  $res7400 = mysqli_num_rows($locationresult4000);
  $organizationquery4000 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $organizationresult4000 = mysqli_query($conn, $organizationquery4000);
  $res8400 = mysqli_num_rows($organizationresult4000);
  $accessibilityquery4000 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $accessibilityresult4000 = mysqli_query($conn, $accessibilityquery4000);
  $res9400 = mysqli_num_rows($accessibilityresult4000);


  $varietyquery5000 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult5000 = mysqli_query($conn, $varietyquery5000);
  $res1500 = mysqli_num_rows($varietyresult5000);
  $qualityquery5000 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult5000 = mysqli_query($conn, $qualityquery5000);
  $res2500 = mysqli_num_rows($qualityresult5000);
  $servingquery5000 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult5000 = mysqli_query($conn, $servingquery5000);
  $res3500 = mysqli_num_rows($servingresult5000);
  $presentationquery5000 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult5000 = mysqli_query($conn, $presentationquery5000);
  $res4500 = mysqli_num_rows($presentationresult5000);
  $valuequery5000 = sprintf("SELECT value FROM retailfeedback WHERE value ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult5000 = mysqli_query($conn, $valuequery5000);
  $res5500 = mysqli_num_rows($valueresult5000);
  $speedquery5000 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult5000 = mysqli_query($conn, $speedquery5000);
  $res6500 = mysqli_num_rows($speedresult5000);
  $locationquery5000 = sprintf("SELECT location FROM retailfeedback WHERE location ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult5000 = mysqli_query($conn, $locationquery5000);
  $res7500 = mysqli_num_rows($locationresult5000);
  $organizationquery5000 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $organizationresult5000 = mysqli_query($conn, $organizationquery5000);
  $res8500 = mysqli_num_rows($organizationresult5000);
  $accessibilityquery5000 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $accessibilityresult5000 = mysqli_query($conn, $accessibilityquery5000);
  $res9500 = mysqli_num_rows($accessibilityresult5000);


  $updatequery111 = "UPDATE retailchart SET staffcourtesy = '$res1100', staffspeed = '$res2100', staffknowledge = '$res3100', quality = '$res4100', value = '$res5100', variety = '$res6100', location = '$res7100', organization = '$res8100', accessibility = '$res9100' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery111);
  $updatequery211 = "UPDATE retailchart SET staffcourtesy = '$res1200', staffspeed = '$res2200', staffknowledge = '$res3200', quality = '$res4200', value = '$res5200', variety = '$res6200', location = '$res7200', organization = '$res8200', accessibility = '$res9200' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery211);
  $updatequery311 = "UPDATE retailchart SET staffcourtesy = '$res1300', staffspeed = '$res2300', staffknowledge = '$res3300', quality = '$res4300', value = '$res5300', variety = '$res6300', location = '$res7300', organization = '$res8300', accessibility = '$res9300' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery311);
  $updatequery411 = "UPDATE retailchart SET staffcourtesy = '$res1400', staffspeed = '$res2400', staffknowledge = '$res3400', quality = '$res4400', value = '$res5400', variety = '$res6400', location = '$res7400', organization = '$res8400', accessibility = '$res9400' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery411);
  $updatequery511 = "UPDATE retailchart SET staffcourtesy = '$res1500', staffspeed = '$res2500', staffknowledge = '$res3500', quality = '$res4500', value = '$res5500', variety = '$res6500', location = '$res7500', organization = '$res8500', accessibility = '$res9500' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery511);
  //echo "Day has been selected";
  header ('location: bargraph.html');
}

else if ($submitvar == "week"){

  $varietyquery001 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult001 = mysqli_query($conn, $varietyquery001);
  $res0011 = mysqli_num_rows($varietyresult001);
  $qualityquery001 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult001 = mysqli_query($conn, $qualityquery001);
  $res0021 = mysqli_num_rows($qualityresult001);
  $servingquery001 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult001 = mysqli_query($conn, $servingquery001);
  $res0031 = mysqli_num_rows($servingresult001);
  $presentationquery001 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult001 = mysqli_query($conn, $presentationquery001);
  $res0041 = mysqli_num_rows($presentationresult001);
  $valuequery001 = sprintf("SELECT value FROM retailfeedback WHERE value ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult001 = mysqli_query($conn, $valuequery001);
  $res0051 = mysqli_num_rows($valueresult001);
  $speedquery001 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult001 = mysqli_query($conn, $speedquery001);
  $res0061 = mysqli_num_rows($speedresult001);
  $locationquery001 = sprintf("SELECT location FROM retailfeedback WHERE location ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult001 = mysqli_query($conn, $locationquery001);
  $res0071 = mysqli_num_rows($locationresult001);
  $organizationquery001 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $organizationresult001 = mysqli_query($conn, $organizationquery001);
  $res0081 = mysqli_num_rows($organizationresult001);
  $accessibilityquery001 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $accessibilityresult001 = mysqli_query($conn, $accessibilityquery001);
  $res0091 = mysqli_num_rows($accessibilityresult001);


  $varietyquery002 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult002 = mysqli_query($conn, $varietyquery002);
  $res0012 = mysqli_num_rows($varietyresult002);
  $qualityquery002 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult002 = mysqli_query($conn, $qualityquery002);
  $res0022 = mysqli_num_rows($qualityresult002);
  $servingquery002 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult002 = mysqli_query($conn, $servingquery002);
  $res0032 = mysqli_num_rows($servingresult002);
  $presentationquery002 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult002 = mysqli_query($conn, $presentationquery002);
  $res0042 = mysqli_num_rows($presentationresult002);
  $valuequery002 = sprintf("SELECT value FROM retailfeedback WHERE value ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult002 = mysqli_query($conn, $valuequery002);
  $res0052 = mysqli_num_rows($valueresult002);
  $speedquery002 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult002 = mysqli_query($conn, $speedquery002);
  $res0062 = mysqli_num_rows($speedresult002);
  $locationquery002 = sprintf("SELECT location FROM retailfeedback WHERE location ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult002 = mysqli_query($conn, $locationquery002);
  $res0072 = mysqli_num_rows($locationresult002);
  $organizationquery002 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $organizationresult002 = mysqli_query($conn, $organizationquery002);
  $res0082 = mysqli_num_rows($organizationresult002);
  $accessibilityquery002 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $accessibilityresult002 = mysqli_query($conn, $accessibilityquery002);
  $res0092 = mysqli_num_rows($accessibilityresult002);


  $varietyquery003 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult003 = mysqli_query($conn, $varietyquery003);
  $res0013 = mysqli_num_rows($varietyresult003);
  $qualityquery003 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult003 = mysqli_query($conn, $qualityquery003);
  $res0023 = mysqli_num_rows($qualityresult003);
  $servingquery003 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult003 = mysqli_query($conn, $servingquery003);
  $res0033 = mysqli_num_rows($servingresult003);
  $presentationquery003 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult003 = mysqli_query($conn, $presentationquery003);
  $res0043 = mysqli_num_rows($presentationresult003);
  $valuequery003 = sprintf("SELECT value FROM retailfeedback WHERE value ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult003 = mysqli_query($conn, $valuequery003);
  $res0053 = mysqli_num_rows($valueresult003);
  $speedquery003 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult003 = mysqli_query($conn, $speedquery003);
  $res0063 = mysqli_num_rows($speedresult003);
  $locationquery003 = sprintf("SELECT location FROM retailfeedback WHERE location ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult003 = mysqli_query($conn, $locationquery003);
  $res0073 = mysqli_num_rows($locationresult003);
  $organizationquery003 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $organizationresult003 = mysqli_query($conn, $organizationquery003);
  $res0083 = mysqli_num_rows($organizationresult003);
  $accessibilityquery003 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $accessibilityresult003 = mysqli_query($conn, $accessibilityquery003);
  $res0093 = mysqli_num_rows($accessibilityresult003);


  $varietyquery004 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult004 = mysqli_query($conn, $varietyquery004);
  $res0014 = mysqli_num_rows($varietyresult004);
  $qualityquery004 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult004 = mysqli_query($conn, $qualityquery004);
  $res0024 = mysqli_num_rows($qualityresult004);
  $servingquery004 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult004 = mysqli_query($conn, $servingquery004);
  $res0034 = mysqli_num_rows($servingresult004);
  $presentationquery004 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult004 = mysqli_query($conn, $presentationquery004);
  $res0044 = mysqli_num_rows($presentationresult004);
  $valuequery004 = sprintf("SELECT value FROM retailfeedback WHERE value ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult004 = mysqli_query($conn, $valuequery004);
  $res0054 = mysqli_num_rows($valueresult004);
  $speedquery004 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult004 = mysqli_query($conn, $speedquery004);
  $res0064 = mysqli_num_rows($speedresult004);
  $locationquery004 = sprintf("SELECT location FROM retailfeedback WHERE location ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult004 = mysqli_query($conn, $locationquery004);
  $res0074 = mysqli_num_rows($locationresult004);
  $organizationquery004 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $organizationresult004 = mysqli_query($conn, $organizationquery004);
  $res0084 = mysqli_num_rows($organizationresult004);
  $accessibilityquery004 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $accessibilityresult004 = mysqli_query($conn, $accessibilityquery004);
  $res0094 = mysqli_num_rows($accessibilityresult004);


  $varietyquery005 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult005 = mysqli_query($conn, $varietyquery005);
  $res0015 = mysqli_num_rows($varietyresult005);
  $qualityquery005 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult005 = mysqli_query($conn, $qualityquery005);
  $res0025 = mysqli_num_rows($qualityresult005);
  $servingquery005 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult005 = mysqli_query($conn, $servingquery005);
  $res0035 = mysqli_num_rows($servingresult005);
  $presentationquery005 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult005 = mysqli_query($conn, $presentationquery005);
  $res0045 = mysqli_num_rows($presentationresult005);
  $valuequery005 = sprintf("SELECT value FROM retailfeedback WHERE value ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult005 = mysqli_query($conn, $valuequery005);
  $res0055 = mysqli_num_rows($valueresult005);
  $speedquery005 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult005 = mysqli_query($conn, $speedquery005);
  $res0065 = mysqli_num_rows($speedresult005);
  $locationquery005 = sprintf("SELECT location FROM retailfeedback WHERE location ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult005 = mysqli_query($conn, $locationquery005);
  $res0075 = mysqli_num_rows($locationresult005);
  $organizationquery005 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $organizationresult005 = mysqli_query($conn, $organizationquery005);
  $res0085 = mysqli_num_rows($organizationresult005);
  $accessibilityquery005 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $accessibilityresult005 = mysqli_query($conn, $accessibilityquery005);
  $res0095 = mysqli_num_rows($accessibilityresult005);


  $updatequery11 = "UPDATE retailchart SET staffcourtesy = '$res0011', staffspeed = '$res0021', staffknowledge = '$res0031', quality = '$res0041', value = '$res0051', variety = '$res0061', location = '$res0071', organization = '$res0081', accessibility = '$res0091' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery11);
  $updatequery21 = "UPDATE retailchart SET staffcourtesy = '$res0012', staffspeed = '$res0022', staffknowledge = '$res0032', quality = '$res0042', value = '$res0052', variety = '$res0062', location = '$res0072', organization = '$res0082', accessibility = '$res0092' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery21);
  $updatequery31 = "UPDATE retailchart SET staffcourtesy = '$res0013', staffspeed = '$res0023', staffknowledge = '$res0033', quality = '$res0043', value = '$res0053', variety = '$res0063', location = '$res0073', organization = '$res0083', accessibility = '$res0093' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery31);
  $updatequery41 = "UPDATE retailchart SET staffcourtesy = '$res0014', staffspeed = '$res0024', staffknowledge = '$res0034', quality = '$res0044', value = '$res0054', variety = '$res0064', location = '$res0074', organization = '$res0084', accessibility = '$res0094' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery41);
  $updatequery51 = "UPDATE retailchart SET staffcourtesy = '$res0015', staffspeed = '$res0025', staffknowledge = '$res0035', quality = '$res0045', value = '$res0055', variety = '$res0065', location = '$res0075', organization = '$res0085', accessibility = '$res0095' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery51);
  // echo "Week has been selected";
  header ('location: bargraph.html');
}

else if ($submitvar == "month"){

  $varietyquery1 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult1 = mysqli_query($conn, $varietyquery1);
  $res11 = mysqli_num_rows($varietyresult1);
  $qualityquery1 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult1 = mysqli_query($conn, $qualityquery1);
  $res21 = mysqli_num_rows($qualityresult1);
  $servingquery1 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult1 = mysqli_query($conn, $servingquery1);
  $res31 = mysqli_num_rows($servingresult1);
  $presentationquery1 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult1 = mysqli_query($conn, $presentationquery1);
  $res41 = mysqli_num_rows($presentationresult1);
  $valuequery1 = sprintf("SELECT value FROM retailfeedback WHERE value ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult1 = mysqli_query($conn, $valuequery1);
  $res51 = mysqli_num_rows($valueresult1);
  $speedquery1 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult1 = mysqli_query($conn, $speedquery1);
  $res61 = mysqli_num_rows($speedresult1);
  $locationquery1 = sprintf("SELECT location FROM retailfeedback WHERE location ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult1 = mysqli_query($conn, $locationquery1);
  $res71 = mysqli_num_rows($locationresult1);
  $organizationquery1 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $organizationresult1 = mysqli_query($conn, $organizationquery1);
  $res81 = mysqli_num_rows($organizationresult1);
  $accessibilityquery1 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='1' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $accessibilityresult1 = mysqli_query($conn, $accessibilityquery1);
  $res91 = mysqli_num_rows($accessibilityresult1);


  $varietyquery2 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult2 = mysqli_query($conn, $varietyquery2);
  $res12 = mysqli_num_rows($varietyresult2);
  $qualityquery2 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult2 = mysqli_query($conn, $qualityquery2);
  $res22 = mysqli_num_rows($qualityresult2);
  $servingquery2 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult2 = mysqli_query($conn, $servingquery2);
  $res32 = mysqli_num_rows($servingresult2);
  $presentationquery2 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult2 = mysqli_query($conn, $presentationquery2);
  $res42 = mysqli_num_rows($presentationresult2);
  $valuequery2 = sprintf("SELECT value FROM retailfeedback WHERE value ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult2 = mysqli_query($conn, $valuequery2);
  $res52 = mysqli_num_rows($valueresult2);
  $speedquery2 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult2 = mysqli_query($conn, $speedquery2);
  $res62 = mysqli_num_rows($speedresult2);
  $locationquery2 = sprintf("SELECT location FROM retailfeedback WHERE location ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult2 = mysqli_query($conn, $locationquery2);
  $res72 = mysqli_num_rows($locationresult2);
  $organizationquery2 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $organizationresult2 = mysqli_query($conn, $organizationquery2);
  $res82 = mysqli_num_rows($organizationresult2);
  $accessibilityquery2 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='2' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $accessibilityresult2 = mysqli_query($conn, $accessibilityquery2);
  $res92 = mysqli_num_rows($accessibilityresult2);


  $varietyquery3 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult3 = mysqli_query($conn, $varietyquery3);
  $res13 = mysqli_num_rows($varietyresult3);
  $qualityquery3 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult3 = mysqli_query($conn, $qualityquery3);
  $res23 = mysqli_num_rows($qualityresult3);
  $servingquery3 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult3 = mysqli_query($conn, $servingquery3);
  $res33 = mysqli_num_rows($servingresult3);
  $presentationquery3 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult3 = mysqli_query($conn, $presentationquery3);
  $res43 = mysqli_num_rows($presentationresult3);
  $valuequery3 = sprintf("SELECT value FROM retailfeedback WHERE value ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult3 = mysqli_query($conn, $valuequery3);
  $res53 = mysqli_num_rows($valueresult3);
  $speedquery3 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult3 = mysqli_query($conn, $speedquery3);
  $res63 = mysqli_num_rows($speedresult3);
  $locationquery3 = sprintf("SELECT location FROM retailfeedback WHERE location ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult3 = mysqli_query($conn, $locationquery3);
  $res73 = mysqli_num_rows($locationresult3);
  $organizationquery3 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $organizationresult3 = mysqli_query($conn, $organizationquery3);
  $res83 = mysqli_num_rows($organizationresult3);
  $accessibilityquery3 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='3' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $accessibilityresult3 = mysqli_query($conn, $accessibilityquery3);
  $res93 = mysqli_num_rows($accessibilityresult3);


  $varietyquery4 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult4 = mysqli_query($conn, $varietyquery4);
  $res14 = mysqli_num_rows($varietyresult4);
  $qualityquery4 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult4 = mysqli_query($conn, $qualityquery4);
  $res24 = mysqli_num_rows($qualityresult4);
  $servingquery4 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult4 = mysqli_query($conn, $servingquery4);
  $res34 = mysqli_num_rows($servingresult4);
  $presentationquery4 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult4 = mysqli_query($conn, $presentationquery4);
  $res44 = mysqli_num_rows($presentationresult4);
  $valuequery4 = sprintf("SELECT value FROM retailfeedback WHERE value ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult4 = mysqli_query($conn, $valuequery4);
  $res54 = mysqli_num_rows($valueresult4);
  $speedquery4 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult4 = mysqli_query($conn, $speedquery4);
  $res64 = mysqli_num_rows($speedresult4);
  $locationquery4 = sprintf("SELECT location FROM retailfeedback WHERE location ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult4 = mysqli_query($conn, $locationquery4);
  $res74 = mysqli_num_rows($locationresult4);
  $organizationquery4 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $organizationresult4 = mysqli_query($conn, $organizationquery4);
  $res84 = mysqli_num_rows($organizationresult4);
  $accessibilityquery4 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='4' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $accessibilityresult4 = mysqli_query($conn, $accessibilityquery4);
  $res94 = mysqli_num_rows($accessibilityresult4);


  $varietyquery5 = sprintf("SELECT staffcourtesy FROM retailfeedback WHERE staffcourtesy ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult5 = mysqli_query($conn, $varietyquery5);
  $res15 = mysqli_num_rows($varietyresult5);
  $qualityquery5 = sprintf("SELECT staffspeed FROM retailfeedback WHERE staffspeed ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult5 = mysqli_query($conn, $qualityquery5);
  $res25 = mysqli_num_rows($qualityresult5);
  $servingquery5 = sprintf("SELECT staffknowledge FROM retailfeedback WHERE staffknowledge ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult5 = mysqli_query($conn, $servingquery5);
  $res35 = mysqli_num_rows($servingresult5);
  $presentationquery5 = sprintf("SELECT quality FROM retailfeedback WHERE quality ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult5 = mysqli_query($conn, $presentationquery5);
  $res45 = mysqli_num_rows($presentationresult5);
  $valuequery5 = sprintf("SELECT value FROM retailfeedback WHERE value ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult5 = mysqli_query($conn, $valuequery5);
  $res55 = mysqli_num_rows($valueresult5);
  $speedquery5 = sprintf("SELECT variety FROM retailfeedback WHERE variety ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult5 = mysqli_query($conn, $speedquery5);
  $res65 = mysqli_num_rows($speedresult5);
  $locationquery5 = sprintf("SELECT location FROM retailfeedback WHERE location ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult5 = mysqli_query($conn, $locationquery5);
  $res75 = mysqli_num_rows($locationresult5);
  $organizationquery5 = sprintf("SELECT organization FROM retailfeedback WHERE organization ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $organizationresult5 = mysqli_query($conn, $organizationquery5);
  $res85 = mysqli_num_rows($organizationresult5);
  $accessibilityquery5 = sprintf("SELECT accessibility FROM retailfeedback WHERE accessibility ='5' AND created_at >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $accessibilityresult5 = mysqli_query($conn, $accessibilityquery5);
  $res95 = mysqli_num_rows($accessibilityresult5);


  $updatequery1 = "UPDATE retailchart SET staffcourtesy = '$res11', staffspeed = '$res21', staffknowledge = '$res31', quality = '$res41', value = '$res51', variety = '$res61', location = '$res71', organization = '$res81', accessibility = '$res91' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery1);
  $updatequery2 = "UPDATE retailchart SET staffcourtesy = '$res12', staffspeed = '$res22', staffknowledge = '$res32', quality = '$res42', value = '$res52', variety = '$res62', location = '$res72', organization = '$res82', accessibility = '$res92' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery2);
  $updatequery3 = "UPDATE retailchart SET staffcourtesy = '$res13', staffspeed = '$res23', staffknowledge = '$res33', quality = '$res43', value = '$res53', variety = '$res63', location = '$res73', organization = '$res83', accessibility = '$res93' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery3);
  $updatequery4 = "UPDATE retailchart SET staffcourtesy = '$res14', staffspeed = '$res24', staffknowledge = '$res34', quality = '$res44', value = '$res54', variety = '$res64', location = '$res74', organization = '$res84', accessibility = '$res94' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery4);
  $updatequery5 = "UPDATE retailchart SET staffcourtesy = '$res15', staffspeed = '$res25', staffknowledge = '$res35', quality = '$res45', value = '$res55', variety = '$res65', location = '$res75', organization = '$res85', accessibility = '$res95' WHERE ratingid = 5";
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
         <li><a href="../retailindex.php">HOME</a></li>
         <!-- <li class="active"><a href="#">RESTAURANT FORM</a></li> -->
         <!-- <li><a href="index.php">HOME</a></li> -->
         <!-- <li><a href="welcome.html">WELCOME</a></li> -->
         <!-- <li><a href="banksubmit.php">BANK FORM</a></li> -->
         <li><a href="../retailindex.php?logout='1'">LOGOUT</a></li>
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
