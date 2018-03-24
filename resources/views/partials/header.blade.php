<header class="site-header">
			<div class="container">
				<a href="{{action('ViewController@home')}}" id="branding">
					<img src="{{url('Band/dummy/logo.png')}}" alt="Site Title">
					<small class="site-description">Institut Teknologi Sepuluh Nopember</small>
				</a> <!-- #branding -->

				<nav class="main-navigation">
					<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
					<ul class="menu">
						<li class="menu-item @yield('current0')"><a href="{{action('ViewController@home')}}">Home</a></li>
						<li class="menu-item @yield('current1')"><a href="{{action('ViewController@about')}}">About</a></li>
						<li class="menu-item @yield('current2')"><a href="{{action('ViewController@inventaris')}}">Inventaris</a></li>
						<li class="menu-item @yield('current3')"><a href="{{action('ViewController@pendaftaran')}}">Pendaftaran</a></li>
						<li class="menu-item @yield('current4')"><a href="{{action('ViewController@kegiatan')}}">Kegiatan</a></li>
						<li class="menu-item @yield('current5')"><a href="{{action('ViewController@contact')}}">Contact</a></li>
						<li class="menu-item nav-item dropdown @yield('current6')">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Account <i class="fas fa-user-circle" style="margin-left: 5px"></i>
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{url('Band/Login_v17/Login_v17/index.html')}}" style="padding: 0px 0px 0px 15px">Login</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{url('Band/Login_v17/Login_v17/signup.html')}}" style="padding: 0px 0px 0px 15px">Sign Up</a>
							</div>
						</li>
					</ul> <!-- .menu -->
				</nav> <!-- .main-navigation -->
				<div class="mobile-menu"></div>
			</div>
		</header> <!-- .site-header -->