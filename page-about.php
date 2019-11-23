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
get_header(); ?>
<div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  <!-- SPLASH IMAGE  -->
    <div class="about-hero">
        <div class="section-overlay"></div>
        <div class="page-title">
            <h2 style="font-size: 35px;">About Us</h2>
            <div class="small-title-Events">Fiercely Independent College Radio </div>
    </div>
    </div>



    <!-- Blurb -->
    <section class="about_descr" style="background-color:#353789">
        <div class="container">
            <div class="row center">
                <div class="col-md-12 col-sm-12 mt-100 mb-175">
                    <h3 class="dark-section-text" style="line-height: 40px;">We are an independent student-run online radio station at UCSD. With over 100 members, we believe in sharing diverse tastes in music and unique perspectives.</h3>
                </div>
            </div>
        </div>
    </section>

    <!--SEPARATOR-->
    <section class="portfolio" style="background-color: black;">
        <div class="top-right-separator hidden-xs"></div>
        <div class="container"></div>       
    </section>
    <!--END OF SEPARATOR-->


    <!-- History -->
    <section class="about_descr">
        <div class="container">
            <div class="row center mb-25">
                <div class="col-md-8 col-md-offset-2 col-sm-12 mt-25">
                    <div class="section-title">
                        <!--<h2 class="mb-50" style="font-size: 35px">Our History</h2>-->
                        <h2 class="section-title-3 dark-section-text mt-25 mb-25" style="font-size:40px; color: black">OUR HISTORY</h2>
                    </div>
                    <img class="showImg inline smallerImg" src="<?php echo get_template_directory_uri();?>/img/gif/tv.gif">
                    <h4 class="mb-20"><i>It all began in 1967...</i></h4>
                    <p style="line-height:24px"> when a small group of UCSD students came together to broadcast from a garage in Pacific Beach. Now, KSDT is a completely student-run radio station located in the heart of UC San Diego. After first airing on radio in June 1968, we've switched to blasting our music on the internet for our listeners to live stream from. <br> <!--<br>Come find us at the Old Student Center, where we're operated by a group of student staff and now over 100 club members. We offer a space for students to share music and thoughts, and a place where students can practice and make music. We also offer activities to the community with our events and giveaways, so be sure to keep up with us on social media!--></p>
                </div>
            </div>
        </div>
    </section>

    <!-- CURRENTLY PLAYING AND UP NEXT -->
    <section class="about_descr mt-25">
        <div class="container carousel-container mb-25">    
            <!--CAROUSEL-->
            <div class="autoplay">
                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/1.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/2.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>
            
                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/3.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/4.jpg" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/5.jpg" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/10.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/11.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/12.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/13.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/6.jpg" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/7.png" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/8.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="<?php echo get_template_directory_uri();?>/img/About/carousel/9.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">

                </div>
            </div><!--end of carousel-->
        </div><!--end of container-->

        <div class="km-space"></div>
    </section>
    <!-- END OF CURRENTLY PLAYING AND UP NEXT -->

    <!-- Mission -->
    <section class="about_descr mission-background">
        <div class="container">
            <div class="row center">
                <div class="col-md-12 col-sm-12 mt-100 mb-100 ">
                    <div class="section-title">
                        <!--<h2 class="mb-25" style="color:white; font-size: 35px;">
                            <strong>Our Mission</strong>
                        </h2>-->
                        <h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: white"><strong>OUR MISSION</h2>
                    </div>
                    <h3 class="mb-100" style="line-height: 28px; color:white"> <strong>We strive to promote independent music not available from mainstream sources and work to help the San Diego Community.</strong></h3>
                </div>
            </div>
        </div>
    </section>

    <!--SEPARATOR-->
    <section class="portfolio">
        <div class="top-right-separator hidden-xs" style="border-color: transparent transparent #000 transparent;"></div>
        <div class="container"></div>       
    </section>
    <!--END OF SEPARATOR-->


    <!-- GET INVOLVED CARDS-->
    <section class="about_descr" id="get-involved" >
        <!-- Get Involved -->
        <div id="features" class="features mbr-box mbr-section mbr-section--relative" style="border-top: 0px; padding: 15px 0 100px 0;">
            <div class="container">
                <div class="row" id="service-cards">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="row center">
                            <div class="section-title-2 mb-25">
                                <!--<h2 class="mb-25" style="font-size: 35px;">
                                    <strong>Get Involved</strong>
                                </h2>-->
                                <h2 class="section-title-3 dark-section-text" style="font-size:40px"><strong>GET INVOLVED</h2>

                                <p class ="white-font module-subtitle mt-25">
                                    <strong>We offer many opportunities for students to gain new skills and experiences. Expect to hear back from us week 0 or week 1 for your application status!</strong>
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row center">
                        <div class="feature-item">
                            <div class="col-md-3 col-sm-6">
                                <div class="item-head mb-50">
                                    <i class="lnr lnr-music-note"></i>
                                    <div class="about-card">
                                        <div class="about-card-block">
                                            <h4 class="about-card-title">DJ</h4>
                                            <img class="about-showImg inline" src="<?php echo get_template_directory_uri();?>/img/About/dj.png">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Host your show</h6>
                                                <p>Host your show, play your music, and give voice to anything that's important to you. You have the power!</p>
                                                <a href="<?php the_field('dj_app');?>" class="default-btn"> APPLY </i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End features-item -->
                        <div class="feature-item">
                            <div class="col-md-3 col-sm-6">
                                <div class="item-head">
                                    <i class="lnr lnr-briefcase"></i>
                                    <div class="about-card">
                                        <div class="card-block">
                                            <h4 class="about-card-title">Intern</h4>
                                            <img class="about-showImg inline" src="<?php echo get_template_directory_uri();?>/img/About/intern2.jpg">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Gain experience</h6>
                                                <p>Check back throughout the year for intern opportunities!</p><br><br>
                                                <a href="<?php the_field('intern_app');?>" class="default-btn"> APPLY </i></a>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <!-- End features-item -->
                        <div class="feature-item">
                            <div class="col-md-3 col-sm-6">
                                <div class="item-head">
                                    <i class="lnr lnr-enter"></i>
                                    <div class="about-card">
                                        <div class="about-card-block">
                                            <h4 class="card-title">Practice Rooms</h4>
                                            <img class="about-showImg inline" src="<?php echo get_template_directory_uri();?>/img/About/band.png">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Jam out</h6>
                                                <p>We offer practice rooms for people to jam out in. Orientation required!</p>
                                                <br><br>
                                                <a href="<?php the_field('practice_room_app');?>" class="default-btn"> APPLY </i></a>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End features-item -->

                        <div class="feature-item">
                            <div class="col-md-3 col-sm-6">
                                <div class="item-head">
                                    <i class="lnr lnr-smile"></i>
                                    <div class="about-card">
                                        <div class="about-card-block">
                                            <h4 class="about-card-title">Volunteer</h4>
                                            <img class="about-showImg inline" src="<?php echo get_template_directory_uri();?>/img/About/volunteer.png">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Help out</h6>
                                                <p>Become a volunteer and help us out at some of our events! We try to host at least one concert per every quarter!</p>
                                                <a href="<?php the_field('volunteer_app');?>" class="default-btn"> APPLY </i></a>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End features-item -->

                    </div><!--end row center--> 
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end features-->
    </section>

    <!-- FAQ -->
    <section class="about_descr">
        <div class="container carousel-container">
            <div class="row center">
                <div class="col-md-8 col-md-offset-2 col-sm-12 mt-50 mb-40">
                    <div class="section-title">
                        <p class="libre-text mt-50 mb-50" style="font-size:30px;">Have questions? Check out our FAQ and you might find what you're looking for!</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="/index.php?page_id=1073" target="_blank"><button class="button-home">View FAQ</button></a>
    </section>

  
  <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.autoplay').slick({
              slidesToShow: 2,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 2000,
              arrows: true,
              responsive: [
                {
                  breakpoint: 1250,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 1050,
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
                    slidesToShow: 1,
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
</main>
</div>

<?php
get_footer();