 

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

 