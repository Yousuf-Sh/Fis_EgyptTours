@extends('front.master')
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        @foreach( $Slider as $key=> $Slideritem)
        <div class="carousel-inner" role="listbox">
            
              <div class="carousel-item {{$key =='0' ? 'active':''}}">
               
                <img class="img-fluid" src="{{asset('Backend/images/'.$Slideritem->images)}}" alt="Image">
                <div class="carousel-container">
                        @if($locale === 'ar')
                        <div class="carousel-content">  
                          <h2 class="animate__animated animate__fadeInDown" data-aos="fade-right" data-aos-delay="200">{{$Slideritem->arabic_title}}</h2>
                          <p class="animate__animated animate__fadeInUp" data-aos="fade-left" data-aos-delay="200">
                            {{$Slideritem->arabic_short_description}}</p>
                          <a href="{{url('about')}}" class="btn-get-started animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">{{$Slideritem->arabic_button}}</a>
                        </div>
            
                        @else

                        <div class="carousel-content">  
                          <h2 class="animate__animated animate__fadeInDown" data-aos="fade-right" data-aos-delay="200">{{$Slideritem->title}}</h2>
                          <p class="animate__animated animate__fadeInUp" data-aos="fade-left" data-aos-delay="200">
                            {{$Slideritem->short_description}}</p>
                          <a href="{{url('about')}}" class="btn-get-started animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">{{$Slideritem->button}}</a>
                        </div>
                  
                        @endif
                     
                          
                        </div>
                        
                      </div>
                      @endforeach
                    </div>
       
                
            </div>
            
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= Featured Section ======= -->
  <section id="featured" class="featured ">
    <div class="container">

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        @foreach($Vision as $Visions)
        @if($locale === 'ar')
        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
        
          <div class="icon-box">
          
            <i class="{{$Visions->arabic_logo}}"></i>
            <h3><a >{{$Visions->arabic_title}}</a></h3>
            <p>{!!$Visions->arabic_short_description!!}</p>
          </div>
        
        </div>
        @else
        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
        
          <div class="icon-box">
          
            <i class="{{$Visions->logo}}"></i>
            <h3><a >{{$Visions->title}}</a></h3>
            <p>{!!$Visions->description!!}</p>
          </div>
        
        </div>
        @endif
        @endforeach
        
       
      </div>

    </div>
  </section><!-- End Featured Section -->

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

  <!-- ======= Services Section ======= -->
  <!-- <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>About Us</h2>
      </div> 
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Still, a long way to go!</a></h4>
            <p>Established in the Kingdom of Saudi Arabia with its network spanning across Saudi Arabia, the United Kingdom, Pakistan, India, Gulf countries, and other regions of the world, Tamimi Solutions enjoys both the local KSA values and global standards in its modus operandi. We are one of the most progressive regional businesses in the KSA, recognized both locally and internationally for providing exclusive services and solutions to the food industry, multi-industry project management, technology sector, pest control & material supply markets.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Diversity is our portfolio!</a></h4>
            <p>As a diversified multi-industry organization, we are committed to bringing a great reputation and adding quality to hundreds of products as well as services, and eventually, adding the high value to end customers. Our employees are dedicated to helping businesses make the right choices – no matter the requirements or location and in our sectors, as varied as wholesale and distribution of food products, technology, construction, manufacturing, pest control, facility management, material supply, as well as outsourcing. We celebrate diversity by using our know-how across industries and designing solutions that are tailored to your needs.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 ">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">We are dynamic & customer-centric!</a></h4>
            <p>t Tamimi Solutions, we don’t believe in staying still. We continuously enhance people’s experiences. That’s the reason, you will find us in over 15 countries- from our home in KSA, South Asia, and the United Kingdom, to the Gulf countries and other regions of the world.

              Through our customer-centric approach and continuous pursuit of excellence, we add significant value – connecting people in different markets with brands in powerful, contemporary as well as emotionally charged and meaningful ways that create a long-lasting bond based on mutual trust and loyalty.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Whatever we do, we do it best!</a></h4>
            <p>Our dedicated, professional and highly experienced teams are always up to date with the changes in rules and regulations as well as standards for each industry and keep themselves ready in advance to provide the most effective, relevant and personalized solutions to clients.

              Our decades-long experience lets us embrace and cultivate new, forward-thinking and effective business practices and flawlessly blend those into our company DNA and people-first philosophy whilst preserving the value of integrity and the spirit of collaboration. This enables us to bring our best to the table and nothing else.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Services Section -->
  <!-- <section id="" class="about ">
    <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. </p>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            <li><i class="bi bi-check-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="bi bi-check-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section> -->


  <!-- ======= Why Us Section ======= -->
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
  
  <section class="rService ">
    <div class="container" data-aos="fade-up">
      @if($locale === 'ar') 
      <div class="section-title">
          <h2>Services</h2>
      </div>
      <div class="row pb-lg-4 pb-0">
          @foreach($Services as $key => $Service)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box text-center">
                  <div class="icon text-center mb-3"><img src="{{asset('Backend/images/'.$Service->member_image)}}"></div>
                  <h3><a href="distribution.php">{{$Service->arabic_name}}</a></h3>
                  <p>{{$Service->arabic_tagline}}</p>
              </div>
          </div>
          @endforeach
      </div>
  @else
      <div class="section-title">
          <h2>Services</h2>
      </div>
      <div class="row pb-lg-4 pb-0">
          @foreach($Services as $key => $Service)
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box text-center">
                  <div class="icon text-center mb-3"><img src="{{asset('Backend/images/'.$Service->member_image)}}"></div>
                  <h3><a href="{{ route('page.show', ['slug' => $Service->slug]) }}">{{$Service->name}}</a></h3>
                  <p>{{$Service->tagline}}</p>
              </div>
          </div>
          @endforeach
      </div>
  @endif
  
    </div>    
  </section>
  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients bg-sec">
    <div class="container">
      @if($locale === 'ar')
      <div class="section-title">
        <h2>{{$OurCustomers->arabic_title}}</h2>
        <p>{{$OurCustomers->arabic_tagline}}</p>
      </div>
