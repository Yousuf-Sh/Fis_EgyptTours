@extends('front.master')
@section('content')

  <main id="main">
  <!-- <section class="cta py-0" style="background-image: url(assets/img/uniform-safety.jpg)"> -->
    <section class="cta py-0" style="background-image: url({{ asset('Backend/images/'. $UnifomAndSafety->image1)}})">
 
      <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$UnifomAndSafety->arabic_tagline}}</h1>
          </div>
          @else
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$UnifomAndSafety->tagline}}</h1>
          </div>
          @endif
        </div>
      </div>
     
    </section>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        @if($locale === 'ar')
        <ol>
          <li><a href="{{url('/')}}">بيت</a></li>
        </ol>
        @else
        <ol>
            <li><a href="{{url('/')}}">Home</a></li>
          </ol>
        @endif
        @if($locale === 'ar')
        <h2>{{$UnifomAndSafety->arabic_title}}</h2>
@else
<h2>{{$UnifomAndSafety->title}}</h2>
@endif
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Our Skills Section ======= -->
    <section id="" class="about mb-lg-4 mb-2">
      <div class="container" data-aos="fade-up">

        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            @if($locale === 'ar')
          <h2 class="mb-2">{{$UnifomAndSafety->arabic_tagline}}</h2>
          @else
<h2>{{$UnifomAndSafety->tagline}}</h2>

@endif
          
        </div>

        <div class="row content">
            @if($locale === 'ar')
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <img src="{{ asset('Backend/images/'. $UnifomAndSafety->image)}}" class="img-fluid" alt="" style="border-radius: 15px;">
          </div>
          @else
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <img src="{{ asset('Backend/images/'. $UnifomAndSafety->image)}}" class="img-fluid" alt="" style="border-radius: 15px;">
          </div>

@endif

@if($locale === 'ar')
          <div class="col-lg-6 pt-4 pt-lg-0 content " data-aos="fade-left" data-aos-delay="200">
            <!-- <h3></h3> -->
            <p>
                {!!$UnifomAndSafety->arabic_short_description!!}
            </p>
            
          </div>
          @else
          <div class="col-lg-6 pt-4 pt-lg-0 content " data-aos="fade-left" data-aos-delay="200">
            <!-- <h3></h3> -->
            <p>
                {!!$UnifomAndSafety->short_description!!}
            </p>
          </div>
          @endif
        </div>

      </div>
    </section>
    
    <!-- End Our Skills Section -->
    <!-- ======= Our Skills Section ======= -->
  
    <!-- End Our Skills Section -->
    

    

  </main><!-- End #main -->

  @endsection