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
<!--CONTACT US HEADER-->
<section>
	<div class="site-hero_2" alt="Staff picture">
	
		<div class="page-title">
			<h2 class="contact-header" style="font-size: 31px;">CONTACT US</h2>
     		 <div class="small-title-Events">Come find us blasting jams!</div>
		</div>

	</div>
</section>
<!--END OF CONTACT US HEADER-->

<!-- BACK TO TOP -->

<!--LOCATION-->

<section>
	<div id="features" class="features2 mbr-box mbr-section--relative" style="background-color: white">
        <div class="container">
            <div class="row center">
				<h2 class="section-title-3 dark-section-text" style="font-size:40px; color: black">LOCATION</h2>
          		<p class="module-subtitle black-font mt-25" style="font-size:22px;"> Follow the good music - we are located across from the General Store in the old student center</p> 
        	</div>
		
		</div>
</div>
</section>

<section class="contact_brick mb-75">
<div class="container">
   

 	<div class="row center">
   	 	<div class="col-md-6 col-sm-12 mb-25">
      		<img src="<?php echo get_template_directory_uri();?>/img/Contact/outside.jpg" alt="img" class="img-responsive">
     	</div>

   		 <div class="col-md-6 col-sm-12 mb-25">
      		<div class="map-responsive">
       			 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d837.6979842654423!2d-117.24026000000002!3d32.877224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2154b8e9cbc32568!2sKSDT+Radio!5e0!3m2!1sen!2sus!4v1519466025156" width="600" height="450" frameborder="0" allowfullscreen></iframe>
      		</div>
    	</div>        
 	</div>

 	<div class="row">
  		<div class= "text-center">
   		<h5 style="line-height: 1.6; font-size: 20px"><strong>KSDT RADIO</strong>
   			<br> University of California, San Diego<br>
    			9500 Gilman Dr. #0077 <br>
   				 La Jolla, CA. 92093-0315
    	</h5>
  		</div>
	</div>

</div> <!-- END CONTAINER -->
	</section><!--END OF LOCATION-->

<!-- MEETINGS-->
<section class="about_descr" style="background-color: #000; padding-bottom: 50px">
    <div id="features" class="features2 mbr-box mbr-section--relative" style="background-color:#000">
        <div class="container">
            <div class="row center">
					<h2 class="section-title-3 dark-section-text mb-25" style = "font-size: 40px; font-color:white">MEETINGS</h2>
			    <div class="col-md-8 col-md-offset-2 col-sm-12">
				</div>
			</div>
		</div>
	</div>

    <div class="container" style="background-color:white; border-radius:5px">
    	<div class="row center mb-50">
            

                <div class="col-md-6 col-md-offset-1 text-center">
                    <div class="staff-meeting-thumb">
                        <div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="<?php echo get_template_directory_uri();?>/img/Contact/staffmeeting.jpg" alt="Staff Meeting" class="img-responsive mt-75">
                    </div>
                </div>

             	<div class="col-md-5">
                	<div class="card-contact">
                    	<div class="card-block">
                   			<div class="module-subtitle-contact2">General</div>
	                        <div class="small-meeting-time"><?php the_field('general_meeting_time');?></div>
	                        <p class="small-title-contact mb-25" style="color:#353789; height: 5px; font-size: 15px;">Open to everyone!</p>
	                        <p class="small-title-contact mb-25">Where we discuss station updates and upcoming events. Perfect meeting for those interested in getting involved or working with KSDT.</p> 

	                
                    	</div>
                
                    	<div class="column-contact">
	                        <div class="module-subtitle-contact2 mt-25">Staff</div>
	                        <div class="small-meeting-time"><?php the_field('staff_meeting_time');?></div>
	                       	<p class="small-title-contact mb-25" style="color:#353789; height: 5px; font-size: 15px">Open to staff + djs!</p>

	                        <p class="small-title-contact"> Where the details get worked out and ideas get introduced. Perfect meeting for those interested in becoming a staff member.</p>
                    	</div>
                 	</div>
            	</div>      
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--END OF MEETINGS-->

