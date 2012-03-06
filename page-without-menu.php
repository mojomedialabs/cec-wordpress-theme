<?php
/**
 * Template Name: Page Without Menu
 * Description: The template for displaying page without the sidebar menu.
 *
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
function getRandomHeader(){
  $options = array("1", "2", "3", "4");
  shuffle($options);
	return "<img src='" . get_template_directory_uri() . "/images/headers/header" . $options[0] . ".png' alt='CEC Electrical Inc.' />";
}
get_header(); echo getRandomHeader(); ?>
	<div id="primary">
		<div id="content" role="main">
			<?php the_post(); ?>

			<?php
				$subtitle = get_post_meta($post->ID, 'subtitle', $single = true);

			function page_show_menu_class($classes){
			  global $post;
			  $classes[] = "show_menu";
			  return $classes;
			}

			 ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('no-sidebar-menu'); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php if($subtitle != '') { ?>
					<h2 class="subtitle"><?php echo $subtitle; ?></h2>
				<?php } ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div>
			<footer class="entry-meta">
			</footer>
		</article>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
