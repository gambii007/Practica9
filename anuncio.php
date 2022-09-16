<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source src="build/img/destacada.webp" type="image/webp">
            <source src="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen Destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul><!--Iconos caracteristicas-->
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus obcaecati qui praesentium ducimus sapiente numquam vel optio hic suscipit voluptatum amet, minus, exercitationem nostrum! Deserunt labore pariatur rem commodi dicta. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga alias ex sed, ducimus a quia omnis hic, repudiandae impedit accusantium temporibus neque sunt voluptatem modi ea, iure quis maxime! Nemo.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus obcaecati qui praesentium ducimus sapiente numquam vel optio hic suscipit voluptatum amet, minus, exercitationem nostrum! Deserunt labore pariatur rem commodi dicta. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga alias ex sed, ducimus a quia omnis hic, repudiandae impedit accusantium temporibus neque sunt voluptatem modi ea, iure quis maxime! Nemo.
            </p>
        </div>

    </main>

<?php incluirTemplate('footer'); ?>