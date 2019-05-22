@extends('layouts.app')

@section('style')
<style>
    .flag {
        text-transform: uppercase;
        display: inline-block;
        padding: 5px 13px;
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        background-color: red;
        border-radius: 2px;
        -webkit-transition: 0.2s opacity;
        transition: 0.2s opacity;
        border: none;
    }

    .flag:hover {
        opacity: 0.6;
    }


    .rate {
        text-transform: uppercase;
        display: inline-block;
        padding: 5px 13px;
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        background-color: #5cb85c;
        border-radius: 2px;
        -webkit-transition: 0.2s opacity;
        transition: 0.2s opacity;
        border: none;
    }

    .rate:hover {
        opacity: 0.6;
    }
    textarea {
        resize: none; /* user can resize vertically, but width is fixed */
    }

</style>
@endsection

@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">

                <!-- post content -->
                <div class="section-row">
                    <img src="{{asset('storage/' .$post->img_location)}}" alt="" width="90%">
                    <h3>{{$post->title}}</h3>
                    {!! $post->body !!}
                </div>

                <div class="section-row">
                    <button class="flag">Flag</button>
                    <button class="btn btn-success rate">Rate</button>
                </div>
                <!-- /post content -->


                <!-- post comments -->
                <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">{{count($comments)}} Replies</h3>
                    </div>
                    <div class="post-comments">


                        <!-- comment -->
                        @foreach($comments as $comment)
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{asset('callie/img/avatar.png')}}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>{{$comment->name}}</h4>
                                    <span class="time">{{$comment->time}}</span>
                                </div>
                                @if($comment->parent>0)
                                <div class="media media-author"
                                    style="background: #d6d6d6; border-radius: 5px; padding: 10px">
                                    <strong>Quote:</strong>
                                    <div class="media-left">
                                        <img class="media-object" src="{{asset('callie/img/avatar.png')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h4>{{$comment->parentPost->name}}</h4>
                                        </div>
                                        <p>{!! $comment->parentPost->message !!}</p>
                                    </div>
                                </div>
                                <br>
                                @endif
                                <p>{!! $comment->message !!}</p>
                                <a href="javascript:void(0)" class="reply" data-id="{{$comment->id}}"
                                    id="comment{{$comment->id}}">Reply</a>
                                <button class="flag" comment-id="{{$comment->id}}">Flag</button>

                                <div class="row" style="display: none" id="comment-form{{$comment->id}}">
                                    <form class="post-reply" action="{{url('add/reply')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{$post->id}}">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="input" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="secondary-button cancel" type="button"
                                                data-id="{{$comment->id}}">Cancel</button>
                                            <button class="primary-button" type="submit" id="post">Post</button>
                                        </div>
                                        <input type="hidden" name="parent" value="{{$comment->id}}">
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /comment -->
                    </div>
                </div>
                <!-- /post comments -->

                <!-- post reply -->
                <div class="section-row" id="wuaaa">
                    <div class="section-title">
                        <h3 class="title">Leave a reply</h3>
                    </div>
                    @if (Auth::check())
                    <form class="post-post" action="{{url('add/comment')}}" method="post">
                        @csrf
                        <div class="row">
                            {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="input" type="text" name="name" placeholder="Name">
                                    </div>
                                </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input message" style="height: 150px;"></div>
                                    {{-- <textarea class="input message" name="message" placeholder="Message"></textarea> --}}
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="hidden" name="message">
                            <div class="col-md-12">
                                <button class="primary-button" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    @else
                    <form class="#" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input message"></div>
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="hidden" name="message">
                            <div class="col-md-12">
                                <button class="primary-button" type="button">Please log in to reply</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
                <!-- /post reply -->
            </div>
            <div class="col-md-4">
                <!-- ad widget -->
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

<div class="modal flag-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Flag this reply/ thread</h4>
            </div>
            <div class="modal-body">
                <p>Which of these policies have this reply/ thread violated?</p>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Abusive Materials</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" value="">Hate Speech</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" value="">Discrimination towards race, gender, religion etc.</label>
                </div>

                <div class="checkbox">
                    <label><input id="others" type="checkbox" value="">Others</label>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Please specify your reasons</label>
                    <textarea name="" id="others_text" cols="30" rows="5" class="form-control" id="exampleFormControlTextarea1"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger flag-save">Flag</button>
            </div>
        </div>
    </div>
</div>

<!-- /SECTION -->
@endsection

@section('script')
<script>
    var quill = new Quill('.input.message', {
        theme: 'snow'
    });

    $(".post-post").on('submit', function () {
        let quillContent = quill.root.innerHTML;
        $("input[name='message']").val(quillContent);
    });

    $(".reply").click(function () {
        id = $(this).data("id");
        $(this).hide();
        $('#comment-form' + id).show();
        $('#wuaaa').hide();
    });

    $(".cancel").click(function () {
        id = $(this).data("id");
        $('#comment' + id).show();
        $('#comment-form' + id).hide();
        $('#wuaaa').show();
    });

    $(".flag").click(function () {
        $(".flag-modal").modal('show');
    });

    $(".rate").click(function () {
        swal("Done", "Thread has been rated!.", "success");
    });

    $("#others").click(function () {
        let is_checked = $(this).is(":checked");
        if (is_checked) {
            $("#others_text").css('display', 'block');
        } else {
            $("#others_text").css('display', 'none');
        }
    });

    $(".flag-save").click(function () {
        $(".modal").modal('hide');
        swal("Done", "Content has been flagged! Craiglist staff will review your report.", "success");
    });

</script>
@endsection
