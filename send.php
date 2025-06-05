<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Contact success</title>
  <meta http-equiv = "refresh" content = "4; url = index.html" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="after_cont_style.css">

</head>
<body>
  
<audio id="backgroundAudio" preload="auto"  autoplay loop>
        <source src="bgmi1.mp3" type="audio/mp3">
        </audio>
<div class='subscribe'>
    <div class='subscribe__image'>
      <img src="cont.png"> 
    </div>
    <div class='subscribe__text'>
      <p class='heading'>Message Sent</p>
      <p class='subheading'><b>Thank you for reaching out to us! Our team will review your inquiry and get back to you as soon as possible. </b></p>
    </div>
  </div>
  <script  src="after_cont_script.js"></script>
  <script>const audio = document.getElementById('backgroundAudio');
    const audioKey = 'audioPlaybackPosition';
    
    // Store the current audio playback position in local storage
    function storePlaybackPosition() {
        localStorage.setItem(audioKey, audio.currentTime);
    }
    
    // Restore the audio playback position from local storage
    function restorePlaybackPosition() {
        const savedPosition = localStorage.getItem(audioKey);
        if (savedPosition) {
            audio.currentTime = parseFloat(savedPosition);
        }
    }
    
    // Restore playback position when the page loads
    window.addEventListener('load', () => {
        restorePlaybackPosition();
    });
    
    // Store playback position before leaving the page
    window.addEventListener('beforeunload', () => {
        storePlaybackPosition();
    });
    </script>
</body>
</html>

<?php
@ini_set('display_errors', 0);
ob_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$subject =$_POST['subject'];
$email =$_POST['email'];
$message =$_POST['message'];
$name=$_POST['name'];
$phno=$_POST['phone'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sutarsomu08@gmail.com';                     //SMTP username
    $mail->Password   = 'pceefkvvunjjjkwb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('sutarsoham05@gmail.com', 'eSports');     //Add a recipient


       //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phno<br>Message: $message";
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
ob_end_clean();
?>