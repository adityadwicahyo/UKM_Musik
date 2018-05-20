@extends('layouts.master')

@section('title') SIMUSIK @endsection

@section('active-beranda') style="font-weight: bold" @endsection

@section('content')
<link rel="stylesheet" type="text/css" href="{{url('css/blog_home.css')}}">

<section id="intro">

  <div class="intro-text">
    <h2>Welcome to SIMUSIK</h2>
    <p>UKM Musik ITS adalah UKM yang menaungi mahasiswa yang memiliki minat di bidang musik</p>
  </div>

  <div class="product-screens">

    <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
      <img src="{{url('NEW/img/3.png')}}" alt="">
    </div>

    <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
      <img src="{{url('NEW/img/2.png')}}" alt="">
    </div>

    <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
      <img src="{{url('NEW/img/1.png')}}" alt="">
    </div>

  </div>
</section><!-- #intro -->


<section id="about" class="section-bg">
  <div class="container-fluid">

    <div class="section-header">
      <h3 class="section-title">About Us</h3>
      <span class="section-divider"></span>
      <p class="section-description">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
        sunt in culpa qui officia deserunt mollit anim id est laborum
      </p>
    </div>

    <div class="container">
      <div class="row">

        <link href='https://fonts.googleapis.com/css?family=PT+Serif:400|Open+Sans:400,700' rel='stylesheet' type='text/css'>

        @foreach($informasi as $info)
        <div class="col-md-12" style="background-color: white; padding: 0px; margin: 0px; margin-bottom: 15px">
          <div class="row" style="padding: 20px">
            <div class="col-md-4">
              <img style="width: 350px" src="{{url($info->Gambar_Informasi )}}">
            </div>
            <div class="col-md-8">
              <h3>{{$info->Judul_Informasi}}</h3>
              <p class="date" style="margin-bottom: 10px">
                Oleh <a href="">Aditya Dwicahyo</a> 
                | Posted <a href="">{{ Carbon\Carbon::parse($info->Tanggal_Informasi)->format('d F Y') }}</a>
              </p>
              <p>{{str_limit($info->Singkat_Informasi, 280, '...')}}</p>
              <a href="/blog/{{$info->id}}">Read More</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

  </div>
</section><!-- #about -->

    <!--==========================
      Contact Section
      ============================-->
      <section id="contact">
        <div class="container">
          <div class="row wow fadeInUp">

            <div class="col-lg-4 col-md-4">
              <div class="contact-about">
                <h3>Avilon</h3>
                <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="info">
                <div>
                  <i class="ion-ios-location-outline"></i>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div>
                  <i class="ion-ios-email-outline"></i>
                  <p>info@example.com</p>
                </div>

                <div>
                  <i class="ion-ios-telephone-outline"></i>
                  <p>+1 5589 55488 55s</p>
                </div>

              </div>
            </div>

            <div class="col-lg-5 col-md-8">
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
              </div>
            </div>

          </div>

        </div>
      </section><!-- #contact -->
      @endsection