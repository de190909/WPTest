<?php
/**
 * The default page header partial for the Page Builder
 *
 * @package FlatBook
 */
 $pageheader = Kirki::get_option('fb','layout_header_page_header_background_image'); ?>

 <header id="site-header" class="page-header" data-image-src="<?php echo $pageheader; ?>" data-parallax="scroll">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 header-content">

				<h1 class="page-title">

					<?php flatbook_page_title(); ?>

				</h1>

			</div>

		</div>

	</div>

 </header>