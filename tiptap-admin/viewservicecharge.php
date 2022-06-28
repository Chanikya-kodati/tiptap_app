<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

if(isset($_POST['submit']))
{			
	$amount 	= filter_var($_POST['amount'], FILTER_SANITIZE_STRING);		
	
	$login_query = "UPDATE tiptap_servicecharge SET amount='$amount' WHERE id='1'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($login_query);  
	$stmt1->execute();
	$res11 = $stmt1->rowCount();
		
	if($res11 == 1){
		header("location:viewservicecharge.php?msg=success");		
	} else {		
		header("location:viewservicecharge.php?msg=fail");		
	}	
}	
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Service Charge</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Service Charge</h2>                    
                    <div class="clearfix"></div>
                  </div>
				  <?php
					$banner_que = "SELECT * from tiptap_servicecharge where id=1";
					$database1 = new Database();
					$dbCon1 = $database1->getConnection();
					$stmt1 = $dbCon1->prepare($banner_que);  
					$stmt1->execute();	
					$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
				  ?>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Amount<span class="required">*</span>
                        </label>                        
						<div class="col-md-1 col-sm-7 col-xs-12">
							<input type="text" name="amount" id="amount" required="required" value="<?php echo $about_res['amount'] ?>" class="form-control" > 
						</div>
						<div class="col-md-1 col-sm-7 col-xs-12">
							<p style="margin-top:10px;"> % per KD </p>
						</div>
                      </div>						  
                      <div class="ln_solid"></div>
                      <div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">					  
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
