@extends('Frontend.Layouts.main_master')
@section('content')

	<div class="position-relative">
		<div class="hero overlay innerPage" id="inerHero">
			<div class="img-bg rellax">
				<!-- <img src="images/pkg.png" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{ asset('Frontend/images/pkg-2.png') }}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container innerPages-container" >
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10">
						<h1 class="heading" data-aos="fade-up">@lang('message.travel_pkg_bnr_title') </h1>
						<div class="main-bnr-iconTxt">
							<div class="feature-card">
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt banr-icon" viewBox="0 0 16 16">
										<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
										<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
									  </svg>
									<h3>@lang('message.destinations') </h3>
								</div>
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hand-thumbs-up banr-icon" viewBox="0 0 16 16">
										<path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
									</svg>
									<h3>@lang('message.best_price')</h3>
								</div>
							</div>
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-speedometer2 banr-icon" viewBox="0 0 16 16">
										<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
										<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
									</svg>
									<h3>@lang('message.itineraries') </h3>
								</div>
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cassette banr-icon" viewBox="0 0 16 16">
										<path d="M4 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2m9-1a1 1 0 1 1-2 0 1 1 0 0 1 2 0M7 6a1 1 0 0 0 0 2h2a1 1 0 1 0 0-2z"/>
										<path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zM1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-.691l-1.362-2.724A.5.5 0 0 0 12 10H4a.5.5 0 0 0-.447.276L2.19 13H1.5a.5.5 0 0 1-.5-.5zM11.691 11l1 2H3.309l1-2z"/>
									</svg>
									<h3>@lang('message.exclusive_deals')</h3>
								</div>
							</div>	
						</div>	
					</div>
					
				</div>
			</div>
				
			
		</div>
		
	</div>

	<div class="section">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 mb-1 mb-sm-4 mb-lg-0 text-center">
					<div class="heading-content" data-aos="fade-up">
						<h2>@lang('message.TourPackage')</h2>
					</div>
				</div>
			</div>

			
			<div class="row mt-3">
				<div class="col-lg-12">
					<div class="d-flex align-items-center justify-content-between">
						<p class="mb-0 item-found">19 @lang('message.activities_found')</p>
						<div class="btn-group">
							<button type="button" class="btn dropdown-btn dropdown-toggle sortDropdwon" data-bs-toggle="dropdown" aria-expanded="false">
							@lang('message.sort_by'):
							</button>
							<ul class="dropdown-menu excursions-dropdown">
								<li>
									<a class="dropdown-item" href="#"> 
										<div class="form-check"> 
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											<label class="form-check-label" for="exampleCheck1">@lang('message.recommended')</label>
										</div>
									</a>
									
								</li>
								<li>
									<a class="dropdown-item" href="#">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											<label class="form-check-label" for="exampleCheck2">@lang('message.price') - @lang('message.low_high')</label>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="#">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											<label class="form-check-label" for="urdu">@lang('message.price') - @lang('message.high_low')</label>
										</div>
									</a>
								</li>
								<!-- <li>
									<a class="dropdown-item" href="#">
										<div class="form-check">
											<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
											<label class="form-check-label" for="urdu">Rating</label>
										</div>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
	
			
			<div class="row mt-3">
				<div class="col-lg-3">
					<div class="service-2 left-0 activity-card">
						<img src="https://cdn.getyourguide.com/img/tour/5efef4296a2b5.png/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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
						<img src="https://cdn.getyourguide.com/img/tour/8dc707a52aef59cfd983c139f21ca7635104c8e105b632cd64c7a9fdb2c976ab.jpg/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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
						<img src="https://cdn.getyourguide.com/img/tour/d662faacfd7e5a2f89651fd5882a5d8df2a098c76485981d9b33c0f32fe52e91.jpg/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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
						<img src="https://cdn.getyourguide.com/img/tour/63126ce597ad4.jpeg/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"> <h3>@lang('message.special_offers_card_title')</h3></a>
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
			<div class="row mt-3">
				<div class="col-lg-3">
					<div class="service-2 left-0 activity-card">
						<img src="https://cdn.getyourguide.com/img/tour/5efef4296a2b5.png/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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
						<img src="https://cdn.getyourguide.com/img/tour/8dc707a52aef59cfd983c139f21ca7635104c8e105b632cd64c7a9fdb2c976ab.jpg/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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
						<img src="https://cdn.getyourguide.com/img/tour/d662faacfd7e5a2f89651fd5882a5d8df2a098c76485981d9b33c0f32fe52e91.jpg/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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
						<img src="https://cdn.getyourguide.com/img/tour/63126ce597ad4.jpeg/132.jpg" alt="Image" class="img-fluid mb-3 rounded">
						<div class="activity-card-body">
							<a href="{{route('detail_page')}}"><h3>@lang('message.special_offers_card_title')</h3></a>
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



	<div class="section section-3 bg-greyC" data-aos="fade-up" data-aos-delay="100">
		<div class="container">
			<div class="row align-items-center justify-content-between  mb-5">
				<div class="col-lg-5" data-aos="fade-up">
					<h2 class="heading mb-3">@lang('message.nile_cruise_related_title')</h2>
					<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> -->
				</div>		
				<div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
					<div id="destination-controls">
						<span class="prev me-3" data-controls="prev">
							<span class="icon-chevron-left"></span>

						</span>
						<span class="next" data-controls="next">
							<span class="icon-chevron-right"></span>
						</span>
					</div>
				</div>
			</div>	

		</div>		

		<div class="destination-slider-wrap">
			<div class="destination-slider">
				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-1.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.egyptian_museum')</a></h3>
						<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-2.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.elephantine_island')</a></h3>
						<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-3.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.montaza_palace')</a></h3>
						<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-4.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.luxor_temple')</a></h3>
						<span class="meta">@lang('message.luxor'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-5.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.egyptian_museum')</a></h3>
						<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-6.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.elephantine_island')</a></h3>
						<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-7.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.montaza_palace')</a></h3>
						<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-4.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{ route('detail_page') }}">@lang('message.luxor_temple')</a></h3>
						<span class="meta">@lang('message.luxor'), @lang('message.repbulic_egypt')</span>
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

		
