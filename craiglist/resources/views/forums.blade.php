@extends('layouts.app')

@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="{{url('forums/filter')}}">
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Sort by:</label>
                        <div class="col-sm-6">
                            <select name="filter" id="" class="form-control">
                                <option value="nf">Newest First</option>
                                <option value="of">Oldest First</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" type="submit">Go</button>
                        </div>
                    </div>
                </form>        
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post -->
                <div class="post post-thumb">
                    <a class="post-img" href="{{url('forum/thread/' . $cover->id)}}"><img src="{{asset('storage/' . $cover->img_location)}}"
                            alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
							<a href="{{url('categories/'.$cover->category.'/threads')}}">{{ucfirst($cover->category)}}</a>
                        </div>
						<h3 class="post-title title-lg">
							<a href="{{url('forum/thread/' . $cover->id)}}">
								{{str_limit($cover->title, 100)}}
							</a>
						</h3>
                        <ul class="post-meta">
                            <li><a href="#">{{$cover->user->name}}</a></li>
                            <li>{{$cover->created_at}}</li>
                        </ul>
                    </div>
                </div>
                <!-- /post -->
				@foreach ($posts as $post)
					<div class="post post-row">
						<a class="post-img" href="{{url('forum/thread/' . $post->id)}}"><img src="{{asset('storage/' . $post->img_location)}}"
								alt=""></a>
						<div class="post-body">
							<div class="post-category">
									<a href="{{url('categories/'.$post->category.'/threads')}}">{{ucfirst($post->category)}}</a>
								</div>
							<h3 class="post-title"><a href="{{url('forum/thread/' . $post->id)}}">{{str_limit($post->title, 100)}}</a></h3>
							<ul class="post-meta">
								<li><a href="#">{{$post->user->name}}</a></li>
								<li>{{$post->created_at}}</li>
							</ul>
							<p>
								{!! str_limit(strip_tags($post->body), 250) !!}
							</p>
						</div>
					</div>					
				@endforeach

                <div class="section-row loadmore text-center">
					{{ $posts->links() }}
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

				@include('partials.categories')

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
