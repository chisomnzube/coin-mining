<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
    <link href="{{ asset('images/logo.jpeg') }}" rel="shortcut icon">
    <meta property="og:image" content="{{ asset('images/logo.jpeg') }}">
    <script src="//code.jivosite.com/widget/GC9E0LzVor" async></script>
@yield('head')
	<body>
		<div class="boxed">
		<!-- Preloader -->
	    <div id="loading-overlay">
	        <div class="loader"></div>
	    </div>
		
		<div class="themesflat-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="flat-infomation">
							<li class="email"><a href="mailto:themesflat@gmail.com" title="email">Email: infodeercreative@gmail.com</a></li>
							<li class="phone"><a href="+61383766284" title="phone">Call Us: +1 234 800 8080</a></li>
						</ul><!-- /.flat-infomation -->
						<ul class="box-account">
							@guest
							<li class="login">
								<a href="/login" title="">Login</a>
							</li>
							<li class="sign-in">
								<a href="/register" title="">Signup</a>
							</li>
							@else
							<li class="sign-in">
								<a href="{{ route('user.index') }}"><span><i class="fa fa-user"></i></span> account</a>
							</li>
							<li class="sign-in">
								<a href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();" title="">Logout</a>
							</li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
							@endguest
						</ul><!-- /.box-account -->
						<div class="clearfix"></div><!-- /.clearfix -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.themesflat-top -->

		<header id="header" class="header bg-color">
			<div class="container">
				<div class="row">
					<div class="header-wrap">
						<div id="logo" class="logo">
							<a href="{{ route('landingpage') }}" title="">
								{{-- <img src="{{ asset('images/logo.png') }}" alt="{{config('app.name')}}" /> --}}
								<h1>{{config('app.name')}}</h1>
							</a>
						</div><!-- /#logo -->
						<div class="flat-show-search">
							<div class="show-search">
                                <i class="fa fa-search"></i>                                             
                            </div>
                            <div class="top-search">                        
                                <form action="{{ route('blog.search') }}" id="searchform-all" method="get">
                                	@csrf
                                    <div>
                                        <input type="text" name="post" id="s" class="sss" placeholder="Search...">
                                        <input type="submit" value="" id="searchsubmit">
                                    </div>
                                </form>
                            </div> <!-- /.top-search -->
                        </div>	<!-- /.flat-show-search -->
						
						<div class="nav-wrap">
							<div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
							<nav id="mainnav" class="mainnav">
								<ul class="menu">
									<li class="active">
                                        <a href="{{ route('landingpage') }}" title="">HOME</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}" title="">ABOUT</a>
                                    </li>
                                    {{-- <li>
										<a href="{{ route('investment') }}" title="">INVESTMENT</a>
									</li> --}}
                                    {{-- <li>
										<a href="{{ route('licence') }}" title="">LICENCE</a>
									</li> --}}
                                    <li>
										<a href="{{ route('blog.index') }}" title="">BLOG</a>
										
									</li>
                                    <li>
                                        <a href="{{ route('contact') }}" title="">CONTACT</a>
                                    </li>
								</ul><!-- /.menu -->
							</nav><!-- /#mainnav -->
						</div><!-- /.nav-wrap -->
					</div><!-- /.header-wrap -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</header><!-- /#header -->

		@yield('main-content')

		<footer id="footer_background">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-widgets">
							<div class="col-md-4">
								<div class="widget widget-about">
									<div class="widget-text">
										<div id="logo-ft">
											<a href="#" title="">
												<h1 style="color: white;">{{config('app.name')}}</h1>
											</a>
										</div>
										<p>{{config('app.name')}} is an investment platform that pays High Return on Investment.
										</p>
									</div>
									<div class="widget widget-newletter">
										<h3 class="widget-title">NEWSLETTER</h3>
										<form id="subscribe-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
			                                <div id="subscribe-content">
												<div class="input-email">
													<input type="email" name="email-form" id="subscribe-email" placeholder="Email address" />
												</div>
												<button type="button" id="subscribe-button" class="button-subscribe"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			                                </div>
			                                <div id="subscribe-msg"></div>
										</form>
									</div>
								</div><!-- /.widget-about -->
							</div><!-- /.col-md-4 -->
							<div class="col-md-4">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title">QUICK LINK</h3>
									<ul class="menu-footer one-half">
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Forum</a></li>
										<li><a href="{{ route('blog.index') }}" title=""><i class="fa fa-angle-double-right"></i> News</a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Advertise</a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Jobs</a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Wallets</a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Guide</a></li>
									</ul><!-- /.one-half -->
									<ul class="menu-footer one-half">
										<li><a href="{{ route('faq') }}" title=""><i class="fa fa-angle-double-right"></i> FAQ</a></li>
										<li><a href="{{ route('tandc') }}" title=""><i class="fa fa-angle-double-right"></i> Terms</a></li>
										<li><a href="{{ route('about') }}" title=""><i class="fa fa-angle-double-right"></i> About us</a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Pivacy</a></li>
										<li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Partners</a></li>
									</ul><!-- /.one-half -->
									<div class="clearfix"></div>
								</div><!-- /.widget_nav_menu -->
							</div><!-- /.col-md-4 -->
							<div class="col-md-4">
								<div class="widget widget_contact">
									<h3 class="widget-title">CONTACT</h3>
									<ul class="contact-list">
										<li>
											Address: <span>9291 Proin Road, Lake Charles Maine 11292</span>
										</li>
										<li>
											Phone: <span>+1 234 800 8080</span>
										</li>
										<li>
											Email: <span>info.deercreative@gmail.com</span>
										</li>
									</ul>
									<div class="widget widget_themesflat_socials">            
										<ul class="themesflat-shortcode-socials">
									        <li class="facebook">
						                        <a href="#" target="_blank" rel="alternate" title="">
						                            <i class="fa fa-facebook"></i>                            
						                        </a>
						                    </li>
						                    <li class="twitter">
						                        <a href="#" target="_blank" rel="alternate" title="">
						                            <i class="fa fa-twitter"></i>                            
						                        </a>
						                    </li>
						                    <li class="google-plus">
						                        <a href="#" target="_blank" rel="alternate" title="t;">
						                            <i class="fa fa-google-plus"></i>                            
						                        </a>
						                    </li>
						                    <li class="instagram">
						                        <a href="#" target="_blank" rel="alternate" title="">
						                            <i class="fa fa-instagram"></i>                            
						                        </a>
						                    </li>
						                    <li class="linkedin">
						                        <a href="#" target="_blank" rel="alternate" title="">
						                            <i class="fa fa-linkedin"></i>                            
						                        </a>
						                    </li>
						                </ul><!-- /.social -->       
								    </div>
								</div><!-- /.widget_contact -->
							</div><!-- /.col-md-4 -->
						</div><!-- /.footer-widgets -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.footer -->
			<div class="text-center">
				<b>We Accept</b>
				<img src="{{ asset('images/bitcoin.png') }}">
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="menu-ft-bottom">
								<li>
									<a href="{{ route('landingpage') }}" title="">Home</a>
								</li>
								<li>
									<a href="{{ route('about') }}" title="">About</a>
								</li>
								<li>
									<a href="{{ route('blog.index') }}" title="">Blog</a>
								</li>
								<li>
									<a href="{{ route('contact') }}" title="">Contact</a>
								</li>
							</ul>
							<div class="copyright">
								<p>© Copyright <a href="#" title="">{{config('app.name')}}</a> {{date('Y')}}</p>
							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.footer-bottom -->	
		</footer><!-- /#footer_background -->
		
		<div class="button-go-top">
			<a href="#" title="" class="go-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div><!-- /.button-go-top -->
	
	</div> <!-- /.boxed -->

	@yield('script')
	</body>
</html>