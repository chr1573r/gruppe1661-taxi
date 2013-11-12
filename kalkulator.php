<?php
//Hent verdier fra input form:
$fra=$_POST['fra'];
$til=$_POST['til']; 
$antall_km=$_POST['Antall_km']; //Henter antall km fra form
$takst=$_POST['takst']; // Henter dag/natt verdi
$rutekode = "ingen"; // Setter blank standardverdi for rutekode

include("rutedata.php");

function BeregnTakst()
{
	global $takst, $startpris, $tillegspris_sor, $tillegspris_agder;
	if ($takst == "dag") // Hvis "dag" er valgt:
	{
		$startpris=62; // Start pris

		$tillegspris_agder= 11.60 ;// kr. pr. km. hos AgderTaxi<br><br>
		$tillegspris_sor= 13.04 ;// kr. pr. km. hos Taxi Sør
	}
	else // Hvis "KVELD/NATT/HELG" er valgt:
	{
		$startpris=81;// Start pris

		$tillegspris_agder= 15.10 ; // kr. pr. km. hos AgderTaxi<br><br>
		$tillegspris_sor= 16.95 ; // kr. pr. km. hos Taxi Sør
	}
	//return ;
}

function RegnUt()
{
	global $antall_km, $startpris, $tillegspris_sor, $tillegspris_agder, $pris_agder, $pris_sor, $billigsteselskap, $billigstepris, $dyresteselskap, $dyrestepris;
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
	//return $pris_agder, $pris_sor, $billigsteselskap, $billigstepris, $dyresteselskap, $dyrestepris;
}

function SkrivUtResultat()
	{
	global $takst, $billigsteselskap, $billigstepris, $dyresteselskap, $dyrestepris;
	// Skriv ut resultat
	echo "Billigste pris: $billigstepris,- ($billigsteselskap)<br><br>";

	echo "Dyreste pris: $dyrestepris,- ($dyresteselskap)<br><br>";
	echo "(Takst:$takst)<br>";
	}

BeregnTakst();
RegnUt();
SkrivUtResultat();

if ( identifiserRute() != "feil" ) // Identifiser ruten som er valg i input form og se om den er gyldig
	{
		echo "Aktivert rute: $rutekode";
	}
else
	{
		echo "Fra og til kan ikke være samme sted!<br>";
		echo "Velg på nytt.<br>";
	}
return $rutekode;

?>
