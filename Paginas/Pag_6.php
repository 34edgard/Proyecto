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
 
 
 


$op = 6;
include('../Codigo_php/Funciones/Enunciados.php');
include('../Codigo_php/Funciones/Aula.php');
include('../Partes_html/Head.php');
include('../Partes_html/Header.php');
include('../Partes_html/Nav.php');

include('../Partes_html/Aulas.php');

?>

<?php
include('../Partes_html/Footer.php');


?>
