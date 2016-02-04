<?php
/**
 * The subscribe footer partial for the Page Builder
 *
 * @package FlatBook
 */

$mailchimp_code = Kirki::get_option('fb','layout_footer_subscribe_code');
$subscribe_title = Kirki::get_option('fb','layout_footer_subscribe_title'); ?>

<div class="footer-subscribe">

		<div class="container">

		<div class="row">

			<div class="col-md-6 hidden-sm hidden-xs">

				<i class="subscribe-icon fa fa-envelope-o"></i>

				<h4 class="subscribe-title">

					<?php echo $subscribe_title; ?>

				</h4>

			</div>

			<div class="col-md-6 col-xs-12">

				<div class="row subscribe-form">

					<div id="mc_embed_signup">

						<form action="<?php echo $mailchimp_code; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

							<div id="mc_embed_signup_scroll">

								<div class="form-group col-sm-8 col-xs-9 no-mg-b">
									
									<input class="subscribe-input form-control email" value="" id="mce-EMAIL" type="email" placeholder="Enter your email address.." name="EMAIL" required>

								    <div style="position: absolute; left: -5000px;">

								    	<input type="text" name="b_8999e8cf601fc37dcb9650d91_6e75d836a7" tabindex="-1" value="">

								    </div>												                
								
								</div>
								
								<div class="form-group col-sm-4 col-xs-3 no-mg-b">
									
									<input class="btn btn-half-light btn-lg btn-block" id="mc-embedded-subscribe" name="subscribe" type="submit" value="Subscribe">

								</div>

							</div>

						</form>

					</div>

				</div>

			</div>

		</div><!--/.row-->

	</div><!--/.container-->

</div><!--/.footer-subscribe-->