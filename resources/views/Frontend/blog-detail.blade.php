@extends('Frontend.Layouts.main_master')
@section('content')
<style>
	
	.blog__sidebar__recent {
		display:block;
	}
	.blog__sidebar__recent__item {
		display:block;
		overflow: hidden;
		margin-bottom: 20px;
	}
	.blog__sidebar__recent__item__pic {
    	float: left;
    	margin-right: 20px;
	}
	.blog__sidebar__recent__item__text h6 {
    	overflow: hidden;
		font-size: 15px;
		font-weight:400;
	}
	.blog__sidebar__recent__item__text span {
    	font-size: 12px;
    	color: #ccc;
    	text-transform: uppercase;
	}
</style>
	<div class="position-relative">
		<div class="hero overlay innerPage">
			<div class="img-bg rellax">
				<!-- <img src="images/banr/banr3.jpg" alt="Image" class="img-fluid banr-img"> -->
				<img src="{{ asset('Frontend/images/gBnr.png') }}" alt="Image" class="img-fluid banr-img">
			</div>
			<div class="container inner2pages-container">
				<div class="row align-items-center justify-content-center rowPadding py-2">
					<div class="col-lg-12">
						<h1 class="heading" data-aos="fade-up">@lang('message.blogs_dtl')</h1>
					</div>
					
				</div>
			</div>
				
			
		</div>
		
	</div>


	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 blog-content pe-md-5 pe-0">
					<p class="lead">@lang('message.blogs_dtl_p1')</p>
					<p>@lang('message.blogs_dtl_p2')</p>

					<blockquote><p>@lang('message.blogs_dtl_p3')</p></blockquote>

					<p>@lang('message.blogs_dtl_p4')</p>

					<p>@lang('message.blogs_dtl_p5')</p>

					<p>@lang('message.blogs_dtl_p6')</p>

					<blockquote><p>@lang('message.blogs_dtl_p7')</p></blockquote>

					<p>@lang('message.blogs_dtl_p8')</p>

					<p>@lang('message.blogs_dtl_p9')</p>


					<!-- <div class="pt-5">
						<p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
					</div> -->


					<!-- <div class="pt-5">
						<h3 class="mb-5">6 Comments</h3>
						<ul class="comment-list">
							<li class="comment">
								<div class="vcard bio">
									<img src="{{asset('Frontend/images/person_2.jpg')}}" alt="Free Website Template by Free-Template.co">
								</div>
								<div class="comment-body">
									<h3>Jacob Smith</h3>
									<div class="meta">January 9, 2018 at 2:21pm</div>
									<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
							</li>

							<li class="comment">
								<div class="vcard bio">
									<img src="{{asset('Frontend/images/person_3.jpg')}}" alt="Free Website Template by Free-Template.co">
								</div>
								<div class="comment-body">
									<h3>Chris Meyer</h3>
									<div class="meta">January 9, 2018 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>

								<ul class="children">
									<li class="comment">
										<div class="vcard bio">
											<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Free Website Template by Free-Template.co">
										</div>
										<div class="comment-body">
											<h3>Chintan Patel</h3>
											<div class="meta">January 9, 2018 at 2:21pm</div>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											<p><a href="#" class="reply">Reply</a></p>
										</div>


										<ul class="children">
											<li class="comment">
												<div class="vcard bio">
													<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Free Website Template by Free-Template.co">
												</div>
												<div class="comment-body">
													<h3>Jean Doe</h3>
													<div class="meta">January 9, 2018 at 2:21pm</div>
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p><a href="#" class="reply">Reply</a></p>
												</div>

												<ul class="children">
													<li class="comment">
														<div class="vcard bio">
															<img src="{{asset('Frontend/images/person_2.jpg')}}" alt="Free Website Template by Free-Template.co">
														</div>
														<div class="comment-body">
															<h3>Ben Afflick</h3>
															<div class="meta">January 9, 2018 at 2:21pm</div>
															<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
															<p><a href="#" class="reply">Reply</a></p>
														</div>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="comment">
								<div class="vcard bio">
									<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Free Website Template by Free-Template.co">
								</div>
								<div class="comment-body">
									<h3>Jean Doe</h3>
									<div class="meta">January 9, 2018 at 2:21pm</div>
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
							</li>
						</ul>

						<div class="comment-form-wrap pt-5">
							<h3 class="mb-5">Leave a comment</h3>
							<form action="#" class="">
								<div class="mb-3">
									<label for="name">Name *</label>
									<input type="text" class="form-control" id="name">
								</div>
								<div class="mb-3">
									<label for="email">Email *</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="mb-3">
									<label for="website">Website</label>
									<input type="url" class="form-control" id="website">
								</div>

								<div class="mb-3">
									<label for="message">Message</label>
									<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
								<div class="mb-3">
									<input type="submit" value="Post Comment" class="btn btn-primary btn-md text-white">
								</div>

							</form>
						</div>
					</div> -->

				</div>
				<div class="col-md-4 col-sm-12 sidebar">
					<div class="sidebar-box mb-1">
						<form action="#" class="search-form">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="@lang('message.type_keyword')">
							</div>
						</form>
					</div>
					<div class="sidebar-box">
                        <h3>Recent Blog</h3>
						<div class="blog__sidebar__recent ">
							<a href="#" class="blog__sidebar__recent__item">
								<div class="blog__sidebar__recent__item__pic">
									<img src="{{ asset('Frontend/images/recent-blog.jpg') }}" alt="">
								</div>
								<div class="blog__sidebar__recent__item__text">
									<h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
									<span>MAR 05, 2019</span>
								</div>
							</a>
							<a href="#" class="blog__sidebar__recent__item">
								<div class="blog__sidebar__recent__item__pic">
									<img src="{{ asset('Frontend/images/recent-blog.jpg') }}" alt="">
								</div>
								<div class="blog__sidebar__recent__item__text">
									<h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
									<span>MAR 05, 2019</span>
								</div>
							</a>
							<a href="#" class="blog__sidebar__recent__item">
								<div class="blog__sidebar__recent__item__pic">
									<img src="{{ asset('Frontend/images/recent-blog.jpg') }}" alt="">
								</div>
								<div class="blog__sidebar__recent__item__text">
									<h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
									<span>MAR 05, 2019</span>
								</div>
							</a>
						</div>
					</div>
					<div class="sidebar-box">
						<div class="categories">
							<h3>@lang('message.categories')</h3>
							<li><a href="#">@lang('message.catg1') <span>(12)</span></a></li>
							<li><a href="#">@lang('message.catg2') <span>(22)</span></a></li>
							<li><a href="#">@lang('message.catg3') <span>(37)</span></a></li>
							<li><a href="#">@lang('message.catg4') <span>(42)</span></a></li>
							<li><a href="#">@lang('message.catg5')<span>(14)</span></a></li>
						</div>
					</div>
					<div class="sidebar-box sidebar-box2">
						<img src="{{asset('Frontend/images/person_1.jpg')}}" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4 w-50 rounded-circle">
						<h3 class="text-black"> @lang('message.about_author')</h3>
						<p> @lang('message.about_author_line')</p>
						<p><a href="#" class="btn btn-primary btn-md text-white">@lang('message.read_more')</a></p>
					</div>
					

					<!-- <div class="sidebar-box">
						<h3 class="text-black">Paragraph</h3>
						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
					</div> -->
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
