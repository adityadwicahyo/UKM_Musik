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
  @if($errors->any('Tolak'))
  <div class="alert alert-danger" align="center">
    <strong>Success! {{ $errors->first('Tolak')}}</strong>
  </div>
  @endif
  @if($errors->any('Hapus'))
  <div class="alert alert-danger" align="center">
    <strong>Success! {{ $errors->first('Hapus')}}</strong>
  </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <div class="tab">

        <ul class="tabs" style="padding: 0">
          <li><a href="#"><b>Pendaftaran</b></a></li>
          <li><a href="#"><b>Anggota</b></a></li>
        </ul> <!-- / tabs -->

        <div class="tab_content">

          {{-- Pendaftar --}}
          <div class="tabs_item">
            <div class="container">
              <p>Daftar mahasiswa yang mendaftar UKM Musik ITS</p>            
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nomor</th>
                    <th class="text-center">Berkas</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($anggotas->where('status_anggota', 'Pendaftar') as $anggota)

                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 110px; width: auto; margin: 0" src="{{url($anggota->foto_anggota)}}">
                    </td>
                    <td class="align-middle text-center">{{$anggota->nama_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->nrp_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->email_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->notelp_anggota}}</td>
                    <td class="align-middle text-center"><a href="#">{{$anggota->nrp_anggota}}</a></td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#terima{{$anggota->id}}"><i class="fas fa-check"></i> Terima</button></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#tolak{{$anggota->id}}"><i class="far fa-trash-alt"></i> Tolak</button></li>
                    </td>
                  </tr>

                  <!--Terima Modal -->
                  <div class="modal fade" id="terima{{$anggota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Penerimaan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menerima pendaftar <b>{{$anggota->nama_anggota}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/anggotaterima/{{$anggota->id}}" class="btn btn-success"><i class="fas fa-check"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  <!--Tolak Modal -->
                  <div class="modal fade" id="tolak{{$anggota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Penolakan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menolak pendaftar <b>{{$anggota->nama_anggota}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/anggotatolak/{{$anggota->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  @endforeach
                </tbody>
              </table>
            </div>
          </div> <!-- / tabs_item -->

          {{-- Anggota --}}
          <div class="tabs_item">
            <div class="container">
              <p>Daftar mahasiswa yang merupakan anggota UKM Musik ITS</p>            
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nomor</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($anggotas->whereNotIn('status_anggota', 'Pendaftar') as $anggota)

                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 110px; width: auto; margin: 0" src="{{url($anggota->foto_anggota)}}">
                    </td>
                    <td class="align-middle text-center">{{$anggota->nama_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->nrp_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->email_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->notelp_anggota}}</td>
                    <td class="align-middle text-center">{{$anggota->status_anggota}}</td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><a href="/anggotaedit/{{$anggota->id}}" style="margin: 5px; color: white" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$anggota->id}}"><i class="far fa-trash-alt"></i> Hapus</button></li>
                    </td>
                  </tr>

                  <!--Tolak Modal -->
                  <div class="modal fade" id="hapus{{$anggota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Penghapusan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menghapus anggota <b>{{$anggota->nama_anggota}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/anggotahapus/{{$anggota->id}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  @endforeach
                </tbody>
              </table>
            </div>
          </div> <!-- / tabs_item -->

        </div> <!-- / tab_content -->
      </div> <!-- / tab -->
    </div>
  </div>

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