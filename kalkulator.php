<?php
//Hent verdier fra input form:
$fra=$_POST['fra'];
$til=$_POST['til']; 
$antall_km=$_POST['Antall_km']; //Henter antall km fra form
$takst=$_POST['takst']; // Henter dag/natt verdi
$rutekode = "ingen"; // Setter blank standardverdi for rutekode


function identifiserRute()
// identifiserRute()
//
// Funksjon som kontrollerer at "fra" og "til" ikke er like.
// Hvis "fra" og "til" er forskjellig, setter den sammen verdiene til en såkalt rutekode
// Rutekoden er en unik identifikator som brukes når vi skal laste inn rett kart for reisen.
{
	global $fra, $til, $rutekode;		//Sørg for at fra, til og rutekode manipuleres globalt
	if ( "$fra" != "$til" )
		{
			$rutekode= $fra . $til;		// Setter sammen fra og til, f.eks. krsman for "kristiansand -> mandal"
		}
	else
		{
			return "feil";			// Returnerer verdien "feil". Dette skjer hvis fra og til har samme verdi.
		}
}

if ($takst == "dag") // Hvis "dag" er valgt:
{
	$startpris=62; // Start pris

	$tillegspris_agder= 11.60 ;// kr. pr. km. hos AgderTaxi<br><br>
	$tillegspris_sor= 13.04 ;// kr. pr. km. hos Taxi Sør
}
else // Hvis "kveld" er valgt:
{
	$startpris=81;// Start pris

	$tillegspris_agder= 15.10 ; // kr. pr. km. hos AgderTaxi<br><br>
	$tillegspris_sor= 16.95 ; // kr. pr. km. hos Taxi Sør
}

// Regn ut total priser:
$pris_agder=($antall_km*$tillegspris_agder)+$startpris;
$pris_sor=($antall_km*$tillegspris_sor)+$startpris;

if ($pris_agder < $pris_sor) // Hvis Taxi sør er dyrere:
{

	$billigsteselskap = "Agder Taxi";
	$billigstepris = $pris_agder;
	$dyresteselskap = "Taxi Sør";
	$dyrestepris = $pris_sor;
}
else // Hvis Taxi sør er billigst:
{
	$billigsteselskap = "Taxi Sør";
	$billigstepris = $pris_sor;
	$dyresteselskap = "Agder Taxi";
	$dyrestepris = $pris_agder;
}

// Skriv ut resultat<
//echo "Billigste selskap: $billigsteselskap<br>";//<br><br>
echo "TaxiAgder Pris: $billigstepris,-<br><br>";

//echo "Dyreste selskap: $dyresteselskap<br><br><br>";//
echo "TaxiSør Pris: $dyrestepris,-<br><br>";
echo "(Takst:$takst)<br>";

if ( identifiserRute() != "feil" ) // Identifiser ruten som er valg i input form og se om den er gyldig
	{
		echo "Aktivert rute: $rutekode";
	}
else
	{
		echo "Fra og til kan ikke være samme sted!<br>";
		echo "Velg på nytt.<br>";
	}

?>
