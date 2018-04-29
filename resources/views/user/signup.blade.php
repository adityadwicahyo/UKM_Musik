<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Form</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
</head>
<body>
	<form action="{{action('SignupController@store')}}" method="post" enctype="multipart/form-data">
		<h1>Sign Up</h1>
		<fieldset>
			<legend><span class="number">1</span>Your basic info</legend>
			{{ csrf_field() }}

			@if($errors->any('Nama_User'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_User')}}</p>
			@endif
			<label for="nama">Nama:</label>
			<input type="text" class="form-control" name="Nama_User" value="{{old('Nama_User')}}">

			@if($errors->any('NRP_User'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('NRP_User')}}</p>
			@endif
			<label for="nrp">NRP:</label>
			<input type="text" class="form-control" name="NRP_User" value="{{old('NRP_User')}}">

			<div class="form-group">
				@if($errors->any('password'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('password')}}</p>
				@endif
				<label for="Password" class="control-label">Password</label>
				<div class="form-inline row">
					<div class="form-group col-sm-6">
						<input type="password" class="form-control" id="Password" placeholder="Password" name="password">
					</div>
					<div class="form-group col-sm-6">
						<input type="password" class="form-control" placeholder="Confirm" name="password_confirmation">
					</div>
				</div>
			</div>

			<legend><span class="number">2</span>Your documents</legend>

			@if($errors->any('Foto_User'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Foto_User')}}</p>
			@endif
			<label for="foto">Foto:</label>
			<input type="file" name="Foto_User" value="{{old('Foto_User')}}">

			@if($errors->any('KTM_User'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('KTM_User')}}</p>
			@endif
			<label for="berkas" style="padding-top: 30px">Scan KTM:</label>
			<input type="file" name="KTM_User" value="{{old('KTM_User')}}">

		</fieldset>

		<button type="submit">Sign Up</button>
	</form>
</body>
</html>