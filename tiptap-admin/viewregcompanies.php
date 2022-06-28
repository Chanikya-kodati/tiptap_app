<?php 
require_once('auth.php');
include "header.php"; 

if(isset($_POST['filter'])){
	$filterval = $_POST['filterval'];
}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Registered Companies</h3>
              </div>             
            </div>
            <div class="clearfix"></div>
				<a align="right" href="company_addnew.php"><button class="btn btn-success"><i class="fa fa-plus"></i> Add Company</button></a>
            <div class="clearfix"></div>
			<form method="post">
			<p>
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12" style="float:right">
						<button type="submit" name="filter" class="btn btn-success"><i class="fa fa-search"></i> Filter</button>
						
						<a class="btn btn-success" href="viewregcompanies.php"><i class="fa fa-refresh"></i> Reset</a>
					</div>
										
					<div class="col-md-2 col-sm-12 col-xs-12"  style="float:right">
						<select name="filterval" id="filterval" required="" class="form-control">
							<option value="">-All-</option>	
							<option value="1">Approved</option>
							<option value="2">Declined</option>	
							<option value="0">Waiting for Approval</option>
						</select>
					</div>					
				</div>
			</p>
			</form>
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
                            <th width="50" class="column-title">Sl. No </th>
							<th width="250" class="column-title">Company Name</th> 
							<th width="150" class="column-title">Industry Type</th> 
							<th width="100" class="column-title">Branches</th> 
							<th width="100" class="column-title">Employees </th> 
							<th width="150" class="column-title">Total Received (KD)</th> 
							<!--<th width="100" class="column-title">Mobile </th>
							<th width="150" class="column-title">Registered Date </th>-->
                            <th width="50" class="column-title">Status </th>
                            <th width="250" style="text-align:center" class="column-title no-link last"><span class="nobr">Action</span></th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
						$i = 1;
						if(isset($filterval)!=""){
							$cond = " AND status='$filterval'";
						} else {
							$cond = "";
						}
						
						$banner_que = "SELECT * from tiptap_companies where 1=1 $cond ORDER BY id DESC";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($menbanner_res as $banner_result)						
						{
							if($banner_result['status'] == '1'){
								$status = 'Approved';
								$color  = "green";
							} else if($banner_result['status'] == '2'){
								$status = 'Declined';
								$color  = "red";
							} else {
								$status = 'Waiting for Approval';
								$color  = "orange";
							}
							$industype	 = getIndustryType($banner_result['industrytype']); 
							$companyid = $banner_result['id'];
						?>
                          <tr class="even pointer">                            
                            <td class=" "><?php echo $i ?></td>
							<td class=" "><?php echo $banner_result['companyname']; ?></td>		
							<td class=" "><?php echo $industype['title']; ?></td>	
							<td class=" "><?php echo getBranchCount($companyid); ?></td>	
							<td class=" "><?php echo getEmpCount($companyid); ?></td>	
							<td class=" ">123.000</td>							
							<!--<td class=" "><?php echo $banner_result['mobile'] ?></td>	
							<td class=" "><?php echo $banner_result['date'] ?></td>	-->
							<td class=" " style="color:<?php echo $color; ?>;font-weight:bold"><?php echo $status; ?></td>	
							<td style="text-align:center" class=" last">
							<a class="btn btn-warning" href="viewcompanyinfo.php?id=<?php echo $banner_result['id'] ?>">View info</a>&nbsp;
							<a class="btn btn-info" href="viewcompanyuser.php?id=<?php echo $banner_result['id'] ?>">View Employees</a>&nbsp; 
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
			url:"deletecollection.php?type=company",
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
			url:"changestatus.php?type=company",
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
