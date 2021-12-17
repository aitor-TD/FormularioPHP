  <!doctype html>
<html lang="es">
    
    <head>
        
        <meta charset="UTF-8">
        <title>Show</title>

    </head>
    
    <body>
          Nombre de usuario: <?php echo $_POST['usuario'] ?>
          <br>
          Contraseña:
          <?php 
            if($_POST['pswd'] === $_POST['pswd2']) {
                echo "Tu contraseña es: " . $_POST['pswd'];
            } else {
                echo "Las contraseñas no son iguales";
            }
          ?>
          <br>
          Nombre: <?php echo $_POST['nombre'] ?>
          <br>
          Apellidos: <?php echo $_POST['apellidos'] ?>
          <br>
          E-mail: <?php echo $_POST['mail'] ?>
          <br>
          Tus hobbies:
          <?php
                    $requiredFields = 6;
                    if(count($_POST) > $requiredFields) {
                        $hobbiesArray = [];
                        $aux = 0;
                        foreach($_POST as $name => $value) {
                            if($aux < $requiredFields) {
                                $delete = '' . $name . '';
                                unset($_POST[$delete]);
                                $aux++;
                            }
                        }
                        foreach($_POST as $name => $value) {
                            array_push($hobbiesArray, $name);
                        }
                        $hobbies = implode(', ', $hobbiesArray);
                ?>
                    <?php
                        if(count($hobbiesArray) == 1) {
                            echo 'Tus hobbie es ' . $hobbies;
                        } else {
                            echo 'Tus hobbies son ' . $hobbies;
                        }
                    ?>
                <?php
                    }
                ?>
    </body>

</html>






                