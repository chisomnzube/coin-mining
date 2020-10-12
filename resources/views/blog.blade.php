@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Blog | {{config('app.name')}}</title>

	<meta name="author" content="themsflat.com">
	<meta property="og:image" content="{{ asset('images/logo.jpeg') }}">
	

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheet/colors/color1.css" id="colors">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">
	<style>
    	body{
    		background-color: black;
    		color: white;
    	}
    </style>

</head>
@endsection
@section('main-content')
		
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">BLOG</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="{{ route('landingpage') }}" title="">Home</a></li>
								<li class="dot">/</li>
								<li>Blog</li>
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		</div><!-- /.page-title -->

		<section class="main-content " style="background-color: black; color: white;">
			<div class="container">
				<div class="row">
					@if($posts->count() > 0)
					@foreach($posts as $post)
					<div class="col-md-4 col-sm-6">
						<article class="main-post three-column">
							<div class="featured-post">
								<a href="{{ route('blog.show', $post->slug) }}" title="">
									<img src="{{postImage($post->image)}}" alt="{{$post->title}}" />
								</a>
							</div><!-- /.featured-post -->
							<div class="entry-content">
								<h2>
									<a href="{{ route('blog.show', $post->slug) }}" title="">{{$post->title}}</a>
								</h2>
								{{ strip_tags(str_limit($post->body, 150)) }}
							</div><!-- /.entry-content -->
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
						</article><!-- /.main-post -->
					</div><!-- .col-md-4 col-sm-6 -->
					@endforeach
					@endif

					
					
					
					
					<div class="col-md-12">
						<div class="blog-pagination center">
							<ul class="flat-pagination">
								{{ $posts->appends(request()->input())->onEachSide(1)->links() }}
							</ul><!-- /.flat-pagination -->
						</div><!-- /.blog-pagination -->
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.main-content -->
@endsection		
@section('script')
	<!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
	<!-- End Javascript -->
@endsection