<?php 

//Includes 
require get_template_directory() . '/includes/widgets.php';

function laboratorio_setup() {
    // Imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');

}

add_action('after_setup_theme' , 'laboratorio_setup');




function laboratorio_menu() {
    // Registrar menú dinámico
    register_nav_menu('menu-principal', __('Menu Principal', 'laboratorio'));
}

// Hook de init, una vez que arranca WordPress ejecutamos la función
add_action('init', 'laboratorio_menu');


function laboratorio_scripts_styles() { 

    wp_enqueue_style('app.css' , get_template_directory_uri() . '/build/css/app.css' , array() , '1.0.0' , 'all');

    wp_enqueue_style('font' ,"https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap");

    wp_enqueue_style('icons' ,"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
    
    if(is_page('Trabajos Realizados')) { 
        wp_enqueue_style('lightboxcss' , get_template_directory_uri() . '/build/css/lightbox.min.css' , array() , '2.11.4');
        
        wp_enqueue_script('lightboxjs' , get_template_directory_uri() . '/build/js/lightbox.min.js' , array() , '2.11.4' , true);
        wp_enqueue_script('jquery');

   
    }
   
    if(is_front_page()) { 

        wp_enqueue_style('swiper-css' , 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' , array() , '11.0.7');

         wp_enqueue_script('swiper-js' , 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js' , array() , '11.0.7' , true);

         wp_enqueue_script('anime' , 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js' , array() , '2.0.2' , true);
    }

  
  //Archivos js 
  wp_enqueue_script('archivojs' , get_template_directory_uri() . '/build/js/app.js' , array() , true );

  

 
}
// Hook para registrar archivos de javaScript y css
add_action('wp_enqueue_scripts' , 'laboratorio_scripts_styles');



// Activar Widgets 
function laboratorio_widgets() { 
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id'  =>  'sidebar_1',
        'before_widget' => '<div class="sidebar__widget">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="heading">', 
        'after_title' => '</h3>',
    ));

    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id'  =>  'sidebar_2',
        'before_widget' => '<div class="sidebar__widget">',
        'after_widget'  => '</div>',
        'before_title' => '<h3 class="heading">', 
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init' , 'laboratorio_widgets');


/** Imagenes dinamicas */

function laboratorio_hero_imagen() {

    // Obtener el ID de la imagen  de inicio 
     $front_id = get_option('page_on_front');

    // id de imagen 
    $id_imagen = get_field('hero_imagen' , $front_id);

    // Obtener la ruta de la imagen 
    $imagen = wp_get_attachment_image_src($id_imagen , 'full')[0];

    

    // Crear css
    wp_register_style('custom' , false);
    wp_enqueue_style('custom');

    $imagen_destacada_css ="

        .hero-principal {
            background: linear-gradient(rgb(0 0 0 / .7) , rgb(0 0 0 / .7)) , url($imagen);
            background-size: cover;
            background-position: center center;

        }
    
    ";

    // Inyectar codigo css 
    wp_add_inline_style('custom', $imagen_destacada_css);

    

}

add_action('init' , 'laboratorio_hero_imagen');

?>