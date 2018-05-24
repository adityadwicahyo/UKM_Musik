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
  @if($errors->any('TolakPeminjaman'))
  <div class="alert alert-danger" align="center">
    <strong>Success! {{ $errors->first('TolakPeminjaman')}}</strong>
  </div>
  @endif
  @if($errors->any('SetujuPeminjaman'))
  <div class="alert alert-success" align="center">
    <strong>Success! {{ $errors->first('SetujuPeminjaman')}}</strong>
  </div>
  @endif
  @if($errors->any('AmbilPeminjaman'))
  <div class="alert alert-success" align="center">
    <strong>Success! {{ $errors->first('AmbilPeminjaman')}}</strong>
  </div>
  @endif
  @if($errors->any('KembaliPeminjaman'))
  <div class="alert alert-success" align="center">
    <strong>Success! {{ $errors->first('KembaliPeminjaman')}}</strong>
  </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <div class="tab">

        <ul class="tabs" style="padding: 0">
          <li><a href="#"><b>Inventaris</b></a></li>
          <li><a href="#"><b>Peminjaman</b></a></li>
          <li><a href="#"><b>Disetujui</b></a></li>
          <li><a href="#"><b>Diambil</b></a></li>
        </ul> <!-- / tabs -->

        <div class="tab_content">

          {{-- Inventaris --}}
          <div class="tabs_item">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <p style="display: inline-block; margin: 0px">Daftar inventaris UKM Musik ITS</p>
                </div>
                <div class="col-md-6" align="right">
                  <a href="{{action('AdminController@viewTambahInventaris')}}" class="btn btn-success align-middle"><i class="fas fa-plus"></i> Tambah Inventaris</a>
                </div>
              </div>
              <br>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($inventaris as $invent)

                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 100px; width: auto; margin: 0" src="{{url($invent->Foto_Inventaris)}}">
                    </td>
                    <td class="align-middle text-center">{{$invent->Nama_Inventaris}}</td>
                    <td class="align-middle text-center">{{$invent->Deskripsi_Inventaris}}</td>
                    <td class="align-middle text-center">{{$invent->Jumlah_Inventaris}}</td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><a href="/editinventaris/{{$invent->ID_Inventaris}}" style="margin: 5px;" type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#del{{$invent->ID_Inventaris}}"><i class="far fa-trash-alt"></i> Delete</button></li>
                    </td>
                  </tr>

                  <!--Tolak Modal -->
                  <div class="modal fade" id="del{{$invent->ID_Inventaris}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Delete</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menghapus inventaris <b>{{$invent->Nama_Inventaris}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/deleteinventaris/{{$invent->ID_Inventaris}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
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

          {{-- Peminjaman --}}
          <div class="tabs_item">
            <div class="container">
              <p>Daftar peminjaman inventaris UKM Musik ITS</p>            
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP Peminjam</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Tanggal Peminjaman</th>
                    <th class="text-center">Tanggal Kembali</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($peminjamans->where('Status_Peminjaman', 'Tunggu') as $peminjaman)
                  @foreach($inventaris->where('ID_Inventaris', $transaksi->ID_Inventaris) as $invent)
                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 100px; width: auto; margin: 0" src="{{url($invent->Foto_Inventaris)}}">
                    </td>
                    <td class="align-middle text-center">{{$invent->Nama_Inventaris}}</td>
                    <td class="align-middle text-center">{{$peminjaman->NRP_Peminjam}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Jumlah_Barang}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Tanggal_Peminjaman}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Tanggal_Kembali}}</td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-success" data-toggle="modal" data-target="#setuju{{$peminjaman->ID_Peminjaman}}"><i class="fas fa-check"></i> Setuju</button></li>
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-danger" data-toggle="modal" data-target="#tolak{{$peminjaman->ID_Peminjaman}}"><i class="far fa-trash-alt"></i> Tolak</button></li>
                    </td>
                  </tr>

                  <!--Setuju Modal -->
                  <div class="modal fade" id="setuju{{$peminjaman->ID_Peminjaman}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Persetujuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menyetujui peminjaman <b>{{$invent->Nama_Inventaris}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/setujupeminjaman/{{$peminjaman->ID_Peminjaman}}" class="btn btn-success"><i class="fas fa-check"></i> Yakin</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->

                  <!--Tolak Modal -->
                  <div class="modal fade" id="tolak{{$peminjaman->ID_Peminjaman}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Penghapusan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin menolak peminjaman <b>{{$invent->Nama_Inventaris}}</b>?
                        </div>
                        <div class="modal-footer">
                          <a href="/tolakpeminjaman/{{$peminjaman->ID_Peminjaman}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Yakin</a>
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
          <!-- / tabs_item -->

          {{-- Disetujui --}}
          <div class="tabs_item">
            <div class="container">
              <p>Daftar peminjaman inventaris UKM Musik ITS yang telah disetujui</p>            
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP Peminjam</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Tanggal Peminjaman</th>
                    <th class="text-center">Tanggal Kembali</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($peminjamans->where('Status_Peminjaman', 'Setuju') as $peminjaman)
                  @foreach($inventaris->where('ID_Inventaris', $peminjaman->ID_Barang) as $invent)
                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 100px; width: auto; margin: 0" src="{{url($invent->Foto_Inventaris)}}">
                    </td>
                    <td class="align-middle text-center">{{$invent->Nama_Inventaris}}</td>
                    <td class="align-middle text-center">{{$peminjaman->NRP_Peminjam}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Jumlah_Barang}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Tanggal_Peminjaman}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Tanggal_Kembali}}</td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#diambil{{$peminjaman->ID_Peminjaman}}"><i class="fas fa-check"></i> Diambil</button></li>
                    </td>
                  </tr>

                  <!--Diambil Modal -->
                  <div class="modal fade" id="diambil{{$peminjaman->ID_Peminjaman}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pengambilan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin inventaris <b>{{$invent->Nama_Inventaris}}</b> telah diambil?
                        </div>
                        <div class="modal-footer">
                          <a href="/ambilpeminjaman/{{$peminjaman->ID_Peminjaman}}" class="btn btn-primary"><i class="fas fa-check"></i> Yakin</a>
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
          <!-- / tabs_item -->

          {{-- Diambil --}}
          <div class="tabs_item">
            <div class="container">
              <p>Daftar peminjaman inventaris UKM Musik ITS yang telah diambil</p>            
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NRP Peminjam</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Tanggal Peminjaman</th>
                    <th class="text-center">Tanggal Kembali</th>
                    <th class="text-center">Kelola</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($peminjamans->where('Status_Peminjaman', 'Diambil') as $peminjaman)
                  @foreach($inventaris->where('ID_Inventaris', $peminjaman->ID_Barang) as $invent)
                  <tr>
                    <td class="text-center">
                      <img class="center" style="height: 100px; width: auto; margin: 0" src="{{url($invent->Foto_Inventaris)}}">
                    </td>
                    <td class="align-middle text-center">{{$invent->Nama_Inventaris}}</td>
                    <td class="align-middle text-center">{{$peminjaman->NRP_Peminjam}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Jumlah_Barang}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Tanggal_Peminjaman}}</td>
                    <td class="align-middle text-center">{{$peminjaman->Tanggal_Kembali}}</td>
                    <td class="align-middle text-center">
                      <li style="list-style-type: none; padding: 5px"><button  style="margin: 5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#kembali{{$peminjaman->ID_Peminjaman}}"><i class="fas fa-check"></i> Kembali</button></li>
                    </td>
                  </tr>

                  <!--Diambil Modal -->
                  <div class="modal fade" id="kembali{{$peminjaman->ID_Peminjaman}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pengembalian</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Apakah Anda yakin inventaris <b>{{$invent->Nama_Inventaris}}</b> telah dikembalikan?
                        </div>
                        <div class="modal-footer">
                          <a href="/kembalipeminjaman/{{$peminjaman->ID_Peminjaman}}" class="btn btn-primary"><i class="fas fa-check"></i> Yakin</a>
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
          <!-- / tabs_item -->

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