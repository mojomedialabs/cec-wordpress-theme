<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
$subtitle = get_post_meta($post->ID, 'subtitle', $single = true);

function page_show_menu_class($classes){
  global $post;
  $classes[] = "show_menu";
  return $classes;
}

if (is_page() and ($notfound != '1') and !is_front_page()) {
	$current_page = $post->ID;

	while($current_page) {
		$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");

		$current_page = $page_query->post_parent;
	}

	$parent_id = $page_query->ID;

	$parent_title = $page_query->post_title;

	if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) {
		$menu = wp_nav_menu(
		array(
			'echo' => 0,
			'menu' => $parent_title
			)
		);
		add_filter('post_class', 'page_show_menu_class');
	} else {
		$menu = "";
	}
} ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php if($subtitle != '') { ?>
    <h2 class="subtitle"><?php echo $subtitle; ?></h2>
    <?php } ?>
	</header><!-- .entry-header -->
  <?php if ($menu != '') { ?>
  <div class="entry-sidebar">
        <ul>
          <?php echo $menu; ?>
        </ul>
  </div>
<?php } ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
    <?php //edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
