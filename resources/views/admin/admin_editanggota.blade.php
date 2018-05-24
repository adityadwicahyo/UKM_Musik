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

		@if($errors->any('Nama_Mahasiswa'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Mahasiswa')}}</p>
		@endif
		<label for="nama">Nama:</label>
		<input type="text" class="form-control" name="Nama_Mahasiswa" value="{{$anggota->Nama_Mahasiswa}}">

		@if($errors->any('NRP_Mahasiswa'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('NRP_Mahasiswa')}}</p>
		@endif
		<label for="nrp">NRP:</label>
		<input type="text" class="form-control" name="NRP_Mahasiswa" value="{{$anggota->NRP_Mahasiswa}}">

		@if($errors->any('Email_Mahasiswa'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Email_Mahasiswa')}}</p>
		@endif
		<label for="email">Email:</label>
		<input type="email" class="form-control" name="Email_Mahasiswa" value="{{$anggota->Email_Mahasiswa}}">


		@if($errors->any('No_telp_Mahasiswa'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('No_telp_Mahasiswa')}}</p>
		@endif
		<label for="number"> Telepon:</label>
		<input type="text" class="form-control" name="No_telp_Mahasiswa" value="{{$anggota->No_telp_Mahasiswa}}">

		<legend><span class="number">2</span>Profile</legend>

		@if($errors->any('Status_Mahasiswa'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Status_Mahasiswa')}}</p>
		@endif
		<label for="Status_Mahasiswa">Status:</label>
		
		<div class="radio">
			<label><input type="radio" name="Status_Mahasiswa" value="Ketua" 
				@if($anggota->Status_Mahasiswa == 'Ketua')
					checked
				@endif 
			>Ketua</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="Status_Mahasiswa" value="Wakil Ketua" 
				@if($anggota->Status_Mahasiswa == 'Wakil Ketua')
					checked
				@endif 
			>Wakil Ketua</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="Status_Mahasiswa" value="Sekretaris" 
				@if($anggota->Status_Mahasiswa == 'Sekretaris')
					checked
				@endif 
			>Sekretaris</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="Status_Mahasiswa" value="Bendahara" 
				@if($anggota->Status_Mahasiswa == 'Bendahara')
					checked
				@endif 
			>Bendahara</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="Status_Mahasiswa" value="Anggota" 
				@if($anggota->Status_Mahasiswa == 'Anggota')
					checked
				@endif 
			>Anggota</label>
		</div>
		
		<br>	
		<label for="bio">Biodata:</label>
		<textarea name="Biodata_Mahasiswa">{{$anggota->Biodata_Mahasiswa}}</textarea>

		@if($errors->any('Foto_Mahasiswa'))
		<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Foto_Mahasiswa')}}</p>
		@endif
		<label for="foto">Foto:</label>
		<input type="file" name="Foto_Mahasiswa" value="{{$anggota->Foto_Mahasiswa}}">
	</fieldset>

	<input type="hidden" name="ID_Mahasiswa" value="{{$anggota->ID_Mahasiswa}}">

	<button type="submit">Edit</button>
</form>

@endsection