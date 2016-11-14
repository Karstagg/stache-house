<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- add CSS file -->
		<link href="../public_html/lib/stache-stylesheet.css" rel="stylesheet" type="text/css"/>

	</head>

	<body>
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
							<a class="page-scroll" href="#services">Our Barbers</a>
						</li>
						<li>
							<a class="page-scroll" href="#portfolio">Follow Us</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact">Contact us</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

<!--		Start Header-->
		<header>
			<div class="header-full">
				<div class="header-text">
			 		<h1>The Stache House</h1>
					<hr>
					<h3>Albuquerque's premier barber lounge</h3>
				</div>
				<button class="btn btn-primary btn-lg" type="submit">Schedule an appointment</button>
			</div>
		</header>


<!--		Start meet our barber section-->

		<section class="bg-primary" id="barbers">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<h1 class="section-heading">Meet Our Barbers!</h1>
						<hr class="light">
						<p class="text-faded">All of our barbers are professionally trained and have a combined xx years of experience. Select your barber's picture to schedule your next appointment with them!</p>
					</div>
				</div>
			</div>
			<div class="barber-links">
				<div class="row">
						 <div class="barber-image col-lg-8 col-md-6 col-sm-1 col-xs-1">

							 <img src="http://loremflickr.com/320/240" alt="placeholder" class="barber-image" href="#"  />

							 <img src="http://loremflickr.com/320/240" alt="placeholder" class="barber-image" href="#"  />

							 <img src="http://loremflickr.com/320/240" alt="placeholder" class="barber-image" href="#"  />
							 <img src="http://loremflickr.com/320/240" alt="placeholder" class="barber-image" href="#"  />

							 <img src="http://loremflickr.com/320/240" alt="placeholder" class="barber-image" href="#"  />

							 <img src="http://loremflickr.com/320/240" alt="placeholder" class="barber-image" href="#"  />
						 </div>
			</div>
			</div>
		</section>

<!--		Mid-point image carousel credit Mohamed Tahhan via bootsnipp.com-->
		<header class="wide-image">
			<div class="header-text">
				<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
	<h4>Hello Jerry, come to rub my face in urine again? There's pros and cons to every alternate timeline. Fun facts about this one – It's got giant, telepathic spiders, 11 9/11s, and the best ice cream in the multiverse! You gotta shove these seeds way up your butt morty, waay up there. You can run, but you can't hide bitch!</h4>
				</div>

			</div>
			</div>
		</header>

<!--<!--		Insert Google Maps API-->-->
<!--<section class="google-map">-->
<!--			<h3 class="map-header">My Google Maps Demo</h3>-->
<!--			<div id="map"></div>-->
<!--			<script>-->
<!--				function initMap() {-->
<!--					var stache = {lat: 35.0831104, lng: -106.6391007};-->
<!--					var map = new google.maps.Map(document.getElementById('map'), {-->
<!--						zoom: 18,-->
<!--						center: stache-->
<!--					});-->
<!--					var marker = new google.maps.Marker({-->
<!--						position: stache,-->
<!--						map: map-->
<!--					});-->
<!--				}-->
<!--			</script>-->
<!--			<script async defer-->
<!--					  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjRDd7yPjFosC6yIgcOubkdZnF9W29V1g&callback=initMap">-->
<!--			</script>-->
<!--</section>-->

	</body>
	</html>
