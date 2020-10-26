@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>{{config('app.name')}}</title>

	<meta name="author" content="themsflat.com">
	<meta property="og:image" content="{{ asset('images/logo.jpeg') }}">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

	<!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

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
		
		<!-- START REVOLUTION SLIDER 5.4.2 auto mode -->
        <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
            <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                <div class="slotholder"></div>

                
                <ul><!-- SLIDE  -->
            
                    <!-- SLIDE -->
                    <li data-index="rs-3050" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/icon/slide-01.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption title-slide color-white letter-spacing3px" 
                            id="slide-3049-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-97','-90','-90','-100']" 
                            data-fontsize="['55','50','42','35']"
                            data-lineheight="['72','64','50','40']"
                            data-fontweight="['700','600','600','500']"
                            data-width="['1000','900','600','400']"
                            data-height="none"
                            data-whitespace="normal"
                 
                            data-type="text" 
                            data-responsive_offset="on"                             

                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[10,10,10,10]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 16; white-space: nowrap;">INVESTING IN CRYPTOCURRENCY SEEMS TOO EASY
                        </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption sub-title color-white" 
                            id="slide-3049-layer-4" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['33','50','40','30']"
                            data-fontsize="['18',18','16','14']" 
                            data-lineheight="['32','28','28','24']"
                            data-fontweight="['500','400','400','400']"
                            data-width="['900','700','500','400']"
                            data-height="none"
                            data-whitespace="normal"
                 
                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 17; white-space: nowrap;">By enabling this easy and secure way to invest in Bitcoin and ether we hope to have eliminated the boundaries that earlier prevented individuals and companies.
                        </div>

                        <a href="#" target="_self" class="tp-caption flat-button-slider bg-blue" 

                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     
                        data-x="['center','center','center','center']" data-hoffset="['-100','-100','-100','-100']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['126','160','140','120']"
                        data-fontsize="['14','14','14','14']" 
                        data-width="['auto']"
                        data-height="['auto']">GET STARTED
                        </a><!-- END LAYER LINK -->

                        <a href="#" target="_self" class="tp-caption flat-button-slider bg-white" 

                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     
                        data-x="['center','center','center','center']" data-hoffset="['100','100','100','100']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['126','160','140','120']"  
                        data-fontsize="['14',14','14','14']"
                        data-width="['auto']"
                        data-height="['auto']">CONTACT US
                        </a>
                    </li>

                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

		<section class="flat-recent-market">
			<div class="container">
				@include('inc.messages')
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-recent-text">
							<h2 class="title" style="color: white; ">ABOUT US</h2>
							<div class="content-text">
								<p>coin-mining.club offers a unique opportunity for everyone who wants to make money on investing in the progressive currency Bitcoin. Our main activity is the mining of the cryptocurrency, through the use of special computers – miners and algorithms used to solve complex equations. Increasing our capital in Bitcoins, we also carry out one more activity - the trade in cryptocurrency on the exchange.</p>

								<p>Acting in two directions at once, we receive a stable profit, we guarantee the success of the project and the regularity of payments. We work around the clock, concluding the most successful transactions, trading on the exchange in order to get maximum benefits.</p>
								
								
							</div>
						</div><!-- /.wrap-recent-text -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="single-image center">
							{{-- <img src="images/page/laptop-1.png" alt=""> --}}
							<h2 style="color: white;">Company's Licence</h2>
								<a href="{{ asset('images/certified.jpeg') }}" target="_blank">
									<img src="{{ asset('images/certi.png') }}">
								</a>
						</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-recent-market -->


		<section class="flat-our-work">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2 style="color: white;">Reasons for choosing coin-mining company</h2>
							<p>Bitcoin is received, stored, and sent using software known as a 'Bitcoin Wallet'</p>
						</div>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-iconbox">
							<div class="iconbox inline-left style4">
								<div class="icon">
									<i class="fa fa-users fa-3x"></i>
								</div>
								<div class="number">
									1
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">Experienced Our Trading Team</a></h4>
									<p>Coin Mining is a team of professional in cryptocurrency mining. who know how cryptocurrency mining works.</p>
								</div>
							</div><!-- /.iconbox style4 -->
							<div class="iconbox inline-left style4">
								<div class="icon">
									<i class="fa fa-cog fa-3x"></i>
								</div>
								<div class="number">
									2
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">Strong DDoS Protection</a></h4>
									<p>Coin-mining.club web server is protected by DDOS-Guard, It's one of the world's trusted DDoS Protection and mitigation provider.</p>
								</div>
							</div><!-- /.iconbox style4 -->
							{{-- <div class="iconbox inline-left style4">
								<div class="icon">
									<img src="images/icon/orders-1.png" alt="">
								</div>
								<div class="number">
									3
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">Comfort and protection</a></h4>
									<p>Your charges are displayed in your personal cabinet, you can access it from any device, and all your accounts are securely encrypted.</p>
								</div>
							</div> --}}<!-- /.iconbox style4 -->
						</div><!-- /.wrap-iconbox -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="iconbox inline-left style4">
								<div class="icon">
									<img src="images/icon/orders-1.png" alt="">
								</div>
								<div class="number">
									1
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">Secure Transaction</a></h4>
									<p>We are using EV SSL encryption and has a green address bar that confirms that your transaction is secure with us.</p>
								</div>
							</div><!-- /.iconbox style4 -->
							<div class="iconbox inline-left style4">
								<div class="icon">
									<i class="fa fa-question fa-3x"></i>
								</div>
								<div class="number">
									2
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">24/7 Friendly Support</a></h4>
									<p>We understand how important having reliable support service is to you. Please don't hesitate to contact us !</p>
								</div>
							</div><!-- /.iconbox style4 -->
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-our-work -->

		<section class="flat-why-choose style1 bg-browse">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>WHY CHOOSE BITCOIN</h2>
							<p style="color: black;">Bitcoin makes it easy to send real money quickly to anywhere in the world.</p>
						</div>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="iconbox style3 center">
							<div class="icon">
								<img src="images/icon/security-1.png" alt="">
							</div>
							<div class="iconbox-content">
								<h4><a href="#" title="">SECURITY</a></h4>
								<p>It's one of the most secured cryptocurrency in the world.</p>
							</div>
						</div><!-- /.iconbox style3 -->
					</div><!-- /.col-md-4 sol-sm-6 -->
					
					<div class="col-md-4 col-sm-6">
						<div class="iconbox style3 center">
							<div class="icon">
								<img src="images/icon/wallet-1.png" alt="">
							</div>
							<div class="iconbox-content">
								<h4><a href="#" title="">SECURE WALLET</a></h4>
								<p>Bitcoin's wallet is very secure and protected against Internet scammers.</p>
							</div>
						</div><!-- /.iconbox style3 -->
					</div><!-- /.col-md-4 sol-sm-6 -->
					
					<div class="col-md-4 col-sm-6">
						<div class="iconbox style3 center">
							<div class="icon">
								<img src="images/icon/exchange-1.png" alt="">
							</div>
							<div class="iconbox-content">
								<h4><a href="#" title="">INSTANT EXCHANGE</a></h4>
								<p>You can exchange bitcoin for your product ai services.</p>
							</div>
						</div><!-- /.iconbox style3 -->
					</div><!-- /.col-md-4 sol-sm-6 -->
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-why-choose style1 -->

		<section class="flat-our-work">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2 style="color: white;">HOW IT WORKS</h2>
							<p>Bitcoin is received, stored, and sent using software known as a 'Bitcoin Wallet'</p>
						</div>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-6">
						<div class="wrap-iconbox">
							<div class="iconbox inline-left style4">
								<div class="icon">
									<img src="images/icon/account-1.png" alt="">
								</div>
								<div class="number">
									1
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">CREAT ACCOUNT</a></h4>
									<p>You have to create an account by signing up usint this <a href="/register">link</a></p>
								</div>
							</div><!-- /.iconbox style4 -->
							<div class="iconbox inline-left style4">
								<div class="icon">
									<img src="images/icon/payment-1.png" alt="">
								</div>
								<div class="number">
									2
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">CHOOSE iNVESTMENT PLAN</a></h4>
									<p>Choose an investment plan that suits you</p>
								</div>
							</div><!-- /.iconbox style4 -->
							<div class="iconbox inline-left style4">
								<div class="icon">
									<img src="images/icon/orders-1.png" alt="">
								</div>
								<div class="number">
									3
								</div>
								<div class="iconbox-content">
									<h4><a href="#" title="" style="color: white;">REFERRAL</a></h4>
									<p>Getting a bonus from the company is nice. Especially when it takes a minimum effort. Just tell everyone about your success in out company and give your individual link to register new investors. Once your referral makes a deposite, you make earn a profit of 7% of the amount.</p>
								</div>
							</div><!-- /.iconbox style4 -->
						</div><!-- /.wrap-iconbox -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="single-image">
							<img src="images/page/work.jpg" alt="">
						</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-our-work -->

		<section class="flat-our-work">
			<div class="container">
				<h1 style="text-align: center; color: white;" >Packages</h1>
				<div class="card-deck mb-3 text-center">
			        <div class="card mb-4 box-shadow" style="color: black;">
			          <div class="card-header">
			            <h4 class="my-0 font-weight-normal">Lite</h4>
			          </div>
			          <div class="card-body">
			            <h1 class="card-title pricing-card-title">10.5%<br>After <br> 18 hours</h1>
			            <ul class="list-unstyled mt-3 mb-4">
			              <li>Minimum</li>
			              <li>$20</li>
			              <li>Maximum</li>
			              <li>$70,590.00</li>
			            </ul>
			            <form action="{{ route('payment.index') }}" method="post">
			            	@csrf
			            	<input type="hidden" name="type" value="lite">
			            	<button type="submit" class="btn btn-lg btn-block btn-primary">Invest</button>
			            </form>
			          </div>
			        </div>
			        <div class="card mb-3 box-shadow" style="color: black;">
			          <div class="card-header">
			            <h4 class="my-0 font-weight-normal">Pro</h4>
			          </div>
			          <div class="card-body">
			            <h1 class="card-title pricing-card-title">35% <br>After <br>35 hours</h1>
			            <ul class="list-unstyled mt-3 mb-4">
			              <li>Minimum</li>
			              <li>$250.00</li>
			              <li>Maximum</li>
			              <li>$20,000.00</li>
			            </ul>
			            <form action="{{ route('payment.index') }}" method="post">
			            	@csrf
			            	<input type="hidden" name="type" value="pro">
			            	<button type="submit" class="btn btn-lg btn-block btn-primary">Invest</button>
			            </form>
			          </div>
			        </div>
			        <div class="card mb-3 box-shadow" style="color: black;">
			          <div class="card-header">
			            <h4 class="my-0 font-weight-normal">Max</h4>
			          </div>
			          <div class="card-body">
			            <h1 class="card-title pricing-card-title">4% Hourly<br> For 15 Hours</h1>
			            <ul class="list-unstyled mt-3 mb-4">
			              <li>Minimum</li>
			              <li>$1,520.00</li>
			              <li>Maximum</li>
			              <li>4,550.00</li>
			            </ul>
			            <form action="{{ route('payment.index') }}" method="post">
			            	@csrf
			            	<input type="hidden" name="type" value="max">
			            	<button type="submit" class="btn btn-lg btn-block btn-primary">Invest</button>
			            </form>
			          </div>
			        </div>
			        <div class="card mb-3 box-shadow" style="color: black;">
			          <div class="card-header">
			            <h4 class="my-0 font-weight-normal">Elite</h4>
			          </div>
			          <div class="card-body">
			            <h1 class="card-title pricing-card-title">96% <br>After <br>4 days</h1>
			            <ul class="list-unstyled mt-3 mb-4">
			              <li>Minimum</li>
			              <li>$3,100.00</li>
			              <li>Maximum</li>
			              <li>$9,500.00</li>
			            </ul>
			            <form action="{{ route('payment.index') }}" method="post">
			            	@csrf
			            	<input type="hidden" name="type" value="elite">
			            	<button type="submit" class="btn btn-lg btn-block btn-primary">Invest</button>
			            </form>
			          </div>
			        </div>
			      </div>
			</div>
		</section>

		<section class="flat-price-coin bg-browse" style="color: white; background-color: black;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2 style="color: white;">CRYPTOCURRENCY PRICES</h2>
							<p >The Bitcoin ecosystem at a glance. Any of our service with free test credits or actual Bitcoins.</p>
						</div>
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container" style="color: white; background-color: black;">
						  <div class="tradingview-widget-container__widget"></div>
						  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
						  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
						  {
						  "width": "100%",
						  "height": "100%",
						  "defaultColumn": "overview",
						  "screener_type": "crypto_mkt",
						  "displayCurrency": "USD",
						  "colorTheme": "light",
						  "locale": "en"
						}
						  </script>
						</div>
						<!-- TradingView Widget END -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-price-coin -->

		

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
				</div><!-- /.counter -->
			</div><!-- /.container -->
		</section><!-- /.flat-counter -->

		<section class="flat-news">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2 style="color: white;">NEWS & EVENTS</h2>
							<p>We are the world's premier 24/7 news feed covering everything bitcoin-related.</p>
						</div>
					</div>
				</div><!-- /.row -->
				<div class="row">

					@if($posts->count() > 0)
					@foreach($posts as $post)
					<div class="col-md-4">
						<article class="main-post news three-column">
							<div class="featured-post">
								<a href="{{ route('blog.show', $post->slug) }}" title="{{$post->title}}">
									<img src="{{postImage($post->image)}}" alt="{{$post->title}}" />
								</a>
							</div><!-- /.featured-post -->
							<div class="entry-content">
								<h2>
									<a href="{{ route('blog.show', $post->slug) }}" title="">{{$post->title}}</a>
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
								{{ strip_tags(str_limit($post->body, 150)) }}
							</div><!-- /.entry-content -->
						</article><!-- /.main-post -->
					</div><!-- .col-md-4 -->
					@endforeach
					@endif
					
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-news -->
@endsection
	@section('script')

	<!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/tether.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script>
    
    <script type="text/javascript" src="javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/slider_v1.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    @endsection