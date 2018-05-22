@extends('layouts.master')

@section('title') SIMUSIK @endsection

@section('active-beranda') style="font-weight: bold" @endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{url('css/blog_home.css')}}">

<section id="intro">

  <div class="intro-text">
    <h2>Welcome to SIMUSIK</h2>
    <p>UKM Musik ITS adalah UKM yang menaungi mahasiswa yang memiliki minat di bidang musik</p>
  </div>

  <div class="product-screens">

    <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
      <img src="{{url('NEW/img/3.png')}}" alt="">
    </div>

    <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
      <img src="{{url('NEW/img/2.png')}}" alt="">
    </div>

    <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
      <img src="{{url('NEW/img/1.png')}}" alt="">
    </div>

  </div>
</section><!-- #intro -->


<section id="about" class="section-bg">
  <div class="container-fluid">

    <div class="section-header">
      <h3 class="section-title">Informasi</h3>
      <span class="section-divider"></span>
    </div>

    <div class="container">
      <div class="row">

        <link href='https://fonts.googleapis.com/css?family=PT+Serif:400|Open+Sans:400,700' rel='stylesheet' type='text/css'>

        @foreach($informasi as $info)
        <div class="col-md-12" style="background-color: white; padding: 0px; margin: 0px; margin-bottom: 15px">
          <div class="row" style="padding: 20px">
            <div class="col-md-4">
              <img style="width: 350px" src="{{url($info->Gambar_Informasi )}}">
            </div>
            <div class="col-md-8">
              <h3>{{$info->Judul_Informasi}}</h3>
              <p class="date" style="margin-bottom: 10px">
                Oleh <a href="">Aditya Dwicahyo</a> 
                | Posted <a href="">{{ Carbon\Carbon::parse($info->Tanggal_Informasi)->format('d F Y') }}</a>
              </p>
              <p>{{str_limit($info->Singkat_Informasi, 280, '...')}}</p>
              <a href="/blog/{{$info->id}}">Read More</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</section><!-- #about -->

@endsection