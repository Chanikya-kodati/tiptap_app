<?php
include 'connectionpdo.php';

$id = $_REQUEST['id'];
$type = $_REQUEST['type'];
$tranval = $_REQUEST['tranval'];

if($id!='' && $type=='trans'){	
	$banner_que = "UPDATE tiptap_tipswithdraw SET transactionnumber='$tranval' WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
} 

if($res){
	echo "done";	
}
?>
