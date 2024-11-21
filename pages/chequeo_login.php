<?php
session_start();

$host = "localhost";
$dbname = "mi-proyecto";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$email = $_POST['email'];
$contrasena = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    $_SESSION['usuario_id'] = $user['id'];
    $_SESSION['nombre'] = $user['nombre'];
    $_SESSION['apellido'] = $user['apellido'];

    header("Location: historia-privada.php");
    exit();
} else {
    header("Location: ../pages/login.php?error=1");
    exit();
}

mysqli_close($conn);
?>