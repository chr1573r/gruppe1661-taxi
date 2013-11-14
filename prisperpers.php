 <?php
 //$pris=$_POST['pris_taxi']; 
 $antall=$_POST['antall_personer'];
 $produkt= $billigstepris/$antall;
 
 echo "$produkt=($billigstepris/$antall)"; 
 echo "pris pr.person";
 ?> 