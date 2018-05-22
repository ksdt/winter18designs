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
	<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="autoplay">

			<?php
			/* Start the Loop */ //Note: You can only use the_post() once per iteration
			//because after once it 'sets' everything to that post
			//Thats why I only do it first in get_permalink
			$highlight_first_post = true;
			while ( have_posts() ) : ?>
				<!--CAROUSEL-->
			    	<div class="col-md-6 wow fadeInUp img-playing<?php if($highlight_first_post) echo "";else echo "2"; $highlight_first_post = false;?>" data-wow-delay=".1s">
						<img src="<?php echo get_the_post_thumbnail_url(the_post());?>" alt="img" style="width:100%;">
						<a style="display: block;"href="<?php echo get_the_permalink(get_the_ID())?>">
				    		<div class="text-home" style="background-color: #4B5257;">
				    							

				    			<?php echo get_the_title();?><br>By <?php echo get_the_author();?>
				    		</div>
				    	</a>
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

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<script type="text/javascript">
		jQuery(document).ready(function(){

			jQuery('.autoplay').slick({
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  centerMode: false,
			  autoplay: false,
			  autoplaySpeed: 2000,
			  arrows: true,
			  dots: false,
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,

			      }
			    },
			    {
			      breakpoint: 800,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,

			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,

			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
		          	slidesToShow: 1,
		          	slidesToScroll: 1

			      }
			    }
 			 ]
			});
			
		 });

	</script>
<?php
get_sidebar();
get_footer();
