<?php
/**
 * The header layouts used in theme
 *
 * @package FlatBook
 */

$single_header = Kirki::get_option('fb','blog_single_display_header'); ?>

<?php if( is_404() ) :  // IF 404 PAGE ?>

	<header id="site-header" class="no-header"></header>

<?php elseif( is_page_template( 'page-builder.php' ) ) : // IF BUILDER PAGE

	if( have_rows('header_builder') ) :

        while ( have_rows('header_builder') ) : the_row();

            if( get_row_layout() == 'page_header'   ){ get_template_part( 'partials/header' , 'page'   ); }

            if( get_row_layout() == 'static_header' ){ get_template_part( 'partials/header' , 'static' ); }

            if( get_row_layout() == 'slider_header' ){ get_template_part( 'partials/header' , 'slider' ); }

            if( get_row_layout() == 'signup_header' ){ get_template_part( 'partials/header' , 'signup' ); }

            if( get_row_layout() == 'form_header'   ){ get_template_part( 'partials/header' , 'form'   ); }

        endwhile;

    endif; ?>

<?php elseif( is_home() ) : // IF WORDPRESS DEFAULT HOME ?>

    <?php get_template_part( 'partials/header', 'page' ); ?>

<?php elseif( is_single() ) : // IF SINGLE POST PAGE

    if( $single_header ) { get_template_part( 'partials/header', 'page' ); } ?>

<?php else : // IF ANYTHING ELSE ?>

	<?php get_template_part( 'partials/header', 'page' ); ?>

<?php endif; ?>
