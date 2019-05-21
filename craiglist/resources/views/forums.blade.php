@extends('layouts.app')

@section('content')    
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/hot-post-3.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('categories/fashion/threads')}}">Fashion</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-13.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('categories/travel/threads')}}">Travel</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-6.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('categories/fashion/threads')}}">Fashion</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-8.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('categories/fashion/threads')}}">Fashion</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-12.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-7.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{url('categories/health/threads')}}">Health</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
						</div>
					</div>
					<!-- /post -->

					<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>
				</div>

				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="{{asset('callie/img/ad-3.jpg')}}" alt="">
						</a>
					</div>
					<!-- /ad widget -->

					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@include('partials/categories')
							</ul>
						</div>
					</div>

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Forums</h2>
						</div>
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-3.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="{{url('forum/thread')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-2.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
								<a href="{{url('categories/technology/threads')}}">Technology</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-4.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
								<a href="{{url('categories/health/threads')}}">Health</a>
								</div>
								<h3 class="post-title"><a href="{{url('forum/thread')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-5.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
								<a href="{{url('categories/health/threads')}}">Health</a>
								<a href="{{url('categories/lifestyle/threads')}}">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /post widget -->

					<!-- galery widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Instagram</h2>
						</div>
						<div class="galery-widget">
							<ul>
								<li><a href="#"><img src="{{asset('callie/img/galery-1.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('callie/img/galery-2.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('callie/img/galery-3.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('callie/img/galery-4.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('callie/img/galery-5.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('callie/img/galery-6.jpg')}}" alt=""></a></li>
							</ul>
						</div>
					</div>
					<!-- /galery widget -->

					<!-- Ad widget -->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="{{asset('callie/img/ad-1.jpg')}}" alt="">
						</a>
					</div>
					<!-- /Ad widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@endsection