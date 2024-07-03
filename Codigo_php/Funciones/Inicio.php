<?php

function  Notificacion($Src ="...",$Titulo="Card title",$Tabla="no hay tabla."){
  return "  <div class='card'>
      <img src='$Src' class='card-img-top' alt='...'  style='height:250px;  '>
      <div class='card-body'>
        <h5 class='card-title'>$Titulo</h5>
        $Tabla
      </div>
    </div>";
}

?>
