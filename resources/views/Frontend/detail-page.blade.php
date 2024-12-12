@extends('Frontend.Layouts.main_master')
@section('content')

	<div class="position-relative">
		<div class="hero overlay innerPage" id="inerHero">
			<div class="img-bg rellax">
				<!-- <img src="images/pkg.png" alt="Image" class="img-fluid banr-img"> -->
				<!-- <img src="images/pkg-2.png" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{ asset('Frontend/images/pkg-6.png') }}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container innerPages-container">
				
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10">
						<h1 class="heading" data-aos="fade-up">@lang('message.dtl_page_bnr_title')</h1>
						<div class="main-bnr-iconTxt">
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-journal-text banr-icon" viewBox="0 0 16 16">
										<path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
										<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
										<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
									</svg>
									
									<h3>@lang('message.convenient_booking') </h3>
								</div>
								
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-tag banr-icon"  viewBox="0 0 16 16">
  										<path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
  										<path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
									</svg>
									<h3>@lang('message.affordable_pricing') </h3>
								</div>
							</div>
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt banr-icon" viewBox="0 0 16 16">
										<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
										<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
									  </svg>
									<h3>@lang('message.destinations') </h3>
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


	<div class="section bg-greyC pt-md-2 pt-0" id="priceSidebarSec">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3 mb-5 mb-lg-0">

					<div class="price-btn-sidebar" id="priceBtnSidebar">
						<button class="price-btn" onclick="showSection('tourDtls', this)">@lang('message.tours_details')</button>
						<button class="price-btn" onclick="showSection('tourPara', this)">@lang('message.tour_descrip_title') </button>
						<button class="price-btn" onclick="showSection('toursHigh', this)">@lang('message.tour_highlights')</button>
						<button class="price-btn" onclick="showSection('inExcard', this)">@lang('message.Tour_inclusions_exclusions')</button>
						<button class="price-btn" onclick="showSection('tourLtinerary', this)">@lang('message.tour_tinerary')</button>
						<!-- <button class="price-btn" onclick="showSection('gold', this)">Gold</button>
						<button class="price-btn" onclick="showSection('diamond', this)">Diamond</button> -->
						<button class="price-btn" onclick="showSection('bookWith', this)">@lang('message.book_with')</button>
						<button class="price-btn" onclick="showSection('affordable', this)">@lang('message.packages')</button>
						<button class="price-btn" onclick="showSection('gallery', this)">@lang('message.gallery')</button>
						<!-- <button class="price-btn" onclick="showSection('relatedTours', this)">Related Tours</button> -->
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row mt-2">
						<div class="price-topLine">
							<h3 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">@lang('message.dtl_page_bnr_title_col')</h3>
						</div>
					</div>	
					<!-- <div class="row mb-2">
						<div class="price-topLine">
							<h3 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">7 Days Cairo, Luxor, Aswan & Abu Simbel Include Edfu and Kom Ombo</h3>
							<div class="priceBtn-group">
								<a href="#" class="btn btn-primary">From &1130</a>
								<a href="#" class="btn btn-primary">Send to a friend</a>
								<a href="#" class="btn btn-primary">Send an Inquiry</a>
							</div>
						</div>
					</div>	 -->

					<!-- <div class="row" style="background: #ffffff; padding: 15px; border-radius: 56px; padding: 5px 0; box-shadow: 2px 2px 4px 2px #ddddddad; background-color: #fff;border: 2px solid #c5a538;background: linear-gradient( 90deg, rgb(65 128 169) 0%, rgb(39 102 145) 38%, rgb(93 145 194) 100%);background-image: url(https://www.egypttoursportal.com/images/2022/11/awards-card-background.webp);">
						<div class="col-lg-12">
						   	<div class="float-lg-start float-sm-none text-center" id="awards-h2-parent" style="border-right: 3px solid #fff; margin-top: 14px;">
							   <h2 class="mb-0 ms-4 me-3" id="awards-h2" style="width: 100px;margin-top: 0px;"><a style="vertical-align: middle; border: 0; font-size: 18px; font-weight: 500; font-family: oleo script swash caps; font-style: italic;color: #ffffff;" href="https://www.egypttoursportal.com/our-awards/"> Awards &amp; Recognitions </a></h2>
						   	</div>
						   	<ul style="display: flex; justify-content: space-around; flex-grow: 1;margin-top: 0.9rem;margin-bottom: 0.7rem;">
							  	<li style="list-style:none;"><a href="https://www.worldtravelawards.com/award-egypts-leading-travel-agency-2023" rel="nofollow" target="_blank"><img alt="ETP Award" width="75" height="75" style="width: 107px;height:auto" class=" lazyloaded" src="https://www.egypttoursportal.com/images/2022/11/Certificate-of-Egypt-Tours-Portal.webp" data-src="https://www.egypttoursportal.com/images/2022/11/Certificate-of-Egypt-Tours-Portal.webp"></a></li>
							  	<li style="list-style:none;"><a href="https://internationaltravelawards.org/app/winners-2021/africa" rel="nofollow" target="_blank"><img alt="ETP Award" width="134" height="75" style="width: 134px;height:auto" class=" lazyloaded" src="https://www.egypttoursportal.com/images/2022/11/Internatioal-Travel-Awards-Egypt-Tours-Portal.webp" data-src="https://www.egypttoursportal.com/images/2022/11/Internatioal-Travel-Awards-Egypt-Tours-Portal.webp"></a></li>
							  	<li style="list-style:none;"><a href="https://www.tripadvisor.com/Attraction_Review-g294201-d2109137-Reviews-Egypt_Tours_Portal-Cairo_Cairo_Governorate.php" rel="nofollow" target="_blank"><img alt="ETP Award" width="75" height="75" style="width: 75px;height:auto" class=" lazyloaded" src="https://www.egypttoursportal.com/images/2022/11/tripadvisor-travellers-choice-egypt-tours-portal.webp" data-src="https://www.egypttoursportal.com/images/2022/11/tripadvisor-travellers-choice-egypt-tours-portal.webp"></a></li>
							  	<li style="list-style:none;"><a href="https://thawards.com/egypt-tours-portal-is-a-travel-hospitality-award-winner-for-2020/" rel="nofollow" target="_blank"><img alt="ETP Award" width="75" height="75" style="width: 75px;height:auto" class=" lazyloaded" src="https://www.egypttoursportal.com/images/2022/11/Travel-and-Hospitality-awards-Egypt-Tours-Portal.webp" data-src="https://www.egypttoursportal.com/images/2022/11/Travel-and-Hospitality-awards-Egypt-Tours-Portal.webp"></a></li>
							  	<li style="list-style:none;"><a href="https://www.theworldluxurytravelawards.com/participant/egypt-tours-portal/" rel="nofollow" target="_blank"><img alt="ETP Award" width="70" height="75" class=" lazyloaded" src="https://www.egypttoursportal.com/images/2022/11/2022-Travel-Awards-Winner-Logo-1-min.webp" data-src="https://www.egypttoursportal.com/images/2022/11/2022-Travel-Awards-Winner-Logo-1-min.webp"></a></li>
							  	<li style="list-style:none;"><a href="https://www.egypttoursportal.com/iso-certification/" target="_blank"><img alt="ETP Award" width="70" height="75" class=" lazyloaded" src="https://www.egypttoursportal.com/images/2024/10/ISO_9001-2015-Copy-Gold.png" data-src="https://www.egypttoursportal.com/images/2024/10/ISO_9001-2015-Copy-Gold.png"></a></li>
						   	</ul>
						</div>
					</div> -->
					<div class="row" id="tourDtls">
						<div class="col-md-12">
							<div class="toursDetailsCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle">@lang('message.tours_details')</h3>
								</div>
								<div class="toursDetailsCard-body d-flex align-items-center justify-content-between">
									<div>
										<p class=" toursDetails-subTitle"><i class="bi bi-clock text-orange me-1"></i> @lang('message.duration')</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-geo text-orange me-1"></i> @lang('message.tour_location')</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-calendar-event text-orange me-1"></i> @lang('message.tour_availability')</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-geo-alt text-orange me-1"></i> @lang('message.pickup_drop')</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-airplane text-orange me-1"></i> @lang('message.tour_type')</p>
									</div>
									<div>
										<p class=" toursDetails-subPara">7 @lang('message.days') / 6 @lang('message.nights')</p>
										<p class=" toursDetails-subPara">@lang('message.cairo') / @lang('message.gaza') / @lang('message.aswan') / @lang('message.abu_simbel')</p>
										<p class=" toursDetails-subPara"> @lang('message.everday')  </p>
										<p class=" toursDetails-subPara"> @lang('message.cario_airport')  </p>
										<p class=" toursDetails-subPara"> @lang('message.classic_tour')</p>

									</div>
								</div> 
							</div>
						</div>
					</div>
					<div class="row" id="tourPara">
						<div class="col-md-12">
							<div class="toursDetailsCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle">@lang('message.tour_descrip_title_line')</h3>
								</div>
								<div class="toursDetailsCard-body d-flex align-items-center justify-content-between">
									<p>@lang('message.tour_descrip_para')
										<!-- <strong>7 Days Cairo, Luxor, Aswan &amp; Abu Simbel includes Edfu and Kom Ombo tour </strong>
										is the full package showcasing the rich history, glorious culture, and divine architecture of the ancient Egyptians. 
										Egypt Tours Portal will provide all our guests with the most ideal services of a private A/C Vehicle, relaxing accommodations, 
										and a skilled Egyptologist tour guide which is expected from the best travel agency in Egypt. All our clients will live the adventure 
										of dreams across the golden ancient Egyptian attractions during this entertaining 7 days tour across the historical miracles in the  -->
										<!-- <strong>
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener">top tourist destinations in Egypt</a></strong> which are Cairo, Luxor, Aswan, Abu Simbel, and Edfu &amp; Kom Ombo. During this blessed 
										adventure across the golden lands of Egypt, everyone will get to discover the art, history, and culture of ancient Cairo and Upper 
										Egypt through the <strong>
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener">Valley of the Kings</a>,</strong> <strong>
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener noreferrer">Karnak Temple</a></strong>,&nbsp;
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener noreferrer"><strong>Queen Hatshepsut temple</strong></a>, <strong>
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener">the Pyramids of Giza,</a></strong>&nbsp;
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener noreferrer"><strong>Philae Temple</strong></a>, the magnificent <strong>
										<a href="{{route('blog_details')}}" target="_blank" rel="noopener noreferrer">Abu Simbel Temple</a></strong>, 
										and other colossal historical monuments. Book this incredible tour across the great wonders of Egypt and make your time filled with 
										glory 
										and beauty. -->
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="toursHigh">
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-airplane me-2 text-orange"></i>@lang('message.tour_highlights')</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-md-4 position-relative">
											<div class="tour-afterLine">
												<h3 class="toursDetailsCard-title">@lang('message.cairo_attractions')</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.pyramids_giza')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.great_sphinx')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.valley_temple')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.grand_egyptian_museum')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.egyptian_museum')</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 position-relative">
											<div class="tour-afterLine">
												<h3 class="toursDetailsCard-title">@lang('message.luxor_attractions')</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.valley_kings')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.hatshepsut_temple')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.colossi_memnon')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.karnak_temple')</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 position-relative">
											<div class="">
												<h3 class="toursDetailsCard-title">@lang('message.aswan_attractions')</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.philae_temple')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.abu_simbel_temple')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.colossi_memnon')</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> @lang('message.karnak_temple')</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="inExcard">
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-airplane me-2 text-orange"></i>@lang('message.Tour_inclusions_exclusions')</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-md-6 position-relative">
											<div class="include-text ">
												<h3 class="toursDetailsCard-title">
												<span class="inclusion-icon me-1"><i class="bi bi-list-check text-orange"></i></span>@lang('message.Tour_inclusions') </h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-check2 me-1 text-orange"></i> @lang('message.tour_inclusions_li1')</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> @lang('message.tour_inclusions_li2')</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> @lang('message.tour_inclusions_li3')</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> @lang('message.tour_inclusions_li4')</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> @lang('message.tour_inclusions_li5')</li>
													<!-- <li><i class="bi bi-check2 me-1 text-orange"></i> Professional Egyptologist tour guide during your trips.</li> -->
													<!-- <li><i class="bi bi-check2 me-1 text-orange"></i> Domestic Flights between Cairo, Aswan, and Luxor.</li> -->
													<li><i class="bi bi-check2 me-1 text-orange"></i> @lang('message.tour_inclusions_li6')</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 position-relative">
											<div class="include-text ">
												<h3 class="toursDetailsCard-title">
													<span class="inclusion-icon me-1"><i class="bi bi-list-check text-orange"></i></span>@lang('message.Tour_exclusions')  </h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-x me-1 text-orange"></i> @lang('message.tour_exclusions_li1')</li>
													<li><i class="bi bi-x me-1 text-orange"></i> @lang('message.tour_exclusions_li2')</li>
													<li><i class="bi bi-x me-1 text-orange"></i> @lang('message.tour_exclusions_li3')</li>
													<li><i class="bi bi-x me-1 text-orange"></i> @lang('message.tour_exclusions_li4')</li>
												</ul>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4" id="tourLtinerary">
						<div class="col-md-12">
							<div class="text-center">
								<h3 class="toursDetailsTitle"><i class="bi bi-airplane me-2 text-orange"></i>@lang('message.tour_tinerary')</h3>
							</div>
							<div class="custom-accordion" id="accordion_2">
								<div class="accordion-item">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										@lang('message.tour_tinerary_title_line1')
										</button>
									</h2>
		
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{ asset('Frontend/images/a620.webp')}}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.dinner_time')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
															@lang('message.dinner_time_para')
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.overnight')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>@lang('message.overnight_para')</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div> <!-- .accordion-item -->
		
								<div class="accordion-item mt-3">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" 
										aria-controls="collapseTwo">@lang('message.tour_tinerary_title_line2')</button>
									</h2>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{ asset('Frontend/images/a620.webp') }}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.dinner_time')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																@lang('message.dinner_time_para')
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.overnight')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>@lang('message.overnight_para')</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div> <!-- .accordion-item -->
								<div class="accordion-item mt-3">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" 
										aria-controls="collapseThree">
										@lang('message.tour_tinerary_title_line3')</button>
									</h2>
		
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{ asset('Frontend/images/a620.webp') }}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.dinner_time')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																@lang('message.dinner_time_para')
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.overnight')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>@lang('message.overnight_para')</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
		
								</div> <!-- .accordion-item -->
		
		
								<div class="accordion-item mt-3">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" 
										aria-controls="collapseFour">@lang('message.tour_tinerary_title_line4')</button>
									</h2>
		
									<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{ asset('Frontend/images/a620.webp') }}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.dinner_time')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																@lang('message.dinner_time_para')
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>@lang('message.overnight')</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>@lang('message.overnight_para')</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
		
								</div> <!-- .accordion-item -->
		
							</div>
						</div>
					</div>

					
					<div class="row mt-3" id="bookWith">
						<div class="col-lg-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> @lang('message.book_with') </h3>
								</div>
								<div class="row">
									<div class="col-12 col-sm-12 col-md-6 col-lg-1"></div>
									<div class="col-12 col-sm-12 col-md-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="{{asset('Frontend/images/car_2a.png')}}" alt="" class="feature-icon"> -->
												<i class="bi bi-credit-card-2-front text-primary"></i>
												<h3 class="feature-iconTitle">@lang('message.pay_monthly')</h3>
											</div>
										</div>
									</div>	
									<div class="col-12 col-sm-12 col-md-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="{{asset('Frontend/images/car_2a.png')}}" alt="" class="feature-icon"> -->
												<i class="bi bi-headset text-primary"></i>
												<h3 class="feature-iconTitle">24/7 @lang('message.support')</h3>
											</div>
										</div>
									</div>	
									<div class="col-12 col-sm-12 col-md-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="{{asset('Frontend/images/car_2a.png')}}" alt="" class="feature-icon"> -->
												<i class="bi bi-tags text-primary"></i>
												<h3 class="feature-iconTitle">@lang('message.best_prices')</h3>
											</div>
										</div>
									</div>	
									<div class="col-12 col-sm-12 col-md-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="{{asset('Frontend/images/car_2a.png')}}" alt="" class="feature-icon"> -->
												<i class="bi bi-stars text-primary"></i>
												<h3 class="feature-iconTitle"> @lang('message.rated_star')</h3>
											</div>
										</div>
									</div>	
									<div class="col-12 col-sm-12 col-md-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="{{asset('Frontend/images/car_2a.png')}}" alt="" class="feature-icon"> -->
												<i class="bi bi-journal-text text-primary"></i>
												<h3 class="feature-iconTitle"> @lang('message.fast_booking')</h3>
											</div>
										</div>
									</div>	
									
									<div class="col-12 col-sm-12 col-md-6 col-lg-1"></div>
								</div>  
							</div>  
						</div>

					</div>
					<div class="row" id="affordable">
						<!-- <h3 class="heading" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: -20px;margin-top: 20px;">Tour Prices</h3> -->
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i>@lang('message.packages')</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
											<div class="pricing">
												<div class="pricing-item">
													<h3>@lang('message.from') @lang('message.may') @lang('message.to') @lang('message.sep') 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(@lang('message.per_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 3-5 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1984)</del>
																<span class="text-orange" style="font-weight: 600;"> 1660 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 4-6 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1970)</del>
																<span class="text-orange" style="font-weight: 600;"> 1860 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="mt-3 text-center">
														<a href="{{route('booking_payments')}}" class="btn btn-primary">@lang('message.book_now') </a>
													</div>
												</div>
												
											</div>
										</div><!-- End Pricing Item -->
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
											<div class="pricing">
												<div class="pricing-item featured">
													<h3>@lang('message.from') @lang('message.oct') 2024 @lang('message.to') @lang('message.aprl') 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(@lang('message.per_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2320 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2784)</del>
																<span class="text-orange" style="font-weight: 600;"> 2560 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2984)</del>
																<span class="text-orange" style="font-weight: 600;"> 2760 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(3000)</del>
																<span class="text-orange" style="font-weight: 600;"> 2300 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div> 
													<div class="mt-3 text-center">
														<a href="{{route('booking_payments')}}" class="btn btn-primary">@lang('message.book_now')</a>
													</div>
												</div>
											</div>
										</div><!-- End Pricing Item -->
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
											<div class="pricing">
												<div class="pricing-item">
													<h3> @lang('message.peak') (23 @lang('message.dec') 2024 - 7 @lang('message.jan') 2025) / (14 - 23 @lang('message.aprl') 2025)</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(@lang('message.per_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(3806)</del>
																<span class="text-orange" style="font-weight: 600;"> 3600 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(3700)</del>
																<span class="text-orange" style="font-weight: 600;"> 3535 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">  (@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(3184)</del>
																<span class="text-orange" style="font-weight: 600;"> 2200 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(@lang('message.traveller_person'))</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(4484)</del>
																<span class="text-orange" style="font-weight: 600;"> 3700 </span>
																<span> / @lang('message.adult')</span>
															</span>
														</p>
														
													</div>
													<div class="mt-3 text-center">
														<a href="{{route('booking_payments')}}" class="btn btn-primary">@lang('message.book_now')</a>
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3" id="gallery">
						<div class="col-lg-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> @lang('message.gallery') </h3>
								</div>
								<div class="row">
									<div class="destination-slider-wrap">
										<div class="gallery-slider">
											<div class="gallery">
												<img src="{{ asset('Frontend/images/g1.png') }}" alt="Image" class="img-fluid">
											</div>
							
											<div class="gallery">
												<img src="{{ asset('Frontend/images/g2.png') }}" alt="Image" class="img-fluid">
											</div>
							
											<div class="gallery">
												<img src="{{ asset('Frontend/images/g3.png') }}" alt="Image" class="img-fluid">
											</div>
							
											<div class="gallery">
												<img src="{{ asset('Frontend/images/g4.png') }}" alt="Image" class="img-fluid">
											</div>
							
											<!-- <div class="gallery">
												<img src="{{ asset('Frontend/images/g5.png') }}" alt="Image" class="img-fluid">
											</div> -->
							
											<!-- <div class="gallery">
													<img src="{{ asset('Frontend/images/g6.png') }}" alt="Image" class="img-fluid">
											</div>
							
											<div class="gallery">
													<img src="{{ asset('Frontend/images/g7.png') }}" alt="Image" class="img-fluid">
												
											</div>
							
											<div class="gallery">
													<img src="{{ asset('Frontend/images/g8.png') }}" alt="Image" class="img-fluid">
											</div> -->
							
										</div>
										<div id="gallery-controls">
											<span class="prev" data-controls="prev">
												<span class="icon-chevron-left"></span>
					
											</span>
											<span class="next" data-controls="next">
												<span class="icon-chevron-right"></span>
					
											</span>
										</div>
									</div>
								</div>  
							</div>  
						</div>

					</div>
				</div>
				
			</div>

		</div>		
	</div>

	<section class="video-section section">
		<div class="container">
			<div class="heading-content text-center pkgVdo-title" >
				<h2>@lang('message.reflective_honest')</h2>
			</div>
			<div class="row">
				<!-- Video Column 1 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video2.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 1</h5> -->
					</div>
				</div>
				<!-- Video Column 2 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video1.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 2</h5> -->
					</div>
				</div>
				<!-- Video Column 3 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video2.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 3</h5> -->
					</div>
				</div>
				<!-- Video Column 4 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video1.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 4</h5> -->
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Video Column 1 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video2.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 1</h5> -->
					</div>
				</div>
				<!-- Video Column 2 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video1.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 2</h5> -->
					</div>
				</div>
				<!-- Video Column 3 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video2.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 3</h5> -->
					</div>
				</div>
				<!-- Video Column 4 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{asset('Frontend/images/video/bnr-video1.mp4')}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 4</h5> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section bg-greyC">
		<div class="container">	
			<div class="heading-content text-center " >
				<h2> @lang('message.related_tours')</h2>
			</div>
			
			<div class="row mt-3" id="relatedTours">
				<div class="col-lg-12">
					<div class="row px-3 pt-2 pb-3">
						<!-- <div class="destination-slider-wrap"> -->
							<!-- <div class="destination-slider"> -->
								<div class="col-lg-4">
									<div class="destination destination-price bg-white">
										<div class="thumb">
											<img src="{{asset('Frontend/images/img-1.jpg')}}" alt="Image" class="img-fluid">
											<div class="price">$430</div>
										</div>
										<div class="mt-4">
											<h3><a href="{{route('excursions')}}">@lang('message.egyptian_museum') </a></h3>
											<span class="meta">@lang('message.cairo'), @lang('message.repbulic_egypt')</span>
										</div>
									</div>
								</div>	
								<div class="col-lg-4">
									<div class="destination destination-price bg-white">
										<div class="thumb">
											<img src="{{asset('Frontend/images/img-2.jpg')}}" alt="Image" class="img-fluid">
											<div class="price">$560</div>
										</div>
										<div class="mt-4">
											<h3><a href="{{route('nile_cruise')}}">@lang('message.elephantine_island')</a></h3>
											<span class="meta">@lang('message.aswan'), @lang('message.repbulic_egypt')</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4">	
									<div class="destination destination-price bg-white">
										<div class="thumb">
											<img src="{{asset('Frontend/images/img-3.jpg')}}" alt="Image" class="img-fluid">
											<div class="price">$490</div>
										</div>
										<div class="mt-4">
											<h3><a href="{{route('travel_package')}}">@lang('message.montaza_palace')</a></h3>
											<span class="meta">@lang('message.alexandria'), @lang('message.repbulic_egypt')</span>
										</div>
									</div>
								</div>
							<!-- </div> -->
						<!-- </div> -->
					</div>  
				</div>

			</div>
		</div>
	</div>


	<div class="section ">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content aos-init aos-animate" data-aos="fade-up">
						<h2>@lang('message.our_partners')</h2>
						<p>@lang('message.our_partners_line')</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
					<div class="partnerCard">
						<img class="" src="{{asset('Frontend/images/part1.svg')}}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
					<div class="partnerCard">
						<img class="" src="{{asset('Frontend/images/part1.svg')}}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
					<div class="partnerCard">
						<img class="" src="{{asset('Frontend/images/part1.svg')}}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
					<div class="partnerCard">
						<img class="" src="{{asset('Frontend/images/part1.svg')}}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
					<div class="partnerCard">
						<img class="" src="{{asset('Frontend/images/part1.svg')}}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
					<div class="partnerCard">
						<img class="" src="{{asset('Frontend/images/part1.svg')}}" alt="">
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


	<script>
			document.addEventListener("DOMContentLoaded", function () {
				const sections = document.querySelectorAll("#tourDtls, #tourPara, #toursHigh, #inExcard, #tourLtinerary, #bookWith, #gallery, #affordable");
				const buttons = document.querySelectorAll("#priceBtnSidebar .price-btn");

				// Map section IDs to button elements
				const buttonMap = {
					"tourDtls": buttons[0],
					"tourPara": buttons[1],
					"toursHigh": buttons[2],
					"inExcard": buttons[3],
					"tourLtinerary": buttons[4],
					"bookWith": buttons[5],
					"affordable": buttons[6],
					"gallery": buttons[7]
				};

				// Observer options
				const options = {
					root: null, // Use viewport as root
					rootMargin: "0px",
					threshold: 0.5 // 50% of the section is visible
				};

				// Intersection Observer callback
				function handleIntersect(entries) {
					entries.forEach(entry => {
						const sectionId = entry.target.id;

						if (entry.isIntersecting) {
							// Add active class to the corresponding button
							buttons.forEach(btn => btn.classList.remove("active"));
							buttonMap[sectionId].classList.add("active");
						}
					});
				}

				// Create the IntersectionObserver instance
				const observer = new IntersectionObserver(handleIntersect, options);

				// Observe each section
				sections.forEach(section => observer.observe(section));
			});


		</script>
		<script>
			document.addEventListener("scroll", function() {
				const header = document.querySelector(".site-nav");
				const inner = document.querySelector("#inerHero");
				if (window.scrollY > 50) { // Adjust scroll distance as needed
					header.classList.add("fixed-not-top");
					inner.classList.add("innerPage2");
				} else {
					header.classList.remove("fixed-top");
					inner.classList.add("innerPage2");
				}
			});
		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function () {
				const priceBtnSidebar = document.getElementById("priceBtnSidebar");
				const priceSidebarPkg = document.getElementById("priceSidebarSec");

				function toggleFixedPosition() {
					const sectionTop = priceSidebarPkg.offsetTop;
					const sectionBottom = sectionTop + priceSidebarPkg.offsetHeight;
					const scrollPosition = window.pageYOffset;
					const sidebarHeight = priceBtnSidebar.offsetHeight;

					// Add `fixed-price-btn` class when scrolling within the section
					if (scrollPosition >= sectionTop && scrollPosition < sectionBottom - sidebarHeight) {
						priceBtnSidebar.classList.add("fixed-price-btn");
						priceBtnSidebar.style.position = "fixed";
						priceBtnSidebar.style.top = "0px"; // Adjust top positioning as needed
					} else if (scrollPosition >= sectionBottom - sidebarHeight) {
						// Remove fixed positioning when reaching the bottom of the section
						priceBtnSidebar.classList.remove("fixed-price-btn");
						priceBtnSidebar.style.position = "absolute";
						priceBtnSidebar.style.top = `${sectionBottom - sidebarHeight - sectionTop}px`;
					} else {
						// Reset position if above the section
						priceBtnSidebar.classList.remove("fixed-price-btn");
						priceBtnSidebar.style.position = "";
						priceBtnSidebar.style.top = "";
					}
				}

				// Listen to the scroll event
				window.addEventListener("scroll", toggleFixedPosition);
			});



		</script>
		
	</body>
	</html>
