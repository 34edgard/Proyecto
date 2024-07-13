<?php
$consulta = new consultas;
$ESTUDIANTES = new estudiante($consulta);
$SEXO = new sexo($consulta);
$PROCEDENCIA = new procedencia($consulta);
$sexos = $SEXO->consultar_sexo();
$estudiantes = $ESTUDIANTES->consultar_datos();
$procedencias = $PROCEDENCIA->consultar_procedencia();

?>
  <div class="container mt-5">
      <h1><small>matricula general</small></h1>

      <h4>busqueda</h4>

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-selected="true">generales</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#activos" role="tab">activos</button>
        </li>

      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="general" role="tabpanel">
        <form class="d-flex container  mt-2">
          <input class="form-control me-2 w-50" type="number" placeholder="CI" aria-label="Search">
          <button class="btn btn-success" type="submit">buscar</button>
        </form>
         <?php
         
      matricula_general($estudiantes,$sexos,$procedencias);

      ?>
        </div>
        <div class="tab-pane" id="activos" role="tabpanel">
       


 
 
 
 
    <div class="container">
      <h1><small>niveles</small></h1>

      <div id="accordion" role="tablist">
        <div class="card" role="presentation">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                primer nivel I
              </a>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" data-bs-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                        
       <div class="container">
      <h1>nivel <small>I</small></h1>

      <h4>Tabs without fade</h4>

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#Nivel_1_A" role="tab" aria-selected="true">sección a</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#Nivel_1_B" role="tab">sección b</button>
        </li>
        
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#Nivel_1_C" role="tab">sección c</button>
        </li>
      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="Nivel_1_A" role="tabpanel">
         <?php
      matricula($Nivel ="seccion a");
      ?>
        </div>
<div class="tab-pane" id="Nivel_1_B" role="tabpanel">
  <?php
      matricula($Nivel ="seccion b");
      ?>
        </div>
        
        <div class="tab-pane" id="Nivel_1_C" role="tabpanel">
  <?php
      matricula($Nivel ="seccion c");
      ?>
        </div>
      </div>
            </div>
          </div>
        </div>
        <div class="card" role="presentation">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                segundo nivel II
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
                         <div class="container">
      <h1>nivel <small>II</small></h1>

      <h4>Tabs without fade</h4>

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#Nivel_2_A" role="tab" aria-selected="true">sección A</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#Nivel_2_B" role="tab">sección B</button>
        </li>
        
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#Nivel_2_C" role="tab">Sección C</button>
        </li>
      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="Nivel_2_A" role="tabpanel">
         <?php
      matricula($Nivel ="seccion a");
      ?>
        </div>
<div class="tab-pane" id="Nivel_2_B" role="tabpanel">
  <?php
      matricula($Nivel ="seccion b");
      ?>
        </div>
        
        <div class="tab-pane" id="Nivel_2_C" role="tabpanel">
  <?php
      matricula($Nivel ="seccion c");
      ?>
        </div>
      </div>

      
            </div>
          </div>
        </div>
        <div class="card" role="presentation">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                tercer nivel III
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" data-bs-parent="#accordion" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
  <div class="container">
      <h1>nivel <small>III</small></h1>

      <h4>Tabs without fade</h4>

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#Nivel_3_A" role="tab" aria-selected="true">Sección A</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#Nivel_3_B" role="tab">seccion B</button>
        </li>
       
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#Nivel_3_C" role="tab">sección C</button>
        </li>
      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="Nivel_3_A" role="tabpanel">
         <?php
      matricula($Nivel ="seccion a");
      ?>
        </div>
<div class="tab-pane" id="Nivel_3_B" role="tabpanel">
  <?php
      matricula($Nivel ="seccion b");
      ?>
        </div>
        
        <div class="tab-pane" id="Nivel_3_C" role="tabpanel">
  <?php
      matricula($Nivel ="seccion c");
      ?>
        </div>
      </div>

            </div>
          </div>
        </div>
       
      </div>
    </div>
            </div>
      
      </div>
