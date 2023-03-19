<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css" type="text/css" />

    <title>Document</title>

    <style>

        #todo {

            background-color: rgba(204, 204, 204, 0.6);
            width: 500px;
            height: auto;
            margin: 50px auto;
            padding-bottom: 10px;
            border-radius: 5%;

        }

        #titulo {

            font-size: 25px;
            padding-top: 10px;
            text-align:center;
            color: black;
            

        }

        a {

            background-color: aqua;
            border-radius: 20%;
            display: block;
            text-align:center;
            margin: 10px auto;
            padding: 50px auto;
            width: 150px;
            height: 60px;

        }

        h3 {

            text-align:center;
            font-size: 20px;
            line-height: 55px

        }

        #cerrarsesion{

            background-color: rgb(218, 59, 59);
            border-radius: 20%;
            display: block;
            text-align:center;
            margin: 10px auto;
            padding: 50px auto;
            width: 150px;
            height: 60px;
            

        }

    </style>
</head>
<body>
    

<?php

    session_start();

    $sesion = $_SESSION["usuario"];

    if($sesion == null || $sesion == ""){

        echo "Inicie sesion";
        die();

    } else {

        echo "<div id='todo'>"; 

        echo "<div id='titulo'><b>" . "Bienvenido: $sesion" . "</b></div>"; 

        echo "<br><a href='usuarios.php'><h3>Editar Usuarios</h3></a>" . "<br>";

        echo "<a href='peliculas.php'><h3>Editar Peliculas</h3></a>" . "<br>";

        echo "<a href='series.php'><h3>Editar Series</h3></a>" . "<br>";

        echo "<br><a href='galeria.php'><h3>Editar Galeria</h3></a>" . "<br>";

        echo "<br><a href='trailers.php'><h3>Editar Trailers</h3></a>" . "<br>";

        echo "<br><a href='productos.php'><h3>Editar Productos</h3></a>" . "<br>";

        echo "<br><a href='musica.php'><h3>Editar Musicas</h3></a>" . "<br>";

        echo "<br><a href='cerrar_session.php'><div id='cerrarsesion'><h3>Cerrar sesion</h3></div></a>";

        echo "</div>";

}

?>

</body>
</html>


