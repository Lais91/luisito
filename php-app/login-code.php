<?php

    //Iniciar sesión
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("location: welcome.php");
        exit;
    }

    require_once "conexion.php";

    $email = $password = "";
    $email_err = $password_err = "";

    if($_SERVER["REQUEST_METHOD"] === "POST") {

        if(empty(trim($_POST["email"]))) {
            $email_err = "Por favor, ingresa tu correo";
        }else {
            $email = trim($_POST["email"]);
        }

        if(empty(trim($_POST["password"]))) {
            $password_err = "Por favor, ingresa tu contraseña";
        }else {
            $password = trim($_POST["password"]);
        }

    //Validar credenciales
    if(empty($email_err) && empty($password_err)) {
        $sql = "SELECT id_viajero, usuario, email, password from login WHERE email = ?";

        if($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if(mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
            }

            if(mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id_viajero, $usuario, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt)) {
                    if(password_verify($password, $hashed_password)) {
                        session_start();
            
                        //Almacenar datos en variables de sesión
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id_viajero"] = $id_viajero;
                        $_SESSION["email"] = $email;
            
                        header("location: welcome.php");
                    } else {
                        $password_err = "La contraseña introducida es incorrecta";
                    }
                }
            } else {
                $email_err = "No se ha encontrado ninguna cuenta con este correo";
            }
        }else {
            echo "Ups! Algo ha salido mal, inténtalo de nuevo!";
        }

        }
    }
    
    mysqli_close($conexion);


?>