<?php

    include("conectar.php");

    if(isset($_POST["actualizar"])&& !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];

        $titulo = $_POST["titulo"];
        $fecha = $_POST["fecha"];
        $direccion = $_POST["direccion"];
        $guion = $_POST["guion"];
        $musica = $_POST["musica"];
        $fotografia = $_POST["fotografia"];
        $reparto = $_POST["reparto"];
        $empresas = $_POST["empresas"];
        $genero = $_POST["genero"];
        $numepisodios = $_POST["numepisodios"];
        $informacion = $_POST["informacion"];
        $sinopsis = $_POST["sinopsis"];
        $foto = $_POST["foto"];
        $fotog = $_POST["fotog"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

        $sql = "UPDATE series_proyecto SET titulo = '$titulo' ,fecha = '$fecha' ,direccion = '$direccion' ,guion = '$guion' ,musica = '$musica' ,fotografia = '$fotografia' ,reparto = '$reparto' ,empresas = '$empresas' ,genero = '$genero' ,numepisodios = '$numepisodios' ,informacion = $informacion ,sinopsis = '$sinopsis' ,foto = '$foto' ,fotogrande = '$fotog' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actualizados correctamente";
            echo "<br><br>";
            echo "<a href='series.php'>Volver al menu</a>";

        } else {

            echo "Problemas para actualizar con la base de datos";

        }

    } else {

        echo "Complete el formulario";

    }

?>