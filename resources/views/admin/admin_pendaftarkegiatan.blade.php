@extends('layouts.master')

@section('title') SIMUSIK | Admin @endsection

@section('active-admin') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br><br>

<link rel="stylesheet" type="text/css" href="{{url('css/tab.css')}}">

<div class="container">

  @if($errors->any('Success'))
  <div class="alert alert-success" align="center">
    <strong>Success! {{ $errors->first('Success')}}</strong>
  </div>
  @endif

  <div class="row">
    <div class="col-md-12">

      <div class="container">

        <div class="row">
          <div class="col-md-6">
            {{-- @foreach($kegiatan as $event) --}}
            <p style="display: inline-block; margin: 0px">Daftar pendaftar event</p>
            {{-- @endforeach --}}
          </div>
        </div>

        <br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center">Foto</th>
              <th class="text-center">NRP</th>
              <th class="text-center">Berkas</th>
              <th class="text-center">Nomor</th>
              <th class="text-center">Kelola</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pendaftaran as $pen)
            @foreach($user->where('ID_Mahasiswa', $pen->ID_Mahasiswa) as $use)
            <tr>
              <td class="text-center">
                <img class="center" style="height: 110px; width: auto; margin: 0" src="{{url($use->Foto_Mahasiswa)}}">
              </td>
              <td class="align-middle text-center">{{$use->NRP_Mahasiswa}}</td>
              <td class="align-middle text-center">{{$pen->Berkas_Pendaftar}}</td>
              <td class="align-middle text-center">{{$use->No_telp_Mahasiswa}}</td>
              <td class="align-middle text-center">
                <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#setuju{{$pen->ID_Pendaftaran}}"><i class="fas fa-check"></i> Setuju</button></li>
                <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#tolak{{$pen->ID_Pendaftaran}}"><i class="far fa-trash-alt"></i> Tolak</button></li>
              </td>
            </tr>

            <!--Tolak Modal -->
            <div class="modal fade" id="tolak{{$pen->ID_Pendaftaran}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Tolak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah Anda yakin menolak pendaftar dengan NRP <b>{{$pen->NRP_Mahasiswa}}</b>?
                  </div>
                  <div class="modal-footer">
                    <a href="/tolakpendaftar/{{$pen->ID_Pendaftaran}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->

            <!--Setuju Modal -->
            <div class="modal fade" id="setuju{{$pen->ID_Pendaftaran}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Persetujuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah Anda yakin menyetujui pendaftar dengan NRP <b>{{$pen->NRP_Mahasiswa}}</b>?
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="btn btn-success"><i class="fas fa-check"></i> Yakin</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            @endforeach
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<br>

@endsection