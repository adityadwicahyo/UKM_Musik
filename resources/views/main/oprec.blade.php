@extends('layouts.master')

@section('title') SIMUSIK | Oprec @endsection

@section('active-anggota') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
	<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">

	@if($errors->any('Success'))
    <div class="alert alert-success" align="center">
      <strong>Success! {{ $errors->first('Success')}}</strong>
    </div>
    @endif

	<form action="{{action('AnggotasController@store')}}" method="post" enctype="multipart/form-data">
		<h1>Form Pendaftaran</h1>
		<fieldset>
			<legend><span class="number">1</span>Your basic info</legend>
			{{ csrf_field() }}

			@if($errors->any('nama_anggota'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('nama_anggota')}}</p>
			@endif
			<label for="nama">Nama:</label>
			<input type="text" class="form-control" name="nama_anggota" value="{{old('nama_anggota')}}">

			@if($errors->any('nrp_anggota'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('nrp_anggota')}}</p>
			@endif
			<label for="nrp">NRP:</label>
			<input type="text" class="form-control" name="nrp_anggota" value="{{old('nrp_anggota')}}">

			@if($errors->any('email_anggota'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('email_anggota')}}</p>
			@endif
			<label for="email">Email:</label>
			<input type="email" class="form-control" name="email_anggota" value="{{old('email_anggota')}}">

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

			@if($errors->any('notelp_anggota'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('notelp_anggota')}}</p>
			@endif
			<label for="number"> Telepon:</label>
			<input type="text" class="form-control" name="notelp_anggota" value="{{old('notelp_anggota')}}">

			<legend><span class="number">2</span>Your profile</legend>
			<label for="bio">Biodata:</label>
			<textarea name="biodata_anggota"></textarea>

			@if($errors->any('foto_anggota'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('foto_anggota')}}</p>
			@endif
			<label for="foto">Foto:</label>
			<input type="file" name="foto_anggota" value="{{old('foto_anggota')}}">

			@if($errors->any('berkas_anggota'))
			<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('berkas_anggota')}}</p>
			@endif
			<label for="berkas" style="padding-top: 30px">Berkas:</label>
			<input type="file" name="berkas_anggota" value="{{old('berkas_anggota')}}">
		</fieldset>

		<button type="submit">Sign Up</button>
	</form>

@endsection