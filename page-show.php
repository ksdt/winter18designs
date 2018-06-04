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

        <audio controls src="https://ksdt.ucsd.edu/playlists/<?php echo $allPlaylists[0]['PlaylistID']  . '.mp3' ?>"style="width:50%;">
            Your browser does not support the <code>audio</code> element.
        </audio>
            




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
                <h4 id="<?php echo $playlist['PlaylistID']?>"class="card-title-am old_playlist"><span id="<?php echo $playlist['PlaylistDate']; ?>"class="time-header"><?php echo $playlist['PlaylistDate']; ?>
                </span></h4>
        <?php endforeach; ?>
    </div>

    	
    	<!--This is where ajax content goes-->
<div id="loading"class="lds-css ng-scope"style="display:none;"><div style="width:100%;height:100%;margin: 0 auto;" class="lds-ripple"><div></div><div></div></div><style type="text/css">@keyframes lds-ripple {
  0% {
    top: 96px;
    left: 96px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 18px;
    left: 18px;
    width: 156px;
    height: 156px;
    opacity: 0;
  }
}
@-webkit-keyframes lds-ripple {
  0% {
    top: 96px;
    left: 96px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 18px;
    left: 18px;
    width: 156px;
    height: 156px;
    opacity: 0;
  }
}
.lds-ripple {
  position: relative;
}
.lds-ripple div {
  box-sizing: content-box;
  position: absolute;
  border-width: 4px;
  border-style: solid;
  opacity: 1;
  border-radius: 50%;
  -webkit-animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;

}
.lds-ripple div:nth-child(1) {
  border-color: #a00d1e;
}
.lds-ripple div:nth-child(2) {
  border-color: #a00d1e;
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s;
}
.lds-ripple {
  width: 200px !important;
  height: 200px !important;
  -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
  transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
}
</style></div>





    <h2 id="playlistHeading"class="section-title-3 dark-section-text mb-25" style="font-size:40px; color: white;text-align: center;"><strong id="playlistDate"></strong>
    </h2>



    <!-- Player Goes Here-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/plyr.css'; ?>" type="text/css" />

  <div id="playlistPlayer">
    
  </div>
            



    <div class="autoplay2">
        
    </div>


<script src="<?php echo get_template_directory_uri()?>/js/show.js"></script>

</div>

</div>
<?php
get_sidebar();
get_footer();