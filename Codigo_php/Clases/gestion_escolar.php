<?php

class inscripcion
{
  public $fecha_inscripcion;
  public $cedula_escolar;
  public $año_escolar;
  public $id_inscripcion;

  public function registrar_inscripcion()
  {
    $sql =
      "INSERT INTO `inscripcion` (`cedula_escolar`,`id_fecha`,`id_año`) VALUES (`$cedula_escolar`,`" .
      registrar_fecha_inscripcion($fecha_inscripcion) .
      "`,$id_año_escolar)";

    $consulta->ejecutar_consulta($sql);
  }

  public function consultar_inscripcion()
  {
  }

  public function editar_inscripcion()
  {
  }
}

class año_escolar
{
  public $id_año_escolar;
  public $id_periodo_escolar;
  public $cedula_docente;
  public $id_aula;
  public $id_seccion;
  public $id_nivel;

  public function registrar_año_escolar()
  {
    $sql = "INSERT INTO `año_escolar` (`id_periodo_escolar`,`id_nivel`,`ci`,`id_aula`,`id_seccion`) VALUES ($id_periodo_escolar,$id_nivel,$cedula_docente,$id_aula,$id_seccion)";

    $consulta->ejecutar_consulta($sql);
  }

  public function consultar_año_escolar()
  {
  }

  public function editar_año_escolar()
  {
  }
}

class fecha_inscripcion
{
  public $id_fecha_inscripcion;
  public $fecha_inscripcion;

  public function registrar_fecha_inscripcion($fecha_inscripcion)
  {
    $sql = "INSERT INTO `fecha_de_inscripcion` (`fecha_inscripcion`) VALUES ('$fecha_inscripcion')";

    $consulta->ejecutar_consulta($sql);

    $sql =
      "SELECT `id_fecha` FROM `fecha_inscripcion` ORDER BY `id_fecha` DESC LIMIT 1";
    $this->id_fecha_inscripcion = $consulta->ejecutar_consulta($sql);
    return $this->id_fecha_inscripcion[0][0];
  }

  public function consultar_fecha_inscripcion()
  {
  }

  public function editar_fecha_inscripcion()
  {
  }
}

class periodo_escolar
{
  public $id_periodo_escolar;
  public $periodo;

  public function registrar_periodo_escolar()
  {
    $sql = "INSERT INTO `periodo_escolar` (`periodo`) VALUES ('$periodo')";

    $consulta->ejecutar_consulta($sql);
  }

  public function consultar_periodo_escolar()
  {
  }
}

class aula
{
  public $id_aulas;
  public $nombre_aula;

  public function registrar_aula()
  {
    $sql = "INSERT INTO `niveles` (`nombre_aulas`) VALUES ('$nombre_aula')";

    $consulta->ejecutar_consulta($sql);
  }

  public function consultar_aula()
  {
  }

  public function editar_aula()
  {
  }
}

class seccion
{
  public $id_seccion;
  public $nombre_seccion;

  public function registrar_seccion($nombre_seccion)
  {
    $sql = "INSERT INTO `secciones` (`nombre_seccion`) VALUES ('$nombre_seccion')";

    $consulta->ejecutar_consulta($sql);
  }

  public function consultar_seccion()
  {
  }

  public function editar_seccion()
  {
  }
}

class nivel
{
  public $id_nivel;
  public $nombre_nivel;

  public function registrar_nivel($nombre_nivel)
  {
    $sql = "INSERT INTO `niveles` (`nombre_nivel`) VALUES ('$nombre_nivel')";

    $consulta->ejecutar_consulta($sql);
  }

  public function editar_nivel()
  {
  }

  public function consulta_nivel()
  {
  }
}

?>
