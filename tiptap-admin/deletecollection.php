<?php
include 'connectionpdo.php';

$id = $_POST['id'];
$type = $_REQUEST['type'];

if($type == 'landbanner'){		
	$banner_que = "DELETE FROM tiptap_landingbanners WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'customer'){		
	$banner_que = "DELETE FROM tiptap_customers WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'feedback'){		
	$banner_que = "DELETE FROM tiptap_contactus WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'tipamount'){		
	$banner_que = "DELETE FROM tiptap_tipamounts WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'company'){		
	$banner_que = "DELETE FROM tiptap_companies WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'companybranch'){		
	$banner_que = "DELETE FROM tiptap_companybranch WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'users'){		
	$banner_que = "DELETE FROM tiptap_customers WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'role'){		
	$banner_que = "DELETE FROM tiptap_roles WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'walletamount'){		
	$banner_que = "DELETE FROM tiptap_walletamounts WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'industrytype'){		
	$banner_que = "DELETE FROM tiptap_industrytype WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'notification'){		
	$banner_que = "DELETE FROM tiptap_notifications WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'badge'){		
	$banner_que = "DELETE FROM tiptap_badges WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'jobtype'){		
	$banner_que = "DELETE FROM tiptap_jobtypes WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
} else if($type == 'bank'){		
	$banner_que = "DELETE FROM tiptap_banks WHERE id='".$id."'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();	
	$res = $stmt1->rowCount();	
}

if($res==1){
	echo "done";	
}
?>