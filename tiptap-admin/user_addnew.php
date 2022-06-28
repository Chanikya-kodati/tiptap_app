<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

function random_strings($length_of_string) {       
    
    return substr(md5(time()), 0, $length_of_string); 
} 

$passcode =  random_strings(6);
$secpasscode = md5($passcode);

if(isset($_POST['submit']))
{
	$fname 		= ($_POST['fname']);		
	$mobile 	= ($_POST['mobile']);
	$email 		= ($_POST['email']);	
	$branchid 	= ($_POST['branchid']);
	$roleid 	= ($_POST['roleid']);
	
	$checkmob_querymob 	= "SELECT * FROM tiptap_customers WHERE mobile='$mobile'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($checkmob_querymob);  
	$stmt1->execute();
	$userdetailsmob = $stmt1->rowCount();	
		
	if($userdetailsmob !=0){
		
		echo "<script>alert('Mobile number already exists!')</script>";
		echo "<script>window.location.href='users.php?msg=exist'</script>";
		exit;			
	} else {
		$login_query = "INSERT INTO tiptap_customers (id, fullname, mobile, email, companyid, branchid, roleid, password, secretcode, tipcode, status, date) VALUES ('', '$fname', '$mobile', '$email', '$companyid', '$branchid', '$roleid', '$secpasscode', '$passcode', '$passcode', '1', NOW())"; 
		$database1 = new Database();
		$dbCon1 = $database1->getConnection();
		$stmt1 = $dbCon1->prepare($login_query);  
		$stmt1->execute();
		$res = $stmt1->rowCount();	
		$insertid = $dbCon1->lastInsertId();		
	}						
				
	if($res == 1){
		header("location:users.php?msg=success");			
	} else {		
		header("location:users.php?msg=fail");			
	}	
}	
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Add New Employee</h3>
	  </div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Add New Employee</h2>                    
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br/>
			<form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Name<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" name="fname" id="fname" required="required" class="form-control" style="width: 780px;">
				</div>
			  </div>		 		
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="email" name="email" id="email" required="required" class="form-control" style="width: 780px;">
				</div>
			  </div>				  					
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" name="mobile" id="mobile" required="required" class="form-control" style="width: 780px;">
				</div>
			  </div>	
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch<span class="required">*</span>
				</label>                        
				<div class="col-md-3 col-sm-3 col-xs-12">
					<select name="branchid" id="branchid" required class="form-control" >
						<option value="">-Select Branch-</option>	
						<?php												
						$banner_que = "SELECT * from tiptap_companybranch where companyid=$companyid";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($menbanner_res as $banner_result)
						{
						?>
							<option value="<?php echo $banner_result['id'] ?>"><?php echo $banner_result['companybranchname'] ?></option>								
						<?php } ?>								
					</select>
				</div>
			  </div>			  
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Role<span class="required">*</span>
				</label>                        
				<div class="col-md-3 col-sm-3 col-xs-12">
					<select name="roleid" id="roleid" required class="form-control" >
						<option value="">-Select Role-</option>	
						<?php												
						$banner_que = "SELECT * from tiptap_roles where companyid=$companyid";
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
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <a href="users.php"><button type="cancel" class="btn btn-primary">Cancel</button></a>
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
