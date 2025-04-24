<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos de Apoyo - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .navbar {
            background-color: #f0f8ff !important;
            border-bottom: 1px solid #d1c4e9;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
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
                    <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/reportarEmergencia.php">Reportar Emergencia</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/registroMascota.php">Registro de Mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/catalogo.php">Catalogo de Animales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/contactoAyuda.php">Contactos de Ayuda</a>
                    </li>
            </ul>
        </div>
    </nav>
    <div class="text-center mb-4">
                    <h2>Grupos de Apoyo</h2>
                </div>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.fundazoo.org/images/Centro_Conservacion_Santa_Ana.jpg" class="card-img-top" alt="Centro de Conservación Santa Ana">
                    <div class="card-body">
                        <h5 class="card-title">Centro de Conservación Santa Ana</h5>
                        <p>Fundazoo se dedica a la investigación, la reproducción en cautiverio de especies de flora y fauna tropicales, educación ambiental, conservación y rehabilitación de hábitat y a la recreación ecoturística.</p>
                        <a href="https://www.fundazoo.org/centrodeconservacion" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://rescatewildlife.org/wp-content/uploads/2023/06/DSC04193-scaled.jpg" class="card-img-top" alt="Rescate Wildlife Rescue Center">
                    <div class="card-body">
                        <h5 class="card-title">Rescate Wildlife Rescue Center</h5>
                        <p>Este centro se dedica al rescate y rehabilitación de diversas especies de animales silvestres.</p>
                        <a href="https://rescatewildlife.org/es/visitenos/?gad_source=1&gclid=Cj0KCQjwhMq-BhCFARIsAGvo0Kc2JdkH4waMvSq9daBP9EFz_PqE9PCKYOgwLolDfjGDPpftlEESvR4aAiApEALw_wcB" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://www.fundazoo.org/images/zoo_simon_bolivar.jpg" class="card-img-top" alt="Zoológico Simón Bolívar">
                    <div class="card-body">
                        <h5 class="card-title">Zoológico Simón Bolívar</h5>
                        <p>Fundazoo se dedica a la investigación, la reproducción en cautiverio de especies de flora y fauna tropicales, educación ambiental, conservación y rehabilitación de hábitat y a la recreación ecoturística.</p>
                        <a href="https://www.fundazoo.org/zoosimonbolivar" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="https://ponderosacostarica.com/wp-content/uploads/2023/04/pexels-luis-quintero-2549753-scaled-1-1024x683.jpg" class="card-img-top" alt="Ponderosa Adventure Park">
                    <div class="card-body">
                        <h5 class="card-title">Ponderosa Adventure Park</h5>
                        <p>Parque de aventura con animales salvajes y diversas actividades al aire libre.</p>
                        <a href="https://ponderosacostarica.com/" class="btn btn-primary">Visitar</a>
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