<!-- 4. $MAIN_MENU  IZQUIERDA=================================================================================-->
<div id="main-menu" role="navigation">
	<div id="main-menu-inner">
		<div class="menu-content top" id="menu-content-demo">
			<div>
				<div class="text-bg"><span class="text-slim">Bienvenido,</span><br/> <span class="text-semibold">{{Auth::user()->name;}}</span></div>
				<img src="assets/img/logo.png" alt="" class="">
				<div class="btn-group">
				<!--icons Main Menu-->
				<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
				<a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
				<a href="{{ URL::to('logout'); }}" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
			</div>
				<a href="#" class="close">&times;</a>
			</div>
		</div>
		<!--Navigation Sidebar-->
		<ul class="navigation">
			<li>
				<a href="{{ URL::to('/'); }}"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Home</span></a>
			</li>
		</ul><!-- / .navigation -->			
	</div>
</div>
					