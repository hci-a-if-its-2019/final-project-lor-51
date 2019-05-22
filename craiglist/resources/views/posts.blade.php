@extends('layouts.app')

@section('style')
<style>
    .modal-content {
        padding: 20px;
    }

</style>
@endsection

@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <p>{{$posts->count()}} threads found for category {{ucfirst($name)}}</p>
        <button class="btn btn-primary add" style="float: right">Add New Thread</button>
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="posts">

                    @foreach ($posts as $post)
                    <div class="post post-row">
                        <a class="post-img" href="{{url('forum/thread/' . $post->id)}}"><img
                                src="{{asset('storage/' .$post->img_location)}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="#">{{strtoupper($name)}}</a>
                            </div>
                            <h3 class="post-title"><a href="{{url('forum/thread'.'/' . $post->id)}}">{{$post->title}}</a>
                            </h3>
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

                </div>
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

                <!-- category widget -->
                @include('partials.categories')
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

<div class="modal fade post-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/posts" method="POST" class="post-form" enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="title">Title<small style="color: red"> *</small></label>
                    <input type="text" name="title" id="" class="form-control" required>
                </div>
                <div class="form-group">
					<label for="body">Body<small style="color: red"> *</small></label>
                    <div class="body" style="height: 150px;">

                    </div>
                    <input type="hidden" name="body">
                    <input type="hidden" name="category" value="{{$name}}">
                </div>
                <div class="form-group">
					<label for="pic">Cover Image<small style="color: red"> *</small></label>
                    <input type="file" name="img_location" id="" required>
                </div>
                <button class="btn btn-success" type="submit">Create Thread</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(".see-more").click(function () {
        for (let index = 0; index < 5; index++) {
            $(".posts").append(`<div class="post post-row">
				<a class="post-img" href="{{url('forum/thread')}}"><img src="{{asset('callie/img/post-13.jpg')}}" alt=""></a>
				<div class="post-body">
					<div class="post-category">
						<a href="#">Travel</a>
						<a href="#">Lifestyle</a>
					</div>
					<h3 class="post-title"><a href="{{url('forum/thread')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
					<ul class="post-meta">
						<li><a href="#">John Doe</a></li>
						<li>20 April 2018</li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
				</div>
			</div>`);
        }
    });

    var quill = new Quill('.form-group .body', {
        theme: 'snow'
    });

    $(".post-form").on('submit', function () {
        let quillContent = quill.root.innerHTML;
        $("input[name='body']").val(quillContent);
    });

    $(".add").click(function () {
        @if(Auth::check())
            $(".post-modal").modal('show');
        @else
            swal("Notice!", "Please log in first!", "error");
        @endif
    });

</script>
@endsection
