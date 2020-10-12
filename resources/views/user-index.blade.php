@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>My Profile | {{config('app.name')}}</title>

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
	<link rel="stylesheet" type="text/css" href="stylesheet/profile.css">
	<style>
    	body{
    		background-color: black;
    		color: white;
    	}
    </style>

</head>
@endsection
@section('main-content')
		
		

		<section class="error-404 not-found">
			<div class="container">
				@include('inc.messages')
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-error center">
							<div class="container">
							    <div class="row profile">
									@include('inc.account')
									<div class="col-md-9">
							            <div class="profile-content">
										   <h2>My Profile</h2>

										   <form action="{{ route('user.update') }}" method="POST" class="form-group">
										   		@csrf
										   		<label for="name">Name</label>
										   		<input type="text" name="name" value="{{auth()->user()->name}}" class="form-control">
										   		<label for="email">Email</label>
										   		<input type="email" name="email" value="{{auth()->user()->email}}" class="form-control" disabled>
										   		<p><small style="color: black;">Leave blank if you want to retain formal password</small></p>
										   		<div class="row">
										   			<div class="col">
										   				<label for="name">Password</label>
										   				<input type="password" name="password" value="" class="form-control"  placeholder="Password">
										   			</div>
										   			<div class="col">
										   				<label for="name">Confirm Password</label>
										   				<input type="password" name="password" value="" class="form-control" placeholder="Confirm password">
										   			</div>
										   		</div>
										   		<br>
										   		<button type="submit" class="btn btn-block btn-success">Update</button>
										   </form>
							            </div>
									</div>
								</div>
							</div>
							
						</div><!-- /.wrap-error -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.error-404 -->	
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