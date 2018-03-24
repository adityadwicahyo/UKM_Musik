@extends('layouts.master')

@section('title')
UKM Musik ITS
@endsection

@section('current0')
	current-menu-item
@endsection

@section('content')
<div class="hero">
	<div class="slider">
		<ul class="slides">
			<li class="lazy-bg" data-background="{{url('Band/dummy/slide-1.jpg')}}">
				<div class="container">
					<h2 class="slide-title">UKM Musik</h2>
					<h3 class="slide-subtitle">Institut Teknologi Sepuluh Nopember</h3>
					<p class="slide-desc">Unit yang mewadahi Kegiatan Mahasiswa Institut Teknologi Sepuluh Nopember di bidang musik. <br>Mencakup penyaluran minat dan pengembangan bakat. Dan merupakan salah satu ORMAWA dalam KM ITS yang dinaungi oleh Lembaga Minat Bakat (LMB) ITS.</p>

					<a href="#" class="button cut-corner">Read More</a>
				</div>
			</li>
			<li class="lazy-bg" data-background="{{url('Band/dummy/slide-2.jpg')}}">
				<div class="container">
					<h2 class="slide-title">UKM Musik</h2>
					<h3 class="slide-subtitle">Institut Teknologi Sepuluh Nopember</h3>
					<p class="slide-desc">Unit yang mewadahi Kegiatan Mahasiswa Institut Teknologi Sepuluh Nopember di bidang musik. <br>Mencakup penyaluran minat dan pengembangan bakat. Dan merupakan salah satu ORMAWA dalam KM ITS yang dinaungi oleh Lembaga Minat Bakat (LMB) ITS.</p>

					<a href="#" class="button cut-corner">Read More</a>
				</div>
			</li>
			<li class="lazy-bg" data-background="{{url('Band/dummy/slide-3.jpg')}}">
				<div class="container">
					<h2 class="slide-title">UKM Musik</h2>
					<h3 class="slide-subtitle">Institut Teknologi Sepuluh Nopember</h3>
					<p class="slide-desc">Unit yang mewadahi Kegiatan Mahasiswa Institut Teknologi Sepuluh Nopember di bidang musik. <br>Mencakup penyaluran minat dan pengembangan bakat. Dan merupakan salah satu ORMAWA dalam KM ITS yang dinaungi oleh Lembaga Minat Bakat (LMB) ITS.</p>

					<a href="#" class="button cut-corner">Read More</a>
				</div>
			</li>
		</ul>
	</div>
</div>

<main class="main-content">
	<div class="fullwidth-block testimonial-section">
		<div class="container">
			<div class="quote-slider">
				<ul class="slides">
					<li>
						<blockquote>
							<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo"</p>
							<cite>John Smith</cite>
							<span>Corporation CEO, books author</span>
						</blockquote>
					</li>
					<li>
						<blockquote>
							<p>"Iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo"</p>
							<cite>John Smith</cite>
							<span>Corporation CEO, books author</span>
						</blockquote>
					</li>
				</ul>
			</div>
		</div>
	</div> <!-- .testimonial-section -->

	<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
		<div class="container">
			<header class="section-header">
				<h2 class="section-title">Upcoming events</h2>

				<div class="event-nav">
					<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
					<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
				</div> <!-- .event-nav -->

			</header> <!-- .section-header -->
			<div class="event-carousel">

				<div class="event">
					<div class="entry-date">
						<div class="date">23</div>
						<span class="month">Jun</span>
					</div>
					<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid temporibus quos aspernatur</p>
				</div> <!-- .event -->


				<div class="event">
					<div class="entry-date">
						<div class="date">23</div>
						<span class="month">Jun</span>
					</div>
					<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid temporibus quos aspernatur</p>
				</div> <!-- .event -->


				<div class="event">
					<div class="entry-date">
						<div class="date">23</div>
						<span class="month">Jun</span>
					</div>
					<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid temporibus quos aspernatur</p>
				</div> <!-- .event -->


				<div class="event">
					<div class="entry-date">
						<div class="date">23</div>
						<span class="month">Jun</span>
					</div>
					<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid temporibus quos aspernatur </p>
				</div> <!-- .event -->


				<div class="event">
					<div class="entry-date">
						<div class="date">23</div>
						<span class="month">Jun</span>
					</div>
					<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid temporibus quos aspernatur </p>
				</div> <!-- .event -->

			</div> <!-- .event-carousel -->
		</div> <!-- .container -->
	</div> <!-- .upcoming-event-section -->

	<div class="fullwidth-block why-chooseus-section">
		<div class="container">
			<h2 class="section-title">Why choose us?</h2>

			<div class="row">
				<div class="col-md-4">
					<div class="feature">
						<figure class="cut-corner">
							<img src="{{url('Band/dummy/medium-image-1.jpg')}}" alt="">
						</figure>
						<h3 class="feature-title">Similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum</h3>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
					</div> <!-- .feature -->
				</div>
				<div class="col-md-4">
					<div class="feature">
						<figure class="cut-corner">
							<img src="{{url('Band/dummy/medium-image-2.jpg')}}" alt="">
						</figure>
						<h3 class="feature-title">Similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum</h3>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
					</div> <!-- .feature -->
				</div>
				<div class="col-md-4">
					<div class="feature">
						<figure class="cut-corner">
							<img src="{{url('Band/dummy/medium-image-3.jpg')}}" alt="">
						</figure>
						<h3 class="feature-title">Similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum</h3>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
					</div> <!-- .feature -->
				</div>
			</div>
		</div> <!-- .container -->
	</div> <!-- .why-chooseus-section -->
</main> <!-- .main-content -->
@endsection