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
            height: 750px;
            margin: 50px auto;
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
            height: 120px;

        }

        h3 {

            text-align:center;
            font-size: 20px;
            /*line-height: 50px;*/
            padding: 30px;

        }

        #cerrarsesion{

            background-color: rgb(218, 59, 59);
            border-radius: 20%;
            display: block;
            text-align:center;
            margin: 10px auto;
            padding: 50px auto;
            width: 150px;
            height: 120px;

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

        echo "<div id='titulo'>" . "Bienvenido: $sesion" . "</div>";

        echo "<br><a href='form_registrar_trailers.php'><h3>Registrar Trailers</h3></a>" . "<br>";

        echo "<a href='form_actualizar_trailers.php'><h3>Actualizar Trailer</h3></a>" . "<br>";

        echo "<a href='form_eliminar_trailers.php'><h3>Eliminar Trailer</h3></a>" . "<br>";

        echo "<br><a href='panel_admin.php'><div id='cerrarsesion'><h3>Volver al menu</h3></div></a>";

        echo "</div>";

}

?>

</body>
</html>
