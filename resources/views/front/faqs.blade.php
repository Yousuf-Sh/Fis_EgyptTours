@extends('front.master')
@section('content')
<main id="main">
    <!-- <section class="page-title"
      style="background-image: url(https://fisdemoprojects.com/ftpest/assets/img/innerpage.webp);">
      <div class="auto-container">
        <h1>Faq</h1>
        <ul class="page-breadcrumb">
        </ul>
      </div>
    </section> -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row mt-4">
          @if($locale==="ar")
          <div class="section-title mt-2 col-xl-5">
            <h2 >{{$faqs->arabic_title}}
            </h2>
            <h3>{{$faqs->arabic_tagline}}</h3>
            <p style="width: 100%; position: relative;
            color: #848484;
            font-size: 17px;
            line-height: 1.8em;
            font-weight: 400;"
           > {!!$faqs->arabic_short_description!!} </p>
          </div>
          @else
          <div class="section-title mt-2 col-xl-5">
            <h2 >{{$faqs->title}}
            </h2>
            <h3>{{$faqs->tagline}}</h3>
            <p style="width: 100%; position: relative;
            color: #848484;
            font-size: 17px;
            line-height: 1.8em;
            font-weight: 400;"
           > {!!$faqs->short_description!!} </p>
          </div>
          @endif
          <div class="col-xl-7">
            @if($locale==="ar")
            <ul class="faq-list">
  @foreach($Question_descriptions as $key =>$Question_description)
              <li>
                <div data-bs-toggle="collapse" href="#faq_{{$key}}" class="collapsed question">{{$Question_description->question_ar}}<i class="bi bi-chevron-down icon-show ps-2"></i><i
                    class="bi bi-chevron-up icon-close ps-2"></i></div>
                <div id="faq_{{$key}}" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  
                     {{$Question_description->question_description_ar}}
                  </p>
                </div>
              </li>
              @endforeach
            </ul>
          
            @else
            <ul class="faq-list">
              @foreach($Question_descriptions as $key =>$Question_description)
                          <li>
                            <div data-bs-toggle="collapse" href="#faq_{{$key}}" class="collapsed question">{{$Question_description->question}}<i class="bi bi-chevron-down icon-show ps-2"></i><i
                                class="bi bi-chevron-up icon-close ps-2"></i></div>
                            <div id="faq_{{$key}}" class="collapse" data-bs-parent=".faq-list">
                              <p>
                              
                                 {{$Question_description->question_description}}
                              </p>
                            </div>
                          </li>
                          @endforeach
                        </ul>
            @endif
          </div>
        </div>
      </div>
    </section>
</main>

@endsection
