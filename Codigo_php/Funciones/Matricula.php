<?php

  function matricula($Nivel ="seccion a"){
echo  "<table class='table table-bordered '>";
echo  "<tr><td colspam='6'>matricula del $Nivel </td></tr>";
  echo  "<tr><td>grado</td>";
   echo  "<td>seccion</td>";
    echo  "<td>n° de estudiantes</td>";
     echo  "<td>f</td>";
echo  "<td>m</td>";
     echo  "<td>docente</td>";

     
  echo  "</tr>";
for( $h = 0 ; $h < 30 ; $h++ ){
  $j = $h +1;
  echo  "<tr>";
  echo  "<td>$j </td>";
   echo  "<td>mano</td>";
    echo  "<td>paj</td>";
     echo  "<td>vhh</td>";
echo  "<td>paj</td>";
     echo  "<td>vhh</td>";

  echo  "</tr>";
}

echo  "</table>";
}


function matricula_general($Estudiante,$Sexo,$Procedencia){
  
echo  "<table class='table table-bordered '>";
echo  "<tr><td colspan='10'>matricula general</td></tr>";
  echo  "<tr><td>cedula</td>";
   echo  "<td>nombres y apellidos</td>";
    echo  "<td>sexo</td>";
     echo  "<td>fecha de nacimiemto</td>";
echo  "<td>edad</td>";
     echo  "<td>lugar de nacimiemto</td>";
     echo  "<td>plantel</td>";
     echo  "<td>cedula</td>";
     echo  "<td>nombres y apellidos</td>";
     echo  "<td>telefono</td>";
     echo  "<td>direccion</td>";

     
  echo  "</tr>";
  $i = 0;


while($Estudiante[$i][0]){
  
  echo  "<tr>";
  echo "<td>".$Estudiante[$i][6]."</td>";
   echo "<td>".$Estudiante[$i][2] ." ".$Estudiante[$i][3]."</td>";
    echo "<td>".$Sexo[$Estudiante[$i][8]][0]."</td>";
     echo "<td>".$Estudiante[$i][5]."</td>";
echo "<td>".edad($Estudiante[$i][5])."</td>";
     echo "<td>".$Estudiante[$i][0]."</td>";
     echo "<td>".$Procedencia[$Estudiante[$i][4]][0]."</td>";
     echo  "<td>vhh</td>";
     echo  "<td>vhh</td>";
     echo  "<td>vhh</td>";
     echo  "<td>vhh</td>";

  echo  "</tr>";
  $i ++;
}

echo  "</table>";
}
?>
