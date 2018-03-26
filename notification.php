<?php
session_start();
include "buyerview.php";

    // this NEEDS TO BE AT THE TOP of the page before any output etc
   echo $_SESSION['abc'];
$emailid=$_SESSION['SEmail'];

					
$sql = "SELECT * FROM `seller` WHERE SName='".$abc."'";
$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
$row=$result->fetch_assoc();

$_SESSION["SEmail"]=$email1;
$_SESSION["SContact"]=$phn;
}

    
 
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('$emailid', '$username');
$mail->addAddress('$email'," ");
$mail->Subject  = 'Your project is selected';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
   
   
   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

