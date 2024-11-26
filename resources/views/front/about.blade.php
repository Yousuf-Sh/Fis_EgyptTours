@extends('front.master')
@section('content')
<main id="main">
    <section class="cta about-cta p-0">
      <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top" >Change is unavoidable</h1>
            <!-- <h4 class="" style="color:aliceblue;" >Adapt to change to become better, faster, global, recognized and profectable with TAMII Solutions</h4> -->
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <!-- <li>About Us</li> -->
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about bg-sec">
		<div class="container" data-aos="fade-up">
	
		  <div class="row pt-4">
			<div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
			  <!-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> -->
			  <!-- <img src="assets/img/why1.jpg" class="img-fluid" alt=""> -->
			  <!-- <img src="assets/img/why2.jpg" class="img-fluid" alt=""> -->
			  <!-- <img src="assets/img/why3.jpg" class="img-fluid" alt=""> -->
			  <!-- <img src="assets/img/choose-us-new.png" class="img-fluid animated" alt=""> -->
			  <!-- <img src="assets/img/info.png" class="img-fluid animated" alt=""> -->
			  <!-- <img src="assets/img/Info-graphy.png" class="img-fluid animated" alt=""> -->
			  <img src="{{asset('Backend/images/'.$choose->image)}}" class="img-fluid animated" alt="">
			  <!-- <img src="assets/img/timi/why1.png" class="img-fluid animated" alt=""> -->
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0  my-auto content" data-aos="fade-left" data-aos-delay="100">
			  <div class="section-title">
				@if($locale === 'ar') 
				<h2>{{$choose->arabic_title}}</h2>
			  </div> 
			  @else
			  <h2>{{$choose->title}}</h2>
			  @endif 
			  <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
			  @if($locale === 'ar')
			  <p class="fst-italic">
				{!!$choose->arabic_short_description!!}
			  </p>
			  @else
			  <p class="fst-italic">
				{!!$choose->short_description!!}
			  </p>
			  @endif 
			  {{-- <ul>
				<li><i class="bi bi-check-circle"></i> Global partner network</li>
				<li><i class="bi bi-check-circle"></i> Fluid distribution network</li>
				<li><i class="bi bi-check-circle"></i> Stringent quality control</li>
				<li><i class="bi bi-check-circle"></i> Amazing customer support</li>
				<li><i class="bi bi-check-circle"></i> Awesome team</li>
				<li><i class="bi bi-check-circle"></i> Super awesome web designer (Joking)</li>
			  </ul> --}}
			  <!-- <p>
				Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
				culpa qui officia deserunt mollit anim id est laborum
			  </p> -->
			</div>
		  </div>
	
		</div>
	  </section><!-- End About Section -->
    <!-- End About Section -->
    <!-- End Why Us Section -->
	<section id="new" class="vision2 bg-sec">
		<div class="container" data-aos="fade-up">
		  @if($locale === 'ar') 
		  <div class="section-title">
			<h2>{{$OurVisionhomepage->arabic_title}}</h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		  </div>
		  <div class="row">
			
			<div class="col-lg-4 col-md-12">
			  <div class="vision d-block bg-white rounded-lg shadow " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon d-flex align-items-center justify-content-center shadow">
				  <!-- <span class="bi bi-bar-chart"></span> -->
				  <!-- <span class="bi bi-brightness-alt-high"></span> -->
				  <span class="{{$OurVisionhomepage->arabic_logo}}"></span>
				</div>
				<div class="media-body">
				  <h4>{{$OurVisionhomepage->arabic_title1}}</h4>
				  <!-- <p>To be a market leader by providing unmatched quality services to multiple industries and add high value not only to our customers' business but to the end customers, our partners, and the communities where we operate.</p> -->
				  <p>{!!$OurVisionhomepage->arabic_short_description!!}</p>
				</div>
			  </div> 
			</div>
			<div class="col-lg-4 col-md-12">
			  <div class=" vision d-block bg-white rounded-lg shadow " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon d-flex align-items-center justify-content-center shadow">
				  <!-- <span class="bi bi-card-checklist"></span> -->
				  <span class="{{$OurVisionhomepage->arabic_logo1}}"></span>
				</div>
				<div class="media-body">
				  <h4>{{$OurVisionhomepage->arabic_title2}}</h4>
				  <p>{!!$OurVisionhomepage->arabic_short_description1!!}</p>
				</div>
			  </div> 
			</div>
			<div class="col-lg-4 col-md-12">
			  <div class=" vision d-block bg-white rounded-lg shadow " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon d-flex align-items-center justify-content-center shadow"><span class="bx bx-world"></span></div>
				<div class="media-body">
				  <h4>{{$OurVisionhomepage->arabic_title2}}</h4>
				  <p>{!!$OurVisionhomepage->arabic_short_description2!!}</p>
				</div>
			  </div> 
			</div>
	
		  </div>
		  <div class="row">
			<div class="col-md-12">
			  <img src="{{asset('Backend/images/'.$OurVisionhomepage->image)}}" class="img-fluid">
			</div>
		  </div>
		  
		  @else
		  <div class="section-title">
			<h2>{{$OurVisionhomepage->title}}</h2>
			<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
		  </div>
		  <div class="row">
			
			<div class="col-lg-4 col-md-12">
			  <div class="vision d-block bg-white rounded-lg shadow " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon d-flex align-items-center justify-content-center shadow">
				  <!-- <span class="bi bi-bar-chart"></span> -->
				  <!-- <span class="bi bi-brightness-alt-high"></span> -->
				  <span class="{{$OurVisionhomepage->logo}}"></span>
				</div>
				<div class="media-body">
				  <h4>{{$OurVisionhomepage->title1}}</h4>
				  <!-- <p>To be a market leader by providing unmatched quality services to multiple industries and add high value not only to our customers' business but to the end customers, our partners, and the communities where we operate.</p> -->
				  <p>{!!$OurVisionhomepage->short_description!!}</p>
				</div>
			  </div> 
			</div>
			<div class="col-lg-4 col-md-12">
			  <div class=" vision d-block bg-white rounded-lg shadow " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon d-flex align-items-center justify-content-center shadow">
				  <!-- <span class="bi bi-card-checklist"></span> -->
				  <span class="{{$OurVisionhomepage->logo1}}"></span>
				</div>
				<div class="media-body">
				  <h4>{{$OurVisionhomepage->title2}}</h4>
				  <p>{!!$OurVisionhomepage->short_description1!!}</p>
				</div>
			  </div> 
			</div>
			<div class="col-lg-4 col-md-12">
			  <div class=" vision d-block bg-white rounded-lg shadow " data-aos="zoom-in" data-aos-delay="100">
				<div class="icon d-flex align-items-center justify-content-center shadow"><span class="bx bx-world"></span></div>
				<div class="media-body">
				  <h4>{{$OurVisionhomepage->title2}}</h4>
				  <p>{!!$OurVisionhomepage->short_description2!!}</p>
				</div>
			  </div> 
			</div>
	
		  </div>
		  <div class="row">
			<div class="col-md-12">
			  <img src="{{asset('Backend/images/'.$OurVisionhomepage->image)}}" class="img-fluid">
			</div>
		  </div>
		  @endif
		</div>
	  </section>
    <!-- End Services Section -->
	<section id="why-us" class="why-us ">
		<div class="container" data-aos="fade-up">
	
		  <div class="row">
	
			<div class="col-lg-7 col-md-12" data-aos="zoom-out" data-aos-delay="150">
			  @if($locale === 'ar') 
			  <div class="content">
	
				<h3>{{$FAQ_title->arabic_tagline}}</h3>
				<!-- <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3> -->
				<!-- <p>
				  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
				</p> -->
			  </div>
	@else
	<div class="content">
	
	  <h3>{{$FAQ_title->tagline}}</h3>
	  <!-- <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3> -->
	  <!-- <p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
	  </p> -->
	</div>
	@endif 
			  <div class="accordion-list">
				@if($locale === 'ar') 
				@foreach($FAQ as $key => $FAQs)
					
					<ul>
					  <li>
						  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>{{$key}}</span>{{$FAQs->question_ar}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
						  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
							  <p>
								  {!!$FAQs->question_description_ar!!}
							  </p>
						  </div>
					  </li>
				  </ul>
				@endforeach
			@else
				@foreach($FAQ as $key => $FAQs)
				<ul>
				  <li>
					  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>{{$key}}</span>{{$FAQs->question}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
					  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
						  <p>
							  {!!$FAQs->question_description!!}
						  </p>
					  </div>
				  </li>
			  </ul>
				@endforeach
			@endif
			
				  
				
	
			   
			  </div>
	
			</div>
	
			<div class="col-lg-5 col-md-12 text-center my-auto" data-aos="zoom-in" data-aos-delay="150">
			  <!-- <img src="assets/img/timi/about1.png"> -->
			  <!-- <img src="assets/img/about-us.png"> -->
			  <img src="{{asset('Backend/images/'.$FAQ_title->image)}}" class="img-fluid">
			</div>
	
		</div>
	  </section>
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <div class="d-block"> <i class="bi bi-emoji-smile"></i></div>
              <div class="d-block">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              </div>  
              <p>Happy Clients</p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch pt-md-0 pt-4">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects </p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch pt-md-0 pt-4">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch pt-md-0 pt-4">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
              <!-- <a href="#">Find out more &raquo;</a> -->
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Counts Section -->
    <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio bg-sec">
        <div class="container" data-aos="fade-up">
			@if($locale === 'ar')
          <div class="section-title">
            <h2>{{$OurCustomers->arabic_title}}</h2>
          </div>
		  @else
		  <div class="section-title">
            <h2>{{$OurCustomers->title}}</h2>
          </div>
		  @endif

          <div class="row portfolio-container" data-aos="fade-left" data-aos-delay="200">
  @if($locale === 'ar')
          @foreach($About_us as $About)
            <div class="col-lg-3 col-md-6 portfolio-item ">
              <div class="portfolio-wrap">
                <img src="{{asset('Backend/images/'.$About->images1)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$About->arabic_title}}</h4>
                  <p>{{$About->arabic_date}}</p>
                  <div class="portfolio-links">
                    <a href="{{asset('Backend/images/'.$About->images2)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                      title="{{$About->arabic_title}}"><i class="bx bx-plus"></i></a>
                    <a href="{{$About->arabic_pagelink}}" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
			@endforeach

@else
@foreach($About_us as $About)
<div class="col-lg-3 col-md-6 portfolio-item ">
	<div class="portfolio-wrap">
	  <img src="{{asset('Backend/images/'.$About->images1)}}" class="img-fluid" alt="">
	  <div class="portfolio-info">
		<h4>{{$About->title}}</h4>
		<p>{{$About->date}}</p>
		<div class="portfolio-links">
		  <a href="{{asset('Backend/images/'.$About->images2)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" 
			title="{{$About->title}}"><i class="bx bx-plus"></i></a>
		  <a href="{{$About->link}}" title="More Details"><i class="bx bx-link"></i></a>
		</div>
	  </div>
	</div>
  </div>
@endforeach
			@endif
            </div>
          </div>
        </div>
      </section>
    <!-- End Portfolio Section -->

   

  </main><!-- End #main -->
@endsection