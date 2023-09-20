<header class="header desktop lg:py-5 bg-white transition-all duration-700" style="z-index:1">
    <div class="container grid grid-cols-2 lg:flex lg:items-center lg:justify-between lg:px-10">
        <a href="https://instanthelp.argent.com/login"
            class="px-10 lg:p-0 col-span-2 lg:order-last text-[#ff602e] text-lg leading-7 tracking-[2px] font-semibold flex items-center justify-center lg:justify-end bg-[#001647] lg:bg-transparent gap-1">
            <img src="/assets/images/support.svg" width="38" height="38" alt="v">
            Instant Help
        </a>
        <a href="/" class="pl-10 py-7 lg:p-0">
            <img src="/assets/images/main-logo-transparent.png" width="147" height="16" alt="Logo">
            <span class="sr-only">Logo</span>
        </a>
        <nav class="nav-menu flex justify-end">
            <ul id="menu-header-menu"
                class="transition-all duration-700 flex flex-col lg:flex-row z-[1] lg:py-0 items-center gap-2 lg:gap-10 fixed lg:static -top-52 left-0 w-full lg:w-auto bg-[#f2fbfc] lg:bg-transparent">
                <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/products.php') ? 'active' : ''; ?>">
                    <a href="/products.php" class="nav-link">Products</a>
                </li>
                <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/whitepaper.php') ? 'active' : ''; ?>">
                    <a href="/whitepaper.php" class="nav-link">White Papers</a>
                </li>
                <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/company.php') ? 'active' : ''; ?>">
                    <a href="/company.php" class="nav-link">Company</a>
                </li>
                <li class="menu-item nav-item">
                    <a target="_blank" rel="noopener" href="https://help.argent.com/support/" class="nav-link">Support</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<header class="header mob">
    <div class="container">
        <div class="row align-items-center">
            <div class="logo">
                <a href="/">
                    <img src="/assets/images/main-logo-transparent.png" width="147" height="16" alt="Logo">
                    <span class="sr-only">Logo</span>
                </a>
            </div>
            <nav class="nav-menu flex justify-end">
                <ul id="menu-header-menu-mob" class="navbar-list">
                    <li class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li
                        class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/products.php') ? 'active' : ''; ?>">
                        <a href="/products.php" class="nav-link">Products</a>
                    </li>
                    <li
                        class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/whitepaper.php') ? 'active' : ''; ?>">
                        <a href="/whitepaper.php" class="nav-link">White Papers</a>
                    </li>
                    <li
                        class="menu-item nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/company.php') ? 'active' : ''; ?>">
                        <a href="/company.php" class="nav-link">Company</a>
                    </li>
                    <li class="menu-item nav-item">
                        <a target="_blank" rel="noopener" href="https://help.argent.com/support/"
                            class="nav-link">Support</a>
                    </li>
                </ul>
                <div class="toggle">
                    <div class="one transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                    <div class="two transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                    <div class="three transition-all duration-300 origin-center h-[3px] w-7 bg-[#ff602e]"></div>
                </div>
            </nav>
            <div class="support-wrap">
                <ul class="d-flex align-items-center">
                    <li>
                        <a class="button" href="https://instanthelp.argent.com/login" target="_blank">
                            <img src="/assets/images/support.svg" alt="Icon">Instant Help</a>
                    </li>
                </ul>
            </div>
        </div>
        
        
    </div>
</header>