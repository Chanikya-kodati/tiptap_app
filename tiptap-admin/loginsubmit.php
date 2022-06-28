<?php
include "connectionpdo.php";
 
if($_POST['Submit'])
{
	$username = $_POST['username'];
	$password = md5($_POST['password']);
		
	$login_query = "SELECT * from tiptap_adminuser where status=1 AND username='$username'";
	$database = new Database();
	$dbCon = $database->getConnection();
	$stmt = $dbCon->prepare($login_query);  
	$stmt->execute();
	$count = $stmt->rowCount();
	$menbanner_res = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
	if($count==1){			
		foreach($menbanner_res as $login_res)
		{
			$db_username 	= $login_res['username'];
			$db_password 	= $login_res['password'];
			$adminid 	 	= $login_res['id'];		
			$userype 	 	= $login_res['userype'];		
			$companyid 	 	= $login_res['companyid'];		
				
			if($username==$db_username && $password==$db_password)
			{
				session_start();		 		
				$_SESSION["logger"]=$username;
				$_SESSION["SESS_TIPTAP_ID"]=$adminid;
				$_SESSION["SESS_MEMBER_TYPE"]=$userype;
				$_SESSION["SESS_COMPANY_ID"]=$companyid;
							
				if($userype==1){
					header("location:landingpage.php");
					exit;
				} else if($userype==2){
					header("location:designerlandingpage.php");
					exit;
				}				
			} else {			
				header("location:index.php?msg=invalid");
				exit;
			}
		}
	} else {
		header("location:index.php?msg=invalid");
	}
}

?>