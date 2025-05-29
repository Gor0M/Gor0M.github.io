<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "comercializadora");

// Verifica conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Si se envió el formulario, guardar los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $cant = intval($_POST['cant_disponible']);

    // Insertar o actualizar si el ID ya existe
    $sql = "INSERT INTO productos ($id, nombre, descripcion, CantDisponible)
        VALUES ('$nombre', '$descripcion', $cant)
        ON DUPLICATE KEY UPDATE
            nombre = VALUES(nombre),
            descripcion = VALUES(descripcion),
            CantDisponible = VALUES(CantDisponible)";


    if (!$conexion->query($sql)) {
        die("Error al guardar: " . $conexion->error);
    }

}

?>