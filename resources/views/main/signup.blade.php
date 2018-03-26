@extends('layouts.master')

@section('title')
SignUp | UKM Musik ITS
@endsection

@section('current6')
current-menu-item
@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{url('Band/Login_v17/Login_v17/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('Band/Login_v17/Login_v17/css/main.css')}}">
<br><br><br><br><br>
<div class="limiter">
	<div class="container-login100" style="background-color: #141414">
		<div class="wrap-login100">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-34" style="color: #EA5724; font-weight: bold">
					Account Registration
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
					<input id="first-name" class="input100" type="text" name="username" placeholder="First Name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
					<input class="input100" type="password" name="pass" placeholder="Last Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="NRP">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100" style="margin-top: 10px">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100" style="margin-top: 10px">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Phone Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100" style="margin-top: 10px">
					<input id="phone" class="input100" type="password" name="phone" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn" style="padding-top: 30px">
					<button class="login100-form-btn">
						Sign Up
					</button>
				</div>

				<div class="w-full text-center p-t-27 p-b-239">
					<span class="txt1">
						Already have
					</span>

					<a href="#" class="txt2">
						Account?
					</a>
				</div>

				<div class="w-full text-center">
					<a href="#" class="txt3">
						Login
					</a>
				</div>
			</form>

			<div class="login100-more" style="background-image: url('{{url('Band/Login_v17/Login_v17/images/bg-02.jpg')}}');"></div>
		</div>
	</div>
</div>
<div id="dropDownSelect1"></div>

<script src="{{url('Band/Login_v17/Login_v17vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('Band/Login_v17/Login_v17js/main.js')}}"></script>
@endsection