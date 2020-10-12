@extends('layouts.app')
@section('head')
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>FAQ | {{config('app.name')}}</title>

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
						<div class="wrap-error">
							
							<div id="accordion">
							  <div class="card">
							    <div class="card-header" id="headingOne">
							      <h5 class="mb-0">
							        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          How can I invest with coin-mining.club
							        </button>
							      </h5>
							    </div>

							    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        To make a investment you must first become a member of coin-mining.club . Once you are signed up, you can make your first deposit. All deposits must be made through the Members Area. You can login using the member username and password you receive when signup.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingTwo">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          I wish to invest with coin-mining.club but I don't have an any ecurrency account. What  should I do?
							        </button>
							      </h5>
							    </div>
							    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        You can open a free BitCoin account here: <a href="https://blockchain.info/" target="_blank" style="color:#005780">www.blockchain.info</a>
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="headingThree">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							          How do I open my coin-mining.club   Account?
							        </button>
							      </h5>
							    </div>
							    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        It's quite easy and convenient. Follow this <a href="/register">link</a>, fill   in the registration form and then press "Register". 
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading4">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
							          Which e-currencies do you accept?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        We accept only Bitcoin, Payeer, Perfect Money, Litecoin, Ethereum, bitcoin Cash e-currency.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading5">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
							          How can I withdraw funds?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Login to your account using your username and password and check the Withdraw   section.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading6">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
							          How long does it take for my deposit to be added to my account?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Your account will be updated as fast, as you deposit.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading7">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
							          How can I change my e-mail address or password?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Log into your coin-mining.club account and click on the "Account Information". You  can change your e-mail address and password there. 
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading8">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
							          What if I can't log into my account because I forgot my password?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        click <a href="">forgot password</a> link, type your username or e-mail and you'll receive your account information.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading9">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
							         Does a daily profit paid directly to my currency account?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        No, profits are gathered on your coin-mining.club account and you can withdraw them  anytime.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading10">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
							          How do you calculate the interest on my account?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Depending on each plan. Interest on your coin-mining.club account is acquired 
  									Daily, Weekly, Bi-Weekly, Monthly and Yearly and credited to your available  balance at the end of each day.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading11">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
							          Can I do a direct deposit from my account balance?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Yes! To make a deposit from your coin-mining.club   account balance. Simply login 
  									into your members account and click on Make Deposit ans select the Deposit from 
  									Account Balance Radio button.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading12">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
							          Can I make an additional deposit to coin-mining.club   account once it has  been opened?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Yes, you can but all transactions are handled separately.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading13">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
							          After I make a withdrawal request, when will the funds be available on my   ecurrency account?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        Funds are credited immediately to your wallet.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading14">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
							          How can I change my password?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        You can change your password directly from your members area by editing it in   your personal profile.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading15">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
							          Can I lose money?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        There is a risk involved with investing in all high yield investment programs. However,   there are a few simple ways that can help you to reduce the risk of losing more than   you can afford to. First, align your investments with your financial goals,   in other words, keep the money you may need for the short-term out of more aggressive   investments, reserving those investment funds for the money you intend to raise   over the long-term. It's very important for you to know that we are real traders   and that we invest members' funds on major investments. 
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading16">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
							          How can I check my account balances?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        You can access the account information 24 hours, seven days a week over the Internet.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading17">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
							          May I open several accounts in your program?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        No. If we find that one member has more that one account, the entire funds will   be frozen.
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading18">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
							          How can I make a spend?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        To make a spend you must first become a member of coin-mining.club  . Once you 
  									are signed up, you can make your first spend. All spends must be made through  the Member Area. You can login using the member username and password you received   when signup. 
							      </div>
							    </div>
							  </div>
							  <div class="card">
							    <div class="card-header" id="heading19">
							      <h5 class="mb-0">
							        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
							          Who manages the funds?
							        </button>
							      </h5>
							    </div>
							    <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
							      <div class="card-body" style="color: black;">
							        These funds are managed by a team of coin-mining.club   investment experts.
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