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

$mail1 = new PHPMailer;					 
$mail1->SMTPDebug = 3;
$mail1->isSMTP();		                   
$mail1->Host = "smtp.gmail.com";			
$mail1->SMTPAuth = true;
$mail1->Username = "tiptapmobapp@gmail.com"; 
$mail1->Password = "tiptap@123";
$mail1->SMTPSecure = "tls";
$mail1->Port = 587;
$mail1->From = "tiptapmobapp@gmail.com";
$mail1->FromName = "Tiptap";

?>