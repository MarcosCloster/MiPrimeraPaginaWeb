<?php

    include("conectar.php");

    if(isset($_POST["actualizar"])&& !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];

        $titulo = $_POST["titulo"];

        $video = $_POST["video"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

        $sql = "UPDATE trailers_proyecto SET titulo = '$titulo', video = '$video' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actualizados correctamente";
            echo "<br><br>";
            echo "<a href='trailers.php'>Volver al menu</a>";

        } else {

            echo "Problemas para actualizar con la base de datos";

        }

    } else {

        echo "Complete el formulario";

    }

?>