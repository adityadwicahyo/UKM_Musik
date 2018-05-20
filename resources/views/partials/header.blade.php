<!--==========================
    Header
    ============================-->
    <style type="text/css">
    .div-profil {
      display: inline-block;
      margin-left: 55px;
      height: 20px;
      width: 20px;
      border-radius: 100%;
      border: 1px solid white;
      text-align: center;
      background: url({{url(Auth::user()->Foto_User)}}) center no-repeat;
      background-size: cover
    }
  </style>
  <header id="header" @yield('navbar')>
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{action('HomeController@getIndex')}}" class="scrollto">SIMUSIK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{action('HomeController@getIndex')}}" @yield('active-beranda')>Beranda</a></li>
          <li class="menu-active"><a href="/blog" @yield('active-blog')>Blog</a></li>
          <li><a href="{{action('KegiatansController@getIndex')}}" @yield('active-kegiatan')>Kegiatan</a></li>
          <li><a href="{{action('InventarisController@getIndex')}}" @yield('active-inventaris')>Inventaris</a></li>

          <li class="menu-has-children">
            <a href="" @yield('active-anggota')>Anggota</a>
            <ul>
              <li><a href="{{action('ViewController@oprec')}}">Pendaftaran</a></li>
              <li><a href="{{action('AnggotasController@organisasi')}}">Organisasi</a></li>
            </ul>
          </li>

          @if(Auth::user()->Level_User == 'Admin')
          <li class="menu-has-children">
            <a href="" @yield('active-admin')>Kelola</a>
            <ul>
              <li><a href="{{action('AdminController@adminBlog')}}">Blog</a></li>
              <li><a href="{{action('AdminController@adminKegiatan')}}">Kegiatan</a></li>
              <li><a href="{{action('AdminController@adminInventaris')}}">Inventaris</a></li>
              <li><a href="{{action('AdminController@adminAnggota')}}">Anggota</a></li>
            </ul>
          </li>
          @endif

          <li class="menu-has-children">
            @if(Auth::user())
            <a href="" class="align-middle">
              <div class="social div-profil align-middle" id="social1" style="margin: 0px"></div>
               <div class="align-middle" style="display: inline-block;"> {{Auth::user()->Nama_User}}</div>
            </a>
            <ul>
              <li><a href="/logout">Logout</a></li>
              <li><a href="#">Setting</a></li>
            </ul>
            @else
            <a href=""><i class="fas fa-user-circle"></i> Akun</a>
            <ul>
              <li><a href="{{action('ViewController@login')}}">Login</a></li>
              <li><a href="{{action('ViewController@signup')}}">Signup</a></li>
            </ul>
            @endif
          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->