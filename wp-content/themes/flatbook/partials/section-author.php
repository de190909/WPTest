<?php
/**
 * The author section partial for the Page Builder
 *
 * @package FlatBook
 */

$anim  = get_sub_field('author_anim'); 
$photo = get_sub_field('author_photo');
$descr = get_sub_field('author_descr', false, false);
$sign  = get_sub_field('author_sign');

// Section Header
flatbook_section_header( 'section-author' ); ?>

<div class="col-sm-4 author-photo <?php if( $anim ){ echo ' wow '.$anim; } ?>">

	<?php if( $photo ) { echo '<img class="img-responsive" src="'.$photo.'" alt="">'; } ?>

</div>

<div class="col-sm-8 author-intro">

	<?php if( $descr ) { echo $descr; } ?>

	<?php if( $sign ) { echo '<p><img class="author-signature" src="'.$sign.'" alt=""></p>'; } ?>

</div> 

<?php     
               
// Section Footer
flatbook_section_footer(); ?>