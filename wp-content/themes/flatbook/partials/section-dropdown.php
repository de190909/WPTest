<?php
/**
 * The dropdown section partial for the Page Builder
 *
 * @package FlatBook
 */

$title   = get_sub_field('collapse_title');
$btntxt  = get_sub_field('collapse_btn_text');
$content = get_sub_field('collapse_inner_content'); 
$cform   = get_sub_field('collapse_form_selector'); 
$innerbg = get_sub_field('collapse_inner_bgcolor');
$bgcolor = get_sub_field('section_bgcolor');
$class 	 = get_sub_field('section_class');
$id	  	 = get_sub_field('section_id');
$slug 	 = sanitize_title($id); ?>

<section <?php if( $id ) { echo 'id="'.$slug.'" '; } if( $class ) { echo 'class="section-dropdown '.$class.'" '; } ?>>
	<div class="section padding-sm" <?php if( $bgcolor ) { echo 'style="background: '.$bgcolor.';"'; } ?>>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 text-center-xs"><?php 
					if( $title ) { echo '<h3 class="text-white no-mg pd-t-sm"><span>'.$title.'</span></h3>'; } ?>
	        	</div>
	        	<div class="col-sm-3">
					<p class="no-mg text-center"><?php 
						if( $btntxt ) { echo '<button aria-controls="collapseArea" aria-expanded="false" data-target="#collapseArea" 
						data-toggle="collapse" type="button" class="btn btn-half-dark btn-lg"><span>'.$btntxt.'</span></button>'; } ?>
	          		</p>
	        	</div>    
	      	</div>   
	    </div>
	</div>
	<div id="collapseArea" class="section padding-sm collapse" <?php if( $innerbg ) { echo 'style="background: '.$innerbg.';"'; }?>>
		<div class="container">
			<div class="row text-center"><?php 
				if( $content ) { echo do_shortcode( $content ); } 
				if( $cform ) { echo $cform; } ?>
			</div>   
	    </div>
	</div>
</section>