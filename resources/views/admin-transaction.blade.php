@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Recent Transactions | {{config('app.name')}}</title>

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
									<div class="col-md-12">
							            <div class="profile-content" style="color: black;">
										   <h2>Recent Transactions</h2>
										   <div class="table-responsive">
										   <table class="table table-striped">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">User</th>
											      <th scope="col">Plan</th>
											      <th scope="col">Deposit</th>
											      <th scope="col">Expires</th>
											      <th scope="col">Mail</th>
											    </tr>
											  </thead>
											  <?php $i =0; ?>
											  @if($payments->count() > 0)
											  <tbody>
											  	@foreach($payments as $payment)
											  	<?php $i++; ?>
											    <tr style="text-align: center;">
											      <th scope="row">{{$i}}</th>
											      <td>{{$payment->payer_name}}</td>
											      <td>SERVICE PLAN -{{ strtoupper($payment->package)}}</td>
											      <td>${{number_format($payment->USDamount)}}</td>
											      <td>{{planExpiry($payment->package,$payment->created_at)}}</td>
											      <td>
											      	<form action="{{ route('send.client.mail') }}" method="POST">
											      		@csrf
											      		<input type="hidden" name="user_name" value="{{$payment->payer_name}}">
											      		<input type="hidden" name="user_email" value="{{$payment->payer_email}}">
											      		<input type="hidden" name="USDamount" value="{{$payment->USDamount}}">
											      		<input type="hidden" name="package" value="{{$payment->package}}">
											      		<button class="btn btn-success" type="submit">Send</button>
											      	</form>
											      </td>
											    </tr>
											    @endforeach
											  </tbody>
											  @endif
											</table>
										   	</div>
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