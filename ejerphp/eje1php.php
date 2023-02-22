<?php
$alturac= $_GET["alturac"];
echo "LA ALTURA INGRESADA ES:".$alturac;
$rta= $alturac/2.54;
$rta2= $rta/12;
 echo"LA ALTURA INGRESADA EN PULGADAS ES:" . $rta ;
echo "LA ALTURA INGRESADA EN PIES ES:" .$rta2;
?>