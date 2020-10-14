@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Payment | {{config('app.name')}}</title>

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
		

		<section class="error-404 not-found" style="background-image: url('images/bg.jpeg');">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-error center">
							{{-- <header class="page-header">
								<h1 class="title-404 nothing">Payment</h1>							
								
							</header><!-- .page-header --> --}}
							<div id="particles-js"></div>
							<div id="app" class="container">
								<div class="row">
									<div class="col-md-6" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888;">
										<div class="panel-heading">
											<h1>Pay {{$price}} BTC</h1>
											<p><b>TO</b></p>
										</div>
										<hr>
										<form action="{{ route('payment.store') }}" method="POST" class="form-group">
											@csrf
											{{-- <label for="amount">Amount ({{$rcurrency}})</label> --}}
											<h5>1Cpk4seiXrjy7FfMDWt7QkThH3ZcnSVBgi</h5>
											<hr>
											<input type="hidden" name="USDamount" value="{{$amount}}">
											<input type="hidden" name="BTCamount" value="{{$price}}">
											<input type="hidden" name="package" value="{{$package}}">
											<button type="submit" class="btn btn-success btn-block"> Payment Sent</button>
										</form>
										@if(auth()->user()->balance >= $amount)
										<form action="{{ route('payment.wallet.store') }}" method="POST">
											@csrf
											<input type="hidden" name="USDamount" value="{{$amount}}">
											<input type="hidden" name="BTCamount" value="{{$price}}">
											<input type="hidden" name="package" value="{{$package}}">
											<button type="submit" class="btn btn-info"> Pay From wallet</button>
										</form>
										@endif
									</div>

									{{-- <div class="col-md-6">
										
									</div> --}}
								</div>
							</div>
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.error-404 -->	
@endsection

@section('script')
	<script >
		particlesJS.load("particles-js", "json/particles.json", function() {
			console.log("particles loaded");
		});
	</script>
	<!-- Javascript -->
	<script type="text/javascript" src="js/particles.min.js"></script>

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