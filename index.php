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


<input type="radio" name="takst" value="dag" checked="checked">Dag <span id="takstinfo"> man-fre 06:00-20:00</span><br>
<input type="radio" name="takst" value="kveld">Kveld/natt/helg<span id="takstinfo"><br> man-fre 20:00-24:00<br>
lørdag 06:00-18:00<br>
søndag 06:00-06:00</span><br>
<br>



<div align="left">

<form action="index.php" method="post">

Taxi pris:<input type="text" name="pris_taxi"> 

<select name="Antall personer">
	<option name="kode" value="2">2 personer</option>
	<option name="kode" value="3">3 personer</option>
	<option name="kode" value="4">4 personer</option>
	<option name="kode" value="5">5 personer</option>
	</select>
<br>

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