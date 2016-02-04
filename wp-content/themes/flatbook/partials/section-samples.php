<?php
/**
 * The samples section partial for the Page Builder
 *
 * @package FlatBook
 */

$title	 = get_sub_field('section_title');
$lead 	 = get_sub_field('section_lead');
$icon 	 = get_sub_field('section_icon');
$before  = get_sub_field('section_before');
$class 	 = get_sub_field('section_class');
$id	  	 = get_sub_field('section_id');
$slug 	 = sanitize_title($id);

$menutxt = get_sub_field('samples_navtitle');
$bgimage = get_sub_field('samples_bgimage');
$bgcolor = get_sub_field('samples_bgcolor');

$tabletimg = get_template_directory_uri()."/assets/img/tablet_frame.png";
$anim = get_sub_field('samples_tablet_anim');
$rows = get_sub_field('sample_items'); ?>

<section <?php if( $id ) { echo 'id="'.$slug.'" '; } ?> class="section-samples no-pd <?php if( $class ) { echo $class; } ?>">

	<div class="section" <?php echo 'style="background-color: '.$bgcolor.';"'; ?>>
	    <div class="container">

		    <?php // Section Header
			if( $title || $lead || $icon ) : 
				echo '<div class="section-header">';
					if( $title ) { echo '<h1>'.$title.'</h1>'; }
					if( $lead ) { echo '<p class="section-lead">'.$lead.'</p>'; }
					echo '<div class="divider">';
					if( $icon ) { echo '<i class="fa '.$icon. ' primary-color" style="background: '.$bgcolor.';"></i>'; }
			      	echo '</div>';
		    	echo '</div>';
		    endif; ?>

			<?php // Section Before
			if( $before ) { echo '<div class="section-before">'.$before.'</div><br>'; } ?>

		</div><!--/.container-->
	</div><!--/.section-->

	<div class="tablet-reader" <?php if( $bgimage ) { echo 'data-image-src="'.$bgimage.'" data-parallax="scroll"'; } ?>>
		<div class="container">
			<div class="row">

				<div class="col-md-5 col-md-push-7 tablet-menu"> 
					<?php if( $menutxt) { echo '<h2 class="title"><span class="text-white">'.$menutxt.'</span></h2>'; } ?>
					<ul id="samples-nav" class="nav nav-pills nav-stacked">

						<?php if( have_rows('sample_items') ) : ?>
							<?php while ( have_rows('sample_items') ) : the_row(); 

								$title = get_sub_field('title');
								$subtitle = get_sub_field('subtitle'); ?>

								<li role="presentation">
									<a class="tablet-menu-btn" href="#" data-text="">
										<?php echo '<strong class="text-white">'.$title.'</strong>'; ?>
										<?php if($subtitle) { echo ' - '.$subtitle; } ?>
									</a>
								</li>

							<?php endwhile; ?>
						<?php endif; ?>
					</ul><!-- /#samples-nav -->
				</div><!-- /.tablet-menu -->
	     
				<div class="col-md-7 col-md-pull-5 tablet-frame <?php if( $anim ) { echo ' wow '.$anim; } ?>"> 
					<img class="tablet-device" alt="" src="<?php echo $tabletimg; ?>">
					<div class="tablet-contents">
						<div class="tablet-scrollbar">
							<div class="scrollbar"><div class="track"><div class="thumb"></div></div></div>
							
							<?php // Active Item
							$first_row = $rows[0];
							$first_row_content  = $first_row['content' ];
							$first_row_title    = $first_row['title'];
							$first_row_coverimg = $first_row['cover_image' ]; ?>

							<div class="viewport">
								<div id="active-sample" class="overview"><?php 
									if( $first_row_coverimg == true ) { 
										echo '<div class="no-pd">'.$first_row_content.'</div>';
									} else { 
										echo '<div class="pd-lg">'.'<h4 class="no-mg-t">'.$first_row_title.'</h4>'.$first_row_content.'</div>';
									} ?>
								</div>
							</div>

							<?php // Sample Items
							if( have_rows('sample_items') ) :
								while ( have_rows('sample_items') ) : the_row(); 
									$coverimg = get_sub_field('cover_image');
									$title = get_sub_field('title'); 
									$content = get_sub_field('content'); ?>
									<div class="sample-content">
										<?php 
										if( $coverimg == true ) { 
											echo '<div class="no-pd">'.$content.'</div>';
										} else {
											echo '<div class="pd-lg">'.'<h4 class="no-mg-t">'.$title.'</h4>'.$content.'</div>';
										} ?>
									</div><?php 
								endwhile;
							endif; ?>

						</div><!-- /.tablet-scrollbar -->
					</div><!-- /.tablet-contents -->
				</div><!-- /.tablet-frame -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.tablet-reader -->
    
</section>

<?php // Section Script
wp_enqueue_script( 'flatbook_tinyscroll_script' ); ?>
<script type="text/javascript">
	( function( $ ) {
		$(document).ready(function(){
			var tab = $('#samples-nav > li');
			tab.each(function(){
				index = $(this).index();
				$(this).children('a').attr('data-text', index);
			});
			tab.eq(0).addClass('active');
		});
	} )( jQuery );
</script>