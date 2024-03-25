  <?php 
  
    get_header();

  ?>

     <main> 
<?php 

    // El loop de wordpress
    while(have_posts()) : the_post();
    ?>

    <h1 class="heading"> <?php the_title(); ?> </h1> 
    <?php

    the_content();


    endwhile;
?>

    </main>
<?php 
get_footer();
?>