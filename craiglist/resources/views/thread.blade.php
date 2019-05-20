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
						<h3>Ea vix periculis sententiae, ea blandit pericula abhorreant pri.</h3>
						<p>Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p>
						<p>Est in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.</p>
						<figure class="pull-right">
							<img src="{{asset('callie/img/media-1.jpg')}}" alt="">
							<figcaption>Lorem ipsum dolor sit amet, mea ad idque detraxit,</figcaption>
						</figure>
						<p>Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>
						<p>Sit nulla quidam et, eam ea legimus deserunt neglegentur. Et veri nostrud vix, meis minimum atomorum ex sea, stet case habemus mea no. Ut dignissim dissentiet his, mei ea delectus delicatissimi, debet dissentiunt te duo. Sonet partiendo et qui, pro et veri solet singulis. Vidit viderer eleifend ad nam. Minimum eligendi suscipit ius et, vis ex laoreet detracto scripserit, at sumo sale solum pro.</p>
						<blockquote class="blockquote">
							<p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
							<footer class="blockquote-footer">John Doe</footer>
						</blockquote>
						<p>Mei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel. Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait oporteat eos, id usu sint numquam sententiae.</p>
						<figure>
							<img src="{{asset('callie/img/media-2.jpg')}}" alt="">
						</figure>
						<h3>Sit nulla quidam et, eam ea legimus deserunt neglegentur.</h3>
						<p>No possim singulis sea, dolores salutatus interpretaris eam ad. An singulis postulant his, an inermis urbanitas mel. Wisi veri noster eu est, diam ridens eum in. Omnium imperdiet patrioque quo in, est sumo persecuti abhorreant ei. Sed feugiat iracundia id, inermis percipit eu has.</p>
						<p>In vidit homero ullamcorper his, ea mea senserit constituto, et alia idque congue sit. Postea percipit his ne. Probo movet noluisse in nam, sed ex utroque inermis corrumpit, oratio tation vix at. Usu aperiri assentior at, eam et melius iudicabit pertinacia.</p>
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
									<div class="media media-author" style="background: #d6d6d6; border-radius: 5px; padding: 10px">
									<strong>Quote:</strong>
										<div class="media-left">
											<img class="media-object" src="{{asset('callie/img/avatar.png')}}" alt="">
										</div>
										<div class="media-body">
											<div class="media-heading">
												<h4>{{$comment->parentPost->name}}</h4>
											</div>
											<p>{{$comment->parentPost->message}}</p>
										</div>
									</div>
									<br>
									@endif
									<p>{{$comment->message}}</p>
									<a href="javascript:void(0)" class="reply" data-id="{{$comment->id}}" id="comment{{$comment->id}}">Reply</a>
									<button class="flag">Flag</button>

									<div class="row" style="display: none" id="comment-form{{$comment->id}}">
									<form class="post-reply" action="{{url('add/reply')}}" method="post">
									@csrf
										<div class="media-body">
											<div class="media-heading">
												<div class="col-md-4">
													<div class="form-group">
														<input class="input" type="text" name="name" placeholder="Name">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="input" name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<button class="secondary-button cancel" type="button" data-id="{{$comment->id}}">Cancel</button>
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
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Leave a reply</h3>
						</div>
						<form class="post-post" action="{{url('add/comment')}}" method="post">
							@csrf
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="input message"></div>
										{{-- <textarea class="input message" name="message" placeholder="Message"></textarea> --}}
									</div>
								</div>
								<input type="hidden" name="message">
								<div class="col-md-12">
									<button class="primary-button" type="submit">Submit</button>
								</div>
							</div>
						</form>
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
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories You Might Like</h2>
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
						<a href="#">See more categories</a>
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

	<div class="modal flag-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

				<textarea name="" id="others_text" cols="30" rows="10" style="display: none">Please specify your reasons</textarea>
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

	$(".post-post").on('submit', function() {
		let quillContent = quill.root.innerHTML;
		$("input[name='message']").val(quillContent);
	});

	$(".reply").click(function() {
	  	id = $(this).data("id");
	  	$(this).hide();
	  	$('#comment-form'+id).show();
	});

	$(".cancel").click(function() {
	  	id = $(this).data("id");
	  	$('#comment'+id).show();
	  	$('#comment-form'+id).hide();
	});

	$(".flag").click(function() {
		$(".flag-modal").modal('show');
	});

	$("#others").click(function() {
		let is_checked = $(this).is(":checked");
		if(is_checked) {
			$("#others_text").css('display', 'block');
		} else {
			$("#others_text").css('display', 'none');
		}		
	});

	$(".flag-save").click(function() {
		$(".modal").modal('hide');
		alert("Reply/ thread has been flagged! Craiglist staff will review your report.");
	});
</script>
@endsection

