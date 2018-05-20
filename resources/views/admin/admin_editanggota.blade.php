@extends('layouts.master')

@section('title') SIMUSIK | Admin @endsection

@section('active-admin') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">

<form action="/anggotaedit" method="post" enctype="multipart/form-data">
	<h1>Form Edit Anggota</h1>
	<fieldset>
		<legend><span class="number">1</span>Basic info</legend>
		{{ csrf_field() }}

		@if($errors->any('nama_anggota'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('nama_anggota')}}</p>
		@endif
		<label for="nama">Nama:</label>
		<input type="text" class="form-control" name="nama_anggota" value="{{$anggota->nama_anggota}}">

		@if($errors->any('nrp_anggota'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('nrp_anggota')}}</p>
		@endif
		<label for="nrp">NRP:</label>
		<input type="text" class="form-control" name="nrp_anggota" value="{{$anggota->nrp_anggota}}">

		@if($errors->any('email_anggota'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('email_anggota')}}</p>
		@endif
		<label for="email">Email:</label>
		<input type="email" class="form-control" name="email_anggota" value="{{$anggota->email_anggota}}">


		@if($errors->any('notelp_anggota'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('notelp_anggota')}}</p>
		@endif
		<label for="number"> Telepon:</label>
		<input type="text" class="form-control" name="notelp_anggota" value="{{$anggota->notelp_anggota}}">

		<legend><span class="number">2</span>Profile</legend>

		@if($errors->any('status_anggota'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('status_anggota')}}</p>
		@endif
		<label for="status_anggota">Status:</label>
		
		<div class="radio">
			<label><input type="radio" name="status_anggota" value="Ketua" 
				@if($anggota->status_anggota == 'Ketua')
					checked
				@endif 
			>Ketua</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="status_anggota" value="Wakil Ketua" 
				@if($anggota->status_anggota == 'Wakil Ketua')
					checked
				@endif 
			>Wakil Ketua</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="status_anggota" value="Sekretaris" 
				@if($anggota->status_anggota == 'Sekretaris')
					checked
				@endif 
			>Sekretaris</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="status_anggota" value="Bendahara" 
				@if($anggota->status_anggota == 'Bendahara')
					checked
				@endif 
			>Bendahara</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="status_anggota" value="Anggota" 
				@if($anggota->status_anggota == 'Anggota')
					checked
				@endif 
			>Anggota</label>
		</div>
		
		<br>	
		<label for="bio">Biodata:</label>
		<textarea name="biodata_anggota">{{$anggota->biodata_anggota}}</textarea>

		@if($errors->any('foto_anggota'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('foto_anggota')}}</p>
		@endif
		<label for="foto">Foto:</label>
		<input type="file" name="foto_anggota" value="{{$anggota->foto_anggota}}">
	</fieldset>

	<input type="hidden" name="id" value="{{$anggota->id}}">

	<button type="submit">Edit</button>
</form>

@endsection