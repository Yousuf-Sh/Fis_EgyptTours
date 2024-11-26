@extends('front.master')
@section('content')
  <main id="main">
    <section class="cta py-0" style="background-image: url({{ asset('Backend/images/'.$IOT->image)}})">
      <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$IOT->arabic_tagline}}</h1>
          </div>
          @else
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$IOT->tagline}}</h1>
          </div>
          @endif
        </div>
      </div>
      <!-- <img src="assets/img/iot3.jpg" class="img-fluid"> -->
      <!-- <img src="assets/img/timi/Tamimi-IT-and-technology.jpg" class="img-fluid w-100"> -->
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
        <h2>{{$IOT->arabic_title}}</h2>
@else
<h2>{{$IOT->title}}</h2>
@endif
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="" class="services">
      <div class="container">
        @if($locale === 'ar')
        <div class="section-title" data-aos="fade-up" data-aos-delay="100">
          <h2 class="mb-2">{{$UnifomAndSafety->arabic_tagline1}}</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p> -->
        </div>
@else
<div class="section-title" data-aos="fade-up" data-aos-delay="100">
    <h2 class="mb-2">{{$UnifomAndSafety->tagline1}}</h2>
    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p> -->
  </div>
@endif
        <div class="row mb-md-4 mb-1" data-aos="fade-right" data-aos-delay="100">
            @if($locale === 'ar')
            @foreach($iotModule as $iotModules)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="{{$iotModules->logo}}"></i></div>
              <h4>{{$iotModules->arabic_title}}</h4>
              <p>{!!$iotModules->arabic_short_description!!}</p>
            </div>
          </div>
@endforeach
@else
@foreach($iotModule as $iotModules)
<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
    <div class="icon-box">
        <div class="icon"><i class="{{$iotModules->logo}}"></i></div>
        <h4>{{$iotModules->title}}</h4>
        <p>{!!$iotModules->description!!}</p>
      </div>
  </div>
  @endforeach
  @endif
        </div>

      </div>
    </section>
    
    
    <!-- End Our Skills Section -->
    <!-- ======= Our Skills Section ======= -->
  
    <!-- End Our Skills Section -->
    

    

  </main><!-- End #main -->

  
  @endsection