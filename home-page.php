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
	<div id="home-page-slideshow">
		<ul>
			<li><a href="#slide-1"> </a></li>
			<li><a href="#slide-2"> </a></li>
			<li><a href="#slide-3"> </a></li>
			<li><a href="#slide-4"> </a></li>
		</ul>
		<div id="slide-1">
			<div class="image">
				<div style="position: absolute; top: 0; left: 0;">
				<div class="slide-title safe">
					Safe
				</div>
				<div class="slide-title responsive">
					Responsive
				</div>
				<div class="slide-title committed">
					Committed
				</div>
				<div class="always-on">
					always on
				</div>
				</div>
			</div>
			<p>CEC is one of the leading electrical contractors in Texas, and an<br />equal opportunity employer. We have the best people in the business and more than ever, we believe character matters.</p>
		</div>
		<div id="slide-2">
			<div class="image">
				<span class="slide-title safe">
					Safe
				</span>
				<span class="always-on">
					always on
				</span>
			</div>
			<p>At CEC, Safety is always on. With innovative safety-training programs, and a proactive, assertive approach to preventing job-related accidents, our safety record is one of the best in the industry.</p>
		</div>
		<div id="slide-3">
			<div class="image">
				<span class="slide-title responsive">
					Responsive
				</span>
				<span class="always-on">
					always on
				</span>
			</div>
			<p>At CEC, being responsive isn’t about shortcuts &mdash; It’s about being flexible where necessary and doing absolutely everything possible to meet our clients' needs. With our 24-hour emergency service, we're always available &mdash; you can count on CEC.</p>
		</div>
		<div id="slide-4">
			<div class="image">
				<span class="slide-title committed">
					Committed
				</span>
				<span class="always-on">
					always on
				</span>
			</div>
			<p>CEC is committed to a level of quality that is unparalleled in the industry, ensuring customer satisfaction every step of the way. As one of the fastest growing electrical subcontractors in Texas, we are building long-term relationships through integrity, loyalty, and dedication to excellence. We are committed to you.</p>
		</div>
	</div>
	<div id="home-footer">
		<div id="energy" class="slide-out">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/green-energy.png" alt="" />
			<div class="slide-out-content">
				<h3>Green Energy</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.</p>
				<p class="read-more"><a href="?page_id=30">Read More</a></p>
			</div>
		</div>

		<div id="commissioning" class="slide-out">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/commissioning.png" alt="" />
			<div class="slide-out-content">
				<h3>Commissioning</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.</p>
				<p class="read-more"><a href="?page_id=34">Read More</a></p>
			</div>
		</div>

		<div id="join-our-team" class="slide-out">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/join-our-team.png" alt="" />
			<div class="slide-out-content">
				<h3>Join Our Team</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.</p>
				<p class="read-more"><a href="?page_id=71">Read More</a></p>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
