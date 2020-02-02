<?php

// header('Content-Type: application/json');

$conn = mysqli_connect('localhost', 'root', '', 'registration');

if(!$conn){
  die("Connection error: " .mysqli_connect_error());
}

if(isset($_POST['submit1'])){

$submitvar = $_POST['duration'];

if ($submitvar == "day"){
  $varietyquery1000 = sprintf("SELECT variety FROM feedback WHERE variety ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult1000 = mysqli_query($conn, $varietyquery1000);
  $res1100 = mysqli_num_rows($varietyresult1000);
  $qualityquery1000 = sprintf("SELECT quality FROM feedback WHERE quality ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult1000 = mysqli_query($conn, $qualityquery1000);
  $res2100 = mysqli_num_rows($qualityresult1000);
  $servingquery1000 = sprintf("SELECT serving FROM feedback WHERE serving ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult1000 = mysqli_query($conn, $servingquery1000);
  $res3100 = mysqli_num_rows($servingresult1000);
  $presentationquery1000 = sprintf("SELECT presentation FROM feedback WHERE presentation ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult1000 = mysqli_query($conn, $presentationquery1000);
  $res4100 = mysqli_num_rows($presentationresult1000);
  $valuequery1000 = sprintf("SELECT value FROM feedback WHERE value ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult1000 = mysqli_query($conn, $valuequery1000);
  $res5100 = mysqli_num_rows($valueresult1000);
  $speedquery1000 = sprintf("SELECT speed FROM feedback WHERE speed ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult1000 = mysqli_query($conn, $speedquery1000);
  $res6100 = mysqli_num_rows($speedresult1000);
  $courtesyquery1000 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $courtesyresult1000 = mysqli_query($conn, $courtesyquery1000);
  $res7100 = mysqli_num_rows($courtesyresult1000);
  $knowledgequery1000 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $knowledgeresult1000 = mysqli_query($conn, $knowledgequery1000);
  $res8100 = mysqli_num_rows($knowledgeresult1000);
  $locationquery1000 = sprintf("SELECT location FROM feedback WHERE location ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult1000 = mysqli_query($conn, $locationquery1000);
  $res9100 = mysqli_num_rows($locationresult1000);
  $ambiencequery1000 = sprintf("SELECT ambience FROM feedback WHERE ambience ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $ambienceresult1000 = mysqli_query($conn, $ambiencequery1000);
  $res10100 = mysqli_num_rows($ambienceresult1000);
  $cleanlinessquery1000 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='1'AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $cleanlinessresult1000 = mysqli_query($conn, $cleanlinessquery1000);
  $res11100 = mysqli_num_rows($cleanlinessresult1000);

  $varietyquery2000 = sprintf("SELECT variety FROM feedback WHERE variety ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult2000 = mysqli_query($conn, $varietyquery2000);
  $res1200 = mysqli_num_rows($varietyresult2000);
  $qualityquery2000 = sprintf("SELECT quality FROM feedback WHERE quality ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult2000 = mysqli_query($conn, $qualityquery2000);
  $res2200 = mysqli_num_rows($qualityresult2000);
  $servingquery2000 = sprintf("SELECT serving FROM feedback WHERE serving ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult2000 = mysqli_query($conn, $servingquery2000);
  $res3200 = mysqli_num_rows($servingresult2000);
  $presentationquery2000 = sprintf("SELECT presentation FROM feedback WHERE presentation ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult2000 = mysqli_query($conn, $presentationquery2000);
  $res4200 = mysqli_num_rows($presentationresult2000);
  $valuequery2000 = sprintf("SELECT value FROM feedback WHERE value ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult2000 = mysqli_query($conn, $valuequery2000);
  $res5200 = mysqli_num_rows($valueresult2000);
  $speedquery2000 = sprintf("SELECT speed FROM feedback WHERE speed ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult2000 = mysqli_query($conn, $speedquery2000);
  $res6200 = mysqli_num_rows($speedresult2000);
  $courtesyquery2000 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $courtesyresult2000 = mysqli_query($conn, $courtesyquery2000);
  $res7200 = mysqli_num_rows($courtesyresult2000);
  $knowledgequery2000 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $knowledgeresult2000 = mysqli_query($conn, $knowledgequery2000);
  $res8200 = mysqli_num_rows($knowledgeresult2000);
  $locationquery2000 = sprintf("SELECT location FROM feedback WHERE location ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult2000 = mysqli_query($conn, $locationquery2000);
  $res9200 = mysqli_num_rows($locationresult2000);
  $ambiencequery2000 = sprintf("SELECT ambience FROM feedback WHERE ambience ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $ambienceresult2000 = mysqli_query($conn, $ambiencequery2000);
  $res10200 = mysqli_num_rows($ambienceresult2000);
  $cleanlinessquery2000 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='2'AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $cleanlinessresult2000 = mysqli_query($conn, $cleanlinessquery2000);
  $res11200 = mysqli_num_rows($cleanlinessresult2000);


  $varietyquery3000 = sprintf("SELECT variety FROM feedback WHERE variety ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult3000 = mysqli_query($conn, $varietyquery3000);
  $res1300 = mysqli_num_rows($varietyresult3000);
  $qualityquery3000 = sprintf("SELECT quality FROM feedback WHERE quality ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult3000 = mysqli_query($conn, $qualityquery3000);
  $res2300 = mysqli_num_rows($qualityresult3000);
  $servingquery3000 = sprintf("SELECT serving FROM feedback WHERE serving ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult3000 = mysqli_query($conn, $servingquery3000);
  $res3300 = mysqli_num_rows($servingresult3000);
  $presentationquery3000 = sprintf("SELECT presentation FROM feedback WHERE presentation ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult3000 = mysqli_query($conn, $presentationquery3000);
  $res4300 = mysqli_num_rows($presentationresult3000);
  $valuequery3000 = sprintf("SELECT value FROM feedback WHERE value ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult3000 = mysqli_query($conn, $valuequery3000);
  $res5300 = mysqli_num_rows($valueresult3000);
  $speedquery3000 = sprintf("SELECT speed FROM feedback WHERE speed ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult3000 = mysqli_query($conn, $speedquery3000);
  $res6300 = mysqli_num_rows($speedresult3000);
  $courtesyquery3000 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $courtesyresult3000 = mysqli_query($conn, $courtesyquery3000);
  $res7300 = mysqli_num_rows($courtesyresult3000);
  $knowledgequery3000 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $knowledgeresult3000 = mysqli_query($conn, $knowledgequery3000);
  $res8300 = mysqli_num_rows($knowledgeresult3000);
  $locationquery3000 = sprintf("SELECT location FROM feedback WHERE location ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult3000 = mysqli_query($conn, $locationquery3000);
  $res9300 = mysqli_num_rows($locationresult3000);
  $ambiencequery3000 = sprintf("SELECT ambience FROM feedback WHERE ambience ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $ambienceresult3000 = mysqli_query($conn, $ambiencequery3000);
  $res10300 = mysqli_num_rows($ambienceresult3000);
  $cleanlinessquery3000 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $cleanlinessresult3000 = mysqli_query($conn, $cleanlinessquery3000);
  $res11300 = mysqli_num_rows($cleanlinessresult3000);


  $varietyquery4000 = sprintf("SELECT variety FROM feedback WHERE variety ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult4000 = mysqli_query($conn, $varietyquery4000);
  $res1400 = mysqli_num_rows($varietyresult4000);
  $qualityquery4000 = sprintf("SELECT quality FROM feedback WHERE quality ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult4000 = mysqli_query($conn, $qualityquery4000);
  $res2400 = mysqli_num_rows($qualityresult4000);
  $servingquery4000 = sprintf("SELECT serving FROM feedback WHERE serving ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult4000 = mysqli_query($conn, $servingquery4000);
  $res3400 = mysqli_num_rows($servingresult4000);
  $presentationquery4000 = sprintf("SELECT presentation FROM feedback WHERE presentation ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult4000 = mysqli_query($conn, $presentationquery4000);
  $res4400 = mysqli_num_rows($presentationresult4000);
  $valuequery4000 = sprintf("SELECT value FROM feedback WHERE value ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult4000 = mysqli_query($conn, $valuequery4000);
  $res5400 = mysqli_num_rows($valueresult4000);
  $speedquery4000 = sprintf("SELECT speed FROM feedback WHERE speed ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult4000 = mysqli_query($conn, $speedquery4000);
  $res6400 = mysqli_num_rows($speedresult4000);
  $courtesyquery4000 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $courtesyresult4000 = mysqli_query($conn, $courtesyquery4000);
  $res7400 = mysqli_num_rows($courtesyresult4000);
  $knowledgequery4000 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $knowledgeresult4000 = mysqli_query($conn, $knowledgequery4000);
  $res8400 = mysqli_num_rows($knowledgeresult4000);
  $locationquery4000 = sprintf("SELECT location FROM feedback WHERE location ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult4000 = mysqli_query($conn, $locationquery4000);
  $res9400 = mysqli_num_rows($locationresult4000);
  $ambiencequery4000 = sprintf("SELECT ambience FROM feedback WHERE ambience ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $ambienceresult4000 = mysqli_query($conn, $ambiencequery4000);
  $res10400 = mysqli_num_rows($ambienceresult4000);
  $cleanlinessquery4000 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $cleanlinessresult4000 = mysqli_query($conn, $cleanlinessquery4000);
  $res11400 = mysqli_num_rows($cleanlinessresult4000);


  $varietyquery5000 = sprintf("SELECT variety FROM feedback WHERE variety ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $varietyresult5000 = mysqli_query($conn, $varietyquery5000);
  $res1500 = mysqli_num_rows($varietyresult5000);
  $qualityquery5000 = sprintf("SELECT quality FROM feedback WHERE quality ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $qualityresult5000 = mysqli_query($conn, $qualityquery5000);
  $res2500 = mysqli_num_rows($qualityresult5000);
  $servingquery5000 = sprintf("SELECT serving FROM feedback WHERE serving ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $servingresult5000 = mysqli_query($conn, $servingquery5000);
  $res3500 = mysqli_num_rows($servingresult5000);
  $presentationquery5000 = sprintf("SELECT presentation FROM feedback WHERE presentation ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $presentationresult5000 = mysqli_query($conn, $presentationquery5000);
  $res4500 = mysqli_num_rows($presentationresult5000);
  $valuequery5000 = sprintf("SELECT value FROM feedback WHERE value ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $valueresult5000 = mysqli_query($conn, $valuequery5000);
  $res5500 = mysqli_num_rows($valueresult5000);
  $speedquery5000 = sprintf("SELECT speed FROM feedback WHERE speed ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $speedresult5000 = mysqli_query($conn, $speedquery5000);
  $res6500 = mysqli_num_rows($speedresult5000);
  $courtesyquery5000 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $courtesyresult5000 = mysqli_query($conn, $courtesyquery5000);
  $res7500 = mysqli_num_rows($courtesyresult5000);
  $knowledgequery5000 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $knowledgeresult5000 = mysqli_query($conn, $knowledgequery5000);
  $res8500 = mysqli_num_rows($knowledgeresult5000);
  $locationquery5000 = sprintf("SELECT location FROM feedback WHERE location ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $locationresult5000 = mysqli_query($conn, $locationquery5000);
  $res9500 = mysqli_num_rows($locationresult5000);
  $ambiencequery5000 = sprintf("SELECT ambience FROM feedback WHERE ambience ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $ambienceresult5000 = mysqli_query($conn, $ambiencequery5000);
  $res10500 = mysqli_num_rows($ambienceresult5000);
  $cleanlinessquery5000 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 DAY ) AND CURDATE()");
  $cleanlinessresult5000 = mysqli_query($conn, $cleanlinessquery5000);
  $res11500 = mysqli_num_rows($cleanlinessresult5000);


  $updatequery111 = "UPDATE data SET variety = '$res1100', quality = '$res2100', serving = '$res3100', presentation = '$res4100', value = '$res5100', speed = '$res6100', courtesy = '$res7100', knowledge = '$res8100', location = '$res9100', ambience = '$res10100', cleanliness = '$res11100' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery111);
  $updatequery211 = "UPDATE data SET variety = '$res1200', quality = '$res2200', serving = '$res3200', presentation = '$res4200', value = '$res5200', speed = '$res6200', courtesy = '$res7200', knowledge = '$res8200', location = '$res9200', ambience = '$res10200', cleanliness = '$res11200' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery211);
  $updatequery311 = "UPDATE data SET variety = '$res1300', quality = '$res2300', serving = '$res3300', presentation = '$res4300', value = '$res5300', speed = '$res6300', courtesy = '$res7300', knowledge = '$res8300', location = '$res9300', ambience = '$res10300', cleanliness = '$res11300' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery311);
  $updatequery411 = "UPDATE data SET variety = '$res1400', quality = '$res2400', serving = '$res3400', presentation = '$res4400', value = '$res5400', speed = '$res6400', courtesy = '$res7400', knowledge = '$res8400', location = '$res9400', ambience = '$res10400', cleanliness = '$res11400' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery411);
  $updatequery511 = "UPDATE data SET variety = '$res1500', quality = '$res2500', serving = '$res3500', presentation = '$res4500', value = '$res5500', speed = '$res6500', courtesy = '$res7500', knowledge = '$res8500', location = '$res9500', ambience = '$res10500', cleanliness = '$res11500' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery511);
  //echo "Day has been selected";
  header ('location: bargraph.html');
}

else if ($submitvar == "week"){

  $varietyquery001 = sprintf("SELECT variety FROM feedback WHERE variety ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult001 = mysqli_query($conn, $varietyquery001);
  $res0011 = mysqli_num_rows($varietyresult001);
  $qualityquery001 = sprintf("SELECT quality FROM feedback WHERE quality ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult001 = mysqli_query($conn, $qualityquery001);
  $res0021 = mysqli_num_rows($qualityresult001);
  $servingquery001 = sprintf("SELECT serving FROM feedback WHERE serving ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult001 = mysqli_query($conn, $servingquery001);
  $res0031 = mysqli_num_rows($servingresult001);
  $presentationquery001 = sprintf("SELECT presentation FROM feedback WHERE presentation ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult001 = mysqli_query($conn, $presentationquery001);
  $res0041 = mysqli_num_rows($presentationresult001);
  $valuequery001 = sprintf("SELECT value FROM feedback WHERE value ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult001 = mysqli_query($conn, $valuequery001);
  $res0051 = mysqli_num_rows($valueresult001);
  $speedquery001 = sprintf("SELECT speed FROM feedback WHERE speed ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult001 = mysqli_query($conn, $speedquery001);
  $res0061 = mysqli_num_rows($speedresult001);
  $courtesyquery001 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $courtesyresult001 = mysqli_query($conn, $courtesyquery001);
  $res0071 = mysqli_num_rows($courtesyresult001);
  $knowledgequery001 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $knowledgeresult001 = mysqli_query($conn, $knowledgequery001);
  $res0081 = mysqli_num_rows($knowledgeresult001);
  $locationquery001 = sprintf("SELECT location FROM feedback WHERE location ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult001 = mysqli_query($conn, $locationquery001);
  $res0091 = mysqli_num_rows($locationresult001);
  $ambiencequery001 = sprintf("SELECT ambience FROM feedback WHERE ambience ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $ambienceresult001 = mysqli_query($conn, $ambiencequery001);
  $res00101 = mysqli_num_rows($ambienceresult001);
  $cleanlinessquery001 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='1'AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $cleanlinessresult001 = mysqli_query($conn, $cleanlinessquery001);
  $res00111 = mysqli_num_rows($cleanlinessresult001);

  $varietyquery002 = sprintf("SELECT variety FROM feedback WHERE variety ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult002 = mysqli_query($conn, $varietyquery002);
  $res0012 = mysqli_num_rows($varietyresult002);
  $qualityquery002 = sprintf("SELECT quality FROM feedback WHERE quality ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult002 = mysqli_query($conn, $qualityquery002);
  $res0022 = mysqli_num_rows($qualityresult002);
  $servingquery002 = sprintf("SELECT serving FROM feedback WHERE serving ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult002 = mysqli_query($conn, $servingquery002);
  $res0032 = mysqli_num_rows($servingresult002);
  $presentationquery002 = sprintf("SELECT presentation FROM feedback WHERE presentation ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult002 = mysqli_query($conn, $presentationquery002);
  $res0042 = mysqli_num_rows($presentationresult002);
  $valuequery002 = sprintf("SELECT value FROM feedback WHERE value ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult002 = mysqli_query($conn, $valuequery002);
  $res0052 = mysqli_num_rows($valueresult002);
  $speedquery002 = sprintf("SELECT speed FROM feedback WHERE speed ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult002 = mysqli_query($conn, $speedquery002);
  $res0062 = mysqli_num_rows($speedresult002);
  $courtesyquery002 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $courtesyresult002 = mysqli_query($conn, $courtesyquery002);
  $res0072 = mysqli_num_rows($courtesyresult002);
  $knowledgequery002 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $knowledgeresult002 = mysqli_query($conn, $knowledgequery002);
  $res0082 = mysqli_num_rows($knowledgeresult002);
  $locationquery002 = sprintf("SELECT location FROM feedback WHERE location ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult002 = mysqli_query($conn, $locationquery002);
  $res0092 = mysqli_num_rows($locationresult002);
  $ambiencequery002 = sprintf("SELECT ambience FROM feedback WHERE ambience ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $ambienceresult002 = mysqli_query($conn, $ambiencequery002);
  $res00102 = mysqli_num_rows($ambienceresult002);
  $cleanlinessquery002 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='2'AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $cleanlinessresult002 = mysqli_query($conn, $cleanlinessquery002);
  $res00112 = mysqli_num_rows($cleanlinessresult002);


  $varietyquery003 = sprintf("SELECT variety FROM feedback WHERE variety ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult003 = mysqli_query($conn, $varietyquery003);
  $res0013 = mysqli_num_rows($varietyresult003);
  $qualityquery003 = sprintf("SELECT quality FROM feedback WHERE quality ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult003 = mysqli_query($conn, $qualityquery003);
  $res0023 = mysqli_num_rows($qualityresult003);
  $servingquery003 = sprintf("SELECT serving FROM feedback WHERE serving ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult003 = mysqli_query($conn, $servingquery003);
  $res0033 = mysqli_num_rows($servingresult003);
  $presentationquery003 = sprintf("SELECT presentation FROM feedback WHERE presentation ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult003 = mysqli_query($conn, $presentationquery003);
  $res0043 = mysqli_num_rows($presentationresult003);
  $valuequery003 = sprintf("SELECT value FROM feedback WHERE value ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult003 = mysqli_query($conn, $valuequery003);
  $res0053 = mysqli_num_rows($valueresult003);
  $speedquery003 = sprintf("SELECT speed FROM feedback WHERE speed ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult003 = mysqli_query($conn, $speedquery003);
  $res0063 = mysqli_num_rows($speedresult003);
  $courtesyquery003 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $courtesyresult003 = mysqli_query($conn, $courtesyquery003);
  $res0073 = mysqli_num_rows($courtesyresult003);
  $knowledgequery003 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $knowledgeresult003 = mysqli_query($conn, $knowledgequery003);
  $res0083 = mysqli_num_rows($knowledgeresult003);
  $locationquery003 = sprintf("SELECT location FROM feedback WHERE location ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult003 = mysqli_query($conn, $locationquery003);
  $res0093 = mysqli_num_rows($locationresult003);
  $ambiencequery003 = sprintf("SELECT ambience FROM feedback WHERE ambience ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $ambienceresult003 = mysqli_query($conn, $ambiencequery003);
  $res00103 = mysqli_num_rows($ambienceresult003);
  $cleanlinessquery003 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $cleanlinessresult003 = mysqli_query($conn, $cleanlinessquery003);
  $res00113 = mysqli_num_rows($cleanlinessresult003);


  $varietyquery004 = sprintf("SELECT variety FROM feedback WHERE variety ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult004 = mysqli_query($conn, $varietyquery004);
  $res0014 = mysqli_num_rows($varietyresult004);
  $qualityquery004 = sprintf("SELECT quality FROM feedback WHERE quality ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult004 = mysqli_query($conn, $qualityquery004);
  $res0024 = mysqli_num_rows($qualityresult004);
  $servingquery004 = sprintf("SELECT serving FROM feedback WHERE serving ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult004 = mysqli_query($conn, $servingquery004);
  $res0034 = mysqli_num_rows($servingresult004);
  $presentationquery004 = sprintf("SELECT presentation FROM feedback WHERE presentation ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult004 = mysqli_query($conn, $presentationquery004);
  $res0044 = mysqli_num_rows($presentationresult004);
  $valuequery004 = sprintf("SELECT value FROM feedback WHERE value ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult004 = mysqli_query($conn, $valuequery004);
  $res0054 = mysqli_num_rows($valueresult004);
  $speedquery004 = sprintf("SELECT speed FROM feedback WHERE speed ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult004 = mysqli_query($conn, $speedquery004);
  $res0064 = mysqli_num_rows($speedresult004);
  $courtesyquery004 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $courtesyresult004 = mysqli_query($conn, $courtesyquery004);
  $res0074 = mysqli_num_rows($courtesyresult004);
  $knowledgequery004 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $knowledgeresult004 = mysqli_query($conn, $knowledgequery004);
  $res0084 = mysqli_num_rows($knowledgeresult004);
  $locationquery004 = sprintf("SELECT location FROM feedback WHERE location ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult004 = mysqli_query($conn, $locationquery004);
  $res0094 = mysqli_num_rows($locationresult004);
  $ambiencequery004 = sprintf("SELECT ambience FROM feedback WHERE ambience ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $ambienceresult004 = mysqli_query($conn, $ambiencequery004);
  $res00104 = mysqli_num_rows($ambienceresult004);
  $cleanlinessquery004 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $cleanlinessresult004 = mysqli_query($conn, $cleanlinessquery004);
  $res00114 = mysqli_num_rows($cleanlinessresult004);


  $varietyquery005 = sprintf("SELECT variety FROM feedback WHERE variety ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $varietyresult005 = mysqli_query($conn, $varietyquery005);
  $res0015 = mysqli_num_rows($varietyresult005);
  $qualityquery005 = sprintf("SELECT quality FROM feedback WHERE quality ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $qualityresult005 = mysqli_query($conn, $qualityquery005);
  $res0025 = mysqli_num_rows($qualityresult005);
  $servingquery005 = sprintf("SELECT serving FROM feedback WHERE serving ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $servingresult005 = mysqli_query($conn, $servingquery005);
  $res0035 = mysqli_num_rows($servingresult005);
  $presentationquery005 = sprintf("SELECT presentation FROM feedback WHERE presentation ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $presentationresult005 = mysqli_query($conn, $presentationquery005);
  $res0045 = mysqli_num_rows($presentationresult005);
  $valuequery005 = sprintf("SELECT value FROM feedback WHERE value ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $valueresult005 = mysqli_query($conn, $valuequery005);
  $res0055 = mysqli_num_rows($valueresult005);
  $speedquery005 = sprintf("SELECT speed FROM feedback WHERE speed ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $speedresult005 = mysqli_query($conn, $speedquery005);
  $res0065 = mysqli_num_rows($speedresult005);
  $courtesyquery005 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $courtesyresult005 = mysqli_query($conn, $courtesyquery005);
  $res0075 = mysqli_num_rows($courtesyresult005);
  $knowledgequery005 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $knowledgeresult005 = mysqli_query($conn, $knowledgequery005);
  $res0085 = mysqli_num_rows($knowledgeresult005);
  $locationquery005 = sprintf("SELECT location FROM feedback WHERE location ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $locationresult005 = mysqli_query($conn, $locationquery005);
  $res0095 = mysqli_num_rows($locationresult005);
  $ambiencequery005 = sprintf("SELECT ambience FROM feedback WHERE ambience ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $ambienceresult005 = mysqli_query($conn, $ambiencequery005);
  $res00105 = mysqli_num_rows($ambienceresult005);
  $cleanlinessquery005 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 WEEK ) AND CURDATE()");
  $cleanlinessresult005 = mysqli_query($conn, $cleanlinessquery005);
  $res00115 = mysqli_num_rows($cleanlinessresult005);


  $updatequery11 = "UPDATE data SET variety = '$res0011', quality = '$res0021', serving = '$res0031', presentation = '$res0041', value = '$res0051', speed = '$res0061', courtesy = '$res0071', knowledge = '$res0081', location = '$res0091', ambience = '$res00101', cleanliness = '$res00111' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery11);
  $updatequery21 = "UPDATE data SET variety = '$res0012', quality = '$res0022', serving = '$res0032', presentation = '$res0042', value = '$res0052', speed = '$res0062', courtesy = '$res0072', knowledge = '$res0082', location = '$res0092', ambience = '$res00102', cleanliness = '$res00112' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery21);
  $updatequery31 = "UPDATE data SET variety = '$res0013', quality = '$res0023', serving = '$res0033', presentation = '$res0043', value = '$res0053', speed = '$res0063', courtesy = '$res0073', knowledge = '$res0083', location = '$res0093', ambience = '$res00103', cleanliness = '$res00113' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery31);
  $updatequery41 = "UPDATE data SET variety = '$res0014', quality = '$res0024', serving = '$res0034', presentation = '$res0044', value = '$res0054', speed = '$res0064', courtesy = '$res0074', knowledge = '$res0084', location = '$res0094', ambience = '$res00104', cleanliness = '$res00114' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery41);
  $updatequery51 = "UPDATE data SET variety = '$res0015', quality = '$res0025', serving = '$res0035', presentation = '$res0045', value = '$res0055', speed = '$res0065', courtesy = '$res0075', knowledge = '$res0085', location = '$res0095', ambience = '$res00105', cleanliness = '$res00115' WHERE ratingid = 5";
  mysqli_query($conn, $updatequery51);
  // echo "Week has been selected";
  header ('location: bargraph.html');
}

else if ($submitvar == "month"){

  $varietyquery1 = sprintf("SELECT variety FROM feedback WHERE variety ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult1 = mysqli_query($conn, $varietyquery1);
  $res11 = mysqli_num_rows($varietyresult1);
  $qualityquery1 = sprintf("SELECT quality FROM feedback WHERE quality ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult1 = mysqli_query($conn, $qualityquery1);
  $res21 = mysqli_num_rows($qualityresult1);
  $servingquery1 = sprintf("SELECT serving FROM feedback WHERE serving ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult1 = mysqli_query($conn, $servingquery1);
  $res31 = mysqli_num_rows($servingresult1);
  $presentationquery1 = sprintf("SELECT presentation FROM feedback WHERE presentation ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult1 = mysqli_query($conn, $presentationquery1);
  $res41 = mysqli_num_rows($presentationresult1);
  $valuequery1 = sprintf("SELECT value FROM feedback WHERE value ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult1 = mysqli_query($conn, $valuequery1);
  $res51 = mysqli_num_rows($valueresult1);
  $speedquery1 = sprintf("SELECT speed FROM feedback WHERE speed ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult1 = mysqli_query($conn, $speedquery1);
  $res61 = mysqli_num_rows($speedresult1);
  $courtesyquery1 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $courtesyresult1 = mysqli_query($conn, $courtesyquery1);
  $res71 = mysqli_num_rows($courtesyresult1);
  $knowledgequery1 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $knowledgeresult1 = mysqli_query($conn, $knowledgequery1);
  $res81 = mysqli_num_rows($knowledgeresult1);
  $locationquery1 = sprintf("SELECT location FROM feedback WHERE location ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult1 = mysqli_query($conn, $locationquery1);
  $res91 = mysqli_num_rows($locationresult1);
  $ambiencequery1 = sprintf("SELECT ambience FROM feedback WHERE ambience ='1' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $ambienceresult1 = mysqli_query($conn, $ambiencequery1);
  $res101 = mysqli_num_rows($ambienceresult1);
  $cleanlinessquery1 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='1'AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $cleanlinessresult1 = mysqli_query($conn, $cleanlinessquery1);
  $res111 = mysqli_num_rows($cleanlinessresult1);

  $varietyquery2 = sprintf("SELECT variety FROM feedback WHERE variety ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult2 = mysqli_query($conn, $varietyquery2);
  $res12 = mysqli_num_rows($varietyresult2);
  $qualityquery2 = sprintf("SELECT quality FROM feedback WHERE quality ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult2 = mysqli_query($conn, $qualityquery2);
  $res22 = mysqli_num_rows($qualityresult2);
  $servingquery2 = sprintf("SELECT serving FROM feedback WHERE serving ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult2 = mysqli_query($conn, $servingquery2);
  $res32 = mysqli_num_rows($servingresult2);
  $presentationquery2 = sprintf("SELECT presentation FROM feedback WHERE presentation ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult2 = mysqli_query($conn, $presentationquery2);
  $res42 = mysqli_num_rows($presentationresult2);
  $valuequery2 = sprintf("SELECT value FROM feedback WHERE value ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult2 = mysqli_query($conn, $valuequery2);
  $res52 = mysqli_num_rows($valueresult2);
  $speedquery2 = sprintf("SELECT speed FROM feedback WHERE speed ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult2 = mysqli_query($conn, $speedquery2);
  $res62 = mysqli_num_rows($speedresult2);
  $courtesyquery2 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $courtesyresult2 = mysqli_query($conn, $courtesyquery2);
  $res72 = mysqli_num_rows($courtesyresult2);
  $knowledgequery2 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $knowledgeresult2 = mysqli_query($conn, $knowledgequery2);
  $res82 = mysqli_num_rows($knowledgeresult2);
  $locationquery2 = sprintf("SELECT location FROM feedback WHERE location ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult2 = mysqli_query($conn, $locationquery2);
  $res92 = mysqli_num_rows($locationresult2);
  $ambiencequery2 = sprintf("SELECT ambience FROM feedback WHERE ambience ='2' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $ambienceresult2 = mysqli_query($conn, $ambiencequery2);
  $res102 = mysqli_num_rows($ambienceresult2);
  $cleanlinessquery2 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='2'AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $cleanlinessresult2 = mysqli_query($conn, $cleanlinessquery2);
  $res112 = mysqli_num_rows($cleanlinessresult2);


  $varietyquery3 = sprintf("SELECT variety FROM feedback WHERE variety ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult3 = mysqli_query($conn, $varietyquery3);
  $res13 = mysqli_num_rows($varietyresult3);
  $qualityquery3 = sprintf("SELECT quality FROM feedback WHERE quality ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult3 = mysqli_query($conn, $qualityquery3);
  $res23 = mysqli_num_rows($qualityresult3);
  $servingquery3 = sprintf("SELECT serving FROM feedback WHERE serving ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult3 = mysqli_query($conn, $servingquery3);
  $res33 = mysqli_num_rows($servingresult3);
  $presentationquery3 = sprintf("SELECT presentation FROM feedback WHERE presentation ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult3 = mysqli_query($conn, $presentationquery3);
  $res43 = mysqli_num_rows($presentationresult3);
  $valuequery3 = sprintf("SELECT value FROM feedback WHERE value ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult3 = mysqli_query($conn, $valuequery3);
  $res53 = mysqli_num_rows($valueresult3);
  $speedquery3 = sprintf("SELECT speed FROM feedback WHERE speed ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult3 = mysqli_query($conn, $speedquery3);
  $res63 = mysqli_num_rows($speedresult3);
  $courtesyquery3 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $courtesyresult3 = mysqli_query($conn, $courtesyquery3);
  $res73 = mysqli_num_rows($courtesyresult3);
  $knowledgequery3 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $knowledgeresult3 = mysqli_query($conn, $knowledgequery3);
  $res83 = mysqli_num_rows($knowledgeresult3);
  $locationquery3 = sprintf("SELECT location FROM feedback WHERE location ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult3 = mysqli_query($conn, $locationquery3);
  $res93 = mysqli_num_rows($locationresult3);
  $ambiencequery3 = sprintf("SELECT ambience FROM feedback WHERE ambience ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $ambienceresult3 = mysqli_query($conn, $ambiencequery3);
  $res103 = mysqli_num_rows($ambienceresult3);
  $cleanlinessquery3 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='3' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $cleanlinessresult3 = mysqli_query($conn, $cleanlinessquery3);
  $res113 = mysqli_num_rows($cleanlinessresult3);


  $varietyquery4 = sprintf("SELECT variety FROM feedback WHERE variety ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult4 = mysqli_query($conn, $varietyquery4);
  $res14 = mysqli_num_rows($varietyresult4);
  $qualityquery4 = sprintf("SELECT quality FROM feedback WHERE quality ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult4 = mysqli_query($conn, $qualityquery4);
  $res24 = mysqli_num_rows($qualityresult4);
  $servingquery4 = sprintf("SELECT serving FROM feedback WHERE serving ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult4 = mysqli_query($conn, $servingquery4);
  $res34 = mysqli_num_rows($servingresult4);
  $presentationquery4 = sprintf("SELECT presentation FROM feedback WHERE presentation ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult4 = mysqli_query($conn, $presentationquery4);
  $res44 = mysqli_num_rows($presentationresult4);
  $valuequery4 = sprintf("SELECT value FROM feedback WHERE value ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult4 = mysqli_query($conn, $valuequery4);
  $res54 = mysqli_num_rows($valueresult4);
  $speedquery4 = sprintf("SELECT speed FROM feedback WHERE speed ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult4 = mysqli_query($conn, $speedquery4);
  $res64 = mysqli_num_rows($speedresult4);
  $courtesyquery4 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $courtesyresult4 = mysqli_query($conn, $courtesyquery4);
  $res74 = mysqli_num_rows($courtesyresult4);
  $knowledgequery4 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $knowledgeresult4 = mysqli_query($conn, $knowledgequery4);
  $res84 = mysqli_num_rows($knowledgeresult4);
  $locationquery4 = sprintf("SELECT location FROM feedback WHERE location ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult4 = mysqli_query($conn, $locationquery4);
  $res94 = mysqli_num_rows($locationresult4);
  $ambiencequery4 = sprintf("SELECT ambience FROM feedback WHERE ambience ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $ambienceresult4 = mysqli_query($conn, $ambiencequery4);
  $res104 = mysqli_num_rows($ambienceresult4);
  $cleanlinessquery4 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='4' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $cleanlinessresult4 = mysqli_query($conn, $cleanlinessquery4);
  $res114 = mysqli_num_rows($cleanlinessresult4);


  $varietyquery5 = sprintf("SELECT variety FROM feedback WHERE variety ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $varietyresult5 = mysqli_query($conn, $varietyquery5);
  $res15 = mysqli_num_rows($varietyresult5);
  $qualityquery5 = sprintf("SELECT quality FROM feedback WHERE quality ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $qualityresult5 = mysqli_query($conn, $qualityquery5);
  $res25 = mysqli_num_rows($qualityresult5);
  $servingquery5 = sprintf("SELECT serving FROM feedback WHERE serving ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $servingresult5 = mysqli_query($conn, $servingquery5);
  $res35 = mysqli_num_rows($servingresult5);
  $presentationquery5 = sprintf("SELECT presentation FROM feedback WHERE presentation ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $presentationresult5 = mysqli_query($conn, $presentationquery5);
  $res45 = mysqli_num_rows($presentationresult5);
  $valuequery5 = sprintf("SELECT value FROM feedback WHERE value ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $valueresult5 = mysqli_query($conn, $valuequery5);
  $res55 = mysqli_num_rows($valueresult5);
  $speedquery5 = sprintf("SELECT speed FROM feedback WHERE speed ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $speedresult5 = mysqli_query($conn, $speedquery5);
  $res65 = mysqli_num_rows($speedresult5);
  $courtesyquery5 = sprintf("SELECT courtesy FROM feedback WHERE courtesy ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $courtesyresult5 = mysqli_query($conn, $courtesyquery5);
  $res75 = mysqli_num_rows($courtesyresult5);
  $knowledgequery5 = sprintf("SELECT knowledge FROM feedback WHERE knowledge ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $knowledgeresult5 = mysqli_query($conn, $knowledgequery5);
  $res85 = mysqli_num_rows($knowledgeresult5);
  $locationquery5 = sprintf("SELECT location FROM feedback WHERE location ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $locationresult5 = mysqli_query($conn, $locationquery5);
  $res95 = mysqli_num_rows($locationresult5);
  $ambiencequery5 = sprintf("SELECT ambience FROM feedback WHERE ambience ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $ambienceresult5 = mysqli_query($conn, $ambiencequery5);
  $res105 = mysqli_num_rows($ambienceresult5);
  $cleanlinessquery5 = sprintf("SELECT cleanliness FROM feedback WHERE cleanliness ='5' AND date >= DATE_SUB( CURDATE() ,INTERVAL 1 MONTH ) AND CURDATE()");
  $cleanlinessresult5 = mysqli_query($conn, $cleanlinessquery5);
  $res115 = mysqli_num_rows($cleanlinessresult5);


  $updatequery1 = "UPDATE data SET variety = '$res11', quality = '$res21', serving = '$res31', presentation = '$res41', value = '$res51', speed = '$res61', courtesy = '$res71', knowledge = '$res81', location = '$res91', ambience = '$res101', cleanliness = '$res111' WHERE ratingid = 1";
  mysqli_query($conn, $updatequery1);
  $updatequery2 = "UPDATE data SET variety = '$res12', quality = '$res22', serving = '$res32', presentation = '$res42', value = '$res52', speed = '$res62', courtesy = '$res72', knowledge = '$res82', location = '$res92', ambience = '$res102', cleanliness = '$res112' WHERE ratingid = 2";
  mysqli_query($conn, $updatequery2);
  $updatequery3 = "UPDATE data SET variety = '$res13', quality = '$res23', serving = '$res33', presentation = '$res43', value = '$res53', speed = '$res63', courtesy = '$res73', knowledge = '$res83', location = '$res93', ambience = '$res103', cleanliness = '$res113' WHERE ratingid = 3";
  mysqli_query($conn, $updatequery3);
  $updatequery4 = "UPDATE data SET variety = '$res14', quality = '$res24', serving = '$res34', presentation = '$res44', value = '$res54', speed = '$res64', courtesy = '$res74', knowledge = '$res84', location = '$res94', ambience = '$res104', cleanliness = '$res114' WHERE ratingid = 4";
  mysqli_query($conn, $updatequery4);
  $updatequery5 = "UPDATE data SET variety = '$res15', quality = '$res25', serving = '$res35', presentation = '$res45', value = '$res55', speed = '$res65', courtesy = '$res75', knowledge = '$res85', location = '$res95', ambience = '$res105', cleanliness = '$res115' WHERE ratingid = 5";
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
       <a class="navbar-brand" href="#">WebFeedback</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav">
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="../adminindex.php">HOME</a></li>
         <!-- <li class="active"><a href="#">RESTAURANT FORM</a></li> -->
         <!-- <li><a href="index.php">HOME</a></li> -->
         <!-- <li><a href="welcome.html">WELCOME</a></li> -->
         <!-- <li><a href="banksubmit.php">BANK FORM</a></li> -->
         <li><a href="../adminindex.php?logout='1'">LOGOUT</a></li>
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
           <input type = "submit" class = "button" name = "submit1"><br>
         </p>
       </form>
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
