<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = "Usuario Anónimo"; // Cambiar para obtener el usuario autenticado si es necesario
    $comentario = $_POST["comment"];
    $fecha = date('Y-m-d H:i:s');

    $sql = "INSERT INTO comentarios (usuario, comentario, fecha) VALUES ('$usuario', '$comentario', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: blog.php"); // Redirigir a la página principal
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>