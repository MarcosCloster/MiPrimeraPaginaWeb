<?php

  include("conectar.php");

  if (isset($_POST["contrasena"])&& isset($_POST["usuario"])&& isset($_POST["registrar"])){

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO datos_admin(usuario, pass) VALUES ('$usuario', '$contrasena')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Datos guardados correctamente";
      echo "<br><br>";
      echo "<a href='usuarios.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>