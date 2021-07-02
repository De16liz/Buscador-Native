<!--Autores: Deimi Gomez, Lizbeth Caro
Sistema de traducción de palabras al tucano-->

<!--este archivo me une las palabras para su traduccion-->

<?php

if(!empty($_POST))
{
    $conexion = mysqli_connect( "localhost", "root", "", "traductor3_3" );

    $aKeyword = explode(" ", $_POST['PalabraClave']);
      
    //construcción de la consulta
      $sql = "SELECT t1.palabra FROM tb_palabras t1
      INNER JOIN tb_palabras_idiomas t2 ON t2.id_palabra = t1.id_palabra
      INNER JOIN tb_idiomas t3 ON t3.id_idioma = t2.id_idioma
      WHERE t1.id_palabra IN 
      (
          SELECT tb_traduccion.palabra_2 FROM tb_traduccion WHERE tb_traduccion.palabra_1 IN 
          (
              SELECT t2.palabra_1 FROM tb_palabras t1
              INNER JOIN tb_traduccion t2 ON t2.palabra_2 = t1.id_palabra
              WHERE palabra like '%" . $aKeyword[0] . "%' OR palabra like '%" . $aKeyword[0] . "%'
              /*t1.palabra = palabra like '%" . $aKeyword[0] . "%' OR t2.palabra_1 = t1id_palabra like '%" . $aKeyword[0] . "%'*/
          )
        )";

     // $sql ="SELECT * FROM tb_palabras WHERE palabra like '%" . $aKeyword[0] . "%' OR palabra like '%" . $aKeyword[0] . "%'";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $sql .= " OR palabra like '%" . $aKeyword[$i] . "%'";
        }
      }
      /*foreach ($aKeyword as $aKeyword) {
        $query .= "palabra LIKE '%" . $aKeyword . "%' AND ";*/
     
     $result = $conexion->query($sql);
     echo "<br>Has buscado la palabra:<b> ". $_POST['PalabraClave']."</b>";
                     
     if(mysqli_num_rows($result) > 0) {
        $row_count= 0;
        echo "<br><br>Resultados encontrados: ";
        echo "<br><table class='table table-striped'>";
        While($row = $result->fetch_assoc()) {   
            $row_count++;                         
            echo "<tr><td>".$row_count." </td><td>". $row['palabra'] . "</td></tr>";
        }
        echo "</table>";
	
    }
    else {
        echo "<br>Resultados encontrados: Ninguno";
		
    }
}
 
?>