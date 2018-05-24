@extends('layouts.master')

@section('title') SIMUSIK | Profil @endsection

@section('active-blog') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

<br><br><br><br><br>

@if($errors->any('Success'))
<div class="alert alert-success" align="center">
  <strong>Success! {{ $errors->first('Success')}}</strong>
</div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-10">
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>

          <!-- Form Name -->
          <legend>
            <h1>Profil</h1>
          </legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="Name (Full name)">Nama</label>
            <div class="col-md-6">
              @if($errors->any('Nama_Mahasiswa'))
              <p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Nama_Mahasiswa')}}</p>
              @endif 
              <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
              </div>
              <input id="Name (Full name)" name="Nama_Mahasiswa" type="text" class="form-control input-md" value="{{Auth::user()->Nama_Mahasiswa}}">
            </div>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="Primary Occupation">NRP</label>  
          <div class="col-md-6">
            @if($errors->any('NRP_Mahasiswa'))
            <p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('NRP_Mahasiswa')}}</p>
            @endif 
            <div class="input-group">
             <div class="input-group-addon">
               <i class="fa fa-briefcase"></i>
             </div>
             <input id="Primary Occupation" name="NRP_Mahasiswa" type="text" class="form-control input-md" value="{{Auth::user()->NRP_Mahasiswa}}">
           </div>
         </div>
       </div>

       <!-- Text input-->
       <div class="form-group">
        <label class="col-md-3 control-label" for="Primary Occupation">Email</label>  
        <div class="col-md-6">
          @if($errors->any('Email_Mahasiswa'))
          <p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('Email_Mahasiswa')}}</p>
          @endif 
          <div class="input-group">
           <div class="input-group-addon">
             <i class="fa fa-briefcase"></i>
           </div>
           <input id="Primary Occupation" name="Email_Mahasiswa" type="email" class="form-control input-md" value="{{Auth::user()->Email_Mahasiswa}}">
         </div>
       </div>
     </div>

     <!-- Text input-->
     <div class="form-group">
      <label class="col-md-3 control-label" for="Primary Occupation">Nomor Telepon</label>  
      <div class="col-md-6">
        @if($errors->any('No_telp_Mahasiswa'))
        <p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('No_Telp_Mahasiswa')}}</p>
        @endif 
        <div class="input-group">
         <div class="input-group-addon">
           <i class="fa fa-briefcase"></i>
         </div>
         <input id="Primary Occupation" name="No_telp_Mahasiswa" type="text" class="form-control input-md" value="{{Auth::user()->No_telp_Mahasiswa}}">
       </div>
     </div>
   </div>

   {{-- Password --}}
   <div class="form-group">
    <label class="col-md-3 control-label col-xs-12" for="Temporary Address">Password</label>  
    <div class="col-md-3  col-xs-4">
      @if($errors->any('password'))
      <p style="color: red; float: right; margin-bottom: 0px; font-weight: bold">{{ $errors->first('password')}}</p>
      @endif
      <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md ">
    </div>
    <div class="col-md-3 col-xs-4">
      <input id="Temporary Address" name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control input-md ">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-3 control-label" for="Primary Occupation">Biodata</label>  
    <div class="col-md-6">
      <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-briefcase"></i>
       </div>
       <textarea id="Primary Occupation" name="Biodata_Mahasiswa" class="form-control">{{Auth::user()->Biodata_Mahasiswa}}</textarea>
     </div>
   </div>
 </div>

 <!-- File Button --> 
 <div class="form-group">
  <label class="col-md-3 control-label" for="Upload photo">Upload Foto</label>
  <div class="col-md-4">
    <input id="Upload photo" name="Foto_Mahasiswa" class="input-file" type="file" value="{{Auth::user()->Foto_Mahasiswa}}">
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-3 control-label" for="Upload photo">Upload Berkas</label>
  <div class="col-md-4">
    <input id="Upload photo" name="Berkas_Mahasiswa" class="input-file" type="file" value="{{Auth::user()->Berkas_Mahasiswa}}">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" ></label>  
  <div class="col-md-4">
    <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Edit</button>
  </div>
</div>
<input type="hidden" name="ID_Mahasiswa" value="{{Auth::user()->ID_Mahasiswa}}">

</fieldset>
</form>
</div>

<div class="col-md-2 hidden-xs">
  <img src="{{Auth::user()->Foto_Mahasiswa}}" class="img-responsive img-thumbnail ">
</div>

</div>
</div>
<br><br><br><br><br>
@endsection