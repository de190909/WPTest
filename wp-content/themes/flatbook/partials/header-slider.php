<?php
/**
 * The slider header partial for the Page Builder
 *
 * @package FlatBook
 */

$bgimg = Kirki::get_option('fb','layout_header_home_header_background_image'); ?>

<header id="site-header" class="slider-header" 

	<?php if( $bgimg ) { echo 'data-image-src="'.$bgimg.'" '.'data-parallax="scroll"'; } else { echo 'style="background-color: #444;"'; } ?>>

    <div class="container">

		<div class="row">

			<div id="slider" class="owl-carousel owl-theme">

				<?php if( have_rows('header_slides') ) : ?>

					<?php while ( have_rows('header_slides') ) : the_row();

						$title1  = get_sub_field('headline_1');
						$title2  = get_sub_field('headline_2');
						$descr   = get_sub_field('description', false, false);
						$model   = get_sub_field('model_image');
						$manim 	 = get_sub_field('model_anim'); ?>
					
				    	<div class="item">

							<div class="col-md-6 header-content">

								<?php if( $title1 || $title2 ) : ?>

									<h1 class="header-title">

										<?php if( $title1 ) { ?>

											<span class="highlight">

												<?php echo $title1; ?>

											</span>

										<?php } ?>

										<?php if( $title2 ) { ?>

											<span class="highlight">

												<?php echo $title2; ?>

											</span>

										<?php } ?>

									</h1>

								<?php endif; ?>

								<?php if( $descr ) : ?>

									<div class="header-desc">

										<?php echo do_shortcode( $descr ); ?>

									</div>

								<?php endif; ?>

							</div><!--/.header-content-->

							<div class="col-md-6 header-image">

								<?php if( $model ) : ?>

									<?php echo '<img src="' . $model['url'] . '" alt="' . $model['alt'] . '" class="header-model '.' wow '.$manim.'">'; ?>

								<?php endif; ?>

							</div><!--/.header-image-->

						</div><!--/.item-->
				    	
				    <?php endwhile; ?>

				<?php endif; ?>

			</div><!--/#slider-->

		</div><!--/.row-->

    </div><!--/.container-->

    <div id="slider-nav" style="display: none;">

    	<a class="btn prev pull-left" href="#"><i class="fa fa-chevron-left"></i></a>

    	<a class="btn next pull-right" href="#"><i class="fa fa-chevron-right"></i></a>

    </div><!--/#slider-nav-->

</header><!--/.slider-header-->

<?php // Section Script
wp_enqueue_script( 'flatbook_owlcarousel_script' ); ?>
<script type="text/javascript">
(function($) { 
	$(document).ready(function(){

		var slider 	   = $("#slider"),
			sliderNav  = $("#slider-nav"),
			slideCount = $("#slider .item").length;

		slider.owlCarousel({
			navigation : false,
			pagination : false,
			autoPlay   : false,			
			singleItem : true,
			slideSpeed : 600
		});

		if( slideCount > 1 ) {
			sliderNav.show();
			$("#slider-nav .next").click(function(e) { 
				slider.trigger('owl.next'); 
			});
			$("#slider-nav .prev").click(function(e) { 
				slider.trigger('owl.prev'); 
			});
		}

	}); 
})(jQuery);
</script>