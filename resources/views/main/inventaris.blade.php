@extends('layouts.master')

@section('title') SIMUSIK | Inventaris @endsection

@section('active-inventaris') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br>
<!--==========================Kegiatan Section============================-->
<section id="team" class="section-bg">
  <div class="container">

    <div class="section-header">
      <h3 class="section-title">DAFTAR INVENTARIS</h3>
      <span class="section-divider"></span>
    </div>

    @if($errors->any('Success'))
    <div class="alert alert-success" align="center">
      <strong>Success! {{ $errors->first('Success')}}</strong>
    </div>
    @endif
    
    @foreach($inventaris->chunk(3) as $inventarisChunk)
    <div class="row">
      @foreach($inventarisChunk as $invent)
      <div class="col-md-4">
        <div class="card" style="width: 22rem;">
          <img class="card-img-top" style="height: 200px; object-fit: scale-down;" src="{{$invent->Foto_Inventaris}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold">{{$invent->Nama_Inventaris}}</h5>
            <p class="card-text" style="margin-bottom: 15px">{{$invent->Deskripsi_Inventaris}}</p>

            

            @if($invent->Jumlah_Inventaris > 0)

            <p style="font-weight: bold; margin-bottom: 20px"><i class="fas fa-check-circle" style="color: green"></i> Jumlah : {{$invent->Jumlah_Inventaris}}</p>
            @if(Auth::user())
            @if(Auth::user()->Status_Mahasiswa != 'Unverified' && Auth::user()->Status_Mahasiswa != 'Admin')
            <a href="/inventaris/pinjam/{{$invent->ID_Inventaris}}" class="btn btn-success" style="float: left">Pinjam</a>
            @endif
            @endif

            @else

            @if(Auth::user())
            @if(Auth::user()->Status_Mahasiswa != 'Unverified' && Auth::user()->Status_Mahasiswa != 'Admin')
            <p style="font-weight: bold; margin-bottom: 20px"><i class="fas fa-times-circle" style="color: red"></i> Jumlah : {{$invent->Jumlah_Inventaris}}</p>
            <button href="#" class="btn btn-secondary" style="float: left" disabled>Pinjam</button>
            @endif
            @endif
            
            @endif

          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach

  </div>
</section><!-- #team -->
@endsection