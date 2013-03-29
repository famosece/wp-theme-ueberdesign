<?php get_header(); ?>

<div id="primary">
	<div id="content" class="content-home">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

    	    <a href="<?php the_permalink(); ?>">

    	        <?php
    	            $attachmentId = get_post_thumbnail_id();
    	            $featuredImg = wp_get_attachment_image_src($attachmentId, 'medium');
	            ?>
    	        <img src="<?php echo $featuredImg[0]; ?>" />
    	        <div class="imgcaption">
    	            <h2><?php the_title(); ?></h2>
        	        <p><?php the_excerpt(); ?></p>
    	        </div>
    	    </a>


		<?php endwhile; ?>

	<?php else : ?>

	<?php endif; ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
