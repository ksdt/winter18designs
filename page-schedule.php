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
<?php

        include(get_template_directory() . '/inc/SpinPapiConf.inc.php');

        $sp = new SpinPapiClient($mySpUserID, $mySpSecret, 'ksdt', true, $papiVersion);
        $sp->fcInit(get_template_directory() . '/.fc');

        $shows = $sp->query(array(
            'method' => 'getRegularShowsInfo',
            'When' => 'all'
        ));
        //echo '<pre>' . var_export($shows, true) . '</pre>';

        if ($shows && $shows['success']) {
            $shows = $shows['results'];
            //sort shows into day of week buckets
            function showCmp($a, $b) {
                return intval(explode(':', $a['OnairTime'])[0]) < intval(explode(':', $b['OnairTime'])[0]) ? -1 : 1;
            }
            $shows = array(
                'Sun' => array_filter($shows, function($e) {
                    // Checks if the sunday value exists in the array
                    return in_array('Sun', $e['Weekdays']);
                }),
                'Mon' => array_filter($shows, function($e) {
                    return in_array('Mon', $e['Weekdays']);
                }),
                'Tue' => array_filter($shows, function($e) {
                    return in_array('Tue', $e['Weekdays']);
                }),
                'Wed' => array_filter($shows, function($e) {
                    return in_array('Wed', $e['Weekdays']);
                }),
                'Thu' => array_filter($shows, function($e) {
                    return in_array('Thu', $e['Weekdays']);
                }),
                'Fri' => array_filter($shows, function($e) {
                    return in_array('Fri', $e['Weekdays']);
                }),
                'Sat' => array_filter($shows, function($e) {
                    return in_array('Sat', $e['Weekdays']);
                }),
            );
            foreach ($shows as &$dayOfWeek) {
                usort($dayOfWeek, 'showCmp');
                foreach($dayOfWeek as &$show) {
                    /* process time to human output */
                    $show['OnairTimeAMPM'] = 'am';
                    if (intval(explode(':', $show['OnairTime'])[0]) > 12) {
                        $show['OnairTimeAMPM'] = 'pm';
                        $show['OnairTime'] = intval(explode(':', $show['OnairTime'])[0]) - 12;
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
                }
            }
        }
        function djs($a) {
            return $a['DJName'];
        }
    ?>
    	<!-- Schedule -->
	<section class="about_descr mt-100">
		<div class="container">
			<div class="row center">
				<div class="col-md-8 col-md-offset-2 col-sm-12">
					<div class="section-title">
            <h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: black">WEEKLY SCHEDULE</h2>
						<!--<h2 class="mb-50">Weekly Schedule</h2>-->
						<p class="module-subtitle">Our schedule is updated quarterly.</p>
            <div class="km-space"></div>

					</div>
				</div>
			</div>
		</div><!-- end container -->

		<!-- TABS AT THE TOP -->
		<div class="container">
			<ul class="nav nav-tabs nav-tab-container" id="myTab" role="tablist">
			  <?php 
        $days_of_week = 7;
        echo $days_of_week;
           for($i = 0; $i < $days_of_week; $i++) { ?>
          <li class="nav-item">
            <a class="nav-link tab" id="<?php echo jddayofweek($i,2)?>-tab" data-toggle="tab" href="#<?php echo jddayofweek($i,2)?>" role="tab" aria-controls="home" aria-selected="true"><?php echo jddayofweek($i,2)?></a>
          </li>
        <?php } ?>
			</ul>
      <!-- END TABS -->

			<!-- SCHEDULE TAB CONTENT -->
			<div class="tab-content tab-container" id="myTabContent">
				<?php foreach ($shows as $day => $showsDay): ?>
			<div class="tab-pane fade in" id="<?php echo $day?>" role="tabpanel">
            <h2 class="tab-title"><?php echo $day?></h2>
            <div class="container-fluid content-container">
            	<div class="row">
                <div class="col-md-6">
                <h1 class="tab-header"> Midnight - 2PM </h1>
                <?php foreach ($showsDay as $show): ?>
                 	<?php if(!$show) continue; /*if show obj is bad, just skip */ ?>
                  <?php if($show['OnairTime'] == 3 && $show['OnairTimeAMPM'] === "pm") break;?>
	                <div class="card">
	              		<div class="card-block">
	                		<h4 class="card-title-am"><span class="time-header"><?php echo $show['OnairTime'] . $show['OnairTimeAMPM']; ?></span> | <?php echo $show['ShowName']; ?>
	                		</h4>
	                		<div class="cardContent inline">
	                     		<h6 class="card-subtitle mb-2 text-muteds"><?php echo $show['djs']; ?></h6>
	                     		<p><?php echo $show['ShowDescription']; ?></p> 
	                		</div>
	              		</div>
	            </div>
	            <?php endforeach; ?>
          </div>
          <div class="col-md-6">
            <h1 class="tab-header"> 3PM - 11PM </h1>
            <?php foreach ($showsDay as $show): ?>
            <?php if(!$show) continue; /*if show obj is bad, just skip */ ?>

            <?php if($show['OnairTime'] < 3 || $show['OnairTimeAMPM'] === "am" || $show['OnairTime'] == 12) continue; /*inelegant way of filtering the shows */ ?>
            <div class="card">
              <div class="card-block">
                <h4 class="card-title-pm"><span class="time-header"><?php echo $show['OnairTime'] . $show['OnairTimeAMPM']; ?></span> | <?php echo $show['ShowName']; ?></h4>
                  <div class="cardContent inline">
                     <h6 class="card-subtitle mb-2 text-muteds"><?php echo $show['djs'] . " | " . $show['ShowCategory']; ?></h6>
                     <p><?php echo $show['ShowDescription']; ?></p> 
                </div> 
              </div>
            </div>
            <?php endforeach; ?>

        </div>
        </div>
		</div>
		</div>
      <?php endforeach; ?>

	</section>

  <!-- LAST DIVIDER -->
  <div class="top-right-separator hidden-xs"></div>
    <div class="container">
      <div class="row center">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
          <div class="section-title-parralax">
            <div class="process-numbers-home3">KSDT</div>
            <h2 style="color:#D63B80">KSDT</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- END LAST DIVIDER -->
<!-- Script to make tabs active according to day of the week -->
<script>  
  var d = new Date();
  var weekday = new Array(7);
  weekday[0] = "Sun";
  weekday[1] = "Mon";
  weekday[2] = "Tue";
  weekday[3] = "Wed";
  weekday[4] = "Thu";
  weekday[5] = "Fri";
  weekday[6] = "Sat";

  var n = weekday[d.getDay()];

  var tabs = document.getElementsByClassName("nav-item");
  var tabContent = document.getElementsByClassName("tab-pane");
  console.log("day: "  + n);
  switch(n) {
  	case "Sun":
  		tabs[0].className += " active";
  		tabContent[0].className += " active";
  		break;
   	case "Mon":
  		tabs[1].className += " active";
  		tabContent[1].className += " active";
  		break;
   	case "Tue":
  		tabs[2].className += " active";
  		tabContent[2].className += " active";
  		break;
   	case "Wed":
  		tabs[3].className += " active";
  		tabContent[3].className += " active";
  		break;
   	case "Thu":
  		tabs[4].className += " active";
  		tabContent[4].className += " active";
  		break;
   	case "Fri":
  		tabs[5].className += " active";
  		tabContent[5].className += " active";
  		break;
   	case "Sat":
  		tabs[6].className += " active";
  		tabContent[6].className += " active";
  		break;
  	 	
  }
	/*for(var i = 0; i < tabs.length; i++) {
	  if(tabContent[i].id == n) {
	    console.log(n);
	    tabs[i].className += " active";
	    tabContent[i].className += " active";
	  }
	}*/
</script>

<?php
get_sidebar();
get_footer();