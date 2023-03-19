<?php 

    include("conectar.php");

    if(isset($_GET["id"])){

        $id = $_GET["id"];

        $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar");

        $delete = "DELETE FROM trailers_proyecto WHERE id = '$id'";

        $result = mysqli_query($link, $delete);

        if($result){

            echo "Trailer eliminado correctamente";
            echo "<br><br>";
            echo "<a href='trailers.php'>Volver al menu</a>";

        } else {

            echo "Problemas para eliminar los datos";

        }

    }

?>