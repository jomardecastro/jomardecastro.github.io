<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/swiper.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'
        id='jquery-cdn-js'></script>
	<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
        id='bootstrap.min.js-cdn-js'></script>
    <link rel='stylesheet' id='bootstrap.min-css'
        href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' type='text/css' media='all' />
    
</head>

<body class="font-cairo">

    <main>
    <header class="lg:py-5 bg-white sticky top-0 shadow-header transition-all duration-700">
        <div class="container grid grid-cols-2 lg:flex lg:items-center lg:justify-between lg:px-10">
            <a href="https://instanthelp.argent.com/login"
                class="px-10 lg:p-0 col-span-2 lg:order-last text-[#ff602e] text-lg leading-7 tracking-[2px] font-semibold flex items-center justify-center lg:justify-end bg-[#001647] lg:bg-transparent gap-1">
                <img src="assets/images/support.svg" width="38" height="38" alt="v">
                Instant Help
            </a>
            <a href="#" class="pl-10 py-7 lg:p-0">
                <img src="assets/images/logo.png" width="147" height="16" alt="Logo">
                <span class="sr-only">Logo</span>
            </a>
            <nav class="nav-menu flex justify-end">
                <ul id="menu-header-menu"
                    class="transition-all duration-700 flex flex-col lg:flex-row z-[1] lg:py-0 items-center gap-2 lg:gap-10 fixed lg:static -top-52 left-0 w-full lg:w-auto bg-[#f2fbfc] lg:bg-transparent">
                    <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/index') ? 'active' : ''; ?>">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/products') ? 'active' : ''; ?>">
                        <a href="products" class="nav-link">Products</a>
                    </li>
                    <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/whitepaper') ? 'active' : ''; ?>">
                        <a href="whitepaper" class="nav-link">White Papers</a>
                    </li>
                    <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/company') ? 'active' : ''; ?>">
                        <a href="company" class="nav-link">Company</a>
                    </li>
                    <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/support') ? 'active' : ''; ?>">
                        <a target="_blank" rel="noopener" href="support" class="nav-link">Support</a>
                    </li>
                </ul>
                <div class="toggle-mob-menu w-fit pr-10 py-7 lg:p-0 flex flex-col gap-1.5 items-end lg:hidden"
                    id="toggle">
                    <div class="one transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                    <div class="two transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                    <div class="three transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                </div>
            </nav>
        </div>
    </header>
    </main>
</body>

</html>