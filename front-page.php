<?php  

    get_header();
?>  

    


    <div class="inicio__bienvenida contenedor py-3">

            <h2 class="heading"> <?php the_field('encabezado_bienvenida');  ?></h2>

            <p class="inicio__texto"> <?php the_field('texto_bienvenida') ?></p>

    </div>


    <section class="areas"> 

            <div class="area">
                    <?php 
                     $area_1 = get_field('area_1');
                    ?>

          
             <img src="<?php echo esc_attr( $area_1['imagen']['sizes']['medium_large']); ?>" 
             alt="Imagen <?php echo esc_attr($area_1['texto']);?>">
             <p class=""> <?php echo esc_html($area_1['texto']);  ?> </p>
                    
            </div>

            <div class="area">
            <?php 
                     $area_2 = get_field('area_2');
                    ?>

           
             <img src="<?php echo esc_attr( $area_2['imagen']['sizes']['medium_large']); ?>" 
             alt="Imagen <?php echo esc_attr($area_2['texto']);?>">
             <p class=""> <?php echo esc_html($area_2['texto']);  ?> </p>

            </div>

            <div class="area">
            <?php 
                     $area_3 = get_field('area_3');
                    ?>

           
             <img src="<?php echo esc_attr( $area_3['imagen']['sizes']['medium_large']); ?>" 
             alt="Imagen <?php echo esc_attr($area_3['texto']);?>">
             <p class=""> <?php echo esc_html($area_3['texto']);  ?> </p>

            </div>

            <div class="area">

            <?php 
                     $area_4 = get_field('area_4');
                    ?>

         
             <img src="<?php echo esc_attr( $area_4['imagen']['sizes']['medium_large']); ?>" 
             alt="Imagen <?php echo esc_attr($area_4['texto']);?>">
             <p class=""> <?php echo esc_html($area_4['texto']);  ?> </p>

            </div>


    </section>

        


    <main class="contenido-centrado-inicio py-3 ">

        <h2 class="heading">Nuestros Servicios</h2>

        <ul class="servicios__grid servicios-inicio ">
        <?php 

        $args = array( 

            'post_type' => 'servicios',
            'posts_per_page' => 4 ,
            
            
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


    <div class="btn">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Nuestros Servicios')));?>">Ver todos los servicios</a>
         </div>
        

    </main>

     <section class="py-3 contenedor valores">    

            <h2 class="valores__heading">Nuestros Valores y Compromiso</h2>
           <!--  <p class="valores__parrafo">Los pilares de nuestra identidad</p> -->

         <div class="valores__grid">

            <div class="colum">
            <img src="<?php echo get_template_directory_uri(); ?>/build/img/protesico-blanco.png" alt="icon">
            <h3>Servicio Personalizado</h3>
            <p class="text-center">Te brindamos el servicio que mejor se adapte
                 a tus necesidades ya sea en el campo analógico o en el digital.</p>
            </div>

            <div class="colum">
            <img src="<?php echo get_template_directory_uri(); ?>/build/img/grupo.png" alt="icon">
            <h3>Un Gran Equipo</h3>
            <p class="text-center">Laboratorio dental arzamendia está formado por
                 grandes profesionales del sector de mecánica dental y diseño digital dental .</p>
            </div>


            <div class="colum">
            <img src="<?php echo get_template_directory_uri(); ?>/build/img/instrumentos.png" alt="icon">
            <h3>Mejores Materiales</h3>
            <p class="text-center">Trabajamos con  los mejores materiales del mercado para que los productos 
                que salgan del laboratorio tengan una calidad excepcional.</p>

            </div>




         </div> <!--- grid -->
        

    </section> 

    <section class="trabajos">


    <h2 class="trabajos__heading text-center">Trabajos que realizamos en el laboratorio</h2>
            <div class="swiper"> 
            <div class="swiper-wrapper"> 
            <?php 
            $args = array( 
                'post_type' => 'trabajos',
                'posts_per_page' => 4,
            );
            $trabajos = new WP_Query($args);
            while($trabajos->have_posts()) {
                $trabajos->the_post();
            ?>
            
            

            <div class="swiper-slide trabajos__contenido "> 
                <blockquote class="trabajos__titulo">
                    <?php the_title(); ?>
                </blockquote>
                <div class="trabajos__imagen">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                </div>
                      

                

            
            <?php 
            }
            wp_reset_postdata();
            ?>
                </div>
                </div>

              <div class="trabajos-btn">
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Trabajos Realizados')));?>">Ver más trabajos</a>
         </div> 
                 
</section>


<section class=" contenido-centrado-inicio py-3 blog-inicio">
    <h2 class="blog-inicio__heading">Nuestro Blog</h2> 
    <p class="text-center parrafo-blog">Aprende con nosotros sobre las ultimas tendencias sobre mecánica dental</p>

            <ul class="blog">

                <?php  
                    $args = array( 

                        'post_type' => 'post',
                        'post_per_page' => 4

                    );

                    $blog = new WP_Query($args);
                    while($blog->have_posts()) {
                        $blog->the_post();

                        get_template_part('template-parts/blog'); 
                    }

                    wp_reset_postdata();
                
                
                ?>

            </ul>

</section>






<?php 

    get_footer();
?>
       