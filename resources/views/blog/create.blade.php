@extends('blog.index')
@extends('layouts.app')
@section('header')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Seeds of Hope Kenya</title>
    <meta content="We are an Organization with a key focus of empowering the vulnerable women, youth and girls in our communities at the grassroots with a vision of eradicating poverty and ensuring sustainable development." name="description">
    <meta content="Seeds of hope Kenya, Gender Bades Violence, GBV, Kenya, Kenyan CBO, CBO, Adolescent Girls and Young Women (AGYWs), Sexual and Reproductive Health and Rights (SRHR), Women in Leadership, WOMEN ECONOMIC EMPOWERNMENT, Donate, Women Empowernment" name="keywords">

    <!-- Favicons -->
    <link href="/public/img/logo.png" rel="icon">
    <link href="/public/img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="/vendor/bootstrap/css/bootstrap.min.css"/>
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--  Main CSS File -->
    <link rel="stylesheet" type="text/css"  href="/css/styless.css"/>
@endsection
@section('content')
<div class="w-4/5 m-auto text-left">
<div class="py-15">
<h1 class="text-4xl"> Create Post</h1>
</div>
</div>

@if ($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="w-1/5 mb-4 text-red-700 bg-orange-300 rounded-3xl py-2 px-4 ">{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif
<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title..." class="bg-orange-50 block border-b-2 w-full h-20 text-6xl outline-none" >
    <textarea name="description" placeholder="description..." class="py-20 bg-orange-50 border-b-2 w-full h-60 text-xl outline-none"></textarea>
    <div class="bg-orange-lighter pt-15">
    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-orange cursor-pointer">
        <span class="mt-2 text-base leading-normal">
            Select a File
        </span>
        <input type="file" name="image" class="hidden">
    </label>
    </div>
    <button type="submit" class="uppercase mt-15 bg-orange-500 text-orange-50 text-lg font-extrabold py-4 px-8 rounded-3xl">
        Submit Post
    </button>
</form>
</div>
@endsection

<div>
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

              <li><i class="bx bx-chevron-right"></i> <a href="\#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\#services">Programmes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\#portfolio">Gallery</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="\#programes1">Gender based Violence</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\#programes2">Women Economic Empowernment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\#programes3">Adolescent Girls and Menstrual Hygiene</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="\#programes4">Women Leadership and Participation in Decision Making Processes </a></li>
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
</div>
