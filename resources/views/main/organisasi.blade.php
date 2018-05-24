@extends('layouts.master')

@section('title') SIMUSIK | Organisasi @endsection

@section('active-anggota') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{url('css/organisasi.css')}}">

<div class="container">
	@foreach($anggotas->whereNotIn('Status_Mahasiswa', ['Pendaftar', 'Verified', 'Unverified', 'Admin'])->chunk(4) as $anggotasChunk)
	<div class="row">
		@foreach($anggotasChunk as $anggota)
		<div class="col-md-3">
			<div class="flip-container" style="height: 330px">
				<div class="flipper">
					<div class="front">
						<img class="profile-picture" style="object-fit: cover;" src="{{url($anggota->Foto_Mahasiswa)}}" width="300px" height="300px">
						<div class="profile-devider"></div>
						<h3 class="profile-name">{{$anggota->Nama_Mahasiswa}}</h3>
						<h4 class="profile-title">{{$anggota->Status_Mahasiswa}} UKM</h4>
					</div>
					<div class="back">
						<div class="flip-padding" align="center"><span style="font-weight: bold">NRP</span> : {{$anggota->NRP_Mahasiswa}}</div>
						<div class="flip-padding" align="center"><span style="font-weight: bold">Fakultas</span> : FTIK</div>
						<div class="flip-padding" align="center"><span style="font-weight: bold">Jurusan</span> : Teknik Informatika</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection