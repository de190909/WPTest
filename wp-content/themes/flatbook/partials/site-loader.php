<?php
/**
 * The css3 animated page preloader effect 
 *
 * @package FlatBook
 */

$display_preloader = Kirki::get_option('fb','layout_global_display_preloader');

$display_scrolltop = Kirki::get_option('fb','layout_global_display_scrolltop'); ?>

<?php if ( $display_preloader ) : ?>

	<div id="preloader">

	    <div class="aligner">

	        <div class="spinner">

	            <div class="bar1"></div>

	            <div class="bar2"></div>

	            <div class="bar3"></div>

	            <div class="bar4"></div>

	            <div class="bar5"></div>

	        </div>

	    </div>

	</div>

<?php endif; ?>

<?php if ( $display_scrolltop ) : ?>

	<button id="scrolltop" class="btn btn-half-dark btn-scrolltop upscaled">

		<i class="fa fa-chevron-up"></i>

    </button>

<?php endif; ?>