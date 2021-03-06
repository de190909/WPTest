<?php
/**
 * Template part for link post format.
 *
 * @package FlatBook
 */

$post_footer = Kirki::get_option('fb','blog_page_display_post_footer');
$post_header = Kirki::get_option('fb','blog_page_display_post_header');
$readmore = Kirki::get_option('fb','blog_read_more_text');
$featured_link = get_field('featured_link');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post post-format-link wow fadeInUp'); ?>>

	<?php if( !is_singular() && is_sticky() ) : ?>
		<strong class="post-sticky"><?php _e('Featured','flatbook'); ?></strong>
	<?php endif; ?>

	<?php if( !is_singular() && $post_header && has_post_thumbnail() || is_singular() && has_post_thumbnail() ) : ?>
		<header class="entry-header">
			<?php if( !is_singular() ) { 
			echo '<a class="overlay" href="'.$featured_link.'" target="_blank">'; 
			echo '<i class="post-icon fa fa-link fa-5x"></i>';
			echo '<span class="post-spec">'.$featured_link.' &rarr;'.'</span>';
			} the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive' ) ); ?>
			<?php if( !is_singular() ) { echo '</a>'; } ?>
		</header>
	<?php endif; ?>	

	<div class="entry-content">
		<?php if( is_singular() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<hr><?php the_content(); ?>
		<?php else : ?>
			<h3 class="entry-title"><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h3>
			<?php the_content( sprintf( __( $readmore.'%s','flatbook'),' &rarr;' ) ); ?>
		<?php endif; ?>
	</div><!--/.entry-content-->

	<?php if( !is_singular() && $post_footer || is_singular() ) : ?>
		<footer class="entry-footer">
			<?php if ( 'post' === get_post_type() ) { flatbook_post_metas(); } ?>
		</footer><!--/.entry-footer-->
	<?php endif; ?>

</article><!-- #post-## -->