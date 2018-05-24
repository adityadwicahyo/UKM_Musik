@extends('layouts.master')

@section('title') SIMUSIK | Informasi @endsection

@section('active-blog') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{url('css/blog.css')}}">
<br><br><br><br><br>
<section class="container">
  <div class="row">

    <div class="col-md-4">
      @foreach($informasi->whereNotIn('ID_Informasi', $artikel->ID_Informasi) as $info)
      <figure class="snip1208" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
        <img src="{{url($info->Gambar_Informasi)}}" alt="sample66"/>
        <div class="date"><span class="day">{{ Carbon\Carbon::parse($info->Tanggal_Informasi)->format('d') }}</span><span class="month">{{ Carbon\Carbon::parse($info->Tanggal_Informasi)->format('F') }}</span></div><i class="ion-film-marker"></i>

        <figcaption>
          <h5>{{$info->Judul_Informasi}}</h5>
          <p style="color: grey">{{str_limit($info->Singkat_Informasi, 100, '...')}}</p>
          <a href="/blog/{{$info->id}}" class="buttonblog">Read More</a>
        </figcaption><a href="#"></a>
      </figure>
      @endforeach
    </div>

    <div class="col-md-8">
      <header>
        <h1>{{$artikel->Judul_Informasi}}</h1>
        <p class="date" style="margin-bottom: 10px">
          Oleh <a href="">Joko</a> 
          | Posted <a href="">{{ Carbon\Carbon::parse($artikel->Tanggal_Informasi)->format('d F Y') }}</a>
        </p>
      </header>
      <article>
        <img src="{{url($artikel->Gambar_Informasi)}}" alt="" style="padding-top: 0px; margin-bottom: 20px" />
        {!! $artikel->Isi_Informasi !!}
      </article>
    </div>

  </div>
</section>
@endsection