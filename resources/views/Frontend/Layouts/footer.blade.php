<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 col-6">
					<div class="widget">
						<img src="{{asset('Frontend/images/logo.png')}}" class="img-fluid"/>
						<p class="text-dark">@lang('message.FarAway')</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3 class="sclFtrTitle">@lang('message.Connect')</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-lg-2 col-md-4 col-sm-4 col-6 ml-auto">
					<div class="widget">
						<h3>@lang('message.Services')</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="{{route('airport_transfer')}}">@lang('message.AirportTransfer')</a></li>
							<li><a href="{{route('excursions')}}">@lang('message.Excursions')</a></li>
							<li><a href="{{route('travel_package')}}">@lang('message.TourPackage')</a></li>
							<li><a href="{{route('nile_cruise')}}">@lang('message.NileCruise')</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-lg-2 col-md-4 col-sm-4 col-6">
					<div class="widget">
						<h3>@lang('message.Company')</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="{{route('about')}}">@lang('message.AboutUs')</a></li>
							<li><a href="{{route('faq')}}">@lang('message.FAQ')</a></li>
							<li><a href="{{route('privacy_and_policy')}}">@lang('message.PrivacyPolicy')</a></li>
							<li><a href="{{route('payment_and_cancellation')}}">@lang('message.PaymentCancellation')</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->


				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<div class="widget">
						<h3 >@lang('message.Contact')</h3>
						<address>@lang('message.ftr_address')</address>
						<ul class="list-unstyled links mb-4">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

			</div> <!-- /.row -->
		</div> 
		<div class="">
			<div class="row mt-3">
				<div class="col-12 text-center">
					<!-- <p class="mb-0 copyRight">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</p> -->
					<p class="mb-0 copyRight">@lang('message.copyright') &copy;<script>document.write(new Date().getFullYear());</script>. @lang('message.all_rights')</p>
				</div>
			</div> 
		</div> 
	</div>

		<!-- Preloader -->
		<div id="overlayer"></div>
		<div class="loader">
			<div class="spinner-border text-primary" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>