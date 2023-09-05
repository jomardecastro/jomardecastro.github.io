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
	<?php include __DIR__.'/layout/header.php'; ?>
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
					<div class="accordions" id="accordion">
						<div class="card">
							<div class="card-header" id="heading-12">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-12" aria-expanded="true"
									aria-controls="collapse12"> System and Applications </button>
							</div>
							<div id="collapse-12" class="collapse show" aria-labelledby="heading-12" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/argent-omega/">
												Argent Omega </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-guardian/">
												Argent Guardian Ultra </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-aws/">
												Argent AWS </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-console/">
												Argent Console </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-sharepoint/">
												Argent for SharePoint </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-exchange/">
												Argent for Exchange </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-for-java/">
												Argent for Java </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/356-2/">
												Argent for SNMP </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-for-storage/">
												Argent for Storage </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-for-xenapp/">
												Argent for XenApp </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-for-active-directory/">
												Argent for Active Directory </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-for-sap/">
												Argent for SAP </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-11">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-11" aria-expanded="false"
									aria-controls="collapse11"> Batch Job Automation </button>
							</div>
							<div id="collapse-11" class="collapse " aria-labelledby="heading-11" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/batch-job-automation/">
												Argent Job Scheduler </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-worldview/">
												Argent WorldView </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-13">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-13" aria-expanded="false"
									aria-controls="collapse13"> Web and Intranet </button>
							</div>
							<div id="collapse-13" class="collapse " aria-labelledby="heading-13" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/argent-sentinel-2/">
												Argent Sentinel </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-sentry-ultra/">
												Argent Sentry Ultra </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-14">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-14" aria-expanded="false"
									aria-controls="collapse14"> Security and Compliance </button>
							</div>
							<div id="collapse-14" class="collapse " aria-labelledby="heading-14" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/argent-for-compliance/">
												Argent for Compliance </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-for-security/">
												Argent for Security </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-15">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-15" aria-expanded="false"
									aria-controls="collapse15"> Virtualization </button>
							</div>
							<div id="collapse-15" class="collapse " aria-labelledby="heading-15" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/argent-for-hyper-v/">
												Argent for Hyper-V </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-for-vmware/">
												Argent for VMware </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-for-xenserver/">
												Argent for XenServer </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-16">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-16" aria-expanded="false"
									aria-controls="collapse16"> Enterprise Overviews </button>
							</div>
							<div id="collapse-16" class="collapse " aria-labelledby="heading-16" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/argent-boardroom/">
												Argent BoardRoom </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-commander/">
												Argent Commander </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-global-manager/">
												Argent Global Manager </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-reports/">
												Argent Reports </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading-17">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse-17" aria-expanded="false"
									aria-controls="collapse17"> Databases </button>
							</div>
							<div id="collapse-17" class="collapse " aria-labelledby="heading-17" data-parent="#accordion">
								<div class="card-body">
									<!-- Tabs List -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item"> <a class="nav-link active"
												href="/product/argent-for-mysql/">
												Argent for MySQL </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-for-oracle/">
												Argent for Oracle </a> </li>
										<li class="nav-item"> <a class="nav-link "
												href="/product/argent-for-sql-server/">
												Argent for SQL Server </a> </li>
										<li class="nav-item"> <a class="nav-link " href="/product/argent-for-sybase/">
												Argent for Sybase </a> </li>
									</ul>
									<!-- Tabs List -->
								</div>
							</div>
						</div>
					</div>
					<!-- tab-content -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="first283" role="tabpanel" aria-labelledby="first283-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li role="presentation" class="active"> <a class="active" href="#overview283"
											aria-controls="overview283" role="tab" data-toggle="tab">Overview</a> </li>
									<li role="presentation"> <a class="" href="#tool-sets283" aria-controls="tool-sets283" role="tab"
											data-toggle="tab">Tool Sets</a> </li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade show active " id="overview283">
										<!-- Inner Content Start -->
										<h2>
											Argent Omega </h2>
										<p>Argent Omega is the next-generation Argent monitoring product.</p>
										<p>Argent Omega provides an easy-to-use interface with integrated AI learning.</p>
										<p>For a free 14-day evaluation simply&nbsp;<a
												href="https://help.argent.com/product_downloads/product_downloads_omega/" target="_blank"
												rel="noopener">click here</a></p>
										<div class="Images-wrap">
											<a href="javascript:;" data-fancybox="Argent Omega"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/omega_l1.png" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/omega_l1.png" alt="Image"> </a>
											<a href="javascript:;" data-fancybox="Argent Omega"
												data-src="https://www.argent.com/wp-content/uploads/2022/11/omega_l2.png" target="_blank"> <img
													src="https://www.argent.com/wp-content/uploads/2022/11/omega_l2.png" alt="Image"> </a>
										</div>
										<!-- Inner Content End -->
									</div>
									<div role="tabpanel" class="tab-pane fade " id="tool-sets283">
										<!-- Inner Content Start -->
										<ul>
											<li>Argent Compliance Automator</li>
											<li>Argent Omega Baseline</li>
											<li>Argent Omega for Microsoft 365</li>
											<li>Argent Omega for SNMP</li>
											<li>Argent Omega for SQL Server</li>
											<li>Argent Omega Web Defender</li>
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
	<?php include __DIR__.'/layout/footer.php'; ?>
</body>

</html>