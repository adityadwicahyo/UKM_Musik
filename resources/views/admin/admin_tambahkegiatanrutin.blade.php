@extends('layouts.master')

@section('title') SIMUSIK | Admin @endsection

@section('active-admin') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/tambahkegiatanrutin" method="post">
				<h1>Form Tambah Kegiatan Rutin</h1>
				{{ csrf_field() }}

				@if($errors->any('Nama_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Kegiatan')}}</p>
				@endif
				<label for="nama_kegiatan">Nama Kegiatan:</label>
				<input type="text" class="form-control" name="Nama_Kegiatan" value="{{old('Nama_Kegiatan')}}">

				@if($errors->any('Tanggal_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Tanggal_Kegiatan')}}</p>
				@endif
				<label for="tanggal_kegiatan">Tanggal Kegiatan:</label>
				<input type="date" class="form-control" name="Tanggal_Kegiatan" value="{{old('Tanggal_Kegiatan')}}">

				@if($errors->any('Waktu_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Waktu_Kegiatan')}}</p>
				@endif
				<label for="waktu_kegiatan">Waktu Kegiatan:</label>
				<input type="time" class="form-control" name="Waktu_Kegiatan" value="{{old('Waktu_Kegiatan')}}">

				@if($errors->any('Deskripsi_Kegiatan'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Deskripsi_Kegiatan')}}</p>
				@endif
				<label for="deskripsi_kegiatan">Deskripsi Kegiatan:</label>
				<textarea type="text" class="form-control" name="Deskripsi_Kegiatan" value="{{old('Deskripsi_Kegiatan')}}"></textarea>

				<button type="submit">Submit</button>
			</form>
		</div>

	</div>
</div>

@endsection