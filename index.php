<html>

<head>
<meta charset="UTF-8" />
<title>TaxiCalc</title>

<link rel="stylesheet" type="text/css" href="taxicalc.css">		

<style>

</style>
</head>

<body>
<?php include("meny.html");?>

<br>

<div align="left">

Til: <input type="text" name="FirstName" value=""><br>
Fra: <input type="text" name="LastName" value=""><br>
<form action="kalkulator.php" method="post">
Km (midlertidig): <input type="text" name="Antall_km"><br>
<input type="submit" value="Submit">

<br>
<p>Velg tidspunkt:</p>


<input type="radio" name="takst" value="dag" checked="checked">Dag<br>
<input type="radio" name="takst" value="kveld">Kveld<br>


<br>

<input type="checkbox" name="extra information" value="Maxitaxi">Jeg trenger en Maxitaxi<br>
<input type="checkbox" name="extra information" value="Ekstra bagasje">Jeg har med ekstra bagasje<br> 
 



Antall personer:<input type="text" name="antall personer" <br>




</form>



<br>
<div align="left"> 

	
<div align="center">
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(58.147337,7.995815),
  zoom:14,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:480px;height:480px;"></div>
<br>	



</div>
</body>


<div align="center">
		<hr>
	<p> © Gruppe 1661 / Year--> 2013
		</div>
</html>