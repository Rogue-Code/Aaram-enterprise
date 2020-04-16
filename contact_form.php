<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'roguecode01@gmail.com';				 
	$mail->Password = 'alanturing2312';						 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('roguecode01@gmail.com', 'Test');		 
	$mail->addAddress('pacheria.priyanka@gmail.com'); 
	$mail->addAddress('kishanchaudhary253@gmail.com', 'Kishan Kanhaiya'); 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject'; 
	$mail->Body = 'HTML message body in <b>bold</b> '; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
