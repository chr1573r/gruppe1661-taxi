
<html>

<head>
	<meta charset="UTF-8" />
	<title>TaxiCalc</title>
	<link rel="stylesheet" type="text/css" href="taxicalc.css">
</head>

</html>



<?php
Taxi pris:<input type="text" name="pris_taxi" <br>

Antall personer:<input type="text" name="antall_person" <br>

<input type="submit" name="Pris" value="Pris pr. peroner">
<?php
if (isset($_POST['Pris']))
{
   include("pris.php");
}


$pris=$_POST['pris_taxi']; //Henter antall km fra form

$antall= $_POST['antall_person']
{
$produkt= $pris/$antall;
echo "pris_pr.person<br>";
}

?>