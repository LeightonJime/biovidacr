<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Animales - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .navbar {
            background-color: #e8f5e9 !important; /* Verde suave */
            border-bottom: 1px solid #d1c4e9;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            object-fit: cover;
            height: 200px;
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-title {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        .card-subtitle {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 1rem;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
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
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/grupoApoyo.php">Grupos de Apoyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/G1_Proyecto_BioVidaCR/Nav/contactoAyuda.php">Contactos de Ayuda</a>
                    </li>
            </ul>
        </div>
    </nav>
    <div class="text-center mb-4">
                    <h2>Catalogo de Animales</h2>
                </div>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://static.inaturalist.org/photos/51015966/large.jpg" class="card-img-top" alt="Jaguar">
                    <div class="card-body">
                        <h5 class="card-title">Jaguar</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Panthera onca</h6>
                        <p class="card-text">El felino más grande de América, conocido por su pelaje manchado y su poderosa mordida.</p>
                        <a href="/G1_Proyecto_BioVidaCR/animales/jaguar.php" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://laderasur.com/wp-content/uploads/2022/08/perezosos-tres-dedos-creditos-sloth-conservation-2.jpg" class="card-img-top" alt="Perezoso">
                    <div class="card-body">
                        <h5 class="card-title">Perezoso de tres dedos</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Bradypus variegatus</h6>
                        <p class="card-text">Mamífero arbóreo conocido por su lentitud y su pelaje verdoso debido a las algas.</p>
                        <a href="/G1_Proyecto_BioVidaCR/animales/perezoso.php" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://faunacr.com/wp-content/uploads/2022/04/shutterstock_1249664152-1-scaled.jpg" class="card-img-top" alt="Tucan">
                    <div class="card-body">
                        <h5 class="card-title">Tucán pico arcoíris</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ramphastos sulfuratus</h6>
                        <p class="card-text">Ave icónica de Costa Rica, famosa por su pico colorido y su canto distintivo.</p>
                        <a href="/G1_Proyecto_BioVidaCR/animales/tucan.php"  class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ2-rlXyfs4hbXz3rbqc96yeGHTA61Ue_j_Q&s" class="card-img-top" alt="Mono ardilla">
                    <div class="card-body">
                        <h5 class="card-title">Mono ardilla</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Saimiri oerstedii</h6>
                        <p class="card-text">Pequeño primate conocido por su agilidad y su pelaje naranja brillante.</p>
                        <a href="/G1_Proyecto_BioVidaCR/animales/mono.php"  class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i0.wp.com/montesdeoro.go.cr/wp-content/uploads/2021/02/lapa32.jpg.crdownload.jpg?fit=720%2C479&ssl=1" class="card-img-top" alt="Lapa roja">
                    <div class="card-body">
                        <h5 class="card-title">Lapa roja</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ara macao</h6>
                        <p class="card-text">Ave colorida y ruidosa, conocida por su inteligencia y su capacidad para imitar sonidos.</p>
                        <a href="/G1_Proyecto_BioVidaCR/animales/lapa.php"class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX7AuQuyaKYY-bzxVLzsQ7a5NZsZyKKLNm3A&s" class="card-img-top" alt="Rana roja">
                    <div class="card-body">
                        <h5 class="card-title">Rana venenosa roja</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Oophaga granulifera</h6>
                        <p class="card-text">Anfibio pequeño y venenoso, conocido por su coloración roja y su piel tóxica.</p>
                        <a href="/G1_Proyecto_BioVidaCR/animales/rana.php" class="btn btn-success">Ver más</a>
                    </div>
                </div>
            </div>
