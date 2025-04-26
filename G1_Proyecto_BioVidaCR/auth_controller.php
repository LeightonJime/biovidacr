<?php
require_once 'user_model.php';

class AuthController {
    private $usuarioModel;

    public function __construct($db) {
        $this->usuarioModel = new Usuario($db);
    }

    public function registrarUsuario($nombre, $email, $usuario, $clave) {
        // Validaciones básicas
        if (empty($nombre) || empty($email) || empty($usuario) || empty($clave)) {
            return "Todos los campos son requeridos.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "El correo electrónico no es válido.";
        }
        if (strlen($clave) < 6) {
            return "La contraseña debe tener al menos 6 caracteres.";
        }

        // Verificar si el correo electrónico o nombre de usuario ya existen
        if ($this->usuarioModel->obtenerUsuarioPorEmail($email)) {
            return "El correo electrónico ya está registrado.";
        }
        if ($this->usuarioModel->obtenerUsuarioPorNombreUsuario($usuario)) {
            return "El nombre de usuario ya está registrado.";
        }

        // Hashear la contraseña
        $password_hash = password_hash($clave, PASSWORD_DEFAULT);

        // Crear el usuario en la base de datos
        if ($this->usuarioModel->crearUsuario($nombre, $email, $usuario, $password_hash)) {
            return "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            return "Error al registrar el usuario.";
        }
    }

    public function iniciarSesion($usuario, $clave) {
        if (empty($usuario) || empty($clave)) {
            return "Por favor, ingresa tu nombre de usuario y contraseña.";
        }

        // Obtener el usuario por nombre de usuario
        $usuarioData = $this->usuarioModel->obtenerUsuarioPorUsuario($usuario);

        if ($usuarioData) {
            // Verificar la contraseña hasheada
            if (password_verify($clave, $usuarioData['contraseña'])) {
                // La contraseña es correcta, devolver los datos del usuario (incluyendo el rol)
                return $usuarioData;
            } else {
                return "Nombre de usuario o contraseña incorrectos.";
            }
        } else {
            return "Nombre de usuario o contraseña incorrectos.";
        }
    }
}
?>