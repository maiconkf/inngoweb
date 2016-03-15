<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title>Inn & Go</title>
	    <meta name="viewport" content="width=1200, initial-scale=1">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link rel="stylesheet" href="../dist/css/styles.min.css">
	</head>
	<body id="layout-two" class="no-booking">
		<?php include_once('includes/header.php'); ?>
		<div id="booking" class="clearfix black">
			<div class="container">
				<div class="col m7 center-block">
					<ul class="clearfix">
						<li class="f24 left"><a href="javascript:;" class="hd-light white-text">1. Select a Room</a></li>
						<li class="f24 left"><a href="javascript:;" class="hd-light white-text">2. Payment</a></li>
						<li class="f24 left active"><a href="javascript:;" class="hd-light white-text">3. Review</a></li>
						<li class="f24 left"><a href="javascript:;" class="hd-light white-text">4. Confirmation</a></li>
					</ul>
				</div>
				<p class="hd-medium f124 white-text center-align"><i></i>Review</p>
			</div>
		</div>
		<div class="container clearfix">
			<div class="box-reservation col m9 center-block">
				<div class="col m7 center-block">
					<h1 class="f94 hd-medium center-align">Your Reservation</h1>
					<div class="text">
						<p class="f18 a-light">
							Inn and Go Plaza Kuwait is a mere 20 minutes from the airport and in the vicinity of The Grand Mosque of Kuwait, Kuwait Tower, Liberation Tower, and the Scientific Museum. Here for work? Enjoy high-speed internet access, meeting facilities and a ballroom for functions that can hold up to 250 guests.
						</p>
					</div>
					<p class="f20 a-regular black-text"><b>Rakan Jordan Smith</b></p>
					<p class="f20 a-regular black-text">rakansmith@gmail.com</p>
					<p class="f20 a-regular black-text"><b>129 5th Avenue New York 78701</b></p>
					<p class="f20 a-regular black-text">129-398-239</p>
					<p class="f20 a-regular black-text"><b>American Express ending in 8923</b></p>
					<p class="f20 a-regular black-text">rakanjordan@gmail.com</p>
					<p class="f20 a-regular black-text"><b>Flight Number A938</b></p>
					<a href="../tpls/" class="btn"><span class="left">Confirm</span> <i class="material-icons">trending_flat</i></a>
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
					<a href="javascript:;" class="hd-medium f44 white-text">About Us</a>
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