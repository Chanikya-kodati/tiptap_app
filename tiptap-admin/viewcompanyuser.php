<?php 
require_once('auth.php');
include "header.php"; 

if (isset($_REQUEST['id'])){
	$companyid = $_REQUEST['id'];
if (is_numeric($companyid) == true){
	try {
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Employees</h3>
	  </div>             
	</div>
	<div class="clearfix"></div>			
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
					<th width="300" class="column-title">Username</th> 
					<th width="300" class="column-title">Email </th>
					<th width="300" class="column-title">Mobile </th>
					<th width="200" style="text-align:center" class="column-title no-link last"><span class="nobr">Action</span></th>
					<th class="bulk-actions" colspan="7">
					  <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
					</th>
				  </tr>
				</thead>
				<tbody>
				<?php
				$i = 1;						
				$adminsub_que = "SELECT * from tiptap_customers where companyid='$companyid' ORDER BY id DESC";
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
					<td class=" "><?php echo ucfirst($banner_result['fullname']) ?></td>
					<td class=" "><?php echo $banner_result['email'] ?></td>
					<td class=" "><?php echo $banner_result['mobile'] ?></td>
					<td style="text-align:center" class=" last">
						<a class="btn btn-info" href="viewtipshistory.php?id=<?php echo $banner_result['id'] ?>">View Tips Received</a>&nbsp;
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
			url:"deletecollection.php?type=users",
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
			url:"changestatus.php?type=users",
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