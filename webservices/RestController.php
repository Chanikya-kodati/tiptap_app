<?php
require_once("TiptapRestHandler.php");
$method = $_SERVER['REQUEST_METHOD'];
$view = "";
if(isset($_GET["page_key"]))
	$page_key = $_GET["page_key"];
/*
controls the RESTful services
URL mapping
*/
	switch($page_key){
					
		case "aboutus":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getAboutus();
		break;
		
		case "landingbanners":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getLandingbanners();
		break;
		
		case "welcomebanner":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getWelcomebanner();
		break;
		
		case "privacypolicy":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getPrivacypolicy();
		break;
		
		case "termsofuse":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getTermsofuse();
		break;
		
		case "community":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getCommunity();
		break;
		
		case "tipamounts":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getTipamounts();
		break;
		
		case "wallettopups":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getWallettopups();
		break;
		
		case "contactus":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->postContactus();
		break;
		
		case "changepassword":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->postChangepassword();
		break;
		
		case "usersignup":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->postUsersignup();
		break;
		
		case "userlogin":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->postUserlogin();
		break;
		
		case "giverreceiverbanners":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getGiverReceiverbanners();
		break;
		
		case "myprofile":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getMyProfile();
		break;
		
		case "jobindustrytype":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getJobIndustryType();
		break;
		
		case "bankinfoupdate":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getBankInfoUpdate();
		break;
		
		case "otpscreen":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->getOtpScreen();
		break;
		
		case "companysignup":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->CompanySignup();
		break;
		
		case "singleworkersignup":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->SingleWorkerSignup();
		break;
		
		case "jobtype":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->JobTypes();
		break;
		
		case "topupgiverwallet":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->TopupGiverWallet();
		break;
		
		case "giverwalletbalance":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->GiverWalletBalance();
		break;
		
		case "getcompanytipreceiver":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->GetCompanyTipreceiver();
		break;
		
		case "bankslist":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->banksList();
		break;
		
		case "qrscanner":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->QRscanner();
		break;
		
		case "givetip":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->GiveTip();
		break;
		
		case "receivertipshistory":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->receiverTipsHistory();
		break;
		
		case "givertipshistory":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->giverTipsHistory();
		break;
		
		case "withdrawtipamount":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->withdrawTipAmount();
		break;
				
		case "paymentresult":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->paymentResult();
		break;
		
		case "forgotpassword":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->forgotPassword();
		break;
		
		case "profilepicture":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->profilePicture();
		break;
		
		case "updateprofile":
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->updateProfile();
		break;
		
		case "loginwithsocial":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->loginWithSocial();
		break;
		
		case "forgotpassotp":			
			$tiptapRestHandler = new TiptapRestHandler();
			$result = $tiptapRestHandler->forgotPassOTP();
		break;
						case "giverreceiverprofilebanners":						$tiptapRestHandler = new TiptapRestHandler();			$result = $tiptapRestHandler->giverreceiverProfileBanners();		break;		
}
?>
