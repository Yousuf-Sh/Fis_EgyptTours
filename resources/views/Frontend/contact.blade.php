@extends('Frontend.Layouts.main_master')
@section('content')

{{-- 
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lc4jIIqAAAAAP5z5sudHljPNYOglTrpCklSDPIQ"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lc4jIIqAAAAAP5z5sudHljPNYOglTrpCklSDPIQ', { action: 'submit' }).then(function(token) {
            document.getElementById('recaptchaToken').value = token;
        });
    });
</script>
--}}

<div class="position-relative">
    <div class="hero overlay innerPage">
        <div class="img-bg rellax">
            <!-- <img src="images/banr/banr3.jpg" alt="Image" class="img-fluid banr-img"> -->
            <img src="{{ asset('Frontend/images/gBnr.png') }}" alt="Image" class="img-fluid banr-img">
        </div>
        <div class="container inner2pages-container">
            <div class="row align-items-center justify-content-center rowPadding py-2">
                <div class="col-lg-10">
                    <h1 class="heading" data-aos="fade-up">@lang('message.ContactUs')</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<div id="success-message" class="alert alert-success">
	{{ session('success') }}
</div>
@endif

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                <h2 class="heading mb-5">@lang('message.get_in_touch')</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">
                    <div class="address mt-4">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">@lang('message.location')</h4>
                        <p>@lang('message.ftr_address')</p>
                    </div>
                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">@lang('message.email')</h4>
                        <p>info@tour.com</p>
                    </div>
                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">@lang('message.call')</h4>
                        <p>+1 1234 55488 55</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
				<form action="{{ route('contact.send') }}" method="POST" class="contactForm" id="demo-form">
					@csrf
					<div class="row">
						<div class="col-sm-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="@lang('message.first_name')" name="first_name" required>
						</div>
						<div class="col-sm-6 col-12 mb-3">
							<input type="text" class="form-control" placeholder="@lang('message.last_name')" name="last_name" required>
						</div>
						<div class="col-sm-6 col-12 mb-3">
							<input type="email" class="form-control" placeholder="@lang('message.your_email')" name="email" required>
						</div>
						<div class="col-sm-6 col-12 mb-3">
							<input type="tel" class="form-control ar-tel" placeholder="@lang('message.phone_number')" name="phone_number" required>
						</div>
						<div class="col-sm-12 col-12 mb-3">
							<textarea name="user_message" id="" cols="30" rows="7" class="form-control" placeholder="@lang('message.message')" required></textarea>
						</div>
						
						{{-- <div class="g-recaptcha mb-3" data-sitekey="6Lc4jIIqAAAAAP5z5sudHljPNYOglTrpCklSDPIQ" id="recaptchaToken"></div> --}}
						
						<div class="col-12">
							<input type="submit" value="@lang('message.send_message')" class="btn btn-primary contactBtn">
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->

<div class="py-5 cta-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="mb-2 text-white">@lang('message.news_ltr_title')</h2>
                <p class="mb-4 lead text-white text-white-opacity">@lang('message.news_ltr_para')</p>
                <p class="mb-0"><a href="#" class="btn btn-outline-white btn-md font-weight-bold btn-cta">@lang('message.get_in_touch')</a></p>
            </div>
        </div>
    </div>
</div>

@endsection('content')
<script src="jquery-3.7.1.min.js"></script>
<script>
	$(document).ready(function() {
		// Set a timeout to hide the success message after 3 seconds (3000 ms)
		setTimeout(function() {
			$("#success-message").fadeOut("slow", function() {
				$(this).remove(); // Remove the element from the DOM after fading out
			});
		}, 2500); // 3000 ms = 3 seconds
	});
</script>