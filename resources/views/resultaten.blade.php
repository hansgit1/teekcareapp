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
        <li><a href="resultaatButton">RESULTATEN</a></li>
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
                <td class="scorecijfer">{{number_format($vraag1)}}</td>
                <td>Kortademig<br>heid, hoesten</td>
                <td class="scorecijfer">{{number_format($vraag6)}}</td>
                <td>Pijn in de borstkas, ribben</td>
                <td class="scorecijfer">{{number_format($vraag11)}}</td>
                <td>Spierkrampen</td>
                <td class="scorecijfer">{{number_format($vraag17)}}</td>
                <td>Gehoor beperking</td>
                <td class="scorecijfer">{{number_format($vraag21)}}</td>
              </tr>
                      
              <tr>
                <td>Huiduitslag</td>
                <td class="scorecijfer">{{number_format($vraag2)}}</td>
                <td>Maagklachten, buikpijn</td>
                <td class="scorecijfer">{{number_format($vraag7)}}</td>
                <td>Pijn spieren/pezen</td>
                <td class="scorecijfer">{{number_format($vraag13)}}</td>
                <td>Zicht beperking</td>
                <td class="scorecijfer">{{number_format($vraag18)}}</td>
                <td>licht in het hoofd</td>
                <td class="scorecijfer">{{number_format($vraag22)}}</td>
              </tr>

              <tr>
                <td>Koorts</td>
                <td class="scorecijfer">{{number_format($vraag3)}}</td>
                <td>Veranderede stoelgang</td>
                <td class="scorecijfer">{{number_format($vraag8)}}</td>
                <td>Stijve gewrichten/rug</td>
                <td class="scorecijfer">{{number_format($vraag14)}}</td>
                <td>Overgevoelig voor licht</td>
                <td class="scorecijfer">{{number_format($vraag19)}}</td>
                <td>Verwardheid, aandacht<br>sproblemen</td>
                <td class="scorecijfer">{{number_format($vraag23)}}</td>
              </tr>

              <tr>
                  <td>Koude rillingen</td>
                  <td class="scorecijfer">{{number_format($vraag4)}}</td>
                  <td>Onverklaarbare gewichtsveran<br>deringen</td>
                  <td class="scorecijfer">{{number_format($vraag9)}}</td>
                  <td>Tintelingen/<br>stekende pijn</td>
                  <td class="scorecijfer">{{number_format($vraag15)}}</td>
                  <td>Pijn/jeuk oren</td>
                  <td class="scorecijfer">{{number_format($vraag20)}}</td>
                  <td>Oriëntatie problemen</td>
                  <td class="scorecijfer">{{number_format($vraag24)}}</td>
              </tr>

              <tr>
                  <td>Pijklijke keel</td>
                  <td class="scorecijfer">{{number_format($vraag5)}}</td>
                  <td>Hartkloppingen</td>
                  <td class="scorecijfer">{{number_format($vraag10)}}</td>
                  <td>Spiertrekkingen</td>
                  <td class="scorecijfer">{{number_format($vraag16)}}</td>
                  <td>Pijn/jeuk oren</td>
                  <td class="scorecijfer">{{number_format($vraag20)}}</td>
                  <td>Geïrriteerde blaas</td>
                  <td class="scorecijfer">{{number_format($vraag25)}}</td>
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
