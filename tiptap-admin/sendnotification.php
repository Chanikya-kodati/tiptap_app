<?php 
include "connection.php";
include "pushNotification.php"; 

$notificationid = $_REQUEST['id'];

$banner_que = mysqli_query($con,"SELECT * from bargain_notificationmessages where notificationid=$notificationid");
while($banner_result = mysqli_fetch_array($banner_que))
{
	$device  = $banner_result['devicetoken'];
	$message = $banner_result['message'];
	$type 	  = $banner_result['type'];
	if($type == 1){
		sendPushNotification($message, $device);
	} else {
		androidPushNotificationFCM($message, $device);
	}	
}	
header('Location:viewallnotifications.php');
exit;
?>