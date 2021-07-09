<?php
require 'dbconnect.php';
include('PHPMailerAutoload.php');
include('credential.php');

//Load Composer's autoloader
//require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try 
  {
	//Server settings
	$mail->SMTPDebug = 0;                      //Enable verbose debug output
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = EMAIL;                     //SMTP username
	$mail->Password   = PASS;                               //SMTP password
	$mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRY4PTION_SMTPS` above

	//Recipients
	$mail->setFrom(EMAIL, 'create new password');
	$mail->addAddress($_GET['email']);     //Add a recipient
	$mail->addAddress($_GET['email']);               //Name is optional
	$mail->addReplyTo(EMAIL);
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Notice : Time Alert';
	$mail->Body    = "Hey! Your todays work time is less than 8 hours. Kindly cover it on next day.<br> Thanks & Regard.";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$mail->send();
	echo 'Message has been sent';
	header("location:record.php");
} 
  catch (Exception $e) 
  {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
?>