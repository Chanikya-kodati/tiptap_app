<?php 
ob_start();
require_once('auth.php');
include "header.php"; 
?>
<?php
$id = $_REQUEST['id'];
if(isset($_POST['submit']))
{			
	$title 	= $_POST['title'];		
	$login_query = "UPDATE tiptap_adminmenu SET menuname='$title' WHERE id='$id'";
	$database = new Database();
	$dbCon = $database->getConnection();
	$stmt = $dbCon->prepare($login_query);  
	$stmt->execute();
	$count = $stmt->rowCount();
		
	if($count == 1){
		header("location:adminmenus.php?msg=success");		
	} else {		
		header("location:adminmenus.php?msg=fail");		
	}	
}	
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Admin Menu</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Admin Menu</h2>                    
                    <div class="clearfix"></div>
                  </div>
				  <?php										
					$about_query = "SELECT * from tiptap_adminmenu where id=$id";
					$database1 = new Database();
					$dbCon1 = $database1->getConnection();
					$stmt1 = $dbCon1->prepare($about_query);  
					$stmt1->execute();	
					$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
				  ?>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Admin Menu Name<span class="required">*</span>
                        </label>                        
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input type="text" name="title" id="title" required="required" value="<?php echo $about_res['menuname'] ?>" class="form-control" style="width: 780px;">
						</div>
                      </div>						  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="adminmenus.php" class="btn btn-primary">Cancel</a>
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
