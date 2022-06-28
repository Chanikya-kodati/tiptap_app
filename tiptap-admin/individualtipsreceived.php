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
                <h3>Payment Transactions</h3>
              </div>             
            </div>
			<form method="post">
			  <p>
				<div class="row">
					<div cla ss="col-md-1 col-sm-12 col-xs-12" style="float:right">
						<button type="submit" name="filter" class="btn btn-success"><i class="fa fa-search"></i> Filter</button>
						
						<a class="btn btn-success" href="individualtipsreceived.php"><i class="fa fa-refresh"></i> Reset</a>
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
							<th width="300" class="column-title">Paid By</th>			
							<th width="300" class="column-title">Email</th>			
							<th width="300" class="column-title">Mobile</th>			
							<th width="300" class="column-title">Amount</th>			
							<th width="300" class="column-title">Payment ID</th>		
							<th width="300" class="column-title">Order ID</th>
							<th width="300" class="column-title">Transaction Status</th>
							<th width="300" class="column-title">Paid On </th>                   
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
						
											
						$i = 1;
						if(($fromdate1)!="1970-01-01" && ($todate1)!="1970-01-01"){
							$cond = " AND DATE(PaidOn) BETWEEN '$todate1' AND '$fromdate1'";
						} else {
							$cond = "";
						}
						$banner_que = "SELECT * from tiptap_payments where 1=1 $cond ORDER BY id DESC";
						$database1 = new Database();
						$dbCon1 = $database1->getConnection();
						$stmt1 = $dbCon1->prepare($banner_que);  
						$stmt1->execute();	
						$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
						foreach($menbanner_res as $banner_result)						
						{
							$grandtotal = $banner_result['amountpaid']+$banner_result['cartcount'];
						?>
                          <tr class="even pointer">  
                            <td class=" "><?php echo $i ?></td>	<td class=" "><?php echo $banner_result['paidname']; ?></td>	
							<td class=" "><?php echo $banner_result['email']; ?></td>
							<td class=" "><?php echo $banner_result['mobile']; ?></td>
							<td class=" "><?php echo number_format($banner_result['amountpaid'],3); ?> KWD</td>							
							<td class=" "><?php echo $banner_result['PaymentId']; ?></td>
							<td class=" "><?php echo $banner_result['OrderID'] ?></td>
							<td class=" "><?php 
							if($banner_result['Status']==1){ echo "Success"; } else { echo "Failed"; } ?></td>
							<td class=" "><?php echo $banner_result['PaidOn'] ?></td>
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
