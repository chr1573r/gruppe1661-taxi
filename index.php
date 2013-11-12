<html>

<head>
	<meta charset="UTF-8" />
	<title>TaxiCalc</title>
	<link rel="stylesheet" type="text/css" href="taxicalc.css">
</head>

<body>
<?php include("header.php");?>

<br>


<div align="left">

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

Kilometer: <input type="text" name="Antall_km"><br>
<input type="submit" name="beregnpriser" value="Beregn priser">
<br>
<?php
if (isset($_POST['beregnpriser']))
{
   include("kalkulator.php");
}
?>

<br>
<p>Velg tidspunkt:</p>


<input type="radio" name="takst" value="dag" checked="checked">DAG <span id="takstinfo"> man-fre 06:00-20:00</span><br>
<input type="radio" name="takst" value="kveld">KVELD/NATT/HELG<span id="takstinfo"> man-fre 20:00-24:00<br>
lørdag 06:00-18:00<br>
søndag 06:00-06:00</span><br>


<input type="checkbox" name="extra information" value="Maxitaxi">Jeg trenger en Maxitaxi<br>
<input type="checkbox" name="extra information" value="Ekstra bagasje">Jeg har med ekstra bagasje<br> 
 

<form action="index.php" method="post">


Taxi pris:<input type="text" name="pris_taxi" <br>
<br>
Antall personer:<input type="text" name="antall_person" <br>

<input type="submit" name="Pris" value="Pris pr. peroner">
<?php
if (isset($_POST['Pris']))
{
   include("prisperpers.php");
}
?>

</form>


 
	
<div align="center">

<?php
if (isset($_POST['beregnpriser']))
{
   include("hentkart.php");
}
?>


</div>
</body>


<?php include("footer.php");?>
</html>