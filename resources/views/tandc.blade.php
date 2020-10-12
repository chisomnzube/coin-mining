@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Terms and Conditions | {{config('app.name')}}</title>

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

</head>
@endsection

@section('main-content')		
		

		<section class="error-404 not-found" style="background-color: black; color: white;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-error center">
							
							<img src="images/law_book.jpg">
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-6">
						<div class="wrap-error ">
							
							
						<h1 style="color: white;">PLEASE READ THE FOLLOWING RULES CAREFULLY BEFORE SIGNING IN.</h1>
						<p>You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years. This document was created in accordance with the rules of international law and business practice. Client agrees to behave politely with our support team and follow the instructions to prevent anyone from potentially negative situation.</p>
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
				<br>
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-error ">
							 <p><i class="fa fa-check-circle"></i> coin-mining.club is not available to the general public and is opened only to the qualified members of www.forexcity.live , the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between the coin-mining.club and its Member.</p> <br>

							 <p><i class="fa fa-check-circle"></i> As a private transaction, this program is exempt from the US Securities Act of 1933, the US Securities Exchange Act of 1934 and the US Investment Company Act of 1940 and all other rules, regulations and amendments thereof. We are not FDIC insured. We are not a licensed bank or a security firm.</p> <br>

							 <p><i class="fa fa-check-circle"></i> You agree that all information, communications, materials coming from coin-mining.club are unsolicited and must be kept private, confidential and protected from any disclosure. Moreover, the information, communications and materials contained herein are not to be regarded as an offer, nor a solicitation for investments in any jurisdiction which deems non-public offers or solicitations unlawful, nor to any person to whom it will be unlawful to make such offer or solicitation.</p> <br>

							 <p><i class="fa fa-check-circle"></i> All the data giving by a member to coin-mining.club will be only privately used and not disclosed to any third parties. coin-mining.club is not responsible or liable for any loss of data.</p> <br>

							 <p><i class="fa fa-check-circle"></i> You agree to hold all principals and members harmless of any liability. You are investing at your own risk and you agree that a past performance is not an explicit guarantee for the same future performance. You agree that all information, communications and materials you will find on this site are intended to be regarded as an informational and educational matter and not an investment advice.</p>
							
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-6">
						<div class="wrap-error">
							
							 <p><i class="fa fa-check-circle"></i> We reserve the right to change the rules, commissions and rates of the program at any time and at our sole discretion without notice, especially in order to respect the integrity and security of the members' interests. You agree that it is your sole responsibility to review the current terms.</p>

							 <p><i class="fa fa-check-circle"></i> coin-mining.club is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to coin-mining.club that you will not use this site in any illegal way and you agree to respect your local, national and international laws.</p>

							 <p><i class="fa fa-check-circle"></i> Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator.</p>

							 <p><i class="fa fa-check-circle"></i> We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.</p>

							 <p><i class="fa fa-check-circle"></i> coin-mining.club reserves the right to accept or decline any member for membership without explanation.</p>
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
				<h2 style="color: red;">IF YOU DO NOT AGREE WITH THE ABOVE DISCLAIMER, PLEASE DO NOT GO ANY FURTHER.</h2>
			</div><!-- /.container -->
		</section><!-- /.error-404 -->	
@endsection

@section('script')

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