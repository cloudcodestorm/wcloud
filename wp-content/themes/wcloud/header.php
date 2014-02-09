<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage W_Cloud
 * @since W Cloud 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom.css" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="loginDiv">
	<div class="loginCenter">
		<form class="loginForm">
	
		<?php echo do_shortcode('[wp-members page="login"]'); ?>
			<!--<input type="text" class="username" value="" placeholder="Username"/>
			<input type="password" class="password" value="" placeholder="Password"/>
			<input type="submit" class="loginButton" value="Login" />-->
		</form>
	</div>
</div>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		<div id="logo-head">
		<div class="logo-placeholder">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/headers/logo.png" titel="logo" alt="logo"/>
			</a></div>
			<div id="banner_title">World's Smartest Cloud Backup</div>
			<div id="banner_subtitle">With a Mission to Helping Children</div>

</div>
<!-- scroll scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
	<!-- scroll scripts -->
					<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'wcloud' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'wcloud' ); ?>"><?php _e( 'Skip to content', 'wcloud' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->	<div class="bannerImg"><img src="/wp-content/uploads/2014/01/banner123.png"></div>			
			</div><!-- #navbar -->				
		</header><!-- #masthead -->		
		<div id="bgbanner"></div>           <?php if(is_front_page()) { ?>
 <div class="serial-key">
<form role="serialkey" method="post" class="search-form" action="action.php">				
	<label>	<input type="text" class="serialKeyText" placeholder="Enter Serial Number here" name="keytext" title="keytext" />	</label>
<input type="submit" class="serialKeyButton" value="Go" />				</form>			</div>
<div class="serialcontent"> Purchased the W Cloud Gift Card? Enter your Serial Key here.<br> Otherwise go to ORDER  tp purchase  the W CLOUD online.</div>
<?php } ?>



		<div id="main" class="site-main">
