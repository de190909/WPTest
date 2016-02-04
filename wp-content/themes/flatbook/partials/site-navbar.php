<?php
/**
 * The primary bootstrap navigation menu
 *
 * @package FlatBook
 */

$display_navbar = Kirki::get_option('fb','layout_navbar_display_navbar');
$display_tagline = Kirki::get_option('fb','layout_navbar_display_tagline');
$navbar_fixed = Kirki::get_option('fb','layout_navbar_sticky_navbar');
$brand_display = Kirki::get_option('fb','layout_navbar_brand_display'); 
$basic_logo = Kirki::get_option('fb','default_logo');
$small_logo = Kirki::get_option('fb','small_logo'); 

if( $display_navbar ) : ?>

<nav id="site-navbar" class="navbar <?php if( $navbar_fixed ) { echo ' navbar-fixed-top'; } ?>">

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#onepage-nav">

                <i class="fa fa-bars"></i>

            </button>

	        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url('/') ); ?>" title="<?php bloginfo('name'); ?>">

                <span class="aligner">

                    <?php if( $brand_display == 'logo-image' ) : ?>

                        <?php if( $basic_logo ) : ?>

                            <img class="logo hidden-sm" src="<?php echo $basic_logo; ?>" alt="<?php echo bloginfo('name'); ?>">

                            <?php if( $small_logo ) : ?>

                                <img class="logo-sm hidden-lg hidden-md hidden-xs" src="<?php echo $small_logo; ?>" alt="<?php echo bloginfo('name'); ?>">

                            <?php endif; ?>

                        <?php endif; ?>

                    <?php elseif( $brand_display == 'logo-text' ) : ?>

                        <?php echo bloginfo('name'); ?>

                    <?php endif; ?>

                </span>
	        </a>

        </div>

        <?php if( $display_tagline ) : ?>

            <div class="navbar-tagline hidden-md">

                <span class="aligner">

                    <span class="tagline">

                        <?php echo bloginfo('description'); ?>

                    </span>

                </span>

            </div>

        <?php endif; ?>

        <?php wp_nav_menu( array(

            'menu_id'         => 'primary-menu',

            'theme_location'  => 'primary', 

            'depth'           => 2, 

            'container'       => 'div',

            'container_class' => 'collapse navbar-collapse', 

            'container_id'    => 'onepage-nav', 

            'menu_class'      => 'nav navbar-nav navbar-right', 

            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback', 

            'walker'          => new wp_bootstrap_navwalker()

        ) ); ?>

    </div><!--/.container-->

</nav><!--/#site-navbar-->

<?php if( $navbar_fixed ) { echo '<div class="navbar-fixer"></div>'; } 

endif; ?>