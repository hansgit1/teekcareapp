<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>

	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
	<title>Teek Care</title>
</head>

<body>
	<!-- Entree -->
<div id="fullpage">

	<div class="section" id="dokter">
		<div id="topmenu">
			<nav class="fill">
			<ul>
			@if (Route::has('login'))
  		@auth
				<li><a href="{{ route('logout') }}" >LOGOUT</a></li>
				<li><a href="contact.asp">RESULTATEN</a></li>
				<li><a href="default.asp">CONTACT</a></li>
			</ul>
			</nav>
		</div>
        @else
				<li><a href="{{ route('register') }}">REGISTREREN</a></li>
				<li><a href="{{ route('login') }}">LOGIN</a></li>
					</div>
                  @endauth
            @endif

	<div id="tekst">
	<h1> Medisch <br> Dagboek	</h1>
	</div>

    <div id="card">
			<div id="content">
	  		<h1 class="typewrite" data-period='100' data-set='["Goedendag", "Vandaag is het:"]' data-delay='3000' data-loop='false'></h1>
	  			<div id="datum">
	  				<p id="dag"></p>
	  				<p id="streepje">-</p>
	  				<p id="maand"></p>
	  				<p id="streepje">-</p>
	  				<p id="jaar"></p>
	  			</div>
					
				  @if (Route::has('login'))
                    @auth
						<button id="dagboekButton"><span>VUL UW DAGBOEK IN</span></button>
                    @else
					<a href="{{ route('login') }}"><button id="dagboekButton" <span>VUL UW DAGBOEK IN</span></button></a>
					</div>
                    @endauth
               
            	@endif

					
				
				</div>
    </div>
	</div>

	<div class="section">
    <div class="slide">
      <div class="slider_container">
        <!--vraag 1-->
        <h2>Heeft u haaruitval?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange" class="slider">
        <h4 id="demop">Waarde: <span id="demo"></span></h4>

				<button class="volgendeVraagButton"><span>Volgende vraag</span></button>
      </div>
		</div>

    <div class="slide">
      <div class="slider_container">
        <!--vraag 2-->
        <h2>Heeft u haaruitval?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange2" class="slider">
        <h4 id="demop">Waarde: <span id="demo2"></span></h4>

        <button class="volgendeVraagButton"><span>Volgende vraag</span></button>
      </div>
		</div>

    <div class="slide">
      <div class="slider_container">
        <!--vraag 3-->
        <h2>Heeft u haaruitval?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange3" class="slider">
        <h4 id="demop">Waarde: <span id="demo3"></span></h4>

        <button class="volgendeVraagButton"><span>Volgende vraag</span></button>
      </div>
		</div>

		<div class="slide">
			<div class="slider_container">
				<!--vraag-->
				<h2>Einde test</h2>
				<img src="img/tick.png"></img>
				<br>
				<button id="inleverenResultaten"><span>Inleveren testresultaten</span></button>
			</div>
		</div>
	</div>

	<div class="section">
		<div id="resultaat">
			<div id="rapport">
				<h1 id="medischrapport">Medisch Rapport</h1>

				<table id="patient">
					<tr>
						<th colspan="2">Patientinformatie</th>
					</tr>

					<tr>
						<td>Naam: Jeroen van Marsbergen</td>
						<td>Datum: 8 juni 2018</td>
					</tr>

					<tr>
						<td>Geslacht: Extreem mannelijk</td>
						<td>Geboortedatum: 12-11-1998</td>
					</tr>

					<tr>
						<td>Adres: Aalsmeer</td>
						<td>Huisarts: Dr.Feijen</td>
					</tr>

					<tr>
						<th colspan="2">Uitslag Lymedagboek</th>
					</tr>

					<tr>
						<td>Griepklachten</td>
						<td>Pijnklachten</td>
					</tr>
				</table>
				<div id="resultaatButton">
					<button id="homeButton"><span>Terug naar homepage</span></button>
					<button onclick="printPDF()" id="pdfbutton"><span>Uitprinten</span></button>
				</div>
			</div>
		</div>
	</div>

</div>
	<script src="js/teekcare.js"></script>
</body>
</html>
