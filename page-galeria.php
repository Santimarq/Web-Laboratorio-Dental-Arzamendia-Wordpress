<?php
/*
* Template Name: Galería
*/


get_header(); ?>

<main class="contenedor py-5 ">

<?php
while (have_posts()) : the_post(); ?>
    
    <h1 class="heading-nosotros"><?php the_title(); ?></h1>
    <p class="texto-trabajos">En nuestra galería de imágenes podrás ver un poco de
         los trabajos que realizamos a distintos clientes en el laboratorio</p>

  <?php
   //Obenter galeria
   $galeria = get_post_gallery( get_the_ID(), false);

   //Iterar sobre galeria y obtener los ids
    $galeria_imagenes_id = explode("," , $galeria['ids']); 

   ?> 

        <ul class="galeria-imagenes">

            <?php 
                foreach($galeria_imagenes_id as $id) {
                    $imagen_grande = wp_get_attachment_image_src($id , 'large')[0];
                    $imagen_full = wp_get_attachment_image_src($id , 'full')[0];

                    ?> 
                        <li>
                     <a data-lightbox="galeria" href="<?php echo$imagen_full ?>">
                        <img src="<?php echo $imagen_grande ?>" alt="imagen galeria">
                            </a>
                        </li>

                    <?php
                    
                }

            ?>


        </ul>

   <?php 
        
        ?>
    
<?php endwhile; ?>
</main>
<?php
get_footer(); 
