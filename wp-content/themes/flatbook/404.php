<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package FlatBook
 */

$title = Kirki::get_option('fb','error_page_title');
$texts = Kirki::get_option('fb','error_page_texts'); 
$link1txt = Kirki::get_option('fb','error_page_home_link_text');  
$link2txt = Kirki::get_option('fb','error_page_custom_link_text');  
$link2url = Kirki::get_option('fb','error_page_custom_link_url');



?>

<?php get_header(); ?>

	<div id="error-content" class="text-center">

		<?php if( $title ) : ?>

			<h1 class="font-xl"><?php echo $title; ?></h1>

		<?php endif; ?>

		<?php if( $texts ) : ?>		

			<p class="lead"><?php echo $texts; ?></p>

		<?php endif; ?>

		<?php if( $link1txt ) : ?>

			<a class="btn" href="<?php echo home_url('/'); ?>">

				<?php echo '&larr; ' . $link1txt; ?>

			</a>

		<?php endif; ?>

		<?php if( $link1txt && $link2txt && $link2url ) : echo '|'; endif; ?>

		<?php if( $link2txt && $link2url ) : ?>

			<a class="btn" href="<?php echo $link2url; ?>">

				<?php echo $link2txt . ' &rarr;'; ?>

			</a>

		<?php endif; ?>

	</div><!--/.text-center-->

<?php get_footer(); ?>