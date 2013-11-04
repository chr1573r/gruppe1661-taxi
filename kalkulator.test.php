<?php
//Hent verdier fra input form:
$antall_km=$_POST['Antall_km']; //Henter antall km fra form
$takst=$_POST['takst']; // Henter dag/natt verdi
$Beregn priser= Beregn priser


if ($takst == "dag") // Hvis "dag" er valgt:
{
	$startpris=62; // Start pris

	$tillegspris_agder= 11.60 ;// kr. pr. km. hos AgderTaxi
	$tillegspris_sor= 13.04 ;// kr. pr. km. hos Taxi SÃ¸r
}
else // Hvis "kveld" er valgt:
{
	$startpris=81;// Start pris

	$tillegspris_agder= 15.10 ; // kr. pr. km. hos AgderTaxi
	$tillegspris_sor= 16.95 ; // kr. pr. km. hos Taxi SÃ¸r
}

// Regn ut total priser:
$pris_agder=($antall_km*$tillegspris_agder)+$startpris;
$pris_sor=($antall_km*$tillegspris_sor)+$startpris;

if ($pris_agder < $pris_sor) // Hvis Taxi sÃ¸r er dyrere:
{

	$billigsteselskap = "Agder Taxi";
	$billigstepris = $pris_agder;
	$dyresteselskap = "Taxi SÃ¸r";
	$dyrestepris = $pris_sor;
}
else // Hvis Taxi sÃ¸r er billigst:
{
	$billigsteselskap = "Taxi SÃ¸r";
	$billigstepris = $pris_sor;
	$dyresteselskap = "Agder Taxi";
	$dyrestepris = $pris_agder;
}

// Skriv ut resultat
echo "Billigste selskap: $billigsteselskap<br>";
echo "Billigste pris: $billigstepris,-<br>";

echo "Dyreste selskap: $dyresteselskap<br>";
echo "Dyreste pris: $dyrestepris,-<br><br>";
echo "($takst-takst)<br>";

 include("header.php");
?>
