<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">

<nav id="menu" role="navigation">
<!--<div id="search">
<?php// get_search_form();; ?>

</div>-->


<!-- ////////////////////------------------////////////////////////--->
						<!-- DESKTOP MENU -->
<!-- ////////////////////------------------////////////////////////--->
<div class="desktop-menu">
	<a href="" class="logo-wrapper">
		<img src="" alt="logo"/>
	</a>
	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</div>
<!-- ////////////////////------------------////////////////////////--->
						<!-- MOBILE MENU -->
<!-- ////////////////////------------------////////////////////////--->
<div class="mobile-menu">
	<div class="mobile-nav-header">
		<a href="" class="logo-wrapper">
			<img src="" alt="logo"/>
		</a>
		<div class="hamburger-wrapper">
			<button class="hamburger hamburger--spin" type="button">
			  <span class="hamburger-box">
			    <span class="hamburger-inner"></span>
			  </span>
			</button>
		</div>
	</div>
	<div class="mobile-menu-wrapper">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
	
</div>
</nav>
</header>
<div id="container">