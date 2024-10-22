<?php

class persona
{
  public $cedula;
  public $nombre;
  public $apellido;
  public $fecha_nacimiento;
  public $id_telefono;
  public $id_nacionalidad;

  
}

class estudiante extends persona
{
  public $id_sexo;
  public $id_estado_nutricional;
  public $id_procedencia;
  public $direccion;
  public $lugar_nacimiento;
  public $id_codicion;
  public $id_discapacidad;
}

class reprecentante extends persona
{
  public $direccion_trabajo;
  public $direccion_habitacion;
  public $ocupacion;
  public $nivel_instruccion;
  public $id_codicion;
  public $id_discapacidad;
}

class docente extends persona
{
  public $aula_asignada;
}

class personal_administrativo extends persona
{
  private $contraseña;
  public $id_rol;

  public function registrar_datos(
    $cedula,
    $nombre,
    $apellido,
    $contrasena,
    $id_rol
  ) {
 return   $sql = "INSERT INTO `personal_administrativo` (`ci`,`nombre`,`apellido`,`contrasena`,`id_rol`) VALUES ($cedula, '$nombre', '$apellido', '$contrasena',$id_rol)";

  }

  public function consultar_datos($ci=1)
  {
    if ($ci != 1) {
      $weher = "WHERE `ci` = $ci";
    } else {
      $weher = "";
    }

    $sql = "SELECT * FROM `personal_administrativo` $weher";

  return $sql;
  }

  public function editar_datos(
    $cedula,
    $nombre,
    $apellido,
    $contrasena,
    $id_rol
  ) {
 return   $sql = "UPDATE `personal_administrativo` SET `nombre`='$nombre',
   `apellido` = '$apellido', 
   `contrasena` ='$contrasena',
   `id_rol` =$id_rol
   
   WHERE `ci` = $cedula";

  }
}

class direccion
{
  public $id_calle;
  public $id_direccion;
  public $descripcion;

  public function registrar_direccion()
  {
  }

  public function consultar_direccion()
  {
  }

  public function editar_direccion()
  {
  }
}

class calle
{
  public $id_calle;
  public $nombre_calle;
  public $id_sector;

  public function registrar_calle()
  {
  }

  public function consultar_calle()
  {
     $sql ="SELECT * FROM `calle` ";
return $sql;
  }

  public function editar_calle()
  {
  }
}

class sector
{
  public $id_sector;
  public $nombre_sector;
  public $id_municipio;

  public function registrar_sector()
  {
  }

  public function consultar_sector()
  {
    return $sql = "SELECT * FROM `sector`";
  }

  public function editar_sector()
  {
  }
}

class municipio
{
  public $id_municipio;
  public $nombre_municipo;
  public $id_parroquia;

  public function registrar_municipio()
  {
  }

  public function consultar_municipio()
  {
    return $sql = "SELECT * FROM `municipio`";
  }

  public function editar_municipio()
  {
  }
}

class parroquia
{
  public $id_parroquia;
  public $nombre_parroquia;
  public $id_estado;

  public function registrar_parroquia()
  {
  }

  public function consultar_parroquia()
  {
    return $sql = "SELECT * FROM `parroquia`";
  }

  public function editar_parroquia()
  {
  }
}

class estado
{
  public $id_estado;
  public $nombre_estado;
  public $id_pais;

  public function registrar_estado()
  {
  }

  public function consultar_estado()
  {
    return $sql = "SELECT * FROM `estado`";
  }

  public function editar_estado()
  {
  }
}

class pais
{
  public $id_pais;
  public $nombre_pais;

  public function registrar_pais()
  {
  }

  public function consultar_pais()
  {
    return $sql = "
    SELECT *  FROM `pais`
    ";
  }

  public function editar_pais()
  {
  }
}

class telefono
{
  public $id_telefono;
  public $numero;

  public function reguistrar_telefono($numero_telefono)
  {
    $sql = "INSERT INTO `telefono` (`numero`) VALUES ($numero_telefono)";

    $consulta->ejecutar_consulta($sql);
    $sql =
      "SELECT `id_telefono` FROM `telefono` ORDER BY `id_telefono` DESC LIMIT 1";

    $this->id_telefono = $consulta->ejecutar_consulta($sql);
    return $this->id_telefono[0][0];
  }

  public function consultar_telefono($id_telefono)
  {
    $sql = "SELECT `numero` FROM `telefono` WEHER `id_telefono` = $id_telefono";

    $this->numero = $consulta->consultar_registro($sql);

    return $this->numero[0][0];
  }

  public function editar_telefono($id_telefono, $numero_telefono)
  {
  }
}

class sexo
{
  public $id_sexo;
  public $nombre_sexo;

  public function registrar_sexo()
  {
  }

  public function consultar_sexo()
  {
    
    return $sql = "SELECT * FROM `sexo`";
  }

  public function editar_sexo()
  {
  }
}

class estado_nutricional
{
  public $id_estado_nutricional;
  public $descripcion;

  public function registrar_estado_nutricional()
  {
  }

  public function consultar_estado_nutricional()
  {
  }

  public function editar_estado_nutricional()
  {
  }
}

class tallas
{
  public $id_prenda;
  public $cedula_escolar;
  public $talla;
  public $id_talla;

  public function registrar_tallas()
  {
  }

  public function consultar_tallas()
  {
  }

  public function editar_tallas()
  {
  }
}

class prendas
{
  public $id_prenda;
  public $nombre_prenda;

  public function registrar_prendas()
  {
  }

  public function consultar_prendas()
  {
  }

