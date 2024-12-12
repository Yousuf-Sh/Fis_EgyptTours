@extends('Frontend.Layouts.main_master')
@section('content')

	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				<img src="{{asset('Frontend/images/excursions-4.png')}}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container innerPages-container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10"> 
						<h1 class="heading" data-aos="fade-up">@lang('message.excursions_bnr_title')</h1>
						<div class="main-bnr-iconTxt">
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-diamond banr-icon" viewBox="0 0 16 16">
										<path d="M7.987 16a1.53 1.53 0 0 1-1.07-.448L.45 9.082a1.53 1.53 0 0 1 0-2.165L6.917.45a1.53 1.53 0 0 1 2.166 0l6.469 6.468A1.53 1.53 0 0 1 16 8.013a1.53 1.53 0 0 1-.448 1.07l-6.47 6.469A1.53 1.53 0 0 1 7.988 16zM7.639 1.17 4.766 4.044 8 7.278l3.234-3.234L8.361 1.17a.51.51 0 0 0-.722 0M8.722 8l3.234 3.234 2.873-2.873c.2-.2.2-.523 0-.722l-2.873-2.873zM8 8.722l-3.234 3.234 2.873 2.873c.2.2.523.2.722 0l2.873-2.873zM7.278 8 4.044 4.766 1.17 7.639a.51.51 0 0 0 0 .722l2.874 2.873z"/>
									  </svg>
									<h3>@lang('message.tailored') </h3>
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
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-video banr-icon" viewBox="0 0 16 16">
										<path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
										<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"/>
									</svg>
									<h3>@lang('message.expert_guide')</h3>
								</div>
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-globe-americas banr-icon" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
									  </svg>
									<h3>@lang('message.locations')</h3>
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

				<div class="col-lg-12 mb-1 mb-sm-4 mb-lg-0 ">
					<div class="heading-content text-center" data-aos="fade-up">
						<h2>@lang('message.Excursions') </h2>
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
											<ldetail_page="form-check-label" for="urdu">Rating</ldetail_page=>
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
								<p>
									<a class="more">
										<span class="text-blue">@lang('message.from')</span> 
										<span class="text-orange">$48.20</span>
									</a>
								</p>
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
									<p class="activity-price__old-price">
										<span class="text-muted">@lang('message.from')</span> 
										<span class="text-muted">$48.20</span>
									</p>
								</div>
								<p>
									<a class="more">
										<span class="text-blue">@lang('message.from')</span> 
										<span class="text-orange">$48.20</span>
									</a>
								</p>
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
					<h2 class="heading mb-3">@lang('message.excursions_related_title')</h2>
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
						<img src="{{asset('Frontend/images/img-1.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4 ryt-ar-align"> 
						<h3><a href="{{route('excursions')}}">@lang('message.egyptian_museum')</a></h3>
						<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-2.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.elephantine_island')</a></h3>
						<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-3.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.montaza_palace')</a></h3>
						<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-4.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.luxor_temple')</a></h3>
						<span class="meta ">@lang('message.luxor'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-5.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.egyptian_museum')</a></h3>
						<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-6.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.elephantine_island')</a></h3>
						<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-7.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.montaza_palace')</a></h3>
						<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{asset('Frontend/images/img-4.jpg')}}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('excursions')}}">@lang('message.luxor_temple')</a></h3>
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




		
