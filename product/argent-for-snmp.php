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
          <div class="tab-pane fade show active" id="first356" role="tabpanel" aria-labelledby="first356-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview356"
											aria-controls="overview356" role="tab" data-toggle="tab">Overview</a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored356" aria-controls="whats-monitored356"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview356">
										<!-- Inner Content Start -->
										<h2>
											Argent for SNMP </h2>
										<p>Argent for SNMP is more than just a monitoring solution — like all Argent products, Argent for
											SNMP is a complete automation solution, automating all the essential, but labor-intensive chores
											that all customers must perform to ensure your SNMP devices run smoothly.</p>
										<h3>Here are some of the features that Argent for SNMP provides:</h3>
										<ul>
											<li>Reliable SNMP Discovery</li>
											<li>Network Topology Discovery</li>
											<li>Argent Universal MIB Library</li>
											<li>Support for all SNMP Versions</li>
											<li>Enhanced SNMP Trap Handling Model</li>
											<li>Readability of SNMP Events</li>
											<li>Automatic Monitoring — monitor devices in a few clicks</li>
										</ul>
										<p>For a live demo site, visit <a href="http://help.Argent.com/#e_afs"
												target="_blank">http://help.Argent.com/#e_afs</a> </p>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent for SNMP"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/asnmp_l_b.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/asnmp_l_b.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent for SNMP"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b.jpg" alt="Image"> </a>
										</div>
										<h3>Automation – Automate All Your Work</h3>
										<p>With uniquely powerful built-in scheduling, customers can prioritize SNMP monitoring and schedule
											data collection for performance reports to take place in real time, once an hour or only in the
											evenings and advanced calendaring options allow any number of different monitoring policies.</p>
										<h3><span class="subtitle">See The Benefits For Yourself</span></h3>
										<p>The benefits of Argent for SNMP over its venerable predecessor are numerous — read the Argent
											Encyclopedia document at <a href="http://help.Argent.com/#e_afs" rel="noopener"
												target="_blank">http://help.Argent.com/#e_afs</a></p>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored356">
										<!-- Inner Content Start -->
										<p>The following is a partial list of installed Rules. Out-of-the-box,<strong> Argent handles over
												95% of your day-to-day needs.</strong>
											<br> Argent solves all your day-to-day problems — <strong>automatically.</strong>
										</p>
										<h4>Management</h4>
										<ul>
											<li>Built-in MIB and OID Browser</li>
											<li>Formula Expressions</li>
											<li>Long Walk</li>
											<li>OID Aliases</li>
											<li>Walk Within Branch</li>
										</ul>
										<h4>SNMP Rules</h4>
										<ul>
											<li>3Com</li>
											<li>APC</li>
											<li>Banyan</li>
											<li>Brocade</li>
											<li>Checkpoint</li>
											<li>Cisco</li>
											<li>Compaq</li>
											<li>Dell</li>
											<li>Emulex</li>
											<li>Extreme Network</li>
											<li>Fortinet</li>
											<li>Foundry</li>
											<li>HP</li>
											<li>IBM</li>
											<li>Intermec</li>
											<li>JetDirect</li>
											<li>Lannet</li>
											<li>Lexmark</li>
											<li>Liebert</li>
											<li>Linux/Unix</li>
											<li>Lucent</li>
											<li>Microsoft</li>
											<li>Netscreen</li>
											<li>Novell</li>
											<li>Sonic</li>
											<li>UPS</li>
											<li>Web Logic</li>
										</ul>
										<h4>Performance and Latency</h4>
										<ul>
											<li>Bandwidth Usage</li>
											<li>Port Status</li>
											<li>Throughput</li>
											<li>TCP/IP Ping</li>
											<li>TCP Port Check</li>
											<li>Packet Loss %</li>
											<li>SNMP Service Availability</li>
										</ul>
										<h4>SNMP Trap Rules</h4>
										<ul>
											<li>3Com</li>
											<li>APC</li>
											<li>Banyan</li>
											<li>Brocade</li>
											<li>Checkpoint</li>
											<li>Cisco</li>
											<li>Compaq</li>
											<li>Dell</li>
											<li>Emulex</li>
											<li>Extreme Network</li>
											<li>Fortinet</li>
											<li>Foundry</li>
											<li>HP</li>
											<li>IBM</li>
											<li>Intermec</li>
											<li>JetDirect</li>
											<li>Lannet</li>
											<li>Lexmark</li>
											<li>Liebert</li>
											<li>Linux/Unix</li>
											<li>Lucent</li>
											<li>Microsoft</li>
											<li>Netscreen</li>
											<li>Novell</li>
											<li>Sonic</li>
											<li>UPS</li>
											<li>Web Logic</li>
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