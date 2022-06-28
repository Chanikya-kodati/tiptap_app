<?php 
require_once('auth.php');
include "header.php"; 
?>
<style>
.greenew {
    color: #439AA2;
}
</style>
<!-- page content -->
<div class="right_col" role="main">
<!-- top tiles -->
<div class="row tile_count">
	<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
	<?php 
	$banner_que = "SELECT count(*) as designercount from tiptap_customers where status=1 AND companyid=$companyid";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();
	$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
		
		
	$companyusers = array();	
	$getcustid_que = "SELECT * from tiptap_customers where companyid=$companyid";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($getcustid_que);  
	$stmt1->execute();	
	$custid_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
	foreach($custid_res as $custid_result)			
	{	
		$empid[] = $custid_result['id'];
		
	}
	$companyempids = implode(",",$empid);
		
	?>
	  <span class="count_top"><i class="fa fa-list"></i> My Employees</span>
	  <div class="count greenew"><?php echo $about_res['designercount']; ?></div>
	</div>
	
	<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">	
	  <span class="count_top"><i class="fa fa-bullhorn"></i> Employee of the Month</span>
	  <div class="count greenew">Firoz</div>
	</div>	

 <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3></h3>
	  </div>             
	</div>
	
	<div class="clearfix"></div>
		<div class="page-title">
	  <div class="title_left">
		<h3>Transactions</h3>
	  </div>    

	</div>	
	
	<div class="row"> 
	
	  <div class="clearfix"></div>
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel"> 
			<form method="post">
			  <p>
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<select name="selempid" class="form-control">
							<option value="all">All</option>
							<?php 
							$getcustid_que = "SELECT * from tiptap_customers where companyid=$companyid";
							$database1 = new Database();
							$dbCon1 = $database1->getConnection();
							$stmt1 = $dbCon1->prepare($getcustid_que);  
							$stmt1->execute();	
							$custid_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
							foreach($custid_res as $custid_result)			
							{
							?>
								<option value="<?php echo $custid_result['id'] ?>"><?php echo $custid_result['fullname'] ?></option>
							<?php } ?>
						</select>
					</div>	
					<div class="col-md-2 col-sm-12 col-xs-12">
						<input name="todate" id="todate" type="text" class="form-control" placeholder="From date" value="" required />
					</div>	
					<div class="col-md-2 col-sm-12 col-xs-12">
						<input name="fromdate" id="fromdate" type="text" class="form-control" placeholder="To date" value="" required />
					</div>	
									
					<div class="col-md-3 col-sm-12 col-xs-12">
						<button type="submit" name="filter" class="btn btn-success"><i class="fa fa-search"></i> Filter</button>
						
						<a class="btn btn-success" href="designerlandingpage.php"><i class="fa fa-refresh"></i> Reset</a>
					</div>
					</div>				
				</div>
			  </p>
			</form>	  		
		  <div class="x_content">      
			<div class="table-responsive">
			  <table id="datatable" class="table table-striped jambo_table bulk_action">
				<thead>
				  <tr class="headings">                            
					<th width="100" class="column-title">Sl. No </th>
					<th width="300" class="column-title">Paid To</th>			
					<th width="300" class="column-title">Amount in Tips</th>
					<th width="300" class="column-title">Paid On</th>											
				  </tr>
				</thead>
				<tbody>
				<?php 
				
				$var 		= ($_POST['fromdate']);
				$date 		= str_replace('/', '-', $var);
				$fromdate1 	= date('Y-m-d', strtotime($date));
				
				$var1 		= ($_POST['todate']);
				$date1 		= str_replace('/', '-', $var1);
				$todate1 	= date('Y-m-d', strtotime($date1));
				
				$selempid	= $_POST['selempid'];	
															
				$i = 1;
				$totalamount = 0;
				if(($fromdate1)!="1970-01-01" && ($todate1)!="1970-01-01"){
					$cond = " AND DATE(date) BETWEEN '$todate1' AND '$fromdate1'";
				} else {
					$cond = "";
				}
				if($selempid!="" && $selempid!="all"){
					$companyempids = $selempid;
				} else {
					$companyempids = $companyempids;
				}
				
				$banner_que = "SELECT * from tiptap_tipsamttoreceivers where receiverid IN ($companyempids) $cond ORDER BY date DESC";
				$database1 = new Database();
				$dbCon1 = $database1->getConnection();
				$stmt1 = $dbCon1->prepare($banner_que);  
				$stmt1->execute();	
				$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
				foreach($menbanner_res as $banner_result)			
				{	
					$receiverid = $banner_result['receiverid'];
					$custinf 	= getCustomerInfo($receiverid);	
					$receivername = $custinf['fullname'];
					$totalamount += $banner_result['amountvalue'];
				?>
				  <tr class="even pointer">  
					<td class=" "><?php echo $i ?></td>	
					<td class=" "><?php echo $receivername; ?></td>		
					<td class=" "><?php echo ($banner_result['amountvalue']); ?></td>
					<td class=" "><?php echo ($banner_result['date']); ?></td>
					
				  </tr>
				<?php 
				$i++;
				}					
				?>                            
				</tbody>
			  </table>			  
			</div>		
			<div style="margin-left:40%">
				<p align="center"><h3>Total: <?php echo $totalamount; ?></h3></p>
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
