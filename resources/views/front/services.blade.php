@extends('front.master')
@section('content')
<main id="main">
        <section class="page-title"
            style="background-image: url(https://f4o6dc.n3cdn1.secureserver.net/wp-content/uploads/2021/11/BANNER-1-2.png?time=1702970025);">
            <div class="auto-container">
                <h1>Services</h1>
                <ul class="page-breadcrumb">
                </ul>
            </div>
        </section>
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title" style="text-align: center;">
                {{-- <h2> GENERAL PEST CONTROL</h2>
                <h3>First Target Pest Control</h3> --}}
               
              </div>
              
              <div class="row">
                @if($locale==='ar')
                @foreach($Services as $service)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"
                  style="margin-top: 24px;">
                  <div class="icon-box">
                    <div class="icon">
                      <img src="{{asset('Backend/images/'.$service->member_image)}}" class="img-fluid">
                    </div>
                    <h4><a href="">{{$service->arabic_title}} </a></h4>
                    <p>{{$service->arabic_description}}</p>
                    {{-- <a href="#">{{$service->button}}</a> --}}
                  </div>
                </div>
      @endforeach
      @else
      @foreach($Services as $service)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100"
        style="margin-top: 24px;">
        <div class="icon-box">
          <div class="icon">
            <img src="{{asset('Backend/images/'.$service->member_image)}}" class="img-fluid">
          </div>
          <h4><a href="">{{$service->name}} </a></h4>
          <p>{{$service->description}}</p>
          {{-- <a href="#">{{$service->button}}</a> --}}
        </div>
      </div>
@endforeach
      @endif
              </div>
      
            </div>
          </section><!-- End Services Section -->

        <!-- ======= pestreels Section ======= -->
        <section id="pestreels" class="pestreels" style="padding-bottom: 180px;">
            <div class="container" data-aos="fade-up">
              @if($locale==='ar')
                <div class="section-title" style="text-align: center;">
                    <h2>{{$pest_title->arabic_title}}
                    </h2>
                    <h3>{{$pest_title->arabic_tagline}}</h3>
                </div>
@else
<div class="section-title" style="text-align: center;">
  <h2>{{ $pest_title->title}}
  </h2>
  <h3>{{ $pest_title->agline}}</h3>
</div>
@endif
                <div class="row" >
                  @if($locale==='ar')
                    @foreach($Pest as $Pests)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300" style="margin-top: 60px;">
                      
                      <div class="icon-box">
                        <div class="icon">
                          <img src="{{asset('Backend/images/'.$Pests->member_image)}}" class="img-fluid">
                        </div>
                      </div>
                      
                      <h4>{{$Pests->arabic_name}}</h4>
                    </div>
                   @endforeach
          @else
          @foreach($Pest as $Pests)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300" style="margin-top: 60px;">
            
            <div class="icon-box">
              <div class="icon">
                <img src="{{asset('Backend/images/'.$Pests->member_image)}}" class="img-fluid">
              </div>
            </div>
            
            <h4>{{$Pests->name}}</h4>
          </div>
         @endforeach
          @endif
                  </div>
                 

                

            </div>
        </section><!-- End pestreel section -->


    </main>
@endsection