
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>tamimisolutions</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- <link href="https://themewagon.github.io/clyde/css/animate.css" rel="stylesheet"> -->

  

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Eterna
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .contact .info {
      width: 100%;
      background: #fff;
    }
    .contact .info i {
      font-size: 20px;
      color: #c49258;
      float: left;
      width: 44px;
      height: 44px;
      background: #f4e7d6;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
    }
    .contact .info h4 {
      padding: 0 0 0 60px;
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 5px;
      /* color: #c49258; */
    }
    .contact .info p {
      padding: 0 0 0 60px;
      margin-bottom: 0;
      font-size: 14px;
      color: #c49258;
    }
    .contact .info .email, .contact .info .phone {
      margin-top: 40px;
    }
    .contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
      background: #c49258;
      color: #fff;
    }
    .animated {
      animation: up-down 2s ease-in-out infinite alternate-reverse both;
    }
    @-webkit-keyframes up-down {
      0% {
        transform: translateY(10px);
      }

      100% {
        transform: translateY(-10px);
      }
    }

    @keyframes up-down {
      0% {
        transform: translateY(10px);
      }

      100% {
        transform: translateY(-10px);
      }
    }
    li {
      list-style: none;
    }
  </style>
</head>
<body>
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-none d-md-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@mail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+996 0118106893</span></i>
      </div>
      <div class="social-links d-flex align-items-center">
        <li class="list-style-none">
          <a class="" href="{{ route('change-lang', ['locale' => 'en']) }}" rel="home">
              {{-- <img src="{{ asset('Backend/images/'.$Submitted->enlogo) }}" alt="English Logo"> --}}
              <span>English</span>
          </a>
      </li>
        
      <li>
        <a  href="{{ route('change-lang', ['locale' => 'ar']) }}" rel="home">
            
            <span>Arabic</span>
        </a>
    </li>
        <!-- <a><img src="assets/img/usa.png" class="d-flex align-items-center" style="height:25px;width:30px;">English</a>
        <a><img src="assets/img/sa.png" class="d-flex align-items-center ms-4" style="height:50px;width:30px;">Arabic</a> -->
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1><a href="index.html">Eterna</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/tamimi-logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="/">Home</a></li>
          <li class="dropdown"><a href="{{ route('page.show',$food->slug)}}"><span>{{$food->name}}</span> <i class="bi bi-chevron-down"></i></a>
          {{-- <li class="dropdown"><a href="{{ route('page.show',$foodmenu->slug)}}"><span>{{ $foodmenu->name }}</span> <i class="bi bi-chevron-down"></i></a> --}}
            <ul>
              <li class="dropdown"><a href="#"><span>Supply</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  {{-- @foreach($foodmenu as $foodmenus)
                <li><a href="{{ route('page.show',$foodmenus->slug)}}">{{ $foodmenus->name }}</a></li>
                @endforeach --}}
                  <li><a href="{{ route('page.show',$distribution->slug)}}">{{$distribution->name}}</a></li>
                  <li><a href="{{ route('page.show',$wholesale->slug)}}">{{$wholesale->name}}</a></li>
                   @foreach($foodmenu as $foodmenus)
                <li><a href="{{ route('page.show',$foodmenus->slug)}}">{{ $foodmenus->name }}</a></li>
                @endforeach
                </ul>
              </li>
              <li><a href="{{url('Catering')}}">Catering</a></li> 
            </ul>
          </li>
          <li><a href="{{url('uniform-safety')}}">Uniforms and Safety Wearout</a></li>
          <li><a href="{{url('Iot')}}">IoT and Technology</a></li>
          <li><a href="{{url('Project')}}">Project Management</a></li>
         
    {{-- <li><a href="{{ route('page.show', ['slug' => $Servicesmenu->slug]) }}">{{ $Servicesmenu->menuname }}</a></li> --}}


          <li class="dropdown"><a><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach($Servicesmenu as $Servicesmenus)
                <li><a href="{{ route('page.show',$Servicesmenus->slug)}}">{{ $Servicesmenus->name }}</a></li>
                @endforeach
              {{-- <li><a href="{{url('business-consultancy')}}">Business Consultancy</a></li>
              <li><a href="{{url('construction')}}">Construction</a></li>
              <li><a href="supply.php">Material and Equipment Supply</a></li>
              <li><a href="pest-control.php">Pest Control</a></li>
              <li><a href="m2m.php">M2M and IoT</a></li>
              <li><a href="{{url('barcode')}}">Bar Coding Solutions</a></li>
              <li><a href="erp.php">ERP Services</a></li>
              <li><a href="digital-solutions.php">Complete Digital Solutions</a></li> --}}

              
            </ul>
          </li>
          <!-- <li><a href="portfolio.php">Portfolio</a></li> -->
          <!-- <li><a href="team.php">Team</a></li> -->
          <!-- <li><a href="pricing.php">Pricing</a></li> -->
          <!-- <li><a href="blog.php">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
          </li> -->
          <li><a href="{{url('about') }}">About</a></li>
          <li><a href="{{url('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->