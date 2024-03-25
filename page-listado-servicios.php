<?php
/*
* Template Name: Listado de Servicios
*/


get_header(); ?>




<main class="contenedor py-5 contenedor-fluid  servicios">

<?php  

    get_template_part('template-parts/pagina');
?> 


    <ul class="servicios__grid">
        <?php 

        $args = array( 

            'post_type' => 'servicios',
        );
        $servicios = new WP_Query($args);
        while($servicios-> have_posts()) {
            $servicios-> the_post();
       
        ?>

        <li class="servicio">
                
                 <a href="<?php the_permalink(); ?>">
                <?php  the_post_thumbnail();?>
                <div class="servicio__card"> 
                <h3 class="servicio__heading"> <?php the_title();  ?> </h3>
                </a>
                
            </div>
        </li>

        <?php 
         }
            wp_reset_postdata();
        ?>

    </ul>

  
        
</main>



<?php
get_footer(); 
?>
