<!--==========================
    Header
  ============================-->
  <header id="header" @yield('navbar')>
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{action('ViewController@home')}}" class="scrollto">SIMUSIK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{action('ViewController@home')}}" @yield('active-beranda')>Beranda</a></li>
          <li><a href="{{action('ViewController@kegiatan')}}" @yield('active-kegiatan')>Kegiatan</a></li>
          <li><a href="{{action('ViewController@inventaris')}}" @yield('active-inventaris')>Inventaris</a></li>
          <li><a href="{{action('ViewController@anggota')}}" @yield('active-anggota')>Anggota</a></li>
          <li class="menu-has-children">
            <a href=""><i class="fas fa-user-circle"></i> Akun</a>
            <ul>
              <li><a href="{{action('ViewController@login')}}">Login</a></li>
              <li><a href="{{route('user.signup')}}">Registra</a></li>
            </ul>
          </li>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->