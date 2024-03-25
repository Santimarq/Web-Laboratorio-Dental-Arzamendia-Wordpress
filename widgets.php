<?php

if(!defined('ABSPATH')) die();

class Laboratorio_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'laboratorio_widget',
			esc_html__( 'Laboratorio Servicios', 'laboratorio' ), 
			array( 'description' => esc_html__( 'Agrega las servicios como Widget', 'laboratorio' ), )
		);
	}

	public function widget( $args, $instance ) {
      ?> 
			<ul class="sidebar-servicios"> 

				<?php 
					 $args = array( 

						'post_type' => 'servicios',
						'posts_per_page' => $instance['cantidad']
					);
					$servicios = new WP_Query($args);
					while($servicios->have_posts()) {
						$servicios-> the_post();
						?>
							<li>
								<div class="sidebar-servicios__imagen">
										<?php the_post_thumbnail('thumbnail');  ?>
								</div>

								<div class="sidebar-servicio">
									<a href="<?php the_permalink(); ?>"> 
									<h3><?php  the_title(); ?></h3>
									</a>
								</div>
								

								<p class="border"></p>
							</li>


						<?php
					}

					wp_reset_postdata();


				?>



			</ul>

		<?php
	}

    	public function form( $instance ) {
	$cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] :
	 esc_html('Cuantos servicios deseas mostrar');
	 ?> 


	 	<p>
			<label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>">
			
			<?php esc_attr_e('¿Cuantas clases deaseas mostrar?') ?>
		
		</label>
	
		

			<input 
			class="widefat" 
			id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
			name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>"
			type="number"
			value="<?php esc_attr($cantidad)?>"
			
			/>


		</p>

	
		<?php
   	}
	   
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = (!empty($new_instance['cantidad'])) ? 
		sanitize_text_field($new_instance['cantidad']) : '';
		return $instance;

	}
} 

function laboratorio_registrar_widget() {
    register_widget( 'Laboratorio_Clases_Widget' );
}
add_action( 'widgets_init', 'laboratorio_registrar_widget' );