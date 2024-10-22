<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi-proyecto";
$conexion = mysqli_connect("localhost", "root", "", "mi-proyecto") or die("No se pudo conectar al servidor");
$conn = new mysqli($servername, $username, $password, $mi-proyecto);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>