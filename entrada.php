<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoración de tu hogar</h1>

        <picture>
            <source src="build/img/destacada2.webp" type="image/webp">
            <source src="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen Destacada">
        </picture>

        <p class="informacion-meta">Escrito el <span> 14/09/22</span> por <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus obcaecati qui praesentium ducimus sapiente numquam vel optio hic suscipit voluptatum amet, minus, exercitationem nostrum! Deserunt labore pariatur rem commodi dicta. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga alias ex sed, ducimus a quia omnis hic, repudiandae impedit accusantium temporibus neque sunt voluptatem modi ea, iure quis maxime! Nemo.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus obcaecati qui praesentium ducimus sapiente numquam vel optio hic suscipit voluptatum amet, minus, exercitationem nostrum! Deserunt labore pariatur rem commodi dicta. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga alias ex sed, ducimus a quia omnis hic, repudiandae impedit accusantium temporibus neque sunt voluptatem modi ea, iure quis maxime! Nemo.
            </p>
        </div>

    </main>

<?php incluirTemplate('footer'); ?>