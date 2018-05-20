<!DOCTYPE html>
<html>
<head>
	<title>SIMUSIK | Login</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
	<link href="{{url('NEW/img/favicon.gif')}}" rel="icon">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			@if($errors->any('Success'))
			<div class="alert alert-success" align="center">
				<h2>{{ $errors->first('Success')}}</h2>
			</div>
			@endif
			<h1>Welcome</h1>
			<form class="form" action="{{ url('/login')}}" method="post">

				{{ csrf_field() }}

				<div>
					@if($errors->any('NRP_User'))
					<p style="color: white; margin-bottom: 5px; font-weight: bold">{{ $errors->first('NRP_User')}}</p>
					@endif
					<input type="text" placeholder="NRP" name="NRP_User">
				</div>
				<div>
					@if($errors->any('password'))
					<p style="color: white; margin-bottom: 5px; font-weight: bold">{{ $errors->first('password')}}</p>
					@endif
					<input type="password" placeholder="Password" name="password">
				</div>

				<button type="submit" id="login-button" name="login" value="Login">Login</button>

				<div style="margin-top: 20px">
					<p>Belum memiliki akun? Silahkan <a href="/signup" style="text-decoration: none; font-weight: bold; color: blue">Registrasi</a></p>
				</div>
			</form>
			
		</div>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<script type="text/javascript">
		$("#login-button").click(function(event){
			event.preventDefault();

			$('form').fadeOut(500);
			$('.wrapper').addClass('form-success');
		});
	</script>
</body>
</html>