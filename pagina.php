
<?php 

while (have_posts()) : the_post(); ?>
    
    <h1 class="heading"><?php the_title(); ?></h1>


        
            <?php
            if(has_post_thumbnail()) {
                the_post_thumbnail();
            }
             ?>

            <div class="content">
                <?php the_content(); ?>
            </div>
            

        </div>
        
    
<?php endwhile; ?>