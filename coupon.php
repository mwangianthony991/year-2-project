<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
readfile ('retailsubmit.php');

function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
  $pieces = [];
  $max = mb_strlen($keyspace, '8bit') - 1;
  for($i=0;$i<$length;++$i){
    $pieces [] = $keyspace[random_int(0, $max)];
  }
  return implode('', $pieces);
}
$a = random_str(8);

$message =  "Thank you for your feedback. You have been awarded a coupon code for 20% off your next purchase: $a";
$num = 0;
$query_voucher = "SELECT userid FROM coupons WHERE userid = '$idvar'";
$qv_result = mysqli_query($db, $query_voucher);
//$count = mysqli_fetch_assoc($qv_result);
$var = mysqli_num_rows($qv_result);

if($var>=1){
  echo "You already have an existing coupon"; //condition  works even when value=0
}
else{
$voucher_email = $_SESSION['email'];
$voucherquery = "INSERT INTO coupons (couponcode, userid) VALUES ('$a', '$idvar')";
if (mysqli_query($db, $voucherquery)){

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'weruproject7';                 // SMTP username
    $mail->Password = 'Weru2072';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('weruproject7@gmail.com', 'Weru');
    //$mail->addAddress('mwangianthony991@gmail.com');     // Add a recipient               // Name is optional
    $mail->addAddress($voucher_email);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    //echo $var;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  }
}
