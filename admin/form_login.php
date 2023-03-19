<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>
</head>
<body>
  
  <form action="login.php" method="post">

    <?php 

      if(isset($_GET["error"])){

        $error = $_GET["error"];

        echo "<div class='error'>";

          echo "$error";

        echo "</div>";

      }

    ?>

    <h2>Formulario de Login</h2>

    <label for="user">Usuario: </label>
    <input type="text" name="user" id="user" placeholder="Nombre de usuario">
    
    <br><br>

    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass" placeholder="Contraseña">

    <br><br>

    <input type="submit" value="Login" name="login" id="login">

    

      

    

  </form>

  

</body>
</html>