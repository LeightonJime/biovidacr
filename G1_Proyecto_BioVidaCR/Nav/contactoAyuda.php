<?php require_once '../conexion_db.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto de Ayuda - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .navbar {
            background-color: #f0f8ff !important;
            /* Azul claro */
            border-bottom: 1px solid #d1c4e9;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .contact-item img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 2rem;
        }

        .contact-item div {
            flex-grow: 1;
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
                    <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/grupoApoyo.php">Grupos de Apoyo</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container mt-5">
        <h1>Centros de Rescate y Rehabilitación de Vida Silvestre</h1>
        <?php
        global $conn;
        $result = $conn->query("SELECT * FROM contactos_ayuda");
        while ($row = $result->fetch_assoc()) {
            echo "<div class='contact-item'>";
            echo "<img src='{$row['imagen']}' alt='{$row['nombre_contacto']}'>";
            echo "<div>";
            echo "<h4>{$row['nombre_contacto']}</h4>";
            if (!empty($row['sitio_web'])) {
                echo "<p><strong>Sitio web:</strong> <a href='{$row['sitio_web']}'>{$row['sitio_web']}</a></p>";
            }
            if (!empty($row['ubicacion'])) {
                echo "<p><strong>Ubicación:</strong> {$row['ubicacion']}</p>";
            }
            if (!empty($row['telefono'])) {
                echo "<p><strong>Teléfono:</strong> {$row['telefono']}</p>";
            }
            if (!empty($row['descripcion_contacto'])) {
                echo "<p>{$row['descripcion_contacto']}</p>";
            }
            echo '</div>';
            echo '</div>';
        }
        $conn->close();
        ?>
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
