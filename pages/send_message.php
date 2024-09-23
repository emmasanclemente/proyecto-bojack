<?php
// Conexión a MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

// Preparar la consulta SQL para insertar los datos en la tabla 'mensajes'
$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
