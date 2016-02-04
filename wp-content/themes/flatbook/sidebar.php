<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package FlatBook
 */
?>

<?php if( is_active_sidebar('blog-sidebar') ) : ?>

	<section id="secondary" class="widget-area col-lg-3 col-lg-offset-1 col-md-4 blog-sidebar">

		<?php dynamic_sidebar('blog-sidebar'); ?>

	</section>

<?php endif; ?>
