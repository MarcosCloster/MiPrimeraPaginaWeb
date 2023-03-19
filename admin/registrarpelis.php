<?php

  include("conectar.php");

  if (isset($_POST["foto"])&& isset($_POST["fotog"])&& isset($_POST["titulo"])&& isset($_POST["informacion"])&& isset($_POST["fecha"])&& isset($_POST["duracion"])&& isset($_POST["direccion"])&& isset($_POST["produccion"])&& isset($_POST["guion"])&& isset($_POST["fotografia"])&& isset($_POST["vestuario"])&& isset($_POST["reparto"])&& isset($_POST["genero"])&& isset($_POST["compania"])&& isset($_POST["presupuesto"])&& isset($_POST["recaudacion"])&& isset($_POST["sinopsis"])&& isset($_POST["musica"])&& isset($_POST["registrar"])){

    $foto = $_POST["foto"];
    $fotog = $_POST["fotog"];
    $titulo = $_POST["titulo"];
    $informacion = $_POST["informacion"];
    $fecha = $_POST["fecha"];
    $duracion = $_POST["duracion"];
    $direccion = $_POST["direccion"];
    $produccion = $_POST["produccion"];
    $guion = $_POST["guion"];
    $musica = $_POST["musica"];
    $fotografia = $_POST["fotografia"];
    $vestuario = $_POST["vestuario"];
    $reparto = $_POST["reparto"];
    $genero = $_POST["genero"];
    $compania = $_POST["compania"];
    $presupuesto = $_POST["presupuesto"];
    $recaudacion = $_POST["recaudacion"];
    $sinopsis = $_POST["sinopsis"];

    $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

    $sql = "INSERT INTO peliculas_proyecto(fotogrande, foto, titulo, informacion, año, duracion, direccion, produccion, guion, musica, fotografia, vestuario, reparto, genero, compania, presupuesto, recaudacion, sinopsis) VALUES ('$fotog', '$foto', '$titulo', '$informacion', '$fecha', '$duracion', '$direccion', '$produccion', '$guion', '$musica', '$fotografia', '$vestuario', '$reparto', '$genero', '$compania', '$presupuesto', '$recaudacion', '$sinopsis')";

    $result = mysqli_query($link, $sql);

    if($result){

      echo "Pelicula guardada correctamente";
      echo "<br><br>";
      echo "<a href='peliculas.php'>Volver al menu</a>";
  
    } else {

      echo "Problemas para guardar los datos";

    }

  } else {

    echo "Complete el formulario";

  }

?>