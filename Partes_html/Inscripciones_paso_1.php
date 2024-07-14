<?php
$CONEXION = new consultas;
$CALLE = new calle($CONEXION);
$SECTOR = new sector($CONEXION);
$PARROQUIA = new parroquia($CONEXION);
$MUNICIPIO = new municipio($CONEXION);
$ESTADO = new estado($CONEXION);
$SEXO = new sexo($CONEXION);
$CONDICION_MEDICA = new condicion_medica($CONEXION);
$DISCAPACIDAD = new discapacidad($CONEXION);
$ESTADO_NUTRICIONAL = new estado_nutricional($CONEXION);
$codiciones_medicas = $CONDICION_MEDICA->consultar_condicion_medica();

$estados_nutricionales = $ESTADO_NUTRICIONAL->consultar_estado_nutricional();

$discapacidades = $DISCAPACIDAD->consultar_discapacidad();

$PROCEDENCIA = new procedencia($CONEXION);

$calles = $CALLE->consultar_calle();

$sectores = $SECTOR->consultar_sector();

$parroquias = $PARROQUIA->consultar_parroquia();

$municipios = $MUNICIPIO->consultar_municipio();

$estados = $ESTADO->consultar_estado();

$sexos = $SEXO->consultar_sexo();

$procedencias = $PROCEDENCIA->consultar_procedencia();
?>

