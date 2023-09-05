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
					<div class="tab-pane fade show active" id="first467" role="tabpanel" aria-labelledby="first467-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview467"
											aria-controls="overview467" role="tab" data-toggle="tab">Overview</a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored467" aria-controls="whats-monitored467"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview467">
										<!-- Inner Content Start -->
										<h2>
											Argent for MySQL </h2>
										<p>Argent for MySQL is more than just a monitoring solution — like all Argent products, Argent for
											MySQL is a complete automation solution, automating all the essential but labor-intensive chores
											that all customers must perform to ensure MySQL runs smoothly.</p>
										<p>With all the layoffs, there are fewer people to do more work – this is why Argent’s unique
											Instant Best Practices is essential – who has the time to read White Papers?</p>
										<p>The most significant aspect of Argent for MySQL is the use of a number of different approaches to
											monitoring MySQL, unifying a centralized monitoring platform for MySQL running on all Windows or
											Linux/Unix systems. Think of Argent for MySQL as four or five discrete products all integrated
											into one super-product.</p>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent for MySQL"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-4.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-4.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent for MySQL"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/mysql_l_b.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/mysql_l_b.jpg" alt="Image"> </a>
										</div>
										<h3>Details</h3>
										<p>Argent for MySQL monitors and reports on MySQL baselines, such as connection statistics,
											replication status, locks, cache hit rates and custom SQL queries.</p>
										<p>Argent for MySQL integrates with pre-defined Argent Reports that can be automatically emailed
											every morning to show the actual health and performance of MySQL.</p>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored467">
										<!-- Inner Content Start -->
										<p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over
												95% of your day-to-day needs</strong>.
											<br> Argent solves all your day-to-day problems — <strong>automatically</strong>.
										</p>
										<h4>General Statistics</h4>
										<ul>
											<li>Database Instance Availability</li>
											<li>Server Uptime</li>
											<li>Total Connection Attempts To Server</li>
											<li>Number Of Current Connections</li>
											<li>Number Of Aborted Connections</li>
											<li>Number Of Aborted Clients</li>
											<li>Number Of SSL Client Connections</li>
											<li>Number Of Threads Running</li>
											<li>Number Of Threads Created</li>
											<li>Number Of Threads Cached</li>
											<li>Number Of Current Connections per User</li>
											<li>Data Traffic Total Bytes Sent To Clients</li>
											<li>Data Traffic Total Bytes Received From Clients</li>
											<li>Binary Log Status</li>
											<li>Replication Master Status</li>
											<li>Replication Slave Status</li>
											<li>Replication SQL Thread Status</li>
											<li>Replication Slave Lag Rules</li>
										</ul>
										<h4>Performance Statistics</h4>
										<ul>
											<li>Number Of Table Locks Waited</li>
										</ul>
										<h4>Performance Statistics</h4>
										<ul>
											<li>Number Of Table Locks Waited</li>
											<li>Number Of Slow Queries</li>
											<li>Number Of File System Reads</li>
											<li>Number Of Full Joins</li>
											<li>Key Read Efficiency</li>
											<li>Key Write Efficiency</li>
											<li>Table Cache Hit Rate</li>
											<li>Allowed Client Connections Usage</li>
											<li>Query Cache Hit Rate</li>
											<li>Database Size Usage</li>
											<li>Database Available Free Space</li>
											<li>INNODB Deadlock Detection</li>
											<li>Number Of Temporary Memory Tables</li>
											<li>Number Of Temporary Files Created</li>
											<li>Percentage Of Temporary Tables Created On Disk</li>
										</ul>
										<h4>Custom SQL Query Rules</h4>
										<ul>
											<li>Query</li>
										</ul>
										<h4>Operating System</h4>
										<ul>
											<li>Service Level Agreement Rules</li>
											<li>Windows Service Rules</li>
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