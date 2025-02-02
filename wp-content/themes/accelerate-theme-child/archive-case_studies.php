<?php
/**
 * The template for displaying the case studies archive page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php query_posts('posts_per_page=3&post_type=case_studies&order=asc');
			while ( have_posts() ) :
				the_post();
				$image_1 = get_field('image_1');
				$size = "full";
				$services = get_field('services');
			?>
				<article class="case-study clearfix">

					<aside class="case-study-sidebar">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
						<h5><span><?php echo $services; ?></span></h5>
						<?php the_excerpt(); ?>
						<p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
					</aside>

					<div class="case-study-images">
						<a href="<?php the_permalink(); ?>">
							<?php if($image_1) {
								echo wp_get_attachment_image( $image_1, $size );
							} ?>
						</a>
					</div>

				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>