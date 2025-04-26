<?php
require_once 'mascota_model.php';

try {

  if (!empty($_POST)) {

    $action = $_POST['action'] ?? '';
    if ($action === 'create') {
      if (Mascota::add($_POST['nombre_mascota'], $_POST['tipo_animal'], $_POST['genero_animal'], $_POST['lugar_encontrado'], $_POST['foto_mascota'], $_POST['detalle_adopcion'], $_POST['acuerdo_compromiso'])) {
        header("Location: ./");
      }
    }
  }
} catch (Exception $e) {
  echo json_encode(["error" => $e->getMessage()]);
}
