<?php
/**
 * Template Name: Page Builder
 *
 * @package FlatBook
 */

get_header();

if( have_rows('content_builder') ) : 

    while ( have_rows('content_builder') ) : the_row();

        if( get_row_layout() == 'counters_section'  ){ get_template_part( 'partials/section' , 'counters' ); } 

        if( get_row_layout() == 'features_section'  ){ get_template_part( 'partials/section' , 'features' ); } 

        if( get_row_layout() == 'videos_section'    ){ get_template_part( 'partials/section' , 'videos' ); }

        if( get_row_layout() == 'samples_section'   ){ get_template_part( 'partials/section' , 'samples' ); }

        if( get_row_layout() == 'overviews_section' ){ get_template_part( 'partials/section' , 'overviews' ); }

        if( get_row_layout() == 'messages_section'  ){ get_template_part( 'partials/section' , 'messages' ); }	

        if( get_row_layout() == 'pricing_section'   ){ get_template_part( 'partials/section' , 'pricing' ); }

        if( get_row_layout() == 'author_section'    ){ get_template_part( 'partials/section' , 'author' ); }

        if( get_row_layout() == 'dropdown_section'  ){ get_template_part( 'partials/section' , 'dropdown' ); }  

        if( get_row_layout() == 'clients_section'   ){ get_template_part( 'partials/section' , 'clients' ); }

        if( get_row_layout() == 'contact_section'   ){ get_template_part( 'partials/section' , 'contact' ); }

        if( get_row_layout() == 'location_section'  ){ get_template_part( 'partials/section' , 'location' ); }
        
        if( get_row_layout() == 'custom_section'    ){ get_template_part( 'partials/section' , 'custom' ); }

    endwhile; 
        
endif;

get_footer(); ?>