<!--MUSICIANS CONTACT-->
<section class="contact-brick" style="background-color:black">

	<div class="container">
		<div class="row center">
			<div class="col-md-8 col-md-offset-2 col-sm-12 mb-50">
				<h2 class="section-title-3 dark-section-text" style="font-size:40px; color:white">WE &hearts; ARTISTS & MUSICIANS</h2>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row center mb-100">
			<div class="col-md-12 col-sm-12">

				<div class="col-md-6">
					<div row="row center">
						<div class="contact-card-artists">
							
								<p class="module-subtitle-contact2" style="text-align:center; padding: 10px 30px 0px 30px"><strong>Bookings</strong></p>
								<p class="small-title-contact3" style="color:black;"> <span>bookings@ksdt.org</span></p>
							
						</div> 
					</div>
				</div>

				<div class="col-md-6 contact-card-submissions">
					<div row="row center">
						<div class="contact-card-artists">
							
								<p class="module-subtitle-contact2" style="text-align:center; padding: 10px 30px 0px 30px"><strong>Submissions</strong></p>
								<p class="small-title-contact3" style="color:black;"> <span>Submissions@ksdt.org</span></p>
							
						</div> 
					</div>
				</div>

    		</div>
  		</div>
	</div>
</section>
<!--END OF MUSICIANS CONTACT-->



