<?php 
require_once('auth.php');
include "header.php"; 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tip Given Users</h3>
              </div>             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                  
                  <div class="x_content"> 
                    <div class="table-responsive">
                      <table id="datatable" class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">      
                            <th width="100" class="column-title">Sl. No </th>		
							<th width="200" class="column-title">Full Name</th>
							<th width="200" class="column-title">Mobile </th>
							<!--<th width="200" class="column-title">User Type </th>
							<th width="200" class="column-title">Company </th>-->
							<th width="200" class="column-title">Balance(KD) </th>
							<th width="200" class="column-title">Latest Transaction Date </th>
                            <th width="200" style="text-align:center" class="column-title no-link last"><span class="nobr">Action</span></th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
						$i = 1;
						$banner_que = "SELECT * from tiptap_customers where 1=1 AND giverorreceiver=1 ORDER BY id DESC";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($menbanner_res as $banner_result)						
						{
							if($banner_result['status'] == '1'){
								$status = '0';
							} else {
								$status = '1';
							}
							
							if($banner_result['usertype'] == '1'){
								$usertype = 'Individual';
							} else {
								$usertype = 'Company';
							}
							$compid = $banner_result['companyid'];
							$companyinfo = getCompany($compid);
												
						?>
                          <tr class="even pointer">                            
                            <td class=" "><?php echo $i ?></td>							
							<td class=" "><?php echo $banner_result['fullname']; ?></td>							
							<td class=" "><?php echo $banner_result['mobile']; ?></td>	
							<!--<td class=" "><?php echo $usertype; ?></td>	
							<td class=" "><?php echo $companyinfo['companyname']; ?></td>-->
							<td class=" "><?php echo $banner_result['balance']; ?></td>	
							<td class=" "><?php echo $banner_result['date']; ?></td>	
							
							<td style="text-align:center" class=" last">
							<a class="btn btn-info" href="viewdesigner.php?id=<?php echo $banner_result['id'] ?>">View info</a>&nbsp; 
							<a class="btn btn-danger" href="#" id="delete_<?php echo $banner_result['id'] ?>"><i class="fa fa-trash"></i></a>&nbsp;
                            <a class="btn btn-info" href="#" id="status_<?php echo $banner_result['id'] ?>&status=<?php echo $status ?>">
							<?php if($banner_result['status']=='0'){ ?>
								<i class="fa fa-close"></i> Inactive
							<?php } else { ?>
								<i class="fa fa-check"></i> Active
							<?php } ?>
							</a>&nbsp;							
                            </td>
                          </tr>
                        <?php 
						$i++;
						}					
						?>                            
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<script>
$(function(){
	$("[id^='delete_']").click(function(){
     	var i=$(this).attr('id');		
   	 	var arr=i.split("_");
   	 	var i=arr[1];
   	 	var r=confirm("Are you sure?");
   	 	if(r==true)
   	 	{   	 		
   	 	 $.ajax({
			type:"POST",
			data:"id="+i,
			url:"deletecollection.php?type=customer",
			success:function(data)
			{
				if(data=="done")
				{
					alert("User deleted Successfully");
					location.reload();
				}
			}
		  });
		 }
		 else
		 {
			return false;
		 }
     });
});
$(function(){
	$("[id^='status_']").click(function(){
     	var i=$(this).attr('id');		
   	 	var arr=i.split("_");
   	 	var i=arr[1];
		var arr2=i.split("&");
		var j=arr2[1];
   	 	var r=confirm("Are you sure?");
   	 	if(r==true)
   	 	{   	 		
   	 	 $.ajax({
			type:"POST",
			data:"id="+i+"&"+j,
			url:"changestatus.php?type=customer",
			success:function(data)
			{
				if(data=="done")
				{
					alert("Status changed Successfully");
					location.reload();
				}
			}
		  });
		 }
		 else
		 {
			return false;
		 }
     });
});
</script>
       
<?php include "footer.php" ?>
