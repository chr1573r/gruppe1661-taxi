<html>

<head>
	<meta charset="UTF-8" />
	<title>TaxiCalc</title>
	<link rel="stylesheet" type="text/css" href="taxicalc.css">
</head>

<body>
<?php include("header.php");?>

<br>

<h2>Velg ønsket reise og destinasjon.</h2>
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

<input type="submit" name="beregnpriser" value="Beregn priser">
<br>
<?php
if (isset($_POST['beregnpriser']))
{
   include("kalkulator.php");
}
?>

<br>
<h2>Velg tidspunkt:</h2>


<input type="radio" name="takst" value="dag" checked="checked">Dag <span id="takstinfo"> man-fre 06:00-20:00</span><br>
<input type="radio" name="takst" value="kveld">Kveld/Natt/Helg<span id="takstinfo"><br><br><br>
man-fre 20:00-24:00<br>
lørdag 06:00-18:00<br>
søndag 06:00-06:00</span><br>
<br>



<div align="left">

<form action="index.php" method="post">

Taxi pris:<input type="text" name="pris"> 

<select name="antal">
	<option name="Antall " value="2">2 personer</option>
	<option name="Antall " value="3">3 personer</option>
	<option name="Antall " value="4">4 personer</option>
	<option name="Antall " value="5">5 personer</option>
	</select>
<br>

<input type="submit" name="Pris" value="Pris pr. personer">
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
	rutedata("viskart");
}
?>


</div>
</body>


<?php include("footer.php");?>
</html>