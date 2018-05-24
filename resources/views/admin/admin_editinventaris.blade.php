@extends('layouts.master')

@section('title') SIMUSIK | Admin @endsection

@section('active-admin') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin-top: 100px">
			<img style="width: 500px" src="{{url($inventaris->Foto_Inventaris)}}">
		</div>
		<div class="col-md-6">
			<form action="/editinventaris" method="post" enctype="multipart/form-data">
				<h1>Form Edit Inventaris</h1>
				{{ csrf_field() }}

				@if($errors->any('Nama_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Inventaris')}}</p>
				@endif
				<label for="nama_inv">Nama Inventaris:</label>
				<input type="text" class="form-control" name="Nama_Inventaris" value="{{$inventaris->Nama_Inventaris}}">

				@if($errors->any('Foto_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Foto_Inventaris')}}</p>
				@endif
				<label for="foto_inv">Foto Inventaris:</label>
				<input type="file" style="margin-bottom: 30px" class="form-control" name="Foto_Inventaris" value="{{$inventaris->Foto_Inventaris}}">

				@if($errors->any('Jumlah_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Jumlah_Inventaris')}}</p>
				@endif
				<label for="Jumlah_Inventaris">Jumlah Inventaris:</label>
				<input type="number" style="margin-bottom: 30px" class="form-control" name="Jumlah_Inventaris" value="{{$inventaris->Jumlah_Inventaris}}">

				@if($errors->any('Deskripsi_Inventaris'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Deskripsi_Inventaris')}}</p>
				@endif
				<label for="Deskripsi_Inventaris">Deskripsi Inventaris:</label>
				<textarea type="text" class="form-control" name="Deskripsi_Inventaris">{{$inventaris->Deskripsi_Inventaris}}</textarea>

				<input type="hidden" name="ID_Inventaris" value="{{$inventaris->ID_Inventaris}}">

				<button type="submit">Submit</button>
			</form>
		</div>

	</div>
</div>

@endsection