


<div class="container mt-5">
  <div class="p-4 p-md-5 mb-4 text-white rounded  bg-dark" >
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Jardín de infancia "República del Uruguay".</h1>
      <p class="lead my-3">sistema de reguistro de niños/ñas.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">inicio</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">notificación</h3>
          <div class="mb-1 text-muted">Nov 12</div>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>hola <?php echo $_SESSION['usuario']; ?>!</strong> debo decirte que se quema la casa  0_0
      </div>

          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <p>
          <strong>hey <?php echo $_SESSION['usuario']; ?>

!</strong> <a href="#" class="alert-link">no cerraste </a> el gas !!
        </p>
        <p>
          <button type="button" class="btn btn-danger">Take this action</button>
          <button type="button" class="btn btn-primary">Or do this</button>
        </p>
      </div>

          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
        <hr>
       
      </article>

      <article class="blog-post">
        
        <blockquote>
         <div class="row row-cols-1 row-cols-md-1 g-4 m-4">
  <div class="col">
<?php
$Src ="...";
$Titulo="Card title";
$Tabla ="<table class='table table-bordered border-4'>
  <tr>
    <td>inscritos</td>
    <td>cantidad</td>
  </tr>
  <tr>
    <td>3er seccion A</td>
    <td></td>
  </tr>
  <tr>
    <td>3er seccion B</td>
    <td></td>
  </tr>
  <tr>
    <td>3er seccion C</td>
    <td></td>
  </tr>
  <tr>
    <td>2do seccion A</td>
    <td></td>
  </tr>
  <tr>
    <td>2di seccion B</td>
    <td></td>
  </tr>
  <tr>
    <td>2do seccion C</td>
    <td></td>
  </tr>
    <tr>
    <td>1er seccion A</td>
    <td></td>
  </tr>
   <tr>
    <td>total</td>
    <td></td>
  </tr>
</table>  ";
echo Notificacion($Src='../Img/students.jpg',$Titulo="Niños/ñas Inscritos",$Tabla);
?>
  </div>
  <div class="col">

    <?php
    $Tabla ="    <table class='table table-bordered border-5'>
      <tr>
        <td colspan='2'>promovidos</td>
        <td>h</td>
        <td>v</td>
      </tr>
      <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>3 nivel a</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>3 nivel b</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>3 nivel c</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>2 nivel a</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>2 nivel b</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>2 nivel c</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>total</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
    </table>";
echo Notificacion($Src='../Img/hero.png',$Titulo="promovidos",$Tabla);
?>
  </div>
  <div class="col">
    <?php
        $Tabla ="    <table class='table table-bordered border-5'>
      <tr>
        <td colspan='2'>estadistica</td>
        <td>v</td>
        <td>h</td>
      </tr>
      <tr>
       <td>3 años</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>4 años</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>5 años</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
      <tr>
       <td>6 años</td>
       <td></td>
       <td></td>
       <td></td>
      </tr>
    </table>";
echo Notificacion($Src='../Img/why.png',$Titulo="Niños por edad",$Tabla);
?>
  </div>
  <div class="col">
  <?php
$Tabla ="    <table class='table table-bordered border-5'>
      <tr>
        <td>planteles</td>
        <td>total</td>
      </tr>
      <tr>
       <td>pribados</td>
       <td></td>

      </tr>
      <tr>
       <td>publico</td>
       <td></td>
      </tr>
    </table>";
echo Notificacion($Src='../Img/determine.png',$Titulo="planteles",$Tabla);
?>
  </div>
</div>


        

      </article>

      <article class="blog-post">
        
      </article>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          
          <h4 class="fst-italic"> <?php
        $hf = date("d-m-Y h:i a");
         $año = date("d-m-Y");

        echo "hoy es: <br>".$hf;
          ?></h4>
          <p class="mb-0">asegurese que la fecha es correcta para que el sistema funcione correctamente </p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Historial</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March <?php echo $año; ?></a></li>
            <li><a href="#">February <?php echo $año; ?></a></li>
            <li><a href="#">January <?php echo $año; ?></a></li>
            <li><a href="#">December <?php echo $año; ?></a></li>
            <li><a href="#">November <?php echo $año; ?></a></li>
            <li><a href="#">October <?php echo $año; ?></a></li>
            <li><a href="#">September <?php echo $año; ?></a></li>
            <li><a href="#">August <?php echo $año; ?></a></li>
            <li><a href="#">July <?php echo $año; ?></a></li>
            <li><a href="#">June <?php echo $año; ?></a></li>
            <li><a href="#">May <?php echo $año; ?></a></li>
            <li><a href="#">April <?php echo $año; ?></a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="../Codigo_js/alert.js"></script>
