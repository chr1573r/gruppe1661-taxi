 <?php
 //$pris=$_POST['pris_taxi']; 
 $antall=$_POST['antall_personer'];
 $produkt=round($billigstepris/$antall);
 
if ($antall > 1)
{
?>
<div align="right">
<?php
echo "$produkt kr per person"; 
?>
</div>
<?php
}
 ?> 