<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
function getRandomHeader(){
  $options = array("1", "2", "3");
  shuffle($options);
  //return "<img src='http://placehold.it/990x155/$options[0]' class='page-header-image'>";
	return "<img src='" . get_template_directory_uri() . "/images/headers/header" . $options[0] . ".png' alt='CEC Electrical Inc.' />";
}
get_header(); echo getRandomHeader(); ?>
		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
