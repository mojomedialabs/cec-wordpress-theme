<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
  <div class="cf"></div>
<?php /**/ ?>
  </div><!-- #main -->
<?php /**/ ?>
	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
    <nav id="social-media">
      <ul>
        <li>
          <a href="">
            <img src="http://placehold.it/33x33">
          </a>
        </li>
        <li>
          <a href="">
            <img src="http://placehold.it/33x33">
          </a>
        </li>
      </ul>
    </nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
