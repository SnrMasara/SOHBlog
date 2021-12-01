 @extends('FrontEnd.master')

@section('header')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Seeds of Hope Kenya</title>
    <meta content="We offer programmes such as; Adolescent Girls and Young Women (AGYWs),
    Sexual and Reproductive Health and Rights (SRHR), Sexual and Gender Based Violence and
    also Women in Leadership programmes to support women and young girls at the grassroots in Kenya.
     " name="description">
    <meta content="
        Seeds of hope Kenya,
        Female genital mutilation,
        FGM,
        Menstual Hygiene,
        Women and young girls,
        Women & young girls,
        Youths and Adolescent girls,
        Adolescent girls and young women (AGWs),
        Sexual and reproductive health and rights,
        Gender based violence,
        Sexual and gender based violence,
        Women in leadership,
        Violence against women,
        Women economic empowernment,
        Women leadership and participation in decision making,

    " name="keywords">

    <!-- Favicons -->
    <link href="/public/img/logo.png" rel="icon">
    <link href="/public/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/aos/aos.css') }}"rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}"/>
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
    <script src="{{ asset('/js/counter.js') }}"></script>



    <!--  Main CSS File -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('/css/styless.css') }}"/>


@section('navbar')
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1><a href="index.html">Seeds of Hope Kenya</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="/public/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Programmes</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
@endsection

@section('footer')
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img src="/public/img/logo.png" alt="Seeds of Hope Kenya">
            <h5>Seeds of Hope kenya</h5>

            <p>

              <strong>Phone:</strong> +254 731 964 556 <br>
              <strong>Email:</strong> info@seedsofhopeke.org<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Programmes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Gallery</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#programes1">Gender based Violence</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#programes2">Women Economic Empowernment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#programes3">Adolescent Girls and Menstrual Hygiene</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#programes4">Women Leadership and Participation in Decision Making Processes </a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>You will be receiving emails from our blog</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Seeds of Hope Kenya</span></strong>. All Rights Reserved
        </div>
        <div>
          Designed by <a href="https://www.instagram.com/promadsafrica/?hl=en">PromAds Africa</a>
        </div>
      </div>
      <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="https://mobile.twitter.com/SeedsOfHopeKE" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/SeedsOfHopeKE/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/seedsofhopeke/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCoOYIT0v-36G7tu2o7B6G1g/featured" class="youtube"><i class="bx bxl-youtube"></i></a>

      </div>
    </div>
  </footer>
@endsection
