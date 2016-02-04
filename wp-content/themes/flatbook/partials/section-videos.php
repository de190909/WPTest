<?php
/**
 * The videos section partial for the Page Builder
 *
 * @package FlatBook
 */

$cols = get_sub_field('video_items_col');
$anim = get_sub_field('video_items_anim');

// Section Header
flatbook_section_header( 'section-videos' );

// Section Content
if( have_rows('video_items') ) :
    while ( have_rows('video_items') ) : the_row(); 

        $title = get_sub_field('title');
        $descr = get_sub_field('descr', false, false);
        $url   = get_sub_field('url'); ?>

        <div class="<?php echo $cols; if( $anim ) { echo ' wow '.$anim; } ?> video-item"><?php 
            if( $url ) { echo '
                <div class="embed-responsive embed-responsive-16by9 video-frame">
                    <iframe src="'.$url.'" class="embed-responsive-item"></iframe>
                </div>'; }
            if( $title ) { echo '<h3>'.$title.'</h3>'; }
            if( $descr ) { echo '<p>'.$descr.'</p>'; } ?>     
  		</div>		          	
        	
	<?php 
    endwhile;
endif;

// Section Footer
flatbook_section_footer(); ?>