<?php
    //bloqueo para que no se pueda acceder sin logear, escribiendo solo la url
    session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>
        <!-- Enlazar tus archivos -->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="index.js">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://unpkg.com/mdb-ui-kit@3.11.0/css/mdb.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/mdb-ui-kit@3.11.0/js/mdb.min.js"></script>
        <script src="index.js"></script>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            Isla Transfers
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="#"><i class="fas fa-home fa-lg"></i><span class="small">Inicio</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-flex flex-column text-center" aria-current="page" href="#"><i class="fas fa-bell fa-lg"></i><span class="small">Notificaciones</span></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="man_user.png" class="rounded-circle" height="30" alt="" loading="lazy"/>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                    <li><a class="dropdown-item" href="#">Mis reservas</a></li>
                    <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar sesión</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </body>
</html>