<?php
/**
 * The widgets footer partial for the Page Builder
 *
 * @package FlatBook
 */
?>

<div class="footer-widgets">

	<div class="container">

		<div class="row">

			<?php if( is_active_sidebar('footer-widgets') ) : 

				dynamic_sidebar('footer-widgets'); ?>

			<?php endif; ?>

		</div><!--/.row-->

	</div><!--/.container-->

</div><!--/.footer-widgets-->