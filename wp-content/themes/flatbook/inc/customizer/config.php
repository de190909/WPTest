<?php
/**
 * Customizer Config
 *
 * @package FlatBook
 */

/**
 * Customizer default configuration
 */
function flatbook_customize_config($config) {
    $config['url_path'] = get_template_directory_uri() . '/inc/customizer/kirki/';
    $config['description'] = 'FlatBook is a beautiful clean & minimal responsive ebook & app selling landing page theme featuring a trendy but unique flat design style. FlatBook suits perfectly every business or individuals who would like to showcase their ebook with a sleek onepage landing page, in a sophisticated eye-catching way.';
    $config['width'] = '18%';
    $config['i18n'] = array(
        'background-color'      => __( 'Background Color', 'flatbook' ),
        'background-image'      => __( 'Background Image', 'flatbook' ),
        'no-repeat'             => __( 'No Repeat', 'flatbook' ),
        'repeat-all'            => __( 'Repeat All', 'flatbook' ),
        'repeat-x'              => __( 'Repeat Horizontally', 'flatbook' ),
        'repeat-y'              => __( 'Repeat Vertically', 'flatbook' ),
        'inherit'               => __( 'Inherit', 'flatbook' ),
        'background-repeat'     => __( 'Background Repeat', 'flatbook' ),
        'cover'                 => __( 'Cover', 'flatbook' ),
        'contain'               => __( 'Contain', 'flatbook' ),
        'background-size'       => __( 'Background Size', 'flatbook' ),
        'fixed'                 => __( 'Fixed', 'flatbook' ),
        'scroll'                => __( 'Scroll', 'flatbook' ),
        'background-attachment' => __( 'Background Attachment', 'flatbook' ),
        'left-top'              => __( 'Left Top', 'flatbook' ),
        'left-center'           => __( 'Left Center', 'flatbook' ),
        'left-bottom'           => __( 'Left Bottom', 'flatbook' ),
        'right-top'             => __( 'Right Top', 'flatbook' ),
        'right-center'          => __( 'Right Center', 'flatbook' ),
        'right-bottom'          => __( 'Right Bottom', 'flatbook' ),
        'center-top'            => __( 'Center Top', 'flatbook' ),
        'center-center'         => __( 'Center Center', 'flatbook' ),
        'center-bottom'         => __( 'Center Bottom', 'flatbook' ),
        'background-position'   => __( 'Background Position', 'flatbook' ),
        'background-opacity'    => __( 'Background Opacity', 'flatbook' ),
        'ON'                    => __( 'ON', 'flatbook' ),
        'OFF'                   => __( 'OFF', 'flatbook' ),
        'all'                   => __( 'All', 'flatbook' ),
        'cyrillic'              => __( 'Cyrillic', 'flatbook' ),
        'cyrillic-ext'          => __( 'Cyrillic Extended', 'flatbook' ),
        'devanagari'            => __( 'Devanagari', 'flatbook' ),
        'greek'                 => __( 'Greek', 'flatbook' ),
        'greek-ext'             => __( 'Greek Extended', 'flatbook' ),
        'khmer'                 => __( 'Khmer', 'flatbook' ),
        'latin'                 => __( 'Latin', 'flatbook' ),
        'latin-ext'             => __( 'Latin Extended', 'flatbook' ),
        'vietnamese'            => __( 'Vietnamese', 'flatbook' ),
        'serif'                 => _x( 'Serif', 'font style', 'flatbook' ),
        'sans-serif'            => _x( 'Sans Serif', 'font style', 'flatbook' ),
        'monospace'             => _x( 'Monospace', 'font style', 'flatbook' ),
    );    
    return $config;
}
add_filter( 'kirki/config', 'flatbook_customize_config' );

/**
 * Style the customizer with css
 */
function flatbook_customize_styles() { 
    ?>
    <style>
    .customize-help-toggle { display: none; }
    .customize-control h3 { font-size: 18px !important; letter-spacing: -0.5px; }
    .customize-control-image .attachment-thumb { width: auto; }
    .customize-control-image .attachment-media-view { background: #eee; padding: 20px; text-align: center; }
    .customize-control-number .fs-number-element { height: 30px !important; border: 0 !important; }
    .customize-control-text input { height: 30px !important; }
    .customize-control input[type="checkbox"] { height: 22px !important; }
    </style>
    <?php
}
add_action('admin_head', 'flatbook_customize_styles');
add_action('customize_controls_print_styles', 'flatbook_customize_styles');

/**
 * Create custom config option name
 */
Kirki::add_config( 'fb', array(
    'capability' => 'edit_theme_options',
    'option_type' => 'option',
    'option_name' => 'fb',
));