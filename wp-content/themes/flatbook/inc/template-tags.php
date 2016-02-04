<?php
/**
 * Custom template tags for this theme.
 *
 * @package FlatBook
 */


/**
 * Custom iconic metas for post format, author, date, category, tags, comments
 */
if ( ! function_exists( 'flatbook_post_metas' ) ) :

function flatbook_post_metas() {

	$user = get_the_author();

	$date = get_the_date('F j');

	$cats = get_the_category();

	$tags = get_the_tags();

	$comm = get_comments_number();

	$type = get_post_format(); if( false === $type ) { $type = __( 'standard', 'flatbook' ); }

	echo '<div class="entry-metas">';

	if( $type ) { echo '<span class="format"><i class="fa fa-inbox"></i>'.$type.'</span>'; }

	if( $date ) { echo '<span class="posted-on"><i class="fa fa-dashboard"></i>'.$date.'</span>'; }

	if( $user ) { echo '<span class="byline"><i class="fa fa-user"></i>'.$user.'</span>'; }

	if( $cats ) { echo '<span class="cats"><i class="fa fa-folder-open"></i>'.$cats[0]->cat_name.'</span>'; }

	if( $tags ) { echo '<span class="tags"><i class="fa fa-tags"></i>'.$tags[0]->name.'</span>'; }

	if( $comm ) { echo '<span class="comments"><i class="fa fa-comments"></i>'.$comm.__( ' Comment', 'flatbook' ).'</span>'; }

	echo '</div>';

}

endif;


/**
 * Custom numeric pagination function for posts
 */
if ( ! function_exists( 'flatbook_post_pagination' ) ) :

function flatbook_post_pagination( $pages = '', $range = 8 ) {

	$showitems = ( $range * 2 ) + 1;  

	global $paged;

	if( empty( $paged ) ) $paged = 1;

	if( $pages == '' ) {

		global $wp_query;

		$pages = $wp_query->max_num_pages;

		if( !$pages ) { $pages = 1; }
	}

	if( 1 != $pages ) {

		echo '<nav class="blog-pagination">'; 

		echo '<ul class="pagination">';

		for( $i=1; $i <= $pages; $i++ ) {

			if( 1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ) ) {

	    		echo ($paged == $i)? 

	    		'<li class="active"><span class="page-number current">'.$i.'</span></li>':

	    		'<li><a href="'. esc_url( get_pagenum_link($i) ).'" class="page-number inactive" >'.$i.'</a></li>';
			}

		}

		echo '</ul>';

		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

		echo '<p class="page-indicator">';

		printf( __( 'Page %1$s of %2$s', 'flatbook' ), $paged, $wp_query->max_num_pages ); 

		echo '</p>';

		echo '</nav>';
	}

}

endif;


/**
 * Custom post navigation function
 */
function flatbook_post_navigation() {

	$nav  = '';

	$prev = get_previous_post_link( '<div class="pull-left">%link</div>', '&larr; %title', true );

	$next = get_next_post_link( '<div class="pull-right">%link</div>', '%title &rarr;', true );

	if ( $prev || $next ) { $nav = _navigation_markup( $prev . $next, 'post-navigation' ); }

	echo $nav;

}

/**
 * Custom comments list
 */
function flatbook_custom_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
            <div <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
            <div class="back-link"><?php comment_author_link(); ?></div>
        <?php break;
        default : ?>
            <li class="comment-wrap">
            	<article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		            <div class="row">
		            	<div class="col-md-2">
							<?php echo get_avatar( $comment, 64 ); ?>
		            	</div>
		            	<div class="col-md-10">
		            		<div class="comment-head">
		            			<h5 class="pull-left no-mg"><?php comment_author(); ?></h5>
		            			<ul class="pull-right list-inline">
		            				<li>
		            					<span class="date"><?php comment_date(); ?></span>
		            				</li>
		            				<li>
		            					<span class="time"><?php comment_time(); ?></span>
		            				</li>
		            				<li>
		            					<span class="reply">
		            						<?php comment_reply_link( array_merge( $args, array(
		            							'reply_text' => __('Reply','flatbook'), 
		            							'depth' => $depth, 
		            							'max_depth' => $args['max_depth'] 
		            						) ) ); ?>
            							</span>
            						</li>
		            			</ul>
		            		</div>
		            		<div class="comment-body"><?php comment_text(); ?></div>
		            	</div>
		            </div>
            	</article>
        <?php break;
    endswitch;
}

/**
 * Custom title attribute for different page headers
 */
