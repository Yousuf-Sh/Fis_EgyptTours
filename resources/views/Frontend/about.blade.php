@extends('Frontend.Layouts.main_master')
@section('content')
	

	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				<!-- <img src="images/banr/banr3.jpg" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{asset('Frontend/images/gBnr.png')}}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container inner2pages-container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-12">
						<h1 class="heading" data-aos="fade-up">@lang('message.AboutUs') </h1>
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
							<img src="{{asset($cmsData['explore-more']->image1)}}" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
				<div class="col-xl-4 col-lg-6 order-lg-1 col-lg-4 col-md-6">
					<div>
						<h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100"> {{ $cmsData['explore-more']->title}}</h2>

						<p data-aos="fade-up" data-aos-delay="200">{!! $cmsData['explore-more']->short_description!!}</p>

						<!-- <p data-aos="fade-up" data-aos-delay="300">@lang('message.story_part_two')</p> -->
 
					</div>
				</div>
				
			</div>

		</div>		
	</div>

	<div class="section service-section-1">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-12 mb-4 mb-lg-0 text-md-start text-center">
					<div class="heading-content" data-aos="fade-up">
						<!-- <h2>Our <span class="d-block">Philosphy</span></h2> -->
						<h2>@lang('message.about_sec2_title')</h2>
						<p>@lang('message.about_sec2_title_para')</p>
						<!-- <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p> -->
					</div>
				</div>
				<div class="col-lg-9 col-md-12">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
							<div class="service-1">
								<span class="icon">
									<img src="{{asset('Frontend/images/svg/01.svg')}}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>@lang('message.about_sec2_c1_title')</h3>
									<p>@lang('message.about_sec2_c2_para')</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
							<div class="service-1">
								<span class="icon">
									<img src="{{asset('Frontend/images/svg/02.svg')}}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>@lang('message.about_sec2_c2_title')</h3>
									<p>@lang('message.about_sec2_c2_para')</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
							<div class="service-1">
								<span class="icon">
									<img src="{{asset('Frontend/images/svg/03.svg')}}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>@lang('message.about_sec2_c3_title')</h3>
									<p>@lang('message.about_sec2_c3_para')</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="400">
							<div class="service-1">
								<span class="icon">
									<img src="{{asset('Frontend/images/svg/04.svg')}}" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>@lang('message.about_sec2_c4_title')</h3>
									<p>@lang('message.about_sec2_c4_para')</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- <div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content" data-aos="fade-up">
						<h2 class="heading">@lang('message.about_sec3_title')</h2>
						<p>@lang('message.about_sec3_subtitle')</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<a href="#" class="person">
						<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Image" class="img-fluid mb-4 brdrRds">
						<span class="subheading d-inline-block">@lang('message.team1_pos')</span>
						<h3 class="mb-3">@lang('message.team_mem1') </h3>
						<p class="text-muted">@lang('message.team1_para')</p>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<a href="#" class="person">
						<img src="{{asset('Frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4 brdrRds">
						<span class="subheading d-inline-block">@lang('message.team2_pos')</span>
						<h3 class="mb-3">@lang('message.team_mem2') </h3>
						<p class="text-muted">@lang('message.team2_para')</p>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<a href="#" class="person">
						<img src="{{asset('Frontend/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-4 brdrRds">
						<span class="subheading d-inline-block">@lang('message.team3_pos')</span>
						<h3 class="mb-3">@lang('message.team_mem3')</h3>
						<p class="text-muted">@lang('message.team3_para')</p>   
					</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<a href="#" class="person">
						<img src="{{asset('Frontend/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4 brdrRds">
						<span class="subheading d-inline-block">@lang('message.team4_pos')</span>
						<h3 class="mb-3">@lang('message.team_mem4')</h3>
						<p class="text-muted">@lang('message.team4_para')</p>
					</a>
				</div>
			</div>
		</div>
	</div> -->

	

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

	
