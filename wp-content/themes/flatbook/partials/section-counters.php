<?php
/**
 * The counters section partial for the Page Builder
 *
 * @package FlatBook
 */

$cols = get_sub_field('counter_items_col');
$anim = get_sub_field('counter_items_anim');

// Section Header
flatbook_section_header( 'section-counters' );

// Section Content
if( have_rows( 'counter_items' ) ) : 

	while ( have_rows( 'counter_items' ) ) : the_row(); 

		echo '<div class="'.$cols.' '; 

		if( $anim ) { echo 'wow '.$anim; }

		echo ' counter-item">';

	    	$value = get_sub_field( 'value' ); 

	   		$label = get_sub_field( 'label' );

			if( $value ) { echo '<p class="counter-value">'.$value.'</p>'; }

			if( $label ) { echo '<p class="counter-desc">'.$label.'</p>'; }

		echo '</div>';

	endwhile; 

endif;

// Section Footer
flatbook_section_footer();

// Section Script
wp_enqueue_script('flatbook_counterup_script'); ?>

<script type="text/javascript">
	(function($) {
		$(document).ready(function(){
			$('.counter-value').counterUp({
				delay: 10, 
				time: 1500 
			});
		});
	})(jQuery);
</script>