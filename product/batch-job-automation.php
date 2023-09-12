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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
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
          <div class="tab-pane fade show active" id="first315" role="tabpanel" aria-labelledby="first315-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<h2>
									Argent Job Scheduler </h2>
								<p>The days of manually scheduling and managing batch processes are over. Business process automation
									lowers overall IT costs, ensures application efficiency, enhances IT service, and assists with
									compliance automation. Argent Job Scheduler and Argent Queue Engine automate business processes, alert
									customers via Argent Console when issues occur, and provide Service Level Agreements so that
									management receives the Business View of IT. Argent Job Scheduler provides a single point of control
									across all operating systems, applications and databases for Windows, Linux, Solaris, HP-UX, AIX, SCO
									and iSeries Servers.</p>
								<p>Business process automation is simplified with Argent Job Scheduler and Argent Queue Engine.
									Installation requires no reboot. Argent Job Scheduler has a comprehensive feature set, including
									complete forecasting, auditing, calendaring, and failover, as well as job and file dependency support.
								</p>
								<h3>World View Web Interface</h3>
								<p>Argent World View is a Web 2.0 interface for Argent Job Scheduler.</p>
								<p>Argent World View integrates Argent Job Scheduler GUI and the Queue Engine functionalities into a
									single pane of glass.</p>
								<p>Once installed, Argent World View can be browsed from anywhere as long as sufficient security and
									access rights are provided.</p>
								<p>For a live demo site, visit <a href="http://WorldView.Argent.com"
										target="_blank">http://WorldView.Argent.com</a> </p>
								<div class="Images-wrap">
									<a href="javascript:;" data-fancybox="Argent Job Scheduler"
										data-src="/assets/images/products/js_l2.jpg" target="_blank"> <img
											src="/assets/images/products/js_l2.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Job Scheduler"
										data-src="/assets/images/products/js_l1.jpg" target="_blank"> <img
											src="/assets/images/products/js_l1.jpg" alt="Image"> </a>
								</div>
								
								<h3>Centralized Job Scheduling</h3>
								<p>From a central scheduling server, Argent Job Scheduler can submit jobs to an unlimited number of
									servers where the batch jobs actually execute. All jobs on all servers regardless of platform can be
									viewed on the central console, which is also web-enabled. Any user – with the appropriate rights – on
									any workstation or server can view the central job scheduling console. With the powerful filtering
									capabilities, administrators, operators, and users can quickly and easily obtain customized views of
									their own jobs. From a central client GUI, jobs can be submitted to an unlimited number of Argent
									Queue Engine Servers including Windows, Linux, Unix, iSeries and other platforms where the batch jobs
									actually execute.</p>
								<h3>Queue Priorities: Critical Work Runs First</h3>
								<p>Up to 256 batch queues can be defined on a server where batch jobs execute. Each queue can have its
									own execution priority – customers can define one queue for high-priority jobs, another queue for
									intermediate priority jobs, and a third queue for low-priority jobs. Thus all jobs in the
									high-priority queue get CPU resources before all jobs in the other two queues. Each batch queue can
									run almost 33,000 jobs.</p>
								<h3>Argent Exploits SMP Architecture</h3>
								<p>Individual queues can be associated with specific processors in an SMP environment. For example, on
									an 8-way server, CPU-7 can be associated with a queue and the jobs in that queue will only use that
									processor. This facility gives you the performance of true load balancing, and makes the most of
									expensive and powerful SMP Servers.</p>
								<h3><span class="subtitle">Complete Work Load Balancing</span></h3>
								<p>Argent Job Scheduler provides complete server load balancing, whereby a job can be submitted to the
									server that currently has the lowest CPU load. This enables the most efficient use of hardware
									resources. Once defined, this load balancing is automatic and requires no manual intervention.</p>
								<h3>Total Job Dependency Support</h3>
								<p>Argent Job Scheduler provides full job dependency support so that complex job streams are easily
									created and managed. Automatic job failure retry permits job streams to restart without manual
									intervention.</p>
								<h3>Total File And ODBC Dependency Support</h3>
								<p>File dependency support enables a job to automatically start executing only after all the files
									required are present on one or more servers. Argent Job Scheduler also has full file dependency
									support for files located on FTP sites.</p>
								<h3>Uniquely Powerful Calendaring</h3>
								<p>Some businesses may start the fiscal year on July 1st while the U.S. federal government starts its
									fiscal year on October 1st. Employees may get paid biweekly or on a monthly basis. Regardless of the
									calendar, Argent Job Scheduler is easily customized to meet specific needs. Argent Job Scheduler is
									delivered with a number of pre-built calendars that can be customized to meet exact requirements.
									Creating calendars based upon fiscal years, manufacturing cycles, payroll periods, etc., allows
									customers the freedom easily to customize the product to best suit their organization.</p>
								<h3>Alerts You When Jobs Fail</h3>
								<p>Argent Job Scheduler in conjunction with Argent Console has extensive alerting facilities so the
									appropriate parties can be alerted when jobs fail. Alerts can be issued via email, alphanumeric pager,
									SMS, pop-ups, and beeper. Argent Job Scheduler also provides the ability to automatically resubmit
									failed jobs. Argent Job Scheduler is tightly integrated with Argent Console, resulting in customers
									benefiting from all the advanced console and alert escalation features of Argent Console when jobs
									fail.</p>
								<h3>Full Redundancy</h3>
								<p>An unlimited number of backup servers can be defined for Argent Job Scheduler so that if the primary
									job scheduling server fails or it loses its network connection, job scheduling continues on a backup
									server. Once defined, the failover process is automatic. Once the primary scheduling server is
									operational again, all processing reverts back to the primary server.</p>
								<h3>Reporting</h3>
								<p>Argent Job Scheduler has a full set of reports, enabling Operations Managers to create reports that
									run on a daily, weekly, monthly, or on an ad-hoc basis. In addition, projected load reports are also
									available that enable seeing the CPU and other resources needed to run the day’s jobs.</p>
								<h3>Uniquely Powerful Simulation</h3>
								<p>Argent Job Scheduler’s job simulation feature allows the quick simulation of when and how often jobs
									will run over a period of time. A simulation of a large block of time, such as a full day, can be
									performed in just seconds since the computer’s time is rapidly incremented.</p>
								<!-- Else OverView End-->
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