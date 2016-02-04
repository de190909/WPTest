<?php

add_action('widgets_init', 'register_extend_archives_widget');

function register_extend_archives_widget() {
	unregister_widget('WP_Widget_Archives');
	register_widget('Extend_Archives_Widget');
}

class Extend_Archives_Widget extends WP_Widget_Archives {

	function widget( $args, $instance ) {
		$c = ! empty( $instance['count'] ) ? '1' : '0';
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Archives' ) : $instance['title'], $instance, $this->id_base );
		echo $args['before_widget'];
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
		<ul><?php

			wp_get_archives( apply_filters( 'widget_archives_args', array(
				'type'            => 'monthly',
				'show_post_count' => $c
			) ) ); ?>

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
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'count' => 1 ) );
		$title = sanitize_text_field( $instance['title'] );
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<p>
			<input class="checkbox" type="checkbox"<?php checked( $instance['count'] ); ?> id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" /> <label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Show post counts'); ?></label>
		</p>
		<?php
	}

}