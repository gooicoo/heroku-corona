<!DOCTYPE html>
<html lang="sp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Gooicoo web</h1>

    <?php
    $dbopts = getenv('DATABASE_URL');
    // Conectando y seleccionado la base de datos
    $dbconn = pg_connect($dbopts)
        or die('No se ha podido conectar: ' . pg_last_error());

    echo 'CONNECTAT!';
    ?>

  </body>
</html>
