<!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Index 3</title>

    </head>
    
    <body>
    Introduce tus aficiones:
    <br>
      <form action="show.php" method="post">
          <?php
                    
                foreach($_POST as $nombre => $value) {
                    echo '<input type="hidden" name="' . $nombre . '" value="' . $value . '"/>';
                }
                        
            ?>
          <input type="checkbox" name="deporte" id="deporte"/> Deporte
          <br>
          <input type="checkbox" name="leer" id="leer"/> Leer
          <br>
          <input type="checkbox" name="comer" id="comer"/> Comer
          <br>
          <input type="checkbox" name="jugar" id="jugar"/> Jugar
          <br>
          <input type="submit" value="Submit"/>
      </form>          

        
    </body>

</html>