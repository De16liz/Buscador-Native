<!--Autores: Deimi Gomez, Lizbeth Caro
Sistema de traducción de palabras al tucano-->

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
<title>TraductorNative</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />


  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">TraductorNative</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>  
            <a class="btn" href="pdf/otro-ejemplo.php">Lista de palabras</a> <!--me muestra el contenido del traductor en PDF (una lista) -->                    
          </ul>
          <form class="form-inline mt-2 mt-md-0" action="controlador/c-informacion.php">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Informacion</button>
          </form>

          <form class="form-inline mt-2 mt-md-0" action="controlador/c-ayuda.php">
          <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">ayuda</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->

<div class="container">
 <h4 class="mt-5">Traductor de palabras de Español a Tucano</h4>
 <hr>

<div class="row">
<div class="col-12 col-md-12">
<!-- Contenido -->   

<ul class="list-group">
  <li class="list-group-item">
<form method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Curso</label>
      <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese palabra a traducir">  
      <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </div>
   
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
    </div>
  </div>
</form>
  </li>

</ul>


<?php include("controlador/c-frases.php");?>

<!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->
</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><p>Traductor Native ADSI</a></p></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>