@extends('layouts.master')

@section('title') SIMUSIK | Pinjam @endsection

@section('active-inventaris') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
<div class="container">
	<div class="row">
		@if($kegiatans->Tipe_Kegiatan == "Pendaftaran")
		<div class="col-md-6" style="margin-top: 100px">
			<img style="height: 800px" src="{{url($kegiatans->Foto_Kegiatan)}}">
		</div>
		@endif


		<div class="
		@if($kegiatans->Tipe_Kegiatan == 'Pendaftaran')
			col-md-6
		@else
			col-md-12
		@endif
		">
			<form action="/editkegiatan" method="post" enctype="multipart/form-data">
				<h1>Form Edit Kegiatan</h1>
				{{ csrf_field() }}

				@if($errors->any('Nama_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Kegiatan')}}</p>
				@endif
				<label for="nama_kegiatan">Nama Kegiatan:</label>
				<input type="text" class="form-control" name="Nama_Kegiatan" value="{{$kegiatans->Nama_Kegiatan}}">

				@if($kegiatans->Tipe_Kegiatan == 'Pendaftaran')
				@if($errors->any('Foto_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Foto_Kegiatan')}}</p>
				@endif
				<label for="foto_kegiatan">Poster Kegiatan:</label>
				<input type="file" style="margin-bottom: 30px" class="form-control" name="Foto_Kegiatan" value="{{$kegiatans->Foto_Kegiatan}}">
				@endif

				@if($errors->any('Tanggal_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Tanggal_Kegiatan')}}</p>
				@endif
				<label for="tanggal_kegiatan">Tanggal Kegiatan:</label>
				<input type="date" class="form-control" name="Tanggal_Kegiatan" value="{{$kegiatans->Tanggal_Kegiatan}}">

				@if($errors->any('Waktu_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Waktu_Kegiatan')}}</p>
				@endif
				<label for="waktu_kegiatan">Waktu Kegiatan:</label>
				<input type="time" class="form-control" name="Waktu_Kegiatan" value="{{$kegiatans->Waktu_Kegiatan}}">

				@if($kegiatans->Tipe_Kegiatan == 'Pendaftaran')
				@if($errors->any('Batas_Tanggal_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Batas_Tanggal_Kegiatan')}}</p>
				@endif
				<label for="batas_tanggal_kegiatan">Batas Tanggal Pendaftaran:</label>
				<input type="date" class="form-control" name="Batas_Tanggal_Kegiatan" value="{{$kegiatans->Batas_Tanggal_Kegiatan}}">

				@if($errors->any('Batas_Waktu_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Batas_Waktu_Kegiatan')}}</p>
				@endif
				<label for="batas_waktu_kegiatan">Batas Waktu Pendaftaran:</label>
				<input type="time" class="form-control" name="Batas_Waktu_Kegiatan" value="{{$kegiatans->Batas_Waktu_Kegiatan}}">
				@endif

				@if($errors->any('Deskripsi_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Deskripsi_Kegiatan')}}</p>
				@endif
				<label for="deskripsi_kegiatan">Deskripsi Kegiatan:</label>
				<textarea type="text" class="form-control" name="Deskripsi_Kegiatan">{{$kegiatans->Deskripsi_Kegiatan}}</textarea>
				
				<input type="hidden" name="id" value="{{$kegiatans->id}}">

				<button type="submit">Edit</button>
			</form>
		</div>

	</div>
</div>

@endsection