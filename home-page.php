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
				<span class="slide-title safe">
					Safe
				</span>
				<span class="slide-title responsive">
					Responsive
				</span>
				<span class="slide-title committed">
					Committed
				</span>
				<span class="always-on">
					always on
				</span>
			</div>
			<!--<div class="slide-title safe">Safe</div><div class="slide-title responsive">Responsive</div><div class="slide-title committed">Committed</div>
			<div class="always-on">always on</div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/slideshow-slide-1.png" alt="" />-->
			<p>CEC is one of the leading electrical contractors in Texas, and an<br />equal opportunity employer. We have the best people in the business<br />and more than ever, we believe character matters.</p>
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
			<!--<div class="slide-title safe">Safe</div>
			<div class="always-on">always on</div>
			<img src="<?php echo get_template_directory_uri(); ?>/images/slideshow-slide-2.png" alt="" />-->
			<p>At CEC, Safety is always on. With over a dozen safety-training<br />programs,and a proactive, assertive approach to preventing<br />job-related accidents, our safety rating is one of the best in the industry.</p>
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
			<!--<div class="slide-title responsive">Responsive</div>
			<div class="always-on">always on</div>
			<img src="http://placehold.it/980x386/0FF">-->
			<p>At CEC, being responsive isn’t about shortcuts &mdash; It’s about<br />being flexible where necessary and doing absolutely everything possible<br />to meet our clients' needs. With our 24-hour emergency service,<br />we're always available &mdash; you can count on CEC.</p>
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
			<!--<div class="slide-title committed">Committed</div>
			<div class="always-on">always on</div>
			<img src="http://placehold.it/980x386/0B4">-->
			<p>CEC is committed to a level of quality that is unparalleled in the<br />industry, ensuring customer satisfaction every step of the way. As one of<br />the fastest growing subcontractors in Texas, we've built lasting<br />relationships leading to long-term loyalty and referrals.</p>
		</div>
	</div>
	<div id="home-footer">
		<div id="solution" class="slide-out">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/innovative-solution.png" alt="" />
			<div class="slide-out-content">
				<h3>Innovative Solution</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.</p>
				<p class="read-more"><a href="">Read More</a></p>
			</div>
		</div>
		<div id="energy" class="slide-out">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/green-energy.png" alt="" />
			<div class="slide-out-content">
				<h3>Green Energy</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.</p>
				<p class="read-more"><a href="">Read More</a></p>
			</div>
		</div>
		<div id="lighting" class="slide-out">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headers/lighting-the-way.png" alt="" />
			<div class="slide-out-content">
				<h3>Lighting the Way</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem rutrum ligula venenatis.</p>
				<p class="read-more"><a href="">Read More</a></p>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
