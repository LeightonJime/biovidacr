<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .navbar {
            background-color: #e8f5e9 !important; /* Verde suave */
            border-bottom: 1px solid #d1c4e9;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .footer {
            background-color: #343a40;
            padding: 2rem 0;
            color: #ccc;
            margin-top: 5rem; /* Espacio antes del footer */
        }
        .footer p {
            margin-bottom: 0px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">BioVidaCR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/G1_Proyecto_BioVidaCR/index.php?page=inicioSesion">Inicio Sesion</a>
               </li>
                <li class="nav-item">
                    <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/reportarEmergencia.php">Reportar Emergencia</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/registroMascota.php">Registro de Mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/catalogo.php">Catalogo de Animales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/grupoApoyo.php">Grupos de Apoyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/contactoAyuda.php">Contactos de Ayuda</a>
                    </li>

            </ul>
        </div>
    </nav>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center mb-4">
                    <h2>Bienvenidos</h2>
                    <p>Inicia sesión para acceder a tu cuenta.</p>
                </div>
                <div class="card">
                    <div class="card-header text-center">
                        Inicio de Sesión
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="usuario">Ingrese su nombre de Usuario</label>
                                <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu usuario">
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Ingrese su Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>¿Aún no tienes cuenta? <a href="/G1_Proyecto_BioVidaCR/Nav/registroUsuario.php">Regístrate aquí</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer text-center py-3">
        <p>© <?php echo date("Y"); ?> Todos los derechos reservados. BioVidaCR </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../js/scripts.js"></script>
</body>
</html>