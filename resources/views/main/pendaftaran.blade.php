@extends('layouts.master')

@section('title')
Pendaftaran | UKM Musik ITS
@endsection

@section('current3')
current-menu-item
@endsection

@section('content')
{{-- Form --}}
<link rel="stylesheet" type="text/css" href="{{url('Band/ContactFrom/ContactFrom_v17/css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('Band/ContactFrom/ContactFrom_v17/css/main.css')}}">
{{-- /From --}}

<br><br>
<main class="main-content alls">
	<div class="fullwidth-block inner-content">
		<div class="container">
			<div class="wrap-contact100">
				<form class="contact100-form validate-form">
					<span class="contact100-form-title" style="color: #EA5724; font-weight: bold">
						Registration Form
					</span>

					<label class="label-input100" for="first-name">Tell us your name<span style="color: red">*</span></label>
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
						<input id="first-name" class="input100 input-form" type="text" name="first-name" placeholder="First name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
						<input class="input100 input-form" type="text" name="last-name" placeholder="Last name">
						<span class="focus-input100"></span>
					</div>

					<label class="label-input100" for="email">Enter your email<span style="color: red">*</span></label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100 input-form" type="text" name="email" placeholder="Eg. example@email.com">
						<span class="focus-input100"></span>
					</div>

					<label class="label-input100" for="phone">Enter phone number</label>
					<div class="wrap-input100">
						<input id="phone" class="input100 input-form" type="text" name="phone" placeholder="Eg. +1 800 000000">
						<span class="focus-input100"></span>
					</div>

					<label class="label-input100" for="phone">Photo</label>
					<div class="wrap-input100">
						<input id="phone" class="input100 input-form" type="file" name="phone" style="padding-top: 15px">
						<span class="focus-input100"></span>
					</div>

					<label class="label-input100" for="message">Reason<span style="color: red">*</span> </label>
					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea id="message" class="input100" name="message" placeholder="Write us your reason joining this club"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" style="background-color: #EA5724">
							Submit
						</button>
					</div>
				</form>

				<div class="contact100-more flex-col-c-m" style="background-image: url('{{url('Band/ContactFrom/ContactFrom_v17/images/bg-01.jpg')}}');">
					<div class="txt1 p-r-25" style="font-weight: bold">Contact Person</div>
					<br>
					<hr>
					<div class="flex-w size1 p-b-47">
						<div class="txt1 p-r-25">
							<span class="lnr lnr-map-marker"></span>
						</div>

						<div class="flex-col size2">
							<span class="txt1 p-b-20">
								Address
							</span>

							<span class="txt2">
								Gedung SCC, Institut Teknologi Sepuluh Nopember
							</span>
						</div>
					</div>

					<div class="dis-flex size1 p-b-47">
						<div class="txt1 p-r-25">
							<span class="lnr lnr-phone-handset"></span>
						</div>

						<div class="flex-col size2">
							<span class="txt1 p-b-20">
								Lets Talk
							</span>

							<span class="txt3" style="color: #EA5724">
								+1 800 1236879
							</span>
						</div>
					</div>

					<div class="dis-flex size1 p-b-47">
						<div class="txt1 p-r-25">
							<span class="lnr lnr-envelope"></span>
						</div>

						<div class="flex-col size2">
							<span class="txt1 p-b-20">
								General Support
							</span>

							<span class="txt3" style="color: #EA5724">
								contact@example.com
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
{{-- Form --}}
<script src="{{url('Band/ContactFrom/ContactFrom_v17/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('Band/ContactFrom/ContactFrom_v17/js/main.js')}}"></script>
@endsection