  public function editar_prendas()
  {
  }
}

class documentos
{
  public $id_documento;
  public $nombre_documento;

  public function registrar_documentos()
  {
  }

  public function consultar_documentos()
  {
  }

  public function editar_documentos()
  {
  }
}

class precentado
{
  public $id_precentado;
  public $id_documento;
  public $cedula_escolar;

  public function registrar_precentados()
  {
  }

  public function consultar_precentados()
  {
  }

  public function editar_precentados()
  {
  }
}

class ocupacion
{
  public $id_ocupacion;
  public $nombre_ocupacion;

  public function registrar_precentados()
  {
  }

  public function consultar_precentados()
  {
  }

  public function editar_precentados()
  {
  }
}

class nivel_instruccion
{
  public $id_nivel_instruccion;
  public $nombre_nivel_instruccion;

  public function registrar_nivel_instruccion()
  {
  }

  public function consultar_nivel_instruccion()
  {
  }

  public function editar_nivel_instruccion()
  {
  }
}

class nacionalidad
{
  public $id_nacionalidad;
  public $nombre_nacinalidad;

  public function registrar_nacionalidad()
  {
  }

  public function consultar_nacionalidad()
  {
  }

  public function editar_nacionalidad()
  {
  }
}

class rol
{
  public $id_rol;
  public $nombre_rol;

  public function registrar_rol($nombre_rol)
  {
 return   $sql = "INSERT INTO `roles` (`nombre_rol`) VALUES ($nombre_rol)";

  }

  public function consultar_rol()
  {
   $sql = "SELECT * FROM `roles`";

return $sql;
    }

  public function editar_rol()
  {
  }
}

class sesion
{
  public $cedula;
  public $fecha_sesion;
  public $hora_inicio;
  public $hora_cierre;
  public $id_sesion;

  public function registrar_sesion($cedula,
   $fecha_sesion ,   $hora_inicio)
  {
   

   return $sql = "INSERT INTO `sesiones`(`ci`, `fecha`,`hora_inicio`,`hora_cierre`) VALUES ($cedula,'$fecha_sesion','$hora_inicio','$hora_inicio')";

  }

  public function consultar_sesion($cedula)
  {
  return  $sql = "SELECT * FROM `sesiones` WHERE `ci` = $cedula";

  }

  public function editar_sesion($cedula,$hora_cierre)
  {
    
 return   $sql = "UPDATE `sesiones` SET `hora_cierre`='$hora_cierre'

WHERE `ci` = $cedula ORDER BY `id_sesion` DESC LIMIT 1";

  }
}

class operacion
{
  public $id_session;
  public $id_operacion;
  public $descripcion;

  public function registrar_operacion()
  {
  }

  public function consultar_operacion()
  {
  }

  public function editar_operacion()
  {
  }
}

class parentesco
{
  public $id_tipo_parentesco;
  public $cedula_reprecentante;
  public $cedula_escolar;

  public function registrar_parentesco(
    $id_tipo_parentesco,
    $cedula_escolar,
    $cedula_reprecentante
  ) {
 return   $sql = "INSERT INTO `parentesco` (`id_tipo_parentesco`,`cedula_escolar`,`ci`) VALUES ($id_tipo_parentesco,$cedula_escolar, $cedula_reprecentante)";

  }

  public function consultar_parentesco()
  {
    return $sql = "SELECT * FROM `parentesco`";
  }

  public function editar_parentesco()
  {
  }
}

class tipo_parentesco
{
  public $id_tipo_parentesco;
  public $nombre_parentesco;

  public function registrar_tipo_parentesco($nombre_parentesco)
  {
   return $sql = "INSERT INTO `tipo_parentesco` (`nombre_parentesco`) VALUES ('$nombre_parentesco')";

  
  }

  public function consultar_tipo_parentesco()
  {
  }

  public function editar_tipo_parentesco()
  {
  }
}

class procedencia
{
  public $id_procedencia;
  public $nombre_procedencia;

  public function registrar_procedencia($nombre_procedencia)
  {
  return  $sql = "INSERT INTO `procedencia` (`nombre_procedencia`) VALUES ('$nombre_procedencia')";

    
  }

  public function consultar_procedencia()
  {
    return $sql = "SELECT * FROM `procedencia`";
  }

  public function editar_procedencia()
  {
  }
}

class condicion_medica
{
  public $id_condicion;
  public $nombre_condicion;

  public function registrar_condicion_medica($nombre_condicion)
  {
  return  $sql = "INSERT INTO `condicion_medica` (`nombre_condicion`) VALUES ('$nombre_condicion')";

  }

  public function consultar_condicion_medica()
  {
  }

  public function editar_condicion_medica()
  {
  }
}

class tratamiento
{
  public $id_condicion;
  public $id_tratamiento;
  public $nombre_tratamiento;

  public function registrar_tratamiento()
  {
 return   $sql = "INSERT INTO `tratamiento` (`id_condicion`,`nombre_tratamiento`) VALUES ($id_condicion, '$nombre_tratamiento')";

  }

  public function consultar_tratamiento()
  {
  }

  public function editar_tratamiento()
  {
  }
}

class discapacidad
{
  public $id_discapacidad;
  public $nombre_discapacidad;

  public function registrar_discapacidad()
  {
  return  $sql = "INSERT INTO `discapacidad` (`nombre_discapacidad`) VALUES ('$nombre_discapacidad')";

  }

  public function consultar_discapacidad()
  {
  }

  public function editar_discapacidad()
  {
  }
}
?>
