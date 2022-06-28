<?php
require_once("SimpleRest.php");
require_once("Tiptap.php");
		
class TiptapRestHandler extends SimpleRest {	
	function getAboutus() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getAboutus();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getLandingbanners() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getLandingbanners();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getWelcomebanner() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getWelcomebanner();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getPrivacypolicy() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getPrivacypolicy();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getTermsofuse() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getTermsofuse();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getCommunity() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getCommunity();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getTipamounts() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getTipamounts();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
	
	function getWallettopups() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getWallettopups();

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function postContactus() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->postContactus();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function postChangepassword() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->postChangepassword();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function postUsersignup() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->postUsersignup();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function postUserlogin() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->postUserlogin();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getGiverReceiverbanners() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getGiverReceiverbanners();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getMyProfile() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getMyProfile();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getJobIndustryType() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getJobIndustryType();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getBankInfoUpdate() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getBankInfoUpdate();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function getOtpScreen() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->getOtpScreen();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function CompanySignup() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->CompanySignup();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function SingleWorkerSignup() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->SingleWorkerSignup();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function JobTypes() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->JobTypes();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function TopupGiverWallet() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->TopupGiverWallet();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function GiverWalletBalance() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->GiverWalletBalance();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function GetCompanyTipreceiver() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->GetCompanyTipreceiver();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function banksList() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->banksList();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function QRscanner() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->QRscanner();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function GiveTip() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->GiveTip();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function receiverTipsHistory() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->receiverTipsHistory();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function giverTipsHistory() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->giverTipsHistory();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function withdrawTipAmount() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->withdrawTipAmount();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function paymentResult() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->paymentResult();
		die;
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
	
	function forgotPassword() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->forgotPassword();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
	
	function profilePicture() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->profilePicture();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}
	
	function updateProfile() {
		$tiptap = new Tiptap();
		$rawData = $tiptap->updateProfile();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
		
	function loginWithSocial() {
		
		$tiptap = new Tiptap();
		$rawData = $tiptap->loginWithSocial();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
			
	function forgotPassOTP() {
		
		$tiptap = new Tiptap();
		$rawData = $tiptap->forgotPassOTP();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}	
	
	function giverreceiverProfileBanners() {
		
		$tiptap = new Tiptap();
		$rawData = $tiptap->giverreceiverProfileBanners();
		
		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('success' => 0);		
		} else {
			$statusCode = 200;
		}		
		$requestContentType = 'application/json';
		$this ->setHttpHeaders($requestContentType, $statusCode);		
		$result["output"] = $rawData;
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($result);
			echo $response;
		}
	}
	
		
	public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}
}
?>