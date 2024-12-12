@extends('Frontend.Layouts.main_master')
@section('content')

	<div class="position-relative">
		<div class="hero overlay innerPage" id="inerHero">
			<div class="img-bg rellax">
				<!-- <img src="images/pkg.png" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{ asset('Frontend/images/pkg-2.png') }}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10">
						<h1 class="heading" data-aos="fade-up"> Curated Travel Packages for Every Explorer</h1>
						<div class="w-50 m-auto">
							<div class="feature-card">
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-geo-alt banr-icon" viewBox="0 0 16 16">
										<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
										<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
									  </svg>
									<h3>Destinations </h3>
								</div>
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hand-thumbs-up banr-icon" viewBox="0 0 16 16">
										<path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
									</svg>
									<h3>Best Price</h3>
								</div>
							</div>
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-speedometer2 banr-icon" viewBox="0 0 16 16">
										<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
										<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
									</svg>
									<h3>Itineraries </h3>
								</div>
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cassette banr-icon" viewBox="0 0 16 16">
										<path d="M4 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2m9-1a1 1 0 1 1-2 0 1 1 0 0 1 2 0M7 6a1 1 0 0 0 0 2h2a1 1 0 1 0 0-2z"/>
										<path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zM1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-.691l-1.362-2.724A.5.5 0 0 0 12 10H4a.5.5 0 0 0-.447.276L2.19 13H1.5a.5.5 0 0 1-.5-.5zM11.691 11l1 2H3.309l1-2z"/>
									</svg>
									<h3>Exclusive Deals</h3>
								</div>
							</div>	
						</div>	
					</div>
					
				</div>
			</div>
				
			
		</div>
		
	</div>


	<div class="section bg-greyC pt-2" id="priceSidebarSec">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 mb-5 mb-lg-0">

					<div class="price-btn-sidebar" id="priceBtnSidebar">
						<button class="price-btn" onclick="showSection('tourDtls', this)">Tours Details</button>
						<button class="price-btn" onclick="showSection('tourPara', this)">Tour Descriptions </button>
						<button class="price-btn" onclick="showSection('toursHigh', this)">Tour Highlights</button>
						<button class="price-btn" onclick="showSection('inExcard', this)">Inclusions & Exclusions</button>
						<button class="price-btn" onclick="showSection('tourLtinerary', this)">Tour Ltinerary</button>
						<button class="price-btn" onclick="showSection('tourPara', this)">Packages</button>
						<!-- <button class="price-btn" onclick="showSection('gold', this)">Gold</button>
						<button class="price-btn" onclick="showSection('diamond', this)">Diamond</button> -->
						<button class="price-btn" onclick="showSection('bookWith', this)">Book</button>
						<button class="price-btn" onclick="showSection('gallery', this)">Gallery</button>
						<button class="price-btn" onclick="showSection('relatedTours', this)">Related Tours</button>
					</div>
				</div>
				<div class="col-lg-9">
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
									<h3 class="toursDetailsTitle">Tours Details</h3>
								</div>
								<div class="toursDetailsCard-body d-flex align-items-center justify-content-between">
									<div>
										<p class=" toursDetails-subTitle"><i class="bi bi-clock text-orange me-1"></i> Duration</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-geo text-orange me-1"></i> Tour Location</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-calendar-event text-orange me-1"></i> Tour Availability</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-geo-alt text-orange me-1"></i> Pickup & Drop Off</p>
										<p class=" toursDetails-subTitle"><i class="bi bi-airplane text-orange me-1"></i> Tour Type</p>
									</div>
									<div>
										<p class=" toursDetails-subPara">7 Days / 6 Nights</p>
										<p class=" toursDetails-subPara">Cairo / Gaza / Aswan / Abu Simbel</p>
										<p class=" toursDetails-subPara"> Eeverday  </p>
										<p class=" toursDetails-subPara"> Cario Airport </p>
										<p class=" toursDetails-subPara"> Classic Tour</p>

									</div>
								</div> 
							</div>
						</div>
					</div>
					<div class="row" id="tourPara">
						<div class="col-md-12">
							<div class="toursDetailsCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle">7 Days Tour to Cairo and Upper Egypt</h3>
								</div>
								<div class="toursDetailsCard-body d-flex align-items-center justify-content-between">
									<p>
										<strong>7 Days Cairo, Luxor, Aswan &amp; Abu Simbel includes Edfu and Kom Ombo tour </strong>
										is the full package showcasing the rich history, glorious culture, and divine architecture of the ancient Egyptians. 
										Egypt Tours Portal will provide all our guests with the most ideal services of a private A/C Vehicle, relaxing accommodations, 
										and a skilled Egyptologist tour guide which is expected from the best travel agency in Egypt. All our clients will live the adventure 
										of dreams across the golden ancient Egyptian attractions during this entertaining 7 days tour across the historical miracles in the 
										<strong>
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
										and beauty.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row" id="toursHigh">
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-airplane me-2 text-orange"></i>Tour Highlights</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-md-4 position-relative">
											<div class="tour-afterLine">
												<h3 class="toursDetailsCard-title">Cairo Attractions</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> The Pyramids of Giza</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> The Great Sphinx</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> The Valley Temple</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> The Grand Egyptian Museum</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> The Egyptian Museum</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 position-relative">
											<div class="tour-afterLine">
												<h3 class="toursDetailsCard-title">Luxor Attractions</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Valley of The Kings</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Hatshepsut Temple</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Colossi of Memnon</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Karnak Temple</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4 position-relative">
											<div class="">
												<h3 class="toursDetailsCard-title">Aswan Attractions</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Philae Temple</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Abu Simbel Temple</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Colossi of Memnon</li>
													<li><i class="bi bi-geo-alt me-1 text-orange"></i> Karnak Temple</li>
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
									<h3 class="toursDetailsTitle"><i class="bi bi-airplane me-2 text-orange"></i>Tour Inclusions and Exclusions</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-md-6 position-relative">
											<div class="include-text ">
												<h3 class="toursDetailsCard-title">
												<span class="inclusion-icon me-1"><i class="bi bi-list-check text-orange"></i></span> Tour Inclusions</h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-check2 me-1 text-orange"></i> Meet and Greet service at the airports.</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> Accommodations in 5* Hotel in Cairo.</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> Accommodations in 5* Hotel in Luxor.</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> Accommodations in 5* Hotel in Aswan.</li>
													<li><i class="bi bi-check2 me-1 text-orange"></i> Entrance fees to all sites in the itinerary.</li>
													<!-- <li><i class="bi bi-check2 me-1 text-orange"></i> Professional Egyptologist tour guide during your trips.</li> -->
													<!-- <li><i class="bi bi-check2 me-1 text-orange"></i> Domestic Flights between Cairo, Aswan, and Luxor.</li> -->
													<li><i class="bi bi-check2 me-1 text-orange"></i> Meals are included during your itinerary.</li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 position-relative">
											<div class="include-text ">
												<h3 class="toursDetailsCard-title">
													<span class="inclusion-icon me-1"><i class="bi bi-list-check text-orange"></i></span> Tour Exclusions </h3>
												<ul class="toursDetails-ul">
													<li><i class="bi bi-x me-1 text-orange"></i> International Airfare.</li>
													<li><i class="bi bi-x me-1 text-orange"></i> Egypt entry visa.</li>
													<li><i class="bi bi-x me-1 text-orange"></i> Drinks and any personal expenses.</li>
													<li><i class="bi bi-x me-1 text-orange"></i> Optional tours.</li>
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
								<h3 class="toursDetailsTitle"><i class="bi bi-airplane me-2 text-orange"></i>Tour Ltinerary</h3>
							</div>
							<div class="custom-accordion" id="accordion_2">
								<div class="accordion-item">
									<h2 class="mb-0">
										<button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Day One:  Arrival to Egypt Land of Pharaohs
										</button>
									</h2>
		
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{asset('Frontend/images/a620.webp')}}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Dinner Time</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																In the evening time, start your trip by enjoying a Dinner Cruise with your tour guide, sit back, and relax while you enjoy a colorful belly dancing show with a folklore band, featuring the unforgettable Tannoura spin, in keeping with Egypt's whirling dervishes tradition.
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Overnight</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>After that back to your hotel for the overnight.</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div> <!-- .accordion-item -->
		
								<div class="accordion-item mt-3">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How to create your paypal account?</button>
									</h2>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{asset('Frontend/images/a620.webp')}}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Dinner Time</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																In the evening time, start your trip by enjoying a Dinner Cruise with your tour guide, sit back, and relax while you enjoy a colorful belly dancing show with a folklore band, featuring the unforgettable Tannoura spin, in keeping with Egypt's whirling dervishes tradition.
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Overnight</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>After that back to your hotel for the overnight.</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div> <!-- .accordion-item -->
								<div class="accordion-item mt-3">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to link your paypal and bank account?</button>
									</h2>
		
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{asset('Frontend/images/a620.webp')}}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Dinner Time</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																In the evening time, start your trip by enjoying a Dinner Cruise with your tour guide, sit back, and relax while you enjoy a colorful belly dancing show with a folklore band, featuring the unforgettable Tannoura spin, in keeping with Egypt's whirling dervishes tradition.
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Overnight</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>After that back to your hotel for the overnight.</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
		
								</div> <!-- .accordion-item -->
		
		
								<div class="accordion-item mt-3">
									<h2 class="mb-0">
										<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We are better than others?</button>
									</h2>
		
									<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
										<div class="accordion-body">
											<div class="row">
												<div class="col-md-4">
													<img class="w-100" src="{{asset('Frontend/images/a620.webp')}}" alt="" style="border-radius: 10px;">
												</div>
												<div class="col-md-8">
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Meal-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Dinner Time</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>
																In the evening time, start your trip by enjoying a Dinner Cruise with your tour guide, sit back, and relax while you enjoy a colorful belly dancing show with a folklore band, featuring the unforgettable Tannoura spin, in keeping with Egypt's whirling dervishes tradition.
															</p>
														</div>
													</div>
													<div>
														<div class="cardTour-content">
															<img class="me-2" src="https://www.egypttoursportal.com/images/2022/06/Overnight-Icon-Egypt-Tours-Portal.jpg" alt="" height="50">
															<h3>Overnight</h3>
														</div>	
														<div class="cardTour-content-sub">
															<p>After that back to your hotel for the overnight.</p>
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

					<div class="row" id="affordable">
						<h3 class="heading" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: -20px;margin-top: 20px;">Tour Prices</h3>
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i>Packages</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
											<div class="pricing">
												<div class="pricing-item">
													<h3>From May to Sep 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													
												</div>
											</div>
										</div><!-- End Pricing Item -->
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
											<div class="pricing">
												<div class="pricing-item featured">
													<h3>From Mry 24 to Sep 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
														
													
												</div>
											</div>
										</div><!-- End Pricing Item -->
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
											<div class="pricing">
												<div class="pricing-item">
													<h3>Peak (23 Dec 2024 - 7 Jan 2025) / (14 - 23 Apr 2025)</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row" id="gold">
						<h3 class="heading" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: -20px;margin-top: 20px;">Tour Prices</h3>
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> Gold (5 Star Standard) </h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
											<div class="pricing">
												<div class="pricing-item">
													<h3>From May to Sep 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													
												</div>
											</div>
										</div>
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
											<div class="pricing">
												<div class="pricing-item featured">
													<h3>From Mry 24 to Sep 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
														
													
												</div>
											</div>
										</div>
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
											<div class="pricing">
												<div class="pricing-item">
													<h3>Peak (23 Dec 2024 - 7 Jan 2025) / (14 - 23 Apr 2025)</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="row" id="diamond">
						<h3 class="heading" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: -20px;margin-top: 20px;">Tour Prices</h3>
						<div class="col-md-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> Diamond (5 Star Luxury)</h3>
								</div>
								<div class="toursDetailsCard-body">
									<div class="row">
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
											<div class="pricing">
												<div class="pricing-item">
													<h3>From May to Sep 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													
												</div>
											</div>
										</div>
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
											<div class="pricing">
												<div class="pricing-item featured">
													<h3>From Mry 24 to Sep 2025</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
														
													
												</div>
											</div>
										</div>
								
										<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
											<div class="pricing">
												<div class="pricing-item">
													<h3>Peak (23 Dec 2024 - 7 Jan 2025) / (14 - 23 Apr 2025)</h3>
													<div class="priceDiv ">
														<p class="mb-0">
															<span> Solo </span> 
															<span style="font-size: 11px;">(Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(2806)</del>
																<span class="text-orange" style="font-weight: 600;"> 2600 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													<div class="priceDiv mt-2">
														<p class="mb-0">
															<span> 2-4 </span> 
															<span style="font-size: 11px;">(Traveller Per Person)</span>
														</p>
														<p class="mb-0 text-end">
															
															<span class="price" >
																<span class="text-orange" style="font-size: 16px;font-weight: 600;">$</span> 
																<del  style=" text-decoration: line-through !important;font-size: 12px; ">(1784)</del>
																<span class="text-orange" style="font-weight: 600;"> 1560 </span>
																<span> / Adult</span>
															</span>
														</p>
														
													</div>
													
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<div class="row mt-3" id="bookWith">
						<div class="col-lg-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> Book With Confidence </h3>
								</div>
								<div class="row">
									<div class="col-6 col-sm-6 col-lg-1"></div>
									<div class="col-6 col-sm-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="images/car_2a.png" alt="" class="feature-icon"> -->
												<i class="bi bi-credit-card-2-front text-primary"></i>
												<h3 class="feature-iconTitle">Pay Monthly</h3>
											</div>
										</div>
									</div>	
									<div class="col-6 col-sm-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="images/car_2a.png" alt="" class="feature-icon"> -->
												<i class="bi bi-headset text-primary"></i>
												<h3 class="feature-iconTitle">24/7 Support</h3>
											</div>
										</div>
									</div>	
									<div class="col-6 col-sm-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="images/car_2a.png" alt="" class="feature-icon"> -->
												<i class="bi bi-tags text-primary"></i>
												<h3 class="feature-iconTitle">Best Prices</h3>
											</div>
										</div>
									</div>	
									<div class="col-6 col-sm-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="images/car_2a.png" alt="" class="feature-icon"> -->
												<i class="bi bi-stars text-primary"></i>
												<h3 class="feature-iconTitle">Rated 5 Star</h3>
											</div>
										</div>
									</div>	
									<div class="col-6 col-sm-6 col-lg-2">
										<div class="pakg-feature-card">
											<div class="align-self-center">
												<!--x <img src="images/car_2a.png" alt="" class="feature-icon"> -->
												<i class="bi bi-journal-text text-primary"></i>
												<h3 class="feature-iconTitle">Fast Booking</h3>
											</div>
										</div>
									</div>	
									
									<div class="col-6 col-sm-6 col-lg-1"></div>
								</div>  
							</div>  
						</div>

					</div>
					<div class="row mt-3" id="gallery">
						<div class="col-lg-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> Gallery </h3>
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
												<img src="images/g5.png" alt="Image" class="img-fluid">
											</div> -->
							
											<!-- <div class="gallery">
													<img src="images/6.png" alt="Image" class="img-fluid">
											</div>
							
											<div class="gallery">
													<img src="images/g7.png" alt="Image" class="img-fluid">
												
											</div>
							
											<div class="gallery">
													<img src="images/g8.png" alt="Image" class="img-fluid">
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
					<div class="row mt-3" id="relatedTours">
						<div class="col-lg-12">
							<div class="toursHighCard">
								<div class="text-center">
									<h3 class="toursDetailsTitle"><i class="bi bi-coin me-2 text-orange"></i> Related Tours </h3>
								</div>
								<div class="row px-3 pt-2 pb-3">
									<!-- <div class="destination-slider-wrap"> -->
										<!-- <div class="destination-slider"> -->
											<div class="col-lg-4">
												<div class="destination destination-price">
													<div class="thumb">
														<img src="{{ asset('Frontend/images/img-1.jpg') }}" alt="Image" class="img-fluid">
														<div class="price">$430</div>
													</div>
													<div class="mt-4">
														<h3><a href="{{route('detail_page'}}">Egyptian Museum</a></h3>
														<span class="meta">Cairo, Repbulic Egypt</span>
													</div>
												</div>
											</div>	
											<div class="col-lg-4">
												<div class="destination destination-price">
													<div class="thumb">
														<img src="{{ asset('Frontend/images/img-2.jpg') }}" alt="Image" class="img-fluid">
														<div class="price">$560</div>
													</div>
													<div class="mt-4">
														<h3><a href="{{route('detail_page')}}">Elephantine Island</a></h3>
														<span class="meta">Aswan, Repbulic Egypt</span>
													</div>
												</div>
											</div>
											<div class="col-lg-4">	
												<div class="destination destination-price">
													<div class="thumb">
														<img src="{{ asset('Frontend/images/img-3.jpg') }}" alt="Image" class="img-fluid">
														<div class="price">$490</div>
													</div>
													<div class="mt-4">
														<h3><a href="{{route('detail_page')}}">Montaza Palace</a></h3>
														<span class="meta">Alexandria, Repbulic Egypt</span>
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
				
			</div>

		</div>		
	</div>

	<section class="video-section section">
		<div class="container">
			<div class="heading-content text-center pkgVdo-title" >
				<h2>Reflective & Honest Reviews</h2>
			</div>
			<div class="row">
				<!-- Video Column 1 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video2.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 1</h5> -->
					</div>
				</div>
				<!-- Video Column 2 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video1.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 2</h5> -->
					</div>
				</div>
				<!-- Video Column 3 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video2.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 3</h5> -->
					</div>
				</div>
				<!-- Video Column 4 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video4.mp4') }}" type="video/mp4">
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
							<source src="{{ asset('Frontend/images/video/bnr-video2.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 1</h5> -->
					</div>
				</div>
				<!-- Video Column 2 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video1.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 2</h5> -->
					</div>
				</div>
				<!-- Video Column 3 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video2.mp4') }}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<!-- <h5 class="mt-2 text-center">Video Title 3</h5> -->
					</div>
				</div>
				<!-- Video Column 4 -->
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="video-wrapper">
						<video class="w-100 pkgVdo" controls>
							<source src="{{ asset('Frontend/images/video/bnr-video1.mp4') }}" type="video/mp4">
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
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content aos-init aos-animate" data-aos="fade-up">
						<h2>Our Partners</h2>
						<p>Choose your pickup time and payment method to complete booking. A confirmation email with your voucher will follow.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
					<div class="partnerCard">
						<img class="" src="{{ asset('Frontend/images/part1.svg') }}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
					<div class="partnerCard">
						<img class="" src="{{ asset('Frontend/images/part1.svg') }}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
					<div class="partnerCard">
						<img class="" src="{{ asset('Frontend/images/part1.svg') }}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
					<div class="partnerCard">
						<img class="" src="{{ asset('Frontend/images/part1.svg') }}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
					<div class="partnerCard">
						<img class="" src="{{ asset('Frontend/images/part1.svg') }}" alt="">
					</div>
				</div>
				<div class="col-6 col-md-6 col-lg-2 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
					<div class="partnerCard">
						<img class="" src="{{ asset('Frontend/images/part1.svg') }}" alt="">
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
					<p class="mb-4 lead text-white text-white-opacity">Begin your adventurous journey here.</p>
					<p class="mb-0"><a href="" class="btn btn-outline-white btn-md font-weight-bold btn-cta">Get in touch</a></p>
				</div>
			</div>
		</div>
	</div>

	
	@endsection('content')
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
		<script>
			document.addEventListener("DOMContentLoaded", function () {
				const sections = document.querySelectorAll("#tourDtls, #tourPara, #toursHigh, #inExcard, #tourLtinerary, #affordable, #bookWith, #gallery, #relatedTours");
				const buttons = document.querySelectorAll("#priceBtnSidebar .price-btn");

				// Map section IDs to button elements
				const buttonMap = {
					"tourDtls": buttons[0],
					"tourPara": buttons[1],
					"toursHigh": buttons[2],
					"inExcard": buttons[3],
					"tourLtinerary": buttons[4],
					"affordable": buttons[5],
					"bookWith": buttons[6],
					"gallery": buttons[7],
					"relatedTours": buttons[8]
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
	</body>
	</html>