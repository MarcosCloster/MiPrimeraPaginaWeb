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
      height: 1900px;
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
    textarea{
      margin-left:10px;
      margin-top: 10px;
      margin-bottom: 10px;
      width: 390px;
      min-height: 30px;
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

            $select = "SELECT * FROM peliculas_proyecto WHERE id = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

        }

    ?>

<div id="todo">

    <form action="form_actualizar_pelis.php" method="post">

        <h2>Ingrese el ID de la pelicula que desea actualizar</h2>

        <label for="id">Id de la pelicula: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

    <hr>

    <form action="actualizar_pelis.php" method="post">

        <input type="hidden" name="id_cliente" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else{echo "";} ?>">

        <label for="foto">Foto: </label>
        <input type="text" name="foto" id="foto" placeholder="img/.../..." value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["fotogrande"];} else {echo "";} ?>">
        
        <label for="fotog">Foto Grande: </label>
        <input type="text" name="fotog" id="fotog" placeholder="img/.../..." value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["foto"];} else {echo "";} ?>">

        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo" placeholder="Ingresa el titulo" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["titulo"];} else {echo "";} ?>">
        
        <label for="informacion">Informacion: </label>
        <textarea name="informacion" placeholder="Informacion" id="informacion" cols="30" rows="10"><?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["informacion"];} else {echo "";} ?></textarea>

        <label for="fecha">Fecha: </label>
        <input type="datetime-local" name="fecha" id="fecha" placeholder="Fecha" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["año"];} else {echo "";} ?>">

        <label for="duracion">Duracion: </label>
        <input type="text" name="duracion" id="duracion" placeholder="En minutos" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["duracion"];} else {echo "";} ?>">

        <label for="direccion">Directores: </label>
        <input type="text" name="direccion" id="direccion" placeholder="Directores" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["direccion"];} else {echo "";} ?>">

        <label for="produccion">Productores: </label>
        <input type="text" name="produccion" id="produccion" placeholder="Productores" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["produccion"];} else {echo "";} ?>">

        <label for="guion">Guionistas: </label>
        <input type="text" name="guion" id="guion" placeholder="Guionistas" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["guion"];} else {echo "";} ?>">

        <label for="musica">Musicos: </label>
        <input type="text" name="musica" id="musica" placeholder="Musicos" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["musica"];} else {echo "";} ?>">

        <label for="fotografia">Fotografo: </label>
        <input type="text" name="fotografia" id="fotografia" placeholder="Fotografo" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["fotografia"];} else {echo "";} ?>">

        <label for="vestuario">Vestuarista: </label>
        <input type="text" name="vestuario" id="vestuario" placeholder="Vestuarista" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["vestuario"];} else {echo "";} ?>">

        <label for="reparto">Reparto: </label>
        <input type="text" name="reparto" id="reparto" placeholder="Reparto" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["reparto"];} else {echo "";} ?>">

        <label for="genero">Genero: </label>
        <input type="text" name="genero" id="genero" placeholder="Genero" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["genero"];} else {echo "";} ?>">

        <label for="compania">Empresas: </label>
        <input type="text" name="compania" id="compania" placeholder="Empresas" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["compania"];} else {echo "";} ?>">

        <label for="presupuesto">Presupuesto: </label>
        <input type="text" name="presupuesto" id="presupuesto" placeholder="Presupuesto" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["presupuesto"];} else {echo "";} ?>">

        <label for="recaudacion">Recaudado: </label>
        <input type="text" name="recaudacion" id="recaudacion" placeholder="Recaudado" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["recaudacion"];} else {echo "";} ?>">

        <label for="sinopsis">Sinopsis: </label>
        <textarea name="sinopsis" placeholder="Sinopsis" id="sinopsis" cols="30" rows="10"><?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["sinopsis"];} else {echo "";} ?></textarea>

        <input type="submit" value="Actualizar" name="actualizar" id="actualizar">

    </form>

</div>

</body>
</html>