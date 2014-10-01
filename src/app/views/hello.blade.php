
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Evek Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

	<!-- Pixel Admin's stylesheets -->
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->

</head>


<body class="theme-default main-menu-animated">

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION TOP MENU===========================================================================

	Main navigation
-->
	<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
		<!-- Main menu toggle -->
		<button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
		
		<div class="navbar-inner">
			<!-- Main navbar header -->
			<div class="navbar-header">

				<!-- Logo -->
				<a href="{{ URL::to('/'); }}" class="navbar-brand">
					<div><img alt="Pixel Admin" src="{{ URL::to('/assets/img/logo.png'); }}"></div>
					Eveck Inventario
				</a>

				<!-- Main navbar toggle -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

			</div> <!-- / .navbar-header -->

			<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="#">Home</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventario</a>
							<ul class="dropdown-menu">
								<li><a href="#">Clientes</a></li>
								<li class="divider"></li>
								<li><a href="#">Productos</a></li>
							</ul>
						</li>
					</ul> <!-- / .navbar-nav -->

					<!--SUB MENU DERECHO -->
					<div class="right clearfix">
						<ul class="nav navbar-nav pull-right right-navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
									<img src="assets/img/logo.png">
									<span><?php echo Auth::user()->name; ?></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"><span class="label label-warning pull-right">New</span>Perfil</a></li>
									<li><a href="#"><span class="badge badge-primary pull-right">New</span>Cuenta</a></li>
									<li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Opciones</a></li>
									<li class="divider"></li> 
									<li><a href="{{ URL::to('logout'); }}"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Cerrar Sesion</a></li>
								</ul>
							</li>
						</ul> <!-- / .navbar-nav -->
					</div> <!-- / .right -->
				</div>
			</div> <!-- / #main-navbar-collapse -->
		</div> <!-- / .navbar-inner -->
	</div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU  IZQUIERDA=================================================================================-->

	<div id="main-menu" role="navigation">
		<div id="main-menu-inner">
			<div class="menu-content top" id="menu-content-demo">	
				<div>
					<div class="text-bg"><span class="text-slim">Bienvenido,</span><br/> <span class="text-semibold">{{Auth::user()->name;}}</span></div>
					<img src="assets/img/logo.png" alt="" class="">
					<div class="btn-group"><!--icons Main Menu-->
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
						<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
						<a href="{{ URL::to('logout'); }}" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
					</div>
					<a href="#" class="close">&times;</a>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="{{ URL::to('/'); }}"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Inventario</span></a>
				</li>
			</ul> <!-- / .navigation -->			
		</div> <!-- / #main-menu-inner -->
	</div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->


	<div id="content-wrapper">
  		<div class="page-header">
			<h1><span class="text-light-gray">Inventario / </span>Productos</h1>
		</div> <!-- / .page-header -->

		
		<div class="row">
			<div class="col-sm-12">
				<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">Productos</span>
					</div>
					<div class="panel-body">
						
						TABLA DE PRODUCTOS

					</div>
				</div>
			</div>
		</div>



	</div> <!-- / #content-wrapper -->
	<div id="main-menu-bg"></div><!--Fondo menu Principal-->
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>

</body>
</html>