<?php
function display_comments($parent_id = null, $level = 0) {
    global $conn;

    $sql = "SELECT comentarios.id, comentarios.comentario, comentarios.imagen, comentarios.likes, usuarios.username 
            FROM comentarios 
            JOIN usuarios ON comentarios.usuario_id = usuarios.id ";
    if ($parent_id === null) {
        $sql .= "WHERE comentarios.parent_id IS NULL ";
    } else {
        $sql .= "WHERE comentarios.parent_id = ? ";
    }
    $sql .= "ORDER BY comentarios.fecha DESC";

    $stmt = $conn->prepare($sql);
    if ($parent_id !== null) {
        $stmt->bind_param('i', $parent_id);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment' style='margin-left: " . ($level * 20) . "px;'>";
        echo "<strong>" . htmlspecialchars($row['username']) . "</strong>";
        echo "<p>" . htmlspecialchars($row['comentario']) . "</p>";
        if ($row['imagen']) {
            echo "<a href='" . htmlspecialchars($row['imagen']) . "' target='_blank'><img src='" . htmlspecialchars($row['imagen']) . "' alt='Imagen del comentario' class='comment-image'></a>";
        }

        echo "<div class='comment-actions'>";
        echo "<button class='reply-btn' onclick='showReplyForm(" . $row['id'] . ")'>&#128172;</button>";
        echo "</div>";

        echo "<form id='replyForm-" . $row['id'] . "' action='post_comment.php' method='POST' class='reply-form' style='display:none;'>";
        echo "<input type='hidden' name='parent_id' value='" . $row['id'] . "'>";
        echo "<textarea name='comentario' placeholder='Escribe tu respuesta aquí...' required></textarea>";
        echo "<button type='submit'>Enviar Respuesta</button>";
        echo "</form>";

        display_comments($row['id'], $level + 1);
        echo "</div>";
    }
}
?>