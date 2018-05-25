<?php
/**
 * The template for displaying show pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package winter18redesign
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- SPLASH IMAGE  -->
    <div class="about-hero">
        <div class="section-overlay"></div>
        <div class="page-title">
            <h2 style="font-size: 35px;">Writings</h2>
            <div class="small-title-Events">Check out features by our community</div>
    </div>
    </div>
			<div class="container" style = "">
			    <article class = "page writings">
			        <div class = "entry-content">

			        
                <div class="section-title">
                    <h2 class="section-title-3 dark-section-text mt-25 mb-25" style="font-size:40px; color: black;width:50%;"><a href="writings/blog">Blog</a></h2>
                </div>

				<?php

				$args = array(
				    'post_type'=> 'post',
				    'posts_per_page' => 4,
				    );

				$the_query = new WP_Query( $args );
				$count = 0;
				if($the_query->have_posts() ) : 
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-sm-3 wow fadeInUp img-playing2" data-wow-delay=".1s">
						<img src="<?php the_post_thumbnail_url();?>" alt="img" style="width:100%;">
							<a href="<?php the_permalink();?>">
				    		<div class="text-home" style="background-color: #4B5257;">
				    			<?php the_title();?><br>By <?php the_author();?>
				    		</div>
				    		</a>
					</div>
				<?php endwhile; 
				endif ?>


                <div class="section-title">
                    <h2 class="section-title-3 dark-section-text mt-25 mb-25" style="font-size:40px; color: black;width:50%;"><a href="writings/concertreviews">Concert Reviews</a></h2>
                </div>

				<?php

				$args = array(
				    'post_type'=> 'concertreviews',
				    'posts_per_page' => 4,
				    );

				$the_query = new WP_Query( $args );
				$count = 0;
				if($the_query->have_posts() ) : 
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-sm-3 wow fadeInUp img-playing2" data-wow-delay=".1s">
						<img src="<?php the_post_thumbnail_url();?>" alt="img" style="width:100%;">
							<a href="<?php the_permalink();?>">
				    		<div class="text-home" style="background-color: #4B5257;">
				    			<?php the_title();?><br>By <?php the_author();?>
				    		</div>
				    		</a>
					</div>
				<?php endwhile; 
				endif ?>



                <div class="section-title">
                    <h2 class="section-title-3 dark-section-text mt-25 mb-25" style="font-size:40px; color: black;width:50%;"><a href="writings/weeklypicks">Weekly Picks</a></h2>
                </div>

				<?php

				$args = array(
				    'post_type'=> 'weeklypicks',
				    'posts_per_page' => 4,
				    );

				$the_query = new WP_Query( $args );
				$count = 0;
				if($the_query->have_posts() ) : 
					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="col-sm-3 wow fadeInUp img-playing2" data-wow-delay=".1s">
						<img src="<?php the_post_thumbnail_url();?>" alt="img" style="width:100%;">
							<a href="<?php the_permalink();?>">
				    		<div class="text-home" style="background-color: #4B5257;">
				    			<?php the_title();?><br>By <?php the_author();?>
				    		</div>
				    		</a>
					</div>
				<?php endwhile; 
				endif ?>







			    </article>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
