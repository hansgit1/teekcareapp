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
				@foreach($vraag1 as $vraag1enkel)
        <h2>{{$vraag1enkel->vraag}}</h2>
        @endforeach
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
        @foreach($vraag2 as $vraag2enkel)
        <h2>{{$vraag2enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange2" class="slider">
        <h4 id="demop">Waarde: <span id="demo2"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="2" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

    <div class="slide">
      <div class="slider_container">
        <!--vraag 3-->
        @foreach($vraag3 as $vraag3enkel)
        <h2>{{$vraag3enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange3" class="slider">
        <h4 id="demop">Waarde: <span id="demo3"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="3" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 4-->
        @foreach($vraag4 as $vraag4enkel)
        <h2>{{$vraag4enkel->vraag}}</h2>
        @endforeach       
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange4" class="slider">
        <h4 id="demop">Waarde: <span id="demo4"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="4" data-target="myRange">Volgende vraag</button>
      </div>
		</div>
		
		<div class="slide">
      <div class="slider_container">
        <!--vraag 5-->
        @foreach($vraag5 as $vraag5enkel)
        <h2>{{$vraag5enkel->vraag}}</h2>
        @endforeach        
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange5" class="slider">
        <h4 id="demop">Waarde: <span id="demo5"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="5" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 6-->
        @foreach($vraag6 as $vraag6enkel)
        <h2>{{$vraag6enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange6" class="slider">
        <h4 id="demop">Waarde: <span id="demo6"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="6" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 7-->
        @foreach($vraag7 as $vraag7enkel)
        <h2>{{$vraag7enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange7" class="slider">
        <h4 id="demop">Waarde: <span id="demo7"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="7" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 8-->
        @foreach($vraag8 as $vraag8enkel)
        <h2>{{$vraag8enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange8" class="slider">
        <h4 id="demop">Waarde: <span id="demo8"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="8" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 9-->
        @foreach($vraag9 as $vraag9enkel)
        <h2>{{$vraag9enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange9" class="slider">
        <h4 id="demop">Waarde: <span id="demo9"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="9" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 10-->
        @foreach($vraag10 as $vraag10enkel)
        <h2>{{$vraag10enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange10" class="slider">
        <h4 id="demop">Waarde: <span id="demo10"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="10" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 11-->
        @foreach($vraag11 as $vraag11enkel)
        <h2>{{$vraag11enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange11" class="slider">
        <h4 id="demop">Waarde: <span id="demo11"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="11" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 12-->
        @foreach($vraag12 as $vraag12enkel)
        <h2>{{$vraag12enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange12" class="slider">
        <h4 id="demop">Waarde: <span id="demo12"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="12" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 13-->
        @foreach($vraag13 as $vraag13enkel)
        <h2>{{$vraag13enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange13" class="slider">
        <h4 id="demop">Waarde: <span id="demo13"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="13" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 14-->
        @foreach($vraag14 as $vraag14enkel)
        <h2>{{$vraag14enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange14" class="slider">
        <h4 id="demop">Waarde: <span id="demo14"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="14" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 15-->
        @foreach($vraag15 as $vraag15enkel)
        <h2>{{$vraag15enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange15" class="slider">
        <h4 id="demop">Waarde: <span id="demo15"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="15" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 16-->
        @foreach($vraag16 as $vraag16enkel)
        <h2>{{$vraag16enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange16" class="slider">
        <h4 id="demop">Waarde: <span id="demo16"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="16" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 17-->
        @foreach($vraag17 as $vraag17enkel)
        <h2>{{$vraag17enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange17" class="slider">
        <h4 id="demop">Waarde: <span id="demo17"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="17" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 18-->
        @foreach($vraag18 as $vraag18enkel)
        <h2>{{$vraag18enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange18" class="slider">
        <h4 id="demop">Waarde: <span id="demo18"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="18" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 19-->
        @foreach($vraag19 as $vraag19enkel)
        <h2>{{$vraag19enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange19" class="slider">
        <h4 id="demop">Waarde: <span id="demo19"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="19" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 20-->
        @foreach($vraag20 as $vraag20enkel)
        <h2>{{$vraag20enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange20" class="slider">
        <h4 id="demop">Waarde: <span id="demo20"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="20" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 21-->
        @foreach($vraag21 as $vraag21enkel)
        <h2>{{$vraag21enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange21" class="slider">
        <h4 id="demop">Waarde: <span id="demo21"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="21" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 22-->
        @foreach($vraag22 as $vraag22enkel)
        <h2>{{$vraag22enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange22" class="slider">
        <h4 id="demop">Waarde: <span id="demo22"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="22" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 23-->
        @foreach($vraag23 as $vraag23enkel)
        <h2>{{$vraag23enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange23" class="slider">
        <h4 id="demop">Waarde: <span id="demo23"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="23" data-target="myRange">Volgende vraag</button>
      </div>
		</div>
		
		<div class="slide">
      <div class="slider_container">
        <!--vraag 24-->
        @foreach($vraag24 as $vraag24enkel)
        <h2>{{$vraag24enkel->vraag}}</h2>
        @endforeach
        <br>
				<input type="range" min="0" max="10" value="1" id="myRange24" class="slider">
        <h4 id="demop">Waarde: <span id="demo24"></span></h4>

        <button class="volgendeVraagButton" type="button" data-slide="24" data-target="myRange">Volgende vraag</button>
      </div>
		</div>

		<div class="slide">
      <div class="slider_container">
        <!--vraag 25-->
        @foreach($vraag25 as $vraag25enkel)
        <h2>{{$vraag25enkel->vraag}}</h2>
        @endforeach
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
