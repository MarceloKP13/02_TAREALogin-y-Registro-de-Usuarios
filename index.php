<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: HAVCANA.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/imagenes/havcanalogo.png">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>HAVCANA - Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electrónico" name="correo" required>
                    <div class="contenedor_contrasena">
                        <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena_login" required>
                        <span class="eye_icon" id="eye_icon_login">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <button>Entrar</button>
                </form>

                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrate</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="email" placeholder="Correo electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <div class="contenedor_contrasena">
                        <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena_register" required>
                        <span class="eye_icon" id="eye_icon_register">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/script.js"></script>
</body>
</html>