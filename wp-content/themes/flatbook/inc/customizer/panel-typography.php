<?php

/**
 *	TYPOGRAPHY / FONTS
 */

Kirki::add_field('fb', array(
    'type' => 'select',
    'setting' => 'typography_base_font_family',
    'label' => __('Base Font Family', 'flatbook'),
    'section' => 'typography_fonts',
    'default' => 'Lato',
    'priority' => 10,
    'choices' => Kirki_Fonts::get_font_choices() ,
    'output' => array(
        'element' => 'body',
        'property' => 'font-family'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => 'body',
        'function' => 'css',
        'property' => 'font-family'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'setting' => 'typography_headings_font_family',
    'label' => __('Headings Font Family', 'flatbook'),
    'section' => 'typography_fonts',
    'default' => 'Roboto Slab',
    'priority' => 20,
    'choices' => Kirki_Fonts::get_font_choices() ,
    'output' => array(
        'element' => 'h1, h2, h3, h4, h5, h6, .h1, section .section-header .section-title, .section .section-header .section-title, .counter-item .counter-value, .tablet-menu .title, .countdown-time, .h2, .h3, .h4, .h5, .h6, .footer-widgets .widget-title, .btn',
        'property' => 'font-family'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => 'h1, h2, h3, h4, h5, h6, .h1, section .section-header .section-title, .section .section-header .section-title, .counter-item .counter-value, .tablet-menu .title, .countdown-time, .h2, .h3, .h4, .h5, .h6, .footer-widgets .widget-title, .btn',
        'function' => 'css',
        'property' => 'font-family'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'setting' => 'typography_blockquotes_font_family',
    'label' => __('Quotes Font Family', 'flatbook'),
    'section' => 'typography_fonts',
    'default' => 'Georgia',
    'priority' => 30,
    'choices' => Kirki_Fonts::get_font_choices() ,
    'output' => array(
        'element' => 'blockquote',
        'property' => 'font-family'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => 'blockquote',
        'function' => 'css',
        'property' => 'font-family'
    )
));
/*
Kirki::add_field('fb', array(
    'type' => 'multicheck',
    'settings' => 'typography_font_subsets',
    'label' => __('Font Subsets', 'flatbook') ,
    'section' => 'typography_fonts',
    'default' => 'latin',
    'priority' => 40,
    'choices' => Kirki_Fonts::get_google_font_subsets() ,
    'output' => array(
        'element' => 'body',
        'property' => 'font-subset'
    )
));
*/




/**
 *	TYPOGRAPHY / GLOBAL
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_global_title_1',
    'section' => 'typography_global',
    'default' => '<h3>'.__('Body','flatbook').'</h3>',
    'priority' => 5
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'global_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 16,
    'priority' => 10,
    'choices' => array(
        'min' => 10,
        'max' => 20,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'body',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => 'body',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'global_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 0,
    'priority' => 15,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'body',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'body',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'global_line_height',
    'label' => __('Line Height', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 1.8,
    'priority' => 20,
    'choices' => array(
        'min' => 0,
        'max' => 5,
        'step' => 0.1
    ) ,
    'output' => array(
        'element' => 'body',
        'property' => 'line-height',
        'units' => 'em'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'body',
            'function' => 'css',
            'property' => 'line-height',
            'units' => 'em'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'global_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_global',
    'default' => '400',
    'priority' => 25,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'body',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'body',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'global_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 'none',
    'priority' => 30,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'body',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'body',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_global_title_2',
    'section' => 'typography_global',
    'default' => '<hr><h3>'.__('Links','flatbook').'</h3>',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'global_links_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 'inherit',
    'priority' => 40,
    'choices' => array(
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'a',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'a',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'global_links_text_decoration',
    'label' => __('Text Decoration', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 'none',
    'priority' => 45,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'underline' => __('Underline', 'flatbook') ,
    ) ,
    'output' => array(
        'element' => 'a',
        'property' => 'text-decoration'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'a',
            'function' => 'css',
            'property' => 'text-decoration'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'global_links_hover_text_decoration',
    'label' => __('Text Decoration on Hover', 'flatbook') ,
    'section' => 'typography_global',
    'default' => 'none',
    'priority' => 46,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'underline' => __('Underline', 'flatbook') ,
    ) ,
    'output' => array(
        'element' => 'a:hover',
        'property' => 'text-decoration'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'a:hover',
            'function' => 'css',
            'property' => 'text-decoration'
        )
    )
));




/**
 *	TYPOGRAPHY / HEADER
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_header_title_1',
    'section' => 'typography_header',
    'default' => '<h3>'.__('Header Title','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_header_title_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_header',
    'default' => 36,
    'priority' => 15,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.header-title',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.header-title',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_header_title_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_header',
    'default' => 0,
    'priority' => 20,
    'choices' => array(
        'min' => - 10,
        'max' => 10,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => '.header-title',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.header-title',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_header_title_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_header',
    'default' => '400',
    'priority' => 25,
    'choices' => array(
        '300' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.header-title',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.header-title',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_header_title_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_header',
    'default' => 'none',
    'priority' => 30,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.header-title',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.header-title',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_header_title_2',
    'section' => 'typography_header',
    'default' => '<hr><h3>'.__('Page Title','flatbook').'</h3>',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_header_page_title_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_header',
    'default' => 36,
    'priority' => 40,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.page-title',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.page-title',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_header_page_title_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_header',
    'default' => 0,
    'priority' => 45,
    'choices' => array(
        'min' => - 10,
        'max' => 10,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => '.page-title',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.page-title',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_header_page_title_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_header',
    'default' => '400',
    'priority' => 50,
    'choices' => array(
        '300' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.page-title',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.page-title',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_header_page_title_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_header',
    'default' => 'none',
    'priority' => 55,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.page-title',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.page-title',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));



/**
 *	TYPOGRAPHY / NAVBAR
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_navbar_title_1',
    'section' => 'typography_navbar',
    'default' => '<h3>'.__('Menu Links','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_navbar_menu_links_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 16,
    'priority' => 15,
    'choices' => array(
        'min' => 10,
        'max' => 20,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_menu_links_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => '700',
    'priority' => 20,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'function' => 'css',
        'property' => 'font-weight'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_menu_links_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 'none',
    'priority' => 25,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li > a',
        'function' => 'css',
        'property' => 'text-transform'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_navbar_title_2',
    'section' => 'typography_navbar',
    'default' => '<hr><h3>'.__('Sub-Menu Links','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_navbar_submenu_links_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 16,
    'priority' => 35,
    'choices' => array(
        'min' => 10,
        'max' => 20,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.navbar .navbar-nav > li ul li a',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li ul li a',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_submenu_links_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => '400',
    'priority' => 40,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.navbar .navbar-nav > li ul li a',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li ul li a',
        'function' => 'css',
        'property' => 'font-weight'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_submenu_links_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 'none',
    'priority' => 45,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.navbar .navbar-nav > li ul li a',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar .navbar-nav > li ul li a',
        'function' => 'css',
        'property' => 'text-transform'
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_navbar_title_3',
    'section' => 'typography_navbar',
    'default' => '<hr><h3>'.__('Site Title','flatbook').'</h3>',
    'priority' => 50
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_navbar_site_title_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 20,
    'priority' => 55,
    'choices' => array(
        'min' => 10,
        'max' => 30,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.navbar-brand',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar-brand',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_navbar_site_title_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 0,
    'priority' => 60,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => '.navbar-brand',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar-brand',
        'function' => 'css',
        'property' => 'letter-spacing',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_site_title_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => '700',
    'priority' => 65,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.navbar-brand',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar-brand',
        'function' => 'css',
        'property' => 'font-weight'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_site_title_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 'uppercase',
    'priority' => 70,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.navbar-brand',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.navbar-brand',
        'function' => 'css',
        'property' => 'text-transform'
    ) ,
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_navbar_title_4',
    'section' => 'typography_navbar',
    'default' => '<hr><h3>'.__('Tagline','flatbook').'</h3>',
    'priority' => 75
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_navbar_tagline_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 14,
    'priority' => 80,
    'choices' => array(
        'min' => 10,
        'max' => 18,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.tagline',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.tagline',
        'function' => 'css',
        'property' => 'font-size',
        'units' => 'px'
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_tagline_font_style',
    'label' => __('Font Style', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 'none',
    'priority' => 85,
    'choices' => array(
        'normal' => __('Normal', 'flatbook') ,
        'italic' => __('Italic', 'flatbook') ,
    ) ,
    'output' => array(
        'element' => '.tagline',
        'property' => 'font-style'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.tagline',
        'function' => 'css',
        'property' => 'font-style'
    ) ,
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_navbar_tagline_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_navbar',
    'default' => 'none',
    'priority' => 90,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.tagline',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.tagline',
        'function' => 'css',
        'property' => 'text-transform'
    ) ,
));



/**
 *	TYPOGRAPHY / HEADINGS
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_headings_title_1',
    'section' => 'typography_headings',
    'default' => '<h3>'.__('H1','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h1_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 36,
    'priority' => 15,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'h1, .h1',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h1, .h1',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h1_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 0,
    'priority' => 20,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'h1, .h1',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h1, .h1',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h1_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => '400',
    'priority' => 25,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h1, .h1',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h1, .h1',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h1_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 'none',
    'priority' => 30,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h1, .h1',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h1, .h1',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_headings_title_2',
    'section' => 'typography_headings',
    'default' => '<hr><h3>'.__('H2','flatbook').'</h3>',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h2_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 32,
    'priority' => 40,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'h2, .h2',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h2, .h2',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h2_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 0,
    'priority' => 45,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'h2, .h2',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h2, .h2',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h2_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => '400',
    'priority' => 50,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h2, .h2',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h2, .h2',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h2_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 'none',
    'priority' => 55,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h2, .h2',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h2, .h2',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_headings_title_3',
    'section' => 'typography_headings',
    'default' => '<hr><h3>'.__('H3','flatbook').'</h3>',
    'priority' => 60
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h3_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 24,
    'priority' => 65,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'h3, .h3',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h3, .h3',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h3_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 0,
    'priority' => 70,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'h3, .h3',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h3, .h3',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h3_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => '400',
    'priority' => 75,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h3, .h3',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h3, .h3',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h3_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 'none',
    'priority' => 80,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h3, .h3',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h3, .h3',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_headings_title_4',
    'section' => 'typography_headings',
    'default' => '<hr><h3>'.__('H4','flatbook').'</h3>',
    'priority' => 85
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h4_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 20,
    'priority' => 90,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'h4, .h4',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h4, .h4',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h4_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 0,
    'priority' => 95,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'h4, .h4',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h4, .h4',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h4_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => '400',
    'priority' => 100,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h4, .h4',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h4, .h4',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h4_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 'none',
    'priority' => 105,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h4, .h4',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h4, .h4',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_headings_title_5',
    'section' => 'typography_headings',
    'default' => '<hr><h3>'.__('H5','flatbook').'</h3>',
    'priority' => 110
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h5_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 18,
    'priority' => 110,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'h5, .h5',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h5, .h5',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h5_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 0,
    'priority' => 115,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'h5, .h5',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h5, .h5',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h5_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => '400',
    'priority' => 120,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h5, .h5',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h5, .h5',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h5_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 'none',
    'priority' => 125,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h5, .h5',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h5, .h5',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_headings_title_6',
    'section' => 'typography_headings',
    'default' => '<hr><h3>'.__('H6','flatbook').'</h3>',
    'priority' => 130
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h6_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 16,
    'priority' => 135,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'h6, .h6',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h6, .h6',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_headings_h6_letter_spacing',
    'label' => __('Letter Spacing', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 0,
    'priority' => 140,
    'choices' => array(
        'min' => - 5,
        'max' => 5,
        'step' => 0.5
    ) ,
    'output' => array(
        'element' => 'h6, .h6',
        'property' => 'letter-spacing',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h6, .h6',
            'function' => 'css',
            'property' => 'letter-spacing',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h6_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => '400',
    'priority' => 145,
    'choices' => array(
        'lighter' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h6, .h6',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h6, .h6',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_headings_h6_text_transform',
    'label' => __('Text Transform', 'flatbook') ,
    'section' => 'typography_headings',
    'default' => 'none',
    'priority' => 150,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'h6, .h6',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'h6, .h6',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));




/**
 *	TYPOGRAPHY / FOOTER
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_footer_title_1',
    'section' => 'typography_footer',
    'default' => '<h3>'.__('Widget Title','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_footer_widget_title_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_footer',
    'default' => 16,
    'priority' => 15,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.footer-widgets .widget-title',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.footer-widgets .widget-title',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_footer_widget_title_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_footer',
    'default' => '700',
    'priority' => 20,
    'choices' => array(
        '300' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.footer-widgets .widget-title',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.footer-widgets .widget-title',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_footer_widget_title_text_transform',
    'label' => __('Text Transform', 'flatbook'),
    'section' => 'typography_footer',
    'default' => 'uppercase',
    'priority' => 25,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.footer-widgets .widget-title',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.footer-widgets .widget-title',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_footer_title_2',
    'section' => 'typography_footer',
    'default' => '<hr><h3>'.__('Copyright Text','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_footer_copyright_text_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_footer',
    'default' => 16,
    'priority' => 35,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.copyright-text',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.copyright-text',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_footer_copyright_text_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_footer',
    'default' => '400',
    'priority' => 40,
    'choices' => array(
        '300' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.copyright-text',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.copyright-text',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'typography_footer_copyright_text_text_transform',
    'label' => __('Text Transform', 'flatbook'),
    'section' => 'typography_footer',
    'default' => 'none',
    'priority' => 50,
    'choices' => array(
        'none' => __('None', 'flatbook') ,
        'lowercase' => __('Lowercase', 'flatbook') ,
        'uppercase' => __('Uppercase', 'flatbook')
    ) ,
    'output' => array(
        'element' => '.copyright-text',
        'property' => 'text-transform'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.copyright-text',
            'function' => 'css',
            'property' => 'text-transform'
        )
    )
));



/**
 *	TYPOGRAPHY / BLOCKQUOTES
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_quotes_title_1',
    'section' => 'typography_quotes',
    'default' => '<h3>'.__('Quote','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'blockquotes_quote_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_quotes',
    'default' => 18,
    'priority' => 15,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'blockquote',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'blockquote',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'blockquotes_quote_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_quotes',
    'default' => '400',
    'priority' => 20,
    'choices' => array(
        '300' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'blockquote',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'blockquote',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'blockquotes_quote_font_style',
    'label' => __('Font Style', 'flatbook') ,
    'section' => 'typography_quotes',
    'default' => 'italic',
    'priority' => 25,
    'choices' => array(
        'normal' => __('Normal', 'flatbook') ,
        'italic' => __('Italic', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'blockquote',
        'property' => 'font-style'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'blockquote',
            'function' => 'css',
            'property' => 'font-style'
        )
    )
));

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_quotes_title_2',
    'section' => 'typography_quotes',
    'default' => '<hr><h3>'.__('Cite','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'blockquotes_cite_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_quotes',
    'default' => 16,
    'priority' => 35,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => 'cite',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'cite',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'blockquotes_cite_font_weight',
    'label' => __('Font Weight', 'flatbook') ,
    'section' => 'typography_quotes',
    'default' => '400',
    'priority' => 40,
    'choices' => array(
        '300' => __('Light', 'flatbook') ,
        '400' => __('Normal', 'flatbook') ,
        '700' => __('Bold', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'cite',
        'property' => 'font-weight'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'cite',
            'function' => 'css',
            'property' => 'font-weight'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'select',
    'settings' => 'blockquotes_cite_font_style',
    'label' => __('Font Style', 'flatbook') ,
    'section' => 'typography_quotes',
    'default' => 'italic',
    'priority' => 45,
    'choices' => array(
        'normal' => __('Normal', 'flatbook') ,
        'italic' => __('Italic', 'flatbook')
    ) ,
    'output' => array(
        'element' => 'cite',
        'property' => 'font-style'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => 'cite',
            'function' => 'css',
            'property' => 'font-style'
        )
    )
));



/**
 *	TYPOGRAPHY / BUTTONS
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_buttons_title_1',
    'section' => 'typography_buttons',
    'default' => '<h3>'.__('Xl Button','flatbook').'</h3>',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_buttons_xl_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_buttons',
    'default' => 24,
    'priority' => 15,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.btn-xl',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-xl',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_buttons_title_2',
    'section' => 'typography_buttons',
    'default' => '<hr><h3>'.__('Lg Button','flatbook').'</h3>',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_buttons_lg_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_buttons',
    'default' => 20,
    'priority' => 25,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.btn-lg',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-lg',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_buttons_title_3',
    'section' => 'typography_buttons',
    'default' => '<hr><h3>'.__('Md Button','flatbook').'</h3>',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_buttons_md_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_buttons',
    'default' => 18,
    'priority' => 35,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.btn-md',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-md',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_buttons_title_4',
    'section' => 'typography_buttons',
    'default' => '<hr><h3>'.__('Sm Button','flatbook').'</h3>',
    'priority' => 40
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_buttons_sm_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_buttons',
    'default' => 16,
    'priority' => 45,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.btn-sm',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-sm',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'typography_buttons_title_5',
    'section' => 'typography_buttons',
    'default' => '<hr><h3>'.__('Xs Button','flatbook').'</h3>',
    'priority' => 50
));
Kirki::add_field('fb', array(
    'type' => 'slider',
    'setting' => 'typography_buttons_xs_font_size',
    'label' => __('Font Size', 'flatbook') ,
    'section' => 'typography_buttons',
    'default' => 16,
    'priority' => 55,
    'choices' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    ) ,
    'output' => array(
        'element' => '.btn-xs',
        'property' => 'font-size',
        'units' => 'px'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.btn-xs',
            'function' => 'css',
            'property' => 'font-size',
            'units' => 'px'
        )
    )
));