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

        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
    </head>

    <body>

        

        <div class="container"><!-- Ojo con este contenedor -->

            <?php include( $seccion ); ?>
            
        </div> <!-- /container -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-collapse.js"></script> 
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>