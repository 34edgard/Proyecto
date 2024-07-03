<?php

 if(session_id()=="")
 {
 session_start();
 
 if(!$_SESSION){
   if(!$_POST['nombre']){
     // Redirigir al usuario a otra página
header("Location: ./Pag_1.php");
exit;
}
 }

 

 }
 
 
 


$op = 7;
include('../Codigo_php/Funciones/Enunciados.php');
include('../Partes_html/Head.php');
include('../Partes_html/Header.php');
include('../Partes_html/Nav.php');

?>
  
<div class="modal fade" id="firefoxModal" tabindex="-1" aria-labelledby="firefoxModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="firefoxModalLabel">Firefox Bug Test</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 <form action="Pag_9.php" method="post">
  <fieldset class="thumbnail container mt-5">
  <label class="form-label"> 
    cedula
      <input type="number" name="CI2" class="form-control w-75">
    </label>
    <label class="form-label"> 
    nombre de Usuario
      <input type="text" name="usu2" class="form-control w-75">
    </label>
    <label class="form-label"> 
    rol
      <input type="text" name="rol2" class="form-control w-75">
    </label>
    <label class="form-label"> 
    contraseña
      <input type="pass2" name="password" class="form-control w-75  " maxlength="8">
    </label>
    <button type="submit" class="btn btn-primary" name="cambio">cambiar</button>
    <button type="reset" class="btn btn-danger">borrar</button>
  </fieldset>
</form>
 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  <button type="button" class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#firefoxModal">
        editar </button>

        

<?php
include('../Partes_html/Footer.php');


?>
    <script src="../Codigo_js/modal.js"></script>
         <script src="../Codigo_js/alert.js"></script>
