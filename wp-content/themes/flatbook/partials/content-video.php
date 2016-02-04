<?php
/**
 * Template part for video post format.
 *
 * @package FlatBook
 */

$post_footer = Kirki::get_option('fb','blog_page_display_post_footer');
$post_header = Kirki::get_option('fb','blog_page_display_post_header');
$readmore = Kirki::get_option('fb','blog_read_more_text');
$featured_video = get_field('featured_video');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post post-format-video wow fadeInUp'); ?>>

	<?php if( !is_singular() && is_sticky() ) : ?>
		<strong class="post-sticky"><?php _e('Featured','flatbook'); ?></strong>
	<?php endif; ?>

	<?php if( !is_singular() && $post_header && has_post_thumbnail() || is_singular() ) : ?>
		<header class="entry-header">
			<?php if( !is_singular() ) { 
			echo '<a class="overlay video-overlay" href="#">';
			echo '<i class="post-icon fa fa-youtube-play fa-5x"></i>';
			the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive' ) );
			echo '</a>'; } ?>			
			<div class="video-embed embed-responsive embed-responsive-16by9" 
				<?php if( !is_singular() ) { ?>style="display: inline; opacity: 0; visibility: hidden; "<?php } ?>>
				<iframe class="embed-responsive-item" src="<?php echo $featured_video; ?>"></iframe>
			</div>
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

<script type="text/javascript">
	(function($) { 
		$(document).ready(function(){

			$('.video-overlay').click(function(e){
				$(this).fadeOut(200);
				$(this).next('.video-embed').removeAttr('style');
				e.preventDefault();
			});

		}); 
	})(jQuery);
</script>