<?php 
  
  get_header();

?>

   <main class="contenedor py-1"> 
   <h1 class="heading-blog"> Nuestro Blog </h1> 
   <p class="text-center parrafo-blog">Aprende tips con nosotros y  sobre las ultimas tendencias sobre mecánica dental</p>
    <ul class="blog">
<?php 

  // El loop de wordpress
  while(have_posts()) : the_post();
  ?>
            
   

            <?php
            
            get_template_part('template-parts/blog'); 
            
          
           ?>

           <?php
        
  endwhile;
?>
        </ul> 
  </main>
<?php 
get_footer();
?>