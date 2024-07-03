<?php

function selector($arreglo){
$i = 0 ;
  while($arreglo[$i][0]){
    echo "
    <option id='".$arreglo[$i][2][0].$arreglo[$i][0]."'>";
   $a = 0;
    while (true){
      
      if(!$arreglo[$i][$a+1]){
    echo $arreglo[$i][$a];
break;
      }
    $a++;
    }
  echo  "</option>"; 


    $i ++;
  }
   
}

?>
