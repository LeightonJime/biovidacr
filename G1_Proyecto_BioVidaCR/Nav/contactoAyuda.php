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
            background-color: #f0f8ff !important; /* Azul claro */
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
            </ul>
        </div>
    </nav>

    <main class="container mt-5">
        <h1>Centros de Rescate y Rehabilitación de Vida Silvestre</h1>
        <div class="contact-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZlrDxmWWzL-RC1GvtUsih0tMPxYdAbsZ0WQ&s" alt="Rescate Wildlife Rescue Center">
            <div>
                <h4>Rescate Wildlife Rescue Center</h4>
                <p><strong>Ubicación:</strong> Alajuela, Costa Rica</p>
                <p><strong>Sitio web:</strong> <a href="http://rescatewildlife.org">rescatewildlife.org</a></p>
                <p>Este centro se dedica al rescate y rehabilitación de diversas especies de animales silvestres.</p>
            </div>
        </div>
        <div class="contact-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVA6EKyqc4L57Dgr11qWaHSJUwVcM_qDTSnBfjdlUgetmOHp59GBUDyvU2Ujoqw64HDEU&usqp=CAU" alt="Centro de Educación y Rescate de Vida Silvestre Michael Uren – IAR Costa Rica">
            <div>
                <h4>Centro de Educación y Rescate de Vida Silvestre Michael Uren – IAR Costa Rica</h4>
                <p><strong>Sitio web:</strong> <a href="http://iarcostarica.org">iarcostarica.org</a></p>
                <p><strong>Teléfono:</strong> +506 2682 5049</p>
                <p>Enfocado en la educación y rescate de vida silvestre.</p>
            </div>
        </div>
        <div class="contact-item">
            <img src="https://www.natuwa.com/wp-content/uploads/2021/10/Logo-PNG-1500X1500V1-e1689488596286-300x300.png" alt="NATUWA, Santuario de Lapas">
            <div>
                <h4>NATUWA, Santuario de Lapas</h4>
                <p><strong>Sitio web:</strong> <a href="http://natuwa.com">natuwa.com</a></p>
                <p>Centro de manejo y rehabilitación de vida silvestre.</p>
            </div>
        </div>
        <div class="contact-item">
           <img src="https://clydescamp.com/wp-content/uploads/2016/04/Refuge_Revised_Logo_with_Foundation_Name-293x300.jpg" alt="IAR Costa Rica">
           <div>
               <h4>IAR Costa Rica</h4>
               <p><strong>Telefono para emergencias de fauna silvestre en el gran area de Nosara Guanacaste:</strong> 8824-3323</p>
               <p><strong>Sitio web:</strong> <a href="http://iarcostarica.org">iarcostarica.org</a></p>
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