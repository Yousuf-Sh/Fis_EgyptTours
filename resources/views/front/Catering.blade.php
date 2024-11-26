@extends('front.master')
@section('content')


  <main id="main">
    <section class="cta py-0" style="background-image: url({{ asset('Backend/images/'.$Catering->image)}})">
      <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$Catering->arabic_tagline}}</h1>
          </div>
          @else
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$Catering->tagline}}</h1>
          </div>
          @endif
        </div>
      </div>
      <!-- <img src="assets/img/timi/Whole%20sale%20Saudi%20Arabia%20Fruits%20Vegetables.jpg" class="img-fluid w-100">  -->
    </section>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        @if($locale === 'ar')
        <ol>
          <li><a href="{{url('/')}}">بيت</a></li>
          <li><a href="{{url('food-services')}}">تقديم الطعام</a></li>
          <li>تقديم الطعام</li>
        </ol>
        @else
        <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('food-services')}}">Food Services</a></li>
            <li>Catering</li>
          </ol>
        @endif

      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Our Skills Section ======= -->
    <section id="" class="about ">
      <div class="container" data-aos="fade-up">
        @if($locale === 'ar')
        <div class="section-title">
          <h2 class="mb-2">{{$Catering->arabic_title}}</h2>
         
        </div>
@else
<div class="section-title">
    <h2 class="mb-2">{{$Catering->title}}</h2>
   
  </div>
@endif
        <div class="row content mb-md-1 mb-0">
            @if($locale === 'ar')
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-check-all"></i> {!!$Catering->arabic_short_description!!}</li> 
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
            <li><i class="bi bi-check-all"></i>{!!$Catering->arabic_short_description1!!}</li>  
            </ul>
          </div>
          @else
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-check-all"></i> {!!$Catering->short_description!!}</li> 
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
            <li><i class="bi bi-check-all"></i>{!!$Catering->short_description1!!}</li>  
            </ul>
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