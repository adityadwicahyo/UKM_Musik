@extends('layouts.app')
@section('title','KaKiKe')
@section('content')
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{url('images/cover_bg_1.jpg')}}">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Tab panes -->
							<div class="tab-content">
								<div class="row">
									<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="from">Budget</label>
											<select class="cs-select cs-skin-border">
												<option value="" disabled selected>Range</option>
												<option value="Surabaya">Rp 50.000 - Rp 100.000</option>
												<option value="Jakarta">Rp 100.000 - Rp 200.000</option>
												<option value="Probolinggo">Rp 200.000 - Rp 500.000</option>
											</select>
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt">
										<div class="input-field">
											<label for="from">Participants</label>
											<input type="number" class="form-control participants" min="1" placeholder="People"/>
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt alternate">
										<div class="input-field">
											<label for="date-start">Departs</label>
											<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
										</div>
									</div>
									<div class="col-xxs-12 col-xs-6 mt alternate">
										<div class="input-field">
											<label for="date-end">Return</label>
											<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
										</div>
									</div>
									<div class="col-sm-12 mt">
										<section>
											<label for="class">Destination</label>
											<select class="cs-select cs-skin-border">
												<option value="" disabled selected>Place</option>
												<option value="Surabaya">Surabaya</option>
												<option value="Jakarta">Jakarta</option>
												<option value="Probolinggo">Probolinggo</option>
											</select>
										</section>
									</div>
									<div class="col-sm-12 mt">
										<section>
											<label for="class">Theme</label>
											<select class="cs-select cs-skin-border">
												<option value="" disabled selected>Place</option>
												<option value="Beach">Beach</option>
												<option value="Forest">Forest</option>
												<option value="Mountain">Mountain</option>
											</select>
										</section>
									</div>
									<div class="col-xs-12">
										<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="desc2 animate-box">
						<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
							<p><a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">kakike.com</a></p>
							<h2>Kapan Kita Kemana</h2>
							<h3>Kapan Kita Kemana</h3>
							<span class="price">Rp 100</span>
							<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection