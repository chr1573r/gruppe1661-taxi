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

Fra:
<select name="fra">
	<option value="uiakrs">UiA Kristiansand</option>
	<option value="uiagrim">UiA Grimstad</option>
	<option value="kristiansand">Kristiansand sentrum</option>
	<option value="mandal">Mandal sentrum</option>
	<option value="vennesla">Vennesla sentrum</option>
	<option value="sogne">Søgne sentrum</option>
<select>

Til:
<select name="til">
	<option value="uiakrs">UiA Kristiansand</option>
	<option value="uiagrim">UiA Grimstad</option>
	<option value="kristiansand">Kristiansand sentrum</option>
	<option value="mandal">Mandal sentrum</option>
	<option value="vennesla">Vennesla sentrum</option>
	<option value="sogne">Søgne sentrum</option>
<select>
<br>
<form action="index.php" method="post">
Kilometer*: <input type="text" name="Antall_km"><br>
<input type="submit" name="beregnpriser" value="Beregn priser">

<?php
if (isset($_POST['beregnpriser']))
{
   *include("kalkulator.php");
}
?>

<br>
<p>Velg tidspunkt:</p>


<input type="radio" name="takst" value="dag" checked="checked">Dag<br>
<input type="radio" name="takst" value="kveld">Kveld<br>


<br>

<input type="checkbox" name="extra information" value="Maxitaxi">Jeg trenger en Maxitaxi<br>
<input type="checkbox" name="extra information" value="Ekstra bagasje">Jeg har med ekstra bagasje<br> 
 



Antall personer:<input type="text" name="antall personer" <br>




</form>




<span style="font-size: 0.8em">*Kun dette feltet behandles av kalkulatoren på dette tidspunkt.</span>
<br>
<div align="left"> 

	
<div align="center">

<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.no/?ie=UTF8&amp;t=p&amp;ll=58.146975,7.995129&amp;spn=0.021742,0.054932&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.no/?ie=UTF8&amp;t=p&amp;ll=58.146975,7.995129&amp;spn=0.021742,0.054932&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">Vis større kart</a></small>	


</div>
</body>


<?php include("footer.php");?>
</html>