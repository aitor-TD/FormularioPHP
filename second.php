<!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Index 2</title>

    </head>
    
    <body>

      <form action="third.php" method="post">
          <?php
                    
                foreach($_POST as $nombre => $value) {
                    echo '<input type="hidden" name="' . $nombre . '" value="' . $value . '"/>';
                }
                        
            ?>
          <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre" required/>
          <br>
          <input type="text" name="apellidos" id="apellidos" placeholder="Introduce tus apellidos" required/>
          <br>
          <input type="text" name="mail" id="mail" placeholder="Introduce tu e-mail" required/>
          <br>
          <input type="submit" value="Submit"/>
      </form>          

        
    </body>

</html>