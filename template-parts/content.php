<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winter18redesign
 */
?>
<pre>blah<?php winter18redesign_posted_on();?> </pre>
<div class="post-hero">

		<div class="section-overlay"></div>
		<div class="post-title">
				<h2 style="font-size: 35px;"><?php the_title();?></h2>
				<div class="small-title-Events"><?php
								winter18redesign_posted_on();
								winter18redesign_posted_by();
								?> </div>
		</div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
	/*	if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;*/

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">

			</div><!-- .entry-meta -->
		<?php endif; ?>

	<?php winter18redesign_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'winter18redesign' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'winter18redesign' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php winter18redesign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
