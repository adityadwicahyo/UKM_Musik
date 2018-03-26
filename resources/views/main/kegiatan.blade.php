@extends('layouts.master')

@section('title')
Kegiatan | UKM Musik ITS
@endsection

@section('current4')
	current-menu-item
@endsection

@section('content')
<br>
<br>
<br>
<main class="main-content">
	<div class="fullwidth-block inner-content">
		<div class="container">
			<a href="{{action('ViewController@formkegiatan')}}">
				<div style="padding-bottom: 30px">
					<i class="fas fa-plus-square" style="color: #EA5724; font-size: 40px; float: left"></i>
					<input type="submit" class="button cut-corner" value="Upload Kegiatan" style="margin-left: 20px">
				</div>
			</a>
			<div class="row">
				<div class="col-md-7">
					<div class="content">
						<h2 class="entry-title">Kegiatan</h2>

						<div class="post">
							<div class="entry-date">
								<div class="date">23</div>
								<span class="month">Jun</span>
							</div>
							<div class="featured-image">
								<img src="{{url('Band/dummy/featured-image-1.jpg')}}" alt="">
							</div>
							<h2 class="entry-title"><a href="#">Sed et persipiatis unde omnis iste natus</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
							<a href="#">Read more</a>
						</div>

						<div class="post">
							<div class="entry-date">
								<div class="date">23</div>
								<span class="month">Jun</span>
							</div>
							<div class="featured-image">
								<img src="{{url('Band/dummy/featured-image-2.jpg')}}" alt="">
							</div>
							<h2 class="entry-title"><a href="#">Consectetur adipisicing elit</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
							<a href="#">Read more</a>
						</div>

						<div class="post">
							<div class="entry-date">
								<div class="date">23</div>
								<span class="month">Jun</span>
							</div>
							<div class="featured-image">
								<img src="{{url('Band/dummy/featured-image-3.jpg')}}" alt="">
							</div>
							<h2 class="entry-title"><a href="#">Adipisci voluptates molestiae iusto</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
							<a href="#">Read more</a>
						</div>

						<div class="post">
							<div class="entry-date">
								<div class="date">23</div>
								<span class="month">Jun</span>
							</div>
							<div class="featured-image">
								<img src="{{url('Band/dummy/featured-image-4.jpg')}}" alt="">
							</div>
							<h2 class="entry-title"><a href="#">Obcaecati officia quo dicta</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
							<a href="#">Read more</a>
						</div>

						<div class="post">
							<div class="entry-date">
								<div class="date">23</div>
								<span class="month">Jun</span>
							</div>
							<div class="featured-image">
								<img src="{{url('Band/dummy/featured-image-5.jpg')}}" alt="">
							</div>
							<h2 class="entry-title"><a href="#">Nesciunt eligendi asperiores</a></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati officia quo dicta, similique, reiciendis beatae enim adipisci voluptates molestiae iusto, totam harum aliquid. Non officiis nobis, ut nesciunt eligendi asperiores.</p>
							<a href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-md-push-1">
					<aside class="sidebar">
						<div class="widget">
							<h3 class="widget-title">Discography</h3>
							<ul class="discography-list">
								<li>
									<figure class="cover"><img src="{{url('Band/dummy/thumbnail-1.jpg')}}" alt="thumbnail 1"></figure>
									<div class="detail">
										<h3><a href="#">Deserunt mollitia animi</a></h3>
										<span class="year">2004</span>
										<span class="track">17 tracks</span>
									</div>
								</li>
								<li>
									<figure class="cover"><img src="{{url('Band/dummy/thumbnail-2.jpg')}}" alt="thumbnail 2"></figure>
									<div class="detail">
										<h3><a href="#">Deserunt mollitia animi</a></h3>
										<span class="year">2004</span>
										<span class="track">17 tracks</span>
									</div>
								</li>
								<li>
									<figure class="cover"><img src="{{url('Band/dummy/thumbnail-3.jpg')}}" alt="thumbnail 3"></figure>
									<div class="detail">
										<h3><a href="#">Deserunt mollitia animi</a></h3>
										<span class="year">2004</span>
										<span class="track">17 tracks</span>
									</div>
								</li>
								<li>
									<figure class="cover"><img src="{{url('Band/dummy/thumbnail-4.jpg')}}" alt="thumbnail 4"></figure>
									<div class="detail">
										<h3><a href="#">Deserunt mollitia animi</a></h3>
										<span class="year">2004</span>
										<span class="track">17 tracks</span>
									</div>
								</li>
								<li>
									<figure class="cover"><img src="{{url('Band/dummy/thumbnail-5.jpg')}}" alt="thumbnail 5"></figure>
									<div class="detail">
										<h3><a href="#">Deserunt mollitia animi</a></h3>
										<span class="year">2004</span>
										<span class="track">17 tracks</span>
									</div>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div> <!-- .testimonial-section -->
</main> <!-- .main-content -->
@endsection