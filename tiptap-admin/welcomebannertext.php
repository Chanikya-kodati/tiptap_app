<?php 
ob_start();
require_once('auth.php');
include "header.php"; 
	
if(isset($_POST['submit']))
{	
	$pimage		= $_FILES['image']['name'];
	$content	= $_POST['content'];
			
	if($pimage!="")
	{
		$name1 = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
		$extension1 = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		$newfilename = 'ecommerce'. round(microtime(true));
		
		if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png")) {
			$basename1 = $newfilename .'1.'. $extension1;
			$blocation1 = "uploads/banners/" . $basename1;
			$target_file1 = "../uploads/banners/" . $basename1;
			if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file1)) {	
				$login_query = "UPDATE tiptap_welcomecontent SET image='".$blocation1."', content='".$content."' WHERE id=1";
				$database1 = new Database();
				$dbCon1 = $database1->getConnection();
				$stmt1 = $dbCon1->prepare($login_query);  
				$stmt1->execute();
				$res11 = $stmt1->rowCount();	
			}
		}	
	} else {
		$login_query = "UPDATE tiptap_welcomecontent SET content='".$content."' WHERE id=1";
		$database1 = new Database();
		$dbCon1 = $database1->getConnection();
		$stmt1 = $dbCon1->prepare($login_query);  
		$stmt1->execute();
		$res11 = $stmt1->rowCount();	
	}
		
	if($res11 == 1){
		header("location:welcomebannertext.php?msg=success");
	} else {		
		header("location:welcomebannertext.php?msg=fail");
	}	
}	
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Welcome Banner</h3>
              </div>
            </div>
			<?php
				$banner_que = "SELECT * from tiptap_welcomecontent where id=1";
				$database1 = new Database();
				$dbCon1 = $database1->getConnection();
				$stmt1 = $dbCon1->prepare($banner_que);  
				$stmt1->execute();	
				$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
			?>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Welcome Banner</h2>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Welcome Content<span class="required">*</span>
                        </label>                        
						<div class="col-md-7 col-sm-9 col-xs-12">							
							<textarea name="content" id="content" class="form-control" ><?php echo $about_res['content'] ?></textarea>
						</div>
                     </div>						 
					 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" id="banner" value="" class="form-control" style="padding: 0px; border-width: 0px;" accept="image/*">
						  <br>(Resolution: 410 X 345px)
						  <div class="control-group">
							<div class="controls">
								<div align="left"><br/>
									<img src="../<?php echo $about_res['image'] ?>" width="250px" height="150px"/>		
								</div>	
							</div>
						  </div>
                        </div>
                      </div>			  				  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="welcomebannertext.php" class="btn btn-primary">Cancel</a>
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
<script>	
	CKEDITOR.replace('content');		
</script>		
<?php include "footer.php" ?>
