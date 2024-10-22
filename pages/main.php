<?php
// Recibiendo los datos del formulario
$nombre = $_POST['fullname'];
$apellido = $_POST['lastname']; // Asumiendo que tienes un campo 'lastname' en el formulario
$email = $_POST['email'];
$contrasena = $_POST['password'];

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "mi-proyecto") or die("No se pudo conectar al servidor");


// Consulta SQL
$consulta = "INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$contrasena')";

// Ejecutando la consulta y verificando errores
if (mysqli_query($conexion, $consulta)) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . mysqli_error($conexion); 
}


mysqli_close($conexion);
?>
