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
		<div id="intern" class="clearfix">
			<div class="congratulations container clearfix">
				<h1 class="f145 hd-medium center-align">Congratulations</h1>
				<div class="col m6 center-block clearfix">
					<div class="col m11">
						<p class="f18 a-light center-align">
							Well-appointed with queen or twin beds our guestrooms fully carpeted, high speed wired internet, international or local direct dial, mini bar, color television with satellite programmes, 24 hours in- room dining, laundry service, safety deposit box.
						</p>
						<a href="../tpls/" class="btn"><span class="left">Go to the Home</span> <i class="material-icons">trending_flat</i></a>
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
		<?php include_once('includes/footer.php'); ?>
		<script src="../dist/js/scripts.min.js"></script>
	</body>
</html>