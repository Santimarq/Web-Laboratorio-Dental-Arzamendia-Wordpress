<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php  wp_head(); ?>
</head>
<body>  
    
   

    <header class="header"> 
        <div class="contenedor header__barra">

         <div class="header__logo">
            <a href="<?php echo site_url('/') ; ?>"> 
         <img src="<?php echo get_template_directory_uri(); ?>/build/img/logo-principal-removebg-preview.png" alt="logo laboratorio arzamendia" >
         </a>
        </div>

        <div class="menu-mobile"> 
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
         <path d="M4 6l16 0" />
        <path d="M4 12l16 0" />
        <path d="M4 18l16 0" />
    </svg>
        </div>


        <div class="contenedor-menu"> 
         <?php 

            $args = array(
                'theme-location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'navegacion'


            );

            wp_nav_menu($args);

        ?>
            </div>

        </div> <!--barra --->
    </header>

    <?php  if(is_front_page()) { ?>

            <div class="hero-principal"> 

                <div class="hero-principal__contenido contenedor"> 
                <h1 class="hero-principal__heading  ml12"> <?php the_field('texto_principal_hero');?> </h1>

               <p class="text-center hero-principal__texto"><?php the_field('texto_encabezado_hero');?></p> 
                </div>
            </div>

    <?php }?>