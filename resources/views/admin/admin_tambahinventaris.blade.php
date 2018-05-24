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

				@if($errors->any('Nama_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Inventaris')}}</p>
				@endif
				<label for="nama_inv">Nama Inventaris:</label>
				<input type="text" class="form-control" name="Nama_Inventaris" value="{{old('Nama_Inventaris')}}">

				@if($errors->any('Foto_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Foto_Inventaris')}}</p>
				@endif
				<label for="Foto_Inventaris">Foto Inventaris:</label>
				<input type="file" style="margin-bottom: 30px" class="form-control" name="Foto_Inventaris" value="{{old('Foto_Inventaris')}}">

				@if($errors->any('Jumlah_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Jumlah_Inventaris')}}</p>
				@endif
				<label for="Jumlah_Inventaris">Jumlah Inventaris:</label>
				<input type="number" style="margin-bottom: 30px" class="form-control" name="Jumlah_Inventaris" value="{{old('Jumlah_Inventaris')}}">

				@if($errors->any('Deskripsi_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Deskripsi_Inventaris')}}</p>
				@endif
				<label for="deskripsi_inv">Deskripsi Inventaris:</label>
				<textarea type="text" class="form-control" name="Deskripsi_Inventaris">{{old('Deskripsi_Inventaris')}}</textarea>

				<button type="submit">Submit</button>
			</form>
		</div>

	</div>
</div>

@endsection