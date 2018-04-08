@extends('layouts.master')

@section('title') SIMUSIK @endsection

@section('active-beranda') style="font-weight: bold" @endsection

@section('content')
<!--==========================
    Intro Section
  ============================-->
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

  <!--==========================
      About Us Section
    ============================-->
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

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="{{url('NEW/img/about-img.jpg')}}" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec
            </p>
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