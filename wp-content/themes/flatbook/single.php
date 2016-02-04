<?php
/**
 * The template for displaying all single posts.
 *
 * @package FlatBook
 */

$post_sidebar = Kirki::get_option('fb','blog_single_display_sidebar'); ?>

<?php get_header(); ?>

	<section id="primary" class="content-area <?php if( $post_sidebar ) { echo 'col-md-8'; } else { echo 'col-md-12'; } ?> blog-content">

		<main id="main" class="site-main" role="main"><?php 

			while ( have_posts() ) : the_post();

				get_template_part( 'partials/content', get_post_format() );

				if ( function_exists( 'flatbook_post_navigation' ) ) :

					flatbook_post_navigation();

				else : 

					posts_nav_link(); 

				endif;

				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;

			endwhile; ?>

		</main><!-- /#main -->
	
	</section><!-- /#primary -->

	<?php if( $post_sidebar ) { get_sidebar(); } ?>

<?php get_footer(); ?>