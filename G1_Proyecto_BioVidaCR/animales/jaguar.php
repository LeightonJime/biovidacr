<!-- jaguar.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jaguar - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        .info-section {
            background-color: #f9f9f9;
            border-left: 5px solid #28a745;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h2 {
            color: #1c3f2b;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Jaguar (<em>Panthera onca</em>)</h1>

        <!-- Carrusel centrado -->
        <div class="mx-auto mb-5" style="max-width: 600px;">
            <div id="carruselJaguar" class="carousel slide rounded" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carruselJaguar" data-slide-to="0" class="active"></li>
                    <li data-target="#carruselJaguar" data-slide-to="1"></li>
                    <li data-target="#carruselJaguar" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="https://static.inaturalist.org/photos/51015966/large.jpg" class="d-block w-100" alt="Jaguar caminando en la selva">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.natuwa.com/wp-content/uploads/2022/01/Bolas-por-la-tarde-scaled.jpg" class="d-block w-100" alt="Jaguar descansando al atardecer">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.natuwa.com/wp-content/uploads/2018/06/dinamu_en_tronco_logo-1024x680.jpg" class="d-block w-100" alt="Jaguar sobre un tronco">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carruselJaguar" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carruselJaguar" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

        <!-- Secciones informativas con diseño -->
        <section class="info-section">
            <h2>Características Generales</h2>
            <ul>
                <li>Felino más grande de América, tercero en el mundo.</li>
                <li>Machos: hasta 1.8 m de largo y 120 kg.</li>
                <li>Hembras: hasta 100 kg.</li>
                <li>Constitución robusta: cabeza grande y mandíbulas fuertes.</li>
                <li>Pelaje amarillo-naranja con rosetas negras.</li>
                <li>Existen jaguares melanísticos (panteras negras).</li>
                <li>Cada patrón de rosetas es único.</li>
                <li>Excelentes nadadores y trepadores.</li>
            </ul>
        </section>

        <section class="info-section">
            <h2>Dieta y Comportamiento de Caza</h2>
            <ul>
                <li>Depredadores tope, carnívoros.</li>
                <li>Alimentación variada: más de 85 especies.</li>
                <li>Cazan capibaras, tapires, ciervos, monos, aves, reptiles y peces.</li>
                <li>Solitarios y oportunistas.</li>
                <li>Usan técnicas de acecho y emboscada.</li>
                <li>Mordida más poderosa entre los felinos.</li>
                <li>Comienzan por cuello y pecho de sus presas.</li>
            </ul>
        </section>

        <section class="info-section">
            <h2>Importancia Ecológica y Cultural</h2>
            <ul>
                <li>Controlan poblaciones de presas, manteniendo equilibrio ecológico.</li>
                <li>Especie sombrilla: su conservación protege a muchas otras.</li>
                <li>Venerado por culturas indígenas: símbolo de poder y espiritualidad.</li>
            </ul>
        </section>

        <section class="info-section">
            <h2>Hábitat y Distribución</h2>
            <ul>
                <li>Desde el sur de EE.UU. hasta Argentina.</li>
                <li>Principalmente en Amazonía y Pantanal brasileño.</li>
                <li>Habita selvas, sabanas, matorrales y zonas áridas.</li>
                <li>Siempre cerca del agua.</li>
            </ul>
        </section>

        <section class="info-section">
            <h2>Estado de Conservación y Amenazas</h2>
            <ul>
                <li>Clasificado como "Casi Amenazado" (UICN).</li>
                <li>Principales amenazas:
                    <ul>
                        <li>Pérdida y fragmentación del hábitat.</li>
                        <li>Caza furtiva por pelaje y represalias.</li>
                        <li>Conflictos con ganaderos.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <div class="text-center">
            <a href="/G1_Proyecto_BioVidaCR/Nav/catalogo.php" class="btn btn-success mt-4">Volver al catálogo</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
