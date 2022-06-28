<?php 

$mail = new PHPMailer;					 
$mail->SMTPDebug = 3;
$mail->isSMTP();	                   
$mail->Host = "smtp.gmail.com";					
$mail->SMTPAuth = true;
$mail->Username = "tiptapmobapp@gmail.com"; 
$mail->Password = "tiptap@123";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->From = "tiptapmobapp@gmail.com";
$mail->FromName = "Tiptap";