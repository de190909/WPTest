<?php

add_action('widgets_init', 'register_extend_recent_comments_widget');

function register_extend_recent_comments_widget() {
	unregister_widget('WP_Widget_Recent_Comments');
	register_widget('Extend_Recent_Comments_Widget');
}

class Extend_Recent_Comments_Widget extends WP_Widget_Recent_Comments {

	function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;
		$output = '';
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Comments' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number )
			$number = 5;
		$comments = get_comments( apply_filters( 'widget_comments_args', array(
			'number'      => $number,
			'status'      => 'approve',
			'post_status' => 'publish'
		) ) );
		$output .= $args['before_widget'];
		if ( $title ) {
			$output .= $args['before_title'] . $title . $args['after_title'];
		}
		$output .= '<ul id="recentcomments">';
		if ( is_array( $comments ) && $comments ) {
			$post_ids = array_unique( wp_list_pluck( $comments, 'comment_post_ID' ) );
			_prime_post_caches( $post_ids, strpos( get_option( 'permalink_structure' ), '%category%' ), false );
			foreach ( (array) $comments as $comment ) {
				$title = get_the_title( $comment->comment_post_ID );
				$output .= '<li class="recentcomments"><i class="fa fa-comments">&nbsp;</i> ';
				$output .= sprintf( _x( '%1$s on %2$s', 'widgets' ),
					'<span class="comment-author-link"><strong> ' . get_comment_author_link( $comment ) . '</strong></span>',
					'<br><a href="' . esc_url( get_comment_link( $comment ) ) . '">' . $title . '</a>'
				);
				$output .= '</li>';
			}
		}
		$output .= '</ul>';
		$output .= $args['after_widget'];
		echo $output;
	}

}