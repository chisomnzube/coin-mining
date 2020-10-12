@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Licence | {{config('app.name')}}</title>

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
		

		<section class="error-404 not-found" style="background-color: black; color: white;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-error center">
							
							<div id="app" class="container">
								<img src="{{ asset('images/licence.jpeg') }}">
							</div>
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
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