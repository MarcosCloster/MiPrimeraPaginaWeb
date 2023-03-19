<?php

    include("conectar.php");

    if(isset($_POST["actualizar"])&& !empty($_POST["id_cliente"])){

        $id = $_POST["id_cliente"];

        $usuario = $_POST["usuario"];

        $contrasena = $_POST["contrasena"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar con la base de datos");

        $sql = "UPDATE datos_admin SET usuario = '$usuario', pass = '$contrasena' WHERE id = '$id'";

        $result = mysqli_query($link, $sql);

        if($result){

            echo "Datos actualizados correctamente";
            echo "<br><br>";
            echo "<a href='usuarios.php'>Volver al menu</a>";

        } else {

            echo "Problemas para actualizar con la base de datos";

        }

    } else {

        echo "Complete el formulario";

    }

?>