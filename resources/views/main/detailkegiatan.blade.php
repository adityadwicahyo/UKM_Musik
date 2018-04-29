@extends('layouts.master')

@section('title') SIMUSIK | Kegiatan @endsection

@section('active-kegiatan') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br><br>
<div class="container">
	
	@if($errors->any('Success'))
    <div class="alert alert-success" align="center">
      <strong>Success! {{ $errors->first('Success')}}</strong>
    </div>
    @endif

	<div class="row">
		<div class="col-md-5">
			<img style="width: 400px" src="{{$kegiatans->Foto_Kegiatan}}">
		</div>
		<div class="col-md-7">
			<h1>{{$kegiatans->Nama_Kegiatan}}</h1>
			<h5>Deadline Pendaftaran :</h5>
			<table>
				<tr>
					<td style="padding: 0px 10px 10px 10px"><i style="font-size: 25px" class="far fa-calendar-alt"></i></td>
					<td style="padding: 0px 10px 10px 10px">{{$kegiatans->Tanggal_Kegiatan}}</td>
				</tr>
				<tr>
					<td style="padding: 0px 10px 10px 10px"><i style="font-size: 25px" class="far fa-clock"></i></td>
					<td style="padding: 0px 10px 10px 10px">{{$kegiatans->Waktu_Kegiatan}}</td>
				</tr>
			</table>
			<br>
			<p>
				{{$kegiatans->Deskripsi_Kegiatan}}
			</p>
			<a class="btn btn-success" href="/kegiatan/{{$kegiatans->id}}/pendaftaran">Daftar</a>
		</div>
	</div>
</div>
<br><br>
@endsection