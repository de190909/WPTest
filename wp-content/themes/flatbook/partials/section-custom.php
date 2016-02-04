<?php
/**
 * The custom section partial for the Page Builder
 *
 * @package FlatBook
 */


// Section Header
flatbook_section_header( 'section-custom' );

// Section Content
the_sub_field( 'custom_content' );

// Section Footer
flatbook_section_footer(); ?>