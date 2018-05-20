@extends('layouts.master')

@section('title') SIMUSIK | Admin @endsection

@section('active-admin') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br><br>

<head>
  <link href="{{url('css/kegiatan.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<div class="container">
  @if($errors->any('Success'))
  <div class="alert alert-success" align="center">
    <strong>Success! {{ $errors->first('Success')}}</strong>
  </div>
  @endif

  <div align="right">
    <a href="{{action('AdminController@viewTambahInventaris')}}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Inventaris</a>
  </div>
  <div class="row">
    <h3 style="margin-left: 10px; font-weight: bold; margin-top: 20px">Inventaris : </h3>

    @foreach($inventaris as $invent)
    <div class="col-md-12" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); margin: 10px">
      <div style="background-color: white; margin: 10px 10px 15px 10px">
        <div style="display: inline-block;">
          <p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">{{$invent->nama_inv}}</p>
          <p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px;">{{str_limit($invent->deskripsi_inv, 80, '...')}}</p>
        </div>
        <div style="float: right; padding-top: 15px">
          <a href="/editinventaris/{{$invent->id}}" class="btn btn-primary" style="margin: 5px"><i class="far fa-edit"> </i> Edit</a>
          <button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$invent->id}}"><i class="far fa-trash-alt"></i> Delete</button>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="{{$invent->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus inventaris <b>{{$invent->nama_inv}}</b>?
          </div>
          <div class="modal-footer">
            <a href="/deleteinventaris/{{$invent->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

    @endforeach
  </div>
</div>
<br>

@endsection