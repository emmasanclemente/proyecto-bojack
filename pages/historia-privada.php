<?php
session_start();
// Verificar si el usuario ya está logueado
if (!isset($_SESSION['usuario_id'])) {
    // Si no está logueado, redirigir al inicio de sesión
    header("Location: login.php");
    exit();
}

?>
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
            <li><a href="../pages/creacion.html" >CREACION</a></li>
            <li><a href="../pages/historia.html" >HISTORIA</a></li>
            <li><a href="../pages/personajes.php" >PERSONAJES</a></li>
            <li><a href="../pages/login.php" >TU CUENTA</a></li>
            <li><a href="../pages/TIENDA.html" >TIENDA </a></li>
            <li><a href="../pages/logout.php" class="logout" >CERRAR SESION </a></li>
          </ul>
        </nav></header>
 

    <main>
        <section class="historia">
            <div class="texto">
                <h1>Historia</h1>
                <p>BoJack Horseman sigue la vida de BoJack, un caballo antropomórfico y exestrella de televisión que lucha con la depresión y la adicción. A medida que intenta escribir su autobiografía, se enfrenta a sus relaciones fallidas con personajes como Diane, su biógrafa; Mr. Peanutbutter, su optimista amigo; y Princess Carolyn, su agente. La serie aborda temas de salud mental, fama y redención, mostrando cómo las decisiones de BoJack impactan su vida y la de quienes lo rodean. A lo largo de seis temporadas, BoJack busca encontrar su lugar en un mundo caótico, culminando en un final reflexivo sobre sus acciones y su búsqueda de significado.</p>
                <button><a href="https://www.netflix.com/search?q=BO&jbv=70300800">VER SERIE</a></button>
            </div>
            <div class="imagen">
                <img src="../img/bojack-lentes.png" alt="Imagen BoJack">
            </div>
        </section>

       <h1>Temporadas</h1>

        <section class="temporadas">
            <div class="temporada">
                <img src="https://image.tmdb.org/t/p/original/pB9L0jAnEQLMKgexqCEocEW8TA.jpg" alt="Imagen Temporada 1" class="img-t">
                <div class="info">
                    <h3>Temporada 1</h3>
                    <p>BoJack, una exestrella de la serie Horsin' Around, lucha con su fama y vacío existencial. Intenta revitalizar su carrera escribiendo una autobiografía con la ayuda de Diane, pero sus problemas de adicción y relaciones disfuncionales complican su camino hacia la redención.</p>
                </div>
            </div>

            <div class="temporada">
                <img src="https://es.web.img2.acsta.net/pictures/15/02/20/10/21/222923.jpg" alt="Imagen Temporada 2" class="img-t">
                <div class="info">
                    <h3>Temporada 2</h3>
                    <p>BoJack se enfrenta a las consecuencias de su comportamiento mientras trabaja en una película que refleja su vida. Su relación con Diane se vuelve tensa y su amistad con Mr. Peanutbutter se ve amenazada. Al final de la temporada, BoJack comienza a reconocer su necesidad de cambiar.</p>
                </div>
            </div>

            <div class="temporada">
                <img src="https://cdn.collider.com/wp-content/uploads/2018/09/bojack-horseman-season-5-poster-404x600.jpg" alt="Imagen Temporada 3" class="img-t">
                <div class="info">
                    <h3>Temporada 3</h3>
                    <p>La temporada sigue a BoJack mientras protagoniza una aclamada serie, pero la fama no lo hace feliz. Sus luchas internas y sus relaciones se deterioran. La temporada culmina en un trágico desenlace para uno de los personajes principales, lo que deja a BoJack lidiando con la culpa.</p>
                </div>
            </div>
            <div class="temporada">
                <img src="https://media.themoviedb.org/t/p/w500/lirG3udbj4dn6fQK7pWhRJC6NmW.jpg" alt="Imagen Temporada 1" class="img-t">
                <div class="info">
                    <h3>Temporada 4</h3>
                    <p>BoJack enfrenta su pasado familiar y se embarca en un viaje emocional para entender su infancia y su relación con su madre. Al mismo tiempo, intenta ser mejor amigo y figura paterna para su hija, Hollyhock. La temporada explora el crecimiento personal y las relaciones familiares.</p>
                </div>
            </div>

            <div class="temporada">
                <img src="https://puertafalsa.com/wp-content/uploads/2020/03/bojack.jpg" alt="Imagen Temporada 2" class="img-t">
                <div class="info">
                    <h3>Temporada 5</h3>
                    <p>BoJack se convierte en protagonista de una serie de éxito, pero su vida personal se desmorona. Se enfrenta a las consecuencias de su comportamiento egoísta y a la toxicidad de su entorno. La temporada concluye con una nota sombría sobre la falta de redención y la lucha continua de BoJack con sus demonios.</p>
                </div>
            </div>

            <div class="temporada">
                <img src="https://www.bolsamania.com/seriesadictos/wp-content/uploads/2015/05/20-bojack-horseman-july17.nocrop.w529.h835.jpg" alt="Imagen Temporada 3"class="img-t">
                <div class="info">
                    <h3>Temporada 6</h3>
                    <p>Dividida en dos partes, la temporada final sigue a BoJack mientras busca redención y lidiar con su pasado. Explora el impacto de sus acciones en los demás y culmina en una reflexión sobre la vida, la amistad y la posibilidad de cambio. El final ofrece una mezcla de esperanza y ambigüedad sobre el futuro de BoJack.</p>
                </div>
            </div>
        </section>

        <div class="carrusel">
            <div class="imagenes">
                <img src="https://i.redd.it/nj1h76j11ylb1.jpg" class="imagen-seccion" alt="Imagen 1">
                <img src="https://www.overlyanimated.com/wp-content/uploads/2017/11/BoJackAsexual2.jpg" class="imagen-seccion" alt="Imagen 2">
                <img src="https://i.redd.it/g8yrgq61mb8c1.jpeg" class="imagen-seccion" alt="Imagen 3">
                <img src="https://m.media-amazon.com/images/M/MV5BNmMzNzI3Y2UtNjRjZi00OTE4LTk5ZjEtMmQyMDNmMjNkYWU3XkEyXkFqcGc@._V1_.jpg"  class="imagen-seccion" alt="imagen 4">
                <img src="https://www.casaspammer.com/wp-content/uploads/2018/09/bojackhorseman5temporada.jpg" class="imagen-seccion" alt="Imagen 5">
            </div>
            <button class="nav-btn prev-btn">&#10094;</button>
            <button class="nav-btn next-btn">&#10095;</button>
        </div>
        <div class="playlist">
            <h3>pss aca abajo... escucha la playlist personal de Bojack</h3>
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2EqWTcm6BofHTrFGUEC80k?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>   </div>
         <div class="andate">
            <h3>¿Esperás encontrar algo mejor si seguís scrolleando? Buena suerte con eso</h4>
