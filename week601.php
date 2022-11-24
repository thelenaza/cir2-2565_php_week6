<?php
$i = 1;
$total = 0;
for($i;$i<=12; $i =$i+1){
   print("2 x $i = " . (2*$i)."<br />");
   $total += $i;
}
print("Total = ".$total);
?>