<?php get_header(); ?>
<div class="wrapper">
	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'alda' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home', 'alda' ); ?></a>
				</h2>
				<h2>or</h2>
				<div class="section group"><div class="col span_1_of_3">
					<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
					<input class="search-input" type="search" name="s" placeholder="I want to find..." size="60">
					<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'alda' ); ?></button>
					</form>
				</div></div>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>
</div>

<?php get_footer(); ?>
