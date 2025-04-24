<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportar Emergencia - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .navbar {
            background-color: #e8f5e9 !important;
            border-bottom: 1px solid #d1c4e9;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f0f8ff;
            border-bottom: 1px solid #e0e0e0;
        }
        .card-body {
            padding: 2.5rem;
        }
        .form-group {
            margin-bottom: 2rem;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .footer {
            background-color: #343a40;
            padding: 2rem 0;
            color: #ccc;
            margin-top: 5rem;
        }
        .footer p {
            margin-bottom: 0px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/G1_Proyecto_BioVidaCR/index.php">BioVidaCR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/G1_Proyecto_BioVidaCR/index.php?page=inicioSesion">Inicio Sesion</a>
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
            <div class="col-md-8">
                <div class="text-center mb-5">
                    <h2>Reportar Emergencia</h2>
                    <p class="lead">Completa el formulario para reportar una emergencia de vida silvestre.</p>
                </div>
                <div class="card">
                    <div class="card-header text-center">
                        Detalles del Reporte
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre de la Persona que Reporta</label>
                                <input type="text" class="form-control" id="persona_reporta" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Número de Teléfono</label>
                                <input type="tel" class="form-control" id="contacto_reporte" placeholder="Ingresa tu número de teléfono">
                            </div>
                            <div class="form-group">
                                <label for="causa">Causa del Reporte</label>
                                <textarea class="form-control" id="causa_reporte" rows="4" placeholder="Describe la emergencia"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="animal">Tipo de Animal</label>
                                <input type="text" class="form-control" id="animal_reporte" placeholder="Especifica el tipo de animal">
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicación del Reporte</label>
                                <input type="text" class="form-control" id="ubicacion_reporte" placeholder="Ingresa la ubicación">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto del Reporte (Opcional)</label>
                                <input type="file" class="form-control-file" id="foto">
                            </div>
                            <button type="submit" class="btn btn-danger btn-block">Enviar Reporte</button>
                        </form>
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