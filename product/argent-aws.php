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
          <div class="tab-pane fade show active" id="first288" role="tabpanel" aria-labelledby="first288-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview288"
											aria-controls="overview288" role="tab" data-toggle="tab">Overview</a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored288" aria-controls="whats-monitored288"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview288">
										<!-- Inner Content Start -->
										<h2>
											Argent AWS </h2>
										<p>AWS is new, AWS is exciting, and AWS is grossly undermanaged.</p>
										<p>While Amazon has done a superb job, an independent, agnostic, and even-handed outside auditor and
											monitor is essential for all production AWS implementation.</p>
										<p>This is precisely what the new Argent for AWS provides.</p>
										<p>AWS is growing by the day, and it is getting more and more difficult to have a global view of
											your entire AWS environment.</p>
										<p>Argent for AWS provides the following baseline facilities:</p>
										<ul>
											<li>Ability To Monitor All Aspects Exposed By AWS Console And AWS SDK</li>
											<li>Integration With Argent Console, The World’s Leading Alerting Console</li>
											<li>Integration With Argent Predictor For Long-Term Trend Analysis (Not Just 14 Days)</li>
											<li>Capable Of Native Monitoring of Windows And Linux Applications</li>
											<li>Comprehensive S3 Monitoring</li>
											<li>Complete Log Monitoring On S3, EBS Volume Or EC2 Instance Store Volume</li>
										</ul>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent AWS"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent AWS"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" alt="Image"> </a>
										</div>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored288">
										<!-- Inner Content Start -->
										<h4>EC2</h4>
										<ul>
											<li>Instance State</li>
											<li>Instance Status</li>
											<li>System Status</li>
											<li>CPU</li>
											<li>Disk Read Operations</li>
											<li>Disk Write Operations</li>
											<li>Disk Read Bytes</li>
											<li>Disk Write Bytes</li>
											<li>Network Incoming Bytes</li>
											<li>Network Outgoing Bytes</li>
											<li>Network Incoming Packets</li>
											<li>Network Outgoing Packets</li>
										</ul>
										<h4>EC2 Credits</h4>
										<ul>
											<li>CPU Credit Usage</li>
											<li>CPU Credit Balance</li>
										</ul>
										<h4>EC2 Operating System</h4>
										<ul>
											<li>Windows Performance Rules</li>
											<li>Windows Service Rules</li>
											<li>Windows Event Rules</li>
											<li>Windows File Log Rules</li>
											<li>Linux Script Rules</li>
											<li>LINUX File Log Rules</li>
										</ul>
										<h4>Elastic Beanstalk Application</h4>
										<ul>
											<li>Health Status</li>
											<li>Health Color</li>
											<li>App Events</li>
										</ul>
										<h4>RDS</h4>
										<p>Database Status
											<br> RDS Events
											<br> DB Connections
											<br> Free Storage Space
											<br> CPU
											<br> Freeable Memory
											<br> Swap Usage
											<br> IO Disk Queue Depth
											<br> IO Read IO OP
											<br> IO Write IO OP
											<br> IO Read Throughput
											<br> IO Write Throughput
											<br> Network Receive Throughput
											<br> Network Transmit Throughput
											<br> Replica Lag
										</p>
										<h4>RDS Credits</h4>
										<ul>
											<li>CPU Credit Usage</li>
											<li>CPU Credit Balance</li>
										</ul>
										<h4>DynamoDB</h4>
										<ul>
											<li>Table Row Count</li>
											<li>Table Size</li>
											<li>Conditional Check Failed Requests</li>
											<li>Consumed Read Capacity Units</li>
											<li>Consumed Write Capacity Units</li>
											<li>Provisioned Read Capacity Units</li>
											<li>Provisioned Write Capacity Units</li>
											<li>IO Read Throttle Events</li>
											<li>Query Returned Item Count</li>
											<li>Stream Returned Bytes</li>
											<li>Stream Returned Records Count</li>
											<li>IO Successful Request Latency</li>
											<li>IO Successful Request Count</li>
											<li>System Errors</li>
											<li>IO Throttled Requests</li>
											<li>User Errors</li>
											<li>IO Write Throttle Events</li>
										</ul>
										<h4>S3</h4>
										<ul>
											<li>S3 Object</li>
											<li>S3 Log</li>
											<li>Bucket Size</li>
											<li>Object Count</li>
										</ul>
										<h4>CloudWatch</h4>
										<ul>
											<li>All CloudWatch Metrics</li>
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