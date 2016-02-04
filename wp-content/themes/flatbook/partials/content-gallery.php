<?php
/**
 * Template part for gallery post format.
 *
 * @package FlatBook
 */

$post_footer = Kirki::get_option('fb','blog_page_display_post_footer');
$post_header = Kirki::get_option('fb','blog_page_display_post_header');
$readmore = Kirki::get_option('fb','blog_read_more_text');
$images = get_field('featured_gallery');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post post-format-gallery wow fadeInUp'); ?>>

	<?php if( !is_singular() && is_sticky() ) : ?>
		<strong class="post-sticky"><?php _e('Featured','flatbook'); ?></strong>
	<?php endif; ?>

	<?php if( !is_singular() && $post_header && $images || is_singular() && $images ) : ?>
		<header class="entry-header">
			<?php if( !is_singular() ) { echo '<div class="overlay">'; } ?>
				<div class="owl-carousel owl-theme gallery-slider">
		            <?php foreach( $images as $image ) : ?>
		                <div class="item">
		                    <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		                </div>
		            <?php endforeach; ?>
				</div>
			<?php if( !is_singular() ) { echo '</div>'; } ?>
		</header><!--/.entry-header-->
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

</article><!--/#post-->

<?php if( $images ) : wp_enqueue_script('flatbook_owlcarousel_script'); ?>
	<script type="text/javascript">
		(function($) { 
			$(document).ready(function(){

				var slider 	   = $(".gallery-slider"),
					sliderNav  = $(".gallery-nav"),
					slideCount = $(".gallery-slider .item").length;

				slider.owlCarousel({
					navigation : false,
					pagination : true,
					autoPlay   : true,			
					singleItem : true,
					slideSpeed : 600,
				});

			}); 
		})(jQuery);
	</script>
<?php endif; ?>