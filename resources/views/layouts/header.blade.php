<!DOCTYPE html>
<html>
	<head>
		<title>@stack('title')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
		<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="main-div">
			{{--header starts from here--}}
			<div class="head-div">
				<div class="main">
					<div class="head">
						<span>EVEST</span>
						<p>THE BIGGEST CHOICE OF THE WEB</p>
					</div>
					<div class="btn">
						@if (!Auth::guard('signup')->check())
							{{-- Show the "Login First" button when the user is not authenticated --}}
							<a href="{{ url('/') }}">
								<input type="button" name="login" value="Log In">
							</a>
						@else
							<a href="{{ route('logout') }}">
								<input type="button" name="logout" value="Log Out :{{Auth::guard('signup')->user()->fullname}}">
							</a>
						@endif
					</div>
				</div>
			</div>
			<div class="home-page">
				<div class="pagnation">
					<div class="list">
						<ul>
							<li>HOME</li>
							<li>NEW PROJECT</li>
							<li>SPECIAL</li>
							<li>ALL PRODUCTS</li>
							<li>REVIEWS</li>
							<li>CONTACT</li>
							<li>FAQS</li>
						</ul>
					</div>
					<div class="search">
						<div class="search-1">
							<div class="input">
								<input type="text" name="">
							</div>
							<div class="btnn">
								<input type="button" name="" value="Search">
							</div>
						</div>
					</div>
				</div>
			</div>
			{{--header ends here--}}
			<div class="null">
            </div>