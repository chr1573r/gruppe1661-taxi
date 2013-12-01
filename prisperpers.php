 <?php
 //$pris=$_POST['pris_taxi']; 
 $antall=$_POST['antall_personer'];
 $produkt=round($billigstepris/$antall);
 
if ($antall > 1)
{
echo "$produkt kr per person"; 
}
 ?> 