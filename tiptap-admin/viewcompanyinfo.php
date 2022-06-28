<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

//Get the current path
$url = $_SERVER['REQUEST_URI']; 
$parts = explode('/',$url);
$currentpath = $_SERVER['SERVER_NAME'];
for ($i = 0; $i < count($parts) - 2; $i++) {
 $currentpath .= $parts[$i] . "/";
}
$schema = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
$urlpath = $schema.$currentpath;

if (isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
if (is_numeric($id) == true){
	try {

$companyinfo = getCompany($id);	
$industype	 = getIndustryType($companyinfo['industrytype']); 

if(isset($_POST['approve'])){
	
	$login_query = "UPDATE tiptap_companies SET status=1 WHERE id='$id'"; 
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res = $stmt1->rowCount();
	
		$toemail 	 = $companyinfo['email'];	
		$companyname = $companyinfo['companyname'];	
		$secretcode  = $companyinfo['secretcode'];	
		
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
										<td align="left" style="border:1px solid #eee;padding:5px">'.$toemail.'</td>
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
				
		$mail->send();

	if($res==1){
		echo "<script>alert('Approved successfully!')</script>";
		echo "<script>window.location='viewcompanyinfo.php?id=$id'</script>";
		
	} else {
		echo "<script>alert('Something went wrong!')</script>";
		echo "<script>window.location='viewcompanyinfo.php?id=$id'</script>";
	} 
	
}

if(isset($_POST['decline'])){
	
	$login_query = "UPDATE tiptap_companies SET status=2 WHERE id='$id'"; 
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res = $stmt1->rowCount();

	if($res==1){
		echo "<script>alert('Declined successfully!')</script>";
		echo "<script>window.location='viewcompanyinfo.php?id=$id'</script>";
		
	} else {
		echo "<script>alert('Something went wrong!')</script>";
		echo "<script>window.location='viewcompanyinfo.php?id=$id'</script>";
	} 
	
}

?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Company Profile</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Company Information</h2>
                    <div class="clearfix"></div>					
                  </div>				  
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Company Name<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $companyinfo['companyname'] ?></p>
						</div>
                      </div>						  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Industry Type<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $industype['title'] ?></p>
						</div>
                      </div>						  
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No of Employees<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo getEmpCount($id); ?></p>
						</div>
                      </div>						  
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No of Branches<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo getBranchCount($id); ?></p>
						</div>
                      </div>						  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Representative Name<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $companyinfo['representativename'] ?></p>
						</div>
                      </div>						  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $companyinfo['email'] ?></p>
						</div>
                      </div>						  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mobile Number<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $companyinfo['mobile'] ?></p>
						</div>
                      </div>					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Registered Date<span class="required">:</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<p style="margin-top:8px"><?php echo $companyinfo['date'] ?></p>
						</div>
                      </div>                     
					  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="viewregcompanies.php" class="btn btn-primary">Back</a>&nbsp;
						  <?php if($companyinfo['status']==0){ ?>
								
								<button type="submit" name="approve" class="btn btn-success">Approve</button>
								
								<button type="submit" name="decline" class="btn btn-danger">Decline</button>
															
						  <?php } ?> 
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>			
          </div>
        </div>
        <!-- /page content -->
		
<input type="hidden" name="designerid" id="designerid" value="<?php echo $id; ?>">

<?php include "footer.php" ?>

<?php } catch(PDOException $e){		  
		error_log('PDOException - ' . $e->getMessage(), 0);		  
		http_response_code(500);
		die('Error establishing connection with database');
	} 
		} else {    
		http_response_code(400);
		die('Error processing bad or malformed request');
   }
}
?>
