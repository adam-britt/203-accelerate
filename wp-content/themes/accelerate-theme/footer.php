<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p class="footer-copyright">&copy; <?php bloginfo('title'); ?>, LLC</p>
					<nav class="social-nav-mobile" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
					</nav>
				</div>
				<nav class="social-nav-desktop" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
				</nav>
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
