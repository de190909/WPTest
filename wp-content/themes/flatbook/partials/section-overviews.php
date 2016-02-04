<?php
/**
 * The overviews section partial for the Page Builder
 *
 * @package FlatBook
 */

$cols = get_sub_field('overview_items_col');
$anim = get_sub_field('overview_items_anim');

// Section Header
flatbook_section_header( 'section-overviews' );

// Section Content
if( have_rows('overview_items') ) :
    while ( have_rows('overview_items') ) : the_row(); 

        $title = get_sub_field('title');
        $descr = get_sub_field('descr', false, false);
        $image = get_sub_field('image'); ?>

        <div class="<?php echo $cols.' col-sm-6'; if( $anim ) { echo ' wow '.$anim; } ?> overview-item"><?php 
            if( $image ) { echo '<img class="thumbnail" src="'.$image.'" alt="'.$title.'">'; }
   			if( $title ) { echo '<h4 class="title">'.$title.'</h4>'; }
          	if( $descr ) { echo '<p>'.$descr.'</p>'; } ?>  
        </div>

	    <?php 
    endwhile;
endif;

// Section Footer
flatbook_section_footer(); ?>