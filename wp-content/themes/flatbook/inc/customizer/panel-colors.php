<?php


/**
 *	COLORS / GLOBAL
 */
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_global_title_0',
    'section' => 'colors_global',
    'default' => '<h3>'.__('Theme','flatbook').'</h3>',
    'priority' => 5
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_primary',
    'label' => __('Primary Color', 'flatbook') ,
    'description' => __('Used as the background-color of the primary buttons, section title icons, pricing table headers and faded overlay backgrounds','flatbook'),
    'section' => 'colors_global',
    'default' => '#5BC1AF',
    'priority' => 8,
    'output' => array(
        array(
            'element' => '.primary-color, .counter-value, .social-icons li > a:hover',
            'property' => 'color'
        ) ,
        array(
            'element' => '.bg-primary, .blog-post .entry-header, .footer-subscribe, .blog-sidebar .widget_tag_cloud .tagcloud > a:hover, .btn-primary, .wpcf7-form .wpcf7-submit, .tablet-scrollbar .thumb, .tablet-reader:before, .plan-price, .widget_recent_entries li .avatar',
            'property' => 'background-color'
        )
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.primary-color, .counter-value, .social-icons li > a:hover',
            'function' => 'css',
            'property' => 'color'
        ) ,
        array(
            'element' => '.bg-primary, .blog-post .entry-header, .footer-subscribe, .blog-sidebar .widget_tag_cloud .tagcloud > a:hover, .btn-primary, .wpcf7-form .wpcf7-submit, .tablet-scrollbar .thumb, .tablet-reader:before, .plan-price, .widget_recent_entries li .avatar',
            'function' => 'css',
            'property' => 'background-color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_primary_hover',
    'label' => __('Primary Color on Hover', 'flatbook') ,
    'description' => __('Used as the background-color of the primary buttons and elements with primary color at hover state','flatbook'),

    'section' => 'colors_global',
    'default' => '#40a997',
    'priority' => 9,
    'output' => array(
        array(
            'element' => '.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .wpcf7-form .wpcf7-submit:hover, .wpcf7-form .wpcf7-submit:active, .wpcf7-form .wpcf7-submit:focus',
            'property' => 'background-color'
        )
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .wpcf7-form .wpcf7-submit:hover, .wpcf7-form .wpcf7-submit:active, .wpcf7-form .wpcf7-submit:focus',
            'function' => 'css',
            'property' => 'background-color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_global_title_1',
    'section' => 'colors_global',
    'default' => '<h3><hr>'.__('Body','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_text_color',
    'label' => __('Text Color', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#999999',
    'priority' => 15,
    'output' => array(
        'element' => 'body',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'body',
            'function' => 'css',
            'property' => 'color'
        )
    )    
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_bold_color',
    'label' => __('Bold Color', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#737373',
    'priority' => 20,
    'output' => array(
        'element' => 'strong',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'strong',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_code_color',
    'label' => __('Code Color', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#5BC1AF',
    'priority' => 25,
    'output' => array(
        'element' => 'code',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'code',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_global_title_2',
    'section' => 'colors_global',
    'default' => '<hr><h3>'.__('Links','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_link_color',
    'label' => __('Link Color', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#5BC1AF',
    'priority' => 35,
    'output' => array(
        'element' => 'a',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'a',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_link_hover_color',
    'label' => __('Link Color on Hover', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#399786',
    'priority' => 40,
    'output' => array(
        'element' => 'a:hover',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'a:hover',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_global_title_3',
    'section' => 'colors_global',
    'default' => '<hr><h3>'.__('Preloader','flatbook').'</h3>',
    'priority' => 45
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_preloader_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#ffffff',
    'priority' => 50,
    'output' => array(
        'element' => '#preloader',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '#preloader',
        'function' => 'css',
        'property' => 'background-color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_global_preloader_progress_color',
    'label' => __('Progress Color', 'flatbook') ,
    'section' => 'colors_global',
    'default' => '#5BC1AF',
    'priority' => 55,
    'output' => array(
        'element' => '#preloader .spinner > div',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '#preloader .spinner > div',
        'function' => 'css',
        'property' => 'background-color'
    )
));



/**
 *	COLORS / HEADER
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_header_title_1',
    'section' => 'colors_header',
    'default' => '<h3>'.__('Header Title','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_header_title_color',
    'label' => __('Title Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => '#ffffff',
    'priority' => 15,
    'output' => array(
        'element' => '.header-title .highlight',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.header-title .highlight',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color-alpha',
    'settings' => 'colors_header_title_background_color',
    'label' => __('Title Background Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => 'rgba(0,0,0,0.25)',
    'priority' => 20,
    'output' => array(
        'element' => '.header-title .highlight',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.header-title .highlight',
        'function' => 'css',
        'property' => 'background-color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_header_text_color',
    'label' => __('Header Text Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => '#ffffff',
    'priority' => 25,
    'output' => array(
        'element' => '.header-desc',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.header-desc',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_header_title_2',
    'section' => 'colors_header',
    'default' => '<hr><h3>'.__('Page Title','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_header_page_title_color',
    'label' => __('Title Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => '#ffffff',
    'priority' => 35,
    'output' => array(
        'element' => '.page-header .page-title',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.page-header .page-title',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_header_title_3',
    'section' => 'colors_header',
    'default' => '<hr><h3>'.__('Section Title','flatbook').'</h3>',
    'priority' => 40
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_header_section_title_color',
    'label' => __('Section Title Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => '#5BC1AF',
    'priority' => 45,
    'output' => array(
        'element' => '.section-header h1',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.section-header h1',
            'function' => 'css',
            'property' => 'color'
        )
    )
));

Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_header_section_lead_color',
    'label' => __('Section Subtitle Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => '#CCC',
    'priority' => 45,
    'output' => array(
        'element' => '.section-lead',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.section-lead',
            'function' => 'css',
            'property' => 'color'
        )
    )
));

Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_header_section_divider_icon',
    'label' => __('Section Divider Icon Color', 'flatbook') ,
    'section' => 'colors_header',
    'default' => '#5BC1AF',
    'priority' => 50,
    'output' => array(
        'element' => '.section-header .divider > i',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.section-header .divider > i',
            'function' => 'css',
            'property' => 'color'
        )
    )
));


/**
 *	COLORS / NAVBAR
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_navbar_title_1',
    'section' => 'colors_navbar',
    'default' => '<h3>'.__('Navbar','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#5BC1AF',
    'priority' => 15,
    'output' => array(
        'element' => '#site-navbar',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '#site-navbar',
        'function' => 'css',
        'property' => 'background-color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_navbar_title_2',
    'section' => 'colors_navbar',
    'default' => '<hr><h3>'.__('Menu Links','flatbook').'</h3>',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_menu_link_color',
    'label' => __('Menu Link Color', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#bde6df',
    'priority' => 25,
    'output' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_menu_link_hover_color',
    'label' => __('Menu Link Color on Hover', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#ffffff',
    'priority' => 30,
    'output' => array(
        'element' => '.navbar .navbar-nav > li > a:hover',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li > a:hover',
        'function' => 'css',
        'property' => 'color'
    )
));

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_navbar_title_6',
    'section' => 'colors_navbar',
    'default' => '<hr><h3>'.__('Sub-Menu Links','flatbook').'</h3>',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_submenu_link_color',
    'label' => __('Submenu Link Color', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#999999',
    'priority' => 40,
    'output' => array(
        'element' => '.dropdown-menu > li > a',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.dropdown-menu > li > a',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_submenu_link_hover_color',
    'label' => __('Submenu Link Color on Hover', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#5BC1AF',
    'priority' => 45,
    'output' => array(
        'element' => '.dropdown-menu > li > a:hover',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.dropdown-menu > li > a:hover',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_navbar_title_4',
    'section' => 'colors_navbar',
    'default' => '<hr><h3>'.__('Site Title & Tagline','flatbook').'</h3>',
    'priority' => 50
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_site_title_color',
    'label' => __('Site Title Color', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#ffffff',
    'priority' => 55,
    'output' => array(
        'element' => '.navbar-brand',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar-brand',
        'function' => 'css',
        'property' => 'color'
    )
));

Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_navbar_tagline_color',
    'label' => __('Tagline Color', 'flatbook') ,
    'section' => 'colors_navbar',
    'default' => '#bde6df',
    'priority' => 60,
    'output' => array(
        'element' => '.navbar-tagline .tagline',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar-tagline .tagline',
        'function' => 'css',
        'property' => 'color'
    )
));


/**
 *	COLORS / FOOTER
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_footer_title_1',
    'section' => 'colors_footer',
    'default' => '<h3>'.__('Widgets Bar','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_widgets_bar_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#494C4B',
    'priority' => 15,
    'output' => array(
        'element' => '.footer-widgets',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-widgets',
        'function' => 'css',
        'property' => 'background-color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_widget_title_color',
    'label' => __('Widget Title Color', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#dbdbdb',
    'priority' => 20,
    'output' => array(
        'element' => '.footer-widgets .widget-title',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-widgets .widget-title',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_widget_link_color',
    'label' => __('Widget Link Color', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#c9cac9',
    'priority' => 25,
    'output' => array(
        'element' => '.footer-widgets .widget a',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-widgets .widget a',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_widget_link_hover_color',
    'label' => __('Widget Link Color on Hover', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#eeeeee',
    'priority' => 35,
    'output' => array(
        'element' => '.footer-widgets .widget a:hover',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-widgets .widget a:hover',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_widget_text_color',
    'label' => __('Widget Text Color', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#6c6d6c',
    'priority' => 40,
    'output' => array(
        'element' => '.footer-widgets .widget p',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-widgets .widget p',
        'function' => 'css',
        'property' => 'color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_footer_title_2',
    'section' => 'colors_footer',
    'default' => '<hr><h3>'.__('Copyright Bar','flatbook').'</h3>',
    'priority' => 45
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_copyright_bar_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#3d3f3e',
    'priority' => 50,
    'output' => array(
        'element' => '.footer-copyright',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-copyright',
        'function' => 'css',
        'property' => 'background-color'
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_footer_copyright_text_color',
    'label' => __('Copyright Text Color', 'flatbook') ,
    'section' => 'colors_footer',
    'default' => '#737373',
    'priority' => 55,
    'output' => array(
        'element' => '.footer-copyright p',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.footer-copyright p',
        'function' => 'css',
        'property' => 'color'
    )
));



/**
 *	COLORS / HEADINGS
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_headings_title_1',
    'section' => 'colors_headings',
    'default' => '<h3>'.__('Headings','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_headings_h1_color',
    'label' => __('H1 Color', 'flatbook') ,
    'section' => 'colors_headings',
    'default' => '#5BC1AF',
    'priority' => 15,
    'output' => array(
        'element' => 'h1, .h1',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h1, .h1',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_headings_h2_color',
    'label' => __('H2 Color', 'flatbook') ,
    'section' => 'colors_headings',
    'default' => '#5BC1AF',
    'priority' => 20,
    'output' => array(
        'element' => 'h2, .h2',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h2, .h2',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_headings_h3_color',
    'label' => __('H3 Color', 'flatbook') ,
    'section' => 'colors_headings',
    'default' => '#5BC1AF',
    'priority' => 25,
    'output' => array(
        'element' => 'h3, .h3',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h3, .h3',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_headings_h4_color',
    'label' => __('H4 Color', 'flatbook') ,
    'section' => 'colors_headings',
    'default' => '#5BC1AF',
    'priority' => 30,
    'output' => array(
        'element' => 'h4, .h4',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h4, .h4',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_headings_h5_color',
    'label' => __('H5 Color', 'flatbook') ,
    'section' => 'colors_headings',
    'default' => '#5BC1AF',
    'priority' => 35,
    'output' => array(
        'element' => 'h5, .h5',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h5, .h5',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_headings_h6_color',
    'label' => __('H6 Color', 'flatbook') ,
    'section' => 'colors_headings',
    'default' => '#5BC1AF',
    'priority' => 40,
    'output' => array(
        'element' => 'h6, .h6',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h6, .h6',
            'function' => 'css',
            'property' => 'color'
        )
    )
));


/**
 *	COLORS / BLOCKQUOTES
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'colors_blockquotes_title_1',
    'section' => 'colors_blockquotes',
    'default' => '<h3>'.__('Quote','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_blockquotes_quote_color',
    'label' => __('Quote Color', 'flatbook') ,
    'section' => 'colors_blockquotes',
    'default' => '#dddddd',
    'priority' => 15,
    'output' => array(
        'element' => 'blockquote, blockquote > p',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'blockquote, blockquote > p',
            'function' => 'css',
            'property' => 'color'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'colors_blockquotes_cite_color',
    'label' => __('Cite Color', 'flatbook') ,
    'section' => 'colors_blockquotes',
    'default' => '#5BC1AF',
    'priority' => 23,
    'output' => array(
        'element' => 'blockquote cite',
        'property' => 'color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'blockquote cite',
            'function' => 'css',
            'property' => 'color'
        )
    )
));