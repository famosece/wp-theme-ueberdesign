<?php get_header(); ?>

<div id="primary">
	<div id="content" class="content-single">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            <div class="hugemarginbox categorybox">
                <h3>/// Kategorien:</h3>
                <ul>
                <?php
                    $cats = get_the_category();
                    foreach ($cats as $cat) {
                        echo '<li>' . $cat->name . '</li>';
                    }
                ?>
                </ul>
            </div>

		<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
