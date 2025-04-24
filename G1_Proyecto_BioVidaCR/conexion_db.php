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
?>

<?php
require_once 'conexion_db.php';


//catalogo
// Insert
$sql = "INSERT INTO catalogo (id_animal, nombre_animal, info_animal, foto_animal) 
        VALUES (1, 'Perro', 'Información del perro', 'ruta/foto.jpg')";
if($conn->query($sql) === TRUE){
    echo "Registro agregado correctamente!<br>";
} else {
    echo "Error al agregar el registro<br>";
}

// Select
$sql = "SELECT * FROM catalogo";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       echo $row["id_animal"]." ".$row["nombre_animal"]." ".$row["info_animal"]." ".$row["foto_animal"]."<br>";
    }
} else {
    echo "No hay registros <br>";
}

// Update
$sql = "UPDATE catalogo SET nombre_animal='Gato' WHERE id_animal=1";
if($conn->query($sql) === TRUE){
    echo "Registro actualizado correctamente!<br>";
} else {
    echo "Error al actualizar el registro<br>";
}

// Delete
$sql = "DELETE FROM catalogo WHERE id_animal=1";
if($conn->query($sql) === TRUE){
    echo "Registro eliminado correctamente!<br>";
} else {
    echo "Error al eliminar el registro<br>";
}


//contactos_ayuda
// Insert
$sql = "INSERT INTO contactos_ayuda (id_contacto, nombre_contacto, telefono_contacto, ubicacion_contacto, horario_ayuda) 
        VALUES (1, 'Centro Veterinario', '2222-3333', 'San José, Costa Rica', 'Lunes a Viernes 8am-5pm')";
if($conn->query($sql) === TRUE){
    echo "Registro agregado correctamente!<br>";
} else {
    echo "Error al agregar el registro<br>";
}

// Select
$sql = "SELECT * FROM contactos_ayuda";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       echo $row["id_contacto"]." ".$row["nombre_contacto"]." ".$row["telefono_contacto"]." ".
            $row["ubicacion_contacto"]." ".$row["horario_ayuda"]."<br>";
    }
} else {
    echo "No hay registros <br>";
}

// Update
$sql = "UPDATE contactos_ayuda SET nombre_contacto='Hospital Veterinario' WHERE id_contacto=1";
if($conn->query($sql) === TRUE){
    echo "Registro actualizado correctamente!<br>";
} else {
    echo "Error al actualizar el registro<br>";
}

// Delete
$sql = "DELETE FROM contactos_ayuda WHERE id_contacto=1";
if($conn->query($sql) === TRUE){
    echo "Registro eliminado correctamente!<br>";
} else {
    echo "Error al eliminar el registro<br>";
}


//grupos-ayuda
// Insert
$sql = "INSERT INTO grupos_ayuda (id_grupo, nombre_grupo, tipo_asistencia, detalle_grupo, ubicacion_grupo, contacto_principal) 
        VALUES (1, 'Rescatistas CR', 'Rescate Animal', 'Grupo dedicado al rescate de animales', 'San José, Costa Rica', 'Joe Doe')";
if($conn->query($sql) === TRUE){
    echo "Registro agregado correctamente!<br>";
} else {
    echo "Error al agregar el registro<br>";
}

// Select
$sql = "SELECT * FROM grupos_ayuda";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       echo $row["id_grupo"]." ".$row["nombre_grupo"]." ".$row["tipo_asistencia"]." ".
            $row["detalle_grupo"]." ".$row["ubicacion_grupo"]." ".$row["contacto_principal"]."<br>";
    }
} else {
    echo "No hay registros <br>";
}

// Update
$sql = "UPDATE grupos_ayuda SET nombre_grupo='Rescatistas Costa Rica' WHERE id_grupo=1";
if($conn->query($sql) === TRUE){
    echo "Registro actualizado correctamente!<br>";
} else {
    echo "Error al actualizar el registro<br>";
}

// Delete
$sql = "DELETE FROM grupos_ayuda WHERE id_grupo=1";
if($conn->query($sql) === TRUE){
    echo "Registro eliminado correctamente!<br>";
} else {
    echo "Error al eliminar el registro<br>";
}

//registro-mascota
// Insert
$sql = "INSERT INTO registro_mascota (id_mascota, nombre_mascota, tipo_animal, genero_animal, 
        lugar_encontrado, foto_mascota, detalle_adopcion, acuerdo_compromiso) 
        VALUES (1, 'Luna', 'Perro', 'Hembra', 'San José Centro', 
        'ruta/foto_luna.jpg', 'Cachorra en busca de hogar', 1)";
if($conn->query($sql) === TRUE){
    echo "Registro agregado correctamente!<br>";
} else {
    echo "Error al agregar el registro<br>";
}

// Select
$sql = "SELECT * FROM registro_mascota";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       echo $row["id_mascota"]." ".$row["nombre_mascota"]." ".$row["tipo_animal"]." ".
            $row["genero_animal"]." ".$row["lugar_encontrado"]." ".$row["foto_mascota"]." ".
            $row["detalle_adopcion"]." ".$row["acuerdo_compromiso"]."<br>";
    }
} else {
    echo "No hay registros <br>";
}

// Update
$sql = "UPDATE registro_mascota SET nombre_mascota='Sol' WHERE id_mascota=1";
if($conn->query($sql) === TRUE){
    echo "Registro actualizado correctamente!<br>";
} else {
    echo "Error al actualizar el registro<br>";
}

// Delete
$sql = "DELETE FROM registro_mascota WHERE id_mascota=1";
if($conn->query($sql) === TRUE){
    echo "Registro eliminado correctamente!<br>";
} else {
    echo "Error al eliminar el registro<br>";
}


//registro-usuario

// Insert
$sql = "INSERT INTO registro_usuario (id_usuario, nombreP_usuario, correo_electronico, nombreD_usuario, contraseña) 
        VALUES (1, 'Juan Pérez', 'juan@email.com', 'juanperez', '123456')";
if($conn->query($sql) === TRUE){
    echo "Registro agregado correctamente!<br>";
} else {
    echo "Error al agregar el registro<br>";
}

// Select
$sql = "SELECT * FROM registro_usuario";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
       echo $row["id_usuario"]." ".$row["nombreP_usuario"]." ".$row["correo_electronico"]." ".
            $row["nombreD_usuario"]." ".$row["contraseña"]."<br>";
    }
} else {
    echo "No hay registros <br>";
}

// Update
$sql = "UPDATE registro_usuario SET nombreP_usuario='Juan Pablo Pérez' WHERE id_usuario=1";
if($conn->query($sql) === TRUE){
    echo "Registro actualizado correctamente!<br>";
} else {
    echo "Error al actualizar el registro<br>";
}

// Delete
$sql = "DELETE FROM registro_usuario WHERE id_usuario=1";
if($conn->query($sql) === TRUE){
    echo "Registro eliminado correctamente!<br>";
} else {
    echo "Error al eliminar el registro<br>";
}


//reportar_emergencia

