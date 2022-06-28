<?php 
require_once('auth.php');
include "header.php";
 
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>Received Tips</h3>
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
					<th width="300" class="column-title">Paid By</th>			
					<th width="300" class="column-title">Amount</th>			
					<th width="300" class="column-title">Payment ID</th>	
					<th width="300" class="column-title">Transaction Status</th>
					<th width="300" class="column-title">Paid On </th>                   
				  </tr>
				</thead>
				<tbody>
				<?php
				$i = 1;
				$banner_que = "SELECT * from tiptap_payments where 1=1 ORDER BY id DESC";
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
					<td class=" "><?php echo number_format($banner_result['amountpaid'],3); ?> KWD</td>							
					<td class=" "><?php echo $banner_result['PaymentId']; ?></td>
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
    
<?php include "footer.php" ?>
