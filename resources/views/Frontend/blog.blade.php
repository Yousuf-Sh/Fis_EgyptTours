@extends('Frontend.Layouts.main_master')
@section('content')

	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				<!-- <img src="images/banr/banr3.jpg" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{ asset('Frontend/images/gBnr.png') }}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container inner2pages-container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-10">
						<h1 class="heading" data-aos="fade-up">@lang('message.blogs')</h1>
					</div>
					
				</div>
			</div>
				
			
		</div>
		
	</div>



	<div class="section">
		<div class="container">

			
			<div class="row align-items-stretch">
				@foreach($blogs as $blog)
					
				
				<div class="col-12 col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
						<a href="#">
							<img src="{{asset($blog->image)}}" alt="Image" class="img-fluid postImg">
						</a>
						<div class="bg-white m-body">
							<span class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
							<h3><a href="#">{{ $blog->title }}</a></h3>
							<p>{{ $blog->content }}</p>

							<a href="{{route('blog_details')}}" class="more d-flex align-items-center float-start">
								<span class="label">@lang('message.read_more')</span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
				@endforeach
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