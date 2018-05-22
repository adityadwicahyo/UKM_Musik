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
      {{-- <p class="section-description"></p> --}}
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
          <img class="card-img-top" style="height: 200px; object-fit: scale-down;" src="{{$invent->foto_inv}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="font-weight: bold">{{$invent->nama_inv}}</h5>
            <p class="card-text" style="margin-bottom: 15px">{{$invent->deskripsi_inv}}</p>
            @if($invent->jumlah_inv > 0)
            <p style="font-weight: bold; margin-bottom: 20px"><i class="fas fa-check-circle" style="color: green"></i> Jumlah : {{$invent->jumlah_inv}}</p>
            @if(Auth::user()->Level_User == 'User')
            <a href="/inventaris/pinjam/{{$invent->id}}" class="btn btn-success" style="float: left">Pinjam</a>
            @endif
            @else
            <p style="font-weight: bold; margin-bottom: 20px"><i class="fas fa-times-circle" style="color: red"></i> Jumlah : {{$invent->jumlah_inv}}</p>
            @if(Auth::user()->Level_User == 'User')
            <button href="#" class="btn btn-secondary" style="float: left" disabled>Pinjam</button>
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