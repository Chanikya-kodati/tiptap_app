<?php  
require_once('auth.php');
include "header.php"; 

if(isset($_POST['filter'])){
	$fromdate = $_POST['fromdate'];
	$todate = $_POST['todate'];	
} 
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Registered Company Tip Receivers</h3>
              </div>             
            </div>
			<form method="post">
			  <p>
				<div class="row">
					<div cla ss="col-md-1 col-sm-12 col-xs-12" style="float:right">
						<button type="submit" name="filter" class="btn btn-success"><i class="fa fa-search"></i> Filter</button>
						
						<a class="btn btn-success" href="companytipsreceived.php"><i class="fa fa-refresh"></i> Reset</a>
					</div>					
					<div style="float:right">
						<input name="todate" id="todate" type="text" class="myDD" placeholder="To date" value="" required />
						&nbsp;&nbsp;&nbsp;
						<input name="fromdate" id="fromdate" type="text" class="myDD" placeholder="From date" value="" required />
						&nbsp;&nbsp;&nbsp;
					</div>					
					
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
                            <th width="100" class="column-title">Sl. No </th>		
							<th width="200" class="column-title">Full Name</th>
							<th width="200" class="column-title">Mobile </th>
							<th width="200" class="column-title">User Type </th>
							<th width="200" class="column-title">Company </th>
							<th width="200" class="column-title">Registered Date </th>
                            <th width="200" style="text-align:center" class="column-title no-link last"><span class="nobr">Action</span></th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
						
						$var 		= ($fromdate);
						$date 		= str_replace('/', '-', $var);
						$fromdate1 	= date('Y-m-d', strtotime($date));
						
						$var1 		= ($todate);
						$date1 		= str_replace('/', '-', $var1);
						$todate1 	= date('Y-m-d', strtotime($date1));
						
						if(($fromdate1)!="1970-01-01" && ($todate1)!="1970-01-01"){
							$cond = " AND DATE(date) BETWEEN '$todate1' AND '$fromdate1'";
						} else {
							$cond = "";
						}
						
						$i = 1;
						$banner_que = "SELECT * from tiptap_customers where usertype=2 AND companyid=$companyid $cond ORDER BY id DESC";
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
							<td class=" "><?php echo $usertype; ?></td>	
							<td class=" "><?php echo $companyinfo['companyname']; ?></td>	
							<td class=" "><?php echo $banner_result['date']; ?></td>							
							<td style="text-align:center" class=" last">
							<a class="btn btn-info" href="viewcompanydesignerinfo.php?id=<?php echo $banner_result['id'] ?>">View info</a>&nbsp;
							<!--<a class="btn btn-warning" href="individualtipsreceived.php?id=<?php echo $banner_result['id'] ?>">Tips History</a>-->
							<!--<a class="btn btn-danger" href="#" id="delete_<?php echo $banner_result['id'] ?>"><i class="fa fa-trash"></i></a>&nbsp;
                            <a class="btn btn-info" href="#" id="status_<?php echo $banner_result['id'] ?>&status=<?php echo $status ?>">
							<?php if($banner_result['status']=='0'){ ?>
								<i class="fa fa-close"></i>
							<?php } else { ?>
								<i class="fa fa-check"></i>
							<?php } ?>
							</a>&nbsp;	-->						
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
  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function(){	
	$('#fromdate').datepicker({		
		/*beforeShowDay: function(date) {
		   var show = true;
		   if(date.getDay()==5||date.getDay()==6) show=false
		   return [show];
		},*/
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		/*minDate: '0y',
        maxDate: '+5y',*/
		
	}).attr('readonly', 'readonly');
	
	$('#todate').datepicker({		
		/*beforeShowDay: function(date) {
		   var show = true;
		   if(date.getDay()==5||date.getDay()==6) show=false
		   return [show];
		},*/
		dateFormat: 'dd/mm/yy',
		changeMonth: true,
		changeYear: true,
		/*minDate: '0y',
        maxDate: '+5y',*/
		
	}).attr('readonly', 'readonly');
	
	
});
</script>	
  
<?php include "footer.php" ?>
