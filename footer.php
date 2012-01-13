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
		<p id="copyright">&copy;<?php echo date("Y"); ?> CEC Electrical Inc.</p>
		<p id="mojo">Designed by <a href="http://mojomedialabs.com/">Mojo Media Labs</a>.
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
    <nav id="social-media">
      <ul>
        <li id="linked-in">
          <a href="http://www.linkedin.com/company/cec-electrical-inc.">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn" title="LinkedIn" />
          </a>
        </li>
        <li id="facebook">
          <a href="http://www.facebook.com/pages/CEC-ELECTRICAL-INC/119162192838">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" title="Facebook" />
          </a>
        </li>
      </ul>
    </nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
