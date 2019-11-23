<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winter18redesign
 */

get_header();
?>
<?php

        include(get_template_directory() . '/inc/SpinPapiConf.inc.php');

        $sp = new SpinPapiClient($mySpUserID, $mySpSecret, 'ksdt', true, $papiVersion);
        $sp->fcInit(get_template_directory() . '/.fc');

        $shows = $sp->query(array(
            'method' => 'getRegularShowsInfo',
            'When' => 'today'
        ));
        $currentShow = $sp->query(array(
            'method' => 'getRegularShowsInfo',
            'When' => 'now'
        ));
        if ($currentShow && $currentShow['success']) {
            $currentShow = $currentShow['results'];
        	$currentShow = $currentShow[0]['ShowID'];
        }

        /*Use this to debug spinitron request*/
        //echo '<pre>' . var_export($shows, true) . '</pre>';

        if ($shows && $shows['success']) {
            $shows = $shows['results'];
           	usort($shows,'time_sort');

	        foreach ($shows as &$show) {
	                /* process time to human output */
	                $show['OnairTimeAMPM'] = 'am';
	                if (intval(explode(':', $show['OnairTime'])[0]) > 12) {
	                    $show['OnairTimeAMPM'] = 'pm';
	                    $show['OnairTime'] = intval(explode(':', $show['OnairTime'])[0]);
	                } 
	                //noon edge case
	                elseif(intval(explode(':', $show['OnairTime'])[0]) == 12) {
	                  $show['OnairTimeAMPM'] = 'pm';
	                  $show['OnairTime'] = intval(explode(':', $show['OnairTime'])[0]);
	                }
	                else {
	                    $show['OnairTime'] = intval(explode(':', $show['OnairTime'])[0]);
	                }
	                /* process djs */
	                $show['djs'] = join(' & ', array_map('djs', $show['ShowUsers']));
	            	//TODO: Sort array by time of day
	        }
        }
        function djs($a) {
            return $a['DJName'];
        }
        function time_sort($a,$b) {
		if ($a==$b) return 0;
		  return ($a['OnairTime']<=$b['OnairTime']) ? -1 : 1;
		}

		
    ?>

	<!-- HEADER  -->
	<header class="main-header">
		<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
			<!-- splash page box-intro -->
			<section class="box-intro bg-film">
				<div class="button-area">
					<!--<div id="listen-live">TUNE IN NOW</div>-->
					<a id="mobile-listen"href="https://ksdt.persona.co" target="_blank" class="button-listen-live" style="font-size: 20px;">TUNE IN NOW&nbsp;<i class="lnr lnr-music-note"></i></a>
				</div>
			</section>
			<!-- end box-intro -->
		</div>
	</header>

	<!-- CURRENTLY PLAYING AND UP NEXT -->
	<section class="about_descr">
		<div class="container carousel-container">
			<div class="row center">
				<div class="col-md-8 col-md-offset-2 col-sm-12 mt-50 mb-25">
					<div class="section-title" style="margin: 0 auto 10px;">
						<!--<h2 class="mb-50" style="font-size: 35px;">WHAT'S PLAYING</h2>-->
						<h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: black">WHAT'S PLAYING</h2>
						<div class="col-md-8 col-md-offset-2">
							<img src="<?php echo get_template_directory_uri();?>/img/Home/turntable-dripping2.png" alt="Khaki HTML Template"max-height: "100px">  
	          			</div>
	        		</div>
	      		</div>
	    	</div>

	    	<!--CAROUSEL-->
		    <div class="autoplay">
		    	<?php 
		    		$i = 0;
		    		/*reset show variable or else the loop is buggy */
		    		unset($show);
		    		$initialIndex = 0;
		    		foreach ($shows as $show) {
		    		if($currentShow == $show['ShowID']) $initialIndex =  $i; $i++;?>
			    	<div class="col-md-6 wow fadeInUp img-playing<?php if($currentShow != $show['ShowID']) echo "2"?>" data-wow-delay=".1s">
			    		<?php if(array_key_exists('ShowImgL',$show)) {
			    			$imgUrl = $show['ShowImgL']['href'];
							$imgUrl = preg_replace("/^http:/i", "https:", $imgUrl);
						}
			    		else {
			    			$fld_str = 'pic' . rand(1,5);
			    			$imgUrl = '';
			    		}?>
						<img src="<?php if($imgUrl != '')echo $imgUrl;else the_field($fld_str); $imgUrl = '';?>"alt="" style="width:100%;">
				    		<?php //Todo: make the div a link w/o messing up layout?>
				    		<a href="/show/<?php echo $show['ShowName']; ?>">
				    		<div class="text-home<?php if($currentShow != $show['ShowID']) echo '3"';else echo '" style="background-color: #4B5257;"';?>"><?php $time = $show['OnairTime'] % 12; if($time == 0) $time = 12; echo $time . $show['OnairTimeAMPM'];?> | <?php echo $show['djs'];?><br><?php echo $show['ShowName']?></div></a>
						</div>
		    	<?php } ?>
			</div>


		<div class="km-space"></div>
		<a href="/index.php?page_id=1318"><button class="button-home">See Full Schedule</button></a>
	</section>
	 <!-- END OF CURRENTLY PLAYING AND UP NEXT -->


	<!-- DJS OF THE WEEK SECTION -->
	<footer class="main-footer2" style="background-color: black">
		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
			<path d="M0 0 L50 100 L100 0 Z" fill="#fff" stroke="#fff"></path>
		</svg>
      
      	<div class="container">
      		<div class="row mt-25 mb-10 footer-widgets">
	          	<div style="text-align:center;" class="section-title-2">
	          		<div class="section-title mt-25 mb-25">
			            <!--<h2 class="mb-25" style="font-size: 35px;">DJS OF THE WEEK</h2>-->
			            <h2 class="section-title-3 dark-section-text mb-25" style = "font-size: 40px"><strong>DJS OF THE MONTH</h2>
			            <p class="module-subtitle2" style="color:#9F9F9F;">Every month we highlight DJs who have been mixing it up at UCSD! Check out their show schedules and catch them on air during the week!</p>  
	        		</div>
	        	</div>
         	</div>
      	</div>
	</footer>

	<!--INDIVIDUAL DJS-->
	<section style="background-color: black;" id="team" class="team2 mbr-box mbr-section mbr-section--relative">
		<div class="container" div style="background-color: black;">
			<div class="row">

			  	<!-- single member -->
		      	<div class="team-member col-md-3 col-sm-3 text-center">
		      		<div class="member-thumb">
		          		<div class="cover"><div class="cover-inner-left"></div></div>
		              	<img src="<?php the_field('dj1_pic');?>" alt="Team Member" class="img-responsive"style="width:250px;overflow: hidden;">
		              	<div class="team_cover"><div class="team_cover_inner"></div></div>  
		          	</div>
		          	<h6 style="color:white;"><a class = "dj_month" href="<?php the_field('dj1_url');?>"><?php the_field('dj1_name');?></a></h6>
		          	<span style="color: #9F9F9F;"><strong><?php the_field('dj1_time');?></strong></span>

		      	</div>
		    	<!-- end single member -->

		    	<!-- single member -->
		      	<div class="team-member col-md-3 col-sm-3 text-center">
		          	<div class="member-thumb">
		          		<div class="cover"><div class="cover-inner-middle"></div></div>
		              	<img src="<?php the_field('dj2_pic');?>" alt="Team Member" class="img-responsive"style="width:250px;overflow: hidden;">
		              	<div class="team_cover"><div class="team_cover_inner"></div></div>        
		          	</div>
		          	<h6 style="color:white;"><a class = "dj_month" href="<?php the_field('dj2_url');?>"><?php the_field('dj2_name');?></a></h6>
		          	<span style="color: #9F9F9F;"><strong><?php the_field('dj2_time');?></strong></span>

		      	</div>
		    	<!-- end single member -->

  				<!-- single member -->
	      		<div class="team-member col-md-3 col-sm-3 text-center">
	          		<div class="member-thumb">
	          			<div class="cover"><div class="cover-inner-right"></div></div>
	              		<img src="<?php the_field('dj3_pic');?>" alt="Team Member" class="img-responsive"style="width:250px;overflow: hidden;">
	              		<div class="team_cover"><div class="team_cover_inner"></div></div>    
	          		</div>
	          		<h6 style="color:white;"><a class = "dj_month" href="<?php the_field('dj3_url');?>"><?php the_field('dj3_name');?></a></h6>
	          		<span style="color: #9F9F9F;"><strong><?php the_field('dj3_time');?></strong></span>

	      		</div>
		    	<!-- end single member -->

		    	  				<!-- single member -->
	      		<div class="team-member col-md-3 col-sm-3 text-center">
	          		<div class="member-thumb">
	          			<div class="cover"><div class="cover-inner-right"></div></div>
	              		<img src="<?php the_field('dj4_pic');?>" alt="Team Member" class="img-responsive"style="width:250px;overflow: hidden;">
	              		<div class="team_cover"><div class="team_cover_inner"></div></div>    
	          		</div>
	          		<h6 style="color:white;"><a class = "dj_month"href="<?php the_field('dj4_url');?>"><?php the_field('dj4_name');?></a></h6>
	          		<span style="color: #9F9F9F;"><strong><?php the_field('dj4_time');?></strong></span>

	      		</div>
		    	<!-- end single member -->
		     
     	 	</div>
    	</div>
		<div class="bottom-separator hidden-xs"></div>
	</section>
	<!--END OF DJS OF THE WEEK SECTION-->
	
	<!--SEPARATOR-->
	<div class="site-hero_Home2" style="color: black;">
		<div class="section-overlay"></div>
		<div class="page-title2"></div>
	</div>

	<section class="portfolio" style="background-color: black;">
		<div class="top-right-separator hidden-xs"></div>
		<div class="container"></div>		
	</section>
	<!-- END OF SEPARATOR -->


	<!-- SERVICES PARALAX -->
	<section class = "portfolio" style="background-color: white;"></section>
	<!-- END OF SERVICES PARALAX -->


	<!-- GET INVOLVED SECTION -->
	<div class="row center">
		<!--<h2 class="mb-10" style="letter-spacing: 15px; font-size: 35px;">GET INVOLVED</h2>-->
		<div class="section-title" style="margin: 0 auto 10px;">
     <h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: black">GET INVOLVED</h2>
    </div>
	</div>

	<div id="features" class="features2 mbr-box mbr-section mbr-section--relative" style="background-color:white;">
		<div class="container">
			<div class="row center">

				<div class="col-md-1"></div>

				<!--intern service -->
				<div class="feature-item">
					<div class="col-md-2 col-sm-6">
						<div class="item-head">
							<a href="http:/ksdt.ucsd.edu/about#get-involved"><i class="lnr lnr-briefcase" style="color:#353789;"></i></a>
						</div>
						<h6>INTERN</h6>
						<p>Become an intern, shadowing one of our many talented artists at KSDT!</p>
					</div>
				</div>
				<!--end intern service-->

				<!--DJ service -->
				<div class="feature-item">
					<div class="col-md-2 col-sm-6">
						<div class="item-head">
						<a href="http:/ksdt.ucsd.edu/about#get-involved"><i class="lnr lnr-music-note" style="color:#353789;"></i></a>
						</div>
						<h6>BECOME A DJ</h6>
						<p>Host your own show, jam out and get connected with a fan base!</p>
					</div>
				</div>
				<!--end DJ service-->


				<!--practice service -->
				<div class="feature-item">
					<div class="col-md-2 col-sm-6">
						<div class="item-head">
						<a href="http:/ksdt.ucsd.edu/about#get-involved"><i class="lnr lnr-enter" style="color:#353789;"></i></a>
						</div>
						<h6>BOOK A PRACTICE ROOM</h6>
						<p>Use our practice rooms to record, play and edit your own tunes! </p>
					</div>
				</div>
				<!--end practice service-->

				<!--volunteer service -->
				<div class="feature-item">
					<div class="col-md-2 col-sm-6">
						<div class="item-head">
						<a href="http:/ksdt.ucsd.edu/about#get-involved"><i class="lnr lnr-smile" style="color:#353789;"></i></a>
						</div>
						<h6>Volunteer</h6>
						<p>Help out around the studio, or at some of our many concerts and events!</p>
					</div>
				</div>
				<!--end volunteer service-->
				<!--Subscribe Newsletter service -->
				<div class="feature-item">
					<div class="col-md-2 col-sm-6">
						<div class="item-head">
							<i class="lnr lnr-envelope" style="color:#353789;"></i>
						<h6>Subscribe</h6>
						<p>Subscribe to our newsletter and stay up to date!</p>
						<?php es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?> 
					</div>
				</div>

			</div>
		</div>
	</div>



	<a href="/index.php?page_id=25"><button class="button-home">Learn More</button></a>	

	<!-- END OF GET INVOLVED -->

	<!-- SCRIPTS -->

	<style>
	.dj_month, .dj_month:hover{
		color: white;
	}
	#es_text_email {
		width: 90%;
	}
</style>

	<script type="text/javascript">

		jQuery('#listen-live').click(function() {
			console.log('clicked');
			window.location = 'https://ksdt.ucsd.edu';
		});

	</script>

	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery('.autoplay').slick({
			  initialSlide:  <?php echo $initialIndex?>,
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  centerMode: true,
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
get_footer();