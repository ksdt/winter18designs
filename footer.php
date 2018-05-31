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
    		<div class="egg"style="transform: inherit; opacity: 1;">
		<img src="<?php //echo get_template_directory_uri() . '/van.png'; ?>"scale="0">
	</div>
  	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	var egg = 0;
	jQuery('.egg img').click(function() {
		if (egg == 0) {
			jQuery('.egg img').parent().css({
				'transform': 'inherit',
				'opacity': 1
			});
			egg++;
			return;
		}
		var eggElem = jQuery('.egg img');
		eggElem.css('transform', 'translateX(-' + (egg * (jQuery(document).width() / 3)) + 'px)');
		egg++;
		if (egg == 4) {
			console.log("HERE");
			setTimeout(function() {
				window.location.href = "https://www.youtube.com/watch?v=9Yrt9qkBQ2Q";
			}, 400);
		}

	});
</script>

<script>
	function updateShowInfo() {
		jQuery.getJSON('./radio-data')
			.done(function(data) {
				if (data.success && !data.results) {
					console.log(data);
					jQuery('.player .show-name').text('Rotation');
					jQuery('.player .show-djs').text('rotation');
					jQuery('.player .show-name')
						.parent().css('pointer-events', 'none')
				} else {
					jQuery('.player .show-name').text(data.results[0].ShowName);
					var djs =
							data
								.results[0]
								.ShowUsers
								.map(function(x) { return x['DJName']; })
								.join(' & ');
					jQuery('.player .show-djs').text(djs);
					jQuery('.player .show-name')
						.parent().css('pointer-events', 'all')
					jQuery('.player .show-name')
						.parent()
						.attr('href', 'show/' + jQuery('.player .show-name').text())
				}

			})
	} updateShowInfo();

    jQuery('header.site-header').on('click', '.player i.fa-play', function(e) {
        AudioHandler.play();
    });

    jQuery('header.site-header').on('click', '.player i.fa-pause', function(e) {
        AudioHandler.pause();
    });




    var AudioHandler = {
        _isPlaying: false,
        _audioSource: 'https://ksdt.ucsd.edu/stream.mp3',
        _audio: null,
        _draw: null,
        _elem: jQuery('div.player'),
        pause: function() {
            this._analyser.audio.pause();
            this._elem
                    .find('i')
                    .removeClass('fa-pause')
                    .addClass('fa-play');
        },
        play: function() {
            try {
                if (this._analyser && this._analyser.audio) {
                    var _this = this;
                    var latestBufPoint = this._analyser.audio.buffered.length;
                    latestBufPoint = this._analyser.audio.buffered.end(latestBufPoint - 1);
                    this._analyser.audio.currentTime = latestBufPoint;
                    this._analyser.audio.play();
                    this._elem.find('i').removeClass('fa-play');
                    this._elem.find('i').addClass('fa-spinner fa-spin');
                    jQuery(this._audio).one('playing', function(e) {
                        _this._elem.find('i')
                        .removeClass('fa-spinner fa-spin')
                        .addClass('fa-pause');
                    });
                } else {
                    this._audio = new Audio(this._audioSource);
					this._audio.crossOrigin = "anonymous";
 
                    this._elem.find('i').removeClass('fa-play');
                    this._elem.find('i').addClass('fa-spinner fa-spin');
                    jQuery(this._audio).one('playing', function(e) {
                        _this._elem.find('i')
                        .removeClass('fa-spinner fa-spin')
                        .addClass('fa-pause');
                    });
                }
            } catch (e) {
                console.log(e);
            }
        },
    };
</script>


</body>
</html>
    