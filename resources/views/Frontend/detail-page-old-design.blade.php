@extends('Frontend.Layouts.main_master')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- 
	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				
				<img src="images/excursions-4.png" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10">
						<h1 class="heading" data-aos="fade-up">Explore the Extraordinary</h1>
						<div class="w-50 m-auto">
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-x-diamond banr-icon" viewBox="0 0 16 16">
										<path d="M7.987 16a1.53 1.53 0 0 1-1.07-.448L.45 9.082a1.53 1.53 0 0 1 0-2.165L6.917.45a1.53 1.53 0 0 1 2.166 0l6.469 6.468A1.53 1.53 0 0 1 16 8.013a1.53 1.53 0 0 1-.448 1.07l-6.47 6.469A1.53 1.53 0 0 1 7.988 16zM7.639 1.17 4.766 4.044 8 7.278l3.234-3.234L8.361 1.17a.51.51 0 0 0-.722 0M8.722 8l3.234 3.234 2.873-2.873c.2-.2.2-.523 0-.722l-2.873-2.873zM8 8.722l-3.234 3.234 2.873 2.873c.2.2.523.2.722 0l2.873-2.873zM7.278 8 4.044 4.766 1.17 7.639a.51.51 0 0 0 0 .722l2.874 2.873z"/>
									  </svg>
									<h3>Tailored </h3>
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
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-video banr-icon" viewBox="0 0 16 16">
										<path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
										<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"/>
									</svg>
									<h3>Expert Guides</h3>
								</div>
								<div class="top-bnr-icon">
									
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-globe-americas banr-icon" viewBox="0 0 16 16">
										<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
									  </svg>
									<h3>Locations</h3>
								</div>
							</div>	
						</div>	
					</div>
					
				</div>
			</div>
				
			
		</div>
		
	</div> -->

	<div class="section">
		<div class="container mt-5 pt-5">
			
			<div class="row ">
				<div class="col-lg-12 mb-4 mb-lg-0">
					<div>
						<h2 class="heading">Hurghada: 3-Hour Shopping Tour with Guide</h2>
					</div>
				</div>
				<div class="col-lg-12 mb-4 mb-lg-0">
					<div class="dtlPg-ratingWishlist">
						<div class="dtlPg-rating">
							<ul class="dtlPg-ratingStar list-unstyled">
								<li><i class="bi bi-star-fill backgroundFill"></i></li>
								<li><i class="bi bi-star-fill backgroundFill"></i></li>
								<li><i class="bi bi-star-fill backgroundFill"></i></li>
								<li><i class="bi bi-star-fill backgroundFill"></i></li>
								<li><i class="bi bi-star backgroundFill"></i></li>
							</ul>
							<div class="dtlPg-ratingNo text-orange">
								<span> 3.9 </span> <span> / </span> <span> 5 </span> 
							</div>
							<div class="dtlPg-reviews text-orange">
								<span> 14 reviews </span>
							</div>
						</div>
						<div>
							<p class="wishList text-blue"><i class="bi bi-heart text-orange"></i> Add to wishlist</p>
						</div>
					</div>
				</div>
				
				
				 
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- <img src="https://cdn.getyourguide.com/img/tour/5efef4296a2b5.png/98.jpg" alt="" class="img-fluid"> -->
					<img src="images/dtl12.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-3">
					<!-- <img src="https://cdn.getyourguide.com/img/tour/5efef42e49e9c.png/vertical_520_780.jpg" alt="" class="img-fluid" style="height:285px;width:100%;"> -->
					<img src="images/dtl2d.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 mb-3">
							<!-- <img src="https://cdn.getyourguide.com/img/tour/5efef42ec5b73.png/97.jpg" alt="" class="img-fluid"> -->
							<img src="images/dtl3.png" alt="" class="img-fluid">
						</div>
						<div class="col-md-12">
							<!-- <img src="https://cdn.getyourguide.com/img/tour/5efef44e4e706.png/97.jpg" alt="" class="img-fluid"> -->
							<img src="images/dtl4.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							<h6 class="topPara">Discover the shopping scene of Hurghada with a local guide to take you around the best shops and help you get the best prices.</h6>
							<h3 class="my-4">About this activity</h3>
							<div class="mb-2">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-calendar2-check text-orange"></i>
									<h6 class="title text-blue">Free cancellation</h6>
								</div>
								<p class="dtlpg-para">Cancel up to 24 hours in advance for a full refund</p>
							</div>
							<div class="mb-2">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-credit-card text-orange"></i>
									<h6 class="title text-blue">Reserve now & pay later</h6>
								</div>
								<p class="dtlpg-para">Keep your travel plans flexible — book your spot and pay nothing today.</p>
							</div>
							<div class="mb-2">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-clock-history text-orange"></i>
									<h6 class="title text-blue">Duration 3 hours</h6>
								</div>
								<p class="dtlpg-para">Check availability to see starting times.</p>
							</div>
							<div class="mb-3">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-shield-lock text-orange"></i>
									<h6 class="title text-blue">Skip the line through express security check</h6>
								</div>
							</div>
							<div class="mb-2">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-person text-orange"></i>
									<h6 class="title text-blue">Live tour guide</h6>
								</div>
								<p class="dtlpg-para">English</p>
							</div>
							<div class="mb-2">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-bus-front text-orange"></i>
									<h6 class="title text-blue">Pickup included</h6>
								</div>
								<p class="dtlpg-para">Please be ready to be picked up in front of your hotel lobby at least 5 minutes before your scheduled pickup time.</p>
							</div>
							<div class="mb-3">
								<div class="dtlpg-iconTxt">
									<i class="bi bi-people text-orange"></i>
									<h6 class="title text-blue">Private group</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="availabilityCard">
								<h3 class="text-orange mb-1">Select participants and date</h3>
								<div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6 position-relative mb-3">
										<span class="icon-users search-icons text-orange"></span>
										<input type="text" id="quantityInput" class="form-control availabilityInput" placeholder="Select passengers" readonly onclick="toggleQuantityDiv()">

										<!-- Quantity selection div, initially hidden -->
										<div id="quantityRangeDiv" class="mt-2 p-3 border rounded" style="display: none; position: absolute; background-color: white;">
											<div class="d-flex ">
												<div>
													<label>Participants</label>
													<label>(Age 99 and younger)</label>
												</div>	
												<div class="d-flex align-items-center">
													<button type="button" class="btn btn-outline-secondary btnQty" onclick="decreaseQuantity()">−</button>
													<input type="text" id="popupQuantityInput" class="form-control text-center mx-2 availabilityCount" value="1" readonly>
													<button type="button" class="btn btn-outline-secondary btnQty" onclick="increaseQuantity()">+</button>
												</div>
											</div>
										</div>
							
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 position-relative mb-3">
										<span class="icon-calendar search-icons text-orange"></span>
										<input type="date" class="form-control availabilityInput availabilityInput123" placeholder="Enter the date">
									</div>
									<div class="col-md-12">
										<a href="" class="btn btn-outline-white btn-cta w-100">Check availability</a>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="availabilityRultCard">
								<div class="d-flex justify-content-between align-items-center">
									<h3>Hurghada: 3-Hour Private Shopping Tour with Guide</h3>
									<i class="bi bi-arrow-up-short text-orange availabilityRultCardTopIcon"></i>
								</div>	
								<p><i class="bi bi-clock-history text-orange"></i> 3 hours</p>
								<div class="availabilityRultCardBT">
									<h6 class="select-time-title">Select a starting time</h6>								
									<p class=" ">Thursday, January 2, 2025</p>
									<select name="" id="" class="form-control custom-select" style="width:15%; border-radius:10px;padding-left: 19px;">
										<option value="">7:00 AM</option>
										<option value="">8:00 AM</option>
										<option value="">9:00 AM</option>
										<option value="">10:00 AM</option>
										<option value="">11:00 AM</option>
										<option value="">12:00 AM</option>
									</select>
								</div>
								<div class="availabilityRultCardBT">
									<div class="d-flex justify-content-between align-items-start">
										<div class="dtlpg-iconTxt">
											<i class="bi bi-calendar2-check text-orange"></i>
											<h6 class="title text-blue">Cancel before 10:00 AM on January 1 for a full refund</h6>
										</div>
										<div>
											<p>Price breakdown</p>
											<p>Participants1 × $52.65</p>
										</div>
										<div class="mt-auto">
											<p>$52.65</p>
										</div>
									</div>
										
									<div class="dtlpg-iconTxt">
										<i class="bi bi-credit-card text-orange"></i>
										<h6 class="title text-blue">You can reserve now & pay later with this activity option.</h6>
									</div>
									
								</div>
								<div class="availabilityRultCardBT">
									<div class="d-flex justify-content-between align-items-center">
										<div class="">
											<p class="mb-2">Total price</p>
											<h3 class=" text-blue">$52.65</h3>
											<p class="mb-0">All taxes and fees included</p>
										</div>
										<div>
											
											<a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal">Book now</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="dtlPageSpecCard">
								<h3 class="mb-3">Experience</h3>
								<div class="d-flex">
									<p class="dtlPageSpecCardSubTitle text-orange">Highlights</p>
									<div class="dtlPageSpecCardUl">
										<ul>
											<li>Enjoy a hassle free local shopping experience</li>
											<li>Spend 3 hours shopping with a local guide</li>
											<li>Visit the best shops for unique souvenirs</li>
											<li>Benefit from comfortable transfers in an air conditioned car</li>
										</ul>
									</div>
								</div>
								<div class="d-flex availabilityRultCardBT" style="border-color:#f7f7f7;">
									<p class="dtlPageSpecCardSubTitle text-orange">Full description</p>
									<div class="dtlPageSpecCardUl">
										<p class="mb-1">Feel confident you will find the best shops with the help of a local guide for your own private shopping trip. 
											Check out different types of shops, just let your guide know what you are interested in and receive help to get fixed prices.</p>
										<p class="text-orange mb-1" id="seeMore" >See more</p>
											<div  id="seeLessDiv" style="display:none;">
												<p class="mb-1">Feel confident you will find the best shops with the help of a local guide for your own private shopping trip. 
												Check out different types of shops, just let your guide know what you are interested in and receive help to get fixed prices.</p>
												<p class="text-orange mb-1" id="seeLessBtn">See Less</p>	
											</div>	
									</div>
								</div>
								<div class="d-flex availabilityRultCardBT" style="border-color:#f7f7f7;">
									<p class="dtlPageSpecCardSubTitle text-orange">Includes</p>
									<div class="dtlPageSpecCardUl">
										<ul class="list-inline ps-0">
											<li><i class="bi bi-check2 me-1 text-blue"></i> Hotel pickup and drop-off</li>
											<li><i class="bi bi-check2 me-1 text-blue"></i> Hotel pickup and drop-off</li>
											<li><i class="bi bi-x me-1 text-orange"></i> Purchases</li>
											<li><i class="bi bi-x me-1 text-orange"></i> Food and Drinks</li>
											<li><i class="bi bi-x me-1 text-orange"></i> Tips</li>
										</ul>
									</div>
								</div>
								<div class="d-flex availabilityRultCardBT" style="border-color:#f7f7f7;">
									<p class="dtlPageSpecCardSubTitle text-orange">Not suitable for</p>
									<div class="dtlPageSpecCardUl">
										<ul>
											<li>Enjoy a hassle free local shopping experience</li>
										</ul>
									</div>
								</div>
								<div class="d-flex availabilityRultCardBT pb-0" style="border-color:#f7f7f7;">
									<p class="dtlPageSpecCardSubTitle text-orange">Important information</p>
									<div class="dtlPageSpecCardUl">
										<p class="mb-2 text-orange">What to bring</p>
										<ul class="mb-0">
											<li>Comfortable shoes</li>
											<li>Camera</li>
											<li>Credit card</li>
											<li>Comfortable clothes</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dtlpageCardRyt">
						<div class="header">
							<p class="text-orange mb-0 text-end">Save up to 10%</p>
						</div>
						<div class="body">
							<div class="d-flex justify-content-between align-items-center">
								<div class="">
									<p class="mb-1">Form $52.65</p>
									<h3 class=" text-orange mb-0">$52.65</h3>
									<p class="mb-0">per group up to 3</p>
								</div>
								<a class="btn btn-primary w-50">Book now</a>
							</div>
							<div class="d-flex align-item-start mt-3">
								<i class="bi bi-credit-card text-orange me-2 fs-3"></i>
								<p class="title text-blue"> <a data-bs-toggle="modal" data-bs-target="#payModal"> Reserve now &amp; pay later</a> to book your spot and pay nothing today.</p>
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
					<h2 class="heading mb-3">You might also like</h2>
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
						<img src="images/img-1.jpg" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="images/img-2.jpg" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="images/img-3.jpg" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="images/img-4.jpg" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>


				<div class="destination">
					<div class="thumb">
						<img src="images/img-5.jpg" alt="Image" class="img-fluid">
						<div class="price">$430</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="images/img-6.jpg" alt="Image" class="img-fluid">
						<div class="price">$560</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="images/img-7.jpg" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
					</div>
				</div>

				<div class="destination">
					<div class="thumb">
						<img src="images/img-4.jpg" alt="Image" class="img-fluid">
						<div class="price">$490</div>
					</div>
					<div class="mt-4">
						<h3><a href="#">Paradise Beach, Palawan Island</a></h3>
						<span class="meta">Maldives, Repbulic Maldives</span>
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
					<p class="mb-0"><a href="booking.html" class="btn btn-outline-white btn-md font-weight-bold btn-cta">Get in touch</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<img src="images/logo.png" class="img-fluid"/>
						<p class="text-dark">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3 class="sclFtrTitle">Connect</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-lg-2 ml-auto">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">BLogs</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-lg-2">
					<div class="widget">
						<h3>Company</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->


				<div class="col-lg-3">
					<div class="widget">
						<h3 >Contact</h3>
						<address>43 Raymouth Rd. Baltemoer, London 3910</address>
						<ul class="list-unstyled links mb-4">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

			</div> <!-- /.row -->
		</div> 
		<div class="">
			<div class="row mt-3">
				<div class="col-12 text-center">
					<p class="mb-0 copyRight">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p>
				</div>
			</div> 
		</div> 
	</div>
	@endsection('content')
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		flatpickr('.availabilityInput123', {
			mode: 'range', // Enable date range selection
			dateFormat: 'm/d/Y', // Customize the date format
		});
	});

