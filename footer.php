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
		<!--<div id="home-footer">
			<div id="energy" class="slide-out">
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/green-energy.png" alt="" />
				<div class="slide-out-content">
					<h3>Green Energy</h3>
					<p class="read-more"><a href="?page_id=30">Read More</a></p>
				</div>
			</div>

			<div id="commissioning" class="slide-out">
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/commissioning.png" alt="" />
				<div class="slide-out-content">
					<h3>Commissioning</h3>
					<p class="read-more"><a href="?page_id=34">Read More</a></p>
				</div>
			</div>

			<div id="join-our-team" class="slide-out">
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/join-our-team.png" alt="" />
				<div class="slide-out-content">
					<h3>Join Our Team</h3>
					<p class="read-more"><a href="?page_id=71">Read More</a></p>
				</div>
			</div>
		</div>-->

		<p id="copyright">&copy;<?php echo date("Y"); ?> CEC Electrical Inc.</p>
		<p id="mojo">Designed by <a href="http://mojomedialabs.com/" target="_blank">Mojo Media Labs</a>.
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
    <nav id="social-media">
      <ul>
        <li id="linked-in">
          <a href="http://www.linkedin.com/company/cec-electrical-inc." target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="LinkedIn" title="LinkedIn" />
          </a>
        </li>
        <li id="facebook">
          <a href="http://www.facebook.com/pages/CEC-ELECTRICAL-INC/119162192838" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook" title="Facebook" />
          </a>
        </li>
      </ul>
    </nav>
	<nav id="bottom-menu">
		<ul>
			<li>About Us</li>
			<li>Capabilities</li>
			<li>Portfolio</li>
			<li>Careers</li>
			<li>Contact Us</li>
			<li>Service</li>
			<li>Plan Room</li>
		</ul>
	</nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
