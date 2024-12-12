@extends('Frontend.Layouts.main_master')
@section('content')

		<div class="position-relative">
			<div class="hero overlay innerPage">
				<div class="img-bg rellax">
					<!-- <img src="images/banr/banr3.jpg" alt="Image" class="img-fluid banr-img"> -->
					<img src="{{ asset('Frontend/images/banr/bar9.png') }}" alt="Image" class="img-fluid banr-img">
				</div>
				<div class="container " style="margin-top:4.5rem;">
					<div class="row align-items-center justify-content-center rowPadding py-2">
						<div class="col-lg-10">
							<h1 class="heading" data-aos="fade-up">Travel effortlessly with transfers in 102 countries</h1>
							<!-- <p class="mb-5" data-aos="fade-up">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
							<div class="w-50 m-auto">
								<div class="feature-card">
									<div class="top-bnr-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-speedometer2 banr-icon" viewBox="0 0 16 16">
											<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
											<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
										</svg>
										<!-- <img src="images/svg/speedometer.svg" alt="Image" class="img-fluid banr-icon"> -->
										<h3>Fast & Safe</h3>
									</div>
									<div class="top-bnr-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hand-thumbs-up banr-icon" viewBox="0 0 16 16">
											<path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
										</svg>
										<!-- <img src="images/svg/01.svg" alt="Image" class="img-fluid banr-icon"> -->
										<h3>Best Price</h3>
									</div>
								</div>
								<div class="feature-card">
									<div class="top-bnr-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-car-front-fill banr-icon" viewBox="0 0 16 16">
											<path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
										</svg>
										<!-- <img src="images/svg/01.svg" alt="Image" class="img-fluid banr-icon"> -->
										<h3>Luxury Cars</h3>
									</div>
									<div class="top-bnr-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-video banr-icon" viewBox="0 0 16 16">
											<path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
											<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"/>
										</svg>
										<!-- <img src="images/svg/01.svg" alt="Image" class="img-fluid banr-icon"> -->
										<h3>Package Delivery</h3>
									</div>
								</div>	
							</div>	
						</div>
						
					</div>
				</div>
					
				
			</div>
			
		</div>



		<div class="section bg-light routeSec1">
			<div class="container">
				
				<div class="card mt-5 p-4">
					<div class="row">
						<div class="col-lg-12 mx-auto mb-3">
							<div class="heading-content aos-init aos-animate" data-aos="fade-up">
								<h2>Popular routes from Salzburg airport</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Salzburg</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Hallstatt</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>	
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Salzburg</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Hallstatt</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>	
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Salzburg</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Hallstatt</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>	
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3">
									<div class="d-flex flex-column p-3"><p class="mb-1">Salzburg Airport Wolfgang Amadeus Mozart</p> 
										<small class="text-muted text-orange">Salzburg</small>
									</div>
									<div class="price pt-3 pl-3">
										<span class="mb-2">Fixed</span>
										<h5><span>&dollar;</span>1,50</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-6">
							<a href="">
								<div class="d-flex flex-row justify-content-between mb-3 findRouteDiv">
									<h5 class="m-auto py-4">Find more routes</h5>
								</div>
							</a>	
						</div>
					</div>
					
					
				</div>	
			</div>
		</div>	

		<div class="section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-lg-6 mx-auto text-center">
						<div class="heading-content aos-init aos-animate" data-aos="fade-up">
							<h2>How It Work</h2>
							<p>Choose your pickup time and payment method to complete booking. A confirmation email with your voucher will follow.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
						<img class="d-none d-lg-block dotLine-img" src="https://shuffle.dev/flaro-assets/images/how-it-works/line4.svg" alt="" data-config-id="auto-img-1-5" data-path="0.0.1.0.0">
						<div class="service-1 howIiWork-card">
							<p class="workNo">1</p>
							<span class="icon">
								<span class="icon-car iconSC"></span>
								<!-- <img src="images/svg/01.svg" alt="Image" class="img-fluid"> -->
							</span>
							<div>
								<h3>Select route and car</h3>
								<p>You can order a vehicle of any capacity — from a Micro for two to a 19-seater bus.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
						<img class="d-none d-lg-block dotLine-img" src="https://shuffle.dev/flaro-assets/images/how-it-works/line4.svg" alt="" data-config-id="auto-img-1-5" data-path="0.0.1.0.0">
						<div class="service-1 howIiWork-card">
							<p class="workNo">2</p>
							<span class="icon">
								<span class="icon-file iconSC"></span>
								<!-- <img src="images/svg/02.svg" alt="Image" class="img-fluid"> -->
							</span>
							<div>
								<h3>Confirm Booking</h3>
								<p>Select your pickup details and payment method to confirm your booking. A voucher will be sent to your email upon completion.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
						<img class="d-none d-lg-block dotLine-img" src="https://shuffle.dev/flaro-assets/images/how-it-works/line4.svg" alt="" data-config-id="auto-img-1-5" data-path="0.0.1.0.0">
						<div class="service-1 howIiWork-card">
							<p class="workNo">3</p>
							<span class="icon">
								<span class="icon-cc-mastercard iconSC"></span>
								<!-- <img src="images/svg/03.svg" alt="Image" class="img-fluid"> -->
							</span>
							<div>
								<h3>Payment method</h3>
								<p>Choose your preferred payment option to complete your booking and receive a confirmation voucher via email.</p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
						<div class="service-1 howIiWork-card">
							<p class="workNo">4</p>
							<span class="icon">
								<span class="icon-arrow_upward iconSC"></span>
								<!-- <img src="images/svg/04.svg" alt="Image" class="img-fluid"> -->
							</span>
							<div>
								<h3>Airport Greet</h3>
								<p>The driver will be waiting for you on site at the scheduled time. They will guide you to the car and take you to your hotel.</p>
							</div>
						</div>
					</div>
					<!-- <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="400">
						<div class="service-1">
							<span class="icon">
								<img src="images/svg/04.svg" alt="Image" class="img-fluid">
							</span>
							<div>
								<h3>Airport Lounge Access</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<div class="section bg-light">
		
			<h2 class="heading mb-5 text-center">Reviews & Rating</h2>
	
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
								<img src="{{ asset('Frontend/images/person_1.jpg') }}" alt="Free template by TemplateUX">
								<h3>John Doe</h3>
								<p class="position ">CEO, Founder</p>
								<div class="mb-1">
									<span class="me-1 fs-6 align-text-bottom">
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									</span>
									
								</div>
							</div>
							<p class="testimonial-para">
							&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>
	
					<div class="item">
						<blockquote class="block-testimonial">
							<div class="author">
								<img src="{{ asset('Frontend/images/person_2.jpg') }}" alt="Free template by TemplateUX">
								<h3>James Woodland</h3>
								<p class="position ">Designer at Facebook</p>
								<div class="mb-1">
									<span class="me-1 fs-6 align-text-bottom">
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									</span>
									
								</div>
							</div>
							<p class="testimonial-para">
							&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
	
						</blockquote>
					</div>
	
					<div class="item">
						<blockquote class="block-testimonial">
							<div class="author">
								<img src="{{ asset('Frontend/images/person_3.jpg') }}" alt="Free template by TemplateUX">
								<h3>Rob Smith</h3>
								<p class="position ">Product Designer at Twitter</p>
								<div class="mb-1">
									<span class="me-1 fs-6 align-text-bottom">
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									</span>
									
								</div>
							</div>
							<p class="testimonial-para">
							&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
						</blockquote>
					</div>
	
					<div class="item">
						<blockquote class="block-testimonial">
							<div class="author">
								<img src="{{ asset('Frontend/images/person_1.jpg') }}" alt="Free template by TemplateUX">
								<h3>John Doe</h3>
								<p class="position ">CEO, Founder</p>
								<div class="mb-1">
									<span class="me-1 fs-6 align-text-bottom">
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									</span>
									
								</div>
							</div>
							<p class="testimonial-para">
							&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>
	
					<div class="item">
						<blockquote class="block-testimonial">
							<div class="author">
								<img src="{{ asset('Frontend/images/person_2.jpg') }}" alt="Free template by TemplateUX">
								<h3>James Woodland</h3>
								<p class="position ">Designer at Facebook</p>
								<div class="mb-1">
									<span class="me-1 fs-6 align-text-bottom">
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									</span>
									
								</div>
							</div>
							<p class="testimonial-para">
							&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
	
						</blockquote>
					</div>
	
					<div class="item">
						<blockquote class="block-testimonial">
							<div class="author">
								<img src="{{ asset('Frontend/images/person_3.jpg') }}" alt="Free template by TemplateUX">
								<h3>Rob Smith</h3>
								<p class="position ">Product Designer at Twitter</p>
								<div class="mb-1">
									<span class="me-1 fs-6 align-text-bottom">
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
									  </svg>
									</span>
									
								</div>
							</div>
							<p class="testimonial-para">
							&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
						</blockquote>
					</div>
				</div>
			</div>
	
		</div> 
		<div class="section">
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

		<div class="untree_co-section section bg-light">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="heading-content aos-init aos-animate" data-aos="fade-up">
							<h2 class="section-title text-center mb-3">Our Services</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row align-items-stretch">
					<div class="col-lg-4 order-lg-1">
						<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
					</div>
	
					<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >
	
						<div class="feature-1 d-md-flex">
							<div class="align-self-center">
								<!-- <span class="icon-car display-4 text-primary"></span> -->
								<img src="{{ asset('Frontend/images/car_1a.png') }}" alt="" class="feature-icon">
								<h3 class="feature-iconTitle">Budget</h3>
								<p class="mb-0">For a couple or a family with a child.</p>
							</div>
						</div>
	
						<div class="feature-1 ">
							<div class="align-self-center">
								<!-- <span class="flaticon-restaurant display-4 text-primary"></span> -->
								<img src="{{ asset('Frontend/images/car_2a.png') }}" alt="" class="feature-icon">
								<h3 class="feature-iconTitle">Business class</h3>
								<p class="mb-0">For comfortable business trips.</p>
							</div>
						</div>
	
					</div>
	
					<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >
	
						<div class="feature-1 d-md-flex">
							<div class="align-self-center">
								<!-- <span class="bi bi-ship display-4 text-primary"><i class="bi bi-ship"></i></span> -->
								<img src="{{ asset('Frontend/images/car_3a.png') }}" alt="" class="feature-icon">
								<h3 class="feature-iconTitle">Spacious</h3>
								<p class="mb-0">For groups of up to 19 people or large baggage.</p>
							</div>
						</div>
	
						<div class="feature-1 d-md-flex">
							<div class="align-self-center">
								<span class="flaticon-phone-call display-4 text-primary"></span>
								<h3 class="feature-iconTitle">Other Services</h3>
								<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
							</div>
						</div>
	
					</div>
	
				</div>
			</div>
		</div>
		<!-- <div class="untree_co-section count-numbers py-5">
			<div class="container">
				<div class="row">
					<div class="four col-md-3">
						<div class="counter-box colored"> <i class="icon-thumbs-o-up"></i> <span class="counter">2147</span>
							<p>Happy Customers</p>
						</div>
					</div>
					<div class="four col-md-3">
						<div class="counter-box colored"> <i class="icon-group"></i> <span class="counter">3275</span>
							<p>Registered Members</p>
						</div>
					</div>
					<div class="four col-md-3">
						<div class="counter-box colored"> 
							<i class="icon-car"></i> 
							<span class="counter">289</span>
							<p>Available Rides</p>
						</div>
					</div>
					<div class="four col-md-3">
						<div class="counter-box colored"> <i class="icon-user"></i> <span class="counter">1563</span>
							<p>Saved Trees</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<div class="py-5 cta-section">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12">
						<h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
						<p class="mb-4 lead text-white text-white-opacity">Begin your adventurous journey here.</p>
						<p class="mb-0"><a href="#" class="btn btn-outline-white btn-md font-weight-bold btn-cta">Get in touch</a></p>
					</div>
				</div>
			</div>
		</div>
		@endsection('content')
