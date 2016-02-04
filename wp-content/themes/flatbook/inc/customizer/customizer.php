<?php
/**
 * FlatBook Theme Customizer.
 *
 * @package FlatBook
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function flatbook_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'flatbook_customize_register' );

function flatbook_customize_preview_js() {
    wp_enqueue_script( 'flatbook_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'flatbook_customize_preview_js' );

require get_template_directory() . '/inc/customizer/config.php';

require get_template_directory() . '/inc/customizer/panels.php';

require get_template_directory() . '/inc/customizer/sections.php';

require get_template_directory() . '/inc/customizer/panel-general.php';

require get_template_directory() . '/inc/customizer/panel-typography.php';

require get_template_directory() . '/inc/customizer/panel-colors.php';

require get_template_directory() . '/inc/customizer/panel-layout.php';

require get_template_directory() . '/inc/customizer/panel-pages.php';