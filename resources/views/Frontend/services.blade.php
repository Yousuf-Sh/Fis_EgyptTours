@extends('Frontend.Layouts.main_master')
@section('content')
	

	<div class="hero overlay">

		<div class="img-bg rellax">
			<img src="{{ asset('Frontend/images/hero_2.jpg') }}" alt="Image" class="img-fluid">
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-5">

					<h1 class="heading" data-aos="fade-up">Services</h1>
					<p class="mb-5" data-aos="fade-up">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

					<div data-aos="fade-up">
						<a href="https://www.youtube.com/watch?v=5n-e6lOhVq0" class="play-button align-items-center d-flex glightbox3" >
							<span class="icon-button me-3">
								<span class="icon-play"></span>
							</span>
							<span class="caption">Watch Video</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		
	</div>



	<div class="section service-section-1">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 mb-4 mb-lg-0">
					<div class="heading-content" data-aos="fade-up">
						<h2>Featured <span class="d-block">Servicwes</span></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
							<div class="service-1">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/01.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Tourism</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
							<div class="service-1">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/02.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Package Tours</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
							<div class="service-1">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/03.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Travel Insurance</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="400">
							<div class="service-1">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/04.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Airport Lounge Access</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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

				<div class="col-lg-3 mb-4 mb-lg-0">
					<div class="heading-content" data-aos="fade-up">
						<h2>Featured <span class="d-block">Servicwes</span></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="100">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/01.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Tourism</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="200">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/02.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Package Tours</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="300">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/03.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Travel Insurance</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="400">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/04.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Airport Lounge Access</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="100">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/01.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Tourism</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="200">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/02.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Package Tours</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="300">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/03.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Travel Insurance</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="400">
							<div class="service-1 left-0 mb-5">
								<span class="icon">
									<img src="{{ asset('Frontend/images/svg/04.svg') }}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Airport Lounge Access</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content" data-aos="fade-up">
						<h2>Featured Servicwes</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="service-2 left-0 mb-5">
						<img src="{{ asset('Frontend/images/gal_5.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
						<div>
							<h3>Airport Lounge Access</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="more">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-2 left-0 mb-5">
						<img src="{{ asset('Frontend/images/gal_6.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
						<div>
							<h3>Airport Lounge Access</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="more">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-2 left-0 mb-5">
						<img src="{{ asset('Frontend/images/gal_3.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
						<div>
							<h3>Airport Lounge Access</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="more">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="service-2 left-0 mb-5">
						<img src="{{ asset('Frontend/images/gal_4.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
						<div>
							<h3>Airport Lounge Access</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="more">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	

	@endsection('content')