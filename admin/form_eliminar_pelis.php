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
      height: 215px;
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

            $select = "SELECT * FROM peliculas_proyecto WHERE id = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

        }

    ?>

<div id="todo">

    <form action="form_eliminar_pelis.php" method="post">

        <h2>Ingrese el ID de la pelicula que desea actualizar</h2>

        <label for="id">Id de la pelicula: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

        <table class="tabla">

            <tr>

                <th>Id</th>
                <th>Foto Grande</th>
                <th>Foto</th>
                <th>Titulo</th>
                <th>Informacion</th>
                <th>Fecha</th>
                <th>Duracion</th>
                <th>Direccion</th>
                <th>Produccion</th>
                <th>Guion</th>
                <th>Musica</th>
                <th>Fotografo</th>
                <th>Vestuarista</th>
                <th>Reparto</th>
                <th>Genero</th>
                <th>Compañia</th>
                <th>Presupuesto</th>
                <th>Recaudacion</th>
                <th>Sinopsis</th>
                <th>Accion</th>

            </tr>

</div>

            <?php

                if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){



            ?>

            <tr>

                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["fotogrande"]; ?></td>
                <td><?php echo $row["foto"]; ?></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["informacion"]; ?></td>
                <td><?php echo $row["año"]; ?></td>
                <td><?php echo $row["duracion"]; ?></td>
                <td><?php echo $row["direccion"]; ?></td>
                <td><?php echo $row["produccion"]; ?></td>
                <td><?php echo $row["guion"]; ?></td>
                <td><?php echo $row["musica"]; ?></td>
                <td><?php echo $row["fotografia"]; ?></td>
                <td><?php echo $row["vestuario"]; ?></td>
                <td><?php echo $row["reparto"]; ?></td>
                <td><?php echo $row["genero"]; ?></td>
                <td><?php echo $row["compania"]; ?></td>
                <td><?php echo $row["presupuesto"]; ?></td>
                <td><?php echo $row["recaudacion"]; ?></td>
                <td><?php echo $row["sinopsis"]; ?></td>
                <td><a class="linkDeEliminar" href="eliminar_pelis.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>

            </tr>

            <?php

                }

            ?>


        </table>

</div>

<script src="confirmar.js"></script>

</body>
</html>