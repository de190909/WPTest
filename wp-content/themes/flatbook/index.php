<?php
/**
 * The main template file.
 *
 * @package FlatBook
 */

$blog_sidebar = Kirki::get_option('fb','blog_page_display_sidebar'); 
$posts_per_page = Kirki::get_option('fb','blog_posts_per_page'); ?>

<?php get_header(); ?>

	<section id="primary" class="content-area <?php if( $blog_sidebar ) { echo 'col-md-8'; } else { echo 'col-md-12'; } ?> blog-content">

		<main id="main" class="site-main" role="main"><?php

			query_posts( 'posts_per_page='.$posts_per_page );

			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'partials/content', get_post_format() );

				endwhile;

				if( function_exists( 'flatbook_post_pagination' ) ) :

					flatbook_post_pagination(); 

				else : 

					wp_link_pages();

				endif;

			else :

				get_template_part( 'partials/content', 'none' );

			endif; 

			wp_reset_query(); ?>

		</main><!-- /#main -->

	</section><!-- /#primary -->

	<?php if( $blog_sidebar ) { get_sidebar(); } ?>

<?php get_footer(); ?>