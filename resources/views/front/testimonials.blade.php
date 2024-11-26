@extends('front.master')
@section('content')
<main id="main">
    <!-- <section class="page-title"
        style="background-image: url(https://fisdemoprojects.com/ftpest/assets/img/innerpage.webp);">
        <div class="auto-container">
            <h1>Testimonials</h1>
            <ul class="page-breadcrumb">
            </ul>
        </div>
    </section> -->
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">
         @if($locale==='ar')
         
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
              @foreach($testinomial as $key=> $test)
              <div class="swiper-slide">
                  <div class="testimonial-item ">
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <img src="{{asset('Backend/images/'.$test->image)}}" class="testimonial-img" alt="">
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  <p>
                   {{$test->arabic_description}}
                  </p>
                  <h3> {{$test->arabic_name}} <span> {{$test->arabic_Customer}}</span></h3>
                </div>
              </div><!-- End testimonial item -->
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        @else
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach($testinomial as $key=> $test)
            <div class="swiper-slide">
                <div class="testimonial-item ">
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <img src="{{asset('Backend/images/'.$test->image)}}" class="testimonial-img" alt="">
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                <p>
                 {{$test->description}}
                </p>
                <h3> {{$test->name}} <span> {{$test->Customer}}</span></h3>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
        @endif
        
        </div>
      </section><!-- End Testimonials Section -->
</main>
@endsection
