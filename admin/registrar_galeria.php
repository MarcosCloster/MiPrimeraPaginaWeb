<?php

  include("conectar.php");

  if (isset($_POST["foto"])&& isset($_POST["registrar"])){

    $foto = $_POST["foto"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO galeria_proyecto (foto) VALUES ('$foto')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Imagen guardada correctamente";
      echo "<br><br>";
      echo "<a href='galeria.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>