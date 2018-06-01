<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package winter18redesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Fontawesome-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Border -->
	<span class="frame-line right-frame visible-lg"></span>
	<span class="frame-line bottom-frame visible-lg"></span>
	<span class="frame-line left-frame visible-lg"></span>

<header class="site-header">
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
		      	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		      		<img src="<?php echo get_template_directory_uri();?>/img/Logos/LOGO.png" width="80" alt="KSDT">
		      	</a>
		      	<div id="player-desktop"class="player">
		          <i class="fa fa-play" aria-hidden="true"></i>
		          <span class="live-circle"></span>
		          <span class="listen">LIVE</span>
		          <div class="show-info">
		            <a href=""><span class="show-name"></span></a>
		            <span class="show-djs"></span>
          		  </div>
      			</div>
	    	</div>
	    
	


		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav navbar-right">
		    		<!--php code to nativly get the menu items and find the current
		    			page to color the link underneath-->

					<?php $main_menu = wp_get_nav_menu_items('Main'); ?>
			        	<?php foreach ((array) $main_menu as $key => $menu_item): ?>
			        	<?php
			            $title = $menu_item->title;
			            $url = $menu_item->url;
			            ?>
		            	<li class="nav-item">
		              		<a href="<?php echo $url; ?>"><?php echo $title; ?></a>
		            	</li>
			          <?php endforeach; ?>
			          <li id="tune-in"class="nav-item">
			          	<a href="https://tunein.com/radio/KSDT-s18746/">TuneIn</a>
			          </li>
			          <li id="listen-live-li"class="nav-item">
			          	<a href="https://ksdt.ucsd.edu/listen/stream.mp3">Listen Live</a>
			          </li>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
	<!-- End nav bar -->
</header>

	<!-- BACK TO TOP -->
	<a id="top"></a>
	<div id="back-to-top">
		<img src="<?php echo get_template_directory_uri();?>/img/Home/back-to-top.png" id="topImg-home" onclick="topFunction()"></img>
	</div>
	
	<div id="content" class="site-content">