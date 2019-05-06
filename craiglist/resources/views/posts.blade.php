@extends('layouts.app')

@section('content')    
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
		<p>{{$amount}} threads found for category {{ucfirst($name)}}</p>
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<div class="posts">
					@for ($i = 0; $i < 5; $i++)
						<!-- post -->

						@if ($i % 2 == 0)
						<div class="post post-row">
							<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-13.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">{{strtoupper($name)}}</a>									
								</div>
								<h3 class="post-title"><a href="{{url('forum/thread')}}">Should I quit my apprenticeship and and chase my dreams?</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">John Doe</a></li>
									<li>20 April 2018</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
							</div>
						</div>						
						@else

						
						<div class="post post-row">
							<a class="post-img" href="{{url('forum/thread')}}"><img src="data:image/jpeg;base64,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" width="300" height="200" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">{{strtoupper($name)}}</a>									
								</div>
								<h3 class="post-title"><a href="{{url('forum/thread')}}">
									10 things in tech you need to know today								
								</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">John Doe</a></li>
									<li>20 April 2018</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
							</div>
						</div>	
						@endif

						<!-- /post -->
					@endfor		
					</div>							
					<div class="section-row loadmore text-center">
						<button class="primary-button see-more">Load More</button>
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

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								<li><a href="/categories/lifestyle/451/threads">Lifestyle <span>451</span></a></li>
								<li><a href="/categories/Fashion/230/threads">Fashion <span>230</span></a></li>
								<li><a href="/categories/Technology/40/threads">Technology <span>40</span></a></li>
								<li><a href="/categories/Travel/38/threads">Travel <span>38</span></a></li>
								<li><a href="/categories/Health/24/threads">Health <span>24</span></a></li>

								<li><a href="/categories/android forum/4/threads" target="_top">android forum <span class="threadcount">4</span></a></li>
								<li><a href="/categories/apple mac/23/threads" target="_top">apple / mac <span class="threadcount">23</span></a></li>
								<li><a href="/categories/arts forum/10/threads" target="_top">arts forum <span class="threadcount">10</span></a></li>
								<li><a href="/categories/astrophysics/17/threads" target="_top">astrophysics <span class="threadcount">17</span></a></li>
								<li><a href="/categories/atheism/82/threads" target="_top">atheism <span class="threadcount">82</span></a></li>
								<li><a href="/categories/automotive/43/threads" target="_top">automotive <span class="threadcount">43</span></a></li>

								<li><a href="/categories/beauty fashion/230/threads" target="_top">beauty / fashion<span class="threadcount">230</span></a></li>
								<li><a href="/categories/bicycling/25/threads" target="_top">bicycling <span class="threadcount">25</span></a></li>								
								<li><a href="/categories/boomers/46/threads" target="_top">boomers <span class="threadcount">46</span></a></li>
								<li><a href="/categories/car free/6/threads" target="_top">car free <span class="threadcount">6</span></a></li>
								<li><a href="/categories/celebrity gossip/23/threads" target="_top">celebrity gossip <span class="threadcount">23</span></a></li>
								<li><a href="/categories/cl - categories/8/threads" target="_top">cl - categories <span class="threadcount">8</span></a></li>
								<li><a href="/categories/cl - cities/sites/1/threads" target="_top">cl - cities/sites <span class="threadcount">1</span></a></li>
								<li><a href="/categories/cl - feedback/43/threads" target="_top">cl - feedback <span class="threadcount">43</span></a></li>
								<li><a href="/categories/cl - flag help/286/threads" target="_top">cl - flag help <span class="threadcount">286</span></a></li>
								<li><a href="/categories/cl - help desk/47/threads" target="_top">cl - help desk <span class="threadcount">47</span></a></li>
								<li><a href="/categories/cl - maps/2/threads" target="_top">cl - maps <span class="threadcount">2</span></a></li>
								<li><a href="/categories/classical music/3/threads" target="_top">classical music <span class="threadcount">3</span></a></li>
								<li><a href="/categories/computer forum/33/threads" target="_top">computer forum <span class="threadcount">33</span></a></li>
								<li><a href="/categories/crafts forum/3/threads" target="_top">crafts forum <span class="threadcount">3</span></a></li>
								<li><a href="/categories/dance/6/threads" target="_top">dance <span class="threadcount">6</span></a></li>
							
							</ul>
							<a href="#">See more categories</a>
						</div>
					</div>
					<!-- /category widget -->

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

@section('script')
<script>	
	$(".see-more").click(function() {
		for (let index = 0; index < 5; index++) {
			$(".posts").append(`<div class="post post-row">
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
						</div>`)			;
			
		}
	});
</script>
@endsection