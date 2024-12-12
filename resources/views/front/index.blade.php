@extends('Frontend.Layouts.main_master')
@section('content')	

	<div class="hero overlay videoCont">

		<!-- <div class="img-bg rellax"> -->
			<video autoplay muted loop playsinline class="bg-video">
				<source src="{{asset('Frontend/images/video/bnr-video3.mp4')}}" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		<!-- </div> -->

		<div class="container index-container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-5 text-center-sm-c">

					<h1 class="heading" data-aos="fade-up">@lang('message.banner_video_title')</h1>
					<p class="mb-md-5" data-aos="fade-up">@lang('message.banner_video_paragraph')</p>

					<div data-aos="fade-up">
						<a href="{{route('about')}}" class="bnr-btn align-items-center d-flex " >
							<span class="caption btn btn-primary">@lang('message.banner_video_button')</span>
						</a>
					</div>
					
				</div>

				
			</div>
		</div>

		
	</div>

	<div class="section bg-greyC">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-12">
					<h2 class="heading text-center mb-3">@lang('message.title_special_offers') </h2>
					<p>@lang('message.para_special_offers')</p>
				</div>
			</div>
			<div class="row mt-1">
				<div class="col-lg-3">
					<div class="service-2 left-0 activity-card">
						<p class="tourType">@lang('message.Excursions')</p>
						<img src="https://cdn.getyourguide.com/img/tour/5efef4296a2b5.png/132.jpg" alt="Image" class="img-fluid mb-3 ">
						<div class="activity-card-body">
							<a href="{{route('excursions')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
							<p>3 @lang('message.hours')  • @lang('message.skip_line') • @lang('message.pickup_available')</p>
							<div class="d-flex justify-content-between align-items-start">
								<div>
									<p class="activity-price__old-price"><span class="text-muted">@lang('message.from')</span> <span class="text-muted">$48.20</span></p>
								</div>
								<p><a class="more"><span class="text-blue">@lang('message.from')</span> <span class="text-orange">$48.20</span></a></p>
								<!-- <p><i class="bi bi-star-fill"></i> <span class="text-blue">4.5</span><span>(335)</span></p> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-2 left-0 activity-card">
						<p class="tourType">@lang('message.NileCruise')</p>
						<img src="https://cdn.getyourguide.com/img/tour/8dc707a52aef59cfd983c139f21ca7635104c8e105b632cd64c7a9fdb2c976ab.jpg/132.jpg" alt="Image" class="img-fluid mb-3 ">
						<div class="activity-card-body">
							<a href="{{route('nile_cruise')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
							<p>3 @lang('message.hours')  • @lang('message.skip_line') • @lang('message.pickup_available')</p>
							<div class="d-flex justify-content-between align-items-start">
								<div>
									<p class="activity-price__old-price"><span class="text-muted">@lang('message.from')</span> <span class="text-muted">$48.20</span></p>
								</div>
								<p><a class="more"><span class="text-blue">@lang('message.from')</span> <span class="text-orange">$48.20</span></a></p>
								<!-- <p><i class="bi bi-star-fill"></i> <span class="text-blue">4.5</span><span>(335)</span></p> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-2 left-0 activity-card"> 
						<p class="tourType">@lang('message.Excursions')</p>
						<img src="https://cdn.getyourguide.com/img/tour/d662faacfd7e5a2f89651fd5882a5d8df2a098c76485981d9b33c0f32fe52e91.jpg/132.jpg" alt="Image" class="img-fluid mb-3 ">
						<div class="activity-card-body">
							<a href="{{route('excursions')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
							<p>3 @lang('message.hours')  • @lang('message.skip_line') • @lang('message.pickup_available')</p>
							<div class="d-flex justify-content-between align-items-start">
								<div>
									<p class="activity-price__old-price"><span class="text-muted">@lang('message.from')</span> <span class="text-muted">$48.20</span></p>
								</div>
								<p><a class="more"><span class="text-blue">@lang('message.from')</span> <span class="text-orange">$48.20</span></a></p>
								<!-- <p><i class="bi bi-star-fill"></i> <span class="text-blue">4.5</span><span>(335)</span></p> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-2 left-0 activity-card">
						<p class="tourType">@lang('message.AirportTransfer')</p>
						<img src="https://cdn.getyourguide.com/img/tour/63126ce597ad4.jpeg/132.jpg" alt="Image" class="img-fluid mb-3 ">
						<div class="activity-card-body">
							<a href="{{route('airport_transfer')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
							<p>3 @lang('message.hours')  • @lang('message.skip_line') • @lang('message.pickup_available')</p>
							<div class="d-flex justify-content-between align-items-start">
								<div>
									<p class="activity-price__old-price"><span class="text-muted">@lang('message.from')</span> <span class="text-muted">$48.20</span></p>
								</div>
								<p><a class="more"><span class="text-blue">@lang('message.from')</span> <span class="text-orange">$48.20</span></a></p>
								<!-- <p><i class="bi bi-star-fill"></i> <span class="text-blue">4.5</span><span>(335)</span></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section section-2">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-xl-6 col-lg-6 order-lg-2 col-md-6">
					<div class="mb-4 mb-md-5 mb-lg-0">
						<div class="image-stack__item image-stack__item--bottom_home" data-aos="fade-up"  >
							<!-- <img src="{{asset('Frontend/images/img_v_1.jpg')}}" alt="Image" class="img-fluid"> -->
							<img src="{{asset('Frontend/images/img5.png')}}" alt="Image" class="img-fluid">
						</div>
						<!--<div class="image-stack__item image-stack__item--bottom image-stack__item--bottom_home" data-aos="fade-up"  >
							<img src="{{asset('Frontend/images/img_v_1.jpg')}}" alt="Image" class="img-fluid rellax ">
						</div>
						<div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"  data-rellax-percentage="0.5">
							<img src="{{asset('Frontend/images/img_v_2.jpg')}}" alt="Image" class="img-fluid exploreImg">
						</div> -->
					</div>

				</div>
				<div class="col-xl-4 col-lg-6 order-lg-1 col-lg-4 col-md-6">

					<div>
						<h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">@lang('message.explore_world')</h2>

						<p data-aos="fade-up" data-aos-delay="200">@lang('message.story_part_one')</p>

						<p data-aos="fade-up" data-aos-delay="300">@lang('message.story_part_two')</p>
 
						<p class="my-md-4 my-1" data-aos="fade-up" data-aos-delay="300"><a href="{{route('about')}}" class="btn btn-primary">@lang('message.read_more')</a></p>
					</div>
				</div>
				
			</div>

		</div>		
	</div>

	<div class="untree_co-section section bg-light">
		<div class="container">
			<div class="justify-content-center mb-0 mb-md-5 row">
				<div class="col-xl-6 col-lg-10 text-center">
					<div class="heading-content aos-init aos-animate" data-aos="fade-up">
						<h2 class="section-title text-center mb-3">@lang('message.our_services')</h2>
						<p>@lang('message.services_para')</p>
					</div>
				</div>
			</div> 
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="">
						<img class="feature-img-bg img-fluid servImg"  src="{{asset('Frontend/images/airport-transfers.png')}}" />
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 feature-1-wrap d-md-flex flex-md-column justify-content-center">
					<div class="feature-1 d-md-flex mb-0 servCard">
						<div class="align-self-center">
							<h3 class="feature-iconTitle">@lang('message.AirportTransfer')</h3>
							<p class="mb-0" style="color: #555;">@lang('message.airport_transfer_para')</p>
							<a href="{{route('airport_transfer')}}" class="btn btn-primary mt-3">@lang('message.read_more')</a>	
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-2 mt-xl-0">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 feature-1-wrap d-md-flex flex-md-column justify-content-center order-lg-1 order-2">
					<div class="feature-1 d-md-flex mb-0 servCard">
						<div class="align-self-center">
							<h3 class="feature-iconTitle">@lang('message.Excursions')</h3>
							<p class="mb-0" style="color: #555;">@lang('message.excursions_para') 
								</p>
							<a href="{{route('excursions')}}" class="btn btn-primary mt-3">@lang('message.read_more')</a>	
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 order-lg-2 order-1">
					<div class="">
						<img class="feature-img-bg img-fluid servImg"  src="{{asset('Frontend/images/excursions-1.png')}}" />
					</div>
				</div>
			</div>

			<div class="row mt-2 mt-xl-0">
				<div class="col-md-12 col-lg-6 ">
					<div class="">
						<img class="feature-img-bg img-fluid servImg"  src="{{asset('Frontend/images/package-tour.png')}}" />
					</div>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-6 feature-1-wrap d-md-flex flex-md-column justify-content-center">

					<div class="feature-1 d-md-flex mb-0 servCard">
						<div class="align-self-center">
							<h3 class="feature-iconTitle">@lang('message.TourPackage')</h3>
							<p class="mb-0" style="color: #555;">@lang('message.package_tour_para')</p>
							<a href="{{route('travel_package')}}" class="btn btn-primary mt-3">@lang('message.read_more')</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-2 mt-xl-0">
				  
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 feature-1-wrap d-md-flex flex-md-column justify-content-center order-lg-1 order-2">
					<div class="feature-1 d-md-flex mb-0 servCard">
						<div class="align-self-center">
							<h3 class="feature-iconTitle">@lang('message.NileCruise')</h3>
							<p class="mb-0" style="color: #555;" >@lang('message.nile_cruise_para')</p>
							<a href="{{route('nile_cruise')}}" class="btn btn-primary mt-3 readmoreBtn">@lang('message.read_more')</a>
						</div>
					</div>

				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 order-lg-2 order-1">
					<div class="">
						<img class="feature-img-bg img-fluid servImg"  src="{{asset('Frontend/images/nile-cruise.png')}}" />
					</div>
				</div>

			</div>

		</div>
				
	</div>

	

	<div class="section ">
		<div class="container">
			<div class="row justify-content-center text-center mb-md-5">
				<div class="col-xl-9 col-lg-9">
					<h2 class="heading text-center mb-3">@lang('message.featured_excursions')</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/eyptian-museum.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div> 
						</div>
						<div class="mt-3">
							<span class="d-flex align-items-center loc mb-2">
								<span class="icon-room mr-3 text-orange"></span>
								<span class="ps-2">@lang('message.cairo')</span>
							</span>
							<div class="d-flex align-items-center">
								<div>
									<h3><a href="{{route('detail_page')}}">@lang('message.egyptian_museum')</a></h3>
									<!-- <div class="price ml-auto">
										<span>$520.00</span>
									</div> -->
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/Elephantine-Island.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>
						<div class="mt-3">
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3 text-orange"></span>
							<span class="ps-2">@lang('message.aswan')</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="{{route('detail_page')}}"> @lang('message.elephantine_island')</a></h3>
								<!-- <div class="price ml-auto">
									<span>$520.00</span>
								</div> -->
							</div>
							
						</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/montaza-palace.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>	
						<div class="mt-3">
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3 text-orange"></span>
							<span class="ps-2">@lang('message.alexandria')</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="{{route('detail_page')}}">@lang('message.montaza_palace')</a></h3>
								<!-- <div class="price ml-auto">
									<span>$750.00</span>
								</div> -->
							</div>
							
						</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/luxor-temple.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>	
						<div class="mt-3">
							<span class="d-flex align-items-center loc mb-2">
								<span class="icon-room mr-3 text-orange"></span>
								<span class="ps-2">@lang('message.luxor') </span>
							</span>

							<div class="d-flex align-items-center">
								<div>
									<h3><a href="{{route('detail_page')}}">@lang('message.luxor_temple') </a></h3>  
									<!-- <div class="price ml-auto">
										<span>$520.00</span>
									</div> -->
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section bg-greyC">
		<div class="container">
			<div class="row justify-content-center text-center mb-md-5">
				<div class="col-lg-9 col-xl-9">
					<h2 class="heading text-center mb-3">@lang('message.featured_nile_cruise')</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/eyptian-museum.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div> 
						</div>
						<div class="mt-3">
							<span class="d-flex align-items-center loc mb-2">
								<span class="icon-room mr-3 text-orange"></span>
								<span class="ps-2">@lang('message.cairo')</span>
							</span>
							<div class="d-flex align-items-center">
								<div>
									<h3><a href="{{route('detail_page')}}">@lang('message.egyptian_museum')</a></h3>
									<!-- <div class="price ml-auto">
										<span>$520.00</span>
									</div> -->
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/Elephantine-Island.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>
						<div class="mt-3">
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3 text-orange"></span>
							<span class="ps-2"> @lang('message.aswan')</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="{{route('detail_page')}}"> @lang('message.elephantine_island')</a></h3>
								<!-- <div class="price ml-auto">
									<span>$520.00</span>
								</div> -->
							</div>
							
						</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/montaza-palace.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>	
						<div class="mt-3">
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3 text-orange"></span>
							<span class="ps-2">@lang('message.alexandria')</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="{{route('detail_page')}}">@lang('message.montaza_palace')</a></h3>
								<!-- <div class="price ml-auto">
									<span>$750.00</span>
								</div> -->
							</div>
							
						</div>
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/luxor-temple.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>	
						<div class="mt-3">
							<span class="d-flex align-items-center loc mb-2">
								<span class="icon-room mr-3 text-orange"></span>
								<span class="ps-2">@lang('message.luxor') </span>
							</span>

							<div class="d-flex align-items-center">
								<div>
									<h3><a href="{{route('detail_page')}}">@lang('message.luxor_temple')</a></h3>  
									<!-- <div class="price ml-auto">
										<span>$520.00</span>
									</div> -->
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section ">
		<div class="container">
			<div class="row justify-content-center text-center mb-md-5">
				<div class="col-xl-9 col-lg-9">
					<h2 class="heading text-center mb-3">@lang('message.featured_tour_packages')</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="media-1 pkgHome-media1 mb-sm-3">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/eyptian-museum.png')}}" alt="Image" class="img-fluid">
						</div>
						<div class="mt-3">
						
							<div class="d-flex align-items-center">
								<h3><a href="{{route('travel_package')}}" class="pkgHomeTitle">@lang('message.from') May @lang('message.to') Sep 2025</a></h3>
							</div>
								
							<div class="flight-details">
								<div class="flight-time">
									<div class="flight-time-item take-off d-flex justify-content-between" style="padding-top: 10px;">
										<div class="d-flex">
											<div class="flex-shrink-0 me-2">
												<i class="la"><span class=""><svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"><path d="M511.88 475.685l-40.224-221.6c-.4-2.212-1.773-4.128-3.74-5.22l-101.242-56.3a7.48 7.48 0 0 0-4.234-.91l18.42 237.608-.617.276 121.164 54.357a7.53 7.53 0 0 0 3.077.659 7.51 7.51 0 0 0 4.632-1.596 7.5 7.5 0 0 0 2.764-7.251zM256 246.375l-103.545-53.93c-1.24-.647-2.617-.9-3.972-.82.36-.022.72-.02 1.078.008L131.14 429.24l121.78 54.634a7.53 7.53 0 0 0 3.077.659h0v-238.16z" fill="#44c868"></path><path d="M149.56 191.633a7.58 7.58 0 0 0-4.234.9l-101.243 56.3a7.51 7.51 0 0 0-3.74 5.22L.12 475.685c-.498 2.742.566 5.534 2.763 7.252 1.347 1.053 2.982 1.596 4.632 1.596a7.51 7.51 0 0 0 3.077-.659l120.504-54.06 18.463-238.18zm212.88-.005c-.996.077-1.98.342-2.894.818L256 246.376v238.158a7.51 7.51 0 0 0 3.078-.659l121.78-54.634-18.42-237.613z" fill="#4ce166"></path><path d="M28.154 321.233l-8.17 45.02 120.994-63.906 3.275-42.25z" fill="#ffdb56"></path><path d="M142.066 288.294l-1.09 14.052-120.994 63.906L.12 475.685c-.498 2.742.566 5.534 2.763 7.252 1.347 1.053 2.982 1.596 4.632 1.596a7.51 7.51 0 0 0 3.077-.659l120.504-54.06 10.97-141.52z" fill="#a8eefc"></path><path d="M256.03 276.08l-111.778-15.983-3.275 42.25L256 477.025v-63.518L187.363 305.43l68.667 8.213zm203.916-31.66l-48.635-27.05-46.042 10.758 2.85 36.77z" fill="#ffbb24"></path><path d="M372.202 317.576l-6.933-89.448-109.24 47.952v37.562l71.356-31.03z" fill="#ffdb56"></path><path d="M511.88 475.685l-10.103-55.666-133.657-155.12 4.084 52.678 137.07 165.22a7.5 7.5 0 0 0 2.606-7.112z" fill="#ffbb24"></path><path d="M256.48 27.465c-57.963 0-105.12 47.118-105.12 105.034 0 35.826 17.01 74.3 50.556 114.322 24.64 29.403 48.943 48.314 49.966 49.105 1.354 1.047 2.976 1.57 4.6 1.57s3.245-.523 4.6-1.57c1.022-.79 25.327-19.702 49.966-49.105 33.547-40.032 50.556-78.495 50.556-114.322-.002-57.916-47.16-105.034-105.122-105.034zm38.93 105.033c0 21.482-17.43 38.898-38.93 38.898s-38.93-17.415-38.93-38.898S234.98 93.6 256.48 93.6s38.93 17.416 38.93 38.898z" fill="#ff4a4a"></path><path d="M256.48 27.465a105.71 105.71 0 0 0-13.559.872c51.583 6.667 91.562 50.836 91.562 104.162 0 35.826-17.01 74.3-50.556 114.322-15.845 18.908-31.54 33.467-41.005 41.67 5.254 4.552 8.596 7.154 8.96 7.436 1.354 1.047 2.976 1.57 4.6 1.57s3.245-.523 4.6-1.57c1.022-.79 25.327-19.702 49.966-49.105 33.547-40.032 50.556-78.495 50.556-114.322-.002-57.916-47.16-105.034-105.122-105.034z" fill="#e7343f"></path><path d="M259.078 483.874l45.285-20.316L256 413.507v71.026a7.5 7.5 0 0 0 3.078-.659z" fill="#ffdb56"></path><path d="M471.654 254.074c-.4-2.212-1.773-4.128-3.74-5.22l-7.97-4.433-91.827 20.477 133.656 155.12-30.12-165.944zM256 484.533v-7.508l-115.022-174.68-9.837 126.895 121.78 54.634a7.53 7.53 0 0 0 3.078.658z" fill="#1ea4e9"></path></svg></span></i>
											</div>
											<div>
												<h6 class="card-title font-size-15 font-weight-medium mb-0 text-orange">@lang('message.duration')</h6>
												<p class="card-meta font-size-14 mb-1">5 @lang('message.days')/4 @lang('message.nights')</p>
											</div>
										</div>
										<div class="d-flex">
											<div class="flex-shrink-0 me-2">
												<i class="la"><span class=""><svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.438 511.438" xmlns:v="https://vecta.io/nano"><circle cx="283.481" cy="296.079" r="215.352" fill="#6dafdf"></circle><g fill="#e8eff3"><path d="M167.343 469.641c-.048.08-.112.128-.16.208l.944.32-.784-.528zm6.128-303.792l-.384-.896c3.632-.304 4.032-2.816 6.816-3.568 3.168-.816 2.032.224 5.104.32 2.48.064 3.872 1.952 6.784.832-.752 1.168-1.936 1.92-3.104 2.688-2.448 1.504-4.928 3.056-7.744 3.504-2.8.448-6.016-.448-7.472-2.88z"></path><path d="M204.031 360.201c-.176 1.888-1.392 3.472-2.464 5.008-4.784 6.768-7.936 14.768-9.04 22.992-1.088 7.888-1.376 17.68-8.528 21.12-4.08 1.936-9.6 1.184-12.464 4.72-.896 1.072-1.376 2.448-1.856 3.744l-6.304 18.192-6.56-1.104c2.528.992 4.096 4.608 2.384 6.896-2.4-1.472-5.76-.128-7.28 2.272-1.472 2.4-1.472 5.424-.912 8.192 1.712 8.208 8.208 15.168 16.192 17.632-1.584 2.576-5.84 1.136-8.336-.832-18-13.952-30.944-34.256-36-56.448-1.792-7.824-2.72-16.096-6.768-22.992-3.392-5.824-8.768-10.272-12.144-16.112-4.736-8.304-5.04-18.784-10.64-26.512-3.136-4.4-8.048-9.888-4.752-14.16 1.328-1.776 4.032-3.36 3.136-5.36-.304-.656-.96-1.088-1.456-1.664-1.904-2.32-.272-5.68.928-8.432 2.016-4.8 2.352-10.048 1.968-15.344-4.816-4.896-8.48-10.848-10.592-17.376-1.264-3.984-2.944-8.976-7.12-9.296l-2.672-9.248c-.464 1.04-1.568 1.664-2.752 1.728 6.432-49.04 29.184-92.432 62.32-125.056.672-.256 1.376-.608 2.08-.96 7.616-3.808 13.856-9.856 21.264-14.064 1.52-.88 3.232-1.696 5.024-1.392 1.744.256 3.28 2.16 2.544 3.776-.288.672-.896 1.168-1.52 1.568-8.768 6.528-18.256 12.112-28.256 16.592-1.2.512-2.464 1.104-3.072 2.24-1.104 1.936.384 4.528 2.432 5.392s4.4.576 6.576.224a10.64 10.64 0 0 0-1.984 8.96c1.984.32 2.784-2.368 3.488-4.224 2.912-7.376 15.12-9.664 14.848-17.648 3.152 1.92 6.704-1.664 8.896-4.656 2.192-3.024 6.816-5.856 9.072-2.928l.192 4.704 13.088-2.432c-2.544 1.552-3.6 5.136-2.368 7.856s4.656 4.256 7.488 3.36c-.192 2.288-2.352 3.904-4.288 5.136-4.944 3.248-10.24 6.576-15.84 7.968l1.088 2.704c-.144.032-.304.08-.448.064-3.52.112-7.056-2.656-10.832-2.4-2.304.144-5.12-.032-6.592 2.208-.208.272-1.296 4.304-.704 4l6.304-3.104c.528 1.696.56 3.552.096 5.328 2.496-.08 5.04.624 7.136 2.064-2.624 5.152-8.736 8.32-14.496 7.52l.144-5.264c-4.736-.688-8.896 3.136-11.536 7.072-2.688 3.968-4.848 8.576-9.008 10.944-2.544 1.504-5.552 1.936-8.256 3.136-2.672 1.248-5.216 3.76-4.88 6.672.16 1.376.944 2.704.816 4.112-.32 2.608-3.456 3.632-5.616 5.2-3.696 2.688-4.912 7.984-8.816 10.32-2.848 1.728-6.432 1.44-9.664 2.208-3.216.768-6.592 3.728-5.52 6.864-1.584.432-3.408-.848-3.456-2.512-6.304 10.624-10.768 22.352-13.056 34.496 2.64 2.128 5.744-2.112 6.496-5.44.8-3.312 4-7.504 6.592-5.344l-2.816 14.272c-.208.912-.368 1.888.016 2.736.464 1.056 1.6 1.568 2.432 2.352 2.336 2.304 1.76 6.064 1.696 9.328-.112 4 .96 7.968 2.816 11.504-.144-.688-.256-1.392-.352-2.08 3.76.736 7.776-.224 10.8-2.576 1.6-1.264 2.976-2.928 4.912-3.488 1.984-.608 4.096.064 6.048.736 6.064 2.096 12.512 4.416 16.32 9.552 1.936 2.608 3.04 5.808 5.392 8.016 5.328 5.12 14.992 3.648 19.808 9.28 3.856 4.544 2.64 11.392 1.136 17.216-2.72-1.728-6.768 1.904-5.28 4.784 1.616-1.552 3.472-3.2 5.664-3.056 2.24.096 3.984 3.28 2.24 4.592 4.208-4.704 13.6-2.048 14.72 4.224l16.304 2.272c-1.44 7.888 15.248 9.456 14.4 17.456zm-18.544-227.056c-2.176.896-4.976-.464-5.616-2.72s1.024-4.896 3.344-5.264c1.472-.24 3.456.048 3.984-1.344.16-.416.112-.896.144-1.344.112-2.656 2.64-4.704 5.264-5.2s5.296.192 7.872.88c.8 1.968.928 4.224.352 6.272l-5.392-.112c-.032 2.976-.56 6.704-3.392 7.616-2.528.816-5.632-1.216-7.808.32m31.04-26.992c5.04-2.016 9.408-5.44 14.384-7.6 8.56-3.712 18.256-3.472 27.584-3.152l63.696 2.144-15.264 7.12c-4.16 1.936-8.864 3.92-13.184 2.384-.336 3.536 2.688 7.024 6.224 7.216-9.056 4.816-20.784-1.472-30.256 2.448-3.968 1.648-7.312 5.024-11.584 5.424-2.48.224-4.976-.592-7.44-.208-4.128.624-6.944 4.32-10.144 7.008-3.696 3.104-8.928 5.04-13.36 3.152s-6.368-8.784-2.512-11.696c1.888-1.44 4.464-1.52 6.64-2.464s4.032-3.728 2.56-5.6c-.64-.816-1.744-1.184-2.336-2.032-.624-.928-.48-2.192-.976-3.2-1.904-3.92-8.224.784-12.192-1.008m61.344 22.128c2.912-.48 5.504-2.016 8.256-3.072s5.984-1.584 8.528-.112c.656 2-1.712 3.632-3.728 4.208a24.19 24.19 0 0 1-11.952.272m170.736 31.312a6.65 6.65 0 0 1-2.416-.304c-3.6-1.008-6.192-4.016-9.168-6.256-6.896-5.232-16.672-6.496-24.704-3.104 2.016-2.56 3.152-5.808 3.168-9.072l-1.136.32c-12.256-8.208-26.688-16.848-40.912-12.784-3.28.96-6.32 2.528-9.648 3.44-3.536.992-7.408 1.232-10.512 3.184-3.152 1.952-5.056 6.56-2.656 9.296 2.048 2.336 5.584 1.968 8.624 2.464 2.992.48 6.256 3.728 4.432 6.192l-41.216 16.192c6 2.384 9.584 9.6 7.872 15.84-4.528.496-8.672-2.512-13.168-3.088-6.544-.768-13.184 4.624-13.76 11.168-.624 6.56 5.024 13.024 11.584 13.344 4.912.272 9.92-2.384 14.608-.816.48-4.464 3.792-8.048 7.152-11.056 6.512-5.728 15.632-10.72 23.6-7.168 2.608 1.136 4.784 3.088 6.896 5.024l13.968 12.72 4.976-4.464 7.52 9.024 4.304-2.464 2.48 7.728 1.6-8.144c3.2.304 6.592.624 9.616-.656 3.008-1.216 5.376-4.592 4.352-7.68-.528-1.648-1.952-3.008-2.144-4.72-.416-3.44 4.592-5.472 7.664-3.696 3.008 1.712 4.336 5.36 5.44 8.704l2.768-9.728c2.544 8.176 6.448 15.936 11.472 22.848-9.84-2.544-20.416-2.144-30 1.104 2.704 4.368 7.648 7.184 12.752 7.312 2.288.096 4.848-.272 6.512 1.296 1.248 1.2 1.472 3.024 1.6 4.688l1.392 14.048c-4.976-4.672-12.592-4.672-19.44-5.248-6.848-.64-14.736-3.04-16.864-9.584-2.928 2.896-4.416 7.184-3.904 11.312-6.992-2.16-14.976-5.408-16.576-12.544-5.68 1.68-12.352-2.304-13.488-8.096-.4-2.032-.4-4.464-2.08-5.648-1.024-.704-2.4-.688-3.664-.624l-31.776 1.568c-5.776.32-11.76.608-16.992 3.104-5.232 2.448-9.616 7.632-9.408 13.408-10.048 5.12-18.8 12.896-24.96 22.32-1.952 2.896-3.68 6.256-3.216 9.696.32 2.656 1.92 5.008 2.288 7.616.64 4.48-2.16 8.592-3.52 12.912-3.808 12.256 4.864 24.576 13.008 34.576 3.856 4.64 8.304 9.712 14.32 10.336 3.728.384 7.392-1.04 10.976-2.176 10.272-3.296 21.28-4.384 31.984-3.264-2.56 1.744-.288 6.032 2.688 6.864s6.288.064 9.152 1.264c6.512 2.816 4.96 12.528 1.536 18.704l4.672-.576-2.896 6.208c9.056 1.76 11.744 13.984 9.024 22.832-2.672 8.864-8.544 16.784-9.28 26-.368 5.056.864 10.064 2.112 14.976l9.312 37.408c10.8 2.016 17.968-11.44 28.352-15.12 3.904-1.408 8.384-1.456 11.536-4.096 3.04-2.544 2.528-8.96-1.168-9.2 5.04-.208 9.616-4.512 10.08-9.552.144-1.408.032-2.832.32-4.224.464-1.968 1.84-3.648 3.168-5.264 8.448-10.592 14.272-22.96 20.08-35.168l4.576-9.76 17.232-36.48 6.784-14.304c-2.96 4.256-9.92 3.216-13.696-.336-3.824-3.568-5.584-8.704-8.48-13.04-2.448-3.728-5.84-7.104-6.832-11.52-.576-2.528-.256-5.184-.528-7.792-.608-5.648-4-10.56-6.208-15.776s-3.088-11.872.736-16.064c9.056 18.496 17.168 37.472 24.368 56.832 1.104-2.864 3.408-5.248 6.224-6.48 2.064-.944 4.32-1.232 6.48-1.984 5.696-2.08 9.92-7.712 10.304-13.744.336-6.032-3.12-12.16-8.56-14.896-2.688-1.344-5.824-1.936-8.352-3.712-2.528-1.728-4.192-5.392-2.368-7.872 1.712-2.336 5.456-2.048 7.936-.512 2.48 1.584 4.224 4.08 6.56 5.84 1.68 1.28 3.664 2.192 5.488 3.376 9.888 6.544 11.552 20.08 12.944 31.888.768 6.352 1.68 12.656 2.832 18.88.128-1.312.224-2.672.304-3.984 3.696-56.576-14.816-109.36-48.032-150.016zm15.088 71.904c-1.408-.192-2.656-1.2-3.712-2.144-1.76-1.584-3.488-3.392-3.872-5.712-.464-2.768 1.056-5.792-.24-8.32-.608-1.216-1.776-2.016-2.736-2.912-2.544-2.304-4.288-5.504-4.8-8.848-.448-2.96.736-6.784 3.728-7.088 1.424-.16 2.928.72 3.472 2.08l-2.064.944c3.328.608 4.56 5.76 1.84 7.776-.368.32-.816.576-.848 1.072-.016.288.16.592.384.8 1.952 2.416 5.008 3.44 7.632 5.088 2.64 1.584 5.136 4.384 4.512 7.36-.896.288-1.744.528-2.64.8-.992.864-.368 2.56.56 3.552.912.992 2.112 1.984 2.08 3.36-.112 1.472-1.84 2.384-3.296 2.192zm-8.288 149.648l-3.664 2.256c.944 4.384-1.84 9.264-6.096 10.672-2.256.752-5.2.944-6.08 3.152-.752 1.872.624 3.904.688 5.92.112 3.328-3.152 5.6-5.536 7.92s-3.872 6.864-.992 8.544c.672.384 1.456.512 2.224.64 3.216.496 6.736.816 9.504-.896 7.904-4.912 1.68-20 9.504-25.056 1.104-.72 2.48-1.2 3.152-2.336 1.92-3.392-4.352-7.264-2.704-10.816z"></path></g><path d="M222.143 129.401l-6.64 4.352-3.888 2.032c-4.144 4.096-8.416 8.016-12.416 12.272-4.064 4.336-7.856 8.88-11.744 13.36-.064.112-.032.096-.112.224-11.424 20.096-23.568 40.016-38.128 58.032 190.768 102.864 257.712 210.176 196.528 282.48.128-.048.272-.112.4-.16 47.648-19.872 80.256-67.28 76.448-118.784-5.584-75.6-70.592-164.976-200.448-253.808z" fill="#ffd93b"></path><path d="M223.599 32.585l-31.024 5.408-10.928-10.928c-3.344-3.344-8.784-3.344-12.144 0-3.344 3.344-3.344 8.784 0 12.128l2.4 2.4-13.776 2.4-9.04-9.04c-3.344-3.36-8.784-3.36-12.144 0-3.344 3.344-3.344 8.784 0 12.128l.496.512-35.968 6.256-27.04-27.04c-8.736-8.736-18.832-16.032-30.048-21.184-8.384-3.84-17.776-6.704-25.36-5.232-3.04.592-5.44 2.992-6.032 6.032-1.648 8.496 2.144 19.264 6.672 28.352 4.928 9.888 11.536 18.832 19.344 26.656l27.456 27.456-6.272 35.968-.512-.496c-3.36-3.344-8.784-3.344-12.144 0a8.56 8.56 0 0 0 0 12.128l9.04 9.04-2.4 13.776-2.4-2.384c-3.344-3.36-8.784-3.36-12.144 0-3.344 3.344-3.344 8.784 0 12.128l10.928 10.928-5.408 31.024c-.576 3.328.496 6.736 2.88 9.12 4.832 4.832 12.928 3.76 16.336-2.144l13.888-24.08c8.16 7.12 17.248 9.872 17.248 9.872s-3.2-10.736-11.776-19.344l9.296-16.096c8.416 7.856 18.336 10.848 18.336 10.848s-3.2-10.784-11.824-19.408c-.32-.352-.672-.624-1.008-.944l13.856-24.016 34.864 34.864-9.664 43.312c-1.536 7.616 2.864 15.232 10.24 17.68 7.392 2.448 15.488-1.056 18.864-8.224l12.976-31.6c8.448 1.392 16.912 1.264 20.896.128 4.192 2.592 7.008 4 7.008 4s-1.408-2.816-4-7.008c1.136-3.968 1.264-12.432-.128-20.896l31.792-13.056c1.616-.752 3.056-1.776 4.304-3.024 4.144-4.16 5.584-10.192 3.744-15.744a15.41 15.41 0 0 0-17.68-10.24l-43.312 9.664-34.88-34.88 24.016-13.856c.32.336.592.688.928 1.024 8.624 8.624 19.408 11.824 19.408 11.824s-3.008-9.904-10.864-18.336l16.096-9.296c8.624 8.576 19.36 11.776 19.36 11.776s-2.752-9.072-9.872-17.248l24.08-13.888c5.92-3.408 6.976-11.504 2.16-16.336-2.384-2.368-5.792-3.456-9.12-2.864z" fill="#5a5f63"></path><path d="M390.383 445.177c-1.424 10-1.312 9.888-7.84 29.44 3.744-14.016 5.36-17.248 6.24-29.6 7.696-53.872-29.008-121.744-63.04-158.72-17.04-20.608-40.096-43.376-62.24-61.6-19.072-15.92-27.68-21.536-43.68-32.96-3.68-2.4-4.64-7.52-2.08-11.04 2.56-3.68 7.52-4.64 11.2-2.08 0 .16.16.16.32.32 15.696 12.208 22.496 16.848 43.04 35.52 23.376 21.264 44.736 44.672 60.96 65.92 35.2 43.376 65.536 105.728 57.12 164.8z" fill="#e9b02c"></path></svg></span></i>
											</div>
											<div>
												<h6 class="card-title font-size-15 font-weight-medium mb-0 text-orange">@lang('message.tour_type')</h6>
												<p class="card-meta font-size-14 mb-1">@lang('message.cairo_tour')</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <p class="text-decoration-line-through text-900 mb-0">$300</p> -->
							<h1 class="mt-2 mb-1 text-blue fw-bolder fs-4">
								<span>$250</span><span class="text-900 fs-6 fw-normal">/@lang('message.per_person')</span>
							</h1>

							<!-- <span class="d-flex align-items-center justify-content-start">
								<span class="d-flex align-items-center loc mb-2 me-3">
									<span class="icon-room mr-3"></span>
									<span class="ps-2">Cairo</span>
								</span>
								<span class="d-flex align-items-center loc mb-2">
									<span class="text-800 fs--1 me-2">
										<i class="bi bi-calendar"></i>
									</span>
									<span>4</span>
								</span>	
							</span> -->
							
						</div>
						
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="media-1 pkgHome-media1 mb-sm-3">
						<div class="media-1Aft">
							<img src="{{asset('Frontend/images/Elephantine-Island.png')}}" alt="Image" class="img-fluid">
							<div class="price">$490</div>
						</div>

						<div class="mt-3">
						
							<div class="d-flex align-items-center">
								<h3><a href="{{route('travel_package')}}" class="pkgHomeTitle">@lang('message.from') @lang('message.jan') @lang('message.to') @lang('message.feb') 2025</a></h3>
							</div>
								
							<div class="flight-details">
								<div class="flight-time">
									<div class="flight-time-item take-off d-flex justify-content-between" style="padding-top: 10px;">
										<div class="d-flex">
											<div class="flex-shrink-0 me-2">
												<i class="la"><span class=""><svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"><path d="M511.88 475.685l-40.224-221.6c-.4-2.212-1.773-4.128-3.74-5.22l-101.242-56.3a7.48 7.48 0 0 0-4.234-.91l18.42 237.608-.617.276 121.164 54.357a7.53 7.53 0 0 0 3.077.659 7.51 7.51 0 0 0 4.632-1.596 7.5 7.5 0 0 0 2.764-7.251zM256 246.375l-103.545-53.93c-1.24-.647-2.617-.9-3.972-.82.36-.022.72-.02 1.078.008L131.14 429.24l121.78 54.634a7.53 7.53 0 0 0 3.077.659h0v-238.16z" fill="#44c868"></path><path d="M149.56 191.633a7.58 7.58 0 0 0-4.234.9l-101.243 56.3a7.51 7.51 0 0 0-3.74 5.22L.12 475.685c-.498 2.742.566 5.534 2.763 7.252 1.347 1.053 2.982 1.596 4.632 1.596a7.51 7.51 0 0 0 3.077-.659l120.504-54.06 18.463-238.18zm212.88-.005c-.996.077-1.98.342-2.894.818L256 246.376v238.158a7.51 7.51 0 0 0 3.078-.659l121.78-54.634-18.42-237.613z" fill="#4ce166"></path><path d="M28.154 321.233l-8.17 45.02 120.994-63.906 3.275-42.25z" fill="#ffdb56"></path><path d="M142.066 288.294l-1.09 14.052-120.994 63.906L.12 475.685c-.498 2.742.566 5.534 2.763 7.252 1.347 1.053 2.982 1.596 4.632 1.596a7.51 7.51 0 0 0 3.077-.659l120.504-54.06 10.97-141.52z" fill="#a8eefc"></path><path d="M256.03 276.08l-111.778-15.983-3.275 42.25L256 477.025v-63.518L187.363 305.43l68.667 8.213zm203.916-31.66l-48.635-27.05-46.042 10.758 2.85 36.77z" fill="#ffbb24"></path><path d="M372.202 317.576l-6.933-89.448-109.24 47.952v37.562l71.356-31.03z" fill="#ffdb56"></path><path d="M511.88 475.685l-10.103-55.666-133.657-155.12 4.084 52.678 137.07 165.22a7.5 7.5 0 0 0 2.606-7.112z" fill="#ffbb24"></path><path d="M256.48 27.465c-57.963 0-105.12 47.118-105.12 105.034 0 35.826 17.01 74.3 50.556 114.322 24.64 29.403 48.943 48.314 49.966 49.105 1.354 1.047 2.976 1.57 4.6 1.57s3.245-.523 4.6-1.57c1.022-.79 25.327-19.702 49.966-49.105 33.547-40.032 50.556-78.495 50.556-114.322-.002-57.916-47.16-105.034-105.122-105.034zm38.93 105.033c0 21.482-17.43 38.898-38.93 38.898s-38.93-17.415-38.93-38.898S234.98 93.6 256.48 93.6s38.93 17.416 38.93 38.898z" fill="#ff4a4a"></path><path d="M256.48 27.465a105.71 105.71 0 0 0-13.559.872c51.583 6.667 91.562 50.836 91.562 104.162 0 35.826-17.01 74.3-50.556 114.322-15.845 18.908-31.54 33.467-41.005 41.67 5.254 4.552 8.596 7.154 8.96 7.436 1.354 1.047 2.976 1.57 4.6 1.57s3.245-.523 4.6-1.57c1.022-.79 25.327-19.702 49.966-49.105 33.547-40.032 50.556-78.495 50.556-114.322-.002-57.916-47.16-105.034-105.122-105.034z" fill="#e7343f"></path><path d="M259.078 483.874l45.285-20.316L256 413.507v71.026a7.5 7.5 0 0 0 3.078-.659z" fill="#ffdb56"></path><path d="M471.654 254.074c-.4-2.212-1.773-4.128-3.74-5.22l-7.97-4.433-91.827 20.477 133.656 155.12-30.12-165.944zM256 484.533v-7.508l-115.022-174.68-9.837 126.895 121.78 54.634a7.53 7.53 0 0 0 3.078.658z" fill="#1ea4e9"></path></svg></span></i>
											</div>
											<div>
												<h6 class="card-title font-size-15 font-weight-medium mb-0 text-orange">@lang('message.duration')</h6>
												<p class="card-meta font-size-14 mb-1">2 @lang('message.days')/3 @lang('message.nights')</p>
											</div>
										</div>
										<div class="d-flex">
											<div class="flex-shrink-0 me-2">
												<i class="la"><span class=""><svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.438 511.438" xmlns:v="https://vecta.io/nano"><circle cx="283.481" cy="296.079" r="215.352" fill="#6dafdf"></circle><g fill="#e8eff3"><path d="M167.343 469.641c-.048.08-.112.128-.16.208l.944.32-.784-.528zm6.128-303.792l-.384-.896c3.632-.304 4.032-2.816 6.816-3.568 3.168-.816 2.032.224 5.104.32 2.48.064 3.872 1.952 6.784.832-.752 1.168-1.936 1.92-3.104 2.688-2.448 1.504-4.928 3.056-7.744 3.504-2.8.448-6.016-.448-7.472-2.88z"></path><path d="M204.031 360.201c-.176 1.888-1.392 3.472-2.464 5.008-4.784 6.768-7.936 14.768-9.04 22.992-1.088 7.888-1.376 17.68-8.528 21.12-4.08 1.936-9.6 1.184-12.464 4.72-.896 1.072-1.376 2.448-1.856 3.744l-6.304 18.192-6.56-1.104c2.528.992 4.096 4.608 2.384 6.896-2.4-1.472-5.76-.128-7.28 2.272-1.472 2.4-1.472 5.424-.912 8.192 1.712 8.208 8.208 15.168 16.192 17.632-1.584 2.576-5.84 1.136-8.336-.832-18-13.952-30.944-34.256-36-56.448-1.792-7.824-2.72-16.096-6.768-22.992-3.392-5.824-8.768-10.272-12.144-16.112-4.736-8.304-5.04-18.784-10.64-26.512-3.136-4.4-8.048-9.888-4.752-14.16 1.328-1.776 4.032-3.36 3.136-5.36-.304-.656-.96-1.088-1.456-1.664-1.904-2.32-.272-5.68.928-8.432 2.016-4.8 2.352-10.048 1.968-15.344-4.816-4.896-8.48-10.848-10.592-17.376-1.264-3.984-2.944-8.976-7.12-9.296l-2.672-9.248c-.464 1.04-1.568 1.664-2.752 1.728 6.432-49.04 29.184-92.432 62.32-125.056.672-.256 1.376-.608 2.08-.96 7.616-3.808 13.856-9.856 21.264-14.064 1.52-.88 3.232-1.696 5.024-1.392 1.744.256 3.28 2.16 2.544 3.776-.288.672-.896 1.168-1.52 1.568-8.768 6.528-18.256 12.112-28.256 16.592-1.2.512-2.464 1.104-3.072 2.24-1.104 1.936.384 4.528 2.432 5.392s4.4.576 6.576.224a10.64 10.64 0 0 0-1.984 8.96c1.984.32 2.784-2.368 3.488-4.224 2.912-7.376 15.12-9.664 14.848-17.648 3.152 1.92 6.704-1.664 8.896-4.656 2.192-3.024 6.816-5.856 9.072-2.928l.192 4.704 13.088-2.432c-2.544 1.552-3.6 5.136-2.368 7.856s4.656 4.256 7.488 3.36c-.192 2.288-2.352 3.904-4.288 5.136-4.944 3.248-10.24 6.576-15.84 7.968l1.088 2.704c-.144.032-.304.08-.448.064-3.52.112-7.056-2.656-10.832-2.4-2.304.144-5.12-.032-6.592 2.208-.208.272-1.296 4.304-.704 4l6.304-3.104c.528 1.696.56 3.552.096 5.328 2.496-.08 5.04.624 7.136 2.064-2.624 5.152-8.736 8.32-14.496 7.52l.144-5.264c-4.736-.688-8.896 3.136-11.536 7.072-2.688 3.968-4.848 8.576-9.008 10.944-2.544 1.504-5.552 1.936-8.256 3.136-2.672 1.248-5.216 3.76-4.88 6.672.16 1.376.944 2.704.816 4.112-.32 2.608-3.456 3.632-5.616 5.2-3.696 2.688-4.912 7.984-8.816 10.32-2.848 1.728-6.432 1.44-9.664 2.208-3.216.768-6.592 3.728-5.52 6.864-1.584.432-3.408-.848-3.456-2.512-6.304 10.624-10.768 22.352-13.056 34.496 2.64 2.128 5.744-2.112 6.496-5.44.8-3.312 4-7.504 6.592-5.344l-2.816 14.272c-.208.912-.368 1.888.016 2.736.464 1.056 1.6 1.568 2.432 2.352 2.336 2.304 1.76 6.064 1.696 9.328-.112 4 .96 7.968 2.816 11.504-.144-.688-.256-1.392-.352-2.08 3.76.736 7.776-.224 10.8-2.576 1.6-1.264 2.976-2.928 4.912-3.488 1.984-.608 4.096.064 6.048.736 6.064 2.096 12.512 4.416 16.32 9.552 1.936 2.608 3.04 5.808 5.392 8.016 5.328 5.12 14.992 3.648 19.808 9.28 3.856 4.544 2.64 11.392 1.136 17.216-2.72-1.728-6.768 1.904-5.28 4.784 1.616-1.552 3.472-3.2 5.664-3.056 2.24.096 3.984 3.28 2.24 4.592 4.208-4.704 13.6-2.048 14.72 4.224l16.304 2.272c-1.44 7.888 15.248 9.456 14.4 17.456zm-18.544-227.056c-2.176.896-4.976-.464-5.616-2.72s1.024-4.896 3.344-5.264c1.472-.24 3.456.048 3.984-1.344.16-.416.112-.896.144-1.344.112-2.656 2.64-4.704 5.264-5.2s5.296.192 7.872.88c.8 1.968.928 4.224.352 6.272l-5.392-.112c-.032 2.976-.56 6.704-3.392 7.616-2.528.816-5.632-1.216-7.808.32m31.04-26.992c5.04-2.016 9.408-5.44 14.384-7.6 8.56-3.712 18.256-3.472 27.584-3.152l63.696 2.144-15.264 7.12c-4.16 1.936-8.864 3.92-13.184 2.384-.336 3.536 2.688 7.024 6.224 7.216-9.056 4.816-20.784-1.472-30.256 2.448-3.968 1.648-7.312 5.024-11.584 5.424-2.48.224-4.976-.592-7.44-.208-4.128.624-6.944 4.32-10.144 7.008-3.696 3.104-8.928 5.04-13.36 3.152s-6.368-8.784-2.512-11.696c1.888-1.44 4.464-1.52 6.64-2.464s4.032-3.728 2.56-5.6c-.64-.816-1.744-1.184-2.336-2.032-.624-.928-.48-2.192-.976-3.2-1.904-3.92-8.224.784-12.192-1.008m61.344 22.128c2.912-.48 5.504-2.016 8.256-3.072s5.984-1.584 8.528-.112c.656 2-1.712 3.632-3.728 4.208a24.19 24.19 0 0 1-11.952.272m170.736 31.312a6.65 6.65 0 0 1-2.416-.304c-3.6-1.008-6.192-4.016-9.168-6.256-6.896-5.232-16.672-6.496-24.704-3.104 2.016-2.56 3.152-5.808 3.168-9.072l-1.136.32c-12.256-8.208-26.688-16.848-40.912-12.784-3.28.96-6.32 2.528-9.648 3.44-3.536.992-7.408 1.232-10.512 3.184-3.152 1.952-5.056 6.56-2.656 9.296 2.048 2.336 5.584 1.968 8.624 2.464 2.992.48 6.256 3.728 4.432 6.192l-41.216 16.192c6 2.384 9.584 9.6 7.872 15.84-4.528.496-8.672-2.512-13.168-3.088-6.544-.768-13.184 4.624-13.76 11.168-.624 6.56 5.024 13.024 11.584 13.344 4.912.272 9.92-2.384 14.608-.816.48-4.464 3.792-8.048 7.152-11.056 6.512-5.728 15.632-10.72 23.6-7.168 2.608 1.136 4.784 3.088 6.896 5.024l13.968 12.72 4.976-4.464 7.52 9.024 4.304-2.464 2.48 7.728 1.6-8.144c3.2.304 6.592.624 9.616-.656 3.008-1.216 5.376-4.592 4.352-7.68-.528-1.648-1.952-3.008-2.144-4.72-.416-3.44 4.592-5.472 7.664-3.696 3.008 1.712 4.336 5.36 5.44 8.704l2.768-9.728c2.544 8.176 6.448 15.936 11.472 22.848-9.84-2.544-20.416-2.144-30 1.104 2.704 4.368 7.648 7.184 12.752 7.312 2.288.096 4.848-.272 6.512 1.296 1.248 1.2 1.472 3.024 1.6 4.688l1.392 14.048c-4.976-4.672-12.592-4.672-19.44-5.248-6.848-.64-14.736-3.04-16.864-9.584-2.928 2.896-4.416 7.184-3.904 11.312-6.992-2.16-14.976-5.408-16.576-12.544-5.68 1.68-12.352-2.304-13.488-8.096-.4-2.032-.4-4.464-2.08-5.648-1.024-.704-2.4-.688-3.664-.624l-31.776 1.568c-5.776.32-11.76.608-16.992 3.104-5.232 2.448-9.616 7.632-9.408 13.408-10.048 5.12-18.8 12.896-24.96 22.32-1.952 2.896-3.68 6.256-3.216 9.696.32 2.656 1.92 5.008 2.288 7.616.64 4.48-2.16 8.592-3.52 12.912-3.808 12.256 4.864 24.576 13.008 34.576 3.856 4.64 8.304 9.712 14.32 10.336 3.728.384 7.392-1.04 10.976-2.176 10.272-3.296 21.28-4.384 31.984-3.264-2.56 1.744-.288 6.032 2.688 6.864s6.288.064 9.152 1.264c6.512 2.816 4.96 12.528 1.536 18.704l4.672-.576-2.896 6.208c9.056 1.76 11.744 13.984 9.024 22.832-2.672 8.864-8.544 16.784-9.28 26-.368 5.056.864 10.064 2.112 14.976l9.312 37.408c10.8 2.016 17.968-11.44 28.352-15.12 3.904-1.408 8.384-1.456 11.536-4.096 3.04-2.544 2.528-8.96-1.168-9.2 5.04-.208 9.616-4.512 10.08-9.552.144-1.408.032-2.832.32-4.224.464-1.968 1.84-3.648 3.168-5.264 8.448-10.592 14.272-22.96 20.08-35.168l4.576-9.76 17.232-36.48 6.784-14.304c-2.96 4.256-9.92 3.216-13.696-.336-3.824-3.568-5.584-8.704-8.48-13.04-2.448-3.728-5.84-7.104-6.832-11.52-.576-2.528-.256-5.184-.528-7.792-.608-5.648-4-10.56-6.208-15.776s-3.088-11.872.736-16.064c9.056 18.496 17.168 37.472 24.368 56.832 1.104-2.864 3.408-5.248 6.224-6.48 2.064-.944 4.32-1.232 6.48-1.984 5.696-2.08 9.92-7.712 10.304-13.744.336-6.032-3.12-12.16-8.56-14.896-2.688-1.344-5.824-1.936-8.352-3.712-2.528-1.728-4.192-5.392-2.368-7.872 1.712-2.336 5.456-2.048 7.936-.512 2.48 1.584 4.224 4.08 6.56 5.84 1.68 1.28 3.664 2.192 5.488 3.376 9.888 6.544 11.552 20.08 12.944 31.888.768 6.352 1.68 12.656 2.832 18.88.128-1.312.224-2.672.304-3.984 3.696-56.576-14.816-109.36-48.032-150.016zm15.088 71.904c-1.408-.192-2.656-1.2-3.712-2.144-1.76-1.584-3.488-3.392-3.872-5.712-.464-2.768 1.056-5.792-.24-8.32-.608-1.216-1.776-2.016-2.736-2.912-2.544-2.304-4.288-5.504-4.8-8.848-.448-2.96.736-6.784 3.728-7.088 1.424-.16 2.928.72 3.472 2.08l-2.064.944c3.328.608 4.56 5.76 1.84 7.776-.368.32-.816.576-.848 1.072-.016.288.16.592.384.8 1.952 2.416 5.008 3.44 7.632 5.088 2.64 1.584 5.136 4.384 4.512 7.36-.896.288-1.744.528-2.64.8-.992.864-.368 2.56.56 3.552.912.992 2.112 1.984 2.08 3.36-.112 1.472-1.84 2.384-3.296 2.192zm-8.288 149.648l-3.664 2.256c.944 4.384-1.84 9.264-6.096 10.672-2.256.752-5.2.944-6.08 3.152-.752 1.872.624 3.904.688 5.92.112 3.328-3.152 5.6-5.536 7.92s-3.872 6.864-.992 8.544c.672.384 1.456.512 2.224.64 3.216.496 6.736.816 9.504-.896 7.904-4.912 1.68-20 9.504-25.056 1.104-.72 2.48-1.2 3.152-2.336 1.92-3.392-4.352-7.264-2.704-10.816z"></path></g><path d="M222.143 129.401l-6.64 4.352-3.888 2.032c-4.144 4.096-8.416 8.016-12.416 12.272-4.064 4.336-7.856 8.88-11.744 13.36-.064.112-.032.096-.112.224-11.424 20.096-23.568 40.016-38.128 58.032 190.768 102.864 257.712 210.176 196.528 282.48.128-.048.272-.112.4-.16 47.648-19.872 80.256-67.28 76.448-118.784-5.584-75.6-70.592-164.976-200.448-253.808z" fill="#ffd93b"></path><path d="M223.599 32.585l-31.024 5.408-10.928-10.928c-3.344-3.344-8.784-3.344-12.144 0-3.344 3.344-3.344 8.784 0 12.128l2.4 2.4-13.776 2.4-9.04-9.04c-3.344-3.36-8.784-3.36-12.144 0-3.344 3.344-3.344 8.784 0 12.128l.496.512-35.968 6.256-27.04-27.04c-8.736-8.736-18.832-16.032-30.048-21.184-8.384-3.84-17.776-6.704-25.36-5.232-3.04.592-5.44 2.992-6.032 6.032-1.648 8.496 2.144 19.264 6.672 28.352 4.928 9.888 11.536 18.832 19.344 26.656l27.456 27.456-6.272 35.968-.512-.496c-3.36-3.344-8.784-3.344-12.144 0a8.56 8.56 0 0 0 0 12.128l9.04 9.04-2.4 13.776-2.4-2.384c-3.344-3.36-8.784-3.36-12.144 0-3.344 3.344-3.344 8.784 0 12.128l10.928 10.928-5.408 31.024c-.576 3.328.496 6.736 2.88 9.12 4.832 4.832 12.928 3.76 16.336-2.144l13.888-24.08c8.16 7.12 17.248 9.872 17.248 9.872s-3.2-10.736-11.776-19.344l9.296-16.096c8.416 7.856 18.336 10.848 18.336 10.848s-3.2-10.784-11.824-19.408c-.32-.352-.672-.624-1.008-.944l13.856-24.016 34.864 34.864-9.664 43.312c-1.536 7.616 2.864 15.232 10.24 17.68 7.392 2.448 15.488-1.056 18.864-8.224l12.976-31.6c8.448 1.392 16.912 1.264 20.896.128 4.192 2.592 7.008 4 7.008 4s-1.408-2.816-4-7.008c1.136-3.968 1.264-12.432-.128-20.896l31.792-13.056c1.616-.752 3.056-1.776 4.304-3.024 4.144-4.16 5.584-10.192 3.744-15.744a15.41 15.41 0 0 0-17.68-10.24l-43.312 9.664-34.88-34.88 24.016-13.856c.32.336.592.688.928 1.024 8.624 8.624 19.408 11.824 19.408 11.824s-3.008-9.904-10.864-18.336l16.096-9.296c8.624 8.576 19.36 11.776 19.36 11.776s-2.752-9.072-9.872-17.248l24.08-13.888c5.92-3.408 6.976-11.504 2.16-16.336-2.384-2.368-5.792-3.456-9.12-2.864z" fill="#5a5f63"></path><path d="M390.383 445.177c-1.424 10-1.312 9.888-7.84 29.44 3.744-14.016 5.36-17.248 6.24-29.6 7.696-53.872-29.008-121.744-63.04-158.72-17.04-20.608-40.096-43.376-62.24-61.6-19.072-15.92-27.68-21.536-43.68-32.96-3.68-2.4-4.64-7.52-2.08-11.04 2.56-3.68 7.52-4.64 11.2-2.08 0 .16.16.16.32.32 15.696 12.208 22.496 16.848 43.04 35.52 23.376 21.264 44.736 44.672 60.96 65.92 35.2 43.376 65.536 105.728 57.12 164.8z" fill="#e9b02c"></path></svg></span></i>
											</div>
											<div>
												<h6 class="card-title font-size-15 font-weight-medium mb-0 text-orange">@lang('message.tour_type')</h6>
												<p class="card-meta font-size-14 mb-1">@lang('message.aswan_tour')</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <p class="text-decoration-line-through text-900 mb-0">$300</p> -->
							<h1 class="mt-2 mb-1 text-blue fw-bolder fs-4">
								<span>$300</span><span class="text-900 fs-6 fw-normal">/@lang('message.per_person')</span>
							</h1>

							
							
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="media-1 pkgHome-media1 mb-sm-3">
						<div class="media-1Aft">
							
							<img src="{{asset('Frontend/images/montaza-palace.png')}}" alt="Image" class="img-fluid">
							
						</div>	

						<div class="mt-3">
						
							<div class="d-flex align-items-center">
								<h3><a href="{{route('travel_package')}}" class="pkgHomeTitle">@lang('message.from') @lang('message.nov') @lang('message.to') @lang('message.dec') 2024</a></h3>
							</div>
								
							<div class="flight-details">
								<div class="flight-time">
									<div class="flight-time-item take-off d-flex justify-content-between" style="padding-top: 10px;">
										<div class="d-flex">
											<div class="flex-shrink-0 me-2">
												<i class="la"><span class=""><svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"><path d="M511.88 475.685l-40.224-221.6c-.4-2.212-1.773-4.128-3.74-5.22l-101.242-56.3a7.48 7.48 0 0 0-4.234-.91l18.42 237.608-.617.276 121.164 54.357a7.53 7.53 0 0 0 3.077.659 7.51 7.51 0 0 0 4.632-1.596 7.5 7.5 0 0 0 2.764-7.251zM256 246.375l-103.545-53.93c-1.24-.647-2.617-.9-3.972-.82.36-.022.72-.02 1.078.008L131.14 429.24l121.78 54.634a7.53 7.53 0 0 0 3.077.659h0v-238.16z" fill="#44c868"></path><path d="M149.56 191.633a7.58 7.58 0 0 0-4.234.9l-101.243 56.3a7.51 7.51 0 0 0-3.74 5.22L.12 475.685c-.498 2.742.566 5.534 2.763 7.252 1.347 1.053 2.982 1.596 4.632 1.596a7.51 7.51 0 0 0 3.077-.659l120.504-54.06 18.463-238.18zm212.88-.005c-.996.077-1.98.342-2.894.818L256 246.376v238.158a7.51 7.51 0 0 0 3.078-.659l121.78-54.634-18.42-237.613z" fill="#4ce166"></path><path d="M28.154 321.233l-8.17 45.02 120.994-63.906 3.275-42.25z" fill="#ffdb56"></path><path d="M142.066 288.294l-1.09 14.052-120.994 63.906L.12 475.685c-.498 2.742.566 5.534 2.763 7.252 1.347 1.053 2.982 1.596 4.632 1.596a7.51 7.51 0 0 0 3.077-.659l120.504-54.06 10.97-141.52z" fill="#a8eefc"></path><path d="M256.03 276.08l-111.778-15.983-3.275 42.25L256 477.025v-63.518L187.363 305.43l68.667 8.213zm203.916-31.66l-48.635-27.05-46.042 10.758 2.85 36.77z" fill="#ffbb24"></path><path d="M372.202 317.576l-6.933-89.448-109.24 47.952v37.562l71.356-31.03z" fill="#ffdb56"></path><path d="M511.88 475.685l-10.103-55.666-133.657-155.12 4.084 52.678 137.07 165.22a7.5 7.5 0 0 0 2.606-7.112z" fill="#ffbb24"></path><path d="M256.48 27.465c-57.963 0-105.12 47.118-105.12 105.034 0 35.826 17.01 74.3 50.556 114.322 24.64 29.403 48.943 48.314 49.966 49.105 1.354 1.047 2.976 1.57 4.6 1.57s3.245-.523 4.6-1.57c1.022-.79 25.327-19.702 49.966-49.105 33.547-40.032 50.556-78.495 50.556-114.322-.002-57.916-47.16-105.034-105.122-105.034zm38.93 105.033c0 21.482-17.43 38.898-38.93 38.898s-38.93-17.415-38.93-38.898S234.98 93.6 256.48 93.6s38.93 17.416 38.93 38.898z" fill="#ff4a4a"></path><path d="M256.48 27.465a105.71 105.71 0 0 0-13.559.872c51.583 6.667 91.562 50.836 91.562 104.162 0 35.826-17.01 74.3-50.556 114.322-15.845 18.908-31.54 33.467-41.005 41.67 5.254 4.552 8.596 7.154 8.96 7.436 1.354 1.047 2.976 1.57 4.6 1.57s3.245-.523 4.6-1.57c1.022-.79 25.327-19.702 49.966-49.105 33.547-40.032 50.556-78.495 50.556-114.322-.002-57.916-47.16-105.034-105.122-105.034z" fill="#e7343f"></path><path d="M259.078 483.874l45.285-20.316L256 413.507v71.026a7.5 7.5 0 0 0 3.078-.659z" fill="#ffdb56"></path><path d="M471.654 254.074c-.4-2.212-1.773-4.128-3.74-5.22l-7.97-4.433-91.827 20.477 133.656 155.12-30.12-165.944zM256 484.533v-7.508l-115.022-174.68-9.837 126.895 121.78 54.634a7.53 7.53 0 0 0 3.078.658z" fill="#1ea4e9"></path></svg></span></i>
											</div>
											<div>
												<h6 class="card-title font-size-15 font-weight-medium mb-0 text-orange">@lang('message.duration')</h6>
												<p class="card-meta font-size-14 mb-1">6 @lang('message.days')/7 @lang('message.nights')</p>
											</div>
										</div>
										<div class="d-flex">
											<div class="flex-shrink-0 me-2">
												<i class="la"><span class=""><svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.438 511.438" xmlns:v="https://vecta.io/nano"><circle cx="283.481" cy="296.079" r="215.352" fill="#6dafdf"></circle><g fill="#e8eff3"><path d="M167.343 469.641c-.048.08-.112.128-.16.208l.944.32-.784-.528zm6.128-303.792l-.384-.896c3.632-.304 4.032-2.816 6.816-3.568 3.168-.816 2.032.224 5.104.32 2.48.064 3.872 1.952 6.784.832-.752 1.168-1.936 1.92-3.104 2.688-2.448 1.504-4.928 3.056-7.744 3.504-2.8.448-6.016-.448-7.472-2.88z"></path><path d="M204.031 360.201c-.176 1.888-1.392 3.472-2.464 5.008-4.784 6.768-7.936 14.768-9.04 22.992-1.088 7.888-1.376 17.68-8.528 21.12-4.08 1.936-9.6 1.184-12.464 4.72-.896 1.072-1.376 2.448-1.856 3.744l-6.304 18.192-6.56-1.104c2.528.992 4.096 4.608 2.384 6.896-2.4-1.472-5.76-.128-7.28 2.272-1.472 2.4-1.472 5.424-.912 8.192 1.712 8.208 8.208 15.168 16.192 17.632-1.584 2.576-5.84 1.136-8.336-.832-18-13.952-30.944-34.256-36-56.448-1.792-7.824-2.72-16.096-6.768-22.992-3.392-5.824-8.768-10.272-12.144-16.112-4.736-8.304-5.04-18.784-10.64-26.512-3.136-4.4-8.048-9.888-4.752-14.16 1.328-1.776 4.032-3.36 3.136-5.36-.304-.656-.96-1.088-1.456-1.664-1.904-2.32-.272-5.68.928-8.432 2.016-4.8 2.352-10.048 1.968-15.344-4.816-4.896-8.48-10.848-10.592-17.376-1.264-3.984-2.944-8.976-7.12-9.296l-2.672-9.248c-.464 1.04-1.568 1.664-2.752 1.728 6.432-49.04 29.184-92.432 62.32-125.056.672-.256 1.376-.608 2.08-.96 7.616-3.808 13.856-9.856 21.264-14.064 1.52-.88 3.232-1.696 5.024-1.392 1.744.256 3.28 2.16 2.544 3.776-.288.672-.896 1.168-1.52 1.568-8.768 6.528-18.256 12.112-28.256 16.592-1.2.512-2.464 1.104-3.072 2.24-1.104 1.936.384 4.528 2.432 5.392s4.4.576 6.576.224a10.64 10.64 0 0 0-1.984 8.96c1.984.32 2.784-2.368 3.488-4.224 2.912-7.376 15.12-9.664 14.848-17.648 3.152 1.92 6.704-1.664 8.896-4.656 2.192-3.024 6.816-5.856 9.072-2.928l.192 4.704 13.088-2.432c-2.544 1.552-3.6 5.136-2.368 7.856s4.656 4.256 7.488 3.36c-.192 2.288-2.352 3.904-4.288 5.136-4.944 3.248-10.24 6.576-15.84 7.968l1.088 2.704c-.144.032-.304.08-.448.064-3.52.112-7.056-2.656-10.832-2.4-2.304.144-5.12-.032-6.592 2.208-.208.272-1.296 4.304-.704 4l6.304-3.104c.528 1.696.56 3.552.096 5.328 2.496-.08 5.04.624 7.136 2.064-2.624 5.152-8.736 8.32-14.496 7.52l.144-5.264c-4.736-.688-8.896 3.136-11.536 7.072-2.688 3.968-4.848 8.576-9.008 10.944-2.544 1.504-5.552 1.936-8.256 3.136-2.672 1.248-5.216 3.76-4.88 6.672.16 1.376.944 2.704.816 4.112-.32 2.608-3.456 3.632-5.616 5.2-3.696 2.688-4.912 7.984-8.816 10.32-2.848 1.728-6.432 1.44-9.664 2.208-3.216.768-6.592 3.728-5.52 6.864-1.584.432-3.408-.848-3.456-2.512-6.304 10.624-10.768 22.352-13.056 34.496 2.64 2.128 5.744-2.112 6.496-5.44.8-3.312 4-7.504 6.592-5.344l-2.816 14.272c-.208.912-.368 1.888.016 2.736.464 1.056 1.6 1.568 2.432 2.352 2.336 2.304 1.76 6.064 1.696 9.328-.112 4 .96 7.968 2.816 11.504-.144-.688-.256-1.392-.352-2.08 3.76.736 7.776-.224 10.8-2.576 1.6-1.264 2.976-2.928 4.912-3.488 1.984-.608 4.096.064 6.048.736 6.064 2.096 12.512 4.416 16.32 9.552 1.936 2.608 3.04 5.808 5.392 8.016 5.328 5.12 14.992 3.648 19.808 9.28 3.856 4.544 2.64 11.392 1.136 17.216-2.72-1.728-6.768 1.904-5.28 4.784 1.616-1.552 3.472-3.2 5.664-3.056 2.24.096 3.984 3.28 2.24 4.592 4.208-4.704 13.6-2.048 14.72 4.224l16.304 2.272c-1.44 7.888 15.248 9.456 14.4 17.456zm-18.544-227.056c-2.176.896-4.976-.464-5.616-2.72s1.024-4.896 3.344-5.264c1.472-.24 3.456.048 3.984-1.344.16-.416.112-.896.144-1.344.112-2.656 2.64-4.704 5.264-5.2s5.296.192 7.872.88c.8 1.968.928 4.224.352 6.272l-5.392-.112c-.032 2.976-.56 6.704-3.392 7.616-2.528.816-5.632-1.216-7.808.32m31.04-26.992c5.04-2.016 9.408-5.44 14.384-7.6 8.56-3.712 18.256-3.472 27.584-3.152l63.696 2.144-15.264 7.12c-4.16 1.936-8.864 3.92-13.184 2.384-.336 3.536 2.688 7.024 6.224 7.216-9.056 4.816-20.784-1.472-30.256 2.448-3.968 1.648-7.312 5.024-11.584 5.424-2.48.224-4.976-.592-7.44-.208-4.128.624-6.944 4.32-10.144 7.008-3.696 3.104-8.928 5.04-13.36 3.152s-6.368-8.784-2.512-11.696c1.888-1.44 4.464-1.52 6.64-2.464s4.032-3.728 2.56-5.6c-.64-.816-1.744-1.184-2.336-2.032-.624-.928-.48-2.192-.976-3.2-1.904-3.92-8.224.784-12.192-1.008m61.344 22.128c2.912-.48 5.504-2.016 8.256-3.072s5.984-1.584 8.528-.112c.656 2-1.712 3.632-3.728 4.208a24.19 24.19 0 0 1-11.952.272m170.736 31.312a6.65 6.65 0 0 1-2.416-.304c-3.6-1.008-6.192-4.016-9.168-6.256-6.896-5.232-16.672-6.496-24.704-3.104 2.016-2.56 3.152-5.808 3.168-9.072l-1.136.32c-12.256-8.208-26.688-16.848-40.912-12.784-3.28.96-6.32 2.528-9.648 3.44-3.536.992-7.408 1.232-10.512 3.184-3.152 1.952-5.056 6.56-2.656 9.296 2.048 2.336 5.584 1.968 8.624 2.464 2.992.48 6.256 3.728 4.432 6.192l-41.216 16.192c6 2.384 9.584 9.6 7.872 15.84-4.528.496-8.672-2.512-13.168-3.088-6.544-.768-13.184 4.624-13.76 11.168-.624 6.56 5.024 13.024 11.584 13.344 4.912.272 9.92-2.384 14.608-.816.48-4.464 3.792-8.048 7.152-11.056 6.512-5.728 15.632-10.72 23.6-7.168 2.608 1.136 4.784 3.088 6.896 5.024l13.968 12.72 4.976-4.464 7.52 9.024 4.304-2.464 2.48 7.728 1.6-8.144c3.2.304 6.592.624 9.616-.656 3.008-1.216 5.376-4.592 4.352-7.68-.528-1.648-1.952-3.008-2.144-4.72-.416-3.44 4.592-5.472 7.664-3.696 3.008 1.712 4.336 5.36 5.44 8.704l2.768-9.728c2.544 8.176 6.448 15.936 11.472 22.848-9.84-2.544-20.416-2.144-30 1.104 2.704 4.368 7.648 7.184 12.752 7.312 2.288.096 4.848-.272 6.512 1.296 1.248 1.2 1.472 3.024 1.6 4.688l1.392 14.048c-4.976-4.672-12.592-4.672-19.44-5.248-6.848-.64-14.736-3.04-16.864-9.584-2.928 2.896-4.416 7.184-3.904 11.312-6.992-2.16-14.976-5.408-16.576-12.544-5.68 1.68-12.352-2.304-13.488-8.096-.4-2.032-.4-4.464-2.08-5.648-1.024-.704-2.4-.688-3.664-.624l-31.776 1.568c-5.776.32-11.76.608-16.992 3.104-5.232 2.448-9.616 7.632-9.408 13.408-10.048 5.12-18.8 12.896-24.96 22.32-1.952 2.896-3.68 6.256-3.216 9.696.32 2.656 1.92 5.008 2.288 7.616.64 4.48-2.16 8.592-3.52 12.912-3.808 12.256 4.864 24.576 13.008 34.576 3.856 4.64 8.304 9.712 14.32 10.336 3.728.384 7.392-1.04 10.976-2.176 10.272-3.296 21.28-4.384 31.984-3.264-2.56 1.744-.288 6.032 2.688 6.864s6.288.064 9.152 1.264c6.512 2.816 4.96 12.528 1.536 18.704l4.672-.576-2.896 6.208c9.056 1.76 11.744 13.984 9.024 22.832-2.672 8.864-8.544 16.784-9.28 26-.368 5.056.864 10.064 2.112 14.976l9.312 37.408c10.8 2.016 17.968-11.44 28.352-15.12 3.904-1.408 8.384-1.456 11.536-4.096 3.04-2.544 2.528-8.96-1.168-9.2 5.04-.208 9.616-4.512 10.08-9.552.144-1.408.032-2.832.32-4.224.464-1.968 1.84-3.648 3.168-5.264 8.448-10.592 14.272-22.96 20.08-35.168l4.576-9.76 17.232-36.48 6.784-14.304c-2.96 4.256-9.92 3.216-13.696-.336-3.824-3.568-5.584-8.704-8.48-13.04-2.448-3.728-5.84-7.104-6.832-11.52-.576-2.528-.256-5.184-.528-7.792-.608-5.648-4-10.56-6.208-15.776s-3.088-11.872.736-16.064c9.056 18.496 17.168 37.472 24.368 56.832 1.104-2.864 3.408-5.248 6.224-6.48 2.064-.944 4.32-1.232 6.48-1.984 5.696-2.08 9.92-7.712 10.304-13.744.336-6.032-3.12-12.16-8.56-14.896-2.688-1.344-5.824-1.936-8.352-3.712-2.528-1.728-4.192-5.392-2.368-7.872 1.712-2.336 5.456-2.048 7.936-.512 2.48 1.584 4.224 4.08 6.56 5.84 1.68 1.28 3.664 2.192 5.488 3.376 9.888 6.544 11.552 20.08 12.944 31.888.768 6.352 1.68 12.656 2.832 18.88.128-1.312.224-2.672.304-3.984 3.696-56.576-14.816-109.36-48.032-150.016zm15.088 71.904c-1.408-.192-2.656-1.2-3.712-2.144-1.76-1.584-3.488-3.392-3.872-5.712-.464-2.768 1.056-5.792-.24-8.32-.608-1.216-1.776-2.016-2.736-2.912-2.544-2.304-4.288-5.504-4.8-8.848-.448-2.96.736-6.784 3.728-7.088 1.424-.16 2.928.72 3.472 2.08l-2.064.944c3.328.608 4.56 5.76 1.84 7.776-.368.32-.816.576-.848 1.072-.016.288.16.592.384.8 1.952 2.416 5.008 3.44 7.632 5.088 2.64 1.584 5.136 4.384 4.512 7.36-.896.288-1.744.528-2.64.8-.992.864-.368 2.56.56 3.552.912.992 2.112 1.984 2.08 3.36-.112 1.472-1.84 2.384-3.296 2.192zm-8.288 149.648l-3.664 2.256c.944 4.384-1.84 9.264-6.096 10.672-2.256.752-5.2.944-6.08 3.152-.752 1.872.624 3.904.688 5.92.112 3.328-3.152 5.6-5.536 7.92s-3.872 6.864-.992 8.544c.672.384 1.456.512 2.224.64 3.216.496 6.736.816 9.504-.896 7.904-4.912 1.68-20 9.504-25.056 1.104-.72 2.48-1.2 3.152-2.336 1.92-3.392-4.352-7.264-2.704-10.816z"></path></g><path d="M222.143 129.401l-6.64 4.352-3.888 2.032c-4.144 4.096-8.416 8.016-12.416 12.272-4.064 4.336-7.856 8.88-11.744 13.36-.064.112-.032.096-.112.224-11.424 20.096-23.568 40.016-38.128 58.032 190.768 102.864 257.712 210.176 196.528 282.48.128-.048.272-.112.4-.16 47.648-19.872 80.256-67.28 76.448-118.784-5.584-75.6-70.592-164.976-200.448-253.808z" fill="#ffd93b"></path><path d="M223.599 32.585l-31.024 5.408-10.928-10.928c-3.344-3.344-8.784-3.344-12.144 0-3.344 3.344-3.344 8.784 0 12.128l2.4 2.4-13.776 2.4-9.04-9.04c-3.344-3.36-8.784-3.36-12.144 0-3.344 3.344-3.344 8.784 0 12.128l.496.512-35.968 6.256-27.04-27.04c-8.736-8.736-18.832-16.032-30.048-21.184-8.384-3.84-17.776-6.704-25.36-5.232-3.04.592-5.44 2.992-6.032 6.032-1.648 8.496 2.144 19.264 6.672 28.352 4.928 9.888 11.536 18.832 19.344 26.656l27.456 27.456-6.272 35.968-.512-.496c-3.36-3.344-8.784-3.344-12.144 0a8.56 8.56 0 0 0 0 12.128l9.04 9.04-2.4 13.776-2.4-2.384c-3.344-3.36-8.784-3.36-12.144 0-3.344 3.344-3.344 8.784 0 12.128l10.928 10.928-5.408 31.024c-.576 3.328.496 6.736 2.88 9.12 4.832 4.832 12.928 3.76 16.336-2.144l13.888-24.08c8.16 7.12 17.248 9.872 17.248 9.872s-3.2-10.736-11.776-19.344l9.296-16.096c8.416 7.856 18.336 10.848 18.336 10.848s-3.2-10.784-11.824-19.408c-.32-.352-.672-.624-1.008-.944l13.856-24.016 34.864 34.864-9.664 43.312c-1.536 7.616 2.864 15.232 10.24 17.68 7.392 2.448 15.488-1.056 18.864-8.224l12.976-31.6c8.448 1.392 16.912 1.264 20.896.128 4.192 2.592 7.008 4 7.008 4s-1.408-2.816-4-7.008c1.136-3.968 1.264-12.432-.128-20.896l31.792-13.056c1.616-.752 3.056-1.776 4.304-3.024 4.144-4.16 5.584-10.192 3.744-15.744a15.41 15.41 0 0 0-17.68-10.24l-43.312 9.664-34.88-34.88 24.016-13.856c.32.336.592.688.928 1.024 8.624 8.624 19.408 11.824 19.408 11.824s-3.008-9.904-10.864-18.336l16.096-9.296c8.624 8.576 19.36 11.776 19.36 11.776s-2.752-9.072-9.872-17.248l24.08-13.888c5.92-3.408 6.976-11.504 2.16-16.336-2.384-2.368-5.792-3.456-9.12-2.864z" fill="#5a5f63"></path><path d="M390.383 445.177c-1.424 10-1.312 9.888-7.84 29.44 3.744-14.016 5.36-17.248 6.24-29.6 7.696-53.872-29.008-121.744-63.04-158.72-17.04-20.608-40.096-43.376-62.24-61.6-19.072-15.92-27.68-21.536-43.68-32.96-3.68-2.4-4.64-7.52-2.08-11.04 2.56-3.68 7.52-4.64 11.2-2.08 0 .16.16.16.32.32 15.696 12.208 22.496 16.848 43.04 35.52 23.376 21.264 44.736 44.672 60.96 65.92 35.2 43.376 65.536 105.728 57.12 164.8z" fill="#e9b02c"></path></svg></span></i>
											</div>
											<div>
												<h6 class="card-title font-size-15 font-weight-medium mb-0 text-orange">@lang('message.tour_type')</h6>
												<p class="card-meta font-size-14 mb-1">alexandria_tour</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <p class="text-decoration-line-through text-900 mb-0">$300</p> -->
							<h1 class="mt-2 mb-1 text-blue fw-bolder fs-4">
								<span>$350</span><span class="text-900 fs-6 fw-normal">/@lang('message.per_person')</span>
							</h1>

							
							
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="section bg-greyC">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
					<img src="{{asset('Frontend/images/img-1.jpg')}}" alt="Image" class="img-fluid brdrRds boxShadow sweetMemImg">
				</div>
				<div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
					<h2 class="heading mb-4">@lang('message.sweet_memories_title')</h2>
					<p>@lang('message.sweet_memories_para1')</p>
					<p>@lang('message.sweet_memories_para2') </p>
					<p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="{{route('excursions')}}" class="btn btn-primary readmoreBtn">@lang('message.read_more')</a></p>
				</div>	
			</div>
		</div>
	</div>
	<div class="untree_co-section section">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				
				<div class="col-lg-6">
					<figure class="img-play-video">
						<a id="play-video" class="video-play-button  glightbox3" href="https://www.youtube.com/watch?v=mwtbEGNABWU" >
							<span></span>
						</a>
						<img src="{{asset('Frontend/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid brdrRds boxShadow sweetMemImg">
					</figure>
				</div>

				<div class="col-lg-5">
					<h2 class="heading mb-4">@lang('message.take_look_title')</h2>
					<p>@lang('message.take_look_para1')</p>

					<p class="mb-4">@lang('message.take_look_para2')
						</p>

					<ul class="list-unstyled two-col clearfix">
						<li>@lang('message.take_look_li1')</li>
						<li>@lang('message.take_look_li2')</li>
						<li>@lang('message.take_look_li3')</li>
						<li>@lang('message.take_look_li4')</li>
						<li>@lang('message.hotels')</li>
						<li>@lang('message.hotels')</li>
						<li>@lang('message.take_look_li5')</li>
						<li>@lang('message.take_look_li6')</li>
						<li>@lang('message.take_look_li7')</li>
						<li>@lang('message.take_look_li8')</li>
					</ul>

					<p><a href="{{route('excursions')}}" class="btn btn-primary getStartedBtn">@lang('message.get_started')</a></p>

					
				</div>
			</div>
		</div>
	</div>


	

	

	<div class="section bg-greyC">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-12 col-xl-6 col-lg-6 mb-4 mb-lg-0">
					<img src="{{asset('Frontend/images/img_v_2.jpg')}}" alt="Image" class="img-fluid brdrRds boxShadow exploreImg">
				</div>
				<div class="col-12 col-xl-5 col-lg-6 mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">

					<!-- <h2 class="heading mb-md-5">Frequently Asked <br> Questions</h2> -->
					<h2 class="heading mb-md-5">@lang('message.faqs')</h2>

					<div class="custom-accordion" id="accordion_1">
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" 
								aria-controls="collapseOne">@lang('message.faqs1q')</button>
							</h2>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
								<div class="accordion-body">@lang('message.faqs1a')
								</div>
							</div>
						</div> <!-- .accordion-item -->

						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" 
								aria-controls="collapseTwo">@lang('message.faqs2q')</button>
							</h2>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
								<div class="accordion-body">@lang('message.faqs2a')
								</div>
							</div>
						</div> <!-- .accordion-item -->
						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" 
								aria-controls="collapseThree">@lang('message.faqs3q')</button>
							</h2>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
								<div class="accordion-body">@lang('message.faqs3a')
								</div>
							</div>

						</div> <!-- .accordion-item -->


						<div class="accordion-item">
							<h2 class="mb-0">
								<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" 
								aria-controls="collapseFour">@lang('message.faqs4q')</button>
							</h2>

							<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
								<div class="accordion-body">@lang('message.faqs4a')
								</div>
							</div>

						</div> <!-- .accordion-item -->

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section bg-white">
		
		<h2 class="heading mb-md-5 text-center">@lang('message.testimonials')</h2>

		<div class="text-center mb-5">
			<div id="prevnext-testimonial">
				<span class="prev me-3" data-controls="prev">
					<span class="icon-chevron-left"></span>

				</span>
				<span class="next" data-controls="next">
					<span class="icon-chevron-right"></span>

				</span>
			</div>
		</div>

		<div class="wide-slider-testimonial-wrap">
			<div class="wide-slider-testimonial">
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Free template by TemplateUX">
							<h3>@lang('message.testimonials_name1')</h3>
							<p class="position mb-5">@lang('message.testimonials_pos3')</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;@lang('message.testimonials_para1')&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{asset('Frontend/images/person_2.jpg')}}" alt="Free template by TemplateUX">
							<h3>@lang('message.testimonials_name2')</h3>
							<p class="position mb-5">@lang('message.testimonials_pos2')</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;@lang('message.testimonials_para2')&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{asset('Frontend/images/person_3.jpg')}}" alt="Free template by TemplateUX">
							<h3>@lang('message.testimonials_name3')</h3>
							<p class="position mb-5">@lang('message.testimonials_pos1')</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;@lang('message.testimonials_para3')&rdquo;</p>
					</blockquote>
				</div>
				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Free template by TemplateUX">
							<h3>@lang('message.testimonials_name1')</h3>
							<p class="position mb-5">@lang('message.testimonials_pos3')</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;@lang('message.testimonials_para1')&rdquo;</p>
					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{asset('Frontend/images/person_2.jpg')}}" alt="Free template by TemplateUX">
							<h3>@lang('message.testimonials_name2')</h3>
							<p class="position mb-5">@lang('message.testimonials_pos2')</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;@lang('message.testimonials_para2')&rdquo;</p>

					</blockquote>
				</div>

				<div class="item">
					<blockquote class="block-testimonial">
						<div class="author">
							<img src="{{asset('Frontend/images/person_3.jpg')}}" alt="Free template by TemplateUX">
							<h3>@lang('message.testimonials_name3')</h3>
							<p class="position mb-5">@lang('message.testimonials_pos1')</p>
						</div>
						<p>
							<div class="quote">&ldquo;</div>
						&ldquo;@lang('message.testimonials_para3')&rdquo;</p>
					</blockquote>
				</div>

			</div>
		</div>



	</div> 

	<div class="section bg-greyC">
		<div class="container">
			<div class="row">
				<div class="col-12" data-aos="fade-up" data-aos-delay="0">
					<h2 class="heading mb-md-5">@lang('message.recent_posts')</h2>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-12 col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
						<a href="#">
							<img src="{{asset('Frontend/images/gal_1.jpg')}}" alt="Image" class="img-fluid postImg">
						</a>
						<div class="bg-white m-body">
							<span class="date">@lang('message.may') 14, 2020</span>
							<h3><a href="#">@lang('message.recent_posts_title1')</a></h3>
							<p>@lang('message.recent_posts_para1')</p>

							<a href="{{route('blog_details')}}" class="more d-flex align-items-center float-start">
								<span class="label">@lang('message.read_more')</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
					<div class="media-entry">
						<a href="#">
							<img src="{{asset('Frontend/images/gal_2.jpg')}}" alt="Image" class="img-fluid postImg">
						</a>
						<div class="bg-white m-body">
							<span class="date">@lang('message.may') 14, 2020</span>
							<h3><a href="#">@lang('message.recent_posts_title2')</a></h3>
							<p>@lang('message.recent_posts_para2')</p>

							<a href="{{route('blog_details')}}" class="more d-flex align-items-center float-start">
								<span class="label">@lang('message.read_more')</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3  mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
					<div class="media-entry">
						<a href="#">
							<img src="{{asset('Frontend/images/gal_3.jpg')}}" alt="Image" class="img-fluid postImg">
						</a>
						<div class="bg-white m-body">
							<span class="date">@lang('message.may') 14, 2020</span>
							<h3><a href="#">@lang('message.recent_posts_title3')</a></h3>
							<p>@lang('message.recent_posts_para3')</p>
							<a href="{{route('blog_details')}}" class="more d-flex align-items-center float-start">
								<span class="label">@lang('message.read_more')</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6 col-lg-3  mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
					<div class="media-entry">
						<a href="#">
							<img src="{{asset('Frontend/images/gal_4.jpg')}}" alt="Image" class="img-fluid postImg">
						</a>
						<div class="bg-white m-body">
							<span class="date">@lang('message.may') 14, 2020</span>
							<h3><a href="#">@lang('message.recent_posts_title4')</a></h3>
							<p>@lang('message.recent_posts_para4')</p>
							<a href="{{route('blog_details')}}" class="more d-flex align-items-center float-start">
								<span class="label">@lang('message.read_more')</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>		
	</div>
	

	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">@lang('message.news_ltr_title')</h2>
					<p class="mb-4 lead text-white text-white-opacity">@lang('message.news_ltr_para')</p>
   					<p class="mb-0"><a href="#" class="btn btn-outline-white btn-md font-weight-bold btn-cta">@lang('message.get_in_touch')</a></p>
				</div>
			</div>
		</div>
	</div>
	@endsection('content')