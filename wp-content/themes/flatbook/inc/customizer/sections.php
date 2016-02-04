<?php
/**
 * Customizer Sections
 *
 * @package FlatBook
 */

/**
 *	GENERAL
 */
Kirki::add_section('title_tagline', array(
    'priority' => 10,
    'title' => __('Site Identity', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_general'
));
Kirki::add_section('site_logos', array(
    'priority' => 20,
    'title' => __('Site Logos', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_general'
));
Kirki::add_section('general_socials', array(
    'priority' => 30,
    'title' => __('Social Links', 'flatbook') ,
    'description' => __('Enter the social network profile URL for each service below, that you would like to showcase.', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_general'
));
Kirki::add_section('static_front_page', array(
    'priority' => 30,
    'title' => __('Static Front Page', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_general'
));

/**
 *	TYPOGRAPHY
 */
Kirki::add_section('typography_fonts', array(
    'priority' => 10,
    'title' => __('Fonts', 'flatbook') ,
    'description' => __('In this section, you can select up to 3 different font families from the Google Fonts collection to load and enqueue in the theme for specific elements and define the character subset to use.', 'flatbook'),
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_global', array(
    'priority' => 20,
    'title' => __('Global', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_header', array(
    'priority' => 30,
    'title' => __('Header', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_navbar', array(
    'priority' => 40,
    'title' => __('Navbar', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_footer', array(
    'priority' => 50,
    'title' => __('Footer', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_headings', array(
    'priority' => 60,
    'title' => __('Headings', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_quotes', array(
    'priority' => 70,
    'title' => __('Blockquotes', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));
Kirki::add_section('typography_buttons', array(
    'priority' => 80,
    'title' => __('Buttons', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_typography'
));

/**
 *	COLORS
 */
Kirki::add_section('colors_global', array(
    'priority' => 10,
    'title' => __('Global', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_colors'
));
Kirki::add_section('colors_header', array(
    'priority' => 20,
    'title' => __('Header', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_colors'
));
Kirki::add_section('colors_navbar', array(
    'priority' => 30,
    'title' => __('Navbar', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_colors'
));
Kirki::add_section('colors_footer', array(
    'priority' => 40,
    'title' => __('Footer', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_colors'
));
Kirki::add_section('colors_headings', array(
    'priority' => 50,
    'title' => __('Headings', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_colors'
));




/**
 *	LAYOUT
 */
Kirki::add_section('layout_global', array(
    'priority' => 10,
    'title' => __('Global', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_layout'
));
Kirki::add_section('layout_header', array(
    'priority' => 20,
    'title' => __('Header', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_layout'
));
Kirki::add_section('layout_navbar', array(
    'priority' => 30,
    'title' => __('Navbar', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_layout'
));
Kirki::add_section('layout_content', array(
    'priority' => 40,
    'title' => __('Content', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_layout'
));
Kirki::add_section('layout_footer', array(
    'priority' => 50,
    'title' => __('Footer', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_layout'
));

/**
 *	PAGES
 */
Kirki::add_section('blog_page', array(
    'priority' => 10,
    'title' => __('Blog (Posts Page)', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_pages',
));
Kirki::add_section('blog_single', array(
    'priority' => 20,
    'title' => __('Single Post', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_pages',
));
Kirki::add_section('error_page', array(
    'priority' => 30,
    'title' => __('404 Error', 'flatbook') ,
    'capability' => 'edit_theme_options',
    'panel' => 'panel_pages',
));

/**
 *  CUSTOM CSS
 */
Kirki::add_section('custom_css', array(
    'priority' => 200,
    'title' => __('Custom Css', 'flatbook') ,
    'capability' => 'edit_theme_options',
));

Kirki::add_field('fb', array(
    'type'        => 'code',
    'settings'    => 'custom_css_code',
    'label'       => __( 'Custom Css', 'flatbook' ),
    'description' => __( 'Add your additional custom Css rules below. Note that these rules will overwrite the default theme styles.', 'flatbook' ),
    'section'     => 'custom_css',
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        'language' => 'css',
        'theme'    => 'eclipse',
        'height'   => 500,
    ),

) );