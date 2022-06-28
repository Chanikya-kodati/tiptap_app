<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

if(isset($_POST['submit']))
{			
	$amount 	= filter_var($_POST['amount'], FILTER_SANITIZE_STRING);
	$amountar 	= filter_var($_POST['amountar'], FILTER_SANITIZE_STRING);
		
	$login_query = "INSERT INTO tiptap_jobtypes (id, title, titlear, status) VALUES ('', '$amount', '$amountar', 1)";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res11 = $stmt1->rowCount();
	
	if($res11 == 1){
		header("location:jobtypes.php?msg=success");		
	} else {		
		header("location:jobtypes.php?msg=fail");		
	}	
}	
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Job Type</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Job Type</h2>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Title<span class="required">*</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<input type="text" name="amount" id="amount" required="required" class="form-control">
						</div>
                      </div>		  
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Title (Arabic)<span class="required">*</span>
                        </label>                        
						<div class="col-md-7 col-sm-7 col-xs-12">
							<input type="text" name="amountar" id="amountar" required="required" class="form-control">
						</div>
                      </div>		  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="jobtypes.php"><button type="cancel" class="btn btn-primary">Cancel</button></a>
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
