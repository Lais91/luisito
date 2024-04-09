<?php
    //Archivo de conexion a la BBDD
    require_once 'conexion.php';

    //Variable e inicialización de valores vacíos
    $usuario = $email = $password = "";
    $usuario_err = $email_err = $password_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //Validación input de usuario
        if(empty(trim($_POST["usuario"]))) {
            $usuario_err = "Por favor, ingresa tu nombre";
        }else{
            //prepara una declaración de selección
            $sql = "SELECT id_viajero FROM login WHERE usuario = ?";

            if($stmt = mysqli_prepare($conexion, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_usuario);

                $param_usuario = trim($_POST["usuario"]);

                if(mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $usuario_err = "Este nombre de usuario ya existe";
                    }else {
                        $usuario = trim($_POST["usuario"]);
                    }
                }else {
                    echo "Ups! Algo no va bien, inténtalo de nuevo";
                }
            }
        }

        //Validación input de email
        if(empty(trim($_POST["email"]))) {
            $email_err = "Por favor, ingresa tu correo";
        }else{
            //prepara una declaración de selección
            $sql = "SELECT id_viajero FROM login WHERE email = ?";

            if($stmt = mysqli_prepare($conexion, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = trim($_POST["email"]);

                if(mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1) {
                        $email_err = "Este correo ya existe";
                    }else {
                        $email = trim($_POST["email"]);
                    }
                }else {
                    echo "Ups! Algo no va bien, inténtalo de nuevo";
                }
            }
        }

        //Validación input de contraseña
        if (empty(trim($_POST["password"]))) {
            $password_err = "Por favor, ingresa una contraseña";
        }elseif (strlen(trim($_POST["password"])) < 4) {
            $password_err = "La contraseña debe de tener al menos 4 caracteres";
        }else {
            $password = trim($_POST["password"]);
        }


        //Comprobación de errores de entrada antes de insertar los datos en la base de datos
        if(empty($usuario_err) && empty($email_err) && empty($password_err)) {

            $sql = "INSERT INTO login (usuario, email, password) VALUES (?, ?, ?)";

            if($stmt = mysqli_prepare($conexion, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss", $param_usuario, $param_email, $param_password);

                $param_usuario = $usuario;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); //Encriptando contraseña

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_close($conexion);
                    header("location: index.php");
                    exit();
                }else {
                    echo "Algo ha salido mal, inténtalo de nuevo";
                }
            }
        }

        mysqli_close($conexion);
    }
?>

