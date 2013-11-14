<html>

<head>
	<meta charset="UTF-8" />
	<title>TaxiCalc</title>
	<link rel="stylesheet" type="text/css" href="taxicalc.css">
</head>

<body>
<?php include("header.php");?>

<br>

<h2>1. Velg ønsket reise og destinasjon.</h2>
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
<h2>2. Velg tidspunkt:</h2>


<input type="radio" name="takst" value="dag" checked="checked">Dag* <span id="takstinfo"></span><br>
<input type="radio" name="takst" value="kveld">Kveld/Helg**<span id="takstinfo"><br><br><br>
</span><br>
<br>



<form action="index.php" method="post">

Taxi pris:<input type="text" name="pris_taxi"> 

Antall personer:<input type="text" name="antall_personer"> 


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

<p id="takstinfo">
* man-fre 06.00-20.00 <br><br>
** man-fre 20.00-24.00 <br>
lørdag 06.00-18.00 <br>
søndag 06.00-06.00
</p>

</div>
</body>


<?php include("footer.php");?>
</html>