<?php 

    include("conectar.php");

    if(isset($_GET["id"])){

        $id = $_GET["id"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar");

        $delete = "DELETE FROM galeria_proyecto WHERE id = '$id'";

        $result = mysqli_query($link, $delete);

        if($result){

            echo "Imagen eliminada correctamente";
            echo "<br><br>";
            echo "<a href='galeria.php'>Volver al menu</a>";

        } else {

            echo "Problemas para eliminar los datos";

        }

    }

?>