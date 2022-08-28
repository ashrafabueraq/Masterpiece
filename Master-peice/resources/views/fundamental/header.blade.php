<!DOCTYPE html>
<html lang="en">
<head>
<title>I BID</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href=" {{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href=" {{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href=" {{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href=" {{asset('styles/responsive.css')}}">


</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left"></div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										@guest
										@if (Route::has('login'))

										<li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Login') }}</a></li>
										@endif

										@if (Route::has('register'))
										<li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>{{ __('Register') }}</a></li>
										@endif
										@else
										<li>
                                         <a href="{{url('profile')}}"> Profile </a>

										 <a  href="{{ route('logout') }}"
										 onclick="event.preventDefault();
													   document.getElementById('logout-form').submit();">
										  {{ __('Logout') }}
									     </a>

										 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>



										</li>
										@endguest

									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> 

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('images/logo-auction.png')}}" alt="logo" width="100" height="100"></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="{{url('/')}}" style="font-size:15px;">Home</a></li>
								<li><a href="{{url('auction')}}" style="font-size:15px;">Auctions</a></li>
								<li><a href="{{url('contact')}}" style="font-size:15px;">Contact Us</a></li>
							</ul>
							{{-- <ul class="navbar_user"> --}}
								{{-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> --}}
								{{-- <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li> --}}
								{{-- <li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li> --}}
							{{-- </ul> --}}
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>
