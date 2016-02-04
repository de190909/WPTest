<?php
/**
 * The signup header partial for the Page Builder
 *
 * @package FlatBook
 */

$title  = get_sub_field('header_title');
$descr  = get_sub_field('header_descr', false, false);
$small  = get_sub_field('header_small');
$signup = get_sub_field('header_signup_form'); 
$sanim  = get_sub_field('header_signup_anim');
$tanim  = get_sub_field('header_title_anim'); 
$bgimg = Kirki::get_option('fb','layout_header_home_header_background_image'); ?>

<header id="site-header" class="signup-header" 

	<?php if( $bgimg ) { echo 'data-image-src="'.$bgimg.'" '.'data-parallax="scroll"'; } else { echo 'style="background-color: #444;"'; } ?>>

    <div class="container">

		<div class="row"> 

			<div class="header-content text-center pd-t-lg pd-b-lg">

				<?php if( $title ) : ?>

					<h1 class="header-title font-xl no-pd-t <?php if( $tanim ) { echo ' wow '.$tanim; } ?>">

						<span class="highlight">

							<?php echo $title; ?>

						</span>

					</h1>

				<?php endif; ?>

				<?php if( $descr ) : ?>

					<p class="header-desc">

						<?php echo $descr; ?>

					</p>

				<?php endif; ?>

			</div><!--/.header-content-->

			<div class="jumbotron col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

				<?php if( $signup ) : ?>

					<div class="form-horizontal">

						<?php echo do_shortcode( $signup ); ?>

					</div>

				<?php endif; ?>

			</div><!--/.jumbotron-->

			<?php if( $small ) : ?>

				<div class="col-xs-12 text-center">

					<p class="small">

						<?php echo $small; ?>

					</p>

				</div>

			<?php endif; ?>

		</div><!--/.row-->

    </div><!--/.container--> 

</header><!--/.signup-header-->