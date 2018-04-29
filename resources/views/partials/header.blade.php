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
          <li><a href="{{action('KegiatansController@getIndex')}}" @yield('active-kegiatan')>Kegiatan</a></li>
          <li><a href="{{action('InventarisController@getIndex')}}" @yield('active-inventaris')>Inventaris</a></li>
          <li class="menu-has-children">
            <a href="" @yield('active-anggota')>Anggota</a>
            <ul>
              <li><a href="{{action('ViewController@oprec')}}">Pendaftaran</a></li>
              <li><a href="{{action('AnggotasController@organisasi')}}">Organisasi</a></li>
            </ul>
          </li>
          <li class="menu-has-children">
            <a href=""><i class="fas fa-user-circle"></i> Akun</a>
            <ul>
              <li><a href="{{action('ViewController@login')}}">Login</a></li>
              <li><a href="{{action('ViewController@signup')}}">Signup</a></li>
            </ul>
          </li>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->