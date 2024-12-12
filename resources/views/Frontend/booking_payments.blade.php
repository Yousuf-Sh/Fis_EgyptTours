@extends('Frontend.Layouts.main_master')
@section('content')

		<div class="section bg-light pt-0mt170">
			<div class="container ">
				<!-- Stepper -->
				<div class="stepper mx-auto">
					<!-- Progress Line -->
					<div class="progress-line" id="progress-line" style="width: 16%;"></div>
			
					<!-- Steps -->
					<div class="step step-1 active" onclick="showStep(1)">
						<div class="step-number">1. @lang('message.booking_detail')</div>
						<div class="step-circle"></div>
					</div>
					<div class="step step-2" onclick="showStep(2)">
						<div class="step-number">2. @lang('message.invoice')</div>
						<div class="step-circle"></div>
					</div>
					<div class="step step-3" onclick="showStep(3)">
						<div class="step-number">3. @lang('message.payment')</div>
						<!-- <div class="step-number">3. Confirmation</div> -->
						<div class="step-circle"></div>
					</div>
				</div>
			
				<!-- Step Content -->
				<div id="step1-content" class="step-content active">
					<div class="bg-light paymentCard"> 
						<div class="row m-0"> 
							<div class="col-lg-8 col-md-12"> 
								<div class="row"> 
									<div class="col-12 mb-4"> 
										<div class="row box-right"> 
											<div class="col-md-12 ps-0 "> 
												<h3 class="">@lang('message.booking_detail')</h3>
											</div> 
											<div class="col-12 px-0">
												 
												<div class="timeline-line1">
													
													<div class="row">
														<div class="col-md-6 pt-3 pb-1">
															<!-- <div class="label-input"> -->
																<label class="form-label">@lang('message.step1_destination_orgin_lbl') *</label>
																<div class="input-group">
																	<!-- <i class="bi bi-calendar"></i> -->
																	<input type="date" class="form-control payment-input" placeholder="" >
																</div>
														  	<!-- </div> -->
														</div>
													</div>
												</div>
											</div>
											

											
										</div> 
									</div> 
										 
									<div class="col-12 px-0 mb-4"> 
										<div class="box-right"> 
											<h3 class="">@lang('message.traveller')</h3>
											<div class="row">
												<div class="col-lg-12">
													<div class="bottom-values border-top-0">
														<div class="bottom-tirp-left-values">
															<div class="label">@lang('message.noTraveller')
																
															</div>
															<div class="bottom-label-subtitle">@lang('message.including_infants')
																
															</div>
														</div>
														
														<div id="payment-qnty" class="mt-2 p-3">
															
															<div class="payment-counter">
																<button type="button" class="btn btn-outline-secondary btnQty" onclick="decreaseQuantity1()">−</button>
																	<input type="text" id="quantityInput" class="form-control text-center" value="1" readonly="">
																<button type="button" class="btn btn-outline-secondary btnQty" onclick="increaseQuantity1()">+</button>
															</div>
														</div>
														
													</div>
												</div>
												<div class="col-lg-12">
													<div class="bottom-values border-top-0">
														<div class="bottom-tirp-left-values">
															<div class="label">@lang('message.add_child')
															</div>
															<div class="bottom-label-subtitle">@lang('message.add_child_required')
																
															</div>
														</div>
														
														<div class="form-check form-switch form-switch-xl">
															<input class="form-check-input" type="checkbox" role="switch" id="flexSwitch2airport">
														</div>
														
													</div>
												</div>
												
											</div>	 
										</div> 

										<div class="timeline-line3-top-airport" style="display: none;">
											<div>
												<div class="bottom-values border-top-0">
													<div class="bottom-tirp-left-values">
														<div class="label">@lang('message.noTraveller')
														</div>
														<div class="bottom-label-subtitle">@lang('message.including_infants')
														</div>
													</div>
													
													<div id="payment-qnty" class="mt-2 px-3">
														<div class="payment-counter bg-white">
															<button type="button" class="btn btn-outline-secondary btnQty" onclick="decreaseQuantity2()">−</button>
																<input type="text" id="quantityInput2" class="form-control text-center" value="1" readonly="">
															<button type="button" class="btn btn-outline-secondary btnQty" onclick="increaseQuantity2()">+</button>
														</div>
													</div>
													 
												</div>
												<span class="text-orange">@lang('message.weight') : 9–18 kg</span>
											</div>	
											<hr>
											<div>
												<div class="bottom-values border-top-0">
													<div class="bottom-tirp-left-values">
														<div class="label">@lang('message.noTraveller')
														</div>
														<div class="bottom-label-subtitle">@lang('message.including_infants')
															
														</div>
													</div>
													
													<div id="payment-qnty" class="mt-2 px-3">
														<div class="payment-counter bg-white">
															<button type="button" class="btn btn-outline-secondary btnQty" onclick="decreaseQuantity3()">−</button>
																<input type="text" id="quantityInput3" class="form-control text-center" value="1" readonly="">
															<button type="button" class="btn btn-outline-secondary btnQty" onclick="increaseQuantity3()">+</button>
														</div>
													</div>
												</div>
												<span class="text-orange">@lang('message.weight'): 9–18 kg</span>
											</div>
										</div>

									</div> 
									<div class="col-12 px-0 mb-4"> 
										<div class="box-right"> 
											<h3 class="">@lang('message.contact_detail')</h3>
											<div class="row">
												<div class="col-lg-12">
													<div class="mt-5 mb-4">
														<label class="form-label">@lang('message.name_surname') *</label>
														<input type="text" class="form-control payment-input" placeholder="Smint Jhob">
													</div>
												</div>
											</div>
											<div class="row">	
												<div class="col-lg-6 ">
													<div class=" mb-4">
														<label class="form-label">@lang('message.email') *</label>
														<input type="text" class="form-control payment-input" placeholder="john.smith@email.com">
													</div>
												</div>
												<div class="col-lg-6 d-flex align-items-center">
													<div class="">
														<span class="input-span">@lang('message.email_term')</span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class=" mb-4 position-relative">
														<label class="form-label">@lang('message.phone_country_code') *</label>
														<div class="flag-img-top">
															<img src="{{ asset('Frontend/images/ae.png') }}" alt="" class="flag-img">
														</div>
														<input type="tel" class="form-control payment-input phoneInput" placeholder="+27 71 123 4567">
													</div>
												</div>
												<div class="col-lg-6 d-flex align-items-center">
													<div class="">
														<span class="input-span">@lang('message.phone_country_code_term')</span>
													</div>
												</div>

												
											</div>	 
											<div class="form-check ">
												<input class="form-check-input custom-checkbox" type="checkbox" value="" id="CheckBoxContactDriver">
												<label class="form-check-label custom-checkbox-label" for="flexCheckDefault">@lang('message.want_driver_contact')
												</label>
												<div class="driver-discrip text-muted" style="display: none;">@lang('message.driver_contact_24')
													
												</div>	
												  
											</div>
											<div class="driver-contact" style="display: none;">
												<label class="form-label">@lang('message.choose_preferable_way')</label>
												<div class="form-check">
													<input class="form-check-input" checked type="radio" name="flexRadioDefault" id="checkInputMessenger">
													<label class="form-check-label" for="flexRadioDefault1">@lang('message.messenger')
														
													</label>
												</div>
												<div class="col-lg-6 social">
													<div class=" mb-4 position-relative">
														<div class="flag-img-top">
															<img src="{{ asset('Frontend/images/ae.png') }}" alt="" class="flag-img">
														</div>
														<input type="tel" class="form-control payment-input phoneInput" placeholder="+27 71 123 4567">
													</div>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="checkInputPhoneCall">
													<label class="form-check-label" for="flexRadioDefault2">@lang('message.phone_call')
														
													</label>
												</div>
												<div class="col-lg-6 phone" style="display: none;">
													<div class=" mb-4 position-relative">
														<div class="flag-img-top">
															<img src="{{ asset('Frontend/images/ae.png') }}" alt="" class="flag-img">
														</div>
														<input type="tel" class="form-control payment-input phoneInput" placeholder="+27 71 123 4567">
													</div>
												</div>
											</div>	
										</div> 
									</div> 
									


									<div class="col-12 px-0 mb-4"> 
										<div class="box-right"> 
											<h3 class="">@lang('message.comments_order')</h3>
											<div class="col-lg-12">
												<div class="bottom-values border-top-0 mb-3">
													<div class="bottom-tirp-left-values">
														<div class="label">@lang('message.example_bringing_luggage')
														</div>
														<div class="bottom-label-subtitle">@lang('message.appropriate_car')
														</div>
													</div>
													
													
													<div class="form-check form-switch form-switch-xl">
														<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchComments">
													</div>
													
												</div>
											</div>
											<div class="col-lg-12 commentsDiv" style="display:none">
												<div class="mb-3">
													<textarea class="form-control payment-input" id="exampleFormControlTextarea1" rows="3" 
													placeholder="@lang('message.bringing_carriage')"></textarea>
												</div>
												<div class="comment-field__description">@lang('message.any_comment_order')
              										
            									</div>
											</div>	 
											
												
										</div> 
									</div> 
									<!-- <div class="col-12 px-0 mb-4"> 
										<div class="box-right"> 
											<h3 class="">@lang('message.promo_code')</h3>
											<div class="row">
												<div class="col-lg-4 ">
													<div class=" mb-4">
														<input type="text" class="form-control payment-input" placeholder="john.smith@email.com">
													</div>
												</div>
												<div class="col-lg-2 ">
													<div class="mb-md-4 mb-0">
														<button class="btn btn-primary w-100">@lang('message.apply')</button>
													</div>
												</div>
											</div>	 
										</div> 
									</div>  -->
									
								</div> 
							</div>
							<div class="col-lg-4 col-md-12 ps-lg-5 p-0 "> 
								<div class="box-left"> 
									<div class="d-flex align-items-center paymentSideTopBox">
										<div class="me-2 iconCarPayment">
											<i class="bi bi-car-front-fill"></i>
										</div>
										<div class="">
											<h6 class="mb-0">Solo</h6>
											<p class="mb-0">@lang('message.upto') 3 @lang('message.traveller'), 2 @lang('message.pieces_of_baggage')</p>
										</div>
									</div> 
									<hr>
									<div>
										<p><i class="bi bi-calendar-check text-orange" style="font-size: 16px;"></i> 2024-11-26 12:30 GMT(+1)</p>
									</div>
									
								</div> 

								<div class="box-left mt-4"> 
									<div class="d-flex align-items-center justify-content-between">
										<h3 class="mb-0">@lang('message.total')</h3>
										<h3 class="mb-0 text-orange">500USD</h3>
									</div>
																	
								</div> 
							</div>

						</div> 
						<div class="stepNxt-btnDiv">	
							<button class="btn btn-primary step-btn-width1" onclick="nextStep(2)" style="width: 67%;">@lang('message.next')</button> 
						</div>
					</div> 
				</div>
			
				<div id="step2-content" class="step-content" style="display: none;">
					<div class="bg-light paymentCard"> 
						<div class="row m-0"> 
							
							<div class="col-lg-12 col-md-12"> 
								<div class="box-left"> 
									<h3 class="">Solo</h3> 
									<!-- <h3 class="">@lang('message.excursions_type')</h3>  -->
									<!-- <p class="fw-bold h7">Alex Parkinson</p> 
									<p class="textmuted h8">3897 Hickroy St, salt Lake city</p> 
									<p class="textmuted h8 mb-2">Utah, United States 84104</p>  -->
									<div class="h8"> 
										<div class="row m-0 border mb-3"> 
											<div class="col-4 h8 pe-0 ps-2"> 
												<p class="textmuted py-2">@lang('message.packages')</p> 
												<span class="d-block py-2 border-bottom">@lang('message.from') @lang('message.oct') 2024 @lang('message.to') @lang('message.aprl') 2025</span> 
												<span class="d-block py-2">@lang('message.taxes')</span> 
											</div> 
											<div class="col-2 text-center p-0"> 
												<p class="textmuted p-2">Adult</p> 
												<span class="d-block p-2 border-bottom">2</span> 
												<span class="d-block p-2">1</span> 
											</div> 
											<div class="col-2 text-center p-0"> 
												<p class="textmuted p-2">hours</p> 
												<span class="d-block p-2 border-bottom">2</span> 
												<span class="d-block p-2">1</span> 
											</div> 
											<div class="col-2 p-0 text-center h8 border-end"> 
												<p class="textmuted p-2">@lang('message.price')</p> 
												<span class="d-block border-bottom py-2">
													<span class="fas fa-dollar-sign"></span>500
												</span> 
												<span class="d-block py-2 ">
													<span class="fas fa-dollar-sign"></span>400
												</span> 
											</div> 
											<div class="col-2 p-0 text-center"> 
												<p class="textmuted p-2">@lang('message.total')</p> 
												<span class="d-block py-2 border-bottom">
													<span class="fas fa-dollar-sign"></span>1000
												</span> 
												<span class="d-block py-2">
													<span class="fas fa-dollar-sign"></span>400
												</span> 
											</div> 
										</div> 
										<div class="row m-0  mb-3"> 
											<div class="col-10   pe-2 text-end">
												<span class="py-2 h7">@lang('message.total_amount')</span> 
											</div>
											<div class="col-2   pe-0 ps-2 text-center">
												<span class="py-2 h7"><span class="fas fa-dollar-sign"></span>1400</span> 
											</div> 
										</div> 
										
									</div> 
									 
								</div> 
							</div> 
						</div> 
						<div class="row m-0"> 
							<div class="col-md-12"> 
								<div class="d-flex mt-4 justify-content-lg-start justify-content-center"> 
									<button class="btn btn-secondary btn-blue border-0 step-btn-width2" onclick="nextStep(1)" style="width: 49%;margin-right: 22px;">@lang('message.previous')</button>
									<button class="btn btn-primary step-btn-width2" onclick="nextStep(3)" style="width: 49% ;">@lang('message.next')</button>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			
				<div id="step3-content" class="step-content" style="display: none;">
					<div class="row mx-auto justify-content-center">
						<div class="col-md-8">
							<div class="box-left "> 
								<div class=""> 
									<h3 class=" mb-1">@lang('message.pay_invoice')</h3> 
									<p class="textmuted h8 mb-2 mt-3">@lang('message.make_payment_para')</p> 
									<div class="form"> 
										<div class="row"> 
											<div class="col-12"> 
												<div class="card border-0"> 
													<input class="form-control " type="text" placeholder="@lang('message.booking_no')"> 
													<!-- <span class="far fa-credit-card"></span>  -->
												</div> 
											</div> 
											<div class="col-6"> 
												<input class="form-control my-3" type="text" placeholder="MM/YY"> 
											</div> 
											<div class="col-6"> 
												<input class="form-control my-3" type="text" placeholder="cvv"> 
											</div> 
											<!-- <p class="p-blue h8 fw-bold mb-3">MORE PAYMENT METHODS</p>  -->
										</div> 
										<div class="btn btn-primary d-block mt-2 " id="paymentBtn" onclick="nextStep(4)">@lang('message.pay') $ 1400</div>
										<!-- <div class="btn btn-primary d-block mt-2" id="paymentBtn">PAY $ 1400</div>  -->
									</div> 
								</div> 
							</div>
						</div>
						 
					</div>
				</div>	
				<div id="step4-content" class="step-content" style="display: none;">
					<div class="bg-light paymentCard"> 
						<div class="checkout-container2">
							<div class="card px-4 border-0">
								<div class="main">
									<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
										<circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle>
										<path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path>
									</svg>
									
									<div class="text congrats">
										<h2>@lang('message.congratulations')!</h2>
										<p>@lang('message.thank_line') <span class="shown_name"></span>.</p>
										<p>@lang('message.payment_success')</p>
										<div class="payment-details mt-3">
											<p><strong>@lang('message.booking_no'):</strong> **** **** 1234</p>
											<p><strong>@lang('message.payment_amount'):</strong> $1400</p>
											<p><strong>@lang('message.payment_date'):</strong> November 15, 2024</p>
										</div>
										<p class="mt-3">@lang('message.contact_line')</p>
										<a href="{{route('excursions')}}" class="btn btn-primary mt-1">@lang('message.congrat_btn2')</a>
									</div>
								</div>       
								
							</div>
						</div>
						<!--  <button class="btn btn-secondary btn-blue"></button> -->
						<!--<button class="btn btn-success" onclick="completeWizard()">Finish</button> -->
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
		 
		




