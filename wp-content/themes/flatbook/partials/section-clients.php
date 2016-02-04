<?php
/**
 * The clients section partial for the Page Builder
 *
 * @package FlatBook
 */

$anim = get_sub_field('client_items_anim'); 
$cols = get_sub_field('client_items_col');

// Section Header
flatbook_section_header( 'section-clients' );

// Section Content
if( have_rows('client_items') ) : ?>
	<div class="col-xs-12">
		<ul class="sponsor-logos"><?php 
			while ( have_rows('client_items') ) : the_row(); 

	    		$name = get_sub_field('name');
	    		$link = get_sub_field('link');
	    		$logo = get_sub_field('logo'); ?>

	    		<li <?php 
	    			if( $anim ) { echo 'class="wow '.$anim.'"'; } ?> style="width: <?php echo $cols; ?>;"><?php 
	    			if( $link ) { echo '<a href="'.$link.'" title="'.$name.'" data-original-title="'.$name.'" data-placement="top" data-toggle="tooltip">'; } 
	    			if( $logo ) { echo '<img src="'.$logo.'" alt="'.$name.'">'; }
	    			if( $link ) { echo '</a>'; } ?>
	    		</li><?php
	    		
	    	endwhile; ?>
	    </ul>
	</div><?php
endif;

// Section Footer
flatbook_section_footer(); ?>