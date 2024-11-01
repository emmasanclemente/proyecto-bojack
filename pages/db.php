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

// Manejar el envío del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanear la entrada
    $usuario = htmlspecialchars(trim($_POST["usuario"])); // Asegúrate de que el campo del usuario esté en el formulario
    $comentario = htmlspecialchars(trim($_POST["comment"]));

    // Insertar el comentario en la base de datos
    $sql = "INSERT INTO comentarios (usuario, comentario) VALUES ('$usuario', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        // Redireccionar para evitar el reenvío del formulario
        header("Location: " . $_SERVER['PHP_SELF']);
        exit; // Asegúrate de incluir exit después de header
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Consulta para obtener los comentarios
$result = $conn->query("SELECT usuario, comentario FROM comentarios ORDER BY id DESC");

?>