@else
<div class="section-title">
  <h2>{{$OurCustomers->title}}</h2>
  <p>{{$OurCustomers->tagline}}</p>
@endif

      <div class="clients-slider swiper" data-aos="zoom-in">
        <div class="swiper-wrapper align-items-center mb-5" >
         
          @foreach($Clients as $Client)
          <div class="swiper-slide"><img src="{{asset('Backend/images/'.$Client->image)}}"  alt=""></div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->
  <!-- ======= Portfolio Section ======= -->
  <!-- <section id="portfolio" class="portfolio bg-sec">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Our Customers</h2>
      </div>
      <div class="row portfolio-container" data-aos="fade-left" data-aos-delay="200">

        <div class="col-lg-3 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Arabian Electrical Transmission Line Construction Company ( AETCON )</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Arabian Electrical Transmission Line Construction Company ( AETCON )</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ministry of National Guard Health Affairs</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item ">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c4.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tamimi Markets</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c5.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tamimi Global Co. Ltd. (TAFGA)</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c5.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c6.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>King Fahad Medical City</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c6.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c7.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Davita</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c7.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item">
          <div class="portfolio-wrap">
            <img src="assets/img/clients/c1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>King Faisal Specialist Hospital and Research Centre</h4>
              <p>2016/02/26</p>
              <div class="portfolio-links">
                <a href="assets/img/clients/c1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        

      </div>

    </div>
  </section> -->
  <!-- End Portfolio Section -->
  <!-- <section id="contact" class="contact">
    <div class="container " data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form shadow-none">
            <div class="row gy-2 gx-md-3">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
              </div>
              <div class="form-group col-12">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group col-12">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3 col-12">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center col-12"><button type="submit">Send Message</button></div>
            </div>
          </form>

        </div>

      </div>

    </div>
  </section> -->
</main><!-- End #main -->

@endsection
