<?php  
 $sumber = 'http://app.envilab.co.id/envilabapi/';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
 include 'include/header.php'; 
 include 'include/footer.php'; 
 //echo base_url();
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
         
    
        <div class="page-content">
    
            <div class="splide double-slider visible-slider slider-no-dots" id="double-slider-1">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide ps-3">
                            <div data-card-height="220" class="card  shadow-xl rounded-m bg-6">
                                <div class="card-bottom text-center">
                                    <h4 class="color-white font-800 mb-3">PWA Ready</h4>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>
                        
                        <div class="splide__slide ps-3">
                            <div data-card-height="220" class="card  shadow-xl rounded-m bg-16">
                                <div class="card-bottom text-center">
                                    <h4 class="color-white font-800 mb-3">Bootstrap</h4>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>

                        <div class="splide__slide ps-3">
                            <div data-card-height="220" class="card  shadow-xl rounded-m bg-19">
                                <div class="card-bottom text-center">
                                    <h4 class="color-white font-800 mb-3">Dark Mode</h4>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>

                        <div class="splide__slide ps-3">
                            <div data-card-height="220" class="card  shadow-xl rounded-m bg-31">
                                <div class="card-bottom text-center">
                                    <h4 class="color-white font-800 mb-3">SCSS & RTL</h4>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>

                        <div class="splide__slide ps-3">
                            <div data-card-height="220" class="card  shadow-xl rounded-m bg-33">
                                <div class="card-bottom text-center">
                                    <h4 class="color-white font-800 mb-3">Mobile Kit</h4>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    
    
            <div class="card card-style shadow-xl">
                <div class="content">
                    <p class="color-highlight font-600 mb-n1">Office</p>
                    <h1 class="font-24 font-700 mb-2">HEAD OFFICE AND LABORATORY <i class="fa fa-star mt-n2 font-30 color-yellow-dark float-end me-2 scale-box"></i></h1>
                    <p class="mb-1">
                        Manyar Mas Karimun
                        Industrial Business Park B-35, Jl Raya Manyar Km.11, Gresik 61151,Jawa Timur
                        Telp : 031 9900 6835
                        Fax : 031 9900 6834
                        Email :
                        – info@envilab-id.com
                        – admin@envilabindonesia.com
                    </p>
                </div>
            </div>
    
     
    
            <div class="row mb-0">
                <a href="#" class="col-6 pe-0">
                    <div class="card mr-0 card-style">
                        <div class="d-flex pt-3 pb-3">
                            <div class="align-self-center">
                                <i class="fa fa-home color-green-light ms-3 font-34 mt-1"></i>
                            </div>
                            <div class="align-self-center">
                                <h5 class="ps-2 ms-1 mb-0">In Hand <br> Ready</h5>
                            </div>
                        </div>
                        <p class="px-3">
                            Enjoy Envilab's Mobile from your Home Screen.
                        </p>
                    </div>
                </a>
                <a href="#" class="col-6 ps-0">
                    <div class="card ml-0 card-style">
                        <div class="d-flex pt-3 pb-3">
                            <div class="align-self-center">
                                <i class="fa fa-cog color-blue-dark ms-3 font-34 mt-1"></i>
                            </div>
                            <div class="align-self-center">
                                <h5 class="ps-2 ms-1 mb-0">Clean<br>Code</h5>
                            </div>
                        </div>
                        <p class="px-3">
                            Powered by Bootstrap makes your job easier!
                        </p>
                    </div>
                </a>
            </div>
    
            <a href="#" data-toggle-theme>
                <div class="card card-style">
                    <div class="d-flex pt-3 mt-1 mb-2 pb-2">
                        <div class="align-self-center">
                            <i class="color-icon-gray color-gray-dark font-30 icon-40 text-center fa fa-moon ms-3 show-on-theme-light"></i>
                            <i class="color-icon-yellow color-yellow-dark font-30 icon-40 text-center fa fa-sun ms-3 show-on-theme-dark"></i>
                        </div>
                        <div class="align-self-center">
                            <p class="ps-2 ms-1 color-highlight font-500 mb-n1 mt-n2">Tap to Enable</p>
                            <h4 class="show-on-theme-light ps-2 ms-1 mb-0">Dark Mode</h4>
                            <h4 class="show-on-theme-dark ps-2 ms-1 mb-0">Light Mode</h4>
                        </div>
                        <div class="ms-auto align-self-center mt-n2">
                            <div class="custom-control small-switch ios-switch me-3 mt-n2">
                                <input data-toggle-theme type="checkbox" class="ios-input" id="toggle-dark-home">
                                <label class="custom-control-label" for="toggle-dark-home"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
    
            <!-- <div data-menu-load="menu-footer.html">

			</div> -->

			<div>
				<div class="card card-style shadow-xl">
					<h4 class="font-24 text-center color-theme font-800 pt-3 mt-3">Overviews</h4>
				

						<div class="content">
							
							<p class="mb-1">
								PT. Envilab Indonesia is an environmental laboratory that has been accredited by KAN. We provide comprehensive environmental analysis services for industry, consultants, government in East Java since 2006. With the support of professional tools and teams, we are able to serve customers throughout Indonesia. Our main goal is to provide the best services to support industrial behavior in accordance with the environmental minister’s regulations.
							</p>
					
					</div>

					<div class="text-center mb-4">
						<a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-twitter"><i class="fab fa-twitter"></i></a>
						<a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
						<a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm mr-1 shadow-l bg-red-dark"><i class="fa fa-share-alt"></i></a>
						<a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-highlight color-white"><i class="fa fa-arrow-up"></i></a>
					</div>
					<div class="divider mb-3"></div>
				 
				</div>
			</div>
    
    
        </div>
        <!-- End of Page Content-->
        <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->
    
        <!-- Menu Share -->
         
        <!-- Be sure this is on your main visiting page, for example, the index.html page-->
        <!-- Install Prompt for Android -->
        <div id="menu-install-pwa-android" class="menu menu-box-bottom rounded-m">
            <img class="mx-auto mt-4 rounded-m" src="<?php echo base_url(); ?>assets/img/icon.png" alt="img" width="90">
            <h4 class="text-center mt-4 mb-2">Tambahkan di Home</h4>
            <p class="text-center boxed-text-xl">
                Install Hallo Envilab di Home Screen Untuk mempermudah akses selanjutnya, tekan "Tambahkan di Home"
            </p>
            <div class="boxed-text-l">
                <a href="#" class="pwa-install mx-auto btn btn-m font-600 bg-highlight">Add to Home Screen</a>
                <a href="#" class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12 pb-4 mb-3">Nanti</a>
            </div>
        </div>
    
        <!-- Install instructions for iOS -->
        <div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m">
            <div class="boxed-text-xl top-25">
                <img class="mx-auto mt-4 rounded-m" src="<?php echo base_url(); ?>assets/img/icon.png" alt="img" width="90">
                <h4 class="text-center mt-4 mb-2">Tambahkan di Home</h4>
                <p class="text-center ms-3 me-3">
				Install Hallo Envilab di Home Screen Untuk mempermudah akses selanjutnya, tekan "Tambahkan di Home"
                </p>
                <a href="#" class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-700 color-red-light opacity-90 font-110 pb-5">Nanti</a>
            </div>
        </div>
    
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/scripts/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/register.js"></script>

	<script src="<?php echo base_url(); ?>upup.min.js"></script>
	<script>
		UpUp.start({
			'cache-version' : 'v2',
			'content-url': '<?php echo site_url($this->uri->segment(1)); ?>',
			'content' : 'Please Check Your Internet',
			'service-worker-url':'<?php echo base_url(); ?>upup.sw.min.js' // show this page to offline users
		});
	</script>

</body>
</html>
