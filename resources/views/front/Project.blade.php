@extends('front.master')
@section('content')


  <main id="main">
    <section class="cta py-0" style="background-image: url({{ asset('Backend/images/'. $CMSProject->image)}})">
      <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
        <div class="row">
            @if($locale === 'ar')
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$CMSProject->arabic_tagline}}</h1>
          </div>
          @else
          <div class="col-lg-12 text-center text-white">
            <h1 class="quiz-top">{{$CMSProject->tagline}}</h1>
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
        <h2>{{$CMSProject->arabic_title}}</h2>
@else
<h2>{{$CMSProject->title}}</h2>
@endif
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Our Skills Section ======= -->
    <section id="skills1" class="skills">
      <div class="container" data-aos="zoom-in">

        <div class="section-title">
            @if($locale === 'ar')
            <h2>{{$CMSProject->arabic_title}}</h2>
    @else
    <h2>{{$CMSProject->title}}</h2>
    @endif
          <!-- <p></p> -->
        </div>
        
        @if($locale === 'ar')
        @foreach($Project as $key => $Projects)
        <div class="row">
            @if($key % 2 == 0)
            <div class="col-lg-6">
                <img src="{{asset('Backend/images/'. $Projects->images)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>{{$Projects->arabic_title}}</h3>
                <p>{!!$Projects->arabic_description!!}</p>
            </div>
            @else
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>{{$Projects->arabic_title}}</h3>
                <p>{!!$Projects->arabic_description!!}</p>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('Backend/images/'. $Projects->images)}}" class="img-fluid" alt="">
            </div>
            @endif
        </div>
        @endforeach
    
    @else
        @foreach($Project as $key => $Projects)
        <div class="row">
            @if($key % 2 == 0)
            <div class="col-lg-6">
                <img src="{{asset('Backend/images/'. $Projects->images)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>{{$Projects->title}}</h3>
                <p>{!!$Projects->description!!}</p>
            </div>
            @else
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>{{$Projects->title}}</h3>
                <p>{!!$Projects->description!!}</p>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('Backend/images/'. $Projects->images)}}" class="img-fluid" alt="">
            </div>
            @endif
        </div>
        @endforeach
    @endif
    
    
      </div>
    </section>
    
    

  </main><!-- End #main -->

  @endsection