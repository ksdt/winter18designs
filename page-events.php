<?php
/**
 * The template for displaying the events page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winter18redesign
 */
get_header(); ?>

<div class="site-hero_Events2">
    <div class="section-overlay"></div>
    <div class="page-title">
        <h2 style="font-size: 35px;">EVENTS</h2>
        <div class="small-title-Events">We like to throw dance parties and give away tickets</div>
    </div>
</div>


	<!-- COMING UP -->
	<section class="about_descr" style="background-color:#fff; padding-bottom: 50px">
		<div id="features" class="features2 mbr-box mbr-section--relative" style="background-color:#000">
            <div class="container">
                <div class="row center">
				    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="section-title-events"></div>
						<h2 class="section-title-3 dark-section-text mb-25" style = "font-size: 40px">UPCOMING</h2>
						<p class="white-font module-subtitle mb-25">Follow us on<span><a href="https://www.facebook.com/KSDTCollegeRadio/" target="_blank" class="event-link" style="padding-left:8px; color: #D53B80;"><strong>facebook</strong></a></span> and never miss a beat! KSDT throws awesome events and concerts that are free for all UCSD students!</p>
					</div>
				</div>
			</div>
		</div>
    </section>


    <section class="mb-50">
		<div class="container">
			<div class="row center mb-25">

				<!--START SLIDER-->
				<div class="team-member col-md-4 col-md-offset-1 text-center">
					<div class="member-thumb" style="border: 0px solid black">	
                    	<img src="<?php the_field('upcoming_pic');?>" alt="Event Flyer" class="img-responsive">
                    	<div class="team_cover">
                            <div class="team_cover_inner"></div>
                        </div>
                        <div class="overlay" style="background-color:black">
                        	<p><strong>03.07.18</strong></p>
                            <h6 style="padding: 0px 15px 0px 15px; color:white">ANOTHER GODDAMN OPEN MIC NIGHT </h6>
                            <p><strong>7PM</strong> @ <em>KSDT</em></p>
                            <div class="social-links">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/events/156816381687237/?active_tab=discussion"><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-calendar"></i></a>
                            </div>
                        </div>
                	</div>
             	</div>

                <div class="col-md-6  mt-50" style="margin-left:40px">
                    <div class="card-event">
                        <div class="card-block">
                            <h4 class="card-title" style="text-align:left; font-size: 24px"> 03.07 | God Damn Open Mic Night</h4>
                            <div class="cardContent inline">
                                <p class="events-card-text mb-25">Did you miss open mic eagle? Did you fail your midterms? Are you not sure what you can do with all this emotion?<br><br>COME TO OUR GOD DAMN OPEN MIC NIGHT!!!</p>
                                <a href="https://www.facebook.com/events/156816381687237/" class="default-btn-events-fb" style="align-content: center;"> FACEBOOK 
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a><br>

							    <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=MzhtZnF1dDA1dXBzdjA1amRuMmU0dG9qcjEgZHZuMDIzQHVjc2QuZWR1&amp;tmsrc=dvn023%40ucsd.edu" class="default-btn-events-google" style="align-self: center"> GOOGLE CALENDAR 
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
             	    </div>
                </div>

			</div><!-- end row -->
		</div><!-- end container -->
    </section>

    <!-- Parallax Image -->
    <section id="testimonials" class="testimonials mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted mbr-parallax-background" style="background-image: url(<?php echo get_template_directory_uri();?>/img/Events/gallery-1.jpg); margin: 5px 0px 5px 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="avatar-hidden"></div>
                                <h5></h5>
                                <p class="author"></p>
                            </li>
                        </ul>
                    </div>
                </div>
          </div>
        </div>
    </section>



    <section class="past-events" style="background-color: black; padding-top:50px; padding-bottom: 0px">
        <div class="container">
    
            <!--PAST EVENTS-->
            <div class="col-sm-12-offset-2">
                <div class="row center mb-50" >
                    <h2 class="section-title-3 dark-section-text mb-50" style="font-size:40px"> PAST</h2>
                    <p class="module-subtitle" style="color:white">
                       Shoulda, coulda, woulda! These events are over but you can still relive the fun on our gallery.</p>
                </div>
            </div>
    
            <div class="row center" style="margin-bottom: 200px"">
                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center">
                    <div class="member-thumb">
                        
                        <img src="<?php echo get_template_directory_uri();?>/img/Events/flyer-1.jpg" alt="Event Flyer" class="img-responsive">
                        
                                
                    </div>
                        <h5 style="color:white">Jan 25th</h5>      
                </div>
                <!-- end single member -->
                
                 <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-cente mb-">
                    <div class="member-thumb">
                    
                        <img src="<?php echo get_template_directory_uri();?>/img/Events/flyer6.png" alt="Event Flyer" class="img-responsive">
                    </div>
                    <h5>Nov 30th</h5>
                </div>
                <!-- end single member -->

                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6  text-center ">
                    <div class="member-thumb">
                        <div class="cover"><div class="cover-inner-right"></div></div>
                        <img src="<?php echo get_template_directory_uri();?>/img/Events/flyer7.png" alt="Event Flyer" class="img-responsive">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                    </div>
                    <h5>June 8th</h5>
                </div>
                <!-- end single member -->

                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6  text-center ">
                    <div class="member-thumb">
                        <div class="cover"><div class="cover-inner-right"></div></div>
                        <img src="<?php echo get_template_directory_uri();?>/img/Events/flyer-5.png" alt="Event Flyer" class="img-responsive">
                    </div>
                    <h5>Feb 17th</h5>
                </div>
                <!-- end single member -->

            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="top-right-separator hidden-xs" style="border-color: transparent transparent #fff transparent;"></div>
        <div class="container"></div>       
    </section>


    <!-- EVENT PHOTOS SECTION -->

        <div class="top-right-separator hidden-xs"></div>
    <section class="about_descr">

        <div class="container carousel-container">
            <div class="row center">
                <div class="" col-sm-12 mt-50 mb-50">
                    <div class="section-title">
                        <h2 class="section-title-3 dark-section-text mb-50" style="font-size:40px"> EVENT PHOTOS</h2>
                        <p class="module-subtitle mt-50 mb-50" font-size: 16px;">Don't forget to find your beautiful face in our Events Gallery! We love taking photos of both artists and students at concerts! Creep us on flickr and feel free to tag yourself or your friends!</p>
                    </div>
                </div>
            </div>

            <!--BEGIN CAROUSEL-->
            <div class="responsive mb-50">      
                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic1.jpg" alt="img" style="width:100%;">
                </div>


                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic2.jpg" alt="img" style="width:100%">
                </div>
            
                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic3.jpg" alt="img" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic4.jpg" alt="img" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic5.jpg" alt="img" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic6.jpg" alt="img" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic7.jpg" alt="img" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic8.jpg" alt="img" style="width:100%">
                </div>

                <div class="col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <img src=<?php echo get_template_directory_uri();?>/img/Events/carousel/openmic9.jpg" alt="img" style="width:100%">
                </div>

            </div>
            <!--END CAROUSEL-->
        </div>

        <a href="https://www.flickr.com/photos/138845705@N02/albums/with/72157693978737415" target="_blank">
            <button class="button-events">View Flickr</button>
        </a>

    </section>
    <!--END OF EVENT PHOTOS SECTION-->


    <!-- SERVICES PARALAX -->
    <section class = "portfolio" style="background-color: white;"></section>
    <!-- END OF SERVICES PARALAX -->


    <section class="about_descr mt-100" style="background-color:#fff; padding-bottom: 50px">
        <div id="features" class="features2 mbr-box mbr-section--relative" style="background-color:#000">
            <div class="container">
                <div class="row center">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px">CONCERT GIVEAWAYS</h2>
                        <p class="white-font module-subtitle mb-25">Follow us on<span><a href="https://www.facebook.com/KSDTCollegeRadio/" target="_blank" class="event-link" style="padding-left:8px; color: #D53B80;"><strong>facebook</strong></a></span> and never miss a beat! KSDT throws awesome events and concerts that are free for all UCSD students!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--CONCERT GIVEAWAYS-->
	<section class="about_descr" style="background-color: white; padding-top:50px;">
		<div class="container mb-25">
			<div class="row center">
                
                <!-- single member -->
                <div class="team-member col-md-4 col-sm-4 text-center">
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-left"></div></div>
                        <img src=<?php echo get_template_directory_uri();?>/img/Events/concert-1.jpg" alt="Event Flyer" class="img-responsive giveaway-img">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                    </div>
                    <h4 style="color:black">FEB 20TH</h4>
                </div>
                <!-- end single member -->
                
                 <!-- single member -->
                <div class="team-member col-md-4 col-sm-4 text-cente mb-">
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-middle"></div></div>
                        <img src=<?php echo get_template_directory_uri();?>/img/Events/concert-4.jpg" alt="Event Flyer" class="img-responsive giveaway-img">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                    </div>
                    <h4 style="color:#black">JAN 18TH</h4>
                </div>

                <!-- end single member -->

                <!-- single member -->
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="giveaway-thumb">
                        <div class="cover"><div class="cover-inner-middle"></div></div>
                        <img src=<?php echo get_template_directory_uri();?>/img/Events/concert-2.jpg" alt="Event Flyer" class="img-responsive giveaway-img">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                    </div>
                    <h4 style="color:black">NOV 17th</h4>
                </div>
                <!-- end single member -->
                <div class="row center">
                <div class="giveaway-details col-md-4 col-sm-4 text-center">
                    <h5></h5>
                </div>

                <div class="giveaway-details col-md-4 col-sm-4 text-center">
                    <h5></h5>
                </div>

                <div class="giveaway-details col-md-4 col-sm-4 text-center">
                    <h5></h5>
                </div>
            </div>
        </div>
	</section>


    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.responsive').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 2000,
              arrows: true,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
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
?>