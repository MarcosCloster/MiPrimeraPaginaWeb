<?php

    include("conectar.php");

    if(isset($_POST["actualizar"])&& !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];
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

        $sql = "UPDATE peliculas_proyecto SET fotogrande = '$fotog', foto = '$foto', titulo = '$titulo', informacion = '$informacion', año = '$fecha', duracion = '$duracion', direccion = '$direccion', produccion = '$produccion', guion = '$guion', musica = '$musica', fotografia = '$fotografia', vestuario = '$vestuario', reparto = '$reparto', genero = '$genero', compania = '$compania', presupuesto = '$presupuesto', recaudacion = '$recaudacion', sinopsis = '$sinopsis' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actualizados correctamente";
            echo "<br><br>";
            echo "<a href='peliculas.php'>Volver al menu</a>";

        } else {

            echo "Problemas para actualizar con la base de datos";

        }

    } else {

        echo "Complete el formulario";

    }

?>