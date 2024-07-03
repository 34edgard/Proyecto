<?php

function Aula($Header = "Header",$Titulo = "Primary card title",$Texto ="Some quick example text to build on the card title and make up the bulk of the card's content.",$Estilo ="text-bg-primary"){
  
  return "<div class='card $Estilo mb-3' style='max-width: 18rem;'>
  <div class='card-header'>$Header</div>
  <div class='card-body'>
    <h5 class='card-title'>$Titulo</h5>
    <table class='table table-bordered border-5 text-white'>
  <tr>
    <td colspan='2'></td>
    <td>v</td>
    <td>h</td>
  </tr>
  <tr>
    <td>3 años</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>4 años</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
    <tr>
    <td>5 años</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
    <tr>
    <td>6 años</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>
  </div>
</div>";
}
?>
