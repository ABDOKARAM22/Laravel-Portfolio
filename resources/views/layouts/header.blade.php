<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/musical-note.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
 @if (App::getLocale() == 'en')
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
 @else 
   <link href="{{asset('assets/css/style_rtl.css')}}" rel="stylesheet">
 @endif
   
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/"><span>F</span>M</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">{{__('home.Home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{__('home.About')}}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{__('home.Services')}}</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">{{__('home.Portfolio')}}</a></li>
          <li><a class="nav-link scrollto" href="#team">{{__('home.Team')}}</a></li>
          <li><a class="nav-link scrollto" href="#contact">{{__('home.Contact')}}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      @if($app_lang == 'en')
      <a href="{{route('lang',['ar'])}}" class="get-started-btn scrollto">Arabic</a>
      @elseif($app_lang == 'ar')
      <a href="{{route('lang',['en'])}}" class="get-started-btn scrollto">English</a>
      @endif
    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      @foreach ($homes as $home)
          
      <img src="{{asset('assets/img/Home-About/'.$home->image)}}" alt="Faild To Open">

      @endforeach
    </section>
    