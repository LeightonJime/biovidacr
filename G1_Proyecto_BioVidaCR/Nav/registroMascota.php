<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Mascota - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .navbar {
            background-color: #f8f9fa !important;
            border-bottom: 1px solid #dee2e6;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #e9ecef;
            border-bottom: 1px solid #dee2e6;
        }
        .card-body {
            padding: 3rem;
        }
        .form-group {
            margin-bottom: 2.5rem;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 1.2rem 2.5rem;
            font-size: 1.1rem;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }
        .btn-primary:hover {
            background-color: #0069d9;
        }
        .footer {
            background-color: #343a40;
            padding: 2.5rem 0;
            color: #ccc;
            margin-top: 6rem;
        }
        .footer p {
            margin-bottom: 0px;
        }
        .form-check {
            margin-top: 1rem;
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
                    <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/reportarEmergencia.php">Reportar Emergencia</a>
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
                    <h2>Registro de Mascota</h2>
                    <p class="lead">Completa el formulario para registrar a tu mascota.</p>
                </div>
                <div class="card">
                    <div class="card-header text-center">
                        Datos de la Mascota
                    </div>
                    <div class="card-body">
                        <form id="form_mascota" action='../mascota_controller.php' method='POST'>
                            <input type='hidden' name='action' value='create'>
                            <div class="form-group">
                                <label for="nombreMascota">Nombre de la Mascota</label>
                                <input type="text" class="form-control" name="nombre_mascota" placeholder="Ingresa el nombre de tu mascota">
                            </div>
                            <div class="form-group">
                                <label for="genero">Género de la Mascota</label>
                                <select class="form-control" name="genero_animal">
                                    <option value="Macho">Macho</option>
                                    <option value="Hembra">Hembra</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tipoMascota">Tipo de Mascota</label>
                                <input type="text" class="form-control" name="tipo_animal" placeholder="Ej: Perro, Gato, etc.">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto del Mascota (Opcional)</label>
                                <input type="text" class="form-control" name="foto_mascota" placeholder="Ingresa el link de la foto">
                            </div>
                            <div class="form-group">
                                <label for="comoAdopto">¿Cómo Adoptaste a tu Mascota?</label>
                                <textarea class="form-control" name="lugar_encontrado" rows="4" placeholder="Describe cómo adoptaste a tu mascota"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="nombrePersona">Nombre de la Persona que Registra</label>
                                <input type="text" class="form-control" id="nombrePersona" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu número de teléfono">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="acuerdo_compromiso">
                                <label class="form-check-label" for="acuerdo">Me comprometo a cuidar y velar por la salud y el bienestar de mi mascota.</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrar Mascota</button>
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
