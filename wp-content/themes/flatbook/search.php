<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package FlatBook
 */

get_header(); ?>

	<section id="primary" class="content-area col-md-8 blog-content">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'partials/content', get_post_format() );

			endwhile;

			flatbook_post_pagination();

		else : 

			get_template_part( 'partials/content', 'none' );

		endif; ?>

		</main><!-- /#main -->
		
	</section><!-- /#primary -->

	<?php get_sidebar();

get_footer(); ?>