<?php  
require_once('auth.php');
include "header.php"; 
include "pushNotification.php";
?>
<?php 
if(isset($_POST['submit']))
{			
	$categoryname = $_POST['categoryname'];		
	$menu = $_POST['menu'];		
			
	$login_query = "INSERT INTO tiptap_notifications (id, giverorreceiver, message, date) VALUES ('', '$menu', '$categoryname', NOW())";
	$database0 = new Database();
	$dbCon0 = $database0->getConnection();
	$stmt0 = $dbCon0->prepare($login_query);  
	$stmt0->execute();	
	$res = $stmt0->rowCount();
	$lastinserid= $dbCon0->lastInsertId();
	
	
	$adminsub_que = "SELECT  DISTINCT(deviceid),type FROM tiptap_devicetokens WHERE 1=1";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($adminsub_que);  
	$stmt1->execute();	
	$adminsub_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
	foreach($adminsub_res as $row2)
	{						
		$devicetoken	= 	$row2['deviceid'];
		$type			= 	$row2['type'];
		$message		= 	$categoryname;
		
		$login_query = "INSERT INTO tiptap_notificationmessages (id, notificationid, devicetoken, message, date, type) VALUES ('','$lastinserid','$devicetoken','$categoryname', NOW(),'$type')";
		$database0 = new Database();
		$dbCon0 = $database0->getConnection();
		$stmt0 = $dbCon0->prepare($login_query);  
		$stmt0->execute();	
		$res = $stmt0->rowCount();	
		
	}			
	if($res == 1){
		header("location:viewallnotifications.php?msg=success");		
	} else {		
		header("location:viewallnotifications.php?msg=fail");		
	}	
}	
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add New Notification</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Notification</h2>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Choose Giver/Receiver <span class="required">*</span>
                        </label>                        
						<div class="col-md-3 col-sm-3 col-xs-12">
							<select name="menu" id="menu" required class="form-control" >
								<option value="">-choose-</option>
								<option value="1">Giver</option>
								<option value="2">Receiver</option>
							</select>
						</div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Message <span class="required">*</span>
                        </label>                        
						<div class="col-md-9 col-sm-9 col-xs-12">							
							<textarea required class="form-control" name="categoryname" id="categoryname" rows="4" style="width:900px"  placeholder=""></textarea>
						</div>
                      </div>										  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="viewallnotifications.php" class="btn btn-primary">Cancel</a>
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
