@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>{{$post->title}} | {{config('app.name')}}</title>

	<meta name="author" content="themsflat.com">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('stylesheet/bootstrap.min.css') }}">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('stylesheet/style.css') }}">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('stylesheet/colors/color1.css') }}" id="colors">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="{{ asset('stylesheet/responsive.css') }}">

	<style>
    	body{
    		background-color: black;
    		color: white;
    	}
    </style>
</head>
@endsection

@section('main-content')
		
		{{-- <div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">BLOG DETAILS</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="{{ route('landingpage') }}" title="">Home</a></li>
								<li class="dot">/</li>
								<li>{{$post->title}}</li>
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		</div><!-- /.page-title --> --}}

		<section class="main-content" style="background-color: black; color: white;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<article class="main-post main-single">
							<div class="featured-post">
								<a href="#" title="">
									<img src="{{postImage($post->image)}}" alt="{{$post->title}}" />
								</a>
							</div><!-- /.featured-post -->
							<div class="entry-title">
								<h2 style="color: white;">
									{{$post->title}}
								</h2>
								<ul class="meta-left">
									<li class="post-date">
										<i class="fa fa-calendar"></i> {{$post->created_at->format('d M, Y')}}
									</li>
									{{-- <li class="post-view">
										<i class="fa fa-eye"></i> 55
									</li>
									<li class="post-comment">
										<i class="fa fa-comment"></i> 12
									</li> --}}
								</ul>
							</div>
							<div class="entry-content">
								{!! $post->body !!}
							</div><!-- /.entry-content -->
							{{-- <div class="direction">
								<ul class="social">
									<li>
										<a href="#" title="">
											<i class="fa fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-pinterest" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" title="">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
								</ul>
								<div class="widget_tag_cloud">
									<div class="tag-cloud">
										<a href="#" title="" class="tag-link">PAYMENT</a>
										<a href="#" title="" class="tag-link">IDEAS</a>
										<a href="#" title="" class="tag-link">SOCIAL</a>
										<a href="#" title="" class="tag-link">BITCOIN</a>
										<a href="#" title="" class="tag-link">TRADING</a>
										<a href="#" title="" class="tag-link">NEWS</a>										
									</div>
								</div>
							</div> --}}
							<div class="clearfix"></div>
						</article>
						{{-- <div class="comment-single">
							<div class="comment-area">
								<h3>3 Comments</h3>
								<ol class="comment-list">
									<li class="comment">
										<article class="comment-body">
											<div class="comment-image">
												<img src="images/blog/comment-01.jpg" alt="">
											</div>
											<div class="comment-text">
												<div class="comment-metadata">
													<div class="name">
														Thomas Lemar <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12 Feb 2018</span>
													</div>
													
												</div>
												<div class="comment-content">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
												</div>
												<div class="reply"><a href="#" title="">Reply</a></div>
											</div>
										</article>
										<ol class="children">
											<li class="comment">
												<article class="comment-body">
													<div class="comment-image">
														<img src="images/blog/comment-02.jpg" alt="">
													</div>
													<div class="comment-text">
														<div class="comment-metadata">
															<div class="name">
																Linda Thompson <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12 Feb 2018</span>
															</div>
														</div>
														<div class="comment-content">
															<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
														</div>
														<div class="reply"><a href="#" title="">Reply</a></div>
													</div>
												</article>
											</li>
										</ol>
									</li>
									<li class="comment">
										<article class="comment-body">
											<div class="comment-image">
												<img src="images/blog/comment-03.jpg" alt="">
											</div>
											<div class="comment-text">
												<div class="comment-metadata">
													<div class="name">
														Charlie Austin <span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> 12 Feb 2018</span>
													</div>
												</div>
												<div class="comment-content">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
												</div>
												<div class="reply"><a href="#" title="">Reply</a></div>
											</div>
										</article>
									</li>
								</ol>
							</div>
							<div class="comment-respond">
								<h2>Leave your comment</h2>
								<form action="#" method="get" accept-charset="utf-8">
									<div class="comment-form-name">
										<input type="text" name="your-name" placeholder="Your Name">
									</div>
									<div class="comment-form-email">
										<input type="text" name="email" placeholder="Your Email">
									</div>
									<div class="comment-form-comment">
										<textarea placeholder="Your Message"></textarea>
									</div>
									<div class="comment-form-submit">
										<button type="submit">SEND COMMENT</button>
									</div>
								</form>
							</div>
						</div> --}}
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.main-content -->
@endsection		
@section('script')

	<!-- Javascript -->
    <script type="text/javascript" src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/jquery.easing.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('javascript/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('javascript/main.js') }}"></script>
	<!-- End Javascript -->
@endsection