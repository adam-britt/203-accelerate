<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<!-- <pre style="color: white;"> -->
		<?php // print_r($wp_query); exit; ?>
	<!-- </pre> -->

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; ?> <!-- end of the loop -->
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			
			<h3>Featured Work</h1>

			<ul class="homepage-featured-work">

				<?php query_posts('posts_per_page=3&post_type=case_studies&order=asc'); ?>
			    	<?php while ( have_posts() ) : the_post();
			    		$image_1 = get_field('image_1');
			    		$size = 'medium';
			    		$attr = 'href="<?php the_link(); ?>';
			    	?>
						<li class="individual-featured-work">
							<figure>
								<?php if($image_1) { echo '<a href="' . get_attachment_link($attachment->ID) . '">' . wp_get_attachment_image($image_1, $size) . '</a>'; }
								else { echo '<div style="height: 229px;"></div>'; } ?>
							</figure>
			     			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>
			     	<?php endwhile; ?>
			    <?php wp_reset_query(); ?>

		</div>
	</section>


	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From The Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
			    	<?php while ( have_posts() ) : the_post(); ?>
			     		<h2><?php the_title(); ?></h2>
			    		<?php the_excerpt(); ?>
			    		<!-- <a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a> -->
			     	<?php endwhile; ?> 
			    <?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
