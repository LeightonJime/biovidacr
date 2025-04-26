<?php
require_once 'conexion_db.php';

class Usuario {
    private $conn;
    private $table_name = "registro_usuario";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function crearUsuario($nombre, $email, $usuario, $password_hash) {
        $query = "INSERT INTO " . $this->table_name . " (nombreP_usuario, correo_electronico, nombreD_usuario, contraseña, rol) VALUES (?, ?, ?, ?, 'usuario')";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", $nombre, $email, $usuario, $password_hash);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerUsuarioPorUsuario($usuario) {
        $query = "SELECT id_usuario, contraseña, rol FROM " . $this->table_name . " WHERE nombreD_usuario = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function obtenerUsuarioPorEmail($email) {
        $query = "SELECT id_usuario FROM " . $this->table_name . " WHERE correo_electronico = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true; // El correo electrónico ya existe
        } else {
            return false; // El correo electrónico no existe
        }
    }

    public function obtenerUsuarioPorNombreUsuario($usuario) {
        $query = "SELECT id_usuario FROM " . $this->table_name . " WHERE nombreD_usuario = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return true; // El nombre de usuario ya existe
        } else {
            return false; // El nombre de usuario no existe
        }
    }
}
?>