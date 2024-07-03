
<?php
$CONEXION = new consultas;
$CALLE = new calle;
$SECTOR = new sector;
$PARROQUIA = new parroquia;
$SEXO = new sexo;
$PROCEDENCIA = new procedencia;
$calles = $CONEXION->consultar_registro($CALLE->consultar_calle(),2);
$sectores = $CONEXION->consultar_registro($SECTOR->consultar_sector(),2);
$parroquias = $CONEXION->consultar_registro($PARROQUIA->consultar_parroquia(),2);
$sexos = $CONEXION->consultar_registro($SEXO->consultar_sexo(),2);
$procedencias = $CONEXION->consultar_registro($PROCEDENCIA->consultar_procedencia(),2);
?>

  <form action="Pag_3.1.php" method="post">
<fieldset class="container img-thumbnail m-5">
  <legend class="legend"><u>
1-datos del niño o niña:</u></legend>
  <div class="d-flex">
    
     <label class="control-label" for="apellidos">apellidos:</label>
    
     <input tipe="text" name="DN_Ap" placeholder="apellidos" class="form-control w-50" id="apellidos">
    
    <label class="control-label" for="nombres">nombres: </label>
    
    <input type="text" name="DN_Nb" placeholder="nombres" class="form-control w-50" id="nombres">
  </div>
    <div class="d-flex my-2">
    <label class="control-label mx-2" for="fecha">fecha de nacimiento:</label>
    <input type="date" name="DN_F" placeholder="fecha de nacimiento" class="form-control w-25" id="fecha">
    
    <label class="control-label mx-2" for="lugar">lugar de nacimiento:
    </label>
    <input type="text" name="DN_Lu" placeholder="lugar" class="form-control w-25" id="lugar">
    
    <label for="procedencia" class="mx-2">procedencia:</label>
    <select name="procedencia" class="form-control w-25" id="procedencia">

  <?php
   selector($procedencias);
  
  ?>

</select>
    </div>
    
    <div class="d-flex my-2">
      <label class="control-label mx-2" for="municipio">municipio:</label><input type="text" name="DN_Mu" placeholder="municipio" class="form-control w-25" id="municipio">
<label class="control-label mx-2" for="estado">estado:</label><input type="text" name="DN_Ed" placeholder="estado" id="estado" class="form-control w-25">
<label class="control-label mx-2" for="nacionalidad">nacionalidad:</label><input type="text" name="DN_Na" placeholder="nacionalidad" class="form-control w-25" id="nacionalidad">


    </div>
    <div class="d-flex my-2">
      <label class="control-label" for="sexo">sexo: </label>
<select name="DN_Se" id="sexo" class="form-control w-25">
    
  <?php
   selector($sexos);
  
  ?>



</select>
<label class="control-label" for="meses">meses:</label>
<input type="month" name="DN_Me" placeholder="meses" class="form-control w-25">
<label class="control-label mx-2" for="telefono">teléfono</label><input type="tel" name="DN_Te" placeholder="teléfono" class="form-control w-50" id="teléfono">
    </div>
    
    <div class="d-flex my-2">
      <label class="control-label mx-2" for="Talla_camisa">
Talla de camisa</label><input type="text" name="DN_Ca"  class="form-control w-25" id="Talla_camisa">
<label class="control-label mx-2" for="pantalon">
pantalón</label>
<input type="text" name="DN_Pa" class="form-control w-25" id="pantalon">
<label class="control-label mx-2" for="zapato">
zapato</label><input type="text" name="DN_za" id="zapato"  class="form-control w-25">
    </div>
    <div class="d-flex my-2">
      <label class="control-label mx-2" for="peso">
peso</label>

<input type="text" name="DN_Pe" class="form-control w-25" id="peso">

<label class="control-label mx-2" for="talla">
talla 
</label>
<input type="text" name="DN_Ta" class="form-control w-25" id="talla">

<label class="control-label mx-2" for="cb">
circunferencia braquial.

</label>
<input type="text" name="DN_CB" class="form-control w-25" id="cb">
    </div>
  <h4 class="text-primary">direccion </h4>
<div class="d-flex my-2">
<label>calle</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>


<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>


<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($parroquias);
  
  ?>
</select>


