<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <!--
    	<h1 class="entry-title">
    	    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'myThemeName' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    	        <?php the_title(); ?>
    	    </a>
	    </h1>
	    -->

		<div class="entry-meta"><!-- posted on -->
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content standard-page">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'myThemeName' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'myThemeName' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
	</footer><!-- #entry-meta -->

</article><!-- #post-<?php the_ID(); ?> -->
