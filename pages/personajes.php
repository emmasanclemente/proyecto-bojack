<?php
// Incluimos el archivo de datos con los personajes.
include 'data.php';

// Verificamos si se ha enviado una solicitud de búsqueda a través de AJAX.
if (isset($_GET['ajax_search'])) {
    $search = strtolower(trim($_GET['ajax_search']));
    $results = [];

    // Buscamos personajes que coincidan con la búsqueda.
    foreach ($characters as $character) {
        if (strpos(strtolower($character['name']), $search) !== false) {
            $results[] = $character['name'];
        }
    }
    
    // Enviamos los resultados como JSON.
    header('Content-Type: application/json');
    echo json_encode($results);
    exit;
}

// Código original para manejar la búsqueda en el formulario POST.
$search = '';
$results = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = strtolower(trim($_POST['search']));
    foreach ($characters as $character) {
        if (strpos(strtolower($character['name']), $search) !== false) {
            $results[] = $character;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../style/personajes.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Bojack Horseman</title>
   
</head>
<body class="body-blog">
    <header class="header-index">
        <nav class="nav">
            <div class="contenedor-logo">
                <img src="../img/bojack-logo.png" class="logo" alt="">
            </div>
            <ul class="menu">
                <li><a href="../index.html">HOME</a></li>
                <li><a href="../pages/creacion.php">CREACION</a></li>
                <li><a href="../pages/historia.html">HISTORIA</a></li>
                <li><a href="../pages/personajes.html">PERSONAJES</a></li>
                <li><a href="../pages/login.php">TU CUENTA</a></li>
                <li><a href="../pages/tienda.html">TIENDA</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div class="container">
            <h1 class="h-blog">Personajes</h1>
                <div class="search-box">
                    <form method="post" action="">
                        <input type="text" id="search-input" name="search" placeholder="Buscar personaje..." value="<?php echo htmlspecialchars($search); ?>" required>
                        <input type="submit" value="Buscar">
                    </form>
                    <div id="suggestions-box" class="suggestions-box"></div>
                </div>

                <div class="results">
                  
                    <?php if (!empty($results)): ?>
                        
                            <?php foreach ($results as $result): ?>
                                <li><a href="#<?php echo $result['id']; ?>"><?php echo htmlspecialchars($result['name']); ?></a></li>
                            <?php endforeach; ?>
                        
                    
                    <?php endif; ?>
                </div>

               
                <?php foreach ($characters as $character): ?>
                    <div class="character" id="<?php echo $character['id']; ?>">
                        <img src="../img/<?php echo $character['image']; ?>" alt="<?php echo $character['name']; ?>">
                        <div>
                            <h2><?php echo $character['name']; ?></h2>
                            <p><?php echo $character['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <section>
            <div class="div-titulos-footer">
                <div>
                  
            <h5 class="contacto">Contacto </h5>
                </div>
            <img src="../img/bojack-logo.png" alt="" class="png-footer ">
            </div>
            <div>
                <ul class="menu-footer">
                    <li><a href="../index.html" >HOME</a></li>
                    <li><a href="../pages/creacion.html" >CREACION</a></li>
                    <li><a href="../pages/historia.html" >HISTORIA</a></li>
                    <li><a href="../pages/personajes.php" >PERSONAJES</a></li>
                    <li><a href="../pages/login.php" >TU CUENTA</a></li>
                    <li><a href="../pages/tienda.html" >TIENDA </a></li>
                  </ul>
            </div>
            <div>
                <a class="img-contacto"><img src="../img/ig.svg" class="img-contacto" alt="instagram"></a>
                <a class="img-contacto"> <img src="../img/wpp.svg" class="img-contacto" alt="facebook"></a>
                <a class="img-contacto"><img src="../img/tiktok.svg" class="img-contacto" alt="tiktok"></a>
            </div>
           
     
            <p>Dirrecion - Emilio Lamarca 315, Martínez</p>
            <p>Telefono - +541140853626</p>
            <p>Todos los derechos reservados - 2024</p>
        </section>
    </footer>
</body>
</html>
