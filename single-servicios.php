<?php  

    get_header();
?>


    <main class="contenedor py-3 sidebar">
        <section class="sidebar__contenido"> 
        <?php  
            get_template_part('template-parts/pagina');
        ?>
        </section>

      <?php 
            get_sidebar('servicios');
        ?>

        

    </main>





<?php 

    get_footer();
?>