<html>

<head>
	<meta charset="UTF-8" />
	<title>TaxiCalc</title>
	<link rel="stylesheet" type="text/css" href="taxicalc.css">
	<link rel="icon" type="image/png" href="favicon.png">
</head>

<body>

<?php
$side="forside";
include("header.php");?>

<div class="reisekalkulator">
<h1>Reisekalkulator</h1>
<h2>1. Velg ønsket reise og destinasjon:</h2>

<form action="index.php" method="post">
Fra:
<select name="fra">
	<option value="uik">UiA Kristiansand</option>
	<option value="uig">UiA Grimstad</option>
	<option value="krs">Kristiansand sentrum</option>
	<option value="man">Mandal sentrum</option>
	<option value="ven">Vennesla sentrum</option>
	<option value="sog">Søgne sentrum</option>
</select>
<br>
Til:
<select name="til">
	<option value="krs">Kristiansand sentrum</option>
	<option value="uik">UiA Kristiansand</option>
	<option value="uig">UiA Grimstad</option>
	<option value="man">Mandal sentrum</option>
	<option value="ven">Vennesla sentrum</option>
	<option value="sog">Søgne sentrum</option>
</select>
<br>

<h2>2. Velg tidspunkt*:</h2>


<input type="radio" name="takst" value="dag" checked="checked">Dag<br>
<input type="radio" name="takst" value="kveld">Kveld/Natt/Helg<br>
<input type="radio" name="takst" value="helg">Helg<br>
<input type="radio" name="takst" value="hoytid">Høytid og helligdager<br>

<h2>3. Antall reisende:</h2>

<select name="antall_personer">
	<option value="1">1 person</option>
	<option value="2">2 personer</option>
	<option value="3">3 personer</option>
	<option value="4">4 personer</option>

</select>

<br>
<br>
<input id="beregnknapp" type="submit" name="beregnpriser" value="Beregn priser">
<hr>

<?php
if (isset($_POST['beregnpriser']))
{
   include("kalkulator.php");
   ?>
   <hr>
   <?php
}
?>


</form>


 <p class="takstinfo">
<strong>* Taxi operatørene har forskjellige takster utifra tidspunkt:</strong><br><br>
<table class="takstinfo" id="takstinfo_tabell">
<tr>
    <td id="takstinfo_kolonne_1"><strong>Dag:</strong></td>
    <td id="takstinfo_kolonne_2">Man-Fre:</td>
    <td>06.00-20.00</td>
</tr>
<tr>
    <td id="takstinfo_kolonne_1"><strong>Kveld/Natt/Helg:</strong></td>
    <td id="takstinfo_kolonne_2">Man-Tor:<br> Lørdag:<br> Søndag:<br></td>
    <td>20.00-24.00<br>06.00-18.00<br>06.00-06.00<br></td>
</tr>

<tr>
    <td id="takstinfo_kolonne_1"><strong>Helg:</strong></td>
    <td id="takstinfo_kolonne_2">Fredag:<br>Lørdag:<br></td>
    <td>20.00-06.00 <br>18.00-06.00</td>
</tr>

</table>
<strong>Høytid og helligdager:</strong><br>
Påske-, pinse-, jul- og nyttårsaften fra kl. 1200 til kl. 2400<br>
Bevegelige helligdager fra kl. 0000 til kl. 2400.<br>
</p>
</div>

<div id="kart">

<?php
if (isset($_POST['beregnpriser']))
{
	rutedata("viskart");
}
?>
</div>



</body>

</div>
<?php include("footer.php");?>
</html>