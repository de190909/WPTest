<?php
/**
 * The template for displaying archive pages
 *
 * @package FlatBook
 */

get_header(); ?>

	<section id="primary" class="content-area col-md-8 blog-content">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'partials/content', get_post_format() );

			// End the loop.
			endwhile;

			flatbook_post_pagination();

		// If no content, include the "No posts found" template.
		else :

			get_template_part( 'partials/content', 'none' );

		endif; ?>

		</main><!-- /#main -->
		
	</section><!-- /#primary -->

	<?php get_sidebar();

get_footer(); ?>