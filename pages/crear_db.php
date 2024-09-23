<?php
// Conexión a MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

// Seleccionar la base de datos
$conn->select_db($dbname);

// Crear la tabla para los mensajes del formulario
$sql = "CREATE TABLE IF NOT EXISTS mensajes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla 'mensajes' creada exitosamente<br>";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
