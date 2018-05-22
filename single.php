<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package winter18redesign
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(the_ID()), 'full' );
		if($backgroundImg[0] == '') $backgroundImg[0] = 'TODO: get a large ksdt banner as a default to use here';?>
		<div class="post-hero"style="background: url(<?php echo $backgroundImg[0]?>) no-repeat">
			<div class="section-overlay"></div>
			<div class="post-title">
					<h2 style="font-size: 35px;"><?php the_title();?></h2>
					<div class="small-title-Events">
						<?php
							winter18redesign_posted_on();
							winter18redesign_posted_by();
						?></div>
			</div>
		</div>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
