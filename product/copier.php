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
            __PLACE__HERE__
          </div>
				</div>
			</div>
		</section>
	</main>
	<?php include $_SERVER['DOCUMENT_ROOT'] .'/layout/footer.php'; ?>
</body>

</html>