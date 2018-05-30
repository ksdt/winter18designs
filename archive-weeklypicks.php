<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package winter18redesign
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class = "container">
        	<div class="about-hero"style="background: url('<?php echo $backgroundImg[0]?>');">
			<div class="section-overlay"></div>
			<div class="post-title">
					<h2 style="font-size: 35px;letter-spacing: 5px;"><?php the_title();?></h2>
					<div class="small-title-Events">
						<?php
							winter18redesign_posted_on();
							$author_id = get_post_field ('post_author', $post_id);
							$display_name = get_the_author_meta( 'display_name' , $author_id ); 
							echo " | " .  $display_name;
						?>
					</div>
			</div>
		</div>
            <?php get_template_part( 'template-parts/content-archive', get_post_format() ); ?>
        </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
