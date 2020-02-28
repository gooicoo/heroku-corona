<!DOCTYPE html>
<html lang="sp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Gooicoo web</h1>

    <form class="" action="index.php" method="post">
      <input type="text" name="user">User <br>
      <input type="password" name="pass">Pass <br>
      <input type="submit" name="" value="ENTRAR"> <br>
    </form>


    <?php
    session_start();

    $dbopts = getenv('DATABASE_URL');
    // Conectando y seleccionado la base de datos
    $dbconn = pg_connect($dbopts)
        or die('No se ha podido conectar: ' . pg_last_error());

    echo 'CONNECTAT!';

    if isset($_POST['user']){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = pg_query( "select * from usuaris where nom='{$user}' ;" );

        if ( pg_num_rows($sql) > 0 ) {
            echo 'Estas dentro';
        }
        else {
            echo 'FAIL!!';
        }
    }




    ?>

  </body>
</html>
