@extends('layouts.app')

@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
</div>
<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-8">
                <div class="col-md-6">
                    <!-- post -->
                    @foreach ($posts1 as $post)
                        <div class="post post-widget">
                            <a class="post-img" href="{{url('forum/thread')}}"><img
                                    src="{{asset('storage/' . $post->img_location)}}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category">{{ucfirst($post->category)}}</a>
                                </div>
                                <h3 class="post-title"><a href="{{url('forum/thread')}}">{{$post->title}}</a></h3>
                            </div>
                        </div>
                    @endforeach
                    <!-- /post -->
                </div>

                <div class="col-md-6">
                    @foreach ($posts2 as $post)
                        <!-- post -->
                        <div class="post post-widget">
                            <a class="post-img" href="{{url('forum/thread')}}"><img
                                    src="{{asset('storage/' . $post->img_location)}}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category">{{ucfirst($post->category)}}</a>
                                </div>
                                <h3 class="post-title"><a href="{{url('forum/thread')}}">{{$post->title}}</a></h3>
                            </div>
                        </div>
                        <!-- /post -->
                    @endforeach
                </div>

            <div class="col-md-4">

                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            @include('partials.categories')
                        </ul>
                    </div>
                </div>
                <!-- /category widget -->

            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ad -->
            <div class="col-md-12 section-row text-center">
                <a href="#" style="display: inline-block;margin: auto;">
                    <img class="img-responsive" src="{{asset('callie/img/ad-2.jpg')}}" alt="">
                </a>
            </div>
            <!-- /ad -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    @endsection
