<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('NEW/img/favicon.gif')}}" rel="icon">

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
</head>
<body>
  <main id="main">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </main>
  <!-- JavaScript Libraries -->
  <script src="{{url('NEW/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('NEW/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('NEW/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('NEW/lib/easing/easing.min.js')}}"></script>
  <script src="{{url('NEW/lib/wow/wow.min.js')}}"></script>
  <script src="{{url('NEW/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{url('NEW/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{url('NEW/lib/magnific-popup/magnific-popup.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{url('NEW/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('NEW/js/main.js')}}"></script>

</body>
</html>