<script>
	function showStep(step) {
    document.querySelectorAll('.step').forEach((el, index) => {
        el.classList.remove('active', 'completed');
        if (index + 1 < step) {
            el.classList.add('completed');
        } else if (index + 1 === step) {
            el.classList.add('active');
        }
    });

    // Hide all step content and show the current step content
    document.querySelectorAll('.step-content').forEach(el => el.style.display = 'none');
    const currentStepContent = document.getElementById('step' + step + '-content');
    currentStepContent.style.display = 'block';

    // Hide the stepper when on step 4
    const stepper = document.querySelector('.stepper');
    if (step === 4) {
        stepper.style.display = 'none'; // Hide the stepper
    } else {
        stepper.style.display = 'flex'; // Show the stepper for other steps
    }

    // Scroll the active step line into view (if visible)
    if (step !== 4) {
        const activeStep = document.querySelector('.step-' + step);
        activeStep.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    updateProgressLine(step);
}

// Function to move to the next step
function nextStep(step) {
    showStep(step);
}

// Update the progress line based on the current step
function updateProgressLine(step) {
    const progressLine = document.getElementById('progress-line');
    const stepWidths = {1: '16%', 2: '50%', 3: '100%', 4: '100%'};
    progressLine.style.width = stepWidths[step];
}

function completeWizard() {
    alert('Wizard Completed!');
}


</script>	





<script>
	function increaseQuantity1() {
	  const quantityInput = document.getElementById("quantityInput");
	  let currentValue = parseInt(quantityInput.value);
	  quantityInput.value = currentValue + 1;
	}
  
	function decreaseQuantity1() {
	  const quantityInput = document.getElementById("quantityInput");
	  let currentValue = parseInt(quantityInput.value);
	  if (currentValue > 1) {
		quantityInput.value = currentValue - 1;
	  }
	}
	function increaseQuantity2() {
	  const quantityInput = document.getElementById("quantityInput2");
	  let currentValue = parseInt(quantityInput.value);
	  quantityInput.value = currentValue + 1;
	}
  
	function decreaseQuantity2() {
	  const quantityInput = document.getElementById("quantityInput2");
	  let currentValue = parseInt(quantityInput.value);
	  if (currentValue > 1) {
		quantityInput.value = currentValue - 1;
	  }
	}
	function increaseQuantity3() {
	  const quantityInput = document.getElementById("quantityInput3");
	  let currentValue = parseInt(quantityInput.value);
	  quantityInput.value = currentValue + 1;
	}
  
	function decreaseQuantity3() {
	  const quantityInput = document.getElementById("quantityInput3");
	  let currentValue = parseInt(quantityInput.value);
	  if (currentValue > 1) {
		quantityInput.value = currentValue - 1;
	  }
	}
	function increaseQuantityGoods() {
	  const goodsInput = document.getElementById("goodsInput");
	  let currentValue = parseInt(goodsInput.value);
	  goodsInput.value = currentValue + 1;
	}
  
	function decreaseQuantityGoods() {
	  const goodsInput = document.getElementById("goodsInput");
	  let currentValue = parseInt(goodsInput.value);
	  if (currentValue > 1) {
		goodsInput.value = currentValue - 1;
	  }
	}
</script>



	
