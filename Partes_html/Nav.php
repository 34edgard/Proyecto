 <nav class="navbar navbar-expand-lg bg-purple mt-0 border-bottom">
 <div class="container-fluid">
    <?php if(isset($op)){  if($op > 1){ ?>
    
    <a class="navbar-brand text-white" href="Pag_2.php">inicio</a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="carousel-control-next-icon"> <!-- <svg class="bi d-block mx-auto mb-1 text-white" width="24" height="24"><use xlink:href="#grid"/></svg>--></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="Pag_3.php">inscripción</a>
        </li>
       
        <li class="nav-item ">
          <a class="nav-link text-white" href="Pag_4.php" role="button"  >
            matricula escolar 
          </a>
        </li>
            
            <li><a class="nav-link text-white" href="Pag_5.php">Docente </a></li>
            <li><a class="nav-link text-white" href="Pag_6.php">aulas </a></li>
            
            <li><a class="nav-link text-white" href="Pag_7.php">..........</a></li>
          
        
        <li class="nav-item">
          <a class="nav-link text-white"
          href="Pag_8.php"
          aria-disabled="true">Planilla de inscripción</a>
        </li>
        <li><a href="Pag_9.php" class="nav-link text-white">ajustes</a></li>
<li><a href="./Logout.php" class="nav-link text-white" >Salir</a></li>
      </ul>
   
        
      </div>
    </div>
    <?php }else{ if($op <> 1) { ?>
     <a class="navbar-brand text-white" href= "./Paginas/Pag_1.php"
    >inicio de sesión</a>
         <a class="navbar-brand text-white" href= "./Pag_0.php"
    >carga de datos </a>
<?php } ?>
     
    <?php } } ?>
    
    
    
  </div>

</nav>
<main class="mb-5">
