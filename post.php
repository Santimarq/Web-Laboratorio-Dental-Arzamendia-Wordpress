
<?php 

while (have_posts()) : the_post(); ?>
    
    <h1 class="heading"><?php the_title(); ?></h1>


        
            <?php
            if(has_post_thumbnail()) {
                the_post_thumbnail('medium' ,array('class' => 'imagen-blog'));
            }
             ?>

             <div class="meta-flex">

             
             <p class="meta">
            <span>Por:</span>
             <?php echo get_the_author_meta('display_name'); ?> 
           </p>
           
           <p class="meta">
            <span>Fecha:</span>
             <?php echo the_time(get_option('date_format'));?> 
           </p>
           
           </div>

            <div class="content">
                <?php the_content(); ?>
            </div>

        </div>
        
    
<?php endwhile; ?>