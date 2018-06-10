<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="{{ url('/js/jquery.fullPage.js') }}"></script>
    <script src="{{ url('/js/scroll.js') }}"></script>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/jquery.fullPage.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ url('/css/teekcare.css') }}" />

  	<link rel="shortcut icon" href="{{ url ('/img/teek.jpeg') }}"/>
	
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<title>Teek Care</title>
</head>
<body>
	<!-- Entree -->
<div id="fullpage">
	<div class="section" id="dokter">
		<div id="full">
			<div id="topmenu">
				<ul>
					<li><a href="default.asp">Contact</a></li>
					<li><a href="news.asp">Registreren</a></li>
					<li><a href="contact.asp">Login</a></li>
				</ul>
			</div>

			<h1 class="typewrite" data-period='100' data-set='["Goedendag.", "Vandaag is het:"]' data-delay='3000' data-loop='false'>
				</h1>

				<div id="datum">
					<p id="dag"></p>
					<p id="streepje">-</p>
					<p id="maand"></p>
					<p id="streepje">-</p>
					<p id="jaar"></p>
				</div>

			<div id="home">
				<h1 class="title" id="top"></h1>
				<a class="smoothScroll" href="#slider_container">VUL UW DAGBOEK IN</a>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="slide">
			<div id="vraag_cf" class="container-fluid">
				<div class="container">
					<div class="row">

						<div id="slider_container" class="col-12">

							<!--vraag-->
							<h2>Heeft u haaruitval?</h2>
							<br>
							<input type="range" min="0" max="10" value="1" id="slider" class="slider">
							<h4 id="demop">Waarde: <span id="demo"></span></h4>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div id="vraag_cf" class="container-fluid">
				<div class="container">
					<div class="row">

						<div id="slider_container" class="col-12">

							<!--vraag-->
							<h2>Heeft u haaruitval?</h2>
							<br>
							<input type="range" min="0" max="10" value="1" id="slider" class="slider">
							<h4 id="demop">Waarde: <span id="demo"></span></h4>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div id="vraag_cf" class="container-fluid">
				<div class="container">
					<div class="row">

						<div id="slider_container" class="col-12">

							<!--vraag-->
							<h2>Heeft u haaruitval?</h2>
							<br>
							<input type="range" min="0" max="10" value="1" id="slider" class="slider">
							<h4 id="demop">Waarde: <span id="demo"></span></h4>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="slide">
			<div id="vraag_cf" class="container-fluid">
				<div class="container">
					<div class="row">

						<div id="slider_container" class="col-12">

							<!--vraag-->
							<h2>Heeft u haaruitval?</h2>
							<br>
							<input type="range" min="0" max="10" value="1" id="slider" class="slider">
							<h4 id="demop">Waarde: <span id="demo"></span></h4>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>

	 <script src="{{ asset('js/teekcare.js') }}"></script>
</body>
</html>
