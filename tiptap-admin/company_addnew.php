<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

$randpass = randomPassword();

if(isset($_POST['submit']))
{
	$companyname 	= ($_POST['companyname']);		
	$mobile 		= ($_POST['mobile']);		
	$repname 		= ($_POST['repname']);		
	$password 		= (md5($randpass));		
	$secretcode 	= ($randpass);		
	$email 			= ($_POST['email']);

	$login_query = "INSERT INTO tiptap_companies (id, companyname, mobile, representativename, password, secretcode, email, status, date) VALUES ('', '$companyname', '$mobile', '$repname', '$password', '$secretcode', '$email', '1', NOW())"; 
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res = $stmt1->rowCount();	
	$insertid = $dbCon1->lastInsertId();						
	
	if($insertid!=""){					
		$mid = 	$admin_result['id'];			
		$usemenu_query = "INSERT INTO tiptap_adminuser (id, firstname, username, password, secretcode, email, userype, status, companyid) VALUES ('', '$companyname', '$email', '$password', '$secretcode', '$email', '2', '1', '$insertid')"; 
		$database1 = new Database();
		$dbCon1 = $database1->getConnection();
		$stmt1 = $dbCon1->prepare($usemenu_query);  
		$stmt1->execute();
	}	
				
	if($res == 1){
		
		$toemail = $email;	
		//$toemail = "chanikya.kodati@gmail.com";
		
		$mail->addAddress($toemail, $companyname);		
		$mail->isHTML(true);
		$mail->Subject = "Tip Tap - Admin Credentials for Company";	
		$mail->Body = '<html>
		<head>
		<meta charset="utf-8">
		<title>Tip Tap - Admin Credentials for Company</title>
		</head>
		<body style="margin: 0px;padding: 0px">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="padding: 25px;background:#eee ">
					<table cellpadding="0" cellspacing="0" border="0" style="background: #ffffff">
						<tr align="center">
							<td style="padding:10px 20px;"><div style="border-bottom:1px solid #d1b555;padding-bottom:15px;align:center "><img src="../img/logo.png" alt="Tip Tap" /></div></td>
						</tr>
						<tr>
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:20px;line-height: 25px;color: #000;border-collapse: collapse;padding: 15px;padding:10px 20px">Tip Tap - Admin Credentials for Company</td>
						</tr>
						<tr>
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px">
								Hello 
								<strong style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:18px;line-height: 25px;color: #ac5e2a;border-collapse: collapse;"></strong>

							</td>
						</tr>				
						<tr>		
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px">
								We have created Admin Credentials for your Company account. Below are the details
							</td>
						</tr>									
						<tr>		
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:14px;line-height:normal;color: #000;border-collapse: collapse;padding:10px 20px 10px 20px;">
								<table cellpadding="0" cellspacing="0" border="0" width="100%">
									<tr>
										<th align="left" style="border:1px solid #eee;padding:5px">Username</th>
										<td align="left" style="border:1px solid #eee;padding:5px">'.$email.'</td>
									</tr>
									<tr>
										<th align="left" style="border:1px solid #eee;padding:5px">Password</th>
										<td align="left" style="border:1px solid #eee;padding:5px">'.$secretcode.'</td>
									</tr>																			
								</table>
							</td>
						</tr>
						<tr>		
							<td style="-moz-hyphens: none;-webkit-text-size-adjust: 100%;mso-table-lspace: 0pt;mso-table-rspace: 0pt;word-break: break-word;-webkit-hyphens: none;-ms-text-size-adjust: 100%;hyphens: none;font-family:Open Sans,Arial,Helvetica,sans-serif;font-size:15px;line-height: 25px;color: #000;border-collapse: collapse;padding:10px 20px">
								Regards,<br>
								Tip Tap.
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</body>
		</html>';	
				
		if($mail->send()){
			//echo "<script>alert('e-Mail sent successfully!!')</script>";
			echo "<script>window.location='viewregcompanies.php'</script>";	
		} else {
			//echo "<script>alert('Failed sending e-Mail!!')</script>";
			echo "<script>window.location='viewregcompanies.php'</script>";
		}
					
		header("location:viewregcompanies.php?msg=success");
		
	} else {		
		header("location:viewregcompanies.php?msg=fail");			
	}
}	
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Add New Company</h3>
	  </div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Add New Company</h2>                    
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br/>
			<form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Industry type<span class="required">*</span>
				</label>                        
				<div class="col-md-3 col-sm-3 col-xs-12">
					<select name="industrytype" id="industrytype" required class="form-control" >
						<option value="">-Select Industry type-</option>	
						<?php
						$j = 6;					
						$banner_que = "SELECT * from tiptap_industrytype where 1=1 ORDER BY id ASC";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($menbanner_res as $banner_result)
						{
						?>
							<option value="<?php echo $banner_result['id'] ?>"><?php echo $banner_result['title'] ?></option>								
						<?php } ?>								
					</select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Company Name<span class="required">*</span>
				</label>                        
				<div class="col-md-4 col-sm-9 col-xs-12">
					<input type="text" name="companyname" id="companyname" required="required" class="form-control" >
				</div>
			  </div>
			  			  
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mobile<span class="required">*</span>
				</label>                        
				<div class="col-md-4 col-sm-9 col-xs-12">
					<input type="text" name="mobile" id="mobile" required="required" class="form-control" >
				</div>
			  </div>	
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Representative Name<span class="required">*</span>
				</label>                        
				<div class="col-md-4 col-sm-9 col-xs-12">
					<input type="text" name="repname" id="repname" required="required" class="form-control">
				</div>
			  </div>	
			   <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
				</label>                        
				<div class="col-md-4 col-sm-9 col-xs-12">
					<input type="email" name="email" id="email" required="required" class="form-control">
				</div>
			  </div>
				<!--<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="password" name="password" id="password" required="required" class="form-control" style="width: 780px;">
				</div>
			  </div>	
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirm Password<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="password" name="cpass" id="cpass" required="required" class="form-control" style="width: 780px;">
				</div>
			  </div>-->	
			 				  					
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <a href="viewregcompanies.php" class="btn btn-primary">Cancel</a>
				  <button type="submit" name="submit" class="btn btn-success">Submit</button>
				</div>
			  </div>
			</form>
		  </div>
		</div>
	  </div>
	</div>			
  </div>
</div>
<!-- /page content -->
<?php include "footer.php" ?>
