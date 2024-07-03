<?php

  function matricula($Nivel ="seccion a"){
echo "<table class='table table-bordered '>";
echo "<tr><td colspam='6'>matricula del $Nivel </td></tr>";
  echo "<tr><td>grado</td>";
   echo "<td>seccion</td>";
    echo "<td>n° de estudiantes</td>";
     echo "<td>f</td>";
echo "<td>m</td>";
     echo "<td>docente</td>";

     
  echo "</tr>";
for( $h = 0 ; $h < 30 ; $h++ ){
  $j = $h +1;
  echo "<tr>";
  echo "<td>$j </td>";
   echo "<td>mano</td>";
    echo "<td>paj</td>";
     echo "<td>vhh</td>";
echo "<td>paj</td>";
     echo "<td>vhh</td>";

  echo "</tr>";
}

echo "</table>";
}
?>
