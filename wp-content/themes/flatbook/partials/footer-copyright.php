<?php
/**
 * The copyright footer partial for the Page Builder
 *
 * @package FlatBook
 */

$footer_copyright = Kirki::get_option('fb','layout_footer_copyright_display');
$social_icons = Kirki::get_option('fb','layout_footer_copyright_social_icons'); 
$copyright_text = Kirki::get_option('fb','layout_footer_copyright_text'); ?>

<?php if( $footer_copyright ) : ?>

<div class="footer-copyright">

	<div class="container">

		<div class="row">

			<?php if( $social_icons ) : ?>

				<div class="col-sm-6">

					<p class="copyright-text no-mg pd-t-xs">

						<?php echo $copyright_text; ?>

					</p><!--/.copyright-text-->

				</div><!--/.col-sm-6-->

				<div class="col-sm-6">

					<div class="social-icons">

						<?php flatbook_social_icons(); ?>

	        		</div><!--/.social-icons-->

				</div><!--/.col-sm-6-->

			<?php else : ?>

				<div class="text-center">

					<p class="copyright-text no-mg pd-t-xs">

						<?php echo $copyright_text; ?>

					</p><!--/.copyright-text-->

				</div><!--/.text-center-->

			<?php endif; ?>

		</div><!--/.row-->

	</div><!--/.container-->

</div><!--/.footer-copyright-->

<?php endif; ?>