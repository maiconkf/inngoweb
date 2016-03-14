<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title>Inn & Go</title>
	    <meta name="viewport" content="width=1200, initial-scale=1">
	    <link rel="stylesheet" href="../dist/css/styles.min.css">
	</head>
	<body id="layout-two">
		<div id="hero">
			<div class="content">
				<a href="javascript:;" class="logo left"><img src="../dist/img/inn-go-logo.png" alt="Inn & Go - Kuwait Hotel Paza" title="Inn & Go - Kuwait Hotel Paza"></a>
				<div class="right">
					<p class="lang left a-light white-text f15"><u>En</u></p>
					<button class="hamburger hamburger--squeeze right" type="button" aria-label="Menu" aria-controls="navigation">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<div class="row main-text">
					<div class="col m7 center-block">
						<h2 class="f60 white-text center-align hd-medium">About Us</h2>
					</div>
				</div>
				<div class="row">
					<div class="center-block box-scroll">
						<p class="f20 white-text center-align a-lightitalic">Scroll to discover</p>
						<a href="javascript:;" class="arrow-scroll bounce icon"></a>
					</div>
				</div>
				<div class="row">
					<div class="check-booking">
						<div class="left calendar">
							<input type="date" name="checkin" class="checkin datepicker" value="Check-In"></input>
							<div class="box-calendar"><span class="icon-calendar icon"></span></div>
						</div>
						<div class="left calendar">
							<input type="date" name="checkout" class="checkout datepicker" value="Check-Out"></input>
							<div class="box-calendar"><span class="icon-calendar icon"></span></div>
						</div>
						<a href="javascript:;" class="btn f16 a-regular white-text left">Check avaliability</a>
					</div>
				</div>
			</div>
		</div>
		<div id="intern" class="clearfix">
			<div class="our-story container clearfix">
				<h1 class="f200 hd-medium">Our Story</h1>
				<div class="col m7">
					<div class="col m11">
						<p class="f22 a-light">
							Inn and Go Plaza Kuwait is a mere 20 minutes from the airport and in the vicinity of The Grand Mosque of Kuwait, Kuwait Tower, Liberation Tower, and the Scientific Museum. Here for work? Enjoy high-speed internet access, meeting facilities and a ballroom for functions that can hold up to 250 guests.
						</p>
					</div>
				</div>
			</div>
			<div class="content-about">
				<img class="responsive-img" src="http://placehold.it/1920x760">
				<div class="container">
					<h2 class="f60 hd-medium center-align">It started in 1986</h2>
					<div class="col m8 center-block">
						<div class="col m12">
							<p>
								Each Member purchases one week in high season which remains the same each year for the duration of the lease. Each Member is also entitled to four planned vacation weeks throughout the year which are chosen several months in advance. To avoid conflicts, an equitable rotation system is used. The lease is for a period of 75 years and Members can sell or transfer their membership anytime.
							</p>
							<p>
								For any weeks that are not occupied by the Member, friends or family, these can be released back to the hotel for rental. Each member receives 60% of the rental and this money is credited to the Club Member’s account. This money can be used to pay for extra's incurred at the hotel (car rental, flights, bar and restaurant bills, etc.), pay the quarterly due fees or can be credited back to the Member.
							</p>
							<p>
								The Club provides a full time concierge service, to arrange flights to and from Saint-Barthélemy, VIP Service, shopping delivered to the villa prior to arrival, babysitting, restaurant reservations, car rental, in-villa personal coach, etc.
							</p>
							<p>
								The Club also provides storage for all Members. Personal belongings can be left in special containers in the hotel’s secure air-conditioned storage facility. The boxes will be delivered to the villa prior to arrival and taken away at the end of the stay. Beach Club: umbrellas, beach towels, snorkelling gear, water activities, beverage services and reserved beach chairs.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('includes/footer.php'); ?>
		<div id="modal" class="hide">
			<div class="fundo close"></div>
			<div class="container">
				<div class="col m2 right close-icon">
					<button class="hamburger hamburger--squeeze is-active right close" type="button" aria-label="Menu" aria-controls="navigation">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<div class="text-left col m2">
					<a href="./" class="hd-medium f44 white-text">Home</a>
					<a href="javascript:;" class="hd-medium f44 white-text active">About Us</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Accomodations</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Restaurants</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Facilities</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Services</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Contact Us</a>
				</div>
				<div class="text-right col m2">
					<a href="javascript:;" class="hd-medium f44 white-text">Experiences</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Events</a>
					<a href="javascript:;" class="hd-medium f44 white-text">Media</a>
					<div class="newsletter">
						<p class="white-text f18 a-light">If you want to stay up to date with the Hotel, receive updates, news and find our about promotions, exclusive offers and other benefits, sign up for our email newsletter below:</p>
						<div class="row clearfix">
							<div class="input-field col s12">
								<input id="email" type="email" placeholder="Enter your email address" class="white-text a-light">
							</div>
						</div>
					</div>
				</div>
				<div class="lang">
					<a href="javascript:;" class="f18 a-light white-text left"><u>En</u></a>
					<a href="javascript:;" class="f18 a-light white-text left">Ar</a>
				</div>
			</div>
		</div>
		<script src="../dist/js/scripts.min.js"></script>
	</body>
</html>