</div>
  <hr>
  <div class="container-fluid">
   <h3><u>2-Datos familiares:</u></h3>
   <div class="d-flex my-2">
     
    <label>Apellidos de la Madre:</label><input type="text" name="DF_ANMA" class="form-control w-25">
    <label> nombres de la Madre:</label><input type="text" name="DF_ANMA" class="form-control w-25">
<label>C.I:</label><input type="text" name="DF_CIMA" class="form-control w-25">
   </div>
   <div class="d-flex my-2">
     
<label>fecha de nacimiento</label><input type="date" name="DF_FNMA" class="form-control w-50" >
<label>nacionalidad</label><input type="text" name="DF_NaMa" class="form-control w-50">
<label>nivel de instruccion:</label><input type="text" name="DF_NIMa" class="form-control w-50">
   </div>
   <div class="d-flex my-2">
     
<label>ocupación</label><input type="text" name="DF_OcMa" class="form-control w-50">
<label>teléfono</label><input type="number" name="DF_TeMa" class="form-control w-50">
   </div>
<h4 class="text-primary">direccion de habitación</h4>
<div class="d-flex my-2">
<label>calle 1</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>


<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>

<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($parroquias);
  
  ?>
</select>
</div>
<h4 class="text-primary">direccion de trabajo</h4>
<div class="d-flex my-2">
  
<label>calle</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>

<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>

<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($parroquias);
  
  ?>
</select>
</div>
<hr>
<div class="d-flex my-2">
  
<label>Apellidos del padre:</label><input type="text" name="DF_ANPa" class="form-control w-25">
<label>nombres del padre:</label><input type="text" name="DF_ANPa" class="form-control w-25">
<label>C.I:</label><input type="text" name="DF_CIPa" class="form-control w-25">
</div>
<div class="d-flex my-2">
  
<label>fecha de nacimiento</label><input type="date" name="DF_FNPa" class="form-control w-50" id="fp">
<label>nacionalidad</label><input type="text" name="DF_NaPa" class="form-control w-50">
<label>nivel de instruccion:</label><input type="text" name="DF_NIPa" class="form-control w-50">
</div>
<div class="d-flex my-2">
  
<label>ocupación</label><input type="text" name="DF_OcPa" class="form-control w-50">
<label>teléfono</label><input type="number" name="DF_TePa" class="form-control w-50">
</div>

<h4 class="text-primary">direccion de habitación</h4>
<div class="d-flex my-2">
<label>calle</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>

<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>

<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($parroquias);
  
  ?>
</select>

</div>
<h4 class="text-primary">direccion de trabajo</h4>
<div class="d-flex my-2">
  
<label>calle</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>

<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>

<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($parroquias);
  
  ?>
</select>

</div>
<hr>
<div class="d-flex my-2">
  
<label>Apellidos del representante:</label><input type="text" name="DF_NARe" class="form-control w-25">
<label>nombres del representante:</label><input type="text" name="DF_NARe" class="form-control w-25">
<label>C.I:</label><input type="text" name="DF_CIRe" class="form-control w-25">
</div>

<div class="d-flex my-2">
  
<label>fecha de nacimiento</label><input type="date" name="DF_FNRe" class="form-control w-50" >

<label>nacionalidad</label><input type="text" name="DF_NaRe" class="form-control w-50">
<label>nivel de instruccion:</label><input type="text" name="DF_NIRe" class="form-control w-50">
</div>
<div class="d-flex my-2">
  
<label>ocupación</label><input type="text" name="DF_OcRe" class="form-control w-50">
<label>teléfono</label><input type="number" name="DF_TeRe"  class="form-control w-50">
</div>
<h4 class="text-primary">direccion de habitación</h4>
<div class="d-flex my-2">
<label>calle</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>

<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>

<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($parroquias);
  
  ?>
</select>

</div>
<h4 class="text-primary">direccion de trabajo</h4>
<div class="d-flex my-2">
  
<label>calle</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($calles);
  
  ?>
</select>

<label>sector</label>
<select name="DF_DHRe" class="form-control w-75">
  <?php
   selector($sectores);
  
  ?>
</select>

<label>parroquia</label>
<select name="DF_DHRe" class="form-control w-75">
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
if(isset($_POST['n'])){
  $sql = "insert into `estudiante`";
  
  
}

?>
