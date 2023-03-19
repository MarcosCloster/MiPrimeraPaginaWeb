<?php

    include("conectar.php");

    session_start();

    if(isset($_POST["login"])&& isset($_POST["user"])&& isset($_POST["pass"])){

        function validar($datos){

            $datos = trim($datos);
            $datos = addslashes($datos);
            $datos = htmlentities($datos);
            return $datos;

        }

        $usuario = validar($_POST["user"]);

        $contrasena = validar($_POST["pass"]);

        if(empty ($usuario) && empty ($contrasena)){

            header("location:form_login.php?error=El usuario y la contraseña es requerido");
            exit();

        } else if(empty($contrasena)){

            header("location:form_login.php?error=La contraseña es requerida");
            exit();

        } else  if(empty($usuario)){

            header("location:form_login.php?error=El usuario es requerido");
            exit();

        } else {

            $link = mysqli_connect($host, $user, $pass, $db) or die ("Problemas para conectar");

            $select = "SELECT * FROM datos_admin WHERE usuario = '$usuario' AND pass = '$contrasena'";

            $result = mysqli_query($link, $select);

            if(mysqli_num_rows($result) === 1){

                $row = mysqli_fetch_array($result);

                if($row['usuario'] === $usuario && $row['pass'] === $contrasena){

                    $_SESSION["usuario"] = $row['usuario'];

                    header("location:panel_admin.php");
                    exit();

                } else {

                    header("location:form_login.php?error=El usuario o la contraseña son incorrectos");

                }

            }else {

                header("location:form_login.php?error=El usuario o la contraseña son incorrectos");

            }

        }

    }

?>