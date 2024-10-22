<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <title>Bojack Horseman</title>
</head>
<body class="body-blog">
    <header class="header-index"><nav class="nav">
        <div class="contenedor-logo">
            <img src="../img/bojack-logo.png" class="logo" alt="">
        </div>
          <ul class="menu">
            <li><a href="../index.html" >HOME</a></li>
            <li><a href="../pages/blog.php" >BLOG</a></li>
            <li><a href="../pages/historia.html" >HISTORIA</a></li>
            <li><a href="../pages/personajes.html" >PERSONAJES</a></li>
            <li><a href="../pages/tu-cuenta.html" >TU CUENTA</a></li>
            <li><a href="../pages/TIENDA.html" >TIENDA </a></li>
          </ul>
        </nav></header>

    <main>
        <div class="container">
            <div id="commentSection">
                <?php
                include 'db.php';
    
                // Mostrar los comentarios de forma recursiva con una función separada
                include 'comment_functions.php';
                display_comments();  // Ahora la función está en otro archivo, más modular.
                ?>
            </div>
            <form id="commentForm" action="post_comment.php" method="POST" enctype="multipart/form-data">
                <textarea name="comentario" placeholder="Escribe tu comentario aquí..." required></textarea>
                <input type="file" name="imagen" accept="image/*">
                <button type="submit">Enviar Comentario</button>
            </form>
        </div>
    
        
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
                    <li><a href="../pages/blog.php" >BLOG</a></li>
                    <li><a href="../pages/historia.html" >HISTORIA</a></li>
                    <li><a href="../pages/personajes.html" >PERSONAJES</a></li>
                    <li><a href="../pages/tu-cuenta.html" >TU CUENTA</a></li>
                    <li><a href="../pages/tienda.html" >TIENDA </a></li>
                  </ul>
            </div>
            <div class="div">
                <a class="img-contacto"><img src="../img/ig.svg" class="img-contacto" alt="instagram"></a>
                <a class="img-contacto"> <img src="../img/wpp.svg" class="img-contacto" alt="facebook"></a>
                <a class="img-contacto"><img src="../img/tiktok.svg" class="img-contacto" alt="tiktok"></a>
            </div>
           
        
            <p>Dirrecion - Emilio Lamarca 315, Martínez</p>
            <p>Telefono - +541140853626</p>
            <p>Todos los derechos reservados - 2024</p>
        </section>
    </footer>
    <script src="../js/script.js"></script>
    <script src="../js/script.js" >
        // Mostrar formulario de respuesta
        function showReplyForm(commentId) {
            const replyForm = document.getElementById('replyForm-' + commentId);
            if (replyForm) {
                replyForm.style.display = replyForm.style.display === 'none' ? 'block' : 'none';
            }
        }
    </script>

</body>
</html>