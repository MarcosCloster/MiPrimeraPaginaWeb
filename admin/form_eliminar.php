<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <title>Document</title>

</head>
<body>

    <?php

        include("conectar.php");

        if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){

            $id = $_POST["id"];

            $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

            $select = "SELECT * FROM datos_admin WHERE id = '$id'";

            $result = mysqli_query($link, $select);

            $row = mysqli_fetch_array($result);

        }

    ?>

<div id="todo">

    <form action="form_eliminar.php" method="post">

        <h2>Ingrese el ID del cliente que desea actualizar</h2>

        <label for="id">Id del usuario: </label>
        <input type="text" value="<?php if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){echo $row["id"];}else {echo "";} ?>" name="id" id="id" placeholder="Ingrese el id">

        <input type="submit" value="Buscar" name="buscar" id ="buscar">

    </form>

        <table class="tabla">

            <tr>

                <th>Id</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Acciones</th>

            </tr>

            <?php

                if(isset($_POST["buscar"])&& isset($_POST["id"])&& !empty($_POST["id"])){



            ?>

            <tr>

                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["usuario"]; ?></td>
                <td><?php echo $row["pass"]; ?></td>
                <td><a class="linkDeEliminar" href="eliminar.php?id=<?php echo $row["id"]; ?>">Eliminar</a></td>

            </tr>

            <?php

                }

            ?>


        </table>

</div>

<script src="confirmar.js"></script>

</body>
</html>