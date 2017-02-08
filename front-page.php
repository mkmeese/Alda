<?php get_header(); ?>
	<div class="wrapper">
	<main role="main">
		<!-- About section -->
		<section>
		<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				
				<br class="clear">

			</article>

		<?php endwhile; ?><?php else: ?><?php endif; ?>
		</section>
		<!-- /About section -->

		<!-- Timeline section -->
		<section>
			<h1>A few milestone projects...</h1>
				<div class="section group timerow">
					<div class="col span_1_of_3">
						<div class="yearbox"><br>2012</div>
						<div class="timebox"><h2>Beginning a Journey</h2>
						<h3>with the</h3>
						<h2><a href="<?php echo home_url(); ?>/GRR">Gainesville Roller Rebels</a></h2>
					</div></div>
					<div class="col span_1_of_3">
						<div class="yearbox"><br>2014</div>
						<div class="timebox"><h2>Bringing it in (to the Office)</h2>
						<h3>with the</h3>
						<h2><a href="<?php echo home_url(); ?>/CPET">Center for Precollegiate Education and Training</a></h2>
					</div></div>
					<div class="col span_1_of_3">
						<div class="yearbox"><br>2016</div>
						<div class="timebox"><h2>Branching Out</h2>
						<h3>with the</h3>
						<h2><a href="<?php echo home_url(); ?>/mcnair">McNair Scholars</a></h2>						
					</div></div>
					<div class="col span_3_of_3"><a href="<?php echo home_url(); ?>/category/portfolio">See the whole portfolio...</a></div>
				</div>
		</section>
		<!-- /Timeline section -->
		
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
		
	</main>

	</div>

<?php get_footer(); ?>