<?php

  include("conectar.php");

  if (isset($_POST["titulo"])&& isset($_POST["video"])&& isset($_POST["registrar"])){

    $titulo = $_POST["titulo"];
    $video = $_POST["video"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO trailers_proyecto(titulo, video) VALUES ('$titulo', '$video')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Trailer guardado correctamente";
      echo "<br><br>";
      echo "<a href='trailers.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>