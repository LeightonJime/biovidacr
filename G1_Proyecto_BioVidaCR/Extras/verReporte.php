<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'biovidacr';

$conn = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$sql = "SELECT id_reporte, persona_reporta, contacto_reporte, causa_reporte, animal_reporte, ubicacion_reporte, foto_reporte FROM reportar_emergencia ORDER BY id_reporte DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes de Emergencias - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color:rgb(113, 212, 121) !important;
            border-bottom: 1px solid #d1c4e9;
        }
        .navbar-brand {
            color: #fff;
        }
        .card {
            margin-bottom: 20px;
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
        .foto-mini {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
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

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand mx-auto" href="/G1_Proyecto_BioVidaCR/Nav/reportarEmergencia.php">BioVidaCR - Reportes de Emergencia</a>
</nav>

<div class="container mt-5">
    <div class="row">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <?php if (!empty($row["foto_reporte"])): ?>
                            <img src="<?= htmlspecialchars($row["foto_reporte"]) ?>" class="card-img-top foto-mini" alt="Foto Reporte">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/300x200?text=Sin+Foto" class="card-img-top foto-mini" alt="Sin Foto">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title">#<?= $row["id_reporte"] ?> - <?= htmlspecialchars($row["animal_reporte"]) ?></h5>
                            <p class="card-text"><strong>Reportado por:</strong> <?= htmlspecialchars($row["persona_reporta"]) ?></p>
                            <p class="card-text"><strong>Contacto:</strong> <?= htmlspecialchars($row["contacto_reporte"]) ?></p>
                            <p class="card-text"><strong>Causa:</strong> <?= htmlspecialchars($row["causa_reporte"]) ?></p>
                            <p class="card-text"><strong>Ubicación:</strong> <?= htmlspecialchars($row["ubicacion_reporte"]) ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <div class="alert alert-info">No hay reportes registrados.</div>
            </div>
        <?php endif; ?>
    </div>
</div>

<footer class="footer text-center py-3">
    <p>© <?php echo date("Y"); ?> Todos los derechos reservados. BioVidaCR</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php $conn->close(); ?>
