<!DOCTYPE html>
<html lang="sp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Gooicoo web</h1>

    <?php
    $dbopts = parse_url(getenv('DATABASE_URL'));
    // Conectando y seleccionado la base de datos
    $dbconn = pg_connect("host=localhost dbname=publishing user=www password=foo")
        or die('No se ha podido conectar: ' . pg_last_error());

    echo 'CONNECTAT!';
    ?>

  </body>
</html>
