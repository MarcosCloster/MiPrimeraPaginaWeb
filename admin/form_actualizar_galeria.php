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
      height: auto;
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
*/
    

    </style>

</head>
<body>

    <?php

        include("conectar.php");

        if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){

            $id = $_POST["id"];

            $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

            $select = "SELECT * FROM galeria_proyecto WHERE id = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

        }

    ?>

<div id="todo">

    <form action="form_actualizar_galeria.php" method="post">

        <h2>Ingrese el ID de la imagen que desea actualizar</h2>

        <label for="id">Id de la imagen: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

    <hr>

    <form action="actualizar_galeria.php" method="post">

        <input type="hidden" name="id_cliente" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else{echo "";} ?>">

        <label for="foto">foto: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["foto"];} else {echo "";} ?>" name="foto" id="foto" placeholder="Ingrese la foto">
        
        <input type="submit" value="Actualizar" name="actualizar" id="actualizar">

    </form>

</div>

</body>
</html>