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
			<form action="/tambahinventaris" method="post" enctype="multipart/form-data">
				<h1>Form Tambah Inventaris</h1>
				{{ csrf_field() }}

				@if($errors->any('nama_inv'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('nama_inv')}}</p>
				@endif
				<label for="nama_inv">Nama Inventaris:</label>
				<input type="text" class="form-control" name="nama_inv" value="{{old('nama_inv')}}">

				@if($errors->any('foto_inv'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('foto_inv')}}</p>
				@endif
				<label for="foto_inv">Foto Inventaris:</label>
				<input type="file" style="margin-bottom: 30px" class="form-control" name="foto_inv" value="{{old('foto_inv')}}">

				@if($errors->any('jumlah_inv'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('jumlah_inv')}}</p>
				@endif
				<label for="jumlah_inv">Jumlah Inventaris:</label>
				<input type="number" style="margin-bottom: 30px" class="form-control" name="jumlah_inv" value="{{old('jumlah_inv')}}">

				@if($errors->any('deskripsi_inv'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('deskripsi_inv')}}</p>
				@endif
				<label for="deskripsi_inv">Deskripsi Inventaris:</label>
				<textarea type="text" class="form-control" name="deskripsi_inv">{{old('deskripsi_inv')}}</textarea>

				<button type="submit">Submit</button>
			</form>
		</div>

	</div>
</div>

@endsection