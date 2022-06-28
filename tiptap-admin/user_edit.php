<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

if (isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
if (is_numeric($id) == true){
	try {

if(isset($_POST['submit']))
{
	$fname 		= ($_POST['fname']);		
	$mobile 	= ($_POST['mobile']);
	$email 		= ($_POST['email']);	
	$branchid 	= ($_POST['branchid']);
	$roleid 	= ($_POST['roleid']);

	$login_query = "UPDATE tiptap_customers SET fullname='$fname', mobile='$mobile', email='$email', branchid='$branchid', roleid='$roleid' WHERE id=$id"; 
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res = $stmt1->rowCount();	
	$insertid = $dbCon1->lastInsertId();						
				
	if($res == 1){
		header("location:users.php?msg=success");			
	} else {		
		header("location:users.php?msg=fail");			
	}	
}	
?>
<?php
$banner_que = "SELECT * from tiptap_customers where id=$id";
$database1 = new Database();
$dbCon1 = $database1->getConnection();
$stmt1 = $dbCon1->prepare($banner_que);  
$stmt1->execute();	
$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
$bbid =  $about_res['branchid'];
$roleid =  $about_res['roleid'];

?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Edit Employee</h3>
	  </div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Edit Employee</h2>                    
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br/>
			<form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Name<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" name="fname" id="fname" required="required" class="form-control" value="<?php echo $about_res['fullname']; ?>" style="width: 780px;">
				</div>
			  </div>		 		
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="email" name="email" id="email" required="required" class="form-control" value="<?php echo $about_res['email']; ?>" style="width: 780px;">
				</div>
			  </div>				  					
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" name="mobile" id="mobile" required="required" class="form-control" value="<?php echo $about_res['mobile']; ?>" style="width: 780px;">
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
							$dbranchid = $banner_result['id'];
						?>
							<option <?php if($dbranchid==$bbid){ echo "selected"; } ?> value="<?php echo $banner_result['id'] ?>"><?php echo $banner_result['companybranchname'] ?></option>								
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
							$dbranchid = $banner_result['id'];
						?>
							<option <?php if($dbranchid==$roleid){ echo "selected"; } ?> value="<?php echo $banner_result['id'] ?>"><?php echo $banner_result['title'] ?></option>								
						<?php } ?>								
					</select>
				</div>
			  </div>			  
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <a href="users.php" class="btn btn-primary"> Cancel</a>
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
