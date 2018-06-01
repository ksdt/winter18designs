	<?php

	$regularQuery = [
		'posts_per_page' => 10,
		'post_type' => array(
			'post',
			'weeklypicks',
			'concertreviews',
			'albumreviews'
		)
	];

	$query = new WP_Query( $regularQuery );

	if ( $query->have_posts() ) :
		/* Start the Loop */

		while ( $query->have_posts() ) : $query->the_post();
		?>
		<div class ="row row-index"style="margin-top: 30px">
			
				<!-- ********************* -->

				<article class="index-post" data-url="<?php the_permalink(); ?>">


					<!-- if(get_the_category() && get_the_time() ) -->
					<?php if (get_the_time() ): ?>
						<div class="col-lg-4 col-image">
							<div class="post-image">
								<?php if(has_post_thumbnail()): ?>
									<img class = "card-img-top image-extended" src = "<?php the_post_thumbnail_url() ?>"style="max-width: 300px;height:auto;">
								<?php else: ?>
									<img class = "card-img-top image-extended" src="<?php echo get_template_directory_uri() . '/ksdt.png'; ?>"style="max-width: 300px;height:auto;">
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-8 post-text">
							<div class="meta">
								<a class="cya-styles index-post-link" href="<?php the_permalink(); ?>">
								<span style="position: relative;"><?php the_title(); ?> <span>/ <?php echo get_post_type()?></span></span></a>
								<br>
								<span class="entry-date"style="color: black;"><?php echo get_the_date(); ?> / by <?php the_author(); ?></span>

							</div>
							<?php endif; ?>
							<p class="snippet"style="display: flex;">
								<?php the_excerpt(); ?>
							</p>
						</div>

				</article>
			

		</div>

		<?php

	endwhile;
endif;
?>