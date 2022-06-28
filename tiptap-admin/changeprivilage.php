<?php
include 'connectionpdo.php';

$id	= $_POST['id'];
$status = $_POST['status'];

$query = "UPDATE alwann_usermenulist SET status='$status' WHERE id='".$id."'"; 
$database1 = new Database();
$dbCon1 = $database1->getConnection();
$stmt1 = $dbCon1->prepare($query);  
$stmt1->execute();
$res = $stmt1->rowCount();

if($res==1){
	echo "done";	
}
?>