@extends('layouts.master')

@section('title') SIMUSIK | Pinjam @endsection

@section('active-inventaris') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
<div class="container">
<div class="row">
	<div class="col-md-6">
		<div class="card" style="width: 30rem; margin-top: 10px">
			<img class="card-img-top" style="height: 200px; object-fit: scale-down;" src="{{$inventaris->foto_inv}}" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title" style="font-weight: bold">{{$inventaris->nama_inv}}</h5>
				<p class="card-text" style="margin-bottom: 15px">{{$inventaris->deskripsi_inv}}</p>
				<p style="font-weight: bold; margin-bottom: 20px"><i class="fas fa-check-circle" style="color: green"></i> Jumlah : {{$inventaris->jumlah_inv}}</p>
			</div>	
		</div>
	</div>

	<div class="col-md-6">
		<form action="/inventaris/pinjam" method="post">
			<h1>Form Peminjaman Inventaris</h1>
				{{ csrf_field() }}

				@if($errors->any('Jumlah_Barang'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Jumlah_Barang')}}</p>
				@endif
				<label for="nrp">Jumlah Barang:</label>
				<input type="number" class="form-control" name="Jumlah_Barang" value="{{old('Jumlah_Barang')}}">

				@if($errors->any('Tanggal_Kembali'))
				<p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Tanggal_Kembali')}}</p>
				@endif
				<label for="nrp">Tanggal Kembali:</label>
				<input type="date" class="form-control" name="Tanggal_Kembali" value="{{old('Tanggal_Kembali')}}">
				<input type="hidden" name="id" value="{{$inventaris->id}}">

			<button type="submit">Pinjam</button>
		</form>
	</div>

</div>
</div>

@endsection