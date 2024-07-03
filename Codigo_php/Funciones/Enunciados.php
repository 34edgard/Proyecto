
<?php


function Enunciado($op){
switch ($op) {
case '0':
    $En = ' 
República Bolivariana de Venezuela<br>

Ministerio del poder popular para la educación universitaria.<br>

U.B.V. " Universidad Bolivariana de Venezuela " ';
    break;
case '1':
  $En ="Por favor ingrese la contraseña";
    break;
  case '2':
  $En = "Le damos la bienvenida al sistema ". $_SESSION['usuario'];
    break;
    case '3':
   $En = "Inscripciónes";
    break;
      
    case '4':
    $En = "Matrícula escolar";
    break;
    
    case '5':
      //se refiere a los profesores por los momentos 
    $En = "Docentes";
    break;
    case '6':
    $En =  "Aulas";
    break;
      case '7':
    $En =  "........";
    break;
    case '8':
      // se cambiara a documentos 
    $En = " Planilla de inscripción";
    break;
    
    case '9':
    $En = "Ajustes";
    break;
    
  
}
echo $En;
}

?>
<?php

//el titulo de la pagina
function Titulo($op){
switch ($op) {
case '0':
    $En = 'portada';
    break;
case '1':
  $En ="inicio_de_sesion";
    break;
  case '2':
  $En = "inicio";
    break;
    case '3':
   $En = "inscripciónes";
    break;
      
    case '4':
    $En = "datos generales de niños y niñas";
    break;
    
    case '5':
    $En =  " por nivel (I, II, III)";
    break;
    case '6':
    $En =  " datos de familia/representante";
    break;
      case '7':
    $En = " Planilla de inscripción";
    break;
    case '8':
    $En = "ajustes";
    break;
    
    case '9':
    $En = "sin definir ahahah pn";
    break;
    
  
}
echo $En;
}

?>
