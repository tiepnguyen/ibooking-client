<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Reservation - Modern Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="styles/style.css">
	<script src="scripts/jquery-1.11.2.min.js"></script>
	<script src="scripts/jquery-ui-1.11.4.min.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<section class="master-body">
		<div class="container">
			<div class="container-box text-center member-connect-bar" id="member-connect-bar">
				<img src="images/user.svg" id="member-profile-pic" alt=""> <span id="member-connect-text">Rex Preferred Guest Member? Connect to get special rates.</span>
				<!-- <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/v/t1.0-1/p120x120/1545027_10152159310381974_2058348071_n.jpg?oh=f5b5e54c6224d685615c6a68b1f741a2&oe=55F2F405&__gda__=1438741703_145e4885fb6ff9e78bc42f0b9593d224" id="member-profile-pic" alt=""> <span id="member-connect-text">Good morning, Tiep. Enjoy your <strong>35% Off</strong> for RPG Platium Membership</span> -->
			</div>
			<div class="breadcrumb-nav">
				<ul>
					<li class="active">Select Dates</li>
					<li class="active">Room &amp; Rate</li>
					<li>Checkout</li>
					<li>Review</li>
					<li>Confirmation</li>
				</ul>
			</div>
			<aside class="body-aside">
				<div class="container-box">
					<h3 class="box-title">Your Stay</h3>
					<div class="box-content">
						<form action="index.html" class="booking-search-form" id="booking-search-form">
							<table class="form-table wide">
								<tr>
									<td>
										<h4 class="form-label-title">Arrival</h4>
										<label class="datepicker-label">
											<input type="text" class="datepicker" id="arrival" placeholder="Arrival" value="Friday, 29 May 2015" readonly>
											<input type="text" name="arrival" class="hide datepicker-alt" placeholder="Arrival" value="">
										</label>
									</td>
									<td>
										<h4 class="form-label-title">Departure</h4>
										<label class="datepicker-label">
											<input type="text" class="datepicker" id="departure" placeholder="Departure" value="Saturday, 30 May 2015" readonly>
											<input type="text" name="departure" class="hide datepicker-alt" placeholder="Arrival" value="">
										</label>
									</td>
									<td>
										<div class="dual-split">
											<label>
												<h4 class="form-label-title">Rooms</h4>
												<input type="text" class="spinner" name="rooms" value="1" min="1" max="4" readonly>
											</label>
										</div>
										<div class="dual-split">
											<label>
												<h4 class="form-label-title">Persons</h4>
												<input type="text" class="spinner" name="persons" value="1" min="1" max="4" readonly>
											</label>
										</div>
									</td>
									<td>
										<h4 class="form-label-title">&nbsp;</h4>
										<label>
											<button type="submit"><i class="fa fa-search"></i></button>
										</label>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</aside>
			<main class="body-main">
				<form action="inform.html">
					<div class="room-list">
						<li class="room-item container-box">
							<div class="room-photo-frame">
								<img src="images/rs_270x0_Deluxe.jpg" alt="">
								<div class="photo-zoom-button"><i class="fa fa-search-plus"></i></div>
							</div>
							<div class="room-text">
								<h2 class="room-name">Deluxe Studio Apartment</h2>
								<p class="room-caption">
									A 65 sqm Deluxe Studio Apartment consists of a combined lounge, dining and sleeping area (queen bed), full kitchen, bathroom, laundry and balcony. <a href="#" class="read-more-button">Read more</a>
								</p>
							</div>
							<ul class="rate-list">
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Early Bird Super Saver - 20% Off
										<span class="rate-price">$250 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#price-breakdown-1" class="dialog-button">Price Breakdown</a>
											<div class="hide" id="price-breakdown-1" title="Price Breakdown" data-modal="true" data-resizable="false" data-width="480" data-scrollable="false">
												<table class="form-table">
													<tr>
														<td width="80">Room</td>
														<td>Deluxe Studio Apartment</td>
													</tr>
													<tr>
														<td>Rate</td>
														<td>Early Bird Super Saver - 20% Off</td>
													</tr>
												</table>
												<br>
												<table class="data-table stripe wide">
													<tr>
														<th>Date</th>
														<th>Price</th>
													</tr>
													<tr>
														<td>20 June 2015</td>
														<td>$232</td>
													</tr>
													<tr>
														<td>21 June 2015</td>
														<td>$168</td>
													</tr>
													<tr>
														<td><strong style="font-size: 1.1em">Total</strong></td>
														<td><strong style="font-size: 1.1em">$400</strong></td>
													</tr>
												</table>
											</div>
											<button type="submit"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#tnc-1" class="dialog-button">Terms &amp; Conditions</a>
											<div class="hide" id="tnc-1" title="Terms &amp; Conditions" data-modal="true" data-width="640" data-maxheight="480" data-resizable="true" data-scrollable="false">
												If cancelled within 48 hours prior to arrival or no show - one night-stay will be forfeited - Charge includes Tax
												<br> FULL pre-payment required. No cancellations or amendments.
												<br> • Rates are quoted in US Dollar (USD)
												<br> • A credit card number is required to guarantee the booking.
												<br> • In case of cancellation less than 24hrs, prior to arrival or in case of no-show, one night stay per room will be charged on your credit card.
												<br> • Check-in time is from 1400hrs and check-out till 1200hrs
												<br> • Please note that children age 12 and older are charged the adult rate. • Payment due upon departure.
												<br> • Hotel reserves the right to cancel or modify reservations where it appears that a customer has engaged in fraudulent or inappropriate activity or under other circumstances where it appears that reservations contain or resulted from a mistake or error.
												<br>
												<br> Please do not hesitate to contact us at the following e-mail address: bookings@rex.com.vn
												<br>
												<br> We are always on hand to assist with your enquiry.
											</div>
										</div>
									</div>
								</li>
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Weekend Package
										<span class="rate-price">$360 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="room-item container-box">
							<div class="room-photo-frame">
								<img src="images/rs_270x0_standard-one-bedroom-(1).jpg" alt="">
								<div class="photo-zoom-button"><i class="fa fa-search-plus"></i></div>
							</div>
							<div class="room-text">
								<h2 class="room-name">Standard One Bedroom</h2>
								<p class="room-caption">
									A 65 sqm Standard One Bedroom Apartment (Un-refurbished) consist of a separate bedroom (queen bed), full kitchen, lounge and dining room, bathroom, laundry and balcony.
								</p>
							</div>
							<ul class="rate-list">
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Early Bird Super Saver - 20% Off
										<span class="rate-price">$250 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Weekend Package
										<span class="rate-price">$360 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="room-item container-box">
							<div class="room-photo-frame">
								<img src="images/rs_270x0_deluxe-two-bedroom-apartment_(4).jpg" alt="">
								<div class="photo-zoom-button"><i class="fa fa-search-plus"></i></div>
							</div>
							<div class="room-text">
								<h2 class="room-name">Deluxe One Bedroom Apartment</h2>
								<p class="room-caption">
									A 65 sqm Deluxe One Bedroom Apartments consist of a separate bedroom (queen bed), full kitchen, lounge and dining room, bathroom, laundry and balcony.
								</p>
							</div>
							<ul class="rate-list">
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Early Bird Super Saver - 20% Off
										<span class="rate-price">$250 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Weekend Package
										<span class="rate-price">$360 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="room-item container-box">
							<div class="room-photo-frame">
								<img src="images/rs_270x0_deluxe-one-bedroom-apartment.jpg" alt="">
								<div class="photo-zoom-button"><i class="fa fa-search-plus"></i></div>
							</div>
							<div class="room-text">
								<h2 class="room-name">Deluxe Two Bedroom Apartment</h2>
								<p class="room-caption">
									A 65 sqm Deluxe Studio Apartment consists of a combined lounge, dining and sleeping area (queen bed), full kitchen, bathroom, laundry and balcony.
								</p>
							</div>
							<ul class="rate-list">
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Early Bird Super Saver - 20% Off
										<span class="rate-price">$250 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Weekend Package
										<span class="rate-price">$360 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="room-item container-box">
							<div class="room-photo-frame">
								<img src="images/rs_270x0_standard-two-bedroom-ensuite-(1).jpg" alt="">
								<div class="photo-zoom-button"><i class="fa fa-search-plus"></i></div>
							</div>
							<div class="room-text">
								<h2 class="room-name">Standard Two Bedroom Ensuite Apartment</h2>
								<p class="room-caption">
									A 65 sqm Standard One Bedroom Apartment (Un-refurbished) consist of a separate bedroom (queen bed), full kitchen, lounge and dining room, bathroom, laundry and balcony.
								</p>
							</div>
							<ul class="rate-list">
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Early Bird Super Saver - 20% Off
										<span class="rate-price">$250 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
								<li class="rate-item">
									<h3 class="rate-name">
										<i class="fa fa-angle-right"></i> Weekend Package
										<span class="rate-price">$360 / Night</span>
									</h3>
									<div class="rate-item-content">
										<div class="rate-item-action">
											<div class="rate-action-caption">Excluding Taxes &amp; Fees</div>
											<a href="#" class="price-breakdown-button">Price Breakdown</a>
											<button class="active"><i class="fa fa-check"></i> SELECT</button>
										</div>
										<div class="rate-item-text">
											Book your stay early and save up to 20% off our Flexi rate! Bookings must be fully prepaid at time of booking and no cancellations or amendments are permitted.
											<br> Package Inclusion:
											<ul>
												<li>Free Wi-Fi Internet access</li>
												<li>Free access to gym and swimming pool</li>
											</ul>
											<a href="#" class="rate-tnc-button">Terms &amp; Conditions</a>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</div>
				</form>
			</main>
		</div>
		<div class="clear"></div>
	</section>
	<script src="scripts/script.js"></script>
	<script src="scripts/facebook.js"></script>
	<!-- end of document -->
</body>

</html>
<?php
require __DIR__ . '/facebook-php-sdk-v4/autoload.php';

Facebook\FacebookSession::setDefaultApplication('128552630568785', '4e9cb1af45a8cde9a0d5d294b1610ef0');
$helper = new Facebook\FacebookJavaScriptLoginHelper();
$session = $helper->getSession();

if ($session) {
    $me = (new Facebook\FacebookRequest($session, 'GET', '/me'))->execute()->getGraphObject()->asArray();
    print_r($me);
}

$canvasHelper = new Facebook\FacebookCanvasLoginHelper();
print_r($canvasHelper->getSignedRequest()->getPayload());

?>