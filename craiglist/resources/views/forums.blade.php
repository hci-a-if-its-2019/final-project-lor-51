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
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
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
								<a href="category.html">Travel</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
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
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
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
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
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
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
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
								<a href="category.html">Health</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="{{url('forum/thread')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
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

								{{-- <li><a href="?forumID=5178" target="_top">android forum <span class="threadcount">4</span></a></li>
								<li><a href="?forumID=3232" target="_top">apple / mac <span class="threadcount">23</span></a></li>
								<li><a href="?forumID=49" target="_top">arts forum <span class="threadcount">10</span></a></li>
								<li><a href="?forumID=1564" target="_top">astrophysics <span class="threadcount">17</span></a></li>
								<li><a href="?forumID=78" target="_top">atheism <span class="threadcount">82</span></a></li>
								<li><a href="?forumID=5" target="_top">automotive <span class="threadcount">43</span></a></li>
								<li><a href="?forumID=88" target="_top">beauty / fashion</a></li>
								<li><a href="?forumID=95" target="_top">bicycling <span class="threadcount">25</span></a></li>
								<li><a href="?forumID=4664" target="_top">boomers <span class="threadcount">46</span></a></li>
								<li><a href="?forumID=129" target="_top">car free <span class="threadcount">6</span></a></li>
								<li><a href="?forumID=47" target="_top">celebrity gossip <span class="threadcount">23</span></a></li>
								<li><a href="?forumID=128" target="_top">cl - categories <span class="threadcount">8</span></a></li>
								<li><a href="?forumID=1" target="_top">cl - cities/sites <span class="threadcount">1</span></a></li>
								<li><a href="?forumID=8" target="_top">cl - feedback <span class="threadcount">43</span></a></li>
								<li><a href="?forumID=3" target="_top">cl - flag help <span class="threadcount">286</span></a></li>
								<li><a href="?forumID=9" target="_top">cl - help desk <span class="threadcount">47</span></a></li>
								<li><a href="?forumID=3132" target="_top">cl - maps <span class="threadcount">2</span></a></li>
								<li><a href="?forumID=1872" target="_top">classical music <span class="threadcount">3</span></a></li>
								<li><a href="?forumID=34" target="_top">computer forum <span class="threadcount">33</span></a></li>
								<li><a href="?forumID=83" target="_top">crafts forum <span class="threadcount">3</span></a></li>
								<li><a href="?forumID=123" target="_top">dance <span class="threadcount">6</span></a></li> --}}
							
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					{{-- <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div> --}}
					<!-- /newsletter widget -->

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
									<a href="category.html">Lifestyle</a>
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
									<a href="category.html">Technology</a>
									<a href="category.html">Lifestyle</a>
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
									<a href="category.html">Health</a>
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
									<a href="category.html">Health</a>
									<a href="category.html">Lifestyle</a>
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