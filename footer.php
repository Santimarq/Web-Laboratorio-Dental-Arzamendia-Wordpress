<footer class="footer">
    <div class="footer__contenido contenedor">
        <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/build/img/logo-principal-removebg-preview.png"" alt="logotipo laboratorio dental">
        </div>

        
        <?php 

    $args = array(
    'theme-location' => 'menu-principal',
    'container' => 'nav',
    'container_class' => 'navegacion'

    );

    wp_nav_menu($args);

    ?>
    </div>

    <p class="footer__copy">Desarrollado por &copy; 
        <a href="https://www.instagram.com/webbuilderss/" target="_blank">Web Builders</a> <?php date('Y')?> </p>
</footer>

<?php wp_footer();  ?>
    
</body>
</html>