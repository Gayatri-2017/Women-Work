<?php
session_start();
$a=$_REQUEST["message"];
$b=$_REQUEST["subject"];
$c=$_REQUEST["emailid"];
$d=$_REQUEST["pass"];

    
    $mailto ='sprdhsags@gmail.com' ;
    $mailSub = $b;
    $mailMsg = $a;
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = $_SESSION['username'];
   $mail ->Password = $d;
   $mail ->SetFrom($c);
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   

