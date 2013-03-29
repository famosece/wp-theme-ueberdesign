<?php get_header(); ?>

<div id="primary">
	<div id="content" class="content-single">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            <?php the_category(); ?>

		<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
