<?php
// Recibiendo los datos del formulario
$nombre = $_POST['fullname'];
$apellido = $_POST['lastname']; 
$email = $_POST['email'];
$contrasena = $_POST['password'];

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "mi-proyecto") or die("No se pudo conectar al servidor");

// Consulta SQL
$consulta = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$contrasena')";
if (mysqli_query($conexion, $consulta)) {
    // Si el registro es exitoso, redirige a login.php
    header("Location: login.php");
    exit(); // Asegura que el script se detenga aquí
} else {
    echo "Error en la consulta SQL: " . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>
