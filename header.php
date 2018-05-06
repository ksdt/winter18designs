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
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--Border rules, clips stuff currently
	<span class="frame-line right-frame visible-lg"></span>
	<span class="frame-line bottom-frame visible-lg"></span>
	<span class="frame-line left-frame visible-lg"></span> -->
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri();?>/img/Logos/LOGO.png" width="80" alt="KSDT">
		</div><!-- .site-branding TODO: Instead of hard coding the header pages, integrate wp_menu with the CSS-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav navbar-right">
				<li class="active-nav"><a href="index.html">Home</a></li>
				<li><a href="http://local.wordpress.test/?page_id=4">About</a></li>
				<li><a href="html/Events.html">Events</a></li>
				<li><a href="html/schedule.html">Schedule</a></li>
				<li><a href="html/contact.html">Contact</a></li>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'winter18redesign' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
