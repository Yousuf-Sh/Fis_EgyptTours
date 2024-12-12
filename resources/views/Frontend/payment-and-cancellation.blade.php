@extends('Frontend.Layouts.main_master')
@section('content')
<style>
    

    .terms-title h1{
        font-size: 18px;
        /* font-family: "RobotoCondensed-Bold"; */
        text-align: center;
        font-weight: bold;
        letter-spacing: 10px;  
    }

    .terms-body h4 {
        color: #EB573D;
        font-size: 14px;
        line-height: 25px;
    }

    .terms-body p{
        font-size: 14px;
        line-height: 26px;
        
    }

    

    .terms-body a:hover{
        text-decoration: none;
    }
    .terms-body hr {
        border-bottom: 1px solid #7782ff77;
        margin: 20px 0;
    }

    .terms_footer h3 {
        margin-top: 60px;
        margin-bottom: 125px;
        text-align: center;
        font-weight: bold;
        letter-spacing: 3px;
        line-height: 1.5;
        color: #243972;
    }

    
    
</style>

	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				<img src="{{ asset('Frontend/images/gBnr.png') }}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container inner2pages-container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-12">
						<h1 class="heading" data-aos="fade-up">@lang('message.PaymentCancellation')</h1>
						<!-- <div class="w-50 m-auto">
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-speedometer2 banr-icon" viewBox="0 0 16 16">
										<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
										<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
									</svg>
									<h3>Fast & Safe</h3>
								</div>
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hand-thumbs-up banr-icon" viewBox="0 0 16 16">
										<path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
									</svg>
									<h3>Best Price</h3>
								</div>
							</div>
							<div class="feature-card">
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-car-front-fill banr-icon" viewBox="0 0 16 16">
										<path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
									</svg>
									<h3>Luxury Cars</h3>
								</div>
								<div class="top-bnr-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-video banr-icon" viewBox="0 0 16 16">
										<path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
										<path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"/>
									</svg>
									<h3>Package Delivery</h3>
								</div>
							</div>	
						</div>	 -->
					</div>
					
				</div>
			</div>
				
			
		</div>
		
	</div>






    
<div class="terms-details-area gray-bg section">
    <div class="container">
    
        <div class="row">
            <div class="col-sm-12">
				<h2 class="heading mb-5">@lang('message.payment_main_title1')</h2> 
                <div class="terms-body">
                    <h3>@lang('message.payment_sub_title1')</h3>
                    <ul>
						<li>@lang('message.payment_para1_li1')</li>
						<li>@lang('message.payment_para1_li2')</li>
					</ul>
                    <hr>
                    <h3>@lang('message.payment_sub_title2')</h3>
                    <ul>
						<li>@lang('message.payment_para2_li1')</li>
						<li>@lang('message.payment_para2_li2')</li>
					</ul>
                    <hr>
                    <h3>@lang('message.payment_sub_title3')</h3>
                    <ul>
						<li>@lang('message.payment_para3_li1')</li>
						<li>@lang('message.payment_para3_li2')</li>
						<li>@lang('message.payment_para3_li3')</li>
					</ul>
                
                    <hr>
                    <h3>@lang('message.payment_sub_title4')</h3>
                    <ul>
						<li>@lang('message.payment_para4_li1')</li>
					</ul>
                </div>   
				<h2 class="heading mb-5 mt-5">@lang('message.payment_main_title2')</h2> 
                <div class="terms-body">
                    <h3>@lang('message.payment_sub_title5')</h3>
					<p>@lang('message.payment_para5_li1')</p>
                    <ul>
						<li>@lang('message.payment_para5_li2')</li>
						<li>@lang('message.payment_para5_li3')</li>
						<li>@lang('message.payment_para5_li4')</li>
					</ul>
                    <hr>
                    <h3>@lang('message.payment_sub_title6')</h3>
					<p>@lang('message.payment_para6_li1'):</p>
                    <ul>
						<li>@lang('message.payment_para6_li2')</li>
						<li>@lang('message.payment_para6_li3')</li>
					</ul>
            
                </div>   
				<h2 class="heading mb-5 mt-5">@lang('message.payment_main_title3')</h2> 
                <div class="terms-body">
                    <h3>@lang('message.payment_sub_title7')</h3>
                    <ul>
						<li>@lang('message.payment_para7_li1')</li>
						<li>@lang('message.payment_para7_li2')</li>
					</ul>
                    <hr>
                    <h3>@lang('message.payment_sub_title8')</h3>
                    <ul>
						<li>@lang('message.payment_para8_li1')</li>
						<li>@lang('message.payment_para8_li2')</li>
					</ul>
                    <hr> 
                    <h3>@lang('message.payment_sub_title9')</h3>
                    <ul>
						<li>@lang('message.payment_para9_li1')</li>
						<li>@lang('message.payment_para9_li1')</li>
					</ul>
                    <hr> 
            
                </div>   
  
            </div>  

              
        </div>
    </div>
</div>














	
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