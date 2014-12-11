<!DOCTYPE html>
<!--[if IE 8]>         
<html class="ie8">
	<![endif]-->
	<!--[if IE 9]>         
	<html class="ie9 gt-ie8">
		<![endif]-->
		<!--[if gt IE 9]><!--> 
		<html class="gt-ie8 gt-ie9 not-ie">
			<!--<![endif]-->
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<title>Evek Admin</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
				<!-- Open Sans font from Google CDN -->
				<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
				<!-- Pixel Admin's stylesheets -->
				<link href="{{ URL::to('assets/stylesheets/bootstrap.min.css'); }}" rel="stylesheet" type="text/css">
				<link href="{{ URL::to('assets/stylesheets/pixel-admin.min.css'); }}" rel="stylesheet" type="text/css">
				<link href="{{ URL::to('assets/stylesheets/widgets.min.css'); }}" rel="stylesheet" type="text/css">
				<link href="{{ URL::to('assets/stylesheets/rtl.min.css'); }}" rel="stylesheet" type="text/css">
				<link href="{{ URL::to('assets/stylesheets/themes.min.css'); }}" rel="stylesheet" type="text/css">
				<!--[if lt IE 9]>
				<script src="{{ URL::to('assets/javascripts/ie.min.js'); }}"></script>
				<![endif]-->
			</head>
			<body class="theme-default main-menu-animated">
				<script>var init = [];</script>
				
				
				<div id="main-wrapper">
					<!-- 2. $MAIN_NAVIGATION TOP MENU -->
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
							</div>
							<!-- / .navbar-header -->
							<div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
								<div>
								    <!-- MENU PRINCIPAL -->
									<ul class="nav navbar-nav">
										<li>
											<a href="#">Home</a>
										</li>
										<li>
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios</a>
											<ul class="dropdown-menu">
												<li><a href="{{ URL::to('users') }}">View All</a></li>
												<li><a href="{{ URL::to('users/create') }}">Create a Nerd</a>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventario</a>
											<ul class="dropdown-menu">
												<li><a href="{{ URL::to('/'); }}/clientes">Clientes</a></li>
												<li class="divider"></li>
												<li><a href="{{ URL::to('/'); }}/productos">Productos</a></li>
											</ul>
										</li>
									</ul>
									<!-- / .navbar-nav -->
									<!--SUB MENU DERECHO -->
									<div class="right clearfix">
										<ul class="nav navbar-nav pull-right right-navbar-nav">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
												<img src="assets/img/logo.png">
												<span>{{Auth::user()->name;}}</span>
												</a>
												<ul class="dropdown-menu">
													<li><a href="#"><span class="label label-warning pull-right">New</span>Perfil</a></li>
													<li><a href="#"><span class="badge badge-primary pull-right">New</span>Cuenta</a></li>
													<li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Opciones</a></li>
													<li class="divider"></li>
													<li><a href="{{ URL::to('logout'); }}"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Cerrar Sesion</a></li>
												</ul>
											</li>
										</ul>
										<!-- / .navbar-nav -->
									</div>
									<!-- / .right -->
								</div>
							</div>
							<!-- / #main-navbar-collapse -->
						</div>
						<!-- / .navbar-inner -->
					</div>
					<!-- / #main-navbar -->
					<!-- /2. $END_MAIN_NAVIGATION -->
					