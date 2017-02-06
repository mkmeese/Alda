<?php get_header(); ?>
<div class="wrapper">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

				<div class="sidebar-widget">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
				</div>
	</main>
</div>
<?php get_footer(); ?>
