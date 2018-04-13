<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>

			<form class="form" action="/dashboard" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" placeholder="NRP" name="nrp_anggota">
				<input type="password" placeholder="Password" name="password_anggota">
				<button type="submit" id="login-button" name="login" value="Login">Login</button>
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