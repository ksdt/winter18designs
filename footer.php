<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package winter18redesign
 */

?>
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
	        		<img src="<?php echo get_template_directory_uri();?>/img/Logos/cassette-logo2.jpg" class="logo-footer img-responsive" alt="Footer Logo" />
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
	              				<a class="facebook" href="https://www.facebook.com/KSDTCollegeRadio/">
	              					<i class="fa fa-facebook"></i>
	              				</a>
	            			</li>

				            <li>
				            	<a class="twitter" href="https://twitter.com/RADIOKSDT">
				            		<i class="fa fa-twitter"></i>
				            	</a>
				            </li>
				           
				            <li>
				            	<a class="instgram" href="https://www.instagram.com/ksdtradio/">
				            		<i class="fa fa-instagram"></i>
				            	</a>
				            </li>
	          			</ul>                 
	          		</div>

	        	</div><!-- .col-md-3 -->
	        	<!-- End Twitter Widget -->

      		</div><!-- .row -->
    	</div>
  	</footer>
  	<!-- END OF FOOTER-->
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
	    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
    