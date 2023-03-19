<?php

  include("conectar.php");

  if (isset($_POST["titulo"])&& isset($_POST["fecha"])&& isset($_POST["direccion"])&& isset($_POST["guion"])&& isset($_POST["musica"])&& isset($_POST["fotografia"])&& isset($_POST["reparto"])&& isset($_POST["empresas"])&& isset($_POST["genero"])&& isset($_POST["numepisodios"])&& isset($_POST["informacion"])&& isset($_POST["sinopsis"])&& isset($_POST["foto"])&& isset($_POST["fotog"])&& isset($_POST["registrar"])){

    $titulo = $_POST["titulo"];
    $fecha = $_POST["fecha"];
    $direccion = $_POST["direccion"];
    $guion = $_POST["guion"];
    $musica = $_POST["musica"];
    $fotografia = $_POST["fotografia"];
    $reparto = $_POST["reparto"];
    $empresas = $_POST["empresas"];
    $genero = $_POST["genero"];
    $numepisodios = $_POST["numepisodios"];
    $informacion = $_POST["informacion"];
    $sinopsis = $_POST["sinopsis"];
    $foto = $_POST["foto"];
    $fotog = $_POST["fotog"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO series_proyecto(titulo, fecha, direccion ,guion ,musica ,fotografia ,reparto ,empresas ,genero ,numepisodios ,informacion ,sinopsis,foto ,fotogrande) VALUES ('$titulo', '$fecha', '$direccion', '$guion', '$musica', '$fotografia', '$reparto', '$empresas', '$genero', '$numepisodios', '$informacion', '$sinopsis', '$foto', '$fotog')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Serie guardada correctamente";
      echo "<br><br>";
      echo "<a href='series.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>