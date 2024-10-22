<?php
include 'db.php';

$query = $conn->prepare("SELECT comentarios.*, usuarios.username FROM comentarios JOIN usuarios ON comentarios.usuario_id = usuarios.id ORDER BY comentarios.fecha DESC");
$query->execute();
$result = $query->get_result();

$comments = array();

while ($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

echo json_encode($comments);
?>