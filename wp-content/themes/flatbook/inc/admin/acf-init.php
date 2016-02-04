<?php
/**
 * Custom acf fields setup and initialization
 *
 * @package FlatBook
 */


/*
 * Sets up the local acf path
 */
function flatbook_acf_path( $path ) {
    $path = get_template_directory() . '/inc/admin/acf-pro/';
    return $path;
}
add_filter('acf/settings/path', 'flatbook_acf_path');
 
/*
 * Sets up the local acf folder
 */
function flatbook_acf_dir( $dir ) {
    $dir = get_template_directory_uri() . '/inc/admin/acf-pro/';
    return $dir;
}
add_filter('acf/settings/dir', 'flatbook_acf_dir');

/*
 * Including the base acf class and custom assets
 */
include_once( get_template_directory() . '/inc/admin/acf-pro/acf.php' );

include_once( get_template_directory() . '/inc/admin/acf-plugins.php' );

include_once( get_template_directory() . '/inc/admin/acf-custom.php' );

/*
 * Hide acf from the menu
 */
add_filter('acf/settings/show_admin', '__return_false');

/*
 * Enables the usuage of shortcodes in acf textareas
 */
function flatbook_acf_format_value( $value, $post_id, $field ) {
  $value = do_shortcode( $value );
  return $value;
}
add_filter('acf/format_value/type=textarea', 'flatbook_acf_format_value', 10, 3);



/*
// 3. customize ACF json save point
function flatbook_acf_json_save_point( $path ) {
    $path = get_template_directory() . '/inc/admin/acf-json';
    return $path;
}
add_filter('acf/settings/save_json', 'flatbook_acf_json_save_point');

// 4. customize ACF json load point
function flatbook_acf_json_load_point( $paths ) {
  unset($paths[0]);
  $paths[] = get_template_directory() . '/inc/admin/acf-json';
  return $paths; 
}
add_filter('acf/settings/load_json', 'flatbook_acf_json_load_point');
*/




// Add admin styles for acf
function flatbook_acf_admin_head() { ?>

  <style type="text/css">

    .acf-fc-layout-handle { font-size: 14px; font-weight: 600; padding: 15px !important; }

    .acf-fc-layout-handle .fc-layout-order { margin-right: 10px !important; }

    .acf-flexible-content .layout .acf-fc-layout-controlls { right: 10px; top: 15px; }

    .fa-live-preview { display: none; }

    .acf-editor-wrap .wp-editor-area { height: 200px !important; }

    .acf-postbox.seamless { margin-top: 30px !important; }

    #header-builder > .acf-label > label, #content-builder > .acf-label > label { font-size: 22px; letter-spacing: -0.5px; margin-bottom: 20px; font-weight: 300; }

    .acf-flexible-content > .no-value-message { padding: 40px; color: #aaa; font-style: italic; font-weight: 400; }

    #gallery-format-settings .acf-gallery { height: 165px !important; border: 0; }

    .acf-gallery .acf-gallery-toolbar { bottom: -2px; padding: 15px 0 5px 0; }

    .acf-gallery-attachments { padding: 0; max-height: 120px; }

    .acf-gallery .acf-gallery-main { height: 170px; }

    #gallery-format-settings {padding: 15px;}

    .format-label-acf > .acf-label > label { display: none; }

    .acf-gallery-attachment .margin { margin: 5px; border-radius: 3px; border: 0; }

  </style>

  <!-- 
  <script type="text/javascript">

    (function($){ $(document).ready(function(){

    }); })(jQuery);

  </script>
  -->

  <?php } add_action( 'acf/input/admin_head', 'flatbook_acf_admin_head' ); ?>