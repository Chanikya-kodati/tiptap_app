<?php 
ob_start();
require_once('auth.php');
include "header.php"; 
$id= $_REQUEST['id'];
?>
        <!-- page content -->
		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Permissions</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="clearfix"></div>			  
               <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Page Permissions</h2>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Menu Name</th>
                          <th></th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
					    <?php
						$i = 1;					
						$banner_que = "SELECT * from alwann_usermenulist where adminmenuid!=0 AND userid=$id";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$banner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($banner_res as $banner_result)
						{					
							$mid = $banner_result['adminmenuid'];
							
							$banner_que1 = "SELECT * from alwann_adminmenu where id=$mid AND status=1";
							$database1 = new Database();
							$dbCon1 = $database1->getConnection();
							$stmt1 = $dbCon1->prepare($banner_que1);  
							$stmt1->execute();	
							$banner_result1 = $stmt1->fetch(PDO::FETCH_ASSOC);						
							
							if($banner_result['status'] == '1'){
								$status = '0';
							} else {
								$status = '1';
							}
						?>					  
							<tr>
							  <th scope="row"><?php echo $i; ?></th>
							  <td><b><?php echo $banner_result1['menuname'] ?></b></td>
							  <td></td>
							  <td>
								<a class="btn btn-info" href="#" id="status_<?php echo $banner_result['id'] ?>&status=<?php echo $status ?>">
									<?php if($banner_result['status']=='0'){ ?>
										<i style="color:red" class="fa fa-close"></i>
									<?php } else { ?>
										<i class="fa fa-check"></i>
									<?php } ?>
								</a>
							</td>
							</tr>							
							<?php					
							$banner_que2 = "SELECT * from alwann_usermenulist where menusubmenurel=$mid AND userid=$id";
							$database1 = new Database();
							$dbCon1 = $database1->getConnection();
							$stmt1 = $dbCon1->prepare($banner_que2);  
							$stmt1->execute();	
							$banner_res2 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
							foreach($banner_res2 as $banner_result2)
							{								
								$subid 			= 	$banner_result2['adminsubmenuid'];	

							$banner_que3 = "SELECT * from alwann_adminsubmenu where id=$subid";
							$database1 = new Database();
							$dbCon1 = $database1->getConnection();
							$stmt1 = $dbCon1->prepare($banner_que3);  
							$stmt1->execute();	
							$banner_result3 = $stmt1->fetch(PDO::FETCH_ASSOC);
																
								if($banner_result2['status'] == '1'){
									$status = '0';
								} else {
									$status = '1';
								}
							?>
								<!--<li><a href="<?php echo $banner_result3['link'] ?>"><?php echo $banner_result3['submenuname'] ?></a></li>-->
								<tr>
								  <th scope="row"></th>
								  <td><?php echo $banner_result3['submenuname'] ?></td>
								  <td></td>
								  <td>
									<a class="btn btn-info" href="#" id="status_<?php echo $banner_result2['id'] ?>&status=<?php echo $status ?>">
										<?php if($banner_result2['status']=='0'){ ?>
											<i style="color:red" class="fa fa-close"></i>
										<?php } else { ?>
											<i class="fa fa-check"></i>
										<?php } ?>
									</a>
								</td>
								</tr>
							<?php } ?>
                       <?php $i++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
				<div class="clearfix"></div>              
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<script>
$(function(){
	$("[id^='status_']").click(function(){
		var i=$(this).attr('id');		
		var arr=i.split("_");
		var i=arr[1];
		var arr2=i.split("&");
		var j=arr2[1];
		var r=confirm("Are you sure you want to Activate/Deactivate?");
		if(r==true)
		{   	 		
			$.ajax({
				type:"POST",
				data:"id="+i+"&"+j,
				url:"changeprivilage.php",
				success:function(data)
				{
					if(data=="done")
					{
						alert("Status changed Successfully");
						location.reload();
					}
				}
		  });
		} else {
			return false;
		}
	});
});
</script>
<?php include "footer.php" ?>
