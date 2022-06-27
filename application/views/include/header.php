<?php
  $timezone = "Asia/Colombo";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>PT. Envilab Indonesia</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/icon.png" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json">
<!-- <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png"> -->
<!-- <link rel="manifest" href="assets/js/web.webmanifest"> -->
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/icon.png">
</head>
<body class="theme-light" data-highlight="highlight-red">

    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

    <div id="page">

        <div class="header header-auto-show header-fixed header-logo-center">
            <a href="index.php" class="header-title">Envilab's Mobile</a>
            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
        </div>
    
    
        <div id="footer-bar" class="footer-bar-6">
            <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Complains</span></a>
            <a href="index-pages.html"><i class="fa fa-file"></i><span>LHU</span></a>
            <a href="index.php" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Home</span></a>
            <a href="index-projects.html"><i class="fa fa-image"></i><span>Quot</span></a>
            <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
        </div>
    
        <div class="page-title page-title-fixed">
            <h1>Envilab on the Hand</h1>
            
            <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
        </div>
        <div class="page-title-clear"></div>
    
        <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome">
		<!-- side menu -->
			<div class="card rounded-0 bg-6" data-card-height="150">
				<div class="card-top">
					<!-- <a href="#" class="close-menu float-end me-2 text-center mt-3 icon-40 notch-clear"><i class="fa fa-times color-white"></i></a> -->
				</div>
				<div class="card-bottom">
					<h1 class="color-white ps-3 mb-n1 font-28">Envilab's Mobile</h1>
					<p class="mb-2 ps-3 font-12 color-white opacity-50">Enviormental Laboratory</p>
				</div>
				<div class="card-overlay bg-gradient"></div>
			</div>
			<div class="mt-4"></div>
			<h6 class="menu-divider">Library</h6>
			<div class="list-group list-custom-small list-menu">
				<a id="nav-welcome" href="index.php">
					<i class="fa fa-heart gradient-red color-white"></i>
					<span>Welcome</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a id="nav-homepages" href="index-homepages.html">
					<i class="fa fa-home gradient-green color-white"></i>
					<span>Home</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a id="nav-components" href="index-components.html">
					<i class="fa fa-cog gradient-blue color-white"></i>
					<span>Complain</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a id="nav-pages" href="index-pages.html">
					<i class="fa fa-file gradient-brown color-white"></i>
					<span>Quotaion</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a id="nav-media" href="index-projects.html">
					<i class="fa fa-camera gradient-magenta color-white"></i>
					<span>Media</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a id="nav-contact" href="page-contact.html">
					<i class="fa fa-envelope gradient-teal color-white"></i>
					<span>Contact</span>
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<h6 class="menu-divider mt-4">Settings</h6>
			<div class="list-group list-custom-small list-menu">
				<a href="#" data-menu="menu-colors">
					<i class="fa fa-brush gradient-highlight color-white"></i>
					<span>Themes</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a href="#" data-toggle-theme="" data-trigger-switch="switch-dark-mode">
					<i class="fa fa-moon gradient-dark color-white"></i>
					<span>Dark Mode</span>
					<div class="custom-control small-switch ios-switch">
						<input data-toggle-theme type="checkbox" class="ios-input" id="toggle-dark-menu">
						<label class="custom-control-label" for="toggle-dark-menu"></label>
					</div>
				</a>
			</div>
			<h6 class="menu-divider mt-4">Contacts</h6>
			<div class="list-group list-custom-small list-menu">
				<a href="#">
					<img src="images/pictures/1s.jpg">
					<span>Suhar</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a href="#">
					<img src="images/pictures/5s.jpg">
					<span>Dinda</span>
					<i class="fa fa-angle-right"></i>
				</a>
				<a href="#">
					<img src="images/pictures/6s.jpg">
					<span>Nur Aini</span>
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			<h6 class="menu-divider font-10 mt-4">Copyright@ITEnvilab   <span class="copyright-year">2022</span></h6>

		</div>
