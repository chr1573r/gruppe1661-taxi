<?php
//Hent verdier fra input form:
$fra=$_POST['fra'];
$til=$_POST['til']; 
$takst=$_POST['takst']; // Henter dag/natt verdi
$rutekode = "ingen"; // Setter blank standardverdi for rutekode

include("rutedata.php");

function BeregnTakst()
{
	global $takst, $startpris, $prisperkm_agder, $prispermin_agder, $prisperkm_sor, $prispermin_sor;
	if ($takst == "dag") // Hvis "dag" er valgt:
	{
		$startpris=62; // Start pris

		$prisperkm_agder= 11.60;	// kr. pr. km. hos AgderTaxi
		$prispermin_agder= 7.50;	// kr. pr. min. hos AgderTaxi
		$prisperkm_sor= 13.04;		// kr. pr. km. hos Taxi Sør
		$prispermin_sor= 6.24;		// kr. pr. min. hos Taxi Sør
	}
	elseif ($takst == "kveld") // Hvis "KVELD/NATT/HELG" er valgt:
	{
		$startpris=81;// Start pris

		$prisperkm_agder= 15.10; 	// kr. pr. km. hos AgderTaxi
		$prispermin_agder= 9.80;	// kr. pr. min. hos AgderTaxi
		$prisperkm_sor= 16.95;	 	// kr. pr. km. hos Taxi Sør
		$prispermin_sor= 8.50;		// kr. pr. min. hos Taxi Sør
	}
	elseif ($takst == "helg") // Hvis "HELG" er valgt:
	{
		$startpris=87;// Start pris

		$prisperkm_agder= 16.30; 	// kr. pr. km. hos AgderTaxi
		$prispermin_agder= 10.50;	// kr. pr. min. hos AgderTaxi
		$prisperkm_sor= 18.26;	 	// kr. pr. km. hos Taxi Sør
		$prispermin_sor= 9.81;		// kr. pr. min. hos Taxi Sør
	}
	elseif ($takst == "hoytid") // Hvis "HØYTID OG HELLIGDAGER" er valgt:
	{
		$startpris=93;// Start pris

		$prisperkm_agder= 17.40; 	// kr. pr. km. hos AgderTaxi
		$prispermin_agder= 11.30;	// kr. pr. min. hos AgderTaxi
		$prisperkm_sor= 19.56;	 	// kr. pr. km. hos Taxi Sør
		$prispermin_sor= 9.81;		// kr. pr. min. hos Taxi Sør
	}

}

function RegnUt()
{
	global $antall_km, $startpris, $prisperkm_agder, $prispermin_agder, $prisperkm_sor, $prispermin_sor, $pris_agder, $pris_sor, $reisetid_min, $billigsteselskap, $billigstepris, $dyresteselskap, $dyrestepris, $differanse;
	// Regn ut total priser:
	$pris_agder=$startpris+($antall_km*$prisperkm_agder)+($reisetid_min*$prispermin_agder);
	$pris_sor=$startpris+($antall_km*$prisperkm_sor)+($reisetid_min*$prispermin_sor);

	if ($pris_agder < $pris_sor) // Hvis Taxi sør er dyrere:
	{

		$billigsteselskap = "Agder Taxi";
		$billigstepris = round($pris_agder);
		$dyresteselskap = "Taxi Sør";
		$dyrestepris = round($pris_sor);
	}
	else // Hvis Taxi sør er billigst:
	{
		$billigsteselskap = "Taxi Sør";
		$billigstepris = round($pris_sor);
		$dyresteselskap = "Agder Taxi";
		$dyrestepris = round($pris_agder);
	}
	$differanse = $dyrestepris - $billigstepris;
	//return $pris_agder, $pris_sor, $billigsteselskap, $billigstepris, $dyresteselskap, $dyrestepris;
}

function SkrivUtResultat()
	{
	global $takst, $billigsteselskap, $billigstepris, $dyresteselskap, $dyrestepris, $reisetid_tekst, $differanse, $fra_desc, $til_desc;
	// Skriv ut resultat
	echo "<span id=\"utdata_header\">Billigste alternativ:</span><br>";
	echo "<span id=\"utdata_reise\">Reise: $fra_desc - $til_desc</span><br>";
	echo "<span id=\"utdata_billigste\">Taxioperatør: $billigsteselskap</span><br>";
	echo "<span id=\"utdata_reisetid\">Reisetid: $reisetid_tekst</span><br>";
	?>
	<div align="right">
	<?php
	echo "Totalt: <span id=\"utdata_sum\">$billigstepris,-<br></span>";
	include ("prisperpers.php");
	echo "<span id=\"utdata_differanse\">Du sparer $differanse kr</span>";
	?>
	</div>
	<?php
	//echo "<span id=\"utdata_dyreste\">Dyreste pris: $dyrestepris,- ($dyresteselskap)</span><br>";
	}



if ( identifiserRute() != "feil" ) // Identifiser ruten som er valg i input form og se om den er gyldig
	{
		BeregnTakst();
		rutedata("hentinfo");
		RegnUt();
		SkrivUtResultat();
	}
else
	{
		echo "<p id=\"utdata_feil\">Fra og til kan ikke være samme sted!<br>";
		echo "Velg på nytt.</p>";
	}
return $rutekode;

?>
