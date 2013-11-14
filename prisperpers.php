 <?php
 $pris=$_POST['pris_taxi']; 
 $antall=$_POST['antall_person'];
 $produkt= $pris/$antall;
 
 echo "$produkt=($pris/$antall)"; 
 echo "pris pr.person";
 ?> 