<?php

  include("conectar.php");

  if (isset($_POST["titulo"])&& isset($_POST["musica"])&& isset($_POST["registrar"])){

    $titulo = $_POST["titulo"];
    $musica = $_POST["musica"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO musica_proyecto (titulo, musica) VALUES ('$titulo', '$musica')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Musica guardada correctamente";
      echo "<br><br>";
      echo "<a href='musica.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>