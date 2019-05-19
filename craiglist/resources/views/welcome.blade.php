@extends('layouts.app')

@section('content')    
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            {{-- <div id="hot-post" class="row hot-post">
                <div class="col-md-8 hot-post-left">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/hot-post-1.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category">Lifestyle</a>
                            </div>
                            <h3 class="post-title title-lg"><a href="{{url('forum/thread')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            <ul class="post-meta">
                                <li><a href="author">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <div class="col-md-4 hot-post-right">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/hot-post-2.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <ul class="post-meta">
                                <li><a href="author">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/hot-post-3.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category">Fashion</a>
                                <a href="category">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                            <ul class="post-meta">
                                <li><a href="author">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
            </div> --}}
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

                    <div class="col-md-8">
                            <div class="col-md-6">
                                <!-- post -->
                                <div class="post post-widget">
                                    <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-1.jpg')}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category">Travel</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{url('forum/thread')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                    </div>
                                </div>
                                <!-- /post -->
            
                                <!-- post -->
                                <div class="post post-widget">
                                    <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-2.jpg')}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category">Technology</a>
                                            <a href="category">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                    </div>
                                </div>
                                <!-- /post -->
            
                                <!-- post -->
                                <div class="post post-widget">
                                    <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-3.jpg')}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                    </div>
                                </div>
                                <!-- /post -->
                            </div>

                            <div class="col-md-6">
                                <!-- post -->
                                <div class="post post-widget">
                                    <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-1.jpg')}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category">Travel</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{url('forum/thread')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                    </div>
                                </div>
                                <!-- /post -->
            
                                <!-- post -->
                                <div class="post post-widget">
                                    <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-2.jpg')}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category">Technology</a>
                                            <a href="category">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                    </div>
                                </div>
                                <!-- /post -->
            
                                <!-- post -->
                                <div class="post post-widget">
                                    <a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/widget-3.jpg')}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category">Lifestyle</a>
                                        </div>
                                        <h3 class="post-title"><a href="{{url('forum/thread')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                    </div>
                                </div>
                                <!-- /post -->
                            </div>
                        </div>
                
                <div class="col-md-4">

                    <!-- category widget -->
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2 class="title">Categories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#">Lifestyle <span>451</span></a></li>
                                <li><a href="#">Fashion <span>230</span></a></li>
                                <li><a href="#">Technology <span>40</span></a></li>
                                <li><a href="#">Travel <span>38</span></a></li>
                                <li><a href="#">Health <span>24</span></a></li>
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