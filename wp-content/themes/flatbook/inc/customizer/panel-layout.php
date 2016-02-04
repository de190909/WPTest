<?php

/**
 *  LAYOUT / GLOBAL
 */
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_global_title_1',
    'section' => 'layout_global',
    'default' => '<h3>'.__('Preloader','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_global_display_preloader',
    'label' => __('Enable Page Preloader', 'flatbook') ,
    'section' => 'layout_global',
    'default' => '1',
    'priority' => 15
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_global_title_2',
    'section' => 'layout_global',
    'default' => '<hr><h3>'.__('Scrolltop','flatbook').'</h3>',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_global_display_scrolltop',
    'label' => __('Enable Scrolltop Button', 'flatbook') ,
    'section' => 'layout_global',
    'default' => '1',
    'priority' => 25
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_global_title_3',
    'section' => 'layout_global',
    'default' => '<hr><h3>'.__('Sections','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'layout_global_section_padding',
    'label' => __('Spacing of content sections', 'flatbook') ,
    'section' => 'layout_global',
    'default' => 100,
    'priority' => 40,
    'choices' => array(
        'min' => 10,
        'max' => 200,
        'step' => 5
    ) ,
    'output' => array(
        array(
            'element' => 'section, .section',
            'property' => 'padding-top',
            'units' => 'px'
        ),
        array(
            'element' => 'section, .section',
            'property' => 'padding-bottom',
            'units' => 'px'
        ),        
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'section, .section',
            'function' => 'css',
            'property' => 'padding-top',
            'units' => 'px'
        ),
        array(
            'element' => 'section, .section',
            'function' => 'css',
            'property' => 'padding-bottom',
            'units' => 'px'
        ),            
    )

));
/**
 *  LAYOUT / HEADER
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_header_title_1',
    'section' => 'layout_header',
    'default' => '<h3>'.__('Home Header','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'image',
    'settings' => 'layout_header_home_header_background_image',
    'label' => __('Background Image', 'flatbook') ,
    'description' => __('Optional dimensions: 2000px x 900px', 'flatbook') ,
    'section' => 'layout_header',
    'default' => get_template_directory_uri() . '/assets/img/home_header_bg.jpg',
    'priority' => 15,
    'output' => array(
        'element' => '#site-header',
        'property' => 'background-image'
    ),
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '#site-header',
        'function' => 'css',
        'property' => 'background-image'
    ),
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_header_title_2',
    'section' => 'layout_header',
    'default' => '<hr><h3>'.__('Page Header','flatbook').'</h3>',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'image',
    'settings' => 'layout_header_page_header_background_image',
    'label' => __('Background Image', 'flatbook') ,
    'description' => __('Optional dimensions: 2000px x 200px', 'flatbook') ,
    'section' => 'layout_header',
    'default' => get_template_directory_uri() . '/assets/img/page_header_bg.jpg',
    'priority' => 25,
    'output' => array(
        'element' => '#site-header.page-header',
        'property' => 'background-image'
    ),
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '#site-header.page-header',
        'function' => 'css',
        'property' => 'background-image'
    ),
));

/**
 *  LAYOUT / NAVBAR
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_navbar_title_1',
    'section' => 'layout_navbar',
    'default' => '<h3>'.__('Layout','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_navbar_display_navbar',
    'label' => __('Display Navbar', 'flatbook') ,
    'section' => 'layout_navbar',
    'default' => '1',
    'priority' => 13
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_navbar_sticky_navbar',
    'label' => __('Sticky Navbar', 'flatbook') ,
    'section' => 'layout_navbar',
    'default' => '1',
    'priority' => 15
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'layout_navbar_navbar_height',
    'label' => __('Navbar Height', 'flatbook') ,
    'section' => 'layout_navbar',
    'default' => 80,
    'priority' => 20,
    'choices' => array(
        'min' => 80,
        'max' => 120,
        'step' => 5
    ) ,
    'output' => array(
        'element' => '#site-navbar, .navbar-fixer, #site-navbar .aligner',
        'property' => 'height',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '#site-navbar, .navbar-fixer, #site-navbar .aligner',
        'function' => 'css',
        'property' => 'height',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_navbar_title_2',
    'section' => 'layout_navbar',
    'default' => '<hr><h3>'.__('Tagline','flatbook').'</h3>',
    'priority' => 25
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_navbar_display_tagline',
    'label' => __('Display Tagline', 'flatbook') ,
    'section' => 'layout_navbar',
    'default' => '1',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_navbar_title_3',
    'section' => 'layout_navbar',
    'default' => '<hr><h3>'.__('Brand','flatbook').'</h3>',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type'        => 'radio',
    'settings'     => 'layout_navbar_brand_display',
    'label' => __('Display as', 'flatbook') ,
    'section'     => 'layout_navbar',
    'default'     => 'logo-image',
    'priority'    => 40,
    'choices'     => array(
        'logo-image' =>  __( 'Image (Basic Logo)', 'flatbook' ),
        'logo-text'  => __( 'Text (Site Title)', 'flatbook' ),
    ),
) );


/**
 *  LAYOUT / FOOTER
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_footer_title_1',
    'section' => 'layout_footer',
    'default' => '<h3>'.__('Subscribe Bar','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_footer_subscribe_display',
    'label' => __('Display Footer Subscribe', 'flatbook') ,
    'section' => 'layout_footer',
    'default' => '1',
    'priority' => 15
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'layout_footer_subscribe_title',
    'label' => __('Subscribe Title', 'flatbook') ,
    'section' => 'layout_footer',
    'default' => __('Subscribe to our mailing list','flatbook'),
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'layout_footer_subscribe_code',
    'label' => __('MailChimp Code', 'flatbook') ,
    'section' => 'layout_footer',
    'default' => '#',
    'priority' => 25
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_footer_title_2',
    'section' => 'layout_footer',
    'default' => '<hr><h3>'.__('Widgets Bar','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_footer_widgets_display',
    'label' => __('Display Footer Widgets', 'flatbook') ,
    'section' => 'layout_footer',
    'default' => '0',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'layout_footer_title_3',
    'section' => 'layout_footer',
    'default' => '<hr><h3>'.__('Copyright Bar','flatbook').'</h3>',
    'priority' => 40
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_footer_copyright_display',
    'label' => __('Display Footer Copyright', 'flatbook') ,
    'section' => 'layout_footer',
    'default' => '1',
    'priority' => 45
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'layout_footer_copyright_social_icons',
    'label' => __('Display Social Icons', 'flatbook') ,
    'description' => __('If enabled, it will show the social network icons set at Customizer > General > Social Links','flatbook'),
    'section' => 'layout_footer',
    'default' => '1',
    'priority' => 50,
));
Kirki::add_field('fb', array(
    'type' => 'textarea',
    'settings' => 'layout_footer_copyright_text',
    'label' => __('Copyright Text', 'flatbook') ,
    'section' => 'layout_footer',
    'default' => __('2015 FlatBook by ErikTailor - All rights reserved.', 'flatbook') ,
    'priority' => 55,
));