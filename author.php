<?php get_header(); ?>
<div class="wrapper">
	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'alda' ); echo get_the_author(); ?></h1>
			
			<?php rewind_posts();?>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

			</article>
			<!-- /article -->


		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'alda' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>
<?php get_footer(); ?>
