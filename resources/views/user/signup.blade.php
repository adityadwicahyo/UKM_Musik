<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIMUSIK | Registrasi</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="{{url('NEW/img/favicon.gif')}}" rel="icon">
	<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
</head>
<body>
	<form action="{{action('SignupController@store')}}" method="post" enctype="multipart/form-data">
		<h1>Registrasi</h1>
		<fieldset>
			<legend><span class="number">1</span>Your basic info</legend>
			{{ csrf_field() }}

			@if($errors->any('Nama_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Mahasiswa')}}</p>
			@endif
			<label for="nama">Nama:</label>
			<input type="text" class="form-control" name="Nama_Mahasiswa" value="{{old('Nama_Mahasiswa')}}">

			@if($errors->any('NRP_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('NRP_Mahasiswa')}}</p>
			@endif
			<label for="nrp">NRP:</label>
			<input type="text" class="form-control" name="NRP_Mahasiswa" value="{{old('NRP_Mahasiswa')}}">

			@if($errors->any('Email_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Email_Mahasiswa')}}</p>
			@endif
			<label for="email">Email:</label>
			<input type="email" class="form-control" name="Email_Mahasiswa" value="{{old('Email_Mahasiswa')}}">

			@if($errors->any('No_telp_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('No_telp_Mahasiswa')}}</p>
			@endif
			<label for="notelp">Nomor Telepon:</label>
			<input type="text" class="form-control" name="No_telp_Mahasiswa" value="{{old('No_telp_Mahasiswa')}}">

			@if($errors->any('Biodata_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Biodata_Mahasiswa')}}</p>
			@endif
			<label for="biodata">Biodata:</label>
			<textarea class="form-control" name="Biodata_Mahasiswa">{{old('Biodata_Mahasiswa')}}</textarea>

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

			@if($errors->any('Foto_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Foto_Mahasiswa')}}</p>
			@endif
			<label for="foto">Foto:</label>
			<input type="file" name="Foto_Mahasiswa" value="{{old('Foto_Mahasiswa')}}">

			@if($errors->any('Berkas_Mahasiswa'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Berkas_Mahasiswa')}}</p>
			@endif
			<label for="berkas" style="padding-top: 30px">Berkas:</label>
			<input type="file" name="Berkas_Mahasiswa" value="{{old('Berkas_Mahasiswa')}}">

		</fieldset>

		<button type="submit">Sign Up</button>
	</form>
</body>
</html>