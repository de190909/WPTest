<?php
/**
 * The features section partial for the Page Builder
 *
 * @package FlatBook
 */

$anim = get_sub_field('feature_items_anim');

// Section Header
flatbook_section_header( 'section-features' );

// Section Content
if( have_rows('feature_items') ) :
	while ( have_rows('feature_items') ) : the_row(); 

       		$title = get_sub_field('title');
        	$descr = get_sub_field('descr', false, false);
        	$icon  = get_sub_field('icon'); ?>

          	<div class="col-sm-6 feature-item <?php if( $anim ) { echo ' wow '.$anim; } ?>">
	            <div class="feature-icon">
					<?php if( $icon ) { echo '<i class="fa '.$icon.'"></i>'; } ?>
	            </div>
	            <div class="feature-desc">
	              	<?php if( $title ) { echo '<h3 class="title">'.$title.'</h3>'; } ?>
          			<?php if( $descr ) { echo '<p>'.$descr.'</p>'; } ?>     
	            </div>	
          	</div>
        	
		<?php 
	endwhile;
endif;

// Section Footer
flatbook_section_footer(); ?>