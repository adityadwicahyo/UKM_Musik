@extends('layouts.master')

@section('title') SIMUSIK | Kegiatan @endsection

@section('active-kegiatan') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br><br>

<head>
	<link href="{{url('css/kegiatan.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<div class="container">
	
	@foreach($kegiatans->where('Tipe_Kegiatan', 'Rutin') as $event)
	<div class="row">
		<div class="col-md-12" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); padding: 0 0 0 0">
			<div style="background: linear-gradient(45deg, #1de099, #1dc8cd); color: white; padding: 15px 15px 0px 15px">
				<h5 style="font-weight: bold; margin: 0 0 5px 0">{{$event->Nama_Kegiatan}}</h5>
				<i class="far fa-calendar-alt"></i><p style="display: inline-block; padding-left: 10px; padding-right: 30px; margin: 0 0 10px 0">{{ Carbon\Carbon::parse($event->Tanggal_Kegiatan)->format('d F Y') }}</p>
				<i class="far fa-clock"></i><p style="display: inline-block; padding-left: 10px; margin: 0 0 10px 0">{{ Carbon\Carbon::parse($event->Waktu_Kegiatan)->format('H:i') }}</p>
			</div>
			<div style="padding: 10px 10px 0px 15px">
				<p style="margin: 0px 0px 10px 0px; padding-top: 0px">{{$event->Deskripsi_Kegiatan}}</p>
			</div>
		</div>
	</div>
	<br>
	@endforeach

</div>
<br>
@endsection