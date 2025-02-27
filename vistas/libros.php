
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Libros</title>
  </head>
  <body>
    <h1>Libros Personales</h1>

    <ul>
      <?php
        foreach ($datos as $valor) {
            print "<li>".$valor["titulo"]." | ".$valor["autor"]." | ".$valor["editorial"]."</li>" ;
        }
      ?>
    </ul>

  </body>
</html>