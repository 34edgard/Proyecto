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
 
 
 


$op = 3;
include('../Codigo_php/Funciones/Enunciados.php');
include('../Codigo_php/Funciones/Select.php');
include('../Codigo_php/Clases/Conexion.php');
include('../Codigo_php/Clases/Persona.php');
include('../Partes_html/Head.php');
include('../Partes_html/Header.php');
include('../Partes_html/Nav.php');
include('../Partes_html/Inscripciones_paso_1.php');
?>

<?php
include('../Partes_html/Footer.php');
?>
