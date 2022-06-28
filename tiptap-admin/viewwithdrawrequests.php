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
                <h3>Tip withdraw requests</h3>
              </div>             
            </div>

            <div class="clearfix"></div>
			<form method="post">
			<p>
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12" style="float:right">
						<button type="submit" name="filter" class="btn btn-success"><i class="fa fa-search"></i> Filter</button>
						
						<a class="btn btn-success" href="viewwithdrawrequests.php"><i class="fa fa-refresh"></i> Reset</a>
					</div>
										
					<div class="col-md-2 col-sm-12 col-xs-12"  style="float:right">
						<select name="filterval" id="filterval" required="" class="form-control">
							<option value="">-All-</option>	
							<option value="1">Approved</option>
							<option value="2">Declined</option>				
						</select>
					</div>					
				</div>
			</p>
			</form>
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
							<th width="100" class="column-title">User ID </th>
							<th width="300" class="column-title">Requested By</th>			
							<th width="300" class="column-title">Email</th>			
							<th width="300" class="column-title">Mobile</th>			
							<th width="300" class="column-title">Amount</th>
							<th width="300" class="column-title">Amount after Service charge</th>
							
							<th width="300" class="column-title">Transaction number</th>
							
							<th width="150" class="column-title">Status</th>			
							<th width="200" style="text-align:center" class="column-title no-link last"><span class="nobr">Action</span></th>
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
						$banner_que = "SELECT * from tiptap_tipswithdraw where 1=1 $cond ORDER BY id DESC";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($menbanner_res as $banner_result)						
						{
							$receiverinfo = getCustomerInfo($banner_result['receiverid']);
						?>
                          <tr class="even pointer">  
                            <td class=" "><?php echo $i ?></td>	
							<td class=" "><?php echo $banner_result['id']; ?></td>	
							<td class=" "><?php echo $receiverinfo['fullname']; ?></td>	
							<td class=" "><?php echo $receiverinfo['email']; ?></td>
							<td class=" "><?php echo $receiverinfo['mobile']; ?></td>
							<td class=" "><?php echo number_format($banner_result['amountvalue'],3); ?> KWD</td>	
							<td class=" "><?php echo number_format($banner_result['finalamoutaftercommission'],3); ?> KWD</td>	
							<td class=" "><input type="text" name="transactionnum" id="transactionnum<?php echo $banner_result['id'] ?>" value="<?php echo $banner_result['transactionnumber'] ?>" class="form-control" ></td>
							
							<td class=" "> <?php if($banner_result['transactionnumber']!="0" || $banner_result['transactionnumber']!="0"){ echo "Completed"; } else { echo ""; } ?> </td>					
							<td style="text-align:center" class=" last">
							<a disabled="disabled" class="btn btn-warning" href="#" id="delete_<?php echo $banner_result['id'] ?>">Confirm</a>&nbsp;		
                            </td>
                          </tr>
						  <script>
						    $("#transactionnum<?php echo $banner_result['id'] ?>").on('input change', function () {				
								if ($("#transactionnum<?php echo $banner_result['id'] ?>").val() != '') {
									
									$("#delete_<?php echo $banner_result['id'] ?>").removeAttr('disabled');
									
									$("#delete_<?php echo $banner_result['id'] ?>").addClass('btn-info').removeClass('btn-warning');
								} else {
									$("#delete_<?php echo $banner_result['id'] ?>").attr('disabled','disabled');
									
									$("#delete_<?php echo $banner_result['id'] ?>").addClass('btn-warning').removeClass('btn-info');
								}
							});
						  </script>
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
		var tranval = $("#transactionnum"+i).val();   	 	   	 		
		$.ajax({
		type:"POST",
		data:"id="+i,
		url:"updatewithdrawreq.php?type=trans&tranval="+tranval,
		success:function(data)
		{
			if(data=="done")
			{
				alert("Data updated Successfully");
				location.reload();
			}
		}
		});
		 
	});
});

</script>		
<?php include "footer.php" ?>