<img src="https://fcbk.su/_data/stickers/bojack_horseman/bojack_horseman_17.png" alt="">
            <button class="btn-up" id="btnUp">⬆ </button>
         </div>
        <div class="modal">
            <img class="modal-img" src="" alt="">
            <div class="close">&times;</div>
        </div>

        <script>document.addEventListener('DOMContentLoaded', function () {
            const imagenes = document.querySelectorAll('.imagen-seccion');
            const modal = document.querySelector('.modal');
            const modalImg = document.querySelector('.modal-img');
            const closeBtn = document.querySelector('.close');
            const prevBtn = document.querySelector('.prev-btn');
            const nextBtn = document.querySelector('.next-btn');
        
            let currentIndex = 0;
        
            function updateCarousel() {
                const offset = -currentIndex * 100; // Calcular el desplazamiento
                document.querySelector('.imagenes').style.transform = `translateX(${offset}%)`; // Aplicar el desplazamiento
            }
        
            function openModal() {
                modal.style.display = 'flex'; // Mostrar el modal
                modalImg.src = imagenes[currentIndex].src; // Establecer la imagen en el modal
            }
        
            // Eventos para las imágenes
            imagenes.forEach((imagen, index) => {
                imagen.addEventListener('click', function () {
                    currentIndex = index; // Guardar el índice de la imagen actual
                    openModal(); // Abrir el modal
                });
            });
        
            // Evento para el botón de cerrar el modal
            closeBtn.addEventListener('click', function () {
                modal.style.display = 'none'; // Ocultar el modal
            });
        
            // Navegación del carrusel
            prevBtn.addEventListener('click', function () {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : imagenes.length - 1; // Ir a la imagen anterior
                updateCarousel(); // Actualizar el carrusel
            });
        
            nextBtn.addEventListener('click', function () {
                currentIndex = (currentIndex < imagenes.length - 1) ? currentIndex + 1 : 0; // Ir a la imagen siguiente
                updateCarousel(); // Actualizar el carrusel
            });
        
            // Cerrar el modal al hacer clic fuera de la imagen
            modal.addEventListener('click', function () {
                modal.style.display = 'none'; 
            });
        });

     // Referencia al botón
const btnUp = document.getElementById('btnUp');

// Mostrar el botón cuando se scrollea hacia abajo
window.addEventListener('scroll', () => {
    if (window.scrollY > 2100) { 
        btnUp.classList.add('visible');
    } else {
        btnUp.classList.remove('visible');
    }
});

// Función para volver arriba
btnUp.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' 
    });
});

        </script>
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
                    <li><a href="../pages/creacion.html" > CREACION</a></li>
                    <li><a href="../pages/historia.html" >HISTORIA</a></li>
                    <li><a href="../pages/personajes.php" >PERSONAJES</a></li>
                    <li><a href="../pages/login.php" >TU CUENTA</a></li>
                    <li><a href="../pages/tienda.html" >TIENDA </a></li>
                    <li><a href="../pages/logout.php" class="logout" >CERRAR SESION </a></li>
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