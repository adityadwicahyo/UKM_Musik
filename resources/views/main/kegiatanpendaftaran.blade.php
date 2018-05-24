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

	@foreach($kegiatans->where('Tipe_Kegiatan', 'Pendaftaran')->chunk(3) as $kegiatansChunk)
	<div class="row">
		@foreach($kegiatansChunk as $event)
		<div class="col-md-4">
			<article class="card">
				<header class="card__thumb">
					<a href="#"><img style="object-fit: cover" src="{{$event->Foto_Kegiatan}}"/></a>
				</header>
				<date class="card__date">
					<span class="card__date__day">{{ Carbon\Carbon::parse($event->Tanggal_Kegiatan)->format('d') }}</span>
					<br/>
					<span class="card__date__month">{{ Carbon\Carbon::parse($event->Tanggal_Kegiatan)->format('F') }}</span>
				</date>

				<div class="card__body">
					<div class="card__category" style="width: 900px; height: 70px; text-transform: capitalize;">
						<p style="margin: 0px; font-weight: bold;">Deadline Pendaftaran :</p>
						<i class="far fa-calendar-alt"></i><p style="display: inline-block; padding-left: 10px; padding-right: 30px">{{ Carbon\Carbon::parse($event->Batas_Tanggal_Kegiatan)->format('d F Y') }}</p>
						<i class="far fa-clock"></i><p style="display: inline-block; padding-left: 10px">{{ Carbon\Carbon::parse($event->Batas_Waktu_Kegiatan)->format('H:i') }}</p>
					</div>
					<h2 class="card__title" style="padding-top: 45px"><a href="#">{{$event->Nama_Kegiatan}}</a></h2>
					<p class="card__description">{{str_limit($event->Deskripsi_Kegiatan, 170, '...')}}</p>
				</div>

				<footer class="card__footer">
					<a class="btn btn-primary" href="/kegiatan/{{$event->ID_Kegiatan}}" style="color: white; font-size: 12px">Read More</a>
				</footer>
			</article>
		</div>
		@endforeach
	</div>
	<br>
	@endforeach

</div>
<br>
@endsection