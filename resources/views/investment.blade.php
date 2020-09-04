@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Investment Packages | {{config('app.name')}}</title>

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
								<h1 class="h1-title">OUR INVESTMENT PACKAGES</h1>
							</div><!-- /.page-title-heading -->
							<ul class="breadcrumbs">
								<li><a href="{{ route('landingpage') }}" title="">Home</a></li>
								<li class="dot">/</li>
								<li>Our Investment Packages</li>
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		</div><!-- /.page-title -->

		<section class="flat-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>OUR PRICING PLANS</h2>
							<p> We strive to produce a balanced news feed taking all sides into account</p>
						</div>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-4">
						<div class="price-wrapper center basic">
							<div class="content-post">
								<div class="price-header">
									<h3 class="title">BASIC</h3>	
									<div class="price-number">
										$99<span class="price-subprice">/month</span>
									</div>									
								</div>
								<div class="price-content">
									<div class="price-desc">
										<ul>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Mobile App</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Desktop Software</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Free Consulting</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> 1 Account</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Data Security</li>
											<li><span class="fs1" aria-hidden="true" data-icon="M"></span> Analysis service</li>
											<li><span class="fs1" aria-hidden="true" data-icon="M"></span> Support 24/7</li>
										</ul>
									</div>
									<a class="themesflat-button no-background" href="#">SELECT PLAN</a>				
								</div>
							</div><!-- ./content-post -->
						</div><!-- /.price-wrapper -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="price-wrapper center basic">
							<div class="content-post">
								<div class="price-header">
									<h3 class="title">STANDAR</h3>	
									<div class="price-number">
										$199<span class="price-subprice">/month</span>
									</div>									
								</div>
								<div class="price-content">
									<div class="price-desc">
										<ul>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Mobile App</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Desktop Software</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Free Consulting</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> 2 Account</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Data Security</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Analysis service</li>
											<li><span class="fs1" aria-hidden="true" data-icon="M"></span> Support 24/7</li>
										</ul>
									</div>
									<a class="themesflat-button no-background" href="#">SELECT PLAN</a>				
								</div>
							</div><!-- ./content-post -->
						</div><!-- /.price-wrapper -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="price-wrapper center basic">
							<div class="content-post">
								<div class="price-header">
									<h3 class="title">PREMIUM</h3>	
									<div class="price-number">
										$299<span class="price-subprice">/month</span>
									</div>									
								</div>
								<div class="price-content">
									<div class="price-desc">
										<ul>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Mobile App</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Desktop Software</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Free Consulting</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> 1 Account</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Data Security</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Analysis service</li>
											<li><span class="fs1" aria-hidden="true" data-icon="N"></span> Support 24/7</li>
										</ul>
									</div>
									<a class="themesflat-button no-background" href="#">SELECT PLAN</a>				
								</div>
							</div><!-- ./content-post -->
						</div><!-- /.price-wrapper -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-pricing -->

		<section class="flat-counter">
			<div class="container">
				<div class="wrap-counter">
					<div class="row">
						<div class="col-md-3 col-6">
							<div class="square center">
								<div class="counter-box">
									<div class="numb-count" data-from="0" data-to="50" data-speed="2000" data-waypoint-active="yes">50</div>
									<div class="text color-default">
										PROJECTS
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-6 -->
						<div class="col-md-3 col-6">
							<div class="square center">
								<div class="counter-box">
									<div class="numb-count" data-from="0" data-to="70" data-speed="2000" data-waypoint-active="yes">70</div>
									<div class="text">
										CLIENTS
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-6 -->
						<div class="col-md-3 col-6">
							<div class="square center">
								<div class="counter-box">
									<div class="numb-count" data-from="0" data-to="120" data-speed="2000" data-waypoint-active="yes">120</div>
									<div class="text">
										ACCOUNTS
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-6 -->
						<div class="col-md-3 col-6">
							<div class="square center">
								<div class="counter-box">
									<div class="numb-count" data-from="0" data-to="220" data-speed="2000" data-waypoint-active="yes">220</div>
									<div class="text">
										TRANSACTIONS
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-6 -->
					</div><!-- /.row -->
				</div><!-- /.wrap-counter -->
			</div><!-- /.container -->
		</section><!-- /.flat-counter -->

		<section class="flat-testimonial">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider">
                        	<ul class="slides">
                                <li class="flex-active-slide" data-thumb="images/flexslider/thumb/01.png">
                                    <div class="testimonials center">
                                    	<div class="logo-testimonial">
                                    		<span class="fs1" aria-hidden="true" data-icon="{"></span>
                                    	</div>
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "With a heavy focus on collecting and analyzing data, your services can help organizations that are looking for a robust analytical tool and consider content management a key concern.  Everyone I've worked with, from my account manager to technical support, they really care about my success"
                                            </blockquote>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-name">Mr James Harvey</div>
                                            <div class="author-info">Sale Manager</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-active-slide" data-thumb="images/flexslider/thumb/02.png">
                                    <div class="testimonials center">
                                    	<div class="logo-testimonial">
                                    		<span class="fs1" aria-hidden="true" data-icon="{"></span>
                                    	</div>
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "With a heavy focus on collecting and analyzing data, your services can help organizations that are looking for a robust analytical tool and consider content management a key concern.  Everyone I've worked with, from my account manager to technical support, they really care about my success"
                                            </blockquote>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-name">Mr James </div>
                                            <div class="author-info">Tax Advice</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-active-slide" data-thumb="images/flexslider/thumb/03.png">
                                    <div class="testimonials center">
                                    	<div class="logo-testimonial">
                                    		<span class="fs1" aria-hidden="true" data-icon="{"></span>
                                    	</div>
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "With a heavy focus on collecting and analyzing data, your services can help organizations that are looking for a robust analytical tool and consider content management a key concern.  Everyone I've worked with, from my account manager to technical support, they really care about my success"
                                            </blockquote>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-name">Mr James </div>
                                            <div class="author-info">Tax Advice</div>
                                        </div>
                                    </div>
                                </li>
                            </ul><!-- /.slides -->
	                    </div><!-- /.testimonial-slider -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-testimonial -->

		<section class="flat-call-back">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-call-back">
							<div class="title">
								<h2>DO YOU NEED A CONSULTANT?</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan tristique lorem, nec vehicula sem aliquam ut. Duis at dictum eros. sodales mauris in ante tempus</p>
							</div>
							<div class="btn-call-back">
								<a href="{{ route('contact') }}" title="">Click to Consultant</a>
							</div>
						</div><!-- /.wrap-call-back -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-call-back -->
@endsection
@section('script')

	<!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
	<!-- End Javascript -->
@endsection