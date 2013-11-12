
<?php
$pris=$_POST['pris_taxi']; //Henter antall km fra form

$antall= $_POST['antall_person'];
$produkt= $pris/$antall;
while ($antall<=10);

echo "$produkt= ($pris/$antall)";
echo "pris_pr.person";
?>