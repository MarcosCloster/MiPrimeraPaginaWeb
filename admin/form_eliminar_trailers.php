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

    .tabla{

        border: 1px solid black;
        padding: 10px;
        margin: 50px auto;

    }

    th{

        background-color: #333;
        border: 1px solid black;
        padding: 10px;
        color: white;

    }

    td{

        padding:10px;
        border: 1px solid black;
        color: #333;
        min-width: 100px;

    }

    </style>
*/
</head>
<body>

    <?php

        include("conectar.php");

        if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){

            $id = $_POST["id"];

            $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

            $select = "SELECT * FROM trailers_proyecto WHERE id = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

        }

    ?>

<div id="todo">

    <form action="form_eliminar_trailers.php" method="post">

        <h2>Ingrese el ID del trailer que desea actualizar</h2>

        <label for="id">Id del trailer: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

        <table class="tabla">

            <tr>

                <th>Id</th>
                <th>Titulo</th>
                <th>Video</th>
                <th>Acciones</th>

            </tr>

            <?php

                if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){



            ?>

            <tr>

            
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["video"]; ?></td>
                <td><a class="linkDeEliminar" href="eliminar_trailers.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>

            </tr>

            <?php

                }

            ?>


        </table>

</div>

<script src="confirmar.js"></script>

</body>
</html>