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
          <div class="tab-pane fade show active" id="first399" role="tabpanel" aria-labelledby="first399-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview399"
											aria-controls="overview399" role="tab" data-toggle="tab">Overview</a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored399" aria-controls="whats-monitored399"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview399">
										<!-- Inner Content Start -->
										<h2>
											Argent for XenApp </h2>
										<p>Argent for XenApp is more than just a monitoring solution — like all Argent products, Argent for
											XenApp is a complete automation solution, automating all the essential but labor-intensive chores
											that all customers must perform to ensure XenApp runs smoothly.</p>
										<div>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique
											Instant Best Practices is essential – who has the time to read White Papers?
											<br> The most significant aspect of Argent for XenApp is the use of a number of different
											approaches to monitoring XenApp, unifying a centralized monitoring platform for XenApp running on
											all Windows or Linux/Unix systems. Think of Argent for XenApp as four or five discrete products
											all integrated into one super-product.
										</div>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent for XenApp"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/agu_l_b.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent for XenApp"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" alt="Image"> </a>
										</div>
										<h3>Details</h3>
										<p>Argent for XenApp monitors and reports on XenApp baselines, such as availability, access rules,
											authentication, licensing and ICA session rules.
											<br> Argent for XenApp integrates with pre-defined Argent Reports that can be automatically
											emailed every morning to show the actual health and performance of XenApp.
										</p>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored399">
										<!-- Inner Content Start -->
										<p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over
												95% of your day-to-day needs.</strong>
											<br> Argent solves all your day-to-day problems — <strong>automatically.</strong>
										</p>
										<h4>XenApp Application Monitoring Rules</h4>
										<ul>
											<li>Anonymous Connection Rules</li>
											<li>Application Availability Rules</li>
											<li>Application User Count Rules</li>
											<li>Disabled Application Rules</li>
											<li>Process CPU Usage Rules</li>
											<li>Session Usage Time Rules</li>
										</ul>
										<h4>XenApp Availability Rules</h4>
										<ul>
											<li>AppController Rules</li>
											<li>Citrix License Server Rules</li>
											<li>Common Citrix Communication Port Rules</li>
											<li>EdgeSight Rules</li>
											<li>Password Manager Rules</li>
											<li>StageManager Rules</li>
											<li>XenApp Rules</li>
											<li>XenClient Rules</li>
										</ul>
										<h4>Accessibility Monitoring Rules</h4>
										<ul>
											<li>Desktop Access Rules</li>
											<li>Directory Access Rules</li>
											<li>RADIUS Rules</li>
										</ul>
										<h4>Agent Monitoring Rules</h4>
										<ul>
											<li>Citrix Safeword Rules</li>
											<li>RSA Rules</li>
											<li>User-Agent HTTP Header Rules</li>
										</ul>
										<h4>Authentication Monitoring Rules</h4>
										<ul>
											<li>Access Gateway Authentication Rules</li>
											<li>Anonymous Logon Rules</li>
											<li>Context Look-up Failure Rules</li>
											<li>Invalid Authentication Rules</li>
											<li>Novell Directory Services[NDS] Rules</li>
											<li>Two-factor Authentication Rules</li>
											<li>Web Interface Authentication Rules</li>
											<li>Workspace Control Rules</li>
										</ul>
										<h4>Miscellaneous</h4>
										<ul>
											<li>Citrix Online Plugin Monitoring Rules</li>
											<li>Citrix Streaming Service Monitoring Rules</li>
											<li>Citrix XML Service Monitoring Rules</li>
											<li>Client Detection Monitoring Rules</li>
											<li>Event ID File Monitoring Rules</li>
											<li>ICA File Signing Monitoring Rules</li>
											<li>Password Manager Monitoring Rules</li>
											<li>SSL Connection Monitoring Rules</li>
											<li>Secure Ticket Authority Monitoring Rules</li>
										</ul>
										<h4>Configuration Monitoring Rules</h4>
										<ul>
											<li>Protocol Transition Service Rules</li>
											<li>Site Configuration Rules</li>
											<li>Web Interface Configuration Rules</li>
										</ul>
										<h4>Permission Monitoring Rules</h4>
										<ul>
											<li>Client For Java Rules</li>
											<li>Client Installer Rules</li>
											<li>Language Pack File Rules</li>
											<li>Server Monitoring Rules</li>
										</ul>
										<h4>Server Error Rules</h4>
										<ul>
											<li>Server Farm Rules</li>
											<li>Server License Rules</li>
										</ul>
										<h4>Citrix CPU Utilization Management User Rules</h4>
										<ul>
											<li>CPU Entitlement Rules</li>
											<li>CPU Shares Rules</li>
											<li>CPU Usage Rules</li>
											<li>Long-term CPU Usage Rules</li>
										</ul>
										<h4>Citrix IMA Networking Rules</h4>
										<ul>
											<li>Bytes Received Per Second Rules</li>
											<li>Bytes Sent Per Second Rules</li>
											<li>Network Connections Rules</li>
										</ul>
										<h4>Citrix Licensing Rules</h4>
										<ul>
											<li>Average License Check-In Response Time Rules</li>
											<li>Average License Check-Out Response Time Rules</li>
											<li>Last Recorded License Check-In Response Time Rules</li>
											<li>Last Recorded License Check-Out Response Time Rules</li>
											<li>License Server Connection Failure Rules</li>
											<li>Maximum License Check-In Response Time Rules</li>
											<li>Maximum License Check-Out Response Time Rules</li>
										</ul>
										<h4>Citrix MetaFrame Presentation Server Rules</h4>
										<ul>
											<li>Application Resolution Time Rules</li>
											<li>Application Resolutions Per Second Rules</li>
											<li>Cumulative Server Load Rules</li>
											<li>Data Store Connection Failure Rules</li>
											<li>Data Store Bytes Read Rules</li>
											<li>Data Store Bytes Read Per Second Rules</li>
											<li>Data Store Bytes Written Per Second Rules</li>
											<li>Data Store Reads Rules</li>
											<li>Data Store Reads Per Second Rules</li>
										</ul>
										<h4>ICA Session Rules</h4>
										<ul>
											<li>Input Audio Bandwidth Rules</li>
											<li>Input Clipboard Bandwidth Rules</li>
											<li>Input COM Bandwidth Rules</li>
											<li>Input Control Channel Bandwidth Rules</li>
											<li>Input Drive Bandwidth Rules</li>
											<li>Input Font Data Bandwidth Rules</li>
											<li>Input Licensing Bandwidth Rules</li>
											<li>Input Printer Bandwidth Rules</li>
											<li>Input Seamless Bandwidth Rules</li>
											<li>Input Session Bandwidth Rules</li>
											<li>Input Session Compression Rules</li>
											<li>Input Session Line Speed Rules</li>
											<li>Latency – Last Recorded Rules</li>
											<li>Latency – Session Average Rules</li>
											<li>Latency – Session Deviation Rules</li>
											<li>Output Audio Bandwidth Rules</li>
											<li>Output Clipboard Bandwidth Rules</li>
											<li>Output COM Bandwidth Rules</li>
											<li>Output Control Channel Bandwidth Rules</li>
											<li>Output Drive Bandwidth Rules</li>
											<li>Output Font Data Bandwidth Rules</li>
											<li>Output Printer Bandwidth Rules</li>
											<li>Output Seamless Bandwidth Rules</li>
											<li>Output Session Bandwidth Rules</li>
											<li>Output Session Compression Rules</li>
											<li>Output Session Line Speed Rules</li>
											<li>Output ThinWire Bandwidth Rules</li>
										</ul>
										<h4>Secure Ticket Authority Rules</h4>
										<ul>
											<li>STA Count of Active Tickets Rules</li>
											<li>STA Good Data Request Count Rules</li>
											<li>STA Good Ticket Request Count Rules</li>
											<li>STA Peak All Request Rate Rules</li>
											<li>STA Peak Ticket Request Rate Rules</li>
											<li>STA Ticket Timeout Count Rules</li>
										</ul>
										<h4>XenApp Server Monitoring Rules</h4>
										<ul>
											<li>XenApp Server Load Rules</li>
										</ul>
										<h4>XenApp Service Status Monitoring Rules</h4>
										<ul>
											<li>CPU Rebalancer Service Rules</li>
											<li>Resource Management Service Rules</li>
											<li>Citrix Independent Management Architecture Service Rules</li>
											<li>Citrix Licensing Service Rules</li>
											<li>Citrix Licensing WMI Service Rules</li>
											<li>Citrix MFCOM Service Rules</li>
											<li>Citrix Print Manager Service Rules</li>
											<li>Citrix Streaming Service</li>
											<li>Citrix Virtual Memory Optimization Service Rules</li>
											<li>Citrix WMI Service Rules</li>
											<li>Citrix XML Service Rules</li>
											<li>Citrix XTE Server Service Rules</li>
											<li>Remote Desktop Service Rules</li>
										</ul>
										<h4>XenApp Session Monitoring Rules</h4>
										<ul>
											<li>Active Session Count Rules</li>
											<li>Connected Session Count Rules</li>
											<li>Disconnected Session Count Rules</li>
											<li>Listening Session Count Rules</li>
											<li>User Specific Session Count Rules</li>
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