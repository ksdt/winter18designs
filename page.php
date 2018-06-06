<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winter18redesign
 */

get_header();
$post_id = the_ID(); 

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), 'large' );
		if($backgroundImg[0] == '') $backgroundImg[0] = 'TODO: get a large ksdt banner as a default to use here';?>
 <!-- SPLASH IMAGE  -->
    <div class="about-hero"style="background: url('<?php echo $backgroundImg[0]?>')no-repeat center;
    background-size:100%">
        <div class="section-overlay"></div>
        <div class="page-title">
            <h2 style="font-size: 35px;"><?php the_title();?></h2>
            <div class="small-title-Events"><?php the_field('sub_title');?> </div>
    </div>
    </div>



    <!--END OF SEPARATOR-->
      <div class="container" style="padding-top: 50px;">       

		<?php 
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
