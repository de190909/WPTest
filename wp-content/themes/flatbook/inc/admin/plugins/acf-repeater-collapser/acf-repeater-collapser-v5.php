<?php

add_action( 'acf/input/admin_enqueue_scripts', 'acf_repeater_collapser_assets', 11 );
function acf_repeater_collapser_assets() {
	wp_enqueue_script(
		'acf_repeater_collapser_admin_js',
		get_template_directory_uri().'/inc/admin/plugins/acf-repeater-collapser/js/acf_repeater_collapser_admin.js',
		array( 'jquery' ), false, true
	);
	wp_enqueue_style(
		'acf_repeater_collapser_admin_css',
		get_template_directory_uri().'/inc/admin/plugins/acf-repeater-collapser/css/acf_repeater_collapser_admin.css',
		false
	);
}