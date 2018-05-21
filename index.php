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
		  return ($a<$b) ? -1 : 1;
		}
		echo '<pre>' . var_export($shows, true) . '</pre>';

		
    ?>
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">

			<!-- splash page box-intro -->
			<section class="box-intro bg-film">
				<div class="button-area">
					<!--<div id="listen-live">TUNE IN NOW</div>-->
					<a href="https://ksdt.ucsd.edu/listen/stream.mp3" target="_blank" class="button-listen-live" style="font-size: 20px;">TUNE IN NOW&nbsp;<i class="lnr lnr-music-note"></i></a>
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
							<img src="img/Home/turntable-dripping2.png" alt="Khaki HTML Template">  
	          			</div>
	        		</div>
	      		</div>
	    	</div>

	    	<!--CAROUSEL-->
		    <div class="autoplay">
		    	<?php foreach ($shows as $show) { ?>
		    	<div class="col-md-6 wow fadeInUp img-playing" data-wow-delay=".1s">
					<img src="img/Home/banana.jpg" alt="img" style="width:100%;">
		    		<div class="text-home" style="background-color: #4B5257;"><?php $time = $show['OnairTime'] % 12; if($time == 0) $time = 12; echo $time . $show['OnairTimeAMPM'];?> | <?php echo $show['djs'];?><br><?php echo $show['ShowName']?></div>
				</div>
		    	<?php }?>;
			</div>

		<div class="km-space"></div>
		<a href="html/schedule.html"><button class="button-home">See Full Schedule</button></a>
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
		      	<div class="team-member col-md-4 col-sm-4 text-center">
		      		<div class="member-thumb">
		          		<div class="cover"><div class="cover-inner-left"></div></div>
		              	<img src="img/Home/dj-standout1.jpg" alt="Team Member" class="img-responsive">
		              	<div class="team_cover"><div class="team_cover_inner"></div></div>  
		          	</div>
		          	<h6 style="color:white;">dj&nbsp;soctopus</h6>
		          	<span style="color: #9F9F9F;"><strong>Thursdays @ 1pm</strong></span>

		      	</div>
		    	<!-- end single member -->

		    	<!-- single member -->
		      	<div class="team-member col-md-4 col-sm-4 text-center">
		          	<div class="member-thumb">
		          		<div class="cover"><div class="cover-inner-middle"></div></div>
		              	<img src="img/Home/ray-standout.jpg" alt="Team Member" class="img-responsive">
		              	<div class="team_cover"><div class="team_cover_inner"></div></div>        
		          	</div>
		          	<h6 style="color:white;">dj&nbsp;blah blah</h6>
		          	<span style="color: #9F9F9F;"><strong>Wednesdays @ 2pm</strong></span>

		      	</div>
		    	<!-- end single member -->

  				<!-- single member -->
	      		<div class="team-member col-md-4 col-sm-4 text-center">
	          		<div class="member-thumb">
	          			<div class="cover"><div class="cover-inner-right"></div></div>
	              		<img src="img/Home/cindy-standout.JPG" alt="Team Member" class="img-responsive">
	              		<div class="team_cover"><div class="team_cover_inner"></div></div>    
	          		</div>
	          		<h6 style="color:white;">dj&nbsp;tangy</h6>
	          		<span style="color: #9F9F9F;"><strong>Mondays @ 5pm</strong></span>

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
			<div class="row center mb-25">

				<!--intern service -->
				<div class="feature-item">
					<div class="col-md-3 col-sm-6">
						<div class="item-head">
							<i class="lnr lnr-briefcase" style="color:#353789;"></i>
						</div>
						<h6>INTERN</h6>
						<p>Become an intern, shadowing one of our many talented artists at KSDT!</p>
					</div>
				</div>
				<!--end intern service-->

				<!--DJ service -->
				<div class="feature-item">
					<div class="col-md-3 col-sm-6">
						<div class="item-head">
							<i class="lnr lnr-music-note" style="color:#353789;"></i>
						</div>
						<h6>BECOME A DJ</h6>
						<p>Host your own show, jam out and get connected with a fan base!</p>
					</div>
				</div>
				<!--end DJ service-->


				<!--practice service -->
				<div class="feature-item">
					<div class="col-md-3 col-sm-6">
						<div class="item-head">
							<i class="lnr lnr-enter" style="color:#353789;"></i>
						</div>
						<h6>BOOK A PRACTICE ROOM</h6>
						<p>Use our practice rooms to record, play and edit your own tunes! </p>
					</div>
				</div>
				<!--end practice service-->

				<!--volunteer service -->
				<div class="feature-item">
					<div class="col-md-3 col-sm-6">
						<div class="item-head">
							<i class="lnr lnr-smile" style="color:#353789;"></i>
						</div>
						<h6>Volunteer</h6>
						<p>Help out around the studio, or at some of our many concerts and events!</p>
					</div>
				</div>
				<!--end volunteer service-->

			</div>
		</div>
	</div>

	<a href="html/about.html"><button class="button-home">Learn More</button></a>	
	<!-- END OF GET INVOLVED -->

	<!-- SCRIPTS -->

	

	<script type="text/javascript">

		jQuery('#listen-live').click(function() {
			console.log('clicked');
			window.location = 'https://ksdt.ucsd.edu';
		});

	</script>

	<script type="text/javascript">

		jQuery(document).ready(function(){
			jQuery('.autoplay').slick({
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

	<script>
		// When the user scrolls down 50px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 20) {
		        document.getElementById("back-to-top").style.display = "block";
		    } else {
		        document.getElementById("back-to-top").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    jQuery('html, body').animate({scrollTop:0},'slow');
		}
	</script>

	<script>
		var hours = (new Date()).getHours()+1;
		var time = new Array(18);
		console.log("Changed1");

		time[0] = "12 am";
		time[1] = "1 pm";
		time[2] = "2 pm";
		time[3] = "3 pm";
		time[4] = "4 pm";
		time[5] = "5 pm";
		time[6] = "6 pm";
		time[7] = "7 pm";
		time[8] = "8 pm";
		time[9] = "9 pm";
		time[10] = "10 pm";
		time[11] = "11 pm";
		time[12] = "12 pm";
		time[13] = "7 am";
		time[14] = "8 am";
		time[15] = "9 am";
		time[16] = "10 am";
		time[17] = "11 am";

		var n = time[hours];
		console.log("time is " + n);


	    var tabs = document.getElementsByClassName("nav-item");
		var tabContent = document.getElementsByClassName("");

		setActiveTab(tabs, tabContent);

		function setActiveTab(tabs, tabContent) {

			for(var i = 0; i < tabs.length; i++){
			    if(tabContent[i].id == n) {
			    	console.log(n);
			        tabs[i].className += " active";
			        tabContent[i].className += " active";
			    }
			}
	  	}

	</script>

<?php
get_sidebar();
get_footer();