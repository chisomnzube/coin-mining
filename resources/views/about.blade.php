@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title> About Us | {{config('app.name')}}</title>

	<meta name="author" content="themsflat.com">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap s yle -->
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

		<section class="flat-recent-market">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-recent-text">
							<h2 class="title">ABOUT US</h2>
							<div class="content-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis placerat pretium tincidunt. Donec ultricies pulvinar velit, eget euismod sapien. Duis pharetra sed ante blandit posuere. Etiam placerat metus.</p>
								<p>Proin at metus congue, semper nunc sed, sollicitudin dui. Nunc utcon dimentum mi. In pharetra ipsum leo, velas porttitor elit posuere eu. Pellentesque aliquam, neque at maximus rhoncus, ante tortor.</p>
								<a href="#" class="read-more" title="">GET STARTED</a>
							</div>
						</div>
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="single-image center">
							<img src="images/page/laptop-1.png" alt="">
						</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-recent-market -->

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

		
		<section class="flat-testimonial bg-browse">
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
	                    </div><!-- /#testimonial-slider -->
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
								<a href="#" title="">Click to Consultant</a>
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