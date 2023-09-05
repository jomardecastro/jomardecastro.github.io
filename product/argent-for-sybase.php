<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<title>Products</title>
	<link rel="stylesheet" href="/assets/css/pages.css" />
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
    id='jquery-cdn-js'></script>
  <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
    id='bootstrap.min.js-cdn-js'></script>
  <link rel='stylesheet' id='bootstrap.min-css'
    href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel="stylesheet" href="/assets/css/pages.css" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
      id='jquery-cdn-js'></script>
  <link rel="icon" href="/assets/images/fav.png" sizes="32x32" />
  <link rel="icon" href="/assets/images/fav.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="/assets/images/fav.png" />
	<style>
		h1, h2, h3, h4, h5, h6 
		{
			margin: 0 !important;
			color: inherit !important;
			font-weight: 600 !important;
			word-break: break-word !important;
			color: #233655 !important;
			font-family: 'Hellix' !important;
		}
		h1 {
			font-size: 64px !important;
			line-height: 100px !important;
			color: #1E293B !important;
		}
		.main-wrap .accordions .card .card-header .btn
		{
			padding: 0 !important;
		}
		.main-wrap .accordions .card .card-header .btn:after 
		{
			background-image: url("/assets/images/angle.svg") !important;
		}
		
		.main-wrap .accordions .card-body .nav-tabs .nav-item .nav-link 
		{
			letter-spacing: 0 !important;
		}
	</style>

</head>

<body class="font-cairo">
	<?php include $_SERVER['DOCUMENT_ROOT'] .'/layout/header.php'; ?>
	<main>
		<section class="banner inner">
			<div class="container">
				<div class="text-center">
					<h1>Products</h1>
				</div>
			</div>
		</section>
		<section class="productswrap">
			<div class="container">
				<div class="main-wrap">
					<!-- accordion -->
          <?php include $_SERVER['DOCUMENT_ROOT'] .'/layout/accordion.php'; ?>

					<!-- tab-content -->
					<div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="first478" role="tabpanel" aria-labelledby="first478-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview478"
											aria-controls="overview478" role="tab" data-toggle="tab">OverView</a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored478" aria-controls="whats-monitored478"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview478">
										<!-- Inner Content Start -->
										<h2>
											Argent for Sybase </h2>
										<p>Argent for Sybase provides the complete monitoring of aspects of Sybase ASE database servers.</p>
										<p>Argent for Sybase monitors all the important performance indicators of Sybase ASE database server
											and notifies through Alerts, if the performance metrics are beyond a given threshold.</p>
										<p>This helps the DBA to easily pinpoint the issues which affect the overall Sybase ASE database.
										</p>
										<p>Argent for Sybase provides Rules for:</p>
										<ul>
											<li>Sybase Capacity</li>
											<li>Sybase Availability</li>
											<li>Sybase Disk I/O</li>
											<li>Sybase Kernel</li>
											<li>Sybase Data Cache</li>
											<li>Sybase Procedure Cache</li>
											<li>Sybase Metadata</li>
											<li>Sybase Database Usage\</li>
											<li>Sybase Network</li>
											<li>Sybase Custom Queries</li>
											<li>Sybase Error Logs</li>
											<li>Sybase Active Transactions</li>
											<li>Sybase Wait Events</li>
										</ul>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent for Sybase"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/sybase_l_b.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/sybase_l_b.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent for Sybase"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-5.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-5.jpg" alt="Image"> </a>
										</div>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored478">
										<!-- Inner Content Start -->
										<p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over
												95% of your day-to-day needs.</strong>
											<br> Argent solves all your day-to-day problems — <strong>automatically</strong>.
										</p>
										<h4>Sybase Availability</h4>
										<ul>
											<li>ASE Logon Rules</li>
											<li>Offline Engines</li>
											<li>Blocked Sessions</li>
										</ul>
										<h4>Sybase Capacity</h4>
										<ul>
											<li>Active Connections</li>
											<li>Connections Remaining</li>
											<li>Connections Utilization</li>
											<li>Connections Per Second</li>
											<li>Locks Remaining</li>
											<li>Locks Used</li>
											<li>Locks Utilization</li>
										</ul>
										<h4>Sybase Metadata</h4>
										<ul>
											<li>Open Databases</li>
											<li>Open Database Utilization</li>
											<li>Open Objects</li>
											<li>Open Objects Utilization</li>
											<li>Open Partitions</li>
											<li>Open Partitions Usage Percentage</li>
											<li>Open Indexes</li>
											<li>Open Indexes Utilization</li>
										</ul>
										<h4>Sybase Database</h4>
										<ul>
											<li>Database Count</li>
											<li>Database Free Space</li>
											<li>Transaction Log Free Space</li>
										</ul>
										<h4>Sybase Data Cache</h4>
										<ul>
											<li>Data Cache Searches</li>
											<li>Data Cache Hit Rate</li>
											<li>Data Cache Hits Per Second</li>
											<li>Data Cache Space Used By Objects</li>
										</ul>
										<h4>Sybase Procedure Cache</h4>
										<ul>
											<li>Procedure Cache Hit Rate</li>
											<li>Procedure Cache Size</li>
											<li>Procedure Cache Utilization</li>
											<li>Procedure Cache Space Used By Objects</li>
										</ul>
										<h4>Sybase Disk IO</h4>
										<ul>
											<li>Disk Reads</li>
											<li>Disk Writes</li>
										</ul>
										<h4>Sybase Disk IO</h4>
										<ul>
											<li>Disk Writes</li>
											<li>Disk Reads Per Second</li>
											<li>Disk Writes Per Second</li>
											<li>Disk IO Per Second</li>
										</ul>
										<h4>Sybase Kernel</h4>
										<ul>
											<li>Engines Online</li>
											<li>Engine User Busy Usage Percentage</li>
											<li>Engine System Busy Usage Percentage</li>
											<li>Engine IO Busy Usage Percentage</li>
										</ul>
										<h4>Sybase Network</h4>
										<ul>
											<li>Packets Sent In Millions</li>
											<li>Packets Sent Per Second</li>
											<li>Packets Received In Millions</li>
											<li>Packets Received Per Second</li>
											<li>Data Sent In MB</li>
											<li>Data Sent Per Second</li>
											<li>Data Received In MB</li>
											<li>Data Received Per Second</li>
										</ul>
										<h4>Sybase Error Logs</h4>
										<ul>
											<li>ErrorLog Archiving</li>
											<li>ErrorLog Monitoring</li>
										</ul>
										<h4>Sybase Active Transactions</h4>
										<ul>
											<li>Active Transaction Count</li>
											<li>Long Running Transaction</li>
										</ul>
										<h4>General Statistics</h4>
										<ul>
											<li>Query Response Time Rules</li>
											<li>Deadlock Detection</li>
											<li>CPU Usage Of Currently Executing T-SQL Statements</li>
											<li>Slow Running Query</li>
											<li>Instance Uptime</li>
											<li>Instance License Expiry</li>
										</ul>
										<h4>Operating System</h4>
										<ul>
											<li>Service Level Agreement Rules</li>
											<li>Windows Service Rules</li>
											<li>System Down Rules</li>
										</ul>
										<!-- Inner Content End -->
									</div>
								</div>
								<!-- Else OverView Start-->
							</div>
						</div>
          </div>
				</div>
			</div>
		</section>
	</main>
	<?php include $_SERVER['DOCUMENT_ROOT'] .'/layout/footer.php'; ?>
</body>

</html>