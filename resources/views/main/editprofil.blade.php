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
             <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-user">
                </i>
              </div>
              <input id="Name (Full name)" name="Nama_User" type="text" class="form-control input-md" value="{{Auth::user()->Nama_User}}">
            </div>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-3 control-label" for="Primary Occupation">NRP</label>  
          <div class="col-md-6">
            <div class="input-group">
             <div class="input-group-addon">
               <i class="fa fa-briefcase"></i>
             </div>
             <input id="Primary Occupation" name="NRP_User" type="text" class="form-control input-md" value="{{Auth::user()->NRP_User}}">
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

      <!-- File Button --> 
      <div class="form-group">
        <label class="col-md-3 control-label" for="Upload photo">Upload Foto</label>
        <div class="col-md-4">
          <input id="Upload photo" name="Foto_User" class="input-file" type="file" value="{{Auth::user()->Foto_User}}">
        </div>
      </div>

      <!-- File Button --> 
      <div class="form-group">
        <label class="col-md-3 control-label" for="Upload photo">Upload KTM</label>
        <div class="col-md-4">
          <input id="Upload photo" name="KTM_User" class="input-file" type="file" value="{{Auth::user()->KTM_User}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label" ></label>  
        <div class="col-md-4">
          <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Edit</button>
        </div>
      </div>
      <input type="hidden" name="id" value="{{Auth::user()->id}}">

    </fieldset>
  </form>
</div>

<div class="col-md-2 hidden-xs">
  <img src="{{Auth::user()->Foto_User}}" class="img-responsive img-thumbnail ">
</div>

</div>
</div>
<br><br><br><br><br>
@endsection