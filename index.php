<!DOCTYPE html>
<html>
<head>
	<title>Hofstra University Computer Science Society</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="custom.css">

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.16/dist/jquery.flip.min.js"></script>
	<script src="js/custom-script.js" type="text/javascript"></script>
	<!-- scrollReveal script at bottom of body -->

	<!-- Initial attribute for scrollReveal data-sr elements -->
	<style> [data-sr] { visibility: hidden; } </style>
</head>
<body>
	<!-- Header -->
	<header>
		<nav class="navbar navbar-fixed-top" id="header">
			<div class="navbar-inner">
				<div class="container">
					<!-- Collapsed navigation bar -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target=".navbar-collapse" aria-expanded="false" id="dropdown-button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Uncollapsed navigation bar -->
					<div class="collapse navbar-collapse">
						<div class="container-fluid">
							<div class="col-md-12">
								<ul class="nav navbar-nav nav-pills center">
									<!-- Page links -->
									<li><a class="nav-elem" href='#about'>About Us</a></li>
									<li><a class="nav-elem" href="#proj1">Virtual Reality</a></li>
									<li><a class="nav-elem" href="#proj2">Web Project</a></li>
									<li><a class="nav-elem" href="#proj3">She++</a></li>
								</ul>
							</div>
							<!-- Login Section
							<div class="col-sm-12 col-md-9">
								<form class="navbar-form navbar-right" role="form" action="" method="post">
									<a class="nav-elem" href="#">New User?</a>
									<input type="text" class="form-control-sm nav-elem" placeholder="Username" name="username" id="username"/>
									<input type="password" class="form-control-sm nav-elem" placeholder="Password" name="pwd" id="pwd"/>
									<button class="btn btn-default nav-elem" type="submit" id="submit-login"><i class="glyphicon glyphicon-log-in"/></i> Log In</button>
								</form>
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<!-- Main Body -->
	<div>
		<!-- CSS Banner -->
		<section class="hidden-xs hidden-sm" id="banner">
			<div class="col-md-12">
				<img class="img-responsive center-block" src="assets/css-banner.png" alt="CSS Banner">
			</div>
		</section>

		<!-- About Us -->
		<section id="about">
			<div class="col-md-12">
				<div class="row section-label">
					<h1 data-sr='move 20px'>Who we are</h1>
				</div>
				<!-- Medium/Large Screen Layout -->
				<div class="hidden-xs hidden-sm">
					<div class="row inner-section-label">
						<div class="col-md-6 col-md-offset-3">
							<h3 data-sr='over 1s'>Computer Science Society E-board</h3>
						</div>
					</div>
					<div class="container">
						<div class="row about-container">
							<div class="col-md-3">
								<div class="eboard-bio" id="eboard-p">
									<div class="front">
										<h2 data-sr='wait 0.4s, enter left'>President</h2>
									</div>
									<div class="back">
										<h3>Jacqueline Hsu</h3>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="eboard-bio" id="eboard-vp">
									<div class="front">
										<h2 data-sr='wait 0.4s, enter left'>Vice President</h2>
									</div>
									<div class="back">
										<h3>Chris Davie</h3>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="eboard-bio" id="eboard-s">
									<div class="front">
										<h2 data-sr='wait 0.4s, enter right'>Secretary</h2>
									</div>
									<div class="back">
										<h3>Amy Topka</h3>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="eboard-bio" id="eboard-t">
									<div class="front">
										<h2 data-sr='wait 0.4s, enter right'>Treasurer</h2>
									</div>
									<div class="back">
										<h3>Taylor Ninesling</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="row inner-section-label">
							<h3 data-sr>She++ E-board</h3>
						</div>
						<div class="row about-container">
							<div class="col-md-3 col-md-offset-3">
								<div class="eboard-bio" id="eboard-she-c">
									<div class="front">
										<h2 data-sr='wait 0.4s, enter left'>Chair</h2>
									</div>
									<div class="back">
										<h3>Siobhan Stergis</h3>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="eboard-bio" id="eboard-she-vc">
									<div class="front">
										<h2 data-sr='wait 0.4s, enter right'>Vice Chair</h2>
									</div>
									<div class="back">
										<h3>J Blaikie</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Small Screen Layout -->
				<div class="eboard-list-wrapper visible-xs-block visible-sm-block">
					<h3>CSS E-board</h3>
					<div class="eboard-list">
						<p>Jacqueline Hsu, President</p>
						<p>Chris Davie, Vice President</p>
						<p>Amy Topka, Secretary</p>
						<p>Taylor Ninesling, Treasurer</p>
					</div>
					<h3>She++ E-board</h3>
					<div class="eboard-list">
						<p>Siobhan Stergis, Chair</p>
						<p>J Blaikie, Vice Chair</p>
						<p>Taylor Ninesling, Treasurer</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Project Links/Descriptions -->
		<section id="projects">
			<div class="row section-label">
				<h1 data-sr='move 20px'>What we're working on</h1>
			</div>
			<div class="hidden-xs hidden-sm">
				<!-- Medium/Large Screen Layout -->
				<div class="row">
					<div class="col-md-12">
						<div class="proj center-block" id="proj1">
							<img class="hidden-xs hidden-sm proj-img img-responsive center-block" src="assets/oculus-rift.jpg" alt="Virtual Tour of Adams Hall">
							<div class="proj-description">
								<p>
									We're working on a Virtual Tour of campus utilizing a VR headset
									from Oculus Rift!
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="proj center-block" id="proj2">
							<img class="proj-img img-responsive center-block" src="assets/code-tag.jpg"	alt="Website Project">
							<div class="proj-description">
								<p>
									Want to build a website with a great group of people?
									Our website is an ongoing project!
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="proj center-block" id="proj3">
							<img class="proj-img img-responsive center-block" src="assets/acmw-logo.jpg" alt="She++">
							<div class="proj-description">
								<p>
									Looking to support women in computing? She++ is the place for you!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Small Screen Layout -->
			<div class="proj-list-wrapper visible-xs-block visible-sm-block">
				<div class="proj-list col-xs-10 col-xs-offset-1">
					<p>
						We're working on a Virtual Tour of campus utilizing a VR headset
						from Oculus Rift!
					</p>
				</div>
				<div class="proj-list col-xs-10 col-xs-offset-1">
					<p>
						Want to build a website with a great group of people?
						Our website is an ongoing project!
					</p>
				</div>
				<div class="proj-list col-xs-10 col-xs-offset-1">
					<p>
						Looking to support women in computing? She++ is the place for you!
					</p>
				</div>
			</div>
		</section>

		<!-- General Event Information -->
		<section id="events">
			<div class="row section-label">
				<h1 data-sr='move 20px'>Join Us!</h1>
			</div>
			<div class="row">
				<!-- Event Updates -->
				<div class="col-md-12">
					<div class="gen-info">
						<h3 data-sr>Fall 2015 Meeting Times:</h3>
						<p data-sr>
							We meet every Wednesday during Common Hour in
							Room 200 of Adams Hall
						</p>
					</div>
				</div>
			</div>
			<div>
				<div class="row inner-section-label">
					<h3 data-sr>Check our calendar for events and meeting times</h3>
				</div>
				<div class="row">
					<!-- Event Calendar -->
					<div class="container">
						<div class="responsive-iframe-container">
							<iframe class="calendar" src="https://www.google.com/calendar/embed?src=hofstracss%40gmail.com&ctz=America/New_York"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section
	</div>

	<!-- Reveals data-sr elements scrolled into viewport -->
	<script src="js/scrollReveal.min.js"></script>
	<script>
		var config = {
			move: '16px',
			over: '0.8s',
			wait: '0.2s',
			reset: true,
			delay: 'onload',
			vFactor: 1
		}

		window.sr = new scrollReveal( config );
	</script>
</body>
</html>
