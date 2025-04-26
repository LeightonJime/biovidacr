<?php
require_once __DIR__ . '/../conexion_db.php';
require_once __DIR__ . '/../auth_controller.php';

$authController = new AuthController($pdo);
$error_registro = "";
$mensaje_registro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $usuario = trim($_POST["usuario"]);
    $clave = $_POST["clave"];
    $confirmar_clave = $_POST["confirmar_clave"];

    if ($clave === $confirmar_clave) {
        $resultado = $authController->registrarUsuario($nombre, $email, $usuario, $clave);
        if (strpos($resultado, 'exitoso') !== false) {
            $mensaje_registro = $resultado;
        } else {
            $error_registro = $resultado;
        }
    } else {
        $error_registro = "Las contraseñas no coinciden.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - BioVidaCR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/G1_Proyecto_BioVidaCR/index.php">BioVidaCR</a>
        </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Registro de Usuario</div>
                    <div class="card-body">
                        <?php if (!empty($mensaje_registro)): ?>
                            <div class="alert alert-success"><?php echo $mensaje_registro; ?></div>
                        <?php endif; ?>
                        <?php if (!empty($error_registro)): ?>
                            <div class="alert alert-danger"><?php echo $error_registro; ?></div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="nombre">Nombre Completo:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Nombre de Usuario:</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="clave">Contraseña:</label>
                                <input type="password" class="form-control" id="clave" name="clave" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmar_clave">Confirmar Contraseña:</label>
                                <input type="password" class="form-control" id="confirmar_clave" name="confirmar_clave" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>¿Ya tienes cuenta? <a href="/G1_Proyecto_BioVidaCR/index.php?page=inicioSesion">Iniciar Sesión</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>