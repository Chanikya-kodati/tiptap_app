<?php 
require_once('auth.php');
include "header.php"; 
?>
<style>
.greenew {
    color: #9CCAA3;
}
</style>
	<!-- page content -->
	<div class="right_col" role="main">
	<!-- top tiles -->
	<div class="row tile_count">
	        
	<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
	<?php 
	$banner_que = "SELECT count(*) as prodcount from tiptap_companies where status=1";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();
	$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
	$ressuc = $about_res['prodcount'];
	?>
	  <span class="count_top"><i class="fa fa-archive"></i> Registered Companies</span>
	  <div class="count greenew"><?php echo $about_res['prodcount']; ?></div>              
	</div>
	
	<?php 
	$banner_que = "SELECT count(*) as prodcount from tiptap_customers where status=1 AND giverorreceiver=1";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();
	$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
	?>
	 <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
	  <span class="count_top"><i class="fa fa-user"></i> Register Given Users</span>
	  <div class="count greenew"><?php echo $about_res['prodcount']; ?></div>              
	</div>
	<?php 
	$banner_que = "SELECT count(*) as prodcount from tiptap_companies where status=0";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();
	$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
	?>
	<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
	  <span class="count_top"><i class="fa fa-user"></i> Pending registration  companies</span>
	  <div class="count greenew"><?php echo $about_res['prodcount']; ?></div>              
	</div>
	<?php 
	$banner_que = "SELECT count(*) as prodcount from tiptap_customers where status=0";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($banner_que);  
	$stmt1->execute();
	$about_res = $stmt1->fetch(PDO::FETCH_ASSOC);
	$faillres = $stmt1->rowCount();
	?>
	<div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
	  <span class="count_top"><i class="fa fa-user"></i> Pending registration  customers</span>
	  <div class="count greenew"><?php echo $faillres; ?></div>          
	</div>
	<?php
	$fromtime 	= date('Y-m-d').' 00:00:00';	
	$totime 	= date('Y-m-d').' 23:59:59';
	$today_que = "SELECT SUM(replace(amountpaid, ',', '')) as todaycount from animall_payments where Status=1 AND PaidOn BETWEEN '$fromtime' AND '$totime'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($today_que);  
	$stmt1->execute();
	$todayres = $stmt1->fetch(PDO::FETCH_ASSOC);
	if($todayres['todaycount']==""){
		$todayrev = "0";
	} else {
		$todayrev = $todayres['todaycount'];
	}	
	?>
	<div class="tile_count">
	<div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
	  <span class="count_top"><i class="fa fa-money"></i> Today's Revenue</span>
	  <div class="count greenew">0<?php  //echo number_format($todayrev,3); ?> KWD</div>
	</div>
	<?php
	$fromtime 	= date('Y-m-01').' 00:00:00';	
	$totime 	= date('Y-m-31').' 23:59:59';
	$tilltoday_que = "SELECT SUM(replace(amountpaid, ',', '')) as todaycount from animall_payments where Status=1 AND PaidOn BETWEEN '$fromtime' AND '$totime'";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($tilltoday_que);  
	$stmt1->execute();
	$monthres = $stmt1->fetch(PDO::FETCH_ASSOC);
	if($monthres['todaycount']==""){
		$monthrev = "0";
	} else {
		$monthrev = $monthres['todaycount'];
	}	
	?>
	<div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
	  <span class="count_top"><i class="fa fa-money"></i> Present Month Revenue</span>
	  <div class="count greenew"><?php echo number_format($monthrev,3); ?> KWD</div>
	</div>
	
	<?php 
	$tilltoday_que = "SELECT SUM(replace(amountpaid, ',', '')) as todaycount from animall_payments where Status=1";
	$database1 = new Database();
	$dbCon1 = $database1->getConnection();
	$stmt1 = $dbCon1->prepare($tilltoday_que);  
	$stmt1->execute();
	$tilltodayres = $stmt1->fetch(PDO::FETCH_ASSOC);
	if($tilltodayres['todaycount']==""){
		$tillmonthrev = "0";
	} else {
		$tillmonthrev = $tilltodayres['todaycount'];
	}
	?>
	<div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
	  <span class="count_top"><i class="fa fa-money"></i> Revenue Till Date</span>
	  <div class="count greenew"><?php echo number_format($tillmonthrev,3); ?> KWD</div>
	</div>
	
	</div>	
	</div>	
	<!-- /top tiles -->         
	<br/>
	<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
	  <div class="x_panel tile fixed_height_350 ">
		<div class="x_title">
		  <h2>Registration Statistics</h2>                  
		  <div class="clearfix"></div>
		</div>
		<div class="x_content">
		  <table class="" style="width:100%">
			<tr>
			  <th style="width:37%;">                   
			  </th>
			  <th>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
				  <p class=""></p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
				  <p class=""></p>
				</div>
			  </th>
			</tr>
			<tr>
			  <td>
				<canvas id="canvas1" height="220" width="210" style="margin: 15px 10px 10px 0"></canvas>
			  </td>
			  <td>
				<table class="tile_info">                       
				  <tr>
					<td>
					  <p><i class="fa fa-square purple"></i>Companies </p>
					</td>
					<td><?php echo $ressuc; ?></td>
				  </tr>
				  <tr>
					<td>
					  <p><i class="fa fa-square blue"></i>Customers </p>
					</td>
					<td><?php echo $faillres; ?></td>
				  </tr>                              
				</table>
			  </td>
			</tr>
		  </table>
		</div>
	  </div>
	</div>

	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="x_panel fixed_height_350">
		  <div class="x_content">				
				<br>
				<br><h1>Total earned&nbsp;: 0 KD</h1><br>
				
				<h1>Total paid&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 0 KD</h1>
				
				<br><h1>My Revenue  : 0 KD</h1>
				<br>				
				<br>				
				<div class="clearfix"></div>
			</div>			
		  </div>
		</div>	 
	</div>
	<br />
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="dashboard_graph x_panel">
	  <div class="row x_title">
		<div class="col-md-6">
		  <h3>Registration Activities <small>Customers</small></h3>
		</div>
		<div class="col-md-6">
		  <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
			<i cla ss="glyphicon glyphicon-calendar fa fa-calendar"></i>
			<span>0 <?php echo date('M'); ?>, <?php echo date('Y'); ?> - 31 <?php echo date('M'); ?>, <?php echo date('Y'); ?></span> 
		  </div>
		</div>
	  </div>
	  <div class="x_content">
		<div class="demo-container" style="height:250px">
		  <div id="placeholder3xx3" class="demo-placeholder" style="width: 100%; height:250px;"></div>
		</div>
	  </div>
	</div>
	</div>
	</div>
	<br/>
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
			  google.charts.load('current', {'packages':['corechart']});
			  google.charts.setOnLoadCallback(drawChart);

			  function drawChart() {

				var data = google.visualization.arrayToDataTable([
				  ['Task', 'Hours per Day'],
				  <?php
					$i = 1;
					$banner_que = "SELECT *, sum(quantity) as totqty from animall_stocks where 1=1 GROUP BY prodid ORDER BY id DESC";
					$database1 = new Database();
					$dbCon1 = $database1->getConnection();
					$stmt1 = $dbCon1->prepare($banner_que);  
					$stmt1->execute();	
					$menbanner_res = $stmt1->fetchAll(PDO::FETCH_ASSOC);
					foreach($menbanner_res as $banner_result)	
					{ ?>
						['<?php echo getProduct($banner_result['prodid']); ?>',     <?php echo $banner_result['totqty'] ?>],
					<?php } ?>				  
				]);

				var options = {
				  title: ''
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart'));

				chart.draw(data, options);
			  }
			</script>
		</div>				 
	</div>
	<br/>			
	<!--<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="dashboard_graph x_panel">
			  <div class="row x_title">
				<div class="x_title">
				  <h3>Stock Activities</h3>                  
				  <div class="clearfix"></div>
				</div>				  
				<div class="col-md-12 col-sm-12">
				<div id="piechart" style="width: 100%; height: 500px;"></div>
		</div>							  
	  </div></div></div>
	</div>-->         
	</div>        
	<!-- /page content -->
<script>
  $(document).ready(function(){
	var options = {
	  legend: false,
	  responsive: false
	};

	new Chart(document.getElementById("canvas1"), {
	  type: 'doughnut',
	  tooltipFillColor: "rgba(51, 51, 51, 0.55)",
	  data: {
		labels: [		  
		  "Companies",		 
		  "Registered Receivers",		  
		],
		datasets: [{
		  data: [<?php echo $ressuc; ?>, <?php echo $faillres; ?>],
		  backgroundColor: [			
			"#9B59B6",
			"#3498DB",			
		  ],
		  hoverBackgroundColor: [			
			"#B370CF",	
			"#49A9EA",				
		  ]
		}]
	  },
	  options: options
	});
  });
</script>
<?php include "footer.php" ?>
