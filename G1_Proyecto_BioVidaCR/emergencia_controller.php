<?php
require_once 'emergencia_model.php';

try {

  if (!empty($_POST)) {

    $action = $_POST['action'] ?? '';
    if ($action === 'create') {
      if (Emergencia::add($_POST['ubicacion_reporte'], $_POST['persona_reporta'], $_POST['animal_reporte'], $_POST['causa_reporte'], $_POST['foto_reporte'], $_POST['contacto_reporte'])) {
        header("Location: ./");
      }
    }
  }
} catch (Exception $e) {
  echo json_encode(["error" => $e->getMessage()]);
}
