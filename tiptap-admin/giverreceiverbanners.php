<?php 
ob_start();
require_once('auth.php');
include "header.php"; 

if(isset($_POST['submit']))
{			
	$pimage		= $_FILES['image']['name'];
	$bimage		= $_FILES['bannerimage']['name'];
		
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
				$login_query = "UPDATE tiptap_giverreceiverbanners SET giverbanner='$blocation1' WHERE id=1";
				$database1 = new Database();
				$dbCon1 = $database1->getConnection();
				$stmt1 = $dbCon1->prepare($login_query);  
				$stmt1->execute();
				$res11 = $stmt1->rowCount();	
			}
		}
	} 
	
	if($bimage!="")
	{			
		$name1 = pathinfo($_FILES['bannerimage']['name'], PATHINFO_FILENAME);
		$extension1 = pathinfo($_FILES['bannerimage']['name'], PATHINFO_EXTENSION);
		$ext = strtolower(pathinfo($_FILES['bannerimage']['name'], PATHINFO_EXTENSION));
		$newfilename = 'ecommerce1'. round(microtime(true));
		if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png")) {
			$basename1 = $newfilename .'.'. $extension1;
			$blocation1 = "uploads/banners/" . $basename1;
			$target_file1 = "../uploads/banners/" . $basename1;
			if (move_uploaded_file($_FILES['bannerimage']['tmp_name'], $target_file1)) {	
				$login_query = "UPDATE tiptap_giverreceiverbanners SET receiverbanner='$blocation1' WHERE id=1";
				$database1 = new Database();
				$dbCon1 = $database1->getConnection();
				$stmt1 = $dbCon1->prepare($login_query);  
				$stmt1->execute();
				$res1 = $stmt1->rowCount();	
			}
		}
	} 
			
		
	if($res1 == 1|| $res11 == 1){
		header("location:giverreceiverbanners.php?msg=success");		
	} else {		
		header("location:giverreceiverbanners.php?msg=fail");		
	}	
}	
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Giver & Receiver Banners</h3>
	  </div>
	<?php
		$banner_que = "SELECT * from tiptap_giverreceiverbanners where id=1";
		$database1 = new Database();
		$dbCon1 = $database1->getConnection();
		$stmt1 = $dbCon1->prepare($banner_que);  
		$stmt1->execute();	
		$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
	?>
	</div>
	<div class="clearfix"></div>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		  <div class="x_title">
			<h2>Giver & Receiver Banners</h2>                    
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br/>
			<form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">					  
			 <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Giver Banner <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="file" name="bannerimage" id="bannerimage" accept="image/*"  class="form-control" style="padding: 0px; border-width: 0px;">
				  <br>(Resolution: 500 X 500px)
				  <div class="control-group">					
					<div class="controls">
						<div align="left"><br/>
						<?php if($about_res['receiverbanner']!=""){ ?>
							<img src="../<?php echo $about_res['receiverbanner'] ?>" width="250px" height="250px"/>
						<?php } ?>
								
						</div>	
					</div>
				</div>
				</div>
			  </div>									  
			  <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Receiver Banner <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="file" name="image" id="image" accept="image/*"  class="form-control" style="padding: 0px; border-width: 0px;">
				  <br>(Resolution: 500 X 500px)
				  <div class="control-group">					
					<div class="controls">
						<div align="left"><br/>
						<?php if($about_res['giverbanner']!=""){ ?>
							<img src="../<?php echo $about_res['giverbanner'] ?>" width="250px" height="250px"/>
						<?php } ?>	
						</div>	
					</div>
				</div>
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
