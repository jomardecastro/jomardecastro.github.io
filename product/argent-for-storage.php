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
          <div class="tab-pane fade show active" id="first397" role="tabpanel" aria-labelledby="first397-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview397"
											aria-controls="overview397" role="tab" data-toggle="tab">Overview</a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored397" aria-controls="whats-monitored397"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview397">
										<!-- Inner Content Start -->
										<h2>
											Argent for Storage </h2>
										<div>
											<div>Storage is a critical component in most enterprise networks, and like all critical components
												— it can’t go down.</div>
											<div>To make matters worse, storage devices have many sub-components in and of themselves —
												Storage Processors, Disk Array Enclosures, Buses, Disks, LUNs, Fibre Channel, Tape, Switches,
												Clusters — the list goes on.</div>
											<div>The question “What should I be monitoring, and what thresholds?” is the immediate response
												for most Storage Administrators.</div>
											<div>Argent for Storage’s <strong>Instant Best Practices</strong> does the heavy-lifting for
												administrators, and provides expert recommendations on thresholds that typical enterprises would
												need. With Argent for Storage you can be up and running in 45 minutes, not 45 days; Argent for
												Storage is meticulously engineered to ensure you are not flooded with thousands of meaningless
												alerts.</div>
											<div>And Argent is vendor-agnostic — Argent for Storage aims to cover all the major players:
												<strong>EMC, NetApp, HP, IBM and Dell.</strong></div>
										</div>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent for Storage"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent for Storage"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" alt="Image"> </a>
										</div>
										<div>
											<h3>Proactive Monitoring and Reporting</h3>
											<div>Argent for Storage proactively detects and stops SAN-related issues before your enterprise is
												impacted.</div>
											<div>Critical data is collected for historical reporting and trend analysis, and visualized
												through Argent Reports and Argent Commander.</div>
											<div>Argent for Storage also provides corrective actions by integrating with vendor-specific CLI
												or PowerShell that can be run in response to an issue. Additionally, detailed notifications that
												pinpoint the exact Disk, Bus, and Enclosure can be sent via email or SMS to the Storage team.
											</div>
										</div>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored397">
										<!-- Inner Content Start -->
										<p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over
												95% of your day-to-day needs</strong>.
											<br> Argent solves all your day-to-day problems —<strong> automatically.</strong>
										</p>
										<h4>EMC VNX</h4>
										<ul>
											<li>Array Status</li>
											<li>Array Power Status</li>
											<li>Standby Power Supply Status</li>
											<li>Main Power Supply Status</li>
											<li>Storage Processor Engine Power Status</li>
											<li>Hard Read Error</li>
											<li>Hard Write Error</li>
											<li>Soft Read Error</li>
											<li>Soft Write Error</li>
											<li>Disk Utilization</li>
											<li>Raid Group Utilization</li>
											<li>Defragmentation\Expansion – Performance</li>
											<li>Storage Processor Utilization</li>
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