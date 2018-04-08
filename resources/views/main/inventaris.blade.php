@extends('layouts.master')

@section('title') SIMUSIK | Inventaris @endsection

@section('active-inventaris') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br>
	<!--==========================
      Kegiatan Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">DAFTAR INVENTARIS</h3>
          <span class="section-divider"></span>
          <p class="section-description"></p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic">
                <img id="myImg" src="{{url('NEW/img/gitar.jpg')}}" alt="GITAR TIPE">
<!-- The Modal -->
                <div id="myModal" class="modal">
                  <span class="close" style=" font-size: 100px">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
                </div>
                
              </div>
              <h4>gitar akustik</h4>
              <span>gitar tipe</span>
              <div style="padding: 20px"> 
                <button type="button" class="btn btn-success">PINJAM</button>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic">
                <img id="myImg" src="{{url('NEW/img/drum.jpg')}}" alt="Trolltunga, Norway">
<!-- The Modal -->
                <div id="myModal" class="modal">
                  <span class="close" style=" font-size: 100px">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
                </div>
                
              </div>
              <h4>drum </h4>
              <span>drum tipe</span>
              <div style="padding: 20px"> 
                <button type="button" class="btn btn-success">PINJAM</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" >
              <div class="pic">
                <img id="myImg" src="{{url('NEW/img/mic.jpg')}}" alt="Trolltunga, Norway">
<!-- The Modal -->
                <div id="myModal" class="modal">
                  <span class="close" style=" font-size: 100px">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
                </div>
                
              </div>
              <h4>mikrofon</h4>
              <span>mikrofon type </span>
               <div style="padding: 20px"> 
                <button type="button" class="btn btn-success">PINJAM</button>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic">
                <img id="myImg" src="{{url('NEW/img/keyboard.jpg')}}" alt="Trolltunga, Norway">
<!-- The Modal -->
                <div id="myModal" class="modal">
                  <span class="close" style=" font-size: 100px">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
                </div>
                
              </div>
              <h4>keyboard</h4>
              <span>keyboard type</span>
               <div style="padding: 20px"> 
                <button type="button" class="btn btn-success">PINJAM</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #team -->
@endsection