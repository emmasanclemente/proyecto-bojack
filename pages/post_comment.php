<?php
session_start();
include 'db.php';

if (!isset($_SESSION['usuario_id'])) {
    echo "Error: Usuario no logueado.";
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);
$parent_id = isset($_POST['parent_id']) ? intval($_POST['parent_id']) : null; 
$imagen = null;

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . time() . "_" . basename($_FILES["imagen"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validar imagen
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if ($check !== false && in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            $imagen = $target_file;
        } else {
            echo "Error al subir la imagen.";
            exit;
        }
    } else {
        echo "El archivo no es una imagen válida.";
        exit;
    }
}

$query = $conn->prepare("INSERT INTO comentarios (usuario_id, comentario, imagen, parent_id) VALUES (?, ?, ?, ?)");
$query->bind_param('issi', $usuario_id, $comentario, $imagen, $parent_id);

if ($query->execute()) {
    header("Location: foro.php");
} else {
    echo "Error al enviar el comentario.";
}
?>