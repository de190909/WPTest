<?php

add_action('widgets_init', 'register_extend_categories_widget');

function register_extend_categories_widget() {
	unregister_widget('WP_Widget_Categories');
	register_widget('Extend_Categories_Widget');
}

class Extend_Categories_Widget extends WP_Widget_Categories {

	function widget( $args, $instance ) {
		static $first_dropdown = true;
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Categories' ) : $instance['title'], $instance, $this->id_base );
		$c = ! empty( $instance['count'] ) ? '1' : '0';
		echo $args['before_widget'];
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		$cat_args = array(
			'orderby'      => 'name',
			'show_count'   => $c
		); ?>
		<ul><?php
		$cat_args['title_li'] = '';
		wp_list_categories( apply_filters( 'widget_categories_args', $cat_args ) ); ?>
		</ul><?php
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = wp_parse_args( (array) $new_instance, array( 'title' => '', 'count' => 1 ) );
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['count'] = $new_instance['count'] ? 1 : 0;		
		return $instance;
	}

	function form( $instance ) {
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'count' => 1) );
		$title = sanitize_text_field( $instance['title'] );
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>

		<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>"<?php checked( $instance['count'] ); ?> />
		<label for="<?php echo $this->get_field_id('count'); ?>"><?php _e( 'Show post counts' ); ?></label></p>

		<?php
	}

}