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
	<nav class="navbar navbar-static-top">
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
					<div class="col-sm-12 col-md-3">
						<ul class="nav navbar-nav nav-pills">
							<!-- Page links -->
							<li><a class="nav-elem" href='#'>Home</a></li>
							<li><a class="nav-elem" href='#'>Other</a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-9">
						<form class="navbar-form navbar-right" role="form" action="" method="post">
							<a class="nav-elem" href="#">New User?</a>
							<input type="text" class="form-control-sm nav-elem" placeholder="Username" name="username" id="username"/>
							<input type="password" class="form-control-sm nav-elem" placeholder="Password" name="pwd" id="pwd"/>
							<button class="btn btn-default nav-elem" type="submit" id="submit-login"><i class="glyphicon glyphicon-log-in"/></i> Log In</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Main Body -->
	<div class="container-fluid">
		<!-- CSS Banner -->
		<section class="page-wrapper hidden-xs hidden-sm" id="banner">
			<div class="col-md-12">
				<img class="img-responsive center-block" src="#" alt="CSS Banner">
			</div>
		</section>

		<!-- About Us -->
		<section class="page-wrapper" id="about">
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
					<div class="row">
						<div class="col-md-3 eboard-bio">
							<h3>Jacqueline Hsu</h3>
							<img class="img-responsive img-rounded" src="#" alt="Jacqueline Hsu">
							<p>
								President of Hofstra CSS
							</p>
						</div>
						<div class="col-md-3 eboard-bio">
							<h3>Christopher Davie</h3>
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
				<div class="visible-xs-block visible-sm-block">
					<h3>CSS E-board</h3>
					<div class="eboard-list">
						<p>Jacqueline Hsu, President</p>
						<p>Christopher Davie, Vice President</p>
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
		<section class="page-wrapper" id="projects">
			<div class="row section-label">
				<h1>What we're working on</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<div class="slider center-block" id="slider1">
							<img class="img-responsive img-rounded center-block" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8NDw8ODg8PDQ4ODQ8NDQ4MDw8NDQ0OFBEWFxQRFBUYHSggGBolHRUUITIiJSwuLi4uFx8zODQsNygtLisBCgoKDg0NFBAPFS0cFBw3OCwsLys3LDcrNyw3NzcsLjc3Li8sLCw3NzcsNysrLDM3LCsyLiw3MzQxLTg3LDc0Mv/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABIEAABAwICBwQGBgcGBgMAAAABAAIDBBESIQUGMUFRYZETcYGhBxQiMlKxQnKCksHwFiMzQ2KislNjk8LR4TREVHPS0wgVF//EABcBAQEBAQAAAAAAAAAAAAAAAAABAwL/xAAeEQEAAwABBQEAAAAAAAAAAAAAAQIREgMhMUFRE//aAAwDAQACEQMRAD8A9TQhCAQhNAkJ2TsgSdk7J2QRsnZSsnZBGydlKydkEbIsp2TsghZOynZFkEbIsp2TsghZFlPCnZBXZFlZZFkFdkrKyyLIK7JWVlkrIK7JWVlkiEFVkrK0hRIQQskpkJEIIpKVkkCQmkgEIQgEJoQFkWTsnZArJ2UrJgII2UrJgJgIFZMBSATAQRsnZSATAQRsnZSsuV09rRhuymcBxlsHE/UBy8T/ALoN7pLScFIzHUStibnbEbudb4WjM+C46p9JcWK0FO57b+/K8MLuYaAfmuM09I+VwLi5znm7nPcXPcBsuTuWDDToPR6fX/H/AMu3/FI/yrZwa3B22nI+rKHfNoXmcEVlj1kkkp7NpcWXwhrT+0de2fHNEmXr0WtEByMcze8RuHk4nyWXFp2ld+9w/wDcZJGB4kWXI6H9GNGGNNU+SSUgFwhc2OJh4NyJPffPgFtmejTR30HVTPqTkfgg6WCpjk/ZyMk+o9rvkrbLlXejiAZsrdIMO7FNFK0eDmK2PVWvg/4fSr7DYyppxIP5XgeSK6WyVlpGO0vD+0hpK1o308rqeY/Ze3COqubrBGzKqhqKI7zUREw/4rLs6kINrZKyIJWSND43NkYdjmODmnxCnZBXZKysskQgqISIVpCiQgqIUSFaQkQgqslZWEKJCCFkWUrJWQRQnZCATQmgLJgITCAAUgEJhAAKQCAmEAApWQAmAgAEEgC5IAGZJyAVVbVx08b5pnBkbBdzj8hxJ2WXkOuWs82kLsF46bFaOAbX8HScTy2DzQd7pfWGnmf6nE4zBzC+ofA8YBGHAGMPF7k7Dbdcb1xmktIUkUsYjEzsePtG1GBwaMJ9oObbZzWJoICAVDxsgpSwc3f7kHquanmdI43N3dm2MHZnI+w8gUG5rXBz7jMBrbHjcX/FRY1VOcLm2y9h3DZ5KxjkFzjhGW05N7zv8Mz4LM0DSg1ENxkx4k7sGY8w1YLPadybl4nb5W6lbXRkgY4nfYDrt+QV9OfMvQqarWyhqFx1JWc1t6aq5qOnTRzXVoN1poKhZsU6DNQq2SKwFBrZ9BU7nGRjTTynMy0rjA8ni4D2X/aBVRZVwbbVsY3sDYaoDm33H+GHuK26EGupKyOa/ZuuWmz2OBZLGeD2HNvir7KNdo5k5DjeOZg/Vzx+zLHyvvbxabg8FVRzOdiZIAJoiGyhtw11xdr23+i4Z8sxtBQXWSIU7JWQVkKJCsISIQVEJEKwhRIQVkJWU7JFBCyVlIoQIJhIKSACkkmEDCezM7BmUBc7rlXVEFLWy08tK0U9FJJJHK175sWFxt7LxguLWJBzQcL/APplZVxGSFsdKwSvYwtaJXSMFrOOMWG/csjRvpLqonAVTGVEe8sAilA4i3snoFwWiWdnSU7eLDJ99xd8iEpnIPX9M+kyjp46Z8DH1bqh9ixnsGnYC0OdLkcObhbjxXQ6O1no6inbVCeOOJ5e1plcGFxabOsDmcwR4L51rZcERO9zurYwQP53vHgtroVohpWucLHAZX8bn2rfgg7LXPWyPSNUKWlkMlPTR45CA5rTUF1swQL2Gz7S0DG3lHCJvaH630fMtWp1Ti/VS1Dts8rnX/gZcf1Y1uID7BdvkeXfZbkPMu6IMmWbs6SYXzlkiZ4AFxXMUs95L7hK5w7o2WH8xWy0tPZgbuu5x6WXK0tS4NLhtJIHcXFzvwQdTHMshsoAvwF1z9NWYuR4f6LZ0smJzRzxHw2edkG+pGWAvt2nvOZVMdcMbrHLEQO4ZfgoVFWIYZJb2wRki/xbG+ZC5Om0k1tvaCspD0ejrdma3VJWc15rR6YZl7bfFwC39FpQG1jfuKivQ6aqWygqFw1JpPmtxTaRHFB18U6yo5VzMFeOKzoq4cUG+a9SutSytHFWCsQbFzwMyeuQC8X1e9IPrOs0oD70VY0UFPfZ+pxGKQfWcZLcpAp+l3X7Ax+jKR95XjBWysP7KMjOFp+I7+Ay2nLxiGd8L2SxnDJFIyWM8HscHNPUBB9jJLH0TXsq6eCqj9yogjnbyD2h1vC9lkoIlRKmUiggQoFWFRKCBCiVMqJQRSUiooEE0gmgakFFSCBhcH6ZqSD/AOpqZ3QRPqf1EUMpYDK28zbgO2+7iXeBV1VLHOwxysbIw7WvFxfj3oPnGKqic1jY3tcGMawYT8LbZDwVUj952DM9w2r2au9F+jJsWFslPizBpzGwtPi03+1dcFrvqWNDiCX1rt4JZ+yIna2OdhDHSZkey8EMcL2FiW7b5Bw+lgXyRU+/2Y3W+Im7z1Lit1p+Xs6Ytb7zy2Jg433eXmtNoj9dWOkOyMF2fxHIf5lsdJSiSrpYtrWEzOtxFyP6R1QbbAIIWQtzwMbH3kDM+Jv1WQ99vZ3NAYPDInxNz4rBc8l7XfRYcRPMZ28ggPugwNYJ7Md9W3VaGM2a0cr9VsdZZPdbxw3+f+i1l8+7LogyIyt3oqTedp+Q/JWijK3FCbWCDI1rqrU7IxtlkF/qsz+ZauVatlrHUY5ms3Rxgfad7R8i1a5qCwKyMluYJB4g2Kg1WNCDNp9LVEfuyu7nWePNbij1wmZ+0ja8cWEsP4rnQEWQeg0GutO6weXQn+8Hs9RcdbLo6TTjHgOa9r2nYWkOHULxhwSjmfEcUbnMPFpIv38UHu0emG8VyGunpEMbXU1C68xu2WcZth4hnF/PYO/ZwU+n6lzDGX2vkXt9l5HBacoE43uSSSSSSTcknaSd5Vb1MqDkH0b6D9JesaGijJJdSTzUxvtw4u0Z/LIB4Lvl4v8A/HOtN9I0xOX6ioaPvMd/kXtBQIqJUkigiVEqRUSggUipFRKCJSTKSCITSCaBqQUU0EgpBRCkEEgud1z1Pi0y2Bs000Ip3PcBCWYZMeG+MEbsORFrYiuiCYQc3ojUPRtNAKd1LBVASOkL6uGOZ5c629wNgAAPBcJr7qY+Gr7XR+jWiAwtOOijAwvNw9hY0/wsN7fSOe1ewhSCD5ykhkjZaSOSN2d2yMcxwztmCFXHnszOzLPNeuemOV8ehqiWNz2Pilpnh0bnMdbt2tIxNIIycvBf0me4Frn1UeIYcTXxVOAfwmRuMff8VUVaYmEk+RuA4jpl+CxGlSM0YwthBfZpD5JWBjnOcdzWnKwsN+/jYIRkKKyIBn5raUhzA4kBa6nGSysVmPI2iKUjkcBzQamom7WR8m57y4X2hpOQ6WCTFUFa1Bc1WtVLSrA5BcEFV40GRA3Kh5UnSKpzkFblAqTiqyUCKg5SJUCg9E9AlV2el3R3ynopmW3FzXMePJruq+iV8u+iWbs9OaPPxSSxnnjgkb8yF9RIEUihIoEVEqRUSgiVEplIoIlJMpIIBMJBNBIJqITCCQUgoBSCCYTCgFIFBMJhRBTBQaLX+jbU6KroXPZH2lOQ18pwxtfiBZc7vaDR4r55j1XhxYXaRpAM7uDychvAt+K+jdbNDDSVFPR4sPatbhPBzXh7b8rtAXi2kNAaOpS6KaR7Z2ZPjswuY4GxBwNufAoONrdHtp5gxkjJmFuMPjdibtItfjlfxCYVlXCGyPcxhZF7kZNsT95cRtGzfusqMSqMuK1uqtaW7He64OY620NcC0kc7ErDifu+Svax52NcfBEaiWJ0bix3vNNjbMd45EWI5EIBXRP0X27QHkMe0WY/bl8LhvHmOexaKrpJIHYJW4Sc2na144tO8JixKIKlmoNKmFFBuoG6sJVbnIIElZMOjKiRoeyJxadhu0Yu4E3PgsfFvyPfmPFb9+lIZzFI9widGBiaWOcWkOa68RGy9rZ7itulSlt5TjPqWtXMhzmBxOENcXZgtAJcCNuSr2reVNc2WaV4vAJGNYHtBL/ZcDiNt5AtlyUhNTl7pCGtvcgYHB93D2rkbTfF4EJ+VZntaE5znerQJLYV8UQw9kW7CHYS852bn7Xj0WEY1laMnGkTsa2+osxj0toxw36QpmeD5A0/NfWRXyjqDSmXS+jWDaK+CXwjd2h8mlfVhKihIoSKAKiUyolAiolMqJQIpIKSCKYUUwgkmFFMIJKQULphBMJhQupXQTBTBUAUwUFgK4TXnUuGpmNd+sBc1rakQlouWizZTkdwAJ3BoOy5XcgpgoPFtKaoU7oXCIPMjbOZeQnFb6PDMLlo4Wx5NaG2yOXtX4G+a96rtXopCXRnsXHMhovGT9Xd4dFyumdQXzEuGHH8cRHtfWabXQeZYlB2ffxG1dJXak1sN/ZDx4xn+bLzWnqNE1MfvwyAcQ0ub1CDDa8jn3ZFZGOOZpjkaJGHMtdcEHiN7TzWMRbbl35JEf7cldc8fjW6R0G6O74SZY9pFryxjmB7w5jxA2rVtXVRyvbsPXb1WNWUbJjiLcDifadHlj7xsvzRXPOKpc5dVBouAfRxn+M4vLZ5LfaP0PUkDsKaex2GngczzY0KK8/g0fPLnHTzyA7DFDLIOoC2MWq2kHWtSSfbMcf9TgvRWao6Rk209Q6/9rPh/qeFe30f1Z96lH2p2OPk8oPOhqjpH/pT/j0n/sVcuq2kGgk0kpt8BjlPRjiSvRZdSXx/tKVo75mNv3EvCQ1TDfepZG/Ukc7+h5QeSVVLLCbSxSwk7BNG+InwcAsdeyy6pxEWkbUNbzke9v8ANcLWVPoyhnBNNO+N+0CRrXMPK7bYe+x7igp9BehTNXvrXN/V0kL2sJH76T2cu5uPqveLrR6oaAj0ZSsgYBfJ0jvidb8+a3V0DukldK6BkqJQSokoAqJQUigRSQSkgz/Umc+qfqbOfVZCEGP6mzn1T9UZz6q9CCj1RnPqn6qzn1VyEFPqzefVHqzefVXIQVert59Udg3n1VqEFfYN/JR2LfyVYhBDsWo7IKaEEOzCpl0fC/3o2HnYX6rJQg0tXqtRze9EPJ39V1qJ/Rto9+6RvNhDfkLLsUXQcA/0UUROVRVNHC8J+bFs6D0daMhteF1Q4fSqJHO/lFm+S6y6LoMOk0VTQC0MEUQ/uo2s+QWVgH5KldF0EezCXZhTQggYmnIi4ORB2Fa2XV6mJJa10V9oheWs7wz3Qe4LaoQab9G4f7Sf77f/ABVtFoKGFxcC95PxlpAPHIBbRCCvsW/ko7Bv5KsQgr7Bv5KXYN59VahBV6u3n1S9Wbz6q5CCn1VvPql6ozn1V6EGP6mzn1R6mzn1WQhAIQhAIQhAIQhAJG6aEEDiUDjVyEGK4y8lW503JZtki3mg1rnzql8tQtsY+aiYL70GkfPUjcsaSsqhuXQOowd6qdoxp3nzQczLpOqG5Ykunapv0SuuOh4zx6lQOgojx6lBxUms9SPoO6Kh2uFQNsbuhXdfo9Bw8yl+jlP8PzQcJ+m0w2sf90qTdeZN7H/dK7oau03wDzUhq/TD923og4lmvLvgf90rKi11J+g/7pXYN0JTj923oFY3RUI2Mb90IOYh1sLvoP8AulZ8Gn3O+g/7pW8bQxjY0dArBTtG5Br4dIOduPiFlMncdyyBEOCkGBBU2QqwOKlZCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCAQhCD//2Q==" alt="Virtual Tour of Adams Hall">
							<div class="slider-description">
								<p>
									We're working on some very fun projects with Oculus Rift VR headset
									in order to make a virtual tour of Hofstra's campus.
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<div class="slider center-block" id="slider2">
							<img class="img-responsive img-rounded center-block" src="data:image/jpeg;base64,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" alt="Website Project">
							<div class="slider-description">
								<p>
									This website is a great project that we're currently working on!
								</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<div class="slider center-block" id="slider3">
							<img class="img-responsive img-rounded center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPMAAADQCAMAAADlEKeVAAAAn1BMVEX///9EQ0Pr6+sUvrNfX19jY2MUvLJHRkZSUVFLSkpCQUFZWVlkZGRcXFze9PPG6+erq6tVVVX39/fw8PA1NDQRsaw8OzsvLi4Wx7jDw8MAtqwStq+9vb0Xy7psbGwVwrXc3Nyfn5+d2deOjo4Arajl5eV13dLR8+/p+PfH8OyZmZnOzs7F6eiwsLCcnJx5eXmDg4N+fn6Z39knJia15+RLcxcvAAAL1klEQVR4nO2ciWKjOBKG8QkGkzGCxjkcgsedTa/d7jiz8/7PtojLKh0ggUjA4U8nnRhUqo8qgQ7AMEaNGjVq1KhRo0aNGtUTIayvduKzhE7nQ+RaZqKVE13O8a2Tx/tFEAShXSoMtmF0vl1stPG2oT1hZAfbS8wvsllZpCaC3fg6wsL29LrpwbSayXxQIj5uAw5wpnAbvfIK7QOb1FaJ+RDCwiQztCuvYKfgwCYIRcA59YHHDAsFisygMGSudEYsBeZXr76ScMISDZj5LM5qQvb2fDvMh62kRSa/B8scyVcQfNwG87r65EXZvNwC87sKcmL0OHzmg6p1cCIbJPOD7OmL8I0AGyKzL0xs3KkRbAmv3e8hMvMbczKwCJK+q2dvA17/O3wfMnPMyWw7CC8PefXotHe2LPW27Mh/FrPG/nbE8oQmNXKM2cu3bRe7fBKzbTmSsurGVTGbQcGBHSszPVP7f7t8HkUzM8pFMyuNlpQqxXnNNR4DaDtYx8nZbzqd+rqZp7k6ZGZOYMGJvyOZEOEEO4CRh8jMpPZWaHpXnOzCLe6Hocy1ATJvqDiHH+J9M//sbLrEnw6Wmb44b33Rnsl5zUqadJDONhXEg2SmOlrhRbBfAomM0zYM/hhlWguZhceNlRKzpqlXqkMS8C9tGaRhfERTSMxnxsdHRr6vxjyd1tuUqJVm5lrNMxmRf1QzTyVCjfBeSsy+7MGs1JRmrkBOK4RBFjPXe5dd3FWZZQ5mjV4lmGlKSeZq71C+izJze+j6ODOBlWauan3lxV2duXWjZpjpjKxDrmQWene9uDdhbgtNM1Mdz1rkamZBoyYKN2JuCU11PeluWC1yDTMXmizcjLkdND163oJluHrkOmYONCjckLnViYxyeGLP1ZBrmRloWLghc6vr9IkeVwXXpRmq99GQmXKPKtyUuRU0O34uoOvPX3LMwD26cGPmNk36wkK/I457LZgJaKZwc+YWTZozHxZO8EhDLsxSzGVM6NbShrlNdnPmPe1tFGNqmQYtxTzlI7djbpHdvPltTH3ietmQOU1ENnOUx5JALQLNtmisMLDSSe66YMsxp9C8T1nmsoPJmSdBQM2RDWTyF6XwYkZcFWw/q7WLOX3k+x3O9SY6Cdclw8DdpcEWRI7LfELyUlm7MVdyCrl3dNHaiBdj7cA+vhpsihNXCrorNzGF1hjRu1au0UkuV22lmI1jxRKgHW6jdJZM1AtimFtIx7qkJHPNnQZ2sNogkhqUHSqzsa++18AOgj9XaqroUJmNHWeNGSjcFlPb9OEaLLPxatXVEYTpyhx9XRwwM74VsO7ux2DNsTdoZiN2g4lZpaRdb26MOWnVZlhDXYw0SebKEkqCzM1sBIrMSf+kjjpcUTZ1MgdfwmygsxXYVTYnIZwQ7oy5od0GzLi2qJoaQt8Gc3LhOgZVKQ7GTp/G3NE5LFU2Mt25gS0aupgh4due2k1hiMEMliAzNGu5vJvBXEZWE2Y/HzbFlyAUDOAmjpDZXEcK8mAFFcyh0hNEDZjzCQG0sQTU9nUanGIOY5W6jrBwFfPO4I7ANTIXY+SdB6suvSvRxMyVswWZDhMFZt5kjWbmPNi7Fa9dm+Uij5hZMKdEzjnIM9vMvCczktfCnFGjIy/By/YlZK6aIRcwh8rMepAp09i72IOupVoUzJTbJXMFchmfKmZ4LD+TOaP+YPO7gBMx10wS58wwg76Mmc1JhCdlaWbzUMlcu/bTc+YUmo00l9nOmeuQsybdY2bsYLSinjPOI7qHzynnzBJrXbhJH2FhyAyfq/505sRB36SgzY2YWWq9vkfM/LQ0jPMEMq/ehcySC7nMc+6AGVbHZ25/W2AVs28giGytXBGzJHJis+rZfhlmbW9Z4CcmExTLTGvcs+8zkERWYja/gtk3YtjCcg9ZZllkvBYr/Q4HPrMuZFFqGoiKc4J3M8wCp5PLFWQ2T1/N3OYUhuLze1zHjIx3PrNHylRiPsLCkBna5TE3bc6vD8f1ylzZxDwEP7mR8WFBN3hxVmWGSSKO84rH3ADXjzcfnpn0NbzEJrlCIWTuOM6AGW7iMSundhbeMnIW+ciNkJkb5zbM0KIis3JqRytQnxUR2wTdz3eKOdbNbKoxqyIbe1idtxLfl1nUMKc89Dl2ViJm7r1SQmYkwax+1qZs5pmai9ud9+GZ1LMQfsxLkpl/TxyPGSF8x44EszKyMaUJ9mArI+bI49aA74mDD2MLmMH9KCQzKGyS9wGuoF2GucnF2fWAUW9NbuRdFy7QweSsh2SZuc+jtWRugGxcIDP2tiLQvuFTT9dbO2lmn2+UYV6JmS2auVEfbAeNOhZ4vQzd+gwaDtP5csxX91SYqayimZsgGz7F7FjADnQPMWF2XLyPDDMREfoB0+bMDbud71Rye/BJYMptuilYh+wxzz38nMNMGkXQ6pEqLM3cdHSxoyNngReiIVDDmd45TW2ZOMNK4cPTjZkbIhuIeeXHCtxB4F99o88oiRZG9tDv3oPLvzQzUytkBoUhM7QLmJsiG3SNrktB5xUgfEMRs7R9Tr2vY+bkICI2KjFfrbaYEpqumFV6MLwyCvtHdkerfD9JFTO32aFGzLrW3A/svQnWmgx1ekBPczof0jAb01pmwZkGXZmhAxbJDO16m9dYUtXnN5+NX1Jx9ECU8neRxdlpcX0ni5hZnIIyzFS1jiUps+Yphj0bQWzdWx/PD4nOfyKPR+xap/JR9b0zJ0UwVx7tghkWBnGeN5NX9+TGwuUVS7izcUQSBq7Z4zVUIuaaK6j/dcyx1cCqG5UXMobZk3yHQ9ah+RJmY6Nu2nWnxGmIyyzVTfK7YXbqn0q6OPVmKKPxtWPKZ5a+fh5h0wHMyn7JMxsRt8mKlZy/yFcS7N0FqYRZocfwhyoMmBfNJMOM1m69oVJzj0TmMivoq5iTAZa8edd5pV5JMFBm4+DJ2sO36U8B8wa67QyF2Th7cwlrcw/PE051MsNqP5XZeJXIbyfKeRDy/fL6vJmvSakyw8Iks7tuJlf+CdqHyFlUWFo4a74tzcxXfz6BORkkR86cj72YO5HIEnt9VhDbJ7kyd9cPA4qPcxY7AZ4fBW/ATHTaQCnNYTxQhYn+W7xpqliJOa3q4jjF0CIZazjuRd3IAOXHp90Za3eqGYCPunH9+pvQXX9t6tTvn4R+99emTv3++aOUPmb9NnWqC//eviHzd4zzd2T+jrk9MuuxqVMjsx6bA2B+enr6kfz48aSROTOJLfeQ+e3nUyld/nVhU6fefnTA3IFNnSL9e+qAWZdNnXp70h+TIcVZG3MHx1GnSP++Y25rY+7Apk59S+ZHwr+/NNnsO/PVu8cOmB8f+8hMxPlRFzNp8zsxL5Ovvub24zLxDv9LfuhjXhYm+xrnZS59cV4us0jrs6lTiX9FamtkzuwtNdrUKRyTLuKc6qm3ce6O+ety+65K/5L+/Vu5a9c2NerXY6WWhKr3vOvWpl7mpRYBZj0ml50xd+DfIJhn8n7Msn1ndCmGGdrM95/VfUb+OeuSGVecsczwL6nSTwqv8G/p16x0tXA234sT58LWddeiorSy9HtZbp/NiMOYfdJhnMtDXVZ6/bN0gArJjIhG9s1j5kaPzBRmG6y82zjPSIoSfrYkYgI25EFalhECefirzItyp9IYTJc06Pmv+YYiyWYdMs/0aHnXrc2R+XaZZz1nngmZXzg78z7jfNjdebtKL/gr/dGYmQ/3IkS/qqtzmPFXlf5JgdPv2eyfyl2RtM0MNzuM8jY/TW9FTLCH/9VmExvMoPs4fsa+5dLJrNumTpH+vehiftFvU6e68G9k1mNTp0bm/trUqZG5vzZ1qjvm+x4z39/fJ/7hn/qYscn7DLyvzLl0Muu2qVOlfy8dMOP/+8x8r8+/t3v9NnWqC/9GZj02dWpk7q9NnfqmzM/Pz9qZn9N/+EdvmbGLzxqZn0v1k/k5DfSzxpikNvOv3jLf5+AamctQ95H5mZAu5g5s6tTI3F+bOjUy99emTt39h9Bbf22OGjVq1KhRo0aNGjVqlFb9Hye7nuL2heDhAAAAAElFTkSuQmCC" alt="She++">
							<div class="slider-description">
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
		<section class="page-wrapper" id="events">
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
			<div class="hidden-xs">
				<div class="row inner-section-label">
					<h3>Check our calendar for events and meeting times</h3>
				</div>
				<div class="row">
					<!-- Event Calendar -->
					<div class="col-md-12">
						<div class="responsive-iframe-container">
							<iframe class="calendar" src="https://www.google.com/calendar/embed?src=taylor.ninesling%40gmail.com&ctz=America/New_York"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</body>
</html>