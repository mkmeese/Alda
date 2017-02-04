<?php get_header(); ?>

	<main role="main">
		<!-- About section -->
		<section>
					<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'alda' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>


			
		</section>
		<!-- /section -->
				
		<!-- Portfolio section -->
		<section>
					<h1><?php _e( 'Categories for ', 'alda' ); Portfolio; ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
				</section>
		<!-- /section -->
		
			<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
		
	</main>



<?php get_footer(); ?>