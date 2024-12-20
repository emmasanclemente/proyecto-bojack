
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
    <header class="header-index">
        <nav class="nav">
        <div class="contenedor-logo">
            <img src="../img/bojack-logo.png" class="logo" alt="">
        </div>
          <ul class="menu">
            <li><a href="../index.html" >HOME</a></li>
            <li><a href="../pages/creacion.html" >CREACION</a></li>
            <li><a href="../pages/historia.html" >HISTORIA</a></li>
            <li><a href="../pages/personajes.html" >PERSONAJES</a></li>
            <li><a href="../pages/login.html" >TU CUENTA</a></li>
            <li><a href="../pages/TIENDA.html" >TIENDA </a></li>
          </ul>
        </nav>
    </header>
        <main>
        <div class="login-container">
        <h1>Regístrate</h1>
        <p>Ya tenes cuenta? <a href="../pages/login.html" class="register-link">Inicia Sesion</a></p>

        <form action="../pages/main.php" method="post">
            <label for="fullname">NOMBRE</label>
            <input type="text" id="fullname" name="fullname" placeholder="" required>

            <label for="lastname">APELLIDO</label>
            <input type="text" id="lastname" name="lastname" placeholder="" required>


            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" placeholder="hello@reallygreatsite.com" required>


            <label for="password">CONTRASEÑA</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="button">INICIAR</button>
        </form>

       
    </div>
    <div>
        <img src="../img/bojack-lentes.png" alt="">
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
                    <li><a href="../pages/creacion.html" >CREACION</a></li>
                    <li><a href="../pages/historia.html" >HISTORIA</a></li>
                    <li><a href="../pages/personajes.php" >PERSONAJES</a></li>
                    <li><a href="../pages/login.html" >TU CUENTA</a></li>
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