<?php
/**
 * Customizer Panels
 *
 * @package FlatBook
 */

Kirki::add_panel('panel_general', array(
    'priority' => 10,
    'title' => __('General', 'flatbook')
));

Kirki::add_panel('nav_menus', array(
    'priority' => 20,
    'title' => __('Menus', 'flatbook') ,
));

Kirki::add_panel('panel_typography', array(
    'priority' => 30,
    'title' => __('Typography', 'flatbook')
));

Kirki::add_panel('panel_colors', array(
    'priority' => 40,
    'title' => __('Colors', 'flatbook')
));

Kirki::add_panel('panel_layout', array(
    'priority' => 50,
    'title' => __('Layout', 'flatbook')
));

Kirki::add_panel('panel_pages', array(
    'priority' => 60,
    'title' => __('Pages', 'flatbook') ,
));

