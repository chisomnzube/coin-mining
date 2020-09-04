@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Contact Us | {{config('app.name')}}</title>

	<meta name="author" content="themsflat.com">

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

</head>
@endsection
@section('main-content')
		
		<div class="page-title">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="page-title-heading">
								<h1 class="h1-title">CONTACT US</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="{{ route('landingpage') }}" title="">Home</a></li>
								<li class="dot">/</li>
								<li>Contact us</li>
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		</div><!-- /.page-title -->

		{{-- <section class="flat-address-box">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="address-box center">
							<div class="box-header">
								<div class="icon">
									<i class="fa fa-map-marker"></i>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<h2>Address</h2>
								<p>291 Proin Road, Lake Charles, Maine 11292</p>
							</div><!-- /.box-content -->
						</div><!-- /.address-box -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="address-box center">
							<div class="box-header">
								<div class="icon">
									<i class="fa fa-phone"></i>
								</div>
							</div>/.box-header
							<div class="box-content">
								<h2>Phone number</h2>
								<p>+1 234 800 8080</p>
							</div><!-- /.box-content -->
						</div><!-- /.address-box -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="address-box center">
							<div class="box-header">
								<div class="icon">
									<i class="fa fa-envelope-open"></i>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<h2>Email:</h2>
								<p>infodeercreative@gmail.com</p>
							</div><!-- /.box-content -->
						</div><!-- /.address-box -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-address-box --> --}}


		<section class="flat-row flat-contact-form">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>CONTACT WITH US</h2>
							<p>We'll help you resolve your issues quickly and easily.</p>
						</div>
						@include('inc.messages')
						<div class="form-contact-form">
							<form action="{{ route('store.contact') }}" method="post" accept-charset="utf-8">
								@csrf
								@captcha
								<div id="subscribe-content-1">
									<div class="contact-form-comment contact-form">
										<input type="text" name="name" id="name" placeholder="Your Name" required="" />
									</div>
									<div class="field-row">
										<div class="contact-form-name contact-form">
											<input type="email" name="email" id="email" placeholder="Your Email..." required="" />
										</div>
										<div class="contact-form-name contact-form">
											<input type="number" name="phone" id="phone" placeholder="Your Phone Number" required="" />
										</div>										
									</div>
									
									<div class="contact-form-comment contact-form">
										<textarea name="body" id="message" placeholder="Your Message" required=""></textarea>
									</div>
									<div class="btn-contact-form center">
										<button type="submit" class="flat-button-form border-radius-2">SEND MESSAGE</button>
									</div>
								</div>
							</form><!-- /form -->
						</div><!-- /.form-contact-form -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-contact-form -->
@endsection
@section('script')
	<!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    
    <script type="text/javascript" src="javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
	<script type="text/javascript" src="javascript/gmap3.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
	<!-- End Javascript -->
@endsection