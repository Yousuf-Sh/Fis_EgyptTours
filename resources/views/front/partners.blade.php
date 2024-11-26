@extends('front.master')
@section('content')
<main id="main">
    <section class="page-title"
      style="background-image: url(https://f4o6dc.n3cdn1.secureserver.net/wp-content/uploads/2021/11/BANNER-1-2.png?time=1702970025);">
      <div class="auto-container">
        @if($locale==='ar')
        <h1> {{$pest->arabic_title}}</h1>
        @else
        <h1> {{$pest->title}}</h1>
        @endif
        <ul class="page-breadcrumb">
        </ul>
      </div>
    </section>
    <!-- ======= Client Section ======= -->
    <section id="client" class="client">
            <div class="container" data-aos="fade-up">
                @if($locale==='ar')
                <div class="section-title" style="text-align: center;">
                    <h2> {{$pest->arabic_title}}
                    </h2>
                    <h3>{{$pest->arabic_tagline}}
                    </h3>
                </div>
@else
<div class="section-title" style="text-align: center;">
    <h2> {{$pest->title}}
    </h2>
    <h3>{{$pest->tagline}}
    </h3>
</div>
@endif
                <div class="row" style="margin-top: 60px;">
                    @foreach( $generalclients as $Clients)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{asset('Backend/images/'.$Clients->image)}}" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    
                    @endforeach
                 
               </div>

            </div>
        </section><!-- End client Section -->
    <!-- ======= Avaliable Section ======= -->
    <section id="avaliable" class="available section-bg" style="background:#ebf2f5">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @if($locale==='ar')
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h2 class="section-heading"> {{$Streaming->arabic_tagline}}</h2>
                        <p class="section-text">
                            {!!$Streaming->arabic_short_description!!}
                        </p>
                        <div class="link-box">
                            <a href="{{route('about')}}" class="theme-btn"><span class="txt">Read More</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('Backend/images/'.$Streaming->image)}}" class="img-fluid steamingimg" alt="" style="    width: 450px;
              margin-left: 100px;">
                    </div>
                   @else
                   <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                   data-aos="fade-up" data-aos-delay="100">
                   <h2 class="section-heading"> {{$Streaming->tagline}}</h2>
                   <p class="section-text">
                       {!!$Streaming->short_description!!}
                   </p>
                   <div class="link-box">
                       <a href="{{route('about')}}" class="theme-btn"><span class="txt">Read More</span></a>
                   </div>
               </div>
               <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                   <img src="{{asset('Backend/images/'.$Streaming->image)}}" class="img-fluid steamingimg" alt="" style="    width: 450px;
         margin-left: 100px;">
               </div>
                   @endif

            </div>
        </section><!-- End Avaliable Section -->

</main>
@endsection