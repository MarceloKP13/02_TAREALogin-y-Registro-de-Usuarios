<?php
    session_start();
    
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Havcana Examen</title>
    <link rel="icon" href="assets/imagenes/havcanalogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estiloexamen.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Havcana Examen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>

    <!-- Hero Section -->
<header class="hero">
    <div class="container text-center">
        <h1 class="display-3 text-white">Bienvenidos a Havcana Examen</h1>
        <p class="lead text-white">El sabor de la tradición en cada copa</p>
        <a href="http://marcelokp13.fwh.is/index.php" class="btn btn-custom btn-lg" target="_blank">Rellenar Formulario</a>
    </div>
    <br>
    <a href="php/cerrar_sesion.php" class="btn btn-custom btn-lg mb-4">Cerrar Sesión</a>
</header>

    <!-- Productos Section -->
<section id="productos" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Nuestros Vinos</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/imagenes/vino1.jpg" class="card-img-top" alt="Vino Tinto">
                    <div class="card-body">
                        <h5 class="card-title">Vino Tinto</h5>
                        <p class="card-text">Un vino de gran cuerpo y carácter, ideal para acompañar carnes rojas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/imagenes/vino2.jpg" class="card-img-top" alt="Vino Blanco">
                    <div class="card-body">
                        <h5 class="card-title">Vino Blanco</h5>
                        <p class="card-text">Un vino fresco y afrutado, perfecto para acompañar pescados y mariscos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/imagenes/vino3.jpg" class="card-img-top" alt="Vino Rosado">
                    <div class="card-body">
                        <h5 class="card-title">Vino Rosado</h5>
                        <p class="card-text">El equilibrio perfecto entre un vino tinto y blanco, ideal para aperitivos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Tabla de Información -->
    <section id="tabla" class="py-1">
        <div class="container">
            <h2 class="text-center">Tipos de Vinos y sus Características</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Tipo de Vino</th>
                        <th>Color</th>
                        <th>Maridaje</th>
                        <th>Características</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vino Tinto</td>
                        <td>Rojo</td>
                        <td>Carnes rojas, quesos fuertes</td>
                        <td>Fuerte, con cuerpo, sabores a frutas oscuras</td>
                    </tr>
                    <tr>
                        <td>Vino Blanco</td>
                        <td>Amarillo</td>
                        <td>Pescados, mariscos, ensaladas</td>
                        <td>Fresco, afrutado, de acidez alta</td>
                    </tr>
                    <tr>
                        <td>Vino Rosado</td>
                        <td>Rosa</td>
                        <td>Aperitivos, pasta, pescados</td>
                        <td>Equilibrado entre dulzura y acidez, afrutado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Video de Vino -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="mb-4">Conoce más sobre nuestros vinos</h2>
        <div class="video-container">
            <video controls>
                <source src="assets/video/vinovideo.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>
    </div>
</section>

    <!-- Redes Sociales -->
    <section class="bg-dark text-white py-3">
        <div class="container text-center">
            <h2>Síguenos en nuestras redes sociales</h2>
            <div class="d-flex justify-content-center">
                <!-- Facebook -->
                <a href="https://facebook.com/MarceloKP13" class="text-white me-4" target="_blank">
                    <img src="assets/imagenes/facebook-icon.png" alt="Facebook" width="40" class="social-icon">
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/marce_kp13/" class="text-white me-4" target="_blank">
                    <img src="assets/imagenes/instagram-icon.png" alt="Instagram" width="40" class="social-icon">
                </a>
                <!-- GitHub -->
                <a href="https://github.com/MarceloKP13" class="text-white me-4" target="_blank">
                    <img src="assets/imagenes/github-icon.png" alt="GitHub" width="40" class="social-icon">
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Havcana Examen. Todos los derechos reservados.</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>