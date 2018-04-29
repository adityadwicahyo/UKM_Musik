<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">
</head>
<body>
	@if($errors->any('Success'))
    <div class="alert alert-success" align="center">
      <strong>Success! {{ $errors->first('Success')}}</strong>
    </div>
    @endif
	<div class="wrapper">
		<div class="container">
			<h1>Welcome</h1>
			<form class="form" action="{{action('LoginController@postLogin')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" placeholder="NRP" name="NRP_User">
				<input type="password" placeholder="Password" name="Password_User">
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