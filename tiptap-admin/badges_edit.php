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
	$pimage			= $_FILES['image']['name'];
	
	if($pimage!="")
	{
		$name1 = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
		$extension1 = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		$newfilename = 'ecommerce'. round(microtime(true));
		
		if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png")) {
			$basename1 = $newfilename .'.'. $extension1;
			$blocation1 = "uploads/banners/" . $basename1;
			$target_file1 = "../uploads/banners/" . $basename1;
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file1)) {	
								
				$login_query = "UPDATE tiptap_badges SET image='".$blocation1."' WHERE id=$id";
				$database1 = new Database();
				$dbCon1 = $database1->getConnection();
				$stmt1 = $dbCon1->prepare($login_query);  
				$stmt1->execute();
				$res11 = $stmt1->rowCount();	
			}
		}	
	} 
	
	if($res == 1 || $res11==1){
		header("location:viewbadges.php?msg=success");	
	} else {		
		header("location:viewbadges.php?msg=fail");	
	}	
}	
?>
<?php
	$banner_que = "SELECT * from tiptap_badges where id=$id";
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
                <h3>Edit Badge</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Badge</h2>             
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">	
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Badge <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" id="banner" class="form-control" style="padding: 0px; border-width: 0px;" accept="image/*">
						  <br>(Resolution: 350 X 500px)
						  <div class="control-group">
							<div class="controls">
								<div align="left"><br/>
								<?php if($about_res['image']!=""){ ?>
									<img src="../<?php echo $about_res['image'] ?>" width="250px" height="150px"/>
								<?php } ?>		
								</div>	
							</div>
						 </div>						  
                        </div>
                      </div>								 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="viewbadges.php" class="btn btn-primary">Cancel</a>
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