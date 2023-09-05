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
          <div class="tab-pane fade show active" id="first290" role="tabpanel" aria-labelledby="first290-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview290"
											aria-controls="overview290" role="tab" data-toggle="tab">Overview </a> </li>
									<li role="presentation"> <a class="" href="#alerts290" aria-controls="alerts290" role="tab"
											data-toggle="tab">Alerts</a> </li>
									<li role="presentation"> <a class="" href="#supermaps290" aria-controls="supermaps290" role="tab"
											data-toggle="tab">SuperMaps</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview290">
										<!-- Inner Content Start -->
										<h2>
											Argent Console </h2>
										<p>Argent Console is the world’s leading alerting console.</p>
										<p>With Argent Console, Alerts can be consolidated from customer applications, third-party products,
											as well as from all Argent products.</p>
										<p>All Alerts and alarms from customer applications and third-party products can be consolidated
											using Argent’s powerful ActiveX and XML interfaces. Any number of third party packages can send
											Alerts directly to the console as well.</p>
										<p>Argent Console is the perfect solution for a customer’s central console. Argent Console allows
											tracking of and creates Alerts about all events as they occur on the network.</p>
										<p>Enterprise Application View</p>
										<p>What Argent provides today is an Enterprise View of Customer’s critical applications. Rather than
											just monitoring the CPU load in isolation, Argent integrates this single metric into a custom
											weighted scheme.</p>
										<p>For example, take an Exchange 2007 environment running on four servers.</p>
										<p>If one server fails, then Argent reports the Exchange environment has been degraded by 20% and
											sends out one set of Argent Alerts.</p>
										<p>If two servers fail, Argent Enterprise View reports a 50% degradation and send out additional
											Argent Alerts.</p>
										<p>If three servers fail, then Argent Enterprise View will report a 85% degradation.</p>
										<p>Customers can adjust the parameters to meet their needs. The impact of a single event can be
											entirely different than that of multiple events.</p>
										<p>Argent Enterprise View looks at all of the application’s critical components. It does not matter
											if the various components are distributed throughout the world.</p>
										<p>Argent monitors all aspects of your critical applications.</p>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent Console"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/aev1.jpg" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/aev1.jpg" alt="Image"> </a>
										</div>
										<h3>Unprecedented SNMP Support</h3>
										<p>Argent Console provides a new level of support to receive alarms and Alerts from any SNMP device
											and record it on the central Argent Console.</p>
										<h3>Unlimited Alerting And Alert Escalation</h3>
										<p>Argent Console has long been known for its powerful array of Alerts such as Email Alerts,
											Alphanumeric Pager Alerts, Network Message Alerts, SMS Alerts, SQL Alerts (that fire customer
											created SQL scripts as an Alert), and Service Alerts (to stop and restart Windows Services).</p>
										<p>These Alerts can be used with pre-existing applications — the alarm is simply sent to Argent
											Console, the customer specifies which alert is to be fired and Argent does the rest.</p>
										<p>Escalating Alerts allow customers the ability to specify a detailed alerting sequence for any
											particular issue. For instance, if employee X is alerted via email and does not respond, then
											employee Z will be alerted via pager, etc. Customers have complete control over escalation details
											including who will be notified and how the alert will be sent.</p>
										<h3>Ease Of Use</h3>
										<p>The Total Support Interface, part of Argent Console, enables the sending of any customized Alerts
											directly to the console.</p>
										<p>Because of the universal nature of Argent Console, the ActiveX interface allows the sending of
											alarms and Alerts from literally any language, from PERL to Visual Basic, to C++.</p>
										<p>The Total Support Interface provides complete code samples, technical notes, and engineering
											notes and an SDK.</p>
										<h3>Automation</h3>
										<p>Argent introduces a powerful new automatic report distribution facility to allow the receiving of
											specific reports that are considered important to the customer. Reports can be scheduled of the
											customer’s top-10 issues or weekly reports of the top-10 problematic servers. And of course, the
											revolutionary Argent calendaring features, popular in Argent AT and Argent Job Scheduler, are
											fully supported.</p>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="alerts290">
										<!-- Inner Content Start -->
										<p>Argent divides Alerts into two categories, <strong>Notification</strong> and
											<strong>Correction</strong> Alerts.</p>
										<p>The following table lists some of the installed Alerts.</p>
										<h4>Notification Alerts</h4>
										<ul>
											<li>Alphanumeric Pager</li>
											<li>Email</li>
											<li>Network Message</li>
											<li>SMS</li>
											<li>System Alarm</li>
											<li>Third-Party Help Desk</li>
											<li>Twitter</li>
											<li>Unix Action Script</li>
											<li>Windows Event Log</li>
										</ul>
										<h4>Correction Alerts</h4>
										<ul>
											<li>iSeries Commands</li>
											<li>ODBC/SQL Query</li>
											<li>PowerShell Action Scripts</li>
											<li>Service Start/Stop/Restart</li>
											<li>SNMP</li>
											<li>System Commands</li>
											<li>System Reboot</li>
											<li>Linux/Unix Action Scripts</li>
											<li>WMI Action Scripts</li>
										</ul>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="supermaps290">
										<!-- Inner Content Start -->
										<p>SuperMaps lets you quickly see the Alerts for your entire enterprise</p>
										<p>Any image can be used as a SuperMap — geographical maps, network diagrams, floor plans or a even
											a digital photo of a server rack</p>
										<p>SuperMaps represents Alerts as dots, varying from red, orange, yellow, or green — all
											configurable of course</p>
										<p>Individual SuperMaps can also be hot-linked together, allowing you to effectively zoom in from
											macro to micro within a few mouse clicks</p>
										<p>SuperMaps can also be viewed and shared using a web browser through Argent’s revolutionary Web
											2.0 dashboard — Argent Commander</p>
										<p><img decoding="async" loading="lazy"
												src="https://www.argent.com/wp-content/uploads/2022/11/supermaps.png" alt="" width="949"
												height="307" class="alignnone size-full wp-image-683"
												srcset="https://www.argent.com/wp-content/uploads/2022/11/supermaps.png 949w, https://www.argent.com/wp-content/uploads/2022/11/supermaps-300x97.png 300w, https://www.argent.com/wp-content/uploads/2022/11/supermaps-768x248.png 768w"
												sizes="(max-width: 949px) 100vw, 949px"></p>
										<p>To discuss SuperMaps with an Argent professional, please email
											<br> <a href="mailto:SuperMaps@Argent.com">SuperMaps@Argent.com</a>
										</p>
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