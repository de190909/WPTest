<?php

add_action('widgets_init', 'register_extend_recent_posts_widget');

function register_extend_recent_posts_widget() {
	unregister_widget('WP_Widget_Recent_Posts');
	register_widget('Extend_Recent_Posts_Widget');
}

class Extend_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts','flatbook') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;

		$args = array( 
			'posts_per_page' => $number, 
			'no_found_rows' => true, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => true, 
			'meta_key' => '_thumbnail_id'
		);
					
		$r = new WP_Query( apply_filters('widget_posts_args', $args) );
		if( $r->have_posts() ) :
			
			echo $before_widget;
			if( $title ) echo $before_title . $title . $after_title; ?>
			<ul class="list-unstyled">
				<?php while( $r->have_posts() ) : $r->the_post(); ?>				
				<li>
					<a class="avatar" href="<?php the_permalink(); ?>"><?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( array(64,64) );
						} else {
							echo 'no thumbnails..';
						} ?>
						<i class="fa fa-link"></i>
					</a>
					<a class="title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php $s = substr(the_title('','',FALSE),0,20);
						echo $s; if (strlen($s) > 19){ echo '...'; } ?>
					</a>
					<span class="time"><?php the_time( 'Y F d'); ?></span>
				<?php endwhile; ?>
			</ul>
			 
			<?php
			echo $after_widget;
		
		wp_reset_postdata();
		
		endif;
	}
}