<?php
/**
 * The form header partial for the Page Builder
 *
 * @package FlatBook
 */

$title = get_sub_field('header_title');
$descr = get_sub_field('header_descr', false, false); 
$form  = get_sub_field('header_form');
$fanim = get_sub_field('header_form_anim'); 
$bgimg = Kirki::get_option('fb','layout_header_home_header_background_image'); ?>

<header id="site-header" class="form-header" 

	<?php if( !empty($bgimg) ) { echo 'data-image-src="'.$bgimg.'" '.'data-parallax="scroll"'; } else { echo 'style="background-color: #444;"'; } ?>>

    <div class="container">

		<div class="row">

			<div class="col-md-5 header-content">

				<?php if( $title ) : ?>

					<h1 class="header-title no-pd-t">

						<span class="text-white">

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

			<div class="col-md-6 col-md-offset-1 header-panel">

				<?php if( $form ) : ?>

					<div class="panel">

						<div class="panel-body">

							<?php echo do_shortcode( $form ); ?>

						</div>

					</div>

				<?php endif; ?>

			</div><!--/.header-panel-->

		</div><!--/.row-->

    </div><!--/.container-->

</header><!--/.form-header-->