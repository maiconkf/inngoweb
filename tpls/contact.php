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
						<h2 class="f60 white-text center-align hd-medium">Contact Us</h2>
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
		<div id="contact-map" class="clearfix">
			<div class="maps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16564.522944409677!2d47.90512084797162!3d29.333935697087913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x10eea32e7d0e66ce!2sKuwait+Institute+for+Scientific+Research+(KISR)!5e0!3m2!1spt-BR!2sbr!4v1458049991615" width="100%" height="1200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="box-address col m5 black">
				<div class="col m8 center-block">
					<p class="city white-text f144 hd-medium">Kuwait City</p>
					<p class="f18 a-light white-text">Inn and Go Plaza Kuwait is a mere 20 minutes from the airport and in the vicinity of The Grand Mosque of Kuwait, Kuwait Tower, Liberation Tower, and the Scientific Museum. Here for work? Enjoy high-speed internet access, meeting facilities and a ballroom for functions that can hold up to 250 guests.</p>
					<div class="col m6 left">
						<p class="f18 a-light white-text">Inn & Go - Plaza Hotel</p>
						<p class="f18 a-light white-text">City here, Kuwait</p>
						<p class="f18 a-light white-text">Address Here, 123</p>
						<p class="f18 a-light white-text">14295 - Zipcode</p>
					</div>
					<div class="col m6 right">
						<p class="f18 a-light white-text">T. +39 8765 478906</p>
						<p class="f18 a-light white-text">T. +94 2839 824950</p>
						<p class="f18 a-light white-text">M. talk@innandgo.com</p>
					</div>
					<div class="social-media">
						<a href="javascript:;" class="left facebook icon"></a>
						<a href="javascript:;" class="left twitter icon"></a>
						<a href="javascript:;" class="left instagram icon"></a>
					</div>
				</div>
			</div>
			<div class="get-touch container">
				<p class="f200 hd-medium">Get in Touch</p>
				<div class="col m7 center-block">
					<p class="f22 a-light center-align">Inn and Go Plaza Kuwait is a mere 20 minutes from the airport and in the vicinity of The Grand Mosque of Kuwait, Kuwait Tower, Liberation Tower, and the Scientific Museum. Here for work? Enjoy high-speed internet access, meeting facilities and a ballroom for functions that can hold up to 250 guests.</p>
				</div>
				<form id="contact" class="col m6 center-block clearfix" method="post">
					<input placeholder="Your Name" id="name" name="name" type="text" class="validate a-light f22">
					<input placeholder="Your Email" id="email" name="email" type="email" class="validate a-light f22">
					<textarea placeholder="Your message. How can we help you?" id="message" name="message" class="validate a-light f22"></textarea>
					<input type="submit" value="Send" class="f22 a-regular btn">
				</form>
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