<!-- STAFF INFO -->
<section class="contact_brick" style="background-color:black">

	<div id="features" class="features2 mbr-box mbr-section--relative" style="background-color:#fff">

    <div class="container">
      	<div class="row center mt-25 mb-50">
          	<div class="col-md-8 col-md-offset-2 col-sm-12">
              	<div class="section-title-events"></div>
                <h2 class="section-title-3 dark-section-text" style="font-size:40px;color: black">STAFF INFO</h2>
                <p class="module-subtitle black-font mt-25" style="font-size:22px;"> E-mail us or come by our office hours. Internships available for all staff positions (excluding general manager)</p>
            </div>
        </div>
    </div>

	<div class="container mt-50">		
			<div class="row">
                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center">
                 <h6><span>Manager</span></h6>
                 <p><span>gm@ksdt.org</span></p>
               
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="<?php echo the_field('gm1_pic')?>" alt="Manager - <?php echo the_field('gm1');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('gm1');?></h6>
                                <p>gm@ksdt.org</br><?php echo the_field('gm1-oh');?></p>
                            </div>
                    	
                	</div>
                </div>
                <!-- end single member -->

 
              <!-- single member -->
              <div class="team-member col-md-3 col-sm-6 text-center">
                <h6><span>Manager</span></h6>
                <p><span>gm@ksdt.org</span></p>
                
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-middle"></div></div>
                        <img src="<?php echo the_field('gm2_pic')?>" alt="Manager - <?php echo the_field('gm2');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('gm2');?></h6>
                                <p>gm@ksdt.org</br><?php echo the_field('gm2');?></p>
                            </div>
                    </div>	

                </div>
                <!-- end single member -->

                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center ">
                <h6><span>Promotions</span></h6>
                <p><span>promotions@ksdt.org</span></p>
                
                 	<div class="member-thumb">
                    <div class="cover"><div class="cover-inner-right"></div></div>
                        <img src="<?php echo the_field('promotions_pic')?>" alt="Promotions - <?php echo the_field('promotions');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('promotions');?></h6>
                                <p>promotions@ksdt.org </br><?php echo the_field('promotions-oh');?></p>
                            </div>
                    </div>
               	</div>

                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center">
                 <h6><span>Music</span></h6>
                 <p><span>music@ksdt.org</span></p>
               
                    <div class="member-thumb">
                        <div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="<?php echo the_field('music_director_pic')?>" alt="Promotions - <?php echo the_field('music_director');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('music_director');?></h6>
                                <p>music@ksdt.org</br><?php echo the_field('music_director-oh');?></p>
                            </div>
                        
                    </div>
                </div>
                <!-- end single member -->
            </div>


            <div class="row">
                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center">
                 <h6><span>Technology</span></h6>
                 <p><span>webmaster@ksdt.org</span></p>
               
                    <div class="member-thumb">
                        <div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="<?php echo the_field('tech_pic')?>" alt="Promotions - <?php echo the_field('tech');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('tech');?></h6>
                                <p>webmaster@ksdt.org</br><?php echo the_field('tech-oh');?></p>
                            </div>
                        
                    </div>
                </div>
                <!-- end single member -->

 
              <!-- single member -->
              <div class="team-member col-md-3 col-sm-6 text-center">
                <h6><span>Audio</span></h6>
                <p><span>engineer@ksdt.org</span></p>
                
                    <div class="member-thumb">
                        <div class="cover"><div class="cover-inner-middle"></div></div>
                        <img src="<?php echo the_field('engineer1_pic')?>" alt="Programming - <?php echo the_field('engineer1');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('engineer1');?></h6>
                                <p>engineer@ksdt.org</br><?php echo the_field('engineer1-oh');?></p>
                                
                            </div>
                    </div>  

                </div>
                <!-- end single member -->

                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center ">
                <h6><span>Audio</span></h6>
                <p><span>engineer@ksdt.org</span></p>
                
                    <div class="member-thumb">
                    <div class="cover"><div class="cover-inner-right"></div></div>
                        <img src="<?php echo the_field('engineer2_pic')?>" alt="Audio Engineer - <?php echo the_field('engineer2');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('engineer2');?></h6>
                                <p>engineer@ksdt.org </br><?php echo the_field('engineer2-oh');?></p>
                            </div>
                    </div>
                </div>

                <!-- single member -->
                <div class="team-member col-md-3 col-sm-6 text-center">
                 <h6><span>Graphics</span></h6>
                 <p><span>graphics@ksdt.org</span></p>
               
                    <div class="member-thumb">
                        <div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="<?php echo the_field('graphics_pic')?>" alt="Promotions - <?php echo the_field('graphics');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('graphics');?></h6>
                                <p>graphics@ksdt.org</br><?php echo the_field('graphics-oh');?></p>
                            </div>
                        
                    </div>
                </div>
                <!-- end single member -->
            </div>

              <div class="row center">
                <!-- single member -->
                <div class="team-member col-md-3 text-center">
                 <h6><span>Secretary</span></h6>
                 <p><span>secretary@ksdt.org</span></p>
               
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-left"></div></div>
                        <img src="<?php echo the_field('secretary_pic')?>" alt="Promotions - <?php echo the_field('secretary');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('secretary');?></h6>
                                <p>secretary@ksdt.org</br><?php echo the_field('secretary-oh');?></p>
                            </div>
                    	
                	</div>
                </div>
                <!-- end single member -->

 
              <!-- single member -->
              <div class="team-member col-md-3 text-center">
                <h6><span>Programming</span></h6>
                <p><span>programming@ksdt.org</span></p>
                
                    <div class="member-thumb">
                    	<div class="cover"><div class="cover-inner-middle"></div></div>
                        <img src="<?php echo the_field('programming_pic')?>" alt="Programming - <?php echo the_field('programming');?>" class="img-staff">
                        <div class="team_cover"><div class="team_cover_inner"></div></div>
                            <div class="overlay">
                                <h6><?php echo the_field('programming');?></h6>
                                <p>programming@ksdt.org</br><?php echo the_field('programming-oh');?></p>
                            </div>
                    </div>	

                </div>
                <!-- end single member -->

            </div><!--END ROW-->
		<div class="bottom-separator hidden-xs"></div>
</section>
<!--END OF STAFF MEETINGS-->

<?php
get_sidebar();
get_footer();