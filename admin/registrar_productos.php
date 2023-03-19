<?php

  include("conectar.php");

  if (isset($_POST["informacion"])&& $_POST["foto"]&& $_POST["precio"]&& isset($_POST["nombre"])&& isset($_POST["registrar"])){

    $nombre = $_POST["nombre"];
    $informacion = $_POST["informacion"];
    $precio = $_POST["precio"];
    $foto = $_POST["foto"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO productos_proyecto(nombre, informacion, precio, foto) VALUES ('$nombre', '$informacion', '$precio', '$foto')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Datos guardados correctamente";
      echo "<br><br>";
      echo "<a href='productos.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>