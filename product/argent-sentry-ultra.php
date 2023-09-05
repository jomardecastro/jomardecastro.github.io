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
          <div class="tab-pane fade show active" id="first413" role="tabpanel" aria-labelledby="first413-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview413"
											aria-controls="overview413" role="tab" data-toggle="tab">Overview </a> </li>
									<li role="presentation"> <a class="" href="#whats-monitored413" aria-controls="whats-monitored413"
											role="tab" data-toggle="tab">What's Monitored</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview413">
										<!-- Inner Content Start -->
										<h2>
											Argent Sentry Ultra </h2>
										<p>Argent Sentry Ultra monitors websites, FTP sites, and email servers. It can identify website
											issues during development and after deployment in production. Argent Sentry Ultra integrates with
											Argent Console for flexible alerting and event escalation so issues can be dealt with promptly,
											even before the end user sees them. Argent Sentry Ultra’s flexibility enables customers the power
											to maintain any size environment and provides full reporting.</p>
										<p>Argent Sentry Ultra also has fraud prevention techniques, checking for changes to web pages.
											Argent Console will then alert customers if any unauthorized modifications are detected. Customers
											have full control over which web pages are monitored.</p>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent Sentry Ultra"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/sp_l_b.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/sp_l_b.jpg" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent Sentry Ultra"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" target="_blank">
												<img src="https://www.argent.com/wp-content/uploads/2022/11/console_l_b-1.jpg" alt="Image"> </a>
										</div>
										<h3>Total Web Integrity</h3>
										<p>Total Web Integrity protects critical websites and intranets against all forms of attacks.</p>
										<p>Total Web Integrity is based on a simple idea: a web property is really just a collection of
											files.</p>
										<p>If these files are constantly monitored for hacker attacks and changes, the hackers are defeated.
										</p>
										<p>Automatic restoration provides complete automation before, during, and after an attack.</p>
										<h3>Website Response Time Monitor</h3>
										<p>Ongoing response time monitoring is essential for reporting website performance at various times
											and for detecting problems with a website. Argent Console generates alerts if the response time
											slows to a specified threshold and the performance data can be saved for trend analysis.</p>
										<h3>Website Reliability</h3>
										<p>Improve website reliability by eliminating broken links and missing files. This feature traverses
											a website checking for broken links, missing images, etc. Argent Console generates alerts if any
											issues are found.</p>
										<h3>FTP Site Monitor</h3>
										<p>FTP site monitoring can be setup to check for specific files on the site and optionally test
											downloading the files. Alerts are generated by Argent Console if specified files are missing or
											fail to download. Alerts can also be triggered if a specified file exists on the FTP site.</p>
										<h3>Email Performance Monitor</h3>
										<p>Argent Sentry Ultra will monitor the email sending and receiving capabilities of a mail server
											and test round-trip email performance. The performance data can be saved for trend analysis.
											Argent Console can generate alerts if the email round-trip performance exceeds the specified
											threshold.</p>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="whats-monitored413">
										<!-- Inner Content Start -->
										<p>The following is a partial list of installed Rules. Out-of-the-box, <strong>Argent handles over
												95% of your day-to-day needs.</strong>
											<br> Argent solves all your day-to-day problems — <strong>automatically</strong>.
										</p>
										<h4>Connectivity</h4>
										<ul>
											<li>TCP/IP Ping</li>
											<li>TCP Port Check</li>
											<li>FTP, HTTP, HTTPS Service Availability</li>
											<li>Windows Internet Connectivity API Check</li>
										</ul>
										<h4>Web Site Change</h4>
										<ul>
											<li>Web Page Changes</li>
											<li>Hacking/Defacement Attempts</li>
										</ul>
										<h4>Web Site Response Time</h4>
										<ul>
											<li>Web Server Offline</li>
											<li>Excessively Slow Pages</li>
										</ul>
										<h4>Web Site Reliability</h4>
										<ul>
											<li>Web Page Availability</li>
											<li>Broken Links</li>
										</ul>
										<h4>Email Performance</h4>
										<ul>
											<li>Email Round Trip Test</li>
											<li>Broken Links</li>
										</ul>
										<h4>FTP</h4>
										<ul>
											<li>FTP Download Test</li>
											<li>FTP File Existence</li>
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