<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpgwebp">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="anuncio">
        </picture>

        <p class="información-meta">Escrito el: <span>20/10/2021</span>por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id semper magna. Vivamus sed turpis
                velit. Suspendisse vulputate a augue ac mollis. Aliquam condimentum, lectus eget fermentum rhoncus,
                nibh nisi porta metus, ac feugiat sapien ipsum non justo. Nulla nec orci et tortor posuere iaculis
                at quis mi. Pellentesque hendrerit rhoncus arcu, a consequat metus laoreet sed. Suspendisse lectus
                enim, dictum et fermentum fermentum, sollicitudin in diam.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id semper magna. Vivamus sed turpis
                velit. Suspendisse vulputate a augue ac mollis. Aliquam condimentum, lectus eget fermentum rhoncus,
                nibh nisi porta metus, ac feugiat sapien ipsum non justo.
            </p>
        </div>
    </main>

<?php
incluirTemplate('footer');
?>