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
				<!-- <li><a href="default.asp">CONTACT</a></li> -->
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
	  		<!-- <h1 class="typewrite" data-period='100' data-set='["Goedendag", "Vandaag is het:"]' data-delay='3000' data-loop='true'></h1> -->
        <p id="introtekst"><strong>Welkom op onze website!</strong> <br>De ziekte van Lyme is een ziekte die niet eenvoudig kan worden geconstateerd. Wij streven ernaar om voor u een zo duidelijk mogelijk overzicht te geven aan de hand van 25 symptomen. Het is een digitaal dagboek die u mee kunt nemen naar een afspraak met uw huisarts.</p>  
        
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
<!--     
    <div id="cardintro">
      <h1>test</h1>
    </div> -->
  
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

        <button class="volgendeVraagButton" type="button" data-slide="2" data-target="myRange2">Volgende vraag</button>
      </div>
		</div>

    <div class="slide">
      <div class="slider_container">
        <!--vraag 3-->
        <h2>Hoeveel last heeft u van onverklaarbare temperatuur-verhogingen of koorts?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange3" class="slider">
        <h4 id="demop">Waarde: <span id="demo3"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="3" data-target="myRange3">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 4-->
        <h2>Hoeveel last heeft u van onverklaarbare koude rillingen?</h2>       
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange4" class="slider">
        <h4 id="demop">Waarde: <span id="demo4"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="4" data-target="myRange4">Volgende vraag</button>
      </div>
		</div>
		
		<div class="slide">
      <div class="slider_container">
        <!--vraag 5-->
        <h2>Hoeveel last heeft u van een pijnlijke keel?</h2>        
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange5" class="slider">
        <h4 id="demop">Waarde: <span id="demo5"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="5" data-target="myRange5">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 6-->
        <h2>Hoeveel last heeft u van kortademigheid?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange6" class="slider">
        <h4 id="demop">Waarde: <span id="demo6"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="6" data-target="myRange6">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 7-->
        <h2>Hoeveel last heeft u van maagklachten?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange7" class="slider">
        <h4 id="demop">Waarde: <span id="demo7"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="7" data-target="myRange7">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 8-->
        <h2>Hoeveel last heeft u van een veranderde stoelgang (obstipatie, diarree)?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange8" class="slider">
        <h4 id="demop">Waarde: <span id="demo8"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="8" data-target="myRange8">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 9-->
        <h2>Hoeveel last heeft u van onverklaarbare gewichtsveranderingen > 3 kg?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange9" class="slider">
        <h4 id="demop">Waarde: <span id="demo9"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="9" data-target="myRange9">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 10-->
        <h2>Hoeveel last heeft u van hartkloppingen, overslaan van het hart?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange10" class="slider">
        <h4 id="demop">Waarde: <span id="demo10"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="10" data-target="myRange10">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 11-->
        <h2>Hoeveel last heeft u van pijn in de borstkas, ribben?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange11" class="slider">
        <h4 id="demop">Waarde: <span id="demo11"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="11" data-target="myRange11">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 12-->
        <h2>Hoeveel last heeft u van pijn en/ of zwelling in gewrichten?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange12" class="slider">
        <h4 id="demop">Waarde: <span id="demo12"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="12" data-target="myRange12">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 13-->
        <h2>Hoeveel last heeft u van pijn in (aanhechting van) spieren en pezen (vgl fibromyalgie)?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange13" class="slider">
        <h4 id="demop">Waarde: <span id="demo13"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="13" data-target="myRange13">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 14-->
        <h2>Hoeveel last heeft u van stijfheid van gewrichten en/of rug?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange14" class="slider">
        <h4 id="demop">Waarde: <span id="demo14"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="14" data-target="myRange14">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 15-->
        <h2>Hoeveel last heeft u van tintelingen, dove plekken, plaatselijk branderige of stekende pijn?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange15" class="slider">
        <h4 id="demop">Waarde: <span id="demo15"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="15" data-target="myRange15">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 16-->
        <h2>Hoeveel last heeft u van spiertrekkingen in het gezicht of elders?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange16" class="slider">
        <h4 id="demop">Waarde: <span id="demo16"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="16" data-target="myRange16">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 17-->
        <h2>Hoeveel last heeft u van spierkrampen, restless legs?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange17" class="slider">
        <h4 id="demop">Waarde: <span id="demo17"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="17" data-target="myRange17">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 18-->
        <h2>Hoeveel last heeft u van dubbelzien, tunnelzicht, moeite met scherp zien?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange18" class="slider">
        <h4 id="demop">Waarde: <span id="demo18"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="18" data-target="myRange18">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 19-->
        <h2>Hoeveel last heeft u van overgevoeligheid voor licht?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange19" class="slider">
        <h4 id="demop">Waarde: <span id="demo19"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="19" data-target="myRange19">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 20-->
        <h2>Hoeveel last heeft u van pijn of jeuk in oren?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange20" class="slider">
        <h4 id="demop">Waarde: <span id="demo20"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="20" data-target="myRange20">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 21-->
        <h2>Hoeveel last heeft u van oorsuizen, zoemen of fluiten?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange21" class="slider">
        <h4 id="demop">Waarde: <span id="demo21"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="21" data-target="myRange21">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 22-->
        <h2>Hoeveel last heeft u van licht in het hoofd, problemen met staan/ lopen?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange22" class="slider">
        <h4 id="demop">Waarde: <span id="demo22"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="22" data-target="myRange22">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 23-->
        <h2>Hoeveel last heeft u van verwardheid, moeite een gedachtespoor vast te houden?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange23" class="slider">
        <h4 id="demop">Waarde: <span id="demo23"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="23" data-target="myRange23">Volgende vraag</button>
      </div>
		</div>
		
		<div class="slide">
      <div class="slider_container">
        <!--vraag 24-->
        <h2>Hoeveel last heeft u van oriëntatie problemen (verdwalen, dingen kwijt raken)?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange24" class="slider">
        <h4 id="demop">Waarde: <span id="demo24"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="24" data-target="myRange24">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 25-->
        <h2>Hoeveel last heeft u van geïrriteerde blaas, niet kunnen ophouden van urine of juist moeilijk kunnen plassen?</h2>
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange25" class="slider">
        <h4 id="demop">Waarde: <span id="demo25"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="25" data-target="myRange25">Volgende vraag</button>
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
            <th colspan="2"></th>
					</tr>
					
					<tr>
						<td colspan="2">Naam: {{Auth::user()->name}}</td>
						<td colspan="2">Datum: {{Auth::user()->created_at->format('m-d-Y')}}</td>
					</tr>

					<tr>
						@if (Auth::user()->gender == 0)
							<td colspan="2">Geslacht: Man</td>
						@else
							<td colspan="2">Geslacht: Vrouw</td>
						@endif
						
						<td colspan="2">Geboortedatum: {{Auth::user()->birthdate}}</td>
					</tr>
					<tr>
						<td colspan="2">Adres: {{Auth::user()->address}}</td>
						<td colspan="2">Huisarts: {{Auth::user()->huisarts}}</td>
					</tr>

					<tr>
						<td colspan="2">Woonplaats: {{Auth::user()->city}}</td>
						<td colspan="2">Email: {{Auth::user()->email}}</td>
					</tr>

					
          
          <table id="patient">
              <tr>
                <th colspan="2">Uitslag Lymedagboek</th>
                <th colspan="2"></th>
                <th colspan="2"></th>
                <th colspan="2"></th>
                <th colspan="2"></th>
              </tr>
              
              <tr>
                <td>Haaruitval</td>
                <td>{{number_format($vraag1)}}</td>
                <td>Kortademigheid, hoesten</td>
                <td>{{number_format($vraag6)}}</td>
                <td>Pijn in de borstkas, ribben</td>
                <td>{{number_format($vraag11)}}</td>
                <td>Spierkrampen</td>
                <td>{{number_format($vraag17)}}</td>
                <td>Gehoor beperking</td>
                <td>{{number_format($vraag21)}}</td>
              </tr>
                      
              <tr>
                <td>Huiduitslag</td>
                <td>{{number_format($vraag2)}}</td>
                <td>Maagklachten, buikpijn</td>
                <td>{{number_format($vraag7)}}</td>
                <td>Pijn spieren/pezen</td>
                <td>{{number_format($vraag13)}}</td>
                <td>Zicht beperking</td>
                <td>{{number_format($vraag18)}}</td>
                <td>licht in het hoofd</td>
                <td>{{number_format($vraag22)}}</td>
              </tr>

              <tr>
                <td>Koorts</td>
                <td>{{number_format($vraag3)}}</td>
                <td>Veranderede stoelgang</td>
                <td>{{number_format($vraag8)}}</td>
                <td>Stijve gewrichten/rug</td>
                <td>{{number_format($vraag14)}}</td>
                <td>Overgevoelig voor licht</td>
                <td>{{number_format($vraag19)}}</td>
                <td>Verwardheid, aandachtsproblemen</td>
                <td>{{number_format($vraag23)}}</td>
              </tr>

              <tr>
                  <td>Koude rillingen</td>
                  <td>{{number_format($vraag4)}}</td>
                  <td>Onverklaarbare gewichtsveranderingen</td>
                  <td>{{number_format($vraag9)}}</td>
                  <td>Tintelingen/stekende pijn</td>
                  <td>{{number_format($vraag15)}}</td>
                  <td>Pijn/jeuk oren</td>
                  <td>{{number_format($vraag20)}}</td>
                  <td>Oriëntatie problemen</td>
                  <td>{{number_format($vraag24)}}</td>
              </tr>

              <tr>
                  <td>Pijklijke keel</td>
                  <td>{{number_format($vraag5)}}</td>
                  <td>Hartkloppingen</td>
                  <td>{{number_format($vraag10)}}</td>
                  <td>Spiertrekkingen</td>
                  <td>{{number_format($vraag16)}}</td>
                  <td>Pijn/jeuk oren</td>
                  <td>{{number_format($vraag20)}}</td>
                  <td>Geïrriteerde blaas</td>
                  <td>{{number_format($vraag25)}}</td>
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
