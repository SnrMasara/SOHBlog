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

<div>
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-orange-400">
        <h1 class="text-4xl"> Posts</h1>
    </div>
</div>
@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
      <p class="w-2/6 text-green-50 bg-green-500 rounded-2xl py-2 px-4 pt-10">
        {{session()->get('message')}}
      </p>

    </div>
@endif
@if(Auth::check())

<div class='pt-15 w-4/5 m-auto' >
    <a
    href="/blog/create"
    class="bg-orange-500 uppercase text-orange-100 text-xs font-extrabold py-3 px-5 rounded-3xl"
    >Create Post</a>
@endif
</div>
@foreach ($posts as $post )
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-orange-500">
    <div>
      <img src="{{asset('p_images/' . $post->image_path)}}" alt="Seeds of Hope Kenya Blog" class="rounded-2xl">
    </div>

    <div>
        <h2 class="text-orange-700 font-bold text-3xl pb-4 pt-5">
            {{$post->title}}
        </h2>
        <span class="text-orange-500"> By <span class="font-bold italic text-orange-800">{{$post->user->name}}</span>, Created on{{date('jS M Y', strtotime($post->updated_at))}}</span>

        <p class="text-xl text-gray-900 pt-8 pb-10 leading-8 font-light">
            {{$post->description}}
        </p>

        <a href="/blog/{{$post->slug}}" class="uppercase bg-orange-500 text-cool-gray-100 text-lg font-extrabold py-3 px-6 rounded-2xl">Keep Reading</a>
        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <span class="float-right">
                <a href="/blog/{{$post->slug}}/edit"
                    class="text-orange-500 italic hover:text-orange-900 pd-1 border-b-2">Edit</a>
            </span>
             <span class="float-right">
                  <form action="/blog/{{$post->slug}}"
                    method="POST">
                    @csrf
                    @method('delete')
                    <button class="text-red-600 pr-3"
                    type="submit"
                    >
                       Delete
                    </button>

                </form>

             </span>
        @endif

    </div>

</div>
@endforeach

@endsection
</div>

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
