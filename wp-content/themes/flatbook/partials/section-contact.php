<?php
/**
 * The contact section partial for the Page Builder
 *
 * @package FlatBook
 */

$ltitle = get_sub_field('contact_title_left');
$rtitle = get_sub_field('contact_title_right');
$descr  = get_sub_field('contact_description', false, false);
$cform  = get_sub_field('contact_form_selector'); 
$social = get_sub_field('contact_socials');

?>

<?php // Section Header
flatbook_section_header( 'section-contact' ); ?>

<?php // Section Content ?>
<div class="col-sm-5"><?php 
	if( $ltitle ) { echo '<h3 class="no-mg-t">'.$ltitle.'</h3>'; }
	if( $descr ) { echo '<p>'.$descr.'</p><br>'; }
	if( have_rows('contact_items') ) :
		while ( have_rows('contact_items') ) : the_row(); 
		    
		    $icon  = get_sub_field('icon');
		    $name  = get_sub_field('name');
		    $value = get_sub_field('value'); ?>

				<div class="col-xs-12 clearfix mg-t-sm mg-b-sm">
					<div class="text-left pull-left"><?php 
						if( $icon ) { echo '<i class="fa '.$icon.' text-primary"></i>'; }
						if( $name ) { echo '<strong class="mg-l-sm">'.$name.':</strong>'; } ?>
					</div>
					<div class="text-right pull-right"><?php
						if( $value ) { echo $value; } ?>
					</div>
				</div>

    		<?php 
    	endwhile;
	endif; 
	if( $social == true ) : ?>
		<div class="col-xs-12 clearfix">
			
			<?php flatbook_social_icons(); ?>

		</div><?php 
	endif; ?>                                           
</div>
<div class="col-sm-6 col-sm-offset-1"><?php 
	if( $rtitle ) { echo '<h3 class="no-mg-t">'.$rtitle.'</h3>'; }
	if( $cform ) { echo '<div class="row">'.do_shortcode( $cform ).'</div>'; } ?>  
</div>

<?php 

// Section Footer
flatbook_section_footer();?>