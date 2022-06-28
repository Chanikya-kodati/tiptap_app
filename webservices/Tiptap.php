<?php
require_once("dbcontroller.php");
require '../PHPMailer.php';
require '../class.smtp.php';
require '../mailconfig.php';
include('phpqrcode/qrlib.php');
include('phpqrcode/qrconfig.php');

/*Get the current path*/
$url = dirname($_SERVER['REQUEST_URI']); 
$parts = explode('/',$url);
$currentpath = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 1; $i++) {
 $currentpath .= $parts[$i] . "/";
}
$schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$urlpath = $schema.$currentpath;
/* 
A domain Class to demonstrate RESTful web services
*/
Class Tiptap {
	private $aboutus = array();
	public function getAboutus(){		
		$query = 'SELECT * FROM tiptap_aboutus WHERE id=1';		
		$dbcontroller = new DBController();
		$this->aboutus = $dbcontroller->executeSelectQuery($query);		
		if($this->aboutus != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
			return $result;
		} else if($this->aboutus == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $landingbanners = array();
	public function getLandingbanners(){		
		$query = 'SELECT * FROM tiptap_landingbanners WHERE status=1';		
		$dbcontroller = new DBController();
		$this->landingbanners = $dbcontroller->executeSelectQuery($query);		
		if($this->landingbanners != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->landingbanners));
			return $result;
		} else if($this->landingbanners == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $welcomebanner = array();
	public function getWelcomebanner(){		
		$query = 'SELECT * FROM tiptap_welcomecontent';		
		$dbcontroller = new DBController();
		$this->welcomebanner = $dbcontroller->executeSelectQuery($query);		
		if($this->welcomebanner != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->welcomebanner));
			return $result;
		} else if($this->welcomebanner == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $privacypolicy = array();
	public function getPrivacypolicy(){		
		$query = 'SELECT * FROM tiptap_aboutus WHERE id=2';		
		$dbcontroller = new DBController();
		$this->privacypolicy = $dbcontroller->executeSelectQuery($query);		
		if($this->privacypolicy != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->privacypolicy));
			return $result;
		} else if($this->privacypolicy == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $termsofuse = array();
	public function getTermsofuse(){		
		$query = 'SELECT * FROM tiptap_aboutus WHERE id=3';		
		$dbcontroller = new DBController();
		$this->termsofuse = $dbcontroller->executeSelectQuery($query);		
		if($this->termsofuse != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->termsofuse));
			return $result;
		} else if($this->termsofuse == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $allres = array();
	public function getCommunity(){		
		$query = 'SELECT * FROM tiptap_companies WHERE status=1';		
		$dbcontroller = new DBController();
		$this->community = $dbcontroller->executeSelectQuery($query);
		$allres = $this->community;
				
		foreach($allres as $key=>$allresult){			
			if($allresult['image']==""){
				$allres[$key]['image']="images/nologo.png";
			} else {
				$allres[$key]['image']="";
			}
		} 				
		
		if($allres != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$allres));
			return $result;
		} else if($allres == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $tipamounts = array();
	public function getTipamounts(){		
		$query = 'SELECT * FROM tiptap_tipamounts WHERE status=1';		
		$dbcontroller = new DBController();
		$this->tipamounts = $dbcontroller->executeSelectQuery($query);		
		if($this->tipamounts != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->tipamounts));
			return $result;
		} else if($this->tipamounts == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	private $wallettopups = array();
	public function getWallettopups(){		
		$query = 'SELECT * FROM tiptap_walletamounts WHERE status=1';		
		$dbcontroller = new DBController();
		$this->wallettopups = $dbcontroller->executeSelectQuery($query);		
		if($this->wallettopups != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->wallettopups));
			return $result;
		} else if($this->wallettopups == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	public function postContactus(){
		if(isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['comments'])){
			$name 		= $_POST['name'];
			$mobile 	= $_POST['mobile'];			
			$comments	= $_POST['comments'];
							
			$query = "insert into tiptap_contactus (name,mobile,comments,date) values ('".$name."','".$mobile."','".$comments."',NOW())"; 
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			if($result != 0){
				$result = array('success'=>1);
				return $result;
			}
		}
	}
	
	public function postChangepassword(){
		if(isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['retypepass']) && isset($_POST['loginid'])){
			$oldpass 	= md5($_POST['oldpass']);
			$newpass 	= $_POST['newpass'];			
			$secretcode = $_POST['newpass'];			
			$retypepass	= $_POST['retypepass'];
			$loginid	= $_POST['loginid'];
			$md5pass	= md5($_POST['newpass']);
			
			if($newpass==$retypepass){
				$myaccquery = "SELECT * from tiptap_customers where id='$loginid'";
				$dbcontroller = new DBController();
				$signupdetails 	= $dbcontroller->executeSelectQuery($myaccquery);			
				$DBpassword 	= $signupdetails[0]['password'];
				
				if($oldpass==$DBpassword)
				{
					$query = "UPDATE tiptap_customers SET password='$md5pass',secretcode='$secretcode' WHERE id='$loginid'";  
					$dbcontroller = new DBController();
					$result = $dbcontroller->executeQuery($query);
					if($result != 0){
						$result = array('success'=>1);
						return $result;
					}
				} else if($md5pass!=$DBpassword){
					$result = array('success'=>3); /* 3-DB pass not match */
					return $result;
				}
				
			} else if($newpass!=$retypepass){
				$result = array('success'=>2); /* 2-Conf pass not match */
				return $result;
			}
		}
	}
	
	function generateNumericOTP($n) {    
		$generator = "1357902468";    
		$result = "";  
		for ($i = 1; $i <= $n; $i++) { 
			$result .= substr($generator, (rand()%(strlen($generator))), 1); 
		}	
		return $result; 
	} 
	
	public function postUsersignup(){
		if(isset($_POST['mobile']) && isset($_POST['countryid'])&& isset($_POST['email'])&& isset($_POST['name'])&& isset($_POST['usertype'])&& isset($_POST['giverorreceiver'])){
			$mobile 		= $_POST['mobile'];
			$countryid 		= $_POST['countryid'];
			$email 			= $_POST['email'];
			$name 			= $_POST['name'];
			$password 		= $_POST['password'];
			$confpassword 	= $_POST['confpassword'];
			$usertype 		= $_POST['usertype'];
			$giverorreceiver= $_POST['giverorreceiver'];
			$md5pass		= md5($password);
			
			if($password==$confpassword){				
				
				function generateNumericOTP($n) {    
					$generator = "1357902468";    
					$result = "";  
					for ($i = 1; $i <= $n; $i++) { 
						$result .= substr($generator, (rand()%(strlen($generator))), 1); 
					}	
					return $result; 
				} 
				
				$num = 4; 
				$otp = generateNumericOTP($num); 
									
				$check_query 	= "SELECT * FROM tiptap_customers WHERE email='$email'";
				$dbcontroller 	= new DBController();
				$userdetails 	= $dbcontroller->executeSelectQuery($check_query);
				
				$checkmob_querymob 	= "SELECT * FROM tiptap_customers WHERE mobile='$mobile'";
				$dbcontroller 		= new DBController();
				$userdetailsmob 	= $dbcontroller->executeSelectQuery($checkmob_querymob);			
				
								
				if($userdetails != 0 || $userdetailsmob !=0){
					$check_result = array_merge(array('success'=>0),array("message"=>"User Already Exist!"),array("data"=>$userdetails));
					return $check_result;
				} else {
					
					$query = "INSERT into tiptap_customers (fullname, mobile, countryid, email, auth, secretcode, password, usertype, giverorreceiver, date) values ('$name','$mobile','$countryid','$email','$otp','$password','$md5pass','$usertype','$giverorreceiver',NOW())";
					$dbcontroller = new DBController();
					$result = $dbcontroller->executeQuery($query);
					
					function sendMobSms($mobile, $message) {	 
						$fields_string = array('UID' => 'tiptap', 'S' => 'InfoText', 'G' =>  $mobile, 'M' => $message);
						$ch = @curl_init();	 
						$url = "http://62.215.226.164/fccsms.aspx";
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_TIMEOUT, '5');

						$content = trim(curl_exec($ch));
						curl_close($ch);
					}
					
					$otpmobile 	= $countryid.$mobile;
					$message 	= "Thank you for Signup at Tiptap. Your OTP is $otp.";
					
					sendMobSms($otpmobile,$message);
										
					/*$mail->addAddress($email, "");
					$mail->isHTML(true);
					$mail->Subject = "Tiptap - OTP Authentication";				
					$mail->Body = '<html>
					<head>
					<meta charset="utf-8">
					<title>Tiptap</title>
					<style type="text/css">
						a:hover{background:#ac5e2a!important;border:1px solid #ac5e2a!important }
					</style>
					</head>

					<body style="margin: 0px;padding: 0px">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr><td style="padding: 25px;background:#eee ">
					<table cellpadding="0" cellspacing="0" border="0" style="background: #ffffff">
						<tr>
							<td style="padding:10px 20px;"><div style="border-bottom:1px solid #d1b555;padding-bottom:15px "><img src="'.$urlpath.'images/logo.jpg" width="177" height="130" alt="Tiptap" /></div></td>
						</tr>
						<tr>
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #000;border-collapse: collapse;padding: 15px;padding:10px 20px">Welcome to Tiptap</td>
						</tr>
						<tr>
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #ac5e2a;border-collapse: collapse;padding: 15px;padding:10px 20px">Hello,</td>
						</tr>
						<tr>		
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size: 15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px">
								Thank you for Signup at Tiptap. Your OTP is '.$otp.'. <br>
							</td>
						</tr>					
						<tr>		
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size: 15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px 10px 20px">
								Thanks,<br>Tiptap.
							</td>
						</tr>	
					</table>
					</td></tr>
					</table>
					</body>
					</html>';								
					$mail->send();	*/			
										
					$check_result = array_merge(array('success'=>1),array("message"=>"Registered Successfully!"),array("otp"=>$otp));
					return $check_result;
				}			 
			} else if($password!=$confpassword){
				$result = array_merge(array('success'=>2),array("message"=>"Confirmation password not matching!"));
				/* 2-Conf pass not match */
				return $result;
			}
		}
	}
	
	
	public function postUserlogin(){
		if(isset($_POST['mobile']) && isset($_POST['password'])){	
			$mobile 	= $_POST['mobile'];
			$password 	= $_POST['password'];
			$newpassword 	= md5($_POST['password']);
			
			$query = "SELECT * FROM tiptap_customers WHERE mobile='$mobile' AND password='$newpassword' AND status=1";	
			$dbcontroller = new DBController();
			$this->userlogin = $dbcontroller->executeSelectQuery($query);	
			
			if($this->userlogin != 0){			
				$result = array_merge(array('success'=>1),array("data"=>$this->userlogin));
				return $result;
			} else if($this->userlogin == 0){
				$result = array('success'=>0);
				return $result;
			}
		
		}
	}
	
	private $givrecbanner = array();
	public function getGiverReceiverbanners(){		
		$query = 'SELECT * FROM tiptap_giverreceiverbanners';		
		$dbcontroller = new DBController();
		$this->givrecbanner = $dbcontroller->executeSelectQuery($query);		
		if($this->givrecbanner != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->givrecbanner));
			return $result;
		} else if($this->givrecbanner == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	
	public function getMyProfile(){	
		if(isset($_POST['userid'])){	
			$userid = $_POST['userid'];	
			$query = "SELECT * FROM tiptap_customers WHERE id=$userid";		
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);		
			if($this->aboutus != 0){			
				$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
				return $result;
			} else if($this->aboutus == 0){
				$result = array('success'=>0);
				return $result;
			}
		}
	}
	
	public function getJobIndustryType(){		
		$query = "SELECT * FROM tiptap_industrytype";		
		$dbcontroller = new DBController();
		$this->aboutus = $dbcontroller->executeSelectQuery($query);		
		if($this->aboutus != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
			return $result;
		} else if($this->aboutus == 0){
			$result = array('success'=>0);
			return $result;
		}
		
	}
	
	public function getBankInfoUpdate(){	
		if(isset($_POST['userid'])){	
			$userid = $_POST['userid'];	
			$bankname 		= $_POST['bankname'];
			$accountnumber 	= $_POST['accountnumber'];
			$ibannum 		= $_POST['ibannum'];
			$swiftcode 		= $_POST['swiftcode'];
					
			$query = "UPDATE tiptap_customers SET bankname='$bankname',accountnumber='$accountnumber',ibannum='$ibannum',swiftcode='$swiftcode' WHERE id='$userid'"; 
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			if($result != 0){
				$result = array('success'=>1);
				return $result;
			} else {
				$result = array('success'=>0);
				return $result;
			}
		}
	}
	
	public function getOtpScreen(){			
		if(isset($_POST['mobile']) && isset($_POST['otp']) ){			
			$mobile 	= $_POST['mobile'];	
			$otp		= $_POST['otp'];
						
			$query = "SELECT * FROM tiptap_customers WHERE mobile='$mobile' AND auth='$otp' ORDER BY id DESC";
			$dbcontroller = new DBController();
			$this->dealerads = $dbcontroller->executeSelectQuery($query);
			$data[] = $this->dealerads[0]['mobile'];
			$data[] = $this->dealerads[0]['auth'];
			$userid = $this->dealerads[0]['id'];
			
			if($this->dealerads != 0){
				$query = "UPDATE tiptap_customers SET status=1 WHERE id='$userid'"; 
				$dbcontroller = new DBController();
				$result = $dbcontroller->executeQuery($query);
				
				$result = array_merge(array('success'=>1),array("mobiledata"=>$data),array("data"=>$this->dealerads));
				return $result;
			} else if($this->dealerads == 0){
				$result = array('success'=>0);
				return $result;
			}		
		}
	}
	
	public function CompanySignup(){
		if(isset($_POST['mobile']) && isset($_POST['countryid'])&& isset($_POST['email'])&& isset($_POST['companyname'])){
			$mobile 		 = $_POST['mobile'];
			$countryid 		 = $_POST['countryid'];
			$email 			 = $_POST['email'];
			$companyname 	 = $_POST['companyname'];			
			$representativename	= $_POST['representativename'];			
			$branchlocation	 = $_POST['branchlocation'];						
			$noofemp 		 = $_POST['noofemp'];
			$industrytype 	 = $_POST['industrytype'];
														
			$check_query 	= "SELECT * FROM tiptap_companies WHERE email='$email'";
			$dbcontroller 	= new DBController();
			$userdetails 	= $dbcontroller->executeSelectQuery($check_query);
			
			$checkmob_querymob 	= "SELECT * FROM tiptap_companies WHERE mobile='$mobile'";
			$dbcontroller 		= new DBController();
			$userdetailsmob 	= $dbcontroller->executeSelectQuery($checkmob_querymob);			
			
							
			if($userdetails != 0 || $userdetailsmob !=0){
				$check_result = array_merge(array('success'=>0),array("message"=>"Company Already Exist!"),array("data"=>$userdetails));
				return $check_result;
			} else {
				
				$query = "INSERT into tiptap_companies (companyname, mobile, email, representativename, branchlocation, noofemp, industrytype, date, status) values ('$companyname','$mobile','$email','$representativename','$branchlocation','$noofemp','$industrytype',NOW(),0)";
				$dbcontroller = new DBController();
				$result = $dbcontroller->executeQuery($query);
								
				/*$mail->addAddress($email, "");
				$mail->isHTML(true);
				$mail->Subject = "Tiptap - OTP Authentication";				
				$mail->Body = '<html>
				<head>
				<meta charset="utf-8">
				<title>Tiptap</title>
				<style type="text/css">
					a:hover{background:#ac5e2a!important;border:1px solid #ac5e2a!important }
				</style>
				</head>

				<body style="margin: 0px;padding: 0px">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr><td style="padding: 25px;background:#eee ">
				<table cellpadding="0" cellspacing="0" border="0" style="background: #ffffff">
					<tr>
						<td style="padding:10px 20px;"><div style="border-bottom:1px solid #d1b555;padding-bottom:15px "><img src="'.$urlpath.'images/logo.jpg" width="177" height="130" alt="Tiptap" /></div></td>
					</tr>
					<tr>
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #000;border-collapse: collapse;padding: 15px;padding:10px 20px">Welcome to Tiptap</td>
					</tr>
					<tr>
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #ac5e2a;border-collapse: collapse;padding: 15px;padding:10px 20px">Hello,</td>
					</tr>
					<tr>		
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size: 15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px">
							Thank you for Signup at Tiptap. Your OTP is '.$otp.'. <br>
						</td>
					</tr>					
					<tr>		
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size: 15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px 10px 20px">
							Thanks,<br>Tiptap.
						</td>
					</tr>	
				</table>
				</td></tr>
				</table>
				</body>
				</html>';								
				$mail->send();	*/			
				
				if($result != 0){
					$result = array_merge(array('success'=>1),array("message"=>"Company Registered Successfully!"));
					return $result;
				} else {
					$result = array_merge(array('success'=>0));
					return $result;
				}
			}			 
			
		}
	}
	
	
	public function SingleWorkerSignup(){
		if(isset($_POST['mobile']) && isset($_POST['countryid'])&& isset($_POST['name'])&& isset($_POST['jobtype'])&& isset($_POST['giverorreceiver'])){
			$name 			= $_POST['name'];
			$mobile 		= $_POST['mobile'];
			$countryid 		= $_POST['countryid'];
			$location 		= $_POST['location'];
			$usertype 		= 1;
			$jobtype 		= $_POST['jobtype'];
			$password 		= $_POST['password'];
			$confpassword 	= $_POST['confpassword'];
			$singleorgroup	= 1;
			
			$giverorreceiver= $_POST['giverorreceiver'];
			$md5pass		= md5($password);
			
			if($password==$confpassword){				
				
				function generateNumericOTP($n) {    
					$generator = "1357902468";    
					$result = "";  
					for ($i = 1; $i <= $n; $i++) { 
						$result .= substr($generator, (rand()%(strlen($generator))), 1); 
					}	
					return $result; 
				} 
				
				$num = 4; 
				$otp = generateNumericOTP($num); 
												
				$checkmob_querymob 	= "SELECT * FROM tiptap_customers WHERE mobile='$mobile'";
				$dbcontroller 		= new DBController();
				$userdetailsmob 	= $dbcontroller->executeSelectQuery($checkmob_querymob);				
								
				if($userdetailsmob !=0){
					$check_result = array_merge(array('success'=>0),array("message"=>"User Already Exist!"));
					return $check_result;
				} else {
					
					$query = "INSERT into tiptap_customers (fullname, mobile, countryid, email, auth, secretcode, password, usertype, giverorreceiver, singleorgroup, location, jobtype, date) values ('$name','$mobile','$countryid','','$otp','$password','$md5pass','$usertype','$giverorreceiver','$singleorgroup','$location','$jobtype',NOW())"; 
					$dbcontroller = new DBController();					
					$result = $dbcontroller->executeQueryGetID($query);
										
					$tempDir = "../uploads/receiverQRscanners/";
					
					$query = "UPDATE tiptap_customers SET qrscannerimage='uploads/receiverQRscanners/Receiver_$result.png' WHERE id='$result'";  
					$dbcontroller = new DBController();
					$result22 = $dbcontroller->executeQuery($query);
					
					// here our data
					$receiverid = $result;
					$name = $name;
					$phone = $mobile;
					
					$codeContents  = 'BEGIN:VCARD'."\n";
					$codeContents .= 'ReceiverName:'.$name."\n";
					$codeContents .= 'ReceiverID:'.$receiverid."\n";
					$codeContents .= 'END:VCARD';
					
					QRcode::png($codeContents, $tempDir.'Receiver_'.$receiverid.'.png', QR_ECLEVEL_L, 3);
					
					if($result != 0){											
						$check_result = array_merge(array('success'=>1),array("message"=>"Registered Successfully!"),array("otp"=>$otp));
						return $check_result;
					} else {
						$check_result = array_merge(array('success'=>0),array("message"=>"Something went wrong!"));
						return $check_result;
					}
				}			 
			} else if($password!=$confpassword){
				$result = array_merge(array('success'=>2),array("message"=>"Confirmation password not matching!"));
				/* 2-Conf pass not match */
				return $result;
			}
		}
	}
	
	public function JobTypes(){		
		$query = "SELECT * FROM tiptap_jobtypes";		
		$dbcontroller = new DBController();
		$this->aboutus = $dbcontroller->executeSelectQuery($query);		
		if($this->aboutus != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
			return $result;
		} else if($this->aboutus == 0){
			$result = array('success'=>0);
			return $result;
		}
		
	}
	
	/* public function TopupGiverWallet(){
		if(isset($_POST['giverid']) && isset($_POST['amountid'])){
			$giverid 	= $_POST['giverid'];
			$amountid 	= $_POST['amountid'];	

			$query = "SELECT * FROM tiptap_walletamounts WHERE id='$amountid'";
			$dbcontroller = new DBController();
			$this->dealerads = $dbcontroller->executeSelectQuery($query);
			$amount = $this->dealerads[0]['title'];	
			
			$query = "SELECT * FROM tiptap_customers WHERE id='$giverid'";
			$dbcontroller = new DBController();
			$this->dealerads = $dbcontroller->executeSelectQuery($query);
			$currentbal = $this->dealerads[0]['balance'];	
			$updatedbal = number_format(($amount+$currentbal),3);
													
			$query = "insert into tiptap_topupsbycustomers (custid,amount,amountid,updatedbal,date) values ('".$giverid."','".$amount."','".$amountid."','".$updatedbal."',NOW())"; 
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			
			if($result != 0){
				$updatedgiverbal =  number_format(($currentbal+$amount),3);
				$query = "UPDATE tiptap_customers SET balance='$updatedgiverbal' WHERE id='$giverid'";  
				$dbcontroller = new DBController();
				$result = $dbcontroller->executeQuery($query);
				
				$result = array('success'=>1);
				return $result;
			} else if($result == 0){
				$result = array('success'=>0);
				return $result;
			}
		}
	}
	 */
	 
	public function TopupGiverWallet(){			
		
		/* if(isset($_GET['giverid']) && isset($_GET['amountid'])){ */
			
			$giverid 	= $_REQUEST['giverid'];
			$amountid 	= $_REQUEST['amountid'];	
			
			$query = "SELECT * FROM tiptap_walletamounts WHERE id='$amountid'";
			$dbcontroller = new DBController();
			$this->dealerads = $dbcontroller->executeSelectQuery($query);
			$amount = $this->dealerads[0]['amount'];	
			
			$query = "SELECT * FROM tiptap_customers WHERE id='$giverid'";
			$dbcontroller = new DBController();
			$this->dealerads = $dbcontroller->executeSelectQuery($query);
			$currentbal = $this->dealerads[0]['balance'];	
			$updatedbal = number_format(($amount+$currentbal),3);				
						
			$email 		= $this->dealerads[0]['email'];
			$mobile 	= $this->dealerads[0]['mobile'];			
			$refId 		= $giverid.'_'.time().'_'.$amount.'_'.$amountid; 	
			
			$OrderIdquery = "INSERT into tiptap_ordersmaster (reference_orderid, date) values ('$refId',NOW())"; 
			$dbcontroller = new DBController();
			$OrderId = $dbcontroller->executeQueryGetID($OrderIdquery);
														
						
			$fields = array( 
				/* 'merchant_id'=>'1201', 'username' => 'test',
				'password'=>stripslashes('test'), 'api_key'=>'jtest123', */
				
				'merchant_id'=>'27202', 'username' => 'tiptapkw',
				'password'=>stripslashes('eScVYKviBfU2'), 'api_key'=>'$2y$10$ZVy0NrT3hihI9a9.rFZrSOPsF0Ucy7Y3PwqzwTeZla/O.QJc8Gbfy', 						
				'order_id'=>"$OrderId", 
				'total_price'=>"$amount", 
				'CurrencyCode'=>'KWD',
				'CstFName'=>"$fullname", 
				'CstEmail'=>"$email", 
				'CstMobile'=>"$mobile", 
				'success_url'=>'https://tiptapofficial.com/webservices/tiptap/paymentresult',  
				'error_url'=>'https://tiptapofficial.com/webservices/tiptap/paymentresult',  
				'test_mode'=>0,
				'whitelabled'=>false, 
				'payment_gateway'=>'knet',
				'ProductName'=>json_encode(['Wallet Recharge']), 
				'ProductQty'=>json_encode([1]), 
				'ProductPrice'=>json_encode([$amount]), 
				'reference'=>"$refId", 
				'ExtraMerchantsData'=>json_encode($extraMerchantsData) 	
			); 
									 
			$fields_string = http_build_query($fields); 
			$ch = curl_init(); 
			/* curl_setopt($ch, CURLOPT_URL,"https://api.upayments.com/test-payment"); 
			 */
			curl_setopt($ch, CURLOPT_URL,"https://api.upayments.com/payment-request"); 
			curl_setopt($ch, CURLOPT_POST, 1); 
			curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string); 			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			$server_output = curl_exec($ch); 
			curl_close($ch); 
			 
			$server_output = json_decode($server_output,true); 
			
			/* print_r($server_output); die; */
						
			header('Location:'.$server_output['paymentURL']); 
			die;
			 																		
			/*$query = "insert into tiptap_topupsbycustomers (custid,amount,amountid,updatedbal,date) values ('".$giverid."','".$amount."','".$amountid."','".$updatedbal."',NOW())"; 
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			
			if($result != 0){
				$updatedgiverbal =  number_format(($currentbal+$amount),3);
				$query = "UPDATE tiptap_customers SET balance='$updatedgiverbal' WHERE id='$giverid'";  
				$dbcontroller = new DBController();
				$result = $dbcontroller->executeQuery($query);
				
				$result = array('success'=>1);
				return $result;
			} else if($result == 0){
				$result = array('success'=>0);
				return $result;
			} */
		//}
	} 
	
	public function GiverWalletBalance(){
		if(isset($_POST['giverid'])){
			$giverid 	= $_POST['giverid'];			
			$query = "SELECT * FROM tiptap_customers WHERE id=$giverid";	
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);	
			$balance = $this->aboutus[0]['balance'];
			
			$query2 = "SELECT count(*) as nooftipsgiven FROM tiptap_tipsamttoreceivers WHERE giverid=$giverid";	
			$dbcontroller = new DBController();
			$tipsgiven = $dbcontroller->executeRowSelectQuery($query2);
			$tipsgiven = $tipsgiven['nooftipsgiven'];
			
			/* $tipsgiven = 0;	 */
			
			if($this->aboutus != 0){			
				$result = array_merge(array('success'=>1),array("balance"=>$balance),array("nooftipsgiven"=>$tipsgiven));
				return $result;
			} else if($this->aboutus == 0){
				$result = array('success'=>0);
				return $result;
			}
		}	
	}
	
	public function GetCompanyTipreceiver(){
		
		$tipcode 	= $_POST['tipcode'];	
		$mobile 	= $_POST['mobile'];	
		$password 	= md5($_POST['password']);

		if($tipcode!=""){				
			$query = "SELECT * FROM tiptap_customers WHERE tipcode='$tipcode'"; 
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);	
		} else {
			$query = "SELECT * FROM tiptap_customers WHERE mobile='$mobile' AND password='$password'"; 
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);	
		}	
		$receivid = $this->aboutus[0]['id'];				
		$name = $this->aboutus[0]['name'];				
		$mobile = $this->aboutus[0]['mobile'];				
		
		if($this->aboutus != 0){
			
			$tempDir = "../uploads/receiverQRscanners/";
				
			$query = "UPDATE tiptap_customers SET qrscannerimage='uploads/receiverQRscanners/Receiver_$receivid.png' WHERE id='$receivid'";  
			$dbcontroller = new DBController();
			$result22 = $dbcontroller->executeQuery($query);
			
			// here our data
			$receiverid = $receivid;
			$name = $name;
			$phone = $mobile;
			
			$codeContents  = 'BEGIN:VCARD'."\n";
			$codeContents .= 'ReceiverName:'.$name."\n";
			$codeContents .= 'ReceiverID:'.$receiverid."\n";
			$codeContents .= 'END:VCARD';
			
			QRcode::png($codeContents, $tempDir.'Receiver_'.$receiverid.'.png', QR_ECLEVEL_L, 3);

			
			$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
			return $result;
			
		} else if($this->aboutus == 0){
			$result = array('success'=>0);
			return $result;
		}
		
	}
	
	public function banksList(){		
		$query = "SELECT * FROM tiptap_banks";		
		$dbcontroller = new DBController();
		$this->aboutus = $dbcontroller->executeSelectQuery($query);		
		if($this->aboutus != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
			return $result;
		} else if($this->aboutus == 0){
			$result = array('success'=>0);
			return $result;
		}
		
	}
	
	public function QRscanner(){
		if(isset($_POST['userid'])){		
			$userid 	= $_POST['userid'];			
			$query = "SELECT * FROM tiptap_customers WHERE id=$userid";	
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);	
						
			if($this->aboutus != 0){			
				$result = array_merge(array('success'=>1),array("data"=>$this->aboutus));
				return $result;
			} else if($this->aboutus == 0){
				$result = array('success'=>0);
				return $result;
			}
		}
	}
	
	public function GiveTip(){
		if(isset($_POST['giverid']) && isset($_POST['receiverid']) && isset($_POST['amountid'])){		
			$giverid 	= $_POST['giverid'];			
			$receiverid = $_POST['receiverid'];			
			$amountid 	= $_POST['amountid'];
			
			/*Get Wallet balance of Tip Giver */
			$query = "SELECT * FROM tiptap_customers WHERE id=$giverid";		
			$dbcontroller = new DBController();
			$this->tipamounts = $dbcontroller->executeSelectQuery($query);		
			$giverbalance = $this->tipamounts[0]['balance'];
			
			/*Get Tip Amount from ID */
			$query = "SELECT * FROM tiptap_tipamounts WHERE id=$amountid";		
			$dbcontroller = new DBController();
			$this->tipamounts = $dbcontroller->executeSelectQuery($query);		
			$tipamount = $this->tipamounts[0]['amount'];

			/*Balance after payment in Giver*/	
			$updgiverbalance = $giverbalance-$tipamount;
			
			/*Get Wallet balance of Tip Receiver */
			$query = "SELECT * FROM tiptap_customers WHERE id=$receiverid";		
			$dbcontroller = new DBController();
			$this->tipamounts = $dbcontroller->executeSelectQuery($query);		
			$receiverbalance = $this->tipamounts[0]['balance'];
			
			/*Balance after payment in Receiver*/
			$updreceiverbalance = $receiverbalance+$tipamount;			
			
			if($giverbalance>=$tipamount){
				$query = "insert into tiptap_tipsamttoreceivers (giverid,receiverid,amountid,amountvalue,date) values ('".$giverid."','".$receiverid."','".$amountid."','".$tipamount."',NOW())"; 
				$dbcontroller = new DBController();
				$result = $dbcontroller->executeQuery($query);
				
				if($result != 0){
					/*UPDATE Receiver balance*/
					$query = "UPDATE tiptap_customers SET balance='$updreceiverbalance' WHERE id='$receiverid'";  
					$dbcontroller = new DBController();
					$result1 = $dbcontroller->executeQuery($query);
					
					/*UPDATE Giver balance*/
					$query = "UPDATE tiptap_customers SET balance='$updgiverbalance' WHERE id='$giverid'";  
					$dbcontroller = new DBController();
					$result2 = $dbcontroller->executeQuery($query);
						
					if($result1==1){
						$result = array_merge(array('success'=>1));
						return $result;
					} else {
						$result = array_merge(array('success'=>0));
						return $result;
					}						
					
				} else if($this->aboutus == 0){
					$result = array_merge(array('success'=>0),array("message"=>"Something went wrong!"));
					return $result;
				}
				
			} else {
				$result = array_merge(array('success'=>0),array("message"=>"Tip amount is greater than Available balance!"));
				return $result;
			}		
			
		}
	}
	
	public function receiverTipsHistory(){
		if(isset($_POST['receiverid'])){	
		
			$receiverid 	= $_POST['receiverid'];			
			$query = "SELECT * FROM tiptap_tipsamttoreceivers WHERE receiverid='$receiverid'";		
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);					
			$allres = $this->aboutus;
			
			$reccquery = "SELECT * from tiptap_customers where id='$receiverid'";
			$dbcontroller = new DBController();
			$recdetails 	= $dbcontroller->executeSelectQuery($reccquery);
			$balance	= $recdetails[0]['balance'];
						
			foreach($allres as $key=>$allresult){
				$giverid = $allresult['giverid'];	
				if($giverid){
					$myaccquery = "SELECT * from tiptap_customers where id='$giverid'";
					$dbcontroller = new DBController();
					$signupdetails 	= $dbcontroller->executeSelectQuery($myaccquery);
					$givername	= $signupdetails[0]['fullname'];
					$balance	= $signupdetails[0]['balance'];
					
					$allres[$key]['giverid'] 	= $giverid;
					$allres[$key]['givername']  = $givername;
					
					
				} 
			} 
			
			if($this->aboutus != 0){			
				$result = array_merge(array('success'=>1),array("data"=>$allres),array("balance"=>$balance));
				return $result;
			} else if($this->aboutus == 0){
				$result = array('success'=>0);
				return $result;
			}
		}		
	}
	
	public function giverTipsHistory(){
		if(isset($_POST['giverid'])){	
		
			$giverid 	= $_POST['giverid'];
			$query = "SELECT * FROM tiptap_tipsamttoreceivers WHERE giverid='$giverid'";		
			$dbcontroller = new DBController();
			$this->aboutus = $dbcontroller->executeSelectQuery($query);					
			$allres = $this->aboutus;
			
			foreach($allres as $key=>$allresult){
				$receiverid = $allres[$key]['receiverid'];	
				if($receiverid!=""){
					$myaccquery = "SELECT * from tiptap_customers where id='$receiverid'";
					$dbcontroller = new DBController();
					$signupdetails 	= $dbcontroller->executeSelectQuery($myaccquery);
					$givername	= $signupdetails[0]['fullname'];
					
					$allres[$key]['receiverid']    = $giverid;
					 $allres[$key]['receivername']  = $givername;
				} 
			} 
			
			if($this->aboutus != 0){			
				$result = array_merge(array('success'=>1),array("data"=>$allres));
				return $result;
			} else if($this->aboutus == 0){
				$result = array('success'=>0);
				return $result;
			}
		}		
	}
	
	/* public function withdrawTipAmount(){
		if(isset($_POST['giverid']) && isset($_POST['amount'])){		
			$giverid 	= $_POST['giverid'];					
			$amount 	= $_POST['amount'];
						
			$query = "SELECT * FROM tiptap_customers WHERE id=$giverid";		
			$dbcontroller = new DBController();
			$this->tipamounts = $dbcontroller->executeSelectQuery($query);		
			$giverbalance = $this->tipamounts[0]['balance'];
							
			if($giverbalance>=$amount){
				$query = "insert into tiptap_tipsamttoreceivers (giverid,receiverid,amountid,amountvalue,date) values ('".$giverid."','".$receiverid."','".$amountid."','".$tipamount."',NOW())"; 
				$dbcontroller = new DBController();
				$result = $dbcontroller->executeQuery($query);
				
				if($result != 0){
					
					$query = "UPDATE tiptap_customers SET balance='$updreceiverbalance' WHERE id='$receiverid'";  
					$dbcontroller = new DBController();
					$result1 = $dbcontroller->executeQuery($query);
																
					$result = array_merge(array('success'=>1));
					return $result;
				} else if($this->aboutus == 0){
					$result = array_merge(array('success'=>0),array("message"=>"Something went wrong!"));
					return $result;
				}
				
			} else {
				$result = array_merge(array('success'=>0),array("message"=>"Tip amount is greater than Available balance!"));
				return $result;
			}		
			
		}
	} */
	
	public function withdrawTipAmount(){
		if(isset($_POST['receiverid']) && isset($_POST['amount'])){	
		
			$receiverid = $_POST['receiverid'];					
			$amount 	= $_POST['amount'];
			
			/*Get Wallet balance of Tip Giver */
			$query = "SELECT * FROM tiptap_customers WHERE id=$receiverid";		
			$dbcontroller = new DBController();
			$balres = $dbcontroller->executeSelectQuery($query);		
			$giverbalance = $balres[0]['balance'];
			
			
			$minquery = "SELECT * FROM tiptap_servicecharge WHERE id=2";		
			$dbcontroller = new DBController();
			$this->tipamounts = $dbcontroller->executeSelectQuery($minquery);		
			$minamounttowithdraw = $this->tipamounts[0]['amount'];
			
			$servchargequery = "SELECT * FROM tiptap_servicecharge WHERE id=1";		
			$dbcontroller = new DBController();
			$servchargeres = $dbcontroller->executeSelectQuery($servchargequery);		
			$comissoinpercentage = $servchargeres[0]['amount'];
			
			$commvalue = (($amount*$comissoinpercentage)/100);
			$finalamoutaftercommission = $amount+$commvalue;
			$amountwithdeduction = $amount-$commvalue;
			$updreceiverbalance = $giverbalance-$finalamoutaftercommission;
			
			if($giverbalance>=$amount){	
				
				if($amount>=$minamounttowithdraw){
					$query = "insert into tiptap_tipswithdraw (receiverid, amountvalue, comissoinpercentage, commissionvalue, finalamoutaftercommission, date, transactionnumber) values ('".$receiverid."', '".$amount."', '".$comissoinpercentage."', '".$commvalue."', '".$amountwithdeduction."', NOW(),'0')"; 
					
					$dbcontroller = new DBController();
					$result = $dbcontroller->executeQuery($query);
					
					if($result != 0){
						/*UPDATE Receiver balance*/
						$query = "UPDATE tiptap_customers SET balance='$updreceiverbalance' WHERE id='$receiverid'";  
						$dbcontroller = new DBController();
						$result1 = $dbcontroller->executeQuery($query);
																	
						$result = array_merge(array('success'=>1));
						return $result;
					} else if($this->aboutus == 0){
						$result = array_merge(array('success'=>0),array("message"=>"Something went wrong!"));
						return $result;
					}
					
				} else {
					$result = array_merge(array('success'=>0),array("message"=>"Min amount to withdraw should be $minamounttowithdraw KD!"));
					return $result;					
				}	
			} else {
				$result = array_merge(array('success'=>0),array("message"=>"Tip amount is greater than Available balance!"));
				return $result;
			}			
			
		}
	}
	
	public function paymentResult(){	
			
		$PaymentID	=	$_REQUEST['PaymentID'];
		$Result		=	$_REQUEST['Result'];
		$PostDate	=	$_REQUEST['PostDate'];
		$TranID		=	$_REQUEST['TranID'];
		$Ref		=	$_REQUEST['Ref'];
		$TrackID	=	$_REQUEST['TrackID'];
		$Auth		=	$_REQUEST['Auth'];
		$OrderID	=	$_REQUEST['OrderID'];
		$cust_ref	=	$_REQUEST['cust_ref'];
		
		$expoloderef = explode("_",$cust_ref);
		
		$customerID  = $expoloderef[0];
		$reforderID  = $expoloderef[1];
		$paidamount  = $expoloderef[2];
		$amountid  	 = $expoloderef[3];
		
		$query0 = "SELECT * FROM tiptap_walletamounts WHERE id='$amountid'";
		$dbcontroller = new DBController();
		$this->dealerads = $dbcontroller->executeSelectQuery($query0);
		$amount = $this->dealerads[0]['amount'];
						
		$query01 = "SELECT * FROM tiptap_customers WHERE id='$customerID'";
		$dbcontroller = new DBController();
		$this->dealerads = $dbcontroller->executeSelectQuery($query01);
		$currentbal = $this->dealerads[0]['balance'];	
		$updatedbal = number_format(($amount+$currentbal),3);	
		$email 		= $this->dealerads[0]['email'];
		$mobile 	= $this->dealerads[0]['mobile'];
		$fullname 	= $this->dealerads[0]['fullname'];
		
		
		if($Result=='CAPTURED'){
			$Status = "1";
		} else {
			$Status = "0";
		}
				
		$query = "INSERT INTO tiptap_payments (paidname, mobile, Status, PaymentToken, PaymentId, PaidOn, Loginid, OrderID, NewOrderID, cartcount, email, amountpaid, Method, transactionnumber) values ('".$fullname."','".$mobile."','".$Status."', '','".$PaymentID."',NOW(),'$Ref','$OrderID','$reforderID','0','$email','$paidamount', '0', '$TranID')"; 
		$dbcontroller = new DBController();
		$resultq = $dbcontroller->executeQuery($query); 
			
		if($Status == 1){
			
			$query1 = "INSERT INTO tiptap_topupsbycustomers (custid,amount,amountid,updatedbal,date) values ('".$customerID."','".$amount."','".$amountid."','".$updatedbal."',NOW())"; 
			$dbcontroller = new DBController();
			$result1 = $dbcontroller->executeQuery($query1);
			
			$updatedgiverbal =  number_format(($currentbal+$amount),3);
			$query2 = "UPDATE tiptap_customers SET balance='$updatedgiverbal' WHERE id='$customerID'";  
			$dbcontroller = new DBController();
			$result2 = $dbcontroller->executeQuery($query2);
			
			$result = array_merge(array('success'=>1));
			$jsonResponse = json_encode($result);
			/* echo $jsonResponse; */
			echo "<input type='hidden' name='success' id='success' value='1'>";
			
		} else {
			$result = array_merge(array('success'=>0));
			$jsonResponse = json_encode($result);
			/* echo $jsonResponse; */
			echo "<input type='hidden' name='success' id='success' value='0'>";
		}
	}
	
	public function forgotPassword(){
		if(isset($_POST['email'])){	
			$email			= $_POST['email'];						
			
			$check_query 	= "SELECT * FROM tiptap_customers WHERE email='$email' AND status=1";
			$dbcontroller 	= new DBController();
			$userdetails 	= $dbcontroller->executeSelectQuery($check_query);
			$name 			= $userdetails[0]['fullname'];
			$secretcode		= $userdetails[0]['secretcode'];
									
			if($userdetails == 0){
				$check_result = array_merge(array('success'=>0),array("message"=>"Email Doesn't Exist!"),array("data"=>$userdetails));
				return $check_result;
			} else {
				
				/* $mail = new PHPMailer;					 
				$mail->SMTPDebug = 3;
				$mail->isSMTP();	                   
				$mail->Host = "smtp.gmail.com";					
				$mail->SMTPAuth = true;
				$mail->Username = "tiptapmobapp@gmail.com"; 
				$mail->Password = "tiptap@123";
				$mail->SMTPSecure = "tls";
				$mail->Port = 587;
				$mail->From = "tiptapmobapp@gmail.com";
				$mail->FromName = "Tiptap";		 */	
				/* $mail->addAddress($email, $name);
				$mail->isHTML(true);
				$mail->Subject = "Tiptap - Forgot Password";				
				$mail->Body = '<html>
				<head>
				<meta charset="utf-8">
				<title>Tiptap</title>
				<style type="text/css">
					a:hover{background:#ac5e2a!important;border:1px solid #ac5e2a!important }
				</style>
				</head>

				<body style="margin: 0px;padding: 0px">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr><td style="padding: 25px;background:#eee ">
				<table cellpadding="0" cellspacing="0" border="0" style="background: #ffffff">
					<tr>
						<td style="padding:10px 20px;"><div style="border-bottom:1px solid #d1b555;padding-bottom:15px "><img s rc="'.$urlpath.'images/logo.jpg" width="177" height="130" alt="Tiptap" /></div></td>
					</tr>
					<tr>
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #000;border-collapse: collapse;padding: 15px;padding:10px 20px">Welcome to Tiptap</td>
					</tr>
					<tr>
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #ac5e2a;border-collapse: collapse;padding: 15px;padding:10px 20px">Hello,</td>
					</tr>
					<tr>		
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size: 15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px">
							A request has been received for password. Your Password is '.$secretcode.'. <br>
						</td>
					</tr>					
					<tr>		
						<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size: 15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px 10px 20px">
							Thanks,<br>Tiptap.
						</td>
					</tr>	
				</table>
				</td></tr>
				</table>
				</body>
				</html>';								
				$mail->send();	 */
				
				$result = array_merge(array('success'=>1), array("message"=>"Password sent successfully to registered email address!"));						
				return $result;					
									
			}
			
		}		
	}
	
	public function profilePicture(){	
		if(isset($_POST['userid'])){	
			$userid = $_POST['userid'];	
			
			$cardbackimg = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
			$extension12 = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));		
			if($cardbackimg!=""){						
				if (($extension12 == "jpg") || ($extension12 == "jpeg") || ($extension12 == "png")) {								
					$newfilename12 = 'tiptap'.rand(). round(microtime(true));			
					$basename12 = $newfilename12 . '.' . $extension12;
					$blocation12 = "uploads/userprofiles/" . $basename12;
					$target_file12 = "../uploads/userprofiles/" . $basename12;	
					
					if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file12)) { 	
						$query = "UPDATE tiptap_customers SET profilepic='$blocation12' WHERE id='$userid'"; 
						$dbcontroller = new DBController();
						$result = $dbcontroller->executeQuery($query);
						
						if($result !=0){
							$result = array_merge(array('success'=>1), array("message"=>"Profile  Picture Uploaded Successfully"));						
							return $result;						
						} else {
							$result = array_merge(array('success'=>0));						
							return $result;
							
						}
					}
				}	
			}
			
			
		}
	}
	
	public function updateProfile(){			
		$userid 	= $_POST['userid'];			
		$usertype 	= $_POST['usertype'];			
		$name 		= $_POST['name'];			
		$mobile 	= $_POST['mobile'];			
		$email		= $_POST['email'];
		$birthday	= $_POST['birthday'];		
		$jobtype	= $_POST['jobtype'];
		$lats		= $_POST['lats'];
		$longs		= $_POST['longs'];
		$joblocation= $lats.','.$longs;		
			
		$query = "UPDATE tiptap_customers SET fullname='$name',mobile='$mobile',email='$email',birthday='$birthday',jobtype='$jobtype',joblocation='$joblocation' WHERE id='$userid'"; 
		$dbcontroller = new DBController();
		$result = $dbcontroller->executeQuery($query);
		
		if($result !=0){
			$result = array_merge(array('success'=>1), array("message"=>"Profile  Updated Successfully"));						
			return $result;						
		} else {
			$result = array_merge(array('success'=>0));						
			return $result;
			
		}		
	}
	
	public function loginWithSocial(){		
		
		$firstname 	 = $_POST['name'];		
		$email 		 = $_POST['email'];	
							
		$checkmob_querymob 	= "SELECT * FROM tiptap_customers WHERE email='$email'";
		$dbcontroller 		= new DBController();
		$userdetailsmob 	= $dbcontroller->executeQuery($checkmob_querymob);
		
		if($userdetailsmob >=1){
			
			$query = "SELECT * FROM tiptap_customers WHERE email='$email'";
			$dbcontroller = new DBController();
			$this->userlogin = $dbcontroller->executeSelectQuery($query);	
			
			$check_result = array_merge(array('success'=>1),array("data"=>$this->userlogin));
			return $check_result;
			
		} else {			
			$query = "INSERT INTO tiptap_customers (`fullname`,`email`,`password`,`secretcode`,`mobile`,`status`,`date`) VALUES ('$firstname','$email','','','', 1, NOW())";
			$dbcontroller = new DBController();
			$insertid = $dbcontroller->executeQueryGetID($query);	
			
			$query = "SELECT * FROM tiptap_customers WHERE id=$insertid";
			$dbcontroller = new DBController();
			$this->userlogin = $dbcontroller->executeSelectQuery($query);
						
			if($this->userlogin != 0){			
				$result = array_merge(array('success'=>1),array("data"=>$this->userlogin));
				return $result;
			} else if($this->userlogin == 0){
				$result = array('success'=>0);
				return $result;
			}
		}			
	}
	
	public function forgotPassOTP(){	
		if(isset($_POST['userid'])){	
			$userid = $_POST['userid'];	
			
			function generateNumericOTP($n) {    
				$generator = "1357902468";    
				$result = "";  
				for ($i = 1; $i <= $n; $i++) { 
					$result .= substr($generator, (rand()%(strlen($generator))), 1); 
				}	
				return $result; 
			} 				
			$num = 4; 
			$otp = generateNumericOTP($num); 
			
			$query = "UPDATE tiptap_customers SET changepassotp='$otp' WHERE id='$userid'"; 
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			
			$check_query 	= "SELECT * FROM tiptap_customers WHERE id='$userid'";
			$dbcontroller 	= new DBController();
			$userdetails 	= $dbcontroller->executeSelectQuery($check_query);
			$mobile 		= $userdetails[0]['countryid'].$userdetails[0]['mobile'];
			
			function sendMobSms($mobile, $message) {	 
				$fields_string = array('UID' => 'tiptap', 'S' => 'InfoText', 'G' =>  $mobile, 'M' => $message);
				$ch = @curl_init();	 
				$url = "http://62.215.226.164/fccsms.aspx";
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_TIMEOUT, '5');

				$content = trim(curl_exec($ch));
				curl_close($ch);
			}
					
			$otpmobile 	= $mobile;			
			$message 	= "You have requested for password change. Your OTP is $otp.";
			
			sendMobSms($otpmobile,$message);
			
			if($result != 0){
				$result = array_merge(array('success'=>1),array("OTP"=>$otp));
				return $result;
			} else {
				$result = array('success'=>0);
				return $result;
			}
			
		}
	}
	
	public function giverreceiverProfileBanners(){		
		$query = 'SELECT giverprofilepageimage,receiverprofilepageimage FROM tiptap_giverreceiverbanners WHERE id=1';		
		$dbcontroller = new DBController();
		$this->givrecbanner = $dbcontroller->executeSelectQuery($query);		
		if($this->givrecbanner != 0){			
			$result = array_merge(array('success'=>1),array("data"=>$this->givrecbanner));
			return $result;
		} else if($this->givrecbanner == 0){
			$result = array('success'=>0);
			return $result;
		}
	}
	
	
	
}
?>