@extends('front.master')
@section('content')
<main id="main">
    <!-- <section class="cta py-0" style="background-image: url(assets/img/uniform-safety.jpg)"> -->
    <section class="cta py-0" style="background-image: url({{asset('Backend/images/'.$service->member_image)}}">
        <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
          @if($locale=='ar')
          <div class="row">
          
            <div class="col-lg-12 text-center text-white">
              <h1 class="quiz-top">{{$service->arabic_tagline}}</h1>
            </div>
          </div>
        </div>
       
      </section>
    
          <section id="breadcrumbs" class="breadcrumbs ">
      <div class="container">

        <ol>
          <li><a href="/">بيت</a></li>
          <!-- <li><a href="food-services.php">Food Services</a></li> -->
          <li>خدمات</li>
        </ol>
        <h2>{{$service->arabic_title}}</h2>

      </div>
    </section>
      @else 
      <div class="row">
          
        <div class="col-lg-12 text-center text-white">
          <h1 class="quiz-top">{{$service->tagline}}</h1>
        </div>
      </div>
    </div>
   
  </section>

      <section id="breadcrumbs" class="breadcrumbs ">
  <div class="container">

    <ol>
      <li><a href="/">Home</a></li>
      <!-- <li><a href="food-services.php">Food Services</a></li> -->
      <li>Services</li>
    </ol>
    <h2>{{$service->name}}</h2>

  </div>
</section>
      @endif
      <!-- ======= Our Skills Section ======= -->
      {{-- <section id="" class="about mb-lg-4 mb-2">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-2">{{$service->tagline}}</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p> -->
          </div>
        </section> --}}
          <div class="row content">
          {{-- <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
              <img src="{{asset('Backend/images/'.$service->image)}}" class="img-fluid" alt="" style="border-radius: 15px;">
            </div> --}}
            <div class="col-lg-6 pt-4 pt-lg-0 content " data-aos="fade-left" data-aos-delay="200">
              <!-- <h3></h3> -->
              <main id="">
                @if($locale=='ar')
                <section id="features" class="features bg-sec">
                  <div class="container">
                   @foreach($serviceslug as $slug)
                    {!!html_entity_decode($slug->arabic_description)!!}
                   @endforeach
                </section>
                @else 
                <section id="features" class="features bg-sec">
                  <div class="container">
                   @foreach($serviceslug as $slug)
                    {!!html_entity_decode($slug->description)!!}
                   @endforeach
                </section>
                @endif
              </main>
            </div>
          </div>
  
        </div>
      
      
      <!-- End Our Skills Section -->
      <!-- ======= Our Skills Section ======= -->
    
      <!-- End Our Skills Section -->
      
  
      
  
    </main><!-- End #main -->
@endsection