<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

$branchid = $_SESSION["SESS_COMPANY_ID"];

if (isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
if (is_numeric($id) == true){
	try {

if(isset($_POST['submit']))
{
	$branchname = ($_POST['branchname']);		
	
	$login_query = "UPDATE tiptap_companybranch SET companybranchname='$branchname' WHERE id='$id'"; 
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
<?php
$banner_que = "SELECT * from tiptap_companybranch where id=$id";
$database1 = new Database();
$dbCon1 = $database1->getConnection();
$stmt1 = $dbCon1->prepare($banner_que);  
$stmt1->execute();	
$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Edit Branch</h3>
	  </div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Edit Branch</h2>                    
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br/>
			<form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Branch Name<span class="required">*</span>
				</label>                        
				<div class="col-md-9 col-sm-9 col-xs-12">
					<input type="text" name="branchname" id="branchname" required="required" value="<?php echo $about_res['companybranchname']; ?>" class="form-control" style="width: 780px;">
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