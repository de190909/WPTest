<?php

/**
 *  PAGES / BLOG
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'panel_blog_title_1',
    'section' => 'blog_page',
    'default' => '<h3>'.__('Page Layout','flatbook').'</h3>',
    'priority' => 10,
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'blog_page_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '#F2ECEC',
    'priority' => 12,
    'output' => array(
        'element' => '.blog',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.blog',
        'function' => 'css',
        'property' => 'background-color'
    ) ,
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_page_display_header',
    'label' => __('Display Page Header', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '1',
    'priority' => 15,
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_page_display_sidebar',
    'label' => __('Display Blog Sidebar', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '1',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_page_display_footer_subscribe',
    'label' => __('Display Footer Subscribe', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '0',
    'priority' => 25,
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_page_display_footer_widgets',
    'label' => __('Display Footer Widgets', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '0',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type'        => 'text',
    'settings'     => 'blog_posts_per_page',
    'label'       => __( 'Posts Per Page', 'flatbook'),
    'section'     => 'blog_page',
    'default'     => 4,
    'priority'    => 33,
) );
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'panel_blog_title_2',
    'section' => 'blog_page',
    'default' => '<hr><h3>'.__('Post Layout','flatbook').'</h3>',
    'priority' => 35,
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_page_display_post_header',
    'label' => __('Display Post Header', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '1',
    'priority' => 40
));
Kirki::add_field( '', array(
    'type'        => 'radio',
    'settings'     => 'blog_entry_content_align',
    'label' => __('Text Alignment', 'flatbook') ,
    'section'     => 'blog_page',
    'default'     => 'justify',
    'priority'    => 45,
    'choices'     => array(
        'left' =>  __( 'Left', 'flatbook' ),
        'center' => __( 'Center', 'flatbook' ),
        'right' => __( 'Right', 'flatbook' ),
        'justify' => __( 'Justify', 'flatbook' ),
    ),
    'output' => array(
        'element' => '.blog .blog-post .entry-content',
        'property' => 'text-align'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.blog .blog-post .entry-content',
        'function' => 'css',
        'property' => 'text-align'
    ) ,
) );
Kirki::add_field( '', array(
    'type'        => 'text',
    'settings'     => 'blog_read_more_text',
    'label'       => __( 'Read More Text', 'flatbook'),
    'section'     => 'blog_page',
    'default'     => __('Continue Reading','flatbook'),
    'priority'    => 50,
) );
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_page_display_post_footer',
    'label' => __('Display Post Footer', 'flatbook') ,
    'section' => 'blog_page',
    'default' => '1',
    'priority' => 55,
));

/**
 *  PAGES / SINGLE
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'panel_blog_single_title_1',
    'section' => 'blog_single',
    'default' => '<h3>'.__('Page Layout','flatbook').'</h3>',
    'priority' => 10,
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'blog_single_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'blog_single',
    'default' => '#F2ECEC',
    'priority' => 12,
    'output' => array(
        'element' => '.single',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => 'single',
        'function' => 'css',
        'property' => 'background-color'
    ) ,
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_single_display_header',
    'label' => __('Display Page Header', 'flatbook') ,
    'section' => 'blog_single',
    'default' => '1',
    'priority' => 15,
));
Kirki::add_field('fb', array(
    'type'        => 'radio',
    'label' => __('Page Header Title', 'flatbook') ,
    'settings'     => 'blog_single_header_title',
    'section'     => 'blog_single',
    'default'     => 'blog-page-title',
    'priority'    => 20,
    'choices' => array(
      'blog-page-title' => __('Shows the blog page title','flatbook'),
      'single-post-title' => __('Shows the single post title','flatbook'),
    ),
) );
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_single_display_sidebar',
    'label' => __('Display Blog Sidebar', 'flatbook') ,
    'section' => 'blog_single',
    'default' => '1',
    'priority' => 25
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_single_display_footer_subscribe',
    'label' => __('Display Footer Subscribe', 'flatbook') ,
    'section' => 'blog_single',
    'default' => '0',
    'priority' => 30,
));
Kirki::add_field('fb', array(
    'type' => 'switch',
    'settings' => 'blog_single_display_footer_widgets',
    'label' => __('Display Footer Widgets', 'flatbook') ,
    'section' => 'blog_single',
    'default' => '0',
    'priority' => 35
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'panel_blog_single_title_2',
    'section' => 'blog_single',
    'default' => '<hr><h3>'.__('Post Layout','flatbook').'</h3>',
    'priority' => 40,
));
Kirki::add_field( '', array(
    'type'        => 'radio',
    'settings'     => 'blog_single_post_content_align',
    'label' => __('Post Content Align', 'flatbook') ,
    'section'     => 'blog_single',
    'default'     => 'left',
    'priority'    => 45,
    'choices'     => array(
        'left' =>  __( 'Left', 'flatbook' ),
        'center' => __( 'Center', 'flatbook' ),
        'right' => __( 'Right', 'flatbook' ),
        'justify' => __( 'Justify', 'flatbook' ),
    ),
    'output' => array(
        'element' => '.single .blog-post .entry-content',
        'property' => 'text-align'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        'element' => '.single .blog-post .entry-content',
        'function' => 'css',
        'property' => 'text-align'
    ) ,
) );


/**
 *  PAGES / 404
 */

Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'error_page_title_1',
    'section' => 'error_page',
    'default' => '<h3>'.__('Page Layout','flatbook').'</h3>',
    'priority' => 10,
));
Kirki::add_field('fb', array(
    'type' => 'color',
    'settings' => 'error_page_background_color',
    'label' => __('Background Color', 'flatbook') ,
    'section' => 'error_page',
    'default' => '#3D3F3E',
    'priority' => 15,
    'output' => array(
        'element' => '.error404',
        'property' => 'background-color'
    ) ,
    'transport' => 'postMessage',
    'js_vars' => array(
        array(
            'element' => '.error404',
            'function' => 'css',
            'property' => 'background-color'
        ) ,
    ) ,
));
Kirki::add_field('fb', array(
    'type' => 'custom',
    'settings' => 'error_page_title_2',
    'section' => 'error_page',
    'default' => '<hr><h3>'.__('404 Content','flatbook').'</h3>',
    'priority' => 20,
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'error_page_title',
    'label' => __('Heading', 'flatbook') ,
    'section' => 'error_page',
    'default' => __('Oooops...', 'flatbook') ,
    'priority' => 25,
));
Kirki::add_field('fb', array(
    'type' => 'textarea',
    'settings' => 'error_page_texts',
    'label' => __('Paragraph', 'flatbook') ,
    'section' => 'error_page',
    'default' => __('Sorry, the page you are looking for does not exist..', 'flatbook') ,
    'priority' => 30,
));

Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'error_page_home_link_text',
    'label' => __('Home Link Text', 'flatbook') ,
    'section' => 'error_page',
    'default' => __('To Homepage', 'flatbook') ,
    'priority' => 35,
));

Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'error_page_custom_link_text',
    'label' => __('Custom Link Text', 'flatbook') ,
    'section' => 'error_page',
    'default' => __('Purchase Now', 'flatbook') ,
    'priority' => 40,
));

Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'error_page_custom_link_url',
    'label' => __('Custom Link Url', 'flatbook') ,
    'section' => 'error_page',
    'default' => 'http://themeforest.net/item/flatbook-flat-ebook-selling-wordpress-theme/6023410' ,
    'priority' => 45,
));