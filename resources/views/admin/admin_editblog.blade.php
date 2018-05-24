<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SIMUSIK | Admin</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="{{url('NEW/img/favicon.gif')}}" rel="icon">
	<link href="{{url('NEW/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="{{url('NEW/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	{{-- Font Awesome --}}
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Libraries CSS Files -->
	<link href="{{url('NEW/lib/animate/animate.min.css')}}" rel="stylesheet">
	<link href="{{url('NEW/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{url('NEW/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	<link href="{{url('NEW/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="{{url('NEW/css/style.css')}}" rel="stylesheet">

	{{-- Summernote --}}
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <style type="text/css">
  .div-profil {
    display: inline-block;
    margin-left: 55px;
    height: 20px;
    width: 20px;
    border-radius: 100%;
    border: 1px solid white;
    text-align: center;
    background: url({{url(Auth::user()->Foto_Mahasiswa)}}) center no-repeat;
    background-size: cover
  }
</style>
</head>
<body>
	<main id="main">
		<!--==========================
    Header
    ============================-->
    <header id="header" style="background: linear-gradient(45deg, #1de099, #1dc8cd)">
    	<div class="container">

    		<div id="logo" class="pull-left">
    			<h1><a href="{{action('HomeController@getIndex')}}" class="scrollto">SIMUSIK</a></h1>
    			<!-- Uncomment below if you prefer to use an image logo -->
    			<!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
    		</div>

    		<nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="{{action('HomeController@getIndex')}}" @yield('active-beranda')>Beranda</a></li>
            {{--<li class="menu-active"><a href="/blog" @yield('active-blog')>Blog</a></li>--}}
            {{--<li><a href="{{action('KegiatansController@getIndex')}}" @yield('active-kegiatan')>Kegiatan</a></li>--}}
            <li class="menu-has-children">
              <a href="" @yield('active-kegiatan')>Kegiatan</a>
              <ul>
                <li><a href="{{action('KegiatansController@getIndexRutin')}}">Rutin</a></li>
                <li><a href="{{action('KegiatansController@getIndexPendaftaran')}}">Event</a></li>
              </ul>
            </li>

            <li><a href="{{action('InventarisController@getIndex')}}" @yield('active-inventaris')>Inventaris</a></li>

            <li class="menu-has-children">
              <a href="" @yield('active-anggota')>Anggota</a>
              <ul>
                <li><a href="{{action('ViewController@oprec')}}">Pendaftaran</a></li>
                <li><a href="{{action('AnggotasController@organisasi')}}">Organisasi</a></li>
              </ul>
            </li>

            @if(Auth::user())
            @if(Auth::user()->Status_Mahasiswa == 'Admin')
            <li class="menu-has-children">
              <a href="" @yield('active-admin')>Kelola</a>
              <ul>
                <li><a href="{{action('AdminController@adminBlog')}}">Informasi</a></li>
                <li><a href="{{action('AdminController@adminKegiatan')}}">Kegiatan</a></li>
                <li><a href="{{action('AdminController@adminInventaris')}}">Inventaris</a></li>
                <li><a href="{{action('AdminController@adminAnggota')}}">Mahasiswa</a></li>
              </ul>
            </li>
            @endif
            @endif

            <li class="menu-has-children">
              @if(Auth::user())
              <a href="" class="align-middle">
                <div class="social div-profil align-middle" id="social1" style="margin: 0px"></div>
                <div class="align-middle" style="display: inline-block;"> {{Auth::user()->Nama_Mahasiswa}}</div>
              </a>
              <ul>
                <li><a href="/logout">Logout</a></li>
                <li><a href="/editprofil">Setting</a></li>
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

    <br><br><br><br><br>
    <form action="/editblog" method="post" enctype="multipart/form-data">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<h1>Form Edit Informasi</h1>
    				<br>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				{{ csrf_field() }}

    				@if($errors->any('Judul_Informasi'))
    				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Judul_Informasi')}}</p>
    				@endif
    				<label for="judul_informasi">Judul Informasi:</label>
    				<input type="text" class="form-control" name="Judul_Informasi" value="{{$informasi->Judul_Informasi}}">
    				<br>
    			</div>
    			<div class="col-md-6 text-right">
    				<button type="submit" class="btn btn-success"><i class="fas fa-cloud-upload-alt"></i> Edit</button>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				@if($errors->any('Singkat_Informasi'))
    				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Singkat_Informasi')}}</p>
    				@endif
    				<label for="Singkat_informasi">Deskripsi Singkat Informasi:</label>
    				<textarea type="text" class="form-control" name="Singkat_Informasi">{{$informasi->Singkat_Informasi}}</textarea>
    				<br>
    			</div>
    			<div class="col-md-6">
    				@if($errors->any('Gambar_Informasi'))
    				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Gambar_Informasi')}}</p>
    				@endif
    				<label for="Gambar_informasi">Gambar Sampul Informasi:</label>
    				<input type="file" class="form-control" name="Gambar_Informasi" value="{{$informasi->Gambar_Informasi}}"></input>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				@if($errors->any('Isi_Informasi'))
    				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Isi_Informasi')}}</p>
    				@endif
    				<label for="isi_informasi">Isi Informasi:</label>
    				<textarea id="summernote" name="Isi_Informasi">{{$informasi->Isi_Informasi}}</textarea>
    			</div>
    		</div>
            <input type="hidden" name="ID_Informasi" value="{{$informasi->ID_Informasi}}">
    	</div>
    </form>
    @include('partials.footer')
</main>
<!-- JavaScript Libraries -->
{{-- <script src="{{url('NEW/lib/jquery/jquery.min.js')}}"></script> --}}
<script src="{{url('NEW/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{url('NEW/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('NEW/lib/easing/easing.min.js')}}"></script>
<script src="{{url('NEW/lib/wow/wow.min.js')}}"></script>
<script src="{{url('NEW/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{url('NEW/lib/superfish/superfish.min.js')}}"></script>
<script src="{{url('NEW/lib/magnific-popup/magnific-popup.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{url('NEW/containerctform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{url('NEW/js/main.js')}}"></script>

{{-- Summernote --}}
<script>
	$(document).ready(function() {
		$('#summernote').summernote({
			height: 200
		});
	});
</script>

</body>
</html>