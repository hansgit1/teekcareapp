<!DOCTYPE html>
<html>
<head>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

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
			<ul>
			@if (Route::has('login'))
  		@auth
				<li><a href="{{ route('logout') }}" >LOGOUT</a></li>
				<li><a href="contact.asp">RESULTATEN</a></li>
				<li><a href="default.asp">CONTACT</a></li>
			</ul>

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

	@if (Route::has('login'))
		@auth
	<div class="section">
		<div class="slide">
      <div class="slider_container">
        <!--vraag 1-->
        <!-- <form action="DataController@voegtoe" method = "POST"> -->
				{!! Form::open(['action' => 'DataController@voegtoe', 'method' => 'POST']) !!}
				<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <h2>Hoeveel last heeft u van haaruitval?</h2>
        <br>
				<input name = "score" type="range" min="0" max="10" value="1" id="myRange" class="slider">
				<input name = "resultaat_nummer" type="hidden" value="1">
				<input name = "user_id" type="hidden">
        <h4 id="demop">Waarde: <span id="demo"></span></h4>
				
				<button class="volgendeVraagButton" type="button" data-slide="1" data-target="myRange">Volgende vraag</button>
      </div>
		</div>
		
    <div class="slide">
      <div class="slider_container">
        <!--vraag 2-->
        <h2>Hoeveel last heeft u van huiduitslag?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange2" class="slider">
        <h4 id="demop">Waarde: <span id="demo2"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="2" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

    <div class="slide">
      <div class="slider_container">
        <!--vraag 3-->
        <h2>Hoeveel last heeft u van onverklaarbare temperatuur-verhogingen of koorts?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange3" class="slider">
        <h4 id="demop">Waarde: <span id="demo3"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="3" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 4-->
        <h2>Hoeveel last heeft u van onverklaarbare koude rillingen?</h2>       
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange4" class="slider">
        <h4 id="demop">Waarde: <span id="demo4"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="4" data-target="myRange">Volgende vraag</button>
      </div>
		</div>
		
		<div class="slide">
      <div class="slider_container">
        <!--vraag 5-->
        <h2>Hoeveel last heeft u van een pijnlijke keel?</h2>        
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange5" class="slider">
        <h4 id="demop">Waarde: <span id="demo5"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="5" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 6-->
        <h2>Hoeveel last heeft u van kortademigheid?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange6" class="slider">
        <h4 id="demop">Waarde: <span id="demo6"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="6" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 7-->
        <h2>Hoeveel last heeft u van maagklachten?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange7" class="slider">
        <h4 id="demop">Waarde: <span id="demo7"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="7" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 8-->
        <h2>Hoeveel last heeft u van een veranderde stoelgang (obstipatie, diarree)?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange8" class="slider">
        <h4 id="demop">Waarde: <span id="demo8"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="8" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 9-->
        <h2>Hoeveel last heeft u van onverklaarbare gewichtsveranderingen > 3 kg?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange9" class="slider">
        <h4 id="demop">Waarde: <span id="demo9"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="9" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 10-->
        <h2>Hoeveel last heeft u van hartkloppingen, overslaan van het hart?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange10" class="slider">
        <h4 id="demop">Waarde: <span id="demo10"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="10" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 11-->
        <h2>Hoeveel last heeft u van pijn in de borstkas, ribben?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange11" class="slider">
        <h4 id="demop">Waarde: <span id="demo11"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="11" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 12-->
        <h2>Hoeveel last heeft u van pijn en/ of zwelling in gewrichten?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange12" class="slider">
        <h4 id="demop">Waarde: <span id="demo12"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="12" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 13-->
        <h2>Hoeveel last heeft u van pijn in (aanhechting van) spieren en pezen (vgl fibromyalgie)?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange13" class="slider">
        <h4 id="demop">Waarde: <span id="demo13"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="13" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 14-->
        <h2>Hoeveel last heeft u van stijfheid van gewrichten en/of rug?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange14" class="slider">
        <h4 id="demop">Waarde: <span id="demo14"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="14" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 15-->
        <h2>Hoeveel last heeft u van tintelingen, dove plekken, plaatselijk branderige of stekende pijn?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange15" class="slider">
        <h4 id="demop">Waarde: <span id="demo15"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="15" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 16-->
        <h2>Hoeveel last heeft u van spiertrekkingen in het gezicht of elders?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange16" class="slider">
        <h4 id="demop">Waarde: <span id="demo16"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="16" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 17-->
        <h2>Hoeveel last heeft u van spierkrampen, restless legs?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange17" class="slider">
        <h4 id="demop">Waarde: <span id="demo17"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="17" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 18-->
        <h2>Hoeveel last heeft u van dubbelzien, tunnelzicht, moeite met scherp zien?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange18" class="slider">
        <h4 id="demop">Waarde: <span id="demo18"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="18" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 19-->
        <h2>Hoeveel last heeft u van overgevoeligheid voor licht?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange19" class="slider">
        <h4 id="demop">Waarde: <span id="demo19"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="19" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 20-->
        <h2>Hoeveel last heeft u van pijn of jeuk in oren?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange20" class="slider">
        <h4 id="demop">Waarde: <span id="demo20"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="20" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 21-->
        <h2>Hoeveel last heeft u van oorsuizen, zoemen of fluiten?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange21" class="slider">
        <h4 id="demop">Waarde: <span id="demo21"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="21" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 22-->
        <h2>Hoeveel last heeft u van licht in het hoofd, problemen met staan/ lopen?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange22" class="slider">
        <h4 id="demop">Waarde: <span id="demo22"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="22" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 23-->
        <h2>Hoeveel last heeft u van verwardheid, moeite een gedachtespoor vast te houden?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange23" class="slider">
        <h4 id="demop">Waarde: <span id="demo23"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="23" data-target="myRange">Volgende vraag</button>
      </div>
		</div>
		
		<div class="slide">
      <div class="slider_container">
        <!--vraag 24-->
        <h2>Hoeveel last heeft u van oriëntatie problemen (verdwalen, dingen kwijt raken)?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange24" class="slider">
        <h4 id="demop">Waarde: <span id="demo24"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="24" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 25-->
        <h2>Hoeveel last heeft u van geïrriteerde blaas, niet kunnen ophouden van urine of juist moeilijk kunnen plassen?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange25" class="slider">
        <h4 id="demop">Waarde: <span id="demo25"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="25" data-target="myRange">Volgende vraag</button>
      </div>
		</div>
  
		<div class="slide">
			<div class="slider_container">
				<!--vraag-->
				<h2>Einde test</h2>
				<img src="img/tick.png"></img>
				<br>
				<!-- <button id="inleverenResultaten" type = 'submit' ><span>Inleveren testresultaten</span></button> -->
				<button id="inleverenResultaten" type ='submit'><input type = 'hidden' id="inleverenResultaten" name= 'submit' value = 'Inleveren testresultaten'>Inleveren testresultaten<span></span></button>
				<!-- </form> -->
				{!! Form::close() !!}
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
						<td>Naam: {{Auth::user()->name}}</td>
						<td>Datum: {{Auth::user()->created_at->format('m-d-Y')}}</td>
					</tr>

					<tr>
						@if (Auth::user()->gender == 0)
							<td>Geslacht: Man</td>
						@else
							<td>Geslacht: Vrouw</td>
						@endif
						
						<td>Geboortedatum: {{Auth::user()->birthdate}}</td>
					</tr>
					<tr>
						<td>Adres: {{Auth::user()->address}}</td>
						<td>Huisarts: {{Auth::user()->huisarts}}</td>
					</tr>

					<tr>
						<td>Woonplaats: {{Auth::user()->city}}</td>
						<td>Email: {{Auth::user()->email}}</td>
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
		@endauth
	@endif
</div>
	<script src="js/teekcare.js"></script>
</body>
</html>