<form action="Pag_3.2.php" method="post">
  <fieldset class="container img-thumbnail m-5">
    <legend class="legend"><u>
      1-datos del niño o niña:</u></legend>
    <div class="d-flex">

      <label class="control-label" for="apellidos">apellidos:</label>

      <input tipe="text" name="Datos_Niño_Apellido" placeholder="apellidos" class="form-control w-50" id="apellidos">

      <label class="control-label" for="nombres">nombres: </label>

      <input type="text" name="Datos_Niño_Nombre" placeholder="nombres" class="form-control w-50" id="nombres">
    </div>
    <div class="d-flex my-2">
      <label class="control-label mx-2" for="fecha">fecha de nacimiento:</label>
      <input type="date" name="Datos_Niño_Fecha" placeholder="fecha de nacimiento" class="form-control w-25" id="fecha">

      <label class="control-label mx-2" for="lugar">lugar de nacimiento:
      </label>
      <input type="text" name="Datos_Niño_Lugar_Nacimiento" placeholder="lugar" class="form-control w-25" id="lugar">

      <label for="procedencia" class="mx-2">procedencia:</label>
      <select name="Datos_Niño_Procedencia" class="form-control w-25" id="procedencia">

        <?php
        selector($procedencias);

        ?>

      </select>
    </div>

    <div class="d-flex my-2">
      <label class="control-label mx-2" for="municipio">municipio:</label>
      <select name="Datos_Niño_Municipio" class="form-control w-25" id="municipio">

        <?php
        selector($municipios);

        ?>

      </select>


      <label class="control-label mx-2" for="estado">estado:</label>
      <select name="Datos_Niño_Estado" class="form-control w-25" id="estado">

        <?php
        selector($estados);

        ?>

      </select>

      <label class="control-label mx-2" for="nacionalidad">nacionalidad:</label><input type="text" name="Datos_Niño_Nacionalidad" placeholder="nacionalidad" class="form-control w-25" id="nacionalidad">


    </div>
    <div class="d-flex my-2">
      <label class="control-label" for="sexo">sexo: </label>
      <select name="Datos_Niño_Sexo" id="sexo" class="form-control w-25">
        <?php
        selector($sexos);
        ?>

      </select>
      <label class="control-label" for="meses">meses:</label>
      <input type="month" name="Datos_Niño_Meses" placeholder="meses" class="form-control w-25" id="meses">
      <label class="control-label mx-2" for="telefono">teléfono</label><input type="tel" name="Datos_Niño_Telefono" placeholder="teléfono" class="form-control w-50" id="teléfono">
    </div>

    <div class="d-flex my-2">
      <label class="control-label mx-2" for="Talla_camisa">
        Talla de camisa</label><input type="text" name="Datos_Niño_Talla_Camisa" class="form-control w-25" id="Talla_camisa">
      <label class="control-label mx-2" for="pantalon">
        pantalón</label>
      <input type="text" name="Datos_Niño_Talla_Padrentalon" class="form-control w-25" id="pantalon">
      <label class="control-label mx-2" for="zapato">
        zapato</label><input type="text" name="Datos_Niño_Talla_Zapato" id="zapato" class="form-control w-25">
    </div>
    <div class="d-flex my-2">
      <label class="control-label mx-2" for="peso">
        peso</label>

      <input type="text" name="Datos_Niño_Talla_Peso" class="form-control w-25" id="peso">

      <label class="control-label mx-2" for="talla">
        talla
      </label>
      <input type="text" name="Datos_Niño_Talla" class="form-control w-25" id="talla">

      <label class="control-label mx-2" for="cb">
        circunferencia braquial.

      </label>
      <input type="text" name="Datos_Niño_Talla_Circunferencia_Braquial" class="form-control w-25" id="cb">
    </div>
    <h4 class="text-primary">direccion </h4>
    <div class="d-flex my-2">
      <label>calle</label>
      <select name="Datos_Niño_Calle" class="form-control w-75">
        <?php
        selector($calles);

        ?>
      </select>


      <label>sector</label>
      <select name="Datos_Niño_Sector" class="form-control w-75">
        <?php
        selector($sectores);

        ?>
      </select>


      <label>parroquia</label>
      <select name="Datos_Niño_Padrerroquia" class="form-control w-75">
        <?php
        selector($parroquias);

        ?>
      </select>


    </div>
     <h4 class="text-primary">datos medicos</h4>
    <div class="d-flex my-2">
      <label>estado nutricional</label>
      <select name="Datos_Niño_Estado_Nutricional" class="form-control w-75">
        <?php
        selector($estados_nutricionales);

        ?>
      </select>


      <label>condicion medica</label>
      <select name="Datos_Niño_Condicion_medica" class="form-control w-75">
        <?php
        selector($codiciones_medicas);

        ?>
      </select>


      <label>discapacidad</label>
      <select name="Datos_Niño_Discapacidad" class="form-control w-75">
        <?php
        selector($discapacidades);

        ?>
      </select>


    </div>
    <hr>
    <div class="container-fluid">
      <h3><u>2-Datos familiares:</u></h3>
      <div class="d-flex my-2">

        <label>Apellidos de la Madredre:</label><input type="text" name="Datos_familiares_Madredre_Apellidos" class="form-control w-25">

        <label> nombres de la Madredre:</label><input type="text" name="Datos_familiares_Madredre_Nombres" class="form-control w-25">

        <label>C.I:</label><input type="text" name="Datos_familiares_Madredre_Cedula" class="form-control w-25">
      </div>
      <div class="d-flex my-2">

        <label>fecha de nacimiento</label><input type="date" name="Datos_familiares_Madredre_Fecha_Nacimiento" class="form-control w-50">
        <label>nacionalidad</label><input type="text" name="Datos_familiares_Madredre_Nacionalidad" class="form-control w-50">
        <label>nivel de instruccion:</label><input type="text" name="Datos_familiares_Madre_Nivel_Instruccion" class="form-control w-50">
      </div>
      <div class="d-flex my-2">

        <label>ocupación</label><input type="text" name="Datos_familiares_Madre_Ocupacio" class="form-control w-50">
        <label>teléfono</label><input type="number" name="Datos_familiares_Madre_Telefono" class="form-control w-50">
      </div>
      <h4 class="text-primary">direccion de habitación</h4>
      <div class="d-flex my-2">
        <label>calle 1</label>
        <select name="Datos_familiares_Direccion_Habitacion_Madre_calle" class="form-control w-75">
          <?php
          selector($calles);

          ?>
        </select>


        <label>sector</label>
        <select name="Datos_familiares_Direccion_Habitacion_Madre_Sector" class="form-control w-75">
          <?php
          selector($sectores);

          ?>
        </select>

        <label>parroquia</label>
        <select name="Datos_familiares_Direccion_Habitacion_Madre_parroquia" class="form-control w-75">
          <?php
          selector($parroquias);

          ?>
        </select>
      </div>
      <h4 class="text-primary">direccion de trabajo</h4>
      <div class="d-flex my-2">

        <label>calle</label>
        <select name="Datos_familiares_Direccion_Trabajo_Madre_Calle" class="form-control w-75">
          <?php
          selector($calles);

          ?>
        </select>

        <label>sector</label>
        <select name="Datos_familiares_Direccion_Madre_trabajo" class="form-control w-75">
          <?php
          selector($sectores);

          ?>
        </select>

        <label>parroquia</label>
        <select name="Datos_familiares_Direccion_Trabajo_Madre_Padrerroquia" class="form-control w-75">
          <?php
          selector($parroquias);

          ?>
        </select>
      </div>
      <hr>
      <div class="d-flex my-2">

        <label>Apellidos del padre:</label><input type="text" name="Datos_familiares_Padre_Apellido" class="form-control w-25">
        <label>nombres del padre:</label><input type="text" name="Datos_familiares_Padre_Nombre" class="form-control w-25">
        <label>C.I:</label><input type="text" name="Datos_familiares_Padre_Cedula" class="form-control w-25">
      </div>
      <div class="d-flex my-2">

        <label>fecha de nacimiento</label><input type="date" name="Datos_familiares_Padre_Fecha_Nacimiento" class="form-control w-50" id="fp">
        <label>nacionalidad</label><input type="text" name="Datos_familiares_Padre_Nacionalidad" class="form-control w-50">
        <label>nivel de instruccion:</label><input type="text" name="Datos_familiares_Padre_Nivel_Instruccion" class="form-control w-50">
      </div>
      <div class="d-flex my-2">

        <label>ocupación</label><input type="text" name="Datos_familiares_Padre_Ocupacion" class="form-control w-50">
        <label>teléfono</label><input type="number" name="Datos_familiares_Padre_Telefono" class="form-control w-50">
      </div>

      <h4 class="text-primary">direccion de habitación</h4>
      <div class="d-flex my-2">
        <label>calle</label>
        <select name="Datos_familiares_Direccion_Habitacion_Padre_calle" class="form-control w-75">
          <?php
          selector($calles);

          ?>
        </select>

        <label>sector</label>
        <select name="Datos_familiares_Direccion_Habitacion_Padre_Sector" class="form-control w-75">
          <?php
          selector($sectores);

          ?>
        </select>

        <label>parroquia</label>
        <select name="Datos_familiares_Direccion_Habitacion_Padre_Parroquias" class="form-control w-75">
          <?php
          selector($parroquias);

          ?>
        </select>

      </div>
      <h4 class="text-primary">direccion de trabajo</h4>
      <div class="d-flex my-2">

        <label>calle</label>
        <select name="Datos_familiares_Direccion_Trabajo_Padre_Calle" class="form-control w-75">
          <?php
          selector($calles);

          ?>
        </select>

        <label>sector</label>
        <select name="Datos_familiares_Direccion_Trabajo_Padre_Sector" class="form-control w-75">
          <?php
          selector($sectores);

          ?>
        </select>

        <label>parroquia</label>
        <select name="Datos_familiares_Direccion_Trabajo_Padre_Parroquia" class="form-control w-75">
          <?php
          selector($parroquias);

          ?>
        </select>

      </div>
      <hr>
      <div class="d-flex my-2">

        <label>Apellidos del representante:</label><input type="text" name="Datos_familiares_Reprecentante_Apellido" class="form-control w-25">
        <label>nombres del representante:</label><input type="text" name="Datos_familiares_Reprecentante_Nombre" class="form-control w-25">
        <label>C.I:</label><input type="text" name="Datos_familiares_Reprecentante_Cedula" class="form-control w-25">
      </div>

      <div class="d-flex my-2">

        <label>fecha de nacimiento</label><input type="date" name="Datos_familiares_Reprecentante_Fecha_Nacimiento" class="form-control w-50">

        <label>nacionalidad</label><input type="text" name="Datos_familiares_Reprecentante_Nacionalidad" class="form-control w-50">
        <label>nivel de instruccion:</label><input type="text" name="Datos_familiares_Reprecentante_Nivel_Instruccion" class="form-control w-50">
      </div>
      <div class="d-flex my-2">

        <label>ocupación</label><input type="text" name="Datos_familiares_Reprecentante_Ocpacion" class="form-control w-50">
        <label>teléfono</label><input type="number" name="Datos_familiares_Reprecentante_Telefono" class="form-control w-50">
      </div>
      <h4 class="text-primary">direccion de habitación</h4>
      <div class="d-flex my-2">
        <label>calle</label>
        <select name="Datos_familiares_Direccion_Habitacion_Reprecentante_Calle" class="form-control w-75">
          <?php
          selector($calles);

          ?>
        </select>

        <label>sector</label>
        <select name="Datos_familiares_Direccion_Habitacion_Reprecentante_Sector" class="form-control w-75">
          <?php
          selector($sectores);

          ?>
        </select>

        <label>parroquia</label>
        <select name="Datos_familiares_Direccion_Habitacion_Reprecentante_Parroquia" class="form-control w-75">
          <?php
          selector($parroquias);

          ?>
        </select>

      </div>
      <h4 class="text-primary">direccion de trabajo</h4>
      <div class="d-flex my-2">

        <label>calle</label>
        <select name="Datos_familiares_Direccion_Trabajo_Reprecentante_Calle" class="form-control w-75">
          <?php
          selector($calles);

          ?>
        </select>

        <label>sector</label>
        <select name="Datos_familiares_Direccion_Trabajo_Reprecentante_Sector" class="form-control w-75">
          <?php
          selector($sectores);

          ?>
        </select>

        <label>parroquia</label>
        <select name="Datos_familiares_Direccion_Trabajo_Reprecentante_Parroquia" class="form-control w-75">
          <?php
          selector($parroquias);

          ?>
        </select>

      </div>

    </div>


    <button type="submit" class="btn btn-primary " value='n' name='n'>guardar </button>
    <button type="reset" class="btn btn-danger">borrar </button>

  </fieldset>
</form>
<?php
extract($_POST);
if (isset($_POST['n'])) {
  $sql = "insert into `estudiante`";


}

?>
