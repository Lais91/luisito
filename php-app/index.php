<?php
  require 'login-code.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isla Transfers</title>
        <!-- Enlazar tus archivos -->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="index.js">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <section class="text-center text-lg-start">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <div class="container py-4">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card cascading-right" style=" background: hsl(181, 70%, 88%); backdrop-filter: blur(30px);">
                                <div class="card-body p-5 shadow-5 text-center">
                                <h2 class="fw-bold mb-5 text-muted">Login</h2>
                                <form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="">Email</label>
                                    <input type="email" name="email" />
                                    <span class="msg-error"> <?php echo $email_err; ?></span>
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="">Contraseña</label>
                                    <input type="password" name="password" />
                                    <span class="msg-error"> <?php echo $password_err; ?> </span>
                                    </div>
                                    <!-- Submit -->
                                    <input type="submit" class="btn btn-primary btn-block mb-4" value="login">
                                </form>
                                <span class="text-footer"> ¿No tienes cuenta?
                                    <a href="register.php">Regístrate</a>
                                </span>            
                            </div>  
                        </div>     
                    </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="logo.jpeg" class="w-100 rounded-4 shadow-4" alt=""/>
                </div>
            </div>   
        </section>
    </body>
</html>





