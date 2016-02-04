<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package FlatBook
 */

?><!DOCTYPE html>
<html style="margin-top: 0 !important;" class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if( ! is_404() ) :

get_template_part('partials/site-loader');

get_template_part('partials/site-navbar'); 

get_template_part('partials/site-header');

endif; ?>

<div id="site-content">

<?php if( ! is_page_template('page-builder.php') && ! is_404() ) : ?> 

	<section id="content">

		<div class="container">

			<div class="row">

<?php endif; ?>