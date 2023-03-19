<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>

  <style>
/*
    #todo{
      width: 415px;
      height: 450px;
      padding: 10px;
      background-color:#ccc;
      border: 10px solid #000;
    }

    label{
      margin-top: 10px;
      margin-left: 10px;
      padding: 1px;
    }

    input{
      margin-left:10px;
      margin-top: 10px;
      margin-bottom: 10px;
      width: 390px;
      height: 30px;
    }

    #enviar{
      margin-left: 100px;
      margin-top:10px;
      background-color:#f20;
      color:#fff;
      width: 200px;
    }
*/
    </style>

</head>
<body>

    <?php

        include("conectar.php");

        if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){

            $id = $_POST["id"];

            $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

            $select = "SELECT * FROM series_proyecto WHERE id = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

        }

    ?>

<div id="todo">

    <form action="form_actualizar_series.php" method="post">

        <h2>Ingrese el ID de la serie que desea actualizar</h2>

        <label for="id">Id de de la serie: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

    <hr>

    <form action="actualizar_series.php" method="post">

        <input type="hidden" name="id_cliente" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else{echo "";} ?>">

        <label for="titulo">Titulo: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["titulo"];} else {echo "";} ?>" name="titulo" id="titulo" placeholder="Titulo">
        
        <label for="fecha">Fecha: </label>
        <input type="date" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["fecha"];} else {echo "";} ?>" name="fecha" id="fecha" placeholder="Fecha">

        <label for="direccion">Directores: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["direccion"];} else {echo "";} ?>" name="direccion" id="direccion" placeholder="Directores">

        <label for="guion">Guionistas: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["guion"];} else {echo "";} ?>" name="guion" id="guion" placeholder="Guionistas">

        <label for="musica">Musicos: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["musica"];} else {echo "";} ?>" name="musica" id="musica" placeholder="Musicos">

        <label for="fotografia">Fotografia: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["fotografia"];} else {echo "";} ?>" name="fotografia" id="fotografia" placeholder="Fotografo">

        <label for="reparto">Reparto: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["reparto"];} else {echo "";} ?>" name="reparto" id="reparto" placeholder="Reparto">

        <label for="empresas">Empresas: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["empresas"];} else {echo "";} ?>" name="empresas" id="empresas" placeholder="Empresas">

        <label for="genero">Genero: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["genero"];} else {echo "";} ?>" name="genero" id="genero" placeholder="Genero">

        <label for="numepisodios">Numero de episodios: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["numepisodios"];} else {echo "";} ?>" name="numepisodios" id="numepisodios" placeholder="Numero de episodios">

        <label for="informacion">Informacion: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["informacion"];} else {echo "";} ?>" name="informacion" id="informacion" placeholder="Informacion">

        <label for="sinopsis">Sinopsis: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["sinopsis"];} else {echo "";} ?>" name="sinopsis" id="sinopsis" placeholder="Sinopsis">

        <label for="foto">Foto: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["foto"];} else {echo "";} ?>" name="foto" id="foto" placeholder="Foto">

        <label for="fotog">Foto grande: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["fotogrande"];} else {echo "";} ?>" name="fotog" id="fotog" placeholder="Foto grande">

        <input type="submit" value="Actualizar" name="actualizar" id="actualizar">

    </form>

</div>

</body>
</html>