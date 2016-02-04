<?php

/**
 *	GENERAL / SITE LOGOS
 */

Kirki::add_field('fb', array(
    'type' => 'image',
    'settings' => 'default_logo',
    'label' => __('Basic Logo', 'flatbook') ,
    'description' => __('Optional dimensions: 140px x 30px','flatbook'),
    'section' => 'site_logos',
    'default' => get_template_directory_uri() . '/assets/img/logo.png',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'image',
    'settings' => 'retina_logo',
    'label' => __('Retina Logo', 'flatbook') ,
    'description' => __('Double sized (2x) version of the Basic Logo.','flatbook'),
    'section' => 'site_logos',
    'default' => get_template_directory_uri() . '/assets/img/logo@2x.png',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'image',
    'settings' => 'small_logo',
    'label' => __('Small Logo', 'flatbook') ,
    'description' => __('Optional dimensions: 80px x 80px','flatbook'),
    'section' => 'site_logos',
    'default' => get_template_directory_uri() . '/assets/img/logo_sm.png',
    'priority' => 30
));
Kirki::add_field('fb', array(
    'type' => 'image',
    'settings' => 'admin_logo',
    'label' => __('Admin Logo', 'flatbook') ,
    'description' => __('Optional dimensions: 170px x 70px','flatbook'),
    'section' => 'site_logos',
    'default' => get_template_directory_uri() . '/assets/img/admin_logo.png',
    'priority' => 40
));



/**
 *	GENERAL / SOCIAL LINKS
 */

Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'behance_url',
    'default' => '',
    'label' => __('Behance', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 9
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'bitbucket_url',
    'default' => '',
    'label' => __('BitBucket', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 10
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'dribbble_url',
    'default' => '',
    'label' => __('Dribbble', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 11
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'facebook_url',
    'default' => '',
    'label' => __('Facebook', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 12
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'flickr_url',
    'default' => '',
    'label' => __('Flickr', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 13
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'github_url',
    'default' => '',
    'label' => __('GitHub', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 14
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'googleplus_url',
    'default' => '',
    'label' => __('Google+', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 15
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'instagram_url',
    'default' => '',
    'label' => __('Instagram', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 16
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'linkedin_url',
    'default' => '',
    'label' => __('LinkedIn', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 17
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'pinterest_url',
    'default' => '',
    'label' => __('Pinterest', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 18
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'reddit_url',
    'default' => '',
    'label' => __('Reddit', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 19
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'skype_url',
    'default' => '',
    'label' => __('Skype', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 20
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'tumblr_url',
    'default' => '',
    'label' => __('Tumblr', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 21
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'twitter_url',
    'default' => '',
    'label' => __('Twitter', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 22
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'vimeo_url',
    'default' => '',
    'label' => __('Vimeo', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 23
));
Kirki::add_field('fb', array(
    'type' => 'text',
    'settings' => 'youtube_url',
    'default' => '',
    'label' => __('Youtube', 'flatbook') ,
    'section' => 'general_socials',
    'priority' => 24
));