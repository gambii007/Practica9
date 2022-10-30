<?php

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /');
    }

    //Importar la conexion
    require 'includes/config/database.php';
    $db = conectarDB();

    //Consultar
    $query = "SELECT * FROM propiedades WHERE id = ${id}";

    //Obtener Resultado
    $resultado = mysqli_query($db, $query);
    $propiedades = mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedades['titulo']; ?></h1>

        <img loading="lazy" src="/imagenes/<?php echo $propiedades['imagen']; ?>" alt="Imagen de la Propiedad">

        <div class="resumen-propiedad">
            <p class="precio"><?php $propiedades['precio'] ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedades['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedades['estacionamiento']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $propiedades['habitaciones']; ?></p>
                </li>
            </ul><!--Iconos caracteristicas-->
            <p>
                <?php echo $propiedades['descripcion']; ?>
            </p>
        </div>

    </main>

<?php 
    mysqli_close($db);
    incluirTemplate('footer');
?>