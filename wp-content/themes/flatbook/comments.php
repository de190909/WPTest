<?php
/**
 * The template for displaying comments.
 *
 * @package FlatBook
 */

if ( post_password_required() ) {
	return;
} ?>

<section id="comments" class="comments-area">

	<div id="comment-list" class="pd-sm">

	<?php if ( have_comments() ) : ?>

		<div class="section-header">
            <h2 class="section-title"><?php _e('Comments','flatbook'); ?></h2>
            <div class="divider"><i class="fa fa-comments"></i></div>
        </div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flatbook' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flatbook' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flatbook' ) ); ?></div>

				</div>
			</nav><!-- /#comment-nav-above -->
		<?php endif; ?>

		<ol class="comments-list">
			<?php wp_list_comments( array(
				'callback' 	  => 'flatbook_custom_comments'
			) ); ?>
		</ol><!-- /.comments-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flatbook' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flatbook' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flatbook' ) ); ?></div>

			</div>
		</nav><!-- /#comment-nav-below -->
		<?php endif; ?>

	<?php endif; ?>

	<?php if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'flatbook' ); ?></p>

	<?php endif; ?>

	</div>

	<div id="comment-reply" class="pd-t-sm no-pd-b">

	<div class="section-header">
		<h2 class="section-title"><?php comment_form_title(); ?></h2>
		<div class="divider">
			<i class="fa fa-pencil-square bg-light"></i>
		</div>
	</div>

	<?php $args = array(
	'label_submit' 			=> __('Submit Comment', 'flatbook'),
	'title_reply' 			=> '',
	'comment_notes_after' 	=> '',
	'comment_notes_before' 	=> '',
	'class_submit' 			=> 'btn btn-primary btn-lg',
	'comment_field' 		=> '<div class="row"><div class="col-sm-12 form-group"><textarea id="comment" name="comment" rows="5" placeholder="Comment '.( $req ? '*' : '' ).'" class="form-control" aria-required="true"></textarea></div></div>',
	$fields = array(
		'author' => '<div class="row"><div class="col-sm-6 form-group"><input id="author" name="author" type="text" placeholder="Name '.( $req ? '*' : '' ).'" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '"></div>',
		'email'  => '<div class="col-sm-6 form-group"><input id="email" name="email" type="text" placeholder="Email '.( $req ? '*' : '' ).'" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"></div></div>',
	),
	'fields' => apply_filters( 'comment_form_default_fields', $fields ) );

	comment_form( $args ); ?>

	</div>

</section><!-- /#comments -->