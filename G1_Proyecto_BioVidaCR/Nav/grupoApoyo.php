<?php require_once '../conexion_db.php'; ?>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="/G1_Proyecto_BioVidaCR/index.php?page=inicioSesion">Inicio Sesion</a>
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
        <?php
        global $conn;
        $result = $conn->query("SELECT * FROM grupos_ayuda");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='col-md-6'>";
            echo "<div class='card'>";
            echo "<img src='{$row['imagen']}' alt='{$row['nombre_grupo']}' class='card-img-top'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$row['nombre_grupo']}</h5>";
            echo "<p>{$row['descripcion_grupo']}</p>";
            echo "<a href='{$row['sitio_web']}' class='btn btn-primary'>Visitar</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        $conn->close();
        ?>
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
