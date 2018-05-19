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

	<div class="contact-wrapper">
		<div class="row center" style="margin: 0px 30px 0px 30px">
			<div class="col-md-12 col-sm-12 mb-50">

				<!--first column-->
				<div class="col-md-4">
					<div class="row">	
						<ul class="staff-list">
							<div class="contact-card">
								<li>
									<p class="module-subtitle-contact2" style="text-align:center"><strong>General Manager</strong></p>
									<p class="small-title-contact3" style="color:black;"><?php the_field('gm1');?><br> <span>gm@ksdt.org</span></p>
									<p class="small-title-contact2" style="color:black;"><?php the_field('gm1-oh');?></p>
								</li>
							</div>


			                <div class="contact-card">
				                <li>
				                	<p class="module-subtitle-contact2" style="text-align:center"> <strong>Programming</strong></p>
				                  	<p class="small-title-contact3" style="color:black;"><?php the_field('programming');?><br> <span>programming@ksdt.org</span></p>
				                  	<p class="small-title-contact2" style="color:black;"><?php the_field('programming-oh');?></p>
				                </li>
			                </div>


			                <div class="contact-card">
				                <li>
				                	<p class="module-subtitle-contact2" style="text-align:center"> <strong>Engineer</strong></p>
				                  	<p class="small-title-contact3" style="color:black;"><?php the_field('engineer1');?><br> <span>engineer@ksdt.org</span></p>
				                  	<p class="small-title-contact2" style="color:black;"><?php the_field('engineer1-oh');?></p>
				                </li>
			                </div>



							  
						</ul>
					</div>
				</div>
				<!--end of first column-->

				<!--second column-->
				<div class="col-md-4">
					<div class="row center">
						<ul class="staff-list">

							<div class="contact-card">
								<li>
									<p class="module-subtitle-contact2" style="text-align:center"><strong>General Manager</strong></p>
									<p class="small-title-contact3" style="color:black;"><?php the_field('gm2');?><br> <span>gm@ksdt.org</span></p>
									<p class="small-title-contact2" style="color:black;"><?php the_field('gm2-oh');?></p>
								</li>
							</div>

							<div class="contact-card">
								<li>
									<p class="module-subtitle-contact2" style="text-align:center"> <strong>Music Director</strong></p>
									<p class="small-title-contact3" style="color:black;"><?php the_field('music_director');?><br> <span>music@ksdt.org</span></p>
									<p class="small-title-contact2" style="color:black;"><?php the_field('music_director-oh');?></p>
								</li>
							</div>

							<div class="contact-card">
								<li>
									<p class="module-subtitle-contact2" style="text-align:center"> <strong>Graphics</strong></p>
									<p class="small-title-contact3" style="color:black;"><?php the_field('graphics');?><br> <span>graphics@ksdt.org</span></p>
									<p class="small-title-contact2" style="color:black;"><?php the_field('graphics-oh');?></p>
								</li>
							</div>


						
						</ul>
					</div>
				</div>
				<!--end of second column-->

				<!--third column-->
				<div class="col-md-4">
					<div class="row">
						<ul class="staff-list">
							<div class="contact-card item7">
								<li>
									<p class="module-subtitle-contact2" style="text-align:center"> <strong>Promotions</strong></p>
									<p class="small-title-contact3" style="color:black;"><?php the_field('promotions');?><br> <span>promotions@ksdt.org</span></p>
									<p class="small-title-contact2" style="color:black;"><?php the_field('promotions-oh');?></p>
								</li>
							</div>

							<div class="contact-card">
								<li>
									<p class="module-subtitle-contact2" style="text-align:center"> <strong>Technology</strong></p>
									<p class="small-title-contact3" style="color:black;"><?php the_field('tech');?><br> <span>webmaster@ksdt.org</span></p>
									<p class="small-title-contact2" style="color:black;"><?php the_field('tech-oh');?></p>
								</li>
							</div>

					

			                <div class="contact-card item9">
				                <li>
				                	<p class="module-subtitle-contact2" style="text-align:center"> <strong>Secretary</strong></p>
				                  	<p class="small-title-contact3" style="color:black;"><?php the_field('secretary');?><br> <span>secretary@ksdt.org</span></p>
				                  	<p class="small-title-contact2" style="color:black;"><?php the_field('secretary-oh');?></p>
				                </li>
			                </div>
          				</ul>
        			</div>
      			</div>

			</div>
		</div>
	</div>
</section>
<!--END OF STAFF MEETINGS-->

<?php
get_sidebar();
get_footer();