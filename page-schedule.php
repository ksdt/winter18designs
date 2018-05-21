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
        /*Use this to debug spinitron request*/
        //echo '<pre>' . var_export($shows, true) . '</pre>';

        if ($shows && $shows['success']) {
            $shows = $shows['results'];
            //sort shows into day of week buckets
            function showCmp($a, $b) {
                return intval(explode(':', $a['OnairTime'])[0]) < intval(explode(':', $b['OnairTime'])[0]) ? -1 : 1;
            }
            $shows = array(
                'Sunday' => array_filter($shows, function($e) {
                    // Checks if the sunday value exists in the array
                    return in_array('Sun', $e['Weekdays']);
                }),
                'Monday' => array_filter($shows, function($e) {
                    return in_array('Mon', $e['Weekdays']);
                }),
                'Tuesday' => array_filter($shows, function($e) {
                    return in_array('Tue', $e['Weekdays']);
                }),
                'Wednesday' => array_filter($shows, function($e) {
                    return in_array('Wed', $e['Weekdays']);
                }),
                'Thursday' => array_filter($shows, function($e) {
                    return in_array('Thu', $e['Weekdays']);
                }),
                'Friday' => array_filter($shows, function($e) {
                    return in_array('Fri', $e['Weekdays']);
                }),
                'Saturday' => array_filter($shows, function($e) {
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
						<p class="module-subtitle">Our schedule is updated quarterly</p>
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
           for($i = 0; $i < $days_of_week; $i++) { ?>
          <li class="nav-item <?php if (jddayofweek($i,0) == date("w")) echo "active";?>">
            <a class="nav-link tab" id="<?php echo jddayofweek($i,1)?>-tab" data-toggle="tab" href="#<?php echo jddayofweek($i,1)?>" role="tab" aria-controls="home" aria-selected="true"><?php echo jddayofweek($i,2)?></a>
          </li>
        <?php } ?>
			</ul>
      <!-- END TABS -->

			<!-- SCHEDULE TAB CONTENT -->
			<div class="tab-content tab-container" id="myTabContent">
				<?php foreach ($shows as $day => $showsDay): ?>
			<div class="tab-pane fade in <?php if ($day == date("l")) echo "active";?>" id="<?php echo $day?>" role="tabpanel">
            <h2 class="tab-title"><?php echo $day?></h2>
            <div class="container-fluid content-container">
            	<div class="row">
	                <div class="col-md-6">
	                <h1 class="tab-header"> Midnight - 2PM </h1>
	                <?php foreach ($showsDay as $show): ?>
	                 	<?php if(!$show) continue; /*if show obj is bad, just skip */ ?>
	                  <?php if($show['OnairTime'] >= 15) break;?>
		                <div class="card">
		              		<div class="card-block">
		                		<h4 class="card-title-am"><span class="time-header"><?php $time = $show['OnairTime'] % 12; if($time == 0) $time = 12; echo $time . $show['OnairTimeAMPM']; ?></span> | <?php echo $show['ShowName']; ?>
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

            <?php if($show['OnairTime'] < 15) continue;?>
            <div class="card">
              <div class="card-block">
                <h4 class="card-title-pm"><span class="time-header"><?php echo $show['OnairTime'] %12 . $show['OnairTimeAMPM']; ?></span> | <?php echo $show['ShowName']; ?></h4>
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


<?php
get_sidebar();
get_footer();