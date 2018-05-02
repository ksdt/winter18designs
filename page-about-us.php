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

	<!DOCTYPE html>
<html lang="en">
<head>
    <title>KSDT - About</title>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon">
    <meta name="author" content="Tanislav Robert">
    <meta name="description" content="KARMO is a creative and modern template for digital agencies">

    <!-- STYLES -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/flexslider.css">
    <link rel="stylesheet" href="../css/animsition.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="../js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../js/slick/slick-theme.css"/>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body class="animsition">
    <!-- Border -->
    <span class="frame-line right-frame visible-lg"></span>
    <span class="frame-line bottom-frame visible-lg"></span>
    <span class="frame-line left-frame visible-lg"></span>
    
    <!-- Begin Nav Bar -->
    <nav role="nav" class="nav-pos navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
  
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
         
                <!-- Button that shows on mobile view -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- KSDT Branding -->
                <a class="navbar-brand" href="../index.html">
                    <img src="../img/Logos/LOGO.png" width="80" alt="KSDT">
                </a> 
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html">Home</a></li>
                    <li class="active-nav"><a href="about.html">About</a></li>
                    <li><a href="Events.html">Events</a></li>
                    <li><a href="schedule.html">Schedule</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End nav bar -->


  <!-- SPLASH IMAGE  -->
    <div class="about-hero">
        <div class="section-overlay"></div>
        <div class="page-title">
            <h2 style="font-size: 35px;">About Us</h2>
            <div class="small-title-Events">Fiercely Independent College Radio </div>
    </div>
    </div>
</body>

  <!-- BACK TO TOP -->
  <a id="top"></a>
  <div id="back-to-top">
    <img src="../img/Home/back-to-top.png" id="topImg-home" onclick="topFunction()"></img>
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
                    <img class="showImg inline smallerImg" src="../img/gif/tv.gif">
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
                    <img src="../img/About/carousel/1.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/2.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>
            
                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/3.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/4.jpg" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/5.jpg" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/10.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/11.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/12.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/13.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/6.jpg" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/7.png" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/8.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
                </div>

                <div class="col-md-6 wow fadeInUp img-playing2" data-wow-delay=".1s">
                    <img src="../img/About/carousel/9.JPG" alt="img" style="width:100%; border: 1px solid #EEEEEE;">
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
    <section class="about_descr">
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
                                            <img class="about-showImg inline" src="../img/About/dj.png">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Host your show</h6>
                                                <p>Host your show, play your music, and give voice to anything that's important to you. You have the power!</p>
                                                <a href="https://docs.google.com/forms/d/1vRgsudf_68NkxYkxNQ7TiWTjFZdRRIY7CJpuCJDIdPY/viewform?edit_requested=true" class="default-btn"> APPLY </i></a>
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
                                            <img class="about-showImg inline" src="../img/About/intern2.jpg">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Gain experience</h6>
                                                <p>We're looking for design and audio interns. Help us out while putting some experience on your resume!</p>
                                                <p> Applications for Winter 2018 are closed. Check back next quarter!</p>
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
                                            <img class="about-showImg inline" src="../img/About/band.png">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Jam out</h6>
                                                <p>We offer practice rooms for people to jam out in. Orientation required!</p>
                                                <p> Applications for Winter 2018 are closed. Check back next quarter! </p>
                                                </br>
                                                </br>
                                                </br>
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
                                            <img class="about-showImg inline" src="../img/About/volunteer.png">
                                            <div class="about-cardContent inline">
                                                <h6 class="about-card-subtitle mb-2 text-muteds">Help out</h6>
                                                <p>Become a volunteer and help us out at some of our events! We try to host at least one concert per every quarter!</p>
                                                <p> Applications for Winter 2018 are closed. Check back next quarter!</p>
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
        <a href="https://ksdt.ucsd.edu/faq/" target="_blank"><button class="button-home">View FAQ</button></a>
    </section>

    <!-- FOOTER -->
    <footer class="main-footer">
        <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
            <path d="M0 0 L50 100 L100 0 Z" fill="#fff" stroke="#fff"></path>
        </svg>
    
        <div class="container">
            <div class="row footer-widgets">
        
                <!-- Start Contact Widget -->
                <div class="col-md-4">
                    <div class="footer-widget contact-widget">
                        <p class="footerText">The views presented on this website are not necessarily those of The University of California Regents, The University of California San Diego, or KSDT Radio.</p>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <img src="../img/Logos/cassette-logo2.jpg" class="logo-footer img-responsive" alt="Footer Logo" />
                </div><!-- END CLEFT MOST COL -->
                <!-- End Contact Widget -->

                <!-- Start Twitter Widget -->
                <div class="col-md-4 footer-right">
                    <div class="footer-widget twitter-widget">
                        <h4> Contact </h4>
                        <p> Email: gm@ksdt.org</p>
                        <p> Phone: (858) 534 – KSDT </p>
                        <ul class="social-icons" style="vertical-align: middle;">
                            <li>
                                <a class="facebook" href="https://www.facebook.com/KSDTCollegeRadio/"><i class="fa fa-facebook"></i></a>
                            </li>

                            <li>
                                <a class="twitter" href="https://twitter.com/RADIOKSDT"><i class="fa fa-twitter"></i></a>
                            </li>
                           
                            <li>
                                <a class="instgram" href="https://www.instagram.com/ksdtradio/"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>                 
                    </div>

                </div><!-- .col-md-3 -->
                <!-- End Twitter Widget -->

            </div><!-- .row -->
        </div>
    </footer>
    <!-- END OF FOOTER-->
  
  <!-- SCRIPTS -->
  <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="../js/animated-headline.js"></script>
  <script type="text/javascript" src="../js/menu.js"></script>
  <script type="text/javascript" src="../js/modernizr.js"></script>
  <script type="text/javascript" src="../js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="../js/jquery.animsition.min.js"></script>
  <script type="text/javascript" src="../js/init.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <script type="text/javascript" src="../js/smooth-scroll.js"></script>
  <script type="text/javascript" src="../js/numscroller.js"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/slick/slick.min.js"></script>


  <script type="text/javascript">
    $(window).load(function() {
      new WOW().init();

      // initialise flexslider
      $('.flexslider').flexslider({
        animation: "fade",
        directionNav: true,
        controlNav: false,
        keyboardNav: true,
        slideToStart: 0,
        animationLoop: true,
        pauseOnHover: false,
        slideshowSpeed: 4000,
      });

      smoothScroll.init();

      // initialize isotope
      var $container = $('.portfolio_container');
      $container.isotope({
        filter: '*',
      });

      $('.portfolio_filter a').click(function(){
        $('.portfolio_filter .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
          filter: selector,
          animationOptions: {
            duration: 500,
            animationEngine : "jquery"
          }
        });
        return false;
      });
    });
  </script>

  <script type="text/javascript">
        $(document).ready(function(){
            $('.autoplay').slick({
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
        $('html, body').animate({scrollTop:0},'slow');
    }
  </script>

</body>
</html>
<?php
get_sidebar();
get_footer();
