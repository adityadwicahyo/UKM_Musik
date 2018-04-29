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
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<img style="height: 620px" src="{{$kegiatans->Foto_Kegiatan}}">
		</div>
		<div class="col-md-6">
			<form action="{{action('KegiatansController@pendaftaranStore')}}" method="post" enctype="multipart/form-data">
		<h1>Pendaftaran Kegiatan</h1>
		<fieldset>
			<legend><span class="number">1</span>Your basic info</legend>
			{{ csrf_field() }}

			@if($errors->any('NRP_Pendaftar'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('NRP_Pendaftar')}}</p>
			@endif
			<label for="nrp">NRP:</label>
			<input type="text" class="form-control" name="NRP_Pendaftar" value="{{old('NRP_Pendaftar')}}">

			<legend><span class="number">2</span>Your documents</legend>


			@if($errors->any('Berkas_Pendaftar'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Berkas_Pendaftar')}}</p>
			@endif
			<label for="berkas" style="padding-top: 30px">Berkas:</label>
			<input type="file" name="Berkas_Pendaftar" value="{{old('Berkas_Pendaftar')}}">
			<input type="hidden" name="id" value="{{$kegiatans->id}}">
		</fieldset>

		<button type="submit">Daftar</button>
	</form>
		</div>
	</div>
	</div>
	
	
</body>
</html>