<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen-nosotros">
               <picture>
                    <source src="build/img/nosotros.webp" type="image/webp">
                    <source src="build/img/nosotros.jpg" type="image/nosotros.jpg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
               </picture>
            </div>

            <div class="text-nosotros">
                <blockquote>
                    25 años de Experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel necessitatibus similique, perferendis et neque aspernatur ea reiciendis consectetur laudantium possimus quae voluptatem, rem nemo qui repudiandae dignissimos culpa corporis vitae.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis vitae reiciendis earum animi repudiandae aperiam inventore esse recusandae laboriosam, molestias, ad, nulla a aut cumque officiis libero explicabo quasi? Ipsam.
                </p>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur voluptatem laboriosam sed corporis! Dolorum animi dignissimos consequatur accusantium blanditiis soluta, aperiam sed quaerat quis pariatur optio possimus est. Quaerat, magni?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, saepe obcaecati rem assumenda quos possimus eum sit laboriosam pariatur alias nisi numquam distinctio earum quidem facilis in animi! Rerum, asperiores?
                </p>
            </div>
        </div>

        <section class="contenedor seccion">
            <h1>Más Sobre nosotros</h1>
            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="Icono Seguriddad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam corporis laborum distinctio sit esse possimus ducimus, earum, ipsa laboriosam modi nostrum? Similique delectus quo minus minima porro pariatur quae. Possimus.</p>
                </div><!--.icono-->
    
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam corporis laborum distinctio sit esse possimus ducimus, earum, ipsa laboriosam modi nostrum? Similique delectus quo minus minima porro pariatur quae. Possimus.</p>
                </div><!--.icono-->
    
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam corporis laborum distinctio sit esse possimus ducimus, earum, ipsa laboriosam modi nostrum? Similique delectus quo minus minima porro pariatur quae. Possimus.</p>
                </div><!--.icono-->
            </div>
        </section>
    </main>

<?php incluirTemplate('footer'); ?>