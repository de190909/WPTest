<?php
/**
 * The messages section partial for the Page Builder
 *
 * @package FlatBook
 */

$anim = get_sub_field('message_items_anim');
$i = 1;

// Section Header
flatbook_section_header( 'section-messages' );

// Section Content
if( have_rows('message_items') ) :
    while ( have_rows('message_items') ) : the_row(); 

        $name   = get_sub_field('name');
        $quote  = get_sub_field('quote');
        $avatar = get_sub_field('avatar'); ?>

        <div class="row <?php if( $anim ) { echo ' wow '.$anim; } ?>">
            <div class="testimonial-item">
                <?php if( $i%2 == 0 ) : ?>
                    <div class="testimonial-body text-right"><?php 
                        if( $name ) { echo '<h4>'.$name.'</h4>'; }
                        if( $quote ) { echo '<p>'.$quote.'</p>'; } ?>
                    </div>
                    <div class="testimonial-header"><?php 
                        if( $avatar ) { echo '<img src="'.$avatar.'" alt="'.$name.'" class="img-responsive">'; } ?>
                    </div>
                <?php else : ?>                  
                    <div class="testimonial-header"><?php 
                        if( $avatar ) { echo '<img src="'.$avatar.'" alt="'.$name.'" class="img-responsive">'; } ?>
                    </div>
                    <div class="testimonial-body"><?php 
                        if( $name ) { echo '<h4>'.$name.'</h4>'; }
                        if( $quote ) { echo '<p>'.$quote.'</p>'; } ?>
                    </div>
                <?php endif; $i++; ?>
            </div>
        </div>        

	    <?php 
    endwhile;
endif;

flatbook_section_footer(); 

// Section Script ?>
<script type="text/javascript">
    ( function( $ ) {
        $(document).ready(function() {
            $(window).on('load resize', function(e) {
                var w = $(window).width();
                if(w < 768) {
                    $('.testimonial-item:odd').each(function(e) {
                        var next = $(this).children('.testimonial-header')
                        $(this).children('.testimonial-body').insertAfter(next);
                    });
                } else {
                    $('.testimonial-item:odd').each(function(e) {
                        var next = $(this).children('.testimonial-header')
                        $(this).children('.testimonial-body').insertBefore(next);
                    });                
                }
            });
        });
    } )( jQuery );
</script>