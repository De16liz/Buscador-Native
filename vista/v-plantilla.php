<!--plantila de Bootstrap-->

<!--Autores: Deimi Gomez, Lizbeth Caro
Sistema de traducción de palabras a l tucano-->

<!-- esta es la plantilla bootstrap-->

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        
        <title>Traductor Native</title>

        <link href="http://localhost/buscadorNAtive/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/buscadorNAtive/css/bootstrap.css" rel="stylesheet">
        <link href="http://localhost/buscadorNAtive/css/sticky-footer-navbar.css" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
        <link href="http://localhost/buscadorNAtive/css/bootstrap-responsive.css" rel="stylesheet">
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


        <div class="container"><!--  contenedor -->

            <?php include( $seccion ); ?>
            
        </div> <!-- /container -->

      
        <script src="js/bootstrap-collapse.js"></script> 
        <script src="http://localhost/buscadorNAtive/controlador/js/vendor/popper.min.js"></script>
        <script src="http://localhost/buscadorNAtive/controlador/js/bootstrap.min.js"></script>
    </body>
</html>