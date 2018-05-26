<?php
/*
    permalink         rewrite
    playlist/41142 => playlist/?playlist=42141

*/
    function get_playlist() {
        include(get_template_directory() . '/inc/SpinPapiConf.inc.php');
        include('../../wp-config.php');
        $sp = new SpinPapiClient($mySpUserID, $mySpSecret, $myStation, true, $papiVersion);
        $sp->fcInit(get_template_directory() . '/.fc');

        $playlist = get_query_var('playlist');
        function isInteger($input) {
            return(ctype_digit(strval($input)));
        }
        if (!isInteger($playlist)) {
            return 'failure';
        } 
        else if ($playlist) {
            $playlistQ = $sp->query(array(
                'method' => 'getPlaylistInfo',
                'PlaylistID' => $playlist
            ));
            if ($playlistQ['success'] && $playlistQ['results']) {
                $playlist = $playlistQ['results'];
                $songs = $sp->query(array(
                    'method' => 'getSongs',
                    'PlaylistID' => $playlist['PlaylistID']
                ))['results'];
            } 
            else 
                return 'failure';
        }
        return $playlist;         
    }
?> 