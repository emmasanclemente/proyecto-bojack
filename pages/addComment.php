<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'mi-proyecto');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Extraer comentarios
$sql = "SELECT username, comment FROM comments ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los comentarios
    while($row = $result->fetch_assoc()) {
        echo "<section class='post'>";
        echo "<div class='content'>";
        echo "<h3 class='h-user'>@" . htmlspecialchars($row['username']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "</div>";
        echo "</section>";
    }
} else {
    echo "No hay comentarios aún.";
}

$conn->close();
?>
