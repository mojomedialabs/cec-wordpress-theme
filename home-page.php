<?php
/**
 * Template Name: Homepage Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

add_filter('body_class','cec_homepage_class_names');
function cec_homepage_class_names($classes) {
// add 'class-name' to the $classes array
  $classes[] = 'home-page';
// return the $classes array
  return $classes;
}

get_header(); ?>
    <div id="slide">
        <div id="slide-1"><img src="http://placehold.it/990x375/00F"></div>
        <div id="slide-2"><img src="http://placehold.it/990x375/F0F"></div>
        <div id="slide-3"><img src="http://placehold.it/990x375/0FF"></div>
        <ul>
            <li>
                <a href="#slide-1">1</a>
            </li>
            <li>
                <a href="#slide-2">2</a>
            </li>
            <li>
                <a href="#slide-3">3</a>
            </li>
        </ul>
    </div>
		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php //comments_template( '', true ); ?>

			</div><!-- #content -->
    </div><!-- #primary -->

    <div id="home-footer">
      <div id="solution" class="slide-out">
          <img src="<?php echo get_template_directory_uri(); ?>/images/headers/innovative-solution.png" alt="" />
          <span>
            <h3>Innovative Solution</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.
              <a href="">Fusce lobortis</a>.
            </p>
          </span>
      </div>
      <div id="energy" class="slide-out">
          <img src="<?php echo get_template_directory_uri(); ?>/images/headers/green-energy.png" alt="" />
          <span>
            <h3>Green Energy</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.
              <a href="">Fusce lobortis</a>.
            </p>
          </span>
      </div>
      <div id="lighting" class="slide-out">
          <img src="<?php echo get_template_directory_uri(); ?>/images/headers/lighting-the-way.png" alt="" />
          <span>
            <h3>Lighting the Way</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.
              <a href="">Fusce lobortis</a>.
            </p>
          </span>
      </div>
    </div>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="/cec/wp-content/uploads/2011/11/jquery.ui_.tabs_.bottom.js"></script>
<script>
jQuery(function(){
  jQuery('#slide').tabs().tabs("rotate", 6000); 
  jQuery('#home-footer .slide-out').hover(
    function(e){
      //Mouse Enter
      jQuery(this).stop().animate({bottom: "0px"});
    },
    function(e){
      //Mouse Leave
      jQuery(this).stop().animate({bottom: "-140px"});
    }
  );
});
</script>
<?php get_footer(); ?>

