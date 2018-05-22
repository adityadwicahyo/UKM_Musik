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
      <div class="tab">

        <ul class="tabs" style="padding: 0">
          <li><a href="#"><b>Rutin</b></a></li>
          <li><a href="#"><b>Event</b></a></li>
        </ul> <!-- / tabs -->

        <div class="tab_content">

          {{-- Rutin --}}
          <div class="tabs_item">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p style="display: inline-block; margin: 0px">Daftar kegiatan rutin UKM Musik ITS</p>
                </div>
                <div class="col-md-6" align="right">
                  <a href="{{action('AdminController@viewTambahKegiatan')}}" class="btn btn-success align-middle"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
                </div>
              </div>
              <br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Waktu</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kegiatans->where('Tipe_Kegiatan', 'Rutin') as $event)

                  <tr>
                    <td class="align-middle text-center">{{$event->Nama_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Tanggal_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Waktu_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Deskripsi_Kegiatan}}</td>
                    <td class="align-middle text-left">
                      <li style="list-style-type: none; padding: 5px"><a href="/editkegiatan/{{$event->id}}" style="margin: 5px;" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#del{{$event->id}}"><i class="far fa-trash-alt"></i> Delete</button></li>
                    </td>
                  </tr>

                  <!--Tolak Modal -->
                  <div class="modal fade" id="del{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menghapus kegiatan <b>{{$event->Nama_Kegiatan}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/deletekegiatan/{{$event->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- / tabs_item -->

          {{-- Event --}}
          <div class="tabs_item">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p style="display: inline-block; margin: 0px">Daftar pendaftaran event UKM Musik ITS</p>
                </div>
                <div class="col-md-6" align="right">
                  <a href="{{action('AdminController@viewTambahKegiatan')}}" class="btn btn-success align-middle"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
                </div>
              </div>
              <br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Poster</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Waktu</th>
                    <th class="text-center">Batas Tanggal</th>
                    <th class="text-center">Batas Waktu</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kegiatans->where('Tipe_Kegiatan', 'Pendaftaran') as $event)

                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 170px; width: auto; margin: 0" src="{{url($event->Foto_Kegiatan)}}">
                    </td>
                    <td class="align-middle text-center">{{$event->Nama_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Tanggal_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Waktu_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Batas_Tanggal_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Batas_Waktu_Kegiatan}}</td>
                    <td class="align-middle text-left">
                      <li style="list-style-type: none; padding: 5px"><a href="/pendaftarkegiatan/{{$event->id}}" style="margin: 5px;" type="button" class="btn btn-success"><i class="fas fa-users"></i> Pendaftar</a></li>
                      <li style="list-style-type: none; padding: 5px"><a href="/editkegiatan/{{$event->id}}" style="margin: 5px;" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#del{{$event->id}}"><i class="far fa-trash-alt"></i> Delete</button></li>
                    </td>
                  </tr>

                  <!--Tolak Modal -->
                  <div class="modal fade" id="del{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menghapus kegiatan <b>{{$event->Nama_Kegiatan}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/deletekegiatan/{{$event->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- / tabs_item -->

          {{-- Pendaftaran --}}
          <div class="tabs_item">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p style="display: inline-block; margin: 0px">Daftar pendaftaran event UKM Musik ITS</p>
                </div>
                <div class="col-md-6" align="right">
                  <a href="{{action('AdminController@viewTambahKegiatan')}}" class="btn btn-success align-middle"><i class="fas fa-plus"></i> Tambah Kegiatan</a>
                </div>
              </div>
              <br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Poster</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Waktu</th>
                    <th class="text-center">Batas Tanggal</th>
                    <th class="text-center">Batas Waktu</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kegiatans->where('Tipe_Kegiatan', 'Pendaftaran') as $event)

                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 100px; width: auto; margin: 0" src="{{url($event->Foto_Kegiatan)}}">
                    </td>
                    <td class="align-middle text-center">{{$event->Nama_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Tanggal_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Waktu_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Batas_Tanggal_Kegiatan}}</td>
                    <td class="align-middle text-center">{{$event->Batas_Waktu_Kegiatan}}</td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><a href="/editkegiatan/{{$event->id}}" style="margin: 5px;" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#del{{$event->id}}"><i class="far fa-trash-alt"></i> Delete</button></li>
                    </td>
                  </tr>

                  <!--Tolak Modal -->
                  <div class="modal fade" id="del{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menghapus kegiatan <b>{{$event->Nama_Kegiatan}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/deletekegiatan/{{$event->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- / tabs_item -->

        </div> <!-- / tab_content -->
      </div> <!-- / tab -->
    </div>
  </div>

  {{-- <div class="row">

    <h3 style="margin-left: 10px; font-weight: bold; margin-top: 20px">Kegiatan Rutin : </h3>
    @foreach($kegiatans->where('Tipe_Kegiatan', 'Rutin') as $event)
    <div class="col-md-12" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); margin: 10px">
      <div style="background-color: white; margin: 10px 10px 15px 10px">
        <div style="display: inline-block;">
          <p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">{{$event->Nama_Kegiatan}}</p>
          <p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px;">{{str_limit($event->Deskripsi_Kegiatan, 100, '...')}}</p>
        </div>
        <div style="float: right; padding-top: 15px">
          <a href="/editkegiatan/{{$event->id}}" class="btn btn-primary" style="margin: 5px"><i class="far fa-edit"> </i> Edit</a>
          <button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$event->id}}"><i class="far fa-trash-alt"></i> Delete</button>
        </div>
      </div>
    </div>

    <!-- Delete Rutin Modal -->
    <div class="modal fade" id="{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus kegiatan <b>{{$event->Nama_Kegiatan}}</b> ?
          </div>
          <div class="modal-footer">
            <a href="/deletekegiatan/{{$event->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    @endforeach

    <h3 style="margin-left: 10px; margin-top: 50px; font-weight: bold">Kegiatan Pendaftaran : </h3>
    @foreach($kegiatans->where('Tipe_Kegiatan', 'Pendaftaran') as $event)
    <div class="col-md-12" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); margin: 10px">
      <div style="background-color: white; margin: 10px 10px 15px 10px">
        <div style="display: inline-block;">
          <p style="font-size: 25px; vertical-align: middle; margin-bottom: 0px; padding-bottom: 10px">{{$event->Nama_Kegiatan}}</p>
          <p style="font-size: 17px; vertical-align: middle; margin-bottom: 0px;">{{str_limit($event->Deskripsi_Kegiatan, 80, '...')}}</p>
        </div>
        <div style="float: right; padding-top: 15px">
          <a href="/kegiatan/{{$event->id}}" class="btn btn-success" style="margin: 5px"><i class="fas fa-eye"> </i> View</a>
          <a href="/editkegiatan/{{$event->id}}" class="btn btn-primary" style="margin: 5px"><i class="far fa-edit"> </i> Edit</a>
          <button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$event->id}}"><i class="far fa-trash-alt"></i> Delete</button>
        </div>
      </div>
    </div>

    <!-- Delete Pendaftaran Modal -->
    <div class="modal fade" id="{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus kegiatan <b>{{$event->Nama_Kegiatan}}</b> ?
          </div>
          <div class="modal-footer">
            <a href="/deletekegiatan/{{$event->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    @endforeach

  </div> --}}
</div>
<br>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() { 

    (function ($) { 
      $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

      $('.tab ul.tabs li a').click(function (g) { 
        var tab = $(this).closest('.tab'), 
        index = $(this).closest('li').index();

        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');

        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

        g.preventDefault();
      } );
    })(jQuery);

  });
</script>

@endsection