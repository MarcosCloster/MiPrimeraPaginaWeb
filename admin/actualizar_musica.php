<?php

    include("conectar.php");

    if(isset($_POST["actualizar"])&& !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];

        $titulo = $_POST["titulo"];

        $musica = $_POST["musica"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

        $sql = "UPDATE musica_proyecto SET titulo = '$titulo', musica = '$musica' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actualizados correctamente";

            echo "<br><br>";

            echo "<a href='musica.php'>Volver al menu</a>";

        } else {

            echo "Problemas para actualizar con la base de datos";

        }

    } else {

        echo "Complete el formulario";

    }

?>