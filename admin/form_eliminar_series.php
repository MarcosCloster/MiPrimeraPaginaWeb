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
    margin: 50px auto;
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

    background-color: white;
    border: 1px solid black;
    padding: 10px;
    margin: 50px auto;/*para centrarlo*/

}

th{

    background-color: rgba(255, 255, 255, 0.6);
    border: 1px solid rgb(255, 208, 0);
    padding: 10px;
    color: white;

}

td{

    padding:10px;
    border: 1px solid black;
    color: #333;

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

    <form action="form_eliminar_series.php" method="post">

        <h2>Ingrese el ID de la serie que desea actualizar</h2>

        <label for="id">Id de la serie: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

</div>

        <table class="tabla">

            <tr>

                <th>Id</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Directores</th>
                <th>Guionistas</th>
                <th>Musica</th>
                <th>Fotografo</th>
                <th>Reparto</th>
                <th>Empresas</th>
                <th>Genero</th>
                <th>Numero de episodios</th>
                <th>Informacion</th>
                <th>Sinopsis</th>
                <th>Foto</th>
                <th>Foto grande</th>
                <th>Acciones</th>

            </tr>

            <?php

                if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){



            ?>

            <tr>

                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["fecha"]; ?></td>
                <td><?php echo $row["direccion"]; ?></td>
                <td><?php echo $row["guion"]; ?></td>
                <td><?php echo $row["musica"]; ?></td>
                <td><?php echo $row["fotografia"]; ?></td>
                <td><?php echo $row["reparto"]; ?></td>
                <td><?php echo $row["empresas"]; ?></td>
                <td><?php echo $row["genero"]; ?></td>
                <td><?php echo $row["numepisodios"]; ?></td>
                <td><?php echo $row["informacion"]; ?></td>
                <td><?php echo $row["sinopsis"]; ?></td>
                <td><?php echo $row["foto"]; ?></td>
                <td><?php echo $row["fotogrande"]; ?></td>
                <td><a class="linkDeEliminar" href="eliminar_series.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>

            </tr>

            <?php

                }

            ?>


        </table>



<script src="confirmar.js"></script>

</body>
</html>