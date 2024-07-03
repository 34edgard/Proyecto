
<?php
$conn = new consultas;
extract($_POST);
if (isset($formulario)) {
  
  switch ($formulario) {
    case 'crear':
      $sql = "INSERT INTO `telefono` (`id_telefono`, `numero`) VALUES ($ci, '$telefono')";
      break;
    
    case 'editar':
      $sql = "UPDATE `telefono` SET `numero` = '$telefono' 
WHERE `id_telefono` = $ci";
      break;
    
    default:
      echo "no paso nada en telefono";
      break;
  }
   $conn->insertar_reguistro($sql);
switch ($formulario) {
  case 'crear':
    $sql = "INSERT INTO `docente` (`ci`, `nombre`, `apellido`, `f_nacimiento`, `id_telefono`) VALUES ($ci, '$Nombre', '$Apellido', '$fn', $ci)";
    break;
    case 'editar':
    $sql = "UPDATE `docente` SET
`nombre` = '$Nombre',
`apellido` = '$Apellido', 
`f_nacimiento` = '$fn'
WHERE `ci` = $ci";
    break;
  default:
    echo "no pasa nada }:(";
    break;
}
  
  $conn->insertar_reguistro($sql);
}

?>

<div class="container m-5">

      <h1><small>ajustes</small></h1>

      

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-selected="true">generales</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#crear" role="tab"> crear usuarion</button>
        </li>
        

      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="general" role="tabpanel">
<form class="d-flex container  ">
          <input class="form-control me-2 w-50" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
<table class="table my-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Edad</th>
      
    
      <th scope="col">aula</th>
      <th scope="col">telefono</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
  
  $clave ="SELECT * FROM `docente` RIGHT JOIN  `telefono` ON `docente`.`id_telefono` = `telefono`.`id_telefono`";
  $docentes = $conn->consultar_reguistro($clave,6);
 
 for($i = 0 ; $docentes[$i][0] ; $i++){
   echo "<tr>
   <td>".$i."</td>
   <td>".$docentes[$i][0]."</td>
   <td>".$docentes[$i][1]."</td>
   <td>".$docentes[$i][2]."</td>
   <td>".Fecha_invertida($docentes[$i][3])."</td>
   <td>".Edad($docentes[$i][3])."</td>
   
   
   <td>".$docentes[$i][4]."</td>
   <td>".$docentes[$i][6]."</td>
   <td>

 
 
  
  <div class='modal fade' id='firefoxModal$i' tabindex='-1' aria-labelledby='firefoxModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'            <h4 class='modal-title' id='firefoxModalLabel'>Firefox Bug Test</h4>
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                    

 <form action='Pag_5.php' method='post'>
  <fieldset class='thumbnail container mt-5'>
  <label class='form-label'> 
    cedula
      <input type='number' name='ci' class='form-control w-75' value=".$docentes[$i][0] .">
    </label>
    <label class='form-label'> 
    nombre 
      <input type='text' name='Nombre' class= 'form-control w-75' value=".$docentes[$i][1] .">
    </label>
    <label class='form-label'> 
    apellido
      <input type='text' name='Apellido' class= 'form-control w-75' value=".$docentes[$i][2] .">
    </label>
    <label class='form-label'> 
    fecha de nacimiento
      <input type='date' name='fn' class='form-control w-75' value=".$docentes[$i][3] .">
    </label>
    <label class='form-label'> 
    aula asignada
      <input type='text' name='aula' class='form-control w-75 '  value=".$docentes[$i][4] .">
      </label><label>telefono
      <input type='tel' name='telefono' class='form-control w-75' value=".$docentes[$i][6] .">
    </label>
    <button type='submit' class='btn btn-primary' name='formulario' value='editar'>editar</button>
    <button type='reset' class='btn btn-danger'>borrar</button>
  </fieldset>
</form>
 

            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
              <button type='button' class='btn btn-primary'>Save changes</button>
            </div>
          </div>
        </div>
      </div>
  <button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#firefoxModal$i'>
        editar
      </button></td>
   </tr>";
 }
 
  ?>
  </tbody>
</table>
</div>
    <div class="tab-pane" id="crear" role="tabpanel">
      
    <form method="post" action="Pag_5.php">
      <input type="text" placeholder="Nombre" name="Nombre" class="form-control w-75" >
      <input type="text" placeholder="Apellidos" name="Apellido" class="form-control w-75" >
      <input type="number" placeholder="cedula" name="ci" class="form-control w-75" >
      <input type="date" placeholder="fecha de nacimiento" name="fn" class="form-control w-75" >
      
      
      <input type="tel" placeholder="telefono" name="telefono" class="form-control w-75" >
      <select name="aula">
        <option value="1">aula 1</option>
        <option value="2">aula 2</option>
        <option value="3">aula 3</option>
      </select>
    <button type="submit" class="btn btn-primary" name="formulario" value="crear">crear</button>
    <button type="reset" class="btn btn-danger">enviar</button>
    </form>
</div>
</div>

