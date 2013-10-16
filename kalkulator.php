<?php
//Priser for taxi i agder!
$antall_km=$_POST['Antall_km']; //Henter antall km fra form
$takst=$_POST['takst'];


$startpris=62;// Start pris

$tillegspris_agder= 11.60 ;// kr. pr. km. hos AgderTaxi
$tillegspris_sor= 13.04 ;// kr. pr. km. hos Taxi Sør

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

echo "Du valgte $takst";
echo "Billigste selskap: $billigsteselskap<br>";
echo "Billigste pris: $billigstepris<br>";

echo "Dyreste selskap: $dyresteselskap<br>";
echo "Dyreste pris: $dyrestepris<br>";
include 'taxicalc.html';
// Merge test
 
?>
