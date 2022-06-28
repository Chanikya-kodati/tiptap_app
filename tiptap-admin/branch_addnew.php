<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

$companyid = $_SESSION["SESS_COMPANY_ID"];

if(isset($_POST['submit']))
{
	$branchname = ($_POST['branchname']);		
	
	$login_query = "INSERT INTO tiptap_companybranch (id, companyid, companybranchname, status) VALUES ('', '$companyid', '$branchname', '1')"; 
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res = $stmt1->rowCount();	
	$insertid = $dbCon1->lastInsertId();
						
	if($res == 1){
		header("location:branch.php?msg=success");			
	} else {		
		header("location:branch.php?msg=fail");			
	}		
}	
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Add New Branch</h3>
	  </div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Add New Branch</h2>                    
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br/>
			<form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch Name<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" name="branchname" id="branchname" required="required" class="form-control" style="width: 780px;">
				</div>
			  </div>	  					
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				  <a href="branch.php"><button type="cancel" class="btn btn-primary">Cancel</button></a>
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
