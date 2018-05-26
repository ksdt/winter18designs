<?php
/**
 * The template for displaying show pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package winter18redesign
 */
get_header(); ?>

<?php
    /*
    permalink              rewrite rule
    /shows/Burger Town  -> show/?showName=Burger Town
    /shows/rtfm         -> show/?showName=rtfm
    spinpapi api: https://spinitron.com/user-guide/pdf/SpinPapi-v2.pdf
    */
    include(get_template_directory() . '/inc/SpinPapiConf.inc.php');
    $sp = new SpinPapiClient($mySpUserID, $mySpSecret, $myStation, true, $papiVersion);
    $sp->fcInit(get_template_directory() . '/.fc');
    $showName = get_query_var('showName');
    if ($showName) { /* if showName exists and isn't blank */
        /* get all shows from spinitron */
        $shows = $sp->query(array(
            'method' => 'getRegularShowsInfo',
            'When' => 'all'
        ));
        //echo '<pre>' . var_export($shows, true) . '</pre>';
        /* if the spiniron request was successful and has results */
        if ($shows['success'] && $shows['results']) {
            $shows = $shows['results']; /* set $shows to the results */
            $show = ''; /* placeholder for our matched show */
            /* search for show by show name */
            $showMatch = 0; /* similar_text returns a higher int if match is closer */
            foreach ($shows as $s) {
                if (similar_text(strtolower($s['ShowName']), strtolower($showName)) > $showMatch) {
                    $show = $s;
                    $showMatch = similar_text(strtolower($s['ShowName']), strtolower($showName));
                }
            }
            /* grab all playlists for matched show */
            $playlistsQ = $sp->query(array(
                'method' => 'getPlaylistsInfo',
                'ShowID' => $show['ShowID'],
                'Num' => 99,
                'EndDate' => date('Y-m-d')
            ));
            $firstPlaylist = array();
            /* parse first playlist to get song information */
            if ($playlistsQ['success'] && $playlistsQ['results']) {
                $firstPlaylist = $sp->query(array(
                        'method' => 'getSongs',
                        'PlaylistID' => $playlistsQ['results'][0]['PlaylistID']
                    ))['results'];
            }
            $allPlaylists = $playlistsQ['results'];
        } else { /* spinitron query failed */
        echo 'spinitron failed';
            status_header( 404 );
     //       get_template_part( 404 ); exit();
        }
    } else { /* showname was blank */
    echo 'no showname';
        status_header( 404 );
       // get_template_part( 404 ); exit();
    }
    function get_times($show) {
        $weekday = DateTime::CreateFromFormat('D', $show['Weekdays'][0]);
        $start = DateTime::CreateFromFormat('G:i:s', $show['OnairTime']);
        $end = DateTime::CreateFromFormat('G:i:s', $show['OffairTime']);
        return $weekday->format('l\s') . ' from ' . $start->format('ga') . '-' . $end->format('ga');
    }
    function timestamp($time) {
        $time = DateTime::CreateFromFormat('G:i:s', $time);
        return $time->format('g:ia');
    }
    function get_djs($show) {
        $string = '';
        if(sizeof($show['ShowUsers'])> 1) {
          $host_str = 'Hosts:';
        }
        else
          $host_str = 'Host:';
        foreach($show['ShowUsers'] as $user) {
            $string .= $user['DJName'] . ' & ';
        }
        return substr($string, 0, -3);
    }
    function get_host_str($show) {
        $string = '';
        if(sizeof($show['ShowUsers'])> 1) {
          $string = 'Hosts:';
        }
        else
          $string = 'Host:';
        return $string;
    }
    function get_random_shows($shows) {
        return array_rand($shows, 10);
    }
?>
  <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="container">
    <!-- SPLASH IMAGE  -->
        <div class="show-hero">
            <div class="section-overlay"></div>
            <div class="page-title">
                <h2 style="font-size: 35px;"><?php echo $show['ShowName']; ?></h2>
                <div class="small-title-Events">
                    <?php echo get_host_str($show);?> <br>
                    <?php echo get_djs($show); ?><br><br>
                    <?php echo get_times($show); ?></div>
        </div>
        </div>


    <!-- Blurb -->
    <section class="about_descr" style="background-color:#353789">
        <div class="container">
            <div class="row center">
                <?php if($show['ShowDescription'] != ''):?>
                <div class="col-md-12 col-sm-12 mt-30 mb-165">
                    <h3 class="dark-section-text" style="line-height: 40px;margin-left: 10%; margin-right:10%;"><?php echo $show['ShowDescription']; ?></h3>
                </div>
            <?php endif?>
            </div>
        </div>
    </section>

    <div class="blackbg" style="background-color: black;">

        <h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: white;text-align: center;padding-top: 10px;"><strong>Most Recent Show</strong>
        </h2>

    <!-- Recent Playlist Slider -->
    <div class="autoplay">
        <?php foreach($firstPlaylist as $song): ?>
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title-am"><span class="time-header"style="font-style: italic; "><?php echo $song['SongName'];  ?></span> | <?php echo timestamp($song['Timestamp']); ?>
                    </h4>
                    <div class="cardContent inline">
                        <h6 class="card-subtitle mb-2 text-muteds">by <?php echo $song['ArtistName']; ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

        <h2 class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: white;text-align: center;"><strong>All Playlists</strong>
        </h2>

    <div class="autoplay1">
        <?php foreach ($allPlaylists as $playlist): 
                //TODO: style this h4 to be only as long as the text?>
                <h4 class="card-title-am"><span class="time-header"><?php echo $playlist['PlaylistDate']; ?>
                </span></h4>
        <?php endforeach; ?>
    </div>







</div>

<script type="text/javascript">
        jQuery(document).ready(function(){
            //I think this needs to be wrapped in a function or something to take the text from each h4
            jQuery(".card-title-am").click(function() {
              jQuery.ajax({
                type: "GET",
                url: <?php admin_url( 'admin-ajax.php' );?>,
                data: {
                  playlist_id: //this is the playlist id from $playlist (the one in the for loop)
                  playlist_date: //This is the date text from the slider
                },
                dataType: 'json',
                sucess: function(data) {
                  alert("success");
                }
              });              }
            });




            jQuery('.autoplay').slick({
              initialSlide:  0,
              slidesToShow: 3,
              slidesToScroll: 1,
              centerMode: false,
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
            jQuery('.autoplay1').slick({
              initialSlide:  0,
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
<?php
get_sidebar();
get_footer();