</script>

<script>
    document.getElementById('seeMore').addEventListener('click', function () {
        document.getElementById('seeMore').style.display = 'none'; // Hide the "See More" button
        document.getElementById('seeLessDiv').style.display = 'block'; // Show the "See Less" div
    });

    document.getElementById('seeLessBtn').addEventListener('click', function () {
        document.getElementById('seeLessDiv').style.display = 'none'; // Hide the "See Less" div
        document.getElementById('seeMore').style.display = 'block'; // Show the "See More" button
    });
</script>
		<div class="modal fade" id="payModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  	<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: initial;"></button>
				  		<h5 class="modal-title m-auto" id="exampleModalLabel">Reserve now & pay later</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<p>Keep your travel plans flexible when you reserve now and pay later. The payment due date depends on the payment method. Of course, you can also pay earlier if you like.</p>
								
							</div>
							
						</div>
							
					</div>
					 
			  	</div>
			</div>
		</div>
		<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  	<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: initial;"></button>
				  		<h5 class="modal-title m-auto" id="exampleModalLabel">Trip Booking</h5>
					</div>
					<div class="modal-body">
						<form class="p-3">
							<div class="row">
								<!-- Personal Information -->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="fullName" class="form-label">Full Name</label>
										<input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="email" class="form-label">Email Address</label>
										<input type="email" class="form-control" id="email" placeholder="Enter your email" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="phone" class="form-label">Phone Number</label>
										<input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
									</div>
								</div>

								<!-- Trip Details -->
								<div class="col-lg-6">
									<div class="mb-3">
										<label for="destination" class="form-label">Destination</label>
										<select class="form-select" id="destination" required>
										<option value="" disabled selected>Select a destination</option>
										<option value="paris">Paris</option>
										<option value="new-york">New York</option>
										<option value="tokyo">Tokyo</option>
										<option value="sydney">Sydney</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-6 mb-3">
									<label for="departureDate" class="form-label">Departure Date</label>
									<input type="date" class="form-control" id="departureDate" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="returnDate" class="form-label">Return Date</label>
									<input type="date" class="form-control" id="returnDate" required>
								</div>
								
								<!-- Number of Travelers -->
								<div class="col-md-6 mb-3">
									<label for="numTravelers" class="form-label">Number of Travelers</label>
									<input type="number" class="form-control" id="numTravelers" placeholder="Enter the number of travelers" min="1" required>
								</div>

								<!-- Additional Information -->
								<div class="col-md-12 mb-3">
									<label for="specialRequests" class="form-label">Special Requests</label>
									<textarea class="form-control" id="specialRequests" rows="3" placeholder="Enter any special requests or additional information"></textarea>
								</div>

								<!-- Submit Button -->
								<div class="d-grid mt-2">
									<button type="submit" class="btn btn-primary btn-lg">Book Now</button>
								</div>
							</div>
						</form> 
					</div>
					 
			  	</div>
			</div>
		</div>


		
