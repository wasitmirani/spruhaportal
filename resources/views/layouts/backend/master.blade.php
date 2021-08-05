
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">

        <!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title> {{config('app.name')}}</title>

		<!-- Bootstrap css-->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/skins.css" rel="stylesheet">
		<link href="assets/css/dark-style.css" rel="stylesheet">
		<link href="assets/css/colors/default.css" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/css/colors/color.css">


				<!-- Mutipleselect css-->
		<link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css">

		<!-- Sidemenu css-->
		<link href="assets/css/sidemenu/sidemenu.css" rel="stylesheet">

		<!-- Switcher css-->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">
	</head>

	<body class="main-body leftmenu">

		<!-- Switcher -->

		<!-- End Switcher -->

		<!-- Loader -->
		{{-- <div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div> --}}
        <!-- End Loader -->

		<!-- Page -->
		<div class="page">

        <!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="index">
						<img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo" alt="logo">
						<img src="assets/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="logo">
						<img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="assets/img/brand/icon.png" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-header"><span class="nav-label">Dashboard</span></li>
						<li class="nav-item active">
							<a class="nav-link" href="index"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-wallet sidemenu-icon"></i><span class="sidemenu-label">Crypto Currencies</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item ">
									<a class="nav-sub-link " href="cryptodashbaord">Dashboard</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cryptomarket">Marketcap</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cryptocurrencyexchange">Currency exchange</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cryptobuysell">Buy & Sell</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cryptowallet">Wallet</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cryptotranscations">Transcations</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shopping-cart-full sidemenu-icon"></i><span class="sidemenu-label">E-Commerce</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommercedashboard">Dashboard</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommerceproducts">Products</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommerceproductdetails">Product Details</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommercecart">Cart</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommercecheckout">Checkout</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommerceorders">Orders</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="ecommerceaccount">Account</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Applications</span></li>
						<li class="nav-item">
							<a class="nav-link" href="widgets"><span class="shape1"></span><span class="shape2"></span><i class="ti-server sidemenu-icon"></i><span class="sidemenu-label">Widgets</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-email sidemenu-icon"></i><span class="sidemenu-label">Mail</span><span class="badge badge-warning side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mailinbox">Mail-Inbox</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="viewmail">View-Mail</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-write sidemenu-icon"></i><span class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="chat">Chat</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cards">Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="calendar">Calendar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="contacts">Contacts</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-face-smile sidemenu-icon"></i><span class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons01">Font Awesome</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons02">Material Design Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons03">Simple Line Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons04">Feather Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons05">Ionic Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons06">Flag Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons07">Pe7 Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons08">Themify Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons09">Typicons Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons10">Weather Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="icons11">Material Icons</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-map-alt sidemenu-icon"></i><span class="sidemenu-label">Maps</span><span class="badge badge-secondary side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mapmapel">Mapel Maps</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mapvector">Vector Maps</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="tablebasic">Basic Tables</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="tabledata">Data Tables</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Components</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="alerts">Alerts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="avatar">Avatar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="breadcrumbs">Breadcrumbs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="buttons">Buttons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="badge">Badge</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="dropdown">Dropdown</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="thumbnails">Thumbnails</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="listgroup">List Group</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="navigation">Navigation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="pagination">Pagination</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="popover">Popover</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="progress">Progress</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="spinners">Spinners</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mediaobject">Media Object</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="typography">Typography</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="tooltip">Tooltip</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="toast">Toast</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="tags">Tags</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-briefcase sidemenu-icon"></i><span class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="accordion">Accordion</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="carousel">Carousel</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="collapse">Collapse</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="counters">Counters</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="modals">Modals</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="timeline">Timeline</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="darggablecard">Darggable-Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="sweetalert">Sweet Alert</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="rating">Ratings</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="search">Search</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="userlist">Userlist</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="blog">Blog</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-receipt sidemenu-icon"></i><span class="sidemenu-label">Forms</span><span class="badge badge-info side-badge">6</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="formelements">Form Elements</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="formadvanced">Advanced Forms</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="formlayouts">Form Layouts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="formvalidation">Form Validation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="formwizards">Form Wizards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="formeditor">WYSIWYG Editor</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-bar-chart-alt sidemenu-icon"></i><span class="sidemenu-label">Charts</span><span class="badge badge-danger side-badge">5</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="chartmorris">Morris Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="chartflot">Flot Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="chartchartjs">ChartJS</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="chartsparkpeity">Sparkline &amp; Peity</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="chartechart">Echart</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Other Pages</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-palette sidemenu-icon"></i><span class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="profile">Profile</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="invoice">Invoice</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="pricing">Pricing</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="gallery">Gallery</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="faq">Faqs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="successmessage">Success Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="dangermessage">Danger Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="warningmessage">Warning Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="empty">Empty Page</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shield sidemenu-icon"></i><span class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="background">Background</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="border">Border</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="display">Display</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="flex">Flex</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="height">Height</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="margin">Margin</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="padding">Padding</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="position">Position</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="width">Width</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="extras">Extras</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-lock sidemenu-icon"></i><span class="sidemenu-label">Custom Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="signin">Sign In</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="signup">Sign Up</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="forgot">Forgot Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="reset">Reset Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="lockscreen">Lockscreen</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="underconstruction">UnderConstruction</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="error404">404 Error</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="error500">500 Error</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->        <!-- Main Header-->
			<div class="main-header side-header sticky">
				<div class="container-fluid">
					<div class="main-header-left">
						<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="index"><img src="assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
							<a href="index"><img src="assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
						</div>
						<div class="input-group">
							<div class="input-group-btn search-panel">
								<select class="form-control select2-no-search">
									<option label="All categories">
									</option>
									<option value="IT Projects">
										IT Projects
									</option>
									<option value="Business Case">
										Business Case
									</option>
									<option value="Microsoft Project">
										Microsoft Project
									</option>
									<option value="Risk Management">
										Risk Management
									</option>
									<option value="Team Building">
										Team Building
									</option>
								</select>
							</div>
							<input type="search" class="form-control" placeholder="Search for anything...">
							<button class="btn search-btn"><i class="fe fe-search"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search header-icons"></i>
							</a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									<div class="input-group">
										<div class="input-group-btn search-panel">
											<select class="form-control select2-no-search">
												<option label="All categories">
												</option>
												<option value="IT Projects">
													IT Projects
												</option>
												<option value="Business Case">
													Business Case
												</option>
												<option value="Microsoft Project">
													Microsoft Project
												</option>
												<option value="Risk Management">
													Risk Management
												</option>
												<option value="Team Building">
													Team Building
												</option>
											</select>
										</div>
										<input type="search" class="form-control" placeholder="Search for anything...">
										<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"/></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"/><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"/></g></svg>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/french_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">French</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/germany_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Germany</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/img/flags/italy_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Italy</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/img/flags/russia_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Russia</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/spain_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">spain</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div>
						<div class="main-header-notification">
							<a class="nav-link icon" href="chat">
								<i class="fe fe-message-square header-icons"></i>
								<span class="badge badge-success nav-link-badge">6</span>
							</a>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user" ><img alt="avatar" src="assets/img/users/1.jpg"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href="profile">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-settings"></i> Account Settings
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-settings"></i> Support
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-compass"></i> Activity
								</a>
								<a class="dropdown-item" href="signin">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="fe fe-align-right header-icons"></i>
							</a>
						</div>
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->		<!-- Mobile-header -->
			<div class="mobile-main-header">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown header-search">
								<a class="nav-link icon header-search">
									<i class="fe fe-search header-icons"></i>
								</a>
								<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<div class="input-group">
											<div class="input-group-btn search-panel">
												<select class="form-control select2-no-search">
													<option label="All categories">
													</option>
													<option value="IT Projects">
														IT Projects
													</option>
													<option value="Business Case">
														Business Case
													</option>
													<option value="Microsoft Project">
														Microsoft Project
													</option>
													<option value="Risk Management">
														Risk Management
													</option>
													<option value="Team Building">
														Team Building
													</option>
												</select>
											</div>
											<input type="search" class="form-control" placeholder="Search for anything...">
											<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"/></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"/><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"/></g></svg>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/french_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">French</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/germany_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Germany</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/img/flags/italy_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Italy</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/img/flags/russia_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Russia</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/img/flags/spain_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">spain</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown ">
							<a class="nav-link icon full-screen-link">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div>
						<div class="main-header-notification mt-2">
							<a class="nav-link icon" href="chat">
								<i class="fe fe-message-square header-icons"></i>
								<span class="badge badge-success nav-link-badge">6</span>
							</a>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="assets/img/users/1.jpg"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href="profile">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-settings"></i> Account Settings
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-settings"></i> Support
								</a>
								<a class="dropdown-item" href="profile">
									<i class="fe fe-compass"></i> Activity
								</a>
								<a class="dropdown-item" href="signin">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						<div class="dropdown  header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="fe fe-align-right header-icons"></i>
							</a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header closed -->
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">


						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
									  <i class="fe fe-download mr-2"></i> Import
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
									  <i class="fe fe-filter mr-2"></i> Filter
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fe fe-download-cloud mr-2"></i> Download Report
									</button>
								</div>
							</div>
						</div>
						<!-- End Page Header -->

						<!--Row-->
						<div class="row row-sm">
							<div class="col-sm-12 col-lg-12 col-xl-8">

								<!--Row-->
								<div class="row row-sm  mt-lg-4">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="card bg-primary custom-card card-box">
											<div class="card-body p-4">
												<div class="row align-items-center">
													<div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
														<h4 class="d-flex  mb-3">
															<span class="font-weight-bold text-white ">Sonia Taylor!</span>
														</h4>
														<p class="tx-white-7 mb-1">You have two projects to finish, you had completed <b class="text-warning">57%</b> from your montly level,
														Keep going to your level
													</div>
													<img src="assets/img/pngs/work3.png" alt="user-img" class="wd-200">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--Row -->

								<!--Row-->
								<div class="row row-sm">
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-item">
													<div class="card-item-icon card-icon">
														<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
													</div>
													<div class="card-item-title mb-2">
														<label class="main-content-label tx-13 font-weight-bold mb-1">Total Revenue</label>
														<span class="d-block tx-12 mb-0 text-muted">Previous month vs this months</span>
													</div>
													<div class="card-item-body">
														<div class="card-item-stat">
															<h4 class="font-weight-bold">$5,900.00</h4>
															<small><b class="text-success">55%</b> higher</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-item">
													<div class="card-item-icon card-icon">
														<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
													</div>
													<div class="card-item-title mb-2">
														<label class="main-content-label tx-13 font-weight-bold mb-1">New Employees</label>
														<span class="d-block tx-12 mb-0 text-muted">Employees joined this month</span>
													</div>
													<div class="card-item-body">
														<div class="card-item-stat">
															<h4 class="font-weight-bold">15</h4>
															<small><b class="text-success">5%</b> Increased</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
										<div class="card custom-card">
											<div class="card-body">
												<div class="card-item">
													<div class="card-item-icon card-icon">
														<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1.23 13.33V19H10.9v-1.69c-1.5-.31-2.77-1.28-2.86-2.97h1.71c.09.92.72 1.64 2.32 1.64 1.71 0 2.1-.86 2.1-1.39 0-.73-.39-1.41-2.34-1.87-2.17-.53-3.66-1.42-3.66-3.21 0-1.51 1.22-2.48 2.72-2.81V5h2.34v1.71c1.63.39 2.44 1.63 2.49 2.97h-1.71c-.04-.97-.56-1.64-1.94-1.64-1.31 0-2.1.59-2.1 1.43 0 .73.57 1.22 2.34 1.67 1.77.46 3.66 1.22 3.66 3.42-.01 1.6-1.21 2.48-2.74 2.77z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/></svg>
													</div>
													<div class="card-item-title  mb-2">
														<label class="main-content-label tx-13 font-weight-bold mb-1">Total Expenses</label>
														<span class="d-block tx-12 mb-0 text-muted">Previous month vs this months</span>
													</div>
													<div class="card-item-body">
														<div class="card-item-stat">
															<h4 class="font-weight-bold">$8,500</h4>
															<small><b class="text-danger">12%</b> decrease</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--End row-->

								<!--row-->
								<div class="row row-sm">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="card custom-card overflow-hidden">
											<div class="card-header border-bottom-0">
												<div>
													<label class="main-content-label mb-2">Project Budget</label> <span class="d-block tx-12 mb-0 text-muted">The Project Budget is a tool used by project managers to estimate the total cost of a project</span>
												</div>
											</div>
											<div class="card-body pl-0">
												<div class>
													<div class="container">
													   <canvas id="chartLine" class="chart-dropshadow2 ht-250"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div><!-- col end -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card overflow-hidden">
											<div class="card-header  border-bottom-0 pb-0">
												<div>
													<div class="d-flex">
														<label class="main-content-label my-auto pt-2">Today tasks</label>
														<div class="ml-auto mt-3 d-flex">
															<div class="mr-3 d-flex text-muted tx-13"><span class="legend bg-primary rounded-circle"></span>Project</div>
															<div class="d-flex text-muted tx-13"><span class="legend bg-light rounded-circle"></span>Inprogress</div>
														</div>
													</div>
													<span class="d-block tx-12 mt-2 mb-0 text-muted"> UX UI & Backend Developement. </span>
												</div>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-sm-6 my-auto">
														<h6 class="mb-3 font-weight-normal">Project-Budget</h6>
														<div class="text-left">
															<h3 class="font-weight-bold mr-3 mb-2 text-primary">$5,240</h3>
															<p class="tx-13 my-auto text-muted">May 28 - June 01 (2018)</p>
														</div>
													</div>
													<div class="col-md-6 my-auto">
														<div class="forth circle">
															<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- col end -->
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card custom-card">
											<div class="card-header  border-bottom-0 pb-0">
												<div>
													<div class="d-flex">
														<label class="main-content-label my-auto pt-2">Top Inquiries</label>
													</div>
													<span class="d-block tx-12 mt-2 mb-0 text-muted"> project work involves a group of students investigating . </span>
												</div>
											</div>
											<div class="card-body">
												<div class="row mt-1">
													<div class="col-5">
														<span class="">Brand identity</span>
													</div>
													<div class="col-4 my-auto">
														<div class="progress ht-6 my-auto">
															<div class="progress-bar ht-6 wd-80p" role="progressbar"  aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-3">
														<div class="d-flex">
															<span class="tx-13"><i class="text-success fe fe-arrow-up"></i><b>24.75%</b></span>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-5">
														<span class="">UI & UX design</span>
													</div>
													<div class="col-4 my-auto">
														<div class="progress ht-6 my-auto">
															<div class="progress-bar ht-6 wd-70p" role="progressbar"  aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-3">
														<div class="d-flex">
															<span class="tx-13"><i class="text-danger fe fe-arrow-down"></i><b>12.34%</b></span>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-5">
														<span class="">Product design</span>
													</div>
													<div class="col-4 my-auto">
														<div class="progress ht-6 my-auto">
															<div class="progress-bar ht-6 wd-40p" role="progressbar"  aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<div class="col-3">
														<div class="d-flex">
															<span class="tx-13"><i class="text-success  fe fe-arrow-up"></i><b>12.75%</b></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div><!-- col end -->
									<div class="col-lg-12">
										<div class="card custom-card mg-b-20">
											<div class="card-body">
												<div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">
													<div>
														<label class="main-content-label mb-2">Tasks</label> <span class="d-block tx-12 mb-3 text-muted">A task is accomplished by a set deadline, and must contribute toward work-related objectives.</span>
													</div>
													<div class="ml-auto">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">Task</a>
															<a class="dropdown-item" href="#">Team</a>
															<a class="dropdown-item" href="#">Status</a>
															<div class="dropdown-divider"></div>
															<a class="dropdown-item" href="#"><i class="fa fa-cog mr-2"></i> Settings</a>
														</div>
													</div>
												</div>
												<div class="table-responsive tasks">
													<table class="table card-table table-vcenter text-nowrap mb-0  border">
														<thead>
															<tr>
																<th class="wd-lg-10p">Task</th>
																<th class="wd-lg-20p">Team</th>
																<th class="wd-lg-20p text-center">Open task</th>
																<th class="wd-lg-20p">Prority</th>
																<th class="wd-lg-20p">Status</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="font-weight-semibold d-flex"><label class="ckbox my-auto mr-4 mt-1"><input checked="" type="checkbox"><span></span></label><span class="mt-1">Evaluating the design</span></td>
																<td class="text-nowrap">
																	<div class="demo-avatar-group my-auto float-right">
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/1.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/2.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/3.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/4.jpg">
																		</div>
																	</div>
																</td>
																<td class="text-center">37<i class=""></i></td>
																<td class="text-primary">High</td>
																<td><span class="badge badge-pill badge-primary-light">Completed</span></td>
															</tr>
															<tr>
																<td class="font-weight-semibold d-flex"><label class="ckbox my-auto mr-4"><input checked="" type="checkbox"><span></span></label><span class="mt-1"> Generate ideas for design</span></td>
																<td class="text-nowrap">
																	<div class="demo-avatar-group my-auto float-right">
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/5.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/6.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/7.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/8.jpg">
																		</div>
																	</div>
																</td>
																<td class="text-center">37<i class=""></i></td>
																<td class="text-secondary">Normal</td>
																<td><span class="badge badge-pill badge-warning-light">Pending</span></td>
															</tr>
															<tr>
																<td class="font-weight-semibold d-flex"><label class="ckbox my-auto mr-4"><input type="checkbox"><span></span></label><span class="mt-1">Define the problem</span></td>
																<td class="text-nowrap">
																	<div class="demo-avatar-group my-auto float-right">
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/11.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/12.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/9.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/10.jpg">
																		</div>
																	</div>
																</td>
																<td class="text-center">37<i class=""></i></td>
																<td class="text-warning">Low</td>
																<td><span class="badge badge-pill badge-primary-light">Completed</span></td>
															</tr>
															<tr>
																<td class="font-weight-semibold d-flex"><label class="ckbox my-auto mr-4"><input type="checkbox"><span></span></label><span class="mt-1">Empathize with users</span></td>
																<td class="text-nowrap">
																	<div class="demo-avatar-group my-auto float-right">
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/7.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/9.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/11.jpg">
																		</div>
																		<div class="main-img-user avatar-sm">
																			<img alt="avatar" class="rounded-circle" src="assets/img/users/12.jpg">
																		</div>
																	</div>
																</td>
																<td class="text-center">37<i class=""></i></td>
																<td class="text-primary">High</td>
																<td><span class="badge badge-pill badge-danger-light">Rejected</span></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div><!-- col end -->
								</div><!-- Row end -->
							</div><!-- col end -->
							<div class="col-sm-12 col-lg-12 col-xl-4 mt-xl-4">
								<div class="card custom-card card-dashboard-calendar pb-0">
									<label class="main-content-label mb-2 pt-1">Recent transcations</label>
									<span class="d-block tx-12 mb-2 text-muted">Projects where development work is on completion</span>
									<table class="table table-hover m-b-0 transcations mt-2">
										<tbody>
											<tr>
												<td class="wd-5p">
													<div class="main-img-user avatar-md">
														<img alt="avatar" class="rounded-circle mr-3" src="assets/img/users/5.jpg">
													</div>
												</td>
												<td>
													<div class="d-flex align-middle ml-3">
														<div class="d-inline-block">
															<h6 class="mb-1">Flicker</h6>
															<p class="mb-0 tx-13 text-muted">App improvement</p>
														</div>
													</div>
												</td>
												<td class="text-right">
													<div class="d-inline-block">
														<h6 class="mb-2 tx-15 font-weight-semibold">$45.234<i class="fas fa-level-up-alt ml-2 text-success m-l-10"></i></h6>
														<p class="mb-0 tx-11 text-muted">12 Jan 2020</p>
													</div>
												</td>
											</tr>
											 <tr>
												<td class="wd-5p">
													<div class="main-img-user avatar-md">
														<img alt="avatar" class="rounded-circle mr-3" src="assets/img/users/6.jpg">
													</div>
												</td>
												<td>
													<div class="d-flex align-middle ml-3">
														<div class="d-inline-block">
															<h6 class="mb-1">Intoxica</h6>
															<p class="mb-0 tx-13 text-muted">Milestone</p>
														</div>
													</div>
												</td>
												<td class="text-right">
													<div class="d-inline-block">
														<h6 class="mb-2 tx-15 font-weight-semibold">$23.452<i class="fas fa-level-down-alt ml-2 text-danger m-l-10"></i></h6>
														<p class="mb-0 tx-11 text-muted">23 Jan 2020</p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="wd-5p">
													<div class="main-img-user avatar-md">
														<img alt="avatar" class="rounded-circle mr-3" src="assets/img/users/7.jpg">
													</div>
												</td>
												<td>
													<div class="d-flex align-middle ml-3">
														<div class="d-inline-block">
															<h6 class="mb-1">Digiwatt</h6>
															<p class="mb-0 tx-13 text-muted">Sales executive</p>
														</div>
													</div>
												</td>
												<td class="text-right">
													<div class="d-inline-block">
														<h6 class="mb-2 tx-15 font-weight-semibold">$78.001<i class="fas fa-level-down-alt ml-2 text-danger m-l-10"></i></h6>
														<p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="wd-5p">
													<div class="main-img-user avatar-md">
														<img alt="avatar" class="rounded-circle mr-3" src="assets/img/users/8.jpg">
													</div>
												</td>
												<td>
													<div class="d-flex align-middle ml-3">
														<div class="d-inline-block">
															<h6 class="mb-1">Flicker</h6>
															<p class="mb-0 tx-13 text-muted">Milestone2</p>
														</div>
													</div>
												</td>
												<td class="text-right">
													<div class="d-inline-block">
														<h6 class="mb-2 tx-15 font-weight-semibold">$37.285<i class="fas fa-level-up-alt ml-2 text-success m-l-10"></i></h6>
														<p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
													</div>
												</td>
											</tr>
											<tr>
												<td class="wd-5p pb-0">
													<div class="main-img-user avatar-md">
														<img alt="avatar" class="rounded-circle mr-3" src="assets/img/users/4.jpg">
													</div>
												</td>
												<td class="pb-0">
													<div class="d-flex align-middle ml-3">
														<div class="d-inline-block">
															<h6 class="mb-1">Flicker</h6>
															<p class="mb-0 tx-13 text-muted">App improvement</p>
														</div>
													</div>
												</td>
												<td class="text-right pb-0">
													<div class="d-inline-block">
														<h6 class="mb-2 tx-15 font-weight-semibold">$25.341<i class="fas fa-level-down-alt ml-2 text-danger m-l-10"></i></h6>
														<p class="mb-0 tx-11 text-muted">4 Apr 2020</p>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="row row-sm">
											<div class="col-6">
												<div class="card-item-title">
													<label class="main-content-label tx-13 font-weight-bold mb-2">Project Launch</label>
													<span class="d-block tx-12 mb-0 text-muted">the project is going to launch</span>
												</div>
												<p class="mb-0 tx-24 mt-2"><b class="text-primary">145 days</b></p>
												<a href="#" class="text-muted">12 Monday, Oct 2020 </a>
											</div>
											<div class="col-6">
												<img src="assets/img/pngs/work.png" alt="image" class="best-emp">
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header border-bottom-0 pb-0 d-flex pl-3 ml-1">
										<div>
											<label class="main-content-label mb-2 pt-2">On goiong projects</label>
											<span class="d-block tx-12 mb-2 text-muted">Projects where development work is on completion</span>
										</div>
									</div>
									<div class="card-body pt-2 mt-0">
										<div class="list-card">
											<div class="d-flex">
												<div class="demo-avatar-group my-auto float-right">
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/1.jpg">
													</div>
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/2.jpg">
													</div>
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/3.jpg">
													</div>
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/4.jpg">
													</div>
													<div class="">Design team</div>
												</div>
												<div class="ml-auto float-right">
													<div class="">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-right" style="">
															<a class="dropdown-item" href="#">Today</a>
															<a class="dropdown-item" href="#">Last Week</a>
															<a class="dropdown-item" href="#">Last Month</a>
															<a class="dropdown-item" href="#">Last Year</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-item mt-4">
												<div class="card-item-icon bg-transparent card-icon">
													<span class="peity-donut" data-peity='{ "fill": ["#6259ca", "rgba(204, 204, 204,0.3)"], "innerRadius": 15, "radius": 20}'>6/7</span>
												</div>
												<div class="card-item-body">
													<div class="card-item-stat">
														<small class="tx-10 text-primary font-weight-semibold">25 August 2020</small>
														<h6 class=" mt-2">Mobile app design</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="list-card mb-0">
											<div class="d-flex">
												<div class="demo-avatar-group my-auto float-right">
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/5.jpg">
													</div>
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/6.jpg">
													</div>
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/7.jpg">
													</div>
													<div class="main-img-user avatar-xs">
														<img alt="avatar" class="rounded-circle" src="assets/img/users/8.jpg">
													</div>
													<div class="">Design team</div>
												</div>
												<div class="ml-auto float-right">
													<div class="">
														<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
														<div class="dropdown-menu dropdown-menu-right" style="">
															<a class="dropdown-item" href="#">Today</a>
															<a class="dropdown-item" href="#">Last Week</a>
															<a class="dropdown-item" href="#">Last Month</a>
															<a class="dropdown-item" href="#">Last Year</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-item mt-4">
												<div class="card-item-icon bg-transparent card-icon">
													<span class="peity-donut" data-peity='{ "fill": ["#6259ca", "rgba(204, 204, 204,0.3)"], "innerRadius": 15, "radius": 20}'>5/7</span>
												</div>
												<div class="card-item-body">
													<div class="card-item-stat">
														<small class="tx-10 text-primary font-weight-semibold">12 JUNE 2020</small>
														<h6 class=" mt-2">Website Redesign</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div class="d-flex">
											<label class="main-content-label my-auto">Website Design</label>
											<div class="ml-auto  d-flex">
												<div class="mr-3 d-flex text-muted tx-13">Running</div>
											</div>
										</div>
										<div class="mt-2">
											<div>
												<span class="tx-15 text-muted">Task completed : 7/10</span>
											</div>
											<div class="container mt-2 mb-2">
											   <canvas id="bar-chart" class="ht-180"></canvas>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<div class="d-flex mb-2">
														<h5 class="tx-15 my-auto text-muted font-weight-normal">Client :</h5>
														<h5 class="tx-15 my-auto ml-3">John Deo</h5>
													</div>
													<div class="d-flex mb-0">
														<h5 class="tx-13 my-auto text-muted font-weight-normal">Deadline :</h5>
														<h5 class="tx-13 my-auto text-muted ml-2">25 Dec 2020</h5>
													</div>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-3">
													<div class="">
														<img alt="" class="ht-50" src="assets/img/media/project-logo.png">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- col end -->
						</div><!-- Row end -->


					</div>
				</div>
			</div>
			<!-- End Main Content-->

		<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span>Copyright © 2020 <a href="#">Spruha</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->				<!-- Sidebar -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="sidebar-icon">
					<a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>Todo</h5>
					<div class="d-flex p-3">
						<label class="ckbox"><input checked  type="checkbox"><span>Hangout With friends</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input  type="checkbox"><span>System Updated</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input  type="checkbox"><span>Find an Idea</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top mb-0">
						<label class="ckbox"><input  type="checkbox"><span>Project review</span></label>
						<span class="ml-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<h5>Overview</h5>
					<div class="p-4">
						<div class="main-traffic-detail-item">
							<div>
								<span>Founder &amp; CEO</span> <span>24</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>UX Designer</span> <span>1</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Recruitment</span> <span>87</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Software Engineer</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Project Manager</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Sidebar -->
		</div>
        <!-- End Page -->

        <!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

		<!-- Bootstrap js-->
		<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Select2 js-->

		<!-- Perfect-scrollbar js -->
		<script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Sidemenu js -->
		<script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- Sidebar js -->
		<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

		        <!-- Internal Chart.Bundle js-->
		<script src="{{asset('assets/plugins/chart.js')}}/Chart.bundle.min.js')}}"></script>

		<!-- Peity js-->
        <script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Internal Morris js -->
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets/plugins/morris.js')}}/morris.min.js')}}"></script>

		<!-- Circle Progress js-->
		<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('assets/js/chart-circle.js')}}"></script>

		<!-- Internal Dashboard js-->
        <script src="{{asset('assets/js/index.js')}}"></script>

		<!-- Sticky js -->
		<script src="{{asset('assets/js/sticky.js')}}"></script>

		<!-- Custom js -->
		<script src="{{asset('assets/js/custom.js')}}"></script>

		<!-- Switcher js -->
		<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
	</body>
</html>
