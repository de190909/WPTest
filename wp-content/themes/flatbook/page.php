<?php
/**
 * The template for displaying pages.
 *
 * @package FlatBook
 */

get_header();

	while ( have_posts() ) : the_post();

		the_content();

		if ( comments_open() || get_comments_number() ) : 

			comments_template(); 

		endif;

	endwhile;

get_footer(); ?>