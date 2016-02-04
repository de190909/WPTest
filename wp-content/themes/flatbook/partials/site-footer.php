<?php
/**
 * The footer layouts used in theme
 * 
 * @package FlatBook
 */

$footer_widgets   = Kirki::get_option('fb','layout_footer_widgets_display'); 
$blog_footer_widgets = Kirki::get_option('fb','blog_page_display_footer_widgets'); 
$single_footer_widgets = Kirki::get_option('fb','blog_single_display_footer_widgets');

$footer_subscribe = Kirki::get_option('fb','layout_footer_subscribe_display');
$blog_footer_subscribe = Kirki::get_option('fb','blog_page_display_footer_subscribe'); 
$single_footer_subscribe = Kirki::get_option('fb','blog_single_display_footer_subscribe'); 

?>

<footer id="site-footer" class="footer">

<?php if( is_page_template( 'page-builder.php' ) ) : // IF BUILDER PAGE

	if( have_rows('footer_builder') ) :

        while ( have_rows('footer_builder') ) : the_row();

            if( get_row_layout() == 'subscribe_footer' ){ get_template_part( 'partials/footer' , 'subscribe' ); }

            if( get_row_layout() == 'widgets_footer'   ){ get_template_part( 'partials/footer' , 'widgets'   ); }

            if( get_row_layout() == 'copyright_footer' ){ get_template_part( 'partials/footer' , 'copyright' ); }

        endwhile;

    endif; ?>

<?php elseif( is_home() ) : // IF BLOG POSTS PAGE ?>

    <?php if( $blog_footer_subscribe ) { get_template_part( 'partials/footer', 'subscribe' ); } ?>

    <?php if( $blog_footer_widgets ) { get_template_part( 'partials/footer', 'widgets' ); } ?>

    <?php get_template_part( 'partials/footer', 'copyright' ); ?>

<?php elseif( is_single() ) : // IF SINGLE POST PAGE ?>

    <?php if( $single_footer_subscribe ) { get_template_part( 'partials/footer', 'subscribe' ); } ?>

    <?php if( $single_footer_widgets ) { get_template_part( 'partials/footer', 'widgets' ); } ?>

    <?php get_template_part( 'partials/footer', 'copyright' ); ?>

<?php else : // IF ANYTHING ELSE ?>

    <?php get_template_part( 'partials/footer', 'copyright' ); ?>

<?php endif; ?>

</footer><!-- /#site-footer -->