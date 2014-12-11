
			<div id="main-menu-bg">
			    
			    
			</div>
			<!--Fondo menu Principal-->
		</div>
		<!-- / #main-wrapper -->
		<!-- Get jQuery from Google CDN -->
		<!--[if !IE]> -->
		<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
		<!-- <![endif]-->
		<!--[if lte IE 9]>
		<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
		<![endif]-->
		<!-- Pixel Admin's javascripts -->
		<script src="{{ URL::to('assets/javascripts/bootstrap.min.js'); }}"></script>
		<script src="{{ URL::to('assets/javascripts/pixel-admin.min.js'); }}"></script>
		<script type="text/javascript">
			init.push(function () {
				// Javascript code here
			})
			window.PixelAdmin.start(init);
		</script>
	</body>
</html>