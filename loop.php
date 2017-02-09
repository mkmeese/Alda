<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<div class="thumb"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(200,400)); // Declare pixel size you need inside the array ?>
			</a></div>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<div><h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<?php html5wp_excerpt('html5wp_index'); ?></div>

	</article>
	<!-- /article -->
	<div class=" divider divider-icon center center">
	<div class="divider-inner">
		<div class="divider-inner-item divider-border double-line">
			<div class="divider-inner"></div></div>
		<div class="divider-inner-item divider-inner-icon"><i class="fa fa-pagelines"></i></div>
		<div class="divider-inner-item divider-border double-line">
			<div class="divider-inner"></div></div>
	</div>
</div>

<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'alda' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
