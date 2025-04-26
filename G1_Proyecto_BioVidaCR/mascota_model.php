<?php
require_once 'conexion_db.php';

class Mascota
{
  public static function add($nombre_mascota, $tipo_animal, $genero_animal, $lugar_encontrado, $foto_mascota, $detalle_adopcion, $acuerdo_compromiso)
  {
    global $conn;

    $sql = "INSERT INTO registro_mascota (nombre_mascota, tipo_animal, genero_animal, lugar_encontrado, foto_mascota, detalle_adopcion, acuerdo_compromiso) VALUES ('$nombre_mascota', '$tipo_animal', '$genero_animal', '$lugar_encontrado', '$foto_mascota', '$detalle_adopcion', '$acuerdo_compromiso')";

    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
}
