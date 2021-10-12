<?php
require 'includes/funciones.php';

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce más sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="build/img/nosotros.webp" type="image/webp">
                    <source src="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

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
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id semper magna. Vivamus sed turpis
                    velit. Suspendisse vulputate a augue ac mollis. Aliquam condimentum, lectus eget fermentum rhoncus,
                    nibh nisi porta metus, ac feugiat sapien ipsum non justo. Nulla nec orci et tortor posuere iaculis
                    at quis mi. Pellentesque hendrerit rhoncus arcu, a consequat metus laoreet sed. Suspendisse lectus
                    enim, dictum et fermentum fermentum, sollicitudin in diam.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id semper magna. Vivamus sed turpis
                    velit. Suspendisse vulputate a augue ac mollis. Aliquam condimentum, lectus eget fermentum rhoncus,
                    nibh nisi porta metus, ac feugiat sapien ipsum non justo. Nulla nec orci et tortor posuere iaculis
                    at quis mi. Pellentesque hendrerit rhoncus arcu, a consequat metus laoreet sed. Suspendisse lectus
                    enim, dictum et fermentum fermentum, sollicitudin in diam.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id semper magna. Vivamus sed turpis
                    velit. Suspendisse vulputate a augue ac mollis. Aliquam condimentum, lectus eget fermentum rhoncus,
                    nibh nisi porta metus, ac feugiat sapien ipsum non justo. Nulla nec orci et tortor posuere iaculis
                    at quis mi. Pellentesque hendrerit rhoncus arcu, a consequat metus laoreet sed. Suspendisse lectus
                    enim, dictum et fermentum fermentum, sollicitudin in diam.
                </p>
            </div>
        </div>
    </section>

<?php
include 'includes/templates/footer.php';
incluirTemplate('footer');
?>