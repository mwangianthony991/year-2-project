<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
ob_start();
include ('connect.php');
ob_end_clean();
ob_start();
readfile ('forgotpassword.php');
ob_end_clean();

function random_str($length, $keyspace = '0123456789'){
  $pieces = [];
  $max = mb_strlen($keyspace, '8bit') - 1;
  for($i=0;$i<$length;++$i){
    $pieces [] = $keyspace[random_int(0, $max)];
  }
  return implode('', $pieces);
}
$b = random_str(6);
$forgotpassword_message = "Your password verification code is: $b";

$selectquery = "SELECT email FROM passwordreset WHERE email = '$useremail'";
$resultquery = mysqli_query($conn, $selectquery);
$varresult = mysqli_num_rows($resultquery);

if ($varresult == 1){
  $updatepassword = "UPDATE passwordreset SET verificationcode = $b WHERE email = '$useremail'";
  if (mysqli_query($conn, $updatepassword)){

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
        $mail->addAddress($useremail);

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $forgotpassword_message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
        //echo $var;
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

  }
}
else if($varresult == 0){
$code_query = "INSERT INTO passwordreset (email,verificationcode) VALUES ('$useremail', $b)";
if (mysqli_query($conn, $code_query)){

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
    $mail->addAddress($useremail);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $forgotpassword_message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    //echo $var;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  }
}
