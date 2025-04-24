<?php
session_start(); 

if (isset($_GET['page']) && $_GET['page'] === 'inicioSesion') {
    $_SESSION['mostrar_inicio_sesion'] = true;
}

if (isset($_SESSION['mostrar_inicio_sesion']) && $_SESSION['mostrar_inicio_sesion'] === true) {
    include 'Nav/inicioSesion.php';
    unset($_SESSION['mostrar_inicio_sesion']); 
    exit; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BioVidaCR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=inicioSesion">Inicio Sesion</a>
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
        </div>
    </nav>

    <header class="jumbotron text-center">
        <h1>Bienvenido a BioVidaCR</h1>
        <p>Protegiendo la biodiversidad de Costa Rica</p>
    </header>

    <div class="main-container">
        <main class="container mt-5">
            <section class="mb-5 project-info-container">
                <h2 class="text-center mb-4 project-title">Información del Proyecto</h2>
                <p class="text-center project-description">
                    Este proyecto tiene como meta la conservación de la vida silvestre en Costa Rica, promoviendo el registro y monitoreo de especies, la denuncia de emergencias y la educación sobre biodiversidad de la fauna nacional.
                </p>
                <p class="text-center project-description">
                    El sistema permitirá que tanto ciudadanos como expertos contribuyan con información valiosa para la protección de los animales.
                </p>
                <p class="text-center project-description">
                    Además, los usuarios podrán registrar adquisiciones de fauna, reportar amenazas y acceder a información sobre especies en peligro de extinción.
                </p>
                <p class="text-center project-description">
                    Con el fin de mitigar la mala manipulación de especies en Costa Rica.
                </p>
            </section>
            <section class="mb-5">
                <?php include 'Extras/index_noticias.php'; ?>
            </section>
            <section class="mb-5">
                <h2 class="text-center mb-4">Fauna de Costa Rica</h2>
                <div class="video-container d-flex justify-content-center">
                    <iframe src="https://www.youtube.com/embed/NNS5Piu-EII?si=SwiGbLoqKjSk9NQk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </section>
        </main>
    </div>

    <footer class="footer bg-dark text-white text-center py-3">
        <p>© <?php echo date("Y"); ?> Todos los derechos reservados. BioVidaCR </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>