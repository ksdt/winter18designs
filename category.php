<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winter18redesign
 */

get_header();
?>
<?php 
//get the category name to link to that image in the theme
$arr = explode(' ',get_the_archive_title());
$imgUrl =  $arr[1];?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
			<header class="page-header">

			</header><!-- .page-header -->
			
			<div class="category-hero"style="background: url('<?php echo get_template_directory_uri();?>/img/category/<?php echo $imgUrl;?>.jpg') no-repeat">
				<div class="section-overlay"></div>
					<div class="category-title">
						<h2 style="font-size: 35px;"><?php the_archive_title();?></h2>
							<div class="small-title-Events">
							<?php  the_archive_description();?></div>
					</div>
			</div>
			<div class="autoplay"style="padding-top: 30px;">
			<?php
			/* Start the Loop */ //Note: You can only use the_post() once per iteration
			//because after once it 'sets' everything to that post (global basically)
			//Thats why I only do it first in get_permalink
			$highlight_first_post = true;
			while ( have_posts() ) : ?>
<div class ="row row-index row-eq-height"style="margin-top: 30px">
			
				<!-- ********************* -->

				<article class="index-post" data-url="<?php the_permalink(the_post()); ?>">


					<!-- if(get_the_category() && get_the_time() ) -->
					<?php if (get_the_time() ): ?>
						<div class="col-lg-4 col-image">
							<div class="post-image"style="max-width: 300px;max-height: 300px;">
								<?php if(has_post_thumbnail()): ?>
									<img class = "card-img-top image-extended" src = "<?php the_post_thumbnail_url('medium') ?>"style="max-width: 300px;max-height:300px;">
								<?php else: ?>
									<img class = "card-img-top image-extended" src="<?php echo get_template_directory_uri() . '/ksdt.png'; ?>"style="max-width: 300px;max-height: 300px;">
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-8 post-text"style="max-height: 300px;height: 100%;">
							<div class="meta">
								<a class="cya-styles index-post-link" href="<?php the_permalink(); ?>">
								<span style="position: relative;font-size: large;font-weight: bold"><?php the_title(); ?> </span></a>
								<br>
								<span class="entry-date"style="color: grey;"><?php echo get_the_date(); ?> in <?php  echo (get_the_category_list(__(', ')));?> | <?php the_author(); ?> </span>

							</div>
							<?php endif; ?>
							<p class="snippet"style="display: flex;">
								<?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> Read More...</a>
							</p>
						</div>

				</article>
			

		</div>
				<?php			

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();
		?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_sidebar();
get_footer();
