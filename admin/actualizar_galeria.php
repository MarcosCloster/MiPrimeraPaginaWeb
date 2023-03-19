<?php

    include("conectar.php");

    if(isset($_POST["actualizar"])&& !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];

        $foto = $_POST["foto"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

        $sql = "UPDATE galeria_proyecto SET foto = '$foto' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actualizados correctamente";
            echo "<br><br>";
            echo "<a href='galeria.php'>Volver al menu</a>";

        } else {

            echo "Problemas para actualizar con la base de datos";

        }

    } else {

        echo "Complete el formulario";

    }

?>