<?php
session_start();

include "../Codigo_php/Clases/Conexion.php";
include "../Codigo_php/Clases/Persona.php";
$consulta = new consultas;
$SESION = new sesion($consulta);
$ci = $_SESSION["ci"];
$hora_cierre = date("h:i");
$SESION->editar_sesion($ci,$hora_cierre);

// Redirigir al usuario a otra página
// Eliminar todos los datos de la sesión
session_unset();

// Destruir la sesión
session_destroy();
header("Location: ../Index.php");
exit();
?>
