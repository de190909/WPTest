<?php
/**
 * The static header partial for the Page Builder
 *
 * @package FlatBook
 */

$title = get_sub_field('header_title');
$descr 	 = get_sub_field('header_descr', false, false);
$btn1txt = get_sub_field('header_button_1_txt');
$btn1url = get_sub_field('header_button_1_url');
$btn2txt = get_sub_field('header_button_2_txt');
$btn2url = get_sub_field('header_button_2_url');
$tanim 	 = get_sub_field('header_title_anim');
$danim 	 = get_sub_field('header_descr_anim');
$bgimg = Kirki::get_option('fb','layout_header_home_header_background_image'); ?>

<header id="site-header" class="static-header"

	<?php if( $bgimg ) { echo 'data-image-src="'.$bgimg.'" '.'data-parallax="scroll"'; } else { echo 'style="background-color: #444;"'; } ?>>

    <div class="container">

		<div class="row text-center">

			<div class="col-xs-12 header-content">

				<?php if( $title ) : ?>

					<h1 class="header-title <?php if( $tanim ) { echo ' wow ' . $tanim; } ?>">

							<span class="highlight text-white">

								<?php echo $title; ?>

							</span>					

					</h1>

				<?php endif; ?>	

				<?php if( $descr ) : ?>

					<p class="header-desc <?php if( $danim ) { echo ' wow ' . $danim; } ?>">

						<?php echo $descr; ?>

					</p>

				<?php endif; ?>

				<?php if( $btn1txt || $btn2txt ) : ?>

					<p class="nowrap">

						<a href="<?php if( $btn1url ) { echo $btn1url; } else { echo '#'; } ?>" class="btn btn-primary mg-r-sm">

							<?php echo $btn1txt; ?>

						</a> 

						<a href="<?php if( $btn2url ) { echo $btn2url; } else { echo '#'; } ?>" class="btn btn-half-light">

							<?php echo $btn2txt; ?>

						</a>

					</p>

				<?php endif; ?>			

			</div><!--/.header-content-->

		</div><!--/.row-->

    </div><!--/.container-->

</header><!--/.static-header-->