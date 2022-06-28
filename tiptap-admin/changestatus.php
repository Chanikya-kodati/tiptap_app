<?php
include 'connectionpdo.php';

$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$status = $_POST['status'];

if($id!='' && $type=='landbanner'){	
	$banner_que = "UPDATE tiptap_landingbanners SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
} else if($id!='' && $type=='customer'){	
	$banner_que = "UPDATE tiptap_customers SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
} else if($id!='' && $type=='tipamount'){	
	$banner_que = "UPDATE tiptap_tipamounts SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
} else if($id!='' && $type=='company'){	
	$banner_que = "UPDATE tiptap_companies SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
} else if($id!='' && $type=='users'){	
	$banner_que = "UPDATE tiptap_customers SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
}  else if($id!='' && $type=='walletamount'){	
	$banner_que = "UPDATE tiptap_walletamounts SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
}  else if($id!='' && $type=='industrytype'){	
	$banner_que = "UPDATE tiptap_industrytype SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
}  else if($id!='' && $type=='badge'){	
	$banner_que = "UPDATE tiptap_badges SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
}  else if($id!='' && $type=='jobtype'){	
	$banner_que = "UPDATE tiptap_jobtypes SET status=$status WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();
}  else if($id!='' && $type=='bank'){	
	$banner_que = "UPDATE tiptap_banks SET status=$status WHERE id='".$id."'";
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
