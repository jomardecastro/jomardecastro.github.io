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
          <div class="tab-pane fade show active" id="first454" role="tabpanel" aria-labelledby="first454-tab">
							<!-- Inner Tabs -->
							<div class="inner-tabs">
								<h2>
									Argent Global Manager </h2>
								<p>Argent Global Manager provides web-based access and full control of all Argent AT and Argent XT
									products. Within the past decade, the web browser has become one of the most popular and functional
									access devices on the desktop in virtually all business environments. Whether it’s Firefox or Internet
									Explorer, a web browser is often the very first application opened when a user logs on to their
									computer each day.</p>
								<p>In fact, because Argent Global Manager is fully compatible with all of the award-winning Argent
									products, customers can now create web-based business views of their entire enterprise.</p>
								<p>For a live demo site, visit <a href="http://Global.Argent.com"
										target="_blank">http://Global.Argent.com</a> </p>
								<div class="Images-wrap">
									<a href="javascript:;" data-fancybox="Argent Global Manager"
										data-src="/assets/images/products/console_l_b-3.jpg" target="_blank"> <img
											src="/assets/images/products/console_l_b-3.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Global Manager"
										data-src="/assets/images/products/agu_l_b-1-1.jpg" target="_blank"> <img
											src="/assets/images/products/agu_l_b-1-1.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Global Manager"
										data-src="/assets/images/products/agm_l2_b.jpg" target="_blank"> <img
											src="/assets/images/products/agm_l2_b.jpg" alt="Image"> </a>
									<a href="javascript:;" data-fancybox="Argent Global Manager"
										data-src="/assets/images/products/agm_l1_b.jpg" target="_blank"> <img
											src="/assets/images/products/agm_l1_b.jpg" alt="Image"> </a>
								</div>
								<h3>Fully Secure Environment</h3>
								<p>Argent Global Manager conforms to the security settings within each Argent product, preventing
									unauthorized access to all Argent solutions.</p>
								<h3>Increased Flexibility</h3>
								<p>Web-based access to critical systems and applications results in an unprecedented level of
									flexibility to manage Argent products.</p>
								<h3>Increased Control</h3>
								<p>With virtually all of the functionality of Argent AT built into Argent Global Manager, customers
									never had so much control over their company’s critical applications.</p>
								<h3>Ease Of Use</h3>
								<p>Like all Argent products, Argent Global Manager is inherently easy to use; the web-based architecture
									makes it even easier.</p>
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