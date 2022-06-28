<?php 
require_once('auth.php');
include "header.php"; 
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Branches</h3>
              </div>             
            </div>
            <div class="clearfix"></div>
			<a align="right" href="branch_addnew.php"><button class="btn btn-success"><i class="fa fa-plus"></i> Add Branch</button></a>	
            <div class="row">
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                  
                  <div class="x_content"> 
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">    
                            <th width="100" class="column-title">Sl. No </th>
							<th width="300" class="column-title">Branchname</th>
                            <th width="200" style="text-align:center" class="column-title no-link last"><span class="nobr">Action</span></th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
						$i = 1;						
						$adminsub_que = "SELECT * from 	tiptap_companybranch where 1=1 ORDER BY id DESC";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($adminsub_que);  
						$stmt1->execute();	
						$adminsub_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($adminsub_res as $banner_result)
						{						
							if($banner_result['status'] == '1'){
								$status = '0';
							} else {
								$status = '1';
							}	 
						?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $i ?></td>						
							<td class=" "><?php echo $banner_result['companybranchname'] ?></td>		
                            <td style="text-align:center" class=" last">
							<a class="btn btn-info" href="branch_edit.php?id=<?php echo $banner_result['id'] ?>"><i class="fa fa-edit"></i></a>&nbsp; 
							<a class="btn btn-danger" href="#" id="delete_<?php echo $banner_result['id'] ?>"><i class="fa fa-trash"></i></a>&nbsp;			
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
			url:"deletecollection.php?type=companybranch",
			success:function(data)
			{				
				alert("Data deleted Successfully");
				location.reload();
				
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
			      	url:"changeuserstatus.php",
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
