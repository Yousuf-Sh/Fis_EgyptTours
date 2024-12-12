@php
use App\Models\Language;

$languages= Language::all();
@endphp
<body>
	
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav fixed-top innerPage-siteNav">
		<div class="container ">
			<div class="site-navigation ">
				<div class="row">
					<div class="col-5 col-sm-6 col-lg-2 col-xl-2">
						<a href="{{route('index')}}" class="logo m-0 float-start"><img src="{{asset('Frontend/images/logo.png')}}" class="img-fluid headerLogo"></a>
					</div>
					<div class="col-xl-8 col-lg-8 d-none d-lg-inline-block text-center nav-center-wrap my-auto">
						<ul class="js-clone-nav  text-center site-menu p-0 m-0">
							<li class="active"><a href="{{route('index')}}">@lang('message.Home')</a></li>
							<li ><a href="{{route('airport_transfer')}}">@lang('message.AirportTransfer')</a></li>
							<li><a href="{{route('excursions')}}">@lang('message.Excursions')</a></li>
							<li><a href="{{route('travel_package')}}">@lang('message.TourPackage')</a></li>
							<li><a href="{{route('nile_cruise')}}">@lang('message.NileCruise')</a></li>
							<li><a href="{{route('about')}}">@lang('message.AboutUs')</a></li>
							<li><a href="{{route('contact')}}">@lang('message.ContactUs')</a></li>
							<li><a href="{{route('blog')}}">@lang('message.Blog')</a></li>
						</ul>
					</div>
					<div class="col-7 col-sm-6 col-lg-2 col-xl-2 text-lg-end my-auto d-lg-block d-flex">
						<!-- <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
							<li class="cta-button"><a href="">Login</a></li>
						</ul> -->
						<div class="dropdown langu-dropdown">
							<button class="btn btn-secondary dropdown-toggle langu-btn" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{asset('Frontend/images/flags/usa.png')}}" alt=""> @lang('message.english')
							</button>
							<ul class="dropdown-menu dropdown-menu-langu languages_dropdown" aria-labelledby="dropdownMenuButton2">
								@foreach($languages as $language)
								<li><a class="dropdown-item active" href="#" data-lang="{{ $language->slug }}"><img src="{{asset($language->flag)}}" alt="">{{ $language->name }}</a></li>
								@endforeach
								<!-- <li><a class="dropdown-item active" href="#" data-lang="ar"><img src="{{asset('Frontend/images/flags/sa-1.png')}}" alt=""> @lang('message.arabic')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="fr"> <img src="{{asset('Frontend/images/flags/fr-1.png')}}" alt=""> @lang('message.french')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="es">  <img src="{{asset('Frontend/images/flags/es-1.png')}}" alt=""> @lang('message.spanish')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="gr"> <img src="{{asset('Frontend/images/flags/gr-1.png')}}" alt=""> @lang('message.greek')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="pl"> <img src="{{asset('Frontend/images/flags/pl-1.png')}}" alt=""> @lang('message.polish')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="ro"> <img src="{{asset('Frontend/images/flags/ro-1.png')}}" alt=""> @lang('message.roman')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="it"> <img src="{{asset('Frontend/images/flags/it-1.png')}}" alt=""> @lang('message.italian')</a></li>
								<li><a class="dropdown-item" href="#" data-lang="de"> <img src="{{asset('Frontend/images/flags/de-1.png')}}" alt=""> @lang('message.german')</a></li> -->
							</ul>
						</div>
						<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light toggleBtn-mob" data-toggle="collapse" data-target="#main-navbar">
							<span></span>
						</a>
					</div>
				</div>
			</div>
			
		</div>
	</nav>