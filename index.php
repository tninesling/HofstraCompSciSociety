<!DOCTYPE html>
<html>
<head>
	<title>Hofstra University Computer Science Society</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="custom-script.js" type="text/javascript"></script>
</head>
<body>
	<!-- Header -->
	<header>
		<nav class="navbar navbar-fixed-top" id="header">
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
							<ul class="nav navbar-nav nav-pills">
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
		</nav>
	</header>

	<!-- Main Body -->
	<div>
		<!-- CSS Banner -->
		<section class="hidden-xs hidden-sm" id="banner">
			<div class="col-md-12">
				<img class="img-responsive center-block" src="#" alt="CSS Banner">
			</div>
		</section>

		<!-- About Us -->
		<section id="about">
			<div class="col-md-12">
				<div class="row section-label">
					<h1>Who we are</h1>
				</div>
				<div class="hidden-xs hidden-sm">
					<div class="row inner-section-label">
						<div class="col-md-6 col-md-offset-3">
							<h3>Computer Science Society E-board</h3>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-3 eboard-bio">
								<h3>Jacqueline Hsu</h3>
								<img class="img-responsive img-rounded" src="#" alt="Jacqueline Hsu">
								<p>
									President of Hofstra CSS
								</p>
							</div>
							<div class="col-md-3 eboard-bio">
								<h3>Chris Davie</h3>
								<img class="img-responsive img-rounded" src="#" alt="Christopher Davie">
								<p>
									Vice President of Hofstra CSS
								</p>
							</div>
							<div class="col-md-3 eboard-bio">
								<h3>Amy Topka</h3>
								<img class="img-responsive img-rounded" src="#" alt="Amy Topka">
								<p>
									Secretary of Hofstra CSS
								</p>
							</div>
							<div class="col-md-3 eboard-bio">
								<h3>Taylor Ninesling</h3>
								<img class="img-responsive img-rounded" src="#" alt="Taylor Ninesling">
								<p>
									Treasurer of Hofstra CSS
								</p>
							</div>
						</div>
						<div class="row inner-section-label">
							<h3>She++ E-board</h3>
						</div>
						<div class="row">
							<div class="col-md-4 eboard-bio">
								<h3>Siobhan Stergis</h3>
								<img class="img-responsive img-rounded" src="#" alt="Siobhan Stergis">
								<p>
									Chair of She++
								</p>
							</div>
							<div class="col-md-4 eboard-bio">
								<h3>J Blaikie</h3>
								<img class="img-responsive img-rounded" src="#" alt="J Blaikie">
								<p>
									Vice Chair of She++
								</p>
							</div>
							<div class="col-md-4 eboard-bio">
								<h3>Taylor Ninesling</h3>
								<img class="img-responsive img-rounded" src="#" alt="Taylor Ninelsing">
								<p>
									Treasurer of She++
								</p>
							</div>
						</div>
					</div>
				</div>
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
				<h1>What we're working on</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<div class="proj center-block" id="proj1">
							<img class="proj-img img-responsive center-block" src="assets/oculus-rift.jpg" alt="Virtual Tour of Adams Hall">
							<!-- source: http://3.bp.blogspot.com/-zWa4qWTeiUI/U_ZIb9fU-oI/AAAAAAAABIg/apU2IUn1UfY/s1600/oculus-rift-banner.png"
								-->
							<div class="proj-description">
								<p>
									We're working on a Virtual Tour of campus utilizing a VR headset
									from Oculus Rift!
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<div class="proj center-block" id="proj2">
							<img class="proj-img img-responsive center-block" src="assets/code-tag.jpg"	alt="Website Project">
							<!-- source: http://www.hidefia.com/wp-content/uploads/2015/02/Code-Tag-Long-Shadow-Minimal-HD-Wallpaper.jpg -->
							<div class="proj-description">
								<p>
									Want to build a website with a great group of people?
									Our website is an ongoing project!
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<div class="proj center-block" id="proj3">
							<img class="proj-img img-responsive center-block" src="assets/acmw-logo.jpg" alt="She++">
							<!-- source: http://women.acm.org/sites/default/files/data/ACMW-hi-res-logo.jpg
						 -->
							<div class="proj-description">
								<p>
									Looking to support women in computing? She++ is the place for you!
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</section>

		<!-- General Event Information -->
		<section id="events">
			<div class="row section-label">
				<h1>When we meet</h1>
			</div>
			<div class="row">
				<!-- Event Updates -->
				<div class="col-md-12">
					<div class="gen-info">
						<h3>Fall 2015 Meeting Times:</h3>
						<p>
							We meet every Wednesday during Common Hour in
							Room 200 of Adams Hall
						</p>
					</div>
				</div>
			</div>
			<div class="">
				<div class="row inner-section-label">
					<h3>Check our calendar for events and meeting times</h3>
				</div>
				<div class="row">
					<!-- Event Calendar -->
					<div class="container">
						<div class="responsive-iframe-container">
							<iframe class="calendar" src="https://www.google.com/calendar/embed?src=taylor.ninesling%40gmail.com&ctz=America/New_York"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section
	</div>

</body>
</html>
