<?php
require_once 'conexion_db.php';

class Emergencia
{
  public static function add($ubicacion_reporte, $persona_reporta, $animal_reporte, $causa_reporte, $foto_reporte, $contacto_reporte)
  {
    global $conn;

    $sql = "INSERT INTO reportar_emergencia (ubicacion_reporte, persona_reporta, animal_reporte, causa_reporte, foto_reporte, contacto_reporte) VALUES ('$ubicacion_reporte', '$persona_reporta', '$animal_reporte', '$causa_reporte', '$foto_reporte', '$contacto_reporte')";

    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
}