function flatbook_page_title() {

	if( is_archive() ) :

		if( is_category() ) : single_cat_title( _e('Archive for category: ', 'flatbook') );

		elseif( is_tag() ) : single_cat_title( _e('Archive for tag: ', 'flatbook') );
			
		elseif( is_author() ) : printf( __( 'Author: %s', 'flatbook' ), '<span class="vcard">' . get_the_author() . '</span>' );

		elseif( is_day() ) : printf( __( 'Day: %s', 'flatbook' ), '<span>' . get_the_date() . '</span>' );

		elseif( is_month() ) : printf( __( 'Month: %s', 'flatbook' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'flatbook' ) ) . '</span>' );

		elseif( is_year() ) : printf( __( 'Year: %s', 'flatbook' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'flatbook' ) ) . '</span>' );

		elseif( is_tax( 'post_format', 'post-format-gallery' ) ) : _e( 'Galleries', 'flatbook');

		elseif( is_tax( 'post_format', 'post-format-image' ) ) : _e( 'Images', 'flatbook');

		elseif( is_tax( 'post_format', 'post-format-video' ) ) : _e( 'Videos', 'flatbook' );

		elseif( is_tax( 'post_format', 'post-format-quote' ) ) : _e( 'Quotes', 'flatbook' );

		elseif( is_tax( 'post_format', 'post-format-link' ) ) : _e( 'Links', 'flatbook' );

		else : _e( 'Archives', 'flatbook' ); endif;

	elseif( is_single() ) :

		$title = Kirki::get_option('fb','blog_single_header_title');

		if( $title == 'blog-page-title' ) : echo get_the_title( get_option('page_for_posts', true) ); 

		else : echo the_title(); endif;

	elseif( is_search() ) :

		printf( __( 'Search Results for: %s', 'flatbook' ), '<span>' . get_search_query() . '</span>' );

	elseif( is_page() ) :

		echo the_title();

	elseif( is_home() ) :

		$blog_title = get_option( 'page_for_posts', true );

		if( !empty( $blog_title ) ) { 

			echo get_the_title( $blog_title );

		} else { _e( 'Blog Default', 'flatbook' ); }

	else : 

		echo the_title();

	endif;

}

/**
 * Custom social network icon links
 */
function flatbook_social_icons() {

	$socials = array(
		array(
			'name' => __( 'Facebook', 'flatbook' ),
			'link' => Kirki::get_option('fb','facebook_url'),
			'icon' => 'fa-facebook-square',
		),
		array(
			'name' => __( 'Twitter', 'flatbook' ),
			'link' => Kirki::get_option('fb','twitter_url'),
			'icon' => 'fa-twitter-square',
		),
		array(
			'name' => __( 'LinkedIn', 'flatbook' ),
			'link' => Kirki::get_option('fb','linkedin_url'),
			'icon' => 'fa-linkedin-square',
		),
		array(
			'name' => __( 'Dribbble', 'flatbook' ),
			'link' => Kirki::get_option('fb','dribbble_url'),
			'icon' => 'fa-dribbble',
		),
		array(
			'name' => __( 'Vimeo', 'flatbook' ),
			'link' => Kirki::get_option('fb','vimeo_url'),
			'icon' => 'fa-vimeo-square',
		),
		array(
			'name' => __( 'Flickr', 'flatbook' ),
			'link' => Kirki::get_option('fb','flickr_url'),
			'icon' => 'fa-flickr',
		),
		array(
			'name' => __( 'Instagram', 'flatbook' ),
			'link' => Kirki::get_option('fb','instagram_url'),
			'icon' => 'fa-instagram',
		),
		array(
			'name' => __( 'Pinterest', 'flatbook' ),
			'link' => Kirki::get_option('fb','pinterest_url'),
			'icon' => 'fa-pinterest-square',
		),
		array(
			'name' => __( 'YouTube', 'flatbook' ),
			'link' => Kirki::get_option('fb','youtube_url'),
			'icon' => 'fa-youtube-square',
		),
		array(
			'name' => __( 'Behance', 'flatbook' ),
			'link' => Kirki::get_option('fb','behance_url'),
			'icon' => 'fa-behance-square',
		),
		array(
			'name' => __( 'BitBucket', 'flatbook' ),
			'link' => Kirki::get_option('fb','bitbucket_url'),
			'icon' => 'fa-bitbucket-square',
		),
		array(
			'name' => __( 'GitHub', 'flatbook' ),
			'link' => Kirki::get_option('fb','github_url'),
			'icon' => 'fa-github-square',
		),
		array(
			'name' => __( 'Google+', 'flatbook' ),
			'link' => Kirki::get_option('fb','googleplus_url'),
			'icon' => 'fa-google-plus-square',
		),
		array(
			'name' => __( 'Skype', 'flatbook' ),
			'link' => Kirki::get_option('fb','skype_url'),
			'icon' => 'fa-skype',
		),
		array(
			'name' => __( 'Reddit', 'flatbook' ),
			'link' => Kirki::get_option('fb','reddit_url'),
			'icon' => 'fa-reddit-square',
		),
		array(
			'name' => __( 'Tumblr', 'flatbook' ),
			'link' => Kirki::get_option('fb','tumblr_url'),
			'icon' => 'fa-tumblr-square',
		),

	);

	echo '<ul class="social-icons">';

	foreach( $socials as $social ) :

		if( ! empty( $social['link'] ) ) :

			echo '<li>';

				echo '<a href="'.$social['link'].'" title="'.$social['name'].'" target="_blank">';

					echo '<i class="fa fa-lg '.$social['icon'].'"></i>';

				echo '</a>';

			echo '</li>';

		endif;

	endforeach;

	echo '</ul>';

}

/**
 * Returns true if a blog has more than 1 category.
 */
function flatbook_categorized_blog() {

	if ( false === ( $all_the_cool_cats = get_transient( 'flatbook_categories' ) ) ) {

		$all_the_cool_cats = get_categories( array(

			'fields'     => 'ids',

			'hide_empty' => 1,

			'number'     => 2,

		) );

		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'flatbook_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {

		return true;

	} else {

		return false;
	}

}

/**
 * Flush out the transients used in flatbook_categorized_blog.
 */
function flatbook_category_transient_flusher() {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

		return;

	}

	delete_transient( 'flatbook_categories' );
}

add_action( 'edit_category', 'flatbook_category_transient_flusher' );

add_action( 'save_post',     'flatbook_category_transient_flusher' );

