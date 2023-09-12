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
          <div class="tab-pane fade show active" id="first460" role="tabpanel" aria-labelledby="first460-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<h2>
									Argent Reports </h2>
								<p>Argent has used industry-standard Crystal Reports in all Argent products for over 15 years</p>
								<p>To help customers better leverage Web 2.0 in their use of Argent, Argent has created a new
									customizable reporting product, which we’ve dubbed “Argent Reports” (very imaginative, you say)</p>
								<p>Argent Reports is a clean and crisp product you can use to instantly create your own reports</p>
								<p>You can see a read-only version of Argent Reports at <a href="http://ArgentReports.Argent.com"
										target="_blank" rel="noopener">http://ArgentReports.Argent.com</a></p>
								<p>Just think of it — a few clicks on a simple Web 2.0 template and you’re done</p>
								<p>An easy-to-use but exceptionally powerful scheduler is built in so you can create your own Reports
									and Report Groups in minutes — no hassle, just automated productivity</p>
								<p>For a live demo site, visit <a href="http://ArgentReports.Argent.com"
										target="_blank">http://ArgentReports.Argent.com</a> </p>
								<div class="Images-wrap">
									<a href="javascript:;" data-fancybox="Argent Reports"
										data-src="/assets/images/products/reports4_large.jpg" target="_blank">
										<img src="/assets/images/products/reports4_large.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Reports"
										data-src="/assets/images/products/reports3_large.jpg" target="_blank">
										<img src="/assets/images/products/reports3_large.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Reports"
										data-src="/assets/images/products/reports2_large_b.jpg" target="_blank">
										<img src="/assets/images/products/reports2_large_b.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Reports"
										data-src="/assets/images/products/reports1_large_b.jpg" target="_blank">
										<img src="/assets/images/products/reports1_large_b.jpg" alt="Image"> </a>
								</div>
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