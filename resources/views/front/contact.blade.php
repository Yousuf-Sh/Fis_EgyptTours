@extends('front.master')
@section('content')
<main id="main">

  <section class="cta py-0" style="background-image: url({{ asset('Backend/images/'.$Contactus->image)}})">
    <div class="container d-flex justify-content-center w-75" data-aos="zoom-in">
      <div class="row">
        @if($locale === 'ar')
        <div class="col-lg-12 text-center text-white">
          <h1 class="quiz-top"> {{$Contactus->arabic_tagline}}</h1>
        </div>
        @else 
        <div class="col-lg-12 text-center text-white">
          <h1 class="quiz-top"> {{$Contactus->tagline}}</h1>
        </div>
        @endif
      </div>
    </div>
  </section>  
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      @if($locale === 'ar')
      <ol>
        <li><a href="/">Home</a></li>
        <li>{{$Contactus->arabic_title}}</li>
      </ol>
      @else 
      <ol>
        <li><a href="/">Home</a></li>
        <li>{{$Contactus->title}}</li>
      </ol>
      @endif
      @if($locale === 'ar')
      
        <h2>{{$Contactus->arabic_title}}</h2>
      
      @else 
     
        <h2>{{$Contactus->title}}</h2>
      
      @endif

    </div>
  </section><!-- End Breadcrumbs -->
  <section id="contact" class="contact">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100"   >
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              @if($locale === 'ar')
              <h3>عنواننا</h3>
              <p class="px-2">{{$Submitted->footer_label_description_ar}}</p>
                @else
                <h3>Our Address</h3>
                <p class="px-2">{{$Submitted->footer_description}}</p>
                @endif
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              @if($locale === 'ar')
              <h3>هاتف</h3>
              @else
              <h3>Phone</h3>
              @endif
              <p>+{{$Submitted->phone1}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              @if($locale === 'ar')
              <h3>ارسل لنا عبر البريد الإلكتروني</h3>
              @else
              <h3>Email Us</h3>
              @endif
              <p>{{$Submitted->email}}</p>
            </div>
          </div>



        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28973.584375868002!2d46.665049961909496!3d24.805791045920436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNada%20District-Othman%20Bin%20Affan%207198-%20Road%20no.%2014%2COpposite%20Gate%204%20of%20Imam%20Saud%20University%2C%20Riyadh%2013317-%204415!5e0!3m2!1sen!2s!4v1702985087188!5m2!1sen!2s"
              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

          </div>

          <div class="col-lg-6 mt-2">
            
              <form action="{{ route('submitted.contactstore') }}" method="post" role="form" class="php-email-form" >
              <div class="row">
              @csrf
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>

              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message" ></div>
                <div class="sent-message" id="sent-message2" style=""></div>
              </div>
              <div class="text-center submit-btn"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
<script>
    form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Disable the submit button
    form.querySelector('button[type="submit"]').disabled = true;

    // Hide previous messages
    errorMessage.style.display = 'none';
    sentMessage.style.display = 'none';
    loadingMessage.style.display = 'block';
    
    // Fetch the form data
    const formData = new FormData(form);

    // Submit the form using AJAX
    fetch(form.action, {
        method: form.method,
        headers: {
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
    console.log(data);  // Log the response data to the console

    loadingMessage.style.display = 'none';

    if (data.success) {
        // Show success message
        console.log(data);
        sentMessage.textContent = data.success;
        sentMessage.style.display = 'block';
    } else if (data.error) {
        // Show error message
        errorMessage.textContent = data.error;
        errorMessage.style.display = 'block';
    }
})
    .catch((error) => {
        loadingMessage.style.display = 'none';
        errorMessage.textContent = 'An error occurred while submitting the form.';
        errorMessage.style.display = 'block';

        // Enable the submit button
        form.querySelector('button[type="submit"]').disabled = false;
    });
});

</script>

     </script>
    

</main>
@endsection