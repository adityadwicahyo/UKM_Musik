@extends('layouts.master')

@section('title') SIMUSIK | Kegiatan @endsection

@section('active-kegiatan') style="font-weight: bold" @endsection

@section('navbar') style="background: linear-gradient(45deg, #1de099, #1dc8cd)" @endsection

@section('content')
<br><br><br><br>
<head>
	<link href="{{url('event/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('event/css/calendar-eightysix-default.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('event/css/calendar-eightysix-osx-dashboard.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{url('event/css/calendar-eightysix-vista.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<div class="main">
	<div class="wrap">
		<div class="section group">
			
			<div class="col_1_of_3 span_1_of_3">
					<img src="{{url('event/images/pic.jpg')}}" alt=""/>
					<ul class="m_fb">
						<li style="background: linear-gradient(45deg, #1de099, #1dc8cd); padding: 15px 20px 15px 20px">
							<span style="padding-right: 20px">
								<i class="far fa-calendar-alt" style="color: white"></i>
								<span class="middle"> 17 November 2013</span>
							</span>
							<i class="far fa-clock" style="color: white"></i>
							<span class="middle"> 14:00 - 20-00</span>
						</li>
					</ul>
					<div class="desc">
						<h3><a href="#">Lorem Ipsum is simply dummy</a></h3>
						<h4 class="m_2">consectetur adipisicing elit, sed do</h4>
						<h5 class="m_3">sed do eiusmod tempor incididunt ut labore</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<button style="margin-top: 10px">Read More</button>
					</div>
					<div class="section group example">
						<div class="col_1_of_2 span_1_of_2">
							<ul>
								<li><img src="{{url('event/images/men.png')}}" alt=""/><div class="m_desc"><span class="m_2">13%</span><br><span class="m_3">Male</span></div> <div class="clear"></div></li>
							</ul>
						</div>
						<div class="col_1_of_2 span_1_of_2">
							<ul>
								<li><img src="{{url('event/images/women.png')}}" alt=""/><div class="m_desc"><span class="m_2">87%</span><br><span class="m_3">Fe male</span></div> <div class="clear"></div></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>

		
				<div class="col_1_of_3 span_1_of_3">
					<img src="{{url('event/images/pic1.jpg')}}" alt=""/>
					<ul class="m_fb">
						<li>
							<span class="m_24"><a href="#"><img src="{{url('event/images/fb.png')}}" alt=""/></a></span><span class="middle">Aug 17, 2013 02:00pm-08-00pm IST</span>
							<span class="m_23"><a href="#"><img src="{{url('event/images/heart.png')}}" alt=""/></a></span>
							<div class="clear"></div>
						</li>
					</ul>
					<div class="desc">
						<h3><a href="#">Lorem Ipsum is simply dummy</a></h3>
						<h4 class="m_2">consectetur adipisicing elit, sed do</h4>
						<h5 class="m_3">sed do eiusmod tempor incididunt ut labore</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="section group example">
						<div class="col_1_of_2 span_1_of_2">
							<ul>
								<li><img src="{{url('event/images/men.png')}}" alt=""/><div class="m_desc"><span class="m_2">25%</span><br><span class="m_3">Male</span></div> <div class="clear"></div></li>
							</ul>
						</div>
						<div class="col_1_of_2 span_1_of_2">
							<ul>
								<li><img src="{{url('event/images/women.png')}}" alt=""/><div class="m_desc"><span class="m_2">75%</span><br><span class="m_3">Fe male</span></div> <div class="clear"></div></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>

	
				<div class="col_1_of_3 span_1_of_3">
					<img src="{{url('event/images/pic2.jpg')}}" alt=""/>
					<ul class="m_fb">
						<li>
							<span class="m_22"><a href="#"><img src="{{url('event/images/fb.png')}}" alt=""/></a></span><span class="middle">Aug 17, 2013 02:00pm-08-00pm IST</span>
							<span class="m_23"><a href="#"><img src="{{url('event/images/heart.png')}}" alt=""/></a></span>
							<div class="clear"></div>
						</li>
					</ul>
					<div class="desc">
						<h3><a href="#">Lorem Ipsum is simply dummy</a></h3>
						<h4 class="m_2">consectetur adipisicing elit, sed do</h4>
						<h5 class="m_3">sed do eiusmod tempor incididunt ut labore</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="section group example">
						<div class="col_1_of_2 span_1_of_2">
							<ul>
								<li><img src="{{url('event/images/men.png')}}" alt=""/><div class="m_desc"><span class="m_2">62%</span><br><span class="m_3">Male</span></div> <div class="clear"></div></li>
							</ul>
						</div>
						<div class="col_1_of_2 span_1_of_2">
							<ul>
								<li><img src="{{url('event/images/women.png')}}" alt=""/><div class="m_desc"><span class="m_2">38%</span><br><span class="m_3">Fe male</span></div> <div class="clear"></div></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>

		</div>
	</div>
</div>
@endsection