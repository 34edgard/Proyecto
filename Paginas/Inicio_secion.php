<?php

session_start();
include "../Codigo_php/Clases/Conexion.php";
$op = 7;
include "../Codigo_php/Funciones/Enunciados.php";
include "../Codigo_php/Clases/Persona.php";
include "../Partes_html/Head.php";
$PA = new personal_administrativo;
$SESION = new sesion;
$consulta = new consultas;
?>

<?php
extract($_POST);
if (isset($n)) {
  $arreglo = $consulta->consultar_registro( $PA->consultar_datos($usu),4);

  if ($contraseña == $arreglo[0][3]) { ?>
  
            <div class='alert alert-primary alert-dismissible fade show container text-center mt-5' role='alert'>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        <strong >puede acceder! que tenga buen dia <br><?php
        echo $arreglo[0][1] . " " . $arreglo[0][2];

        $_SESSION["usuario"] = $arreglo[0][1];

        $_SESSION["ci"] = $arreglo[0][0];
$hora = date("h:i");
$fecha = date("Y-m-d");
     $consulta->ejecutar_consulta($SESION->registrar_sesion($usu,$fecha ,$hora));
        ?>

</strong><br>
  
  <a href="Pag_2.php" class='btn btn-primary' >puede acceder</a>
        </div>
<?php } else { ?>    <div class='alert alert-danger alert-dismissible fade show container mt-5 text-center' role='alert'>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> <h5 class='text-center text-danger' > error el usuario o la contraseña son incorrectos <a href="Pag_1.php">volver</a></h5></div> <?php }
}
?>



