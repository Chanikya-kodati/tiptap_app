<?php

function getCompany($companyid){		
	$country_que = "SELECT * from tiptap_companies WHERE id='$companyid'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($country_que);  
	$stmt1->execute();	
	$country_res = $stmt1->fetch(PDO::FETCH_ASSOC);	
	return $country_res;
}

function getCustomerInfo($companyid){		
	$country_que = "SELECT * from tiptap_customers WHERE id='$companyid'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($country_que);  
	$stmt1->execute();	
	$country_res = $stmt1->fetch(PDO::FETCH_ASSOC);	
	return $country_res;
}

function getIndustryType($companyid){		
	$country_que = "SELECT * from tiptap_industrytype WHERE id='$companyid'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($country_que);  
	$stmt1->execute();	
	$country_res = $stmt1->fetch(PDO::FETCH_ASSOC);	
	return $country_res;
}

function getEmpCount($companyid){		
	$country_que = "SELECT count(*) as totcount from tiptap_customers WHERE companyid='$companyid'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($country_que);  
	$stmt1->execute();	
	$country_res = $stmt1->fetch(PDO::FETCH_ASSOC);	
	return $country_res['totcount'];
}

function getBranchCount($companyid){		
	$country_que = "SELECT count(*) as totcount from tiptap_companybranch WHERE companyid='$companyid'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($country_que);  
	$stmt1->execute();	
	$country_res = $stmt1->fetch(PDO::FETCH_ASSOC);	
	return $country_res['totcount'];
}



