<?php 

function sendMobSms($mobile, $message) {	 
	$fields_string = array('UID' => 'MustafaDM', 'S' => 'InfoText', 'G' =>  $mobile, 'M' => $message);
	$ch = @curl_init();	 
	$url = "http://62.215.226.164/fccsms.aspx";
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, '5');

	$content = trim(curl_exec($ch));
	curl_close($ch);
}	

$otpmobile 	= "96565081313";
$message 	= "Thank you for Signup at Tiptap. Your OTP is $otp.";
sendMobSms($otpmobile,$message);