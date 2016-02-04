<?php
/**
 * Extra functions for the theme
 *
 * @package FlatBook
 */


/**
 * Adds custom classes to the array of body classes.
 */
function flatbook_body_classes( $classes ) {

	if ( is_multi_author() ) {

		$classes[] = 'group-blog';

	}

	return $classes;

}

add_filter( 'body_class', 'flatbook_body_classes' );


/**
 * Dynamically add column classes to footer widgets
 */
function flatbook_footer_widget_params( $params ) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'footer-widgets' ) {

        $total_widgets = wp_get_sidebars_widgets();

        $sidebar_widgets = count( $total_widgets[$sidebar_id] );

        $params[0]['before_widget'] = '<div class="col-sm-'.floor(12/$sidebar_widgets).'">' . $params[0]['before_widget'];

        $params[0]['after_widget'] = $params[0]['after_widget'] . '</div>';
    }

    return $params;

}

add_filter('dynamic_sidebar_params','flatbook_footer_widget_params'); 