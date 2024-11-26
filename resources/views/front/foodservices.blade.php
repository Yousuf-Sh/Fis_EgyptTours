@extends('front.master')
@section('content')

  <main id="main">
    <section class="quizConform-ctaa p-0 cta" >
      <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$FoodServices->arabic_tagline5}}</h1>
          </div>
          @else
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$FoodServices->tagline5}}</h1>
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
          <li>{{$FoodServices->arabic_title}}</li>
        </ol>
        @else
        <ol>
            
            <li><a href="{{url('/')}}">Home</a></li>
            <li>{{$FoodServices->title}}</li>
          </ol>
        @endif
        @if($locale === 'ar')
        <h2>{{$FoodServices->arabic_title}}</h2>
@else
<h2>{{$FoodServices->title}}</h2>

@endif
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Our Skills Section ======= -->
    <section id="skills1" class="skills">
      <div class="container" data-aos="zoom-in">
        @if($locale === 'ar')
        <div class="section-title">
          <h2>{{$FoodServices->arabic_title}}</h2>
          <!-- <p></p> -->
        </div>
        @else
        <div class="section-title">
            <h2>{{$FoodServices->title}}</h2>
            <!-- <p></p> -->
          </div>
        @endif
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image3)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>{{$FoodServices->arabic_tagline}}</h3>
           
            <p>
                {!!$FoodServices->arabic_short_description!!}
            </p>
          </div>
          @else
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image3)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>  <h3>{{$FoodServices->tagline}}</h3></h3>
           
            <p>
                {!!$FoodServices->short_description!!}
            </p>
          </div>
          @endif
        </div>

      </div>
    </section>
    <section id="skills1" class="skills bg-sec">
      <div class="container" data-aos="zoom-out">

         @if($locale === 'ar')
        <div class="section-title">
          <h2>{{$FoodServices->arabic_title1}}</h2>
          <!-- <p></p> -->
        </div>
        @else
        <div class="section-title">
            <h2>{{$FoodServices->title1}}</h2>
            <!-- <p></p> -->
          </div>
        @endif
        <div class="row">
            @if($locale === 'ar')
          
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>{{$FoodServices->arabic_tagline1}}</h3>
           
            <p>
                {!!$FoodServices->arabic_short_description1!!}
            </p>
          </div>
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image2)}}" class="img-fluid" alt="">
          </div>
          @else
          
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>  <h3>{{$FoodServices->tagline1}}</h3></h3>
           
            <p>
                {!!$FoodServices->short_description1!!}
            </p>
          </div>
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image2)}}" class="img-fluid" alt="">
          </div>
          @endif
        </div>
      </div>
    </section>
    <section id="skills1" class="skills">
      <div class="container" data-aos="zoom-in">

        @if($locale === 'ar')
        <div class="section-title">
          <h2>{{$FoodServices->arabic_title2}}</h2>
          <!-- <p></p> -->
        </div>
        @else
        <div class="section-title">
            <h2>{{$FoodServices->title2}}</h2>
            <!-- <p></p> -->
          </div>
        @endif
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image1)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>{{$FoodServices->arabic_tagline2}}</h3>
           
            <p>
                {!!$FoodServices->arabic_short_description2!!}
            </p>
          </div>
          @else
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image1)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>  <h3>{{$FoodServices->tagline2}}</h3></h3>
           
            <p>
                {!!$FoodServices->short_description2!!}
            </p>
          </div>
          @endif
        </div>

      </div>
    </section>
    <section id="skills1" class="skills bg-sec">
      <div class="container" data-aos="zoom-out">

        @if($locale === 'ar')
        <div class="section-title">
          <h2>{{$FoodServices->arabic_tagline3}}</h2>
          <!-- <p></p> -->
        </div>
        @else
        <div class="section-title">
            <h2>{{$FoodServices->tagline3}}</h2>
            <!-- <p></p> -->
          </div>
        @endif
        <div class="row">
            @if($locale === 'ar')
          
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>{{$FoodServices->arabic_tagline4}}</h3>
           
            <p>
                {!!$FoodServices->arabic_short_description2!!}
            </p>
          </div>
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image)}}" class="img-fluid" alt="">
          </div>
          @else
          
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>  <h3>{{$FoodServices->tagline4}}</h3></h3>
           
            <p>
                {!!$FoodServices->short_description!!}
            </p>
          </div>
          <div class="col-lg-6">
            <!-- <img src="assets/img/fs/fsp1.jpg" class="img-fluid" alt=""> -->
            <img src="{{asset('Backend/images/'.$FoodServices->image)}}" class="img-fluid" alt="">
          </div>
          @endif
        </div>

      </div>
    </section>
    

    

  </main><!-- End #main -->

 

@endsection