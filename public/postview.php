<?php

function load_mw_patreon_thanks_pub() {
	// register and load the widget
	register_widget( 'mw_patreon_thanks_pub' );
}
add_action( 'widgets_init', 'load_mw_patreon_thanks_pub' );

// Create the widget
class mw_patreon_thanks_pub extends WP_Widget {

	function __construct() {
		parent::__construct(
			'mw_patreon_thanks_pub', // Base ID of widget
			'Thank You!', // Widget Name
			// Widget Options
			array(
				'description' => 'Patreon Thanker, but the widget for front-end.',
				'addWC-classnames'=> ''
			)
		);
	}

	// Widget FRONT-END
	public function widget( $args, $instance ) {
		$mwpt_category = get_option( 'mwpt_category' );

		$cats = get_the_category(); // returns array of category objs
		if ( ! empty( $cats ) && !is_home() ) {
			for ( $i=0; $i < sizeof( $cats ); $i++ ) {
				if ( esc_html( $cats[$i]->cat_ID ) == $mwpt_category ) {
					wp_enqueue_script( 'mwpt-public', plugin_dir_url( __FILE__ ) . '/partials/script.js?' . time() );
					wp_enqueue_style( 'mwpt-public', plugin_dir_url( __FILE__ ) . '/partials/style.css?' . time() );

					echo $args['before_widget'];

					if (!empty($instance['title'])) {
						$title = apply_filters( 'widget_title', $instance['title'] );
						echo $args['before_title'] . $title . $args['after_title'];
					}
					include_once( 'partials/public.php' );

					echo $args['after_widget'];
				}
			}
		}
	}

	// Updating widget replacing old instance with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

?>

