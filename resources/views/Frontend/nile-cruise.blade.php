@extends('Frontend.Layouts.main_master')
@section('content')


	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				<!-- <img src="images/banr/banr3.jpg" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{asset('Frontend/images/cruise.png')}}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container innerPages-container" >
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10">
						<h1 class="heading" data-aos="fade-up">@lang('message.nile_cruise_bnr_title')</h1>
						<div class="main-bnr-iconTxt">
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-speedometer2 banr-icon" viewBox="0 0 16 16">
										<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
										<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
									</svg>
									<h3>@lang('message.fast_safe')</h3>
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
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-houses banr-icon" viewBox="0 0 16 16">
  										<path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207z"/>
									</svg>
									<h3>@lang('message.accommodation')</h3>
								</div>
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cup-straw banr-icon" viewBox="0 0 16 16">
  										<path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82q0 .069-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87s-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A1 1 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278M9.768 4.607A14 14 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.3 3.3 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a6 6 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69s2.081-.441 2.438-.69c.042-.029.09-.094.102-.215l.852-8.03a6 6 0 0 1-.435.127 9 9 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006zM11.354 5a3 3 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222"/>
									</svg>
									
									<h3>@lang('message.dining')</h3>
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
						<h2>@lang('message.NileCruise')</h2>
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
						<h3><a href="{{route('detail_page')}}">@lang('message.egyptian_museum')</a></h3>
						<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-2.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}}">@lang('message.elephantine_island')</a></h3>
						<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-3.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}}">@lang('message.montaza_palace')</a></h3>
						<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-4.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}}">@lang('message.luxor_temple')</a></h3>
						<span class="meta">@lang('message.luxor'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-5.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}}">@lang('message.egyptian_museum')</a></h3>
						<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-6.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}}">@lang('message.elephantine_island')</a></h3>
						<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-7.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}}">@lang('message.montaza_palace')</a></h3>
						<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="{{ asset('Frontend/images/img-4.jpg') }}" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4 ryt-ar-align">
						<h3><a href="{{route('detail_page')}]">@lang('message.luxor_temple')</a></h3>
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



		
