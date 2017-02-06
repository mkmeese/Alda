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
				<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
	<input class="search-input" type="search" name="s" placeholder="I want to find..."">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'alda' ); ?></button>
</form>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>
</div>

<?php get_footer(); ?>
