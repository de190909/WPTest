<?php
/**
 * The pricing section partial for the Page Builder
 *
 * @package FlatBook
 */

$cols = get_sub_field('pricing_items_col');
$anim = get_sub_field('pricing_items_anim'); 
$curr = get_sub_field('pricing_items_currency');

// Section Header
flatbook_section_header( 'section-pricing' );

// Section Content
if( have_rows('pricing_items') ) :
	while ( have_rows('pricing_items') ) : the_row(); 

	    $title  = get_sub_field('title');
	    $price  = get_sub_field('price');
	    $image  = get_sub_field('image');
	    $btntxt = get_sub_field('btn_label');
	    $btnurl = get_sub_field('btn_link'); 
	    $emphs  = get_sub_field('emphasized'); ?>

		<div class="<?php echo $cols; if($anim){ echo ' wow '.$anim; } ?> pricing-item">
			<div class="pricing-table <?php if($emphs){ echo ' emphasized '; } ?>">
				<div class="panel-heading">

					<?php if( $title ) { echo '<h4 class="plan-title">'.$title.'</h4>'; } ?>

					<?php if( $image ) { echo '<img src="'.$image.'" alt="'.$title.'" class="img-responsive">'; } ?>

					<?php if( $curr && $price ) { echo '<p class="plan-price bg-primary"><sup>'.$curr.'</sup>'.$price.'</p>'; } ?>

				</div>
				<div class="panel-body"><?php 
					if( have_rows('plan_features') ) : ?>
						<ul class="plan-features"><?php 
							while ( have_rows('plan_features') ) : the_row(); ?>
		    					<li><?php the_sub_field('feature'); ?></li><?php 
		    				endwhile; ?>
						</ul><?php 
					endif; ?>	    										
				</div>
				<div class="panel-footer">
					<p><a href="<?php if($btnurl){ echo $btnurl; } else { echo '#'; } ?>" class="btn btn-primary">
						<?php echo $btntxt; ?>
					</a></p>
				</div>
			</div>
		</div>            

	    <?php 
	endwhile;
endif;

// Section Footer
flatbook_section_footer(); ?>