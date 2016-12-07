<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--		font aweseome-->
		<script src="https://use.fontawesome.com/eb7e32d45e.js"></script>

		<title>The Stache House</title>

		<!--		Inserting Bootstrap-->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>


		<!--		custom jQuery validator-->
		<script src="js/jquery-validate.js" type="application/javascript"></script>

		<!-- Google reCAPTCHA -->
		<script src="https://www.google.com/recaptcha/api.js" type="application/javascript"></script>


		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!--Bootstrap Iamge Gallery-->

		<!-- add CSS file -->
		<link href="../public_html/lib/stache-stylesheet.css" rel="stylesheet" type="text/css"/>

		<script src="lib/scroll.js" type="application/javascript" rel="script"></script>
	</head>

	<body>
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							  data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">The Stache House</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a class="page-scroll" href="#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="#barbers">Our Barbers</a>
						</li>
						<li>
							<a class="page-scroll" href="#follow-us">Follow Us</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact-us">Contact us</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!--		Start Header-->
		<header>
			<div class="container-fluid header-full text-center" id="about">
				<div class="header-top text-center">
					<h1>The Stache House</h1>
					<hr>
					<h3>Albuquerque's premier barber lounge</h3>
				</div>
				<a class="page-scroll" href="#barbers">
					<button class="btn btn-primary btn-lg" type="submit">Schedule an appointment</button>
				</a>
			</div>
		</header>


		<!--		Start meet our barber section-->

		<!--		Start section content-->
		<section class="barber-links container-fluid" id="barbers">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Meet Our Barbers!</h2>
					<hr class="light">
					<p class="text-faded">All of our barbers are professionally trained and licensed. Select your barber's
						picture to schedule your next appointment with them! Visit us any time between 9:30am and 7:30pm
						Tuesday-Saturday. Walk-ins also available with Z-Row</p>
				</div>
			</div>
			<div>
				<div class="col-sm-4 col-md-4 text-center">
					<div class="thumbnail btn-link">
						<a href=https://www.genbook.com/bookings/slot/reservation/30247019><img
								src="../public_html/media/prof/bam-prof.jpg" alt="...">
							<div class="caption">
								<h3>Bam</h3>
						</a>
						<a href="https://www.instagram.com/great_bam_bino/"><p><i class="fa fa-instagram"
																									 aria-hidden="true"></i>@great_bam_bino</p>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<div class="thumbnail btn-link">
					<a href=http://www.yb-cuts.genbook.com>
						<img src="media/yb/YBB11.JPG" alt="...">
						<div class="caption">
							<h3>YB Cuts</h3>
					</a>
					<a href="https://www.instagram.com/yb_cuts/"><p><i class="fa fa-instagram" aria-hidden="true"></i>@yb_cuts
						</p>
				</div>
			</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<div class="thumbnail btn-link">
					<a href=http://www.thatdirtybarber47.genbook.com>
						<img src="media/stev/StevC1.JPG" alt="...">
						<div class="caption">
							<h3>Stev</h3>
							<a href=https://www.instagram.com/thatdirtybarber/>
								<p><i class="fa fa-instagram" aria-hidden="true"></i>@thatdirtybarber</p>
						</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<div class="thumbnail btn-link">
					<a href=http://www.mj-at-stache.genbook.com>
						<img src="media/prof/jesus-prof.jpg" alt="...">
						<div class="caption">
							<h3>Jesus</h3>
							<a href=http://www.mj-at-stache.genbook.com>
								<p><i class="fa fa-instagram" aria-hidden="true"></i>@Instagram4</p>
						</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<div class="thumbnail btn-link">
					<a href=http://www.barbermillz.genbook.com>
						<img src="media/prof/millz-prof.jpg" alt="...">
						<div class="caption">
							<h3>Millz</h3>
							<a href=https://www.instagram.com/millzzz_12/>
								<p><i class="fa fa-instagram" aria-hidden="true"></i>@millzzz_12</p>
						</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<div class="thumbnail btn-link">
					<img src="media/prof/gotti-prof.jpg" alt="...">
					<div class="caption">
						<h3>Erv Gotti</h3>
						<a href=https://www.instagram.com/brad_barber_erv/>
							<p><i class="fa fa-instagram" aria-hidden="true"></i>@brad_barber_erv</p></a>
					</div>
				</div>
			</div>
		</section>

		<!--		Mid-point image carousel credit Mohamed Tahhan via bootsnipp.com-->
		<!--Attempt at youtube cover insert-->

		<!--		Wide Image cover--->
		<header class="wide-image" id="follow-us">
			<div class="header-text">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="row">


					</div>
				</div>
			</div>

		</header>

		<!--		Insert Google Maps API/Contact Form-->
		<div class="container-fluid contact-section" id="contact-us">
			<div class="row">
				<div class="col-lg-6">
					<div class="sub-header text-center"><h3>713 Central Ave NE. Albuquerque, NM 87102</h3><h4>Hours:
							Open 7 days a week 9:30am-7:30pm</h4></div>
					<div id="map"></div>
					<script>
						function initMap() {
							var stacheHouse = {lat: 35.0831104, lng: -106.6391007};
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 15,
								center: stacheHouse,
								disableDefaultUI: true,
								zoomControl: false,
								scaleControl: false,
								scrollwheel: false
							});
							var marker = new google.maps.Marker({
								position: stacheHouse,
								map: map
							});
						}
					</script>
					<script async defer
							  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjRDd7yPjFosC6yIgcOubkdZnF9W29V1g&callback=initMap">
					</script>
				</div>
				<!--			<input form>-->

				<!--Begin Contact Form-->
				<div class="col-lg-6 text-center contact-us">
					<h3>Contact Us!</h3>
					<form id="contact-form" action="php/mailer.php" method="POST" novalidate>
						<div class="form-group">
							<label for="name">Name<span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="text-center">
							<div class="g-recaptcha" data-sitekey="6Lfhlg0UAAAAADFew4gxunMh_GySoa2oxUEzWju7"></div>
						</div>
						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--		Create footer with follow me links-->
		<nav class="navbar navbar-dark bg-inverse navbar-fixed-bottom">
			<div class="container-fluid col-lg-4 col-lg-offset-5 text-center">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a href="https://www.facebook.com/thestachehousebarberlounge/"> <i class="fa fa-facebook-official"
																											 aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/explore/locations/1027150743/the-stache-house-barber-lounge/"><i
							class="fa fa-instagram" aria-hidden="true"></i></a>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

	</body>
</html>

