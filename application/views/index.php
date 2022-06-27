<?php  
 $sumber = 'http://app.envilab.co.id/envilabapi/';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
 include 'include/header.php'; 
 //echo base_url();
?>
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
     <?php
		include 'include/footer.php'; 
	 ?>
